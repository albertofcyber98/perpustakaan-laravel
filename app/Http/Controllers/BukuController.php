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
    public function store(Request $request){
        $buku = new Buku;
        $buku->judul    = $request->judul;
        $buku->penulis  = $request->penulis;
        $buku->harga    = $request->harga;
        $buku->tgl_terbit    = $request->tgl_terbit;
        $buku->save();
        return redirect('/');
    }
    public function destroy($id){
        $buku   =Buku::find($id);
        $buku->delete();
        return redirect('/');
    }
    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }
    public function update(Request $request, $id){
        $buku   = Buku::find($id);
        $buku->judul    = $request->judul;
        $buku->penulis    = $request->penulis;
        $buku->harga    = $request->harga;
        $buku->tgl_terbit    = $request->tgl_terbit;
        $buku->update();
        return redirect('/');
    }
}
