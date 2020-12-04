@extends('template')
@section('content') 
   <section class="main-section">
        <div class="content">
            <h2>DATA CHECKED FIREWALL</h2>
            @if(Session::has('alert_message'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert_message') }}</strong>
                </div>
            @endif
            <hr>

            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a href="{{ route('checkedfirewall.create') }}"
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
                            <th>USERNAME CHECKER</th>
                            <th>STATUS CHECK</th>
                            <th>VALID</th>
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
                        <td>{{ $data->user_name_checker }}</td>
                        <td>{{ $data->status_check }}</td>
                        <td>{{ $data->valid }}</td>
                        <td>{{ $data->checked_date }}</td>
                        @if(Session::get('role')=="2")
                        <td>
                            <form action="{{ route('checkedfirewall.destroy', $data->id_checked) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('checkedfirewall.edit',$data->id_checked) }}" class=" btn btn-sm btn-info" style="font-size:13px">Edit</a>
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
