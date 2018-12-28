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


<p style=" text-align: justify;"><font face="Arial"><strong>Banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada FMIPA IPB dalam tiga tahun terakhir.</strong></span></font></p>



</head>

<body>

    <!-- 4.1 -->
    <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Hal</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-1<br>G1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-2<br>G2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-3<br>G3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-4<br>G4</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-5<br>G5</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-6<br>G6</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-7<br>G7</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-<br>8<br>G8</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-<br>9<br>G9</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Total di<br>Fakultas</th>
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

                  @foreach ($sdmf3s as $sdmf3)
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen pensiun/berhenti</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->pustakawan_s3_sdmf3+$sdmf3->pustakawan_s2_sdmf3+$sdmf3->pustakawan_s1_sdmf3+$sdmf3->pustakawan_d4_sdmf3+$sdmf3->pustakawan_d3_sdmf3+$sdmf3->pustakawan_d2_sdmf3+$sdmf3->pustakawan_d1_sdmf3+$sdmf3->pustakawan_sma_sdmf3+$sdmf3->pustakawan_unit_sdmf3 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya perekrutan dosen baru</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->lab_s3_sdmf3+$sdmf3->lab_s2_sdmf3+$sdmf3->lab_s1_sdmf3+$sdmf3->lab_d4_sdmf3+$sdmf3->lab_d3_sdmf3+$sdmf3->lab_d2_sdmf3+$sdmf3->lab_d1_sdmf3+$sdmf3->lab_sma_sdmf3+$sdmf3->lab_unit_sdmf3 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen tugas belajar S2/Sp-1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->admin_s3_sdmf3+$sdmf3->admin_s2_sdmf3+$sdmf3->admin_s1_sdmf3+$sdmf3->admin_d4_sdmf3+$sdmf3->admin_d3_sdmf3+$sdmf3->admin_d2_sdmf3+$sdmf3->admin_d1_sdmf3+$sdmf3->admin_sma_sdmf3+$sdmf3->admin_unit_sdmf3 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">4</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen tugas belajar S3/Sp-2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf3->ktu_s3_sdmf3+$sdmf3->ktu_s2_sdmf3+$sdmf3->ktu_s1_sdmf3+$sdmf3->ktu_d4_sdmf3+$sdmf3->ktu_d3_sdmf3+$sdmf3->ktu_d2_sdmf3+$sdmf3->ktu_d1_sdmf3+$sdmf3->ktu_sma_sdmf3+$sdmf3->ktu_unit_sdmf3 }}</td>
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
                        <td colspan="12" style="border:1px solid white;text-align: left"><font face="Times New Rowman" >PS9 G9 – Aktuaria</font></td>
                    </tr>
                    </tfoot>
                   </table>
                  
    

</body>
</html>