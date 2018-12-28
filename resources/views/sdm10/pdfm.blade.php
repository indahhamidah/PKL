<!DOCTYPE html>
<head>  
  <meta charset="utf-8">
  <style> 
    html {
      margin-top: 2.54cm;
      margin-bottom: 2.54cm;
      margin-left: 2.54cm;
      margin-right: 2.54cm;
    }
  </style>
 
<p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)</strong></p>

</head>

<body>

 	<!-- 4.1 -->
	
                   <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000;background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th style="border: 1px solid #000;background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Tenaga Ahli/Pakar</th>
                     <th style="border: 1px solid #000;background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Nama dan Judul Kegiatan</th>
                     <th style="border: 1px solid #000; background-color:#daeef3;padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Waktu Pelaksanaan</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                   </tr>
                   <?php $no = 0;?>
                   @foreach ($kegiatan_tenaga_ahlis as $kegiatan_tenaga_ahli) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $kegiatan_tenaga_ahli->nama_tenaga_ahli }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $kegiatan_tenaga_ahli->nama_kegiatan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $kegiatan_tenaga_ahli->waktu_pelaksanaan }}</td>
                   </tr>
                    @endforeach
                   </table>

</body>
</html>