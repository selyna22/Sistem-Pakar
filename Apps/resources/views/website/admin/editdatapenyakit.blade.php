@extends('website.main.index')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Form Tambah Data Penyakit</h5>
                        <form action="{{ route('Tambahdata_penyakit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="kodePenyakit">Kode Penyakit</label>
                                <input type="text" class="form-control" id="kodePenyakit"
                                    placeholder="Masukkan Kode Penyakit" name="KodePenyakit" required>
                            </div>
                            <div class="form-group">
                                <label for="namaPenyakit">Nama Penyakit</label>
                                <input type="text" class="form-control" id="namaPenyakit"
                                    placeholder="Masukkan Nama Penyakit" name="NamaPenyakit" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
