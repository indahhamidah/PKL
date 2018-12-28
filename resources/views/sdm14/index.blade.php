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
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default24">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            @endif
            @endif
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal24">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
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
              <table id="example2424" class="table table-bordered table-hover">
                <thead>
                  
                  <!-- Judul -->
                  <h4 style="text-align: left;"> 
                 Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi. 
                </h4>
                <!-- Akhir Judul -->
                  

              <tbody id="sdm14-list" name="sdm14-list">
              
                <tr>
                   <table style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;">Nama Dosen</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;" >Nama Organisasi Keilmuan atau Organisasi Profesi</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;" >Kurun Waktu</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;" >Tingkat (Lokal, Nasional, Internasional)</th>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;" >Action</th>
                     @endif
                     @endif
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(5)</th>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;"></th>
                     @endif
                     @endif
                   </tr>
                  <?php $no = 0;?>
                   @foreach ($sdm14 as $sdm14)
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm14->nama_sdm14 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm14->nama_organisasi }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm14->kurun_waktu }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm14->tingkat }}</td>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$sdm14->id_keikutsertaan_organisasi}}">
                    <span>Ubah</span>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modald{{$sdm14->id_keikutsertaan_organisasi}}">
                        <span>Hapus</span></button>
                  </td>
                  @endif
                  @endif
                   </tr>

<!-- Delete -->
    <div class="modal fade" id="modald{{$sdm14->id_keikutsertaan_organisasi}}" tabindex="1" aria-hidden="true">
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
                                          {!! Form::open(['method' => 'DELETE','route' => ['sdm14.destroy', $sdm14->id_keikutsertaan_organisasi],'style'=>'display:inline']) !!}
                                          {!! Form::submit('&nbsp;&nbsp;Ya&nbsp;&nbsp;', ['class' => 'btn btn-danger']) !!}
                                          {!! Form::close() !!}
                                        </a>
                                        <a href="/sdm14" class="btn btn-primary">
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
               <div class="modal fade" id="modal-default{{$sdm14->id_keikutsertaan_organisasi}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ubah Data Tabel </h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['sdm14.update', $sdm14->id_keikutsertaan_organisasi],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">                               
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Nama Dosen :</label>
                            <div class="col-sm-11">
                             {!! Form::text('nama_sdm14', $sdm14->nama_sdm14, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}
                            </div>
                          </div>       
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Nama Organisasi Keilmuan atau Organisasi Profesi  :</label>
                            <div class="col-sm-11">
                             {!! Form::text('nama_organisasi', $sdm14->nama_organisasi, array('placeholder' => 'Nama Organisasi Keilmuan atau Organisasi Profesi  ','class' => 'form-control')) !!}
                            </div>
                          </div>       
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Kurun Waktu:</label>
                            <div class="col-sm-11">
                             {!! Form::text('kurun_waktu', $sdm14->kurun_waktu, array('placeholder' => 'Kurun Waktu','class' => 'form-control')) !!}
                            </div>
                          </div>  
                          <div class="form-group">
                          <label class="col-xs-12 col-sm-6 col_md-8">Tingkat(Lokal,Nasional,Internasional):</label>
                            <div class="col-sm-11">
                            <select name="id_tingkat" class="form-control">
                                <option value="1" {{$sdm14->id_tingkat==1 ? 'selected' : ''}}>Lokal</option>
                                <option value="2" {{$sdm14->id_tingkat==2 ? 'selected' : ''}}>Nasional</option>
                                <option value="3" {{$sdm14->id_tingkat==3 ? 'selected' : ''}}>Internasional</option>
                              </select>
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
      </div>
    </div>
       

<!-- Tambah Data -->
    <div class="modal fade" id="modal-default24">
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
            {!! Form::open(array('route' => 'sdm14.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama Dosen :</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_sdm14', null, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}  
                </div>
              </div>   
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama Organisasi Keilmuan atau Organisasi Profesi  :</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_organisasi', null, array('placeholder' => 'Nama Organisasi Keilmuan atau Organisasi Profesi ','class' => 'form-control')) !!}  
                </div>
              </div> 
                <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Kurun Waktu :</label>
                  <div class="col-sm-10">
                  {!! Form::text('kurun_waktu', null, array('placeholder' => 'Kurun Waktu','class' => 'form-control')) !!}  
                </div>
              </div>     
              <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Tingkat (Lokal, Nasional, Internasional) :</label>
                  <div class="col-sm-10">
                  <select name="id_tingkat" class="form-control">
                                <option value="1">Lokal</option>
                                <option value="2">Nasional</option>
                                <option value="3">Internasional</option>
                              </select>
                              </select>
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
  <div class="modal fade" id="modal-exim24" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('sdm14.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Upload SDM @if(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif</h3>
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
    <div class="modal fade" id="modal24" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('sdm14.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
                      <a href="{{ route('sdm14.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="downloadsdm14" class="btn btn-primary btn-md">
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
