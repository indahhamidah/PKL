<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>4.5.2 Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS
</title>
</head>

<body>
  <strong>
    4.5.2 Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS 
  </strong>
  
  
  
                   <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                      <th style="border: 1px solid #000; padding: 5px; text-align: center">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center">Nama Dosen</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >Jenjang Pendidikan Lanjut</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >Bidang Studi</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >Perguruan Tinggi</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >Negara</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center" >Tahun Mulai Studi</th>
                   </tr>
                   <tr>
                      <th style="border: 1px solid #000; padding: 5px; text-align: center;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(7)</th>
                   </tr>

                  <?php $no = 0;?>
                   @foreach ($sdm11s as $sdm11) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm11->nama_sdm11 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm11->jenjang_sdm11 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm11->bidang_sdm11 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm11->pt_sdm11 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm11->negara_sdm11 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm11->tahun_mulai_sdm11 }}</td>
                   </tr>
                    @endforeach
                   </table>
 
  
</body>
</html>