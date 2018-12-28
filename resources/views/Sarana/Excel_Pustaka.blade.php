<!DOCTYPE html>
<html>
<head>
	<title>Pustaka Ruang Baca</title>
</head>
<body>
	<h4 style="font-family: Arial">Tabel 1. Rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS</h4>
	<table cellpadding="5">
	<tbody>
		<thead>
			<tr>
				<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Jenis Pustaka</td>
				<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Jumlah Judul</td>
				<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Jumlah Copy</td>
				<tr>
					<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(1)</td>
					<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(2)</td>
					<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(3)</td>
				</tr>
			</tr>
		</thead>
		<tbody>
			@foreach($pustaka as $pustaka_baca)
			<tr>
				<td style="border:1px solid #000; border-width: thin;text-align: left; font-family:Arial">{{$pustaka_baca->jenis_pustaka}}</td>
				<td style="border:1px solid #000; border-width: thin;text-align: right; font-family:Arial">{{number_format($pustaka_baca->jumlah_judul,2)}}</td>
				<td style="border:1px solid #000; border-width: thin;text-align: right; font-family:Arial">{{number_format($pustaka_baca->jumlah_copy,2)}}</td>
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">Total</td>
				<td style="border:1px solid #000; border-width: thin; text-align: right; font-family:Arial">{{number_format($jum1,2)}}</td>
				<td style="border:1px solid #000; border-width: thin; text-align: right; font-family:Arial">{{number_format($jum2,2)}}</td>
			</tr>
		</tfoot>
	</table>
</body>
</html>