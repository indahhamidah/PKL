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
	<title>Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan </title>
</head>
<body>
	<h4>Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan </h4>
	@foreach($mekanisme as $mekanismee)
    <?php echo ($mekanismee->mekanisme); ?>
  @endforeach
</body>
</html>