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
          HASIL PENGABDIAN @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
                @if(Auth::User()->role!=2)
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus"></i> <span>Tambah</span>
                  </button>
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-exim">
                    <i class="fa fa-upload"></i> <span>Upload</span>
                  </button>
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-download"></i> <span>Download</span>
                  </button>
                   @else
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-download"></i> <span>Download</span>
                  </button>
                @endif
              @endif
              @if(Auth::User()->id_departemen==10)
                <a href="{{ route('jumlah.jumlahexcel') }}" class="btn btn-primary btn-md">
                <i class="fa fa-download"> .xls</i>
                </a>
                <a href="{{ route('jumlah.downloadm')}}" class="btn btn-primary btn-md">
                <i class="fa fa-download"> .pdf</i>
                </a>
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
                  <h4 style="text-align: left;"> Tabel 9.3 Data Hasil Pengabdian @if(Auth::User()->id_departemen==10) @elseif(Auth::User()->id_departemen!=10) Program Studi {{$dept[0]->nama_departemen}} FMIPA IPB @endif</h4>
                  <tr>
                  <th style="text-align: center">No</th>
                  <th rowspan="2" style="text-align: center">Judul Hasil Penelitian</th>
                  <th rowspan="2" style="text-align: center">Nama Dosen</th>
                  <th rowspan="2" style="text-align: center">Dipublikasi Pada</th>
                  <th rowspan="2" style="text-align: center">Tahun Publikasi</th>
                  <th rowspan="2" style="text-align: center">Tingkat</th>
                  <th rowspan="2" style="text-align: center">Bukti</th>
                  @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role==5)
                  <th style="text-align: center">Actions</th>
                  @endif
                  @endif
                  </tr>
                  <tfoot>
                    <th colspan="2">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                   
                  </tfoot>

                  <tr>
                  <th rowspan="2" style="text-align: center">(1)</th>
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                 
                  </tr>
                  </thead>
                  <tbody>
                  <?php $nomor = 0;?>
                  @foreach ($hasil_pengabdian as $hasilPengabdian)
                  <?php $nomor++ ;?>
                   <tr>
                  <td>{{ $nomor }}</td>
                  <td>{{$hasilPengabdian->judul_hasilPengabdian}}</td>
                  <td>{{$hasilPengabdian->nama_dosenPengabdian}}</td>
                  <td>{{$hasilPengabdian->dipublikasi_pada}}</td>
                  <td>{{$hasilPengabdian->tahun_publikasi}}</td>
                  <td>{{$hasilPengabdian->tingkat_hasilpengabdian}}</td>
                 <td>
                  <button type="button" class=" btn-sm" data-toggle="modal" data-target="#modal-default2">
                     <i class="fa fa-upload"></i>
                    </button>
                    
                  <button type="button" class=" btn-sm" data-toggle="modal" data-target="#modal">
                     <i class="fa fa-download"></i>
                    </button>
                    </td>


                  <td>
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$hasilPengabdian->id_hasilPengabdian}}">
                    <span>Ubah</span>
                    </button>
                    {!! Form::open(['method' => 'DELETE','route' => ['standar9hasilpengabdian.destroy', $hasilPengabdian->id_hasilPengabdian],'style'=>'display:inline']) !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                  </td>
                  </tr>

          <!-- Edit -->
          <div class="modal fade" id="modal-default{{$hasilPengabdian->id_hasilPengabdian}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ubah Hasil Pengabdian {{$dept[0]->nama_departemen}}</h4>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(array('route' => ['standar9hasilpengabdian.update', $hasilPengabdian->id_hasilPengabdian],'class'=>'form-horizontal','method'=>'PUT')) !!}
                    <div class="box-body">
                      <div class="form-group">
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Judul Hasil Penelitian</label>
                          <div class="col-sm-6">
                          {!! Form::text('judul_hasilPengabdian', $hasilPengabdian->judul_hasilPengabdian, array('placeholder' => 'Judul Hasil Penelitian','class' => 'form-control')) !!}
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Nama Dosen</label>
                            <div class="col-sm-6">
                            {!! Form::text('nama_dosenPengabdian', $hasilPengabdian->nama_dosenPengabdian, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Dipublikasi Pada</label>
                            <div class="col-sm-6">
                            {!! Form::text('dipublikasi_pada', $hasilPengabdian->dipublikasi_pada, array('placeholder' => 'Dipublikasi pada','class' => 'form-control')) !!}
                            </div>
                        </div>
                       <div class="form-group">
                          <label class="col-sm-5 control-label">Tahun Publikasi</label>
                            <div class="col-sm-6">
                           {!! Form::selectRange('tahun_publikasi', '2016', '2030',  $hasilPengabdian->tahun_publikasi, array('placeholder' => 'Tahun Publikasi','class' => 'form-control')) !!}
                            </div>
                        </div>  
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Tingkat</label>
                            <div class="col-sm-6">
                            {!! Form::text('tingkat_hasilpengabdian', $hasilPengabdian->tingkat_hasilpengabdian, array('placeholder' => 'Tingkat','class' => 'form-control')) !!}
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


         <!-- Tambah Data -->
     <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">Tambah Hasil Pengabdian {{$dept[0]->nama_departemen}}</h3>
            </div>
            <div class="modal-body">
              <div class="box box-info">
             {!! Form::open(array('route' => 'standar9hasilpengabdian.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="modal-header">
              <div class="form-group">
              <label class="col-sm-5 control-label">Judul Hasil Penelitian</label>
                <div class="col-sm-6">
                {!! Form::text('judul_hasilPengabdian', null, array('placeholder' => 'Judul Hasil Penelitian','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Nama Dosen</label>
                  <div class="col-sm-6">
                  {!! Form::text('nama_dosenPengabdian', null, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Dipublikasi pada</label>
                  <div class="col-sm-6">
                  {!! Form::text('dipublikasi_pada', null, array('placeholder' => 'Dipublikasi pada','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Tahun Publikasi</label>
                  <div class="col-sm-6">
                  {!! Form::selectRange('tahun_publikasi','2014', '2060', array('placeholder' => 'Tahun Publikasi','class' => 'form-control', 'min'=>2016)) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Tingkat</label>
                  <div class="col-sm-6">
                  {!! Form::text('tingkat_hasilpengabdian', null, array('placeholder' => 'Tingkat','class' => 'form-control')) !!}
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
        <form method="post" action=" {{ route('hasilPengabdian.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Upload Hasil Pengabdian {{$dept[0]->nama_departemen}}</h3>
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
    <div class="modal fade" id="modal" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('hasilPengabdian.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Download Hasil Pengabdian {{$dept[0]->nama_departemen}}</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">              
                    <div class="col-sm-10">
                      <a href="{{ route('hasilPengabdian.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-file-excel-o"> Download Excel</i>
                      </a>
                      <a href="pdfuserhasilpengabdian" class="btn btn-primary btn-md">
                      <i class="fa fa-file-pdf-o"> Download PDF</i>
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

</div>
</div>
</div>
</section>

@endsection