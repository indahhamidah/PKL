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
  
  
<title>Tabel 9.2 Hasil Penelitian {{$hapene[0]->nama_departemen}}</title>
</head>

<body>
<p style="font-size: 12;font-family: arial, helvetica, sans-serif;"><b> STANDAR 9 HASIL DAN CAPAIAN</b></p>
<p style="font-size: 11;font-family: arial, helvetica, sans-serif;">9.2 Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sesuai dengan PS dengan mengikuti format tabel berikut:</p>
        <p style="font-size: 11;font-family: arial, helvetica, sans-serif;"><strong>Tabel 9.2</strong> Data Hasil Penelitian {{$hapene[0]->nama_departemen}}</p>
    <table cellspacing="0" >

            <tr>  
            <th></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No</font></p></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Judul Hasil Penelitian dan Hasil Pengabdian</font></p></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Nama Dosen</font></p></th>
            <th rowspan="2"  style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Dipublikasi pada</font></p></th>
            <th rowspan="2"  style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Tahun Publikasi</font></p></th>
            <th colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Tingkat</font></p></th>
            <th></th>
            </tr>

            <tr>
            <th></th>
                <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial,sans-serif;">Lokal</th>
                <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, sans-serif;">Nasional</th>
                <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, sans-serif;">Internasional</th>
                <th></th>

            </tr>
           
              <tr>
                  <th style="text-align: center"></th>
                  <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, sans-serif;">(1)</th>
                  <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, sans-serif;">(2)</th>
                  <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, sans-serif;">(3)</th>
                  <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, sans-serif;">(4)</th>
                  <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, sans-serif;">(5)</th>
                  <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, sans-serif;">(6)</th>
                  <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, sans-serif;">(7)</th>
                  <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, sans-serif;">(8)</th>
                  <th></th>
              </tr>   
           

            
    <?php $no = 0;?>
     @foreach ($hasil_penelitian as $hasilPenelitian)
     <?php $no++ ;?>
                <tr>
                <th></th>
                  <tr>
                    <th></th>
                     <td rowspan="2" style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $no }}.</font></p></td>
                     <td rowspan="2" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;"> {{$hasilPenelitian->judul_hasilPenelitian}}</font></p></td>
                     <td rowspan="2" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;"> {{$hasilPenelitian->nama_dosenPenelitian}}</font></p></td>
                    <td rowspan="2" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$hasilPenelitian->dipublikasi_pada}}</font></p></td>
                    <td rowspan="2" style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$hasilPenelitian->tahun_publikasi}}</font></p></td>
                    @foreach($tingkat as $tingkatt)
                    @if($hasilPenelitian->id_tingkat == $tingkatt->id_tingkatt)
                            <td rowspan="2" style="border:1px solid #000; padding: 5px;text-align: center; font-size: 10;font-family: arial, helvetica, sans-serif;">V</td>
                        @else
                            <td rowspan="2" style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"></td>
                        @endif
                    @endforeach
                    <td rowspan="2"></td>
                    <tr>
                    
                  @endforeach
                  <th></th>
                    <tr>
                    <th></th>
                    <th style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Total</font></p></th>
                    <th style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul}}</font></p></th>
                    <td style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"></font></p></td>
                    <td style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"></font></p></td>
                    <td style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"></font></p></td>
                    <th style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$na}}</font></p></th>
                    <th style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$nb}}</font></p></th>
                    <th style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$nc}}</font></p></th>
                    <td></td>
                    </tr></tr>
                  </tr></tr>
            
                   
</table>
</body>