@extends('layout')
@section('content')

<div class="container py-5 mt-sm-8">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Order Summary Card -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">Ringkasan Pesanan</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h5 class="text-muted">{{ $materi->title }}</h5>
                            <p class="text-muted">Kategori dipilih : {{ $materi->kategori->nama }}</p>
                            <small class="text-muted">Kode Materi: {{ $materi->id }}</small>
                        </div>
                        <h5 class="text-primary mb-0">Rp {{ number_format($materi->price, 0, ',', '.') }}</h5>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h6>Total Pembayaran</h6>
                        <h5 class="text-primary">Rp {{ number_format($materi->price, 0, ',', '.') }}</h5>
                    </div>
                </div>
            </div>

            <!-- Payment Form Card -->
            <div class="card shadow">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0">Informasi Pembayaran</h5>
                    <h6 class="text-primary mt-3">No Rekening Admin : 1234567</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('payment.process', $materi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Customer Information Section -->
                        <div class="mb-4">
                            <h6 class="text-muted mb-3">Informasi Pembeli</h6>
                            <div class="bg-light p-3 rounded mb-3">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="small text-muted mb-1">Email</label>
                                        <div class="fw-bold">{{ auth()->user()->email }}</div>
                                        <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small text-muted mb-1">Nama</label>
                                        <div class="fw-bold">{{ auth()->user()->name }}</div>
                                        <input type="hidden" name="name" value="{{ auth()->user()->name }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="mb-4">
                            <h6 class="text-muted mb-3">Informasi Kontak</h6>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label small">Nomor Telepon</label>
                                <div class="input-group">
                                    <span class="input-group-text">+62</span>
                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" 
                                        id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                                        placeholder="8123456789">
                                </div>
                                @error('phone_number')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Payment Details -->
                        <div class="mb-4">
                            <h6 class="text-muted mb-3">Detail Pembayaran</h6>
                            
                            <div class="mb-3">
                                <label for="number_transaction" class="form-label small">Nomor Rekening</label>
                                <input type="text" class="form-control @error('number_transaction') is-invalid @enderror" 
                                    id="number_transaction" name="number_transaction" 
                                    placeholder="Contoh: 1234-5678-9012">
                                @error('number_transaction')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="proof" class="form-label small">Upload Bukti Transfer</label>
                                <div class="input-group">
                                    <input type="file" class="form-control @error('proof') is-invalid @enderror" 
                                        id="proof" name="proof" accept="image/*">
                                    <label class="input-group-text" for="proof">Upload</label>
                                </div>
                                <div class="form-text">Format: JPG, PNG, atau PDF (Max: 2MB)</div>
                                @error('proof')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="alert alert-info" role="alert">
                            <i class="fas fa-info-circle me-2"></i>
                            Mohon pastikan data yang diisi sudah benar sebelum melakukan pembayaran.
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Konfirmasi Pembayaran
                            </button>
                            <div class="text-center mt-2">
                                <small class="text-muted">Dengan mengklik tombol di atas, Anda menyetujui syarat dan ketentuan yang berlaku</small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection