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

<p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong> Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah /
 lokakarya / penataran / workshop / pagelaran/ pameran / peragaan yang tidak hanya melibatkan
 dosen PT sendiri</strong></p>

</head>

<body>

  <!-- 4.1 -->
  
                   <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen</th>
                     <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jenis Kegiatan*</th>
                     <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Tempat</th>
                     <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Waktu</th>
                     <th colspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Sebagai</th>
                     <tr>
                     <th style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Penyaji</th>
                     <th style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Peserta</th>
                   </tr>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(7)</th>
                   </tr>

                  <?php $no = 0;?>
                   @foreach ($sdm12s as $sdm12)
                   <?php $no++ ;?>
                   <tr>
                   <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm12->nama_sdm12 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm12->jenis_kegiatan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm12->tempat_kegiatan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm12->waktu_kegiatan }}</td>
                     @foreach($peran_kegiatan as $hakii)
                        @if($sdm12->id_status_peran_kegiatan == $hakii->id_peran_kegiatan)
                            <td style="border:1px solid #000; border-width: thin; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><p style="font-size:16px"><font face="Times New Rowman">V</td>
                        @else
                            <td style="border:1px solid #000; border-width: thin;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><p style="font-size:16px"><font face="Times New Rowman"></td>
                        @endif
                    @endforeach  
                   </tr>
                    @endforeach
                     
                   </table>
                          <p colspan="7" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll</p>

</body>
</html>