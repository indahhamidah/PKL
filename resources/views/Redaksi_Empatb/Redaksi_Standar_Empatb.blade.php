<!DOCTYPE html>    
<html>  
<head lang="en">
	<meta charset="utf-8">
  <style> 
    html {
      margin-top: 2.54cm;
      margin-bottom: 2.54cm;
      margin-left: 2.54cm;
      margin-right: 2.54cm;
    }
  </style>
</head>
<body>
     <!-- Judul BAB -->
	   <h3 style="text-align: justify; font-family: arial, helvetica, sans-serif; ">STANDAR 4. SUMBER DAYA MANUSIA</h3>

     <!-- SDM1 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>4.1 Sistem Seleksi dan Pengembangan</strong></p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).</p>

     @foreach ($sistem_seleksi_dan_pengembangan as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_seleksi_dan_pengembangan !!}</p>
    @endforeach

     <!-- SDM2 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>4.2 Monitoring dan Evaluasi</strong></p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).</p>

     @foreach ($monitoring_dan_evaluasi as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_monitoring_dan_evaluasi !!}</p>
    @endforeach


     <!-- SDM3 -->
     <br><br><br><br><br>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>4.3 Dosen Tetap</strong></p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.</p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >Dosen tetap dipilah dalam 2 kelompok, yaitu:</p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >1. Dosen tetap yang bidang keahliannya sesuai dengan PS</p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >2. Dosen tetap yang bidang keahliannya di luar PS</p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.3.1  Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:</p>
     <table cellspacing="0" >
    <tr>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">No.</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Nama Dosen Tetap</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">NIDN**</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Tgl. Lahir</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Jabatan Akademik***</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Gelar Akademik</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Pendidikan S1, S2, S3, dan Asal PT*</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
    </tr>
    <tr>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(1)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(2)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(3)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(4)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(5)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(6)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(7)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(8)</th>
    </tr>
    <?php $nomor = 0;?>
    @foreach($sdm3s as $sdm3)
    <?php $nomor++ ;?>
    <tr>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$nomor}}</td>
        <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm3->nama_dosen_sdm3}}</td>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm3->nidn_sdm3}}</td>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm3->tanggal_lahir}}</td>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm3->jabatan}}</td>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm3->gelar_sdm3}}</td>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm3->pendidikan_sdm3}}</td>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm3->bidang_keahlian}}</td>
    </tr>
    @endforeach
 <tfoot>
    <tr>
        <td colspan="8" style="border:1px solid white;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">* &nbsp;&nbsp;&nbsp;&nbsp;Lampirkan fotokopi ijazah.</td>
    </tr>
    <tr>
        <td colspan="8" style="border:1px solid white;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">** &nbsp;&nbsp;NIDN : Nomor Induk Dosen Nasional</td>
    </tr>
    <tr>
        <td colspan="8" style="border:1px solid white;text-align: left; text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.</td>
    </tr>
    </tfoot>

    </table>

    <!-- SDM4 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.3.2  Data dosen tetap yang bidang keahliannya di luar bidang PS: </p>

     <table cellspacing="0" >
    <tr>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">No.</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Nama Dosen Tetap</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">NIDN**</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Tgl. Lahir</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Jabatan Akademik***</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Gelar Akademik</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Pendidikan S1, S2, S3, dan Asal PT*</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
    </tr>
    <tr>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(1)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(2)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(3)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(4)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(5)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(6)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(7)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(8)</th>
    </tr>
    <?php $nomor = 0;?>
    @foreach($sdm4s as $sdm4)
    <?php $nomor++ ;?>
    <tr>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$nomor}}</td>
        <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm4->nama_dosen_sdm4}}</td>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm4->nidn_sdm4}}</td>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm4->tanggal_lahir}}</td>
        <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm4->jabatan}}</td>
        <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm4->gelar_sdm4}}</td>
        <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm4->pendidikan_sdm4}}</td>
        <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm4->bidang_keahlian}}</td>
    </tr>
    @endforeach
 <tfoot>
    <tr>
        <td colspan="8" style="border:1px solid white;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">* &nbsp;&nbsp;&nbsp;&nbsp;Lampirkan fotokopi ijazah.</td>
    </tr>
    <tr>
        <td colspan="8" style="border:1px solid white;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">** &nbsp;&nbsp;NIDN : Nomor Induk Dosen Nasional</td>
    </tr>
    <tr>
        <td colspan="8" style="border:1px solid white;text-align: left; text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.</td>
    </tr>
    </tfoot>

    </table>

    <!-- SDM5 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.3.3  Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu) </p>
     <br>
     <table cellspacing="0">
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">No.</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">Nama Dosen Tetap</th>
                     <th colspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">SKS Pengajaran pada</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">SKS</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">SKS Pengab<br>dian</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">SKS Manajemen**</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">Jlh</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;border-bottom: 0px; font-family : arial, helvetica, sans-serif;">Keterangan</th>
                     <tr> 
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">PS Sendiri</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">PS Lain PT Sendiri</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">PT Lain</th>
                     <th style="border: 1px solid #000;border-top: 0px padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">Penelitian</th>
                     <th style="border: 1px solid #000;border-top: 0px padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">kepada Masya<br>rakat</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">PT Sendiri</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">PT Lain</th>
                     <th style="border: 1px solid #000;border-top: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">SKS</th>
                     <th style="border: 1px solid #000;border-top: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10"></th>
                     </tr>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(8)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(9)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(10)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(11)</th>
                   </tr>
                   <?php $no = 0;?>
                   @foreach ($sdm5s as $sdm5)
                 <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm5->nama_sdm5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_pengajaran_pada_ps_sendiri }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_pengajaran_pada_ps_lain_pt_sendiri }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_pengajaran_pada_pt_lain }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_penelitian }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_pengabdian_kepada_masyarakat }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_manajemen_pt_sendiri }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_manajemen_pt_lain }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdm5->sks_pengajaran_pada_ps_sendiri+$sdm5->sks_pengajaran_pada_ps_lain_pt_sendiri+$sdm5->sks_pengajaran_pada_pt_lain+$sdm5->sks_penelitian+$sdm5->sks_pengabdian_kepada_masyarakat+$sdm5->sks_manajemen_pt_sendiri+$sdm5->sks_manajemen_pt_lain }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm5->keterangan }}</td>
                   </tr>
                   @endforeach

                   <tfoot>
                    <tr>
                     <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: right;"><strong>Jumlah</strong></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks1,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks2,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks3,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks4,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks5,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks6,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totalsks7,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($totaljumlah,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tr>
                   <tr>
                    <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: right;"><strong>Rata-rata SKS tridharma dan manajemen dosen yang tidak sedang tugas belajar</strong></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks1,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks2,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks3,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks4,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks5,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks6,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratasks7,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"><?php echo number_format ($ratajumlah,2) ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tr>
                   </tfoot>
                 </table>


    <!-- SDM6 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.3.4  Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS, dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut: </p>

     <table cellspacing="0">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen Tetap</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Bidang Keahlian</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Kode Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Nama Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Kelas</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Pertemuan Yang Direncanakan</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Pertemuan Yang Dilaksanakan</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(8)</th>
                   </tr>

                  <?php $no = 0;?>
                   @foreach ($sdm6s as $sdm6) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->nama_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->keahlian_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->kode_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->nama_mk_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->jlh_kelas }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->jlh_rencana_sdm6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm6->jlh_laksana_sdm6 }}</td>
                  </td>
                   </tr>
                    @endforeach
                    <tr>
                     <td colspan="6" style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family : arial, helvetica, sans-serif;">Total</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><?php echo $totalrencana ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><?php echo $totallaksana ?></td>
                   </tr>
                   </table>
                   <br>
    <!-- SDM7 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.3.5  Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut: </p>

     <table cellspacing="0">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen Tetap</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Bidang Keahlian</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Kode Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Nama Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Kelas</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Pertemuan Yang Direncanakan</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Pertemuan Yang Dilaksanakan</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(8)</th>
                   </tr>

                  <?php $no = 0;?>
                   @foreach ($sdm7s as $sdm7) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm7->nama_sdm7 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm7->keahlian_sdm7 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm7->kode_sdm7 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm7->nama_mk_sdm7 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm7->jlh_kelas }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm7->jlh_rencana_sdm7 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm7->jlh_laksana_sdm7 }}</td>
                  </td>
                   </tr>
                    @endforeach
                    <tr>
                     <th colspan="6" style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family : arial, helvetica, sans-serif;">Total</th>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><?php echo $totalrencana1 ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><?php echo $totallaksana1 ?></td>
                   </tr>
                   </table>

     <!-- SDM8 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>4.4 Dosen Tidak Tetap</strong></p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.4.1 Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:</p>

     <table cellspacing="0" >
    <tr>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">No.</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Nama Dosen Tidak Tetap</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">NIDN**</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Tgl. Lahir</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Jabatan Akademik***</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Gelar Akademik</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Pendidikan S1, S2, S3, dan Asal PT*</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
    </tr>
    <tr>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(1)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(2)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(3)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(4)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(5)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(6)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(7)</th>
        <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(8)</th>
    </tr>
    <?php $nomor = 0;?>
    @foreach($sdm8s as $sdm8)
    <?php $nomor++ ;?>
    <tr>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$nomor}}</td>
        <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm8->nama_dosen_sdm8}}</td>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm8->nidn_sdm8}}</td>
        <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm8->tanggal_lahir}}</td>
        <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm8->jabatan}}</td>
        <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm8->gelar_sdm8}}</td>
        <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm8->pendidikan_sdm8}}</td>
        <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">{{$sdm8->bidang_keahlian}}</td>
    </tr>
    @endforeach
 <tfoot>
    <tr>
        <td colspan="8" style="border:1px solid white;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">* &nbsp;&nbsp;&nbsp;&nbsp;Lampirkan fotokopi ijazah.</td>
    </tr>
    <tr>
        <td colspan="8" style="border:1px solid white;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">** &nbsp;&nbsp;NIDN : Nomor Induk Dosen Nasional</td>
    </tr>
    <tr>
        <td colspan="8" style="border:1px solid white;text-align: left; text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.</td>
    </tr>
    </tfoot>

    </table>

    <!-- SDM9 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.4.2 Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:</p>

     <table cellspacing="0">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen Tidak Tetap</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Bidang Keahlian</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Kode Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Nama Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Kelas</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Pertemuan Yang Direncanakan</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Pertemuan Yang Dilaksanakan</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(8)</th>
                   </tr>

                  <?php $no = 0;?>
                   @foreach ($sdm9s as $sdm9) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm9->nama_sdm9 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm9->keahlian_sdm9 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm9->kode_sdm9 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm9->nama_mk_sdm9 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm9->jlh_kelas }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm9->jlh_rencana_sdm9 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm9->jlh_laksana_sdm9 }}</td>
                  </td>
                   </tr>
                    @endforeach
                    <tr>
                     <td colspan="6" style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family : arial, helvetica, sans-serif;">Total</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><?php echo $totalrencana2 ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><?php echo $totallaksana2 ?></td>
                   </tr>
                   </table>


  <!-- SDM10 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>4.5 Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir</strong></p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.5.1 Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)</p>

     <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000;background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th style="border: 1px solid #000;background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Tenaga Ahli/Pakar</th>
                     <th style="border: 1px solid #000;background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Nama dan Judul Kegiatan</th>
                     <th style="border: 1px solid #000; background-color:#daeef3;padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Waktu Pelaksanaan</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                   </tr>
                   <?php $no = 0;?>
                   @foreach ($kegiatan_tenaga_ahlis as $kegiatan_tenaga_ahli) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $kegiatan_tenaga_ahli->nama_tenaga_ahli }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $kegiatan_tenaga_ahli->nama_kegiatan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $kegiatan_tenaga_ahli->waktu_pelaksanaan }}</td>
                   </tr>
                    @endforeach
                   </table>

  <!-- SDM11 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.5.2 Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS</p>

      <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                      <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jenjang Pendidikan Lanjut</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Bidang Studi</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Perguruan Tinggi</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Negara</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Tahun Mulai Studi</th>
                   </tr>
                   <tr>
                      <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(7)</th>
                   </tr>

                  <?php $no = 0;?>
                   @foreach ($sdm11s as $sdm11) 
                   <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->nama_sdm11 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->jenjang_pendidikan_lanjut }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->bidang_studi }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->perguruan_tinggi }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->negara }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm11->tahun_mulai_studi }}</td>
                   </tr>
                    @endforeach
                   </table>

    <!-- SDM12 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.5.3 Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri</p>

     <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen</th>
                     <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jenis Kegiatan*</th>
                     <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Tempat</th>
                     <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Waktu</th>
                     <th colspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Sebagai</th>
                     <tr>
                     <th style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Penyaji</th>
                     <th style="border: 1px solid #000;background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Peserta</th>
                   </tr>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(7)</th>
                   </tr>

                  <?php $no = 0;?>
                   @foreach ($sdm12s as $sdm12)
                   <?php $no++ ;?>
                   <tr>
                   <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm12->nama_sdm12 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm12->jenis_kegiatan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm12->tempat_kegiatan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm12->waktu_kegiatan }}</td>
                     @foreach($peran_kegiatan as $hakii)
                        @if($sdm12->id_status_peran_kegiatan == $hakii->id_peran_kegiatan)
                            <td style="border:1px solid #000; border-width: thin; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><p style="font-size:16px"><font face="Times New Rowman">V</td>
                        @else
                            <td style="border:1px solid #000; border-width: thin;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;"><p style="font-size:16px"><font face="Times New Rowman"></td>
                        @endif
                    @endforeach  
                   </tr>
                    @endforeach
                     
                   </table>
                          <p colspan="7" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll</p>
<br>
    <!-- SDM13 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.5.4 Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).</p>

     <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Prestasi yang Dicapai</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Waktu Pencapaian</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Tingkat (Lokal, Nasional, Internasional)</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(5)</th>
                   <?php $no = 0;?>
                   @foreach ($sdm13s as $sdm13)
                   <?php $no++ ;?>
                   <tr>
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td> 
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm13->nama_sdm13 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm13->prestasi_yang_dicapai }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm13->waktu_pencapaian }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm13->tingkat }}</td>
                   </tr>
                    @endforeach
                   </table>


    <!-- SDM14 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.5.5 Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.</p>

      <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Nama Organisasi Keilmuan atau Organisasi Profesi</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Kurun Waktu</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Tingkat (Lokal, Nasional, Internasional)</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(5)</th>
                   </tr>
                    <?php $no = 0;?>
                   @foreach ($sdm14s as $sdm14)
                   <?php $no++ ;?>
                   <tr>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm14->nama_sdm14 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm14->nama_organisasi }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm14->kurun_waktu }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">{{ $sdm14->tingkat }}</td>
                   </tr>
                    @endforeach
                   </table>

    <!-- SDM15 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>4.6 Tenaga Kependidikan</strong></p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.6.1 Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:</p>

     <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                     <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">No.</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Jenis Tenaga Kependidikan</th>
                     <th colspan="8" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Jumlah Tendik dengan Pendidikan Terakhir</th>
                     <th style="border: 1px solid #000; border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;" >Unit</th>
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >S3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >S2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >S1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >D4</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >D3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >D2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >D1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >SMA/SMK</th>
                     <th style="border: 1px solid #000; border-top: 0px; padding: 5px; background-color:#daeef3;text-align: center;" >Kerja</th>
                     </tr>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(8)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(9)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(10)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(11)</th>
                   </tr>
                   @foreach ($sdm15s as $sdm15)
                   <tr>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: left;">4.4.2. Pustakawan*</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->pustakawan_unit_sdm15 }}</td>
                     <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->ktu_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->ktu_unit_sdm15 }}</td>
                     </tr>
                     
                   </tr>

                   <tr>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: left;">4.4.3. Laboran</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->lab_unit_sdm15 }}</td>
                     <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->lab1_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->lab1_unit_sdm15 }}</td>
                     </tr>
                   </tr>

                   <tr>
                     <td rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: left;">4.4.4. Administrasi</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->admin_unit_sdm15 }}</td>
                     <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin1_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->admin1_unit_sdm15 }}</td>
                     </tr>
                     <tr> 
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_s3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_s2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_s1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_d4_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_d3_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_d2_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_d1_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->admin2_sma_sdm15 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm15->admin2_unit_sdm15 }}</td>
                     </tr>
                   </tr>
                   <tr>
                     <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;"><strong>Total</strong></td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s3_sdm15+$sdm15->lab_s3_sdm15+$sdm15->lab1_s3_sdm15+$sdm15->admin_s3_sdm15+$sdm15->ktu_s3_sdm15+$sdm15->admin1_s3_sdm15+$sdm15->admin2_s3_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s2_sdm15+$sdm15->lab_s2_sdm15+$sdm15->lab1_s2_sdm15+$sdm15->admin_s2_sdm15+$sdm15->ktu_s2_sdm15+$sdm15->admin1_s2_sdm15+$sdm15->admin2_s2_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_s1_sdm15+$sdm15->lab_s1_sdm15+$sdm15->lab1_s1_sdm15+$sdm15->admin_s1_sdm15+$sdm15->ktu_s1_sdm15+$sdm15->admin1_s1_sdm15+$sdm15->admin2_s1_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d4_sdm15+$sdm15->lab_d4_sdm15+$sdm15->lab1_d4_sdm15+$sdm15->admin_d4_sdm15+$sdm15->ktu_d4_sdm15+$sdm15->admin1_d4_sdm15+$sdm15->admin2_d4_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d3_sdm15+$sdm15->lab_d3_sdm15+$sdm15->lab1_d3_sdm15+$sdm15->admin_d3_sdm15+$sdm15->ktu_d3_sdm15+$sdm15->admin1_d3_sdm15+$sdm15->admin2_d3_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d2_sdm15+$sdm15->lab_d2_sdm15+$sdm15->lab1_d2_sdm15+$sdm15->admin_d2_sdm15+$sdm15->ktu_d2_sdm15+$sdm15->admin1_d2_sdm15+$sdm15->admin2_d2_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_d1_sdm15+$sdm15->lab_d1_sdm15+$sdm15->lab1_d1_sdm15+$sdm15->admin_d1_sdm15+$sdm15->ktu_d1_sdm15+$sdm15->admin1_d1_sdm15+$sdm15->admin2_d1_sdm15 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $sdm15->pustakawan_sma_sdm15+$sdm15->lab_sma_sdm15+$sdm15->lab1_sma_sdm15+$sdm15->admin_sma_sdm15+$sdm15->ktu_sma_sdm15+$sdm15->admin1_sma_sdm15+$sdm15->admin2_sma_sdm15 }}</td>
               <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tr>
                   @endforeach
                    
                   </table>
                   <p style="text-align: justify;font-size: 10;font-family : arial, helvetica, sans-serif;">* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan<br>** Administrasi juga meliputi KTU, Keuangan, dan Kepegawaian</p>



    <!-- SDM16 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >4.6.2 Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.</p>

     @foreach ($upaya_meningkatkan_kompetensi_tendik as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_upaya_meningkatkan_kompetensi_tendik !!}</p>
    @endforeach

     



</body>
</html>