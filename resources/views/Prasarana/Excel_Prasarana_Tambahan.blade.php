<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Prasarana Tambahan FMIPA IPB</title>
</head>
<body>
  <h4 style="font-family: Arial">Prasarana Tambahan FMIPA tahun {{$tahun2}}-{{$tahun}}</h4>
	<table class="table table-bordered table-hover">
    <thead>
      <tr>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">No</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jenis Prasarana Tambahan</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Investasi Prasarana Tambahan<br>Selama 3 Tahun Terakhir (Rp Juta)</td>
        <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Rencana Investasi Prasarana dalam 5 Tahun Mendatang</td>
        <tr>
        	<td></td>
        	<td></td>
        	<td></td>
          <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Nilai Investasi (Rp Juta)</td>
          <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Sumber Dana</td>
        </tr>
      </tr>
    </thead>
    <tbody>
      <?php $no=0; ?>
      @foreach($pras_tamb as $key => $prass)
      <?php $no++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">{{$no}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$prass->jenis_prasarana_tambahan}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($prass->jum_inves,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($rencana_inves_terakhir[$key],2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$prass->sumber_dana}}</td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
    	<tr>
      	<td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Total</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;font-family: Arial">{{number_format($total_inves,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;font-family: Arial">{{number_format($total_rencana,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;font-family: Arial"></td>
      </tr>
		</tfoot>
   </table>
</body>
</html>