<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prasarana Penunjang</title>
</head>
<body>
<h4 style="font-family: Arial">5.3.3 Tuliskan data prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik) dengan mengikuti format tabel berikut:</h4>
	<table cellpadding="5">
    <thead>
      <tr>
        <td rowspan="2"	style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">No</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jenis Prasarana Penunjang</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jumlah Unit</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Total Luas (m<sup>2</sup>)</td>
        <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Kepemilikan</td>
        <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Kondisi</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Unit Pengelola</td>
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
      <?php $nomor=0; ?>
      @foreach($penunjang_ps as $pras_penunjang)
      <?php $nomor++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">{{$nomor}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$pras_penunjang->jenis_penunjang_ps}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($pras_penunjang->jumlah_unit,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($pras_penunjang->total_luas,2)}}</td>
        @foreach($milik as $miliki)
        @if($pras_penunjang->id_kepemilikan_penunjang == $miliki->id_kepemilikan)
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">&#x2714</td>
        @else
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial"></td>
        @endif
        @endforeach
        @foreach($kondisi as $konds)
        @if($pras_penunjang->id_kondisi_penunjang == $konds->id_kondisi)
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">&#x2714</td>
        @else
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial"></td>
        @endif
        @endforeach
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">{{$pras_penunjang->unit_pengelola}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <p style="font-family: Arial">Keterangan:
SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama
</p>
</body>
</html>