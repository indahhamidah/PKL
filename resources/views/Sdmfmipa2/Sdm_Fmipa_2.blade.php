@extends('layouts.app')
@section('content')

<section class="content-header">
  <h1 style="text-transform: uppercase;">
    SDM @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
  </h1>
</section>
<!-- Main Content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
				<!-- Button trigger modal -->	
          <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#edit_ket">
          <i class="fa fa-pencil"></i> <span>Edit Keterangan Fakultas</span>
          </button>
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
          <table class="table table-bordered">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4>
                <strong>4.2 Pandangan FMIPA IPB tentang data di atas yang mencakup aspek: kecukupan, dan kualifikasi, serta kendala yang ada dalam pengembangan tenaga kependidikan.</strong>
                </h4>
                </div>
            @foreach($peran as $penjelasan)
            <tr>
              <td style="text-align: justify; font-size:15px;"><?php echo nl2br ($penjelasan->keterangan); ?></td>
            </tr>
            @endforeach
          </table>
          <table>
             <strong>&nbsp;&nbsp;&nbsp;Tabel 4.2.1 Perencanaan Tenaga Kependidikan FMIPA hingga tahun 2030</strong>
             <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center">Departemen*</th>
                     <th colspan="19" style="border: 1px solid #000; padding: 5px; text-align: center">Tahun Perekrutan Tendik 20..</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center" >Jumlah Tendik Baru</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center" >Jumlah Tendik 2030</th>
                     <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">12</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">13</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">14</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">15</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">16</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">17</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">18</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">19</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">20</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">21</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">22</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">23</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">24</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">25</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">26</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">27</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">28</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">29</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">30</th>
                     </tr>
                   </tr>
                   <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">G1</th>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">2</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">7</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">7</th>
                   </tr>
                   <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">G2</th>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">3</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">7</th>
                   </tr>
                   <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">G3</th>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">5</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">8</th>
                   </tr>
                   <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">G4</th>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">2</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">6</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">8</th>
                   </tr>
                   <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">G5</th>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">7</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">7</th>
                   </tr>
                   <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">G6</th>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">5</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">8</th>
                   </tr>
                   <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">G7</th>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">2</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">5</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">7</th>
                   </tr>
                   <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">G8</th>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">1</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <td style="border: 1px solid #000; padding: 5px; text-align: center">0</td>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">7</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center">7</th>
                   </tr>
          </table>
           <p><u>Keterangan</u>:  * G1 – Statistika, G2 - Geofisika & Meteorologi, G3 – Biologi, G4 – Kimia, G5 – Matematika, G6 - Ilmu Komputer, G7 – Fisika, G8 – Biokimia. PS9 Aktuaria termasuk dalam G5<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Departemen Matematika</p>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit Peran Fakultas -->
 <div class="modal fade" id="edit_ket">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">4.2 Pandangan FMIPA IPB tentang data di atas yang mencakup aspek: kecukupan, dan kualifikasi, serta kendala yang ada dalam pengembangan tenaga kependidikan.</h4>
      </div>
      <div class="modal-body">
        <div class="box box-info">
          {!! Form::open(array('route'=>'Sdm_Fmipa_2', 'class'=>'form-horizontal', 'method'=>'PUT')) !!}
          <div class="box-body">
          @foreach($peran as $penjelasan)
            <div class="form-group">
              <div class="col-xs-12">
                {!! Form::textarea('keterangan', $penjelasan->keterangan, array('placeholder' => 'Keterangan','class' => 'form-control','rows'=>'13')) !!}
              </div>
            </div>
          @endforeach
          </div>
          <div class="form-group">
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>       
  </div>
  <!-- /.modal-content -->
</div>
</section>
@endsection