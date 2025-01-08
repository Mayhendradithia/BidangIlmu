@extends('admin.layoutAdmin')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Verifikasi Password Admin</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.verifyPassword', $user->id) }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Masukkan Password Admin</label>
                            <input type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   id="password" 
                                   name="password" 
                                   required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Verifikasi</button>
                            <a href="{{ route('admin.users') }}" class="btn btn-secondary ml-3">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection