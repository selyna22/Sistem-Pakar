@extends('website.main.index')

@section('content')
    <form action="{{ route('Tambahdata_makanan') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Kode Makanan</label>
            <input type="kode" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="KodeMakanan">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Makanan</label>
            <input type="nama" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="NamaMakanan">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Kandungan</label>
            <input type="kandungan" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="Kandungan">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nilai CF</label>
            <input type="nilai" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="Nilai_CF">
        </div>
        <button type="submit" class="btn btn-secondary">Tambah</button>
    </form>
@endsection
