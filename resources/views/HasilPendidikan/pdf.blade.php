<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <style type="text/css">
  @page {
      size: 8.27in 11.69in;
     
      margin-top: 1in;
      margin-left: 1in;
      margin-right: 1in;
      margin-bottom: 1in;
    }
  </style>
  <title>Tabel 9.1 Hasil Pendidikan {{$hapen[0]->nama_departemen}}</title>
</head>

<body>
<p style="font-size: 12;font-family: arial, helvetica, sans-serif;"><b>STANDAR 9 HASIL DAN CAPAIAN</b></p>
    <p style="font-size: 11;font-family: arial, helvetica, sans-serif;"><strong>Tabel 9.1</strong> Data Hasil Pendidikan {{$hapen[0]->nama_departemen}}</p>
    <table cellspacing="0" cellspacing="0">

            <tr>  
            <th></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No</font></p></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Karya</font></p></th>
            <th></th>
            </tr>


            
    <?php $no = 0;?>
     @foreach ($hasil_pendidikan as $hasilPendidikan)
     <?php $no++ ;?>
                  <tr>
                  <th></th>
                    @if($hasilPendidikan->id_haki==1)
                    <td style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $no }}.</font></p></td>
                    <td style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$hasilPendidikan->judul_hasilPendidikan}}</font></p></td>
                    <td></td>
                    @endif
                    @endforeach
                    <th></th>
                    <th></th>
            </tr>
            
</table>
</body>