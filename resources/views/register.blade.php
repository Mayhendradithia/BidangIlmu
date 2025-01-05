@extends('layout')
@section('content')

<main id="content" role="main">
  <!-- Form -->
  <div class="container content-space-3 content-space-t-lg-4 content-space-b-lg-3">
    <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
      <!-- Heading -->
      <div class="text-center mb-5 mb-md-7">
        <h1 class="h2">Daftar</h1>
        <p>Isi formulir untuk memulai.</p>
      </div>
      <!-- End Heading -->

      <!-- Form -->
      <form action="{{ route('register') }}" method="POST" novalidate>
        @csrf <!-- Tambahkan CSRF Token untuk keamanan -->
      
        <!-- Form -->
        <div class="mb-3">
          <label class="form-label" for="name">Nama Pengguna</label>
          <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Nama Anda" aria-label="name" required>
          <span class="invalid-feedback">Harap masukkan Nama Pengguna yang valid.</span>
        </div>
        <!-- End Form -->
      
        <!-- Form -->
        <div class="mb-3">
          <label class="form-label" for="signupSimpleSignupEmail">Email Anda</label>
          <input type="email" class="form-control form-control-lg" name="email" id="signupSimpleSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
          <span class="invalid-feedback">Harap masukkan alamat email yang valid.</span>
        </div>
        <!-- End Form -->
      
        <!-- Form -->
        <div class="mb-3">
          <label class="form-label" for="signupSimpleSignupPassword">Kata Sandi</label>
          <div class="input-group input-group-merge" data-hs-validation-validate-class>
            <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSimpleSignupPassword" placeholder="8+ karakter diperlukan" aria-label="8+ karakter diperlukan" required>
            <a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;"></a>
          </div>
          <span class="invalid-feedback">Kata sandi Anda tidak valid. Harap coba lagi.</span>
        </div>
        <!-- End Form -->
      
        <!-- Form -->
        <div class="mb-3">
          <label class="form-label" for="signupSimpleSignupConfirmPassword">Konfirmasi Kata Sandi</label>
          <div class="input-group input-group-merge" data-hs-validation-validate-class>
            <input type="password" class="js-toggle-password form-control form-control-lg" name="password_confirmation" id="signupSimpleSignupConfirmPassword" placeholder="8+ karakter diperlukan" aria-label="8+ karakter diperlukan" required>
            <a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;"></a>
          </div>
          <span class="invalid-feedback">Kata sandi tidak cocok dengan konfirmasi kata sandi.</span>
        </div>
        <!-- End Form -->
      

      
        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
        </div>
      
        <div class="text-center">
          <p>Sudah punya akun? <a class="link" href="{{ route('showLoginForm') }}">Masuk di sini</a></p>
        </div>
      </form>
      
      <!-- End Form -->
    </div>
  </div>
  <!-- End Form -->
</main>
