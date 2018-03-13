@extends('layouts.app')
@section('content')

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      KELULUSAN MAHASISWA
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
            <!-- /.box-header -->
             @if(Auth::User()->id_departemen!=10)
          <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-plus"></i> <strong>Tambah</strong>
            </button>
            <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#modal-exim">
                <i class="fa fa-upload"></i> <strong>Import</strong>
              </button>
               <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Tahun">
                </div>
                <!-- date range -->
              
                <!-- close -->
                  
             @else
              <button type="button" class="btn btn-default pull-left">
              <i class="fa fa-download"></i> <strong>Download</strong>
            </button>
           <div class="col-md-offset-10">
              <input class="form-control" id="myInput" type="text" placeholder="Pilih Departemen">
             <!--  <select name="id_departemen" class="form-control right" id="myInput2">
                      <option>Pilih Departemen</option>
                      <option value=1>Statistika</option>
                      <option value=2>Geofisika dan Meteorologi</option>
                      <option value=3>Biologi</option>
                      <option value=4>Kimia</option>
                      <option value=5>Matematika</option>
                      <option value=6>Ilmu Komputer</option>
                      <option value=7>Fisika</option>
                      <option value=8>Biokimia</option>
                      <option value=9>Aktuaria</option>
                      <option value=10>MIPA</option>
                </select> -->
           </div>
          
            @endif

          </div>
            <div class="panel-body"> 
             <table id="orders-table" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>NIM</th>
                  @if(Auth::user()->id_departemen==10)
                  <th>Departemen</th>
                  @endif
                  <th>Tahun Masuk</th>
                  <th>Tahun Lulus</th>
                  <th>Total Bulan Masa Studi</th>
                  <th>Total Tahun Masa Studi</th>
                  <th>IPK</th>
                  @if(Auth::user()->id_departemen!=10)
                  <th>Actions</th>
                  @endif
                </tr>
               </thead>
               <tbody id="lulusans-list" name="lulusans-list">
                 @foreach ($lulusans as $lulusan)
                  <tr id="lulusan{{$lulusan->id_lulusan}}">
                   <td>{{$lulusan->nama}}</td>
                   <td>{{$lulusan->nim}}</td>
                   @if(Auth::user()->id_departemen==10)
                   <td>{{$lulusan->nama_departemen}}</td>
                   @endif
                   <td>{{$lulusan->tahun_masuk}}</td>
                   <td>{{$lulusan->tahun_lulus}}</td>
                   <td>{{$lulusan->total_bulan}}</td>
                   <td>{{$lulusan->total_tahun}}</td>
                   <td>{{$lulusan->ipk}}</td>
                    @if(Auth::user()->id_departemen!=10)
                    <td>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default{{$lulusan->id_lulusan}}">
                  <strong>Edit</strong>
              </button>
                  {!! Form::open(['method' => 'DELETE','route' => ['lulusan.destroy', $lulusan->id_lulusan],'style'=>'display:inline']) !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                  {!! Form::close() !!}
                    </td>
                    @endif
                  </tr>

            <!-- Edit -->
                  <div class="modal fade" id="modal-default{{$lulusan->id_lulusan}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Edit Kelulusan</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box box-info">
                            {!! Form::open(array('route' => ['lulusan.update', $lulusan->id_lulusan],'class'=>'form-horizontal','method'=>'PUT')) !!}
              <div class="box-body">
                  <div class="form-group">
                      <label class="col-xs-12 col-sm-6 col-md-8">Nama</label>
                      <div class="col-sm-11">
                                   {!! Form::text('nama', $lulusan->nama, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                                </div>
                              </div> 
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">NIM</label>
                                <div class="col-sm-11">
                                  {!! Form::text('nim', $lulusan->nim, array('placeholder' => 'NIM','class' => 'form-control')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Tahun Masuk</label>
                                <div class="col-sm-11">
                                  {!! Form::text('tahun_masuk', $lulusan->tahun_masuk, array('placeholder' => 'Tahun Masuk','class' => 'form-control')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Tahun Lulus</label>
                                <div class="col-sm-11">
                                  {!! Form::text('tahun_lulus', $lulusan->tahun_lulus, array('placeholder' => 'Tahun Lulus','class' => 'form-control')) !!}
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Total Bulan</label>
                                <div class="col-sm-11">
                                  {!! Form::text('total_bulan', $lulusan->total_bulan, array('placeholder' => 'Total Bulan','class' => 'form-control')) !!}
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">Total Tahun</label>
                                <div class="col-sm-11">
                                  {!! Form::text('total_tahun', $lulusan->total_tahun, array('placeholder' => 'Total Tahun','class' => 'form-control')) !!}
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="col-xs-12 col-sm-6 col-md-8">IPK</label>
                                <div class="col-sm-11">
                                  {!! Form::text('ipk', $lulusan->ipk, array('placeholder' => 'IPK','class' => 'form-control')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                  <div class="modal-footer">
                                  <button type="submit" class=" col-sm-3 col-md-offset-8 btn btn-primary" style="margin-top: 20px">Save Changes</button>
                                </div>
                              </div>
                            </div>
                            {!! Form::close() !!}
                          </div>
                        </div>  
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  @endforeach
              </tbody>

              <tfoot>
                <th>Rata-Rata</th>
                <th></th>
                <th></th>
                <th></th>
                @if(Auth::user()->id_departemen==10)
                <th></th>
                @endif
                <th><?php echo $ratabulan ?> </th>
                <th><?php echo $ratatahun ?> </th>
                <th><?php echo $rataipk ?> </th>
                @if(Auth::user()->id_departemen!=10)
                <th></th>
                @endif
              </tfoot>
              </table>
             </div>
             </div>

<!-- Tambah Data -->
    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Kelulusan Mahasiswa</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-info">
            {!! Form::open(array('route' => 'lulusan.store','class'=>'form-horizontal','method'=>'POST')) !!}
            <div class="box-body">
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-10">
                    {!! Form::text('nama', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
                     </div>
                  </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">NIM</label>
                    <div class="col-sm-10">
                      {!! Form::text('nim', null, array('placeholder' => 'NIM','class' => 'form-control')) !!}
                   </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tahun Masuk</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::text('tahun_masuk', null, array('placeholder' => 'Tahun Masuk','class' => 'form-control', 'id'=>'datepicker')) !!}
                </div>   
                  </div>
                </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Tahun Lulus</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                      {!! Form::text('tahun_lulus', null, array('placeholder' => 'Tahun Lulus','class' => 'form-control','id'=>'datepicker2')) !!}
                    </div>
                  </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-2 control-label">Total Bulan</label>
                  <div class="col-sm-10">
                    {!! Form::text('total_bulan', null, array('placeholder' => 'Total Bulan','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Total Tahun</label>
                <div class="col-sm-10">
                  {!! Form::text('total_tahun', null, array('placeholder' => 'Total Tahun','class' => 'form-control')) !!}
              </div>
          </div>
           <div class="form-group">
               <label class="col-sm-2 control-label">IPK</label>
               <div class="col-sm-10">
                  {!! Form::text('ipk', null, array('placeholder' => 'IPK','class' => 'form-control')) !!}
              </div>
          </div>
              <div class="form-group">
                  <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
          </div>
              {!! Form::close() !!}
              </div>
              </div>       
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
         <!-- import -->
        <div class="modal" id="modal-exim" tabindex="1" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <form method="post" action=" {{ route('lulusan.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hiddem="true"> &times; </span>
                  </button>
                    <h3 class="modal-title">Import Kelulusan</h3>
                  </div>   

                 <div class="modal-body">
                      <div class="form-group">
                          <label for="file" class="col-sm-2 control-label">Import</label>
                          <div class="col-sm-10">
                             <input type="file" id="file" name="import_file" class="form-control" autofocus required>
                             <span class="help-block with-errors"></span>
                          </div>
                      </div> 
                   
               <div class="form-group">
                  <div class="modal-footer">
                
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
         </div>

        </form>
        </div>
        </div>
        </div>
</section>



@endsection