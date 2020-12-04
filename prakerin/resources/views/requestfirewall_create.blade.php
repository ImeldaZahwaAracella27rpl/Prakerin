@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h3>REQUEST FIREWALL</h3>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong>
                    @endforeach
                </div>
            @endif
            <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
            <form action="{{ route ('requestfirewall.store') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                    <label for="id_request">Id request :</label>
                    <input type="text" class="form-control" id="id_request" name="id_request">
              </div>
              <div class="form-group">
                    <label for="nik">Nik :</label>
                    <input type="text" class="form-control" id="nik" name="nik">
                </div>
                <div class="form-group">
                    <label for="id_project">Id Project:</label>
                    <input type="text" class="form-control" id="id_project" name="id_project">
                </div>
                <div class="form-group">
                    <label for="user_name">Username :</label>
                    <input type="text" class="form-control" id="user_name" name="user_name">
                </div>
                <div class="form-group">
                    <label for="nama">Email :</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="source">Source :</label>
                    <input type="text" class="form-control" id="source" name="source">
                </div>
                <div class="form-group">
                    <label for="destination">Destination :</label>
                    <input type="text" class="form-control" id="destination" name="destination">
                </div>
                <div class="form-group">
                    <label for="port">Port :</label>
                    <input type="text" class="form-control" id="port" name="port">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan :</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                </div>
                <div class="form-group">
                    <label for="chde">Chde :</label>
                    <input type="text" class="form-control" id="chde" name="chde">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <a href="http://localhost/prakerin/public/requestfirewall" class="btn btn-md btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
