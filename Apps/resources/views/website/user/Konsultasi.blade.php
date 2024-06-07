@extends('website.main.index')

@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">MENU KONSULTASI DIAGNOSA
                                        RISIKO PENYAKIT AKIBAT KONSUMSI MAKANAN</h1>
                                </div>
                                <form class="user" action="{{ route('konsultasi') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="Nama Lengkap" class="form-control form-control-user"
                                            id="exampleInputNama Lengkap" placeholder="Nama Lengkap" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUmur">Umur</label>
                                        <input type="number" class="form-control form-control-user" id="exampleInputUmur"
                                               placeholder="Umur" name="umur">
                                    </div>
                                    <h6>Pilih Makanan yang ingin anda ketahui potensi penyakit</h6>
                                    @foreach ($datamakanan as $item)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $item->NamaMakanan }}"
                                                name="nama_makanan[]">
                                            {{ $item->NamaMakanan }}
                                        </div>
                                    @endforeach
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Kirim</button>
                                    <hr>
                                </form>
                                <hr>
                            </div>
                        </div>

                        
                        <div class="col-lg-6 d-none d-lg-block">
                            @if (isset($bobot))
                                <div class="row justify-content-center p-5">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">KONSULTASI</h1>
                                            </div>
                                            <hr>
                                            <form action="{{ route('ceknilai') }}" method="POST">
                                                @csrf
                                                <label for="customRange1" class="form-label">Seberapa Sering Mengkonsumsi Makanan tersebut dalam 1 Minggu</label>
                                                @foreach ($nama_makanan as $key => $item)
                                                    <div class="mb-3">
                                                        <label for="customRange{{ $key }}" class="form-label">{{ $item }}</label>
                                                        <select class="form-select" name="bobot[{{ $key }}]" aria-label="Default select example">
                                                            <option selected disabled>Open this select menu</option>
                                                            @foreach ($bobot as $b)
                                                                <option value="{{ $b->Keterangan }}">{{ $b->Keterangan }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                @endforeach
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Proses</button>
                                                </div>
                                            </form>                                            
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

    </div>
@endsection
