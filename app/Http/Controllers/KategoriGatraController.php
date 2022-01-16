<?php

namespace App\Http\Controllers;

use App\Constant\GlobalConstant;
use App\Models\KategoriLomba;
use App\Models\Profil;
use Illuminate\Http\Request;

class KategoriGatraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = Profil::first();
        $gatra = KategoriLomba::where('type', 'gatra')->first();
        $data = (object) [
            'profil' => $profil,
            'gatra' => $gatra
        ];
        return view('admin.gatra.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data = KategoriLomba::where('type', 'gatra')->first();
        if ($data) {
            if ($request->hasFile('logo') || $request->logo != null) {
                $file = $request->file('logo');
                $file_name = upload_image($file, GlobalConstant::IMAGE);
                $payload['logo'] = $file_name;

                $exp = explode('/', $data->logo);
                // unlink_image(GlobalConstant::IMAGE, end($exp));
            }
            if ($request->hasFile('maskot') || $request->maskot != null) {
                $file = $request->file('maskot');
                $file_name = upload_image($file, GlobalConstant::IMAGE);
                $payload['maskot'] = $file_name;

                $exp = explode('/', $data->maskot);
                // unlink_image(GlobalConstant::IMAGE, end($exp));
            }
            $data->update($payload);
        } else {
            if ($request->hasFile('logo') || $request->logo != null) {
                $file = $request->file('logo');
                $file_name = upload_image($file, GlobalConstant::IMAGE);
                $payload['logo'] = $file_name;
            }
            if ($request->hasFile('maskot') || $request->maskot != null) {
                $file = $request->file('maskot');
                $file_name = upload_image($file, GlobalConstant::IMAGE);
                $payload['maskot'] = $file_name;
            }
            Profil::create($payload);
        }

        return redirect()->back()->with('success', 'Data profil berhasil disimpan');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
