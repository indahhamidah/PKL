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
	<title>Peralatan Utama di Lab Program Studi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
	<h4>Peralatan Utama di Lab</h4>
	<table cellspacing="0" cellpadding="8">
		<thead>
			<tr>
				<th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
				<th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nama Laboratorium</th>
				<th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Peralatan Utama</th>
				<th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Unit</th>
				<th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Kepemilikan</th>
				<th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Kondisi</th>
				<th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rata-rata Waktu <br>Penggunaan (jam/minggu)</th>
				<tr>
					<th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">SD</th>
					<th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">SW</th>
					<th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Terawat</th>
					<th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tidak Terawat</th>
				</tr>
			</tr>
		</thead>
		<tbody>
			<?php $no=0; ?>
			@foreach($alat_lab as $alat_utama)
			<?php $no++; ?>
			<tr>
				<td style="border:1px solid #000; border-width: thin; text-align: center;">{{$no}}</td>
				<td style="border:1px solid #000; border-width: thin; text-align: left;">{{$alat_utama->nama_lab}}</td>
				<td style="border:1px solid #000; border-width: thin; text-align: left;">{{$alat_utama->jenis_alat_utama}}</td>
				<td style="border:1px solid #000; border-width: thin; text-align: right;">{{$alat_utama->jumlah_unit_alat}}</td>
				@foreach($milik as $miliki)
				@if($alat_utama->id_kepemilikan_alat == $miliki->id_kepemilikan)
				<td style="border:1px solid #000; border-width: thin; text-align: center;">v</td>
				@else
				<td style="border:1px solid #000; border-width: thin; text-align: center;"></td>
				@endif
				@endforeach
					@foreach($kondisi as $konds)
					@if($alat_utama->id_kondisi_alat == $konds->id_kondisi)
					<td style="border:1px solid #000; border-width: thin; text-align: center;">v</td>
					@else
					<td style="border:1px solid #000; border-width: thin; text-align: center;"></td>
					@endif
					@endforeach
				<td style="border:1px solid #000; border-width: thin; text-align: right;">{{$alat_utama->rata_waktu}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<p>Keterangan: SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama</p>
</body>
</html>