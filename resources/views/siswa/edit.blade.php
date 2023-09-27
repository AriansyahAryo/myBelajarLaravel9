@extends('layout/aplikasi')

@section('konten')
<form action="{{'/siswa/'.$data->nomor_induk}}" method="POST">
    <a href="/siswa" class="btn btn-primary">Kembali</a>
    @csrf
    @method('PUT')
    <div class="mb-3">
        <h1>Nomor Induk : {{$data->nomor_induk}}</h1>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama"  value="{{$data->nama}}">  
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat">{{$data->alamat}}</textarea> 

           
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">UBAH</button>
    </div>

</form>
@endsection