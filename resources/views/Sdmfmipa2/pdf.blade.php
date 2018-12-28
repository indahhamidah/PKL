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
Pandangan FMIPA IPB tentang data di atas yang mencakup aspek: kecukupan, dan kualifikasi, serta kendala yang ada dalam pengembangan tenaga kependidikan.
</strong></p>
</head> 

<body>

  <!-- 4.1 -->
  @foreach ($pandangan_fmipa_tentang_tendik as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_pandangan_fmipa_tentang_tendik !!}</p>
    @endforeach

</body>
</html>             