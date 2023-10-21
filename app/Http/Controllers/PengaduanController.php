<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function pengaduan(){
        $pengadu = new Pengaduan();
        return view('Masyarakat.pengaduan',['pengadu'=> $pengadu->all()]);
    }
    
    public function simpanPengaduan(Request $request){
        $pengadu = new Pengaduan();
        
        $cek = $request->validate([
            'id_pengaduan'=>'required|unique:table_pengaduan|max:10',
            'nik'=>'required|max:16',
            'tanggal_pengaduan'=>'required',
            'isi_laporan'=>'required',
            'foto'=>'required',
        ]);

        $pengadu->create($request->all());
        return back()->with('notifikasi','Laporan Telah Dibuat');
    }
}
