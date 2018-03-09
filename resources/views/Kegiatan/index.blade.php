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
            @if(Auth::User()->id_departemen!=10)
        <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#modal-default">
          <i class="fa fa-plus"></i> <strong>Tambah</strong>
        </button> 
        <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#modal-exim">
                <i class="fa fa-upload"></i> <strong>Import</strong>
              </button>
              
              <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Tahun">
                </div>
           @else
              <button type="button" class="btn btn-default pull-left">
              <i class="fa fa-download"></i> <strong>Download</strong>
            </button>
            <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Tahun">
                </div>
            @endif
            </button> 
              </div>
              <div class="box-body"> 
               <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Kegiatan</th>
                    <th>Tahun</th>
                     @if(Auth::user()->id_departemen!=10)
                      <th>Actions</th>
                      @endif
                  </tr>
         </thead>
         <tbody id="kegiatan-list" name="kegiatan-list">
           @foreach ($kegiatan as $kegiatan)
           <tr>
             <td>{{$kegiatan->nama_kegiatan}}</td>
               <td>{{$kegiatan->tahun_kegiatan}}</td>
                @if(Auth::user()->id_departemen!=10)
              <td>

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default{{$kegiatan->id_kegiatan}}">
                  <strong>Edit</strong>
              </button>
                  {!! Form::open(['method' => 'DELETE','route' => ['kegiatan.destroy', $kegiatan->id_kegiatan],'style'=>'display:inline']) !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                  {!! Form::close() !!}
                    </td>
                    @endif
                  </tr>
                  <!-- Edit -->
                  <div class="modal fade" id="modal-default{{$kegiatan->id_kegiatan}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Edit Kegiatan</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box box-info">
                            {!! Form::open(array('route' => ['kegiatan.update', $kegiatan->id_kegiatan],'class'=>'form-horizontal','method'=>'PUT')) !!}
              <div class="box-body">
                  <div class="form-group">
                      <label class="col-xs-12 col-sm-6 col-md-8">Kegiatan</label>
                      <div class="col-sm-11">
                                   {!! Form::text('nama_kegiatan', $kegiatan->nama_kegiatan, array('placeholder' => 'Kegiatan','class' => 'form-control')) !!}
                                </div>
                              </div> 
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Tahun</label>
                                <div class="col-sm-11">
                                  {!! Form::text('tahun_kegiatan', $kegiatan->tahun_kegiatan, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                                </div>
                              </div>
                             
                              <div class="form-group">
                                  <div class="modal-footer">
                                  <button type="submit" class=" col-sm-3 col-md-offset-8 btn btn-primary" style="margin-top: 20px">Save Changes</button>
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
                  <button type="submit" class="btn btn-primary">Save</button>
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

          <!-- import -->
        <div class="modal" id="modal-exim" tabindex="1" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <form method="post" action=" {{ route('kegiatan.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hiddem="true"> &times; </span>
        </button>
          <h3 class="modal-title">Import Kegiatan Non-Akademik</h3>
        </div>   

             <div class="modal-body">
                  <div class="form-group">
                      <label for="file" class="col-sm-2 control-label">Import</label>
                      <div class="col-sm-10">
                         <input type="file" id="file" name="import_file" class="form-control" autofocus required>
                         <span class="help-block with-errors"></span>
                      </div>
                  </div> 
                   
               <div class="form-group">
                  <div class="modal-footer">
                
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
         </div>

        </form>
        </div>
        </div>
        </div>
</section>
@endsection