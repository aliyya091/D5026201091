@extends('layout.happy')
@section('title','Data Absensi Pegawai')
@section('konten')

@section('judulhalaman', 'Tambah Data Pegawai')

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="container">
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="text" name="nama" required="required"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-2 control-label">Jabatan :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="text" name="jabatan" required="required"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="umur" class="col-sm-2 control-label">Umur :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="number" name="umur" required="required"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <textarea name="alamat" required="required"></textarea> <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
