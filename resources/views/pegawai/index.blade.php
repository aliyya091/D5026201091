@extends('layout.happy')
@section('title','Data Pegawai')
@section('konten')

@section('judulhalaman', 'Data Pegawai')

	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

    <div class="form-group" align='center'>
        <form action="/pegawai/cari" method="GET">
            <p><label for="cari">Cari Data Pegawai :</label></p>
            <input class="form-control" type="text" name="cari" style="max-width: 70%" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <br>
            <input type="submit" value="CARI" class="btn btn-primary">
        </form>
        <br>
    </div>

	<table class="table table-light table-bordered">
		<tr class="table table-light table-bordered">
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links()  }}
@endsection
