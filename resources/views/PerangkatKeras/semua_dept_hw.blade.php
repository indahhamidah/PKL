<style>
table, th, td {
    border: 1px solid black;
}
</style>

@extends('layouts.app')
@section('content')


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
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_si">
            <i class="fa fa-plus"></i> <span>Tambah Perangkat Keras</span>
            </button>
            <a href="download_pdf_hw"><button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal"> 
            <i class="fa fa-file-text"></i> <span>Redaksi</span>
            </button></a>
             <!-- Cari -->
              <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Cari...">
              </div> 
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
            <div class="box-body"> 
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Spesifikasi</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Actions</th>
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
                		<td>
                			<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_hw{{$perangkat_kerass->id_hardware}}">
	                    <span>Ubah</span>
	                    </button>
	                    {!! Form::open(['method' => 'DELETE','route' => ['Perangkat_Keras.destroy', $perangkat_kerass->id_hardware],'style'=>'display:inline']) !!}
	                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
	                    {!! Form::close() !!}
                		</td>
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
								                  {!! Form::text('nama_hardware', $perangkat_kerass->nama_hardware, array('placeholder' => 'Nama','class' => 'form-control')) !!}  
								                	</div>
								              	</div><br><br>
								              	<div class="form-group">
								                  <label class="col-sm-2 control-label">Spesifikasi</label>
								                  <div class="col-sm-10">
								                  {!! Form::textarea('spesifikasi', $perangkat_kerass->spesifikasi, array('placeholder' => 'Spesifikasi Perangkat Keras','class' => 'form-control', 'rows'=>'2')) !!}  
								                	</div>
								              	</div><br><br><br>
								              	<div class="form-group">
								                  <label class="col-sm-2 control-label">Jumlah</label>
								                  <div class="col-sm-10">
								                  {!! Form::number('jumlah_item', $perangkat_kerass->jumlah_item, array('placeholder' => '0','class' => 'form-control', 'min'=>0)) !!}  
								                	</div>
								              	</div><br><br>
								              	<div class="form-group">
								                  <label class="col-sm-2 control-label">Keterangan</label>
								                  <div class="col-sm-10">
								                  {!! Form::textarea('keterangan_hw', $perangkat_kerass->keterangan_hw, array('placeholder' => 'Keterangan','class' => 'form-control','rows'=>'2')) !!}  
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
                  {!! Form::text('nama_hardware', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}  
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Spesifikasi</label>
                  <div class="col-sm-10">
                  {!! Form::textarea('spesifikasi', null, array('placeholder' => 'Spesifikasi Perangkat Keras','class' => 'form-control', 'rows'=>'2')) !!}  
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah</label>
                  <div class="col-sm-10">
                  {!! Form::number('jumlah_item', null, array('placeholder' => '0','class' => 'form-control', 'min'=>0)) !!}  
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                  {!! Form::textarea('keterangan_hw', null, array('placeholder' => 'Keterangan','class' => 'form-control','rows'=>'2')) !!}  
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


@endsection