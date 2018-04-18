<style>
table, th, td{
  border: 1px solid black;
}
</style>
@extends('layouts.app')
@section('content')

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        MAHASISWA
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
              <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus"></i> <span>Tambah</span>
              </button>

              <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-exim">
                <i class="fa fa-upload"></i> <span>Upload</span>
              </button>
              
               <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
                <i class="fa fa-download"></i> <span>Download</span>
              </button>
            @endif

            @if(Auth::User()->id_departemen==10)
                        <a href="{{ route('jumlah.jumlahexcel') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> .xls</i>
                        </a>
                        <a href="{{ route('jumlah.downloadm')}}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> .pdf</i>
                        </a>


                        <!-- cari Departemen -->
                         <form id="id_jumlah" class="form-horizontal" role="form" method="POST" action="{{ 'cari' }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                      <label class="col-md-4 control-label">Program Studi</label>
                          <div class="col-md-4 ">
                              <select class="form-control" name="idDept" style="margin-left: 30px">
                                @foreach($listdept as $departemen)
                                 <option value="{{$departemen->id_dept}}"> {{$departemen->nama_departemen}}</option>
                                  @endforeach
                              </select>
                              <small class="help-block"></small>
                          </div>
                          <div class="form-group">
                              <div class="col-md-2">
                                  <button type="submit" class="btn btn-flat btn-social btn-dropbox" id="button-reg" >
                                    <i class="glyphicon glyphicon-search" ></i>Pilih  
                                  </button>
                              </div>
                          </div>
                      </div>
                    </form>
                        @endif

       <!-- cari -->
         @if(Auth::User()->id_departemen!=10)
       <form id="id_jumlah" class="form-horizontal" role="form" method="POST" action="{{ 'cariTahun' }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                          <label class="col-md-2 control-label" style="margin-left: 90px"></label>
                          <div class="col-md-3 ">
                              <select class="form-control" name="idTahun" style="margin-left: 30px">
                                  @foreach ($listtahun as $listtahuns)
                                  <option value="{{$listtahuns->tahun}}"> {{$listtahuns->tahun}}</option>
                                  @endforeach
                              </select>
                              
                              <small class="help-block"></small>
                          </div>
                          <div class="form-group">
                              <div class="col-md-2">
                                  <button type="submit" class="btn btn-flat btn-social btn-dropbox" id="button-reg">
                                    <i class="glyphicon glyphicon-search"></i>Pilih  
                                  </button>
                              </div>
                          </div>
                      </div>
                    </form>
              @endif
          </div>
          
          
    <!-- alert sukses dan eror -->
            @if(Session::has('message'))
              <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="alert alert-danger">
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

            <div class="panel-body"  style="margin-bottom: 400px"> 
              <table id="example2" class="table table-bordered table-hover dataTable">
                <thead>
                  <tr>
                  <h4 style="text-align: center"> Tabel 3.1 Jumlah Mahasiswa Departemen Menurut Tipe Program dan Jenis Mahasiswa per Program Studi</h4>
                  <th rowspan="2" style="text-align: center">Tahun</th>
                  @if(Auth::user()->id_departemen!=10)
                  <th rowspan="2" style="text-align: center">Daya Tampung</th>
                  <th colspan="2" style="text-align: center">Jumlah Calon Mahasiswa</th>
                  @endif
                  <th colspan="3" style="text-align: center">Program Reguler</th>
                  <th colspan="3" style="text-align: center">Program Non-Reguler</th>
                  
                  <tr>
                  <!-- JUmlah Calon -->
                  @if(Auth::user()->id_departemen!=10)
                  <th style="text-align: center">Ikut Seleksi</th>
                  <th style="text-align: center">Lulus Seleksi</th>
                  @endif
                  <!-- Program Reguler -->
                  <th style="text-align: center">Mahasiswa Baru Bukan Transfer</th>
                  <th style="text-align: center">Mahasiswa Baru Transfer</th>
                  <th style="text-align: center">Total Mahasiswa Reguler</th>
                  <!-- Program Non-Reguler -->
                  <th style="text-align: center">Mahasiswa Baru Bukan Transfer</th>
                  <th style="text-align: center">Mahasiswa Baru Transfer</th>
                  <th style="text-align: center">Total Mahasiswa Non-Reguler</th>
                  <th style="text-align: center">Total Mahasiswa</th>
                  @if(Auth::user()->id_departemen==10)
                  <th style="text-align: center">Departemen</th>
                  @endif
               
                   @if(Auth::user()->id_departemen!=10)
                  
                  <th style="text-align: center">Actions</th>
                  @endif
                </tr>
                </tr>
               </thead>
               <tbody id="jumlahs-list" name="jumlahs-list">
                @foreach ($jumlahs as $jumlah)
                  <tr>
                  <td>{{$jumlah->tahun}}</td>
                  @if(Auth::user()->id_departemen!=10)
                  <td>{{$jumlah->daya_tampung}}</td>
                  <td>{{$jumlah->ikut_seleksi}}</td>
                  <td>{{$jumlah->lulus_seleksi}}</td>
                  @endif
                   <td>{{$jumlah->mbt_reguler}}</td>
                   <td>{{$jumlah->mt_reguler}}</td>
                   <td>{{$jumlah->total_reguler}}</td>
                   <td>{{$jumlah->mbt_nonreguler}}</td>
                   <td>{{$jumlah->mt_nonreguler}}</td>
                   <td>{{$jumlah->total_nonreguler}}</td>
                   <td>{{ $jumlah->mbt_reguler+$jumlah->mt_reguler+$jumlah->total_reguler+$jumlah->mbt_nonreguler+$jumlah->mt_nonreguler+$jumlah->total_nonreguler }}</td>
                   @if(Auth::user()->id_departemen==10)
                   <td>{{$jumlah->nama_departemen}}</td>
                   @endif
          @if(Auth::user()->id_departemen!=10)
          <td>
          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$jumlah->id_jumlah}}">
                  <span>Ubah</span>
              </button>
                  {!! Form::open(['method' => 'DELETE','route' => ['jumlah.destroy', $jumlah->id_jumlah],'style'=>'display:inline']) !!}
                  {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                  {!! Form::close() !!}
                    </td>
                    @endif
                  </tr>


                  <!-- Edit -->
                  <div class="modal fade" id="modal-default{{$jumlah->id_jumlah}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Edit Mahasiswa</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box box-info">
                            {!! Form::open(array('route' => ['jumlah.update', $jumlah->id_jumlah],'class'=>'form-horizontal','method'=>'PUT')) !!}

              <div class="box-body" >
              <!-- Program Reguler -->
               <div class="modal-header">
               <div class="form-group">
                                <label class="col-sm-5 control-label">Tahun</label>
                                  <div class="col-sm-6">
                                 {!! Form::selectRange('tahun', '2016', '2030',  $jumlah->tahun, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                                </div>
                              </div>
               <div class="form-group">
                      <label class="col-sm-5 control-label">Daya Tampung</label>
                      <div class="col-sm-6">
                       {!! Form::number('daya_tampung', $jumlah->daya_tampung, array('placeholder' => 'Daya Tampung','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div>

                      <div class="form-group">
                      <label class="col-sm-5 control-label">Ikut Seleksi</label>
                      <div class="col-sm-6">
                          {!! Form::number('ikut_seleksi', $jumlah->ikut_seleksi, array('placeholder' => 'Ikut Seleksi','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div>
                                <div class="form-group">
                      <label class="col-sm-5 control-label">Lulus Seleksi</label>
                      <div class="col-sm-6">
                          {!! Form::number('lulus_seleksi', $jumlah->lulus_seleksi, array('placeholder' => 'Lulus Seleksi','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                                <div class="modal-header">
                                </div>
                              </div>

               <div class="modal-header">
                  <h4 class="modal-title">Program Reguler</h4>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-8 control-label">Mahasiswa Baru Bukan Transfer</label>
                      <div class="col-sm-4">
                          {!! Form::number('mbt_reguler', $jumlah->mbt_reguler, array('placeholder' => 'Mahasiswa Baru Bukan Transfer','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div> 
                      <div class="form-group">
                      <label class="col-sm-8 control-label">Mahasiswa Baru Transfer</label>
                      <div class="col-sm-4">
                          {!! Form::number('mt_reguler', $jumlah->mt_reguler, array('placeholder' => 'Mahasiswa Baru Bukan Transfer','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div> 
     
                              <div class="form-group">
                               <label class="col-sm-8 control-label">Total Mahasiswa Reguler</label>
                                <div class="col-sm-4">
                                  {!! Form::number('total_reguler', $jumlah->total_reguler, array('placeholder' => 'Total Mahasiswa Reguler','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div>
                             </div>
                              <!-- Program Non-Reguler -->
                              <div class="box box-info" style="margin-top: 20px">
                                  <div class="modal-header">
                                      <h4 class="modal-title">Program Reguler</h4>
                                  </div>
                               <div class="form-group">
                                <label class="col-sm-8 control-label">Mahasiswa Baru Bukan Transfer</label>
                                <div class="col-sm-4">
                             {!! Form::number('mbt_nonreguler', $jumlah->mbt_nonreguler, array('placeholder' => 'Mahasiswa Baru Bukan Transfer','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div> 
                                <div class="form-group">
                                  <label class="col-sm-8 control-label">Mahasiswa Baru Transfer</label>
                                  <div class="col-sm-4">
                              {!! Form::number('mt_nonreguler', $jumlah->mt_nonreguler, array('placeholder' => 'Mahasiswa Baru Transfer','class' => 'form-control', 'min'=>0)) !!}  
                                </div>
                              </div>
                               <div class="form-group">
                                  <label class="col-sm-8 control-label">Total Mahasiswa Non-Reguler</label>
                                  <div class="col-sm-4">
                                  {!! Form::number('total_nonreguler', $jumlah->total_nonreguler, array('placeholder' => 'Total Mahasiswa Non-Reguler','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div>
                              
                              </div>
                              <div class="form-group">
                                  <div class="modal-footer">
                                  <button type="submit" class=" col-sm-3 col-md-offset-8 btn btn-primary" style="margin-top: 20px">Simpan Perubahan</button>
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
               <tfoot>
               @if(Auth::user()->id_departemen!=10)
               <th> Total</th>
               <th><?php echo $totaldayatam ?></th>
               <th><?php echo $totalikut ?></th>
               <th><?php echo $totallulus ?></th>
               @endif
               <th></th>
               <th></th>
               <th></th>
               <th></th>
               <th></th>
               <th></th>
               <th></th>
               <th></th>
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
                <h3 class="modal-title">Tambah Mahasiswa</h3>
              </div>
              <div class="modal-body">
                 <div class="box box-info">
            {!! Form::open(array('route' => 'jumlah.store','class'=>'form-horizontal','method'=>'POST')) !!}

              <div class="box-body">
              <!-- Program Reguler -->
              <div class="modal-header">
                <div class="form-group">
                    <label class="col-sm-5 control-label">Tahun</label>
                        <div class="col-sm-6">
                      {!! Form::selectRange('tahun', '2016', '2030', array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                  </div>
                  </div>
              <div class="form-group">
                      <label class="col-sm-5 control-label">Daya Tampung</label>
                      <div class="col-sm-6">
                          {!! Form::number('daya_tampung', null, array('placeholder' => 'Daya Tampung','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div>

                      <div class="form-group">
                      <label class="col-sm-5 control-label">Ikut Seleksi</label>
                      <div class="col-sm-6">
                          {!! Form::number('ikut_seleksi', null, array('placeholder' => 'Ikut Seleksi','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div>
                                <div class="form-group">
                      <label class="col-sm-5 control-label">Lulus Seleksi</label>
                      <div class="col-sm-6">
                          {!! Form::number('lulus_seleksi', null, array('placeholder' => 'Lulus Seleksi','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div>

                  <div class="modal-header">
                  <h4 class="modal-title">Program Reguler</h4>
                    </div>
                   <div class="form-group">
                      <label class="col-sm-5 control-label">Mahasiswa Baru Bukan Transfer</label>
                      <div class="col-sm-6">
                          {!! Form::number('mbt_reguler', null, array('placeholder' => 'Mahasiswa Baru Bukan Transfer','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div> 
                 <div class="form-group">
                      <label class="col-sm-5 control-label">Mahasiswa Baru Transfer</label>
                      <div class="col-sm-6">
                          {!! Form::number('mt_reguler', null, array('placeholder' => 'Mahasiswa Baru Transfer','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div> 
                  <div class="form-group">
                      <label class="col-sm-5 control-label">Total Mahasiswa Regular</label>
                      <div class="col-sm-6">
                          {!! Form::number('total_reguler', null, array('placeholder' => 'Total Mahasiswa Regular','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div> 
                             
                              <!-- Program Non-Reguler -->
                               <div class="box box-info" style="margin-top: 50px">
                               <div class="modal-header">
                                 <h4 class="modal-title">Program Non-Reguler</h4>
                                 </div>
                              <div class="form-group">
                      <label class="col-sm-5 control-label">Mahasiswa Baru Bukan Transfer</label>
                      <div class="col-sm-6">
                          {!! Form::number('mbt_nonreguler', null, array('placeholder' => 'Mahasiswa Baru Bukan Transfer','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div> 
                 <div class="form-group">
                      <label class="col-sm-5 control-label">Mahasiswa Baru Transfer</label>
                      <div class="col-sm-6">
                          {!! Form::number('mt_nonreguler', null, array('placeholder' => 'Mahasiswa Baru Transfer','class' => 'form-control', 'min'=>0)) !!}
                                </div>
                              </div> 
                  <div class="form-group">
                      <label class="col-sm-5 control-label">Total Mahasiswa Non-Regular</label>
                      <div class="col-sm-6">
                          {!! Form::number('total_nonreguler', null, array('placeholder' => 'Total Mahasiswa Non-Regular','class' => 'form-control', 'min'=>0)) !!}
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
          {!! Form::close() !!}
    </div>
              </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
 

        <!-- import -->
        <div class="modal" id="modal-exim" tabindex="1" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                <form method="post" action=" {{ route('jumlah.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hiddem="true"> &times; </span>
        </button>
          <h3 class="modal-title">Upload Jumlah Mahasiswa</h3>
        </div>   

             <div class="modal-body">
                  <div class="form-group">
                      <label for="file" class="col-sm-2 control-label">Upload</label>
                      <div class="col-sm-10">
                         <input type="file" id="file" name="import_file" class="form-control" autofocus required>
                         <span class="help-block with-errors"></span>
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
      <div class="modal" id="modal" tabindex="1" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hiddem="true"> &times; </span>
        </button>
          <h3 class="modal-title">Download Laporan Jumlah Mahasiswa</h3>
        </div>   

             <div class="modal-body">
                  <div class="form-group">
                      
                      <div class="col-sm-15">
                        <a href="{{ route('jumlah.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-file-excel-o"> Download Format Excel</i>
                        </a>
                        <a href="download" class="btn btn-primary btn-md">
                        <i class="fa fa-file-pdf-o"> Download Format PDF</i>
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


</section>
    
@endsection



