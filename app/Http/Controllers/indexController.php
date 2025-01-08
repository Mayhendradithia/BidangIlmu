<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Kategori;
use App\Models\Konfigurasi;
use App\Models\Materi;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    public function index(Request $request)
{
    $konfigurasi = Konfigurasi::first();
    $mitra = Mitra::all();
    $kategori = Kategori::all();  // Pastikan kategori diambil
    $benefit = Benefit::all();
    $user = Auth::user();
    $materi = Materi::all();

    // Cek jika ada kategori yang dipilih dari URL

    // Jika ada kategori yang dipilih, filter materi berdasarkan kategori

    return view('index', compact('user', 'konfigurasi', 'mitra', 'benefit', 'kategori', 'materi'));
}



    public function materi($id)
    {
        // Cari data materi berdasarkan ID
        $materi = Materi::findOrFail($id);

        // Ambil data user yang sedang login
        $user = Auth::user();

        // Kirim data materi dan user ke view
        return view('materi', compact('materi', 'user'));
    }

    public function showKategori($id)
    {
        // Ambil kategori berdasarkan ID
        $kategori = Kategori::findOrFail($id);

        // Ambil semua materi terkait kategori ini
        $materis = Materi::where('kategori_id', $id)->get();

        // Kirim data kategori dan materi ke view
        return view('kategori.show', compact('kategori', 'materis'));
    }
}
