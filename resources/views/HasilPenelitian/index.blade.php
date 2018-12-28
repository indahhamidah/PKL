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
          HASIL PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
                <a class="btn btn-primary" data-toggle="modal" data-target="#modal1">
                   <i class="fa fa-file-text"> Report</i>
                  </a>
               
              @else
              <a class="btn btn-primary" data-toggle="modal" data-target="#modal1">
                   <i class="fa fa-file-text"> Report</i>
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
                  <h4 style="text-align: center;"> Tabel 9.2 Data Hasil Penelitian dan Hasil Pengabdian @if(Auth::User()->id_departemen==10) @elseif(Auth::User()->id_departemen!=10) Program Studi {{$dept[0]->nama_departemen}} FMIPA IPB @endif</h4>
                  <tr>
                  <th rowspan="2" style="text-align: center">No</th>
                  @if(Auth::user()->id_departemen==10)
                  <th rowspan="2" style="text-align: center">Program Studi</th>
                  @endif
                  <th rowspan="2" style="text-align: center">Judul Hasil Penelitian dan Hasil Pengabdian</th>
                  <th rowspan="2" style="text-align: center">Nama Dosen</th>
                  <th rowspan="2" style="text-align: center">Dipublikasi Pada</th>
                  <th rowspan="2" style="text-align: center">Tahun Publikasi</th>
                  <th colspan="3" style="text-align: center">Tingkat</th>
                  @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                      <th rowspan="2" style="text-align: center">Bukti Hasil</th>
                      <th rowspan="2" style="text-align: center">Status Bukti</th>
                      <th rowspan="2" style="text-align: center">Aksi</th>
                    @endif
                     @elseif(Auth::User()->id_departemen==10)
                     @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                     <th rowspan="2" style="text-align: center">Bukti Hasil</th>
                     <th rowspan="2" style="text-align: center">Status Bukti</th>
                     <th rowspan="2" style="text-align: center">Aksi</th>
                    @endif
                  @endif
                  </tr>

                  <tr>
                    <th style="text-align: center;"> Lokal</th>
                    <th style="text-align: center;"> Nasional </th>
                    <th style="text-align: center;"> Internasional</th>
                  </tr>

                  <tfoot>
                    <th rowspan="2">Total</th>
                     @if(Auth::user()->id_departemen!=10)
                      <th style="text-align: right;"><?php echo $totaljudul ?></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th style="text-align: right;"><?php echo $na ?></th>
                      <th style="text-align: right;"><?php echo $nb ?></th>
                      <th style="text-align: right;"><?php echo $nc ?></th>
                       <th></th>

                    @else
                      <th></th>
                      <th style="text-align: right;"><?php echo $totaljudul ?></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th style="text-align: right;"><?php echo $na ?></th>
                      <th style="text-align: right;"><?php echo $nb ?></th>
                      <th style="text-align: right;"><?php echo $nc ?></th>
                      <th></th>

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
                  @elseif(Auth::user()->id_departemen==10 and Auth::User()->role==1)
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  <th rowspan="2" style="text-align: center">(7)</th>
                  <th rowspan="2" style="text-align: center">(8)</th>
                  @elseif(Auth::user()->id_departemen!=10 and Auth::User()->role!=2 and Auth::user()->role!=14)
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  <th rowspan="2" style="text-align: center">(7)</th>
                  <th rowspan="2" style="text-align: center">(8)</th>
                  <th rowspan="2" style="text-align: center">(9)</th>
                  @else
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  <th rowspan="2" style="text-align: center">(7)</th>
                  <th rowspan="2" style="text-align: center">(8)</th>
                  @endif
                  </tr>
                  </thead>

                  <tbody id="hasil_penelitian" name="hasil_penelitian">
                  <?php $nomor = 0;?>
                  @foreach ($hasil_penelitian as $hasilPenelitian)
                  <?php $nomor++ ;?>
                   <tr>
                  <td>{{ $nomor }}</td>
                  @if(Auth::user()->id_departemen==10)
                  <td>{{$hasilPenelitian->nama_departemen}}</td>
                  @endif
                  <td>{{$hasilPenelitian->judul_hasilPenelitian}}</td>
                  <td>{{$hasilPenelitian->nama_dosenPenelitian}}</td>
                  <td>{{$hasilPenelitian->dipublikasi_pada}}</td>
                  <td>{{$hasilPenelitian->tahun_publikasi}}</td>
                  @foreach($tingkat as $tingkatt)
                    @if($hasilPenelitian->id_tingkat == $tingkatt->id_tingkatt)
                      <td style="text-align: center">&#x2714</td>
                      @else
                        <td></td>
                    @endif
                  @endforeach

                  <!-- UPLOAD BUKTI Hasil Penelitian dan Pengabdian -->
                @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                  <td>
                    <button type="button" class=" btn-sm" data-toggle="modal" data-target="#modal-default2{{$hasilPenelitian->id_hasilPenelitian}}">
                     <i class="fa fa-upload"></i>
                      </button>
                  @endif
                 
                @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    <td>
                       <button type="button" class=" btn-sm" data-toggle="modal" data-target="#modal-default2{{$hasilPenelitian->id_hasilPenelitian}}">
                       <i class="fa fa-upload"></i>
                      </button>
                    @endif
                @endif

                @if(Auth::user()->id_departemen!=10)
                      @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                    @foreach ($lampiran_hasilPen as $lampiranP)
                      @if($lampiranP->id_lampiranPen==$hasilPenelitian->id_lampiranPen1)
                      <a href="{{ route('downloadlampiranPen', $lampiranP->id_lampiranPen) }}" >
                        <button type="button" class=" btn-sm">
                          <i class="fa fa-download"></i>
                        </button>
                      </a>
                      @endif
                    @endforeach
                    @endif
                    @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                   @foreach ($lampiran_hasilPen as $lampiranP)
                      @if($lampiranP->id_lampiranPen==$hasilPenelitian->id_lampiranPen1)
                      <a href="{{ route('downloadlampiranPen', $lampiranP->id_lampiranPen) }}" >
                        <button type="button" class=" btn-sm">
                          <i class="fa fa-download"></i>
                        </button>
                      </a>
                      @endif
                    @endforeach
                    @endif
                    @endif
                    </td>

                    @if(Auth::user()->id_departemen!=10)
                      @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                    <td>
                      @if(isset($hasilPenelitian->id_lampiranPen1))
                        <label class="label label-success">Bukti Ada</label>
                      @else
                        <label class="label label-warning">Bukti belum ada</label>
                      @endif
                    </td>
                    @endif
                      @elseif(Auth::User()->id_departemen==10)
                        @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                        <td>
                        @if(isset($hasilPenelitian->id_lampiranPen1))
                          <label class="label label-success">Bukti Ada</label>
                        @else
                          <label class="label label-warning">Bukti belum ada</label>
                        @endif
                    </td>
                        @endif
                      @endif
               
                  @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                      <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$hasilPenelitian->id_hasilPenelitian}}">
                        <span>Ubah</span>
                        </button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default6{{$hasilPenelitian->id_hasilPenelitian}}">
                        <span>Hapus</span>
                        </button>
                      </td>
                      </tr>
                    @endif
                  @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                      <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$hasilPenelitian->id_hasilPenelitian}}">
                        <span>Ubah</span>
                        </button>
                       <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default6{{$hasilPenelitian->id_hasilPenelitian}}">
                        <span>Hapus</span>
                        </button>
                      </td>
                      </tr>
                    @endif
                  @endif

                  <!-- Hapus -->
          <div class="modal fade" id="modal-default6{{$hasilPenelitian->id_hasilPenelitian}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(['method' => 'DELETE','route' => ['standar9hasilpenelitian.destroy', $hasilPenelitian->id_hasilPenelitian],'style'=>'display:inline']) !!}
                    <div class="box-body">
                      <div class="form-group">
                      <h3>Anda Yakin untuk hapus data?</h3>
                       <button type="submit" class="col-md-4 btn btn-danger" style="margin-left:10px">Yakin</button>
                       <button type="button" class="col-sm-4 col-md-offset-5 btn btn-primary" style="margin-left:10px" onclick="window.location='{{ url('/standar9hasilpenelitian') }}'" >Kembali</button>                   
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
       <div class="modal fade" id="modal-default2{{$hasilPenelitian->id_hasilPenelitian}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <form method="post" action=" {{ route('lampiranPen.upload') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hiddem="true"> &times; </span>
              </button>
              <h3 class="modal-title">Unggah Bukti Hasil Penelitian dan Hasil Pengabdian {{$dept[0]->nama_departemen}}</h3>
              </div>   
                <div class="modal-body">
                  <div class="box box-info">
                  {!! Form::open(array('route' => 'lampiranPen.upload','class'=>'form-horizontal','method'=>'POST')) !!}
                      <div class="box-body">
                     {!! Form::hidden('id_hasilPenelitian', $hasilPenelitian->id_hasilPenelitian, array('placeholder' => 'id Penelitian','class' => 'form-control')) !!}
                     @if(Auth::user()->id_departemen==10)
                        {!! Form::hidden('id_departemen', $hasilPenelitian->id_departemen, array('placeholder' => 'id departemen','class' => 'form-control')) !!}
                     @endif
                        <label for="file" class="col-sm-5 control-label">Upload</label>
                          <div class="col-sm-6">
                          <input type="file" id="file" name="lampiranPen" class="form-control" autofocus required>
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
          <div class="modal fade" id="modal-default{{$hasilPenelitian->id_hasilPenelitian}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ubah Hasil Penelitian dan Hasil Pengabdian {{$dept[0]->nama_departemen}}</h4>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(array('route' => ['standar9hasilpenelitian.update', $hasilPenelitian->id_hasilPenelitian],'class'=>'form-horizontal','method'=>'PUT')) !!}
                    <div class="box-body">
                      <div class="form-group">
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Judul Hasil Penelitian</label>
                          <div class="col-sm-6">
                          {!! Form::text('judul_hasilPenelitian', $hasilPenelitian->judul_hasilPenelitian, array('placeholder' => 'Judul Hasil Penelitian','class' => 'form-control')) !!}
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Nama Dosen</label>
                            <div class="col-sm-6">
                            {!! Form::text('nama_dosenPenelitian', $hasilPenelitian->nama_dosenPenelitian, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Dipublikasi Pada</label>
                            <div class="col-sm-6">
                            {!! Form::text('dipublikasi_pada', $hasilPenelitian->dipublikasi_pada, array('placeholder' => 'Dipublikasi pada','class' => 'form-control')) !!}
                            </div>
                        </div>
                       <div class="form-group">
                          <label class="col-sm-5 control-label">Tahun Publikasi</label>
                            <div class="col-sm-6">
                            {!! Form::selectRange('tahun_publikasi','2014', '2060', $hasilPenelitian->tahun_publikasi, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                            </div>
                        </div>  
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Tingkat</label>
                            <div class="col-sm-6">
                            <select name="id_tingkat" class="form-control">
                                <option value="0">Tingkat</option>
                                <option value="1" {{$hasilPenelitian->id_tingkat==1 ? 'selected' : ''}}>Lokal</option>
                                <option value="2" {{$hasilPenelitian->id_tingkat==2 ? 'selected' : ''}}>Nasional</option>
                                <option value="3" {{$hasilPenelitian->id_tingkat==3 ? 'selected' : ''}}>Internasional</option>
                              </select>
                            </div>
                        </div>                                        
                      @if(Auth::user()->id_departemen==10)
                          <div class="form-group">
                            <label class="col-sm-5 control-label">Program Studi</label>
                              <div class="col-xs-2 col-md-6 ">
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
         Catatan: * = Tuliskan banyaknya dosen pada sel yang sesuai<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bukti disediakan saat visitasi

         <!-- Tambah Data -->
     <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">Tambah Hasil Penelitian dan Hasil Pengabdian {{$dept[0]->nama_departemen}}</h3>
            </div>
            <div class="modal-body">
              <div class="box box-info">
             {!! Form::open(array('route' => 'standar9hasilpenelitian.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="modal-header">
              <div class="form-group">
              <label class="col-sm-5 control-label">Judul Hasil Penelitian</label>
                <div class="col-sm-6">
                {!! Form::text('judul_hasilPenelitian', null, array('placeholder' => 'Judul Hasil Penelitian','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Nama Dosen</label>
                  <div class="col-sm-6">
                  {!! Form::text('nama_dosenPenelitian', null, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Dipublikasi pada</label>
                  <div class="col-sm-6">
                  {!! Form::text('dipublikasi_pada', null, array('placeholder' => 'Dipublikasi pada','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Tahun Publikasi</label>
                    <div class="col-sm-6">
                            {!! Form::selectRange('tahun_publikasi','2014', '2060', array('placeholder' => 'Tahun','class' => 'form-control', 'min'=>2016)) !!}
                          </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Tingkat</label>
                  <div class="col-sm-6">
                  <select name="id_tingkat" class="form-control">
                                <option value="0">Tingkat</option>
                                <option value="1">Lokal</option>
                                <option value="2">Nasional</option>
                                <option value="3">Internasional</option>
                              </select>
                  </div>
              </div>
              @if(Auth::user()->id_departemen==10)
                          <div class="form-group">
                            <label class="col-sm-5 control-label">Program Studi</label>
                              <div class="col-xs-2 col-md-6 ">
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
        <form method="post" action=" {{ route('hasilPenelitian.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Unggah Hasil Penelitian dan Hasil Pengabdian {{$dept[0]->nama_departemen}}</h3>
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
          <form method="post" action=" {{ route('hasilPenelitian.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Unduh Hasil Penelitian dan Hasil Pengabdian {{$dept[0]->nama_departemen}}</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">              
                    <div class="col-sm-10">
                      <a href="{{ route('hasilPenelitian.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-file-excel-o"> Unduh Excel</i>
                      </a>
                      <a href="pdfuserhasilpenelitian" class="btn btn-primary btn-md">
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
          <form method="post" action=" {{ route('hasilPenelitian.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Hasil Penelitian dan Hasil Pengabdian Fakultas Matematika dan Ilmu Pengetahuan Alam</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                   <p><strong>Tabel 9.2</strong> Jumlah hasil penelitian dan hasil pengabdian FMIPA IPB selama tiga tahun terakhir </p>
              <table cellspacing="0" >

               <tr>
                <th></th>
                <th rowspan="4" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center">No.</font></th>
                <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3;text-align: center">Nama Program Studi</font></th>
                <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center">Jumlah Hasil penelitian dan Hasil Pengabdian</font></th>
              </tr>
              <tr>
                  <tr>
                <th></th>
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">TS-2<br> <?php echo ($ts2) ?></font></th>
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">TS-1<br> <?php echo ($ts1) ?></font></th>
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">TS<br> <?php echo ($ts) ?></font></th>
                </tr></tr>
                <tr>
                <th></th>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>1.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Dep/PS STK</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>2.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Dep/PS GFM</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>3.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Dep/PS BIO</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>4.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Dep/PS KIM</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>5.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Dep/PS MAT</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>6.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Dep/PS KOM</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>7.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Dep/PS FIS</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>8.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Dep/PS BIOKIM</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>9.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Dep/PS AUK</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <tr>
                <th></th>
                <th colspan="7" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>Total</font></p></th>
                <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_hasilPenelitian')) ?></font></p></th>
                <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_hasilPenelitian')) ?></font></p></th>
                <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_hasilPenelitian')) ?></font></p></th>
                </tr></tr>
                </table>              
                    <div class="modal-footer">
                      <a href="{{ route('hasil.penelitianexcel') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                        </a>
                        <a href="{{ route('hasil.penelitiandownload')}}" class="btn btn-primary btn-md">
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




</div>
</div>
</div>
</section>

@endsection