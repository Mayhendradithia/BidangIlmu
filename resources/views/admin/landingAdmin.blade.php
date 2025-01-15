@extends('admin.layoutAdmin')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Konfigurasi Halaman Beranda</h1>
        <p class="mb-4">Data ini sangat berpengaruh pada website maka <a target="_blank" class="text-warning">hati
                hati lah</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Selamat Datang Di Halaman Konfigurasi</h6>

                <a class="btn btn-success btn-icon-split" href="{{ route('konfigurasi.create') }}">
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
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($konfigurasi as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td><img src="{{ asset('storage/' . $item->image) }}" alt="Gambar"
                                            style="width: 150px; height: auto;"></td>
                                    <td>{{ $item->description }}</td>


                                    <td>
                                        <a class="btn btn-primary btn-icon-split"
                                            href="{{ route('konfigurasi.edit', $item->id) }}">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Update</span>
                                        </a>




                                        <form action="{{ route('konfigurasi.destroy', $item->id) }}" method="POST"
                                            id="delete-form-{{ $item->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-icon-split mt-2 delete-button"
                                                data-id="{{ $item->id }}">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text">Delete</span>
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
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Mitra Configuration</h6>

                <a class="btn btn-success btn-icon-split" href="{{ route('mitra.create') }}">
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
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($mitras as $mitra)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $mitra->image) }}" alt="Gambar"
                                            style="width: 150px; height: auto;"></td>
                                    <td>
                                        <a class="btn btn-primary btn-icon-split"
                                            href="{{ route('mitra.edit', $mitra->id) }}">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Update</span>
                                        </a>

                                        <form action="{{ route('mitra.destroy', $mitra->id) }}" method="POST"
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Benefit Configuration </h6>

                <a class="btn btn-success btn-icon-split" href="{{ route('benefit.create') }}">
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
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Title Benefit</th>
                                <th>Icon</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Title Benefit</th>
                                <th>Icon</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($benefits as $benefit)
                                <tr>
                                    <td>{{ $benefit->title }}</td>
                                    <td>{{ $benefit->caption }}</td>
                                    <td>{{ $benefit->title_benefit }}</td>
                                    <td><img src="{{ asset('/storage/' . $benefit->icon) }}" alt="Gambar"
                                            style="width: 150px; height: auto;"></td>
                                    <td>{{ $benefit->description }}</th>



                                    <td>

                                        <a class="btn btn-primary btn-icon-split"
                                            href="{{ route('benefit.edit', $benefit->id) }}">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Update</span>
                                        </a>





                                        <form action="{{ route('benefit.destroy', $benefit->id) }}" method="POST"
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>




    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Cari semua tombol dengan class 'delete-button'
            const deleteButtons = document.querySelectorAll('.delete-button');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-id');
                    Swal.fire({
                        title: 'Anda Yakin Menghapusnya?',
                        text: "Kamu tidak bisa mengembalikan data yang telah kamu hapus!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya,Hapus!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Jika dikonfirmasi, submit form penghapusan
                            document.getElementById(`delete-form-${itemId}`).submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
