@extends('layouts.app')
@section('content')

    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        Pendapat pimpinan fakultas fmipa ipb
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
              @if((Auth::User()->id_departemen==10) && (Auth::User()->role==8))
				      <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#edit_kelola_dana">
				      <i class="fa fa-pencil"></i> Edit Pendapat Pimpinan
				      </button>
              @endif	
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <h4 style="text-align: justify;">Pendapat pimpinan FMIPA IPB tentang perolehan dana pada butir 5.1.1, yang mencakup aspek: kecukupan dan upaya pengembangannya, serta kendala-kendala yang dihadapi</h4>
                <table class="table table-bordered">
                  <tbody>
                    @foreach($pendapat_pimpinan as $pendapat_pimp)
                    <tr>
                      <td style="text-align: justify; font-size:15px;"><?php echo nl2br ($pendapat_pimp->keterangan); ?></td>
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
<!-- Edit Pengelolaan Dana -->
 <div class="modal fade" id="edit_kelola_dana">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Pendapat Pimpinan Fakultas</h4>
            </div>
            <div class="modal-body">
              <div class="box box-info">
                {!! Form::open(array('route'=>'Pendapat_Pimpinan_Fakultas', 'class'=>'form-horizontal', 'method'=>'PUT')) !!}
                <div class="box-body">
                  @foreach($pendapat_pimpinan as $pendapat_pimp)
                  <div class="box-body pad">
                    <div class="col-xs-12">
                      {!! Form::textarea('keterangan', $pendapat_pimp->keterangan, array('placeholder' => 'Keterangan','class' => 'form-control','rows'=>'15')) !!}
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
@endsection