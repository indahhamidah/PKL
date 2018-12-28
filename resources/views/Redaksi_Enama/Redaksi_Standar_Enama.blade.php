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
  h3{
      font-family: helvetica;
      font-size: 12pt; 
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
    footer {
      position: fixed; 
      bottom: -0.29in; 
      left: 0in; 
      right: 0in;
      height: 0.02in; 

                /** Extra personal styles **/
      background-color: #778899;
      color: grey;
      text-align: left;
      line-height: 0.03in;
    }
  </style>
</head>
<body>
     <!-- Judul BAB -->
	   <h3 style="text-align: justify; font-family: arial, helvetica, sans-serif; ">STANDAR 6. PENDIDIKAN</h3>

     <!-- Kurikulum1 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.1 Kurikulum - Peran FMIPA IPB dalam penyusunan dan pengembangan kurikulum untuk program studi yang dikelola.</strong></p>

      @foreach ($peran_fmipa_tentang_kurikulum as $visi)
          {!! $visi->keterangan_peran_fmipa_tentang_kurikulum !!}
    @endforeach
<h4>6.2 Pembelajaran</h4>
<p style="text-align: justify;">Jelaskan peran Fakultas/Sekolah Tinggi dalam memonitor dan mengevaluasi pembelajaran</p>
    @foreach($peran as $penjelasan)
      <?php echo ($penjelasan->keterangan); ?>
     @endforeach
     


  <footer>
    <p>Standar 6 – Pendidikan
    </p>
  </footer>
</body>
</html>