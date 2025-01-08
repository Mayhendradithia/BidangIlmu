<?php

namespace App\Http\Controllers;


use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class courseViewController extends Controller
{
    public function courseOverview($id)
    {
        // Ambil data user yang sedang login
        $user = Auth::user();
        
        // Ambil materi berdasarkan ID beserta relasi kategori
        $materi = Materi::with('kategori')->findOrFail($id);
        
        // Kirim data materi dan user ke view
        return view('courseOverview', compact('user', 'materi'));
    }
    
}
