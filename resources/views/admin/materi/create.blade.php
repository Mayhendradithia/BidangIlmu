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

                            <div class="mb-3">
                                <label for="title" class="form-label">Judul Materi</label>
                                <input class="form-control @error('title') is-invalid @enderror" type="text"
                                    id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="kategori_id" class="form-label">Kategori</label>
                                <select class="form-control @error('kategori_id') is-invalid @enderror" id="kategori_id"
                                    name="kategori_id" required>
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}"
                                            {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->nama }} <!-- Sesuaikan kolom nama -->
                                        </option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="overview" class="form-label">Overview</label>
                                <textarea class="form-control @error('overview') is-invalid @enderror" id="overview" name="overview" rows="3"
                                    required>{{ old('overview') }}</textarea>
                                @error('overview')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="benefit" class="form-label">Benefit</label>
                                <textarea class="form-control @error('benefit') is-invalid @enderror" id="benefit" name="benefit" rows="3"
                                    required>{{ old('benefit') }}</textarea>
                                <small class="form-text text-muted">Pisahkan tiap benefit dengan koma (,)</small>
                                @error('benefit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>





                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="5"
                                    required>{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="url_video" class="form-label">URL Video (YouTube)</label>
                                <input class="form-control @error('url_video') is-invalid @enderror" type="url"
                                    id="url_video" name="url_video" value="{{ old('url_video') }}" required>
                                @error('url_video')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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
@endsection
