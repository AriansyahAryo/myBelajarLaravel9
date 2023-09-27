@extends('layout/aplikasi')

@section('konten')
<div>
    <a href="/siswa" class="btn btn-secondary">Balik</a>
    <h1>{{$data->nama}}</h1>
    <p>
        <b>Nomor induk</b>{{$data->nomor_induk}}
    </p>
    <p>
        <b>Alamat</b>{{$data->alamat}}
    </p>
</div>

@endsection