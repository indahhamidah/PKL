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
            <th>Nama</th>
            <th>NIM</th>
            <th>Tahun Masuk</th>
            <th>Tahun Lulus</th>
            <th>Total Bulan Masa Studi</th>
            <th>Total Tahun Masa Studi</th>
            <th>IPK</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="lulusans-list" name="lulusans-list">
           @foreach ($lulusans as $lulusan)
            <tr id="lulusan{{$lulusan->id_lulusan}}">
             <td>{{$lulusan->id_lulusan}}</td>
             <td>{{$lulusan->nama}}</td>
             <td>{{$lulusan->tahun_masuk}}</td>
             <td>{{$lulusan->tahun_lulus}}</td>
             <td>{{$lulusan->total_bulan}}</td>
             <td>{{$lulusan->total_tahun}}</td>
             <td>{{$lulusan->ipk}}</td>
              <td>
            <a class="btn btn-primary" href="{{ route('lulusan.edit',$lulusan->id_lulusan) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['lulusan.destroy', $lulusan->id_lulusan],'style'=>'display:inline']) !!}
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
                <h4 class="modal-title" id="myModalLabel">Masa Studi dan IPK Mahasiswa</h4>
            </div>
            {!! Form::open(array('route' => 'lulusan.store','method'=>'POST')) !!}
            <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong>
            {!! Form::text('nama', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIM:</strong>
            {!! Form::text('nim', null, array('placeholder' => 'NIM','class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tahun Masuk:</strong>
            {!! Form::text('tahun_masuk', null, array('placeholder' => 'Tahun Masuk','class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tahun Lulus:</strong>
            {!! Form::text('tahun_lulus', null, array('placeholder' => 'Tahun Lulus','class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Total Bulan:</strong>
            {!! Form::text('total_bulan', null, array('placeholder' => 'Total Bulan','class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Total Tahun:</strong>
            {!! Form::text('total_tahun', null, array('placeholder' => 'Total Tahun','class' => 'form-control')) !!}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>IPK:</strong>
            {!! Form::text('ipk', null, array('placeholder' => 'IPK','class' => 'form-control')) !!}
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
    <script src="{{asset('js/ajaxlulus.js')}}"></script>
</body>
</html>