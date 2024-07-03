@extends('website.main.index')

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Waktu Input</th>
                            <th>Diagnosa</th>
                            <th>Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($query as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->WaktuInput }}</td>
                                <td>{{ $item->Diagnosa }}</td>
                                <td>{{ $item->Presentase }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
