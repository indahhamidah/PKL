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
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default9">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal9">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
            @else
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal9">
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
              <table id="example269" class="table table-bordered table-hover">
                <thead>
                  
                  <!-- Judul -->
                  <h4 style="text-align: left;"> 
                   Tuliskan hasil peninjauan tersebut, mengikuti format tabel berikut. 
                </h4>
                <!-- Akhir Judul -->
                  

              <tbody id="kurikulum9-list" name="kurikulum9-list">
              
                <tr>
                   <table style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;">No.</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;">No. MK</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Nama MK</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >MK Baru / Lama / Hapus</th>
                     <th colspan="4" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Perubahan pada</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Alasan Peninjauan</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Atas Usulan/Masukan dari</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Berlaku mulai Sem./Th.</th>
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Action</th>
                  @endif
                  @endif
                     <tr>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Silabus/SAP</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Buku Ajar</th>
                     <tr>
                      <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Ya</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Tidak</th>
                      <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Ya</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Tidak</th>
                     </tr>
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
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(9)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(10)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(11)</th>
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;"></th>
                  @endif
                  @endif
                   </tr>
                  <?php $no = 0;?>
                  @foreach ($kurikulum9 as $kurikulum9)
                 <?php $no++ ;?>
                   <tr>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $no }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->kode_mk_kurikulum9 }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->nama_mk_kurikulum9 }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->status_mk }}</td>
                     @foreach($perubahan_silabus as $perubahan_silabusi)
                    @if($kurikulum9->id_perubahan_pada_silabus == $perubahan_silabusi->id_perubahan_silabus)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                     @foreach($perubahan_buku_ajar as $perubahan_buku_ajari)
                    @if($kurikulum9->id_perubahan_pada_buku_ajar == $perubahan_buku_ajari->id_perubahan_buku_ajar)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->alasan_peninjauan }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->usulan }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->berlaku }}</td>
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                    <td style="border: 1px solid #000; padding: 5px; text-align: left;"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$kurikulum9->id_hasil_peninjauan_kurikulum}}">
                    <span>Ubah</span>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modald{{$kurikulum9->id_hasil_peninjauan_kurikulum}}">
                        <span>Hapus</span></button>
                  </td>
                  @endif
                  @endif
                   </tr>

<!-- Delete -->
    <div class="modal fade" id="modald{{$kurikulum9->id_hasil_peninjauan_kurikulum}}" tabindex="1" aria-hidden="true">
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
                                          {!! Form::open(['method' => 'DELETE','route' => ['kurikulum9.destroy', $kurikulum9->id_hasil_peninjauan_kurikulum],'style'=>'display:inline']) !!}
                                          {!! Form::submit('&nbsp;&nbsp;Ya&nbsp;&nbsp;', ['class' => 'btn btn-danger']) !!}
                                          {!! Form::close() !!}
                                        </a>
                                        <a href="/kurikulum9" class="btn btn-primary">
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
               <div class="modal fade" id="modal-default{{$kurikulum9->id_hasil_peninjauan_kurikulum}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ubah Data Tabel </h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['kurikulum9.update', $kurikulum9->id_hasil_peninjauan_kurikulum],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">   
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">No. MK :</label>
                            <div class="col-sm-11">
                             {!! Form::text('kode_mk_kurikulum9', $kurikulum9->kode_mk_kurikulum9, array('placeholder' => 'No. MK','class' => 'form-control')) !!}
                            </div>
                          </div>                                      
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Nama MK :</label>
                            <div class="col-sm-11">
                             {!! Form::text('nama_mk_kurikulum9', $kurikulum9->nama_mk_kurikulum9, array('placeholder' => 'Nama MK','class' => 'form-control')) !!}
                            </div>
                          </div>    
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">MK Baru / Lama / Hapus :</label>
                            <div class="col-sm-11">
                             {!! Form::text('status_mk', $kurikulum9->status_mk, array('placeholder' => 'MK Baru / Lama / Hapus','class' => 'form-control')) !!}
                            </div>
                          </div>  
                        <div class="form-group">
                          <label class="col-xs-12 col-sm-6 col-md-8">Silabus/SAP</label>
                            <div class="col-sm-11">
                           <select name="id_perubahan_pada_silabus" class="form-control">
                                <option value="1" {{$kurikulum9->id_perubahan_pada_silabus==1 ? 'selected' : ''}}>Ya</option>
                                <option value="2" {{$kurikulum9->id_perubahan_pada_silabus==2 ? 'selected' : ''}}>Tidak</option>
                              </select>
                            </div>
                        </div>      
                        <div class="form-group">
                          <label class="col-xs-12 col-sm-6 col-md-8">Buku Ajar</label>
                            <div class="col-sm-11">
                           <select name="id_perubahan_pada_buku_ajar" class="form-control">
                                <option value="1" {{$kurikulum9->id_perubahan_pada_buku_ajar==1 ? 'selected' : ''}}>Ya</option>
                                <option value="2" {{$kurikulum9->id_perubahan_pada_buku_ajar==2 ? 'selected' : ''}}>Tidak</option>
                              </select>
                            </div>
                        </div>      
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Alasan Peninjauan :</label>
                            <div class="col-sm-11">
                             {!! Form::text('alasan_peninjauan', $kurikulum9->alasan_peninjauan, array('placeholder' => 'Alasan Peninjauan','class' => 'form-control')) !!}
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Atas Usulan/Masukan dari :</label>
                            <div class="col-sm-11">
                             {!! Form::text('usulan', $kurikulum9->usulan, array('placeholder' => 'Atas Usulan/Masukan dari','class' => 'form-control')) !!}
                            </div>
                          </div>      
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Berlaku mulai Sem./Th. :</label>
                            <div class="col-sm-11">
                             {!! Form::text('berlaku', $kurikulum9->berlaku, array('placeholder' => 'Berlaku mulai Sem./Th.','class' => 'form-control')) !!}
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
    <div class="modal fade" id="modal-default9">
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
            {!! Form::open(array('route' => 'kurikulum9.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">No. MK :</label>
                  <div class="col-sm-10">
                  {!! Form::text('kode_mk_kurikulum9', null, array('placeholder' => 'No. MK','class' => 'form-control')) !!}  
                </div>
              </div> 
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama MK :</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_mk_kurikulum9', null, array('placeholder' => 'Nama MK','class' => 'form-control')) !!}  
                </div>
              </div> 
                <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">MK Baru / Lama / Hapus :</label>
                  <div class="col-sm-10">
                  {!! Form::text('status_mk', null, array('placeholder' => 'MK Baru / Lama / Hapus','class' => 'form-control')) !!}  
                </div>
              </div>    
              <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Silabus/SAP</label>
                  <div class="col-sm-10">
                 <select name="id_perubahan_pada_silabus" class="form-control">
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                              </select>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Buku Ajar</label>
                  <div class="col-sm-10">
                 <select name="id_perubahan_pada_buku_ajar" class="form-control">
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                              </select>
                  </div>
              </div>
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Alasan Peninjauan :</label>
                      <div class="col-sm-10">
                     {!! Form::text('alasan_peninjauan', null, array('placeholder' => 'Alasan Peninjauan','class' => 'form-control')) !!}
                    </div>
                   </div>       
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Atas Usulan/Masukan dari :</label>
                      <div class="col-sm-10">
                     {!! Form::text('usulan', null, array('placeholder' => 'Atas Usulan/Masukan dari','class' => 'form-control')) !!}
                    </div>
                   </div>           
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Berlaku mulai Sem./Th. :</label>
                      <div class="col-sm-10">
                     {!! Form::text('berlaku', null, array('placeholder' => 'Berlaku mulai Sem./Th.','class' => 'form-control')) !!}
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
  <div class="modal fade" id="modal-exim9" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('kurikulum9.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
    <div class="modal fade" id="modal9" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('kurikulum9.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
                      <a href="exportkurikulum9s" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="downloadkurikulum9" class="btn btn-primary btn-md">
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
