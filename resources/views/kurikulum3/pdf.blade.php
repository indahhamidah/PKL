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
Uraikan secara ringkas kompetensi lainnya/pilihan lulusan.
</strong></p>
</head> 

<body>

  <!-- 4.1 -->
  @foreach ($kompetensi_lainnya as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_kompetensi_lainnya !!}</p>
    @endforeach

</body>
</html>             