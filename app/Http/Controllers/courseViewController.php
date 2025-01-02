<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class courseViewController extends Controller
{
    public function courseOverview($id)
{
    $user = Auth::user();
    $materi = Materi::with('kategori')->findOrFail($id);
    return view('courseOverview', compact('user', 'materi'));
}

}
