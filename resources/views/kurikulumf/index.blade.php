@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        KURIKULUM FMIPA IPB
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
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-defaultf">
            <i class="fa fa-plus"></i> <span>Tambah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-eximf">
            <i class="fa fa-upload"></i> <span>Unggah</span>
            </button>
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modalf">
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
              <table id="example26f" class="table table-bordered table-hover">
                <thead>
                  <!-- Judul -->
                  <h4 style="text-align: left;"> 
                  6.1 Kurikulum - Peran FMIPA IPB dalam penyusunan dan pengembangan kurikulum untuk program studi yang dikelola. 
                </h4>
                <!-- Akhir Judul -->
                  <tr>
                    <th width="30px">Tahun</th>
                    <th>Teks</th>
                    <th width="100px">Actions</th>
                  </tr>
                </thead>

              <tbody id="kurikulumf-list" name="kurikulumf-list">
              @foreach ($kurikulumf as $kurikulumf)
                <tr>
                  <td><p style="font-size:16px">{{$kurikulumf->tahun_kurikulumf}}</p></td>
                  <td><textarea style="font-size:16px; text-align: justify;" cols="105" rows="10">{{$kurikulumf->isi_kurikulumf}}</textarea></td>
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$kurikulumf->id_kurikulumf}}">
                    <span>Ubah</span>
                    </button>
                    {!! Form::open(['method' => 'DELETE','route' => ['kurikulumf.destroy', $kurikulumf->id_kurikulumf],'style'=>'display:inline']) !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                  </td>
                </tr>
                

                  <!-- Edit -->
               <div class="modal fade" id="modal-default{{$kurikulumf->id_kurikulumf}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit Kurikulum FMIPA IPB</h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['kurikulumf.update', $kurikulumf->id_kurikulumf],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">                                       
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">Teks</label>
                            <div class="col-sm-11">
                             {!! Form::textarea('isi_kurikulumf', $kurikulumf->isi_kurikulumf, array('placeholder' => 'Kurikulum','class' => 'form-control')) !!}
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
    <div class="modal fade" id="modal-defaultf">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title">Tambah Kurikulum FMIPA IPB</h4>
          </div>
          <div class="modal-body">
            <div class="box box-info">
            <!-- form start -->
            {!! Form::open(array('route' => 'kurikulumf.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
                 <div class="form-group">
                <label class="col-sm-2 control-label">Tahun</label>
                <div class="col-sm-10">
                {!! Form::selectRange('tahun_kurikulumf','2018', '2018', array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Teks</label>
                  <div class="col-sm-10">
                  {!! Form::textarea('isi_kurikulumf', null, array('placeholder' => 'Isi Teks','class' => 'form-control')) !!}  
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
  <div class="modal fade" id="modal-eximf" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('kurikulumf.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Upload Kurikulum FMIPA IPB</h3>
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
    <div class="modal fade" id="modalf" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('kurikulumf.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Download Kurikulum FMIPA IPB</h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">              
                    <div class="col-sm-10">
                      <a href="{{ route('kurikulumf.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-file-excel-o"> Download Excel</i>
                      </a>
                      <a href="downloadkurikulumf" class="btn btn-primary btn-md">
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
