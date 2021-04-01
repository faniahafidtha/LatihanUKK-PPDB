@extends('adminlte::page')
 
@section('title', 'Form PPDB')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><h2>Data Pendaftaraan Peserta Didik Baru (PPDB)</h2>
            </div>
            <div class="pull-right">
                <br><a class="btn btn-success" href="{{ route('ppdbs.create') }}"> Tambah Data Baru</a><br><br>
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
            <td>
                <form action="{{ route('ppdbs.destroy',$ppdb->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('ppdbs.show',$ppdb->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('ppdbs.edit',$ppdb->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <tr>
        <th><a class="btn btn-primary" href="{{ route('cetak-ppdb') }}" target="_blank">Cetak Data</a></th>
   </tr>
    {!! $ppdbs->links() !!}
@endsection


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop