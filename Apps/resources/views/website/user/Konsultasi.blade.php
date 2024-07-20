@extends('website.main.index')

@section('content')
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">MENU KONSULTASI DIAGNOSA RISIKO PENYAKIT
                                                AKIBAT KONSUMSI MAKANAN</h1>
                                        </div>
                                        <form class="user" action="{{ route('konsultasi') }}" method="POST">
                                            @csrf
                                            {{-- <div class="form-group">
                                                <label for="exampleInputNama">Nama Lengkap</label>
                                                <input type="text" class="form-control form-control-user" id="exampleInputNama" placeholder="Nama Lengkap" name="nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUmur">Umur</label>
                                                <input type="number" class="form-control form-control-user" id="exampleInputUmur" placeholder="Umur" name="umur">
                                            </div> --}}
                                            <h6>Pilih Makanan yang ingin Anda ketahui potensi penyakitnya</h6>
                                            <div class="form-group">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="text-center">Pilih</th>
                                                                <th scope="col" class="text-center">Nama Makanan</th>
                                                                <th scope="col" class="text-center">Kandungan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($datamakanan as $item)
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <input class="form-check-input large-checkbox" type="checkbox"
                                                                            value="{{ $item->NamaMakanan }}"
                                                                            name="nama_makanan[]"
                                                                            style="width: 20px; height: 20px; transform: scale(1.5);">
                                                                    </input>
                                                                    </td>
                                                                    <td>{{ $item->NamaMakanan }}</td>
                                                                    <td>{{ $item->Kandungan }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Kirim</button>
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Kelas User --}}
                @if (isset($bobot))
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <div class="card o-hidden border-0 shadow-lg my-5" style="width: 100%;">
                                <div class="card-body p-0">
                                    <!-- Nested Row within Card Body -->
                                    <div class="row justify-content-center">
                                        <div class="col-lg-10">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4">Volume Konsumsi</h1>
                                                </div>
                                                <hr>
                                                <form action="{{ route('ceknilai') }}" method="POST">
                                                    @csrf
                                                    {{-- <label for="customRange1" class="form-label">Volume Konsumsi
                                                        Makanan</label> --}}
                                                    @foreach ($nama_makanan as $key => $item)
                                                        <div class="mb-3">
                                                            <label for="customRange{{ $key }}"
                                                                class="form-label">{{ $item }}</label>
                                                            <select class="form-select" name="bobot[{{ $key }}]"
                                                                aria-label="Default select example">
                                                                <option selected disabled>Open this select menu</option>
                                                                @foreach ($bobot as $b)
                                                                    <option value="{{ $b->Keterangan }}">
                                                                        {{ $b->Keterangan }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    @endforeach
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Proses</button>
                                                    </div>
                                                </form>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

    </div>

    </div>

    </div>
@endsection
