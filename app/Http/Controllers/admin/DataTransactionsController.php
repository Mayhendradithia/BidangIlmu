<?php

namespace App\Http\Controllers\Admin;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;  // Pastikan ini ada

class DataTransactionsController extends Controller
{
    // Methods here

    // Menampilkan daftar payments
    public function index()
    {
        $payments = Payment::with(['user', 'materi'])->get(); // Mengambil data payment beserta relasinya

        return view('admin.payments.index', compact('payments')); // Kirimkan data ke view
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect()->route('admin.payments.index')->with('success', 'Payment telah dihapus!');
    }
}

