@extends('layouts.app')
@section('content')

    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        Pengelolaan Dana pada program studi {{$dept[0]->nama_departemen}}
      </h1>
    </section>
    <link rel="stylesheet" href="{{asset('Admin/toastr/toastr.min.css')}}">
<!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
				   <!-- Button trigger modal -->
              @if(Auth::User()->role==8)
				      <button id="link" type="button" class="btn btn-primary pull-left" style="margin-right: 10px">
				      <i class="fa fa-pencil"></i> Ubah Penjelasan
				      </button>
              @endif	
              <a href="download_pdf_pengelolaan_dana"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px">
              <i class="fa fa-download"></i> PDF
              </button></a>
            </div>
            <div class="row" id="tabs">
              <div class="col-md-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Ubah Penjelasan keterlibatan PS dalam perencanaan anggaran dan pengelolaan dana</h3>
                  </div>
                  {!! Form::open(array('route'=>'Penjelasan_Pengelolaan_Dana', 'class'=>'form-horizontal', 'method'=>'PUT')) !!}
                {{ csrf_field() }}
                  <div class="box-body">
                    @foreach($pengelolaan as $kelola)
                    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                      <textarea placeholder="Message" name="penjelasan_kelola" id="penjelasan_kelola" value="{{ old('penjelasan_kelola') }}" style="width: 100%; height: 550px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                      </textarea>
                    @endforeach
                    <div class="form-group">
                      <div class="modal-footer">
                        <button id="closeTabs" type="button" class="btn btn-default">Keluar</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                  </div>
                  {!! Form::close() !!}
                </div>
            </div>
          </div>
            <!-- /.box-header -->
              <div class="box-body">
                <h4 style="text-align: justify;">5.1 Pengelolaan Dana
                  <br>Keterlibatan aktif program studi harus tercerminkan dalam dokumen tentang proses perencanaan, pengelolaan dan pelaporan serta pertanggungjawaban penggunaan dana kepada pemangku kepentingan melalui mekanisme yang transparan dan akuntabel.
                </h4>
                <h4>Jelaskan keterlibatan PS dalam perencanaan anggaran dan pengelolaan dana.</h4>
                <table class="table table-bordered">
                  <tbody>
                    @foreach($pengelolaan as $penjelasan)
                    <tr>
                      <td style="text-align: justify; font-size:15px;"><?php echo ($penjelasan->penjelasan_kelola); ?></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      

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
<script>
$("#tabs").hide();
$("#link").click(function () {
    $("#tabs").tabs();
    $("#tabs").show();
});

$("#closeTabs").click(function() {
    $("#tabs").hide();
});
</script>

<script>

      var editor_config = {
        path_absolute : "",
        selector: "#penjelasan_kelola",
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
      var contentEditor = {!! $kelola !!}.penjelasan_kelola;  // the way you pars the variabel from controller
      document.getElementById('penjelasan_kelola').innerHTML = contentEditor; 
    </script>
@endsection