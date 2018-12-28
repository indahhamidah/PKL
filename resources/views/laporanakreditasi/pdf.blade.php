<!DOCTYPE html>
<head>
      <meta charset="utf-8">
       <style type="text/css">
  @page {
      size: 8.27in 11.69in;
     
      margin-top: 1.10in;
      margin-left: 1.18in;
      margin-right: 1.18in;
      margin-bottom: 1.18in;
    }
  </style>
  <title>Laporan Seluruh Standar {{$peng[0]->nama_departemen}}</title>
</head>

<body>
<p>2.1.1 Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;program studi/jurusan dalam tiga tahun terakhir</p>
        <p><strong>Tabel 2.1</strong> Kerjasama dengan Instansi Dalam Negeri Program Studi {{$peng[0]->nama_departemen}}</p>
    <table cellspacing="0" >
      <tr>
            <th></th>
            <th rowspan="4" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center">No.</th>
            <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3;text-align: center">Nama Instansi</th>
            <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3;text-align: center">Jenis Kegiatan</th>
            <th rowspan="2" colspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">Kurun Waktu Kerja Sama</th>
            <th rowspan="4" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center">Manfaat yang Telah Diperoleh</th>
          </tr>

          <tr>
            <tr>
            <th></th>
            <th rowspan="2" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center">Mulai</th>
            <th rowspan="2" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center">Akhir</th>
            
            </tr>
           </tr>

             

        <?php $no = 0;?>
         @foreach ($kerjasamaDalam as $kerjasamadalam)
         <?php $no++ ;?>
          <tr>
            <tr>
              <th></th>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>{{ $no }}.</font></p></td>
              <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;">{{$kerjasamadalam->nama_instansi}}</font></p></td>
              <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;">{{$kerjasamadalam->jenis_kegiatan}}</font></p></td>
              <td colspan="1" align="center"style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>{{$kerjasamadalam->tahun_mulai}}</font></p></td>
              <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>{{$kerjasamadalam->tahun_akhir}}</font></p>
              <td colspan="3" style="border:1px solid #000; border-width: thin; background-color:#255255255;">{{$kerjasamadalam->manfaat}}</font></p><
                @endforeach
            </tr>
</table>
          <p>2.2.1 Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;studi/jurusan dalam tiga tahun terakhir.
        <p><strong>Tabel 2.2</strong> Kerjasama dengan Instansi Luar Negeri Program Studi {{$peng[0]->nama_departemen}}</p>
    <table cellspacing="0" >
      <tr>
            <th></th>
            <th rowspan="4" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >No.</font></th>
            <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Nama Instansi</font></th>
            <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Jenis Kegiatan</font></th>
            <th rowspan="2" colspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Kurun Waktu Kerja Sama</font></th>
            <th rowspan="4" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Manfaat yang Telah Diperoleh</font></th>
          </tr>
          <tr>
            <tr>
            <th></th>
            <th rowspan="2" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Times New Rowman">Mulai</font></th>
            <th rowspan="2" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:16px"><font face="Times New Rowman">Akhir</font></th>
            </tr>
           </tr>

           <tr>
              <tr>
                  <th style="text-align: center"></th>
                  <th rowspan="2" style="border:1px solid #000;text-align: center">(1)</th>
                  <th rowspan="2" colspan="6" style="border:1px solid #000;text-align: center">(2)</th>
                  <th rowspan="2" colspan="6" style="border:1px solid #000;text-align: center">(3)</th>
                  <th rowspan="2" colspan="1" style="border:1px solid #000;text-align: center">(4)</th>
                  <th rowspan="2" colspan="1" style="border:1px solid #000;text-align: center">(5)</th>
                  <th rowspan="2" colspan="3" style="border:1px solid #000;text-align: center">(6)</th>
              </tr>
            </tr>


        <?php $no = 0;?>
         @foreach ($kerjasamaLuar as $kerjasamaluar)
         <?php $no++ ;?>
          <tr>
            <tr>
              <th></th>
              <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">{{ $no }}.</font></p></td>
              <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">{{$kerjasamaluar->nama_instansi}}</font></p></td>
              <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">{{$kerjasamaluar->jenis_kegiatan}}</font></p></td>
              <td colspan="1" align="center" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">{{$kerjasamaluar->tahun_mulai}}</font></p></td>
              <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">{{$kerjasamaluar->tahun_akhir}}</font></p>
              <td colspan="3" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">{{$kerjasamaluar->manfaat}}</font></p><
                @endforeach
            </tr>
            </table>
            <p>7.1   Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS</p>
<p>7.1.1   Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;selama tiga tahun terakhir dengan mengikuti format tabel berikut:</p>
        <p><strong>Tabel 7.1</strong> Data Penelitian Program Studi {{$peng[0]->nama_departemen}}</p>
    <table cellspacing="0" >
      <tr>  
            <th></th>
            <th rowspan="2" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Sumber Pembiayaan</font></p></th>
            <th colspan="3" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Jumlah Judul Penelitian</font></p></th>
            <th colspan="3" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Jumlah Dana(juta Rp)</font></p></th>
            <th></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-2</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-1</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-2</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-1</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS</font></p></th>
            <th rowspan="1"></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
          <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(1)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(2)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ">(3)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(4)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(5)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(6)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(7)</font></p></th>
            <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Pembiayaan sendiri oleh peneliti</font></p></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul1Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul6Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul11Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana1Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana6Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana11Pene}}</font></td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">PT yang bersangkutan</font></p></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul2Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul7Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul12Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana2Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana7Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana12Pene}}</font></td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Depdiknas</font></p></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul3Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul8Pene}}</font></td>
        <td style="border:1px solid #000;text-align: center">{{$totaljudul13Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana3Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana8Pene}}</font></td>
        <td style="border:1px solid #000;text-align: center">{{$totaldana13Pene}}</font></td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Institusi dalam negeri di luar Depdiknas</font></p></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul4Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul9Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul14Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana4Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana9Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana14Pene}}</font></td>
        <th></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Institusi luar negeri</font></p></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul5Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul10Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul15Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana5Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana10Pene}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana15Pene}}</font></td>
        <th rowspan="1"></th>
        </tr>

        <tr>
            <th></th>
            <td colspan="20">&nbsp;&nbsp;Catatan:(*) dokumen pendukung disediakan pada saat asesmen lapangan.</td>
                   </tr>
        </table>
        <br><br>     
          7.1.2 Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga
                      tahun terakhir?<br>
                    @foreach ($redaksipenelitian as $redaksi) 
                    @if($redaksi->redaksi_penelitian == 1)
                      V Ya<br>
                      Tidak<br>
                      Ada {{$redaksi->jumlah_terlibat}} dari {{$redaksi->total_mahasiswa}} mahasiswa yang melakukan tugas akhir.
                      @else
                      Ya<br>
                        V Tidak 
                    @endif
                    
        @if($redaksi->redaksi_penelitian == 1)
            <br><br> 
            Mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen selama tiga tahun terakhir yang disajikan dalam tabel berikut:
            <table cellspacing="0" >
        <tr>  
            <th></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">No</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Nama Dosen</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Topik Penelitian</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Jumlah Mahasiswa yang Terlibat</font></p></th>
            <th></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(1)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(2)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ">(3)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(4)</font></p></th>
            <th></th>
            </tr>
        <?php $no = 0;?>
         @foreach ($mahasiswa_penelitian as $terlibatpenelitian)
         <?php $no++ ;?>
         <tr>
              <th></th>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>{{ $no }}.</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>{{ $terlibatpenelitian->nama_peneliti }}</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>{{ $terlibatpenelitian->judul_penelitian }}</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>{{ $terlibatpenelitian->jumlah_mahasiswa }}</font></p></td>
              <td></td>
               @endforeach
            </tr>
            @endif
            @endforeach
            </table>

            <p>8.1 Pengabdian Kepada Masyarakat</p>
<p>8.1.1 Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;format tabel berikut:</p>
        <p><strong>Tabel 8.1</strong> Data Pengabdian Kepada Masyarakat Program Studi {{$peng[0]->nama_departemen}}</p>
    <table cellspacing="0" >
      <tr>  
            <th></th>
            <th rowspan="2" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Sumber Pembiayaan</font></p></th>
            <th colspan="3" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Jumlah Judul Penelitian</font></p></th>
            <th colspan="3" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Jumlah Dana(juta Rp)</font></p></th>
            <th></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-2</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-1</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-2</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-1</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS</font></p></th>
            <th rowspan="1"></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(1)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ">(2)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ">(3)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(4)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">(5)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ">(6)</font></p></th>
            <th rowspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ">(7)</font></p></th>
            <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Pembiayaan sendiri oleh peneliti</font></p></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul1}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul6}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul11}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana1}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana6}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana11}}</font></td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">PT yang bersangkutan</font></p></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul2}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul7}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul12}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana2}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana7}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana12}}</font></td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Depdiknas</font></p></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul3}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul8}}</font></td>
        <td style="border:1px solid #000;text-align: center">{{$totaljudul13}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana3}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana8}}</font></td>
        <td style="border:1px solid #000;text-align: center">{{$totaldana13}}</font></td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Institusi dalam negeri di luar Depdiknas</font></p></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul4}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul9}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul14}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana4}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana9}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana14}}</font></td>
        <th></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">Institusi luar negeri</font></p></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul5}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul10}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaljudul15}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana5}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana10}}</font></td>
        <td rowspan="1" style="border:1px solid #000;text-align: center">{{$totaldana15}}</font></td>
        <th rowspan="1"></th>
        </tr>
        </tr>
    
</table>
        <br><br> 
        8.1.2 Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?<br>
        @foreach ($redaksipengabdian as $redaksiPeng) 
                    @if($redaksiPeng->redaksi_pengabdian == 1)
                      V Ya<br>
                      Tidak<br>
                      Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat.
                      <br><br>
                      Berikut adalah contoh keterlibatan mahasiswa dan bagaimana tingkat partisipasi dan manfaatnya pada kegiatan pelayanan/pengabdian kepada masyarakat:<br>
                      {!!$redaksiPeng->partisipasi!!}
                      @else
                      Ya<br>
                        V Tidak 
                    @endif
                    @if($redaksiPeng->redaksi_pengabdian == 1)
                    <br><br> 
                    Partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat, dilampirkan pada tabel berikut:
                    <table cellspacing="0" >
        <tr>  
            <th></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">No</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Kegiatan</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Institusi</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Tahun</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Jumlah Mahasiswa yang Terlibat</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Keterlibatan Mahasiswa</font></p></th>
            <th></th>
        </tr>
        <?php $no = 0;?>
         @foreach ($mahasiswa_pengabdian as $terlibatpengabdian)
         <?php $no++ ;?>
         <tr>
              <th></th>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>{{ $no }}.</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;">{{ $terlibatpengabdian->kegiatan_pengabdian }}</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;">{{ $terlibatpengabdian->institusi }}</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>{{ $terlibatpengabdian->tahun }}</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>{{ $terlibatpengabdian->jumlah_mahasiswa_pengabdian }}</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;">{{ $terlibatpengabdian->keterlibatan_mahasiswa }}</font></p></td>
              <td></td>
               @endforeach
            </tr>
            @endif
            @endforeach
            </table>
            <p><strong>Tabel 9.1</strong> Data Hasil Pendidikan {{$peng[0]->nama_departemen}}</p>
    <table cellspacing="0" cellspacing="0">

            <tr>  
            <th></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >No</font></p></th>
            <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Karya</font></p></th>
            <th></th>
            </tr>


            
    <?php $no = 0;?>
     @foreach ($hasil_pendidikan as $hasilPendidikan)
     <?php $no++ ;?>
                  <tr>
                  <th></th>
                    @if($hasilPendidikan->id_haki==1)
                    <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >{{ $no }}.</font></p></td>
                    <td style="border:1px solid #000; text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$hasilPendidikan->judul_hasilPendidikan}}</font></p></td>
                    <td></td>
                    @endif
                    @endforeach
                    <th></th>
                    <th></th>
            </tr>          
          </table>
          <p>9.2 Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dengan mengikuti format tabel berikut:</p>
        <p><strong>Tabel 9.2</strong> Data Hasil Penelitian {{$peng[0]->nama_departemen}}</p>
    <table cellspacing="0" >

            <tr>  
            <th></th>
            <th rowspan="2" width="70px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >No</font></p></th>
            <th rowspan="2" align="center" width="70px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >Judul Hasil Penelitian dan Hasil Pengabdian</font></p></th>
            <th rowspan="2" width="90px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Nama Dosen</font></p></th>
            <th rowspan="2" width="90px"  style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Dipublikasi pada</font></p></th>
            <th rowspan="2" width="90px"  style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Tahun Publikasi</font></p></th>
            <th colspan="3" width="90px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Tingkat</font></p></th>
            <th></th>
            </tr>

            <tr>
            <th></th>
                <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman">Lokal</th>
                <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman">Nasional</th>
                <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman">Internasional</th>
                <th></th>

            </tr>
           
              <tr>
                  <th style="text-align: center"></th>
                  <th style="border:1px solid #000;text-align: center">(1)</th>
                  <th style="border:1px solid #000;text-align: center">(2)</th>
                  <th style="border:1px solid #000;text-align: center">(3)</th>
                  <th style="border:1px solid #000;text-align: center">(4)</th>
                  <th style="border:1px solid #000;text-align: center">(5)</th>
                  <th style="border:1px solid #000;text-align: center">(6)</th>
                  <th style="border:1px solid #000;text-align: center">(7)</th>
                  <th style="border:1px solid #000;text-align: center">(8)</th>
                  <th></th>
              </tr>   
           

            
    <?php $no = 0;?>
     @foreach ($hasil_penelitian as $hasilPenelitian)
     <?php $no++ ;?>
                <tr>
                <th></th>
                  <tr>
                    <th></th>
                     <td rowspan="2" style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >{{ $no }}.</font></p></td>
                     <td rowspan="2" style="border:1px solid #000; text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$hasilPenelitian->judul_hasilPenelitian}}</font></p></td>
                     <td rowspan="2" style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$hasilPenelitian->nama_dosenPenelitian}}</font></p></td>
                    <td rowspan="2" style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$hasilPenelitian->dipublikasi_pada}}</font></p></td>
                    <td rowspan="2" style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$hasilPenelitian->tahun_publikasi}}</font></p></td>
                    @foreach($tingkat as $tingkatt)
                    @if($hasilPenelitian->id_tingkat == $tingkatt->id_tingkatt)
                            <td rowspan="2" style="border:1px solid #000; border-width: thin; text-align: center;"><p style="font-size:16px"><font face="Times New Rowman">V</td>
                        @else
                            <td rowspan="2" style="border:1px solid #000; border-width: thin;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman"></td>
                        @endif
                    @endforeach
                    <td rowspan="2" style="border:1px;"><font face="Times New Rowman" ></font></td>
                    <tr>
                    
                  @endforeach
                  <th></th>
                    <tr>
                    <th></th>
                    <th style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">Total</font></p></th>
                    <th style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">{{$totaljudul}}</font></p></th>
                    <td style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"></font></p></td>
                    <td style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"></font></p></td>
                    <td style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"></font></p></td>
                    <th style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">{{$na}}</font></p></th>
                    <th style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">{{$nb}}</font></p></th>
                    <th style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">{{$nc}}</font></p></th>
                    <td></td>
                    </tr></tr>
                  </tr></tr>     
                </table>
</body>