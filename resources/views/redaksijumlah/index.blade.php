<style>
table, th, td{
  border: 1px solid black;
}
</style>

@extends('layouts.app')
@section('content')

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
          Redaksi Kemahasiswaan
      </h1>    
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <!-- /.box-header -->
              
                  @foreach ($redaksiJumlah as $redaksijum)
                  <a class="btn btn-primary" href="{{ route('redaksijumlah.edit',$redaksijum->id_redaksiJum) }}">
                  <i class="fa fa-edit"></i>Ubah</a>
                  @endforeach
                  <a href="{{ route('jumlah.download')}}" class="btn btn-primary btn-md">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </a>
                  </div>

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
          <!-- tutup -->
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4>
                <strong>Redaksi Kemahasiswaan</strong>
                </h4>
                </div>
                    <div class="panel-body">
                      @foreach ($redaksiJumlah as $redaksijum)
                      {!! $redaksijum->redaksi_jumlah !!}

                          @endforeach
                    </div>
                </div>
           
  <!--Text Editor-->
   
    

</div>
</div>
</section>
@endsection