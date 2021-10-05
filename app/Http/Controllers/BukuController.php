<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index(){
        $data_buku = Buku::all();
        return view('buku.index', compact('data_buku'));
    }
}
