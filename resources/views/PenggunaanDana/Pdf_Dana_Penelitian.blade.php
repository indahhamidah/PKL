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
	<title>Dana untuk Penelitian Program Studi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
	<h4 style="text-align: justify;">5.2.2 Tuliskan dana untuk kegiatan penelitian pada tiga tahun terakhir yang melibatkan dosen yang bidang keahliannya sesuai dengan program studi, dengan mengikuti format tabel berikut:</h4>
	<table cellpadding="8", cellspacing="0">
		<thead>
			<tr>
        <th width="20px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="40px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tahun</th>
        <th width="140px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Judul Penelitian</th>
        <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nama Dosen yang Terlibat</th>
        <th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber dan Jenis Dana</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana (Juta Rupiah)</th>
      </tr>
      <tr>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;"></th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
      </tr>
    </thead>
    <tbody>
      <?php $nom=0; ?>
      @foreach($penelitians as $dana_teliti)
      <?php $nom++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$nom}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{Carbon\Carbon::parse($dana_teliti->tahun_penelitian)->format('Y')}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$dana_teliti->judul_penelitian}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$dana_teliti->nama_peneliti}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$dana_teliti->sumber_danaa}} dan {{$dana_teliti->jenis_dana}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$dana_teliti->jumlah_dana}}</td>
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<th colspan="5" style="border:1px solid #000; border-width: thin; text-align: center;">Jumlah</th>
				<th style="border:1px solid #000; border-width: thin; text-align: right;">{{$totaldana}}</th>
			</tr>
		</tfoot>
	</table>
</body>
</html>