@extends('website.main.index')

@section('content')
    <<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Form Tambah Data Makanan</h5>
                        <form action="{{ route('Tambahdata_makanan') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="kodeMakanan">Kode Makanan</label>
                                <input type="text" class="form-control" id="kodeMakanan"
                                    placeholder="Masukkan Kode Makanan" name="KodeMakanan">
                            </div>
                            <div class="form-group">
                                <label for="namaMakanan">Nama Makanan</label>
                                <input type="text" class="form-control" id="namaMakanan"
                                    placeholder="Masukkan Nama Makanan" name="NamaMakanan">
                            </div>
                            <div class="form-group">
                                <label for="kandungan">Kandungan</label>
                                <input type="text" class="form-control" id="kandungan" placeholder="Masukkan Kandungan"
                                    name="Kandungan">
                            </div>
                            <div class="form-group">
                                <label for="nilaiCF">Nilai CF</label>
                                <input type="text" class="form-control" id="nilaiCF" placeholder="Masukkan Nilai CF"
                                    name="Nilai_CF">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
