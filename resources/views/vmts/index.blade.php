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
          Visi, Misi, Tujuan, dan Strategi @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>    
    </section>


     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">    
          <div class="box">
            <div class="box-header">
                
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

             <div class="box-body"> 
              <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Visi, Misi, Tujuan, dan Strategi</a></li>
              <li><a href="#tab_2" data-toggle="tab">Lampiran Visi, Misi, Tujuan, dan Strategi</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="tab_2">
              @if(Auth::User()->id_departemen!=10)
                    @if(Auth::User()->role!=2 and Auth::User()->role!=14)
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_lampiran">
                <i class="fa fa-plus"></i> <span>Lampiran</span>
                </button>
                    @endif
                @elseif(Auth::User()->id_departemen==10)
                     @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                   <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_lampiran">
                <i class="fa fa-plus"></i> <span>Lampiran</span>
                </button>
                 @endif
                  @endif    
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lampiran</th>
                    <th>Kode Lampiran</th>
                    <th>Lemari/Rak</th>
                    <th>File</th>
                    @if(Auth::User()->role!=2 and Auth::User()->role!=14)
                    <th>Aksi</th>
                    @endif
                    
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; ?>
                  @foreach($lampiranstandar1 as $standar1)
                  <?php $no++; ?>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$standar1->nama_lampiran}}</td>
                    <td>{{$standar1->kode_lampiran}}</td>
                    <td>{{$standar1->lemari_rak}}</td>
                    <td><a href="{{ asset('images/lampiranstandar1/'.$standar1->lampiran_standar1) }}">{{$standar1->lampiran_standar1}}</a></td>
                     @if(Auth::User()->role!=2 and Auth::User()->role!=14)
                    <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_lampiran1{{$standar1->id_lampiranstan1}}">
                      <span>Ubah</span>
                      </button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default6{{$standar1->id_lampiranstan1}}">
                        <span>Hapus</span>
                        </button>
                      @endif
                    </td>
                  </tr>

                  <!-- Hapus -->
          <div class="modal fade" id="modal-default6{{$standar1->id_lampiranstan1}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(['method' => 'DELETE','route' => ['standar1visimisi.destroy', $standar1->id_lampiranstan1],'style'=>'display:inline']) !!}
                    <div class="box-body">
                      <div class="form-group">
                      <h3>Anda Yakin untuk hapus data?</h3>
                       <button type="submit" class="col-md-4 btn btn-danger" style="margin-left:10px">Yakin</button>
                       <button type="button" class="col-sm-4 col-md-offset-5 btn btn-primary" style="margin-left:10px" onclick="window.location='{{ url('/standar1visimisi') }}'" >Kembali</button>                   
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
                <!-- Edit -->
                  <div class="modal fade" id="edit_lampiran1{{$standar1->id_lampiranstan1}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Ubah Lampiran Visi, Misi, Tujuan, dan Strategi</h4>
                          </div>
                          <div class="modal-body">
                            <div class="box box-info">
                              <!-- form start -->
                              {!! Form::open(array('route' => ['ubah.lampiran1', $standar1->id_lampiranstan1],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                              <div class="box-body">
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Nama Lampiran</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('nama_lampiran', $standar1->nama_lampiran, array('placeholder' => 'Nama Lampiran','class' => 'form-control')) !!}  
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Kode Lampiran</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('kode_lampiran', $standar1->kode_lampiran, array('placeholder' => 'Kode Lampiran','class' => 'form-control')) !!}  
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Lemari/Rak</label>
                                  <div class="col-sm-8">
                                  {!! Form::text('lemari_rak', $standar1->lemari_rak, array('placeholder' => 'Lemari/Rak','class' => 'form-control')) !!}  
                                  </div>
                                </div>
                                <label for="file" class="col-sm-5 control-label">Upload</label>
                                  <div class="col-sm-6">
                                  <input type="file" id="file" name="lampiran_standar1" class="form-control" autofocus required>
                                  <span class="help-block with-errors"></span>
                                  
                              </div>
                                  <div class="form-group">
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                  </div>
                                </div>
                                 {!! Form::close() !!}
                              </div>
                            </div>
                            <!-- /.modal-content -->
                         </div>
                          <!-- /.modal-dialog -->
                    </div>
                        <!-- /.modal -->
                  </div>

                  
                  @endforeach

                </tbody>
              </table>
            </div>
            <div class="tab-pane active" id="tab_1">
              <div class="box-header">
              @if(Auth::User()->id_departemen!=10)
                @if(Auth::User()->role==2 or Auth::User()->role==14)
                  <a href="{{ route('vmts.download') }}" class="btn btn-primary btn-md">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </a>
                   @else
                  <a class="btn btn-primary" href="{{ route('standar1visimisi.create') }}">
                  <i class="fa fa-edit"></i>Tambah</a>
                  <a href="{{ route('vmts.download') }}" class="btn btn-primary btn-md">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </a>
                @endif

              @elseif(Auth::User()->id_departemen==10)
                @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                  
                  <a class="btn btn-primary" href="{{ route('standar1visimisi.create') }}">
                  <i class="fa fa-edit"></i>Tambah</a>
                    <a href="{{ route('vmts.download') }}" class="btn btn-primary btn-md">
                      <i class="fa fa-download"></i> <span>Unduh</span>
                    </a>
                @else
                  <a href="{{ route('vmts.download') }}" class="btn btn-primary btn-md">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </a>
              @endif
              @endif
             
              <!-- tabel -->
          <div class="panel-body"  style="margin-bottom: 400px"> 
              <table id="example2" class="table table-bordered table-hover dataTable">
                <thead>
                  <h4 style="text-align: center;"> Tabel Visi, Misi, Tujuan, dan Strategi @if(Auth::User()->id_departemen==10) @elseif(Auth::User()->id_departemen!=10) Program Studi {{$dept[0]->nama_departemen}} FMIPA IPB @endif</h4>
                  <tr>
                  <th style="text-align: center">No</th>
                  <th rowspan="2" style="text-align: center">Periode</th>
                  <th rowspan="2" style="text-align: center">Standar 1</th>
                  <tbody id="penelitians" name="penelitian">
                  <?php $nomor = 0;?>
                  @foreach ($vmts as $visi)
                  <?php $nomor++ ;?>
                   <tr>
                  <td style="text-align: center">{{ $nomor }}</td>
                  <td>{{$visi->tahun_awal}} - {{$visi->tahun_selesai}}</td>
                  <td>
                  <a class="btn btn-primary" href="{{ route('standar1visimisi.show',$visi->id_vmts) }}">
                  <i class="fa fa-edit"></i>Lihat</a>
                  @if(Auth::User()->id_departemen!=10)
                    @if(Auth::User()->role!=2 and Auth::User()->role!=14)
                  <a class="btn btn-primary" href="{{ route('standar1visimisi.edit',$visi->id_vmts) }}">
                  <i class="fa fa-edit"></i>Ubah</a>
                   <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default6{{$visi->id_vmts}}">
                        <span>Hapus</span>
                        </button>
                        @endif
                        @endif
                  @if(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=1 and Auth::User()->role!=14)
                       <a class="btn btn-primary" href="{{ route('standar1visimisi.edit',$visi->id_vmts) }}">
                  <i class="fa fa-edit"></i>Ubah</a>
                   <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default6{{$visi->id_vmts}}">
                        <span>Hapus</span>
                        </button>
                    @endif
                  @endif
                       @endforeach  
                 </td>

                          

                    </div> 
             
              <div class="box-body">
                <table class="table table-bordered">
                 
                </table>
              </div>
            </div>
             
            </div>
            <!-- /.tab-content -->
          </div>
              
         </div>
       </div>
     </div>
   </div>
@foreach ($vmts as $visi)
 <div class="modal fade" id="modal-default6{{$visi->id_vmts}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="box box-info">
                    {!! Form::open(['method' => 'DELETE','route' => ['hapus.vmts', $visi->id_vmts],'style'=>'display:inline']) !!}
                    <div class="box-body">
                      <div class="form-group">
                      <h3>Anda Yakin untuk hapus data?</h3>
                       <button type="submit" class="col-md-4 btn btn-danger" style="margin-left:10px">Yakin</button>
                       <button type="button" class="col-sm-4 col-md-offset-5 btn btn-primary" style="margin-left:10px" onclick="window.location='{{ url('/standar1visimisi') }}'" >Kembali</button>                   
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
    @endforeach        

           
  <!--Text Editor-->
 <!-- Upload Proposal -->
       <div class="modal fade" id="tambah_lampiran">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <form method="post" action=" {{ route('lampiran.standar1') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hiddem="true"> &times; </span>
              </button>
              <h3 class="modal-title">Tambah Lampiran Visi, Misi, Tujuan, dan Strategi {{$dept[0]->nama_departemen}}</h3>
              </div>   
                <div class="modal-body">
                  <div class="box box-info">
                  {!! Form::open(array('route' => 'lampiran.standar1','class'=>'form-horizontal','method'=>'POST')) !!}
                      <div class="box-body">
                      
                     <div class="form-group">
                      <label class="col-sm-5 control-label">Nama Lampiran</label>
                        <div class="col-sm-6">
                        {!! Form::text('nama_lampiran', null, array('placeholder' => 'Nama Lampiran','class' => 'form-control')) !!}
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="col-sm-5 control-label">Kode Lampiran</label>
                        <div class="col-sm-6">
                        {!! Form::text('kode_lampiran', null, array('placeholder' => 'Kode Lampiran','class' => 'form-control')) !!}
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="col-sm-5 control-label">Lemari/Rak</label>
                        <div class="col-sm-6">
                        {!! Form::text('lemari_rak', null, array('placeholder' => 'Lemari/Rak','class' => 'form-control')) !!}
                        </div>
                      </div>
                        <label for="file" class="col-sm-5 control-label">Upload</label>
                          <div class="col-sm-6">
                          <input type="file" id="file" name="lampiran_standar1" class="form-control" autofocus required>
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
    


</section>

@endsection