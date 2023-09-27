@extends('layout/aplikasi')
@section('konten')
    
<div>
    <h1>HALAMAN Kontak</h1>
    <h2>{{ $judul }}</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus quos dicta, assumenda, optio itaque adipisci ex repellendus sunt laudantium ipsum ipsa similique deleniti reiciendis qui explicabo fuga? Explicabo, cum dolore. Recusandae expedita magni maxime unde dolore quod obcaecati numquam aut.</p>
    <p>
        <ul>
            <li>Email : {{$kontak['email']}}</li>
            <li>Youtube : {{$kontak['youtube']}}</li>
        </ul>
    </p>

</div>
@endsection