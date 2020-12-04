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
            <form action="{{ route('doingfirewall.update', $datas->id_doing) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="status">Status Worked :</label>
                    <input type="text" class="form-control" id="status_doing" name="status_doing">
                </div>
            </form>
            @endforeach
        </div>
    </section>
@endsection