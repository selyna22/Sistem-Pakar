<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Data_diri;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function login()
    {

        return view('website.user.user');
    }

    public function register_view()
    {
        return view('login.register');
    }

    public function register(Request $request)
    {
        $id = Data_diri::create([
            'Nama' => $request->nama,
            'Umur' => $request->umur,
            'NoTelp' => $request->noTelp,
            'Alamat' => $request->alamat,
            'JenisKelamin' => $request->jk
        ]);

        Akun::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'DataDiri_id' => $id->id
        ]);
        return view('login.login');
    }

    public function Authenticate(Request $request)
    {
        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('user'); //Url
        } else {
            return back()->with('gagal', 'Password atau username salah');
        }
    }

    public function Logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.login');
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
