<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aksesibilitas Data</title>
</head>
<body>
	<p style="font-family: Arial"> Tabel 5.5.2 Beri Tanda V pada kolom yang sesuai (hanya satu kolom) dengan aksesibilitas tiap jenis data pada tabel berikut:</p>
	<table>
		<thead>
      <tr>
        <td rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">No</td>
        <td rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Jenis Data</td>
        <td colspan="4" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Sistem Pengelolaan Data</td>
      </tr>
      <tr>
      	<td></td>
      	<td></td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Secara Manual</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Dengan Komputer<br>Tanpa Jaringan</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Dengan Komputer<br>Jaringan Local (LAN)</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family:Arial">Dengan Komputer<br>Jaringan Luas (WAN)</td>
      </tr>
      <tr></tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">(1)</td>
      	<td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">(2)</td>
      	<td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">(3)</td>
      	<td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">(4)</td>
      	<td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">(5)</td>
      	<td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">(6)</td>
      </tr>
    </thead>
    <tbody>
    	<!-- <tr> -->
        <?php $no=0; ?>
        @foreach($akses_data as $akses_dataa)
        <?php $no++; ?>
        <tr>
          <td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">{{$no}}</td>
          <td style="border:1px solid #000; border-width: thin;text-align: left; font-family:Arial">{{$akses_dataa->jenis_data_akses}}</td>
          @foreach($sistem_data as $sistem_data_)
            @if($akses_dataa->id_sistem_kelola == $sistem_data_->id_sistem_kelola_datax)
          <td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial"> &#10003 </td>
            @else
          <td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial"></td>
            @endif
          @endforeach
        </tr>
        @endforeach
      <!-- </tr> -->
    </tbody>
    <tfoot>
     	<tr>
        <td colspan="2" style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">Jumlah</td>
        <td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">{{$nilai1}}</td>
        <td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">{{$nilai2}}</td>
        <td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">{{$nilai3}}</td>
        <td style="border:1px solid #000; border-width: thin;text-align: center; font-family:Arial">{{$nilai4}}</td>    
      </tr>
    </tfoot>
	</table>
</body>
</html>