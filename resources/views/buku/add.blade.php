@extends('layouts.app')

@section('content')

    <div class="container">
    <h3>Tambah Data Buku</h3>
    <form action="{{ url('/buku') }}"method="post">
    @csrf
        <table class="table">
            <tr>
                <td>KODE</td>
                <td><input type="text" name="buku_kode" class="form-control"></td>
            </tr>
            <tr>
                <td>JUDUL</td>
                <td><input type="text" name="buku_judul" class="form-control"></td>
            </tr>
            <tr>
                <td>KATEGORI</td>
                <td>
                    <select name="buku_kategori" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Novel">Novel</option>
                        <option value="Komik">Komik</option>
                        <option value="Ensiklopedia">Ensiklopedia</option>
                        <option value="Realigi">Realigi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>PENERBIT</td>
                <td><input type="text" name="buku_penerbit" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    </div>
@endsection
