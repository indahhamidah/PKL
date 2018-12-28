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
Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik.
</strong></p>
</head> 

<body>

 	<!-- 4.1 -->
	@foreach ($sistem_seleksi_dan_pengembangan as $visi)
	<p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_seleksi_dan_pengembangan !!}</p>
    @endforeach

</body>
</html>             