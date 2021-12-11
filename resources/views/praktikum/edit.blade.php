@extends('layout.happy')
@section('title','Data Bagian')
@section('konten')

@section('judulhalaman', 'Edit Data Bagian')

	<a href="/praktikum" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($bagian as $b)
	<form action="/praktikum/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $b->kodebagian }}"> <br/>

        <div class="container">
            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="namabagian" class="col-sm-2 control-label">Nama Bagian :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="text" name="namabagian" required="required" value="{{ $b->namabagian }}"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="jumlahbagian" class="col-sm-2 control-label">Jumlah Bagian :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="number" name="jumlahbagian" required="required" value="{{ $b->jumlahbagian }}"> <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="tersedia" class="col-sm-2 control-label">Ketersediaan :</label>
                        <div class='col-sm-4 input-group date'>
                            <input type="radio" id="y" name="tersedia" value="Y" @if($b->tersedia==='Y') @endif>
                            <label for="y">Tersedia</label><br>
                            <input type="radio" id="t" name="tersedia" value="T" @if($b->tersedia==='T') checked="checked" @endif>
                            <label for="t">Tidak Tersedia</label><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
