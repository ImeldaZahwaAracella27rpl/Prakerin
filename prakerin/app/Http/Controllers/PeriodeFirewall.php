<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPeriodeFirewall;

class PeriodeFirewall extends Controller
{

    public function index()
    {
        $data = ModelPeriodeFirewall::all();

        return view('periodefirewall', compact('data'));
    }

   
    public function create()
    {
        return view('periodefirewall_create');
    }

    public function store(Request $request)
    {
        $data->validate($request,[
            'id_request' => 'required',
            'date_request' => 'required',
            'expired_date' => 'required',
            'periode' => 'required',
            'valid' => 'required',
            'status_request' => 'required',
        ]);

        $data = new ModelPeriodeFirewall();
        $data->id_request = $request->id_request;
        $data->date_request = $request->date_request;
        $data->expired_date = $request->expired_date;
        $data->periode = $request->periode;
        $data->valid = $request->valid;
        $data->status_request = $request->status_request;
        $data->save();

        return redirect()->route('periodefirewall.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    public function destroy($id)
    {
        $data = ModelPeriodeFirewall::where('id_periode', $id_periode)->first();
        $data->delete();

        return redirect()->route('periodefirewall.index')->with('alert_message', 'Berhasil menghapus data!');
    }
}
