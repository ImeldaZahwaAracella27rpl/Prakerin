@extends('template')
@section('content') 
   <section class="main-section">
            @if(Session::has('alert_message'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert_message') }}</strong>
                </div>
            @endif
            
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a href="{{ route('user.create') }}"
                    class=" btn btn-sm btn-warning">Tambah</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>ROLE ID</th>
                            <th>STATUS</th>
                            <th>OPTION</th>
                        </tr>
                </thead>
                <tbody>
                @if(Session::get('role')=="1")
                @foreach($data as $data)
                    <tr>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->user_name }}</td>
                        <td>{{ $data->password }}</td>
                        <td>{{ $data->roleId}}</td>
                        <td>{{ $data->status}}</td>
                        <td>
                            <form action="{{ route('user.destroy', $data->nik) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('user.edit',$data->nik) }}" class=" btn btn-sm btn-info">Edit</a>
                                <button class="btn btn-sm btn-dark" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </section>
@endsection

