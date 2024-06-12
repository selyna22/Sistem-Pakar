<?php

namespace App\Http\Controllers;

use App\Models\Data_diri;
use App\Models\datamakanan;
use App\Models\nilai_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // Ambil nama makanan dari session
        $datamakanan = $request->session()->get('nama_makanan');

        // Ambil data makanan dari tabel 'datamakanan' berdasarkan nama makanan yang ada di session
        $query_dataMakanan = DB::table('datamakanan')->whereIn('NamaMakanan', $datamakanan)->get();

        // Ambil nilai bobot dari request
        $bobot = $request->input('bobot');

        // Ambil data nilai_user berdasarkan bobot dari request
        $nilaiUsers = [];
        foreach ($bobot as $key => $value) {
            $nilaiUsers[$key] = DB::table('nilai_user')->where('Keterangan', 'Like', $bobot[$key])->get();
        }


        $nilai_pakar = [];
        for ($i = 0; $i < count($query_dataMakanan); $i++) {
            $data = $query_dataMakanan[$i];
            $nilai_pakar[$i] = $data->MB - $data->MD;
        }

        // dd($nilaiUsers);


        // Hitung CF Combine
        $cfCombine = [];
        // foreach ($ as $key => $value) {
        //     # code...
        // }

        // Kirim data ke view
        return view('website.User.Perhitungan', compact('query_dataMakanan', 'nilaiUsers', 'bobot', 'nilai_pakar', 'cfCombine'));
    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataLogin = Auth::user();
        $query = Data_diri::where('id', $dataLogin->DataDiri_id)->first();
        // dd($dataLogin);
        return view('website.user.user', compact('query', 'dataLogin'));
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
