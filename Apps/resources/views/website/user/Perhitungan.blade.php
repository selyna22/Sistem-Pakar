@extends('website.main.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    {{-- <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-5">PERHITUNGAN KEYAKINAN DENGAN METODE CERTAINTY
                                            FACTOR</h1>
                                    </div> --}}


                                    <div class="container mt-5">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-primary text-white">
                                                <h4>Hasil Konsultasi Potensi Penyakit dari Makanan</h4>
                                            </div>
                                            <div class="card-body">
                                                @if (!empty($penyakit))
                                                    @foreach ($penyakit as $item)
                                                        <div class="alert alert-warning" role="alert">
                                                            <h5>Potensi Penyakit yang disebabkan oleh makanan tersebut
                                                                adalah: <strong>{{ $item }}</strong></h5>
                                                            <h5>Presentase Keyakinannya: {{ number_format($presentase, 2) }}
                                                                <strong>%</strong></h5>
                                                            <h5>Keterangan : {{$kategori}}</h5>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="alert alert-success" role="alert">
                                                        <p>Tidak ada penyakit yang ditemukan.</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    @foreach ($makananBerpengaruh as $item)
                                        {{$item}}
                                    @endforeach

                                    <div class="container mt-5">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-primary text-white">
                                                <h4 class="mb-0">CF Rule</h4>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered table-striped text-center mb-0">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">Kode</th>
                                                            <th scope="col" class="text-start">Nama Makanan</th>
                                                            <th scope="col">Nilai Pakar</th>
                                                            <th scope="col">Nilai User</th>
                                                            <th scope="col">Hasil</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $banyak_data = $query_dataMakanan->count();
                                                        @endphp
                                                        @foreach ($kumpulanData as $item)
                                                            <tr>
                                                                <td>{{ $item[0] }}</td>
                                                                <td>{{ $item[1] }}</td>
                                                                <td>{{ $item[2] }}</td>
                                                                <td>{{ $item[3] }}</td>
                                                                <td>{{ $item[4] }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="container mt-5">
                                            <div class="card shadow-sm">
                                                <div class="card-header bg-primary text-white">
                                                    <h4 class="mb-0">Presentase</h4>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-bordered table-striped text-center mb-0">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Combine Step</th>
                                                                <th scope="col">Combine Value</th>
                                                                <th scope="col">Presentase Keyakinan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @for ($i = 0; $i < count($cfCombineArray); $i++)
                                                                <tr>
                                                                    <td>{{ $i + 1 }}</td>
                                                                    <td>{{ $cfCombineArray[$i] }}</td>
                                                                    <td>{{ $cfCombineArray[$i] * 100 }}%</td>
                                                                </tr>
                                                            @endfor
                                                            @if (count($cfCombineArray) === 0)
                                                                <tr>
                                                                    <td colspan="3" class="text-center">Tidak ada data
                                                                        yang
                                                                        tersedia.</td>
                                                                </tr>
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
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
