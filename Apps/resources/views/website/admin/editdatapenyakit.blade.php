@extends('website.main.index')

@section('content')
    <form action="{{ route('Tambahdata_penyakit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Kode Penyakit</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="KodePenyakit">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Penyakit</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="NamaPenyakit">
        </div>
        <button type="submit">Kirim</button>
    </form>
@endsection
