@extends('admin.layoutAdmin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">About Konfiguration</h6>

            <a class="btn btn-success btn-icon-split" href="{{ route('about.create') }}">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i> <!-- Ikon tambah untuk Create -->
                </span>
                <span class="text">Create</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi Singkat</th>
                            <th>Judul Deskripsi</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi Singkat</th>
                            <th>Judul Deskripsi</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Tindakan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($abouts as $about)
                            <tr>
                                <td>{{ $about->title }}</td>
                                <td>{{ Str::limit($about->description, 50) }}</td>
                                <td>{{ $about->title_overview }}</td>
                                <td>{{ Str::limit($about->deskripsi, 50) }}</td>

                                <td><img src="{{ asset('storage/' . $about->image) }}" alt="Image" width="100"
                                        class="img-thumbnail">

                                <td>

                                    <a class="btn btn-primary btn-icon-split" href="{{ route('about.edit', $about->id) }}">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Update</span>
                                    </a>

                                    <form action="{{ route('about.destroy', $about->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-icon-split mt-2" type="submit">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Delete</span>
                                        </button>
                                    </form>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
