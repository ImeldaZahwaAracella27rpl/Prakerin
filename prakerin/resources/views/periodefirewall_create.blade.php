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

            <form action="{{ route ('periodefirewall.store') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                    <label for="nama">Id Request :</label>
                    <input type="text" class="form-control" id="id_request" name="n">
                </div>
                <div class="form-group">
                    <label for="nama">Date Request:</label>
                    <input type="text" class="form-control" id="id_project" name="id_project">
                </div>
                <div class="form-group">
                    <label for="nama">Expired Date :</label>
                    <input type="text" class="form-control" id="user_name" name="user_name">
                </div>
                <div class="form-group">
                    <label for="nama">Periode :</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="nama">Valid :</label>
                    <input type="text" class="form-control" id="source" name="source">
                </div>
                <div class="form-group">
                    <label for="nama">Status Request :</label>
                    <input type="text" class="form-control" id="destination" name="destination">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection
