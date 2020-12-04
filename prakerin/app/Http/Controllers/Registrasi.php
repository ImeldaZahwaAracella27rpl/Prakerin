<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;

class Registrasi extends Controller
{
    public function index()
    {
        $data = ModelUser::all();

        return view('registrasi', compact('data'));
    }

    public function create()
    {
        return view('registrasi_create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'user_name' => 'required',
            'password' => 'required',
            'roleId' => 'required',
            'status' => 'required',
        ]);

        $data = new ModelUser();
        $data->nik = $request->nik;
        $data->user_name = $request->user_name;
        $data->password = md5($request->password);
        $data->roleId = $request->roleId;
        $data->status = $request->status;
        $data->save();
        

        return redirect()->route('registrasi.login')->with('alert_message', 'Berhasil!');
    }

}