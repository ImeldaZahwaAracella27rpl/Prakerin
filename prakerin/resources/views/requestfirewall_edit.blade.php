@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Ubah Request Firewall</h1>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong>
                    @endforeach
                </div>
            @endif

            @foreach($data as $datas)
            <form action="{{ route('requestfirewall.update', $datas->id_request) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Id request :</label>
                    <input type="text" class="form-control" id="id_request" name="id_request">
                </div>
                <div class="form-group">
                    <label for="nik">nik:</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="{{ $datas->nik }}">
                </div>
                <div class="form-group">
                    <label for="id_project">id_project:</label>
                    <input type="text" class="form-control" id="id_project" name="id_project" value="{{ $datas->id_project }}">
                </div>
                <div class="form-group">
                    <label for="user_name">user_name:</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $datas->user_name }}">
                </div>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $datas->email }}">
                </div>
                <div class="form-group">
                    <label for="source">source:</label>
                    <input type="text" class="form-control" id="source" name="source" value="{{ $datas->source }}">
                </div>
                <div class="form-group">
                    <label for="destination">destination:</label>
                    <input type="text" class="form-control" id="destination" name="destination" value="{{ $datas->destination }}">
                </div>
                <div class="form-group">
                    <label for="port">port:</label>
                    <input type="text" class="form-control" id="port" name="port" value="{{ $datas->port }}">
                </div>
                <div class="form-group">
                    <label for="keterangan">keterangan:</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $datas->keterangan }}">
                </div>
                <div class="form-group">
                    <label for="chde">chde:</label>
                    <input type="text" class="form-control" id="chde" name="chde" value="{{ $datas->chde }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
    </section>
@endsection