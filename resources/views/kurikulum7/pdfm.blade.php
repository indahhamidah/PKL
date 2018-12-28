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

<p style="text-align: justify;font-family : arial, helvetica, sans-serif; font-size: 9;">Tuliskan substansi praktikum/praktek yang mandiri ataupun yang merupakan bagian dari mata kuliah tertentu, dengan mengikuti format di bawah ini: </p>

</head>

<body>

  <!-- 4.1 -->
  
                    <table cellspacing="0">
                    
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">No</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">Kode MK</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">Nama Praktikum/<br>Praktek</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">Bobot SKS Praktikum</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;" >Isi Praktikum/Praktek</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;" >Jumlah</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;" >Tempat/Lokasi</th>
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;" >Judul/Modul</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;" >Jam Pelaksanaan</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;border-top: 0px;font-family : arial, helvetica, sans-serif; font-size: 9;" >Pertemuan</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;border-top: 0px;font-family : arial, helvetica, sans-serif; font-size: 9;" >Praktikum/Praktek</th>
                     </tr>
                   </tr>
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(8)</th>
                   </tr>
                   <?php $no = 0;?>
                  @foreach ($kurikulum7s as $kurikulum7)
                 <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->kode_mk }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->nama_praktikum_kurikulum7 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->jumlah_sks }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->judul_praktikum }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->jam_pelaksanaan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->jumlah_pertemuan_praktikum }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->tempat_praktikum }}</td>
                   </tr>
                    @endforeach
                   </table>

</body>
</html>