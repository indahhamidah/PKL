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
          HASIL PENDIDIKAN @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
                @if(Auth::User()->role==2 or Auth::user()->role==14)
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </button>
                   @else
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus"></i> <span>Tambah</span>
                  </button>
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-exim">
                    <i class="fa fa-upload"></i> <span>Unggah</span>
                  </button>
                  <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </button>
                @endif
              @elseif(Auth::User()->id_departemen==10)
                @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                <a class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                   <i class="fa fa-plus"> Tambah</i>
                  </a>
                  <a class="btn btn-primary" data-toggle="modal" data-target="#modal1">
                   <i class="fa fa-file-text"> Report</i>
                  </a>
                
                @else
                <a class="btn btn-primary" data-toggle="modal" data-target="#modal1">
                   <i class="fa fa-file-text"> Report</i>
                  </a>
              @endif
            @endif
              <div class="col-md-offset-10">
                <input class="form-control" id="Input" type="text" placeholder="Cari...">
              </div> 
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
                  <h4 style="text-align: center;"> Tabel 9.1 Data Hasil Pendidikan @if(Auth::User()->id_departemen==10) @elseif(Auth::User()->id_departemen!=10) Program Studi {{$dept[0]->nama_departemen}} FMIPA IPB @endif</h4>
                  <tr>
                  <th rowspan="3" style="text-align: center">No</th>
                  @if(Auth::user()->id_departemen==10)
                  <th rowspan="2" style="text-align: center">Program Studi</th>
                  @endif
                  <th rowspan="3" style="text-align: center">Jenis Hasil</th>
                  <th rowspan="3" style="text-align: center">Judul Hasil Pendidikan</th>
                  <th rowspan="3" style="text-align: center">Nama Dosen</th>
                  <th colspan="2" style="text-align: center">Perolehan Haki</th>
                  @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                      <th rowspan="10" style="text-align: center">Lampiran</th>
                      <th rowspan="2" style="text-align: center">Status Lampiran</th>
                  @endif
                  @elseif(Auth::User()->id_departemen==10)
                     @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                      <th rowspan="10" style="text-align: center">Lampiran</th>
                      <th rowspan="2" style="text-align: center">Status Lampiran</th>
                    @endif
                  @endif
                  @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                    <th rowspan="2" style="text-align: center">Aksi</th>
                    @endif
                  @elseif(Auth::User()->id_departemen==10)
                     @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                     <th rowspan="2" style="text-align: center">Aksi</th>
                    @endif
                  @endif
                  </tr>
                  <tr>
                    <th style="text-align: center;"> Ya </th>
                    <th style="text-align: center;"> Tidak </th>
                    </tr>

                  <tfoot>
                    <th >Total</th>
                    
                    @if(Auth::user()->id_departemen!=10)
                      <th style="text-align: right;"><?php echo $totaljenis ?></th>
                      <th style="text-align: right;"><?php echo $totaljudul ?></th>
                      <th></th>
                      <th style="text-align: right;"><?php echo $na ?></th>
                      <th style="text-align: right;"><?php echo $nb ?></th>
                      @else
                        <th style="text-align: right;"><?php echo $totaljenis ?></th>
                        <th style="text-align: right;"><?php echo $totaljudul ?></th>
                        <th></th>
                        <th></th>
                        <th style="text-align: right;"><?php echo $na ?></th>
                        <th style="text-align: right;"><?php echo $nb ?></th>
                    @endif
                  </tfoot>
                  <tr></tr>
                  
                  <tr>
                  <th rowspan="2" style="text-align: center">(1)</th>
                  @if(Auth::user()->id_departemen==10 and Auth::User()->role!=1 and Auth::User()->role!=14)
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  <th rowspan="2" style="text-align: center">(7)</th>
                  <th rowspan="2" style="text-align: center">(8)</th>
                  <th rowspan="2" style="text-align: center">(9)</th>
                  <th rowspan="2" style="text-align: center">(10)</th>
                  @elseif(Auth::user()->id_departemen==10 and Auth::User()->role==1)
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  @elseif(Auth::user()->id_departemen!=10 and Auth::User()->role!=2 and Auth::user()->role!=14)
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  <th rowspan="2" style="text-align: center">(7)</th>
                  <th rowspan="2" style="text-align: center">(8)</th>
                  <th rowspan="2" style="text-align: center">(9)</th>
                  @else
                  <th rowspan="2" style="text-align: center">(2)</th>
                  <th rowspan="2" style="text-align: center">(3)</th>
                  <th rowspan="2" style="text-align: center">(4)</th>
                  <th rowspan="2" style="text-align: center">(5)</th>
                  <th rowspan="2" style="text-align: center">(6)</th>
                  @endif
                  </tr>

                  
                  </thead>
                  <tbody id="hasil_pendidikan" name="hasil_pendidikan">
                  <?php $nomor = 0;?>
                  @foreach ($hasil_pendidikan as $hasilPendidikan)
                  <?php $nomor++ ;?>
                   <tr>
                  <td>{{ $nomor }}</td>
                  @if(Auth::user()->id_departemen==10)
                  <td>{{$hasilPendidikan->nama_departemen}}</td>
                  @endif
                  <td>{{$hasilPendidikan->jenis_hasil}}</td>
                  <td>{{$hasilPendidikan->judul_hasilPendidikan}}</td>
                  <td>{{$hasilPendidikan->nama_dosen}}</td>
                  @foreach($haki as $hakii)
                    @if($hasilPendidikan->id_haki == $hakii->id_perolehanHaki)
                      <td style="text-align: center;">&#x2714</td>
                      @else
                        <td></td>
                    @endif
                  @endforeach
            
                 @if(Auth::user()->id_departemen!=10)
                  @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                 <td>
                  <button type="button" class=" btn-sm" data-toggle="modal" data-target="#modal-default2{{$hasilPendidikan->id_hasilPendidikan}}">
                     <i class="fa fa-upload"></i>
                    </button>
                  @endif
                  
                @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    <td>
                  <button type="button" class=" btn-sm" data-toggle="modal" data-target="#modal-default2{{$hasilPendidikan->id_hasilPendidikan}}">
                     <i class="fa fa-upload"></i>
                    </button>
                     @endif
                @endif

                  @if(Auth::user()->id_departemen!=10)
                      @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                    @foreach ($lampiran_hasil as $lampiranH)
                      @if($lampiranH->id_lampiran==$hasilPendidikan->id_lampiran)
                      <a href="{{ route('downloadlampiran', $lampiranH->id_lampiran) }}" >
                        <button type="button" class=" btn-sm">
                          <i class="fa fa-download"></i>
                        </button>
                      </a>
                      @endif
                    @endforeach
                    @endif
                    
                    @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    @foreach ($lampiran_hasil as $lampiranH)
                      @if($lampiranH->id_lampiran==$hasilPendidikan->id_lampiran)
                      <a href="{{ route('downloadlampiran', $lampiranH->id_lampiran) }}" >
                        <button type="button" class=" btn-sm">
                          <i class="fa fa-download"></i>
                        </button>
                      </a>
                      @endif
                    @endforeach
                    @endif
                    @endif
                    </td>

                    @if(Auth::user()->id_departemen!=10)
                      @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                    <td>
                      @if(isset($hasilPendidikan->id_lampiran))
                        <label class="label label-success">Bukti Ada</label>
                      @else
                        <label class="label label-warning">Bukti belum ada</label>
                      @endif
                      
                    </td>
                    @endif
                      @elseif(Auth::User()->id_departemen==10)
                        @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                        <td>
                        @if(isset($hasilPendidikan->id_lampiran))
                          <label class="label label-success">Bukti Ada</label>
                        @else
                          <label class="label label-warning">Bukti belum ada</label>
                        @endif
                    </td>
                        @endif
                      @endif

                @if(Auth::user()->id_departemen!=10)
                    @if(Auth::user()->role!=2 and Auth::user()->role!=14)
                      <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$hasilPendidikan->id_hasilPendidikan}}">
                        <span>Ubah</span>
                        </button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default6{{$hasilPendidikan->id_hasilPendidikan}}">
                        <span>Hapus</span>
                        </button>
                      </td>
                  </tr>
                    @endif
                   
                  @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                    <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$hasilPendidikan->id_hasilPendidikan}}">
                        <span>Ubah</span>
                        </button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default6{{$hasilPendidikan->id_hasilPendidikan}}">
                        <span>Hapus</span>
                        </button>
                      </td>
                  </tr>
                    @endif
                  @endif

      <!-- Hapus -->
          <div class="modal fade" id="modal-default6{{$hasilPendidikan->id_hasilPendidikan}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(['method' => 'DELETE','route' => ['standar9hasilpendidikan.destroy', $hasilPendidikan->id_hasilPendidikan],'style'=>'display:inline']) !!}
                    <div class="box-body">
                      <div class="form-group">
                      <h3>Anda Yakin untuk hapus data?</h3>
                       <button type="submit" class="col-md-4 btn btn-danger" style="margin-left:10px">Yakin</button>
                       <button type="button" class="col-sm-4 col-md-offset-5 btn btn-primary" style="margin-left:10px" onclick="window.location='{{ url('/standar9hasilpendidikan') }}'" >Kembali</button>                   
                      <div class="form-group">
                        <div class="modal-footer"> 
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


        <!-- Upload Bukti -->
       <div class="modal fade" id="modal-default2{{$hasilPendidikan->id_hasilPendidikan}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <form method="post" action=" {{ route('lampiran.upload') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hiddem="true"> &times; </span>
              </button>
              <h3 class="modal-title">Unggah Lampiran Hasil Pendidikan {{$dept[0]->nama_departemen}}</h3>
              </div>   
                <div class="modal-body">
                  <div class="box box-info">
                  {!! Form::open(array('route' => 'lampiran.upload','class'=>'form-horizontal','method'=>'POST')) !!}
                     {!! Form::hidden('id_hasilPendidikan', $hasilPendidikan->id_hasilPendidikan, array('placeholder' => 'id Penelitian','class' => 'form-control')) !!}
                     {!! Form::hidden('id_hasilPendidikan', $hasilPendidikan->id_hasilPendidikan, array('placeholder' => 'id Pengabdian','class' => 'form-control')) !!}
                     @if(Auth::user()->id_departemen==10)
                        {!! Form::hidden('id_departemen', $hasilPendidikan->id_departemen, array('placeholder' => 'id departemen','class' => 'form-control')) !!}
                     @endif
                        <label for="file" class="col-sm-5 control-label">Upload</label>
                          <div class="col-sm-6">
                          <input type="file" id="file" name="lampiran" class="form-control" autofocus required>
                          <span class="help-block with-errors"></span>
                          
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

          <!-- Edit -->
          <div class="modal fade" id="modal-default{{$hasilPendidikan->id_hasilPendidikan}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ubah hasil pendidikan {{$dept[0]->nama_departemen}}</h4>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(array('route' => ['standar9hasilpendidikan.update', $hasilPendidikan->id_hasilPendidikan],'class'=>'form-horizontal','method'=>'PUT')) !!}
                    <div class="box-body">
                      <div class="form-group">
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Jenis Hasil</label>
                          <div class="col-sm-6">
                            <select name="id_jenisHasilPendidikan" class="form-control">
                                <option value="0">Pilih Jenis</option>
                                <option value="1" {{$hasilPendidikan->id_jenisHasilPendidikan==1 ? 'selected' : ''}}>Buku teks</option>
                                <option value="2" {{$hasilPendidikan->id_jenisHasilPendidikan==2 ? 'selected' : ''}}>Buku ajar</option>
                                <option value="3" {{$hasilPendidikan->id_jenisHasilPendidikan==3 ? 'selected' : ''}}>Media pembelajaran</option>
                                <option value="4" {{$hasilPendidikan->id_jenisHasilPendidikan==4 ? 'selected' : ''}}>Alat Bantu Ajar</option>
                                <option value="5" {{$hasilPendidikan->id_jenisHasilPendidikan==5 ? 'selected' : ''}}>Dll...</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Judul Hasil Pendidikan</label>
                          <div class="col-sm-6">
                          {!! Form::text('judul_hasilPendidikan', $hasilPendidikan->judul_hasilPendidikan, array('placeholder' => 'Judul Hasil Pendidikan','class' => 'form-control')) !!}
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Nama Dosen</label>
                            <div class="col-sm-6">
                            {!! Form::text('nama_dosen', $hasilPendidikan->nama_dosen, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-5 control-label">Perolehan Haki</label>
                            <div class="col-sm-6">
                           <select name="id_haki" class="form-control">
                                <option>Perolehan HAKI</option>
                                <option value="1" {{$hasilPendidikan->id_haki==1 ? 'selected' : ''}}>Ya</option>
                                <option value="2" {{$hasilPendidikan->id_haki==2 ? 'selected' : ''}}>Tidak</option>
                              </select>
                            </div>
                        </div>
                        <label class="col-sm-5 control-label">Tahun</label>
                          <div class="col-sm-6" >
                            {!! Form::selectRange('tahun_hasil','2014', '2060', $hasilPendidikan->tahun_hasil, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                          </div>
                        @if(Auth::user()->id_departemen==10)
                          <div class="form-group">
                            <label class="col-sm-5 control-label">Program Studi</label>
                              <div class="col-xs-2 col-md-6 ">
                                <select class="form-control" name="id_departemen" style="margin-left: 20px">
                                <option value="0">--Program Studi--</option>
                                  @foreach ($listdept as $listdepts)
                                  <option value="{{$listdepts->id_dept}}"> {{$listdepts->nama_departemen}}</option>
                                  @endforeach
                                </select> 
                                  <small class="help-block"></small>
                              </div>  
                          </div>
                      @endif                                           
                                              
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
         * Lampirkan surat paten HaKI atau keterangan sejenis.

         <!-- Tambah Data -->
     <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">Tambah Hasil Pendidikan {{$dept[0]->nama_departemen}}</h3>
            </div>
            <div class="modal-body">
              <div class="box box-info">
             {!! Form::open(array('route' => 'standar9hasilpendidikan.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
              <div class="modal-header">
                <div class="form-group">
                  <label class="col-sm-5 control-label">Jenis Hasil</label>
                    <div class="col-sm-6">
                   <select name="id_jenisHasilPendidikan" class="form-control">
                                <option value="0">Pilih Jenis</option>
                                <option value="1">Buku teks</option>
                                <option value="2">Buku ajar</option>
                                <option value="3">Media pembelajaran</option>
                                <option value="4">Alat Bantu Ajar</option>
                                <option value="5">Dll...</option>
                              </select>
                    </div>
                </div>
              <div class="form-group">
              <label class="col-sm-5 control-label">Judul Hasil Pendidikan</label>
                <div class="col-sm-6">
                {!! Form::text('judul_hasilPendidikan', null, array('placeholder' => 'Judul Hasil Pendidikan','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Nama Dosen</label>
                  <div class="col-sm-6">
                  {!! Form::text('nama_dosen', null, array('placeholder' => 'Nama Dosen','class' => 'form-control')) !!}
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-5 control-label">Perolehan Haki</label>
                  <div class="col-sm-6">
                 <select name="id_haki" class="form-control">
                                <option>Perolehan HAKI</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                              </select>
                  </div>
              </div>
              <div class="form-group">
              <label class="col-sm-5 control-label">Tahun Publikasi</label>
                    <div class="col-sm-6">
                            {!! Form::selectRange('tahun_hasil','2014', '2060', array('placeholder' => 'Tahun','class' => 'form-control', 'min'=>2016)) !!}
                          </div>
                          </div>
               @if(Auth::user()->id_departemen==10)
                          <div class="form-group">
                           <label class="col-sm-5 control-label">Program Studi</label>
                              <div class="col-sm-6 ">
                                <select class="form-control" name="id_departemen" style="margin-left: 20px">
                                <option value="0">--Program Studi--</option>
                                  @foreach ($listdept as $listdepts)
                                  <option value="{{$listdepts->id_dept}}"> {{$listdepts->nama_departemen}}</option>
                                  @endforeach
                                </select> 
                                  <small class="help-block"></small>
                              </div>  
                          </div>
                @endif      
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
        <form method="post" action=" {{ route('hasilPendidikan.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Unggah Data Hasil Pendidikan {{$dept[0]->nama_departemen}}</h3>
          </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                  <label for="file" class="col-sm-2 control-label">Upload</label>
                    <div class="col-sm-10">
                    <input type="file" id="file" name="data" class="form-control" autofocus required>
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
          <form method="post" action=" {{ route('hasilPendidikan.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Unduh Hasil Pendidikan {{$dept[0]->nama_departemen}}</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">              
                    <div class="col-sm-10">
                      <a href="{{ route('hasilPendidikan.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-file-excel-o"> Unduh Excel</i>
                      </a>
                      <a href="pdfuserhasilpendidikan" class="btn btn-primary btn-md">
                      <i class="fa fa-file-pdf-o"> Unduh PDF</i>
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

<!-- Report -->
    <div class="modal fade" id="modal1" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('hasilPendidikan.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Hasil Pendidikan Fakultas Matematika dan Ilmu Pengetahuan Alam</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                  <p><strong>Tabel 9.1</strong> Jumlah hasil pendidikan FMIPA IPB selama tiga tahun terakhir </p>
               <table cellspacing="0" >

                 <tr>
                  <th></th>
                  <th rowspan="4" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Arial" >No.</font></th>
                  <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Arial" >Nama Program Studi</font></th>
                  <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Arial" >Jumlah Judul Hasil Pendidikan</font></th>
                </tr>
              <tr>
                  <tr>
                <th></th>
                
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-2<br> <?php echo ($ts2) ?></font></th>
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS-1<br> <?php echo ($ts1) ?></font></th>
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Arial">TS<br> <?php echo ($ts) ?></font></th>
                </tr></tr>
                <tr>
                <th></th>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">1.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS STK</font></p></td>
                <!-- TS-2 -->
               
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPendidikan')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">2.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS GFM</font></p></td>
                <!-- TS-2 -->
                
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPendidikan')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">3.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS BIO</font></p></td>
                <!-- TS-2 -->
               
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPendidikan')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">4.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS KIM</font></p></td>
                <!-- TS-2 -->
               
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPendidikan')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">5.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS MAT</font></p></td>
                <!-- TS-2 -->
                
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPendidikan')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">6.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS KOM</font></p></td>
                <!-- TS-2 -->
                
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPendidikan')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">7.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS FIS</font></p></td>
                <!-- TS-2 -->
               
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPendidikan')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">8.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS BIOKIM</font></p></td>
                <!-- TS-2 -->
                
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPendidikan')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">9.</td>
                <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Arial">Dep/PS AUK</font></p></td>
                <!-- TS-2 -->
                
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPendidikan')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPendidikan')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <tr>
                <th></th>
                <th colspan="7" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial">Total</font></p></th>
                
                
                <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_hasilPendidikan')) ?></font></p></th>
                <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_hasilPendidikan')) ?></font></p></th>
                <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Arial"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_hasilPendidikan')) ?></font></p></th>
                </tr></tr>
            </table>              
                    <div class="modal-footer">
                      <a href="{{ route('hasil.pendidikanexcel') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                        </a>
                        <a href="{{ route('hasil.pendidikandownload')}}" class="btn btn-primary btn-md">
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



</div>
</div>
</div>
</section>

@endsection