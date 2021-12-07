@extends('layout.happy')
@section('title','Data Absensi Pegawai')
@section('konten')

@section('judulhalaman', 'Data Absensi Pegawai')

	<a href="/absen/tambah" class = "btn btn-primary"> + Tambah Absen Baru</a>

	<br/>
	<br/>

	<table class="table table-light table-bordered">
		<tr class="table table-light table-bordered">
			<th>ID</th>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->absen_id }}</td>
			<td>{{ $a->absen_idpegawai }}</td>
			<td>{{ $a->absen_tanggal }}</td>
			<td>{{ $a->absen_status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->absen_id }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->absen_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
