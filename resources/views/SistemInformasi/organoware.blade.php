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
      	organoware dan netware PADA @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
          <!-- tutup -->
            <div class="box-body"> 
              <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Penjelasan Organoware</a></li>
              <li><a href="#tab_2" data-toggle="tab">Lampiran Organoware</a></li>
              <li><a href="#tab_3" data-toggle="tab">Netware</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="tab_2">
                @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_lampiran">
                <i class="fa fa-plus"></i> <span>Lampiran Organoware</span>
                </button>  
                @endif
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Ketetapan</th>
                    <th>File</th>
                    <th>Renstra</th>
                    @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                    <th>Aksi</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; ?>
                  @foreach($organoware as $organisasi)
                  <?php $no++; ?>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$organisasi->nama_organoware}}</td>
                    <td><a href="{{ asset('images/organoware/'.$organisasi->dokumen) }}">{{$organisasi->dokumen}}</a></td>
                    <td>{{$organisasi->awal_renstra}}-{{$organisasi->akhir_renstra}}</td>
                    @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                    <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_organisasi{{$organisasi->id_organoware}}">
                      <span>Ubah</span>
                      </button>
                      {!! Form::open(['method' => 'DELETE', 'route' => ['Organoware.destroy', $organisasi->id_organoware],'style'=>'display:inline']) !!}
                      {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                      {!! Form::close() !!}
                    </td>
                    @endif
                  </tr>
                  <!-- Edit Lampiran -->
                  <div class="modal fade" id="edit_organisasi{{$organisasi->id_organoware}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Tambah Lampiran Organoware</h4>
                          </div>
                          <div class="modal-body">
                            <div class="box box-info">
                              <!-- form start -->
                              {!! Form::open(array('route' => ['Organoware.update', $organisasi->id_organoware],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                              <div class="box-body">
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Ketetapan</label>
                                  <div class="col-sm-8">
                                  {!! Form::textarea('nama_organoware', $organisasi->nama_organoware, array('placeholder' => 'Nama Ketetapan','class' => 'form-control', 'rows'=>5, 'required'=>'required')) !!}  
                                  </div>
                                </div><br><br><br><br><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label">Tahun Renstra</label>
                                  <div class="col-sm-4">
                                   {!! Form::number('awal_renstra', $organisasi->awal_renstra, array('placeholder' => '','class' => 'form-control', 'min'=>'2014', 'required'=>'required')) !!}
                                  </div>
                                  <div class="col-sm-4">
                                    {!! Form::number('akhir_renstra', $organisasi->akhir_renstra, array('placeholder' => '','class' => 'form-control', 'min'=>'2018', 'required'=>'required')) !!}
                                  </div>
                                </div><br><br>
                                <div class="form-group">
                                  <label class="col-sm-4 control-label" for="exampleInputFile">Upload Lampiran</label>
                                  <div class="col-sm-8">
                                    <input type="file" name="dokumen" id="exampleInputFile" class="" required="required">
                                      @if ($errors->has('conso')) <p>{{ $errors->first('conso') }}</p> @endif
                                  </div>
                                </div><br><br>
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
                @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
              <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#edit_ket">
              <i class="fa fa-pencil"></i> Edit Penjelasan
              </button> 
              @endif
              </div>
              <div class="box-body">
                <table class="table table-bordered">
                  @foreach($penjelasan as $jelas)
                  <tr>
                    <td style="text-align: justify; font-size:15px;"><?php echo ($jelas->penjelasan); ?></td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                <a href="#"><button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#upload_net">
                  <i class="fa fa-upload"></i> <span>Upload Hologram</span>
                  </button></a>
                  @endif
                  <br><br><br>
                  <div class="timeline-body">
                    <a href="{{ asset('images/netware/'.$netware->gambar_net) }}"><img src="{{ asset('images/netware/'.$netware->gambar_net) }}" style="width:600px; height: 500px"></a>
                  </div>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
              
         </div>
       </div>
     </div>
   </div>

<!-- Upload Netware -->
     <div class="modal fade" id="upload_net" tabindex="1" aria-hidden="true">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            {!! Form::open(array('route' => 'Organoware.uploadgbr','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hiddem="true"> &times; </span>
                </button>
                <h3 class="modal-title">Upload gambar Netware </h3>
              </div>   
              <div class="modal-body">
                <div class="box box-info">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="file" class="col-sm-2 control-label">Gambar Netware</label>
                      <div class="col-sm-10">
                      <input type="file" name="gambar_net" id="exampleInputFile" class="image" required="required">
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

<!-- Edit Penjelasan -->
<div class="modal fade" id="edit_ket">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Pendapat Pimpinan Fakultas</h4>
      </div>
      <div class="modal-body">
        <div class="box box-info">
          {!! Form::open(array('route'=>'Penjelasan_Organoware', 'class'=>'form-horizontal', 'method'=>'PUT')) !!}
          {{ csrf_field() }}
          <div class="box-body">
          @foreach($penjelasan as $jelas)
            <div class="form-group">
              <div class="col-xs-12">
                <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                <textarea placeholder="Message" name="penjelasan" id="penjelasan" value="{{ old('penjelasan') }}" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required="required">
                  </textarea>
              </div>
            </div>
          @endforeach
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
  </div>
  <!-- /.modal-content -->
</div>

<!-- Tambah Lampiran -->
  <div class="modal fade" id="tambah_lampiran">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Lampiran Organoware</h4>
          </div>
          <div class="modal-body">
            <div class="box box-info">
              <!-- form start -->
              {!! Form::open(array('route' => 'Organoware.store','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Ketetapan</label>
                  <div class="col-sm-8">
                  {!! Form::textarea('nama_organoware', null, array('placeholder' => 'Nama Ketetapan','class' => 'form-control', 'rows'=>5, 'required'=>'required')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Tahun Renstra</label>
                  <div class="col-sm-4">
                   {!! Form::number('awal_renstra', null, array('placeholder' => '','class' => 'form-control', 'min'=>'2014', 'required'=>'required')) !!}
                  </div>
                  <div class="col-sm-4">
                    {!! Form::number('akhir_renstra',null, array('placeholder' => '','class' => 'form-control', 'min'=>'2018', 'required'=>'required')) !!}
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="exampleInputFile">Upload Lampiran</label>
                  <div class="col-sm-8">
                    <input type="file" name="dokumen" id="exampleInputFile" class="">
                      @if ($errors->has('conso')) <p>{{ $errors->first('conso') }}</p> @endif
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
</section>

<script>

      var editor_config = {
        path_absolute : "",
        selector: "#penjelasan",
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | fontselect | fontsizeselect | bold italic | | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,

        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
        }
      };


      tinyMCE.init(editor_config);
      var contentEditor = {!! $jelas !!}.penjelasan;  // the way you pars the variabel from controller
      document.getElementById('penjelasan').innerHTML = contentEditor; 
    </script>
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