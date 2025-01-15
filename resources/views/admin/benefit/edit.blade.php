@extends('admin.layoutAdmin')
@section('content')


<div class="container mt-5">
    <h1 class="mb-4">Edit Benefit</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('benefit.update', $benefit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $benefit->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="caption" class="form-label">Caption</label>
            <input type="text" name="caption" id="caption" class="form-control" value="{{ old('caption', $benefit->caption) }}" required>
        </div>
        <div class="mb-3">
            <label for="title_benefit" class="form-label">Title Benefit</label>
            <input type="text" name="title_benefit" id="title_benefit" class="form-control" value="{{ old('title_benefit', $benefit->title_benefit) }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $benefit->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="file" name="icon" id="icon" class="form-control" accept="image/*">
            @if ($benefit->icon)
                <small>Current Icon:</small><br>
                <img src="{{ asset('storage/' . $benefit->icon) }}" alt="Current Icon" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Benefit</button>
    </form>
</div>

@endsection