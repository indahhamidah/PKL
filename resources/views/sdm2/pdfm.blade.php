<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>4.2 Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan.
</title>
</head>

<body>
  <table>
  <td style="text-align: justify;">
    <b>4.2 Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).</b>
  </td>
  </table>
  
  @foreach ($sdm2s as $sdm2)
  
  <table>
  <td></td>
  <td style="border: 1px solid #000; text-align: justify; padding: 5; width: 500"><font face="Times New Roman">{{$sdm2->isi_sdm2}}</font></td>
  
  @endforeach
  </table>
</body>
</html>