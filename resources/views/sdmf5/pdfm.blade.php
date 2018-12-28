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

<p style=" text-align: justify;"><font face="Arial"><strong>Jenis Tenaga Kependidikan menurut pendidikan terakhir</strong></font></p>

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
                     <th style="border: 1px solid #000; border-top: 0px; padding: 5px; background-color:#daeef3;" >Kerja</th>
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

                  @foreach ($sdmf5s as $sdmf5)
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Pustakawan*</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_s3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_s2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_s1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_d4_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_d3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_d2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_d1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_sma_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_unit_sdmf5 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Laboran/ Teknisi/ Analis/ Operator/ Programer</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->lab_s3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->lab_s2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->lab_s1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->lab_d4_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->lab_d3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->lab_d2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->lab_d1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->lab_sma_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->lab_unit_sdmf5 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Administrasi</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->admin_s3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->admin_s2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->admin_s1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->admin_d4_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->admin_d3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->admin_d2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->admin_d1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->admin_sma_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->admin_unit_sdmf5 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">4</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">KTU</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->ktu_s3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->ktu_s2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->ktu_s1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->ktu_d4_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->ktu_d3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->ktu_d2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->ktu_d1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->ktu_sma_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->ktu_unit_sdmf5 }}</td>
                   </tr>

                   <tr>
                     <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;"><strong>Total</strong></td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_s3_sdmf5+$sdmf5->lab_s3_sdmf5+$sdmf5->admin_s3_sdmf5+$sdmf5->ktu_s3_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_s2_sdmf5+$sdmf5->lab_s2_sdmf5+$sdmf5->admin_s2_sdmf5+$sdmf5->ktu_s2_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_s1_sdmf5+$sdmf5->lab_s1_sdmf5+$sdmf5->admin_s1_sdmf5+$sdmf5->ktu_s1_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_d4_sdmf5+$sdmf5->lab_d4_sdmf5+$sdmf5->admin_d4_sdmf5+$sdmf5->ktu_d4_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_d3_sdmf5+$sdmf5->lab_d3_sdmf5+$sdmf5->admin_d3_sdmf5+$sdmf5->ktu_d3_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_d2_sdmf5+$sdmf5->lab_d2_sdmf5+$sdmf5->admin_d2_sdmf5+$sdmf5->ktu_d2_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_d1_sdmf5+$sdmf5->lab_d1_sdmf5+$sdmf5->admin_d1_sdmf5+$sdmf5->ktu_d1_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdmf5->pustakawan_sma_sdmf5+$sdmf5->lab_sma_sdmf5+$sdmf5->admin_sma_sdmf5+$sdmf5->ktu_sma_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tr>
                   
                    @endforeach
                     <tfoot>
                    <tr>
                        <td colspan="11" style="border:1px solid white;text-align: left"><font face="Times New Rowman" >* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan</font></td>
                    </tr>
                    </tfoot>
                   </table>
                  
    

</body>
</html>