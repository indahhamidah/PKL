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
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default22">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal22">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
            @else
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal22">
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
              <table id="example2422" class="table table-bordered table-hover">
                <thead>
                  
                  <!-- Judul -->
                  <h4 style="text-align: left;"> 
                   Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri 
                </h4>
                <!-- Akhir Judul -->
                  

              <tbody id="sdm12-list" name="sdm12-list">
              
                <tr>
                   <table style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;text-align: center;">No.</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;text-align: center;">Nama Dosen</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;text-align: center;" >Jenis Kegiatan*</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;text-align: center;" >Tempat</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;text-align: center;" >Waktu</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;text-align: center;" >Sebagai</th>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;text-align: center;" >Action</th>
                     @endif
                     @endif
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3;text-align: center;" >Penyaji</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3;text-align: center;" >Peserta</th>
                     </tr>
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
                   @foreach ($sdm12 as $sdm12)
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm12->nama_sdm12 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm12->jenis_kegiatan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm12->tempat_kegiatan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm12->waktu_kegiatan }}</td>
                     @foreach($peran_kegiatan as $hakii)
                    @if($sdm12->id_status_peran_kegiatan == $hakii->id_peran_kegiatan)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$sdm12->id_kegiatan_dosen}}">
                    <span>Ubah</span>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modald{{$sdm12->id_kegiatan_dosen}}">
                        <span>Hapus</span></button>
                  </td>
                  @endif
                  @endif
                   </tr>

<!-- Delete -->
    <div class="modal fade" id="modald{{$sdm12->id_kegiatan_dosen}}" tabindex="1" aria-hidden="true">
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
                                          {!! Form::open(['method' => 'DELETE','route' => ['sdm12.destroy', $sdm12->id_kegiatan_dosen],'style'=>'display:inline']) !!}
                                          {!! Form::submit('&nbsp;&nbsp;Ya&nbsp;&nbsp;', ['class' => 'btn btn-danger']) !!}
                                          {!! Form::close() !!}
                                        </a>
                                        <a href="/sdm12" class="btn btn-primary">
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
               <div class="modal fade" id="modal-default{{$sdm12->id_kegiatan_dosen}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ubah Data Tabel </h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['sdm12.update', $sdm12->id_kegiatan_dosen],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">                                       
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Nama Dosen :</label>
                            <div class="col-sm-11">
                             {!! Form::text('nama_sdm12', $sdm12->nama_sdm12, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}
                            </div>
                          </div>   
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Jenis Kegiatan :</label>
                            <div class="col-sm-11">
                             {!! Form::text('jenis_kegiatan', $sdm12->jenis_kegiatan, array('placeholder' => 'Jenis Kegiatan','class' => 'form-control')) !!}
                            </div>
                          </div>  
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Tempat :</label>
                            <div class="col-sm-11">
                             {!! Form::text('tempat_kegiatan', $sdm12->tempat_kegiatan, array('placeholder' => 'Tempat','class' => 'form-control')) !!}
                            </div>
                          </div>       
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Waktu :</label>
                            <div class="col-sm-11">
                             {!! Form::text('waktu_kegiatan', $sdm12->waktu_kegiatan, array('placeholder' => 'Waktu','class' => 'form-control')) !!}
                            </div>
                          </div>  
                        <div class="form-group">
                          <label class="col-xs-12 col-sm-6 col-md-8">Bobot Tugas</label>
                            <div class="col-sm-11">
                           <select name="id_status_peran_kegiatan" class="form-control">
                                <option value="1" {{$sdm12->id_status_peran_kegiatan==1 ? 'selected' : ''}}>Penyaji</option>
                                <option value="2" {{$sdm12->id_status_peran_kegiatan==2 ? 'selected' : ''}}>Peserta</option>
                              </select>
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
       <tfoot>
      <td style="text-align: left; font-size: 16px">* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll</td>
    </tfoot>
      </div>
    </div>
       

<!-- Tambah Data -->
    <div class="modal fade" id="modal-default22">
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
            {!! Form::open(array('route' => 'sdm12.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama Dosen :</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_sdm12', null, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}  
                </div>
              </div>  
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Jenis Kegiatan :</label>
                  <div class="col-sm-10">
                  {!! Form::text('jenis_kegiatan', null, array('placeholder' => 'Jenis Kegiatan','class' => 'form-control')) !!}  
                </div>
              </div> 
                <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Tempat :</label>
                  <div class="col-sm-10">
                  {!! Form::text('tempat_kegiatan', null, array('placeholder' => 'Tempat','class' => 'form-control')) !!}  
                </div>
              </div>   
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Waktu :</label>
                      <div class="col-sm-10">
                     {!! Form::text('waktu_kegiatan', null, array('placeholder' => 'Waktu','class' => 'form-control')) !!}
                    </div>
                   </div>      
              <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Bobot Tugas</label>
                  <div class="col-sm-10">
                 <select name="id_status_peran_kegiatan" class="form-control">
                                <option value="1">Penyaji</option>
                                <option value="2">Peserta</option>
                              </select>
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
  <div class="modal fade" id="modal-exim22" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('sdm12.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
    <div class="modal fade" id="modal22" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('sdm12.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
                      <a href="exportsdm12s" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="downloadsdm12" class="btn btn-primary btn-md">
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
