@extends('layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        KEGIATAN NON-AKADEMIK
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
           <!-- Button trigger modal -->
        <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#modal-default">
          <i class="fa fa-plus"></i> <strong>Tambah</strong>
        </button> 
      </div>
      <div class="box-body"> 
       <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Kegiatan</th>
            <th>Tahun</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="kegiatan-list" name="kegiatan-list">
           @foreach ($kegiatan as $nonakademik)
           <tr>
             <td>{{$nonakademik->nama_kegiatan}}</td>
             <td>{{$nonakademik->tahun_kegiatan}}</td>
              <td>
          

              </td>
            </tr>
            @endforeach
        </tbody>
        </table>
       </div>
       

<!-- Tambah Data -->
    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Kegiatan Non-Akademik</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-info">
            <!-- form start -->
            {!! Form::open(array('route' => 'kegiatan.store','class'=>'form-horizontal','method'=>'POST')) !!}
            <div class="box-body">
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kegiatan</label>
                      <div class="col-sm-10">
                       {!! Form::text('nama_kegiatan', null, array('placeholder' => 'Nama Kegiatan','class' => 'form-control')) !!}  
                  </div>
                </div>              
               <div class="form-group">
                      <label class="col-sm-2 control-label">Tahun</label>
                      <div class="col-sm-10">
                      {!! Form::text('tahun_kegiatan', null, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
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