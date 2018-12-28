<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>4.1 Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).
</title>
</head>

<body>
  <table>
  <td style="text-align: justify;">
    <b>4.1 Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).</b>
  </td>
  </table>
  
  @foreach ($sdm1s as $sdm1)
  
  <table>
  <td></td>
  <td style="border: 1px solid #000; text-align: justify; padding: 5; width: 500"><font face="Times New Roman">{{$sdm1->isi_sdm1}}</font></td>
  
  @endforeach
  </table> 
</body>
</html>