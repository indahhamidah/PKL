<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Jurnal Prosiding Seminar</title>
</head>
<body>
	<h4 style="font-family: Arial"> Jurnal yang tersedia/yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir ({{$dateS1}}-{{$dateE1}})</h4>
	<table>
		<thead>
			<tr>
				<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jenis</td>
				<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Nama Jurnal</td>
				<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Rincian Nomor & Tahun</td>
				<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jumlah</td>
			</tr>
			<tr>
				<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(1)</td>
				<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(2)</td>
				<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(3)</td>
				<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(3)</td>
			</tr>					
		</thead>
			<tbody>
				@foreach($jp_seminar as $jp_seminar_)
				<tr>
					<td style="border:1px solid #000; border-width: thin; text-align: left; font-family:Arial">{{$jp_seminar_->jenis_jp_seminar}}</td>
					<td style="border:1px solid #000; border-width: thin; text-align: left; font-family:Arial">{{$jp_seminar_->nama_jurnal}}</td>
					<td style="border:1px solid #000; border-width: thin; text-align: left; font-family:Arial">{{$jp_seminar_->rinci_no}} {{$jp_seminar_->rinci_tahun}}</td>
					<td style="border:1px solid #000; border-width: thin; text-align: right; font-family:Arial">{{$jp_seminar_->jumlah}}</td>
				</tr>
				@endforeach
			</tbody>
	</table>
</body>
</html>