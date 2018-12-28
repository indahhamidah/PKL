<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Dana untuk Penelitian</title>
</head>
<body>
	<p style="font-family: Arial">5.2.2 Tuliskan dana untuk kegiatan penelitian pada tiga tahun terakhir yang melibatkan dosen yang bidang keahliannya sesuai dengan program studi, dengan mengikuti format tabel berikut:</p>
	<table>
		<thead>
			<tr>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">No</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Tahun</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Judul Penelitian</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Sumber dan Jenis Dana</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jumlah Dana (Juta Rupiah)</td>
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(1)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(2)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(3)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(4)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(5)</td>
      </tr>
    </thead>
    <tbody>
      <?php $nom=0; ?>
      @foreach($penelitians as $dana_teliti)
      <?php $nom++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">{{$nom}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">{{Carbon\Carbon::parse($dana_teliti->tahun_penelitian)->format('Y')}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$dana_teliti->judul_penelitian}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$dana_teliti->sumber_danaa}} dan {{$dana_teliti->jenis_dana}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{$dana_teliti->jumlah_dana}}</td>
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td colspan="4" style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">Jumlah</td>
				<td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{$totaldana}}</td>
			</tr>
		</tfoot>
	</table>
</body>
</html>