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
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-5">PERHITUNGAN KEYAKINAN DENGAN METODE CERTAINTY FACTOR</h1>
                                    </div>
                                    <div class="mb-5">
                                        <h5>Rumus CF Pakar</h5>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kode</th>
                                                    <th scope="col">Nama Makanan</th>
                                                    <th scope="col">MB</th>
                                                    <th scope="col">MD</th>
                                                    <th scope="col">Hasil CF(H,E) = MB - MD</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($query_dataMakanan as $item)
                                                    <tr>
                                                        <th scope="row">{{$no++}}</th>
                                                        <td>{{ $item->NamaMakanan }}</td>
                                                        <td>{{ $item->MB }}</td>
                                                        <td>{{ $item->MD }}</td>
                                                        <td>{{ $item->MB - $item->MD }}</td> <!-- CF(H,E) Pakar -->
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mb-5">
                                        <h5>Rumus CF dengan User</h5>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Makanan</th>
                                                    <th scope="col">Keterangan</th>
                                                    <th scope="col">Nilai User</th>
                                                    <th scope="col">Hasil = Nilai User * CF(H,E)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($query_dataMakanan as $index => $item)
                                                    @php
                                                        $nilaiUser = isset($nilaiUsers[$bobot[$index]]) ? $nilaiUsers[$bobot[$index]] : 'Tidak Ditemukan';
                                                        $cfExpert = $item->MB - $item->MD;
                                                        $cfUser = is_numeric($nilaiUser) ? $nilaiUser * $cfExpert : 0;
                                                    @endphp
                                                    <tr>
                                                        <th scope="row">{{ $index + 1 }}</th>
                                                        <td>{{ $item->NamaMakanan }}</td>
                                                        <td>{{ $bobot[$index] }}</td>
                                                        <td>{{ $nilaiUser }}</td>
                                                        <td>{{ is_numeric($nilaiUser) ? $cfUser : 'N/A' }}</td> <!-- CF(H,E) User -->
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mb-6">
                                        <h5>Rumus Combine</h5>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">CF Combine</th>
                                                    <th scope="col">Hasil Presentase</th>
                                                    <th scope="col">Kandungan yang terbagi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cfCombine as $index => $cfValue)
                                                    <tr>
                                                        <th scope="row">{{ $index + 1 }}</th>
                                                        <td>{{ $cfValue }}</td>
                                                        <td>{{ abs($cfValue) }}%</td>
                                                        <td>{{ $query_dataMakanan[$index]->NamaMakanan }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mb-5">
                                        <h5>HASIL DIAGNOSA</h5>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Hasil</th>
                                                    <th scope="col">Keterangan</th>
                                                    <th scope="col">Nilai User</th>
                                                    <th scope="col">Hasil = Nilai User * CF(H,E)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($query_dataMakanan as $index => $item)
                                                    @php
                                                        $nilaiUser = isset($nilaiUsers[$bobot[$index]]) ? $nilaiUsers[$bobot[$index]] : 'Tidak Ditemukan';
                                                        $cfExpert = $item->MB - $item->MD;
                                                        $cfUser = is_numeric($nilaiUser) ? $nilaiUser * $cfExpert : 0;
                                                    @endphp
                                                    <tr>
                                                        <th scope="row">{{ $index + 1 }}</th>
                                                        <td>{{ $cfUser }}</td>
                                                        <td>{{ $item->NamaMakanan }}</td>
                                                        <td>{{ $bobot[$index] }}</td>
                                                        <td>{{ is_numeric($nilaiUser) ? $cfUser : 'N/A' }}</td> <!-- CF(H,E) User -->
                                                    </tr>
                                                @endforeach
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
@endsection
