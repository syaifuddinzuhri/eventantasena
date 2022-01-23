<?php

namespace App\Http\Controllers;

use App\Constant\GlobalConstant;
use App\Models\Galeri;
use App\Models\Profil;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = cache()->remember('galeris', 5, function () {
                return Galeri::get();
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
                    $button .= '<a href="/galeri/' . $data->id . '/edit" class="btn btn-sm btn-info">
                        <i class="fa fa-edit" aria-hidden="true"></i> </a>';
                    $button .= '<a href="javascript:void(0)" data-toggle="modal" data-id="' . $data->id . '" data-target="#delete-galeri-modal" class="btn btn-sm btn-danger btn-delete">
                                                <i class="fa fa-trash" aria-hidden="true"></i></a>';
                    $button .= '</div>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $profil = Profil::first();
        $galeris = Galeri::get();
        $data = (object) [
            'profil' => $profil,
            'galeris' => $galeris
        ];
        return view('admin.galeri.index', compact('data'));
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
            'profil' => $profil,
        ];
        return view('admin.galeri.create', compact('data'));
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
        if ($request->hasFile('gambar') || $request->gambar != null) {
            $file = $request->file('gambar');
            $file_name = upload_image($file, GlobalConstant::IMAGE);
            $payload['gambar'] = $file_name;
        }
        Galeri::create($payload);
        return redirect()->route('galeri.index')->with('success', 'Data berhasil ditambahkan');
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
        $galeri = Galeri::find($id);
        $data = (object) [
            'profil' => $profil,
            'galeri' => $galeri
        ];
        return view('admin.galeri.edit', compact('data'));
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
        $data = Galeri::find($id);
        $payload = $request->all();
        if ($request->hasFile('gambar') || $request->gambar != null) {
            $file = $request->file('gambar');
            $file_name = upload_image($file, GlobalConstant::IMAGE);
            $payload['gambar'] = $file_name;
        }
        $data->update($payload);

        return redirect()->route('galeri.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Galeri::find($id);
        $exp = explode('/', $data->logo_favicon);
        unlink_image(GlobalConstant::IMAGE, end($exp));
        $data->delete();
        return response()->json('success');
    }
}
