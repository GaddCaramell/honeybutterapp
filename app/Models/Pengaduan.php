<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    // Set Tabel
    protected $table = "table_pengaduan";
    
    // Set Primary Key
    protected $primaryKey = "nik";
    
    // Set Auto Increment
    public $incrementing = "false";

    // Set DataType primary key
    

    // Setting kolom yang dapat diisi dengan massal

    protected $guarded=[];
}
