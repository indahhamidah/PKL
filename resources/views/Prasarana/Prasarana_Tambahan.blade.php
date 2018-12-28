@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/toastr/toastr.min.css')}}">
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        Prasarana Tambahan @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>
    </section>
<!-- Main Content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
				   <!-- Button trigger modal -->	
           <!-- alert sukses dan eror -->
                  <!-- tutup -->
          </div>
            <!-- /.box-header -->
          <div class="box-body">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Penambahan Prasarana Tambahan</a></li>
                <li><a href="#tab_2" data-toggle="tab">Laporan Prasarana Tambahan</a></li>
                <li><a href="#tab_3" data-toggle="tab">Penilaian FMIPA tentang Prasarana</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_prasarana_tambahan">
                <i class="fa fa-plus"></i> <span>Tambah</span>
                </button>
                @endif
                <!-- Cari -->
                  <div class="col-md-offset-10">
                    <input class="form-control" id="myInput" type="text" placeholder="Cari...">
                  </div> 
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th rowspan="2" style="text-align: center;">No</th>
                      <th rowspan="2" style="text-align: center;">Jenis Prasarana Tambahan</th>
                      <th rowspan="2" style="text-align: center;">Tanggal/Tahun Investasi</th>
                      <th rowspan="2" style="text-align: center;">Investasi (Juta Rp)</th>
                      <th colspan="4" style="text-align: center;">Rencana Ivestasi Prasarana<br>dalam 5 Tahun Mendatang</th>
                      @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                      <th rowspan="2" style="text-align: center;">Aksi</th>
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
                      </tr>
                    </tr>
                  </thead>
                  <tbody id="pras_tambahan" name="pras_tambahan">
                    <?php $nomor=0; ?>
                    @foreach ($prasarana_tambahan as $prasarana)
                    <?php $nomor++; ?>
                    <tr>
                      <td>{{$nomor}}</td>
                      <td>{{$prasarana->jenis_prasarana_tambahan}}</td>
                      <td>{{$prasarana->tanggal_inves}}</td>
                      <td>{{number_format($prasarana->investasi_prasarana,2)}}</td>
                      <td>{{$prasarana->awal_rencana}}</td>
                      <td>{{$prasarana->akhir_rencana}}</td>
                      <td>{{number_format($prasarana->rencana_investasi,2)}}</td>
                      <td>{{$prasarana->sumber_dana}}</td>
                      @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                      <td>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_pras_tamb{{$prasarana->id_prasarana_tambahan}}">
                        <i class="fa fa-pencil"></i><span>Ubah</span>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_pras_tamb{{$prasarana->id_prasarana_tambahan}}">
                        <i class="fa fa-trash"></i><span>Hapus</span>
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah_inves{{$prasarana->id_prasarana_tambahan}}">
                        <i class="fa fa-plus"></i> <span>Investasi</span></button>
                      </td>
                      @endif
                    </tr>
                    <!-- Ubah Prasarana Tambahan -->
                    <div class="modal fade" id="edit_pras_tamb{{$prasarana->id_prasarana_tambahan}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Ubah Prasarana Tambahan FMIPA IPB</h4>
                          </div>
                          <div class="modal-body">
                            <div class="box box-info">
                            <!-- form start -->
                            {!! Form::open(array('route' => ['Prasarana_Tambahan.update', $prasarana->id_prasarana_tambahan],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                              <div class="box-body">
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Tanggal Investasi</label>
                                  <div class="col-sm-8">
                                  {!! Form::date('tanggal_inves', $prasarana->tanggal_inves, array('placeholder' => 'Jenis','class' => 'form-control', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jenis Prasarana Tambahan</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('jenis_prasarana_tambahan', $prasarana->jenis_prasarana_tambahan, array('placeholder' => 'Jenis','class' => 'form-control', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jumlah Investasi (Juta Rp)</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('investasi_prasarana', $prasarana->investasi_prasarana, array('placeholder' => 'dalam Juta','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">5 Tahun Rencana Investasi</label>
                                  <div class="col-sm-4">
                                  {!! Form::number('awal_rencana', $prasarana->awal_rencana, array('placeholder' => 'Tahun Awal Rencana','class' => 'form-control', 'min'=>'2014', 'required'=>'required')) !!}  
                                  </div>
                                  <div class="col-sm-4">
                                  {!! Form::number('akhir_rencana', $prasarana->akhir_rencana, array('placeholder' => 'Tahun Akhir Rencana','class' => 'form-control', 'min'=>'2014', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Rencana Investasi (Juta Rp)</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('rencana_investasi', $prasarana->rencana_investasi, array('placeholder' => 'dalam Juta','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Sumber Dana</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('sumber_dana', $prasarana->sumber_dana, array('placeholder' => 'Nama','class' => 'form-control', 'required'=>'required')) !!}  
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

                    <!-- Tambah Investasi Prasarana Tambahan -->
                    <div class="modal fade" id="tambah_inves{{$prasarana->id_prasarana_tambahan}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Tambah Investasi Prasarana Tambahan FMIPA IPB</h4>
                          </div>
                          <div class="modal-body">
                            <div class="box box-info">
                            <!-- form start -->
                            {!! Form::open(array('route' => ['pras_store_inves', $prasarana->id_prasarana_tambahan],'class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                              <div class="box-body">
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Tanggal Investasi</label>
                                  <div class="col-sm-8">
                                  {!! Form::date('tanggal_inves', $prasarana->tanggal_inves, array('placeholder' => 'Jenis','class' => 'form-control', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jenis Prasarana Tambahan</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('jenis_prasarana_tambahan', $prasarana->jenis_prasarana_tambahan, array('placeholder' => 'Jenis','class' => 'form-control', 'readonly')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Jumlah Investasi (Juta Rp)</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('investasi_prasarana', $prasarana->investasi_prasarana, array('placeholder' => 'dalam Juta','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">5 Tahun Rencana Investasi</label>
                                  <div class="col-sm-4">
                                  {!! Form::number('awal_rencana', $prasarana->awal_rencana, array('placeholder' => 'Tahun Awal Rencana','class' => 'form-control', 'min'=>'2014', 'required'=>'required' )) !!}  
                                  </div>
                                  <div class="col-sm-4">
                                  {!! Form::number('akhir_rencana', $prasarana->akhir_rencana, array('placeholder' => 'Tahun Akhir Rencana','class' => 'form-control', 'min'=>'2014', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Rencana Investasi (Juta Rp)</label>
                                  <div class="col-sm-8">
                                  {!! Form::number('rencana_investasi', $prasarana->rencana_investasi, array('placeholder' => 'dalam Juta','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Sumber Dana</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('sumber_dana', $prasarana->sumber_dana, array('placeholder' => 'Nama','class' => 'form-control', 'readonly')) !!}  
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
                    <div class="modal fade" id="hapus_pras_tamb{{$prasarana->id_prasarana_tambahan}}">
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
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['Prasarana_Tambahan.destroy', $prasarana->id_prasarana_tambahan],'style'=>'display:inline']) !!}
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
              <!-- Report -->
              <div class="tab-pane" id="tab_2">
                <!-- <div class="modal-body"> -->
                <a href="Excel_Prasarana_Tambahan"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#">
                <i class="fa fa-download"></i> <span>Excel</span>
                </button></a>
                <a href="download_pdf_prasarana_tambahan"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#">
                <i class="fa fa-download"></i> <span>Pdf</span>
                </button></a>
                <!-- <div class="box box-info"> -->
                <!-- form start -->
                <br><br>
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th rowspan="2" style="text-align: center;">No</th>
                        <th rowspan="2" style="text-align: center;">Jenis Prasarana Tambahan</th>
                        <th rowspan="2" style="text-align: center;">Investasi Prasarana Selama 3 Tahun Terakhir (Juta Rp) <br>({{$tahun2}}-{{$tahun}})</th>
                        <th colspan="2" style="text-align: center;">Rencana Investasi Prasarana dalam 5 Tahun Mendatang</th>
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
                    <tbody>
                      <?php $no=0; ?>
                      @foreach($pras_tamb as $key => $prass)
                      <?php $no++; ?>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$prass->jenis_prasarana_tambahan}}</td>
                        <td style="text-align: right;">{{number_format($prass->jum_inves,2)}}</td>
                        <td style="text-align: right;">{{number_format($rencana_inves_terakhir[$key],2)}}</td>
                        <td>{{$prass->sumber_dana}}</td>
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
                <!-- </div> -->
              <!-- </div> -->
              </div>
              <div class="tab-pane" id="tab_3">
                @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#edit_penilaian">
                <i class="fa fa-pencil"></i> Edit Penilaian FMIPA
              </button> 
              @endif
            <!-- /.box-header -->
                <br><br>
                <h4 style="text-align: justify;">Penilaian FMIPA IPB tentang prasarana yang telah dimiliki, khususnya yang digunakan untuk program-program studi. Uraian ini mencakup aspek: kecukupan dan kewajaran serta rencana pengembangan dalam lima tahun mendatang, serta kendala yang dihadapi dalam penambahan prasarana</h4>
                <table class="table table-bordered">
                  <tbody>
                    @foreach($penilaian_pras_fmipa as $penilaian_pras)
                    <tr>
                      <td style="text-align: justify; font-size:16px;"><?php echo nl2br ($penilaian_pras->penilaian_pras); ?></td>
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
                      <h4 class="modal-title">Edit Penilaian FMIPA IPB tentang Prasarana</h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route'=>'Penilaian_Pras_Fmipa', 'class'=>'form-horizontal', 'method'=>'PUT')) !!}
                        <div class="box-body">
                        @foreach($penilaian_pras_fmipa as $penilaian_pras)
                          <div class="box-body pad">
                            <div class="col-xs-12">
                              {!! Form::textarea('penilaian_pras', $penilaian_pras->penilaian_pras, array('placeholder' => 'Keterangan','class' => 'form-control','rows'=>'15')) !!}
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

  </div>
        <!-- Tambah Prasarana Tambahan -->
        <div class="modal fade" id="tambah_prasarana_tambahan">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Tambah Prasarana Tambahan FMIPA IPB</h4>
              </div>
              <div class="modal-body">
                <div class="box box-info">
                <!-- form start -->
                {!! Form::open(array('route' => 'Prasarana_Tambahan.store','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tanggal Investasi</label>
                      <div class="col-sm-8">
                      {!! Form::date('tanggal_inves', null, array('placeholder' => 'Jenis','class' => 'form-control', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jenis Prasarana Tambahan</label>
                      <div class="col-sm-8">
                      {!! Form::text('jenis_prasarana_tambahan', null, array('placeholder' => 'Jenis','class' => 'form-control', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jumlah Investasi (Juta Rp)</label>
                      <div class="col-sm-8">
                      {!! Form::number('investasi_prasarana', null, array('placeholder' => 'dalam Juta','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01', 'required'=>'required')) !!}  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">5 Tahun Rencana Investasi</label>
                      <div class="col-sm-4">
                      {!! Form::number('awal_rencana', null, array('placeholder' => 'Tahun Awal Rencana','class' => 'form-control', 'min'=>'2014', 'required'=>'required')) !!}  
                      </div>
                      <div class="col-sm-4">
                      {!! Form::number('akhir_rencana', null, array('placeholder' => 'Tahun Akhir Rencana','class' => 'form-control', 'min'=>'2014', 'required'=>'required')) !!}  
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
                      {!! Form::text('sumber_dana', null, array('placeholder' => 'Nama','class' => 'form-control', 'required'=>'required')) !!}  
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