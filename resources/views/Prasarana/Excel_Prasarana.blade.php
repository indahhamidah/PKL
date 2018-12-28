<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Prasarana</title>
</head>
<body>
	<h4 style="font-family: Arial">5.3.2 Tuliskan data prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. kecuali  ruang dosen) yang dipergunakan PS dalam proses belajar mengajar dengan  mengikuti format tabel berikut:</h4>
	<table cellpadding="5">
		<thead>
		  <tr>
		    <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">No</td>
		    <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jenis Prasarana</td>
		    <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jumlah Unit</td>
		    <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Total Luas (m<sup>2</sup>)</td>
		    <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Kepemilikan</td>
		    <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Kondisi</td>
		    <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Utilisasi (Jam/Minggu)</td>
        <tr>
        	<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial"></td>
        	<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial"></td>
        	<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial"></td>
        	<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial"></td>
		      <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">SD</td>
		      <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">SW</td>
		      <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Terawat</td>
		      <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Tidak Terawat</td>
		    </tr>
		  </tr>
		</thead>
		<tbody>
    <?php $no=0; ?>
    @foreach($prasarana_ps as $prasarana_ps_)
		<?php $no++; ?>
      <tr>
		  	<td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">{{$no}}</td>
		    <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$prasarana_ps_->jenis_prasarana_ps}}</td>
		    <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($prasarana_ps_->jumlah_unit_prasarana,2)}}</td>
		    <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($prasarana_ps_->total_luas,2)}}</td>
        @foreach($milik as $miliki)
        @if($prasarana_ps_->id_kepemilikan_pras == $miliki->id_kepemilikan)
		    <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">&#x2714</td>
        @else
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial"></td>
        @endif
        @endforeach
        @foreach($kondisi as $konds)
		    @if($prasarana_ps_->id_kondisi_pras == $konds->id_kondisi)
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">&#x2714</td>
        @else
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial"></td>
        @endif
		    @endforeach
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($prasarana_ps_->utilisasi,2)}}</td>
     </tr>
     @endforeach
   </tbody>
 </table>
 <p style="font-family: Arial">Keterangan:
SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama
</p>
</body>
</html>