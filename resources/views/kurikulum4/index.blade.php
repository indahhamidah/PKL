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
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal4">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
                   @else
                   <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal4">
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
              <table id="example264" class="table table-bordered table-hover">
                <thead>
                  
                  <!-- Judul -->
                  <h4 style="text-align: left;"> 
                   Jumlah SKS PS (minimum untuk kelulusan) :  @foreach ($jumlah_sks_ps as $jumlah_sks_ps) {{ $jumlah_sks_ps->sks_wajib_universitas+$jumlah_sks_ps->sks_wajib_fakultas+$jumlah_sks_ps->sks_wajib_mayor+$jumlah_sks_ps->sks_minor }} SKS yang tersusun sebagai berikut:  
                </h4>
                <!-- Akhir Judul -->
                  
                </thead>

              <tbody id="kurikulum4-list" name="kurikulum4-list">
              
                <tr>
                 <td>
                   <table style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Jenis Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">SKS</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Keterangan</th>
                     @if(Auth::User()->id_departemen!=10)
                     @if(Auth::User()->role==10)
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Action</th>
                     @endif
                     @endif
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(3)</th>
                     @if(Auth::User()->id_departemen!=10)
                     @if(Auth::User()->role==10)
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;"></th>
                     @endif
                     @endif
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Wajib Universitas</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{$jumlah_sks_ps->sks_wajib_universitas}}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{$jumlah_sks_ps->keterangan_wajib_universitas}}</td>
                     @if(Auth::User()->id_departemen!=10)
            @if(Auth::User()->role==10)
            <td rowspan="4" style="border: 1px solid #000; padding: 5px; text-align: left;"><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$jumlah_sks_ps->id_jumlah_sks_ps}}">
                    <span>Ubah</span>
                    </button></td>
            @endif
            @endif
                     
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Wajib Fakultas</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{$jumlah_sks_ps->sks_wajib_fakultas}}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{$jumlah_sks_ps->keterangan_wajib_fakultas}}</td>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Wajib Mayor</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{$jumlah_sks_ps->sks_wajib_mayor}}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{$jumlah_sks_ps->keterangan_wajib_mayor}}</td>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Minor dan <i>Supporting Course<i></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{$jumlah_sks_ps->sks_minor}}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{$jumlah_sks_ps->keterangan_minor}}</td>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Jumlah total SKS setelah lulus</td>
                     <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: left;">Minimal {{ $jumlah_sks_ps->sks_wajib_universitas+$jumlah_sks_ps->sks_wajib_fakultas+$jumlah_sks_ps->sks_wajib_mayor+$jumlah_sks_ps->sks_minor }} SKS (dimungkinkan bagi mahasiswa untuk menambah beban SKSnya)</td>
                     @if(Auth::User()->id_departemen!=10)
                     @if(Auth::User()->role==10)
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;"></td>
                     @endif
                     @endif
                   </tr>
                   </table>
                 </td>
                  <td>
                    
                   
                  </td>
                </tr>
                

                  <!-- Edit -->
               <div class="modal fade" id="modal-default{{$jumlah_sks_ps->id_jumlah_sks_ps}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ubah Data Tabel </h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['kurikulum4.update', $jumlah_sks_ps->id_jumlah_sks_ps],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">                                       
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Jumlah SKS Mata Kuliah Wajib Universitas :</label>
                            <div class="col-sm-11">
                             {!! Form::number('sks_wajib_universitas', $jumlah_sks_ps->sks_wajib_universitas, array('placeholder' => 'SKS','class' => 'form-control')) !!}
                            </div>
                          </div>   
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Keterangan Mata Kuliah Wajib Universitas :</label>
                            <div class="col-sm-11">
                             {!! Form::textarea('keterangan_wajib_universitas', $jumlah_sks_ps->keterangan_wajib_universitas, array('placeholder' => 'Keterangan','class' => 'form-control')) !!}
                            </div>
                          </div>  
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Jumlah SKS Mata Kuliah Wajib Fakultas :</label>
                            <div class="col-sm-11">
                             {!! Form::number('sks_wajib_fakultas', $jumlah_sks_ps->sks_wajib_fakultas, array('placeholder' => 'SKS','class' => 'form-control')) !!}
                            </div>
                          </div>   
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Keterangan Mata Kuliah Wajib Fakultas:</label>
                            <div class="col-sm-11">
                             {!! Form::textarea('keterangan_wajib_fakultas', $jumlah_sks_ps->keterangan_wajib_fakultas, array('placeholder' => 'Keterangan','class' => 'form-control')) !!}
                            </div>
                          </div>  
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Jumlah SKS Mata Kuliah Wajib Mayor :</label>
                            <div class="col-sm-11">
                             {!! Form::number('sks_wajib_mayor', $jumlah_sks_ps->sks_wajib_mayor, array('placeholder' => 'SKS','class' => 'form-control')) !!}
                            </div>
                          </div>   
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Keterangan Mata Kuliah Wajib Mayor:</label>
                            <div class="col-sm-11">
                             {!! Form::textarea('keterangan_wajib_mayor', $jumlah_sks_ps->keterangan_wajib_mayor, array('placeholder' => 'Keterangan','class' => 'form-control')) !!}
                            </div>
                          </div>   
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Jumlah SKS Mata Kuliah Minor :</label>
                            <div class="col-sm-11">
                             {!! Form::number('sks_minor', $jumlah_sks_ps->sks_minor, array('placeholder' => 'SKS','class' => 'form-control')) !!}
                            </div>
                          </div>   
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Keterangan Mata Kuliah Minor:</label>
                            <div class="col-sm-11">
                             {!! Form::textarea('keterangan_minor', $jumlah_sks_ps->keterangan_minor, array('placeholder' => 'Keterangan','class' => 'form-control')) !!}
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
    <div class="modal fade" id="modal-default4">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title">Tambah Kurikulum @if(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif</h4>
          </div>
          <div class="modal-body">
            <div class="box box-info">
            <!-- form start -->
            {!! Form::open(array('route' => 'kurikulum4.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
                 <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Tahun :</label>
                <div class="col-sm-10">
                {!! Form::selectRange('tahun_sekarang','2018', '2018', array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Jumlah SKS Mata Kuliah Wajib :</label>
                  <div class="col-sm-10">
                  {!! Form::number('sks_wajib_universitas', null, array('placeholder' => 'SKS','class' => 'form-control')) !!}  
                </div>
              </div>  
                <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Keterangan Mata Kuliah Wajib :</label>
                  <div class="col-sm-10">
                  {!! Form::textarea('keterangan_wajib_universitas', null, array('placeholder' => 'Keterangan','class' => 'form-control')) !!}  
                </div>
              </div>    
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Jumlah sks Mata Kuliah Pilihan :</label>
                  <div class="col-sm-10">
                  {!! Form::number('sks_wajib_fakultas', null, array('placeholder' => 'sks','class' => 'form-control')) !!}  
                </div>
              </div>
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Keterangan Mata Kuliah Pilihan :</label>
                  <div class="col-sm-10">
                  {!! Form::textarea('keterangan_wajib_fakultas', null, array('placeholder' => 'Keterangan','class' => 'form-control')) !!}  
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
  <div class="modal fade" id="modal-exim4" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('kurikulum4.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
    <div class="modal fade" id="modal4" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('kurikulum4.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
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
                      <a href="{{ route('kurikulum4.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="downloadkurikulum4" class="btn btn-primary btn-md">
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
