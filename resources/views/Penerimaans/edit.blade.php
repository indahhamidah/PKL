@extends('layouts.default')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Jumlah Mahasiswa FMIPA</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('penerimaans.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($penerimaan, ['method' => 'PATCH','route' => ['penerimaans.update', $penerimaan->id]]) !!}
        @include('penerimaans.form')
    {!! Form::close() !!}
@endsection