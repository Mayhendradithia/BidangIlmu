<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class courseViewController extends Controller
{
    // Menampilkan materi gratis
    public function courseFree($id)
    {
        $materi = Materi::with('kategori')->findOrFail($id);
        return view('courseOverview', compact('materi'));
    }



    // Menampilkan materi berdasarkan status premium
    public function show($id)
    {
        $materi = Materi::findOrFail($id);
    
        if ($materi->is_premium) {
            // Jika premium, arahkan ke form password
            return redirect()->route('premium.form', ['materi' => $id]);
        } else {
            // Jika gratis, langsung tampilkan materi
            return $this->courseFree($id);
        }
    }

    // Menampilkan form password untuk materi premium
    public function showPasswordForm($id)
    {
        $materi = Materi::findOrFail($id);
        return view('premium.form', compact('materi'));
    }

    // Proses validasi password materi premium
    public function processOTP(Request $request, $id)
{
    $materi = Materi::findOrFail($id);

    // Validasi input password
    $request->validate([
        'password' => 'required|string|min:8',
    ]);

    // Cek apakah password yang dimasukkan cocok dengan password materi
    if ($request->password === $materi->password) {
        // Simpan akses materi untuk pengguna tertentu
        session()->put("access_granted_{$id}_user_" . auth()->id(), true);

        // Arahkan ke halaman materi premium
        return redirect()->route('premium.show', ['id' => $id]);
    }

    // Jika password salah, kembali ke form password
    return redirect()->route('premium.form', ['id' => $id])
                     ->with('error', 'Password salah. Silakan coba lagi.');
}


    // Menampilkan materi premium setelah autentikasi berhasil
    public function showPremium($id)
{
    // Periksa apakah akses telah diberikan untuk pengguna yang sedang login
    if (!session()->has("access_granted_{$id}_user_" . auth()->id())) {
        return redirect()->route('premium.form', ['id' => $id])
                         ->with('error', 'Silakan masukkan password untuk mengakses materi.');
    }

    $materi = Materi::with('kategori')->findOrFail($id);
    return view('premium.show', compact('materi'));
}



    
    
}
