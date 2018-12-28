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
Pandangan FMIPA IPB tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir, serta kendala yang ada dalam pengembangan tenaga dosen tetap.
</strong></p>
</head> 

<body>

  <!-- 4.1 -->
  @foreach ($pandangan_fmipa_tentang_dosen_tetap as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_pandangan_fmipa_tentang_dosen_tetap !!}</p>
    @endforeach

</body>
</html>             