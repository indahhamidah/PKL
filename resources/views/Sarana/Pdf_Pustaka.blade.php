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
	<title>Pustaka di Ruang baca {{$dept[0]->nama_departemen}}</title>
</head>
<body>
	<h4 style="text-align: justify;">Tabel 1. Rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS</h4>
	<table cellspacing="0" cellpadding="8">
		<thead>
			<tr>
				<th width="300px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Pustaka</th>
				<th width="130px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Judul</th>
				<th width="130px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah <i>Copy</i></th>
				<tr>
					<th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
					<th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
					<th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
				</tr>
			</tr>
		</thead>
		<tbody>
			@foreach($pustaka as $pustaka_baca)
			<tr>
				<td style="border:1px solid #000; border-width: thin;text-align: left;">{{$pustaka_baca->jenis_pustaka}}</td>
				<td style="border:1px solid #000; border-width: thin;text-align: right;">{{$pustaka_baca->jumlah_judul}}</td>
				<td style="border:1px solid #000; border-width: thin;text-align: right;">{{$pustaka_baca->jumlah_copy}}</td>
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<th style="border:1px solid #000; border-width: thin; text-align: center;">Total</th>
				<th style="border:1px solid #000; border-width: thin; text-align: right;">{{$jum1}}</th>
				<th style="border:1px solid #000; border-width: thin; text-align: right;">{{$jum2}}</th>
			</tr>
		</tfoot>
	</table>
</body>
</html>