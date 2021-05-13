<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class kategoricontroller extends Controller
{
    public function index() {
        $kategori = kategori::all();
        dd($kategori);
        return view('kategori.index',compact(['kategori']));
}
}
