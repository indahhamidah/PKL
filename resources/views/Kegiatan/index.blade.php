@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kegiatan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kegiatan.create') }}"> Tambah Kegiatan</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kegiatan</th>
            <th>Tahun</th>
            <th width="280px">Operation</th>
        </tr>
    @foreach ($kegiatan as $kegiatans)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $kegiatans->kegiatan}}</td>
        <td>{{ $kegiatans->tahun}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('kegiatan.show',$kegiatans->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('kegiatan.edit',$kegiatans->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['kegiatan.destroy', $kegiatans->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $kegiatan->render() !!}
@endsection