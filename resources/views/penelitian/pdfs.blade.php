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
  <title>Tabel 7.1 Penelitian {{$pene[0]->nama_departemen}}</title>
</head>

<body>
<p style="font-size: 12;font-family: arial, helvetica, sans-serif;"><b>STANDAR 7 PENELITIAN</p></b>
<p style="font-size: 11;font-family: arial, helvetica, sans-serif;">7.1   Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS</p>
<p style="font-size: 11;font-family: arial, helvetica, sans-serif;">7.1.1   Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PS,yang dilakukan oleh dosen tetap yang bidang keahliannya<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sesuai dengan PS selama tiga tahun terakhir dengan mengikuti<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; format tabel berikut:</p>
        <p style="font-size: 11;font-family: arial, helvetica, sans-serif;"><strong>Tabel 7.1</strong> Data Penelitian Program Studi {{$pene[0]->nama_departemen}}</p>
    <table cellspacing="0" >
    	<tr>  
            <th></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Sumber Pembiayaan</font></p></th>
            <th colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Judul Penelitian</font></p></th>
            <th colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Dana(juta Rp)</font></p></th>
            <th></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2</font></p></th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1</font></p></th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS</font></p></th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2</font></p></th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1</font></p></th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS</font></p></th>
            <th rowspan="1"></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
        	<th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(1)</font></p></th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(2)</font></p></th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(3)</font></p></th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(4)</font></p></th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(5)</font></p></th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(6)</font></p></th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(7)</font></p></th>
            <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Pembiayaan sendiri oleh peneliti</font></p></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul1}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul6}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul11}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana1}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana6}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana11}}</font></td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">PT yang bersangkutan</font></p></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul2}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul7}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul12}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana2}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana7}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana12}}</font></td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Depdiknas</font></p></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul3}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul8}}</font></td>
        <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul13}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana3}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana8}}</font></td>
        <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana13}}</font></td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Institusi dalam negeri di luar Depdiknas</font></p></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul4}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul9}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul14}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana4}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana9}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana14}}</font></td>
        <th></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Institusi luar negeri</font></p></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul5}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul10}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul15}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana5}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana10}}</font></td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana15}}</font></td>
        <th rowspan="1"></th>
        </tr>

        <tr>
            <th></th>
            <td colspan="20" style="font-size: 10;font-family: arial, helvetica, sans-serif;">&nbsp;&nbsp;Catatan:(*) dokumen pendukung disediakan pada saat asesmen lapangan.</td>
                   </tr>
        </table>
        <br><br>     
          <p style="font-size: 11;font-family: arial, helvetica, sans-serif;">7.1.2 Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga
                      tahun terakhir?<br>
                    @foreach ($redaksipenelitian as $redaksi) 
                    @if($redaksi->redaksi_penelitian == 1)
                      V Ya<br>
                      Tidak<br>
                      Ada <?php echo $totalM ?> dari {{$redaksi->total_mahasiswa}} mahasiswa yang melakukan tugas akhir.
                      @else
                      Ya<br>
                        V Tidak 
                    @endif
                    
        @if($redaksi->redaksi_penelitian == 1)
            <br><br> 
            Mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen selama tiga tahun terakhir yang disajikan dalam tabel berikut:</p>
            <table cellspacing="0" >
        <tr>  
            <th></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No</font></p></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Nama Dosen</font></p></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Topik Penelitian</font></p></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Mahasiswa yang Terlibat</font></p></th>
            <th></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(1)</font></p></th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(2)</font></p></th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(3)</font></p></th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(4)</font></p></th>
            <th></th>
            </tr>
        <?php $no = 0;?>
         @foreach ($mahasiswa_penelitian as $terlibatpenelitian)
         <?php $no++ ;?>
         @if($terlibatpenelitian->jumlah_mahasiswa!=0)
         <tr>
              <th></th>
              <td style="border:1px solid #000;text-align: center; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $no }}.</font></p></td>
              <td style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $terlibatpenelitian->nama_peneliti }}</font></p></td>
              <td style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $terlibatpenelitian->judul_penelitian }}</font></p></td>
              <td style="border:1px solid #000;text-align: center; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $terlibatpenelitian->jumlah_mahasiswa }}</font></p></td>
              <td></td>
              @endif
               @endforeach
               <tfoot>
               <tr>
               @foreach ($redaksipenelitian as $redaksi)
               <th></th>
               <td colspan="3" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Total jumlah mahasiswa yang penelitian skripsinya terkait dengan penelitian dosen</td>
                <td style="border:1px solid #000;text-align: center; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">A=<?php echo $totalM ?></td>
                <td></td>
                </tr>
                      <tr>
                      <th></th>
                      <td colspan="3" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah mahasiswa yang penelitian skripsinya tidak terkait dengan penelitian dosen</td>
                      <td style="border:1px solid #000;text-align: center; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">B={{$redaksi->total_mahasiswa}}</td>
                      <td></td>
                      </tr>
                      <tr>
                      <th></th>
                      <td colspan="3" style="border:1px solid #000;padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Total mahasiswa yang melakukan penelitian skripsinya pada tiga tahun terakhir</td>
                      <td style="border:1px solid #000;text-align: center; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">A+B={{$redaksi->total_mahasiswa+$redaksi->jumlah_mahasiswa}}</td>
                      </tr>
                      <th></th>
                  </tfoot>
                  @endforeach
            </tr>
            @endif
            @endforeach
            </table>

</body>