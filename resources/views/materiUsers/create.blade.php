@extends('UserAdmin.layout')

@section('main')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <h1 class="mb-4">Tambah Materi</h1>
    <div class="border rounded p-4 bg-light">
        <form action="{{ route('materiUsers.store') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label> <!-- Ganti tittle menjadi title -->
                    <input type="text" name="title" id="title" class="form-control form-control-sm" placeholder="Title" required>
                </div>
                <div class="col-md-6">
                    <label for="kategori_id" class="form-label">Kategori</label>
                    <select name="kategori_id" id="kategori_id" class="form-control form-control-sm" required>
                        @foreach ($kategoris as $kategoriItem)
                            <option value="{{ $kategoriItem->id }}">{{ $kategoriItem->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="overview" class="form-label">Overview</label>
                <textarea name="overview" id="overview" class="form-control form-control-sm" placeholder="Overview" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="benefit" class="form-label">Benefit</label>
                <textarea name="benefit" id="benefit" class="form-control form-control-sm" placeholder="Benefit" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control form-control-sm" placeholder="Description" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="video" class="form-label">Video Link</label> <!-- Ganti video menjadi url_video sesuai controller -->
                <input type="url" name="url_video" id="video" class="form-control form-control-sm" placeholder="https://example.com/video" required>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
    </div>

    <!-- Tambahkan CKEditor Script -->
    <script>
        CKEDITOR.replace('benefit');
        CKEDITOR.replace('description');
    </script>
@endsection
