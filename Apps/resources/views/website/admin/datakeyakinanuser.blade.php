@extends('website.main.index')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary ">Data Keyakinan User</h6>
                    {{-- <a href="{{ url('Tambahdata_keyakinan') }}" class="btn btn-primary">Tambah Data keyakinan</a> --}}
                </div>  
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>Id Bobot</th>
                                    <th>Keterangan</th>
                                    <th>Bobot</th>
                                    {{-- <th>Aksi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($query as $item)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $item->Keterangan }}</td>
                                        <td class="text-center">{{ $item->Bobot }}</td>
                                        {{-- <td class="text-center">
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip"
                                                title="View"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip"
                                                title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip"
                                                title="Delete"><i class="fas fa-trash-alt"></i></a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
