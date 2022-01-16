<?php

namespace App\Http\Controllers;

use App\Constant\GlobalConstant;
use App\Models\Partner;
use App\Models\Profil;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function showProfil()
    {
        $data = Profil::first();
        return view('admin.profil', compact('data'));
    }

    public function saveProfil(Request $request)
    {
        $payload = $request->all();
        $data = Profil::first();
        if ($data) {
            if ($request->hasFile('logo') || $request->logo != null) {
                $file = $request->file('logo');
                $file_name = upload_image($file, GlobalConstant::IMAGE);
                $payload['logo'] = $file_name;

                $exp = explode('/', $data->logo);
                unlink_image(GlobalConstant::IMAGE, end($exp));
            }
            if ($request->hasFile('logo_web') || $request->logo_web != null) {
                $file = $request->file('logo_web');
                $file_name = upload_image($file, GlobalConstant::IMAGE);
                $payload['logo_web'] = $file_name;

                $exp = explode('/', $data->logo_web);
                unlink_image(GlobalConstant::IMAGE, end($exp));
            }
            if ($request->hasFile('logo_favicon') || $request->logo_favicon != null) {
                $file = $request->file('logo_favicon');
                $file_name = upload_image($file, GlobalConstant::IMAGE);
                $payload['logo_favicon'] = $file_name;

                $exp = explode('/', $data->logo_favicon);
                unlink_image(GlobalConstant::IMAGE, end($exp));
            }
            $data->update($payload);
        } else {
            if ($request->hasFile('logo') || $request->logo != null) {
                $file = $request->file('logo');
                $file_name = upload_image($file, GlobalConstant::IMAGE);
                $payload['logo'] = $file_name;
            }
            if ($request->hasFile('logo_web') || $request->logo_web != null) {
                $file = $request->file('logo_web');
                $file_name = upload_image($file, GlobalConstant::IMAGE);
                $payload['logo_web'] = $file_name;
            }
            if ($request->hasFile('logo_favicon') || $request->logo_favicon != null) {
                $file = $request->file('logo_favicon');
                $file_name = upload_image($file, GlobalConstant::IMAGE);
                $payload['logo_favicon'] = $file_name;
            }
            Profil::create($payload);
        }

        return redirect()->back()->with('success', 'Data profil berhasil disimpan');
    }
}
