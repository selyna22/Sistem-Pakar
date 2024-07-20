@extends('website.main.index')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Form Tambah Data Keyakinan</h5>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Keterangan</label>
                                <input type="keterangan" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Bobot</label>
                                <input type="bobot" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
