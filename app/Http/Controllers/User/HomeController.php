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
        $kategori = KategoriLomba::get();
        $data = (object) [
            'profil' => $profil,
            'kategori' => $kategori
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
        $kategori = KategoriLomba::get();
        $data = (object) [
            'profil' => $profil,
            'kategori' => $kategori
        ];
        return view('user.berkas', compact('data'));
    }

    public function fiqsi()
    {
        $profil = Profil::first();
        $fiqsi = KategoriLomba::with('cabangs')->where('type', 'fiqsi')->first();
        $data = (object) [
            'profil' => $profil,
            'fiqsi' => $fiqsi
        ];
        return view('user.events.fiqsi', compact('data'));
    }

    public function isc()
    {
        $profil = Profil::first();
        $isc = KategoriLomba::with('cabangs')->where('type', 'isc')->first();
        $data = (object) [
            'profil' => $profil,
            'isc' => $isc
        ];
        return view('user.events.isc', compact('data'));
    }

    public function gatra()
    {
        $profil = Profil::first();
        $gatra = KategoriLomba::with('cabangs')->where('type', 'gatra')->first();
        $data = (object) [
            'profil' => $profil,
            'gatra' => $gatra
        ];
        return view('user.events.gatra', compact('data'));
    }

    public function osiris()
    {
        $profil = Profil::first();
        $osiris = KategoriLomba::with('cabangs')->where('type', 'osiris')->first();
        $data = (object) [
            'profil' => $profil,
            'osiris' => $osiris
        ];
        return view('user.events.osiris', compact('data'));
    }
}
