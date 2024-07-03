<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "riwayatinput";
    protected $fillable = ['idRiwayat', 'WaktuInput','Diagnosa','Presentase'];   
}
