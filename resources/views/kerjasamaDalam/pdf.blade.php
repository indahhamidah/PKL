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
  <title>Tabel 2.1 Kerjasama dengan Instansi Dalam Negeri  {{$kerdal[0]->nama_departemen}}</title>
</head>

<body>
<p style="font-size: 12;font-family: arial, helvetica, sans-serif;"><b>STANDAR 2 TATA PAMONG DAN KERJA SAMA</b></p>
<p style="font-size: 11;font-family: arial, helvetica, sans-serif;">2.1.1 Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; dengan program studi/jurusan dalam tiga tahun terakhir</p>
        <p style="font-size: 11;font-family: arial, helvetica, sans-serif;"><strong>Tabel 2.1</strong> Kerjasama dengan Instansi Dalam Negeri Program Studi {{$kerdal[0]->nama_departemen}}</p>
    <table cellspacing="0" >
      <tr>
            <th></th>
            <th rowspan="4" colspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No.</font></th>
            <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Nama Instansi</font></th>
            <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jenis Kegiatan</font></th>
            <th rowspan="2" colspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Kurun Waktu Kerja Sama</font></th>
            <th rowspan="4" colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Manfaat yang Telah Diperoleh</font></th>
          </tr>
          <tr>
            <tr>
            <th></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"> Tahun Mulai</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Tahun Akhir</font></th>
            </tr>
           </tr>
           <tr>
              <tr>
                  <th style="text-align: center"></th>
                  <th rowspan="2" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(1)</th>
                  <th rowspan="2" colspan="6" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(2)</th>
                  <th rowspan="2" colspan="6" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(3)</th>
                  <th rowspan="2" colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(4)</th>
                  <th rowspan="2" colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(5)</th>
                  <th rowspan="2" colspan="3" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(6)</th>
              </tr>
            </tr>

        <?php $no = 0;?>
         @foreach ($kerjasamaDalam as $kerjasamadalam)
         <?php $no++ ;?>
          <tr>
            <tr>
              <th></th>
              <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $no }}.</font></p></td>
              <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{$kerjasamadalam->nama_instansi}}</font></p></td>
              <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{$kerjasamadalam->jenis_kegiatan}}</font></p></td>
              <td colspan="1" style="border:1px solid #000;text-align: center; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{$kerjasamadalam->tahun_mulai}}</font></p></td>
              <td colspan="1" style="border:1px solid #000;text-align: center; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{$kerjasamadalam->tahun_akhir}}</font></p>
              <td colspan="3" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{$kerjasamadalam->manfaat}}</font></p><
                @endforeach
            </tr>
           
          </tr>
         

</table>
</body>