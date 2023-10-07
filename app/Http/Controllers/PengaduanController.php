<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function pengaduan(){
        return view('Masyarakat.pengaduan');
    }
    
    public function simpanPengaduan(Request $request){
        $pengadu = new Pengaduan();
        
        $cek = $request->validate([

        ]);
    }
}
