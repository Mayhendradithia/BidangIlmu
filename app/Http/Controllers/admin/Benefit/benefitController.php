<?php

namespace App\Http\Controllers\admin\Benefit;

use App\Http\Controllers\Controller;
use App\Models\Benefit; // Pastikan nama model adalah Benefit
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    public function index()
    {
        $benefits = Benefit::all(); // Mengambil semua data benefit
        return view('admin.landingAdmin', compact('benefits')); // Menggunakan 'benefits' untuk konsistensi
    }

    public function create()
    {
        return view('admin.benefit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'caption' => 'nullable',
            'title_benefit' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp|max:4096',
            'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp|max:4096',
        ]);

        // Membuat objek baru untuk benefit
        $benefit = new Benefit($request->only(['title', 'caption', 'title_benefit', 'description']));

        if ($request->hasFile('image')) {
            $benefit->image = $request->file('image')->store('images', 'public'); // Menyimpan gambar
        }
        if ($request->hasFile('icon')) {
            $benefit->icon = $request->file('icon')->store('icons', 'public'); // Menyimpan ikon
        }

        $benefit->save(); // Menyimpan data ke database

        return redirect()->route('konfigurasi.index')->with('success', 'Post created successfully.');
    }

    public function edit(Benefit $benefit) // Menggunakan tipe hinting untuk Benefit
    {
        return view('admin.benefit.edit', compact('benefit'));
    }

    public function update(Request $request, Benefit $benefit)
    {
        $request->validate([
            'title' => 'required',
            'caption' => 'required',
            'title_benefit' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg,webp|max:4096',
            'icon' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg,webp|max:4096',
        ]);

        // Mengisi data yang ada pada model benefit
        $benefit->fill($request->only(['title', 'caption', 'title_benefit', 'description']));

        if ($request->hasFile('image')) {
            $benefit->image = $request->file('image')->store('images', 'public'); // Update image jika ada file baru
        }
        if ($request->hasFile('icon')) {
            $benefit->icon = $request->file('icon')->store('icons', 'public'); // Update icon jika ada file baru
        }

        $benefit->save(); // Menyimpan perubahan

        return redirect()->route('konfigurasi.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Benefit $benefit)
    {
        $benefit->delete(); // Menghapus data benefit
        return redirect()->route('konfigurasi.index')->with('success', 'Post deleted successfully.');
    }
}
