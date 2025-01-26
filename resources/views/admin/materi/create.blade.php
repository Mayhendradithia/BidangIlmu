@extends('admin.layoutAdmin')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Tambah Materi</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Judul Materi -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul Materi</label>
                                <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Kategori -->
                            <div class="mb-3">
                                <label for="kategori_id" class="form-label">Kategori</label>
                                <select class="form-control @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id" required>
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}" {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Overview -->
                            <div class="mb-3">
                                <label for="overview" class="form-label">Overview</label>
                                <textarea class="form-control @error('overview') is-invalid @enderror" id="overview" name="overview" rows="3" required>{{ old('overview') }}</textarea>
                                @error('overview')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Benefit -->
                            <div class="mb-3">
                                <label for="benefit" class="form-label">Benefit</label>
                                <textarea class="form-control @error('benefit') is-invalid @enderror" id="benefit" name="benefit" rows="3" required>{{ old('benefit') }}</textarea>
                                <small class="form-text text-muted">Pisahkan tiap benefit dengan koma (,)</small>
                                @error('benefit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Deskripsi -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="5" required>{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- URL Video -->
                            <div class="mb-3">
                                <label for="url_video" class="form-label">URL Video (YouTube)</label>
                                <input class="form-control @error('url_video') is-invalid @enderror" type="url" id="url_video" name="url_video" value="{{ old('url_video') }}" required>
                                @error('url_video')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Premium atau Gratis -->
                            <div class="mb-3">
                                <label for="is_premium" class="form-label">Tipe Materi</label>
                                <select class="form-control @error('is_premium') is-invalid @enderror" id="is_premium" name="is_premium" required>
                                    <option value="" disabled selected>Pilih Tipe Materi</option>
                                    <option value="0" {{ old('is_premium') == '0' ? 'selected' : '' }}>Gratis</option>
                                    <option value="1" {{ old('is_premium') == '1' ? 'selected' : '' }}>Premium</option>
                                </select>
                                @error('is_premium')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Input Harga dan Payment (Hanya muncul jika Premium) -->
                            <div id="premium_fields" style="display: none;">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Harga</label>
                                    <input class="form-control @error('harga') is-invalid @enderror" type="number" id="price" name="price" value="0"">
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="payment" class="form-label">Metode Pembayaran</label>
                                    <input class="form-control @error('payment') is-invalid @enderror" type="text" id="payment" name="payment" value="{{ old('payment') }}">
                                    @error('payment')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password (Jika diperlukan)</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="text"
                                        id="password" name="password" >
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Simpan Materi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Menangani perubahan pada dropdown tipe materi
        document.getElementById('is_premium').addEventListener('change', function () {
            var premiumFields = document.getElementById('premium_fields');
            if (this.value === '1') {
                premiumFields.style.display = 'block';
            } else {
                premiumFields.style.display = 'none';
            }
        });

        // Menyembunyikan atau menampilkan field berdasarkan nilai awal
        document.addEventListener('DOMContentLoaded', function () {
            var selectedOption = document.getElementById('is_premium').value;
            if (selectedOption === '1') {
                document.getElementById('premium_fields').style.display = 'block';
            }
        });
    </script>
@endsection
