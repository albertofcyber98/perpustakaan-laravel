<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index(){
        $data_buku = Buku::all()->sortByDesc('judul');
        $no=0;
        //compact berfungsi mem-passing data controller ke view
        return view('buku.index', compact('data_buku','no'));
    }
    public function create(){
        return view('buku.create');
    }
}
