<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>4.5.1 Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)
</title>
</head>

<body>
  <strong>
    4.5.1 Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap) 
  </strong>
  
  
  
                   <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px">No.</th>
                     <th style="border: 1px solid #000; padding: 5px">Nama Tenaga Ahli/Pakar</th>
                     <th style="border: 1px solid #000; padding: 5px" >Nama dan Judul Kegiatan</th>
                     <th style="border: 1px solid #000; padding: 5px" >Waktu Pelaksanaan</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(4)</th>
                   </tr>
                   <?php $no = 0;?>
                   @foreach ($sdm10s as $sdm10) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm10->nama_sdm10 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm10->judul_sdm10 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm10->waktu_pelaksanaan_sdm10 }}</td>
                   </tr>
                    @endforeach
                   </table>
 
  
</body>
</html>