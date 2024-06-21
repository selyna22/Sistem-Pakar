<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\datamakanan;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch data from the Makanan model
        $makanan = datamakanan::all();

        // Pass the data to the view
        return view('website.admin.datamakanan', compact('datamakanan','idmakanan', 'KodeMakanan','NamaMakanan','Kandungan','NilaiCF'));
    }
}
