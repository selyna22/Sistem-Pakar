<?php

namespace App\Http\Controllers;

use App\Models\Data_diri;
use App\Models\datamakanan;
use App\Models\Penyakit;
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

    // Iterasi melalui setiap elemen dalam array
    $nilaiArray = [];
    foreach ($bobot as $bobot) {
        switch ($bobot) {
            case 'Sangat Sering':
                $nilai = "1.0";
                break;

            case 'Sering':
                $nilai = "0.8";
                break;

            case 'Cukup Sering':
                $nilai = "0.6";
                break;

            case 'Kurang Sering':
                $nilai = "0.4";
                break;

            case 'Tidak Sering':
                $nilai = "0.2";
                break;

            case 'Tidak':
                $nilai = "0";
                break;

            default:
                $nilai = null; // Tambahkan default untuk menangani nilai yang tidak dikenali
                break;
        }

        // Tambahkan nilai yang dihasilkan ke array nilai
        $nilaiArray[] = $nilai;
    }

    $hasil = [];
    for ($i = 0; $i < count($nilaiArray); $i++) {
        $hasil[] = $query_dataMakanan[$i]->Nilai_CF * $nilaiArray[$i];
    }

    // Inisialisasi CF Combine dengan nilai hasil pertama
    $cfCombineArray = [];
    if (count($hasil) > 1) {
        $cfCombine = ($hasil[0] + $hasil[1]) * (1 - $hasil[0]);
        $cfCombineArray[] = $cfCombine;

        // Hitung CF Combine
        for ($i = 1; $i < count($hasil) - 1; $i++) {
            $cfCombine = ($cfCombine + $hasil[$i + 1]) * (1 - $cfCombine);
            $cfCombineArray[] = $cfCombine;
        }
    } else {
        $cfCombine = $hasil[0];
        $cfCombineArray[] = $cfCombine;
    }

    // Rules
    $rules = [
        'P01' => ['M05'],
        'P01' => ['M01','M02'],
        'P01' => ['M01'],
        'P02' => ['M01', 'M05', 'M02', 'M13', 'M14', 'M21'],
        'P03' => ['M04', 'M10', 'M19', 'M32'],
        'P04' => ['M08', 'M11', 'M12', 'M15', 'M18'],
        'P05' => ['M01', 'M03', 'M06', 'M07', 'M17', 'M21', 'M25', 'M26', 'M27', 'M28', 'M31']
    ];

    $diseaseNames = [
        'P01' => 'Asam Lambung',
        'P02' => 'Asan Urat',
        'P03' => 'Diabetes',
        'P04' => 'Hipertensi',
        'P05' => 'Kolesterol'
    ];

    $selectedMakananCodes = $query_dataMakanan->pluck('KodeMakanan')->toArray();
    $matchedDiseases = [];

    foreach ($rules as $ruleKey => $ruleConditions) {
        if (empty(array_diff($ruleConditions, $selectedMakananCodes))) {
            $matchedDiseases[] = $diseaseNames[$ruleKey];
        }
    }

    // Kirim data ke view
    return view('website.User.Perhitungan', compact('query_dataMakanan', 'nilaiArray', 'hasil', 'cfCombineArray', 'matchedDiseases'));
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
