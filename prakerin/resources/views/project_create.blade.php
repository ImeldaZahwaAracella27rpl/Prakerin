@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h3>PROJECT</h3>
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
            <form action="{{ route ('project.store') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                    <label for="id_project">Id Project :</label>
                    <input type="text" class="form-control" id="id_project" name="id_project">
              </div>
              <div class="form-group">
                    <label for="nama_project">Nama Project :</label>
                    <input type="text" class="form-control" id="nama_project" name="nama_project">
                </div>
                <div class="form-group">
                    <label for="nik">Nik :</label>
                    <input type="text" class="form-control" id="nik" name="nik">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <a href="http://localhost/prakerin/public/project" class="btn btn-md btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
