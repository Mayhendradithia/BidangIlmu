@extends('UserAdmin.layout')

@section('main')
    <h1>Tambah Materi</h1>
    <form action="{{ route('materiUsers.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <input type="number" name="kategori_id" placeholder="Kategori ID" required>
        <textarea name="overview" placeholder="Overview" required></textarea>
        <input type="number" name="user_id" placeholder="User ID" required>
        <textarea name="benefit" placeholder="Benefit" required></textarea>
        <textarea name="description" placeholder="Description" required></textarea>
        <input type="text" name="video" placeholder="Video URL">
        <button type="submit">Simpan</button>
    </form>
@endsection
