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
	<title>Ruang Kerja Dosen Tetap Program Studi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
	<h4 style="text-align: justify;">Tuliskan data ruang kerja dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h4>
	<table cellpadding="5", cellspacing="0">
		<thead>
			<tr>
	       	<th width="330px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Ruang Kerja Dosen</th>
	        <th width="120px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Ruang</th>
	        <th width="135px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Luas (m<sup>2</sup>)</th>
	      <tr>
					<th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
					<th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
					<th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
				</tr>
			</tr>
        </thead>
        <tbody>
        	@foreach($rk_dosen_tetap as $rk_dosen)
            <tr>
            	<td style="border:1px solid #000; border-width: thin; text-align: left;">{{$rk_dosen->ruang_kerja_dosen}}</td>
                <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($rk_dosen->jumlah_ruang,2)}}</td>
                <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($rk_dosen->jumlah_luas,2)}}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
        	<tr>
	        	<th style="border:1px solid #000; border-width: thin; text-align: center;">Total</th>
	            <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($jmlh_ruang,2)}}</th>
	            <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($jmlh_luas,2)}}</th>
        	</tr>
        </tfoot>
	</table>
</body>
</html>