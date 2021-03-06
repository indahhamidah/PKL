@extends('layouts.app')
@section('content')

    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        Upaya Penyebaran Informasi {{$dept[0]->nama_departemen}}
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
              @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
				      <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#edit_upaya">
				      <i class="fa fa-pencil"></i> Edit
				      </button>
              @endif	
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <h4 style="text-align: justify; font-size: 17px">Upaya penyebaran informasi/kebijakan untuk sivitas akademika di FMIPA IPB (misalnya melalui surat, faksimili, mailing list, e-mail,sms, buletin</h4>
                <table class="table table-bordered">
                  <tbody>
                    @foreach($upaya_sebar as $upaya)
                      <td style="text-align: justify;"><?php echo ($upaya->upaya_sebar); ?></td>
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
<!-- Edit Pengelolaan Dana -->
 
      <div class="modal fade" id="edit_upaya">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Upaya Penyebaran Informasi</h4>
            </div>
            <div class="modal-body">
              <div class="box box-info">
                {!! Form::open(array('route'=>'Upaya_Sebar_Info', 'class'=>'form-horizontal', 'method'=>'PUT')) !!}
                {{ csrf_field() }}
                <div class="box-body">
                  @foreach($upaya_sebar as $upaya)
                  <div class="form-group">
                    <div class="col-xs-12">
                      <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                      <textarea placeholder="Message" name="upaya_sebar" id="upaya_sebar" value="{{ old('upaya_sebar') }}" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
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
<script>

      var editor_config = {
        path_absolute : "",
        selector: "#upaya_sebar",
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
      var contentEditor = {!! $upaya !!}.upaya_sebar;  // the way you pars the variabel from controller
      document.getElementById('upaya_sebar').innerHTML = contentEditor; 
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