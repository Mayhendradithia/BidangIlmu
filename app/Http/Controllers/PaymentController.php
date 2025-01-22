<?php
namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    // Menampilkan form pembayaran berdasarkan materi
    public function showPaymentForm($id)
    {
        $materi = Materi::findOrFail($id); // Ambil materi berdasarkan ID
        return view('payment', compact('materi')); // Kirimkan materi ke view
    }

    // Proses pembayaran
    public function processPayment(Request $request, $id)
{
    // Validasi inputan
    $validated = $request->validate([
        'phone_number' => 'required|numeric',
        'proof' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'number_transaction' => 'required|unique:payments,nomor_rekening',
    ]);

    // Ambil data materi berdasarkan ID yang diteruskan dari rute
    $materi = Materi::findOrFail($id);

    // Upload bukti pembayaran ke storage
    $proofPath = $request->file('proof')->store('proofs', 'public');

    // Simpan data pembayaran ke database
    $payment = Payment::create([
        'user_id' => auth()->id(),
        'materi_id' => $materi->id,
        'phone_number' => $request->phone_number,
        'proof' => $proofPath,
        'nomor_rekening' => $request->number_transaction,
        'price' => $materi->price, // Menyimpan harga materi yang dipilih
    ]);

    // Simpan data pembayaran ke session
    session()->flash('paymentData', [
        'name' => auth()->user()->name,
        'phone_number' => $request->phone_number,
        'price' => $materi->price,
        'proof' => asset('storage/' . $proofPath),
    ]);

    // Redirect ke halaman sukses
    return redirect()->route('payment.success');
}


    // Halaman sukses pembayaran
    public function paymentSuccess()
    {
        return view('payment_success');
    }
}

