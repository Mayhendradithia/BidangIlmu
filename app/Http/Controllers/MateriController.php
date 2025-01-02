<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MateriController extends Controller
{
    // Menampilkan daftar materi
    public function index()
    {
        $materis = Materi::with('kategori')->get();
        return view('admin.materi.index', compact('materis'));
    }

    public function show($id)
    {
        // Ambil data materi berdasarkan ID beserta kategorinya
        $materi = Materi::with('kategori')->findOrFail($id);

        // Kirim data ke view
        return view('courseOverview', compact('materi'));
    }


    // Menampilkan form tambah materi
    public function create()
    {
        $kategoris = Kategori::all(); // Ambil semua kategori
        return view('admin.materi.create', compact('kategoris'));
    }

    // Menyimpan materi ke database
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'kategori_id' => 'required',
        'overview' => 'required',
        'benefit' => 'required',
        'deskripsi' => 'required',
        'url_video' => 'required|url',
    ]);

    // Proses benefit supaya jadi array
    $benefits = explode(',', $request->benefit);

    // Simpan ke database
    Materi::create([
        'title' => $request->title,
        'kategori_id' => $request->kategori_id,
        'overview' => $request->overview,
        'benefit' => implode(',', $benefits), // Simpan dalam format string dengan koma
        'deskripsi' => $request->deskripsi,
        'url_video' => $request->url_video,
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
        'title' => 'required',
        'kategori_id' => 'required',
        'overview' => 'required',
        'benefit' => 'required',
        'deskripsi' => 'required',
        'url_video' => 'required|url',
    ]);

    // Memastikan benefit dikirim sebagai array, kemudian diubah menjadi string dengan implode
    $benefits = explode(',', $request->benefit); // Mengubah benefit menjadi array

    $materi->update([
        'title' => $request->title,
        'kategori_id' => $request->kategori_id,
        'overview' => $request->overview,
        'benefit' => implode(',', $benefits), // Menyimpan sebagai string dengan koma
        'deskripsi' => $request->deskripsi,
        'url_video' => $request->url_video,
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
