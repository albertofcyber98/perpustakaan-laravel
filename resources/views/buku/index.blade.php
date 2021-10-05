@extends('layouts.master')
@section('content')
    <div class="container">
        <h4>Data Buku</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Harga</th>
                    <th>Tanggal Terbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_buku as $buku)
                    <tr>
                        <td>{{$buku->id}}</td>
                        <td>{{$buku->judul}}</td>
                        <td>{{$buku->penulis}}</td>
                        <td>@currency($buku->harga)</td>
                        <td>{{$buku->tgl_terbit->format('l, d F Y')}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection