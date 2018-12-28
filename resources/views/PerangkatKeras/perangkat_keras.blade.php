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
      	PERANGKAT KERAS PADA @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">    
          <div class="box">
            <div class="box-header">
           <!-- Button trigger modal -->
            @if(Auth::User()->id_departemen!=10)
            @if(Auth::User()->role==9)
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_si">
            <i class="fa fa-plus"></i> <span>Tambah Perangkat Keras</span>
            </button>
            @endif
            @endif
            <a href="perangkat_keras_"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal"> 
            <i class="fa fa-download"></i> <span>EXCEL</span>
            </button></a>
            <a href="download_pdf_hw"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal"> 
            <i class="fa fa-download"></i> <span>PDF</span>
            </button></a>
            @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
            <a href="download_pdf_hw_fmipa"><button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal"> 
            <i class="fa fa-file-text"></i> <span>Redaksi</span>
            </button></a>
            @endif
             <!-- Cari -->
              <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Cari...">
              </div> 
            </div>
           <div class="box-body"> 
           <h4 style="text-align: justify;">Tabel 5.5.1 Spesifikasi dan jumlah Komputer</h4>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Spesifikasi</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    @if(Auth::User()->role==9)
                    <th>Aksi</th>
                    @endif
                  </tr>
                </thead>
                <tbody id="perangkatkeras" name="perangkat_keras">
                	<?php $number=0 ?>
                 @foreach ($perangkat_keras as $perangkat_kerass)
                  <?php $number++ ?>
                	<tr>
	                  <td>{{$number}}</td>
	                  <td>{{$perangkat_kerass->nama_hardware}}</td>
	                  <td>{{$perangkat_kerass->spesifikasi}}</td>
	                  <td>{{$perangkat_kerass->jumlah_item}}</td>
	                  <td>{{$perangkat_kerass->keterangan_hw}}</td>
                    @if(Auth::User()->role==9)
                		<td>
                			<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_hw{{$perangkat_kerass->id_hardware}}">
	                    <span>Ubah</span>
	                    </button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_hw{{$perangkat_kerass->id_hardware}}">
                      <span>Ubah</span>
                      </button>
                		</td>
                    @endif
                	</tr>
								 <!-- Edit Hardware -->
									<div class="modal fade" id="edit_hw{{$perangkat_kerass->id_hardware}}">
								    <div class="modal-dialog">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								            <span aria-hidden="true">&times;</span></button>
								            <h4 class="modal-title">Ubah Perangkat Keras {{$dept[0]->nama_departemen}}</h4>
								   	    	</div>
								         	<div class="modal-body">
								           	<div class="box box-info">
								           		<!-- form start -->
								           		{!! Form::open(array('route' => ['Perangkat_Keras.update', $perangkat_kerass->id_hardware],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
								           		<div class="box-body">
								               	<div class="form-group">
								                  <label class="col-sm-2 control-label">Nama</label>
								                  <div class="col-sm-10">
								                  {!! Form::text('nama_hardware', $perangkat_kerass->nama_hardware, array('placeholder' => 'Nama','class' => 'form-control', 'required'=>'required')) !!}  
								                	</div>
								              	</div><br><br>
								              	<div class="form-group">
								                  <label class="col-sm-2 control-label">Spesifikasi</label>
								                  <div class="col-sm-10">
								                  {!! Form::textarea('spesifikasi', $perangkat_kerass->spesifikasi, array('placeholder' => 'Spesifikasi Perangkat Keras','class' => 'form-control', 'rows'=>'2', 'required'=>'required')) !!}  
								                	</div>
								              	</div><br><br><br>
								              	<div class="form-group">
								                  <label class="col-sm-2 control-label">Jumlah</label>
								                  <div class="col-sm-10">
								                  {!! Form::number('jumlah_item', $perangkat_kerass->jumlah_item, array('placeholder' => '0','class' => 'form-control', 'min'=>0, 'required'=>'required')) !!}  
								                	</div>
								              	</div><br><br>
								              	<div class="form-group">
								                  <label class="col-sm-2 control-label">Keterangan</label>
								                  <div class="col-sm-10">
								                  {!! Form::textarea('keterangan_hw', $perangkat_kerass->keterangan_hw, array('placeholder' => 'Keterangan','class' => 'form-control','rows'=>'2', 'required'=>'required')) !!}  
								                	</div>
								              	</div><br><br>
								              </div>
								              <div class="form-group">
								                <div class="modal-footer"> 
								                  <button type="submit" class="btn btn-primary">Simpan</button>
								                </div>
								              </div>
								              	{!! Form::close() !!}
							            	</div>
								           </div>
								            <!-- /.modal-content -->
								         </div>
								          <!-- /.modal-dialog -->
								    </div>
								         <!-- /.modal -->
								</div>
                <!-- verifikasi hapus hardware-->
                <div class="modal fade" id="hapus_hw{{$perangkat_kerass->id_hardware}}">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title">Apakah Anda yakin ingin menghapus data ini?</h3>
                      </div>   
                        <div class="modal-body">
                          <div class="box box-info">
                            <div class="box-body">
                              <div class="form-group">
                                <div class="col-md-offset-2">
                                  <button type="button" class="btn btn-default btn-lg" data-dismiss="modal" aria-label="Close">
                                  <span aria-hiddem="true">Tidak </span>
                                  </button>
                                  {!! Form::open(['method' => 'DELETE','route' => ['Perangkat_Keras.destroy', $perangkat_kerass->id_hardware],'style'=>'display:inline']) !!}
                                  {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-lg']) !!}
                                  {!! Form::close() !!}
                                </div>
                              </div>
                            </div>
                          </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                	@endforeach
                </tbody>
           </table>
         </div>
       </div>
     </div>
   </div>

<!-- Tambah Hardware -->
	<div class="modal fade" id="tambah_si">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Perangkat Keras {{$dept[0]->nama_departemen}}</h4>
   	    	</div>
         	<div class="modal-body">
           	<div class="box box-info">
           		<!-- form start -->
           		{!! Form::open(array('route' => 'Perangkat_Keras.store','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
           		<div class="box-body">
               	<div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_hardware', null, array('placeholder' => 'Nama','class' => 'form-control', 'required'=>'required')) !!}  
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Spesifikasi</label>
                  <div class="col-sm-10">
                  {!! Form::textarea('spesifikasi', null, array('placeholder' => 'Spesifikasi Perangkat Keras','class' => 'form-control', 'rows'=>'2', 'required'=>'required')) !!}  
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah</label>
                  <div class="col-sm-10">
                  {!! Form::number('jumlah_item', null, array('placeholder' => '0','class' => 'form-control', 'min'=>0, 'required'=>'required')) !!}  
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                  {!! Form::textarea('keterangan_hw', null, array('placeholder' => 'Keterangan','class' => 'form-control','rows'=>'2', 'required'=>'required')) !!}  
                	</div>
              	</div>
                		<div class="form-group">
                  <div class="modal-footer">
                  
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
              </div>
              	{!! Form::close() !!}
              	</div>
              	
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