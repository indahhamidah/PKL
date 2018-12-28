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
  </style>
	<title>Dana dari untuk Pengabdian Program Studi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
	<h4 style="text-align: justify;">5.2.3 Tuliskan dana yang diperoleh dari/untuk kegiatan pelayanan/pengabdian kepada masyarakat pada tiga tahun terakhir dengan mengikuti format tabel berikut:</h4>
	<table cellpadding="8", cellspacing="0">
		<thead>
			<tr>
        <th width="20px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tahun</th>
        <th width="130px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Judul Kegiatan Pelayanan/Pengabdian<br>kepada Masyarakat</th>
        <th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber dan Jenis Dana</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana (Juta Rupiah)</th>
      </tr>
      <tr>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
      </tr>
    </thead>
    <tbody>
    <?php $nomr=0; ?>
    @foreach($pengabdians as $dana_kegiatan)
    <?php $nomr++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$nomr}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{Carbon\Carbon::parse($dana_kegiatan->tahun_pengabdian)->format('Y')}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$dana_kegiatan->judul_pengabdian}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$dana_kegiatan->sumber_danaa}} dan {{$dana_kegiatan->jenis_dana_peng}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$dana_kegiatan->jumlah_dana_peng}}</td>
      </tr>
    @endforeach
		</tbody>
		<tfoot>
			<tr>
				<th colspan="4" style="border:1px solid #000; border-width: thin; text-align: center;">Jumlah</th>
				<th style="border:1px solid #000; border-width: thin; text-align: right;">{{$totaldana}}</th>
			</tr>
		</tfoot>
	</table>

</body>
</html>