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
          PENGABDIAN @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal4">
                    <i class="fa fa-file-text"></i> <span>Resume</span>
                  </button>
                  <a href="/redaksipengabdian" class="btn btn-primary pull-left" role="button">
                  <i class="fa fa-file-text"></i> Redaksi</a>
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
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal4">
                    <i class="fa fa-file-text"></i> <span>Resume</span>
                  </button>
                  <a href="/redaksipengabdian" class="btn btn-primary pull-left" role="button">
                  <i class="fa fa-file-text"></i> Redaksi</a>
                @endif
              @elseif(Auth::User()->id_departemen==10)
                @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                  <a class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                   <i class="fa fa-plus"> Tambah</i>
                  </a>
                  <a class="btn btn-primary" data-toggle="modal" data-target="#modal1">
                   <i class="fa fa-file-text"> Report</i>
                  </a>
                  <a class="btn btn-primary" href="/redaksipengabdianfmipa">
                    <i class="fa fa-file-text"> Redaksi</i>
                  </a>
                @else
                <a class="btn btn-primary" data-toggle="modal" data-target="#modal1">
                   <i class="fa fa-file-text"> Report</i>
                  </a>
                 <a class="btn btn-primary" href="/redaksipengabdianfmipa">
                    <i class="fa fa-file-text"> Redaksi</i>
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
                  <h4 style="text-align: center;"> Tabel 8.1 Data Pengabdian Kepada Masyarakat @if(Auth::User()->id_departemen==10) @elseif(Auth::User()->id_departemen!=10) Program Studi {{$dept[0]->nama_departemen}} FMIPA IPB @endif</h4>
                  <tr>
                  <th style="text-align: center">No</th>
                  <th rowspan="2" style="text-align: center">Tahun</th>
                  @if(Auth::user()->id_departemen==10)
                  <th rowspan="2" style="text-align: center">Program Studi</th>
                  @endif
                  <th rowspan="2" style="text-align: center">Judul Pengabdian kepada Masyarakat</th>
                  <th rowspan="2" style="text-align: center">Institusi</th>
                  <th rowspan="2" style="text-align: center">Sumber Dana</th>
                  <th rowspan="2" style="text-align: center">Jenis Dana</th>
                  <th rowspan="2" style="text-align: center">Jumlah Dana(Juta Rupiah)</th>
                  <th rowspan="2" style="text-align: center">Jumlah Mahasiswa Terlibat</th>
                  <th rowspan="2" style="text-align: center">Keterlibatan Mahasiswa</th>
                  @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                      <th rowspan="2" style="text-align: center">Proposal</th>
                      <th rowspan="2" style="text-align: center">Hasil Pengabdian</th>  
                    @endif
                    
                     @elseif(Auth::User()->id_departemen==10)
                     @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                     <th rowspan="2" style="text-align: center">Proposal</th>
                     <th rowspan="2" style="text-align: center">Hasil Pengabdian</th>
                    @endif
                  @endif
                  @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                    <th style="text-align: center">Aksi</th>
                    @endif
                  @elseif(Auth::User()->id_departemen==10)
                     @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                     <th style="text-align: center">Aksi</th>
                    @endif
                  @endif
                  </tr>
                  
                    <tfoot>
                    <th colspan="2">Total</th>
                    @if(Auth::user()->id_departemen!=10)
                      <th><?php echo $totaljudul ?></th>
                    @else
                        <th></th>
                        <th><?php echo $totaljudul ?></th>
                    @endif
                    <th></th>
                    <th></th>
                    @if(Auth::user()->id_departemen!=10)
                    <th></th>
                      <th style="text-align: right"><?php echo $totaldana ?></th>
                    @else
                    <th></th>
                        <th style="text-align: right"><?php echo $totaldana ?></th>
                    @endif
                  </tfoot>
                  
                  <tr>
                  <th rowspan="2" style="text-align: center">(1)</th>
                  @if(Auth::user()->id_departemen==10 and Auth::User()->role!=1 and Auth::User()->role!=14)
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  <th rowspan="2" style="text-align: center">(7)</th>
                  <th rowspan="2" style="text-align: center">(8)</th>
                  <th rowspan="2" style="text-align: center">(9)</th>
                  <th rowspan="2" style="text-align: center">(10)</th>
                  <th rowspan="2" style="text-align: center">(11)</th>
                  @elseif(Auth::user()->id_departemen==10 and Auth::User()->role==1)
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  <th rowspan="2" style="text-align: center">(7)</th>
                  @elseif(Auth::user()->id_departemen!=10 and Auth::User()->role!=2 and Auth::user()->role!=14)
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  <th rowspan="2" style="text-align: center">(7)</th>
                  <th rowspan="2" style="text-align: center">(8)</th>
                  <th rowspan="2" style="text-align: center">(9)</th>
                  <th rowspan="2" style="text-align: center">(10)</th>
                  @else
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  <th rowspan="2" style="text-align: center">(7)</th>
                  @endif
                  </tr>
                  </thead>

                  <tbody id="pengabdians" name="pengabdian">
                  <?php $nomor = 0;?>
                  @foreach ($pengabdians as $pengabdian)
                  <?php $nomor++ ;?>
                   <tr>
                  <td>{{ $nomor }}</td>
                  <td>{{$pengabdian->tahun_pengabdian}}</td>
                  @if(Auth::user()->id_departemen==10)
                  <td>{{$pengabdian->nama_departemen}}</td>
                  @endif
                  <td>{{$pengabdian->judul_pengabdian}}</td>
                  <td>{{$pengabdian->institusi}}</td>
                  <td>{{$pengabdian->sumber_danaa}}</td>
                  <td>{{$pengabdian->jenis_dana_peng}}</td>
                  <td style="text-align: right">{{$pengabdian->jumlah_dana_peng}}</td>
                  <td style="text-align: right">{{$pengabdian->jumlah_mahasiswa_peng}}</td>
                  <td>{{$pengabdian->keterlibatan_mahasiswa}}</td>
                
                <!-- UPLOAD PROPOSAL -->
                  @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                  <td>
                    <button type="button" class=" btn-sm" style="margin-bottom: 10px" data-toggle="modal" data-target="#modal-default5{{$pengabdian->id_pengabdian}}">
                       <i class="fa fa-upload"></i>
                      </button>
                  @endif
                @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    <td>
                      <button type="button" class=" btn-sm" style="margin-bottom: 10px" data-toggle="modal" data-target="#modal-default5{{$pengabdian->id_pengabdian}}">
                       <i class="fa fa-upload"></i>
                      </button>
                    @endif
                @endif
                <!-- DOWNLOAD Proposal PENGABDIAN DEPARTEMEN  -->
                @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                  @foreach ($proposal_pengabdian as $proposalPeng)
                      @if($proposalPeng->id_proposalPeng==$pengabdian->id_proposalPeng)
                      <a href="{{ route('downloadproposalPeng', $proposalPeng->id_proposalPeng) }}" >
                        <button type="button" class=" btn-sm" style="margin-bottom: 10px">
                          <i class="fa fa-download"></i>
                        </button>
                      </a>
                      @endif
                    @endforeach
                    @if(isset($pengabdian->id_proposalPeng))
                        <label class="label label-success">Proposal Ada</label>
                      @else
                        <label class="label label-warning">Proposal belum ada</label>
                      @endif
                    @endif
                    
                    <!-- DOWNLOAD PROPOSAL PENGABDIAN FMIPA  -->
                    @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    @foreach ($proposal_pengabdian as $proposalPeng)
                      @if($proposalPeng->id_proposalPeng==$pengabdian->id_proposalPeng)
                      <a href="{{ route('downloadproposalPeng', $proposalPeng->id_proposalPeng) }}" >
                        <button type="button" class=" btn-sm" style="margin-bottom: 10px">
                          <i class="fa fa-download"></i>
                        </button>
                      </a>
                      @endif
                    @endforeach
                    @if(isset($pengabdian->id_proposalPeng))
                        <label class="label label-success">Proposal Ada</label>
                      @else
                        <label class="label label-warning">Proposal belum ada</label>
                      @endif
                    @endif
                    @endif
                </td>
                 
                 <!-- UPLOAD BUKTI PENGABDIAN -->
              @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                  
                  <td>
                    <button type="button" class=" btn-sm" style="margin-bottom: 10px" data-toggle="modal" data-target="#modal-default2{{$pengabdian->id_pengabdian}}">
                       <i class="fa fa-upload"></i>
                      </button>
                  @endif
                  
                @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    <td>
                      <button type="button" class=" btn-sm" data-toggle="modal" data-target="#modal-default2{{$pengabdian->id_pengabdian}}">
                       <i class="fa fa-upload"></i>
                      </button>
                    @endif
                @endif

                  <!-- DOWNLOAD BUKTI PENGABDIAN DEPARTEMEN  -->
                @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                  @foreach ($bukti_pengabdian as $buktiPeng)
                      @if($buktiPeng->id_buktiPeng==$pengabdian->id_buktiPeng)
                      <a href="{{ route('downloadbuktiPeng', $buktiPeng->id_buktiPeng) }}" >
                        <button type="button" class=" btn-sm" style="margin-bottom: 10px">
                          <i class="fa fa-download"></i>
                        </button>
                      </a>
                      @endif
                    @endforeach
                    @if(isset($pengabdian->id_buktiPeng))

                        <label class="label label-success">Bukti Ada</label>
                      @else
                        <label class="label label-warning">Bukti belum ada</label>
                      @endif
                    @endif
                    
                    <!-- DOWNLOAD BUKTI PENGABDIAN FMIPA  -->
                    @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    @foreach ($bukti_pengabdian as $buktiPeng)
                      @if($buktiPeng->id_buktiPeng==$pengabdian->id_buktiPeng)
                      <a href="{{ route('downloadbuktiPeng', $buktiPeng->id_buktiPeng) }}" >
                        <button type="button" class=" btn-sm" style="margin-bottom: 10px">
                          <i class="fa fa-download"></i>
                        </button>
                      </a>
                      @endif
                    @endforeach
                    @if(isset($pengabdian->id_buktiPeng))
                        <label class="label label-success">Bukti Ada</label>
                      @else
                        <label class="label label-warning">Bukti belum ada</label>
                      @endif
                    @endif
                    @endif
                    </td>     

                @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                      <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$pengabdian->id_pengabdian}}">
                        <span>Ubah</span>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default6{{$pengabdian->id_pengabdian}}">
                        <span>Hapus</span>
                        </button>
                  </td>
                  </tr>
                    @endif
                  
                  @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$pengabdian->id_pengabdian}}">
                        <span>Ubah</span>
                        </button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default6{{$pengabdian->id_pengabdian}}">
                        <span>Hapus</span>
                        </button>
                       
                        </td>
                        </tr>
                    @endif
                  @endif

        <!-- Hapus -->
          <div class="modal fade" id="modal-default6{{$pengabdian->id_pengabdian}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(['method' => 'DELETE','route' => ['standar8pengabdian.destroy', $pengabdian->id_pengabdian],'style'=>'display:inline']) !!}
                    <div class="box-body">
                      <div class="form-group">
                      <h3>Anda Yakin untuk hapus data?</h3>
                       <button type="submit" class="col-md-4 btn btn-danger" style="margin-left:10px">Yakin</button>
                       <button type="button" class="col-sm-4 col-md-offset-5 btn btn-primary" style="margin-left:10px" onclick="window.location='{{ url('/standar8pengabdian') }}'" >Kembali</button>                   
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


      <!-- Upload Bukti -->
       <div class="modal fade" id="modal-default2{{$pengabdian->id_pengabdian}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <form method="post" action=" {{ route('buktiPengabdian.upload') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hiddem="true"> &times; </span>
              </button>
              <h3 class="modal-title">Unggah Bukti Pengabdian {{$dept[0]->nama_departemen}}</h3>
              </div>   
                <div class="modal-body">
                  <div class="box box-info">
                  {!! Form::open(array('route' => 'buktiPengabdian.upload','class'=>'form-horizontal','method'=>'POST')) !!}
                      <div class="box-body">
                     {!! Form::hidden('id_pengabdian', $pengabdian->id_pengabdian, array('placeholder' => 'id Pengabdian','class' => 'form-control')) !!}
                     @if(Auth::user()->id_departemen==10)
                        {!! Form::hidden('id_departemen', $pengabdian->id_departemen, array('placeholder' => 'id departemen','class' => 'form-control')) !!}
                     @endif
                        <label for="file" class="col-sm-5 control-label">Upload</label>
                          <div class="col-sm-6">
                          <input type="file" id="file" name="bukti_file" class="form-control" autofocus required>
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

<!-- Upload Proposal -->
       <div class="modal fade" id="modal-default5{{$pengabdian->id_pengabdian}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <form method="post" action=" {{ route('proposalPengabdian.upload') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hiddem="true"> &times; </span>
              </button>
              <h3 class="modal-title">Unggah Proposal Pengabdian {{$dept[0]->nama_departemen}}</h3>
              </div>   
                <div class="modal-body">
                  <div class="box box-info">
                  {!! Form::open(array('route' => 'proposalPengabdian.upload','class'=>'form-horizontal','method'=>'POST')) !!}
                      <div class="box-body">
                     {!! Form::hidden('id_pengabdian', $pengabdian->id_pengabdian, array('placeholder' => 'id Pengabdian','class' => 'form-control')) !!}
                     @if(Auth::user()->id_departemen==10)
                        {!! Form::hidden('id_departemen', $pengabdian->id_departemen, array('placeholder' => 'id departemen','class' => 'form-control')) !!}
                     @endif
                        <label for="file" class="col-sm-5 control-label">Upload</label>
                          <div class="col-sm-6">
                          <input type="file" id="file" name="proposal_pengabdian" class="form-control" autofocus required>
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
          <div class="modal fade" id="modal-default{{$pengabdian->id_pengabdian}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ubah pengabdian {{$dept[0]->nama_departemen}}</h4>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(array('route' => ['standar8pengabdian.update', $pengabdian->id_pengabdian],'class'=>'form-horizontal','method'=>'PUT')) !!}
                    <div class="box-body">
                      <div class="form-group">
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Tahun Publikasi</label>
                          <div class="col-sm-6">
                            {!! Form::date('tahun_pengabdian', $pengabdian->tahun_pengabdian, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Judul Pengabdian</label>
                          <div class="col-sm-6">
                          {!! Form::text('judul_pengabdian', $pengabdian->judul_pengabdian, array('placeholder' => 'Judul Pengabdian','class' => 'form-control')) !!}
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Institusi</label>
                            <div class="col-sm-6">
                            {!! Form::text('institusi', $pengabdian->institusi, array('placeholder' => 'Institudi','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Sumber Dana</label>
                            <div class="col-sm-6">
                             <select name="id_sumberr" class="form-control">
                                <option selected>Sumber Dana</option>
                                <option value="1" {{$pengabdian->id_sumberr==1 ? 'selected' : ''}}>Pembiayaan sendiri oleh dosen</option>
                                <option value="2" {{$pengabdian->id_sumberr==2 ? 'selected' : ''}}>PT yang bersangkutan</option>
                                <option value="3" {{$pengabdian->id_sumberr==3 ? 'selected' : ''}}>Depdiknas</option>
                                <option value="4" {{$pengabdian->id_sumberr==4 ? 'selected' : ''}}>Institusi dalam negeri di luar Depdiknas</option>
                                <option value="5" {{$pengabdian->id_sumberr==5 ? 'selected' : ''}}>Institusi luar negeri</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Jenis Dana</label>
                            <div class="col-sm-6">
                            {!! Form::text('jenis_dana_peng', $pengabdian->jenis_dana_peng, array('placeholder' => 'Jenis Dana','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Jumlah Dana (Juta Rp)</label>
                            <div class="col-sm-6">
                            {!! Form::number('jumlah_dana_peng', $pengabdian->jumlah_dana_peng, array('placeholder' => 'Jumlah Dana','class' => 'form-control', 'min'=>0.00, 'step'=>0.01)) !!}
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Jumlah Mahasiswa</label>
                            <div class="col-sm-6">
                            {!! Form::number('jumlah_mahasiswa_peng', $pengabdian->jumlah_mahasiswa_peng, array('placeholder' => 'Jumlah Mahasisw Terlibat','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Keterlibatan Mahasiswa</label>
                            <div class="col-sm-6">
                            {!! Form::text('keterlibatan_mahasiswa', $pengabdian->keterlibatan_mahasiswa, array('placeholder' => 'Keterlibatan Mahasiswa','class' => 'form-control')) !!}
                            </div>
                        </div>                                           
                       @if(Auth::user()->id_departemen==10)
                          <div class="form-group">
                            <label class="col-md-5 control-label">Program Studi</label>
                              <div class="col-md-5 ">
                                <select class="form-control" name="id_departemen" style="margin-left: 20px">
                                <option value="0">--Program Studi--</option>
                                  @foreach ($listdept as $listdepts)
                                  <option value="{{$listdepts->id_dept}}"> {{$listdepts->nama_departemen}}</option>
                                  @endforeach
                                </select> 
                                  <small class="help-block"></small>
                              </div>  
                          </div>
                      @endif                                   
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
           Catatan: (*) Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu<br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)<br>
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
              <h3 class="modal-title">Tambah Pengabdian {{$dept[0]->nama_departemen}}</h3>
            </div>
            <div class="modal-body">
              <div class="box box-info">
             {!! Form::open(array('route' => 'standar8pengabdian.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="modal-header">
                <div class="form-group">
                  <label class="col-sm-5 control-label">Tahun Publikasi</label>
                    <div class="col-sm-6">
                    {!! Form::date('tahun_pengabdian', null, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                    </div>
                </div>
              <div class="form-group">
              <label class="col-sm-5 control-label">Judul Pengabdian</label>
                <div class="col-sm-6">
                {!! Form::text('judul_pengabdian', null, array('placeholder' => 'Judul Pengabdian','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Institusi</label>
                  <div class="col-sm-6">
                  {!! Form::text('institusi', null, array('placeholder' => 'Institusi','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Sumber Dana</label>
                  <div class="col-sm-6">
                   <select name="id_sumberr" class="form-control">
                                <option selected>Sumber Dana</option>
                                <option value="1">Pembiayaan sendiri oleh dosen</option>
                                <option value="2">PT yang bersangkutan</option>
                                <option value="3">Depdiknas</option>
                                <option value="4">Institusi dalam negeri di luar Depdiknas</option>
                                <option value="5">Institusi luar negeri</option>
                              </select>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Jenis Dana</label>
                  <div class="col-sm-6">
                  {!! Form::text('jenis_dana_peng', null, array('placeholder' => 'Jenis Dana','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Jumlah Dana (Juta Rp)</label>
                  <div class="col-sm-6">
                  {!! Form::number('jumlah_dana_peng', null, array('placeholder' => 'Jumlah Dana','class' => 'form-control', 'min'=>0.00, 'step'=>0.01)) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Jumlah Mahasiswa</label>
                  <div class="col-sm-6">
                  {!! Form::number('jumlah_mahasiswa_peng', null, array('placeholder' => 'Jumlah Mahasiswa','class' => 'form-control')) !!}
                  </div>
              </div> 
              <div class="form-group">
                <label class="col-sm-5 control-label">Keterlibatan Mahasiswa</label>
                  <div class="col-sm-6">
                  {!! Form::text('keterlibatan_mahasiswa', null, array('placeholder' => 'Keterlibatan Mahasiswa','class' => 'form-control')) !!}
                  </div>
              </div>
               @if(Auth::user()->id_departemen==10)
                          <div class="form-group">
                            <label class="col-md-5 control-label">Program Studi</label>
                              <div class="col-md-5 ">
                                <select class="form-control" name="id_departemen" style="margin-left: 20px">
                                <option value="0">--Program Studi--</option>
                                  @foreach ($listdept as $listdepts)
                                  <option value="{{$listdepts->id_dept}}"> {{$listdepts->nama_departemen}}</option>
                                  @endforeach
                                </select> 
                                  <small class="help-block"></small>
                              </div>  
                          </div>
                @endif                
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
        <form method="post" action=" {{ route('pengabdian.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Unggah Data Pengabdian Kepada Masyarakat {{$dept[0]->nama_departemen}}</h3>
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
          <form method="post" action=" {{ route('pengabdian.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Unduh Pengabdian {{$dept[0]->nama_departemen}}</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">              
                    <div class="col-sm-10">
                      <a href="{{ route('pengabdian.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-file-excel-o"> Unduh Excel</i>
                      </a>
                      <a href="pdfuserpengabdian" class="btn btn-primary btn-md">
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

  <!-- Report -->
    <div class="modal fade" id="modal1" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('pengabdian.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Pengabdian Kepada Masyarakat {{$dept[0]->nama_departemen}}</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                  <table cellspacing="0" >

                     <tr>
                      <th></th>
                      <th rowspan="6" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Arial" >No.</font></th>
                      <th rowspan="6" colspan="6" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Arial" >Nama Program Studi</font></th>
                      <th rowspan="4" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Arial" >Jumlah Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</font></th>
                      <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Arial" >Total Dana </font></th>
                    </tr>
                    <tr>
                        <tr>
                      <th></th>
                      <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">Kegiatan Pelayanan/ Pengabdian kepada Masyarakat (juta Rp)</font></th>
                      </tr></tr>

                      <tr>
                        <tr>
                      <th></th>
                      <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-2<br> <?php echo ($ts2) ?></font></th>
                      <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-1<br> <?php echo ($ts1) ?></font></th>
                      <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS<br> <?php echo ($ts) ?></font></th>
                      <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-2<br> <?php echo ($ts2) ?></font></th>
                      <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-1<br> <?php echo ($ts1) ?></font></th>
                      <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS<br> <?php echo ($ts) ?></font></th>
                      </tr></tr>

                   <tr>
                  <th></th>
                  <tr>
                  <th></th>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">1.</td></font></p></td>
                  <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS STK</font></p></td>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- Total Dana -->
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana_peng')) ?></font></p></td>
                   <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana_peng')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana_peng')) ?></font></p></td>
                  </tr>

                  <tr>
                  <th></th>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">2.</td></font></p></td>
                  <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS GFM</font></p></td>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- Total Dana -->
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana_peng')) ?></font></p></td>
                   <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana_peng')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana_peng')) ?></font></p></td>
                  </tr>

                  <tr>
                  <th></th>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">3.</td></font></p></td>
                  <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS BIO</font></p></td>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- Total Dana -->
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana_peng')) ?></font></p></td>
                   <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana_peng')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana_peng')) ?></font></p></td>
                  </tr>
                  
                  <tr>
                  <th></th>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">4.</td></font></p></td>
                  <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS KIM</font></p></td>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- Total Dana -->
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana_peng')) ?></font></p></td>
                   <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana_peng')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana_peng')) ?></font></p></td>
                  </tr>

                  <tr>
                  <th></th>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">5.</td></font></p></td>
                  <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS MAT</font></p></td>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- Total Dana -->
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana_peng')) ?></font></p></td>
                   <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana_peng')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana_peng')) ?></font></p></td>
                  </tr>

                  <tr>
                  <th></th>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">6.</td></font></p></td>
                  <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS KOM</font></p></td>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- Total Dana -->
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana_peng')) ?></font></p></td>
                   <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana_peng')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana_peng')) ?></font></p></td>
                  </tr>

                  <tr>
                  <th></th>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">7.</td></font></p></td>
                  <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS<br> FIS</font></p></td>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- Total Dana -->
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana_peng')) ?></font></p></td>
                   <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana_peng')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana_peng')) ?></font></p></td>
                  </tr>

                  <tr>
                  <th></th>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">8.</td></font></p></td>
                  <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS BIOKIM</font></p></td>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- Total Dana -->
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana_peng')) ?></font></p></td>
                   <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana_peng')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana_peng')) ?></font></p></td>
                  </tr>

                  <tr>
                  <th></th>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">9.</td></font></p></td>
                  <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS AUK</font></p></td>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_pengabdian')) ?></font></p></td>
                  <!-- Total Dana -->
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana_peng')) ?></font></p></td>
                   <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana_peng')) ?></font></p></td>
                  <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana_peng')) ?></font></p></td>
                  </tr>
                  </tr></tr>

                   <tr>
                  <th></th>
                  <tr>
                  <th></th>
                  <td colspan="7" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">Total</font></p></td>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_pengabdian')) ?></font></p></td>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_pengabdian')) ?></font></p></td>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_pengabdian')) ?></font></p></td>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->sum('jumlah_dana_peng')) ?></font></p></td>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->sum('jumlah_dana_peng')) ?></font></p></td>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->sum('jumlah_dana_peng')) ?></font></p></td>
                  </tr></tr> 
                  </table>             
                    <div class="modal-footer">
                      <a href="{{ route('pengabdian.pengabdianexcel') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="{{ route('pengabdian.download')}}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh PDF</i>
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

  <!-- Resume -->
    <div class="modal fade" id="modal4" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('penelitian.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Resume Jumlah Judul Pengabdian, Jumlah Proposal, dan Jumlah Hasil Pengabdian Dosen Program Studi{{$dept[0]->nama_departemen}}</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                  <table>
                  <tr>
                    <th></th>
                    <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Arial" >Jumlah Judul Pengabdian</font></th>
                    <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Arial" >Jumlah Hasil Pengabdian</font></th>
                    <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Arial" >Jumlah Proposal Pengabdian</font></th>
                  </tr>
                  <tr>
                  <tr>
                  <th></th>
                  <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-2<br> <?php echo ($ts2) ?></font></th>
                  <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-1<br> <?php echo ($ts1) ?></font></th>
                  <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS<br> <?php echo ($ts) ?></font></th>
                  <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-2<br> <?php echo ($ts2) ?></font></th>
                  <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-1<br> <?php echo ($ts1) ?></font></th>
                  <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS<br> <?php echo ($ts) ?></font></th>
                  <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-2<br> <?php echo ($ts2) ?></font></th>
                  <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-1<br> <?php echo ($ts1) ?></font></th>
                  <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS<br> <?php echo ($ts) ?></font></th>
                  </tr></tr> 
                  <tr>
                  <tr>
                  <th></th>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo $totjudul1 ?></font></p></td>
                    <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo $totjudul2 ?></font></p></td>
                    <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo $totjudul3 ?></font></p></td>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo $totbukti1 ?></font></p></td>
                  <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo $totbukti2 ?></font></p></td>
                    <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo $totbukti3 ?></font></p></td>
                  <!-- TS-2 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo $totproposal1 ?></font></p></td>
                  <!-- TS-1 -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo $totproposal2 ?></font></p></td>
                    <!-- TS -->
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo $totproposal3 ?></font></p></td>
                  </tr></tr>             
                    </table>
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