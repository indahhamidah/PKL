@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/toastr/toastr.min.css')}}">
<section class="content-header">
  <h1 style="text-transform: uppercase;">
    Pembelajaran-Peran Fakultas @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
  </h1>
</section>
<!-- Main Content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
				<!-- Button trigger modal -->	
          @if(Auth::User()->role==10)
          <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#edit_ket">
          <i class="fa fa-pencil"></i> <span>Edit Keterangan Fakultas</span>
          </button>
          @endif
        </div>
       <!-- alert sukses dan eror -->
          
          <!-- tutup -->
            <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            @foreach($peran as $penjelasan)
            <tr>
              <td style="text-align: justify; font-size:15px;"><?php echo ($penjelasan->keterangan); ?></td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Peran Fakultas -->
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
          {!! Form::open(array('route'=>'Peran_Fakultas', 'class'=>'form-horizontal', 'method'=>'PUT')) !!}
          {{ csrf_field() }}
          <div class="box-body">
          @foreach($peran as $penjelasan)
            <div class="form-group">
              <div class="col-xs-12">
                <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                <textarea placeholder="Message" name="keterangan" id="keterangan" value="{{ old('keterangan') }}" style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
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

      var editor_config = {
        path_absolute : "",
        selector: "#keterangan",
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
      var contentEditor = {!! $penjelasan !!}.keterangan;  // the way you pars the variabel from controller
      document.getElementById('keterangan').innerHTML = contentEditor; 
    </script>
@endsection