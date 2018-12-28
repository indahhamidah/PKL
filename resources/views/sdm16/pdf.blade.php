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

<p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"><strong>
Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.
</strong></p>
</head> 

<body>

  <!-- 4.1 -->
  @foreach ($upaya_meningkatkan_kompetensi_tendik as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_upaya_meningkatkan_kompetensi_tendik !!}</p>
    @endforeach

</body>
</html>             