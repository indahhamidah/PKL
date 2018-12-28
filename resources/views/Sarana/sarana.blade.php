<style>
table, th, td {
	border: 1px solid black;
}
</style>

@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/toastr/toastr.min.css')}}">
<section class="content">
  <div class="row">
		<div class="col-xs-12">    
	  	<div class="box">
				<div class="box-header">
					<h2 class="page-header" style="text-transform:uppercase">Sarana Pelaksanaan Akademik pada @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif</h2>
			  	<div class="row">
						@if(Auth::User()->id_departemen!=10)
						<div class="box-body">
				  <!-- Custom Tabs -->
							<div class="nav-tabs-custom">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab_1" data-toggle="tab">Pustaka di Ruang Baca Departemen</a></li>
									<li><a href="#tab_2" data-toggle="tab">Daftar Jurnal/Prosiding Seminar</a></li>
									<li><a href="#tab_3" data-toggle="tab">Sumber Pustaka di Lembaga Lain</a></li>
									<li><a href="#tab_4" data-toggle="tab">Peralatan Utama di LAB</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab_1">
										@if(Auth::User()->role==9)
										<button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#edit_pustaka_ruang_baca">
										<i class="fa fa-pencil"></i> <span>Edit Pustaka</span>
										</button>
										@endif
										<a href="Excel_Pustaka"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal"> 
		                <i class="fa fa-download"></i> <span>EXCEL</span>
		                </button></a>
		                <a href="download_pdf_pustaka_baca"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal"> 
		                <i class="fa fa-download"></i> <span>PDF</span>
		                </button></a>
           					<br><br>
           					<h4 style="text-align: justify;">5.4.1 Pustaka (buku teks, karya ilmiah, dan jurnal; termasuk juga dalam bentuk CD-ROM dan media lainnya)</h4>
           					<h4>Tuliskan rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS dengan mengikuti format tabel 1 berikut:
										</h4>
										<div class="box-body">
											<table id="example2" class="table table-bordered table-hover">
												<thead>
													<th>No</th>
													<th>Jenis Pustaka</th>
													<th>Jumlah Judul</th>
													<th>Jumlah <i>Copy</i></th>
												</thead>
												<tbody>
													<?php $nomor=0; ?>
														@foreach($pustaka as $pustaka_baca)
														<?php $nomor++; ?>
													<tr>
														<td>{{$nomor}}</td>
														<td>{{$pustaka_baca->jenis_pustaka}}</td>
														<td style="text-align: right;">{{$pustaka_baca->jumlah_judul}}</td>
														<td style="text-align: right;">{{$pustaka_baca->jumlah_copy}}</td>
													</tr>
													  @endforeach
												</tbody>
												<tfoot>
													<th colspan="2">Total</th>
													<th style="text-align: right;">{{$jum1}}</th>
													<th style="text-align: right;">{{$jum2}}</th>
												</tfoot>
											</table>
										</div>
								</div>
			  <!-- /.tab-pane -->
				<div class="tab-pane" id="tab_2">
					@if(Auth::User()->role==9)
					<button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_jp_seminar">
					<i class="fa fa-plus"></i> <span>Tambah Jurnal/Prosiding Seminar</span>
					</button>
					@endif
					<a href="Excel_Jurnal_Prosiding_Seminar"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal"> 
          <i class="fa fa-download"></i> <span>EXCEL</span>
          </button></a>
		      <a href="download_pdf_jurnal_prosiding"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal"> 
    			<i class="fa fa-download"></i> <span>PDF</span>
          </button></a>
          <br><br>
          <h4 style="text-align: justify;">Isikan jurnal/prosiding seminar yang tersedia/yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir dengan mengikuti format tabel 2 berikut</h4>
					<table id="example3" class="table table-bordered table-hover">
						<thead>
						  <tr>
							<th>No</th>
							<th>Jenis</th>
							<th>Nama Jurnal</th>
							<th>Rincian Nomor</th>
							<th>Tahun</th>
							<th>Penerbit</th>
							<th>Jumlah</th>
							@if(Auth::User()->role==9)
							<th>Aksi</th>
							@endif
						  </tr>
						</thead>
						<tbody>
							<?php $numb=0; ?>
							@foreach($jp_seminar as $jp_seminar_)
							<?php $numb++; ?>
							<tr>
								<td>{{$numb}}</td>
								<td>{{$jp_seminar_->jenis_jp_seminar}}</td>
								<td>{{$jp_seminar_->nama_jurnal}}</td>
								<td>{{$jp_seminar_->rinci_no}}</td>
								<td>{{$jp_seminar_->rinci_tahun}}</td>
								<td>{{$jp_seminar_->penerbit}}</td>
								<td>{{$jp_seminar_->jumlah}}</td>
								@if(Auth::User()->role==9)
								<td>
									<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_jp_seminar{{$jp_seminar_->id_jp_seminar}}">
									<span>Ubah</span>
									</button>
									<button type="button" class="btn btn-danger btn-sm" style="margin-right: 10px" data-toggle="modal" data-target="#hapus_jp{{$jp_seminar_->id_jp_seminar}}">
                  Hapus
                  </button>
								</td>
								@endif
							</tr>
						<!-- Edit Daftar Jurnal/Prosiding Seminar -->
							<div class="modal fade" id="edit_jp_seminar{{$jp_seminar_->id_jp_seminar}}">
								<div class="modal-dialog">
								  <div class="modal-content">
										<div class="modal-header">
										  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Edit Jurnal/Prosiding Seminar {{$dept[0]->nama_departemen}}</h4>
										</div>
										<div class="modal-body">
											<div class="box box-info">
											<!-- form start -->
												{!! Form::open(array('route' =>['Saranaa', $jp_seminar_->id_jp_seminar],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
												<div class="box-body">
													<div class="form-group">
													  <label class="col-sm-4 control-label">Jenis</label>
													  <div class="col-sm-8">
														<select name="id_jenis_jp" class="form-control">
														  <option value=1 {{$jp_seminar_->id_jenis_jp == 1 ? 'selected' : '' }}>Jurnal Terakreditasi DIKTI</option>
														  <option value=2 {{$jp_seminar_->id_jenis_jp == 2 ? 'selected' : '' }}>Jurnal Internasional</option>
														  <option value=3 {{$jp_seminar_->id_jenis_jp == 3 ? 'selected' : '' }}>Jurnal Nasional</option>
														</select>
														</div>
													</div><br><br>
													<div class="form-group">
													  <label class="col-sm-4 control-label">Nama Jurnal</label>
													  <div class="col-sm-8">
															<input type="text" name="nama_jurnal" class="form-control" value="{{$jp_seminar_->nama_jurnal}}" required="required">
														</div><br><br>
													</div>
													<div class="form-group">
													  <label class="col-sm-4 control-label">Rinci no</label>
													  <div class="col-sm-8">
													 		<input type="text" name="rinci_no" class="form-control" value="{{$jp_seminar_->rinci_no}}" required="required">
														</div>
													</div><br><br><br>
													<div class="form-group">
													  <label class="col-sm-4 control-label">Tahun</label>
													  <div class="col-sm-8">
														  <input type="number" name="rinci_tahun" class="form-control" value="{{$jp_seminar_->rinci_tahun}}" min="2016" required="required">
														</div>
													</div><br><br>
													<div class="form-group">
													  <label class="col-sm-4 control-label">Penerbit</label>
													  <div class="col-sm-8">
															<input type="text" name="penerbit" class="form-control" value="{{$jp_seminar_->penerbit}}" required="required">  
														</div>
													</div><br><br>
													<div class="form-group">
													  <label class="col-sm-4 control-label">Jumlah</label>
													  <div class="col-sm-8">
															<input type="number" name="jumlah" class="form-control" value="{{$jp_seminar_->jumlah}}" min="0" required="required">  
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
								 <!-- verifikasi hapus jp seminar-->
                  <div class="modal fade" id="hapus_jp{{$jp_seminar_->id_jp_seminar}}">
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
                                  {!! Form::open(['method' => 'DELETE','route' => ['Sarana.destroy2', $jp_seminar_->id_jp_seminar],'style'=>'display:inline']) !!}
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
				</div>
			  <!-- /.tab-pane -->
				<div class="tab-pane" id="tab_3">
					@if(Auth::User()->role==9)
					<button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_sumber_pustaka">
					<i class="fa fa-plus"></i> <span>Tambah Sumber Pustaka</span>
					</button>
					@endif
					<a href="Excel_Sumber_Pustaka_Lain"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal">
					<i class="fa fa-download"></i> <span>EXCEL</span>
					</button></a>
					<a href="download_pdf_sumber_pustaka_lain"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#">
					<i class="fa fa-download"></i> <span>PDF</span>
					</button></a>
					<br><br>
					<h4 style="text-align: justify;">5.4.2 Sebutkan sumber-sumber pustaka di lembaga lain (lembaga perpustakaan/ sumber dari internet beserta  alamat website) yang biasa diakses/dimanfaatkan oleh dosen dan mahasiswa program studi ini.</h4>
					<div class="box-body">
						<table id="example5" class="table table-bordered table-hover">
						<thead>
						  <tr>
								<th>No</th>
								<th>Sumber Pustaka</th>
								@if(Auth::User()->role==9)
								<th>Aksi</th>
								@endif
						  </tr>
						</thead>
						<tbody>
						<?php $no=0; ?>
						@foreach($sumber_pustaka_lain as $sumber_lain)
						<?php $no++; ?>
						<tr>
							<td>{{$no}}</td>
							<td>{{$sumber_lain->nama_sumber_pustaka_lain}}</td>
							@if(Auth::User()->role==9)
							<td>
								<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_sumber_pustaka{{$sumber_lain->id_sumber_pustaka_lain}}">
								<span>Ubah</span>
								</button>
								<button type="button" class="btn btn-danger btn-sm" style="margin-right: 10px" data-toggle="modal" data-target="#hapus_sumber_lain{{$sumber_lain->id_sumber_pustaka_lain}}">
                  Hapus
                </button>
							</td>
							@endif
						</tr>
						<!-- Edit Sumber Pustaka lain -->
						<div class="modal fade" id="edit_sumber_pustaka{{$sumber_lain->id_sumber_pustaka_lain}}">
							<div class="modal-dialog">
							  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Edit Sumber Pustaka Lain {{$dept[0]->nama_departemen}}</h4>
									</div>
									<div class="modal-body">
										<div class="box box-info">
										<!-- form start -->
										{!! Form::open(array('route' => ['Sarana.update', $sumber_lain->id_sumber_pustaka_lain],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
											<div class="box-body">
												<div class="form-group">
												  <label class="col-sm-4 control-label">Sumber Pustaka Lain</label>
													  <div class="col-sm-8">
													  {!! Form::text('nama_sumber_pustaka_lain', $sumber_lain->nama_sumber_pustaka_lain, array('placeholder' => 'Nama','class' => 'form-control', 'required'=>'required')) !!}  
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
					<!-- verifikasi hapus sumber lain-->
            <div class="modal fade" id="hapus_sumber_lain{{$sumber_lain->id_sumber_pustaka_lain}}">
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
                              {!! Form::open(['method' => 'DELETE','route' => ['Sarana.destroy', $sumber_lain->id_sumber_pustaka_lain],'style'=>'display:inline']) !!}
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
			</div>
		</div>
	  <!-- /.tab-pane -->
		<div class="tab-pane" id="tab_4">
			@if(Auth::User()->role==9)
			<button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_alat_lab">
			<i class="fa fa-plus"></i> <span>Tambah Peralatan Utama</span>
			</button>
			@endif
			<a href="Excel_Alat_Utama_Lab"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal">
			<i class="fa fa-download"></i> <span>EXCEL</span>
			</button></a>
			<a href="download_pdf_alat_lab"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#">
			<i class="fa fa-download"></i> <span>PDF</span>
			</button></a>
			<br><br>
			<h4 style="text-align: justify;">5.4.3 Tuliskan peralatan utama yang digunakan di laboratorium (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/balai kesehatan, green house, lahan untuk pertanian, dan sejenisnya) yang dipergunakan dalam proses pembelajaran di jurusan/fakultas dengan  mengikuti format tabel berikut:</h4>
			<div class="box-body">
				<table id="example4" class="table table-bordered table-hover">
					<thead>
					  <tr>
							<th rowspan="2" style="text-align: center;">No</th>
							<th rowspan="2" style="text-align: center;">Nama Laboratorium</th>
							<th rowspan="2" style="text-align: center;">Jenis Peralatan Utama</th>
							<th rowspan="2" style="text-align: center;">Jumlah Unit</th>
							<th rowspan="2" style="text-align: center;">Harga Satuan (Juta Rp)</th>
							<th rowspan="2" style="text-align: center;">Jumlah Harga (Juta Rp)</th>
							<th rowspan="2" style="text-align: center;">Tanggal Pembelian/<br>Pengadaan</th>
							<th colspan="2" style="text-align: center;">Kepemilikan</th>
							<th colspan="2" style="text-align: center;">Kondisi</th>
							<th rowspan="2" style="text-align: center;">Rata-rata Waktu <br>Penggunaan (jam/minggu)</th>
							@if(Auth::User()->role==9)
							<th rowspan="2" style="text-align: center;">Aksi</th>
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
					  @foreach($alat_lab as $alat_utama)
							<?php $no++; ?>
					  <tr>
							<td>{{$no}}</td>
							<td>{{$alat_utama->nama_lab}}</td>
							<td>{{$alat_utama->jenis_alat_utama}}</td>
							<td>{{$alat_utama->jumlah_unit_alat}}</td>
							<td>{{$alat_utama->harga_satuan}}</td>
							<td>{{$alat_utama->jumlah_harga}}</td>
							<td>{{$alat_utama->tanggal_beli}}</td>
								@foreach($milik as $miliki)
								@if($alat_utama->id_kepemilikan_alat == $miliki->id_kepemilikan)
							<td style="text-align: center;">&#x2714</td>
								@else
							<td></td>
								@endif
								@endforeach
								@foreach($kondisi as $konds)
								@if($alat_utama->id_kondisi_alat == $konds->id_kondisi)
							<td style="text-align: center;">&#x2714</td>
								@else
							<td></td>
								@endif
								@endforeach
							<td>{{$alat_utama->rata_waktu}}</td>
							@if(Auth::User()->role==9)
							<td>
						  	<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_alat{{$alat_utama->id_alat_utama_lab}}">
						  	<span>Ubah</span>
						  	</button>
						  	<button type="button" class="btn btn-danger btn-sm" style="margin-right: 10px" data-toggle="modal" data-target="#hapus_alat_lab{{$alat_utama->id_alat_utama_lab}}">
                  Hapus
                </button>
							</td>
							@endif
						</tr>
							<!-- Edit Peralatan LAB -->
						<div class="modal fade" id="edit_alat{{$alat_utama->id_alat_utama_lab}}">
							<div class="modal-dialog">
							  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Edit Peralatan Utama di Laboratorium {{$dept[0]->nama_departemen}}</h4>
									</div>
									<div class="modal-body">
										<div class="box box-info">
										<!-- form start -->
										{!! Form::open(array('route'=>['Saranaa_', $alat_utama->id_alat_utama_lab],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
											<div class="box-body">
												<div class="form-group">
												  <label class="col-sm-4 control-label">Nama Laboratorium</label>
												  <div class="col-sm-8">
												  {!! Form::text('nama_lab', $alat_utama->nama_lab, array('placeholder' => 'Nama Lab','class' => 'form-control', 'required'=>'required')) !!}
													</div>
												</div><br><br>
												<div class="form-group">
												  <label class="col-sm-4 control-label">Jenis Peralatan Utama</label>
												  <div class="col-sm-8">
												  {!! Form::text('jenis_alat_utama', $alat_utama->jenis_alat_utama, array('placeholder' => 'Jenis Alat','class' => 'form-control', 'required'=>'required')) !!}  
													</div>
												</div><br><br>
												<div class="form-group">
												  <label class="col-sm-4 control-label">Jumlah Unit</label>
												  <div class="col-sm-8">
												  {!! Form::number('jumlah_unit_alat', $alat_utama->jumlah_unit_alat, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'id'=>'jumlah3', 'required'=>'required')) !!}  
													</div>
												</div><br><br>
												<div class="form-group">
										  		<label class="col-sm-4 control-label">Harga Satuan (Juta Rp)</label>
										  		<div class="col-sm-8">
										  		{!! Form::number('harga_satuan', $alat_utama->harga_satuan, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'id'=>'harga_satuan3', 'required'=>'required')) !!}  
													</div>
												</div><br><br>
												<div class="form-group">
										  		<label class="col-sm-4 control-label">Jumlah Harga (Juta Rp)</label>
										  		<div class="col-sm-8">
										  		{!! Form::number('jumlah_harga', $alat_utama->jumlah_harga, array('placeholder' => '0','class' => 'form-control', 'readonly', 'id'=>'jmlh3', 'required'=>'required')) !!}  
													</div>
												</div><br><br>
												<div class="form-group">
										  		<label class="col-sm-4 control-label">Tanggal Pembelian / Pengadaan</label>
										  		<div class="col-sm-8">
										  		{!! Form::date('tanggal_beli', $alat_utama->tanggal_beli, array('placeholder' => '0','class' => 'form-control', 'required'=>'required')) !!}  
													</div>
												</div><br><br>
												<div class="form-group">
												  <label class="col-sm-4 control-label">Kepemilikan</label>
													  <div class="col-sm-8">
															<select name="id_kepemilikan_alat" class="form-control">
															  <option value=1 {{$alat_utama->id_kepemilikan_alat == 1 ? 'selected' : '' }}>Milik PT/fakultas/jurusan sendiri</option>
															  <option value=2 {{$alat_utama->id_kepemilikan_alat == 2 ? 'selected' : '' }}>Sewa/Kontrak/Kerjasama</option>
															</select> 
														</div>
												</div><br><br>
												<div class="form-group">
												  <label class="col-sm-4 control-label">Kondisi</label>
													  <div class="col-sm-8">
															<select name="id_kondisi_alat" class="form-control">
															  <option value=1 {{$alat_utama->id_kondisi_alat == 1 ? 'selected' : '' }}>Terawat</option>
															  <option value=2 {{$alat_utama->id_kondisi_alat == 2 ? 'selected' : '' }}>Tidak Terawat</option>
															</select>   
														</div>
												</div><br><br>
												<div class="form-group">
												  <label class="col-sm-4 control-label">Rata-rata waktu penggunaan (Jam/minggu)</label>
													  <div class="col-sm-8">
													  {!! Form::number('rata_waktu', $alat_utama->rata_waktu, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'required'=>'required')) !!}  
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
						<!-- verifikasi hapus alat lab-->
            <div class="modal fade" id="hapus_alat_lab{{$alat_utama->id_alat_utama_lab}}">
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
                              {!! Form::open(['method' => 'DELETE', 'route' => ['Saranaa.destroy3', $alat_utama->id_alat_utama_lab],'style'=>'display:inline']) !!}
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
				<p><u>Keterangan:</u> SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama</p>
			</div>
		</div>
	</div>
	<!-- /.tab-content -->
</div>
  <!-- nav-tabs-custom -->
</div>
			@endif
</div>
</div>
</div>
</div>
</div>

<!-- Tambah Sumber Pustaka Lain -->
<div class="modal fade" id="tambah_sumber_pustaka">
	<div class="modal-dialog">
	  <div class="modal-content">
			<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Tambah Sumber Pustaka Lain {{$dept[0]->nama_departemen}}</h4>
			</div>
			<div class="modal-body">
				<div class="box box-info">
				<!-- form start -->
				{!! Form::open(array('route' => 'Sarana.store','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
					<div class="box-body">
						<div class="form-group">
				  		<label class="col-sm-4 control-label">Sumber Pustaka Lain</label>
				  		<div class="col-sm-8">
				  		{!! Form::text('nama_sumber_pustaka_lain', null, array('placeholder' => 'Nama','class' => 'form-control', 'required'=>'required')) !!}  
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

<!-- Tambah Daftar Jurnal/Prosiding Seminar -->
<div class="modal fade" id="tambah_jp_seminar">
	<div class="modal-dialog">
	  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Jurnal/Prosiding Seminar {{$dept[0]->nama_departemen}}</h4>
			</div>
			<div class="modal-body">
			<div class="box box-info">
				<!-- form start -->
				{!! Form::open(array('route' => 'storee_2','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
				<div class="box-body">
					<div class="form-group">
				  	<label class="col-sm-2 control-label">Jenis</label>
				  	<div class="col-sm-10">
						<select name="id_jenis_jp" class="form-control">
					  	<option value=1>Jurnal Terakreditasi DIKTI</option>
					  	<option value=2>Jurnal Internasional</option>
					  	<option value=3>Jurnal Nasional</option>
						</select>
						</div>
					</div>
					<div class="form-group">
				  	<label class="col-sm-2 control-label">Nama Jurnal</label>
				  	<div class="col-sm-10">
				  	{!! Form::text('nama_jurnal', null, array('placeholder' => 'Nama Jurnal','class' => 'form-control', 'required'=>'required')) !!}  
						</div>
					</div>
					<div class="form-group">
				  	<label class="col-sm-2 control-label">Rinci no</label>
				  	<div class="col-sm-10">
				  	{!! Form::text('rinci_no', null, array('placeholder' => 'Nomor Jurnal','class' => 'form-control', 'required'=>'required')) !!}  
						</div>
					</div>
					<div class="form-group">
				  	<label class="col-sm-2 control-label">Tahun</label>
				  	<div class="col-sm-10">
				  	{!! Form::number('rinci_tahun', null, array('placeholder' => 'Tahun Terbit','class' => 'form-control', 'min'=>'2016', 'required'=>'required')) !!}  
						</div>
					</div>
					<div class="form-group">
				  	<label class="col-sm-2 control-label">Penerbit</label>
				  	<div class="col-sm-10">
				  	{!! Form::text('penerbit', null, array('placeholder' => 'Penerbit','class' => 'form-control', 'required'=>'required')) !!}  
						</div>
					</div>
					<div class="form-group">
				  	<label class="col-sm-2 control-label">Jumlah</label>
				  	<div class="col-sm-10">
				  	{!! Form::number('jumlah', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'required'=>'required')) !!}  
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

<!-- Edit Pustaka di Ruang Baca -->
<div class="modal fade" id="edit_pustaka_ruang_baca">
	<div class="modal-dialog">
	  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Edit Pustaka di Ruang Baca {{$dept[0]->nama_departemen}}</h4>
			</div>
			<div class="modal-body">
			  <div class="box box-info">
					{!! Form::open(array('route' =>'Saranaupdate_2','class'=>'form-horizontal','method'=>'PUT')) !!}
					<div class="box-body">
						<div class="form-group">
							<div class="col-xs-8" style="text-align: right;">
					  		<p><strong>*Jumlah Judul</strong></p>
							</div>
							<div class="col-xs-4" >
								<p><strong>*Jumlah Copy</strong></p>
							</div>
						</div>
				  	@foreach($pustaka as $pustaka_)
						<div class="form-group">
				  		<label class="col-sm-4 control-label">{{$pustaka_->jenis_pustaka}}</label>
							<div class="col-xs-4">
								<input type="number" name="jumlah_judul_{{$pustaka_->id_jenis_pustaka}}" min="0" class="form-control" value="{{$pustaka_->jumlah_judul}}" required="required">
							</div>
							<div>
								<input type="hidden" name="jenis_pustaka_{{$pustaka_->id_jenis_pustaka}}"  class="form-control" value="{{$pustaka_->id_jenis_pustaka}}" >
							</div>
							<div class="col-xs-4">
								<input type="number" name="jumlah_copy_{{$pustaka_->id_jenis_pustaka}}" min="0" class="form-control" value="{{$pustaka_->jumlah_copy}}" required="required">
							</div>
						</div>
						@endforeach
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

<!-- Tambah Peralatan LAB -->
<div class="modal fade" id="tambah_alat_lab">
	<div class="modal-dialog">
	  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Peralatan Utama di Laboratorium {{$dept[0]->nama_departemen}}</h4>
			</div>
			<div class="modal-body">
				<div class="box box-info">
				<!-- form start -->
				{!! Form::open(array('route'=>'store_3','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
					<div class="box-body">
						<div class="form-group">
				  		<label class="col-sm-4 control-label">Nama Laboratorium</label>
				  		<div class="col-sm-8">
				  		{!! Form::text('nama_lab', null, array('placeholder' => 'Nama Lab','class' => 'form-control', 'required'=>'required')) !!}
							</div>
						</div>
						<div class="form-group">
				  		<label class="col-sm-4 control-label">Jenis Peralatan Utama</label>
				  		<div class="col-sm-8">
				  		{!! Form::text('jenis_alat_utama', null, array('placeholder' => 'Jenis Alat','class' => 'form-control', 'required'=>'required')) !!}  
							</div>
						</div>
						<div class="form-group">
				  		<label class="col-sm-4 control-label">Jumlah Unit</label>
				  		<div class="col-sm-8">
				  		{!! Form::number('jumlah_unit_alat', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'id'=>'jumlah2', 'required'=>'required')) !!}  
							</div>
						</div>
						<div class="form-group">
				  		<label class="col-sm-4 control-label">Harga Satuan (Juta Rp)</label>
				  		<div class="col-sm-8">
				  		{!! Form::number('harga_satuan', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'id'=>'harga_satuan2', 'required'=>'required')) !!}  
							</div>
						</div>
						<div class="form-group">
				  		<label class="col-sm-4 control-label">Jumlah Harga (Juta Rp)</label>
				  		<div class="col-sm-8">
				  		{!! Form::number('jumlah_harga', null, array('placeholder' => '0','class' => 'form-control', 'readOnly'=>'readOnly', 'id'=>'jmlh_harga2', 'required'=>'required')) !!}  
							</div>
						</div>
						<div class="form-group">
				  		<label class="col-sm-4 control-label">Tanggal Pembelian / Pengadaan</label>
				  		<div class="col-sm-8">
				  		{!! Form::date('tanggal_beli', null, array('placeholder' => '0','class' => 'form-control', 'required'=>'required')) !!}  
							</div>
						</div>
						<div class="form-group">
				  		<label class="col-sm-4 control-label">Kepemilikan</label>
				  		<div class="col-sm-8">
								<select name="id_kepemilikan_alat" class="form-control">
					  			<option value=1>Milik PT/fakultas/jurusan sendiri</option>
								  <option value=2>Sewa/Kontrak/Kerjasama</option>
								</select> 
							</div>
						</div>
						<div class="form-group">
				  		<label class="col-sm-4 control-label">Kondisi</label>
				  		<div class="col-sm-8">
								<select name="id_kondisi_alat" class="form-control">
								  <option value=1>Terawat</option>
								  <option value=2>Tidak Terawat</option>
								</select>   
							</div>
						</div>
						<div class="form-group">
				  		<label class="col-sm-4 control-label">Rata-rata waktu penggunaan (Jam/minggu)</label>
				  		<div class="col-sm-8">
				  		{!! Form::number('rata_waktu', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'required'=>'required')) !!}  
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