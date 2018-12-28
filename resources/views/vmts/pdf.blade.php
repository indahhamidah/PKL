  <style type="text/css">
  @page {
      size: 8.27in 11.69in;
     
      margin-top: 1in;
      margin-left: 1in;
      margin-right: 1in;
      margin-bottom: 1in;
    }
  </style>
<h3 style="text-align: justify;">STANDAR 1. VISI, MISI, TUJUAN DAN SASARAN, SERTA STRATEGI PENCAPAIAN</h3>
  @foreach ($vmts as $visi)
    {!! $visi->visimisi !!}
  @endforeach