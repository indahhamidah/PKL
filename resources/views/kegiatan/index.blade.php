@extends('layouts.app')
@section('content')
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PEMBINAAN NON-AKADEMIK
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
            @if(Auth::User()->role!=2)
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-exim">
            <i class="fa fa-upload"></i> <span>Unggah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
            <i class="fa fa-download"></i> <span>Download</span>
            </button>
            @else
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
            <i class="fa fa-download"></i> <span> Download</span>
            </button>
            @endif
            @endif
            @if(Auth::User()->id_departemen==10)
            <a href="{{ route('kegiatan.kegiatanexcel') }}" class="btn btn-primary"><i class="fa fa-download"></i><strong> .xls</strong></a>
            <a href="{{ route('kegiatan.downloadkegiatan') }}" class="btn btn-primary"><i class="fa fa-download"></i><strong>.pdf</strong></a>
            @endif
             <!-- Cari -->
              <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Cari...">
              </div> 
            </div>
            <!-- alert sukses dan eror -->
            @if(Session::has('message'))
              <div class="container">
                <div class="row">
                  <div class="col-sm-4 col-md-3">
                    <div class="alert alert-warning">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×</button>
                       <span class="glyphicon glyphicon-ok"></span>{{ Session::get('message') }}
                    </div>
                  </div>
                </div>
              </div>
           @elseif(Session::has('message2'))
              <div class="container">
                <div class="row">
                  <div class="col-sm-5 col-md-4">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×</button>
                      <span class="glyphicon glyphicon-ok"></span>{{ Session::get('message2') }}
                    </div>
                  </div>
                </div>
              </div>
          @endif
          <!-- tutup -->
            <div class="box-body"> 
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <h5 style="text-align: center"> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h5>
                  <tr>
                    <th width="30px">No</th>
                    <th>Kegiatan</th>
                    <th>Penyelenggara</th>
                    <th width="30px">Tahun</th>
                    @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2)
                    <th width="100px">Actions</th>
                    @endif
                    @endif
                  </tr>
                </thead>
              <tbody id="kegiatan-list" name="kegiatan-list">
              <?php $no = 0;?>
              @foreach ($kegiatan as $kegiatan)
              <?php $no++ ;?>
                <tr>
                  <td>{{ $no }}</td>
                  <td>{{$kegiatan->nama_kegiatan}}</td>
                  <td>{{$kegiatan->penyelenggara}}</td>
                  <td>{{$kegiatan->tahun_kegiatan}}</td>
                  @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role!=2)
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$kegiatan->id_kegiatan}}">
                    <span>Ubah</span>
                    </button>
                    {!! Form::open(['method' => 'DELETE','route' => ['kegiatan.destroy', $kegiatan->id_kegiatan],'style'=>'display:inline']) !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                  </td>
                  @endif
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
                            <label class="col-xs-12 col-sm-6 col-md-8">Penyelenggara</label>
                              <div class="col-sm-11">
                              {!! Form::text('penyelenggara', $kegiatan->penyelenggara, array('placeholder' => 'Penyelenggara','class' => 'form-control')) !!}
                              </div>
                          </div>                                              
                          <div class="form-group">
                            <label class="col-sm-5 control-label">Tahun</label>
                              <div class="col-sm-6">
                               {!! Form::selectRange('tahun_kegiatan', '2016', '2030', array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                              </div>
                          </div>                      
                          <div class="form-group">
                            <div class="modal-footer">
                              <button type="submit" class=" col-sm-3 col-md-offset-8 btn btn-primary" style="margin-top: 20px">Simpan Perubahan</button>
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
               <h4 class="modal-title">Pembinaan Non-Akademik</h4>
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
                <label class="col-sm-2 control-label">Penyelenggara</label>
                <div class="col-sm-10">
                {!! Form::text('penyelenggara', null, array('placeholder' => 'Penyelenggara','class' => 'form-control')) !!}  
                </div>
              </div>  
              <div class="form-group">
                <label class="col-sm-2 control-label">Tahun</label>
                <div class="col-sm-10">
                {!! Form::selectRange('tahun_kegiatan', '2016', '2030', array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="form-group">
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
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
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('kegiatan.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Unggah Pembinaan Non-Akademik</h3>
          </div>   
            <div class="modal-body">
              <div class="form-group">
              <label for="file" class="col-sm-2 control-label">Unggah</label>
                <div class="col-sm-10">
                <input type="file" id="file" name="import_file" class="form-control" autofocus required>
                <span class="help-block with-errors"></span>
                </div>
              </div>      
              <div class="form-group">
                <div class="modal-footer">  
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
             <!-- Download -->
    <div class="modal" id="modal" tabindex="1" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('kegiatan.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Download Pembinaan Non-akademik</h3>
            </div>   
            <div class="modal-body">
              <div class="form-group">              
                <div class="col-sm-10">
                  <a href="{{ route('kegiatan.export') }}" class="btn btn-primary btn-md">
                    <i class="fa fa-file-excel-o"> Download Excel</i>
                  </a>
                  <a href="download2" class="btn btn-primary btn-md">
                  <i class="fa fa-file-pdf-o"> Download PDF</i>
                  </a>                 
                  <span class="help-block with-errors"></span>
                </div>
              </div>              
              <div class="form-group">
                <div class="modal-footer">
                </div>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>


</section>

@endsection
