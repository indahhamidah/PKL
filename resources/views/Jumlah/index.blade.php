@extends('layouts.app')
@section('content')

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MAHASISWA
      </h1>    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <!-- /.box-header -->
            
              <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#modal-default">
          <i class="fa fa-plus"></i> <strong>Tambah</strong>
        </button>
            </div>
            <div class="panel-body"> 
             <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Tipe</th>
                  <th>Jenis Mahasiswa</th>
                  <th>Jumlah Mahasiswa</th>
                  <th>Tahun</th>
                  <th>Actions</th>
                </tr>
               </thead>
               <tbody id="jumlahs-list" name="jumlahs-list">
                 @foreach ($jumlahs as $jumlah)
                  <tr>
                   <td>{{$jumlah->tipe}}</td>
                   <td>{{$jumlah->jenis_mahasiswa}}</td>
                   <td>{{$jumlah->jumlah_mahasiswa}}</td>
                   <td>{{$jumlah->tahun}}</td>
                    <td>
                  <a class="btn btn-primary" href="{{ route('jumlah.edit',$jumlah->id_jumlah) }}">Edit</a>
                  {!! Form::open(['method' => 'DELETE','route' => ['jumlah.destroy', $jumlah->id_jumlah],'style'=>'display:inline']) !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                  {!! Form::close() !!}
                    </td>
                  </tr>
                  @endforeach
              </tbody>
              </table>
             </div>
             </div>

<!-- Tambah Data -->
    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Jumlah Mahasiswa</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-info">
            {!! Form::open(array('route' => 'jumlah.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tipe</label>
                      <div class="col-sm-10">
                         {!! Form::text('tipe', null, array('placeholder' => 'Tipe','class' => 'form-control')) !!}
                      </div>
                  </div> 
                   <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Mahasiswa</label>
                      <div class="col-sm-10">
                        {!! Form::text('jenis_mahasiswa', null, array('placeholder' => 'Jenis Mahasiswa','class' => 'form-control')) !!}
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Jumlah Mahasiswa</label>
                      <div class="col-sm-10">
                      {!! Form::text('jumlah_mahasiswa', null, array('placeholder' => 'Jumlah Mahasiswa','class' => 'form-control')) !!}
                  </div>
                  </div>
                <div class="form-group">
                      <label class="col-sm-2 control-label">Tahun</label>
                      <div class="col-sm-10">
                      {!! Form::text('tahun', null, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                  </div>
              </div>
               <div class="form-group">
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
         </div>
          {!! Form::close() !!}
    </div>
              </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</section>

@endsection