@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/toastr/toastr.min.css')}}">
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        Sarana Tambahan @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>
    </section>
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
                <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Investasi Sarana Tambahan</a></li>
                  <li><a href="#tab_4" data-toggle="tab">Rencana Investasi Sarana Tambahan</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Laporan Sarana Tambahan</a></li>
                  <li><a href="#tab_3" data-toggle="tab">Penilaian FMIPA tentang Sarana</a></li>
                </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_sarana_tambahan">
                <i class="fa fa-plus"></i> <span>Tambah</span>
                </button>
                @endif
                <br><br>
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th style="text-align: center;">No</th>
                      <th style="text-align: center;">Jenis Sarana Tambahan</th>
                      <th style="text-align: center;">Tahun Beli</th>
                      <th style="text-align: center;">Jumlah</th>
                      <th style="text-align: center;">Satuan</th>
                      <th style="text-align: center;">Harga Satuan (Rp)</th>
                      <th style="text-align: center;">Jumlah Harga (4x6)</th>
                      <th style="text-align: center;">Tanggal Investasi</th>
                      <th style="text-align: center;">Investasi Sarana Tambahan (Juta Rp)</th>
                      <th style="text-align: center;">Sumber Dana</th>
                      @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                      <th style="text-align: center;">Aksi</th>
                      @endif
                      <tr>
                        <th style="text-align: center;">(1)</th>
                        <th style="text-align: center;">(2)</th>
                        <th style="text-align: center;">(3)</th>
                        <th style="text-align: center;">(4)</th>
                        <th style="text-align: center;">(5)</th>
                        <th style="text-align: center;">(6)</th>
                        <th style="text-align: center;">(7)</th>
                        <th style="text-align: center;">(8)</th>
                        <th style="text-align: center;">(9)</th>
                        <th style="text-align: center;">(10)</th>
                      </tr>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=0; ?>
                    @foreach($sarana_tambahan as $sarana)
                    <?php $no++; ?>
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$sarana->jenis_sarana_tambahan}}</td>
                      <td>{{$sarana->tahun_beli}}</td>
                      <td>{{number_format($sarana->jumlah,2)}}</td>
                      <td>{{$sarana->satuan}}</td>
                      <td>{{number_format($sarana->harga_satuan,2)}}</td>
                      <td>{{number_format($sarana->jmlh_harga,2)}}</td>
                      <td>{{$sarana->tanggal_inves}}</td>
                      <td>{{number_format($sarana->investasi,2)}}</td>
                      <td>{{$sarana->sumber_dana}}</td>
                      @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                      <td>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_sarana{{$sarana->id_sarana_tambahan}}"><i class="fa fa-pencil"></i> 
                        <span>Ubah</span>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_sarana_tamb{{$sarana->id_sarana_tambahan}}"><i class="fa fa-trash"></i> 
                        <span>Hapus</span>
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah_inves{{$sarana->id_sarana_tambahan}}">
                        <i class="fa fa-plus"></i> <span>Investasi</span></button>
                      </td>
                      @endif
                    </tr>
                    <!-- Edit Sarana Tambahan -->
                    <div class="modal fade" id="edit_sarana{{$sarana->id_sarana_tambahan}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Ubah Sarana Tambahan FMIPA IPB</h4>
                          </div>
                          <div class="modal-body">
                            <div class="box box-info">
                            <!-- form start -->
                            {!! Form::open(array('route' => ['Sarana_Tambahan.update', $sarana->id_sarana_tambahan],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                              <div class="box-body">
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jenis Sarana Tambahan</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('jenis_sarana_tambahan', $sarana->jenis_sarana_tambahan, array('placeholder' => 'Jenis','class' => 'form-control', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Tahun Beli</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('tahun_beli', $sarana->tahun_beli, array('placeholder' => 'Y','class' => 'form-control', 'min'=>'2000', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jumlah</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('jumlah', $sarana->jumlah, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'id'=>'jumlah2', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Satuan</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('satuan', $sarana->satuan, array('placeholder' => 'Ex. Unit','class' => 'form-control', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Harga Satuan</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('harga_satuan', $sarana->harga_satuan, array('placeholder' => 'Rp','class' => 'form-control', 'min'=>'0.00', 'id'=>'harga_satuan2', 'step'=>'0.01', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jumlah Harga</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('jmlh_harga', $sarana->jmlh_harga, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'id'=>'jmlh_harga2', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Tanggal Investasi</label>
                                  <div class="col-sm-8">
                                  {!! Form::date('tanggal_inves', $sarana->tanggal_inves, array('placeholder' => 'm/d/Y','class' => 'form-control', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jumlah Investasi (Juta Rp)</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('investasi', $sarana->investasi, array('placeholder' => 'dalam Juta','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Sumber Dana</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('sumber_dana', $sarana->sumber_dana, array('placeholder' => 'Sumber Dana','class' => 'form-control', 'required'=>'required')) !!}  
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

                    <!-- Tambah Investasi -->
                    <div class="modal fade" id="tambah_inves{{$sarana->id_sarana_tambahan}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Tambah Investasi Sarana Tambahan FMIPA IPB</h4>
                          </div>
                          <div class="modal-body">
                            <div class="box box-info">
                            <!-- form start -->
                            {!! Form::open(array('route' => ['store_inves', $sarana->id_sarana_tambahan],'class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                              <div class="box-body">
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jenis Sarana Tambahan</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('jenis_sarana_tambahan', $sarana->jenis_sarana_tambahan, array('placeholder' => 'Jenis','class' => 'form-control', 'readonly')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Tahun Beli</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('tahun_beli', $sarana->tahun_beli, array('placeholder' => 'Y','class' => 'form-control', 'min'=>'2000', 'readonly')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jumlah</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('jumlah', $sarana->jumlah, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'readonly')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Satuan</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('satuan', $sarana->satuan, array('placeholder' => 'Ex. Unit','class' => 'form-control', 'readonly')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Harga Satuan</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('harga_satuan', $sarana->harga_satuan, array('placeholder' => 'Rp','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'readonly')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jumlah Harga</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('jmlh_harga', $sarana->jmlh_harga, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01','readonly')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Tanggal Investasi</label>
                                  <div class="col-sm-8">
                                  {!! Form::date('tanggal_inves', $sarana->tanggal_inves, array('placeholder' => 'm/d/Y','class' => 'form-control', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jumlah Investasi (Juta Rp)</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('investasi', $sarana->investasi, array('placeholder' => 'dalam Juta','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Sumber Dana</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('sumber_dana', $sarana->sumber_dana, array('placeholder' => 'Sumber Dana','class' => 'form-control', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
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

                    <!-- verifikasi sarana tambahan -->
                    <div class="modal fade" id="hapus_sarana_tamb{{$sarana->id_sarana_tambahan}}">
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
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['Sarana_Tambahan.destroy', $sarana->id_sarana_tambahan],'style'=>'display:inline']) !!} 
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
              <div class="tab-pane" id="tab_4">
                  @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_sarana_tambahan_rencana">
                <i class="fa fa-plus"></i> <span>Tambah</span>
                </button>
                @endif
                <br><br>
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th rowspan="2" style="text-align: center;">No</th>
                      <th rowspan="2" style="text-align: center;">Jenis Sarana Tambahan</th>
                      <th rowspan="2" style="text-align: center;">Tahun Beli</th>
                      <th rowspan="2" style="text-align: center;">Jumlah</th>
                      <th rowspan="2" style="text-align: center;">Satuan</th>
                      <th rowspan="2" style="text-align: center;">Harga Satuan (Rp)</th>
                      <th rowspan="2" style="text-align: center;">Jumlah Harga (4x6)</th>
                      <!-- <th rowspan="2" style="text-align: center;">Tanggal Investasi</th> -->
                      <th colspan="4" style="text-align: center;">Rencana Ivestasi Sarana<br>dalam 5 Tahun Mendatang</th>
                      @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                      <th rowspan="2">Aksi</th>
                      @endif
                      <tr>
                        <th style="text-align: center;">Tahun Awal</th>
                        <th style="text-align: center;">Tahun Akhir</th>
                        <th style="text-align: center;">Nilai Investasi (Juta Rp)</th>
                        <th style="text-align: center;">Sumber Dana</th>
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
                        <th style="text-align: center;">(9)</th>
                        <th style="text-align: center;">(10)</th>
                        <th style="text-align: center;">(11)</th>
                        <th style="text-align: center;">(12)</th>
                        <!-- <th style="text-align: center;">(13)</th> -->
                        <!-- <th style="text-align: center;">(14)</th> -->
                      </tr>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=0; ?>
                    @foreach($rencana_inves as $sarana_inves)
                    <?php $no++; ?>
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$sarana_inves->jenis_sarana_tamb}}</td>
                      <td>{{$sarana_inves->tahun_ada}}</td>
                      <td>{{number_format($sarana_inves->jumlah,2)}}</td>
                      <td>{{$sarana_inves->satuan}}</td>
                      <td>{{number_format($sarana_inves->harga_sat,2)}}</td>
                      <td>{{number_format($sarana_inves->jumlah_harga,2)}}</td>
                      <td>{{$sarana_inves->awal}}</td>
                      <td>{{$sarana_inves->akhir}}</td>
                      <td>{{number_format($sarana_inves->rencana_investasi,2)}}</td>
                      <td>{{$sarana_inves->sumber_dana}}</td>
                      @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                      <td>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ubah_sarana_tambahan_rencana{{$sarana_inves->id_sarana_rencana}}"><i class="fa fa-pencil"></i> 
                        <span>Ubah</span>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_sarana_rencana{{$sarana_inves->id_sarana_rencana}}"><i class="fa fa-trash"></i> 
                        <span>Hapus</span>
                        </button>
                      </td>
                      @endif
                      <!-- Ubah sarana investasi -->
                      <div class="modal fade" id="ubah_sarana_tambahan_rencana{{$sarana_inves->id_sarana_rencana}}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Ubah Rencana Investasi Sarana Tambahan FMIPA IPB</h4>
                            </div>
                            <div class="modal-body">
                              <div class="box box-info">
                              <!-- form start -->
                              {!! Form::open(array('route' => ['edit_rencana', $sarana_inves->id_sarana_rencana],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                                <div class="box-body">
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Jenis Sarana Tambahan</label>
                                    <div class="col-sm-8">
                                    {!! Form::text('jenis_sarana_tamb', $sarana_inves->jenis_sarana_tamb, array('placeholder' => 'Jenis','class' => 'form-control', 'required'=>'required')) !!}  
                                    </div>
                                  </div><br><br>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Tahun Beli</label>
                                    <div class="col-sm-8">
                                    {!! Form::number('tahun_ada', $sarana_inves->tahun_ada, array('placeholder' => 'Y','class' => 'form-control', 'min'=>'2000', 'required'=>'required')) !!}  
                                    </div>
                                  </div><br><br>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Jumlah</label>
                                    <div class="col-sm-8">
                                    {!! Form::number('jumlah', $sarana_inves->jumlah, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'id'=>'jumlah', 'required'=>'required')) !!}  
                                    </div>
                                  </div><br><br>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Satuan</label>
                                    <div class="col-sm-8">
                                    {!! Form::text('satuan', $sarana_inves->satuan, array('placeholder' => 'Ex. Unit','class' => 'form-control', 'required'=>'required')) !!}  
                                    </div>
                                  </div><br><br>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Harga Satuan</label>
                                    <div class="col-sm-8">
                                    {!! Form::number('harga_sat', $sarana_inves->harga_sat, array('placeholder' => 'Rp','class' => 'form-control', 'min'=>'0.00','step'=>'0.01' , 'id'=>'harga_satuan', 'required'=>'required')) !!}  
                                    </div>
                                  </div><br><br>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">Jumlah Harga</label>
                                    <div class="col-sm-8">
                                    {!! Form::number('jumlah_harga', $sarana_inves->jumlah_harga, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'id'=>'jmlh_harga')) !!}  
                                    </div>
                                  </div><br><br>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label">5 Tahun Rencana Investasi</label>
                                    <div class="col-sm-4">
                                      {!! Form::number('awal', $sarana_inves->awal, array('placeholder' => 'Tahun Awal Rencana','class' => 'form-control', 'min'=>'2014', 'required'=>'required')) !!}  
                                    </div>
                                    <div class="col-sm-4">
                                      {!! Form::number('akhir', $sarana_inves->akhir, array('placeholder' => 'Tahun Akhir Rencana','class' => 'form-control', 'min'=>'2014', 'required'=>'required')) !!}  
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Rencana Investasi (Juta Rp)</label>
                                      <div class="col-sm-8">
                                        {!! Form::number('rencana_investasi', $sarana_inves->rencana_investasi, array('placeholder' => 'dalam Juta','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                                      </div>
                                    </div><br><br>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label">Sumber Dana</label>
                                      <div class="col-sm-8">
                                      {!! Form::text('sumber_dana', $sarana_inves->sumber_dana, array('placeholder' => 'Sumber Dana','class' => 'form-control', 'required'=>'required')) !!}  
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
                      <!-- verifikasi hapus rencana sarana tambahan -->
                    <div class="modal fade" id="hapus_sarana_rencana{{$sarana_inves->id_sarana_rencana}}">
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
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['rencana_sarana_rencana.destroy2', $sarana_inves->id_sarana_rencana],'style'=>'display:inline']) !!} 
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
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="tab_2">
                <a href="Excel_Sarana_Tambahan"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#">
                <i class="fa fa-download"></i> <span>Excel</span>
                </button></a>
                <a href="download_pdf_sarana_tambahan"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#">
                <i class="fa fa-download"></i> <span>Pdf</span>
                </button></a>
                <!-- Cari -->
                <div class="col-md-offset-10">
                  <input class="form-control" id="myInput" type="text" placeholder="Cari...">
                </div>
                <br><br>
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th rowspan="2" style="text-align: center;">No</th>
                      <th rowspan="2" style="text-align: center;">Jenis Sarana Tambahan</th>
                      <th rowspan="2" style="text-align: center;">Investasi Sarana Selama 3 Tahun Terakhir (Juta Rp) <br>({{$tahun2}}-{{$tahun}})</th>
                      <th colspan="2" style="text-align: center;">Rencana Investasi Sarana dalam 5 Tahun Mendatang</th>
                      <tr>
                        <th style="text-align: center;">Nilai Investasi (Juta Rp)</th>
                        <th style="text-align: center;">Sumber Dana</th>
                      </tr>
                      <tr>
                        <th style="text-align: center;">(1)</th>
                        <th style="text-align: center;">(2)</th>
                        <th style="text-align: center;">(3)</th>
                        <th style="text-align: center;">(4)</th>
                        <th style="text-align: center;">(5)</th>
                      </tr>
                    </tr>
                  </thead>
                  <tbody id="lap_sar_tamb" name="lap_sar_tamb">
                     <?php $no=0; ?>
                      @foreach($sar_tamb as $key => $sars)
                      <?php $no++; ?>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$sars->jenis_sarana_tambahan}} ({{$sars->jumlah}} {{$sars->satuan}}) </td>
                        <td style="text-align: right;">{{number_format($sars->jum_inves,2)}}</td>
                        <td style="text-align: center;"></td>
                        <td>{{$sars->sumber_dana}}</td>
                      </tr>
                      @endforeach
                      <thead>
                        <tr>
                        <th colspan="2" style="text-align: center;">INVESTASI</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                      </thead>
                      <?php $nomr=0; ?>
                      @foreach($rencana_tamb as $key1 => $sar_rencana)
                      <?php $nomr++; ?>
                      <tr>
                        <td>{{$nomr}}</td>
                        <td>{{$sar_rencana->jenis_sarana_tamb}} ({{$sar_rencana->jumlah}} {{$sar_rencana->satuan}}) </td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: right;">{{number_format($rencana_inves_akhir[$key1],2)}}</td>
                        <td>{{$sar_rencana->sumber_dana}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="2" style="text-align: center;">Total</th>
                        <th style="text-align: right;">{{number_format($total_inves,2)}}</th>
                        <th style="text-align: right;">{{number_format($total_rencana,2)}}</th>
                        <th></th>
                      </tr>
                    </tfoot>
                </table>
              </div>
              <div class="tab-pane" id="tab_3">
                @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#edit_penilaian">
                <i class="fa fa-pencil"></i> Edit Penilaian FMIPA
              </button> 
              @endif
            <!-- /.box-header -->
                <br><br>
                <h4 style="text-align: justify;">Penilaian FMIPA IPB tentang sarana untuk menjamin penyelenggaraan program Tridarma PT yang bermutu tinggi. Uraian ini mencakup aspek: kecukupan/ ketersediaan/akses dan kewajaran serta rencana pengembangan dalam lima tahun mendatang, serta kendala yang dihadapi dalam penambahan sarana</h4>
                <table class="table table-bordered">
                  <tbody>
                    @foreach($penilaian_fmipa as $penilaiann)
                    <tr>
                      <td style="text-align: justify; font-size:14px; font-family: Arial"><?php echo nl2br ($penilaiann->penilaian); ?></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              <!-- Edit Pengelolaan Dana -->
              <div class="modal fade" id="edit_penilaian">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit Pendapat Pimpinan Fakultas</h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route'=>'Penilaian_Fmipa', 'class'=>'form-horizontal', 'method'=>'PUT')) !!}
                        <div class="box-body">
                        @foreach($penilaian_fmipa as $penilaiann)
                          <div class="box-body pad">
                            <div class="col-xs-12">
                              {!! Form::textarea('penilaian', $penilaiann->penilaian, array('placeholder' => 'Keterangan','class' => 'form-control','rows'=>'15')) !!}
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
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <!-- Tambah sarana tamabahan -->
        <div class="modal fade" id="tambah_sarana_tambahan">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Tambah Sarana Tambahan FMIPA IPB</h4>
              </div>
              <div class="modal-body">
                <div class="box box-info">
                <!-- form start -->
                {!! Form::open(array('route' => 'Sarana_Tambahan.store','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jenis Sarana Tambahan</label>
                      <div class="col-sm-8">
                      {!! Form::text('jenis_sarana_tambahan', null, array('placeholder' => 'Jenis','class' => 'form-control', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tahun Beli</label>
                      <div class="col-sm-8">
                      {!! Form::number('tahun_beli', null, array('placeholder' => 'Y','class' => 'form-control', 'min'=>'2000', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jumlah</label>
                      <div class="col-sm-8">
                      {!! Form::number('jumlah', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'id'=>'jumlah', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Satuan</label>
                      <div class="col-sm-8">
                      {!! Form::text('satuan', null, array('placeholder' => 'Ex. Unit','class' => 'form-control', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Harga Satuan</label>
                      <div class="col-sm-8">
                      {!! Form::number('harga_satuan', null, array('placeholder' => 'Rp','class' => 'form-control', 'min'=>'0.00','step'=>'0.01' , 'id'=>'harga_satuan', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jumlah Harga</label>
                      <div class="col-sm-8">
                      {!! Form::number('jmlh_harga', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'id'=>'jmlh_harga' ,'readonly')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tanggal Investasi</label>
                      <div class="col-sm-8">
                      {!! Form::date('tanggal_inves', null, array('placeholder' => 'm/d/Y','class' => 'form-control', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jumlah Investasi (Juta Rp)</label>
                      <div class="col-sm-8">
                      {!! Form::number('investasi', null, array('placeholder' => 'dalam Juta','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Sumber Dana</label>
                      <div class="col-sm-8">
                      {!! Form::text('sumber_dana', null, array('placeholder' => 'Sumber Dana','class' => 'form-control', 'required'=>'required')) !!}  
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

        <!-- Tambah sarana tamabahan -->
        <div class="modal fade" id="tambah_sarana_tambahan_rencana">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Tambah Sarana Tambahan FMIPA IPB</h4>
              </div>
              <div class="modal-body">
                <div class="box box-info">
                <!-- form start -->
                {!! Form::open(array('route' => 'store_rencana_inves','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jenis Sarana Tambahan</label>
                      <div class="col-sm-8">
                      {!! Form::text('jenis_sarana_tamb', null, array('placeholder' => 'Jenis','class' => 'form-control', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tahun Beli</label>
                      <div class="col-sm-8">
                      {!! Form::number('tahun_ada', null, array('placeholder' => 'Y','class' => 'form-control', 'min'=>'2000', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jumlah</label>
                      <div class="col-sm-8">
                      {!! Form::number('jumlah', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0', 'id'=>'jumlah', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Satuan</label>
                      <div class="col-sm-8">
                      {!! Form::text('satuan', null, array('placeholder' => 'Ex. Unit','class' => 'form-control', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Harga Satuan</label>
                      <div class="col-sm-8">
                      {!! Form::number('harga_sat', null, array('placeholder' => 'Rp','class' => 'form-control', 'min'=>'0.00','step'=>'0.01' , 'id'=>'harga_satuan', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jumlah Harga</label>
                      <div class="col-sm-8">
                      {!! Form::number('jumlah_harga', null, array('placeholder' => '0','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'id'=>'jmlh_harga')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">5 Tahun Rencana Investasi</label>
                      <div class="col-sm-4">
                        {!! Form::number('awal', null, array('placeholder' => 'Tahun Awal Rencana','class' => 'form-control', 'min'=>'2014', 'required'=>'required')) !!}  
                      </div>
                      <div class="col-sm-4">
                        {!! Form::number('akhir', null, array('placeholder' => 'Tahun Akhir Rencana','class' => 'form-control', 'min'=>'2014', 'required'=>'required')) !!}  
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Rencana Investasi (Juta Rp)</label>
                        <div class="col-sm-8">
                          {!! Form::number('rencana_investasi', null, array('placeholder' => 'dalam Juta','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Sumber Dana</label>
                        <div class="col-sm-8">
                        {!! Form::text('sumber_dana', null, array('placeholder' => 'Sumber Dana','class' => 'form-control', 'required'=>'required')) !!}  
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