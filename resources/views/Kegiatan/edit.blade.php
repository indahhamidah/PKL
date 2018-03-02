@extends('layouts.default')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Kegiatan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kegiatan.index') }}"> Back</a>
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
    {!! Form::model($kegiatan, ['method' => 'PATCH','route' => ['kegiatan.update', $kegiatans->id]]) !!}
        @include('kegiatan.form')
    {!! Form::close() !!}
@endsection