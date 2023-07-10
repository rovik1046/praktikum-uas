@extends('layouts.app')
@section('content')
<div class="container"> 
<h3>Lihat Data Buku</h3>
	@csrf
		<table class="table">
			<tr>
				<td>KODE</td>
				<td>{{ $row->buku_kode }}</td>
			</tr>
			<tr>
				<td>JUDUL</td><td>{{ $row->buku_judul }}</td>
			</tr>
			<tr>
				<td>KATEGORI</td><td>{{ $row->buku_kategori }}</td>
			</tr>
			<tr>
				<td>PENERBIT</td><td>{{ $row->buku_penerbit }}</td>
			</tr>
			<tr>
				<td><a href="/buku" class="btn btn-primary">Kembali</a></td>
			</tr>
		</table>
</div>
@endsection
