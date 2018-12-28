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
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default6">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal6">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
            @else
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal6">
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
              <table id="example265" class="table table-bordered table-hover">
                <thead>
                  
                  <!-- Judul -->
                  <h4 style="text-align: left;"> 
                   Tuliskan mata kuliah pilihan yang dilaksanakan dalam tiga tahun terakhir, pada tabel berikut:  
                </h4>

              <tbody id="kurikulum6-list" name="kurikulum6-list">
              
                <tr>
                   <table style="border: 1px solid #000; font-size: 16px">
                     <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;">Semester</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;">Kode MK</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Nama MK (Pilihan)</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Bobot sks</th>
                     <th colspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px" >Bobot Tugas*</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Unit/ Jur/ Fak Pengelola</th>
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Action</th>
                  @endif
                  @endif
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Ya</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Tidak</th>
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
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;"></th>
                  @endif
                  @endif
                   </tr>
                   @foreach ($kurikulum6 as $kurikulum6)
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum6->semesterr }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum6->kode_mk_kurikulum6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum6->nama_mk_kurikulum6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum6->jumlah_sks }}</td>
                     @foreach($bobot_tugas as $bobot_tugasi)
                    @if($kurikulum6->id_bobottugas == $bobot_tugasi->id_bobot_tugas)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum6->pengelola }}</td>
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$kurikulum6->id_mata_kuliah_pilihan}}">
                    <span>Ubah</span>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modald{{$kurikulum6->id_mata_kuliah_pilihan}}">
                        <span>Hapus</span></button>
                  </td>
                  @endif
                  @endif
                   </tr>

<!-- Delete -->
    <div class="modal fade" id="modald{{$kurikulum6->id_mata_kuliah_pilihan}}" tabindex="1" aria-hidden="true">
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
                                          {!! Form::open(['method' => 'DELETE','route' => ['kurikulum6.destroy', $kurikulum6->id_mata_kuliah_pilihan],'style'=>'display:inline']) !!}
                                          {!! Form::submit('&nbsp;&nbsp;Ya&nbsp;&nbsp;', ['class' => 'btn btn-danger']) !!}
                                          {!! Form::close() !!}
                                        </a>
                                        <a href="/kurikulum6" class="btn btn-primary">
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
               <div class="modal fade" id="modal-default{{$kurikulum6->id_mata_kuliah_pilihan}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ubah Data Tabel </h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['kurikulum6.update', $kurikulum6->id_mata_kuliah_pilihan],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">
                           <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">Semester :</label>
                            <div class="col-sm-11">
                            <select name="id_semesterr" class="form-control">
                                <option value="1" {{$kurikulum6->id_semesterr==1 ? 'selected' : ''}}>1</option>
                                <option value="2" {{$kurikulum6->id_semesterr==2 ? 'selected' : ''}}>2</option>
                                <option value="3" {{$kurikulum6->id_semesterr==3 ? 'selected' : ''}}>3</option>
                                <option value="4" {{$kurikulum6->id_semesterr==4 ? 'selected' : ''}}>4</option>
                                <option value="5" {{$kurikulum6->id_semesterr==5 ? 'selected' : ''}}>5</option>
                                <option value="6" {{$kurikulum6->id_semesterr==6 ? 'selected' : ''}}>6</option>
                                <option value="7" {{$kurikulum6->id_semesterr==7 ? 'selected' : ''}}>7</option>
                                <option value="8" {{$kurikulum6->id_semesterr==8 ? 'selected' : ''}}>8</option>
                                
                              </select>
                            </div>
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Kode MK :</label>
                            <div class="col-sm-11">
                             {!! Form::text('kode_mk_kurikulum6', $kurikulum6->kode_mk_kurikulum6, array('placeholder' => 'Kode MK','class' => 'form-control')) !!}
                            </div>
                          </div>                                      
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Nama MK :</label>
                            <div class="col-sm-11">
                             {!! Form::text('nama_mk_kurikulum6', $kurikulum6->nama_mk_kurikulum6, array('placeholder' => 'Nama MK','class' => 'form-control')) !!}
                            </div>
                          </div>  
                           <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">Bobot SKS :</label>
                            <div class="col-sm-11">
                            <select name="id_jumlah_sks" class="form-control">
                                <option value="1" {{$kurikulum6->id_jumlah_sks==1 ? 'selected' : ''}}>1</option>
                                <option value="2" {{$kurikulum6->id_jumlah_sks==2 ? 'selected' : ''}}>2</option>
                                <option value="3" {{$kurikulum6->id_jumlah_sks==3 ? 'selected' : ''}}>3</option>
                                <option value="4" {{$kurikulum6->id_jumlah_sks==4 ? 'selected' : ''}}>4</option>
                                
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-xs-12 col-sm-6 col-md-8">Bobot Tugas</label>
                            <div class="col-sm-11">
                           <select name="id_bobottugas" class="form-control">
                                <option value="1" {{$kurikulum6->id_bobottugas==1 ? 'selected' : ''}}>Ya</option>
                                <option value="2" {{$kurikulum6->id_bobottugas==2 ? 'selected' : ''}}>Tidak</option>
                              </select>
                            </div>
                        </div>      
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Pengelola :</label>
                            <div class="col-sm-11">
                             {!! Form::text('pengelola', $kurikulum6->pengelola, array('placeholder' => 'Pengelola','class' => 'form-control')) !!}
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
            <tfoot>
      <br>
      <td style="text-align: left;">* beri tanda √ pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) ≥ 20%.</td>
    </tfoot>
      </div>
    </div>
       

<!-- Tambah Data -->
    <div class="modal fade" id="modal-default6">
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
            {!! Form::open(array('route' => 'kurikulum6.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Semester :</label>
                  <div class="col-sm-10">
                  <select name="id_semesterr" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                              </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Kode MK :</label>
                  <div class="col-sm-10">
                  {!! Form::text('kode_mk_kurikulum6', null, array('placeholder' => 'Kode MK','class' => 'form-control')) !!}  
                </div>
              </div> 
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama MK :</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_mk_kurikulum6', null, array('placeholder' => 'Nama MK','class' => 'form-control')) !!}  
                </div>
              </div> 
              <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Bobot SKS :</label>
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
                <label class="col-xs-12 col-sm-6 col-md-8">Bobot Tugas</label>
                  <div class="col-sm-10">
                 <select name="id_bobottugas" class="form-control">
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                              </select>
                  </div>
              </div>

                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Pengelola :</label>
                      <div class="col-sm-10">
                     {!! Form::text('pengelola', null, array('placeholder' => 'Pengelola','class' => 'form-control')) !!}
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
  <div class="modal fade" id="modal-exim6" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('kurikulum6.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
    <div class="modal fade" id="modal6" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('kurikulum6.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
                      <a href="exportkurikulum6s" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="downloadkurikulum6" class="btn btn-primary btn-md">
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
