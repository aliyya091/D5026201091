@extends('layout.happy')
@section('title','Data Nilai Kuliah')
@section('konten')

@section('judulhalaman', 'Data Nilai Kuliah')

	<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah </a>

	<br/>
	<br/>

    {{-- <script>
        function nilaiHuruf(NilaiAngka){
            if(NilaiAngka )
        }
    </script> --}}

	<table class="table table-light table-bordered">
		<tr class="table table-light table-bordered">
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                <?php
                    if($n->NilaiAngka <=40){
                        echo "D";
                    } elseif ($n->NilaiAngka >=41 && $n->NilaiAngka <=60) {
                        echo "C";
                    } elseif ($n->NilaiAngka >=61 && $n->NilaiAngka <=80) {
                        echo "B";
                    } else{
                        echo "A";
                    }
                    ?>
            </td>
            <td>
                <?php
                    $bobot = $n->NilaiAngka * $n->SKS;
                    echo $bobot;
                    ?>
            </td>
		</tr>
		@endforeach
	</table>

    {{ $nilaikuliah->links()  }}
@endsection
