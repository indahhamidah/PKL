<style>
table, th, td {
    border: 1px solid black;
}
</style>

@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/toastr/toastr.min.css')}}">
<section class="content-header">
      <h1 style="text-transform:uppercase">        
        Prasarana pada @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>
    </section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">    
      <div class="box">
          <!-- alert sukses dan eror -->
          
          <!-- tutup -->
		      <!-- <div class="row"> -->
						@if(Auth::User()->id_departemen!=10)
    		    <div class="box-body">
          <!-- Custom Tabs -->
	          <div class="nav-tabs-custom">
	            <ul class="nav nav-tabs">
	              <li class="active"><a href="#tab_1" data-toggle="tab">Ruang Kerja Dosen Tetap</a></li>
	              <li><a href="#tab_2" data-toggle="tab">Data Prasarana</a></li>
	              <li><a href="#tab_3" data-toggle="tab">Prasarana Penunjang</a></li>
	            </ul>
	            <div class="tab-content">
	              <div class="tab-pane active" id="tab_1">
                  <a href="Excel_RK_Dosen_Tetap"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal"> 
                  <i class="fa fa-download"></i> <span>EXCEL</span>
                  </button></a>
                  <a href="download_pdf_rk_dosen_tetap"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal"> 
                  <i class="fa fa-download"></i> <span>PDF</span>
                  </button></a>
                  <br><br>
                  <h4 style="text-align: justify;">5.3.1 Tuliskan data ruang kerja dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h4>
			            <div class="box-body">
                  	<table class="table table-bordered table-hover">
                    <thead>
                        <th>Ruang Kerja Dosen</th>
                        <th>Jumlah Ruang</th>
                        <th>Jumlah Luas (m<sup>2</sup>)</th>
                        @if(Auth::User()->role==9)
                        <th>Aksi</th>
                        @endif
                    </thead>
                    <tbody>
                    @foreach($rk_dosen_tetap as $rk_dosen)
                    <tr>
                    	<td>{{$rk_dosen->ruang_kerja_dosen}}</td>
                    	<td style="text-align: right;">{{$rk_dosen->jumlah_ruang}}</td>
                    	<td style="text-align: right;">{{$rk_dosen->jumlah_luas}}</td>
                      @if(Auth::User()->role==9)
                      <td>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_rk_dosen{{$rk_dosen->id_rk_dosen_tetap}}">
                        <i class="fa fa-pencil"></i> <span>Ubah</span>
                        </button>
                      </td>
                      @endif
                    </tr>
                    <!-- Edit Ruang Kerja Dosen Tetap -->
                  <div class="modal fade" id="edit_rk_dosen{{$rk_dosen->id_rk_dosen_tetap}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Edit Ruang Kerja Dosen Tetap di {{$dept[0]->nama_departemen}}</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box box-info">
                            {!! Form::open(array('route' => ['Prasaranaupdate2', $rk_dosen->id_rk_dosen_tetap],'class'=>'form-horizontal','method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                            <div class="box-body">
                              <div class="form-group">
                                <div class="col-xs-8" style="text-align: right;">
                                  <p><strong>*Jumlah Ruang</strong></p>
                                </div>
                                <div class="col-xs-4" >
                                  <p><strong>*Jumlah Luas (m<sup>2</sup>) </strong></p>
                                </div>
                            </div>
                              
                            <div class="form-group">
                              <label class="col-sm-4 control-label">{{$rk_dosen->ruang_kerja_dosen}}</label>
                                <div class="col-xs-4">
                                  {!! Form::number('jumlah_ruang', $rk_dosen->jumlah_ruang, array('placeholder' => 'Jumlah Ruang','class' => 'form-control', 'min'=>'0', 'required'=>'required')) !!}
                                  </div>
                                  <div>
                                  {!! Form::hidden('id_ruang_kerja', $rk_dosen->id_ruang_kerja, array('placeholder' => '0','class' => 'form-control')) !!}
                                </div>
                                <div class="col-xs-4">
                                  {!! Form::number('jumlah_luas', $rk_dosen->jumlah_luas, array('placeholder' => 'Jenis Prasarana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}
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
                    </div>
                    <!-- /.modal-content -->
                  </div>
                    @endforeach
                    </tbody>
                    <tfoot>
                    	<th>Total</th>
                    	<th style="text-align: right;">{{$jmlh_ruang}}</th>
                    	<th style="text-align: right;">{{$jmlh_luas}}</th>
                      <th></th>
                    </tfoot>
               			</table>
           			  </div>
	              </div>
	              <!-- /.tab-pane -->
	              <div class="tab-pane" id="tab_2">
                  @if(Auth::User()->role==9)
	                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_prasarana">
			            <i class="fa fa-plus"></i> <span>Tambah Prasarana</span>
			            </button>
                  @endif   
                  <a href="Excel_Prasarana_PS"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal">
                  <i class="fa fa-download"></i> <span>EXCEL</span>
                  </button></a>
                  <a href="download_pdf_prasarana_ps"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal">
                  <i class="fa fa-download"></i> <span>PDF</span>
                  </button></a>
                  <br><br>
                  <h4 style="text-align: justify;">5.3.2 Tuliskan data prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. kecuali  ruang dosen) yang dipergunakan PS dalam proses belajar mengajar dengan  mengikuti format tabel berikut:</h4>
			            <div class="box-body">
	              	<table id="example3" class="table table-bordered table-hover">
		                <thead>
		                	<tr>
		                    <th rowspan="2" style="text-align: center;">No</th>
		                    <th rowspan="2" style="text-align: center;">Jenis Prasarana</th>
                        <th rowspan="2" style="text-align: center;">Jumlah Unit</th>
                        <th rowspan="2" style="text-align: center;">Panjang (m<sup>2</sup>)</th>
		                    <th rowspan="2" style="text-align: center;">Lebar (m<sup>2</sup>)</th>
		                    <th rowspan="2" style="text-align: center;">Total Luas (m<sup>2</sup>)</th>
		                    <th colspan="2" style="text-align: center;">Kepemilikan</th>
		                    <th colspan="2" style="text-align: center;">Kondisi</th>
		                    <th rowspan="2" style="text-align: center;">Utilisasi (Jam/Minggu)</th>
                        @if(Auth::User()->role==9)
		                    <th rowspan="2">Aksi</th>
                        @endif
		                    <tr>
		                    	<th style="text-align: center;">SD</th>
		                    	<th style="text-align: center;">SW</th>
		                    	<th style="text-align: center;">Terawat</th>
		                    	<th style="text-align: center;">Tidak Terawat</th>
		                    </tr>
		                  </tr>
		                </thead>
		                <tbody>
                      <?php $no=0; ?>
                      @foreach($prasarana_ps as $prasarana_ps_)
		                	<?php $no++; ?>
                      <tr>
		                		<td>{{$no}}</td>
		                		<td>{{$prasarana_ps_->jenis_prasarana_ps}}</td>
		                		<td>{{$prasarana_ps_->jumlah_unit_prasarana}}</td>
                        <td>{{$prasarana_ps_->panjang}}</td>
                        <td>{{$prasarana_ps_->lebar}}</td>
		                		<td>{{$prasarana_ps_->total_luas}}</td>
                        @foreach($milik as $miliki)
                        @if($prasarana_ps_->id_kepemilikan_pras == $miliki->id_kepemilikan)
		                		<td style="text-align: center;">&#x2714</td>
                        @else
                        <td></td>
                        @endif
                        @endforeach
                        @foreach($kondisi as $konds)
		                		@if($prasarana_ps_->id_kondisi_pras == $konds->id_kondisi)
                        <td style="text-align: center;">&#x2714</td>
                        @else
                        <td></td>
                        @endif
		                		@endforeach
                        <td>{{$prasarana_ps_->utilisasi}}</td>
                        @if(Auth::User()->role==9)
                        <td>
                          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_prasarana_ps{{$prasarana_ps_->id_prasarana_ps}}">
                          <span>Ubah</span>
                          </button>
                          <button type="button" class="btn btn-danger btn-sm" style="margin-right: 10px" data-toggle="modal" data-target="#hapus_prasarana_ps{{$prasarana_ps_->id_prasarana_ps}}">Hapus
                          </button>
                        </td>
                        @endif
		                	</tr>

                      <!-- Edit Data Prasarana -->
                      <div class="modal fade" id="edit_prasarana_ps{{$prasarana_ps_->id_prasarana_ps}}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Edit Prasarana {{$dept[0]->nama_departemen}}</h4>
                              </div>
                              <div class="modal-body">
                                <div class="box box-info">
                                  <!-- form start -->
                                  {!! Form::open(array('route'=>['Prasarana.update', $prasarana_ps_->id_prasarana_ps],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Jenis Prasarana</label>
                                      <div class="col-sm-8">
                                      {!! Form::text('jenis_prasarana_ps', $prasarana_ps_->jenis_prasarana_ps, array('placeholder' => 'Jenis Prasarana','class' => 'form-control', 'required'=>'required')) !!}
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Jumlah Unit</label>
                                      <div class="col-sm-8">
                                      {!! Form::number('jumlah_unit_prasarana', $prasarana_ps_->jumlah_unit_prasarana, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'required'=>'required')) !!}  
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Panjang (m<sup>2</sup>)</label>
                                      <div class="col-sm-8">
                                      {!! Form::number('panjang', $prasarana_ps_->panjang, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'id'=>'panjang2', 'required'=>'required')) !!}  
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Lebar (m<sup>2</sup>)</label>
                                      <div class="col-sm-8">
                                      {!! Form::number('lebar', $prasarana_ps_->lebar, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'id'=>'lebar2', 'required'=>'required')) !!}  
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Total Luas (m<sup>2</sup>)</label>
                                      <div class="col-sm-8">
                                      {!! Form::number('total_luas', $prasarana_ps_->total_luas, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01','id'=>'luas2', 'required'=>'required')) !!}  
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Kepemilikan</label>
                                      <div class="col-sm-8">
                                        <select name="id_kepemilikan_pras" id="id_kepemilikan_pras" class="form-control">
                                          <option value="1" {{$prasarana_ps_->id_kepemilikan_pras == 1 ? 'selected' : '' }}>Milik PT/fakultas/jurusan sendiri</option>
                                          <option value=2 {{$prasarana_ps_->id_kepemilikan_pras == 2 ? 'selected' : '' }}>Sewa/Kontrak/Kerjasama</option>
                                        </select> 
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Kondisi</label>
                                      <div class="col-sm-8">
                                        <select name="id_kondisi_pras" class="form-control">
                                          <option value=1 {{$prasarana_ps_->id_kondisi_pras == 1 ? 'selected' : '' }}>Terawat</option>
                                          <option value=2 {{$prasarana_ps_->id_kondisi_pras == 2 ? 'selected' : '' }}>Tidak Terawat</option>
                                        </select>   
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Utilisasi (Jam/minggu)</label>
                                      <div class="col-sm-8">
                                      {!! Form::number('utilisasi', $prasarana_ps_->utilisasi, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'required'=>'required')) !!}  
                                      </div>
                                    </div><br><br>
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
                     <!-- verifikasi prasarana -->
                    <div class="modal fade" id="hapus_prasarana_ps{{$prasarana_ps_->id_prasarana_ps}}">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
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
                                    {!! Form::open(['method' => 'DELETE','route' => ['Prasarana.destroy', $prasarana_ps_->id_prasarana_ps],'style'=>'display:inline']) !!}
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
                  <p><u>Keterangan</u>: SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama</p>
	           			</div>
	              </div>
	              <!-- /.tab-pane -->
	              <div class="tab-pane" id="tab_3">
                  @if(Auth::User()->role==9)
	                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_pras_penunjang">
                  <i class="fa fa-plus"></i> <span>Tambah Prasarana Penunjang</span>
                  </button>
                  @endif
                  <a href="Excel_Prasarana_Penunjang"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal">
                  <i class="fa fa-download"></i> <span>EXCEL</span>
                  </button></a>
                  <a href="download_pdf_prasarana_penunjang"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal">
                  <i class="fa fa-download"></i> <span>PDF</span>
                  </button></a>
                  <br><br>
                  <h4 style="text-align: justify;">5.3.3 Tuliskan data prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik) dengan mengikuti format tabel berikut:</h4>
                  <div class="box-body">
                    <table id="example4" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th rowspan="2" style="text-align: center;">No</th>
                        <th rowspan="2" style="text-align: center;">Jenis Prasarana Penunjang</th>
                        <th rowspan="2" style="text-align: center;">Jumlah Unit</th>
                        <th rowspan="2" style="text-align: center;">Total Luas (m<sup>2</sup>)</th>
                        <th colspan="2" style="text-align: center;">Kepemilikan</th>
                        <th colspan="2" style="text-align: center;">Kondisi</th>
                        <th rowspan="2" style="text-align: center;">Unit Pengelola</th>
                        @if(Auth::User()->role==9)
                        <th rowspan="2">Aksi</th>
                        @endif
                        <tr>
                          <th style="text-align: center;">SD</th>
                          <th style="text-align: center;">SW</th>
                          <th style="text-align: center;">Terawat</th>
                          <th style="text-align: center;">Tidak Terawat</th>
                        </tr>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $nomor=0; ?>
                      @foreach($penunjang_ps as $pras_penunjang)
                      <?php $nomor++; ?>
                      <tr>
                        <td>{{$nomor}}</td>
                        <td>{{$pras_penunjang->jenis_penunjang_ps}}</td>
                        <td>{{$pras_penunjang->jumlah_unit}}</td>
                        <td>{{$pras_penunjang->total_luas}}</td>
                        @foreach($milik as $miliki)
                        @if($pras_penunjang->id_kepemilikan_penunjang == $miliki->id_kepemilikan)
                        <td style="text-align: center;">&#x2714</td>
                        @else
                        <td></td>
                        @endif
                        @endforeach
                        @foreach($kondisi as $konds)
                        @if($pras_penunjang->id_kondisi_penunjang == $konds->id_kondisi)
                        <td style="text-align: center;">&#x2714</td>
                        @else
                        <td></td>
                        @endif
                        @endforeach
                        <td>{{$pras_penunjang->unit_pengelola}}</td>
                        @if(Auth::User()->role==9)
                        <td>
                          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_pras_penunjang{{$pras_penunjang->id_pras_penunjang}}">
                          <span>Ubah</span>
                          </button>
                          <button type="button" class="btn btn-danger btn-sm" style="margin-right: 10px" data-toggle="modal" data-target="#hapus_pras_penunjang{{$pras_penunjang->id_pras_penunjang}}">Hapus
                          </button>
                        </td>
                        @endif
                      </tr>
                      <!-- Edit Data Prasarana Penunjang -->
                      <div class="modal fade" id="edit_pras_penunjang{{$pras_penunjang->id_pras_penunjang}}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Edit Prasarana Penunjang {{$dept[0]->nama_departemen}}</h4>
                              </div>
                              <div class="modal-body">
                                <div class="box box-info">
                                  <!-- form start -->
                                  {!! Form::open(array('route'=>['Prasaranaa3', $pras_penunjang->id_pras_penunjang], 'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                                  <div class="box-body"> 
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Jenis Prasarana Penunjang</label>
                                      <div class="col-sm-8">
                                      {!! Form::text('jenis_penunjang_ps', $pras_penunjang->jenis_penunjang_ps, array('placeholder' => 'Jenis Prasarana Penunjang','class' => 'form-control', 'required'=>'required')) !!}
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Jumlah Unit</label>
                                      <div class="col-sm-8">
                                      {!! Form::number('jumlah_unit', $pras_penunjang->jumlah_unit, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'required'=>'required')) !!}  
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Total Luas (m<sup>2</sup>)</label>
                                      <div class="col-sm-8">
                                      {!! Form::number('total_luas', $pras_penunjang->total_luas, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Kepemilikan</label>
                                      <div class="col-sm-8">
                                        <select name="id_kepemilikan_penunjang" class="form-control">
                                          <option value="1" {{$pras_penunjang->id_kepemilikan_penunjang == 1 ? 'selected' : '' }}>Milik PT/fakultas/jurusan sendiri</option>
                                          <option value="2" {{$pras_penunjang->id_kepemilikan_penunjang == 2 ? 'selected' : '' }}>Sewa/Kontrak/Kerjasama</option>
                                        </select> 
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Kondisi</label>
                                      <div class="col-sm-8">
                                        <select name="id_kondisi_penunjang" class="form-control">
                                          <option value="1" {{$pras_penunjang->id_kondisi_penunjang == 1 ? 'selected' : '' }}>Terawat</option>
                                          <option value="2" {{$pras_penunjang->id_kondisi_penunjang == 2 ? 'selected' : '' }}>Tidak Terawat</option>
                                        </select>   
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Unit Pengelola</label>
                                      <div class="col-sm-8">
                                      {!! Form::text('unit_pengelola', $pras_penunjang->unit_pengelola, array('placeholder' => 'Unit Pengelola','class' => 'form-control', 'required'=>'required')) !!}  
                                      </div>
                                    </div><br><br>
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
                      <!-- verifikasi prasarana penunjang-->
                    <div class="modal fade" id="hapus_pras_penunjang{{$pras_penunjang->id_pras_penunjang}}">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header">
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
                                    {!! Form::open(['method' => 'DELETE','route' => ['Prasaranaaa.destroy2', $pras_penunjang->id_pras_penunjang],'style'=>'display:inline']) !!}
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
                    <p><u>Keterangan</u>: SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama</p>
                  </div>
	              </div>
	              <!-- /.tab-pane -->
	            </div>
	            <!-- /.tab-content -->
	          </div>
	          <!-- nav-tabs-custom -->
	        </div>
	        @endif
    		<!-- </div> -->
			<!-- </div> -->
		</div>
	</div>
</div>


<!-- Tambah Data Prasarana -->
	<div class="modal fade" id="tambah_prasarana">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Prasarana {{$dept[0]->nama_departemen}}</h4>
   	    	</div>
         	<div class="modal-body">
           	<div class="box box-info">
           		<!-- form start -->
           		{!! Form::open(array('route'=>'Prasarana.store','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
           		<div class="box-body">
               	<div class="form-group">
                  <label class="col-sm-4 control-label">Jenis Prasarana</label>
                  <div class="col-sm-8">
                  {!! Form::text('jenis_prasarana_ps', null, array('placeholder' => 'Jenis Prasarana','class' => 'form-control', 'required'=>'required')) !!}
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-4 control-label">Jumlah Unit</label>
                  <div class="col-sm-8">
                  {!! Form::number('jumlah_unit_prasarana', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'required'=>'required')) !!}  
                	</div>
              	</div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Panjang (m<sup>2</sup>)</label>
                  <div class="col-sm-8">
                  {!! Form::number('panjang', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'id'=>'panjang1', 'required'=>'required')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Lebar (m<sup>2</sup>)</label>
                  <div class="col-sm-8">
                  {!! Form::number('lebar', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'id'=>'lebar1', 'required'=>'required')) !!}  
                  </div>
                </div>
              	<div class="form-group">
                  <label class="col-sm-4 control-label">Total Luas (m<sup>2</sup>)</label>
                  <div class="col-sm-8">
                  {!! Form::number('total_luas', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'readonly', 'id'=>'luas1')) !!}  
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-4 control-label">Kepemilikan</label>
                  <div class="col-sm-8">
                  	<select name="id_kepemilikan_pras" class="form-control">
                      <option value=1>Milik PT/fakultas/jurusan sendiri</option>
                      <option value=2>Sewa/Kontrak/Kerjasama</option>
                    </select> 
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-4 control-label">Kondisi</label>
                  <div class="col-sm-8">
                  	<select name="id_kondisi_pras" class="form-control">
                      <option value=1>Terawat</option>
                      <option value=2>Tidak Terawat</option>
                    </select>   
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-4 control-label">Utilisasi (Jam/minggu)</label>
                  <div class="col-sm-8">
                  {!! Form::number('utilisasi', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'required'=>'required')) !!}  
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
            <!-- /.modal-content -->
         </div>
          <!-- /.modal-dialog -->
    </div>
         <!-- /.modal -->
</div>

<!-- Tambah Data Prasarana Penunjang -->
  <div class="modal fade" id="tambah_pras_penunjang">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Prasarana Penunjang {{$dept[0]->nama_departemen}}</h4>
          </div>
          <div class="modal-body">
            <div class="box box-info">
              <!-- form start -->
              {!! Form::open(array('route'=>'store_2','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Jenis Prasarana Penunjang</label>
                  <div class="col-sm-8">
                  {!! Form::text('jenis_penunjang_ps', null, array('placeholder' => 'Jenis Prasarana Penunjang','class' => 'form-control', 'required'=>'required')) !!}
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Jumlah Unit</label>
                  <div class="col-sm-8">
                  {!! Form::number('jumlah_unit', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'required'=>'required')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Total Luas (m<sup>2</sup>)</label>
                  <div class="col-sm-8">
                  {!! Form::number('total_luas', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Kepemilikan</label>
                  <div class="col-sm-8">
                    <select name="id_kepemilikan_penunjang" class="form-control">
                      <option value=1>Milik PT/fakultas/jurusan sendiri</option>
                      <option value=2>Sewa/Kontrak/Kerjasama</option>
                    </select> 
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Kondisi</label>
                  <div class="col-sm-8">
                    <select name="id_kondisi_penunjang" class="form-control">
                      <option value=1>Terawat</option>
                      <option value=2>Tidak Terawat</option>
                    </select>   
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Unit Pengelola</label>
                  <div class="col-sm-8">
                  {!! Form::text('unit_pengelola', null, array('placeholder' => 'Unit Pengelola','class' => 'form-control', 'required'=>'required')) !!}  
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
            <!-- /.modal-content -->
         </div>
          <!-- /.modal-dialog -->
    </div>
         <!-- /.modal -->
</div>

</section>
<script src="{{asset('Admin/toastr/jquery.min.js')}}"></script>
<script src="{{asset('Admin/toastr/toastr.min.js')}}"></script>
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