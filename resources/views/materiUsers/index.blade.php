@extends('UserAdmin.layout')

@section('main')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Materi</h6>
            <a class="btn btn-success btn-icon-split" href="{{ route('materiUsers.create') }}">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i> <!-- Ikon tambah untuk Create -->
                </span>
                <span class="text">Tambah Materi</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                    <thead>
                        <tr>
                            <th style="width: 50%;">Nama</th>
                            <th style="width: 50%;">Title</th>
                            <th style="width: 50%;">Overview</th>
                            <th style="width: 50%;">Kategori</th>
                            <th style="width: 50%;">Benefit</th>
                            <th style="width: 50%;">Description</th>
                            <th style="width: 50%;">Video</th>
                            <th style="width: 50%;">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th style="width: 50%;">Nama</th>
                            <th style="width: 50%;">Title</th>
                            <th style="width: 50%;">Overview</th>
                            <th style="width: 50%;">Kategori</th>
                            <th style="width: 50%;">Benefit</th>
                            <th style="width: 50%;">Description</th>
                            <th style="width: 50%;">Video</th>
                            <th style="width: 50%;">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($materiUsers as $materiUsers)
                            <tr>
                                <td>{{ $materiUsers->user->name }}</td>
                                <td>{{ $materiUsers->tittle }}</td>
                                <td>{{ $materiUsers->overview }}</td>
                                <td>{{ $materiUsers->kategori->nama }}</td>
                                <td>{{ $materiUsers->benefit }}</td>
                                <td>{{ $materiUsers->description }}</td>
                                <td>
                                    <video href="{{ $materiUsers->video }}">Video</video>
                                </td>
                                <td class="d-flex justify-content-center">
                                    <a class="btn btn-primary btn-icon-split mr-2" href="{{ route('kategoris.edit', $materiUsers->id) }}">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <form action="{{ route('kategoris.destroy', $materiUsers->id) }}" method="POST" id="delete-form-{{ $materiUsers->id }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button class="btn btn-danger btn-icon-split" type="button" onclick="deleteCategory({{ $materiUsers->id }})">
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
@endsection

