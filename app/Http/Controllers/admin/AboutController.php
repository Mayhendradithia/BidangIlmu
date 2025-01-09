<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About; // Model About
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Untuk operasi file storage

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'title_overview' => 'required|string|max:255',
            'description' => 'required|string',
            'deskripsi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $abouts = new About();
        $abouts->title = $request->title;
        $abouts->title_overview = $request->title_overview;
        $abouts->description = $request->description;
        $abouts->deskripsi = $request->deskripsi;

        if ($request->hasFile('image')) {
            $abouts->image = $request->file('image')->store('about_images', 'public');
        }

        $abouts->save();

        return redirect()->route('about.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $abouts = About::findOrFail($id);
        return view('admin.about.edit', compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'title_overview' => 'required|string|max:255',
            'description' => 'required|string',
            'deskripsi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $abouts = About::findOrFail($id);
        $abouts->title = $request->title;
        $abouts->title_overview = $request->title_overview;
        $abouts->description = $request->description;
        $abouts->deskripsi = $request->deskripsi;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($abouts->image) {
                Storage::disk('public')->delete($abouts->image);
            }
            $abouts->image = $request->file('image')->store('about_images', 'public');
        }

        $abouts->save();

        return redirect()->route('about.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $abouts = About::findOrFail($id);

        // Hapus gambar jika ada
        if ($abouts->image) {
            Storage::disk('public')->delete($abouts->image);
        }

        $abouts->delete();

        return redirect()->route('about.index')->with('success', 'Data berhasil dihapus');
    }
}
