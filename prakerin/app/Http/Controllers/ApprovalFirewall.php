<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelApprovalFirewall;

class ApprovalFirewall extends Controller
{
    public function index()
    {
        $data = ModelApprovalFirewall::all();

        return view('approvalfirewall', compact('data'));
    }

    public function create()
    {
        return view('approvalfirewall_create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_request' => 'required',
            'nik' => 'required',
            'user_name_approval' => 'required',
            'command' => 'required',
            'valid' => 'required',
            'email' => 'required',
        ]);

        $data = new ModelApprovalFirewall();
        $data->id_request = $request->id_request;
        $data->nik = $request->nik;
        $data->user_name_approval = $request->user_name_approval;
        $data->status_approval = "pending";
        $data->command = $request->command;
        $data->valid = $request->valid;
        $data->email = $request->email;
        $data->approval_date = $request->worked_date;
        $data->dissaprove_work_date = $request->dissaprove_work_date;
        $data->save();

        return redirect()->route('approvalfirewall.index')->with('alert_message', 'Berhasil menambah data!');
    }

    public function edit($id)
    {
        $data = ModelApprovalFirewall::where('id_approval', $id)->get();
        return view('approvalfirewall_edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status_approval' => 'required',
        ]);

        
        $data = ModelApprovalFirewall::where('id_approval', $id)->first();
        $data->status_approval = $request->status_approval;
        $data->approve_date = $request->approve_date;
        $data->save();

        return redirect()->route('approvalfirewall.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    public function destroy($id)
    {
        $data = ModelApprovalFirewall::where('id_approval', $id)->first();
        $data->delete();

        return redirect()->route('approvalfirewall.index')->with('alert_message', 'Berhasil menghapus data!');
    }
}
