<style>
table, th, td {
    border: 1px solid black;
}
</style>

@extends('layouts.app')
@section('content')


    <section class="content-header">
      <h1 style="text-transform:uppercase">
        AKSESIBILITAS DATA PADA @if(Auth::User()->id_departemen==10) FMIPA IPB @elseif(Auth::User()->id_departemen!=10) program studi {{$dept[0]->nama_departemen}} @endif
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">    
          <div class="box">
            <div class="box-header">

            </div>
          </div>
        </div>
      </div>
    </section>

@endsection