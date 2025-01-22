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

    // Menampilkan form edit payment
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);
        
        return view('admin.payments.edit', compact('payment')); // Kirimkan data payment ke form edit
    }

    // Update status payment
    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->status = $request->status;
        $payment->save();

        return redirect()->route('admin.payments.index')->with('success', 'Status payment telah diperbarui!');
    }

    // Hapus payment
    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect()->route('admin.payments.index')->with('success', 'Payment telah dihapus!');
    }
}

