@extends('layouts.master')
@section('content')
    <div class="container">
        <h4>Tambah Buku</h4>
        <form action="{{route('buku.store')}}" method="post">
            @csrf
            <div class="">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>
        </form>
    </div>
@endsection