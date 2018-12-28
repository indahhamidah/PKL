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
	<title>Redaksi Perangkat Keras {{$dept[0]->nama_departemen}}</title>
</head>
<body>
	<h4>Tabel 5.5.1 Spesifikasi dan Jumlah Komputer</h4>
	<table cellpadding="8", cellspacing="0" >
      <thead>
        <tr>
          <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nama</th>
          <th width="300px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Spesifikasi</th>
          <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Jumlah</th>
          <th width="70px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Keterangan</th>
        </tr>
      </thead>
      <tbody>
  	@foreach ($perangkat_keras as $perangkat_kerass)
       <tr>
        <td style="border:1px solid #000;text-align: center;">{{ $perangkat_kerass->nama_hardware }}</td>
        <td style="border:1px solid #000;"> {{$perangkat_kerass->spesifikasi}}</td>
        <td style="border:1px solid #000;text-align: right;"> {{$perangkat_kerass->jumlah_item}}</td>
        <td style="border:1px solid #000;text-align: center;"> {{$perangkat_kerass->keterangan_hw}}</td>
        </tr>
        @endforeach
      	</tbody>
</table>
</body>
</html>