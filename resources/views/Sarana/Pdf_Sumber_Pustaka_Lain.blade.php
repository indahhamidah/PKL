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
	<title>Sumber Pustaka di Lembaga Lain Program Studi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
	<h4>Sumber Pustaka di Lembaga Lain</h4>
	<table cellpadding="8" cellspacing="0">
		<thead>
			<tr>
				<th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
				<th width="530px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber Pustaka</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=0; ?>
			@foreach($sumber_pustaka_lain as $sumber_lain)
			<?php $no++; ?>
			<tr>
				<td style="border:1px solid #000; border-width: thin; text-align: center;">{{$no}}</td>
				<td style="border:1px solid #000; border-width: thin; text-align: left;">{{$sumber_lain->nama_sumber_pustaka_lain}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>