@extends('template')
@section('content') 
<section class="main-section">
        <div class="content">
            <h2>DATA PROJECT</h2>
            @if(Session::has('alert_message'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert_message') }}</strong>
                </div>
            @endif
            <hr>

            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">


                <a href="{{ route('project.create') }}"
                class=" btn btn-sm btn-warning">Tambah</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead class="thead-dark">
                        <tr style="font-size:13px"> 
                            <th>ID PROJECT</th>
                            <th>NAMA PROJECT</th>
                            <th>NIK</th>
                            <th>OPSI</th>
                        </tr>
                </thead>
                <tbody>
                @foreach($data as $data)
                    <tr style="font-size:13px">
                        <td>{{ $data->id_project }}</td>
                        <td>{{ $data->nama_project }}</td>
                        <td>{{ $data->nik}}</td>
                        <td>
                        <i class="fa fa-fw fa-ban"></i>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection



