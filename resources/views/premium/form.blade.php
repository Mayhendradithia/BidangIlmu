@extends('layout')
@section('content')
    <div class="container py-5 mt-sm-10">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0 text-white">Akses Materi Premium</h4>
                    </div>
                    <div class="card-body p-4">
                        <!-- Judul dan Kategori Materi -->
                        <div class="mb-sm-8">
                            <h2 class="fw-bold">{{ $materi->title }}</h5>
                            <p class="text-muted">Kategori : {{ $materi->kategori->nama }}</p>

                        </div>

                        <!-- Password Form -->
                        <form action="{{ route('premium.otp', $materi->id) }}" method="POST">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="password" class="form-label fw-bold">
                                    <i class="fas fa-lock me-2"></i>Password Materi
                                </label>
                                <div class="input-group">
                                    <input type="password" 
                                           name="password" 
                                           class="form-control form-control-lg" 
                                           placeholder="Masukkan password materi"
                                           required>
                                </div>
                                <small class="text-muted mt-2">
                                    Masukkan password jika Anda sudah memiliki akses
                                </small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-arrow-right me-2"></i>Confirm
                            </button>
                        </form>



                        <!-- Purchase Form -->
                       
                        <div class="text-center">
                            <p class="text-muted mb-3">Atau</p>
                            <a href="{{ route('payment.form', $materi->id) }}" class="btn btn-success btn-lg">
                                <i class="fas fa-credit-card me-2"></i> Daftar dan Bayar
                            </a>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan CSS ini di bagian head atau file CSS terpisah -->
    
@endsection
