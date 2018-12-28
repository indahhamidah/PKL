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
          SDM @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
                @if(Auth::User()->role==7)
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default">
                      <i class="fa fa-plus"></i> <span>Tambah</span>
                  </button><!-- 
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-exim">
                     <i class="fa fa-upload"></i> <span>Unggah</span> -->
                  </button>
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal1">
                     <i class="fa fa-download"></i> <span>Unduh</span>
                  </button>
                  @else
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal1">
                     <i class="fa fa-download"></i> <span>Unduh</span>
                  </button>
                  @endif
                  @endif

                
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
                  <h4 style="text-align: center;">Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:</h4>
                  <tr>
                  <th style="text-align: center ;background-color:#daeef3;border: 1px solid #000">No</th>
                  <th rowspan="2" style="text-align: center; background-color:#daeef3;border: 1px solid #000">Nama Dosen Tetap</th>
                  <th rowspan="2" style="text-align: center; background-color:#daeef3;border: 1px solid #000">NIDN**</th>
                  <th rowspan="2" style="text-align: center; background-color:#daeef3;border: 1px solid #000">Tgl. Lahir</th>
                  <th rowspan="2" style="text-align: center; background-color:#daeef3;border: 1px solid #000">Jabatan Akamdemik***</th>
                  <th rowspan="2" style="text-align: center; background-color:#daeef3;border: 1px solid #000">Gelar Akademik</th>
                  <th rowspan="2" style="text-align: center; background-color:#daeef3;border: 1px solid #000">Pendidikan S1, S2, S3  dan Asal PT*</th>
                  <th rowspan="2" style="text-align: center; background-color:#daeef3;border: 1px solid #000">Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                  <th rowspan="2" style="text-align: center; background-color:#daeef3;border: 1px solid #000">Unggah Lampiran</th>
                  @endif
                  @endif
                  <th rowspan="2" style="text-align: center; background-color:#daeef3;border: 1px solid #000">Unduh Lampiran</th>
                  <th rowspan="2" style="text-align: center; background-color:#daeef3;border: 1px solid #000">Status Lampiran</th>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                  <th style="text-align: center; background-color:#daeef3;border: 1px solid #000">Aksi</th>
                  @endif
                  @endif
                  </tr>
                  
                  <tfoot>
                    <td colspan="11" style="text-align: left;">* &nbsp;&nbsp;&nbsp;&nbsp;Lampirkan fotokopi ijazah.</td>
                    <tr></tr>
                    <td colspan="11" style="text-align: left;">** &nbsp;&nbsp;NIDN : Nomor Induk Dosen Nasional</td>
                    <tr></tr>
                    <td colspan="11" style="text-align: left;">*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.</td>
                    <tr></tr>
                    <td colspan="11" style="text-align: left;">Catatan : Lampiran yang diunggah pada tabel ini adalah fotokopi ijazah dan fotokopi sertifikat doser. Lampiran tersebut disatukan di dalam ms.word</td>
                  </tfoot>
                  
                  <tr>
                  <th rowspan="2" style="text-align: center;border: 1px solid #000">(1)</th>
                  <th rowspan="2" style="text-align: center;border: 1px solid #000">(2)</th>
                  <th rowspan="2" style="text-align: center;border: 1px solid #000">(3)</th>
                  <th rowspan="2" style="text-align: center;border: 1px solid #000">(4)</th>
                  <th rowspan="2" style="text-align: center;border: 1px solid #000">(5)</th>
                  <th rowspan="2" style="text-align: center;border: 1px solid #000">(6)</th>
                  <th rowspan="2" style="text-align: center;border: 1px solid #000">(7)</th>
                  <th rowspan="2" style="text-align: center;border: 1px solid #000">(8)</th>
                  <th rowspan="2" style="text-align: center;border: 1px solid #000">(9)</th>
                  <th rowspan="2" style="text-align: center;border: 1px solid #000">(10)</th>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                  <th rowspan="2" style="text-align: center;border: 1px solid #000">(11)</th>
                  <th rowspan="2" style="text-align: center;border: 1px solid #000"></th>
                  @endif
                  @endif
                  </tr>
                  </thead>

                  <tbody id="sdm3s" name="sdm3">
                  <?php $nomor = 0;?>
                  @foreach ($sdm3s as $sdm3)
                  <?php $nomor++ ;?>
                   <tr>
                  <td style="text-align: center;border: 1px solid #000">{{ $nomor }}</td>
                  <td style="text-align: left;border: 1px solid #000">{{$sdm3->nama_dosen_sdm3}}</td>
                  <td style="text-align: center;border: 1px solid #000">{{$sdm3->nidn_sdm3}}</td>
                  <td style="text-align: center;border: 1px solid #000">{{$sdm3->tanggal_lahir}}</td>
                  <td style="text-align: center;border: 1px solid #000">{{$sdm3->jabatan}}</td>
                  <td style="text-align: left;border: 1px solid #000">{{$sdm3->gelar_sdm3}}</td>
                  <td style="text-align: center;border: 1px solid #000">{{$sdm3->pendidikan_sdm3}}</td>
                  <td style="text-align: center;border: 1px solid #000">{{$sdm3->bidang_keahlian}}</td>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                  <td style="text-align: center;border: 1px solid #000">
                    <button type="button" class=" btn-sm" data-toggle="modal" data-target="#modal-default2{{$sdm3->id_data_dosen_yang_bidangnya_sesuai_ps}}">
                       <i class="fa fa-upload"></i>
                      </button>
                    </td>
                    @endif
                    @endif
                  
                    <td style="text-align: center;border: 1px solid #000">
                    @foreach ($lampiran_sdm3 as $lampiransdm3P)
                      @if($lampiransdm3P->id_lampiran_sdm3==$sdm3->id_lampiran_sdm3)
                      <a href="{{ route('downloadlampiransdm3', $lampiransdm3P->id_lampiran_sdm3) }}" >
                        <button type="button" class=" btn-sm">
                          <i class="fa fa-download"></i>
                        </button>
                      </a>
                      @endif
                    @endforeach
                  </td>

                    
                      <td style="text-align: center;border: 1px solid #000">
                        @if(isset($sdm3->id_lampiran_sdm3))
                          <label class="label label-success">Lampiran Ada</label>
                        @else
                          <label class="label label-warning">Lampiran belum ada</label>
                        @endif
                        </td>
                
                  
                  @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role==7)
                    @if(Auth::user()->role!=4)
                    @if(Auth::user()->role!=8)
                    <td style="text-align: center;border: 1px solid #000"> 
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$sdm3->id_data_dosen_yang_bidangnya_sesuai_ps}}">
                        <span>&nbsp;Ubah&nbsp;</span></button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modald{{$sdm3->id_data_dosen_yang_bidangnya_sesuai_ps}}">
                        <span>Hapus</span></button>
                      </td>
                      </tr>
                    @endif
                    @endif
                    @endif
                  @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1)
                     <td> 
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$sdm3->id_data_dosen_yang_bidangnya_sesuai_ps}}">
                        <span>Ubah</span>
                        </button>
                        {!! Form::open(['method' => 'DELETE','route' => ['Sdm_Departemen_3.destroy', $sdm3->id_data_dosen_yang_bidangnya_sesuai_ps],'style'=>'display:inline']) !!}
                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                      </td>
                      </tr>
                    @endif
                  @endif




    <!-- Upload Bukti -->
       <div class="modal fade" id="modal-default2{{$sdm3->id_data_dosen_yang_bidangnya_sesuai_ps}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <form method="post" action=" {{ route('lampiransdm3.upload') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hiddem="true"> &times; </span>
              </button>
              <h3 class="modal-title">Unggah Lampiran</h3>
              </div>   
                <div class="modal-body">
                  <div class="box box-info">
                  {!! Form::open(array('route' => 'lampiransdm3.upload','class'=>'form-horizontal','method'=>'POST')) !!}
                      <div class="box-body">
                     {!! Form::hidden('id_data_dosen_yang_bidangnya_sesuai_ps', $sdm3->id_data_dosen_yang_bidangnya_sesuai_ps, array('placeholder' => 'id Sdm3','class' => 'form-control')) !!}
                     @if(Auth::user()->id_departemen==10)
                        {!! Form::hidden('id_departemen', $sdm3->id_departemen, array('placeholder' => 'id departemen','class' => 'form-control')) !!}
                     @endif
                        <label for="file" class="col-sm-5 control-label">Unggah</label>
                          <div class="col-sm-6">
                          <input type="file" id="file" name="lampiransdm3" class="form-control" autofocus required>
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

<!-- Delete -->
    <div class="modal fade" id="modald{{$sdm3->id_data_dosen_yang_bidangnya_sesuai_ps}}" tabindex="1" aria-hidden="true">
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
                                          {!! Form::open(['method' => 'DELETE','route' => ['Sdm_Departemen_3.destroy', $sdm3->id_data_dosen_yang_bidangnya_sesuai_ps],'style'=>'display:inline']) !!}
                                          {!! Form::submit('&nbsp;&nbsp;Ya&nbsp;&nbsp;', ['class' => 'btn btn-danger']) !!}
                                          {!! Form::close() !!}
                                        </a>
                                        <a href="/Sdm_Departemen_3" class="btn btn-primary">
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
          <div class="modal fade" id="modal-default{{$sdm3->id_data_dosen_yang_bidangnya_sesuai_ps}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ubah Data Tabel </h4>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(array('route' => ['Sdm_Departemen_3.update', $sdm3->id_data_dosen_yang_bidangnya_sesuai_ps],'class'=>'form-horizontal','method'=>'PUT')) !!}
                    <div class="box-body">
                        <div class="form-group">
                         <label class="col-xs-12 col-sm-4 col_md-8">Nama Dosen Tetap :</label>
                            <div class="col-sm-6">
                            {!! Form::text('nama_dosen_sdm3', $sdm3->nama_dosen_sdm3, array('placeholder' => 'Nama Dosen Tetap','class' => 'form-control')) !!}
                            </div>
                        </div> 

                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>
                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>

                        <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">NIDN :</label>
                            <div class="col-sm-6">
                            {!! Form::number('nidn_sdm3', $sdm3->nidn_sdm3, array('placeholder' => 'NIDN','class' => 'form-control', 'min'=>0)) !!}
                            </div>
                        </div>

                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>
                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>

                      <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">Tanggal Lahir :</label>
                          <div class="col-sm-6">
                            {!! Form::date('tanggal_lahir', $sdm3->tanggal_lahir, array('placeholder' => 'Tanggal Lahir','class' => 'form-control')) !!}
                          </div>

                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>
                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>

                        <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">Jabatan Akademik :</label>
                            <div class="col-sm-6">
                            <select name="id_jabatan" class="form-control">
                                <option value="1" {{$sdm3->id_jabatan==1 ? 'selected' : ''}}>DOSEN PNS/CPNS***</option>
                                <option value="2" {{$sdm3->id_jabatan==2 ? 'selected' : ''}}>ASISTEN AHLI***</option>
                                <option value="3" {{$sdm3->id_jabatan==3 ? 'selected' : ''}}>LEKTOR***</option>
                                <option value="4" {{$sdm3->id_jabatan==4 ? 'selected' : ''}}>LEKTOR KEPALA***</option>
                                <option value="5" {{$sdm3->id_jabatan==5 ? 'selected' : ''}}>GURU BESAR/PROFESOR***</option>
                                <option value="6" {{$sdm3->id_jabatan==6 ? 'selected' : ''}}>DOSEN PNS/CPNS</option>
                                <option value="7" {{$sdm3->id_jabatan==7 ? 'selected' : ''}}>ASISTEN AHLI</option>
                                <option value="8" {{$sdm3->id_jabatan==8 ? 'selected' : ''}}>LEKTOR</option>
                                <option value="9" {{$sdm3->id_jabatan==9 ? 'selected' : ''}}>LEKTOR KEPALA</option>
                                <option value="10" {{$sdm3->id_jabatan==10 ? 'selected' : ''}}>GURU BESAR/PROFESOR</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>
                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>

                        <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">Gelar Akademik :</label>
                          <div class="col-sm-6">
                          {!! Form::text('gelar_sdm3', $sdm3->gelar_sdm3, array('placeholder' => 'Gelar Akademik','class' => 'form-control')) !!}
                          </div>
                        </div>

                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>
                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>

                        <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">Pendidikan dan Asal PT :</label>
                            <div class="col-sm-6">
                            {!! Form::text('pendidikan_sdm3', $sdm3->pendidikan_sdm3, array('placeholder' => 'Pendidikan dan Asal PT','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>
                        <div class="form-group">
                         <label class="col-xs-12 col-sm-9 col_md-8"></label>
                        </div>

                        <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">Bidang Keahlian :</label>
                            <div class="col-sm-6">
                            {!! Form::text('bidang_keahlian', $sdm3->bidang_keahlian, array('placeholder' => 'Bidang Keahlian','class' => 'form-control')) !!}
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
           
      </div>
    </div>



    <!-- Tambah Data -->
     <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">Tambah Data Tabel </h3>
            </div>
            <div class="modal-body">
              <div class="box box-info">
             {!! Form::open(array('route' => 'Sdm_Departemen_3.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="modal-header">
              <div class="form-group">
                <label class="col-sm-5 control-label">Nama Dosen Tetap :</label>
                  <div class="col-sm-6">
                  {!! Form::text('nama_dosen_sdm3', null, array('placeholder' => 'Nama Dosen Tetap','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">NIDN :</label>
                  <div class="col-sm-6">
                  {!! Form::number('nidn_sdm3', null, array('placeholder' => 'NIDN','class' => 'form-control', 'min'=>0)) !!}
                  </div>
              </div> 
                <div class="form-group">
                  <label class="col-sm-5 control-label">Tanggal Lahir :</label>
                    <div class="col-sm-6">
                    {!! Form::date('tanggal_lahir', null, array('placeholder' => 'Tanggal Lahir','class' => 'form-control')) !!}
                    </div>
                </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Jabatan Akademik :</label>
                  <div class="col-sm-6">
                  <select name="id_jabatan" class="form-control">
                                <option value="1">DOSEN PNS/CPNS***</option>
                                <option value="2">ASISTEN AHLI***</option>
                                <option value="3">LEKTOR***</option>
                                <option value="4">LEKTOR KEPALA***</option>
                                <option value="5">GURU BESAR/PROFESOR***</option>
                                <option value="6">DOSEN PNS/CPNS</option>
                                <option value="7">ASISTEN AHLI</option>
                                <option value="8">LEKTOR</option>
                                <option value="9">LEKTOR KEPALA</option>
                                <option value="10">GURU BESAR/PROFESOR</option>
                              </select>
                              </select>
                  </div>
              </div>
              <div class="form-group">
              <label class="col-sm-5 control-label">Gelar Akademik :</label>
                <div class="col-sm-6">
                {!! Form::text('gelar_sdm3', null, array('placeholder' => 'Gelar Akademik','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Pendidikan dan Asal PT :</label>
                  <div class="col-sm-6">
                  {!! Form::text('pendidikan_sdm3', null, array('placeholder' => 'Pendidikan dan Asal PT','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Bidang Keahlian :</label>
                  <div class="col-sm-6">
                  {!! Form::text('bidang_keahlian', null, array('placeholder' => 'Bidang Keahlian','class' => 'form-control')) !!}
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
        <form method="post" action=" {{ route('sdm3.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Unggah Penelitian {{$dept[0]->nama_departemen}}</h3>
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






<!-- report -->
    <div class="modal fade" id="modal1" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('sdm3.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
                   
                      <a href="{{ route('sdm3.sdm3excel') }}" class="btn btn-primary" role="button">
                       <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="{{ route('sdm3.download')}}" class="btn btn-primary">
                      <i class="fa fa-download"> Unduh PDF</i>
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




</div>
</div>
</section>
@endsection