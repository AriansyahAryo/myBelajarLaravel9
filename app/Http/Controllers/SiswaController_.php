<?php

namespace App\Http\Controllers;

use App\Models\siswa;

class SiswaController extends Controller
{
    //
    public function index()
    {
        // $data = siswa::all();
        $data = siswa::orderBy('nomor_induk', 'asc')->paginate(1);
        return view('siswa/index')->with('data', $data);

    }
    public function detail($id)
    {
        // return "<h1>Saya adalah Siswa Detail dari kontroler dengan id $id</h1>";
        $data = siswa::where('nomor_induk', $id)->first();
        return view('siswa/show')->with('data', $data);
    }
    public function create()
    {

    }
    public function detele()
    {

    }
}
