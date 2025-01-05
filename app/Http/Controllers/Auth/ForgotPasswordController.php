<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password as FacadesPassword;
use Illuminate\Validation\ValidationException;

class ForgotPasswordController extends Controller
{
    // Menampilkan form forgot password
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    // Mengirimkan link reset password ke email pengguna
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Kirim email reset password
        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', 'Kami telah mengirimkan tautan reset kata sandi ke email Anda!');
        }

        return back()->withErrors(['email' => 'Terjadi kesalahan, email tidak ditemukan.']);
    }


    // Menampilkan form reset password
    public function showResetPasswordForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    // Proses reset password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                ])->save();
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('index')->with('status', 'Kata sandi Anda berhasil direset!');
        }
        
        return back()->withErrors(['email' => 'Failed to reset password.']);
    }
}
