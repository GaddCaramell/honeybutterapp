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

    public function cekLoginAdmin(Request $request){
        $dla = new Petugas();
        // cek usernamme dan password exists (ada) di table masyarakat  ($dla = data login admin)
        if($dla->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('');
        }
        return back()->with('notif','Maaf Username dan Password Gada Cuy ');
    }
}
