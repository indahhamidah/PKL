@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        Sumber Daya Manusia FMIPA IPB
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
            @if(Auth::User()->id_departemen==10)
            @if(Auth::User()->role==1)
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-defaultf4">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-eximf4">
            <i class="fa fa-upload"></i> <span>Unggah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modalf4">
            <i class="fa fa-download"></i> <span>Download</span>
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
              <table id="example24f4" class="table table-bordered table-hover">
                <thead>
                  <!-- Judul -->
                  <h4 style="text-align: left;"> 
                  4.2.1 Jenis Tenaga Kependidikan menurut pendidikan terakhir 
                </h4>
                <!-- Akhir Judul -->
                  
                <tbody id="sdmf4-list" name="sdmf4-list">
              
                <tr>
                   <table style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center">No.</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center">Jenis Tenaga Kependidikan</th>
                     <th colspan="8" style="border: 1px solid #000; padding: 5px; text-align: center" >Jumlah tenaga Kependidikan dengan Pendidikan terakhir</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center" >Unit Kerja</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center" >Action</th>
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >S3</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >S2</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >S1</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >D4</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >D3</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >D2</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >D1</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >SMA/SMK</th>
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
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;"></th>
                   </tr>
                 @foreach ($sdmf4 as $sdmf4)
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$sdmf4->id_sdmf4}}">
                    <span>Ubah</span>
                    </button>
                    {!! Form::open(['method' => 'DELETE','route' => ['sdmf4.destroy', $sdmf4->id_sdmf4],'style'=>'display:inline']) !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}</td>
                   </tr>

                  <!-- Edit -->
               <div class="modal fade" id="modal-default{{$sdmf4->id_sdmf4}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit Sumber Daya Manusia FMIPA IPB</h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['sdmf4.update', $sdmf4->id_sdmf4],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">                                       
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Teks</label>
                            <div class="col-sm-11">
                             {!! Form::textarea('isi_sdmf4', $sdmf4->isi_sdmf4, array('placeholder' => 'Sumber Daya Manusia','class' => 'form-control')) !!}
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
      <td style="text-align: left; font-size: 16px"><strong><u>Keterangan: </u></strong> * Hanya yang memiliki pendidikan formal dalam bidang perpustakaan</td>
    </tfoot>
      </div>
    </div>
       

<!-- Tambah Data -->
    <div class="modal fade" id="modal-defaultf4">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title">Tambah Sumber Daya Manusia FMIPA IPB</h4>
          </div>
          <div class="modal-body">
            <div class="box box-info">
            <!-- form start -->
            {!! Form::open(array('route' => 'sdmf4.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
                 <div class="form-group">
                <label class="col-sm-2 control-label">Tahun</label>
                <div class="col-sm-10">
                {!! Form::selectRange('tahun_sdmf4','2018', '2018', array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Teks</label>
                  <div class="col-sm-10">
                  {!! Form::textarea('isi_sdmf4', null, array('placeholder' => 'Isi Teks','class' => 'form-control')) !!}  
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
  <div class="modal fade" id="modal-eximf4" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('sdmf4.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Upload Sumber Daya Manusia FMIPA IPB</h3>
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
    <div class="modal fade" id="modalf4" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('sdmf4.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Download Sumber Daya Manusia FMIPA IPB</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">              
                    <div class="col-sm-10">
                      <a href="{{ route('sdmf4.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-file-excel-o"> Download Excel</i>
                      </a>
                      <a href="downloadsdmf4" class="btn btn-primary btn-md">
                      <i class="fa fa-file-pdf-o"> Download PDF</i>
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
