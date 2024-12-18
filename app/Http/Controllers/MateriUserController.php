<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MateriUser;
use App\Models\Kategori;


class MateriUserController extends Controller
{
    public function index()
    {
        $materiUsers = MateriUser::with('kategori')->get();
        $kategoris = Kategori::all();
        return view('materiUsers.index', compact('materiUsers','kategoris'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('materiUsers.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        dd($request->all());  // Debugging data yang diterima
        $request->validate([
            'tittle' => 'required',
            'overview' => 'required',
            'kategori_id' => 'required',
            'url_video' => 'required|url',
            'benefit' => 'required',
            'description' => 'required',
        ]);
    
        MateriUser::create($request->all());
        return redirect()->route('materiUsers.index');
    }
    

    public function edit(MateriUser $materiUser)
    {
        $kategoris = Kategori::all();
        return view('materiUsers.edit', compact('materiUser', 'kategoris'));
    }

    public function update(Request $request, MateriUser $materiUser)
    {
        $request->validate([
            'tittle' => 'required',
            'overview' => 'required',
            'kategori_id' => 'required',
            'url_video' => 'required|url',
            'benefit' => 'required',
            'description' => 'required',
        ]);

        $materiUser->update($request->all());
        return redirect()->route('materiUsers.index');
    }

    public function destroy(MateriUser $materiUser)
    {
        $materiUser->delete();
        return redirect()->route('materiUsers.index');
    }
}
