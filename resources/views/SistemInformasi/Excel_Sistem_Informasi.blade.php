<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Redaksi Sistem Informasi</title>
</head>
<body>
	<p style="font-family: Arial;"><strong>Tabel 5.5.5</strong> Daftar Sistem Informasi yang digunakan di Departemen {{$dept[0]->nama_departemen}}</p>

  <table cellpadding="2", cellspacing="0" >
    <thead>
    <tr> 
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Nama Sistem</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Bentuk</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Pengembang</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Fitur-fitur Sistem</th>
         </tr>
         <tr>
           <th style="border:1px solid #000;text-align: center; vertical-align: top">(1)</th>
           <th style="border:1px solid #000;text-align: center; vertical-align: top">(2)</th>
           <th style="border:1px solid #000;text-align: center; vertical-align: top">(3)</th>
           <th style="border:1px solid #000;text-align: center; vertical-align: top">(4)</th>
           <th style="border:1px solid #000;text-align: center; vertical-align: top">(5)</th>
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