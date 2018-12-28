@extends('layouts.app')

@section('content')


   <div class="container">
    <div class="page-header">
            <!-- <h1>Selamat Datang!</h1> -->
          </div>
          </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <!-- <div class="panel-body"  style="margin-bottom: 200px">       -->
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 style="text-align: center;">Selamat Datang di Sistem Data Akreditasi Fakultas Matematika dan Ilmu Pengetahuan Alam Institut Pertanian Bogor!</h1>
                     @if(Auth::User()->id_departemen!=10)
                     @if(Auth::User()->role!=5)
                     @if(Auth::User()->role!=11)
                     @if(Auth::User()->role!=12)
                     @if(Auth::User()->role!=13)
                    <img src="images/fmipa_1.jpg" style="width:720px; height: 430px">
                    @endif
                    @endif
                    @endif
                    @endif
                     @elseif(Auth::User()->id_departemen==10)
                    @if(Auth::User()->role!=5)
                     @if(Auth::User()->role!=11)
                     @if(Auth::User()->role!=12)
                     @if(Auth::User()->role!=13)
                    <img src="images/fmipa_1.jpg" style="width:720px; height: 430px">
                    @endif
                    @endif
                    @endif
                    @endif
                    @endif
                    
                </div>
                
               
                @if(Auth::User()->role==6)
               <div class="container">
                      <h5><strong>Berikut adalah templete unggah data.</strong></h5>
                      </div>
                        <table class="table table-bordered">
                        <thead>
                          <tr>
                          <th style="text-align: center">Templete .xlsx</th>
                          <th style="text-align: center">Templete .csv</th>
                        </tr>

                        <td>
                        <a href="/templete1" style="text-align: center">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Akademik
                        </a>
                         </td>
                          <td>
                        <a href="/templete4" style="text-align: center">
                        <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        Templete Akademik
                        </a>
                         </td>

                         <tr>
                          <td>
                        <a href="/templete2" style="text-align: center">
                        <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        Templete Kelulusan
                        </a>
                         </td>
                         

                          <td>
                        <a href="/templete5" style="text-align: center">
                        <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        Templete Kelulusan
                        </a>
                         </td>
                         </tr>

                         <tr>
                          <td>
                        <a href="/templete3" style="text-align: center">
                        <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        Templete Pembinaan
                        </a>
                         </td>
                          <td>
                        <a href="/templete6" style="text-align: center">
                        <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        Templete Pembinaan
                        </a>
                         </td>
                           </tr>
  
                    </tbody>
                    </thead>
                   </table>
                    <!-- </table> -->
                    @endif

                    @if(Auth::User()->id_departemen!=10)
                     @if(Auth::User()->role==5)
               <div class="container">
               <img src="images/fmipa_1.jpg" style="width:650px; height: 330px;padding-left:10em">
                      <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:10em"><strong>Berikut adalah templete unggah data.</strong></span></b></h4>
                      
                      <td>

                        <a href="/templete_kerjasama_dalam" style="text-align: center">
                        <h5 style="font-family: arial; text-align: left;"><b><span style="padding-left:15em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Kerjasama Dalam negeri 
                        </a></h5></b></span>
                         </td>
                         <br>
                          <td>
                        <a href="/templete_kerjasama_luar" style="text-align: center">
                        <h5 style="font-family: arial; text-align: left;"><b><span style="padding-left:15em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Kerjasama Luar negeri 
                        </a></h5></b></span>
                        </a>
                         </td>
                      </div>
                       
                        <thead>

                        
                         @elseif(Auth::User()->role==11)
                      <img src="images/fmipa_1.jpg" style="width:650px; height: 330px;padding-left:10em">
                      <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:13em"><strong>Berikut adalah templete unggah data.</strong></span></b></h4>
                         <tr>
                          <td>
                        <a href="/templete_penelitian" style="text-align: center">
                        <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:15em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Penelitian 
                        </a></h4></b></span>
                         </td>
                          
                      <tr>
                      @elseif(Auth::User()->role==12)
                      <img src="images/fmipa_1.jpg" style="width:650px; height: 330px;padding-left:10em">
                      <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:13em"><strong>Berikut adalah templete unggah data.</strong></span></b></h4>
                          <td>
                        <a href="/templete_pengabdian" style="text-align: center">
                        <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:10em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Pengabdian Kepada Masyarakat
                        </a></h4></b></span>
                         </td>
                          
                      <tr>
                      @elseif(Auth::User()->role==13)
                      <img src="images/fmipa_1.jpg" style="width:650px; height: 330px;padding-left:10em">
                      <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:13em"><strong>Berikut adalah templete unggah data.</strong></span></b></h4>
                          <td>
                        <a href="/templete_hasil_pendidikan" style="text-align: center">
                        <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:15em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Hasil Pendidikan
                        </a></h4></b></span>
                         </td>
                          
                      <tr>
                          <td>
                        <a href="/templete_hasil_penelitian_dan_hasil_pengabdian" style="text-align: center">
                        <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:15em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Hasil Penelitian
                         </a></h4></b></span>
                         </td>
                         
                    </tbody>
                    </thead>
                  
                    <!-- </table> -->
                    @endif
                    @endif

                    @if(Auth::User()->id_departemen==10)
                     @if(Auth::User()->role==5)
               <div class="container">
                      
                          <tr>
                          
                      <img src="images/fmipa_1.jpg" style="width:650px; height: 330px;padding-left:10em">
                      <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:13em"><strong>Berikut adalah templete unggah data.</strong></span></b></h4>  
                        <td>
                        <a href="/templete_kerjasama_dalam" style="text-align: center">
                        <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:15em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Kerjasama dalam negeri 
                        </a></h4></b></span>
                         </td>
                          

                         <tr>
                          <td>
                        <a href="/templete_kerjasama_luar" style="text-align: center">
                       <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:15em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Kerjasama luar negeri
                        </a></h4></b></span>
                         </td>
                         

                         @elseif(Auth::User()->role==11)
                         <tr>
                         <img src="images/fmipa_1.jpg" style="width:650px; height: 330px;padding-left:10em">
                      <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:13em"><strong>Berikut adalah templete unggah data.</strong></span></b></h4>
                          <td>
                        <a href="/templete_penelitian" style="text-align: center">
                         <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:15em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Penelitian
                        </a></h4></b></span>
                         </td>
                          
                      <tr>
                      @elseif(Auth::User()->role==12)
                      <img src="images/fmipa_1.jpg" style="width:650px; height: 330px;padding-left:10em">
                      <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:13em"><strong>Berikut adalah templete unggah data.</strong></span></b></h4>
                          <td>
                        <a href="/templete_pengabdian" style="text-align: center">
                        <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:10em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Pengabdian kepada masyarakat
                       </a></h4></b></span>
                         </td>
                          
                      <tr>
                      @elseif(Auth::User()->role==13)
                     <img src="images/fmipa_1.jpg" style="width:650px; height: 330px;padding-left:10em">
                      <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:13em"><strong>Berikut adalah templete unggah data.</strong></span></b></h4>
                          <td>
                        <a href="/templete_hasil_pendidikan" style="text-align: center">
                        <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:15em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Hasil Pendidikan
                        </a></h4></b></span>
                         </td>
                          
                      <tr>
                          <td>
                        <a href="/templete_hasil_penelitian_dan_hasil_pengabdian" style="text-align: center">
                        <h4 style="font-family: arial; text-align: left;"><b><span style="padding-left:15em">
                        <i class="fa fa-cloud-download" aria-hidden="true" ></i>
                        Templete Hasil Penelitian
                        </a></h4></b></span>
                         </td>
                         
                    </tbody>
                    </thead>
                   </table>
                    @endif
                    @endif
            <!-- </div> -->
        </div>
    </div>
</div>
</div>
@endsection

