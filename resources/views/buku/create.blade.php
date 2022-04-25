@extends('layouts.master')
@section('content')
    <div class="container">
        <h4>Tambah Buku</h4>
        @if (count($errors)>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form method="GET" action="{{route('buku.store')}}">
            @csrf
            <div class="row">
                <div class="col-2">
                    <label for="judul" class="col-form-label">Judul Buku</label>
                </div>
                <div class="col-9">
                    <input type="text" name="judul" id="judul" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="penulis" class="col-form-label">Penulis Buku</label>
                </div>
                <div class="col-9">
                    <input type="text" name="penulis" id="penulis" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="harga" class="col-form-label">Harga Buku</label>
                </div>
                <div class="col-9">
                    <input type="text" name="harga" id="harga" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-2">
                    <label for="terbit" class="col-form-label">Tgl. Terbit</label>
                </div>
                <div class="col-9">
                    <input type="date" name="tgl_terbit" id="terbit" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div>
                    <button type="submit" class="btn btn-info text-white">Simpan</button>
                    <a href="/" class="btn btn-secondary text-white">Batal</a>
                </div>
            </div>
        </form>
    </div>
@endsection