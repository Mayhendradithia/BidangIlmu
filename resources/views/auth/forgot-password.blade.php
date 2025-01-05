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
                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf
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
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Kirim Tautan Reset Kata Sandi
                                </button>
                                @if (session('status'))
                                    <script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Cek Mailtrap mu sekarang',
                                            text: '{{ session('status') }}',
                                            showConfirmButton: true
                                        });
                                    </script>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
