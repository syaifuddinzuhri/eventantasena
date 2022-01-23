<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\KategoriLomba;
use App\Models\Profil;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = cache()->remember('jadwals', 5, function () {
                return Jadwal::with('kategori_lomba')->get();
            });
            return DataTables::of($data)
                ->setRowAttr([
                    'id' => function ($data) {
                        return $data->id;
                    },
                ])
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = '<div class="btn-group" role="group">';
                    $button .= '<a href="/jadwal/' . $data->id . '/edit" class="btn btn-sm btn-info">
                        <i class="fa fa-edit" aria-hidden="true"></i> </a>';
                    $button .= '<a href="javascript:void(0)" data-toggle="modal" data-id="' . $data->id . '" data-target="#delete-jadwal-modal" class="btn btn-sm btn-danger btn-delete">
                                                <i class="fa fa-trash" aria-hidden="true"></i></a>';
                    $button .= '</div>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $profil = Profil::first();
        $jadwals = Jadwal::with('kategori_lomba')->get();
        $data = (object) [
            'profil' => $profil,
            'jadwals' => $jadwals
        ];
        return view('admin.jadwal.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profil = Profil::first();
        $kategori = KategoriLomba::get();
        $data = (object) [
            'profil' => $profil,
            'kategori' => $kategori
        ];
        return view('admin.jadwal.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payload = $request->all();
        Jadwal::create($payload);

        return redirect()->route('jadwal.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil = Profil::first();
        $kategori = KategoriLomba::get();
        $jadwal = Jadwal::find($id);
        $data = (object) [
            'profil' => $profil,
            'kategori' => $kategori,
            'jadwal' => $jadwal
        ];
        return view('admin.jadwal.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payload = $request->all();
        $data = Jadwal::find($id);
        $data->update($payload);

        return redirect()->route('jadwal.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jadwal::find($id);
        $data->delete();
        return response()->json('success');
    }
}
