<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Ruang Kerja Dosen Tetap</title>
</head>
<body>
	<h4 style="font-family: Arial">Tuliskan data ruang kerja dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h4>
	<table>
		<thead>
			<tr>
	        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Ruang Kerja Dosen</th>
	        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jumlah Ruang</th>
	        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jumlah Luas (m<sup>2</sup>)</th>
	       <tr>
					<td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(1)</th>
					<td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(2)</th>
					<td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(3)</th>
				</tr>
			</tr>
        </thead>
        <tbody>
        	@foreach($rk_dosen_tetap as $rk_dosen)
            <tr>
            	<td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">{{$rk_dosen->ruang_kerja_dosen}}</td>
                <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{$rk_dosen->jumlah_ruang}}</td>
                <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{$rk_dosen->jumlah_luas}}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
        	<tr>
	        	<td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">Total</th>
	            <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{$jmlh_ruang}}</th>
	            <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{$jmlh_luas}}</th>
        	</tr>
        </tfoot>
	</table>
</body>
</html>