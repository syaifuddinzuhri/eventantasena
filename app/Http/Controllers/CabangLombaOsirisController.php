<?php

namespace App\Http\Controllers;

use App\Constant\GlobalConstant;
use App\Models\CabangLomba;
use App\Models\KategoriLomba;
use App\Models\Profil;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CabangLombaOsirisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = cache()->remember('cabang-osiris', 5, function () {
                return CabangLomba::with('kategori')->whereHas('kategori', function($q){
                    $q->where('type', 'osiris');
                })->get();
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
                    $button .= '<a href="/cabang/osiris/' . $data->id . '/edit" class="btn btn-sm btn-info">
                        <i class="fa fa-edit" aria-hidden="true"></i> </a>';
                    $button .= '<a href="javascript:void(0)" data-toggle="modal" data-id="' . $data->id . '" data-target="#delete-cabang-osiris-modal" class="btn btn-sm btn-danger btn-delete">
                                                <i class="fa fa-trash" aria-hidden="true"></i></a>';
                    $button .= '</div>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $profil = Profil::first();
        $osiris = CabangLomba::with('kategori')->whereHas('kategori', function($q){
            $q->where('type', 'osiris');
        })->get();
        $data = (object) [
            'profil' => $profil,
            'osiris' => $osiris
        ];
        return view('admin.osiris.cabang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profil = Profil::first();
        $data = (object) [
            'profil' => $profil
        ];
        return view('admin.osiris.cabang.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = KategoriLomba::where('type', 'osiris')->first();
        $payload = $request->all();
        if ($request->hasFile('gambar') || $request->gambar != null) {
            $file = $request->file('gambar');
            $file_name = upload_image($file, GlobalConstant::IMAGE);
            $payload['gambar'] = $file_name;
        }
        $payload['kategori_lomba_id'] = $kategori->id;
        CabangLomba::create($payload);
        return redirect()->route('cabang.osiris.index')->with('success', 'Data berhasil ditambahkan');
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
        $osiris = CabangLomba::find($id);
        $data = (object) [
            'profil' => $profil,
            'osiris' => $osiris
        ];
        return view('admin.osiris.cabang.edit', compact('data'));
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
        $data = CabangLomba::find($id);
        $payload = $request->all();
        if ($request->hasFile('gambar') || $request->gambar != null) {
            $file = $request->file('gambar');
            $file_name = upload_image($file, GlobalConstant::IMAGE);
            $payload['gambar'] = $file_name;
        }
        $data->update($payload);
        return redirect()->route('cabang.osiris.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CabangLomba::find($id);
        $exp = explode('/', $data->gambar);
        unlink_image(GlobalConstant::IMAGE, end($exp));
        $data->delete();
        return response()->json('success');
    }
}
