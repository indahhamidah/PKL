<html>
  <head>
   <title>Data Akademik FMIPA</title>  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 
  </head>
<body>
<div class="container">
<div class="panel panel-primary">
 <div class="panel-heading">Jumlah Mahasiswa Berdasarkan Tipe
 <button id="btn_add" name="btn_add" class="btn btn-default pull-right">Tambah Data</button>
    </div>
      <div class="panel-body"> 
       <table class="table">
        <thead>
          <tr>
            <th>Tipe</th>
            <th>Jenis Mahasiswa</th>
            <th>Jumlah Mahasiswa</th>
            <th>Tahun</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="jumlahs-list" name="jumlahs-list">
           @foreach ($jumlahs as $jumlah)
            <tr id="jumlah{{$jumlah->id}}">
             <td>{{$jumlah->id}}</td>
             <td>{{$jumlah->tipe}}</td>
             <td>{{$jumlah->jenis_mahasiswa}}</td>
              <td>{{$jumlah->jumlah_mahasiswa}}</td>
             <td>{{$jumlah->tahun}}</td>
              <td>
            <a class="btn btn-primary" href="{{ route('jumlah.edit',$jumlah->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['jumlah.destroy', $jumlah->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

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
                <h4 class="modal-title" id="myModalLabel">Jumlah Mahasiswa</h4>
            </div>
            {!! Form::open(array('route' => 'jumlah.store','method'=>'POST')) !!}
            <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipe:</strong>
            {!! Form::text('tipe', null, array('placeholder' => 'Tipe','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Mahasiswa:</strong>
            {!! Form::text('jenis_mahasiswa', null, array('placeholder' => 'Jenis Mahasiswa','class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jumlah Mahasiswa:</strong>
            {!! Form::text('jumlah_mahasiswa', null, array('placeholder' => 'Jumlah Mahasiswa','class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tahun:</strong>
            {!! Form::text('tahun', null, array('placeholder' => 'Tahun','class' => 'form-control')) !!}
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
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{asset('js/ajaxscript.js')}}"></script>
</body>
</html>