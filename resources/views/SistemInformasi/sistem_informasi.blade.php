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
        SISTEM INFORMASI PADA @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
            <i class="fa fa-plus"></i> <span>Tambah Sistem Informasi</span>
            </button>
            @endif
            <a href="download_pdf_si"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-target="">
            <i class="fa fa-download"></i> <span>PDF</span>
            </button></a>
            <a href="Excel_Sistem_Informasi"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-target="">
            <i class="fa fa-download"></i> <span>EXCEL</span>
            </button></a>
            @elseif((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_si">
            <i class="fa fa-plus"></i> <span>Tambah Sistem Informasi</span>
            </button>
            @else
            <a href="download_pdf_si_fmipa">
            <button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-target="">
            <i class="fa fa-download"></i> <span>PDF</span>
            </button></a>
            @endif
             <!-- Cari -->
              <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Cari...">
              </div> 
            </div>
           <!-- alert sukses dan eror -->
          
          <!-- tutup -->
            <div class="box-body"> 
              <h4 style="text-align: justify;">Tabel 5.5.1 Daftar Sistem Informasi yang digunakan di Departemen {{$dept[0]->nama_departemen}}</h4>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Sistem</th>
                    <th>Bentuk</th>
                    <th>URL</th>
                    <th>Pengembang</th>
                    <th>Fitur-fitur Sistem</th>
                    <th>Tampilan muka</th>
                    <th>Kategori</th>
                    @if(Auth::User()->role==9)
                    <th>Aksi</th>
                    @endif
                  </tr>
                </thead>
                <tbody id="sisteminformasi" name="sisteminformasii">
                	<?php $number=0 ?>
                 @foreach ($sisteminformasii as $sistem_informasi)
                  <?php $number++ ?>
                	<tr id="sistem_informasi[$sistem_informasi->id_si]">
                		<td>{{$number}}</td>
	                  <td>{{$sistem_informasi->nama_sistem}}</td>
                    <td>{{$sistem_informasi->bentuk_si}}</td>
	                  <td>{{$sistem_informasi->url}}</td>
	                  <td>{{$sistem_informasi->pengembang}}</td>
	                  <td><?php echo nl2br ($sistem_informasi['fitur_si']); ?></td>
	                  <td><a href="{{ asset('images/Tampilan_Sistem/'.$sistem_informasi->tampilan_muka) }}"><img src="{{ asset('images/'.$sistem_informasi->tampilan_muka) }}" style="width:50px; height: 50px"></a></td>
	                  <td>{{$sistem_informasi->kategori}}</td>
                		@if(Auth::User()->role==9)
                    <td>
                			<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_si{{$sistem_informasi->id_si}}">
                      <span>Ubah</span>
                      </button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_si{{$sistem_informasi->id_si}}">
                      <span>Hapus</span>
                      </button>
                		</td>
                    @endif
                	</tr>
                  <!-- Edit SI -->
                <div class="modal fade" id="edit_si{{$sistem_informasi->id_si}}">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Edit Sistem Informasi {{$dept[0]->nama_departemen}}</h4>
                      </div>
                        <div class="modal-body">
                          <div class="box box-info">
                            <!-- form start -->
                            {!! Form::open(array('route' => ['SistemInformasi.update', $sistem_informasi->id_si],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                            <div class="box-body">
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Nama Sistem</label>
                                <div class="col-sm-11">
                                {!! Form::text('nama_sistem', $sistem_informasi->nama_sistem, array('placeholder' => 'Nama Sistem','class' => 'form-control', 'required'=>'required')) !!}  
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Bentuk</label>
                                <div class="col-sm-11">
                                {!! Form::text('bentuk_si', $sistem_informasi->bentuk_si, array('placeholder' => 'Bentuk Sistem','class' => 'form-control', 'required'=>'required')) !!}  
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">URL</label>
                                <div class="col-sm-11">
                                {!! Form::text('url', $sistem_informasi->url, array('placeholder' => 'http://','class' => 'form-control', 'required'=>'required')) !!}  
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Pengembang</label>
                                <div class="col-sm-11">
                                {!! Form::text('pengembang', $sistem_informasi->pengembang, array('placeholder' => 'Pengembang','class' => 'form-control', 'required'=>'required')) !!}  
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Fitur-fitur Sistem</label>
                                <div class="col-sm-11">
                                {!! Form::textarea('fitur_si', $sistem_informasi->fitur_si, array('placeholder' => 'Fitur-fitur Sistem
                                1.
                                2.','class' => 'form-control','rows'=>'5', 'required'=>'required')) !!}  
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Kategori</label>
                                  <div class="col-sm-11">
                                    <select name="role_kategori" class="form-control">
                                      <option value="{{ $sistem_informasi->role_kategori }}"> {{ $sistem_informasi->kategori }} </option>
                                      <option value=1>Informasi Umum</option>
                                      <option value=2>Kemahasiswaan</option>
                                      <option value=3>Akademik</option>
                                      <option value=4>Administrasi</option>
                                      <option value=5>Perpustakaan</option>
                                      <option value=6>Penelitian dan Pengabdian pada Masyarakat</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-xs-12 col-sm-6 col-md-8" for="exampleInputFile">Upload Tampilan</label>
                                  <div class="col-sm-11">
                                    <input type="file" name="tampilan_muka" id="exampleInputFile" class="image" required="required">
                                    @if ($errors->has('tampilan_muka')) <p>{{ $errors->first('tampilan_muka') }}</p> @endif
                                  </div>
                                </div>
                              </div>
                                  <div class="form-group">
                                    <div class="modal-footer">
                                      <button type="submit" class="col-md-4 col-md-offset-8 btn btn-primary">Simpan</button>
                                    </div>
                                  </div>
                                </div>
                               {!! Form::close() !!}
                              <!-- </div> -->
                          </div>
                          <!-- /.modal-content -->
                       </div>
                        <!-- /.modal-dialog -->
                  </div>
                      <!-- /.modal -->
                  </div>
                  <!-- verifikasi hapus sumber lain-->
                  <div class="modal fade" id="hapus_si{{$sistem_informasi->id_si}}">
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
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['SistemInformasi.destroy', $sistem_informasi->id_si],'style'=>'display:inline']) !!}
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
   

<!-- Tambah SI -->
	<div class="modal fade" id="tambah_si">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Sistem Informasi {{$dept[0]->nama_departemen}}</h4>
   	    	</div>
         	<div class="modal-body">
           	<div class="box box-info">
           		<!-- form start -->
           		{!! Form::open(array('route' => 'SistemInformasi.store','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
           		<div class="box-body">
               	<div class="form-group">
                  <label class="col-sm-2 control-label">Nama Sistem</label>
                  <div class="col-sm-10">
                  {!! Form::text('nama_sistem', null, array('placeholder' => 'Nama Sistem','class' => 'form-control', 'required'=>'required')) !!}  
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Bentuk</label>
                  <div class="col-sm-10">
                  {!! Form::text('bentuk_si', null, array('placeholder' => 'Bentuk Sistem','class' => 'form-control', 'required'=>'required')) !!}  
                	</div>
              	</div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">URL</label>
                  <div class="col-sm-10">
                    {!! Form::text('url', null, array('placeholder' => 'http://','class' => 'form-control', 'required'=>'required')) !!}  
                  </div>
                </div>
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Pengembang</label>
                  <div class="col-sm-10">
                  {!! Form::text('pengembang', null, array('placeholder' => 'Pengembang','class' => 'form-control', 'required'=>'required')) !!}  
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Fitur-fitur Sistem</label>
                  <div class="col-sm-10">
                  {!! Form::textarea('fitur_si', null, array('placeholder' => 'Fitur-fitur Sistem
                  1.
                  2.','class' => 'form-control','rows'=>'5', 'required'=>'required')) !!}  
                	</div>
              	</div>
              	<div class="form-group">
                  <label class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-10">
                      <select name="role_kategori" class="form-control">
                        <option>Pilih Kategori</option>
                        <option value=1>Informasi Umum</option>
                        <option value=2>Kemahasiswaan</option>
                        <option value=3>Akademik</option>
                        <option value=4>Administrasi</option>
                        <option value=5>Perpustakaan</option>
                        <option value=6>Penelitian dan Pengabdian pada Masyarakat</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="exampleInputFile">Upload Tampilan</label>
                    <div class="col-sm-10">
                      <input type="file" name="tampilan_muka" id="exampleInputFile" class="image" required="required">
                      @if ($errors->has('tampilan_muka')) <p>{{ $errors->first('tampilan_muka') }}</p> @endif
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