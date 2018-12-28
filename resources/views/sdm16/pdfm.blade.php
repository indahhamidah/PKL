<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>4.6.2 Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.
</title>
</head>

<body>
  <table>
  <td style="text-align: justify;">
    <b>4.6.2 Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.</b>
  </td>
  </table>
  
  @foreach ($sdm16s as $sdm16)
  
  <table>
  <td></td>
  <td style="border: 1px solid #000; text-align: justify; padding: 5; width: 500"><font face="Times New Roman">{{$sdm16->isi_sdm16}}</font></td>
  
  @endforeach
  </table>
</body>
</html>