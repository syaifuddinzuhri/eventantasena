<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Jadwal;
use App\Models\KategoriLomba;
use App\Models\Kontak;
use App\Models\Partner;
use App\Models\Profil;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $profil = Profil::first();
        $kontak = Kontak::first();
        $partners = Partner::get();
        $kategori = KategoriLomba::get();
        $data = (object) [
            'profil' => $profil,
            'partners' => $partners,
            'kategori' => $kategori,
            'kontak' => $kontak,
        ];
        return view('user.home', compact('data'));
    }

    public function registrasi()
    {
        $kontak = Kontak::first();
        $profil = Profil::first();
        $kategori = KategoriLomba::get();
        $data = (object) [
            'profil' => $profil,
            'kontak' => $kontak,
            'kategori' => $kategori
        ];
        return view('user.registrasi', compact('data'));
    }

    public function kontak()
    {
        $profil = Profil::first();
        $kontak = Kontak::first();
        $data = (object) [
            'profil' => $profil,
            'kontak' => $kontak,
        ];
        return view('user.kontak', compact('data'));
    }

    public function jadwal()
    {
        $kontak = Kontak::first();
        $profil = Profil::first();
        $jadwals = Jadwal::with('kategori_lomba')->latest()->get();
        $data = (object) [
            'kontak' => $kontak,
            'profil' => $profil,
            'jadwals' => $jadwals
        ];
        return view('user.jadwal', compact('data'));
    }

    public function galeri()
    {
        $kontak = Kontak::first();
        $profil = Profil::first();
        $galeris = Galeri::get();
        $data = (object) [
            'kontak' => $kontak,
            'profil' => $profil,
            'galeris' => $galeris
        ];
        return view('user.galeri', compact('data'));
    }

    public function berkas()
    {
        $kontak = Kontak::first();
        $profil = Profil::first();
        $kategori = KategoriLomba::get();
        $data = (object) [
            'kontak' => $kontak,
            'profil' => $profil,
            'kategori' => $kategori
        ];
        return view('user.berkas', compact('data'));
    }

    public function fiqsi()
    {
        $kontak = Kontak::first();
        $profil = Profil::first();
        $fiqsi = KategoriLomba::with('cabangs')->where('type', 'fiqsi')->first();
        $data = (object) [
            'kontak' => $kontak,
            'profil' => $profil,
            'fiqsi' => $fiqsi
        ];
        return view('user.events.fiqsi', compact('data'));
    }

    public function isc()
    {
        $kontak = Kontak::first();
        $profil = Profil::first();
        $isc = KategoriLomba::with('cabangs')->where('type', 'isc')->first();
        $data = (object) [
            'kontak' => $kontak,
            'profil' => $profil,
            'isc' => $isc
        ];
        return view('user.events.isc', compact('data'));
    }

    public function gatra()
    {
        $kontak = Kontak::first();
        $profil = Profil::first();
        $gatra = KategoriLomba::with('cabangs')->where('type', 'gatra')->first();
        $data = (object) [
            'kontak' => $kontak,
            'profil' => $profil,
            'gatra' => $gatra
        ];
        return view('user.events.gatra', compact('data'));
    }

    public function osiris()
    {
        $kontak = Kontak::first();
        $profil = Profil::first();
        $osiris = KategoriLomba::with('cabangs')->where('type', 'osiris')->first();
        $data = (object) [
            'kontak' => $kontak,
            'profil' => $profil,
            'osiris' => $osiris
        ];
        return view('user.events.osiris', compact('data'));
    }
}
