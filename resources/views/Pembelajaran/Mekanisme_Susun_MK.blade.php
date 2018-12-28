@extends('layouts.app')
@section('content')

    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan di {{$dept[0]->nama_departemen}}
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
              @if((Auth::User()->id_departemen!=10) && (Auth::User()->role==10))
				      <button id="link" type="button" class="btn btn-primary pull-left" style="margin-right: 10px">
				      <i class="fa fa-pencil"></i> Ubah Penjelasan
				      </button>
              @endif	
              <a href="download_pdf_mekanisme"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal"> 
              <i class="fa fa-download"></i> <span>PDF</span>
              </button></a>
            </div>
            <div class="row" id="tabs">
              <div class="col-md-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Ubah Penjelasan Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan</h3>
                  </div>
                  {!! Form::open(array('route'=>'Mekanisme_Susun_MK', 'class'=>'form-horizontal', 'method'=>'PUT')) !!}
                {{ csrf_field() }}
                  <div class="box-body">
                    @foreach($mekanisme as $mekanismee)
                    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                      <textarea placeholder="Message" name="mekanisme" id="mekanisme" value="{{ old('mekanisme') }}" style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
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
                <h4 style="text-align: justify;">6.2.1 Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan</h4>
                <h4>Jelaskan mekanisme penyusunan materi kuliah dan monitoring perkuliahan, antara lain kehadiran dosen dan mahasiswa, serta materi kuliah.
                </h4>
                <table class="table table-bordered">
                  <tbody>
                    @foreach($mekanisme as $mekanismee)
                    <tr>
                      <td style="text-align: justify;"><?php echo ($mekanismee->mekanisme); ?></td>
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
        selector: "#mekanisme",
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
      var contentEditor = {!! $mekanismee !!}.mekanisme;  // the way you pars the variabel from controller
      document.getElementById('mekanisme').innerHTML = contentEditor; 
    </script>
@endsection