<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipe:</strong>
            {!! Form::text('tipe', null, array('placeholder' => 'Tipe','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Mahasiswa:</strong>
            {!! Form::text('jenis_mahasiswa', null, array('placeholder' => 'Jenis Mahasiswa','class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jumlah Mahasiswa:</strong>
            {!! Form::text('jumlah_mahasiswa', null, array('placeholder' => 'Jumlah Mahasiswa','class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tahun:</strong>
            {!! Form::text('tahun', null, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>