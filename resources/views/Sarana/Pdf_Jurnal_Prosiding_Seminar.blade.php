<!DOCTYPE html>
<html lang="en">
<head>
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
	<title>Jurnal Prosiding Seminar Program Studi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
	<h4 style="text-align: justify;"> Jurnal yang tersedia/yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir ({{$dateS1}}-{{$dateE1}})</h4>
	<table cellpadding="8", cellspacing="0">
		<thead>
			<tr>
				<th width="140px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis</th>
				<th width="210px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nama Jurnal</th>
				<th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rincian Nomor & Tahun</th>
				<th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah</th>
			</tr>
			<tr>
				<th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
				<th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
				<th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
				<th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
			</tr>					
		</thead>
			<tbody>
				@foreach($jp_seminar as $jp_seminar_)
				<tr>
					<td style="border:1px solid #000; border-width: thin; text-align: left;">{{$jp_seminar_->jenis_jp_seminar}}</td>
					<td style="border:1px solid #000; border-width: thin; text-align: left;">{{$jp_seminar_->nama_jurnal}}</td>
					<td style="border:1px solid #000; border-width: thin; text-align: left;">{{$jp_seminar_->rinci_no}} ({{$jp_seminar_->rinci_tahun}})</td>
					<td style="border:1px solid #000; border-width: thin; text-align: right;">{{$jp_seminar_->jumlah}}</td>
				</tr>
				@endforeach
			</tbody>
	</table>
</body>
</html>