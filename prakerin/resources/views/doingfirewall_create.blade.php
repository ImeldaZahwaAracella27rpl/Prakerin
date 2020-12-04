@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Tambah</h1>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong>
                    @endforeach
                </div>
            @endif

            <form action="{{ route ('doingfirewall.store') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                    <label for="id">Id request :</label>
                    <input type="text" class="form-control" id="id_request" name="id_request">
                </div>
                <div class="form-group">
                    <label for="nik">Nik :</label>
                    <input type="text" class="form-control" id="nik" name="nik">
                </div>
                <div class="form-group">
                    <label for="username">Username Doing :</label>
                    <input type="text" class="form-control" id="user_name_doing" name="user_name_doing">
                </div>
                <div class="form-group">
                    <label for="valid">Valid :</label>
                    <input type="text" class="form-control" id="valid" name="valid">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <a href="http://localhost/prakerin/public/doingfirewall" class="btn btn-md btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
