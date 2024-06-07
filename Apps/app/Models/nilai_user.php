<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai_user extends Model
{
    use HasFactory;
    protected $table = "nilai_user";
    protected $fillable = ['idBobot', 'Keterangan', 'Bobot'];
}
