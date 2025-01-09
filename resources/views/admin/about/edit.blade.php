@extends('admin.layoutAdmin')

@section('content')
    <div class="container">
        <h1>Edit About</h1>

        <!-- Tampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Edit -->
        <form action="{{ route('about.update', $abouts->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $abouts->title) }}" required>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="title_overview">Title Overview</label>
                <input type="text" name="title_overview" id="title_overview" class="form-control" value="{{ old('title_overview', $abouts->title_overview) }}" required>
                @error('title_overview')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $abouts->description) }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi', $abouts->deskripsi) }}</textarea>
                @error('deskripsi')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                @if ($abouts->image)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $abouts->image) }}" alt="Image" width="200">
                    </div>
                @endif
                <input type="file" name="image" id="image" class="form-control">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('about.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
