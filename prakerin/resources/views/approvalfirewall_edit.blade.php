@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h3>Ubah Request Firewall</h3>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong>
                    @endforeach
                </div>
            @endif

            @foreach($data as $datas)
            <form action="{{ route('approvalfirewall.update', $datas->id_approval) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="status">Status Approval :</label>
                    <input type="text" class="form-control" id="status_approval" name="status_approval">
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