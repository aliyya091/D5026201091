@extends('layout.happy')
@section('title','Data Nilai Kuliah')
@section('konten')

@section('judulhalaman', 'Tambah Data Nilai Kuliah')

	<a href="/nilaikuliah" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}

        <div class="container">
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="NRP" class="col-sm-2 control-label">NRP :</label>
                        <div class='col-sm-4 input-group date' id='nrp'>
                            <input type="text" name="NRP" required="required" minlength="6" maxlength="6" pattern="[0-9]+"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="NilaiAngka" class="col-sm-2 control-label">Nilai Angka :</label>
                        <div class='col-sm-4 input-group date' id='nilaiangka'>
                            <input type="number" name="NilaiAngka" required="required" max="100"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="SKS" class="col-sm-2 control-label">SKS :</label>
                        <div class='col-sm-4 input-group date' id='sks'>
                            <input type="number" name="SKS" required="required" max="4"> <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
