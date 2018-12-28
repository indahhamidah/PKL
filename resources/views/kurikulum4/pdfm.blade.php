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


@foreach ($jumlah_sks_pss as $jumlah_sks_ps)
<p style=" text-align: justify;"><font face="Arial"> 6.1.2.1 <span style="padding-left:0.5em;">Jumlah SKS PS (minimum untuk kelulusan) :  {{ $jumlah_sks_ps->sks_wajib_universitas+$jumlah_sks_ps->sks_wajib_fakultas+$jumlah_sks_ps->sks_wajib_mayor+$jumlah_sks_ps->sks_minor }} SKS yang tersusun sebagai berikut:</span></font></p>


</head>

<body>

  <!-- 4.1 -->
  
                    <table cellspacing="0">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3; font-family: arial, helvetica, sans-serif; font-size: 10">Jenis Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px;text-align: center; background-color:#daeef3; font-family: arial, helvetica, sans-serif; font-size: 10">SKS</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3; font-family: arial, helvetica, sans-serif; font-size: 10" >Keterangan</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; font-family: arial, helvetica, sans-serif; font-size: 10">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; font-family: arial, helvetica, sans-serif; font-size: 10">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; font-family: arial, helvetica, sans-serif; font-size: 10">(3)</th>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left; font-family: arial, helvetica, sans-serif; font-size: 10">Wajib Universitas</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center; font-family: arial, helvetica, sans-serif; font-size: 10">{{$jumlah_sks_ps->sks_wajib_universitas}}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left; font-family: arial, helvetica, sans-serif; font-size: 10">{{$jumlah_sks_ps->keterangan_wajib_universitas}}</td>
                   </tr>
                  
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left; font-family: arial, helvetica, sans-serif; font-size: 10">Wajib Fakultas</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center; font-family: arial, helvetica, sans-serif; font-size: 10">{{$jumlah_sks_ps->sks_wajib_fakultas}}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left; font-family: arial, helvetica, sans-serif; font-size: 10">{{$jumlah_sks_ps->keterangan_wajib_fakultas}}</td>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left; font-family: arial, helvetica, sans-serif; font-size: 10">Wajib Mayor</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center; font-family: arial, helvetica, sans-serif; font-size: 10">{{$jumlah_sks_ps->sks_wajib_mayor}}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left; font-family: arial, helvetica, sans-serif; font-size: 10">{{$jumlah_sks_ps->keterangan_wajib_mayor}}</td>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left; font-family: arial, helvetica, sans-serif; font-size: 10">Minor dan <i>Supporting Course<i></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center; font-family: arial, helvetica, sans-serif; font-size: 10">{{$jumlah_sks_ps->sks_minor}}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left; font-family: arial, helvetica, sans-serif; font-size: 10">{{$jumlah_sks_ps->keterangan_minor}}</td>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left; font-family: arial, helvetica, sans-serif; font-size: 10">Jumlah total SKS setelah lulus</td>
                     <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: left; font-family: arial, helvetica, sans-serif; font-size: 10">Minimal {{ $jumlah_sks_ps->sks_wajib_universitas+$jumlah_sks_ps->sks_wajib_fakultas+$jumlah_sks_ps->sks_wajib_mayor+$jumlah_sks_ps->sks_minor }} SKS (dimungkinkan bagi mahasiswa untuk menambah beban SKSnya)</td>
                   </tr>
                   </table>
  @endforeach

</body>
</html>