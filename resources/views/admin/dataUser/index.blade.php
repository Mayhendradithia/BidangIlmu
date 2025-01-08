@extends('admin.layoutAdmin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pengguna</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                <thead>
                    <tr>
                        <th style="width: 5%;">ID</th>
                        <th style="width: 20%;">Nama</th>
                        <th style="width: 20%;">Email</th>
                        <th style="width: 20%;">Tanggal Dibuat</th>
                        <th style="width: 20%;">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('d M Y') }}</td>
                            <td class="d-flex justify-content-center">
                                <a class="btn btn-primary btn-icon-split mr-2" href="{{ route('user.verifyPassword', $user->id) }}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>

                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" id="delete-form-{{ $user->id }}" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                
                                    <button type="button" class="btn btn-danger btn-icon-split mr-2" onclick="deleteUser({{ $user->id }})">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function deleteUser(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Pengguna ini akan dihapus.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form jika pengguna klik 'Ya, hapus'
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
</script>
@endsection
