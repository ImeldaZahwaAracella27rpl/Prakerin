<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use Validator;

class User extends Controller
{
    public function index()
    {
        $data = ModelUser::all();

        return view('user', compact('data'));
    }

    public function create()
    {
        return view('user_create');
    }

    public function store(Request $request)
    {
        $data->validate($request,[
            'nik' => 'required',
            'user_name' => 'required',
            'password' => 'required',
            'roleId' => 'required',
            'status' => 'required',
        ]);

        $data = new ModelUser();
        $data->nik = $request->nik;
        $data->user_name = $request->name;
        $data->password = $request->password;
        $data->roleId = $request->roleId;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('user.index')->with('alert_message', 'Berhasil menambah data!');
    }
    
    public function edit($id_user)
    {
        $data = ModelUser::where('id_user', $id_user)->get();
        return view('user_edit', compact('data'));
    }

    public function update(Request $request, $id_user)
    {
        $this->validate($request,[
            'nik' => 'required',
            'user_name' => 'required',
            'password' => 'required',
            'roleId' => 'required',
            'status' => 'required',
        ]);

        
        $data = ModelUser::where('id_user', $id_user)->first();
        $data->nik = $request->nik;
        $data->user_name = $request->user_name;
        $data->password = $request->password;
        $data->roleId = $request->roleId;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('user.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    public function destroy($id)
    {
        $data = ModelUser::where('id_user', $id_user)->first();
        $data->delete();

        return redirect()->route('user.index')->with('alert_message', 'Berhasil menghapus data!');
    }

}