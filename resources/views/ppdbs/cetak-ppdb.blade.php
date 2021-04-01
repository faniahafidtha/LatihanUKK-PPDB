@extends('ppdbs.layout')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>PPDB PDF</title>
</head>
	<br>
	<p align="center"><b>Data Pendaftaran Peserta Didik Baru</b></p>
	<div class="col-md-12">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
					<th scope="col">NIS</th>
           		    <th scope="col">Nama</th>
            		<th scope="col">Jenis Kelamin</th>
            		<th scope="col">Tempat Lahir</th>
            		<th scope="col">Tanggal Lahir</th>
            		<th scope="col">Alamat</th>
            		<th scope="col">Asal Sekolah</th>
            		<th scope="col">Kelas</th>
            		<th scope="col">Jurusan</th>
            </thead>
			@foreach ($ppdbs as $ppdb)
            <tr bgcolor="white">
				<td>{{ $ppdb->nis }}</td>
           	 	<td>{{ $ppdb->nama }}</td>
            	<td>{{ $ppdb->jk }}</td>
            	<td>{{ $ppdb->tempat_lahir }}</td>
            	<td>{{ $ppdb->tgl_lahir }}</td>
            	<td>{{ $ppdb->alamat }}</td>
            	<td>{{ $ppdb->asal_sekolah }}</td>
            	<td>{{ $ppdb->kelas }}</td>
            	<td>{{ $ppdb->jurusan }}</td>
            </tr>
            @endforeach
        </table>
    </div>
	<script type="text/javascript">
    window.print();
</script>

</body>

<h6 align="right">
	@php $tgl=date('d-m-Y'); @endphp
   	Bogor, {{$tgl}} 
   	</br>
	Kepala SMK
	<br><br><br><br><br>
</h6>

<h6 align="right"> 
TTD
</html>
@endsection