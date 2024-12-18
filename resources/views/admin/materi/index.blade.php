@extends('admin.layoutAdmin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Materi</h6>

        <a class="btn btn-success btn-icon-split" href="{{ route('materi.create') }}">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Materi</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                <thead>
                    <tr>
                        <th style="width: 10%;">Judul</th>
                        <th style="width: 10%;">Kategori</th>
                        <th style="width: 15%;">Overview</th>
                        <th style="width: 15%;">Benefit</th>
                        <th style="width: 20%;">Deskripsi</th>
                        <th style="width: 15%;">Url Video</th>
                        <th style="width: 20%;">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Overview</th>
                        <th>Benefit</th>
                        <th>Deskripsi</th>
                        <th>Url Video</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($materis as $materi)
                        <tr>
                            <td>{{ $materi->title }}</td>
                            <td>{{ $materi->kategori->nama }}</td>
                            <td>{{ $materi->overview }}</td>
                            <td>{{ $materi->benefit }}</td>
                            <td>{{ $materi->deskripsi }}</td>
                            <td>{{ $materi->url_video }}</td>
                            <td class="d-flex justify-content-center">
                                <a class="btn btn-primary btn-icon-split mr-2" href="{{ route('materi.edit', $materi->id) }}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>

                                <form action="{{ route('materi.destroy', $materi->id) }}" method="POST" id="delete-form-{{ $materi->id }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button class="btn btn-danger btn-icon-split" type="button" onclick="deleteMateri({{ $materi->id }})">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function deleteMateri(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Materi ini akan dihapus.",
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
