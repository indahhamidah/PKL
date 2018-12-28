<!DOCTYPE html>
<html>
<head lang="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <style type="text/css">
  @page {
      size: 8.27in 11.69in;
      
      margin-top: 1in;
      margin-left: 1in;
      margin-right: 1in;
      margin-bottom: 1in;
    }
  h4{
      font-family: helvetica;
      font-size: 11pt; 
    }
  th{
      font-family: helvetica;
      font-size: 10pt; 
  }
  td{
      font-family: helvetica;
      font-size: 10pt; 
  }
  </style>
	<title>Penerimaan Dana {{$dept[0]->nama_departemen}} </title>
</head>
<body>
	<h4>Penerimaan Dana selama 3 tahun terakhir</h4>
	<table cellspacing="0" cellpadding="8">
		<thead>
      <tr>
        <th width="110px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber Dana</th>
        <th width="170px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Dana</th>
        <th width="300px" colspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana (Juta Rupiah)</th>
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
        {{$sumber[$key1]}}</td>
        @endif
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$jns[$key1][$key2]}}</td>
        @foreach($jumlah2 as $key3 => $jumlah3)
        	<td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($jumlah3,2)}}</td>
        @endforeach
      </tr>
      @endforeach
      @endforeach
      @endif
    </tbody>
    <tfoot>
      <tr>
        <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: center;">Total</th>
        <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{number_format($total[0],2)}}</th>
        <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{number_format($total[1],2)}}</th>
        <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{number_format($total[2],2)}}</th>
      </tr>
    </tfoot>
	</table>
</body>
</html>