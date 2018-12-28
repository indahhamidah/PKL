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
 
 <p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS</strong></p>

</head> 

<body>

 	<!-- 4.1 -->
	
                   <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                      <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jenjang Pendidikan Lanjut</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Bidang Studi</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Perguruan Tinggi</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Negara</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Tahun Mulai Studi</th>
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
                   @foreach ($sdm11s as $sdm11) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->nama_sdm11 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->jenjang_pendidikan_lanjut }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->bidang_studi }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->perguruan_tinggi }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->negara }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->tahun_mulai_studi }}</td>
                   </tr>
                    @endforeach
                   </table>

</body>
</html>