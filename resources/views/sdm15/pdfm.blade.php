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

<p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:</strong></p>

</head>
 
<body>

    <!-- 4.1 -->
    <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                     <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">No.</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Jenis Tenaga Kependidikan</th>
                     <th colspan="8" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Jumlah Tendik dengan Pendidikan Terakhir</th>
                     <th style="border: 1px solid #000; border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;" >Unit</th>
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >S3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >S2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >S1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >D4</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >D3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >D2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >D1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >SMA/SMK</th>
                     <th style="border: 1px solid #000; border-top: 0px; padding: 5px; background-color:#daeef3;text-align: center;" >Kerja</th>
                     </tr>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(8)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(9)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(10)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(11)</th>
                   </tr>
                   @foreach ($sdm15s as $sdm15)
                   <tr>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: left;">4.4.2. Pustakawan*</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->pustakawan_unit_sdm15 }}</td>
                     <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->ktu_unit_sdm15 }}</td>
                     </tr>
                     
                   </tr>

                   <tr>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: left;">4.4.3. Laboran</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->lab_unit_sdm15 }}</td>
                     <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->lab1_unit_sdm15 }}</td>
                     </tr>
                   </tr>

                   <tr>
                     <td rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: left;">4.4.4. Administrasi</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->admin_unit_sdm15 }}</td>
                     <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->admin1_unit_sdm15 }}</td>
                     </tr>
                     <tr> 
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->admin2_unit_sdm15 }}</td>
                     </tr>
                   </tr>
                   <tr>
                     <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;"><strong>Total</strong></td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s3_sdm15+$sdm15->lab_s3_sdm15+$sdm15->lab1_s3_sdm15+$sdm15->admin_s3_sdm15+$sdm15->ktu_s3_sdm15+$sdm15->admin1_s3_sdm15+$sdm15->admin2_s3_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s2_sdm15+$sdm15->lab_s2_sdm15+$sdm15->lab1_s2_sdm15+$sdm15->admin_s2_sdm15+$sdm15->ktu_s2_sdm15+$sdm15->admin1_s2_sdm15+$sdm15->admin2_s2_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s1_sdm15+$sdm15->lab_s1_sdm15+$sdm15->lab1_s1_sdm15+$sdm15->admin_s1_sdm15+$sdm15->ktu_s1_sdm15+$sdm15->admin1_s1_sdm15+$sdm15->admin2_s1_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d4_sdm15+$sdm15->lab_d4_sdm15+$sdm15->lab1_d4_sdm15+$sdm15->admin_d4_sdm15+$sdm15->ktu_d4_sdm15+$sdm15->admin1_d4_sdm15+$sdm15->admin2_d4_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d3_sdm15+$sdm15->lab_d3_sdm15+$sdm15->lab1_d3_sdm15+$sdm15->admin_d3_sdm15+$sdm15->ktu_d3_sdm15+$sdm15->admin1_d3_sdm15+$sdm15->admin2_d3_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d2_sdm15+$sdm15->lab_d2_sdm15+$sdm15->lab1_d2_sdm15+$sdm15->admin_d2_sdm15+$sdm15->ktu_d2_sdm15+$sdm15->admin1_d2_sdm15+$sdm15->admin2_d2_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d1_sdm15+$sdm15->lab_d1_sdm15+$sdm15->lab1_d1_sdm15+$sdm15->admin_d1_sdm15+$sdm15->ktu_d1_sdm15+$sdm15->admin1_d1_sdm15+$sdm15->admin2_d1_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_sma_sdm15+$sdm15->lab_sma_sdm15+$sdm15->lab1_sma_sdm15+$sdm15->admin_sma_sdm15+$sdm15->ktu_sma_sdm15+$sdm15->admin1_sma_sdm15+$sdm15->admin2_sma_sdm15 }}</td>
               <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tr>
                   @endforeach
                    
                   </table>
                   <p style="text-align: justify;font-size: 10;font-family : arial, helvetica, sans-serif;">* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan<br>** Administrasi juga meliputi KTU, Keuangan, dan Kepegawaian</p>
                  
    

</body>
</html>