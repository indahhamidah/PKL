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
             @if(Auth::User()->id_departemen!=10)
              <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus"></i> <strong>Tambah</strong>
              </button>
              <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#modal-exim">
                <i class="fa fa-plus"></i> <strong>Import</strong>
              </button>

              <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Tahun">
                </div>

              @endif

            </div>
            <div class="panel-body"> 
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                  <th>Tipe</th>
                  <th>Jenis Mahasiswa</th>
                  <th>Jumlah Mahasiswa</th>
                  <th>Tahun</th>
                  @if(Auth::User()->id_departemen!=10)
                  <th>Actions</th>
                  @endif
                </tr>
               </thead>
               <tbody id="jumlahs-list" name="jumlahs-list">
                 @foreach ($jumlahs as $jumlah)
                  <tr>
                   <td>{{$jumlah->tipe}}</td>
                   <td>{{$jumlah->jenis_mahasiswa}}</td>
                   <td>{{$jumlah->jumlah_mahasiswa}}</td>
                   <td>{{$jumlah->tahun}}</td>
                     @if(Auth::User()->id_departemen!=10)
                    <td>

           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default{{$jumlah->id_jumlah}}">
                  <strong>Edit</strong>
              </button>
                  {!! Form::open(['method' => 'DELETE','route' => ['jumlah.destroy', $jumlah->id_jumlah],'style'=>'display:inline']) !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                  {!! Form::close() !!}
                    </td>
                    @endif
                  </tr>
                  <!-- Edit -->
                  <div class="modal fade" id="modal-default{{$jumlah->id_jumlah}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Edit Mahasiswa</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box box-info">
                            {!! Form::open(array('route' => ['jumlah.update', $jumlah->id_jumlah],'class'=>'form-horizontal','method'=>'PUT')) !!}
              <div class="box-body">
                  <div class="form-group">
                      <label class="col-xs-12 col-sm-6 col-md-8">Tipe</label>
                      <div class="col-sm-11">
                                   {!! Form::text('tipe', $jumlah->tipe, array('placeholder' => 'Tipe','class' => 'form-control')) !!}
                                </div>
                              </div> 
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Jenis Mahasiswa</label>
                                <div class="col-sm-11">
                                  {!! Form::text('jenis_mahasiswa', $jumlah->jenis_mahasiswa, array('placeholder' => 'Jenis Mahasiswa','class' => 'form-control')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Jumlah Mahasiswa</label>
                                <div class="col-sm-11">
                                  {!! Form::text('jumlah_mahasiswa', $jumlah->jumlah_mahasiswa, array('placeholder' => 'Jumlah Mahasiswa','class' => 'form-control')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Tahun</label>
                                <div class="col-sm-11">
                                  {!! Form::text('tahun', $jumlah->tahun, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
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
                <h4 class="modal-title">Tambah Mahasiswa</h4>
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

 

        <!-- import -->
        <div class="modal" id="modal-exim" tabindex="1" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <form method="post" action=" {{ route('jumlah.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hiddem="true"> &times; </span>
        </button>
          <h3 class="modal-title">Import Jumlah Mahasiswa</h3>
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
                
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </div>
         </div>

        </form>
        </div>
        </div>
        </div>
       
</section>

@endsection