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
          Redaksi Penelitian @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
            @foreach ($redaksipenelitian as $redaksi)
              <li class="active"><a href="#tab_1" data-toggle="tab">Redaksi Penelitian</a></li>
              @if($redaksi->redaksi_penelitian == 1)
              <li><a href="#tab_2" data-toggle="tab">Mahasiswa yang Terlibat</a></li>
              @endif
            </ul>
            <div class="tab-content">
              
            <div class="tab-pane active" id="tab_1">
              <div class="box-header">
              <div> 
              @if(Auth::User()->id_departemen!=10)
                @if(Auth::User()->role==2 or Auth::user()->role==14)
                  <a class="btn btn-primary" href="pdfuser">
                  <i class="fa fa-download"></i>Unduh</a>
                  @else
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default{{$redaksi->id_redaksi}}">
                        <span>Ubah</span>
                        </button>
                  <a class="btn btn-primary" href="pdfuser">
                  <i class="fa fa-download"></i>Unduh</a>
                  
                @endif

              @elseif(Auth::User()->id_departemen==10)
                @if(Auth::User()->role!=1)
                  <a class="btn btn-primary" href="{{ route('penelitian.download')}}">
                  <i class="fa fa-download"></i>Unduh</a>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default{{$redaksi->id_redaksi}}">
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
                    
                      7.1.2 Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga
                      tahun terakhir?<br>
                     
                    @if($redaksi->redaksi_penelitian == 1)
                      &#x2714 Ya<br>
                      Tidak<br>
                      Ada <?php echo $totalM ?> dari {{$redaksi->total_mahasiswa}} mahasiswa yang melakukan tugas akhir.
                      @else
                      Ya<br>
                        &#x2714 Tidak 
                    @endif
              </div>
              </div>
              </div>

          <!-- Ubah -->
          <div class="modal fade" id="modal-default{{$redaksi->id_redaksi}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ubah Redaksi Penelitian {{$dept[0]->nama_departemen}}</h4>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(array('route' => ['redaksipenelitian.update', $redaksi->id_redaksi],'class'=>'form-horizontal','method'=>'PUT')) !!}
                    <div class="box-body">
                      <div class="form-group">
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Ada Mahasiswa Terlibat?</label>
                          <div class="col-sm-3">
                            <select name="redaksi_penelitian" class="form-control">
                                <option value="0">Pilih</option>
                                <option value="1" {{$redaksi->redaksi_penelitian==1 ? 'selected' : ''}}>Ya</option>
                                <option value="2" {{$redaksi->redaksi_penelitian==2 ? 'selected' : ''}}>Tidak</option>
                              </select>
                          </div>
                        </div>
                        Jika ada, banyaknya mahasiswa PS yang ikut serta dalam penelitian dosen adalah
                        <div class="col-sm-2" >
                         <?php echo $totalM ?></div><div> orang,</div> 
                          <br><div class="col-sm-1">dari</div><div class="col-sm-2" >
                          {!! Form::number('total_mahasiswa', $redaksi->total_mahasiswa, array('placeholder' => 'Jumlah Terlibat','class' => 'form-control')) !!}</div><div> mahasiswa yang melakukan tugas akhir melalui skripsi.</div>
                        <div></div>    
                        <br><br>
                       
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
                @if(Auth::User()->role!=1)
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </button> 
                 @endif
                @endif  
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th style="text-align: center">No</th>
                    <th style="text-align: center">Nama Dosen</th>
                    <th style="text-align: center">Topik Penelitian</th>
                    <th style="text-align: center">Jumlah Mahasiswa yang Terlibat</th>
                    <th style="text-align: center">Tahun</th>
                    @if(Auth::User()->role!=2)
                    <th style="text-align: center">Aksi</th>
                    @endif
                   
                  </tr>
                  <tr>
                  <tfoot>
                    <td colspan="3">Total jumlah mahasiswa yang penelitian skripsinya terkait dengan penelitian dosen</td>
                    @foreach ($redaksipenelitian as $redaksi)
                      <td style="text-align: center">A=<?php echo $totalM ?></td>
                      <tr>
                      <td colspan="3">Jumlah mahasiswa yang penelitian skripsinya tidak terkait dengan penelitian dosen</td>
                      <td style="text-align: center">B={{$redaksi->total_mahasiswa}}</td>
                      </tr>
                      <tr>
                      <td colspan="3">Total mahasiswa yang melakukan penelitian skripsinya pada tiga tahun terakhir</td>
                      <td style="text-align: center">A+B={{$redaksi->total_mahasiswa+$redaksi->jumlah_mahasiswa}}</td>
                      </tr>
                  </tfoot>
                  @endforeach
                  </tr>
                  <tr>
                  <th style="text-align: center">(1)</th>
                    <th style="text-align: center">(2)</th>
                    <th style="text-align: center">(3)</th>
                    <th style="text-align: center">(4)</th>
                    <th style="text-align: center">(5)</th>
                    <th style="text-align: center">(6)</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $no=0; ?>
                  @foreach($mahasiswa_penelitian as $terlibatpenelitian)
                  <?php $no++; ?>
                  <tr>
                  @if($terlibatpenelitian->jumlah_mahasiswa!=0)
                    <td style="text-align: center">{{$no}}</td>
                    <td>{{$terlibatpenelitian->nama_peneliti}}</td>
                    <td>{{$terlibatpenelitian->judul_penelitian}}</td>
                    <td style="text-align: center">{{$terlibatpenelitian->jumlah_mahasiswa}}</td>
                    <td style="text-align: center">{{$terlibatpenelitian->tahun_penelitian}}</td> 
                  @endif
                  <!-- UBAH DAN HAPUS -->
                  @if($terlibatpenelitian->jumlah_mahasiswa!=0)
                  @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                     <td> 
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_mahasiswa{{$terlibatpenelitian->id_penelitian}}">
                        <span>Ubah</span>
                        </button>
                        
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_mahasiswa{{$terlibatpenelitian->id_penelitian}}">
                        <span>Hapus</span>
                        </button>
                      </td>
                      </tr>
                    @endif
                  @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1)
                     <td> 
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_mahasiswa{{$terlibatpenelitian->id_penelitian}}">
                        <span>Ubah</span>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_mahasiswa{{$terlibatpenelitian->id_penelitian}}">
                        <span>Hapus</span>
                        </button>
                      </td>
                      </tr>
                    @endif
                  @endif
                  @endif
                  

                  <!-- Hapus -->
          <div class="modal fade" id="hapus_mahasiswa{{$terlibatpenelitian->id_penelitian}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(['method' => 'DELETE','route' => ['mahasiswa_terlibat_penelitian.destroy', $terlibatpenelitian->id_penelitian],'style'=>'display:inline']) !!}
                    <div class="box-body">
                      <div class="form-group">
                      <h3>Anda Yakin untuk hapus data?</h3>
                       <button type="submit" class="col-md-4 btn btn-danger" style="margin-left:10px">Yakin</button>
                       <button type="button" class="col-sm-4 col-md-offset-5 btn btn-primary" style="margin-left:10px" onclick="window.location='{{ url('/mahasiswa_terlibat_penelitian') }}'" >Kembali</button>                   
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
                  <div class="modal fade" id="edit_mahasiswa{{$terlibatpenelitian->id_penelitian}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Ubah Mahasiswa yang Terlibat Penelitian</h4>
                          </div>
                          <div class="modal-body">
                            <div class="box box-info">
                              <!-- form start -->
                              {!! Form::open(array('route' => ['mahasiswa_terlibat_penelitian.update', $terlibatpenelitian->id_penelitian],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                              <div class="box-body">
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Nama Dosen</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('nama_peneliti', $terlibatpenelitian->nama_peneliti, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}  
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Topik Penelitian</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('judul_penelitian', $terlibatpenelitian->judul_penelitian, array('placeholder' => 'Topik Penelitian','class' => 'form-control')) !!}  
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jumlah Mahasiswa yang Terlibat</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('jumlah_mahasiswa', $terlibatpenelitian->jumlah_mahasiswa, array('placeholder' => 'Jumlah Mahasiswa yang Terlibat','class' => 'form-control')) !!}  
                                  </div>
                                </div>
                            <label class="col-sm-4 control-label">Tahun</label>
                              <div class="col-sm-8" style="margin-left: 150px">
                             {!! Form::date('tahun_penelitian', $terlibatpenelitian->tahun_penelitian, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
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
              <h3 class="modal-title">Tambah Mahasiswa yang Terlibat Penelitian {{$dept[0]->nama_departemen}}</h3>
            </div>
            <div class="modal-body">
              <div class="box box-info">
             {!! Form::open(array('route' => 'mahasiswa_terlibat_penelitian.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="modal-header">
              <div class="form-group">
              <label class="col-sm-5 control-label">Nama Dosen</label>
                <div class="col-sm-6">
                {!! Form::text('nama_dosen', null, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Topik Penelitiann</label>
                  <div class="col-sm-6">
                  {!! Form::text('topik_penelitian', null, array('placeholder' => 'Topik Penelitian','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Jumlah Mahasiswa yang Terlibat</label>
                  <div class="col-sm-6">
                  {!! Form::number('jumlah_mahasiswa', null, array('placeholder' => 'Jumlah Mahasiswa yang Terlibat','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Tahun</label>
                  <div class="col-sm-6">
                  {!! Form::selectRange('tahun_terlibat_penelitian','2014', '2060', array('placeholder' => 'Tahun','class' => 'form-control', 'min'=>2016)) !!}
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
          <form method="post" action=" {{ route('penelitian.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Unduh Penelitian {{$dept[0]->nama_departemen}}</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">              
                    <div class="col-sm-10">
                      <a href="{{ route('mahasiswapenelitian.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-file-excel-o"> Unduh Excel</i>
                      </a>
                      <a href="pdfuser" class="btn btn-primary btn-md">
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
            <!-- /.tab-content -->
          </div>
              
         </div>
       </div>
     </div>
   </div>
           
  <!--Text Editor-->
   
    


</section>
@endsection