<style>
table, th, td {
    border: 1px solid black;
}
</style>

@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/toastr/toastr.min.css')}}">

    <section class="content-header">
      <h1 style="text-transform:uppercase">
        AKSESIBILITAS DATA PADA @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">    
          <div class="box">
            <div class="box-header">
           <!-- Button trigger modal -->
            @if(Auth::User()->role==9)
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#edit_akses_data">
            <i class="fa fa-pencil"></i> <span>Edit Aksesibilitas Data</span>
            </button>
            @endif
            <a href="aksesibilitas_data_"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal"> 
            <i class="fa fa-download"></i> <span>EXCEL</span>
            </button></a>
            <a href="download_pdf_akses_data"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal"> 
            <i class="fa fa-download"></i> <span>PDF</span>
            </button></a>
            </div>
            <div class="box-body"> 
            <h4 style="text-align: justify;">5.5.2 Beri tanda √ pada kolom yang sesuai (hanya satu kolom) dengan aksesibilitas tiap jenis data, dengan mengikuti format tabel berikut:</h4>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                	<tr>
                    <th rowspan="2">No</th>
                    <th width="200px" rowspan="2" style="text-align: center;">Jenis Data</th>
                    <th colspan="4" style="text-align: center;">Sistem Pengelolaan Data</th>
                	</tr>
                	<tr>
                    <th>Secara Manual</th>
                    <th>Dengan Komputer Tanpa Jaringan</th>
                    <th>Dengan Komputer Jaringan Local (LAN)</th>
                    <th>Dengan Komputer Jaringan Luas (WAN)</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; ?>
                  @foreach($akses_data as $akses_dataa)
                  <?php $no++; ?>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$akses_dataa->jenis_data_akses}}</td>
                    @foreach($sistem_data as $sistem_data_)
                    @if($akses_dataa->id_sistem_kelola == $sistem_data_->id_sistem_kelola_datax)
                    <td style="text-align: center;"> &#x2714 </td>
                    @else
                    <td></td>
                    @endif
                    @endforeach
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <th colspan="2">Jumlah</th>
                    <th style="text-align: center;">{{$nilai1}}</th>
                    <th style="text-align: center;">{{$nilai2}}</th>
                    <th style="text-align: center;">{{$nilai3}}</th>
                    <th style="text-align: center;">{{$nilai4}}</th>    
                </tfoot>
           </table>
         </div>
       </div> 

<!-- Edit Aksesibilitas Data -->
	<div class="modal fade" id="edit_akses_data">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Aksesibilitas Data </h4>
   	    	</div>
         	<div class="modal-body"> 
           	<div class="box box-info">
           		<!-- form start -->
           		{!! Form::open(array('route'=>['Aksesibilitas_Data.update', $akses_dataa->id_akses_data], 'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
           		<div class="box-body">
                @foreach($jenis_data as $jenis_dataa)
                @foreach($akses_data as $akses_dataa)
                @if($jenis_dataa->id_jenis_akses==$akses_dataa->id_jenis_akses_data)
              <fieldset id="{{$jenis_dataa->id_jenis_akses}}" name="{{$jenis_dataa->id_jenis_akses}}" value="{{$jenis_dataa->id_jenis_akses}}">
                <div class="form-group">
                  <label class="col-sm-2 control-label">{{$jenis_dataa->jenis_data_akses}}</label>
                    <div>
                      <input type="hidden" name="jenis_akses_{{$akses_dataa->id_jenis_akses_data}}"  class="form-control" value="{{$akses_dataa->id_jenis_akses_data}}" >
                    </div>
                  <div class="col-sm-10"> 
                  @foreach($sistem_data as $sistem_dataa)
                    <div class="col-sm-5">
                      <input type="radio" value="{{$sistem_dataa->id_sistem_kelola_datax}}" <?php echo ($akses_dataa->id_sistem_kelola==$sistem_dataa->id_sistem_kelola_datax) && ($akses_dataa->id_jenis_akses_data==$jenis_dataa->id_jenis_akses)?'checked':' ';?>  name="jenis_data_{{$jenis_dataa->id_jenis_akses}}" >
                      {{ $sistem_dataa->nama_sistem_kelola }}
                    </div>
                  @endforeach
                 </div>
                </div>
              </fieldset>
                @endif
                @endforeach
                @endforeach
              </div>
             <div class="form-group">
              <div class="modal-footer">
                <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
             </div>
           	</div>
            {!! Form::close() !!}  	
            </div>
            <!-- /.modal-content -->
         </div>
          <!-- /.modal-dialog -->
    </div>
         <!-- /.modal -->
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