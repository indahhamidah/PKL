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

<p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 11;"><strong>
Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan.
</strong></p>
</head> 

<body>

  <!-- 4.1 -->
  @foreach ($monitoring_dan_evaluasi as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_monitoring_dan_evaluasi !!}</p>
    @endforeach

</body>
</html>             