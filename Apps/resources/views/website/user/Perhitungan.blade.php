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
                                        <h1 class="h4 text-gray-900 mb-5">PERHITUNGAN KEYAKINAN DENGAN METODE CERTAINTY
                                            FACTOR</h1>
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
                                                        <td></td>
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
                                                @for ($i = 0; $i < count($query_dataMakanan) ; $i++)
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>{{$query_dataMakanan[$i]->NamaMakanan}}</td>
                                                    <td>{{$bobot[$i]}}</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mb-6">
                                        <h5>Rumus Combine</h5>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Hasil = CF[H,E]1 + CF[H,E]2 * (1-CF[H,E]1)</th>
                                                    <th scope="col">Hasil Presentase </th>
                                                    <th scope="col">Kandungan yang terbagi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                </tr>
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
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
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
