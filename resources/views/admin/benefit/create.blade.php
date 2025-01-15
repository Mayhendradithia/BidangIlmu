@extends('admin.layoutAdmin')
@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Create New Benefit</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('benefit.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="caption" class="form-label">Caption</label>
            <input type="text" name="caption" id="caption" class="form-control">
        </div>
        <div class="mb-3">
            <label for="title_benefit" class="form-label">Title Benefit</label>
            <input type="text" name="title_benefit" id="title_benefit" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="file" name="icon" id="icon" class="form-control" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Benefit</button>
    </form>
</div>
@endsection