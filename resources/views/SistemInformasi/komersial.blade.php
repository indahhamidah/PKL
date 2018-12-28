<style>
table, th, td {
    border: 1px solid black;
}
</style>

@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/toastr/toastr.min.css')}}">

    <section class="content-header">
      <h1 style="text-transform:uppercase">
        PERANGKAT LUNAK KOMERSIAL @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">    
          <div class="box">
            <div class="box-header">
           <!-- alert sukses dan eror -->
          
          <!-- tutup -->
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Perangkat Lunak Microsoft</a></li>
              <li><a href="#tab_2" data-toggle="tab">Hologram IMOVSES</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_pl_komersial">
            <i class="fa fa-plus"></i> <span>Tambah Perangkat Lunak Microsoft</span>
            </button>
            @endif

             <!-- Cari -->
              <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Cari...">
              </div> 
                <div class="box-body"> 
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Perangkat Lunak Microsoft</th>
                    @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                    <th>Aksi</th>
                    @endif
                  </tr>
                </thead>
                <tbody id="pl_komersial" name="pl_komersial">
                  <?php $number=0 ?>
                 @foreach ($pl_komersiall as $pl_komersial)
                  <?php $number++ ?>
                  <tr >
                    <td>{{$number}}</td>
                    <td>{{$pl_komersial->nama_imovses}}</td>
                    @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                    <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_pl_komersial{{$pl_komersial->id_kerjasama_imovses}}">
                    <span>Ubah</span>
                    </button>
                    {!! Form::open(['method' => 'DELETE','route' => ['PL_Komersial.update',$pl_komersial->id_kerjasama_imovses],'style'=>'display:inline']) !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                    </td>
                    @endif
                  </tr>

                  <!-- edit imovses -->
                  <div class="modal fade" id="edit_pl_komersial{{$pl_komersial->id_kerjasama_imovses}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Edit Perangkat Lunak Komersial </h4>
                          </div>
                          <div class="modal-body">
                            <div class="box box-info">
                              <!-- form start -->
                              {!! Form::open(array('route' => ['PL_Komersial.update',$pl_komersial->id_kerjasama_imovses],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                              <div class="box-body">
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Perangkat Lunak Microsoft</label>
                                  <div class="col-sm-10">
                                  {!! Form::textarea('nama_imovses', $pl_komersial->nama_imovses, array('placeholder' => 'Microsoft','class' => 'form-control', 'rows'=>'2', 'required'=>'required')) !!}  
                                  </div>
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
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="box-body">
                  @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                  <a href="#"><button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#upload_holo">
                  <i class="fa fa-upload"></i> <span>Upload Hologram</span>
                  </button></a>
                  @endif
                  <div class="timeline-body">
                    <img src="{{ asset('images/imovses/'.$hologramm->gambar_hologram) }}" style="width:600px; height: 500px">
                  </div>
                </div>
              </div>
              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
     </div>
     
 
 <!-- Tambah SI -->
  <div class="modal fade" id="tambah_pl_komersial">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Perangkat Lunak Komersial </h4>
          </div>
          <div class="modal-body">
            <div class="box box-info">
              <!-- form start -->
              {!! Form::open(array('route' => 'PL_Komersial.store','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perangkat Lunak Microsoft</label>
                  <div class="col-sm-10">
                  {!! Form::textarea('nama_imovses', null, array('placeholder' => 'Microsoft','class' => 'form-control', 'rows'=>'2', 'required'=>'required')) !!}  
                  </div>
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
            <!-- /.modal-content -->
         </div>
          <!-- /.modal-dialog -->
    </div>
        <!-- /.modal -->
  </div> 

<!-- Upload Hologram -->
     <div class="modal fade" id="upload_holo" tabindex="1" aria-hidden="true">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            {!! Form::open(array('route' => 'PL_Komersial.uploadgbr2','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hiddem="true"> &times; </span>
                </button>
                <h3 class="modal-title">Upload Stiker Hologram IMOVSES </h3>
              </div>   
              <div class="modal-body">
                <div class="box box-info">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="file" class="col-sm-2 control-label">Stiker Hologram</label>
                      <div class="col-sm-10">
                      <input type="file" name="gambar_hologram" id="exampleInputFile" class="image" required="required">
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
          {!! Form::close() !!}
        </div>
      </div>
    </div>

</section>

<script src="{{asset('Admin/toastr/jquery.min.js')}}"></script>
<script src="{{asset('Admin/toastr/toastr.min.js')}}"></script>
<script>
  @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

  
    switch(type){
      case 'info':
             toastr.info("{{ Session::get('message') }}");
             break;
          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;
          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;
          case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
@endsection