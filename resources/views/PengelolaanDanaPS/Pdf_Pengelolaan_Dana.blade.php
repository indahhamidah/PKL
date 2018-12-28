<!DOCTYPE html>
<html>
<head lang="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <style type="text/css">
  @page {
      size: 8.27in 11.69in;
      
      margin-top: 1in;
      margin-left: 1in;
      margin-right: 1in;
      margin-bottom: 1in;
    }
  h4{
      font-family: helvetica;
      font-size: 11pt; 
    }
  th{
      font-family: helvetica;
      font-size: 10pt; 
  }
  td{
      font-family: helvetica;
      font-size: 10pt; 
  }
  p{
     font-family: helvetica;
      font-size: 10pt;
  }
  </style>
	<title>Pengelolaan Dana</title>
</head>
<body>
	<h4 style="text-align: justify">5.1 Pengelolaan Dana</h4>
	<p style="text-align: justify">Keterlibatan aktif program studi harus tercerminkan dalam dokumen tentang proses perencanaan, pengelolaan dan pelaporan serta pertanggungjawaban penggunaan dana kepada pemangku kepentingan melalui mekanisme yang transparan dan akuntabel.</p>
	<p style="text-align: justify">Jelaskan keterlibatan PS dalam perencanaan anggaran dan pengelolaan dana.</p>
	@foreach($pengelolaan as $kelola)
		<p><?php echo ($kelola->penjelasan_kelola); ?></p>
	@endforeach

</body>
</html>