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
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default15">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <a href="/templete35" class="btn btn-primary btn-md">
            <i class="fa fa-download"> Unduh Templete</i>
          </a>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-exim15">
            <i class="fa fa-upload"></i> <span>Unggah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal15">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
            @else
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal15">
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
              <table id="example2415" class="table table-bordered table-hover">
                <thead>
                  
                  <!-- Judul -->
                  <h4 style="text-align: center;"> 
                  Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)    
                </h4> 
                <!-- Akhir Judul -->
                  

              <tbody id="sdm5-list" name="sdm5-list">
              
                <tr>
                   <table style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">No.</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">Nama Dosen Tetap</th>
                     <th colspan="3" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">sks Pengajaran pada</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">sks Penelitian<br</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">sks Pengabdian kepada Masyarakat</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">sks Manajemen*</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">Jumlah sks</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">Keterangan</th>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">Action</th>
                     @endif
                     @endif
                     <tr> 
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">PS Sendiri</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">PS Lain PT Sendiri</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">PT Lain</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">PT Sendiri</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">PT Lain</th>
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
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(8)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(9)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(10)</th>
                      <th style="border: 1px solid #000; padding: 5px; text-align: center;">(11)</th>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;"></th>
                     @endif
                     @endif
                   </tr>
                   <tfoot>
                    <tr>
                     <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: right;"><strong>Jumlah</strong></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks1,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks2,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks3,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks4,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks5,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks6,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks7,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totaljumlah,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     @endif
                     @endif
                   </tr>
                   <tr>
                    <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: right;"><strong>Rata-rata SKS tridharma dan manajemen dosen yang tidak sedang tugas belajar</strong></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks1,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks2,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks3,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks4,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks5,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks6,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks7,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratajumlah,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     @endif
                     @endif
                   </tr>
                   </tfoot>
                  <?php $no = 0;?>
                   @foreach ($sdm5 as $sdm5)
                 <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm5->nama_sdm5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_pengajaran_pada_ps_sendiri }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_pengajaran_pada_ps_lain_pt_sendiri }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_pengajaran_pada_pt_lain }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_penelitian }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_pengabdian_kepada_masyarakat }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_manajemen_pt_sendiri }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_manajemen_pt_lain }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_pengajaran_pada_ps_sendiri+$sdm5->sks_pengajaran_pada_ps_lain_pt_sendiri+$sdm5->sks_pengajaran_pada_pt_lain+$sdm5->sks_penelitian+$sdm5->sks_pengabdian_kepada_masyarakat+$sdm5->sks_manajemen_pt_sendiri+$sdm5->sks_manajemen_pt_lain }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm5->keterangan }}</td>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$sdm5->id_aktivitas_dosen_sesuai_sks}}">
                    <span>&nbsp;Ubah&nbsp;</span>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modald{{$sdm5->id_aktivitas_dosen_sesuai_sks}}">
                        <span>Hapus</span></button>
                  </td>
                  @endif
                  @endif
                   </tr>

<!-- Delete -->
    <div class="modal fade" id="modald{{$sdm5->id_aktivitas_dosen_sesuai_sks}}" tabindex="1" aria-hidden="true">
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
                                          {!! Form::open(['method' => 'DELETE','route' => ['sdm5.destroy', $sdm5->id_aktivitas_dosen_sesuai_sks],'style'=>'display:inline']) !!}
                                          {!! Form::submit('&nbsp;&nbsp;Ya&nbsp;&nbsp;', ['class' => 'btn btn-danger']) !!}
                                          {!! Form::close() !!}
                                        </a>
                                        <a href="/sdm5" class="btn btn-primary">
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
               <div class="modal fade" id="modal-default{{$sdm5->id_aktivitas_dosen_sesuai_sks}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ubah Data Tabel</h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['sdm5.update', $sdm5->id_aktivitas_dosen_sesuai_sks],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">                                         
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Nama Dosen Tetap :</label>
                            <div class="col-sm-11">
                             {!! Form::text('nama_sdm5', $sdm5->nama_sdm5, array('placeholder' => 'Nama Dosen Tetap','class' => 'form-control')) !!}
                            </div>
                          </div>   
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">sks Pengajaran pada PS Sendiri :</label>
                            <div class="col-sm-11">
                             {!! Form::text('sks_pengajaran_pada_ps_sendiri', $sdm5->sks_pengajaran_pada_ps_sendiri, array('placeholder' => 'sks','class' => 'form-control')) !!}
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">sks Pengajaran pada PS Lain PT Sendiri :</label>
                            <div class="col-sm-11">
                             {!! Form::text('sks_pengajaran_pada_ps_lain_pt_sendiri', $sdm5->sks_pengajaran_pada_ps_lain_pt_sendiri, array('placeholder' => 'sks','class' => 'form-control')) !!}
                            </div>
                          </div>   
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">sks Pengajaran pada PT Lain :</label>
                            <div class="col-sm-11">
                             {!! Form::text('sks_pengajaran_pada_pt_lain', $sdm5->sks_pengajaran_pada_pt_lain, array('placeholder' => 'sks','class' => 'form-control')) !!}
                            </div>
                          </div>        
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">sks Penelitian :</label>
                            <div class="col-sm-11">
                             {!! Form::text('sks_penelitian', $sdm5->sks_penelitian, array('placeholder' => 'sks','class' => 'form-control')) !!}
                            </div>
                          </div>   
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">sks Pengabdian kepada Masyarakat :</label>
                            <div class="col-sm-11">
                             {!! Form::text('sks_pengabdian_kepada_masyarakat', $sdm5->sks_pengabdian_kepada_masyarakat, array('placeholder' => 'sks','class' => 'form-control')) !!}
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">sks Manajemen PT Sendiri :</label>
                            <div class="col-sm-11">
                             {!! Form::text('sks_manajemen_pt_sendiri', $sdm5->sks_manajemen_pt_sendiri, array('placeholder' => 'sks','class' => 'form-control')) !!}
                            </div>
                          </div>   
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">sks Manajemen PT Lain :</label>
                            <div class="col-sm-11">
                             {!! Form::text('sks_manajemen_pt_lain', $sdm5->sks_manajemen_pt_lain, array('placeholder' => 'sks','class' => 'form-control')) !!}
                            </div>
                          </div>   
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Keterangan :</label>
                            <div class="col-sm-11">
                             {!! Form::text('keterangan', $sdm5->keterangan, array('placeholder' => 'Keterangan','class' => 'form-control')) !!}
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
      <td style="text-align: left; font-size: 16px">Catatan:</td>
      <br>
      <td style="text-align: left; font-size: 16px">Sks pengajaran sama dengan sks mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel adalah 1/2 kali sks mata kuliah.</td>
      <br>
     
      <td style="text-align: left; font-size: 16px">*  sks manajemen dihitung sbb :</td>
      <br>
      <td style="text-align: left; font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beban kerja manajemen untuk jabatan-jabatan ini adalah sbb.</td>
      <br>
      <td style="text-align: left; font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- rektor/direktur politeknik 12 sks</td>
      <br>
      <td style="text-align: left; font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- pembantu rektor/dekan/ketua sekolah tinggi/direktur akademi 10 sks</td>
      <br>
      <td style="text-align: left; font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ketua lembaga/kepala UPT 8 sks</td>
      <br>
      <td style="text-align: left; font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- pembantu dekan/ketua jurusan/kepala pusat/ketua senat akademik/ketua senat fakultas 6 sks</td>
      <br>
      <td style="text-align: left; font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- sekretaris jurusan/sekretaris pusat/sekretaris senat akademik/sekretaris senat universitas/ sekretaris senat fakultas/ kepala lab. atau studio/kepala balai/ketua PS 4 sks</td>
      <br>
      <td style="text-align: left; font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- sekretaris PS 3 sks</td>
      <br>
      <td style="text-align: left; font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagi PT yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara.</td>
    </tfoot>
      </div>
    </div>
       

<!-- Tambah Data -->
    <div class="modal fade" id="modal-default15">
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
            {!! Form::open(array('route' => 'sdm5.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama Dosen Tetap :</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_sdm5', null, array('placeholder' => 'Nama Dosen Tetap','class' => 'form-control')) !!}  
                </div>
              </div> 
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">sks Pengajaran pada PS Sendiri :</label>
                  <div class="col-sm-10">
                  {!! Form::text('sks_pengajaran_pada_ps_sendiri', null, array('placeholder' => 'sks','class' => 'form-control')) !!}  
                </div>
              </div> 
                <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">sks Pengajaran pada PS Lain PT Sendiri :</label>
                  <div class="col-sm-10">
                  {!! Form::text('sks_pengajaran_pada_ps_lain_pt_sendiri', null, array('placeholder' => 'sks','class' => 'form-control')) !!}  
                </div>
              </div>    
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">sks Pengajaran pada PT Lain :</label>
                  <div class="col-sm-10">
                  {!! Form::text('sks_pengajaran_pada_pt_lain', null, array('placeholder' => 'sks','class' => 'form-control')) !!}  
                </div>
              </div> 
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">sks Penelitian :</label>
                      <div class="col-sm-10">
                     {!! Form::text('sks_penelitian', null, array('placeholder' => 'sks','class' => 'form-control')) !!}
                    </div>
                   </div>   
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">sks Pengabdian kepada Masyarakat :</label>
                      <div class="col-sm-10">
                     {!! Form::text('sks_pengabdian_kepada_masyarakat', null, array('placeholder' => 'sks','class' => 'form-control')) !!}
                    </div>
                   </div>   
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">sks Manajemen PT Sendiri :</label>
                      <div class="col-sm-10">
                     {!! Form::text('sks_manajemen_pt_sendiri', null, array('placeholder' => 'sks','class' => 'form-control')) !!}
                    </div>
                   </div>       
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">sks Manajemen PT Lain :</label>
                      <div class="col-sm-10">
                     {!! Form::text('sks_manajemen_pt_lain', null, array('placeholder' => 'sks','class' => 'form-control')) !!}
                    </div>
                   </div>       
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Keterangan :</label>
                      <div class="col-sm-10">
                     {!! Form::text('keterangan', null, array('placeholder' => 'Keterangan','class' => 'form-control')) !!}
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
  <div class="modal fade" id="modal-exim15" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('sdm5.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Unggah Data Aktivitas Dosen Tetap Sesuai SKS</h3>
          </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                  <label for="file" class="col-sm-2 control-label">Unggah</label>
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
    <div class="modal fade" id="modal15" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('sdm5.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
                      <a href="{{ route('sdm5.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="downloadsdm5" class="btn btn-primary btn-md">
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
