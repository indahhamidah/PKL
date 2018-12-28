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

<p style="text-align: justify;font-family : arial, helvetica, sans-serif; font-size: 10;">Tuliskan mata kuliah pilihan yang dilaksanakan dalam tiga tahun terakhir, pada tabel berikut: </p>

</head>

<body>

  <!-- 4.1 -->
  
                    <table cellspacing="0"">
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;">Semester</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;">Kode MK</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Nama MK (Pilihan)</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Bobot sks</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Bobot Tugas*</th>
                     <th style="border: 1px solid #000; border-bottom: 0px; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Unit/ Jur/ Fak</th>
                     <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Ya</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Tidak</th>
                     <th style="border: 1px solid #000;border-top: 0px; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Pengelola</th>
                     </tr>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(7)</th>
                   </tr>

                  @foreach ($kurikulum6s as $kurikulum6)
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum6->semesterr }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum6->kode_mk_kurikulum6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum6->nama_mk_kurikulum6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum6->jumlah_sks }}</td>
                     @foreach($bobot_tugas as $bobot_tugasi)
                        @if($kurikulum6->id_bobottugas == $bobot_tugasi->id_bobot_tugas)
                            <td style="border:1px solid #000; border-width: thin; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">V</td>
                        @else
                            <td style="border:1px solid #000; border-width: thin;text-align: center;"></td>
                        @endif
                    @endforeach  
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum6->pengelola }}</td>
                   </tr>
                    @endforeach
                    
                   </table>

                    <p style="text-align: justify;font-family : arial, helvetica, sans-serif; font-size: 10;">* beri tanda V pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) > 20%.</p>

</body>
</html>