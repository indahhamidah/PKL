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
          SDM @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>    
    </section>


    <!-- Main content -->

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          
      <!--     <form method="post" action=" {{ route('ubah.sdm01') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }} -->
              {!! Form::open(array('route' => ['standar4sdm01.update', $sistem_seleksi_dan_pengembangan->id_sistem_seleksi_dan_pengembangan],'class'=>'form-horizontal','method'=>'PUT')) !!}
                   
            <div class="box-header">
            <!-- /.box-header -->

                  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                      <textarea id="sistem_seleksi_dan_pengembangan" rows="50" cols="5" oneKeyPress class="form-control my-editor" name="keterangan_seleksi_dan_pengembangan"></textarea>
                  
    
          </div>
           <div class="form-group" >
                            <div class="col-md-12 col-md-offset-6 text-right" style="margin-top:100px">
                                <button type="submit" class="col-md-2 btn btn-primary"  >Simpan</button>
                                <button type="button" class="col-md-2 btn btn-danger" style="margin-left:10px" onclick="window.location='{{ url('/standar4sdm01') }}'" >Kembali</button>
                                
                            </div>
                        </div>
                    <!--     </form> -->

          
                    

                    
  <!--Text Editor-->


    <script>

      var editor_config = {
        path_absolute : "/",
        selector: "#sistem_seleksi_dan_pengembangan",
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
      var contentEditor = {!! $sistem_seleksi_dan_pengembangan !!}.keterangan_seleksi_dan_pengembangan;  // the way you pars the variabel from controller
      document.getElementById('sistem_seleksi_dan_pengembangan').innerHTML = contentEditor; 
    </script>
    
</div>
</div>;
</div>
</section>
@endsection