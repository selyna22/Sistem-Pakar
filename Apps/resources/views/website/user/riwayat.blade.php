@extends('website.main.index')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <div class="card shadow mb-4">
                            <div class="d-flex align-items-center justify-content-center p-2 bg-primary text-white rounded shadow">
                                <i class="fas fa-history fa-2x mr-2"></i>
                                <h2 class="m-0">Riwayat Konsultasi</h2>
                            </div>
                        </div>
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Waktu Input</th>
                                <th>Diagnosa</th>
                                <th>Presentase</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($query as $item)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $item->WaktuInput }}</td>
                                    <td class="text center">{{ $item->Diagnosa }}</td>
                                    <td class="text-center">{{ $item->Presentase }}</td>
                                    <td>
                                        <form action="{{ route('hapus') }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary btn-user btn-block">hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <form action="{{ route('hapus') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary btn-user btn-block">Kirim</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
