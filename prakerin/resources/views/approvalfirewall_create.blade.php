@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h3>APPROVAL FIREWALL</h3>
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
            <form action="{{ route ('approvalfirewall.store') }}" method="POST">
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
                    <label for="username">Username approval :</label>
                    <input type="text" class="form-control" id="user_name_approval" name="user_name_approval">
                </div>
                <div class="form-group">
                    <label for="command">Command :</label>
                    <input type="text" class="form-control" id="command" name="command">
                </div>
                <div class="form-group">
                    <label for="valid">Valid :</label>
                    <input type="text" class="form-control" id="valid" name="valid">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <a href="http://localhost/prakerin/public/approvalfirewall" class="btn btn-md btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
