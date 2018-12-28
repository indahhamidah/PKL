@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        PEMBINAAN NON-AKADEMIK @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
            @if(Auth::User()->role!=2 and Auth::User()->role!=14)
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-exim">
            <i class="fa fa-upload"></i> <span>Unggah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
            <i class="fa fa-download"></i> <span>Download</span>
            </button>
            <a href="/redaksikegiatan" class="btn btn-primary pull-left" role="button">
                  <i class="fa fa-file-text"></i> Redaksi</a>
            @else
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
            <i class="fa fa-download"></i> <span> Download</span>
            </button>
            @endif
            @endif
            @if(Auth::User()->id_departemen==10)
            @if(Auth::User()->role!=1 and Auth::User()->role!=14)
            <a href="{{ route('kegiatan.kegiatanexcel') }}" class="btn btn-primary"><i class="fa fa-download"></i><strong> .xls</strong></a>
            <a href="{{ route('kegiatan.downloadkegiatan') }}" class="btn btn-primary"><i class="fa fa-download"></i><strong>.pdf</strong></a>
            <a href="/redaksikegiatan" class="btn btn-primary " role="button">
                  <i class="fa fa-file-text"></i> Redaksi</a>
              @else
              <a href="{{ route('kegiatan.kegiatanexcel') }}" class="btn btn-primary"><i class="fa fa-download"></i><strong> .xls</strong></a>
            <a href="{{ route('kegiatan.downloadkegiatan') }}" class="btn btn-primary"><i class="fa fa-download"></i><strong>.pdf</strong></a>
            @endif
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
                  <h4 style="text-align: left;"> Tabel 3.3 Data Pembinaan Non-akademik @if(Auth::User()->id_departemen==10) yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA @elseif(Auth::User()->id_departemen!=10) Program Studi {{$dept[0]->nama_departemen}} FMIPA IPB @endif</h4>
                  <tr>
                    <th width="30px">No</th>
                    <th>Kegiatan</th>
                    <th>Penyelenggara</th>
                    <th width="30px">Tahun</th>
                    @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::User()->role!=14)
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
                  <td><p style="font-size:16px">{{ $no }}</p></td>
                  <td><p style="font-size:16px">{{$kegiatan->nama_kegiatan}}</p></td>
                  <td><p style="font-size:16px">{{$kegiatan->penyelenggara}}</p></td>
                  <td><p style="font-size:16px">{{$kegiatan->tahun_kegiatan}}</p></td>
                  @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role!=2 and Auth::User()->role!=14)
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
                      <h4 class="modal-title">Edit Pembinaan Non-akademik {{$dept[0]->nama_departemen}}</h4>
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
                            <label class="col-sm-12 control-label">Tahun</label>
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
               <h4 class="modal-title">Pembinaan Non-Akademik {{$dept[0]->nama_departemen}}</h4>
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
  <div class="modal fade" id="modal-exim" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('kegiatan.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Upload Pembinaan Non-Akademik {{$dept[0]->nama_departemen}}</h3>
          </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                  <label for="file" class="col-sm-2 control-label">Upload</label>
                    <div class="col-sm-10">
                    <input type="file" id="file" name="import_file" class="form-control" autofocus required>
                    <span class="help-block with-errors"></span>
                    </div>
                  </div>
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
    <div class="modal fade" id="modal" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('kegiatan.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Download Pembinaan Non-akademik {{$dept[0]->nama_departemen}}</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
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
