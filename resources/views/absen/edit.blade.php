@extends('layout.happy')
@section('title', 'Data Absensi Pegawai')
@section('judulhalaman', 'Edit Data Absensi Pegawai')

@section('konten')

	<a href="/absen" class="btn btn-primary"> Kembali</a>

	<br/>
    <h3>{{ $status }}</h3>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->absen_id }}">
         <div class="container">

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$a->absen_idpegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" value="{{ $a->absen_tanggal }}" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <div class="form-group">
                        <label for="status" class="col-sm-2 control-label">Status :</label>
                        <div class='col-sm-4 input-group date'>
                            <input type="radio" id="h" name="status" value="H" @if($a->absen_status==='H') checked="checked" @endif>
                            <label for="h">HADIR</label><br>
                            <input type="radio" id="a" name="status" value="A" @if($a->absen_status==='A') checked="checked" @endif>
                            <label for="a">TIDAK HADIR</label><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>


		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

    @endsection
