<style>
table, th, td {
    border: 1px solid black;
}
</style>

@extends('layouts.app')
@section('content')


    <section class="content-header">
      <h1 style="text-transform:uppercase">
        Penerimaan Dana PADA @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>
    </section>

  <link rel="stylesheet" href="{{asset('Admin/toastr/toastr.min.css')}}">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">    
          <div class="box">
            <div class="box-header">
           <!-- Button trigger modal -->

              @if(Auth::User()->role==8)
              <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-plus"></i> Tambah
              </button>
              @endif
              <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal_report">
              <i class="fa fa-file-text"></i> Report
              </button>
              <!-- tutup -->
              <div class="col-md-offset-10">
                <input class="form-control" id="myInput" type="text" placeholder="Cari...">
              </div> 
              <h4 style="text-align: justify;"> 5.2.1 Tuliskan realisasi perolehan dalam juta rupiah termasuk gaji,  selama tiga tahun terakhir, pada tabel berikut:</h4>
            </div>
           <!-- alert sukses dan eror -->
            <div class="box-body"> 
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center">Sumber Dana</th>
                  <th style="text-align: center">Jenis Dana</th>
                  <th style="text-align: center">Jumlah Dana<br>(Juta Rupiah)</th>
                  <th style="text-align: center;">Tanggal</th>
                  @if(Auth::User()->role==8)
                  <th style="text-align: center;">Aksi</th>
                  @endif
                </tr>
                </thead>
                <tbody id="penerimaan_dana" name="penerimaan_dana">
                  <?php $no=0; ?>
                  @foreach ($penerimaan_dana as $terima_dana)
                  <?php $no++; ?>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$terima_dana->sumber_terima_danaa}}</td>
                    <td>{{$terima_dana->jenis_dana}}</td>
                    <td style="text-align: right;">{{number_format($terima_dana->jumlah_dana_terima,2)}}</td>
                    <td>{{$terima_dana->tahun_terima_dana}}</td>
                    @if(Auth::User()->role==8)
                    <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_terima_dana{{$terima_dana->id_terima_dana}}">
                      <span>Ubah</span>
                      </button>
                      <button type="button" class="btn btn-danger btn-sm" style="margin-right: 10px" data-toggle="modal" data-target="#hapus_terima_dana{{$terima_dana->id_terima_dana}}">
                       Hapus
                      </button>
                    </td>
                    @endif
                  </tr>
                  <!-- Edit Terima Dana -->
                 <div class="modal fade" id="edit_terima_dana{{$terima_dana->id_terima_dana}}">
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
                            {!! Form::open(array('route' => ['PenerimaanDana.update', $terima_dana->id_terima_dana],'class'=> 'form-horizontal', 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
                            <div class="box-body">
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Sumber Dana</label>
                                <div class="col-sm-8">
                                  <select name="id_sumber_danaa" class="form-control">
                                    <option value="1" {{$terima_dana->id_sumber_danaa == 1 ? 'selected' : '' }}>PT Sendiri</option>
                                    <option value="2" {{$terima_dana->id_sumber_danaa == 2 ? 'selected' : '' }}>Dikti</option>
                                    <option value="3" {{$terima_dana->id_sumber_danaa == 3 ? 'selected' : '' }}>Sumber Lain</option>
                                  </select>
                                </div>
                              </div><br><br>
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Jenis Dana</label>
                                <div class="col-sm-8">
                                {!! Form::text('jenis_dana', $terima_dana->jenis_dana, array('placeholder' => 'Jenis Dana','class' => 'form-control')) !!}  
                                </div>
                              </div><br><br>
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Jumlah Dana (Juta Rupiah)</label>
                                <div class="col-sm-8">
                                {!! Form::number('jumlah_dana_terima', $terima_dana->jumlah_dana_terima, array('placeholder' => 'Jumlah Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01')) !!}  
                                </div>
                              </div><br><br>
                              <div class="form-group">
                                <label class="col-sm-4 control-label">Tahun</label>
                                  <div class="col-sm-8">
                                    {!! Form::date('tahun_terima_dana', $terima_dana->tahun_terima_dana, array('placeholder' => 'YYYY-MM-DD','class' => 'form-control')) !!}
                                  </div>
                              </div><br><br>
                            </div>
                              <div class="form-group">
                                <div class="modal-footer">
                                  <button type="submit" class="col-md-4 col-md-offset-8 btn btn-primary">Simpan Perubahan</button>
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
                  <!-- hapus tidak? -->
                  <div class="modal fade" id="hapus_terima_dana{{$terima_dana->id_terima_dana}}">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hiddem="true"> &times; </span>
                          </button>
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
                                  {!! Form::open(['method' => 'DELETE', 'route' => ['PenerimaanDana.destroy', $terima_dana->id_terima_dana],'style'=>'display:inline']) !!}
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
   

<!-- Tambah Penerimaan Dana -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Penerimaan Dana di {{$dept[0]->nama_departemen}}</h4>
          </div>
          <div class="modal-body">
            <div class="box box-info">
              <!-- form start -->
              {!! Form::open(array('route' => 'PenerimaanDana.store','class'=> 'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Sumber Dana</label>
                  <div class="col-sm-8">
                    <select name="id_sumber_danaa" class="form-control">
                      <option value="1">PT Sendiri</option>
                      <option value="2">Dikti</option>
                      <option value="3">Sumber Lain</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Jenis Dana</label>
                  <div class="col-sm-8">
                  {!! Form::text('jenis_dana', null, array('placeholder' => 'Jenis Dana','class' => 'form-control')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Jumlah Dana (Juta Rupiah)</label>
                  <div class="col-sm-8">
                  {!! Form::number('jumlah_dana_terima', null, array('placeholder' => 'Jumlah Dana','class' => 'form-control', 'min'=>'0.00', 'step'=>'0.01')) !!}  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Tahun</label>
                    <div class="col-sm-8">
                      {!! Form::date('tahun_terima_dana', null, array('placeholder' => 'YYYY-MM-DD','class' => 'form-control', 'id'=>'tgl1')) !!}
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
<!-- Report Penerimaan Dana -->
<div class="modal fade" id="modal_report" tabindex="1" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hiddem="true"> &times; </span>
        </button>
        <h3 class="modal-title">Report Penerimaan Dana di @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif</h3>
      </div>   
      <div class="modal-body">
        <div class="box box-info">
          <div class="box-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber Dana</th>
                  <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Dana</th>
                  <th colspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana (Juta Rupiah)</th>
                  <tr>
                    <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-2 ({{$tahun_dua_lalu}})</th>
                    <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-1 ({{$tahun_satu_lalu}})</th>
                    <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS ({{$tahun_sekarang}})</th>
                    <tr>
                    <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
                    <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
                    <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
                    <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
                    <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
                  </tr>
                  </tr>
                </tr>
              </thead>
              <tbody> 
              @if(isset($jumlah))
                @foreach($jumlah as $key1 => $jumlah1)
                  @foreach($jumlah1 as $key2 => $jumlah2)
                  <tr>
                    @if($key2 == 0)
                      <td rowspan="{{count($jumlah1)}}" style="border:1px solid #000; border-width: thin; text-align: center;">
                        {{$sumber[$key1]}}
                      </td>
                    @endif
                    <td style="border:1px solid #000; border-width: thin; text-align: center;">
                      {{$jns[$key1][$key2]}}
                    </td>
                    @foreach($jumlah2 as $key3 => $jumlah3)
                      <td style="border:1px solid #000; border-width: thin; text-align: right;">
                        {{number_format($jumlah3,2)}}
                      </td>
                    @endforeach
                  </tr>
                @endforeach
              @endforeach
              @endif
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2" style="border:1px solid #000; border-width: thin; text-align: center;">Total</th>
                  <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total[0],2)}}</th>
                  <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total[1],2)}}</th>
                  <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total[2],2)}}</th>
                </tr>
              </tfoot>
            </table> 
          </div>
        </div> 
        <div class="form-group">
           <div class="modal-footer">
              <a href="Excel_Penerimaan_Dana"><button type="button" class="btn btn-success pull-left" style="margin-right: 10px" data-toggle="modal"> 
              <i class="fa fa-download"></i> <span>EXCEL</span>
              </button></a>
              <a href="download_pdf_penerimaan_dana"><button type="button" class="btn btn-danger pull-left" style="margin-right: 10px" data-toggle="modal"> 
              <i class="fa fa-download"></i> <span>PDF</span>
              </button></a>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="{{asset('Admin/toastr/jquery.min.js')}}"></script>
<script src="{{asset('Admin/toastr/toastr.min.js')}}"></script>

</section>

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