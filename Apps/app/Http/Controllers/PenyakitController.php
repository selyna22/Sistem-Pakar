<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function getNamaPenyakitByKode($kode)
    {
        $penyakit = Penyakit::where('KodePenyakit', $kode)->first();

        if ($penyakit) {
            return response()->json(['NamaPenyakit' => $penyakit->nama]);
        } else {
            return response()->json(['error' => 'Penyakit not found.'], 404);
        }
    }
}
