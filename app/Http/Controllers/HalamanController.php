<?php

namespace App\Http\Controllers;

class HalamanController extends Controller
{
    public function index()
    {
        return view("halaman/index");

    }
    public function tentang()
    {
        return view("halaman/tentang");
    }
    public function kontak()
    {
        // $judul = 'ini adalah Halaman Kontak';
        // return view("halaman/kontak")->with('halaman_judul', $judul);
        $data = [
            'judul' => "ini adalah halaman KOntak",
            'kontak' => [
                'email' => 'Aryooo.bladegmail.com',
                'youtube' => 'Apa ya lupa cahannelnya',
            ],
        ];
        return view("halaman/kontak")->with($data);
    }
}
