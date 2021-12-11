@extends('layout.happy')
@section('title','Data Bagian')
@section('konten')

@section('judulhalaman', 'Data Bagian')

	<a href="/praktikum/tambah" class="btn btn-primary"> + Tambah Bagian Baru</a>

	<br/>
	<br/>

    <div class="form-group" align='center'>
        <form action="/praktikum/cari" method="GET">
            <p><label for="cari">Cari Bagian :</label></p>
            <input class="form-control" type="text" name="cari" style="max-width: 70%" placeholder="Cari Bagian ..." value="{{ old('cari') }}">
            <br>
            <input type="submit" value="CARI" class="btn btn-primary">
        </form>
        <br>
    </div>

	<table class="table table-light table-bordered">
		<tr class="table table-light table-bordered">
			<th>Nama Bagian</th>
			<th>Jumlah Bagian</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>
		</tr>
		@foreach($bagian as $b)
		<tr>
			<td>{{ $b->namabagian }}</td>
			<td>{{ $b->jumlahbagian }}</td>
			<td>{{ $b->tersedia }}</td>
			<td>
				<a href="/praktikum/edit/{{ $b->kodebagian }}">Edit</a>
				|
				<a href="/praktikum/hapus/{{ $b->kodebagian }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $bagian->links()  }}
@endsection
