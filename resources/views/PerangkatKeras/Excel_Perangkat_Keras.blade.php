<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Perangkat Keras</title>
</head>
<body>
	<h4 style="font-family: Arial">Daftar Perangkat Keras</h4>
	<table>
		<thead>
			<tr>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">No</th>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Nama</th>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Spesifikasi</th>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jumlah</th>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Keterangan</th>
        <tr>
          <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(1)</th>
          <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(2)</th>
          <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(3)</th>
          <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(5)</th>
          <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(6)</th>
        </tr>
      </tr>
    </thead>
    <tbody>
    <?php $number=0 ?>
    @foreach ($perangkat_keras as $perangkat_kerass)
    <?php $number++ ?>
      <tr>
	      <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">{{$number}}</td>
	      <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$perangkat_kerass->nama_hardware}}</td>
	      <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$perangkat_kerass->spesifikasi}}</td>
	      <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">{{$perangkat_kerass->jumlah_item}}</td>
	      <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$perangkat_kerass->keterangan_hw}}</td>
	      <td></td>
      </tr>
    @endforeach
		</tbody>
	</table>
</body>
</html>