<?php

namespace App\Http\Controllers;

use App\Models\datamakanan;
use App\Models\nilai_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class userController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function Konsultasi()
    {
        $nama_makanan = [];
        $datamakanan = datamakanan::all();
        // dd($datamakanan);
        return view('website.User.Konsultasi', compact('datamakanan', 'nama_makanan'));
    }

    public function proseskonsultasi(Request $request)
    {
        $datamakanan = datamakanan::all();
        $bobot = nilai_user::all();

        $nama = $request->nama;
        $umur = $request->umur;
        $nama_makanan = $request->input('nama_makanan');

        $request->session()->put('nama_makanan', $nama_makanan);
        // $coba = session()->all();

        return view('website.User.Konsultasi', compact('datamakanan', 'nama_makanan', 'bobot'));
    }

    public function ceknilai(Request $request)
    {
        $sering = $request->sering;
        // dd($sering);
    }

    public function prosesdata(Request $request)
    {
        $bobot = $request->input('bobot');
        $datamakanan = $request->session()->get('nama_makanan');

        $query_dataMakanan = DB::table('datamakanan')->whereIn('NamaMakanan', $datamakanan)->get();

        $cf_pakar = [];
        foreach ($query_dataMakanan as $key => $value) {
            
        }
        // dd($bobot);
        return view('website.User.Perhitungan', compact('bobot', 'query_dataMakanan'));  
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
