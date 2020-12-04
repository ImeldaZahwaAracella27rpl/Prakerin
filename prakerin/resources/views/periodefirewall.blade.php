@extends('template')
@section('content') 
   <section class="main-section">
   <h2>DATA PERIODE FIREWALL</h2>
            @if(Session::has('alert_message'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert_message') }}</strong>
                </div>
            @endif


            <hr>
            <a href="{{ url('periodefirewall/create') }}">
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
                        <tr style="font-size:13px">
                            <th>NO</th>
                            <th>ID REQUEST</th>
                            <th>DATE REQUEST</th>
                            <th>EXPIRED DATE</th>
                            <th>PERIODE</th>
                            <th>VALID</th>
                            <th>STATUS REQUEST</th>
                        </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $data)
                    <tr style="font-size:13px">
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->id_request }}</td>
                        <td>{{ $data->date_request }}</td>
                        <td>{{ $data->expired_date }}</td>
                        <td>{{ $data->periode }}</td>
                        <td>{{ $data->valid }}</td>
                        <td>{{ $data->status_request }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

