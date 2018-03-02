@extends('layouts.app')
@section('content')
<html>
  <head>
   <title>Data Akademik FMIPA</title>  
   
  </head>
<body>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        KEGIATAN NON-AKADEMIK
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <h3 class="box-title">Data Kegiatan Non-Akademik</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

 <button id="btn_add" name="btn_add" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Tambah Kegiatan</button>
      <div class="panel-body"> 
       <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Kegiatan</th>
            <th>Tahun</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="kegiatan-list" name="kegiatan-list">
           @foreach ($kegiatan as $nonakademik)
            <tr id="nonakademik{{$nonakademik->id_kegiatan}}">
             <td>{{$nonakademik->nama_kegiatan}}</td>
             <td>{{$nonakademik->tahun_kegiatan}}</td>
              <td>
         

              </td>
            </tr>
            @endforeach
        </tbody>
        </table>
       </div>
       </div>

<!-- Tambah Data -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Kegiatan Non-Akademik</h4>
            </div>
            {!! Form::open(array('route' => 'kegiatan.store','method'=>'POST')) !!}
            <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kegiatan</strong>
            {!! Form::text('nama_kegiatan', null, array('placeholder' => 'Nama Kegiatan','class' => 'form-control')) !!}
        </div>
    </div>
    
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tahun</strong>
            {!! Form::text('tahun_kegiatan', null, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
        </div>
      </div>

  </div>  
</div>


</div>
</div>
</div>
</div>
</section>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{asset('js/ajaxkegiatan.js')}}"></script>
</body>
</html>
@endsection