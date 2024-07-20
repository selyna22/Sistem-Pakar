@extends('website.main.index')

@section('content')
    {{-- <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Makanan</h6>
                <a href="{{ url('Tambahdata_makanan') }}"><button type="button" class="btn btn-primary">Tambah Data
                        Makanan</button></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Makanan</th>
                                <th>Nama Makanan</th>
                                <th>Kandungan</th>
                                <th>Nilai CF</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($makanan as $makanan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $makanan->KodeMakanan }}</td>
                                    <td>{{ $makanan->NamaMakanan }}</td>
                                    <td>{{ $makanan->Kandungan }}</td>
                                    <td>{{ $makanan->Nilai_CF }}</td>
                                    <td>
                                        <a href="#" class="view" title="View" data-toggle="tooltip"><i
                                                class="material-icons">&#xE417;</i></a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i
                                                class="material-icons">&#xE254;</i></a>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i
                                                class="material-icons">&#xE872;</i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid">
        <div class="card shadow mb-4">
            {{-- <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Data Makanan</h6>
                <a href="{{ url('Tambahdata_makanan') }}" class="btn btn-primary">Tambah Data Makanan</a>
            </div>             --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Kode Makanan</th>
                                <th>Nama Makanan</th>
                                <th>Kandungan</th>
                                <th>Nilai CF</th>
                                {{-- <th>Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($makanan as $makanan)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $makanan->KodeMakanan }}</td>
                                <td>{{ $makanan->NamaMakanan }}</td>
                                <td>{{ $makanan->Kandungan }}</td>
                                <td class="text-center">{{ $makanan->Nilai_CF }}</td>
                                {{-- <td>
                                    <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" title="View"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></a>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

@endsection
