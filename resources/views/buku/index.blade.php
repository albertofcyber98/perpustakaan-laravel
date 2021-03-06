@extends('layouts.master')
@section('content')
<div class="container">
    @if(Session::has('pesan'))
    <div class="alert alert-success">{{ Session::get('pesan')}}</div>
    @endif
    <h4>Data Buku</h4>
    <a href="{{ route('buku.create')}}" class="btn btn-info text-white my-3">Tambah Buku</a>
    <form action="{{route('buku.search')}}" method="get">
        @csrf
        <input type="text" placeholder="Cari..." name="kata">
    </form>
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
                <td>{{$buku->tgl_terbit->format('d/m/Y')}}</td>
                <td>
                    <form action="{{route('buku.destroy', $buku->id)}}" method="POST">
                        @csrf
                        <a href="{{route('buku.edit', $buku->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <button onclick="return confirm('Yakin ingin menghapus data ?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row justify-content-between mt-5">
        <div class="col-4">
            <div>Jumlah Buku : {{$jumlah_buku}}</div>
        </div>
        <div class="col-3">
            <div>{{$data_buku->links()}}</div>
        </div>
    </div>
</div>
@endsection