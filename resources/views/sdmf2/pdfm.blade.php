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
 


<p style=" text-align: justify;"><strong>Statistik Dosen Tetap menurut Jabatan Fungsional dan Program Studi</strong></p>

</head>

<body>

    <!-- 4.1 -->
    <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">No.</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Hal</th>
                     <th colspan="9" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Jumlah Dosen Tetap yang Bertugas pada Program Studi:</th>
                     <th style="border: 1px solid #000; border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;" >Total di</th>
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-1<br>G1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-2<br>G2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-3<br>G3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-4<br>G4</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-5<br>G5</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-6<br>G6</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-7<br>G7</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-<br>8<br>G8</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-<br>9<br>G9</th>
                     <th style="border: 1px solid #000; border-top: 0px; padding: 5px; background-color:#daeef3; text-align: center;" >Fakultas</th>
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
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(12)</th>
                   </tr>

                  @foreach ($sdmf2s as $sdmf2)
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">A</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: left;">Jabatan Fungsional :</th>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">0</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Dosen PNS/CPNS*</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_s3_sdmf2+$sdmf2->pustakawan_s2_sdmf2+$sdmf2->pustakawan_s1_sdmf2+$sdmf2->pustakawan_d4_sdmf2+$sdmf2->pustakawan_d3_sdmf2+$sdmf2->pustakawan_d2_sdmf2+$sdmf2->pustakawan_d1_sdmf2+$sdmf2->pustakawan_sma_sdmf2+$sdmf2->pustakawan_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Asisten Ahli</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->lab_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->lab_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->lab_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->lab_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->lab_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->lab_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->lab_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->lab_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->lab_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->lab_s3_sdmf2+$sdmf2->lab_s2_sdmf2+$sdmf2->lab_s1_sdmf2+$sdmf2->lab_d4_sdmf2+$sdmf2->lab_d3_sdmf2+$sdmf2->lab_d2_sdmf2+$sdmf2->lab_d1_sdmf2+$sdmf2->lab_sma_sdmf2+$sdmf2->lab_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Lektor</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->admin_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->admin_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->admin_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->admin_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->admin_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->admin_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->admin_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->admin_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->admin_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->admin_s3_sdmf2+$sdmf2->admin_s2_sdmf2+$sdmf2->admin_s1_sdmf2+$sdmf2->admin_d4_sdmf2+$sdmf2->admin_d3_sdmf2+$sdmf2->admin_d2_sdmf2+$sdmf2->admin_d1_sdmf2+$sdmf2->admin_sma_sdmf2+$sdmf2->admin_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Lektor Kepala</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->ktu_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->ktu_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->ktu_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->ktu_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->ktu_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->ktu_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->ktu_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->ktu_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->ktu_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->ktu_s3_sdmf2+$sdmf2->ktu_s2_sdmf2+$sdmf2->ktu_s1_sdmf2+$sdmf2->ktu_d4_sdmf2+$sdmf2->ktu_d3_sdmf2+$sdmf2->ktu_d2_sdmf2+$sdmf2->ktu_d1_sdmf2+$sdmf2->ktu_sma_sdmf2+$sdmf2->ktu_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">4</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Guru Besar/Profesor</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->profesor_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->profesor_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->profesor_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->profesor_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->profesor_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->profesor_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->profesor_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->profesor_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->profesor_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->profesor_s3_sdmf2+$sdmf2->profesor_s2_sdmf2+$sdmf2->profesor_s1_sdmf2+$sdmf2->profesor_d4_sdmf2+$sdmf2->profesor_d3_sdmf2+$sdmf2->profesor_d2_sdmf2+$sdmf2->profesor_d1_sdmf2+$sdmf2->profesor_sma_sdmf2+$sdmf2->profesor_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">Total</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_s3_sdmf2+$sdmf2->lab_s3_sdmf2+$sdmf2->admin_s3_sdmf2+$sdmf2->ktu_s3_sdmf2+$sdmf2->profesor_s3_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_s2_sdmf2+$sdmf2->lab_s2_sdmf2+$sdmf2->admin_s2_sdmf2+$sdmf2->ktu_s2_sdmf2+$sdmf2->profesor_s2_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_s1_sdmf2+$sdmf2->lab_s1_sdmf2+$sdmf2->admin_s1_sdmf2+$sdmf2->ktu_s1_sdmf2+$sdmf2->profesor_s1_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_d4_sdmf2+$sdmf2->lab_d4_sdmf2+$sdmf2->admin_d4_sdmf2+$sdmf2->ktu_d4_sdmf2+$sdmf2->profesor_d4_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_d3_sdmf2+$sdmf2->lab_d3_sdmf2+$sdmf2->admin_d3_sdmf2+$sdmf2->ktu_d3_sdmf2+$sdmf2->profesor_d3_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_d2_sdmf2+$sdmf2->lab_d2_sdmf2+$sdmf2->admin_d2_sdmf2+$sdmf2->ktu_d2_sdmf2+$sdmf2->profesor_d2_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_d1_sdmf2+$sdmf2->lab_d1_sdmf2+$sdmf2->admin_d1_sdmf2+$sdmf2->ktu_d1_sdmf2+$sdmf2->profesor_d1_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_sma_sdmf2+$sdmf2->lab_sma_sdmf2+$sdmf2->admin_sma_sdmf2+$sdmf2->ktu_sma_sdmf2+$sdmf2->profesor_sma_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_unit_sdmf2+$sdmf2->lab_unit_sdmf2+$sdmf2->admin_unit_sdmf2+$sdmf2->ktu_unit_sdmf2+$sdmf2->profesor_unit_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pustakawan_s3_sdmf2+$sdmf2->lab_s3_sdmf2+$sdmf2->admin_s3_sdmf2+$sdmf2->ktu_s3_sdmf2+$sdmf2->profesor_s3_sdmf2+$sdmf2->pustakawan_s2_sdmf2+$sdmf2->lab_s2_sdmf2+$sdmf2->admin_s2_sdmf2+$sdmf2->ktu_s2_sdmf2+$sdmf2->profesor_s2_sdmf2+$sdmf2->pustakawan_s1_sdmf2+$sdmf2->lab_s1_sdmf2+$sdmf2->admin_s1_sdmf2+$sdmf2->ktu_s1_sdmf2+$sdmf2->profesor_s1_sdmf2+$sdmf2->pustakawan_d4_sdmf2+$sdmf2->lab_d4_sdmf2+$sdmf2->admin_d4_sdmf2+$sdmf2->ktu_d4_sdmf2+$sdmf2->profesor_d4_sdmf2+$sdmf2->pustakawan_d3_sdmf2+$sdmf2->lab_d3_sdmf2+$sdmf2->admin_d3_sdmf2+$sdmf2->ktu_d3_sdmf2+$sdmf2->profesor_d3_sdmf2+$sdmf2->pustakawan_d2_sdmf2+$sdmf2->lab_d2_sdmf2+$sdmf2->admin_d2_sdmf2+$sdmf2->ktu_d2_sdmf2+$sdmf2->profesor_d2_sdmf2+$sdmf2->pustakawan_d1_sdmf2+$sdmf2->lab_d1_sdmf2+$sdmf2->admin_d1_sdmf2+$sdmf2->ktu_d1_sdmf2+$sdmf2->profesor_d1_sdmf2+$sdmf2->pustakawan_sma_sdmf2+$sdmf2->lab_sma_sdmf2+$sdmf2->admin_sma_sdmf2+$sdmf2->ktu_sma_sdmf2+$sdmf2->profesor_sma_sdmf2+$sdmf2->pustakawan_unit_sdmf2+$sdmf2->lab_unit_sdmf2+$sdmf2->admin_unit_sdmf2+$sdmf2->ktu_unit_sdmf2+$sdmf2->profesor_unit_sdmf2 }}</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">B</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: left;">Pendidikan Tertinggi :</th>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">S1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts1_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts1_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts1_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts1_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts1_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts1_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts1_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts1_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts1_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts1_s3_sdmf2+$sdmf2->pts1_s2_sdmf2+$sdmf2->pts1_s1_sdmf2+$sdmf2->pts1_d4_sdmf2+$sdmf2->pts1_d3_sdmf2+$sdmf2->pts1_d2_sdmf2+$sdmf2->pts1_d1_sdmf2+$sdmf2->pts1_sma_sdmf2+$sdmf2->pts1_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">S2/Profesi/Sp-1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts2_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts2_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts2_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts2_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts2_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts2_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts2_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts2_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts2_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts2_s3_sdmf2+$sdmf2->pts2_s2_sdmf2+$sdmf2->pts2_s1_sdmf2+$sdmf2->pts2_d4_sdmf2+$sdmf2->pts2_d3_sdmf2+$sdmf2->pts2_d2_sdmf2+$sdmf2->pts2_d1_sdmf2+$sdmf2->pts2_sma_sdmf2+$sdmf2->pts2_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">S3/Sp-2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_s3_sdmf2+$sdmf2->pts3_s2_sdmf2+$sdmf2->pts3_s1_sdmf2+$sdmf2->pts3_d4_sdmf2+$sdmf2->pts3_d3_sdmf2+$sdmf2->pts3_d2_sdmf2+$sdmf2->pts3_d1_sdmf2+$sdmf2->pts3_sma_sdmf2+$sdmf2->pts3_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">Total</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_s3_sdmf2+$sdmf2->pts2_s3_sdmf2+$sdmf2->pts1_s3_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_s2_sdmf2+$sdmf2->pts2_s2_sdmf2+$sdmf2->pts1_s2_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_s1_sdmf2+$sdmf2->pts2_s1_sdmf2+$sdmf2->pts1_s1_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_d4_sdmf2+$sdmf2->pts2_d4_sdmf2+$sdmf2->pts1_d4_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_d3_sdmf2+$sdmf2->pts2_d3_sdmf2+$sdmf2->pts1_d3_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_d2_sdmf2+$sdmf2->pts2_d2_sdmf2+$sdmf2->pts1_d2_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_d1_sdmf2+$sdmf2->pts2_d1_sdmf2+$sdmf2->pts1_d1_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_sma_sdmf2+$sdmf2->pts2_sma_sdmf2+$sdmf2->pts1_sma_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_unit_sdmf2+$sdmf2->pts2_unit_sdmf2+$sdmf2->pts1_unit_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf2->pts3_s3_sdmf2+$sdmf2->pts2_s3_sdmf2+$sdmf2->pts1_s3_sdmf2+$sdmf2->pts3_s2_sdmf2+$sdmf2->pts2_s2_sdmf2+$sdmf2->pts1_s2_sdmf2+$sdmf2->pts3_s1_sdmf2+$sdmf2->pts2_s1_sdmf2+$sdmf2->pts1_s1_sdmf2+$sdmf2->pts3_d4_sdmf2+$sdmf2->pts2_d4_sdmf2+$sdmf2->pts1_d4_sdmf2+$sdmf2->pts3_d3_sdmf2+$sdmf2->pts2_d3_sdmf2+$sdmf2->pts1_d3_sdmf2+$sdmf2->pts3_d2_sdmf2+$sdmf2->pts2_d2_sdmf2+$sdmf2->pts1_d2_sdmf2+$sdmf2->pts3_d1_sdmf2+$sdmf2->pts2_d1_sdmf2+$sdmf2->pts1_d1_sdmf2+$sdmf2->pts3_sma_sdmf2+$sdmf2->pts2_sma_sdmf2+$sdmf2->pts1_sma_sdmf2+$sdmf2->pts3_unit_sdmf2+$sdmf2->pts2_unit_sdmf2+$sdmf2->pts1_unit_sdmf2 }}</th>
                   </tr>
                   
                    @endforeach
                     <tfoot>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left"><font face="Times New Rowman" ><strong>Keterangan :</strong></font></td>
                    </tr>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left"><font face="Times New Rowman" >PS1 G1 – Statistika, PS2 G2 – Meteorologi Terapan, PS3 G3 – Biologi, PS4 G4 – Kimia,</font></td>
                    </tr>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left"><font face="Times New Rowman" >PS5 G5 – Matematika, PS6 G6 - Ilmu Komputer, PS7 G7 – Fisika, PS8 G8 – Biokimia,</font></td>
                    </tr>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left"><font face="Times New Rowman" >PS9 G9 – Aktuaria, *dosen PNS/CPNS yang belum punya jabatan fungsional,</font></td>
                    </tr>
                    </tfoot>
                   </table>
                  
    

</body>
</html>