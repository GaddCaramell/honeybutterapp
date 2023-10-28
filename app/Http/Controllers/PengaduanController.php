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
        
        //variable untuk menampung file
        $fl = $request->file('foto');
        //choosen path
        $fold = 'upload_data_fotoo';
        //target file ke folder
        $fl->move($fold,$fl->getClientOriginalName());
        
        $cek = $request->validate([
            'nik'=>'required|max:16',
            'tanggal_pengaduan'=>'required',
            'isi_laporan'=>'required',
        ]);

        $pengadu->create([
            'nik'=>$request->input('nik'),
            'tanggal_pengaduan'=>$request->input('tanggal_pengaduan'),
            'isi_laporan'=>$request->input('isi_laporan'),
            'foto'=>$fl->getClientOriginalName(),
            'status'=>'0' 
        ]);
        return back()->with('notifikasi','Laporan Telah Dibuat');
    }
}
