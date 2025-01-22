<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">

        <form action="/payment/checkout" method="POST">
            @csrf

            <h1>{{ $materi->title }}</h1>
            <h4>{{ $materi->kategori->nama}}</h4>
            <p>anda akan melakukan transaksi untuk membeli materi ini</p>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" value="Rp.{{ $materi->price }}" readonly>
            </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Isi harga materi sesuai yang di label price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
