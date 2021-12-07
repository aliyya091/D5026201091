@extends('layout.happy')
@section('title','Data Absensi Pegawai')
@section('konten')

@section('judulhalaman', 'Edit Data Pegawai')

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="container">
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-2 control-label">Jabatan :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="umur" class="col-sm-2 control-label">Umur :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
