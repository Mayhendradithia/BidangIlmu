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
            'password' => 'nullable|string|min:8',
            'price' => 'nullable|integer',
            'is_premium' => 'nullable|boolean',
        ]);

        $benefits = explode(',', $request->benefit);

        // Tentukan default untuk kolom optional
        $payment = $request->payment ?? 'Free';
        $price = $request->price ?? 0;
        $isPremium = $request->is_premium ?? false;

        Materi::create([
            'title' => $request->title,
            'kategori_id' => $request->kategori_id,
            'overview' => $request->overview,
            'benefit' => implode(',', $benefits),
            'deskripsi' => $request->deskripsi,
            'url_video' => $request->url_video,
            'price' => $request->price ?? null,
            'is_premium' => $request->is_premium ?? false,
            'payment' => $request->payment ?? 'Free',
            'password' => $request->password ?? null,
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
            'price' => 'nullable|integer',
            'is_premium' => 'nullable|boolean',
        ]);

        $benefits = explode(',', $request->benefit);

        // Tentukan default untuk kolom optional
        $payment = $request->payment ?? $materi->payment;
        $price = $request->price ?? $materi->price;
        $isPremium = $request->is_premium ?? $materi->is_premium;

        $materi->update([
            'title' => $request->title,
            'kategori_id' => $request->kategori_id,
            'overview' => $request->overview,
            'benefit' => implode(',', $benefits),
            'deskripsi' => $request->deskripsi,
            'url_video' => $request->url_video,
            'payment' => $payment,
            'password' => $request->password,
            'price' => $price,
            'is_premium' => $isPremium,
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
