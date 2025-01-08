<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    /**
     * Menampilkan form profil pengguna.
     *
     * @return \Illuminate\View\View
     */
    public function showProfile()
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        return view('profile', compact('user'));
    }

    /**
     * Memperbarui profil pengguna.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'old_password' => 'required|current_password', // Validasi password lama
            'password' => 'nullable|min:8|confirmed', // Validasi password jika diisi
        ]);

        // Update data pengguna
        $user->name = $request->name;
        $user->email = $request->email;

        // Jika password diisi, update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password); // Enkripsi password menggunakan Hash
        }

        $user->save(); // Simpan perubahan

        return redirect()->route('index')->with('success', 'Profil berhasil diperbarui!');
    }
}
