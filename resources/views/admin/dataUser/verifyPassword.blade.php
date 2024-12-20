<form action="{{ route('user.verifyPassword', $user->id) }}" method="POST">
    @csrf
    <label for="password">Masukkan Password Admin:</label>
    <input type="password" name="password" required>
    @error('password')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    <button type="submit">Verifikasi</button>
</form>
