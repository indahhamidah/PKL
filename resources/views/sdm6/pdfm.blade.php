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

<p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:</strong></p>
</head>

<body>

 	<!-- 4.1 -->
	
                   <table cellspacing="0">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen Tetap</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Bidang Keahlian</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Kode Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Nama Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Kelas</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Pertemuan Yang Direncanakan</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Pertemuan Yang Dilaksanakan</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(8)</th>
                   </tr>

                  <?php $no = 0;?>
                   @foreach ($sdm6s as $sdm6) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->nama_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->keahlian_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->kode_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->nama_mk_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->jlh_kelas }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->jlh_rencana_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->jlh_laksana_sdm6 }}</td>
                  </td>
                   </tr>
                    @endforeach
                    <tr>
                     <td colspan="6" style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family : arial, helvetica, sans-serif;">Total</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><?php echo $totalrencana ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><?php echo $totallaksana ?></td>
                   </tr>
                   </table>

</body>
</html>