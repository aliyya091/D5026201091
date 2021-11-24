<!DOCTYPE html>
<html>
<head>
	<title>Query Builder - Tambah</title>
</head>
<body>

	<h2>Tambah Data Absen</h2>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="id" required="required"> <br/>
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"> <br/>
		Status <input name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
