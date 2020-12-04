@extends('registrasi_create')
@section('content') 
   <section class="main-section">
            @if(Session::has('alert_message'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert_message') }}</strong>
                </div>
            @endif
            <hr>
            <a href="{{ url('registrasi/create') }}">
            <hr>
            <table class="table table-bordered">
                <tbody>
                @foreach($data as $data)
                    <tr>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->user_name }}</td>
                        <td>{{ $data->password }}</td>
                        <td>{{ $data->roleId}}</td>
                        <td>{{ $data->status}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

