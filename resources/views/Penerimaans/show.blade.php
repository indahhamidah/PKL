@extends('layouts.default')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('penerimaans.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe:</strong>
                {{ $penerimaan->tipe}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Mahasiswa:</strong>
                {{ $penerimaan->jenis_mahasiswa}}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Mahasiswa:</strong>
                {{ $penerimaan->jumlah_mahasiswa}}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun:</strong>
                {{ $penerimaan->tahun}}
            </div>
        </div>
    </div>
@endsection