@extends('layouts.app')
@section('content')

<section class="content-header">
  <h1 style="text-transform: uppercase;">
    Kurikulum-Peran Fakultas @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
  </h1>
</section>
<!-- Main Content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
				<!-- Button trigger modal -->	
          <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#edit_ket">
          <i class="fa fa-pencil"></i> <span>Edit Keterangan Fakultas</span>
          </button>
        </div>
       <!-- alert sukses dan eror -->
          <?php if(Session::has('success')): ?> 
            <div class="col-md-4">
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fa fa-check"></i><strong>Berhasil!</strong> <?php echo Session::get('message', ''); ?>
              </div>
            </div>
          <?php endif;?>
          <?php if (count($errors) > 0):?>
             <div class="col-md-4">
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i><strong>Data yang Anda masukkan salah!</strong>
                    <ul>
                    @foreach($errors as $error)
                    <li>  {{ $error }} </li>
                    @endforeach
                    </ul>
                </div>
              </div>
          <?php
          endif; ?>
          <!-- tutup -->
            <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            @foreach($peran as $penjelasan)
            <tr>
              <td style="text-align: justify; font-size:15px;"><?php echo nl2br ($penjelasan->keterangan); ?></td>
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
          {!! Form::open(array('route'=>'Kurikulum_Fmipa', 'class'=>'form-horizontal', 'method'=>'PUT')) !!}
          <div class="box-body">
          @foreach($peran as $penjelasan)
            <div class="form-group">
              <div class="col-xs-12">
                {!! Form::textarea('keterangan', $penjelasan->keterangan, array('placeholder' => 'Keterangan','class' => 'form-control','rows'=>'13')) !!}
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
@endsection