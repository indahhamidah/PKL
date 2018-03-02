@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Jumlah Mahasiswa FMIPA</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('penerimaans.create') }}"> Tambah Data Mahasiswa</a>
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
            <th>Tipe</th>
            <th>Jenis Mahasiswa</th>
            <th>Jumlah Mahasiswa</th>
            <th>Tahun</th>
            <th width="280px">Operation</th>
        </tr>

    @foreach ($penerimaans as $penerimaan)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $penerimaan->tipe}}</td>
        <td>{{ $penerimaan->jenis_mahasiswa}}</td>
        <td>{{ $penerimaan->jumlah_mahasiswa}}</td>
        <td>{{ $penerimaan->tahun}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('penerimaans.show',$penerimaan->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('penerimaans.edit',$penerimaan->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['penerimaans.destroy', $penerimaan->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td> 
    </tr>
    @endforeach
    </table>
    {!! $penerimaans->render() !!}
@endsection