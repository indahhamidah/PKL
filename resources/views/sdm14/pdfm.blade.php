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

<p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.</strong></p>

</head>

<body> 

  <!-- 4.1 -->
  
                   <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Nama Organisasi Keilmuan atau Organisasi Profesi</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Kurun Waktu</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Tingkat (Lokal, Nasional, Internasional)</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(5)</th>
                   </tr>
                    <?php $no = 0;?>
                   @foreach ($sdm14s as $sdm14)
                   <?php $no++ ;?>
                   <tr>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm14->nama_sdm14 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm14->nama_organisasi }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm14->kurun_waktu }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm14->tingkat }}</td>
                   </tr>
                    @endforeach
                   </table>

</body>
</html>