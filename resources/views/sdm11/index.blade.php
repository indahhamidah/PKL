@extends('layouts.app') 
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        SDM @if(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>
    </section> 
     <!-- Akhir Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">    
          <div class="box">
            <div class="box-header">
           
           <!-- Button trigger modal -->
           @if(Auth::User()->id_departemen!=10)
            @if(Auth::User()->role==7)
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default21">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal21">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
            @else
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal21">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
            @endif
            @endif
             <!-- Akhir Button trigger modal -->

             <br>
             <br>

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
          <!-- Akhir alert sukses dan eror -->

          <!-- tutup -->
            <div class="box-body">  
              <table id="example2421" class="table table-bordered table-hover">
                <thead>
                  
                  <!-- Judul -->
                  <h4 style="text-align: left;"> 
                   Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS  
                </h4>
                <!-- Akhir Judul -->
                  

              <tbody id="sdm11-list" name="sdm11-list">
              
                <tr>
                   <table style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">Nama Dosen</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Jenjang Pendidikan Lanjut</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Bidang Studi</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Perguruan Tinggi</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Negara</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Tahun Mulai Studi</th>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Action</th>
                     @endif
                     @endif
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(7)</th>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;"></th>
                     @endif
                     @endif
                   </tr>
                  <?php $no = 0;?>
                   @foreach ($sdm11 as $sdm11) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm11->nama_sdm11 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm11->jenjang_pendidikan_lanjut }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm11->bidang_studi }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm11->perguruan_tinggi }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm11->negara }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm11->tahun_mulai_studi }}</td>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$sdm11->id_peningkatan_kemampuan}}">
                    <span>Ubah</span> </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modald{{$sdm11->id_peningkatan_kemampuan}}">
                        <span>Hapus</span></button>
                  </td>
                  @endif
                  @endif
                   </tr>

<!-- Delete -->
    <div class="modal fade" id="modald{{$sdm11->id_peningkatan_kemampuan}}" tabindex="1" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                           
                              <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hiddem="true"> &times; </span>
                              </button>
                              <h3 class="modal-title">Apakah anda yakin ingin menghapus data?</h3>
                              </div>   
                              <div class="modal-body">
                                <div class="box box-info">
                                  <div class="box-body">
                                     
                                        <a>
                                          {!! Form::open(['method' => 'DELETE','route' => ['sdm11.destroy', $sdm11->id_peningkatan_kemampuan],'style'=>'display:inline']) !!}
                                          {!! Form::submit('&nbsp;&nbsp;Ya&nbsp;&nbsp;', ['class' => 'btn btn-danger']) !!}
                                          {!! Form::close() !!}
                                        </a>
                                        <a href="/sdm11" class="btn btn-primary">
                                        <i class="#"> Tidak</i>
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

                  <!-- Edit -->
               <div class="modal fade" id="modal-default{{$sdm11->id_peningkatan_kemampuan}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ubah Data Tabel </h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['sdm11.update', $sdm11->id_peningkatan_kemampuan],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">                                         
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Nama Dosen :</label>
                            <div class="col-sm-11">
                             {!! Form::text('nama_sdm11', $sdm11->nama_sdm11, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}
                            </div>
                          </div>    
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Jenjang Pendidikan Lanjut :</label>
                            <div class="col-sm-11">
                             {!! Form::text('jenjang_pendidikan_lanjut', $sdm11->jenjang_pendidikan_lanjut, array('placeholder' => 'Jenjang Pendidikan Lanjut','class' => 'form-control')) !!}
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Bidang Studi :</label>
                            <div class="col-sm-11">
                             {!! Form::text('bidang_studi', $sdm11->bidang_studi, array('placeholder' => 'Bidang Studi','class' => 'form-control')) !!}
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Perguruan Tinggi :</label>
                            <div class="col-sm-11">
                             {!! Form::text('perguruan_tinggi', $sdm11->perguruan_tinggi, array('placeholder' => 'Perguruan Tinggi','class' => 'form-control')) !!}
                            </div>
                          </div>        
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Negara :</label>
                            <div class="col-sm-11">
                             {!! Form::text('negara', $sdm11->negara, array('placeholder' => 'Negara','class' => 'form-control')) !!}
                            </div>
                          </div>       
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Tahun Mulai Studi :</label>
                            <div class="col-sm-11">
                             {!! Form::text('tahun_mulai_studi', $sdm11->tahun_mulai_studi, array('placeholder' => 'Tahun Mulai Studi','class' => 'form-control')) !!}
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
    <div class="modal fade" id="modal-default21">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title">Tambah Data Tabel </h4>
          </div>
          <div class="modal-body">
            <div class="box box-info">
            <!-- form start -->
            {!! Form::open(array('route' => 'sdm11.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama Dosen :</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_sdm11', null, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}  
                </div>
              </div> 
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Jenjang Pendidikan Lanjut :</label>
                  <div class="col-sm-10">
                  {!! Form::text('jenjang_pendidikan_lanjut', null, array('placeholder' => 'Jenjang Pendidikan Lanjut','class' => 'form-control')) !!}  
                </div>
              </div> 
                <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Bidang Studi :</label>
                  <div class="col-sm-10">
                  {!! Form::text('bidang_studi', null, array('placeholder' => 'Bidang Studi','class' => 'form-control')) !!}  
                </div>
              </div>    
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Perguruan Tinggi :</label>
                  <div class="col-sm-10">
                  {!! Form::text('perguruan_tinggi', null, array('placeholder' => 'Perguruan Tinggi','class' => 'form-control')) !!}  
                </div>
              </div> 

                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Negara :</label>
                      <div class="col-sm-10">
                     {!! Form::text('negara', null, array('placeholder' => 'Negara','class' => 'form-control')) !!}
                    </div>
                   </div>      
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Tahun Mulai Studi :</label>
                      <div class="col-sm-10">
                     {!! Form::text('tahun_mulai_studi', null, array('placeholder' => 'Tahun Mulai Studi','class' => 'form-control')) !!}
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
  <div class="modal fade" id="modal-exim21" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('sdm11.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Upload SDM @if(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif</h3>
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
    <div class="modal fade" id="modal21" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('sdm11.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Unduh Tabel </h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">              
                    <div class="col-sm-10">
                      <a href="{{ route('sdm11.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="downloadsdm11" class="btn btn-primary btn-md">
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


</section>

@endsection
