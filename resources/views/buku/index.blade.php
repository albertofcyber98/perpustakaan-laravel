@extends('layouts.master')
@section('content')
    <div class="container">
        <h4>Data Buku</h4>
        <a href="{{ route('buku.create')}}" class="btn btn-info text-white my-3">Tambah Buku</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Harga</th>
                    <th>Tanggal Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_buku as $buku)
                    <tr>
                        <td>{{++$no}}</td>
                        <td>{{$buku->judul}}</td>
                        <td>{{$buku->penulis}}</td>
                        <td>{{$buku->harga}}</td>
                        <td>{{$buku->tgl_terbit->format('l, d F Y')}}</td>
                        <td> <form action="{{route('buku.destroy', $buku->id)}}" method="POST">
                            @csrf
                            <button onclick="return confirm('Yaki ingin menghapus data ?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection