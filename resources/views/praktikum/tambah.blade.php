@extends('layout.happy')
@section('title','Data Bagian')
@section('konten')

@section('judulhalaman', 'Tambah Data Bagian')

	<a href="/praktikum" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/praktikum/store" method="post">
		{{ csrf_field() }}

        <div class="container">
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="namabagian" class="col-sm-2 control-label">Nama Bagian :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="text" name="namabagian" required="required"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="jumlahbagian" class="col-sm-2 control-label">Jumlah Bagian :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="number" name="jumlahbagian" required="required"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="tersedia" class="col-sm-2 control-label">Ketersediaan :</label>
                        <div class='col-sm-4 input-group date'>
                            <input type="radio" id="y" name="tersedia" value="Y">
                            <label for="y">Tersedia</label><br>
                            <input type="radio" id="t" name="tersedia" value="T" checked="checked">
                            <label for="t">Tidak Tersedia</label><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
