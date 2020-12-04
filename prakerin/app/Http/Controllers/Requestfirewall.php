<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelRequestFirewall;
use Validator;

class Requestfirewall extends Controller
{
   
    public function index()
    {
        $data = ModelRequestFirewall::all();

        return view('requestfirewall', compact('data'));
    }

   
    public function create()
    {
        return view('requestfirewall_create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'id_request' => 'required',
            'nik' => 'required',
            'id_project' => 'required',
            'user_name' => 'required',
            'email' => 'required',
            'source' => 'required',
            'destination' => 'required',
            'port' => 'required',
            'keterangan' => 'required',
            'chde' => 'required',
        ]);

        $data = new ModelRequestFirewall();
        $data->id_request = $request->id_request;
        $data->nik = $request->nik;
        $data->id_project = $request->id_project;
        $data->user_name = $request->user_name;
        $data->email = $request->email;
        $data->source = $request->source;
        $data->destination = $request->destination;
        $data->port = $request->port;
        $data->keterangan = $request->keterangan;
        $data->chde = $request->chde;
        $data->status_check = "pending";
        $data->status_doing = "pending";
        $data->status_approval = "pending";
        $data->save();

        return redirect()->route('requestfirewall.index')->with('alert_message', 'Berhasil menambah data!');
    }

    public function edit($id)
    {
        $data = ModelRequestFirewall::where('id_request', $id_request)->get();
        return view('requestfirewall_edit', compact('data'));
    }

    public function update(Request $request, $id_request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'id_project' => 'required',
            'user_name' => 'required',
            'email' => 'required',
            'source' => 'required',
            'destination' => 'required',
            'port' => 'required',
            'keterangan' => 'required',
            'chde' => 'required',
        ]);

        $data = new ModelRequestFirewall();
        $data->nik = $request->nik;
        $data->id_project = $request->id_project;
        $data->user_name = $request->user_name;
        $data->email = $request->email;
        $data->source = $request->source;
        $data->destination = $request->destination;
        $data->port = $request->port;
        $data->keterangan = $request->keterangan;
        $data->chde = $request->chde;
        $data->save();

        return redirect()->route('requestfirewall.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    public function destroy($id_request)
    {
        $data = ModelRequestFirewall::where('id_request', $id_request)->first();
        $data->delete();

        return redirect()->route('requestfirewall.index')->with('alert_message', 'Berhasil menghapus data!');
    }
}
