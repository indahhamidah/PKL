<style>
table, th, td{
  border: 1px solid black;
}
</style>

@extends('layouts.app')
@section('content')

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
          Kerjasama dengan Instansi Luar Negeri @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
                @if(Auth::User()->role==2 or Auth::user()->role==14)
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </button>
                @else
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default">
                  <i class="fa fa-plus"></i> <span>Tambah</span>
                  </button>
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-exim">
                     <i class="fa fa-upload"></i> <span>Unggah</span>
                  </button>
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </button>
                @endif
                
              @elseif(Auth::User()->id_departemen==10)
                @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                <a class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                   <i class="fa fa-plus"> Tambah</i>
                  </a>
                  <a class="btn btn-primary" data-toggle="modal" data-target="#modal-exim">
                   <i class="fa fa-upload"> Unggah</i>
                  </a>
                  <a href="{{ route('kerjasama.luarexcel') }}" class="btn btn-primary" role="button">
                   <i class="fa fa-download"> .xls</i>
                  </a>
                  <a href="{{ route('kerjasamaluar.download')}}" class="btn btn-primary">
                  <i class="fa fa-download"> .pdf</i>
                  </a>
                @else
                  <a href="{{ route('kerjasama.luarexcel') }}" class="btn btn-primary">
                    <i class="fa fa-download"> .xls</i>
                    </a>
                    <a href="{{ route('kerjasamaluar.download')}}" class="btn btn-primary">
                    <i class="fa fa-download"> .pdf</i>
                    </a>
                  @endif
              @endif

                <div class="col-md-offset-10">
             <input class="form-control" id="Input" type="text" placeholder="Cari...">
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


          <!-- tabel -->
          <div class="panel-body"  style="margin-bottom: 400px"> 
              <table id="example2" class="table table-bordered table-hover dataTable">
                <thead>
                  <h4 style="text-align: center;"> Tabel 2.2 Kerjasama dengan instansi luar negeri Tingkat Fakultas @if(Auth::User()->id_departemen==10) @elseif(Auth::User()->id_departemen!=10) Program Studi {{$dept[0]->nama_departemen}} FMIPA IPB @endif</h4>
                  <tr>
                  <th rowspan="2" style="text-align: center">No</th>
                  <th rowspan="2" style="text-align: center">Nama Instansi</th>
                  <th rowspan="2" style="text-align: center">Jenis Kegiatan</th>
                  <th colspan="2" style="text-align: center">Kurun Waktu Kerjasama</th>
                  <th rowspan="2" style="text-align: center">Jumlah Dana(juta Rp)</th>
                  <th rowspan="2" style="text-align: center">Manfaat yang Telah Diperoleh</th>
                  @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                    <th rowspan="2" style="text-align: center">Dokumen Pendukung</th>
                    <th rowspan="2" style="text-align: center">Aksi</th>
                    @endif
                  @elseif(Auth::User()->id_departemen==10)
                     @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                     <th rowspan="2" style="text-align: center">Dokumen Pendukung</th>
                     <th rowspan="2" style="text-align: center">Aksi</th>
                    @endif
                  @endif
                  </tr>

                  <tr>
                  <th style="text-align: center">Mulai</th>
                  <th style="text-align: center">Akhir</th>
                  </tr>

                <tr>
                  <tr>
                  <th rowspan="2" style="text-align: center">(1)</th>
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  <th rowspan="2" style="text-align: center">(7)</th>
                  @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                  <th rowspan="2" style="text-align: center">(8)</th>
                    @endif
                  @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    <th rowspan="2" style="text-align: center">(8)</th>
                  @endif
                  @endif
                  </tr>
                </tr>

                  </thead>
                  <tbody id="kerjasamaLuar" name="kerjasamaLuar">
                  <?php $nomor = 0;?>
                  @foreach ($kerjasamaLuar as $kerjasamaluar)
                  <?php $nomor++ ;?>
                   <tr>
                  <td style="text-align: center">{{ $nomor }}</td>
                  <td>{{$kerjasamaluar->nama_instansi}}</td>
                  <td>{{$kerjasamaluar->jenis_kegiatan}}</td>
                  <td>{{$kerjasamaluar->tahun_mulai}}</td>
                  <td>{{$kerjasamaluar->tahun_akhir}}</td>
                  <td>{{$kerjasamaluar->jumlah_dana}}</td>
                  <td>{{$kerjasamaluar->manfaat}}</td>

                  <!-- UPLOAD Dokumen Pendukung -->
                  @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                  <td>
                    <button type="button" class=" btn-sm" style="margin-bottom: 10px" data-toggle="modal" data-target="#modal-default5{{$kerjasamaluar->id_kerjasamaLuar}}">
                       <i class="fa fa-upload"></i>
                      </button>
                  @endif
                @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    <td>
                      <button type="button" class=" btn-sm" style="margin-bottom: 10px" data-toggle="modal" data-target="#modal-default5{{$kerjasamaluar->id_kerjasamaLuar}}">
                       <i class="fa fa-upload"></i>
                      </button>
                    @endif
                @endif
                <!-- DOWNLOAD DOKUMEN DEPARTEMEN  -->
                  @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                    @foreach ($dokumen_luar as $dokumenluar)
                      @if($dokumenluar->id_dokumenL==$kerjasamaluar->id_dokumenL)
                      <a href="{{ route('downloadDokumenL', $dokumenluar->id_dokumenL) }}" >
                        <button type="button" class=" btn-sm" style="margin-bottom: 10px">
                          <i class="fa fa-download"></i>
                        </button>
                      </a>
                      @endif
                    @endforeach
                        @if(isset($kerjasamaluar->id_dokumenL))
                          <label class="label label-success">Dokumen Ada</label>
                          @else
                          <label class="label label-warning">Dokumen belum ada</label>
                        @endif
                    @endif
                    

                    <!-- DOWNLOAD Dokumen FMIPA -->
                    @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    @foreach ($dokumen_luar as $dokumenluar)
                      @if($dokumenluar->id_dokumenL==$kerjasamaluar->id_dokumenL)
                      <a href="{{ route('downloadDokumenL', $dokumenluar->id_dokumenL) }}" >
                        <button type="button" class=" btn-sm" style="margin-bottom: 10px">
                          <i class="fa fa-download"></i>
                        </button>
                      </a>
                      @endif
                    @endforeach
                        @if(isset($kerjasamaluar->id_dokumenL))
                          <label class="label label-success">Dokumen Ada</label>
                          @else
                          <label class="label label-warning">Dokumen belum ada</label>
                        @endif
                    @endif
                    @endif
                    </td>

                  <!-- Edit -->
				          @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                     <td> 
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$kerjasamaluar->id_kerjasamaLuar}}">
                        <span>Ubah</span>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default6{{$kerjasamaluar->id_kerjasamaLuar}}">
                        <span>Hapus</span>
                        </button>
                      </td>
                      </tr>
                    @endif
                  @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                     <td> 
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$kerjasamaluar->id_kerjasamaLuar}}">
                        <span>Ubah</span>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default6{{$kerjasamaluar->id_kerjasamaLuar}}">
                        <span>Hapus</span>
                        </button>
                      </td>
                      </tr>
                    @endif
                  @endif

                <!-- Hapus -->
          <div class="modal fade" id="modal-default6{{$kerjasamaluar->id_kerjasamaLuar}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(['method' => 'DELETE','route' => ['standar7kerjasamaluarnegeri.destroy', $kerjasamaluar->id_kerjasamaLuar],'style'=>'display:inline']) !!}
                    <div class="box-body">
                      <div class="form-group">
                      <h3>Anda Yakin untuk hapus data?</h3>
                       <button type="submit" class="col-md-4 btn btn-danger" style="margin-left:10px">Yakin</button>
                       <button type="button" class="col-sm-4 col-md-offset-5 btn btn-primary" style="margin-left:10px" onclick="window.location='{{ url('/standar7kerjasamaluarnegeri') }}'" >Kembali</button>                   
                      <div class="form-group">
                        <div class="modal-footer"> 
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
            </div>


    <!-- Upload Dokumen -->
       <div class="modal fade" id="modal-default5{{$kerjasamaluar->id_kerjasamaLuar}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <form method="post" action=" {{ route('dokumen.pendukungL') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hiddem="true"> &times; </span>
              </button>
              <h3 class="modal-title">Unggah Dokumen Pendukung Kerjasama Luar Negeri {{$dept[0]->nama_departemen}}</h3>
              </div>   
                <div class="modal-body">
                  <div class="box box-info">
                  {!! Form::open(array('route' => 'dokumen.pendukungL','class'=>'form-horizontal','method'=>'POST')) !!}
                      <div class="box-body">
                     {!! Form::hidden('id_kerjasamaLuar', $kerjasamaluar->id_kerjasamaLuar, array('placeholder' => 'id KerjasamaLuar','class' => 'form-control')) !!}
                     @if(Auth::user()->id_departemen==10)
                        {!! Form::hidden('id_departemen', $kerjasamaluar->id_departemen, array('placeholder' => 'id departemen','class' => 'form-control')) !!}
                     @endif
                        <label for="file" class="col-sm-5 control-label">Unggah</label>
                          <div class="col-sm-6">
                          <input type="file" id="file" name="dokumenL" class="form-control" autofocus required>
                          <span class="help-block with-errors"></span>
                          
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

        <!-- Edit -->
          <div class="modal fade" id="modal-default{{$kerjasamaluar->id_kerjasamaLuar}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ubah Kerjasama dengan Instansi Luar Negeri {{$dept[0]->nama_departemen}}</h4>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(array('route' => ['standar7kerjasamaluarnegeri.update', $kerjasamaluar->id_kerjasamaLuar],'class'=>'form-horizontal','method'=>'PUT')) !!}
                    <div class="box-body">
                        <div class="form-group">
                          <label class="col-sm-5">Nama Instansi </label>
                          <div class="col-sm-6" style="margin-left: 150px">
                          {!! Form::text('nama_instansi', $kerjasamaluar->nama_instansi, array('placeholder' => 'Nama Instansi','class' => 'form-control')) !!}
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Jenis Kegiatan</label>
                            <div class="col-sm-6" style="margin-left: 150px">
                            {!! Form::text('jenis_kegiatan', $kerjasamaluar->jenis_kegiatan, array('placeholder' => 'Jenis Kegiatan','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Tahun Mulai</label>
                          <div class="col-sm-6" style="margin-left: 150px">
                            {!! Form::selectRange('tahun_mulai','2010', '2060', $kerjasamaluar->tahun_mulai, array('placeholder' => 'Tahun','class' => 'form-control', 'min'=>2016)) !!}
                          </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Tahun Akhir</label>
                          <div class="col-sm-6" style="margin-left: 150px">
                            {!! Form::selectRange('tahun_akhir','2010', '2060', $kerjasamaluar->tahun_akhir, array('placeholder' => 'Tahun','class' => 'form-control', 'min'=>2016)) !!}
                          </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Jumlah Dana (juta Rp)</label>
                            <div class="col-sm-6" style="margin-left: 150px">
                            {!! Form::number('jumlah_dana', $kerjasamaluar->jumlah_dana, array('placeholder' => 'Jumlah Dana (juta Rp)','class' => 'form-control', 'min'=>0.00, 'step'=>'0.01')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Manfaat</label>
                            <div class="col-sm-6" style="margin-left: 150px">
                            {!! Form::text('manfaat', $kerjasamaluar->manfaat, array('placeholder' => 'Manfaat','class' => 'form-control')) !!}
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
            </div>
           @endforeach
         </tbody>
         </table>
         Catatan: (*) dokumen pendukung disediakan pada saat asesmen lapangan<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bukti disediakan saat visitasi  
      </div>
    </div>

<!-- Tambah Data -->
     <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">Tambah Kegiatan Kerjasama dengan Instansi Luar Negeri {{$dept[0]->nama_departemen}}</h3>
            </div>
            <div class="modal-body">
              <div class="box box-info">
             {!! Form::open(array('route' => 'standar7kerjasamaluarnegeri.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="modal-header">
                
              <div class="form-group">
              <label class="col-sm-5 control-label">Nama Instansi</label>
                <div class="col-sm-6">
                {!! Form::text('nama_instansi', null, array('placeholder' => 'Nama Instansi','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Jenis Kegiatan</label>
                  <div class="col-sm-6">
                  {!! Form::text('jenis_kegiatan', null, array('placeholder' => 'Jenis Kegiatan','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-5 control-label">Tahun Mulai</label>
                    <div class="col-sm-6">
                    {!! Form::selectRange('tahun_mulai','2010', '2060', array('placeholder' => 'Tahun','class' => 'form-control', 'min'=>2016)) !!}
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Tahun Akhir</label>
                    <div class="col-sm-6">
                    {!! Form::selectRange('tahun_akhir','2010', '2060', array('placeholder' => 'Tahun','class' => 'form-control', 'min'=>2016)) !!}
                    </div>
                </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Jumlah Dana (juta Rp)</label>
                  <div class="col-sm-6">
                  {!! Form::number('jumlah_dana', null, array('placeholder' => 'Jumlah Dana (juta Rp)','class' => 'form-control', 'min'=>0.00, 'step'=>'0.01')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Manfaat yang Diperoleh</label>
                  <div class="col-sm-6">
                  {!! Form::text('manfaat', null, array('placeholder' => 'Manfaat yang Diperoleh','class' => 'form-control')) !!}
                  </div>
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
        <form method="post" action=" {{ route('kerjasamaluar.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Unggah Kerjasama dengan Instansi Luar Negeri {{$dept[0]->nama_departemen}}</h3>
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
          <form method="post" action=" {{ route('kerjasamaluar.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Unduh Kegiatan Kerjasama dengan Instansi Luar Negeri {{$dept[0]->nama_departemen}}</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">              
                    <div class="col-sm-10">
                      <a href="{{ route('kerjasamaluar.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-file-excel-o"> Unduh Excel</i>
                      </a>
                      <a href="pdfuser_kerjasamaluar" class="btn btn-primary btn-md">
                      <i class="fa fa-file-pdf-o"> Unduh PDF</i>
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



        </div>
        </div>
        </section>
@endsection