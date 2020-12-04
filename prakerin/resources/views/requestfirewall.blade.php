@extends('template')
@section('content') 
<section class="main-section">
        <div class="content">
            @if(Session::get('role')=="4")
            <h2>DATA REQUEST FIREWALL</h2>
            @endif
            @if(Session::get('role')=="2")
            <h2>DATA REQUEST FIREWALL MANAGER</h2>
            @endif
            @if(Session::has('alert_message'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert_message') }}</strong>
                </div>
            @endif
            <hr>

            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a href="{{ route('requestfirewall.create') }}"
                    class=" btn btn-sm btn-warning">Tambah</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead class="thead-dark">
                        <tr style="font-size:10px"> 
                            <th>ID</th>
                            <th>NIK</th>
                            <th>ID PROJECT</th>
                            <th>USERNAME</th>
                            <th>EMAIL</th>
                            <th>SOURCE</th>
                            <th>DESTINATION</th>
                            <th>PORT</th>
                            <th>KETERANGAN</th>
                            <th>CHDE</th>
                            @if(Session::get('role')=="2")
                            <th>STATUS CHECKED</th>
                            <th>STATUS WORKED</th>
                            <th>STATUS APPROVAL</th>
                            <th>Opsi</th>
                            @endif
                        </tr>
                </thead>
                <tbody>
                @foreach($data as $data)
                    <tr style="font-size:10px">
                        <td>{{ $data->id_request }}</td>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->id_project }}</td>
                        <td>{{ $data->user_name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->source }}</td>
                        <td>{{ $data->destination }}</td>
                        <td>{{ $data->port }}</td>
                        <td>{{ $data->keterangan }}</td>
                        <td>{{ $data->chde }}</td>
                        @if(Session::get('role')=="2")
                        <td>{{ $data->status_check }}</td>
                        <td>{{ $data->status_doing}}</td>
                        <td>{{ $data->status_approval }}</td>
                        <td>
                            <form action="{{ route('requestfirewall.destroy', $data->id_request) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('requestfirewall.edit',$data->id_request) }}" class=" btn btn-sm btn-info" style="font-size:10px">Edit</a>
                            </form>
                        </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection



