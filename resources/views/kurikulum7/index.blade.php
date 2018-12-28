@extends('layouts.app')
@section('content') 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        Kurikulum @if(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
            @if(Auth::User()->role==10)
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default7">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal7">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
            @else
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal7">
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
              <table id="example267" class="table table-bordered table-hover">
                <thead>
                  
                  <!-- Judul -->
                  <h4 style="text-align: left;"> 
                   Tuliskan substansi praktikum/praktek yang mandiri ataupun yang merupakan bagian dari mata kuliah tertentu, dengan mengikuti format di bawah ini:
                </h4>
                <!-- Akhir Judul -->
                  

              <tbody id="kurikulum7-list" name="kurikulum7-list">
              
                <tr>
                   <table style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">No</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Kode MK</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Nama Praktikum/Praktek</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Bobot SKS Praktikum</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Isi Praktikum/Praktek</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Jumlah Pertemuan</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Tempat/Lokasi Praktikum/Praktek</th>
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Action</th>
                  @endif
                  @endif
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Judul/Modul</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Jam Pelaksanaan</th>
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
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;"></th>
                  @endif
                  @endif
                   </tr>
                   <?php $no = 0;?>
                  @foreach ($kurikulum7 as $kurikulum7)
                 <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $kurikulum7->kode_mk }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $kurikulum7->nama_praktikum_kurikulum7 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum7->jumlah_sks }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $kurikulum7->judul_praktikum }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum7->jam_pelaksanaan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum7->jumlah_pertemuan_praktikum }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum7->tempat_praktikum }}</td>
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$kurikulum7->id_substansi_praktikum}}">
                    <span>Ubah</span>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modald{{$kurikulum7->id_substansi_praktikum}}">
                        <span>Hapus</span></button>
                  </td>
                  @endif
                  @endif
                   </tr>

<!-- Delete -->
    <div class="modal fade" id="modald{{$kurikulum7->id_substansi_praktikum}}" tabindex="1" aria-hidden="true">
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
                                          {!! Form::open(['method' => 'DELETE','route' => ['kurikulum7.destroy', $kurikulum7->id_substansi_praktikum],'style'=>'display:inline']) !!}
                                          {!! Form::submit('&nbsp;&nbsp;Ya&nbsp;&nbsp;', ['class' => 'btn btn-danger']) !!}
                                          {!! Form::close() !!}
                                        </a>
                                        <a href="/kurikulum7" class="btn btn-primary">
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
               <div class="modal fade" id="modal-default{{$kurikulum7->id_substansi_praktikum}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ubah Data Tabel </h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['kurikulum7.update', $kurikulum7->id_substansi_praktikum],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">        
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Kode MK :</label>
                            <div class="col-sm-11">
                             {!! Form::text('kode_mk', $kurikulum7->kode_mk, array('placeholder' => 'Kode MK','class' => 'form-control')) !!}
                            </div>
                          </div>                                 
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Nama Praktikum/Praktek :</label>
                            <div class="col-sm-11">
                             {!! Form::text('nama_praktikum_kurikulum7', $kurikulum7->nama_praktikum_kurikulum7, array('placeholder' => 'Nama Praktikum/Praktek','class' => 'form-control')) !!}
                            </div>
                          </div>   
                           <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">Bobot SKS Praktikum :</label>
                            <div class="col-sm-11">
                            <select name="id_jumlah_sks" class="form-control">
                                <option value="1" {{$kurikulum7->id_jumlah_sks==1 ? 'selected' : ''}}>1</option>
                                <option value="2" {{$kurikulum7->id_jumlah_sks==2 ? 'selected' : ''}}>2</option>
                                <option value="3" {{$kurikulum7->id_jumlah_sks==3 ? 'selected' : ''}}>3</option>
                                <option value="4" {{$kurikulum7->id_jumlah_sks==4 ? 'selected' : ''}}>4</option>
                                
                              </select>
                            </div>
                        </div>
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Judul/Modul :</label>
                            <div class="col-sm-11">
                             {!! Form::text('judul_praktikum', $kurikulum7->judul_praktikum, array('placeholder' => 'Judul/Modul','class' => 'form-control')) !!}
                            </div>
                          </div>     
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Jam Pelaksanaan :</label>
                            <div class="col-sm-11">
                             {!! Form::number('jam_pelaksanaan', $kurikulum7->jam_pelaksanaan, array('placeholder' => 'Jam Pelaksanaan','class' => 'form-control')) !!}
                            </div>   
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Jumlah Pertemuan :</label>
                            <div class="col-sm-11">
                             {!! Form::number('jumlah_pertemuan_praktikum', $kurikulum7->jumlah_pertemuan_praktikum, array('placeholder' => 'Jumlah Pertemuan','class' => 'form-control')) !!}
                            </div>
                          </div>        
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Tempat/Lokasi Praktikum/Praktek :</label>
                            <div class="col-sm-11">
                             {!! Form::text('tempat_praktikum', $kurikulum7->tempat_praktikum, array('placeholder' => 'Tempat/Lokasi Praktikum/Praktek','class' => 'form-control')) !!}
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
    <div class="modal fade" id="modal-default7">
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
            {!! Form::open(array('route' => 'kurikulum7.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Kode MK :</label>
                  <div class="col-sm-10">
                  {!! Form::text('kode_mk', null, array('placeholder' => 'Kode MK','class' => 'form-control')) !!}  
                </div>
              </div> 
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama Praktikum/Praktek :</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_praktikum_kurikulum7', null, array('placeholder' => 'Nama Praktikum/Praktek','class' => 'form-control')) !!}  
                </div>
              </div>   
              <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Bobot SKS Praktikum :</label>
                  <div class="col-sm-10">
                  <select name="id_jumlah_sks" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Judul/Modul :</label>
                  <div class="col-sm-10">
                  {!! Form::text('judul_praktikum', null, array('placeholder' => 'Judul/Modul','class' => 'form-control')) !!}  
                </div>
              </div> 
                <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Jam Pelaksanaan :</label>
                  <div class="col-sm-10">
                  {!! Form::number('jam_pelaksanaan', null, array('placeholder' => 'Jam Pelaksanaan','class' => 'form-control')) !!}  
                </div>
              </div> 
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Jumlah Pertemuan :</label>
                      <div class="col-sm-10">
                     {!! Form::number('jumlah_pertemuan_praktikum', null, array('placeholder' => 'Jumlah Pertemuan','class' => 'form-control')) !!}
                    </div>
                   </div>              
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Tempat/Lokasi Praktikum/Praktek :</label>
                      <div class="col-sm-10">
                     {!! Form::text('tempat_praktikum', null, array('placeholder' => 'Tempat/Lokasi Praktikum/Praktek','class' => 'form-control')) !!}
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
  <div class="modal fade" id="modal-exim7" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('kurikulum7.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Upload Kurikulum @if(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif</h3>
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
    <div class="modal fade" id="modal7" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('kurikulum7.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
                      <a href="{{ route('kurikulum7.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="downloadkurikulum7" class="btn btn-primary btn-md">
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
