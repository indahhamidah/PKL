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
</head>
<body>
  <h4>Data Prasarana Tambahan di FMIPA</h4>
	<table  cellpadding="8", cellspacing="0">
    <thead>
      <tr>
        <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Prasarana Tambahan</th>
        <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Investasi Prasarana Tambahan<br>Selama 3 Tahun Terakhir (Rp Juta)</th>
        <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rencana Investasi Prasarana dalam 5 Tahun Mendatang</th>
        <tr>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nilai Investasi (Rp Juta)</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber Dana</th>
        </tr>
      </tr>
    </thead>
    <tbody>
      <?php $no=0; ?>
      @foreach($pras_tamb as $key => $prass)
      <?php $no++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$no}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$prass->jenis_prasarana_tambahan}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$prass->jum_inves}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$rencana_inves_terakhir[$key]}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$prass->sumber_dana}}</td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
    	<tr>
      	<th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Total</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">{{$total_inves}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">{{$total_rencana}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"></th>
      </tr>
		</tfoot>
   </table>
</body>
</html>