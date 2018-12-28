@extends('layouts.app')
@section('content')

    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        PENGGUNAAN DANA @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>
    </section>
    <link rel="stylesheet" href="{{asset('Admin/toastr/toastr.min.css')}}">
<!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
				   <!-- Button trigger modal -->	
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Penggunaan Dana</a></li>
              @if(Auth::User()->id_departemen!=10)
              <li><a href="#tab_2" data-toggle="tab">Dana Untuk Penelitian</a></li>
              <li><a href="#tab_3" data-toggle="tab">Dana Pengabdian Kepada Masyarakat</a></li>
              @endif
              @if(Auth::User()->id_departemen==10)
              <li><a href="#tab_4" data-toggle="tab">Dana Kegiatan Tridarma per-PS</a></li>
              @endif
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                @if(Auth::User()->role==8)
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_penggunaan_dana">
                <i class="fa fa-plus"></i> Tambah Penggunaan Dana
                </button>
                @endif
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal_penggunaan_report">
                <i class="fa fa-file-text"></i> Report
                </button>
                  <div class="col-md-offset-10">
                    <input class="form-control" id="myInput" type="text" placeholder="Cari...">
                  </div>
                  @if(Auth::User()->id_departemen!=10)
                  <h4 style="text-align: justify;">5.2.1 Tuliskan realisasi alokasi dana (termasuk hibah) dalam juta rupiah termasuk gaji,  selama tiga tahun terakhir, pada tabel berikut:</h4>
                  @elseif(Auth::User()->id_departemen==10)
                  <h4 style="text-align: justify;">Tabel 5.2 Penggunaan Dana FMIPA selama tiga tahun terakhir</h4>
                  @endif
                <dir class="box-body">
                  <table id="example5" class="table table-bordered table-hover">
                    <thead>
                      <tr> 
                        <th rowspan="3" style="text-align: center;">No</th>
                        <th rowspan="3" style="text-align: center;">Tahun</th>
                        <th colspan="7" style="text-align: center;">Jenis Penggunaan</th>
                        <th rowspan="3">Total (Juta Rp)</th>
                        @if(Auth::User()->id_departemen==10)
                        <th rowspan="3">Program Studi</th>
                        @endif
                         @if((Auth::User()->id_departemen!=10) && (Auth::User()->role==8))
                        <th rowspan="3">Aksi</th>
                        @endif
                        <tr>
                          <th style="text-align: center;">Pendidikan</th>
                          <th style="text-align: center;">Penelitian</th>
                          <th style="text-align: center;">Pengabdian Kepada Masyarakat</th>
                          <th style="text-align: center;">Investasi Prasarana</th>
                          <th style="text-align: center;">Investasi Sarana</th>
                          <th style="text-align: center;">Investasi SDM</th>
                          <th style="text-align: center;">Lain-lain</th>
                        </tr>
                        <tr>
                          <th style="text-align: center;">(Juta Rp)</th>
                          <th style="text-align: center;">(Juta Rp)</th>
                          <th style="text-align: center;">(Juta Rp)</th>
                          <th style="text-align: center;">(Juta Rp)</th>
                          <th style="text-align: center;">(Juta Rp)</th>
                          <th style="text-align: center;">(Juta Rp)</th>
                          <th style="text-align: center;">(Juta Rp)</th>
                        </tr>
                      </tr>
                    </thead>
                    <tbody id="penggunaan_dana_list" name="penggunaan_dana_list">
                      <?php $nomor=0; ?>
                      @foreach($penggunaan_dana as $dana_pakai)
                      <?php $nomor++; ?>
                      <tr>
                        <td>{{$nomor}}</td>
                        <td>{{$dana_pakai->tahun_penggunaan}}</td>
                        <td>{{number_format($dana_pakai->pendidikan,2)}}</td>
                        <td>{{number_format($dana_pakai->penelitian,2)}}</td>
                        <td>{{number_format($dana_pakai->pengabdian,2)}}</td>
                        <td>{{number_format($dana_pakai->inves_pras,2)}}</td>
                        <td>{{number_format($dana_pakai->inves_sar,2)}}</td>
                        <td>{{number_format($dana_pakai->inves_sdm,2)}}</td>
                        <td>{{number_format($dana_pakai->lain_lain,2)}}</td>
                        <td><strong>{{number_format($dana_pakai->pendidikan+$dana_pakai->penelitian+ $dana_pakai->pengabdian+$dana_pakai->inves_pras + $dana_pakai->inves_sar + $dana_pakai->inves_sdm + $dana_pakai->lain_lain,2)}}</strong></td>
                        @if(Auth::User()->id_departemen==10)
                        <td>{{$dana_pakai->nama_departemen}}</td>
                        @endif
                        @if((Auth::User()->id_departemen!=10) && (Auth::User()->role==8))
                        <td>
                          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_dana_pakai{{$dana_pakai->id_penggunaan_dana}}">
                            <span>Ubah</span>
                          </button>
                          <button type="button" class="btn btn-danger btn-sm" style="margin-right: 10px" data-toggle="modal" data-target="#hapus_dana_pakai{{$dana_pakai->id_penggunaan_dana}}">
                           Hapus
                          </button>
                        </td>
                        @endif
                      </tr>
                      <!-- Ubah Penggunaan Dana -->
                      <div class="modal fade" id="edit_dana_pakai{{$dana_pakai->id_penggunaan_dana}}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Ubah Penggunaan Dana </h4>
                              </div>
                              <div class="modal-body"> 
                                <div class="box box-info">
                                  <!-- form start -->
                                  {!! Form::open(array('route'=>['PenggunaanDana.update', $dana_pakai->id_penggunaan_dana], 'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label class="col-sm-5 control-label">Tanggal Penggunaan</label>
                                      <div class="col-sm-6">
                                      {!! Form::number('tahun_penggunaan', $dana_pakai->tahun_penggunaan, array('placeholder' => '2016','class' => 'form-control', 'min'=>'2016', 'required'=>'required')) !!}
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-5 control-label">Pendidikan (Juta Rp)</label>
                                      <div class="col-xs-6">
                                          {!! Form::number('pendidikan', $dana_pakai->pendidikan, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                                        </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-5 control-label">Penelitian (Juta Rp)</label>
                                      <div class="col-xs-6">
                                          {!! Form::number('penelitian', $dana_pakai->penelitian, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                                        </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-5 control-label">Pengabdian Kepada Masyarakat (Juta Rp)</label>
                                      <div class="col-xs-6">
                                          {!! Form::number('pengabdian', $dana_pakai->pengabdian, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                                        </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-5 control-label">Investasi Prasarana (Juta Rp)</label>
                                      <div class="col-xs-6">
                                          {!! Form::number('inves_pras', $dana_pakai->inves_pras, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                                        </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-5 control-label">Investasi Sarana (Juta Rp)</label>
                                      <div class="col-xs-6">
                                          {!! Form::number('inves_sar', $dana_pakai->inves_sar, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                                        </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-5 control-label">Investasi SDM (Juta Rp)</label>
                                      <div class="col-xs-6">
                                          {!! Form::number('inves_sdm', $dana_pakai->inves_sdm, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                                        </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-5 control-label">Lain-lain (Juta Rp)</label>
                                      <div class="col-xs-6">
                                          {!! Form::number('lain_lain', $dana_pakai->lain_lain, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                                        </div>
                                    </div><br><br>
                                  </div>
                                 <div class="form-group">
                                  <div class="modal-footer">
                                    <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                  </div>
                                 </div>
                                </div>
                                {!! Form::close() !!}   
                                </div>
                                <!-- /.modal-content -->
                             </div>
                              <!-- /.modal-dialog -->
                        </div>
                             <!-- /.modal -->
                    </div>
                    <!-- verifikasi hapus -->
                  <div class="modal fade" id="hapus_dana_pakai{{$dana_pakai->id_penggunaan_dana}}">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hiddem="true"> &times; </span>
                          </button> -->
                          <h3 class="modal-title">Apakah Anda yakin ingin menghapus data ini?</h3>
                        </div>   
                        <div class="modal-body">
                          <div class="box box-info">
                            <div class="box-body">
                              <div class="form-group">
                                <div class="col-md-offset-2">
                                  <button type="button" class="btn btn-default btn-lg" data-dismiss="modal" aria-label="Close">
                                  <span aria-hiddem="true">Tidak </span>
                                  </button>
                                  {!! Form::open(['method' => 'DELETE', 'route' => ['PenggunaanDana.destroy', $dana_pakai->id_penggunaan_dana],'style'=>'display:inline']) !!}
                                  {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-lg']) !!}
                                  {!! Form::close() !!}
                                </div>
                              </div>
                            </div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                      @endforeach
                    </tbody>
                  </table>
                </dir>
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <a href="Excel_Dana_Penelitian"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal"> 
                <i class="fa fa-download"></i> <span>EXCEL</span>
                </button></a>
                <a href="download_pdf_dana_penelitian"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal"> 
                <i class="fa fa-download"></i> <span>PDF</span>
                </button></a>
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal_jumlah_dana">Jumlah Dana</button>
                <div class="col-md-offset-10">
                  <input class="form-control" id="myInput2" type="text" placeholder="Cari...">
                </div>
                <h4 style="text-align: justify;">5.2.2 Dana untuk kegiatan penelitian pada tiga tahun terakhir yang melibatkan dosen yang bidang keahliannya sesuai dengan program studi, dengan mengikuti format tabel berikut</h4>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Judul Penelitian</th>
                      <th>Dosen yang Terlibat</th>
                      <th>Sumber Dana</th>
                      <th>Jenis Dana</th>
                      <th>Jumlah Dana<br>(Juta Rupiah)</th>
                    </tr>
                  </thead>
                  <tbody id="list_dana_teliti" name="list_dana_teliti">
                    <?php $nom=0; ?>
                    @foreach($penelitians as $penelitian)
                    <?php $nom++; ?>
                    <tr>
                      <td>{{$nom}}</td>
                      <td>{{$penelitian->tahun_penelitian}}</td>
                      <td>{{$penelitian->judul_penelitian}}</td>
                      <td>{{$penelitian->nama_peneliti}}</td>
                      <td>{{$penelitian->sumber_danaa}}</td>
                      <td>{{$penelitian->jenis_dana}}</td>
                      <td style="text-align: center;">{{$penelitian->jumlah_dana}}</td>
                    </tr>
                    <!-- Ubah Dana Penelitian -->
                    
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <a href="Excel_Dana_Pengabdian"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal"> 
                <i class="fa fa-download"></i> <span>EXCEL</span>
                </button></a>
                <a href="download_pdf_dana_pengabdian"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal"> 
                <i class="fa fa-download"></i> <span>PDF</span>
                </button></a>
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal_jumlah_dana_peng">Jumlah Dana</button>
                <div class="col-md-offset-10">
                  <input class="form-control" id="myInput3" type="text" placeholder="Cari...">
                </div>
                <table id="example3" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Judul Kegiatan Pelayanan/Pengabdian<br>kepada Masyarakat</th>
                      <th>Sumber Dana</th>
                      <th>Jenis Dana</th>
                      <th>Jumlah Dana (Juta Rupiah)</th>
                    </tr>
                  </thead>
                  <tbody id="list_dana_kegiatan" name="list_dana_kegiatan">
                    <?php $nomr=0; ?>
                    @foreach($pengabdians as $dana_kegiatan)
                    <?php $nomr++; ?>
                    <tr>
                      <td>{{$nomr}}</td>
                      <td>{{$dana_kegiatan->tahun_pengabdian}}</td>
                      <td>{{$dana_kegiatan->judul_pengabdian}}</td>
                      <td>{{$dana_kegiatan->sumber_danaa}}</td>
                      <td>{{$dana_kegiatan->jenis_dana_peng}}</td>
                      <td style="text-align: center;">{{$dana_kegiatan->jumlah_dana_peng}}</td>
                    </tr>
                    @endforeach
                    <!-- Ubah Dana Pengabdian -->
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                <a href="Excel_Dana_Kegiatan_Tridarma"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal">
                <i class="fa fa-download"></i> Excel
                </button></a>
                  <div class="col-md-offset-10">
                    <input class="form-control" id="myInput1" type="text" placeholder="Cari...">
                  </div>
                <h4 style="text-align: justify;">Tabel 5.3 Penggunaan dana untuk penyelenggaraan kegiatan tridarma per program studi</h4>
                <div class="box-body">
                  <table id="example4" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th rowspan="3" style="text-align: center;">No</th>
                        <th rowspan="3" style="text-align: center;">Program Studi (Departemen)</th>
                        <th colspan="3" style="text-align: center;">Jumlah Dana dalam Juta Rupiah</th>
                        <tr>
                          <th style="text-align: center;">TS-2 ({{$tahun_dua_lalu}})</th>
                          <th style="text-align: center;">TS-1 ({{$tahun_satu_lalu}})</th>
                          <th style="text-align: center;">TS ({{$tahun_sekarang}})</th>
                        </tr>
                        <tr>
                          <th style="text-align: center;">Rp</th>
                          <th style="text-align: center;">Rp</th>
                          <th style="text-align: center;">Rp</th>
                        </tr>
                      </tr>
                    </thead>
                    <tbody id="tridarma_list" name="tridarma_list">
                      <?php $nmr=0; ?>
                      @foreach($jumlah as $key1 => $jumlah1)
                      <?php $nmr++; ?>
                      <tr>
                        <td>{{$nmr}}</td>
                        <td>PS/Dep {{$pakai[$key1]}}</td>
                        @foreach($jumlah1 as $key2 => $jumlah2)
                          <td>{{number_format($jumlah1[$key2],2)}}</td>
                        @endforeach
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="2" style="text-align: center;">Total</th>
                        <th>{{number_format($totaal[0],2)}}</th>
                        <th>{{number_format($totaal[1],2)}}</th>
                        <th>{{number_format($totaal[2],2)}}</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
        </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

<!-- Tambah Penggunaan Dana -->
  <div class="modal fade" id="tambah_penggunaan_dana">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Penggunaan Dana </h4>
          </div>
          <div class="modal-body"> 
            <div class="box box-info">
              <!-- form start -->
              {!! Form::open(array('route'=>'PenggunaanDana.store', 'class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-5 control-label">Tanggal Penggunaan</label>
                  <div class="col-sm-6">
                  {!! Form::number('tahun_penggunaan', null, array('placeholder' => '2016','class' => 'form-control', 'min'=>'2016', 'required'=>'required')) !!}
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Pendidikan (Juta Rp)</label>
                  <div class="col-xs-6">
                      {!! Form::number('pendidikan', null, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Penelitian (Juta Rp)</label>
                  <div class="col-xs-6">
                      {!! Form::number('penelitian', null, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Pengabdian Kepada Masyarakat (Juta Rp)</label>
                  <div class="col-xs-6">
                      {!! Form::number('pengabdian', null, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Investasi Prasarana (Juta Rp)</label>
                  <div class="col-xs-6">
                      {!! Form::number('inves_pras', null, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Investasi Sarana (Juta Rp)</label>
                  <div class="col-xs-6">
                      {!! Form::number('inves_sar', null, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Investasi SDM (Juta Rp)</label>
                  <div class="col-xs-6">
                      {!! Form::number('inves_sdm', null, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Lain-lain (Juta Rp)</label>
                  <div class="col-xs-6">
                      {!! Form::number('lain_lain', null, array('placeholder' => 'Jumlah Penggunaan Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
                    </div>
                </div>
              </div>
             <div class="form-group">
              <div class="modal-footer">
                <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
             </div>
            </div>
            {!! Form::close() !!}   
            </div>
            <!-- /.modal-content -->
         </div>
          <!-- /.modal-dialog -->
    </div>
         <!-- /.modal -->
</div>

<!-- Tambah Dana Penelitian -->
  <div class="modal fade" id="tambah_dana_penelitian">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Dana Untuk Penelitian </h4>
          </div>
          <div class="modal-body"> 
            <div class="box box-info">
              <!-- form start -->
              {!! Form::open(array('route'=>'store_dana_penelitian', 'class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal Penggunaan</label>
                  <div class="col-sm-8">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::date('tahun_dana_penelitian', null, array('placeholder' => 'YYYY-MM-DD','class' => 'form-control', 'required'=>'required')) !!}
                </div>   
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Judul Penelitian</label>
                  <div class="col-sm-8">
                  {!! Form::text('judul_penelitian',  null,array('placeholder' => 'Judul Penelitian','class' => 'form-control', 'rows'=>'2')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nama Dosen yang Terlibat</label>
                  <div class="col-sm-8">
                  {!! Form::text('nama_dosen_terlibat_',  null,array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Sumber Dana</label>
                  <div class="col-sm-8">
                  {!! Form::text('sumber_dana_',  null,array('placeholder' => 'Sumber Dana','class' => 'form-control')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Jenis Dana</label>
                  <div class="col-sm-8">
                  {!! Form::text('jenis_dana',  null,array('placeholder' => 'Jenis Dana','class' => 'form-control')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Jumlah Dana (Juta Rupiah)</label>
                  <div class="col-sm-8">
                  {!! Form::number('jumlah_dana',  null,array('placeholder' => '0','class' => 'form-control', 'min'=>'0')) !!}  
                  </div>
                </div>
              </div>
             <div class="form-group">
              <div class="modal-footer">
                <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
             </div>
            </div>
            {!! Form::close() !!}   
            </div>
            <!-- /.modal-content -->
         </div>
          <!-- /.modal-dialog -->
    </div>
         <!-- /.modal -->
</div>
<!-- Tambah Dana Pengabdian -->
  <div class="modal fade" id="tambah_dana_pengabdian">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Dana Dari/Untuk Pelayanan/Pengabdian</h4>
          </div>
          <div class="modal-body"> 
            <div class="box box-info">
              <!-- form start -->
              {!! Form::open(array('route'=>'store_dana_pengabdian', 'class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Tanggal Penggunaan</label>
                  <div class="col-sm-8">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::date('tahun_pgb_dana', null, array('placeholder' => 'YYYY-MM-DD','class' => 'form-control')) !!}
                </div>   
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Judul Penelitian</label>
                  <div class="col-sm-8">
                  {!! Form::text('judul_kegiatan',  null,array('placeholder' => 'Judul Kegiatan','class' => 'form-control', 'rows'=>'2')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nama Dosen yang Terlibat</label>
                  <div class="col-sm-8">
                  {!! Form::text('dosen_terlibat',  null,array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Sumber Dana</label>
                  <div class="col-sm-8">
                  {!! Form::text('sumber_dana',  null,array('placeholder' => 'Sumber Dana','class' => 'form-control')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Jenis Dana</label>
                  <div class="col-sm-8">
                  {!! Form::text('jenis_danaa',  null,array('placeholder' => 'Jenis Dana','class' => 'form-control')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Jumlah Dana (Juta Rupiah)</label>
                  <div class="col-sm-8">
                  {!! Form::number('jumlah_dana',  null,array('placeholder' => '0','class' => 'form-control', 'min'=>'0')) !!}  
                  </div>
                </div>
              </div>
             <div class="form-group">
              <div class="modal-footer">
                <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
             </div>
            </div>
            {!! Form::close() !!}   
            </div>
            <!-- /.modal-content -->
         </div>
          <!-- /.modal-dialog -->
    </div>
         <!-- /.modal -->
</div>

<!-- jumlah dana penelitian -->
<div class="modal fade" id="modal_jumlah_dana" tabindex="1" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hiddem="true"> &times; </span>
        </button>
        <h3 class="modal-title">Jumlah Dana untuk Penelitian di {{$dept[0]->nama_departemen}}</h3>
      </div>   
      <div class="modal-body">
        <div class="box box-info">
          <div class="box-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Tahun</th>
                  <th style="text-align: center;">Jumlah Dana (Juta Rp)</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomorr=0; ?>
                @foreach($jumlah_uang_penelitian as $uang_penelitian)
                <?php $nomorr++; ?>
                <tr>
                  <td style="text-align: center;">{{$nomorr}}</td>
                  <td style="text-align: center;">{{$uang_penelitian->year}}</td>
                  <td style="text-align: center;">{{$uang_penelitian->uang_penelitian}}</td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2" style="text-align: center;">Total</th>
                  <th style="text-align: center;">{{$total_uang_penelitian}}</th>
                </tr>
              </tfoot>
            </table> 
          </div>
        </div> 
        <div class="form-group">
           <div class="modal-footer">
           </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jumlah dana pengabdian -->
<div class="modal fade" id="modal_jumlah_dana_peng" tabindex="1" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hiddem="true"> &times; </span>
        </button>
        <h3 class="modal-title">Jumlah Dana untuk Pengabdian di {{$dept[0]->nama_departemen}}</h3>
      </div>   
      <div class="modal-body">
        <div class="box box-info">
          <div class="box-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Tahun</th>
                  <th style="text-align: center;">Jumlah Dana (Juta Rp)</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomorr=0; ?>
                @foreach($jumlah_uang_pengabdian as $uang_pengabdian)
                <?php $nomorr++; ?>
                <tr>
                  <td style="text-align: center;">{{$nomorr}}</td>
                  <td style="text-align: center;">{{$uang_pengabdian->tahun}}</td>
                  <td style="text-align: center;">{{$uang_pengabdian->dana_peng}}</td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2" style="text-align: center;">Total</th>
                  <th style="text-align: center;">{{$total_uang_pengabdian}}</th>
                </tr>
              </tfoot>
            </table> 
          </div>
        </div> 
        <div class="form-group">
           <div class="modal-footer">
           </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Report Penggunaan Dana -->
<div class="modal fade" id="modal_penggunaan_report" tabindex="1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hiddem="true"> &times; </span>
        </button>
        <h3 class="modal-title">Penggunaan Dana di {{$dept[0]->nama_departemen}} selama 3 tahun terakhir</h3>
      </div>   
      <div class="modal-body">
        <div class="box box-info">
          <div class="box-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th rowspan="3" style="text-align: center;">No</th>
                  <th rowspan="3" style="text-align: center;">Jenis Penggunaan</th>
                  <th colspan="6" style="text-align: center;">Jumlah Dana dalam Juta Rupiah dan Persentase</th>
                  <tr>
                    <th colspan="2" style="text-align: center;">TS-2 ({{$tahun_dua_lalu}})</th>
                    <th colspan="2" style="text-align: center;">TS-1 ({{$tahun_satu_lalu}})</th>
                    <th colspan="2" style="text-align: center;">TS ({{$tahun_sekarang}})</th>
                  </tr>
                  <tr>
                    <th style="text-align: center;">Rp</th>
                    <th style="text-align: center;">%</th>
                    <th style="text-align: center;">Rp</th>
                    <th style="text-align: center;">%</th>
                    <th style="text-align: center;">Rp</th>
                    <th style="text-align: center;">%</th>
                  </tr>
                  <tr>
                    <th style="text-align: center;">(1)</th>
                    <th style="text-align: center;">(2)</th>
                    <th style="text-align: center;">(3)</th>
                    <th style="text-align: center;">(4)</th>
                    <th style="text-align: center;">(5)</th>
                    <th style="text-align: center;">(6)</th>
                    <th style="text-align: center;">(7)</th>
                    <th style="text-align: center;">(8)</th>
                  </tr>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="text-align: center;">1</td>
                  <td>Pendidikan</td>
                  @foreach($total_ts2 as $total)
                  <td style="text-align: center;">{{ number_format($total->jum_pend3,2) }}</td>
                  <td style="text-align: center;">{{ number_format($total->persen_pend,2) }}</td>
                  @endforeach
                </tr>
                <tr>
                  <td style="text-align: center;">2</td>
                  <td>Penelitian</td>
                  @foreach($total_ts2 as $total)
                  <td style="text-align: center;">{{number_format($total->jum_pen3,2)}}</td>
                  <td style="text-align: center;">{{ number_format($total->persen_pen,2) }}</td>
                  @endforeach  
                </tr>
                <tr>
                  <td style="text-align: center;">3</td>
                  <td>Pengabdian Kepada Masyarakat</td>
                  @foreach($total_ts2 as $total)
                  <td style="text-align: center;">{{number_format($total->jum_peng3,2)}}</td>
                  <td style="text-align: center;">{{ number_format($total->persen_peng,2) }}</td>
                  @endforeach
                </tr>
                <tr>
                  <td style="text-align: center;">4</td>
                  <td>Investasi Prasarana</td>
                  @foreach($total_ts2 as $total)
                  <td style="text-align: center;">{{number_format($total->jum_pras3,2)}}</td>
                  <td style="text-align: center;">{{number_format($total->persen_pras,2)}}</td>
                  @endforeach
                </tr>
                <tr>
                  <td style="text-align: center;">5</td>
                  <td>Investasi Sarana</td>
                  @foreach($total_ts2 as $total)
                  <td style="text-align: center;">{{number_format($total->jum_sar3,2)}}</td>
                  <td style="text-align: center;">{{number_format($total->persen_sar,2)}}</td>
                  @endforeach
                </tr>
                <tr>
                  <td style="text-align: center;">6</td>
                  <td>Investasi SDM</td>
                  @foreach($total_ts2 as $total)
                  <td style="text-align: center;">{{number_format($total->jum_sdm3,2)}}</td>
                  <td style="text-align: center;">{{number_format($total->persen_sdm,2)}}</td>
                  @endforeach
                </tr>
                <tr>
                  <td style="text-align: center;">7</td>
                  <td>Lain-lain</td>
                  @foreach($total_ts2 as $total)
                  <td style="text-align: center;">{{number_format($total->jum_lain3,2)}}</td>
                  <td style="text-align: center;">{{number_format($total->persen_lain,2)}}</td>
                  @endforeach
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2" style="text-align: center;">Total</th>
                  @foreach($total_ts2 as $total)
                  <th style="text-align: center;">{{ number_format($total->total,2)}}</th>
                  <th style="text-align: center;">{{number_format($total->persen_pend + $total->persen_pen + $total->persen_peng + $total->persen_pras + $total->persen_sar + $total->persen_sdm + $total->persen_lain,2)}}</th>
                  @endforeach
                </tr>
              </tfoot>
            </table>
          </div>
        </div> 
        <div class="form-group">
           <div class="modal-footer">
            <a href="Excel_Penggunaan_Dana_PS"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal"><i class="fa fa-download"></i> <span>EXCEL</span></button></a>
            <a href="download_pdf_penggunaan_dana_ps"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal"><i class="fa fa-download"></i> <span>PDF</span></button></a>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<script src="{{asset('Admin/toastr/jquery.min.js')}}"></script>
<script src="{{asset('Admin/toastr/toastr.min.js')}}"></script>
<script type="text/javascript">
document.getElementById("number").onblur =function (){    
    this.value = parseFloat(this.value.replace(/,/g, ""))
                    .toFixed(2)
                    .toString()
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    
    // document.getElementById("display").value = this.value.replace(/,/g, "")
    
}
</script>
<script>
  @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

  
    switch(type){
      case 'info':
             toastr.info("{{ Session::get('message') }}");
             break;
          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;
          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;
          case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
@endsection