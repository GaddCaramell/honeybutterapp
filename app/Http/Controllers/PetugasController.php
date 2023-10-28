<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Petugas;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function adminDash(){
        $ad = new Masyarakat();
        $pengadu = new Pengaduan();
        $pet = new Petugas();
        return view ('Admin.leyotutama',['pengadu'=>$pengadu->all()],['petugas'=>$pet->all()]);
    }

    public function adminLogin(){
        return view ('Admin.adminlog');
    }
    public function registrasiPetu(){
        return view('Admin.registrasipetu');
    }

    public function simpanpetu(Request $request){
        $data = new Petugas();
        // $data->create([
        //     'nik'=>$request->nik,
        //     'nama'=>$request->nama,
        //     'username'=>$request->username,
        //     'password'=>$request->password,
        //     'telpon'=>$request->telpon,
        // ]);

        $cek= $request->validate([
            'id_petugas'=>'required|unique:table_petugas|max:16',
            'nama_petugas'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'telp'=>'required|max :13',
            'level'=>'petugas'
        ]);

        $data->create($request->all());
        // return redirect('registrasi')->with('info','Anda Berhasil ANJAIIIII!');
        return back()->with('notif','Selamat Lo Berhasil Regist');
    }
    public function loginpetugas(){
        return view ('Admin.loginpetu');
    }
    public function cekLoginPetu(Request $request){
        $dla = new Petugas();
        // cek usernamme dan password exists (ada) di table masyarakat  ($dla = data login admin)
        if($dla->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('DashboardAdmin');
        }
        return back()->with('notif','Maaf Username dan Password Gada Cuy ');
    }
    public function logoutpetu(){
        session()->flush();
        return redirect('loginpetu');
    }

    public function adminValid(){
        return view ('Admin.adminvalid');
    }
}
