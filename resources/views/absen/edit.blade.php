<!DOCTYPE html>
<html>
<head>
	<title>Query Builder - Edit</title>
</head>
<body>

	<h2>Edit Absen</h2>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->absen_id }}"> <br/>
		ID <input type="number" name="id" required="required"> <br/>
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"> <br/>
		Status <input name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
