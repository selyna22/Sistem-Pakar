@extends('website.main.index')

@section('content')
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Kode Penyakit</label>
            <input type="kode" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Penyakit</label>
            <input type="nama" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Keterangan</label>
            <input type="kandungan" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
@endsection