<style>
table, th, td {
    border: 1px solid black;
}
</style>

@extends('layouts.app')
@section('content')

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform:uppercase">
      KELULUSAN MAHASISWA @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
             @if(Auth::User()->role!=2 and Auth::User()->role!=14)
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-plus"></i> <span> Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-exim">
              <i class="fa fa-upload"></i> <span> Upload</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
              <i class="fa fa-download"></i> <span> Download</span>
            </button>
            <a href="/redaksilulusan" class="btn btn-primary pull-left" role="button">
                  <i class="fa fa-file-text"></i> Redaksi</a>
            <div class="col-md-offset-10">
             <input class="form-control" id="myInput" type="text" placeholder="Cari...">
            </div>  
             @elseif(Auth::User()->role==2 or Auth::User()->role==14)
              <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
              <i class="fa fa-download"></i> <span> Download</span>
              </button>
            @endif
            @elseif(Auth::User()->id_departemen==10)
                @if(Auth::User()->role!=1 and Auth::User()->role!=14)
              <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modalReport">
              <i class="fa fa-file-text"></i> <span> Report</span>
              </button>
              <a href="/redaksilulusan" class="btn btn-primary pull-left" role="button">
                  <i class="fa fa-file-text"></i> Redaksi</a>
                @else
              <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modalReport">
              <i class="fa fa-file-text"></i> <span> Report</span>
              </button>
              @endif
                <!-- date range -->
                
                <!-- close -->
              <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Cari...">
              </div>
              <!-- filter date -->
              
            <!-- filter dept -->
            <form id="id_lulusan" class="form-horizontal" role="form" method="POST" action="{{ 'cari_lulusan' }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label class="col-md-4 control-label">Program Studi</label>
                    <div class="col-md-4 ">
                      <select class="form-control" name="idDept" style="margin-left: 30px">
                        @foreach ($listdept as $listdepts)
                        <option value="{{$listdepts->id_dept}}"> {{$listdepts->nama_departemen}}</option>
                        @endforeach
                      </select> 
                        <small class="help-block"></small>
                    </div>
                    <div class="form-group">
                      <div class="col-md-2 ">
                        <button type="submit" class="btn btn-flat btn-social btn-dropbox" id="button-reg">
                          <i class="fa fa-hand-o-left"></i>  Pilih  
                        </button>
                      </div>
                    </div>
                </div>
            </form>
            @endif
          </div>
          <!-- alert sukses dan eror -->
          <?php if(Session::has('success')): ?>
          <div class="col-md-4">
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <i class="icon fa fa-check"></i><strong>Berhasil!</strong> <?php echo Session::get('message', ''); ?>
            </div>
            </div>
          <?php endif;?>
          <?php if (count($errors) > 0):?>
            <div class="col-md-4">
              <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-warning"></i><strong>Data yang Anda masukkan salah!</strong>
                <ul>
                  @foreach($errors as $error)
                  <li>  {{ $error }} </li>
                  @endforeach
                </ul>
              </div>
            </div>
          <?php
          endif; ?>
          <!-- tutup -->
            <div class="panel-body"> 
             <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th rowspan="2" style="text-align: center">No</th>
                  <th rowspan="2" style="text-align: center">Nama Mahasiswa</th>
                  <th rowspan="2" style="text-align: center">NIM</th>
                  @if(Auth::user()->id_departemen==10)
                  <th rowspan="2" style="text-align: center">Departemen</th>
                  @endif
                  <th rowspan="2" style="text-align: center">Judul Skripsi</th>
                  <th colspan="2" style="text-align: center">Pembimbing</th> 
                  <th rowspan="2" style="text-align: center">No. Ijazah</th>
                  <th rowspan="2" style="text-align: center">Tanggal Masuk</th>
                  <th rowspan="2" style="text-align: center">Tanggal Lulus</th>
                  <th colspan="2" style="text-align: center">Total Masa Studi</th>
                  <th rowspan="2" style="text-align: center">IPK</th>
                  @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role!=2 and Auth::User()->role!=14)
                  <th rowspan="2" style="text-align: center">Actions</th>
                  @endif
                  @endif
                </tr>
                <tr>
                  <th>Pembimbing 1</th>
                  <th>Pembimbing 2</th>
                  <th style="text-align: center">Bulan</th>
                  <th style="text-align: center">Tahun</th>
                </tr>
               </thead>
               <tbody id="lulusans-list" name="lulusans-list">
                  <?php $number=0 ?>
                 @foreach ($lulusans as $lulusan)
                  <?php $number++ ?>
                  <tr id="lulusan{{$lulusan->id_lulusan}}">
                   <td>{{$number}}</td>
                   <td>{{$lulusan->nama}}</td>
                   <td>{{$lulusan->nim}}</td>
                   @if(Auth::user()->id_departemen==10)
                   <td>{{$lulusan->nama_departemen}}</td>
                   @endif
                   <td>{{$lulusan->judul_skripsi}}</td>
                   <td>{{$lulusan->pembimbing1}}</td>
                   <td>{{$lulusan->pembimbing2}}</td>
                   <td>{{$lulusan->no_ijazah}}</td>
                   <td>{{$lulusan->tahun_masuk}}</td>
                   <td>{{$lulusan->tahun_lulus}}</td>
                   <td>{{$lulusan->total_bulan}}</td>
                   <td>{{$lulusan->total_tahun}}</td>
                   <td>{{$lulusan->ipk}}</td>
                    @if(Auth::user()->id_departemen!=10)
                    @if(Auth::User()->role!=2 and Auth::User()->role!=14)
                   <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$lulusan->id_lulusan}}">
                    <span>Ubah</span>
                    </button>
                    {!! Form::open(['method' => 'DELETE','route' => ['lulusan.destroy', $lulusan->id_lulusan],'style'=>'display:inline']) !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                    </td>
                    @endif
                    @endif
                  </tr>

                  <!-- Edit -->
            <div class="modal fade" id="modal-default{{$lulusan->id_lulusan}}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit Kelulusan Mahasiswa {{$dept[0]->nama_departemen}}</h4>
                  </div>
                  <div class="modal-body">
                    <div class="box box-info">
                      {!! Form::open(array('route' => ['lulusan.update', $lulusan->id_lulusan], 'class'=>'form-horizontal', 'method'=>'PUT')) !!}
                      <div class="box-body">
                        <div class="form-group">
                          <label class="col-xs-12 col-sm-6 col-md-8">Nama</label>
                            <div class="col-sm-12">
                            {!! Form::text('nama', $lulusan->nama, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                            </div>
                        </div>
                      <div class="form-group">
                        <label class="col-xs-12 col-sm-6 col-md-8">NIM</label>
                          <div class="col-sm-12">
                            {!! Form::text('nim', $lulusan->nim, array('placeholder' => 'NIM','class' => 'form-control','required'=>'required')) !!}
                          @if ($errors->has('nim')) <p>{{ $errors->first('nim') }}</p> @endif 
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-xs-12 col-sm-6 col-md-8">Judul Skripsi</label>
                          <div class="col-sm-12">
                            {!! Form::textarea('judul_skripsi', $lulusan->judul_skripsi, array('placeholder' => 'Judul Skripsi','class' => 'form-control','rows'=>'3','required'=>'required')) !!}
                        @if ($errors->has('judul_skripsi')) <p>{{ $errors->first('judul_skripsi') }}</p> @endif 
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-xs-12 col-sm-6 col-md-8">Nomor Ijazah</label>
                          <div class="col-sm-12">
                            {!! Form::text('no_ijazah', $lulusan->no_ijazah, array('placeholder' => 'Nomor Ijazah','class' => 'form-control','required'=>'required')) !!}
                          @if ($errors->has('no_ijazah')) <p>{{ $errors->first('no_ijazah') }}</p> @endif 
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-xs-12 col-sm-6 col-md-8">Pembimbing</label>
                          <div class="col-xs-6">
                            {!! Form::text('pembimbing1', $lulusan->pembimbing1, array('placeholder' => 'Pembimbing 1','class' => 'form-control')) !!}
                          </div>
                          <div class="col-xs-6">
                            {!! Form::text('pembimbing2', $lulusan->pembimbing2, array('placeholder' => 'Pembimbing 2','class' => 'form-control')) !!}
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-xs-12 col-sm-6 col-md-8">Tanggal Masuk</label>
                        <div class="col-sm-12">
                          <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        {!! Form::date('tahun_masuk', $lulusan->tahun_masuk, array('placeholder' => 'YYYY-MM-DD','class' => 'form-control', 'id'=>'tgl3')) !!}
                      </div>   
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="col-xs-12 col-sm-6 col-md-8">Tanggal Lulus</label>
                        <div class="col-sm-12">
                          <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                            {!! Form::date('tahun_lulus', $lulusan->tahun_lulus, array('placeholder' => 'YYYY-MM-DD','class' => 'form-control', 'id'=>'tgl4')) !!}
                          </div>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="col-xs-12 col-sm-6 col-md-8">Total Bulan</label>
                        <div class="col-sm-12">
                        {!! Form::text('total_bulan', $lulusan->total_bulan, array('placeholder' => 'Total Bulan','class' => 'form-control', 'id'=>'ratabln')) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-xs-12 col-sm-6 col-md-8">Total Tahun</label>
                        <div class="col-sm-12">
                        {!! Form::text('total_tahun', $lulusan->total_tahun, array('placeholder' => 'Total Tahun','class' => 'form-control', 'id'=>'ratathn')) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-xs-12 col-sm-6 col-md-8">IPK</label>
                        <div class="col-sm-12">
                        {!! Form::number('ipk', $lulusan->ipk, array('placeholder' => 'IPK','class' => 'form-control','min'=>0.00, 'max'=>4.00, 'step'=>0.01)) !!}
                        </div>
                      </div>
                    </div>
                      <div class="form-group">
                        <div class="modal-footer">
                          <button type="submit" class="col-md-4 col-md-offset-8 btn btn-primary">Simpan Perubahan</button>
                        </div>
                      </div>
                    </div>
                    {!! Form::close() !!}
                  </div>
                </div>       
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- tutup modal edit -->
              @endforeach
              </tbody>
              <tfoot>
                <th colspan="9">Rata-Rata</th>
                @if(Auth::user()->id_departemen==10)
                <th colspan="1"></th>
                @endif
                <th><?php echo number_format($ratabulan,2) ?> </th>
                <th><?php echo number_format($ratatahun,2) ?> </th>
                <th><?php echo number_format($rataipk,2) ?> </th>
                @if(Auth::user()->id_departemen!=10)
                @if(Auth::user()->role!=2 and Auth::User()->role!=14)
                <th></th>
                @endif
                @endif
              </tfoot>
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
                <h4 class="modal-title">Kelulusan Mahasiswa {{$dept[0]->nama_departemen}}</h4>
            </div>
            <div class="modal-body">
              <div class="box box-info">
                {!! Form::open(array('route' => 'lulusan.store','class'=>'form-horizontal','method'=>'POST')) !!}
                <div class="box-body">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-10">
                      {!! Form::text('nama', null, array('placeholder' => 'Nama','class' => 'form-control','required'=>'required')) !!}
                      </div>
                  </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">NIM</label>
                    <div class="col-sm-10">
                      {!! Form::text('nim', null, array('placeholder' => 'NIM','class' => 'form-control', 'required'=>'required')) !!}
                      @if ($errors->has('nim')) <p>{{ $errors->first('nim') }}</p> @endif  
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Judul Skripsi</label>
                    <div class="col-sm-10">
                      {!! Form::textarea('judul_skripsi', null, array('placeholder' => 'Judul Skripsi','class' => 'form-control','rows'=>'3','required'=>'required')) !!}
                      @if ($errors->has('judul_skripsi')) <p>{{ $errors->first('judul_skripsi') }}</p> @endif 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor Ijazah</label>
                    <div class="col-sm-10">
                      {!! Form::text('no_ijazah', null, array('placeholder' => 'Nomor Ijazah','class' => 'form-control', 'required'=>'required')) !!}
                      @if ($errors->has('no_ijazah')) <p>{{ $errors->first('no_ijazah') }}</p> @endif 
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pembimbing</label>
                    <div class="col-xs-5">
                      {!! Form::text('pembimbing1', null, array('placeholder' => 'Pembimbing 1','class' => 'form-control', 'required'=>'required')) !!}
                    </div>
                
                    <div class="col-xs-5">
                      {!! Form::text('pembimbing2', null, array('placeholder' => 'Pembimbing 2','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Masuk</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::date('tahun_masuk', null, array('placeholder' => 'YYYY-MM-DD','class' => 'form-control', 'id'=>'tgl1')) !!}
                </div>   
                  </div>
                </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lulus</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::date('tahun_lulus', null, array('placeholder' => 'YYYY-MM-DD','class' => 'form-control', 'id'=>'tgl2')) !!}
                    </div>
                  </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Total Bulan</label>
                  <div class="col-sm-10">
                  {!! Form::text('total_bulan', null, array('placeholder' => 'Total Bulan','class' => 'form-control', 'id'=>'selisih')) !!}
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Total Tahun</label>
                  <div class="col-sm-10">
                  {!! Form::text('total_tahun', null, array('placeholder' => 'Total Tahun','class' => 'form-control','id'=>'selisihthn')) !!}
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> IPK </label>
                  <div class="col-sm-10">
                  {!! Form::number('ipk', null, array('placeholder' => 'IPK','class' => 'form-control','min'=>0.00,'max'=>4.00, 'step'=>0.01, 'required'=>'required')) !!}
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
      <div class="modal-dialog">
        <div class="modal-content">
          <form method="post" action=" {{ route('lulusan.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hiddem="true"> &times; </span>
              </button>
               <h3 class="modal-title">Upload Data Kelulusan Mahasiswa {{$dept[0]->nama_departemen}}</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
              <div class="form-group">
                <label for="file" class="col-sm-2 control-label">Upload</label>
                  <div class="col-md-10">
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
<!-- Report Modal -->
     <div class="modal fade" id="modalReport">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong>Tabel 3.2</strong> Rata-rata Masa Studi dan IPK lulusan menurut Program Studi periode TA <?php echo $thn4 ?>/<?php echo $thn1 ?>, <?php echo $thn1 ?>/<?php echo $thn2 ?>, dan <?php echo $thn2 ?>/<?php echo $thn3 ?></h4>
              </div>
              <div class="modal-body">
                <div class="box box-info">
                  <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                      <th rowspan="2" style="text-align: center"> Program Studi </th>
                      <th colspan="2" style="text-align: center"> MASA STUDI </th>
                      <th rowspan="2" style="text-align: center"> Rata-rata <br> IPK LULUSAN </th>
                    </tr>
                    <tr>
                        <th style="text-align: center">Bulan</th>
                        <th style="text-align: center">Tahun</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($lastdate as $lastdate2) 
                      @if($lastdate2->id_departemen!=10)
                      <tr>
                      <td value="{{ $lastdate2->id_departemen }}"> {!! $lastdate2->nama_departemen !!}</td>
                      <td style="text-align: center"><?php echo number_format($lastdate2->total,2) ?></td>
                      <td style="text-align: center"><?php echo number_format($lastdate2->totalthn,2) ?></td>
                      <td style="text-align: center"><?php echo number_format($lastdate2->rataipk2,2) ?></td>
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                    <tfoot>
                        <th> RATA-RATA FMIPA </th>
                        <th style="text-align: center">{{ number_format($rata_bln,2) }}</th>
                        <th style="text-align: center">{{ number_format($rata_thn,2) }}</th>
                        <th style="text-align: center">{{ number_format($rata_ipk,2) }}</th>
                    </tfoot>
                  </table>
              </div>
            </div>
          </div>
              <div class="modal-footer">
                  <a href="{{ route('lulusan.lulusanexcel')}}" class="btn btn-primary"><i class="fa fa-download"></i><strong> .xls</strong></a>
                  <a href="{{ route('lulusan.downloadlulusan')}}" class="btn btn-primary"><i class="fa fa-download"></i><strong>.pdf</strong></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <!-- modal Download user -->
        <!-- Download -->
      <div class="modal fade" id="modal" tabindex="1" aria-hidden="true">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
              <h3 class="modal-title">Download Laporan Kelulusan Mahasiswa {{$dept[0]->nama_departemen}}</h3>
            </div>   
             <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">   
                    <div class="col-sm-15">
                      <a href="{{ route('lulusan.export') }}" class="btn btn-primary btn-md">
                      <i class="fa fa-file-excel-o"> Download Format Excel</i>
                      </a>
                      <a href="download1" class="btn btn-primary btn-md">
                      <i class="fa fa-file-pdf-o"> Download Format PDF</i>
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
          </div>
        </div>
      </div>

</section>
@endsection