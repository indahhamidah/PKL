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
	<title>Redaksi Sistem Informasi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
	<h4 style="text-align: justify;"><strong>Tabel 5.5.5</strong> Daftar Sistem Informasi yang digunakan di Departemen {{$dept[0]->nama_departemen}}</h4>

  <table cellpadding="5", cellspacing="0" >
    <thead>
      <tr> 
          <th width="30px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
          <th width="150px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nama Sistem</th>
          <th width="120px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Bentuk</th>
          <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Pengembang</th>
          <th width="170px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Fitur-fitur Sistem</th>
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
    <?php $nomor =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor++ ;?>
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top">{{ $nomor }}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top">{{ $sistem_informasi->nama_sistem }}</td>
        <td style="border:1px solid #000; vertical-align: top"> {{$sistem_informasi->bentuk_si}}, URL:{{$sistem_informasi->url}}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"> {{$sistem_informasi->pengembang}}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"> <?php echo nl2br ($sistem_informasi['fitur_si']); ?></td>
        <td></td>
        
        </tr>
        @endforeach
      </tbody>
</table>
</body>
</html>