@extends('layout')
@section('content')
    <div class="container-fluid d-flex align-items-center justify-content-center mt-10" style="min-height: 100vh;">
        <div class="row justify-content-center w-100">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <h4 class="mb-0">Profil Pengguna</h4>
                    </div>
                    <div class="card-body p-4">

                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            <!-- Nama Input Group -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" 
                                       class="form-control @error('name') is-invalid @enderror" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name', $user->name) }}" 
                                       required>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Email Input Group -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" 
                                       class="form-control @error('email') is-invalid @enderror" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email', $user->email) }}" 
                                       required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Kata Sandi Lama Input Group -->
                            <div class="mb-3">
                                <label for="old_password" class="form-label">Kata Sandi Lama</label>
                                <input type="password" 
                                       class="form-control @error('old_password') is-invalid @enderror" 
                                       id="old_password" 
                                       name="old_password" 
                                       placeholder="Masukkan kata sandi lama">
                                @error('old_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Kata Sandi Baru Input Group -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi Baru (Opsional)</label>
                                <input type="password" 
                                       class="form-control @error('password') is-invalid @enderror" 
                                       id="password" 
                                       name="password" 
                                       placeholder="Masukkan kata sandi baru">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Konfirmasi Kata Sandi Input Group -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi (Opsional)</label>
                                <input type="password" 
                                       class="form-control" 
                                       id="password_confirmation" 
                                       name="password_confirmation" 
                                       placeholder="Konfirmasi kata sandi baru">
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>

                            <div class="d-grid mt-2">
                                <form action="{{ route('logout') }}" method="POST" id="logoutForm" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">
                                        Keluar
                                    </button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom Script untuk trigger SweetAlert -->
    
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
@endsection
