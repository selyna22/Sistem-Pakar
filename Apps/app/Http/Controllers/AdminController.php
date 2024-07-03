<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\datamakanan;
use App\Models\nilai_user;
use App\Models\Penyakit;
use GuzzleHttp\Promise\Create;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch data from the Makanan model
        $makanan = datamakanan::all();

        // Pass the data to the view
        return view('website.admin.datamakanan', compact('makanan'));
    }

    public function create_makanan()
    {
        return view('website.admin.editdatamakanan');
    }

    public function store_makanan(Request $request)
    {
        datamakanan::create($request->all());
        $makanan = datamakanan::all();

        return view('website.admin.datamakanan', compact('makanan'));
    }

    public function create_penyakit()
    {
        return view('website.admin.editdatapenyakit');
    }

    public function store_penyakit(Request $request)
    {
        Penyakit::create($request->all());
        $makanan = datamakanan::all();

        return view('website.admin.datamakanan', compact('makanan'));
    }
    
    public function create_keyakinan()
    {
        return view('website.admin.editkeyakinan');
    }

    public function store_keyakinan(Request $request)
    {
        datamakanan::create($request->all());
        $makanan = datamakanan::all();

        return view('website.admin.datamakanan', compact('makanan'));
    }

    public function datapenyakit()
    {
        $query = Penyakit::all();
        return view('website.admin.datapenyakit', compact('query'));
    }

    public function datakeyakinan()
    {
        $query = nilai_user::all();
        return view('website.admin.datakeyakinanuser', compact('query'));
    }
}
