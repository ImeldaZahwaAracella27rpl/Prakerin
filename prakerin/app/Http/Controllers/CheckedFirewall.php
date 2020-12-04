<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCheckedFirewall;

class CheckedFirewall extends Controller
{
    public function index()
    {
        $data = ModelCheckedFirewall::all();

        return view('checkedfirewall', compact('data'));
    }

    public function create()
    {
        return view('checkedfirewall_create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_request' => 'required',
            'nik' => 'required',
            'user_name_checker' => 'required',
            'valid' => 'required',
        ]);

        $data = new ModelCheckedFirewall();
        $data->id_request = $request->id_request;
        $data->nik = $request->nik;
        $data->user_name_checker = $request->user_name_checker;
        $data->status_check = "pending";
        $data->valid = $request->valid;
        $data->checked_date = $request->checked_date;
        $data->dissaprove_check_date = $request->dissaprove_check_date;
        $data->save();

        return redirect()->route('checkedfirewall.index')->with('alert_message', 'Berhasil menambah data!');

    }


    public function edit($id)
    {
        $data = ModelCheckedFirewall::where('id_checked', $id)->get();
        return view('checkedfirewall_edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status_check' => 'required',
        ]);

        $data = ModelCheckedFirewall::where('id_checked', $id)->first();
        $data->status_check = $request->status_check;
        $data->checked_date = $request->checked_date;
        $data->save();

        return redirect()->route('checkedfirewall.index')->with('alert_message', 'Berhasil mengubah data!');

    }

    public function destroy($id)
    {
        $data = ModelCheckedFirewall::where('id_checked', $id)->first();
        $data->delete();

        return redirect()->route('checkedfirewall.index')->with('alert_message', 'Berhasil menghapus data!');
    }
}
