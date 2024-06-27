<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "datapenyakit";
    protected $fillable = ['idPenyakit', 'KodePenyakit','NamaPenyakit'];   
}
