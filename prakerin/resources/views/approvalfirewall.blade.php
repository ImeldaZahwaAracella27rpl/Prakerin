@extends('template')
@section('content') 
   <section class="main-section">
   <h2>DATA APPROVAL FIREWALL</h2>
            @if(Session::has('alert_message'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert_message') }}</strong>
                </div>
            @endif

            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a href="{{ route('approvalfirewall.create') }}"
                    class=" btn btn-sm btn-warning">Tambah</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead class="thead-dark">
                        <tr style="font-size:13px">
                            <th>NO</th>
                            <th>ID REQUEST</th>
                            <th>NIK</th>
                            <th>USERNAME APPROVAL</th>
                            <th>STATUS</th>
                            <th>COMMAND</th>
                            <th>VALID</th>
                            <th>EMAIL</th>
                            <th>DATE</th>
                            @if(Session::get('role')=="2")
                            <th>OPSI</th>
                            @endif
                        </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $data)
                    <tr style="font-size:13px">
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->id_request}}</td>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->user_name_approval }}</td>
                        <td>{{ $data->status_approval }}</td>
                        <td>{{ $data->command }}</td>
                        <td>{{ $data->valid }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->approve_date }}</td>
                        @if(Session::get('role')=="2")
                        <td>
                            <form action="{{ route('approvalfirewall.destroy', $data->id_approval) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('approvalfirewall.edit',$data->id_approval) }}" class=" btn btn-sm btn-info" style="font-size:13px">Edit</a>
                                <button class="btn btn-sm btn-dark" style="font-size:13px" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
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
