<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Kategori;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    // Menampilkan daftar materi
    public function index()
    {
        $materis = Materi::with('kategori')->get();
        return view('admin.materi.index', compact('materis'));
    }

    // Menampilkan materi gratis dan berbayar (filter)
    public function filterMateri($type)
    {
        if ($type === 'gratis') {
            $materis = Materi::gratis()->with('kategori')->get();
        } elseif ($type === 'berbayar') {
            $materis = Materi::berbayar()->with('kategori')->get();
        } else {
            abort(404, 'Tipe materi tidak valid.');
        }

        return view('admin.materi.filter', compact('materis', 'type'));
    }

    // Menampilkan form tambah materi
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.materi.create', compact('kategoris'));
    }

    // Menyimpan materi ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'kategori_id' => 'required|integer',
            'overview' => 'required|string',
            'benefit' => 'required|string',
            'deskripsi' => 'required|string',
            'url_video' => 'required|url',
            'payment' => 'nullable|string',
            'password' => 'nullable|string',
            'price' => 'nullable|int',  // Menggunakan 'price' sebagai pengganti 'harga'
            'is_premium' => 'nullable|boolean', // Memastikan ini nullable dan boolean
        ]);
        
        $benefits = explode(',', $request->benefit);
        
        // Tentukan payment default
        $payment = $request->payment;
        if (empty($payment) && empty($request->password)) {
            $payment = 'Free';
        }
        
        // Simpan materi baru ke database
        Materi::create([
            'title' => $request->title,
            'kategori_id' => $request->kategori_id,
            'overview' => $request->overview,
            'benefit' => implode(',', $benefits),
            'deskripsi' => $request->deskripsi,
            'url_video' => $request->url_video,
            'payment' => $payment,
            'password' => $request->password,
            'price' => $request->price, // Menggunakan 'price' bukan 'harga'
            'is_premium' => $request->has('is_premium') ? $request->is_premium : false, // Pastikan jika tidak ada nilai maka default false
        ]);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil ditambahkan!');
    }

    // Menampilkan form edit materi
    public function edit(Materi $materi)
    {
        $kategoris = Kategori::all();
        return view('admin.materi.edit', compact('materi', 'kategoris'));
    }

    // Memperbarui data materi
    public function update(Request $request, Materi $materi)
    {
        $request->validate([
            'title' => 'required|string',
            'kategori_id' => 'required|integer',
            'overview' => 'required|string',
            'benefit' => 'required|string',
            'deskripsi' => 'required|string',
            'url_video' => 'required|url',
            'payment' => 'nullable|string',
            'password' => 'nullable|string|min:8',
            'price' => 'nullable|int', // Menggunakan 'price' sebagai pengganti 'harga'
            'is_premium' => 'nullable|boolean', // Memastikan ini nullable dan boolean
        ]);

        $benefits = explode(',', $request->benefit);

        // Tentukan payment default
        $payment = $request->payment;
        if (empty($payment) && empty($request->password)) {
            $payment = 'Free';
        }

        // Update materi
        $materi->update([
            'title' => $request->title,
            'kategori_id' => $request->kategori_id,
            'overview' => $request->overview,
            'benefit' => implode(',', $benefits),
            'deskripsi' => $request->deskripsi,
            'url_video' => $request->url_video,
            'payment' => $payment,
            'password' => $request->password,
            'price' => $request->price, // Menggunakan 'price' bukan 'harga'
            'is_premium' => $request->has('is_premium') ? $request->is_premium : false, // Pastikan jika tidak ada nilai maka default false
        ]);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil diperbarui!');
    }

    // Menghapus materi
    public function destroy(Materi $materi)
    {
        $materi->delete();
        return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus!');
    }
}
