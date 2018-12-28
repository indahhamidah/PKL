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
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default21">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal21">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
            @else
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal21">
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
              <table id="example2421" class="table table-bordered table-hover">
                <thead>
                  
                  <!-- Judul -->
                  <h4 style="text-align: left;"> 
                   Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:  
                </h4>
                <!-- Akhir Judul -->
                  

              <tbody id="sdm6-list" name="sdm6-list">
              
                <tr>
                   <table style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">Nama Dosen Tetap</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Bidang Keahlian</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Kode Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Nama Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Jumlah Kelas</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Jumlah Pertemuan Yang Direncanakan</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Jumlah Pertemuan Yang Dilaksanakan</th>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Action</th>
                     @endif
                     @endif
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
                   @if(Auth::User()->role==7)
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;"></th>
                     @endif
                     @endif
                   </tr>
                   <tfoot>
                    <tr>
                     <td colspan="6" style="border: 1px solid #000; padding: 5px; text-align: right;">Total</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"><?php echo $totalrencana ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"><?php echo $totallaksana ?></td>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     @endif
                     @endif
                   </tr>
                   </tfoot>
                  <?php $no = 0;?>
                   @foreach ($sdm6 as $sdm6) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm6->nama_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm6->keahlian_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm6->kode_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm6->nama_mk_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm6->jlh_kelas }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm6->jlh_rencana_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm6->jlh_laksana_sdm6 }}</td>
                   @if(Auth::User()->id_departemen!=10)
                   @if(Auth::User()->role==7)
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$sdm6->id_aktivitas_mengajar_dosen_sesuai_ps}}">
                    <span>Ubah</span> </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modald{{$sdm6->id_aktivitas_mengajar_dosen_sesuai_ps}}">
                        <span>Hapus</span></button>
                  </td>
                  @endif
                  @endif
                   </tr>

<!-- Delete -->
    <div class="modal fade" id="modald{{$sdm6->id_aktivitas_mengajar_dosen_sesuai_ps}}" tabindex="1" aria-hidden="true">
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
                                          {!! Form::open(['method' => 'DELETE','route' => ['sdm6.destroy', $sdm6->id_aktivitas_mengajar_dosen_sesuai_ps],'style'=>'display:inline']) !!}
                                          {!! Form::submit('&nbsp;&nbsp;Ya&nbsp;&nbsp;', ['class' => 'btn btn-danger']) !!}
                                          {!! Form::close() !!}
                                        </a>
                                        <a href="/sdm6" class="btn btn-primary">
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
               <div class="modal fade" id="modal-default{{$sdm6->id_aktivitas_mengajar_dosen_sesuai_ps}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ubah Data Tabel </h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['sdm6.update', $sdm6->id_aktivitas_mengajar_dosen_sesuai_ps],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">                                         
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Nama Dosen Tetap :</label>
                            <div class="col-sm-11">
                             {!! Form::text('nama_sdm6', $sdm6->nama_sdm6, array('placeholder' => 'Nama Dosen Tetap','class' => 'form-control')) !!}
                            </div>
                          </div>    
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Bidang Keahlian :</label>
                            <div class="col-sm-11">
                             {!! Form::text('keahlian_sdm6', $sdm6->keahlian_sdm6, array('placeholder' => 'Bidang Keahlian','class' => 'form-control')) !!}
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Kode Mata Kuliah :</label>
                            <div class="col-sm-11">
                             {!! Form::text('kode_sdm6', $sdm6->kode_sdm6, array('placeholder' => 'Kode Mata Kuliah','class' => 'form-control')) !!}
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Nama Mata Kuliah :</label>
                            <div class="col-sm-11">
                             {!! Form::text('nama_mk_sdm6', $sdm6->nama_mk_sdm6, array('placeholder' => 'Nama Mata Kuliah','class' => 'form-control')) !!}
                            </div>
                          </div>   
                        <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">Jumlah Kelas :</label>
                            <div class="col-sm-11">
                            <select name="id_jlh_kelas" class="form-control">
                                <option value="1" {{$sdm6->id_jlh_kelas ? 'selected' : ''}}>1</option>
                                <option value="2" {{$sdm6->id_jlh_kelas ? 'selected' : ''}}>2</option>
                                <option value="3" {{$sdm6->id_jlh_kelas ? 'selected' : ''}}>3</option>
                                <option value="4" {{$sdm6->id_jlh_kelas ? 'selected' : ''}}>4</option>
                                <option value="5" {{$sdm6->id_jlh_kelas ? 'selected' : ''}}>5</option>
                              </select>
                            </div>
                        </div>     
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Jumlah Pertemuan Yang Direncanakan :</label>
                            <div class="col-sm-11">
                             {!! Form::number('jlh_rencana_sdm6', $sdm6->jlh_rencana_sdm6, array('placeholder' => 'Jumlah Pertemuan Yang Direncanakan','class' => 'form-control')) !!}
                            </div>
                          </div>  
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Jumlah Pertemuan Yang Dilaksanakan :</label>
                            <div class="col-sm-11">
                             {!! Form::number('jlh_laksana_sdm6', $sdm6->jlh_laksana_sdm6, array('placeholder' => 'Jumlah Pertemuan Yang Dilaksanakan','class' => 'form-control')) !!}
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
    <div class="modal fade" id="modal-default21">
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
            {!! Form::open(array('route' => 'sdm6.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama Dosen Tetap :</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_sdm6', null, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}  
                </div>
              </div> 
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Bidang Keahlian :</label>
                  <div class="col-sm-10">
                  {!! Form::text('keahlian_sdm6', null, array('placeholder' => 'Bidang Keahlian','class' => 'form-control')) !!}  
                </div>
              </div> 
                <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Kode Mata Kuliah :</label>
                  <div class="col-sm-10">
                  {!! Form::text('kode_sdm6', null, array('placeholder' => 'Kode Mata Kuliah','class' => 'form-control')) !!}  
                </div>
              </div>    
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama Mata Kuliah :</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_mk_sdm6', null, array('placeholder' => 'Nama Mata Kuliah','class' => 'form-control')) !!}  
                </div>
              </div> 

              <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Jumlah Kelas :</label>
                  <div class="col-sm-10">
                  <select name="id_jlh_kelas" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                              </select>
                  </div>
              </div>    
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Jumlah Pertemuan Yang Direncanakan :</label>
                      <div class="col-sm-10">
                     {!! Form::number('jlh_rencana_sdm6', null, array('placeholder' => 'Jumlah Pertemuan Yang Direncanakan','class' => 'form-control')) !!}
                    </div>
                   </div>   
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Jumlah Pertemuan Yang Dilaksanakan :</label>
                      <div class="col-sm-10">
                     {!! Form::number('jlh_laksana_sdm6', null, array('placeholder' => 'Jumlah Pertemuan Yang Dilaksanakan','class' => 'form-control')) !!}
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
  <div class="modal fade" id="modal-exim21" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('sdm6.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
    <div class="modal fade" id="modal21" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('sdm6.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
                      <a href="{{ route('sdm6.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="downloadsdm6" class="btn btn-primary btn-md">
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
