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
  p{
     font-family: helvetica;
      font-size: 10pt;
  }
</style>
	<title>Sarana Tambahan FMIPA IPB</title>
</head>
<body>
	<h4>Sarana Tambahan FMIPA tahun</h4>
	<table cellpadding="8", cellspacing="0">
    <thead>
      <tr>
        <th width="15px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="150px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Sarana Tambahan</th>
        <th width="80px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Investasi Sarana Selama 3 Tahun Terakhir (Juta Rp) <br>({{$tahun2}}-{{$tahun}})</th>
        <th width="150px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rencana Investasi Sarana dalam 5 Tahun Mendatang</th>
	      <tr>
	        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nilai Investasi (Juta Rp)</th>
	        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber Dana</th>
	      </tr>
	      <tr>
		      <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
		      <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>	      	
		      <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
		      <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
		      <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
	      </tr>
      </tr>
    </thead>
    <tbody>
    	<?php $no=0; ?>
      @foreach($sar_tamb as $key => $sars)
      <?php $no++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$no}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$sars->jenis_sarana_tambahan}} ({{$sars->jumlah}} {{$sars->satuan}})</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$sars->jum_inves}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;"></td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$sars->sumber_dana}}</td>
      </tr>
      @endforeach
      <thead>
        <tr>
          <th style="border:1px solid #000; border-width: thin; text-align: left;" colspan="2">INVESTASI</th>
          <th style="border:1px solid #000; border-width: thin; text-align: left;"></th>
          <th style="border:1px solid #000; border-width: thin; text-align: left;"></th>
          <th style="border:1px solid #000; border-width: thin; text-align: left;"></th>
        </tr>
      </thead>
        <?php $nomr=0; ?>
          @foreach($rencana_tamb as $key1 => $sar_rencana)
        <?php $nomr++; ?>
        <tr>
          <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$nomr}}</td>
          <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$sar_rencana->jenis_sarana_tamb}} ({{$sar_rencana->jumlah}} {{$sar_rencana->satuan}}) </td>
          <td style="border:1px solid #000; border-width: thin; text-align: left;"></td>
          <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($rencana_inves_akhir[$key1],2)}}</td>
          <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$sar_rencana->sumber_dana}}</td>
        </tr>
          @endforeach
    </tbody>
    <tfoot>
    	<tr>
      	<th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Total</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;">{{number_format($total_inves,2)}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;">{{number_format($total_rencana,2)}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;"></th>
      </tr>
    </tfoot>
  </table>
</body>
</html>