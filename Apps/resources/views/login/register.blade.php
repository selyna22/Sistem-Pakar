@extends('login.index')
@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="Nama Lengkap" class="form-control form-control-user"
                                            id="exampleInputNama Lengkap" placeholder="Nama Lengkap" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <input type="Umur" class="form-control form-control-user"
                                            id="exampleInputUmur" placeholder="Umur" name="umur">
                                    </div>
                                    <select class="form-select" aria-label="Default select example" name="jk">
                                        <option selected>Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                      </select>
                                    <div class="form-group">
                                        <input type="Alamat" class="form-control form-control-user"
                                            id="exampleInputAlamat" placeholder="Alamat" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <input type="Umur" class="form-control form-control-user"
                                            id="exampleInputUmur" placeholder="Nomor Telp" name="noTelp">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address..." name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <select class="form-select" aria-label="Default select example" name="role">
                                        <option selected>Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Pengguna">Pengguna</option>
                                      </select>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary btn-user btn-block"> Login </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ url('login') }}">Sudah Punya Akun</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection