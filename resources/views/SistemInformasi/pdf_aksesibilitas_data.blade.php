<!DOCTYPE html>
<html lang="en">
<head>
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
  <title>Aksesibilitas Data {{$dept[0]->nama_departemen}}</title>
</head>
<body>
  <h4 style="text-align: justify;"> Tabel 5.5.2 Beri Tanda V pada kolom yang sesuai (hanya satu kolom) dengan aksesibilitas tiap jenis data pada tabel berikut:</h4>
  <table cellpadding="5", cellspacing="0">
    <thead>
      <tr>
        <th width="30px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="200px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Data</th>
        <th width="320px" colspan="4" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sistem Pengelolaan Data</th>
      </tr>
      <tr>
        <th width="80px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Secara Manual</th>
        <th width="80px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Dengan Komputer<br>Tanpa Jaringan</th>
        <th width="80px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Dengan Komputer<br>Jaringan Local (LAN)</th>
        <th width="80px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Dengan Komputer<br>Jaringan Luas (WAN)</th>
      </tr>
      <tr></tr>
      <tr>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(1)</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(2)</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(3)</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(4)</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(5)</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(6)</th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr> -->
        <?php $no=0; ?>
        @foreach($akses_data as $akses_dataa)
        <?php $no++; ?>
        <tr>
          <td style="border:1px solid #000; border-width: thin;text-align: center;">{{$no}}</td>
          <td style="border:1px solid #000; border-width: thin;text-align: left;">{{$akses_dataa->jenis_data_akses}}</td>
          @foreach($sistem_data as $sistem_data_)
            @if($akses_dataa->id_sistem_kelola == $sistem_data_->id_sistem_kelola_datax)
          <td style="border:1px solid #000; border-width: thin;text-align: center;">v</td>
            @else
          <td style="border:1px solid #000; border-width: thin;text-align: center;"></td>
            @endif
          @endforeach
        </tr>
        @endforeach
      <!-- </tr> -->
    </tbody>
    <tfoot>
      <tr>
        <th colspan="2" style="border:1px solid #000; border-width: thin;text-align: center;">Jumlah</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">{{$nilai1}}</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">{{$nilai2}}</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">{{$nilai3}}</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">{{$nilai4}}</th>    
      </tr>
    </tfoot>
  </table>
</body>
</html>