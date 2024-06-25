@extends('website.main.index')

@section('content')
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Keterangan</label>
            <input type="keterangan" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Bobot</label>
            <input type="bobot" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
    </form>
@endsection
