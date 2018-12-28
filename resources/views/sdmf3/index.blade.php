@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        SDM @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>  
    </section>
     <!-- Akhir Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">    
          <div class="box">
            <div class="box-header">
           
           <!-- Button trigger modal -->
<!--             <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal-exim25">
            <i class="fa fa-upload"></i> <span>Unggah</span>
            </button> -->
            <button type="button" class="btn btn-primary pull-left" style="margin-right: 10px" data-toggle="modal" data-target="#modal25">
            <i class="fa fa-download"></i> <span>Unduh</span>
            </button>
             <!-- Akhir Button trigger modal -->

             <br>
             <br>

            <!-- alert sukses dan eror -->
            @if(Session::has('message'))
              <div class="container">
                <div class="row">
                  <div class="col-sm-4 col-md-3">
                    <div class="alert alert-warning">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×</button>
                       <span class="glyphicon glyphicon-ok"></span>{{ Session::get('message') }}
                    </div>
                  </div>
                </div>
              </div>
           @elseif(Session::has('message2'))
              <div class="container">
                <div class="row">
                  <div class="col-sm-5 col-md-4">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×</button>
                      <span class="glyphicon glyphicon-ok"></span>{{ Session::get('message2') }}
                    </div>
                  </div>
                </div>
              </div>
          @endif
          <!-- Akhir alert sukses dan eror -->

          <!-- tutup -->
            <div class="box-body">  
              <table id="example2425" class="table table-bordered table-hover">
                <thead>
                  
                  <!-- Judul -->
                  <h4>
                 Banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada FMIPA IPB dalam tiga tahun terakhir.
                </h4>
                <!-- Akhir Judul -->
                  

              <tbody id="sdmf3-list" name="sdmf3-list">
              
                <tr>
                   <table style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Hal</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-1<br>G1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-2<br>G2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-3<br>G3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-4<br>G4</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-5<br>G5</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-6<br>G6</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-7<br>G7</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-8<br>G8</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-9<br>G9</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Total di<br>Fakultas</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Action</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(8)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(9)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(10)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(11)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(12)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;"></th>
                   </tr>
                   @foreach ($sdmf3 as $sdmf3)
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen pensiun/berhenti</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_s3_sdmf3+$sdmf3->pustakawan_s2_sdmf3+$sdmf3->pustakawan_s1_sdmf3+$sdmf3->pustakawan_d4_sdmf3+$sdmf3->pustakawan_d3_sdmf3+$sdmf3->pustakawan_d2_sdmf3+$sdmf3->pustakawan_d1_sdmf3+$sdmf3->pustakawan_sma_sdmf3+$sdmf3->pustakawan_unit_sdmf3 }}</td>
                     <td rowspan="4" style="border: 1px solid #000; padding: 5px; text-align: left;"> <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default{{$sdmf3->id_sdmf3}}">
                    <span>Ubah</span>
                    </button></td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya perekrutan dosen baru</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_s3_sdmf3+$sdmf3->lab_s2_sdmf3+$sdmf3->lab_s1_sdmf3+$sdmf3->lab_d4_sdmf3+$sdmf3->lab_d3_sdmf3+$sdmf3->lab_d2_sdmf3+$sdmf3->lab_d1_sdmf3+$sdmf3->lab_sma_sdmf3+$sdmf3->lab_unit_sdmf3 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen tugas belajar S2/Sp-1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_s3_sdmf3+$sdmf3->admin_s2_sdmf3+$sdmf3->admin_s1_sdmf3+$sdmf3->admin_d4_sdmf3+$sdmf3->admin_d3_sdmf3+$sdmf3->admin_d2_sdmf3+$sdmf3->admin_d1_sdmf3+$sdmf3->admin_sma_sdmf3+$sdmf3->admin_unit_sdmf3 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">4</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen tugas belajar S3/Sp-2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_s3_sdmf3+$sdmf3->ktu_s2_sdmf3+$sdmf3->ktu_s1_sdmf3+$sdmf3->ktu_d4_sdmf3+$sdmf3->ktu_d3_sdmf3+$sdmf3->ktu_d2_sdmf3+$sdmf3->ktu_d1_sdmf3+$sdmf3->ktu_sma_sdmf3+$sdmf3->ktu_unit_sdmf3 }}</td>
                   </tr>
                   
                   
                

                  <!-- Edit -->
               <div class="modal fade" id="modal-default{{$sdmf3->id_sdmf3}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ubah Data Tabel </h4>
                    </div>
                    <div class="modal-body">
                      <div class="box box-info">
                        {!! Form::open(array('route' => ['sdmf3.update', $sdmf3->id_sdmf3],'class'=>'form-horizontal','method'=>'PUT')) !!}
                        <div class="box-body">    
                                                            
                           <div class="form-group"> 
                            <label class="col-xs-12 col-sm-6 col-md-8"><br><font size="3">Banyaknya dosen pensiun/berhenti :</font><br>PS-1 G1 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('pustakawan_s3_sdmf3', $sdmf3->pustakawan_s3_sdmf3, array('placeholder' => 'PS-1 G1','class' => 'form-control')) !!}
                            </div>
                          </div>    
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-2 G2 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('pustakawan_s2_sdmf3', $sdmf3->pustakawan_s2_sdmf3, array('placeholder' => 'PS-2 G2','class' => 'form-control')) !!}
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-3 G3 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('pustakawan_s1_sdmf3', $sdmf3->pustakawan_s1_sdmf3, array('placeholder' => 'PS-3 G3','class' => 'form-control')) !!}
                            </div>
                          </div>  
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-4 G4 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('pustakawan_d4_sdmf3', $sdmf3->pustakawan_d4_sdmf3, array('placeholder' => 'PS-4 G4','class' => 'form-control')) !!}
                            </div>
                          </div>        
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-5 G5 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('pustakawan_d3_sdmf3', $sdmf3->pustakawan_d3_sdmf3, array('placeholder' => 'PS-5 G5','class' => 'form-control')) !!}
                            </div>
                          </div>         
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-6 G6 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('pustakawan_d2_sdmf3', $sdmf3->pustakawan_d2_sdmf3, array('placeholder' => 'PS-6 G6','class' => 'form-control')) !!}
                            </div>
                          </div>      
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-7 G7 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('pustakawan_d1_sdmf3', $sdmf3->pustakawan_d1_sdmf3, array('placeholder' => 'PS-7 G7','class' => 'form-control')) !!}
                            </div>
                          </div>       
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-8 G8 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('pustakawan_sma_sdmf3', $sdmf3->pustakawan_sma_sdmf3, array('placeholder' => 'PS-8 G8','class' => 'form-control')) !!}
                            </div>
                          </div>              
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-9 G9 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('pustakawan_unit_sdmf3', $sdmf3->pustakawan_unit_sdmf3, array('placeholder' => 'PS-9 G9','class' => 'form-control')) !!}
                            </div>
                          </div>                                        
                           <div class="form-group">  
                            <label class="col-xs-12 col-sm-6 col-md-8"><br><font size="3">Banyaknya perekrutan dosen baru  :</font><br>PS-1 G1 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('lab_s3_sdmf3', $sdmf3->lab_s3_sdmf3, array('placeholder' => 'PS-1 G1','class' => 'form-control')) !!}
                            </div>
                          </div>    
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-2 G2 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('lab_s2_sdmf3', $sdmf3->lab_s2_sdmf3, array('placeholder' => 'PS-2 G2','class' => 'form-control')) !!}
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-3 G3 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('lab_s1_sdmf3', $sdmf3->lab_s1_sdmf3, array('placeholder' => 'PS-3 G3','class' => 'form-control')) !!}
                            </div>
                          </div>  
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-4 G4 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('lab_d4_sdmf3', $sdmf3->lab_d4_sdmf3, array('placeholder' => 'PS-4 G4','class' => 'form-control')) !!}
                            </div>
                          </div>        
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-5 G5 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('lab_d3_sdmf3', $sdmf3->lab_d3_sdmf3, array('placeholder' => 'PS-5 G5','class' => 'form-control')) !!}
                            </div>
                          </div>         
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-6 G6 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('lab_d2_sdmf3', $sdmf3->lab_d2_sdmf3, array('placeholder' => 'PS-6 G6','class' => 'form-control')) !!}
                            </div>
                          </div>      
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-7 G7 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('lab_d1_sdmf3', $sdmf3->lab_d1_sdmf3, array('placeholder' => 'PS-7 G7','class' => 'form-control')) !!}
                            </div>
                          </div>         
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-8 G8 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('lab_sma_sdmf3', $sdmf3->lab_sma_sdmf3, array('placeholder' => 'PS-8 G8','class' => 'form-control')) !!}
                            </div>
                          </div>        
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-9 G9 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('lab_unit_sdmf3', $sdmf3->lab_unit_sdmf3, array('placeholder' => 'PS-9 G9','class' => 'form-control')) !!}
                            </div>
                          </div>                                         
                           <div class="form-group">  
                            <label class="col-xs-12 col-sm-6 col-md-8"><br><font size="3">Banyaknya dosen tugas belajar S2/Sp-1 :</font><br>PS-1 G1 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('admin_s3_sdmf3', $sdmf3->admin_s3_sdmf3, array('placeholder' => 'PS-1 G1','class' => 'form-control')) !!}
                            </div>
                          </div>    
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-2 G2 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('admin_s2_sdmf3', $sdmf3->admin_s2_sdmf3, array('placeholder' => 'PS-2 G2','class' => 'form-control')) !!}
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-3 G3 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('admin_s1_sdmf3', $sdmf3->admin_s1_sdmf3, array('placeholder' => 'PS-3 G3','class' => 'form-control')) !!}
                            </div>
                          </div>  
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-4 G4 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('admin_d4_sdmf3', $sdmf3->admin_d4_sdmf3, array('placeholder' => 'PS-4 G4','class' => 'form-control')) !!}
                            </div>
                          </div>        
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-5 G5 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('admin_d3_sdmf3', $sdmf3->admin_d3_sdmf3, array('placeholder' => 'PS-5 G5','class' => 'form-control')) !!}
                            </div>
                          </div>         
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-6 G6 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('admin_d2_sdmf3', $sdmf3->admin_d2_sdmf3, array('placeholder' => 'PS-6 G6','class' => 'form-control')) !!}
                            </div>
                          </div>      
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-7 G7 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('admin_d1_sdmf3', $sdmf3->admin_d1_sdmf3, array('placeholder' => 'PS-7 G7','class' => 'form-control')) !!}
                            </div>
                          </div>         
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-8 G8 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('admin_sma_sdmf3', $sdmf3->admin_sma_sdmf3, array('placeholder' => 'PS-8 G8','class' => 'form-control')) !!}
                            </div>
                          </div>        
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-9 G9 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('admin_unit_sdmf3', $sdmf3->admin_unit_sdmf3, array('placeholder' => 'PS-9 G9','class' => 'form-control')) !!}
                            </div>
                          </div>                                           
                           <div class="form-group">  
                            <label class="col-xs-12 col-sm-6 col-md-8"><br><font size="3">Banyaknya dosen tugas belajar S3/Sp-2 :</font><br>PS-1 G1 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('ktu_s3_sdmf3', $sdmf3->ktu_s3_sdmf3, array('placeholder' => 'PS-1 G1','class' => 'form-control')) !!}
                            </div>
                          </div>    
                           <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-2 G2 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('ktu_s2_sdmf3', $sdmf3->ktu_s2_sdmf3, array('placeholder' => 'PS-2 G2','class' => 'form-control')) !!}
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-3 G3 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('ktu_s1_sdmf3', $sdmf3->ktu_s1_sdmf3, array('placeholder' => 'PS-3 G3','class' => 'form-control')) !!}
                            </div>
                          </div>  
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-4 G4 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('ktu_d4_sdmf3', $sdmf3->ktu_d4_sdmf3, array('placeholder' => 'PS-4 G4','class' => 'form-control')) !!}
                            </div>
                          </div>        
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-5 G5 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('ktu_d3_sdmf3', $sdmf3->ktu_d3_sdmf3, array('placeholder' => 'PS-5 G5','class' => 'form-control')) !!}
                            </div>
                          </div>         
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-6 G6 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('ktu_d2_sdmf3', $sdmf3->ktu_d2_sdmf3, array('placeholder' => 'PS-6 G6','class' => 'form-control')) !!}
                            </div>
                          </div>      
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-7 G7 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('ktu_d1_sdmf3', $sdmf3->ktu_d1_sdmf3, array('placeholder' => 'PS-7 G7','class' => 'form-control')) !!}
                            </div>
                          </div>         
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-8 G8 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('ktu_sma_sdmf3', $sdmf3->ktu_sma_sdmf3, array('placeholder' => 'PS-8 G8','class' => 'form-control')) !!}
                            </div>
                          </div>        
                          <div class="form-group">
                            <label class="col-xs-12 col-sm-6 col-md-8">PS-9 G9 :</label>
                            <div class="col-sm-11">
                             {!! Form::number('ktu_unit_sdmf3', $sdmf3->ktu_unit_sdmf3, array('placeholder' => 'PS-9 G9','class' => 'form-control')) !!}
                            </div>
                          </div>                                                      
                          <div class="form-group">
                            <div class="modal-footer">
                              <button type="submit" class=" col-sm-3 col-md-offset-8 btn btn-primary" style="margin-top: 20px">Simpan Perubahan</button>
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
       </table>
       <tfoot>
      <td style="text-align: left; font-size: 16px"><strong>Keterangan :</strong></td>
      <br>
      <td style="text-align: left; font-size: 16px">PS1 G1 – Statistika, PS2 G2 – Meteorologi Terapan, PS3 G3 – Biologi, PS4 G4 – Kimia,</td>
      <br>
      <td style="text-align: left; font-size: 16px">PS5 G5 – Matematika, PS6 G6 - Ilmu Komputer, PS7 G7 – Fisika, PS8 G8 – Biokimia,</td>
      <br>
      <td style="text-align: left; font-size: 16px">PS9 G9 – Aktuaria</td>
    </tfoot>
      </div>
    </div>
       

<!-- Tambah Data -->
    <div class="modal fade" id="modal-default25">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title">Tambah SDM @if(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif</h4>
          </div>
          <div class="modal-body">
            <div class="box box-info">
            <!-- form start -->
            {!! Form::open(array('route' => 'sdmf3.store','class'=>'form-horizontal','method'=>'POST')) !!}
              <div class="box-body">
                 <div class="form-group">
                <label class="col-xs-12 col-sm-6 col-md-8">Tahun :</label>
                <div class="col-sm-10">
                {!! Form::selectRange('tahun_sdmf3','2018', '2018', array('placeholder' => 'Tahun','class' => 'form-control')) !!}
                </div>
              </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Semester :</label>
                  <div class="col-sm-10">
                  {!! Form::text('pustakawan_s1_sdmf3', null, array('placeholder' => 'Semester','class' => 'form-control')) !!}  
                </div>
              </div>    
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Kode MK :</label>
                  <div class="col-sm-10">
                  {!! Form::text('pustakawan_s2_sdmf3', null, array('placeholder' => 'Kode MK','class' => 'form-control')) !!}  
                </div>
              </div> 
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Nama MK :</label>
                  <div class="col-sm-10">
                  {!! Form::text('pustakawan_s3_sdmf3', null, array('placeholder' => 'Nama MK','class' => 'form-control')) !!}  
                </div>
              </div> 
              <div class="form-group">
                  <label class="col-xs-12 col-sm-6 col-md-8">Bobot sks :</label>
                  <div class="col-sm-10">
                  {!! Form::number('pustakawan_d4_sdmf3', null, array('placeholder' => 'Bobot sks','class' => 'form-control')) !!}  
                </div>
              </div> 

                  <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-8">Pengelola :</label>
                      <div class="col-sm-10">
                     {!! Form::text('pustakawan_d3_sdmf3', null, array('placeholder' => 'Pengelola','class' => 'form-control')) !!}
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
      </div>
            <!-- /.modal-content -->
    </div>
          <!-- /.modal-dialog -->
  </div>
 
          <!-- import -->
  <div class="modal fade" id="modal-exim25" tabindex="1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form method="post" action=" {{ route('sdmf3.import') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hiddem="true"> &times; </span>
          </button>
          <h3 class="modal-title">Upload SDM @if(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif</h3>
          </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">
                  <label for="file" class="col-sm-2 control-label">Upload</label>
                    <div class="col-sm-10">
                    <input type="file" id="file" name="import_file" class="form-control" autofocus required>
                    <span class="help-block with-errors"></span>
                    </div>
                  </div>
                </div>
              </div>      
              <div class="form-group">
                <div class="modal-footer">  
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
             <!-- Download -->
    <div class="modal fade" id="modal25" tabindex="1" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <form method="post" action=" {{ route('sdmf3.download') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hiddem="true"> &times; </span>
            </button>
            <h3 class="modal-title">Unduh Tabel </h3>
            </div>   
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="form-group">              
                    <div class="col-sm-10">
                      <a href="{{ route('sdmf3.export') }}" class="btn btn-primary btn-md">
                        <i class="fa fa-download"> Unduh Excel</i>
                      </a>
                      <a href="downloadsdmf3" class="btn btn-primary btn-md">
                      <i class="fa fa-download"> Unduh PDF</i>
                      </a>                 
                      <span class="help-block with-errors"></span>
                    </div>
                  </div>
                </div>
              </div>              
              <div class="form-group">
                <div class="modal-footer">
                </div>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>


</section>

@endsection
