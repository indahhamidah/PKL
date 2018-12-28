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
          Redaksi Pengabdian @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>    
    </section>
          
          <!-- tutup -->
      <div class="box-body"> 
              <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
            <div>
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
            </div>
            @foreach ($redaksipengabdian as $redaksiPeng)
              <li class="active"><a href="#tab_1" data-toggle="tab">Redaksi Pengabdian</a></li>
              @if($redaksiPeng->redaksi_pengabdian == 1)
              <li><a href="#tab_2" data-toggle="tab">Mahasiswa yang Terlibat</a></li>
              @endif
            </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box-header">
              <div> 
              @if(Auth::User()->id_departemen!=10)
                @if(Auth::User()->role==2 or Auth::user()->role==14)
                  <a class="btn btn-primary" href="pdfuserpengabdian">
                  <i class="fa fa-download"></i>Unduh</a>
                  @else
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default{{$redaksiPeng->id_redaksiPeng}}">
                        <span>Ubah</span>
                        </button>
                  <a class="btn btn-primary" href="pdfuserpengabdian">
                  <i class="fa fa-download"></i>Unduh</a>
                  
                @endif

              @elseif(Auth::User()->id_departemen==10)
                @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                  <a class="btn btn-primary" href="{{ route('penelitian.download')}}">
                  <i class="fa fa-download"></i>Unduh</a>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default{{$redaksiPeng->id_redaksiPeng}}">
                        <span>Ubah</span>
                        </button>
                  <a class="btn btn-primary" href="{{ route('penelitian.download')}}">
                  <i class="fa fa-download"></i>Unduh</a>
                @else
                 <a class="btn btn-primary" href="{{ route('penelitian.download')}}">
                  <i class="fa fa-download"></i>Unduh</a>
              @endif
              @endif
              </div>
              
              <div class="panel panel-default">
                <div class="panel-heading">
               
                </div>
                    <div class="panel-body">
                    
                      8.1.2 Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?<br>
                     
                    @if($redaksiPeng->redaksi_pengabdian == 1)
                      &#x2714 Ya<br>
                      Tidak<br>
                      Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat.<br>
                      <br>
                      Berikut adalah contoh keterlibatan mahasiswa dan bagaimana tingkat partisipasi dan manfaatnya pada kegiatan pelayanan/pengabdian kepada masyarakat:<br>
                      {!!$redaksiPeng->partisipasi!!}
                      @else
                      Ya<br>
                        &#x2714 Tidak 
                    @endif
              </div>
              </div>
              </div>

          <!-- Ubah -->
          <div class="modal fade" id="modal-default{{$redaksiPeng->id_redaksiPeng}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ubah Redaksi Pengabdian {{$dept[0]->nama_departemen}}</h4>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(array('route' => ['redaksipengabdian.update', $redaksiPeng->id_redaksiPeng],'class'=>'form-horizontal','method'=>'PUT')) !!}
                    <div class="box-body">
                      <div class="form-group">
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Ada Mahasiswa Terlibat?</label>
                          <div class="col-sm-3">
                            <select name="redaksi_pengabdian" class="form-control">
                                <option value="0">Pilih</option>
                                <option value="1" {{$redaksiPeng->redaksi_pengabdian==1 ? 'selected' : ''}}>Ya</option>
                                <option value="2" {{$redaksiPeng->redaksi_pengabdian==2 ? 'selected' : ''}}>Tidak</option>
                              </select>
                          </div>
                        </div>

                        Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat.
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Partisipasi</label>
                          <div class="col-sm-9">
                            {!! Form::textarea('partisipasi', $redaksiPeng->partisipasi, array('placeholder' => 'Tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat','class' => 'form-control')) !!}
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
            </div>

            <div class="tab-pane" id="tab_2">
              @if(Auth::User()->id_departemen!=10)
                @if(Auth::User()->role==2 or Auth::user()->role==14)
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </button>
                @else
                  
                   <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </button>
                  @endif
              @elseif(Auth::User()->id_departemen==10)
                @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </button> 
                 @endif
                @endif  
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th rowspan="2" colspan="1" style="text-align: center">No</th>
                    <th rowspan="2" colspan="1" style="text-align: center">Kegiatan</th>
                    <th rowspan="2" colspan="1" style="text-align: center">Institusi</th>
                    <th rowspan="2" colspan="1" style="text-align: center">Tahun</th>
                    <th rowspan="2" colspan="1" style="text-align: center">Jumlah Mahasiswa yang Terlibat</th>
                    <th rowspan="2" colspan="1" style="text-align: center">Keterlibatan Mahasiswa</th>
                    @if(Auth::User()->role!=2)
                    <th rowspan="2" style="text-align: center">Aksi</th>
                    @endif
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; ?>
                  @foreach($mahasiswa_pengabdian as $terlibatpengabdian)
                  <?php $no++; ?>
                  <tr>
                  @if($terlibatpengabdian->jumlah_mahasiswa_peng!=0)
                    <td >{{$no}}</td>
                    <td>{{$terlibatpengabdian->judul_pengabdian}}</td>
                    <td>{{$terlibatpengabdian->institusi}}</td>
                    <td>{{$terlibatpengabdian->tahun_pengabdian}}</td> 
                    <td>{{$terlibatpengabdian->jumlah_mahasiswa_peng}}</td>
                    <td>{{$terlibatpengabdian->keterlibatan_mahasiswa}}</td> 
                  @endif
                  <!-- UBAH DAN HAPUS -->
                  @if($terlibatpengabdian->jumlah_mahasiswa_peng!=0)
                  @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                     <td> 
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_mahasiswa{{$terlibatpengabdian->id_pengabdian}}">
                        <span>Ubah</span>
                        </button>
                        
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_mahasiswa{{$terlibatpengabdian->id_pengabdian}}">
                        <span>Hapus</span>
                        </button>
                      </td>
                      </tr>
                    @endif
                  @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                     <td> 
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_mahasiswa{{$terlibatpengabdian->id_pengabdian}}">
                        <span>Ubah</span>
                        </button>
                        
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_mahasiswa{{$terlibatpengabdian->id_pengabdian}}">
                        <span>Hapus</span>
                        </button>
                      </td>
                      </tr>
                    @endif
                  @endif
                  @endif

                  <!-- Hapus -->
          <div class="modal fade" id="hapus_mahasiswa{{$terlibatpengabdian->id_pengabdian}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(['method' => 'DELETE','route' => ['mahasiswa_terlibat_pengabdian.destroy', $terlibatpengabdian->id_pengabdian],'style'=>'display:inline']) !!}
                    <div class="box-body">
                      <div class="form-group">
                      <h3>Anda Yakin untuk hapus data?</h3>
                       <button type="submit" class="col-md-4 btn btn-danger" style="margin-left:10px">Yakin</button>
                       <button type="button" class="col-sm-4 col-md-offset-5 btn btn-primary" style="margin-left:10px" onclick="window.location='{{ url('/mahasiswa_terlibat_pengabdian') }}'" >Kembali</button>                   
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

                <!-- Edit -->
                  <div class="modal fade" id="edit_mahasiswa{{$terlibatpengabdian->id_pengabdian}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Ubah Mahasiswa yang Terlibat Pengabdian</h4>
                          </div>
                          <div class="modal-body">
                            <div class="box box-info">
                              <!-- form start -->
                              {!! Form::open(array('route' => ['mahasiswa_terlibat_pengabdian.update', $terlibatpengabdian->id_pengabdian],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                              <div class="box-body">
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Kegiatan</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('judul_pengabdian', $terlibatpengabdian->judul_pengabdian, array('placeholder' => 'Kegiatan','class' => 'form-control')) !!}  
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Intitusi</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('institusi', $terlibatpengabdian->institusi, array('placeholder' => 'Institusi','class' => 'form-control')) !!}  
                                  </div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-4 control-label">Tahun</label>
                                  <div class="col-sm-8">
                                    {!! Form::date('tahun_pengabdian', $terlibatpengabdian->tahun_pengabdian, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                                  </div>
                                  </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jumlah Mahasiswa yang Terlibat</label>
                                  <div class="col-sm-8">
                                   {!! Form::number('jumlah_mahasiswa_peng', $terlibatpengabdian->jumlah_mahasiswa_peng, array('placeholder' => 'Jumlah Mahasiswa Terlibat','class' => 'form-control')) !!}   
                                  </div>
                                </div>
                             <div class="form-group">
                                  <label class="col-sm-2 control-label">Keterlibatan Mahasiswa</label>
                                  <div class="col-sm-6">
                                  {!! Form::textarea('keterlibatan_mahasiswa', $terlibatpengabdian->keterlibatan_mahasiswa, array('placeholder' => 'Keterlibatan Mahasiswa','class' => 'form-control')) !!}  
                                  </div>
                                </div>
                              </div>
                                  <div class="form-group">
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                  </div>
                                </div>
                                 {!! Form::close() !!}
                              </div>
                            </div>
                            <!-- /.modal-content -->
                         </div>
                          <!-- /.modal-dialog -->
                    </div>
                        <!-- /.modal -->
                  </div>
                  @endforeach

                </tbody>
              </table>
            </div>

                </div>

          </div>

              </div>

                  <!-- Tambah Data -->
     <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">Tambah Mahasiswa yang Terlibat Pengabdian {{$dept[0]->nama_departemen}}</h3>
            </div>
            <div class="modal-body">
              <div class="box box-info">
             {!! Form::open(array('route' => 'mahasiswa_terlibat_pengabdian.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="modal-header">
              <div class="form-group">
              <label class="col-sm-5 control-label">Kegiatan</label>
                <div class="col-sm-6">
                {!! Form::text('kegiatan_pengabdian', null, array('placeholder' => 'Kegiatan','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Intitusi</label>
                  <div class="col-sm-6">
                  {!! Form::text('institusi', null, array('placeholder' => 'institusi','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Tahun</label>
                  <div class="col-sm-6">
                  {!! Form::selectRange('tahun_terlibat','2014', '2060', array('placeholder' => 'Tahun','class' => 'form-control', 'min'=>2016)) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Jumlah Mahasiswa yang Terlibat</label>
                  <div class="col-sm-6">
                  {!! Form::number('jumlah_mahasiswa_pengabdian', null, array('placeholder' => 'Jumlah Mahasiswa yang Terlibat','class' => 'form-control')) !!}
                  </div>
              </div>
                <div class="form-group">
                <label class="col-sm-5 control-label">Keterlibatan Mahasiswa</label>
                  <div class="col-sm-6">
                  {!! Form::textarea('keterlibatan_mahasiswa', null, array('placeholder' => 'Keterlibatan Mahasiswa','class' => 'form-control')) !!}
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
                      <a href="{{ route('mahasiswapengabdian.export') }}" class="btn btn-primary btn-md">
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



          </div>

          </div>

    </div>

                  
           
  <!--Text Editor-->
  
</section>
@endsection