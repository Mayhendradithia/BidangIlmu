<?php

namespace App\Http\Controllers;

use App\Models\benefit;
use App\Models\Konfigurasi;
use App\Models\Materi;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    public function index()
    {
        $konfigurasi = Konfigurasi::first();
        $mitra = Mitra::all();

        $benefit = benefit::all();
        $user = Auth::user();

        return view('index', compact('user', 'konfigurasi', 'mitra', 'benefit',));
    }

    public function materi($id)
    {
        // Cari data materi berdasarkan ID
        $materi = Materi::findOrFail($id);

        // Ambil data user yang sedang login
        $user = Auth::user();

        // Kirim data materi dan user ke view (misalnya ke view 'materi')
        return view('materi', compact('materi', 'user'));
    }
}
