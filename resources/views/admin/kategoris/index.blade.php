@extends('admin.layoutAdmin')

@section('content')
    <!--
<div class="d-sm-flex align-items-center justify-content-between mb-4 ml-3">
    <a href="{{ route('report.generate') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
    </a>
</div>
-->


    <div class="card shadow mb-4">

        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori Pelajaran</h6>


            <a class="btn btn-success btn-icon-split" href="{{ route('kategoris.create') }}">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i> <!-- Ikon tambah untuk Create -->
                </span>
                <span class="text">Tambah Kategori</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                    style="text-align: center;">
                    <thead>
                        <tr>
                            <th style="width: 50%;">Title</th>
                            <th style="width: 50%;">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($kategoris as $kategori)
                            <tr>
                                <td>{{ $kategori->nama }}</td>
                                <td class="d-flex justify-content-center">
                                    <a class="btn btn-primary btn-icon-split mr-2"
                                        href="{{ route('kategoris.edit', $kategori->id) }}">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>

                                    <form action="{{ route('kategoris.destroy', $kategori->id) }}" method="POST"
                                        id="delete-form-{{ $kategori->id }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button class="btn btn-danger btn-icon-split" type="button"
                                        onclick="deleteCategory({{ $kategori->id }})">
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
        function deleteCategory(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Kategori ini akan dihapus.",
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
