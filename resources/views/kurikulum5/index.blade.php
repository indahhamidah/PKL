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
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default5">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal5">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
            @else
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal5">
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
                  Tuliskan struktur kurikulum berdasarkan urutan mata kuliah (MK) semester demi semester, dengan mengikuti format tabel berikut: 
                </h4>

              <tbody id="kurikulum5-list" name="kurikulum5-list">
              
                <tr>
                   <table style="border: 1px solid #000; font-size: 16px">
                     <tr>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;">Smt</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;">Kode MK</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Nama Mata Kuliah</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Bobot sks</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >sks MK dalam Kurikulum</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Bobot Tugas</th>
                     <th colspan="6" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Kelengkapan</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Unit/ Jur/ Fak Penyelenggara</th>
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Action</th>
                     @endif
                     @endif
                     <tr>
                       <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Inti</th>
                       <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Insti-<br>tusional</th>
                       <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Ya</th>
                       <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Tidak</th>
                       <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Deskripsi</th>
                       <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Silabus</th>
                       <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >SAP</th>
                       <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Ya</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Tidak</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Ya</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Tidak</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Ya</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Tidak</th>
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
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(12)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(13)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(14)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(15)</th>    
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;"></th>
                     @endif
                     @endif
                   </tr>
                   <tfoot>
                      <td colspan="4" style="border: 1px solid #000; padding: 5px; text-align: center;">Jumlah</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"><?php echo $totalinti ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"><?php echo $totalinstitusional ?></td>
                      <td colspan="10" style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tfoot>
                   @foreach ($kurikulum5 as $kurikulum5)
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum5->semesterr }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum5->kode_mk_kurikulum5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $kurikulum5->nama_mk_kurikulum5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum5->jumlah_sks }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum5->sks_inti }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum5->sks_institusional }}</td>
                     @foreach($bobot_tugas as $bobot_tugasi)
                    @if($kurikulum5->id_bobottugas == $bobot_tugasi->id_bobot_tugas)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                     @foreach($kelengkapan_deskripsi as $kelengkapan_deskripsii)
                    @if($kurikulum5->id_kelengkapandeskripsi == $kelengkapan_deskripsii->id_kelengkapan_deskripsi)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                     @foreach($kelengkapan_silabus as $kelengkapan_silabusi)
                    @if($kurikulum5->id_kelengkapansilabus == $kelengkapan_silabusi->id_kelengkapan_silabus)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                     @foreach($kelengkapan_sap as $kelengkapan_sapi)
                    @if($kurikulum5->id_kelengkapansap == $kelengkapan_sapi->id_kelengkapan_sap)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $kurikulum5->penyelenggara }}</td>
                     @if(Auth::User()->id_departemen!=10)
                      @if(Auth::User()->role==10)
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$kurikulum5->id_struktur_kurikulum}}">
                    <span>Ubah</span>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modald{{$kurikulum5->id_struktur_kurikulum}}">
                        <span>Hapus</span></button>
                  </td>
                  @endif
                  @endif
                   </tr>

<!-- Delete -->
    <div class="modal fade" id="modald{{$kurikulum5->id_struktur_kurikulum}}" tabindex="1" aria-hidden="true">
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
                                          {!! Form::open(['method' => 'DELETE','route' => ['kurikulum5.destroy', $kurikulum5->id_struktur_kurikulum],'style'=>'display:inline']) !!}
                                          {!! Form::submit('&nbsp;&nbsp;Ya&nbsp;&nbsp;', ['class' => 'btn btn-danger']) !!}
                                          {!! Form::close() !!}
                                        </a>
                                        <a href="/kurikulum5" class="btn btn-primary">
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
               <div class="modal fade" id="modal-default{{$kurikulum5->id_struktur_kurikulum}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ubah Data Tabel</h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['kurikulum5.update', $kurikulum5->id_struktur_kurikulum],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">  
                           <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">Semester :</label>
                            <div class="col-sm-11">
                            <select name="id_semesterr" class="form-control">
                                <option value="1" {{$kurikulum5->id_jumlah_sks==1 ? 'selected' : ''}}>1</option>
                                <option value="2" {{$kurikulum5->id_jumlah_sks==2 ? 'selected' : ''}}>2</option>
                                <option value="3" {{$kurikulum5->id_jumlah_sks==3 ? 'selected' : ''}}>3</option>
                                <option value="4" {{$kurikulum5->id_jumlah_sks==4 ? 'selected' : ''}}>4</option>
                                <option value="5" {{$kurikulum5->id_jumlah_sks==5 ? 'selected' : ''}}>5</option>
                                <option value="6" {{$kurikulum5->id_jumlah_sks==6 ? 'selected' : ''}}>6</option>
                                <option value="7" {{$kurikulum5->id_jumlah_sks==7 ? 'selected' : ''}}>7</option>
                                <option value="8" {{$kurikulum5->id_jumlah_sks==8 ? 'selected' : ''}}>8</option>
                                
                              </select>
                            </div>
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Kode MK :</label>
                            <div class="col-sm-11">
                             {!! Form::text('kode_mk_kurikulum5', $kurikulum5->kode_mk_kurikulum5, array('placeholder' => 'Kode MK','class' => 'form-control')) !!}
                            </div>
                          </div>                                            
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Nama Mata Kuliah :</label>
                            <div class="col-sm-11">
                             {!! Form::text('nama_mk_kurikulum5', $kurikulum5->nama_mk_kurikulum5, array('placeholder' => 'Nama Mata Kuliah','class' => 'form-control')) !!}
                            </div>
                          </div> 
                           <div class="form-group">
                          <label class="col-xs-12 col-sm-4 col_md-8">Bobot SKS :</label>
                            <div class="col-sm-11">
                            <select name="id_jumlah_sks" class="form-control">
                                <option value="1" {{$kurikulum5->id_jumlah_sks==1 ? 'selected' : ''}}>1</option>
                                <option value="2" {{$kurikulum5->id_jumlah_sks==2 ? 'selected' : ''}}>2</option>
                                <option value="3" {{$kurikulum5->id_jumlah_sks==3 ? 'selected' : ''}}>3</option>
                                <option value="4" {{$kurikulum5->id_jumlah_sks==4 ? 'selected' : ''}}>4</option>
                                
                              </select>
                            </div>
                        </div>
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">SKS MK dalam Kurikulum Inti :</label>
                            <div class="col-sm-11">
                             {!! Form::number('sks_inti', $kurikulum5->sks_inti, array('placeholder' => 'SKS MK dalam Kurikulum Inti','class' => 'form-control')) !!}
                            </div> 
                            </div>   
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">SKS MK dalam Kurikulum Institusional :</label>
                            <div class="col-sm-11">
                             {!! Form::number('sks_institusional', $kurikulum5->sks_institusional, array('placeholder' => 'SKS MK dalam Kurikulum Institusional','class' => 'form-control')) !!}
                            </div> 
                            </div> 
                        <div class="form-group">
                          <label class="col-xs-12 col-sm-6 col-md-8">Bobot Tugas</label>
                            <div class="col-sm-11">
                           <select name="id_bobottugas" class="form-control">
                                <option value="1" {{$kurikulum5->id_bobottugas==1 ? 'selected' : ''}}>Ya</option>
                                <option value="2" {{$kurikulum5->id_bobottugas==2 ? 'selected' : ''}}>Tidak</option>
                              </select>
                            </div>
                        </div>  
                        <div class="form-group">
                          <label class="col-xs-12 col-sm-6 col-md-8">Kelengkapan Deskripsi</label>
                            <div class="col-sm-11">
                           <select name="id_kelengkapandeskripsi" class="form-control">
                                <option value="1" {{$kurikulum5->id_kelengkapandeskripsi==1 ? 'selected' : ''}}>Ya</option>
                                <option value="2" {{$kurikulum5->id_kelengkapandeskripsi==2 ? 'selected' : ''}}>Tidak</option>
                              </select>
                            </div>
                        </div> 
                        <div class="form-group">
                          <label class="col-xs-12 col-sm-6 col-md-8">Kelengkapan Silabus</label>
                            <div class="col-sm-11">
                           <select name="id_kelengkapansilabus" class="form-control">
                                <option value="1" {{$kurikulum5->id_kelengkapansilabus==1 ? 'selected' : ''}}>Ya</option>
                                <option value="2" {{$kurikulum5->id_kelengkapansilabus==2 ? 'selected' : ''}}>Tidak</option>
                              </select>
                            </div>
                        </div>  
                        <div class="form-group">
                          <label class="col-xs-12 col-sm-6 col-md-8">Kelengkapan SAP</label>
                            <div class="col-sm-11">
                           <select name="id_kelengkapansap" class="form-control">
                                <option value="1" {{$kurikulum5->id_kelengkapansap==1 ? 'selected' : ''}}>Ya</option>
                                <option value="2" {{$kurikulum5->id_kelengkapansap==2 ? 'selected' : ''}}>Tidak</option>
                              </select>
                            </div>
                        </div>                                             
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Unit/ Jur/ Fak Penyelenggara :</label>
                            <div class="col-sm-11">
                             {!! Form::text('penyelenggara', $kurikulum5->penyelenggara, array('placeholder' => 'Unit/ Jur/ Fak Penyelenggara','class' => 'form-control')) !!}
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
    <div class="modal fade" id="modal-default5">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title">Tambah Data Tabel</h4>
          </div>
          <div class="modal-body">
            <div class="box box-info">
            <!-- form start -->
            {!! Form::open(array('route' => 'kurikulum5.store','class'=>'form-horizontal','method'=>'POST')) !!}
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
                  {!! Form::text('kode_mk_kurikulum5', null, array('placeholder' => 'Kode MK','class' => 'form-control')) !!}  
                </div>
              </div>      
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama Mata Kuliah :</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_mk_kurikulum5', null, array('placeholder' => 'Nama Mata Kuliah','class' => 'form-control')) !!}  
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
                  <label class="col-xs-12 col-sm-6 col-md-8">SKS MK dalam Kurikulum Inti :</label>
                  <div class="col-sm-10">
                  {!! Form::number('sks_inti', null, array('placeholder' => 'SKS MK dalam Kurikulum Inti','class' => 'form-control')) !!}  
                </div>
              </div>    
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">SKS MK dalam Kurikulum Institusional :</label>
                  <div class="col-sm-10">
                  {!! Form::number('sks_institusional', null, array('placeholder' => 'SKS MK dalam Kurikulum Institusional','class' => 'form-control')) !!}  
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
                <label class="col-xs-12 col-sm-6 col-md-8">Kelengkapan Deskripsi</label>
                  <div class="col-sm-10">
                 <select name="id_kelengkapandeskripsi" class="form-control">
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                              </select>
                  </div>
              </div> 
              <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Kelengkapan Silabus</label>
                  <div class="col-sm-10">
                 <select name="id_kelengkapansilabus" class="form-control">
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                              </select>
                  </div>
              </div> 
              <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Kelengkapan SAP</label>
                  <div class="col-sm-10">
                 <select name="id_kelengkapansap" class="form-control">
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                              </select>
                  </div>
              </div> 
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Unit/ Jur/ Fak Penyelenggara :</label>
                  <div class="col-sm-10">
                  {!! Form::text('penyelenggara', null, array('placeholder' => 'Unit/ Jur/ Fak Penyelenggara','class' => 'form-control')) !!}  
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
  <div class="modal fade" id="modal-exim5" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('kurikulum5.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
    <div class="modal fade" id="modal5" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('kurikulum5.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Unduh Tabel</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">              
                    <div class="col-sm-10">
                      <a href="exportkurikulum5s" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="downloadkurikulum5" class="btn btn-primary btn-md">
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
