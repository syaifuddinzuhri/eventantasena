<?php

namespace App\Http\Controllers;

use App\Constant\GlobalConstant;
use App\Models\Sponsor;
use App\Models\Profil;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = cache()->remember('sponsors', 5, function () {
                return Sponsor::get();
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
                    $button .= '<a href="/sponsor/' . $data->id . '/edit" class="btn btn-sm btn-info">
                        <i class="fa fa-edit" aria-hidden="true"></i> </a>';
                    $button .= '<a href="javascript:void(0)" data-toggle="modal" data-id="' . $data->id . '" data-target="#delete-sponsor-modal" class="btn btn-sm btn-danger btn-delete">
                                                <i class="fa fa-trash" aria-hidden="true"></i></a>';
                    $button .= '</div>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $profil = Profil::first();
        $sponsors = Sponsor::get();
        $data = (object) [
            'profil' => $profil,
            'sponsors' => $sponsors
        ];
        return view('admin.sponsor.index', compact('data'));
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
        return view('admin.sponsor.create', compact('data'));
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
        Sponsor::create($payload);
        return redirect()->route('sponsor.index')->with('success', 'Data berhasil ditambahkan');
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
        $sponsor = Sponsor::find($id);
        $data = (object) [
            'profil' => $profil,
            'sponsor' => $sponsor
        ];
        return view('admin.sponsor.edit', compact('data'));
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
        $data = Sponsor::find($id);
        $payload = $request->all();
        if ($request->hasFile('gambar') || $request->gambar != null) {
            $file = $request->file('gambar');
            $file_name = upload_image($file, GlobalConstant::IMAGE);
            $payload['gambar'] = $file_name;
        }
        $data->update($payload);

        return redirect()->route('sponsor.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Sponsor::find($id);
        $exp = explode('/', $data->logo_favicon);
        unlink_image(GlobalConstant::IMAGE, end($exp));
        $data->delete();
        return response()->json('success');
    }
}
