@extends('admin.layoutAdmin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pembayaran</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                <thead>
                    <tr>
                        <th style="width: 10%;">User</th>
                        <th style="width: 10%;">Materi</th>
                        <th style="width: 10%;">Nomor Rekening</th>
                        <th style="width: 10%;">Nomor</th>

                        <th style="width: 10%;">Harga</th>
                        <th style="width: 8%;">Bukti Pembayaran</th>
                        <th style="width: 8%;">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>User</th>
                        <th>Materi</th>
                        <th>Nomor Rekening</th>
                        <th>Nomor</th>
                        <th>Harga</th>
                        <th>Bukti Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($payments as $payment)
                        <tr>
                            <td>{{ $payment->user->name }}</td>
                            <td>{{ $payment->materi->title }}</td>
                            <td>{{ $payment->nomor_rekening }}</td>
                            <td>{{ $payment->phone_number }}</td>
                            <td>{{ $payment->materi->price }}</td>
                            <td>
                                @if($payment->proof)
                                    <a href="{{ asset('storage/' . $payment->proof) }}" target="_blank">Lihat Bukti</a>
                                @else
                                    Tidak ada bukti
                                @endif
                            </td>
                            <td class="d-flex justify-content-center">
                                <a class="btn btn-primary btn-icon-split mr-2" href="{{ route('admin.payments.edit', $payment->id) }}">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>

                                <form action="{{ route('admin.payments.destroy', $payment->id) }}" method="POST" id="delete-form-{{ $payment->id }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button class="btn btn-danger btn-icon-split" type="button" onclick="deletePayment({{ $payment->id }})">
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
    function deletePayment(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Pembayaran ini akan dihapus.",
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
