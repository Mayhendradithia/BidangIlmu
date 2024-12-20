<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
{
    $users = User::all(); // Ambil semua data user
    return view('admin.dataUser.index', compact('users'));
}

public function edit($id)
{
    $user = User::findOrFail($id); // Ambil data user berdasarkan ID
    return view('admin.dataUser.verifyPassword', compact('user')); // Tampilkan form verifikasi password
}

public function verifyPassword(Request $request, $id)
{
    // Validasi input password
    $request->validate([
        'password' => 'required|string',
    ]);

    // Ambil data user berdasarkan ID
    $user = User::findOrFail($id);

    // Verifikasi apakah password admin cocok dengan password yang ada di database
    if (Hash::check($request->password, auth()->user()->password)) {
        // Jika password cocok, lanjutkan ke form edit user
        return redirect()->route('user.editForm', $user->id);
    } else {
        // Jika password salah, beri notifikasi
        return back()->withErrors(['password' => 'Password tidak cocok. Anda tidak dapat mengubah data akun ini.']);
    }
}


public function editForm($id)
{
    $user = User::findOrFail($id); // Ambil data user
    return view('admin.dataUser.edit', compact('user')); // Tampilkan form edit
}


public function update(Request $request, $id)
{
    $user = User::findOrFail($id); // Ambil data user berdasarkan ID

    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $id,
        'password' => 'nullable|min:6|confirmed', // Validasi password jika diisi
    ]);

    // Update data user
    $user->name = $request->name;
    $user->email = $request->email;

    // Jika password diisi, update password
    if ($request->filled('password')) {
        $user->password = bcrypt($request->password); // Enkripsi password
    }

    $user->save(); // Simpan perubahan

    return redirect()->route('admin.users')->with('success', 'User updated successfully');
}




}
