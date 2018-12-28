<!DOCTYPE html>
<html>
<head>
	<title>Peralatan Utama di Lab</title>
</head>
<body>
	<h4 style="font-family: Arial">Peralatan Utama di Lab</h4>
	<table cellpadding="5">
		<thead>
			<tr>
				<td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">No</th>
				<td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Nama Laboratorium</th>
				<td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Jenis Peralatan Utama</th>
				<td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Jumlah Unit</th>
				<td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Kepemilikan</th>
				<td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Kondisi</th>
				<td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Rata-rata Waktu <br>Penggunaan (jam/minggu)</th>
				<tr>
					<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial"></th>
					<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial"></th>
					<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial"></th>
					<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial"></th>
					<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">SD</th>
					<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">SW</th>
					<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Terawat</th>
					<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Tidak Terawat</th>
				</tr>
			</tr>
		</thead>
		<tbody>
			<?php $no=0; ?>
			@foreach($alat_lab as $alat_utama)
			<?php $no++; ?>
			<tr>
				<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">{{$no}}</td>
				<td style="border:1px solid #000; border-width: thin; text-align: left; font-family:Arial">{{$alat_utama->nama_lab}}</td>
				<td style="border:1px solid #000; border-width: thin; text-align: left; font-family:Arial">{{$alat_utama->jenis_alat_utama}}</td>
				<td style="border:1px solid #000; border-width: thin; text-align: right; font-family:Arial">{{number_format($alat_utama->jumlah_unit_alat,2)}}</td>
				@foreach($milik as $miliki)
				@if($alat_utama->id_kepemilikan_alat == $miliki->id_kepemilikan)
				<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">&#x2714</td>
				@else
				<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial"></td>
				@endif
				@endforeach
					@foreach($kondisi as $konds)
					@if($alat_utama->id_kondisi_alat == $konds->id_kondisi)
					<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">&#x2714</td>
					@else
					<td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial"></td>
					@endif
					@endforeach
				<td style="border:1px solid #000; border-width: thin; text-align: right; font-family:Arial">{{number_format($alat_utama->rata_waktu,2)}}</td>			
			</tr>
			@endforeach
		</tbody>
	</table>
	<p style="font-family: Arial">Keterangan: SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama</p>
</body>
</html>