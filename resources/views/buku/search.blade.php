@extends('layouts.master')
@section('content')
@if(count($data_buku))
<div class="container">
    <div class="alert alert-info">Ditemukan {{ count($data_buku) }} data dengan kata `<b>{{$cari}}</b>`</div>
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
    <div class="row justify-content-end mt-5">
        <div class="col-3">
            <div>{{$data_buku->links()}}</div>
        </div>
    </div>
    @else
    <div class="mx-3">
        <h4>Data {{$cari}} tidak ditemukan</h4>
        <a href="/" class="btn btn-secondary">Kembali</a>
    </div>
    @endif
</div>
@endsection