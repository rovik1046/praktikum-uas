@extends('layouts.app')

@section('content')

 <div class="container">

 <h3>Daftar Buku</h3>
    <a href="{{ url('buku/create') }}">Tambah Data</a>
    <form class="form" method="get" action="{{ route('search')}}">
        <div class="form-group w-50 mb-3">
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Cari berdasarkan judul">
            <button type="submit" class="btn btn-primary mb-1">Cari</button>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <td>KODE</td>
                <td>JUDUL</td>
                <td>KATEGORI</td>
                <td>PENERBIT</td>
                <td>EDIT</td>
                <td>LIHAT</td>
                <td>HAPUS</td>
            </tr>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->buku_kode }}</td>
                <td>{{ $row->buku_judul }}</td>
                <td>{{ $row->buku_kategori }}</td>
                <td>{{ $row->buku_penerbit }}</td>
                <td><a href="{{ url('buku/' . $row->buku_id . '/edit') }}" class="btn btn-warning">Edit </a></td>
                <td><a href="{{ url('buku/' . $row->buku_id . '/lihat') }}" class="btn btn-success">Lihat</a></td>
                <td>
                    <form action="{{ url('buku/' . $row->buku_id) }}" method="POST">
                        <input name="_method" type="hidden" value="DELETE">
                        @csrf
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
@endforeach
        </table>
    </div>
</div>    
@endsection