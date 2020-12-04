<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use Session;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }
   
    public function cek(Request $req)
    {
        $this->validate($req,[
            'user_name'=>'required',
            'password'=>'required'
        ]);
        $proses=ModelUser::where('user_name',$req->user_name)->where('password',md5($req->password))->first();
        if($proses){
            Session::put('user_name',$proses->user_name);
            Session::put('password',md5($proses->password));
            Session::put("role",$proses->roleId);
            Session::put('login_status',true);
            return redirect('/requestfirewall');
        } else {
            return redirect("login")->with("message", "Nama/Password tidak cocok!");
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect('login');
    }

}
