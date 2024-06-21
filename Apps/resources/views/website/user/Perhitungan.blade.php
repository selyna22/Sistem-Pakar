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
                                        @if (!empty($matchedDiseases))
                                        @foreach ($matchedDiseases as $penyakit)
                                        <h5>Kemungkinan penyakit :</h5>
                                                <p>{{ $penyakit }}</p>
                                            @endforeach
                                        @else
                                            <p>Tidak ada penyakit yang ditemukan.</p>
                                        @endif
                                    </div>
                                    
                                    <div class="mb-5">
                                        <h5>CF Rule</h5>
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kode</th>
                                                    <th scope="col" class="text-start">Nama Makanan</th>
                                                    <th scope="col">Nilai CF</th>
                                                    <th scope="col">Nilai User</th>
                                                    <th scope="col">Nilai CF * Nilai User</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $banyak_data = $query_dataMakanan->count();
                                                @endphp
                                                @for ($i = 0; $i < $banyak_data; $i++)
                                                    <tr>
                                                        <th scope="row">{{ $query_dataMakanan[$i]->KodeMakanan }}</th>
                                                        <td class="text-start">{{ $query_dataMakanan[$i]->NamaMakanan }}</td>
                                                        <td class="text-center">{{ $query_dataMakanan[$i]->Nilai_CF }}</td>
                                                        <td class="text-center">{{ $nilaiArray[$i] }}</td>
                                                        <td class="text-center">{{ $hasil[$i] }}</td>
                                                    </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mb-5">
                                        <h5>Presentase Keyakinan</h5>
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Combine Step</th>
                                                    <th scope="col">Combine Value</th>
                                                    <th scope="col" class="text-start">Presentase</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @for ($i = 0; $i < count($cfCombineArray); $i++)
                                                    <tr>
                                                        <td>{{ $i + 1 }}</td>
                                                        <td>{{ $cfCombineArray[$i] }}</td>
                                                        <td>{{ $cfCombineArray[$i] * 100 }} %</td>
                                                    </tr>
                                                @endfor
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
