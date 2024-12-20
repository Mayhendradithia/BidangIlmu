<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nama:</label>
    <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

    <label for="password">Password (kosongkan jika tidak ingin mengubah):</label>
    <input type="password" name="password">
    
    <label for="password_confirmation">Konfirmasi Password:</label>
    <input type="password" name="password_confirmation">

    <button type="submit">Simpan Perubahan</button>
</form>
