<!-- Include Midtrans Snap JS -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" 
        data-client-key="{{ config('midtrans.client_key') }}"></script>

<form action="{{ route('premium.pay', $materi->id) }}" method="POST" id="payment-form">
    @csrf
    <div class="form-group">
        <h2>{{ $materi->title }}</h2>
        <h5>{{ $materi->kategori->nama }}</h5>
        <p>Harga: Rp {{ number_format($materi->harga, 0, ',', '.') }}</p>
    </div>
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama Anda" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
    </div>
    <div class="form-group">
        <label for="phone">Nomor Telepon</label>
        <input type="text" name="phone" id="phone" class="form-control" placeholder="Masukkan nomor telepon Anda" required>
    </div>
    <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
</form>

<!-- Area untuk menampilkan pesan error -->
<div id="error-message" class="alert alert-danger mt-3" style="display: none;"></div>

<script>
    const form = document.getElementById('payment-form');
    const errorDiv = document.getElementById('error-message');

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        try {
            // Tampilkan loading jika perlu
            const formData = new FormData(this);
            
            const response = await fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            });

            const data = await response.json();
            
            if (!response.ok) {
                throw new Error(data.error || 'Terjadi kesalahan dalam memproses pembayaran');
            }

            if (data.snap_token) {
                window.snap.pay(dat