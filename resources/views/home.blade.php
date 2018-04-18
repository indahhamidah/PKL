@extends('layouts.app')

@section('content')


   <div class="container">
    <div class="page-header">
            <h1>Selamat Datang!</h1>
          </div>
          </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel-body"  style="margin-bottom: 400px">      
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
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
                    </table>

            </div>
        </div>
    </div>
</div>
@endsection

