@extends('layout')

@section('content')


    <script>
        Swal.fire({
            title: 'Pembayaran Berhasil!',
            text: 'Terima kasih telah melakukan pembayaran. Data akan segera dikirim ke WhatsApp!',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Kirim data ke WhatsApp
                sendToWhatsApp();
            }
        });

        function sendToWhatsApp() {
            const paymentData = @json(session('paymentData')); // Ambil data pembayaran dari session

            const waNumber = '6285782306526'; // Nomor WhatsApp tujuan
            const message = `Pembayaran berhasil! Berikut adalah detail pembayaran:\n\nNama: ${paymentData.name}\nNomor Telepon: ${paymentData.phone_number}\nHarga: ${paymentData.price}\nBukti Pembayaran: ${paymentData.proof}`;

            // URL WhatsApp API
            const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;

            // Arahkan ke URL WhatsApp
            window.open(waUrl, '_blank');
        }
    </script>
@endsection
