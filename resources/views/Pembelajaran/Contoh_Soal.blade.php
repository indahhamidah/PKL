@extends('layouts.app')
@section('content')

<section class="content-header">
  <h1 style="text-transform: uppercase;">
    Lampiran contoh soal dan silabus 1 tahun terakhir @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
  </h1>
</section>
<!-- Main Content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
				<!-- Button trigger modal -->	
          @if(Auth::User()->role==10)
          <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#tambah_conso">
          <i class="fa fa-plus"></i> <span>Tambah Contoh Soal</span>
          </button>
          @endif
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
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode MK</th>
              <th>Nama MK</th>
              <th>Contoh Soal</th>
              <th>Silabus</th>
              <th>Tahun</th>
              @if(Auth::User()->role==10)
              <th>Aksi</th>
              @endif
            </tr>
          </thead>
          <tbody>
            <?php $no=0; ?>
            @foreach($contoh as $conso)
            <?php $no++; ?>
            <tr>
              <td>{{$no}}</td>
              <td>{{$conso->kode_mk}}</td>
              <td>{{$conso->nama_mk}}</td>
              <td><a href="{{ asset('images/Contoh_Soal/'.$conso->conso) }}">{{$conso->conso}}</a></td>
              <td><a href="{{ asset('images/Silabus/'.$conso->silabus) }}">{{$conso->silabus}}</a></td>
              <td>{{$conso->tahun}}</td>
              @if(Auth::User()->role==10)
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_conso{{$conso->id_conso}}">
                <span>Ubah</span>
                </button>
                {!! Form::open(['method' => 'DELETE', 'route' => ['Contoh_Soal.destroy', $conso->id_conso],'style'=>'display:inline']) !!}
                {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
              </td>
              @endif
            </tr>
            <!-- Ubah Contoh & Silabus -->
            <div class="modal fade" id="edit_conso{{$conso->id_conso}}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit Contoh Soal & Silabus MK {{$dept[0]->nama_departemen}}</h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        <!-- form start -->
                        {!! Form::open(array('route' => ['Contoh_Soal.update', $conso->id_conso],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                        <div class="box-body">
                          <div class="form-group">
                            <label class="col-sm-4 control-label">Kode Mata Kuliah</label>
                            <div class="col-sm-8">
                            {!! Form::text('kode_mk', $conso->kode_mk, array('placeholder' => 'Kode MK','class' => 'form-control', 'required'=>'required')) !!}  
                            </div>
                          </div><br><br>
                          <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Mata Kuliah</label>
                            <div class="col-sm-8">
                            {!! Form::text('nama_mk', $conso->nama_mk, array('placeholder' => 'Nama MK','class' => 'form-control', 'required'=>'required')) !!}  
                            </div>
                          </div><br><br>
                          <div class="form-group">
                            <label class="col-sm-4 control-label">Tahun</label>
                            <div class="col-sm-8">
                            {!! Form::number('tahun', $conso->tahun, array('placeholder' => '2017','class' => 'form-control', 'min'=>'2017', 'required'=>'required')) !!}  
                            </div>
                          </div><br><br>
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="exampleInputFile">Upload Contoh Soal</label>
                            <div class="col-sm-8">
                              <input type="file" name="conso" id="exampleInputFile" class="" required="required">
                                @if ($errors->has('conso')) <p>{{ $errors->first('conso') }}</p> @endif
                            </div>
                          </div><br><br>
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="exampleInputFile">Upload Silabus</label>
                            <div class="col-sm-8">
                              <input type="file" name="silabus" id="exampleInputFile" class="" required="required"> 
                                @if ($errors->has('silabus')) <p>{{ $errors->first('silabus') }}</p> @endif
                            </div>
                          </div><br><br>
                            <div class="form-group">
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
            @endforeach
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Tambah Contoh & Silabus -->
  <div class="modal fade" id="tambah_conso">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Contoh Soal & Silabus MK {{$dept[0]->nama_departemen}}</h4>
          </div>
          <div class="modal-body">
            <div class="box box-info">
              <!-- form start -->
              {!! Form::open(array('route' => 'Contoh_Soal.store','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Kode Mata Kuliah</label>
                  <div class="col-sm-8">
                  {!! Form::text('kode_mk', null, array('placeholder' => 'Kode MK','class' => 'form-control', 'required'=>'required')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nama Mata Kuliah</label>
                  <div class="col-sm-8">
                  {!! Form::text('nama_mk', null, array('placeholder' => 'Nama MK','class' => 'form-control', 'required'=>'required')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Tahun</label>
                  <div class="col-sm-8">
                  {!! Form::number('tahun', null, array('placeholder' => '2017','class' => 'form-control', 'min'=>'2017', 'required'=>'required')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="exampleInputFile">Upload Contoh Soal</label>
                  <div class="col-sm-8">
                    <input type="file" name="conso" id="exampleInputFile" class="" required="required">
                      @if ($errors->has('conso')) <p>{{ $errors->first('conso') }}</p> @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="exampleInputFile">Upload Silabus</label>
                  <div class="col-sm-8">
                    <input type="file" name="silabus" id="exampleInputFile" class="" required="required">
                      @if ($errors->has('silabus')) <p>{{ $errors->first('silabus') }}</p> @endif
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