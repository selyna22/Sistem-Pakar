@extends('website.main.index')

@section('content')
    {{-- <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-2">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item text-primary">Home</li>
                                <li class="breadcrumb-item text-primary">User</li>
                                <li class="breadcrumb-item active" aria-current="page">Data diri pengguna</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="px-3">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">:
                                                </span>{{ $query->Nama }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Umur <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span>
                                                {{ $query->Umur }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nomor Telp <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span>
                                                {{ $query->NoTelp }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Alamat <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span>
                                                {{ $query->Alamat }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span>
                                                {{ $dataLogin->email }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Role <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span>
                                                {{ $dataLogin->role }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> --}}

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
    
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item text-primary"><a href="#">Home</a></li>
                                <li class="breadcrumb-item text-primary"><a href="#">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data diri pengguna</li>
                            </ol>
                        </nav>
                    </div>
                </div>
    
                <div class="px-3">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card shadow mb-4">
                                <div class="card-header text-center py-3">
                                    <h5 class="m-0 font-weight-bold text-primary">User Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama </p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">:  {{ $query->Nama }}</p>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Umur</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">:  {{ $query->Umur }}</p>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nomor Telp</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">:  {{ $query->NoTelp }}</p>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Alamat</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">:  {{ $query->Alamat }}</p>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">:  {{ $dataLogin->email }}</p>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Role</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">:  {{ $dataLogin->role }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
    </div>
@endsection
