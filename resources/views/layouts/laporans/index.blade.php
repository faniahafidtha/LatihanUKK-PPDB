@extends('adminlte::page')
 
@section('title', 'Data Siswa')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><h2>Data Siswa</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <thead class="thead-dark">
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th width="280px">Action</th>
        </th>
        @foreach ($siswas as $siswa)
        <tr bgcolor="white">
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->jk }}</td>
            <td>{{ $siswa->tempat_lahir }}</td>
            <td>{{ $siswa->tgl_lahir }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->asal_sekolah }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>{{ $siswa->jurusan }}</td>
        </tr>
        @endforeach
    </table>
    <tr>
        <th><a class="btn btn-primary" href="{{ route('cetak-siswa') }}" target="_blank">Cetak Data</a></th>
   </tr>
    {!! $siswas->links() !!}
      
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop