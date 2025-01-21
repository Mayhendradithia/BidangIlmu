<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ $clientKey }}"></script>
</head>
<body>
    <h1>Pembayaran</h1>
    <button id="pay-button">Bayar Sekarang</button>

    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function (result) {
                    alert('Pembayaran berhasil!');
                    console.log(result);
                },
                onPending: function (result) {
                    alert('Menunggu pembayaran...');
                    console.log(result);
                },
                onError: function (result) {
                    alert('Pembayaran gagal!');
                    console.log(result);
                }
            });
        });
    </script>
</body>
</html>
