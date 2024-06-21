<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datamakanan extends Model
{
    use HasFactory;
    protected $table = "datamakanan";
    protected $fillable = ['idmakanan', 'KodeMakanan','NamaMakanan','Kandungan','NilaiCF'];    
}
