@extends('layout')
@section('content')
    <div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="row justify-content-center w-100">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <h4 class="mb-0">Reset Kata Sandi</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       name="email" id="email" value="{{ old('email') }}" 
                                       placeholder="Masukkan alamat email Anda" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi Baru</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                       name="password" id="password" 
                                       placeholder="Masukkan kata sandi baru" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi Baru</label>
                                <input type="password" class="form-control" 
                                       name="password_confirmation" id="password_confirmation" 
                                       placeholder="Konfirmasi kata sandi baru" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Reset Kata Sandi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('status'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('status') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
@endsection
