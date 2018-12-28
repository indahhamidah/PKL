<!DOCTYPE html>
<html>
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
	<title>Prasarana Penunjang Program Studi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
<h4 style="text-align: justify;">5.3.3 Tuliskan data prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik) dengan mengikuti format tabel berikut:</h4>
	<table cellspacing="0" cellpadding="5">
    <thead>
      <tr>
        <th width="20px" rowspan="2"  style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="120px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Prasarana Penunjang</th>
        <th width="60px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Unit</th>
        <th width="70px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Total Luas (m<sup>2</sup>)</th>
        <th width="100px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Kepemilikan</th>
        <th width="100px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Kondisi</th>
        <th width="70px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Unit Pengelola</th>
        <tr>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">SD</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">SW</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Terawat</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tidak Terawat</th>
        </tr>
        <tr>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(6)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(7)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(8)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(9)</th>
      </tr>
      </tr>
    </thead>
    <tbody>
      <?php $nomor=0; ?>
      @foreach($penunjang_ps as $pras_penunjang)
      <?php $nomor++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$nomor}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$pras_penunjang->jenis_penunjang_ps}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$pras_penunjang->jumlah_unit}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$pras_penunjang->total_luas}}</td>
        @foreach($milik as $miliki)
        @if($pras_penunjang->id_kepemilikan_penunjang == $miliki->id_kepemilikan)
        <td style="border:1px solid #000; border-width: thin; text-align: center;">v</td>
        @else
        <td style="border:1px solid #000; border-width: thin; text-align: center;"></td>
        @endif
        @endforeach
        @foreach($kondisi as $konds)
        @if($pras_penunjang->id_kondisi_penunjang == $konds->id_kondisi)
        <td style="border:1px solid #000; border-width: thin; text-align: center;">v</td>
        @else
        <td style="border:1px solid #000; border-width: thin; text-align: center;"></td>
        @endif
        @endforeach
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$pras_penunjang->unit_pengelola}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <p>Keterangan:
SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama
</p>
</body>
</html>