<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Sarana Tambahan FMIPA IPB</title>
</head>
<body>
	<h4 style="font-family: Arial">Sarana Tambahan FMIPA tahun {{$tahun2}}-{{$tahun}}</h4>
	<table class="table table-bordered table-hover">
    <thead>
      <tr>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">No</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Jenis Sarana Tambahan</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Investasi Sarana Selama 3 Tahun Terakhir (Rp Juta) <br>({{$tahun2}}-{{$tahun}})</td>
        <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Rencana Investasi Sarana dalam 5 Tahun Mendatang</td>
	      <tr>
	      	<td></td>
	      	<td></td>
	      	<td></td>
	        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Nilai Investasi (Rp Juta)</td>
	        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Sumber Dana</td>
	      </tr>
	      <tr>
		      <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(1)</td>
		      <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(2)</td>	      	
		      <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(3)</td>
		      <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(4)</td>
		      <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(5)</td>
	      </tr>
      </tr>
    </thead>
    <tbody>
      <?php $no=0; ?>
      @foreach($sar_tamb as $key => $sars)
      <?php $no++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">{{$no}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$sars->jenis_sarana_tambahan}} ({{$sars->jumlah}} {{$sars->satuan}})</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($sars->jum_inves,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial"></td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$sars->sumber_dana}}</td>
      </tr>
      @endforeach
      <thead>
        <tr>
          <th style="border:1px solid #000; border-width: thin; text-align: left;" colspan="2">INVESTASI</th>
          <th style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial"></th>
          <th style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial"></th>
          <th style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial"></th>
        </tr>
      </thead>
        <?php $nomr=0; ?>
          @foreach($rencana_tamb as $key1 => $sar_rencana)
        <?php $nomr++; ?>
        <tr>
          <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$nomr}}</td>
          <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$sar_rencana->jenis_sarana_tamb}} ({{$sar_rencana->jumlah}} {{$sar_rencana->satuan}}) </td>
          <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial"></td>
          <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($rencana_inves_akhir[$key1],2)}}</td>
          <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$sar_rencana->sumber_dana}}</td>
        </tr>
          @endforeach
    </tbody>
    <tfoot>
    	<tr>
      	<td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">Total</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;font-family: Arial">{{number_format($total_inves,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;font-family: Arial">{{number_format($total_rencana,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial"></td>
      </tr>
    </tfoot>
  </table>
</body>
</html>