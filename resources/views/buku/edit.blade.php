@extends('layouts.app')

@section('content')

    <div class="container">
    <h3>Edit Data Buku</h3>
    <form action="{{ url('/buku/' . $row->buku_id) }}" method="POST">
    <input name="_method" type="hidden" value="PATCH">
    @csrf
        <table class="table">
            <tr>
                <td>KODE</td>
                <td><input type="text" name="buku_kode" class="form-control" value="{{ $row->buku_kode }}"></td>
            </tr>
            <tr>
                <td>JUDUL</td>
                <td><input type="text" name="buku_judul" class="form-control" value="{{ $row->buku_judul }}"></td>
            </tr>
            <tr>
                <td>KATEGORI</td>
                <td>
                    <select name="buku_kategori" class="form-control">
                        <option value="">-- Pilih Kategori Buku --</option>
                        <option value="Novel">Novel</option>
                        <option value="Komik">Komik</option>
                        <option value="Ensiklopedia">Ensiklopedia</option>
                        <option value="Realigi">Realigi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>PENERBIT</td>
                <td><input type="text" name="buku_penerbit" class="form-control" value="{{ $row->buku_penerbit }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="UPDATE" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    </div>
@endsection
