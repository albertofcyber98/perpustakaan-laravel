@extends('layouts.master')
@section('content')
    <div class="container">
        <h4>Tambah Buku</h4>
        <form method="POST" action="{{route('buku.update', $buku->id)}}">
            @csrf
            <div class="row">
                <div class="col-2">
                    <label for="judul" class="col-form-label">Judul Buku</label>
                </div>
                <div class="col-9">
                    <input type="text" name="judul" id="judul" class="form-control" value="{{$buku->judul}}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="penulis" class="col-form-label">Penulis Buku</label>
                </div>
                <div class="col-9">
                    <input type="text" name="penulis" id="penulis" class="form-control" value="{{$buku->penulis}}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="harga" class="col-form-label">Harga Buku</label>
                </div>
                <div class="col-9">
                    <input type="text" name="harga" id="harga" class="form-control" value="{{$buku->harga}}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="terbit" class="col-form-label">Tgl. Terbit</label>
                </div>
                <div class="col-9">
                    <input type="text" name="tgl_terbit" id="terbit" class="form-control" value="{{$buku->tgl_terbit->format('Y-m-d')}}">
                </div>
            </div>
            <div class="row mt-3">
                <div>
                    <button type="submit" class="btn btn-info text-white">Update</button>
                    <a href="/" class="btn btn-secondary text-white">Batal</a>
                </div>
            </div>
        </form>
    </div>
@endsection