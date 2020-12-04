<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelDoingFirewall;

class DoingFirewall extends Controller
{
    public function index()
    {
        $data = ModelDoingFirewall::all();

        return view('doingfirewall', compact('data'));
    }

    public function create()
    {
        return view('doingfirewall_create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_request' => 'required',
            'nik' => 'required',
            'user_name_doing' => 'required',
            'valid' => 'required',
        ]);

        $data = new ModelDoingFirewall();
        $data->id_request = $request->id_request;
        $data->nik = $request->nik;
        $data->user_name_doing = $request->user_name_doing;
        $data->status_doing = "pending";
        $data->valid = $request->valid;
        $data->worked_date = $request->worked_date;
        $data->dissaprove_work_date = $request->dissaprove_work_date;
        $data->save();

        return redirect()->route('doingfirewall.index')->with('alert_message', 'Berhasil menambah data!');
    }

    public function edit($id)
    {
        $data = ModelDoingFirewall::where('id_doing', $id)->get();
        return view('doingfirewall_edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status_doing' => 'required',
        ]);

        $data = ModelDoingFirewall::where('id_doing', $id)->first();
        $data->status_doing = $request->status_doing;
        $data->worked_date = $request->worked_date;
        $data->save();

        return redirect()->route('doingfirewall.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    public function destroy($id)
    {
        $data = ModelDoingFirewall::where('id_doing', $id)->first();
        $data->delete();

        return redirect()->route('doingfirewall.index')->with('alert_message', 'Berhasil menghapus data!');
    }
}
