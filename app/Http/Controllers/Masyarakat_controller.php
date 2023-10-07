<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class Masyarakat_controller extends Controller
{
    public function index(){
        // buat objek dari model
        $people = new Masyarakat();
        return view ('Masyarakat.dashboard',['bebas'=> $people->all()]);
    }


    public function registrasi(){
        return view('Masyarakat.registrasi');   
    }
    
    public function simpan(Request $request){
        $data = new Masyarakat();
        // $data->create([
        //     'nik'=>$request->nik,
        //     'nama'=>$request->nama,
        //     'username'=>$request->username,
        //     'password'=>$request->password,
        //     'telpon'=>$request->telpon,
        // ]);

        $cek= $request->validate([
            'nik'=>'required|unique:table_masyarakat|max:16',
            'nama'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'telpon'=>'required|max :13',
        ]);

        $data->create($request->all());
        // return redirect('registrasi')->with('info','Anda Berhasil ANJAIIIII!');
        return back()->with('notif','Selamat Lo Berhasil Regist');
    }
    
    public function loginadmin(){
        return view('Masyarakat.loginadmin');
    }

    public function cekLogin(Request $request){
        $dl = new Masyarakat();
        // cek usernamme dan password exists (ada) di table masyarakat  ($dl = data login)
        if($dl->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('Dashboard');
        }
        return back()->with('notif','Maaf Username dan Password Gada Cuy ');
    }
}
