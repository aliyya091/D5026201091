<!DOCTYPE html>
<html>
<head>
	<title>Query Builder PWeb D</title>
</head>
<body>

	<h2>Query Builder PWeb Kelas D</h2>
    <h5>Aliyya Zahra Nurulhusna | 5026201091</h5><br>
	<h4>Data Absen</h4>

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
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


</body>
</html>
