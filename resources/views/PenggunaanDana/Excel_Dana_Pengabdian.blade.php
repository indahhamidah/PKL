<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Dana dari untuk Pengabdian</title>
</head>
<body>
	<p style="font-family: Arial;">5.2.3 Tuliskan dana yang diperoleh dari/untuk kegiatan pelayanan/pengabdian kepada masyarakat pada tiga tahun terakhir dengan mengikuti format tabel berikut:</p>
	<table>
		<thead>
			<tr>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">No</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Tahun</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Judul Kegiatan Pelayanan/<br>Pengabdian kepada Masyarakat</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Sumber dan Jenis Dana</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Jumlah Dana (Juta Rupiah)</td>
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(1)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(2)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(3)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(4)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">(5)</td>
      </tr>
    </thead>
    <tbody>
    <?php $nomr=0; ?>
    @foreach($pengabdians as $dana_kegiatan)
    <?php $nomr++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">{{$nomr}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family:Arial">{{Carbon\Carbon::parse($dana_kegiatan->tahun_pengabdian)->format('Y')}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family:Arial">{{$dana_kegiatan->judul_pengabdian}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family:Arial">{{$dana_kegiatan->sumber_danaa}} dan {{$dana_kegiatan->jenis_dana_peng}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family:Arial">{{$dana_kegiatan->jumlah_dana_peng}}</td>
      </tr>
    @endforeach
		</tbody>
		<tfoot>
			<tr>
				<td colspan="4" style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">Jumlah</td>
				<td style="border:1px solid #000; border-width: thin; text-align: right; font-family:Arial">{{$totaldana}}</td>
			</tr>
		</tfoot>
	</table>

</body>
</html>