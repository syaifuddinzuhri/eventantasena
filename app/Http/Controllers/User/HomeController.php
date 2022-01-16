<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function registrasi()
    {
        return view('user.registrasi');
    }

    public function kontak()
    {
        return view('user.kontak');
    }

    public function jadwal()
    {
        return view('user.jadwal');
    }

    public function galeri()
    {
        return view('user.galeri');
    }

    public function berkas()
    {
        return view('user.berkas');
    }

    public function fiqsi()
    {
        return view('user.events.fiqsi');
    }

    public function isc()
    {
        return view('user.events.isc');
    }

    public function gatra()
    {
        return view('user.events.gatra');
    }

    public function osiris()
    {
        return view('user.events.osiris');
    }
}
