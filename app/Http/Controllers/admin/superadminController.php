<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Materi;
use App\Models\User;
use Illuminate\Http\Request;

class superadminController extends Controller
{
    public function dashbord()
    {

        $totalKategori = Kategori::count();
        $totalMateri = Materi::count();
        $totalUsers = User::count();
        $users = User::all();

        return view('admin.dashboard',compact('totalKategori','totalMateri','totalUsers'));
    }
}
