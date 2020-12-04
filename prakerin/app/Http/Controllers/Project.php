<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelProject;

class Project extends Controller
{

    public function index()
    {
        $data = ModelProject::all();

        return view('project', compact('data'));
    }

    public function create()
    {
        return view('project_create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_project' => 'required',
            'nik' => 'required',

        ]);

        $data = new ModelProject();
        $data->nama_project = $request->nama_project;
        $data->nik = $request->nik;
        $data->save();

        return redirect()->route('project.index')->with('alert_message', 'Berhasil menambah data!');
    }

    public function edit($id)
    {
        $data = ModelProject::where('id_project', $id_project)->get();
        return view('project_index', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_project' => 'required',
            'nik' => 'required',
        ]);

        $data = ModelProject::where('id_project', $id_project)->first();
        $data->nama_project = $request->nama_project;
        $data->nik = $request->nik;
        $data->save();

        return redirect()->route('project.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    public function destroy($id)
    {
        $data = ModelProject::where('id_project', $id_project)->first();
        $data->delete();

        return redirect()->route('project.index')->with('alert_message', 'Berhasil menghapus data!');
    }
}
