@extends('layouts.app')
@section('content')

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      KELULUSAN MAHASISWA
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
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Tahun Masuk</th>
                  <th>Tahun Lulus</th>
                  <th>Total Bulan Masa Studi</th>
                  <th>Total Tahun Masa Studi</th>
                  <th>IPK</th>
                  <th>Actions</th>
                </tr>
               </thead>
               <tbody id="lulusans-list" name="lulusans-list">
                 @foreach ($lulusans as $lulusan)
                  <tr id="lulusan{{$lulusan->id_lulusan}}">
                   <td>{{$lulusan->nama}}</td>
                   <td>{{$lulusan->nim}}</td>
                   <td>{{$lulusan->tahun_masuk}}</td>
                   <td>{{$lulusan->tahun_lulus}}</td>
                   <td>{{$lulusan->total_bulan}}</td>
                   <td>{{$lulusan->total_tahun}}</td>
                   <td>{{$lulusan->ipk}}</td>
                    <td>
                  <a class="btn btn-primary" href="{{ route('lulusan.edit',$lulusan->id_lulusan) }}">Edit</a>
                  {!! Form::open(['method' => 'DELETE','route' => ['lulusan.destroy', $lulusan->id_lulusan],'style'=>'display:inline']) !!}
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
                <h4 class="modal-title">Kelulusan Mahasiswa</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-info">
            {!! Form::open(array('route' => 'lulusan.store','class'=>'form-horizontal','method'=>'POST')) !!}
            <div class="box-body">
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-10">
                    {!! Form::text('nama', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                     </div>
                  </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIM</label>
                    <div class="col-sm-10">
                      {!! Form::text('nim', null, array('placeholder' => 'NIM','class' => 'form-control')) !!}
                   </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tahun Masuk</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::text('tahun_masuk', null, array('placeholder' => 'Tahun Masuk','class' => 'form-control', 'id'=>'datepicker')) !!}
                </div>   
                  </div>
                </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Tahun Lulus</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                      {!! Form::text('tahun_lulus', null, array('placeholder' => 'Tahun Lulus','class' => 'form-control','id'=>'datepicker')) !!}
                    </div>
                  </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-2 control-label">Total Bulan</label>
                  <div class="col-sm-10">
                    {!! Form::text('total_bulan', null, array('placeholder' => 'Total Bulan','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Total Tahun</label>
                <div class="col-sm-10">
                  {!! Form::text('total_tahun', null, array('placeholder' => 'Total Tahun','class' => 'form-control')) !!}
              </div>
          </div>
           <div class="form-group">
               <label class="col-sm-2 control-label">IPK</label>
               <div class="col-sm-10">
                  {!! Form::text('ipk', null, array('placeholder' => 'IPK','class' => 'form-control')) !!}
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