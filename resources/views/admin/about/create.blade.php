@extends('admin.layoutAdmin')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Tambah About</h1>

        <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" placeholder="Masukkan judul" required>
            </div>

            <div class="mb-3">
                <label for="title_overview" class="form-label">Judul Overview</label>
                <input type="text" name="title_overview" class="form-control" placeholder="Masukkan judul overview" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Singkat</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Masukkan deskripsi" required></textarea>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Tambahan</label>
                <textarea name="deskripsi" class="form-control" rows="4" placeholder="Masukkan deskripsi tambahan" required></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" name="image" class="form-control">
                <small class="text-muted">Format gambar yang diperbolehkan: jpeg, png, jpg, gif. Maksimal 2MB.</small>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ route('about.index') }}" class="btn btn-secondary ms-2">Batal</a>
        </form>
    </div>
@endsection
