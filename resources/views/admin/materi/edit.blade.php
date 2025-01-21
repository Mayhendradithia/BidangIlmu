@extends('admin.layoutAdmin')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Edit Materi</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('materi.update', $materi->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Gunakan PUT untuk update -->

                            <!-- Input Judul Materi -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul Materi</label>
                                <input class="form-control @error('title') is-invalid @enderror" type="text"
                                    id="title" name="title" value="{{ old('title', $materi->title) }}" required>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Dropdown Kategori -->
                            <div class="mb-3">
                                <label for="kategori_id" class="form-label">Kategori</label>
                                <select class="form-control @error('kategori_id') is-invalid @enderror" id="kategori_id"
                                    name="kategori_id" required>
                                    <option value="" disabled>Pilih Kategori</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}"
                                            {{ old('kategori_id', $materi->kategori_id) == $kategori->id ? 'selected' : '' }}>
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

                            <!-- Input Overview -->
                            <div class="mb-3">
                                <label for="overview" class="form-label">Overview</label>
                                <textarea class="form-control @error('overview') is-invalid @enderror" id="overview" name="overview" rows="3"
                                    required>{{ old('overview', $materi->overview) }}</textarea>
                                @error('overview')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Input Benefit -->
                            <div class="mb-3">
                                <label for="benefit" class="form-label">Benefit</label>
                                <textarea class="form-control @error('benefit') is-invalid @enderror" id="benefit" name="benefit" rows="3"
                                    required>{{ old('benefit', $materi->benefit) }}</textarea>
                                <small class="form-text text-muted">Pisahkan tiap benefit dengan koma (,)</small>
                                @error('benefit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Input Deskripsi -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="5"
                                    required>{{ old('deskripsi', $materi->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Input URL Video -->
                            <div class="mb-3">
                                <label for="url_video" class="form-label">URL Video (YouTube)</label>
                                <input class="form-control @error('url_video') is-invalid @enderror" type="url"
                                    id="url_video" name="url_video" value="{{ old('url_video', $materi->url_video) }}"
                                    required>
                                @error('url_video')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Dropdown Pilihan Berbayar atau Gratis -->
                            <div class="mb-3">
                                <label for="payment_status" class="form-label">Status Pembayaran</label>
                                <select class="form-control" id="payment_status" name="payment_status" onchange="togglePaymentFields()" required>
                                    <option value="gratis" {{ old('payment_status', $materi->payment_status) == 'gratis' ? 'selected' : '' }}>Gratis</option>
                                    <option value="berbayar" {{ old('payment_status', $materi->payment_status) == 'berbayar' ? 'selected' : '' }}>Berbayar</option>
                                </select>
                            </div>

                            <!-- Input untuk Berbayar -->
                            <div id="paymentFields" class="payment-fields">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Harga</label>
                                    <input class="form-control @error('price') is-invalid @enderror" type="number"
                                        id="price" name="price" value="{{ old('price', $materi->price) }}">
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="payment" class="form-label">Metode Pembayaran</label>
                                    <input class="form-control @error('payment') is-invalid @enderror" type="text"
                                        id="payment" name="payment" value="{{ old('payment', $materi->payment) }}">
                                    @error('payment')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password (Jika diperlukan)</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="text"
                                        id="password" name="password" value="{{ old('password', $materi->password) }}">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update Materi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function togglePaymentFields() {
            const paymentStatus = document.getElementById('payment_status').value;
            const paymentFields = document.getElementById('paymentFields');
            paymentFields.style.display = paymentStatus === 'berbayar' ? 'block' : 'none';
        }

        // Set default state saat halaman dimuat
        togglePaymentFields();
    </script>
@endpush
