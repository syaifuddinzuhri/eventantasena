<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\KategoriLomba;
use App\Models\Partner;
use App\Models\Profil;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $profil = Profil::first();
        $partners = Partner::get();
        $kategori = KategoriLomba::get();
        $data = (object) [
            'profil' => $profil,
            'partners' => $partners,
            'kategori' => $kategori,
        ];
        return view('user.home', compact('data'));
    }

    public function registrasi()
    {
        $profil = Profil::first();
        $data = (object) [
            'profil' => $profil
        ];
        return view('user.registrasi', compact('data'));
    }

    public function kontak()
    {
        $profil = Profil::first();
        $data = (object) [
            'profil' => $profil
        ];
        return view('user.kontak', compact('data'));
    }

    public function jadwal()
    {
        $profil = Profil::first();
        $data = (object) [
            'profil' => $profil
        ];
        return view('user.jadwal', compact('data'));
    }

    public function galeri()
    {
        $profil = Profil::first();
        $data = (object) [
            'profil' => $profil
        ];
        return view('user.galeri', compact('data'));
    }

    public function berkas()
    {
        $profil = Profil::first();
        $data = (object) [
            'profil' => $profil
        ];
        return view('user.berkas', compact('data'));
    }

    public function fiqsi()
    {
        $profil = Profil::first();
        $data = (object) [
            'profil' => $profil
        ];
        return view('user.events.fiqsi', compact('data'));
    }

    public function isc()
    {
        $profil = Profil::first();
        $data = (object) [
            'profil' => $profil
        ];
        return view('user.events.isc', compact('data'));
    }

    public function gatra()
    {
        $profil = Profil::first();
        $data = (object) [
            'profil' => $profil
        ];
        return view('user.events.gatra', compact('data'));
    }

    public function osiris()
    {
        $profil = Profil::first();
        $data = (object) [
            'profil' => $profil
        ];
        return view('user.events.osiris', compact('data'));
    }
}
