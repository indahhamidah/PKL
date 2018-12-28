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
Jelaskan mekanisme peninjauan kurikulum dan pihak-pihak yang dilibatkan dalam proses peninjauan tersebut.
</strong></p>
</head> 

<body>

  <!-- 4.1 -->
  @foreach ($mekanisme_peninjauan_kurikulum as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_mekanisme_peninjauan_kurikulum !!}</p>
    @endforeach

</body>
</html>             