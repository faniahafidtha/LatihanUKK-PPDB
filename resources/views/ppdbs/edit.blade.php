@extends('adminlte::page')
 
@section('title', 'Form PPDB')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ppdbs.index') }}">Kembali</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('ppdbs.update',$ppdb->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS : </strong>
                <input type="text" name="nis" value="{{ $ppdb->nis }}"  class="form-control" placeholder="Input NIS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama : </strong>
                <input type="text" name="nama" value="{{ $ppdb->nama }}" class="form-control" placeholder="Input Nama Lengkap">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin</strong>
               <select name="jk" class="form-control">
                   <option value="Laki-laki" {{$ppdb->jk === "Laki-laki" ? "selected" : ""}}>Laki - Laki</option>
                   <option value="Perempuan" {{$ppdb->jk === "Perempuan" ? "selected" : ""}}>Perempuan</option>
               </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat Lahir : </strong>
                <input type="text" name="tempat_lahir" value="{{ $ppdb->tempat_lahir }}" class="form-control" placeholder="Input Tempat Lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <input type="date" name="tgl_lahir" value="{{ $ppdb->tgl_lahir }}"  class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat : </strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Input Alamat Lengkap">{{ $ppdb->alamat }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Asal Sekolah : </strong>
                <input type="text" name="asal_sekolah" value="{{ $ppdb->asal_sekolah }}" class="form-control" placeholder="Input Asal Sekolah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas : </strong>  
                <input type="text" name="kelas" value="{{ $ppdb->kelas }}" class="form-control" placeholder="Input Kelas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jurusan : </strong>
                <input type="text" name="jurusan" value="{{ $ppdb->jurusan }}" class="form-control" placeholder="Input Jurusan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
    </form>
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop