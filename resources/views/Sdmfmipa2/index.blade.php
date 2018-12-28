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
          SDM @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
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
                @if(Auth::User()->role==2 or Auth::User()->role==8)
                  @foreach ($pandangan_fmipa_tentang_tendik as $visi)
                  <a class="btn btn-primary" href="{{ route('standar4sdmfmipa02.edit',$visi->id_pandangan_fmipa_tentang_tendik) }}">
                  <i class="fa fa-edit"></i>Ubah</a>
                  @endforeach
                  <a href="{{ route('sdmfmipa2.download') }}" class="btn btn-primary btn-md">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </a>
                   @else
                   <a href="{{ route('sdmfmipa2.download') }}" class="btn btn-primary btn-md">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </a>
                  <a href="{{ route('create.sdmfmipa02') }}" class="btn btn-primary btn-md">
                    <i class="fa fa-plus"></i> <span>Tambah</span>
                  </a>
                @endif

              @elseif(Auth::User()->id_departemen==10)
                @if(Auth::User()->role!=1)
                  <a href="{{ route('create.sdmfmipa02') }}" class="btn btn-primary btn-md">
                    <i class="fa fa-plus"></i> <span>Tambah</span>
                  </a>
                  @foreach ($pandangan_fmipa_tentang_tendik as $visi)
                    <a class="btn btn-primary" href="{{ route('standar4sdmfmipa02.edit',$visi->id_pandangan_fmipa_tentang_tendik) }}">
                    <i class="fa fa-edit"></i>Ubah</a>
                 @endforeach
                    <a href="{{ route('sdmfmipa2.download') }}" class="btn btn-primary btn-md">
                      <i class="fa fa-download"></i> <span>Unduh</span>
                    </a>
                @else
                 @foreach ($pandangan_fmipa_tentang_tendik as $visi)
                  <a class="btn btn-primary" href="{{ route('standar4sdmfmipa02.edit',$visi->id_pandangan_fmipa_tentang_tendik) }}">
                  <i class="fa fa-edit"></i>Ubah</a>
                  @endforeach
                  <a href="{{ route('sdmfmipa2.download') }}" class="btn btn-primary btn-md">
                    <i class="fa fa-download"></i> <span>Unduh</span>
                  </a>
              @endif
              @endif
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
                <h4 style="text-align: justify;">
                <strong>Pandangan FMIPA IPB tentang data di atas yang mencakup aspek: kecukupan, dan kualifikasi, serta kendala yang ada dalam pengembangan tenaga kependidikan.</strong>
                </h4>
                </div>
                    <div class="panel-body">
                      @foreach ($pandangan_fmipa_tentang_tendik as $visi)
                      {!! $visi->keterangan_pandangan_fmipa_tentang_tendik !!}

                          @endforeach
                    </div>
                </div>
           
  <!--Text Editor-->
   
    

</div>
</div>
</section>
@endsection