<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pegawaibaru extends Controller
{
    function index()
    {
        return view('App.pagawaibaru');
    }

    function tambah()
    {
        return view('App.tambah');
    }

    function edit()
    {
        return view('App.editpegawai');
    }
}
