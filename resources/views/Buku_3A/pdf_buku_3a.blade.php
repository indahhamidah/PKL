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
	<title>Buku 3A Borang Akreditasi Program Studi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
  <!-- standar 1 -->
  <h3 style="text-align: justify;">STANDAR 1. VISI, MISI, TUJUAN DAN SASARAN, SERTA STRATEGI PENCAPAIAN</h3>
  @foreach ($vmts as $visi)
    {!! $visi->visimisi !!}
  @endforeach

<!-- standar 2 -->
  <h3 style="text-align: justify;">STANDAR 2. TATA PAMONG DAN KERJA SAMA</h3>
  @foreach ($tamongma as $tamong)
    {!! $tamong->tamongjama !!}
  @endforeach
    <p style="text-align: justify;">2.1.1 Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir</p>
    <p style="text-align: justify;"><strong>Tabel 2.1</strong> Kerjasama dengan Instansi Dalam Negeri Program Studi {{$kerdal[0]->nama_departemen}}</p>
    <table cellspacing="0" cellpadding="5">
      <thead>
      <tr>
        <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; text-align: center;">No.</th>
        <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; text-align: center;">Nama Instansi</th>
        <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 10;">Jenis Kegiatan</th>
        <th colspan="2" style="border:1px solid #000; background-color:#daeef3; text-align: center;">Kurun Waktu Kerja Sama</th>
        <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; text-align: center;">Manfaat yang Telah Diperoleh</th>
      <tr>
        <th style="border:1px solid #000; background-color:#daeef3; text-align: center;"> Tahun Mulai</th>
        <th style="border:1px solid #000; background-color:#daeef3; text-align: center;">Tahun Akhir</th>
      </tr>
      <tr>
        <th style="border:1px solid #000; text-align: center;">(1)</th>
        <th style="border:1px solid #000; text-align: center;">(2)</th>
        <th style="border:1px solid #000; text-align: center;">(3)</th>
        <th style="border:1px solid #000; text-align: center;">(4)</th>
        <th style="border:1px solid #000; text-align: center;">(5)</th>
        <th style="border:1px solid #000; text-align: center;">(6)</th>
      </tr>
    </tr>
    </thead>
    <tbody>
    <?php $no = 0;?>
         @foreach ($kerjasamaDalam as $kerjasamadalam)
    <tr>
    <?php $no++ ;?>
      <td style="border:1px solid #000; text-align: center;">{{ $no }}.</td>
      <td style="border:1px solid #000;">{{$kerjasamadalam->nama_instansi}}</td>
      <td style="border:1px solid #000;">{{$kerjasamadalam->jenis_kegiatan}}</td>
      <td style="border:1px solid #000;text-align: center;">{{$kerjasamadalam->tahun_mulai}}</td>
      <td style="border:1px solid #000;text-align: center;">{{$kerjasamadalam->tahun_akhir}}
      <td style="border:1px solid #000;">{{$kerjasamadalam->manfaat}}</td>
    </tr>
      @endforeach
  </tbody>
</table>
<!-- Standar 3 -->
    <h3 style="text-align: justify;">STANDAR 3. MAHASISWA</h3>
    <h4>3.1 Mahasiswa</h4>
      <p style="text-align: justify;"> Tabel 3.2 Jumlah Mahasiswa Departemen {{$dept[0]->nama_departemen}} Menurut Tipe Program dan Jenis Mahasiswa</p> 
      <table cellpadding="5" cellspacing="0" >
      <thead>
        <tr>
          <th width="100px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tipe</th>
          <th width="150px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Mahasiswa</th>
          <th width="250px" colspan="5" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tahun</th>
        </tr>
        <tr>
          @foreach($jumlahs as $jumlahh)
          <td style="border:1px solid #000; background-color:#daeef3;border-width: thin; text-align: center;">{{$jumlahh->tahun}}</td>
          @endforeach
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="border:1px solid #000; border-width: thin;border-bottom-style: none;text-align: center;">Program Reguler</td>
          <td style="border: 1px solid black">Mahasiswa Baru Bukan Transfer</td>
          @foreach ($jumlahs as $jumlahh)
          <td  style="border:1px solid #000; border-width: thin;text-align: right;">{{$jumlahh->mbt_reguler}}</td>
          @endforeach
        </tr>
        <tr>
          <td  style="border:1px solid #000; border-width: thin;border-top-style: none;border-bottom-style: none;text-align: center;"></td>
          <td style="border: 1px solid black">Mahasiswa Baru Transfer</td>
          @foreach ($jumlahs as $jumlahh)
          <td  style="border:1px solid #000; border-width: thin;text-align: right;">{{$jumlahh->mt_reguler}}</td>
          @endforeach
        </tr>
        <tr>
          <td  style="border:1px solid #000; border-width: thin; border-top-style: none;text-align: center;"></td>
          <td style="border: 1px solid black">Total Mahasiswa Reguler</td>
          @foreach ($jumlahs as $jumlahh)
          <td  style="border:1px solid #000; border-width: thin;text-align: right;">{{$jumlahh->total_reguler}}</td>
          @endforeach
        </tr>
        <tr>
          <td style="border:1px solid #000; border-width: thin;border-bottom-style: none;text-align: center;">Program Non-Reguler</td>
          <td style="border: 1px solid black">Mahasiswa Baru Bukan Transfer</td>
          @foreach ($jumlahs as $jumlahh)
          <td  style="border:1px solid #000; border-width: thin;text-align: right;">{{$jumlahh->mbt_nonreguler}}</td>
          @endforeach
        </tr>
        <tr>
          <td  style="border:1px solid #000; border-width: thin;border-top-style: none;border-bottom-style: none;text-align: center;"></td>
          <td style="border: 1px solid black">Mahasiswa Baru Transfer</td>
          @foreach ($jumlahs as $jumlahh)
          <td  style="border:1px solid #000; border-width: thin;text-align: right;">{{$jumlahh->mt_nonreguler}}</td>
          @endforeach
        </tr>
        <tr>
          <td  style="border:1px solid #000; border-width: thin;border-top-style: none;text-align: center;"></td>
          <td style="border: 1px solid black">Total Mahasiswa Non-Reguler</td>
          @foreach ($jumlahs as $jumlahh)
          <td  style="border:1px solid #000; border-width: thin;text-align: right;">{{$jumlahh->total_nonreguler}}</td>
          @endforeach
        </tr>          
        <tr>
          <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Total Mahasiswa</th>
          @foreach ($jumlahs as $jumlahh)
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;">{{ $jumlahh->mbt_reguler+$jumlahh->mt_reguler+$jumlahh->total_reguler+$jumlahh->mbt_nonreguler+$jumlahh->mt_nonreguler+$jumlahh->total_nonreguler }}</th>
          @endforeach
        </tr>
      </tbody>
      </table>
      <br>
      <table cellpadding="5", cellspacing="0" >
        <tr>
          <th width="80px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tahun</th>
          <th width="120px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Daya Tampung</th>
          <th width="200px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Calon Mahasiswa</th>
        <tr>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Ikut Seleksi</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Lulus Seleksi</th>
        </tr>
      </tr>     
        @foreach ($jumlahs as $jumlahh)
      <tr>
        <td  style="border:1px solid #000; border-width: thin; text-align: center;">{{$jumlahh->tahun}}</td>
        <td  style="border:1px solid #000; border-width: thin; text-align: right;">{{$jumlahh->daya_tampung}}</td>
        <td  style="border:1px solid #000; border-width: thin; text-align: right;">{{$jumlahh->ikut_seleksi}}</td>
        <td  style="border:1px solid #000; border-width: thin; text-align: right;">{{$jumlahh->lulus_seleksi}}</td>
        @endforeach
      </tr>
    </table>               
      <br>
      @foreach ($redaksiJumlah as $redaksijum)
         {!! $redaksijum->redaksi_jumlah!!}
      @endforeach
    <h4>3.2 Lulusan</h4>
    <p style="text-align: justify;">Tabel 3.2 Rata-rata IPK Lulusan Program Studi {{$dept[0]->nama_departemen}} Tahun Ajaran <?php echo $ts ?>/<?php echo $ts1 ?> hingga <?php echo $ts4 ?>/<?php echo $ts5 ?></p>
    <table cellspacing="0" cellpadding="5">
      <tr>  
        <!-- <th></th> -->
        <!-- <th></th> -->      
        <th width="120px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tahun Akademik</th>
        <th width="200px" colspan="3" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">IPK Lulusan Reguler</th>
        <th width="250px" colspan="3" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Persentase Lulusan Reguler dengan IPK:</th>
        <th></th>
      </tr>
      <tr><th></th></tr>
      <tr>
        <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;">Min</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rat</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Max</th>
        <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;"> &lt; 2,75 </th>
        <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;"> 2,75 - 3,50 </th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"> > 3,50 </th>
        <th></th>
      </tr>
      <tr>
        <td align="center" style="border:1px solid #000;">TS -4</td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($min4,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($avg4,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($max4,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($min_ts4/$jum_ts4)*100,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($tengah_ts4/$jum_ts4)*100,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($max_ts4/$jum_ts4)*100,2) ?> </td>
        <td></td>
      </tr>
      <tr>
        <td align="center" style="border:1px solid #000;">TS -3</td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($min3,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($avg3,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($max3,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($min_ts3/$jum_ts3)*100,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($tengah_ts3/$jum_ts3)*100,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($max_ts3/$jum_ts3)*100,2) ?></td>
        <td></td>
      </tr>
      <tr>
        <td align="center" style="border:1px solid #000;">TS -2</td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($min2,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($avg2,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($max2,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($min_ts2/$jum_ts2)*100,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($tengah_ts2/$jum_ts2)*100,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($max_ts2/$jum_ts2)*100,2) ?></td>
        <td></td>
      </tr>
      <tr>
        <td align="center" style="border:1px solid #000;">TS -1</td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($min1,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($avg1,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($max1,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($min11/$total_jml_ts1)*100,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($tengah_ts1/$total_jml_ts1)*100,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($max_ts1/$total_jml_ts1)*100,2) ?></td>
        <td></td>
      </tr>
      <tr>
        <td align="center" style="border:1px solid #000;">TS</td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($min0,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($avg0,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format($max0,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($mints/$total_jml)*100,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($tengahts/$total_jml)*100,2) ?></td>
        <td align="right" style="border:1px solid #000;"><?php echo number_format(($maxts/$total_jml)*100,2) ?></td>
        <td></td>                    
    </tr>
    <tr>
        <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;">Rata-rata</th>
        <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: right;"><?php echo number_format(($min4+$min3+$min2+$min1+$min0)/5,2) ?></th>
        <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: right;"><?php echo number_format(($avg4+$avg3+$avg2+$avg1+$avg0)/5,2) ?></th>
        <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: right;"><?php echo number_format(($max4+$max3+$max2+$max1+$max0)/5,2) ?></th>
        <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: right;"><?php echo number_format(((($mints/$total_jml)*100)+(($min11/$total_jml_ts1)*100)+(($min_ts2/$jum_ts2)*100)+(($min_ts3/$jum_ts3)*100)+(($min_ts4/$jum_ts4)*100))/5,2) ?> </th>
        <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: right;"><?php echo number_format((((($tengahts/$total_jml)*100)+($tengah_ts1/$total_jml_ts1)*100)+(($tengah_ts2/$jum_ts2)*100)+(($tengah_ts3/$jum_ts3)*100)+(($tengah_ts4/$jum_ts4)*100))/5,2) ?></th>
        <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: right;"><?php echo number_format(((($maxts/$total_jml)*100)+(($max_ts1/$total_jml_ts1)*100)+(($max_ts2/$jum_ts2)*100)+(($max_ts3/$jum_ts3)*100)+(($max_ts4/$jum_ts4)*100))/5,2) ?></th>
        <th></th>
      </tr> 
    </table>
    <br>  
      @foreach ($redaksiLulusan as $redaksilus)
        {!! $redaksilus->redaksi_lulusan!!}
      @endforeach
<!-- Standar 4 -->
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
     <!-- <br><br><br><br><br><br><br><br><br><br><br> -->
     <h3>4.3 Dosen Tetap</h3>
     <p style="text-align: justify;">Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.</p>
     <p style="text-align: justify;">Dosen tetap dipilah dalam 2 kelompok, yaitu:</p>
     <p style="text-align: justify;">1. Dosen tetap yang bidang keahliannya sesuai dengan PS
     <br>2. Dosen tetap yang bidang keahliannya di luar PS</p>
     <p style="text-align: justify;">4.3.1  Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:</p>
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
<!-- <br> -->
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
    <!-- <br><br><br><br><br><br><br><br> -->
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

<!-- Standar 5 -->
    <h3 style="text-align: justify;">STANDAR 5. KEUANGAN, SARANA DAN PRASARANA SERTA SISTEM INFORMASI</h3>
    <h4>5.1 Pengelolaan Dana</h4>
    <p style="text-align: justify;">Keterlibatan aktif departemen harus tercerminkan dalam dokumen tentang proses perencanaan, pengelolaan dan pelaporan serta pertanggungjawaban penggunaan dana kepada pemangku kepentingan melalui mekanisme yang transparan dan akuntabel.</p>
    <p style="text-align: justify;">Jelaskan keterlibatan departemen dalam perencanaan anggaran dan pengelolaan dana.</p>
    @foreach($pengelolaan as $kelola)
      <p><?php echo ($kelola->penjelasan_kelola); ?></p>
    @endforeach
    <h4 style="text-align: justify;">5.2 Perolehan dan Alokasi Dana</h4>
    <!-- Penerimaan dana -->
    <p>5.2.1a. Tuliskan realisasi perolehan dan alokasi dana (termasuk hibah) dalam juta rupiah termasuk gaji, selama tiga tahun terakhir, pada tabel berikut:</p>
    <table cellspacing="0" cellpadding="8">
    <thead>
      <tr>
        <th width="100px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber Dana</th>
        <th width="160px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Dana</th>
        <th width="280px" colspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana (Juta Rupiah)</th>
        <tr>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-2 ({{$tahun_dua_lalu}})</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-1 ({{$tahun_satu_lalu}})</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS ({{$tahun_sekarang}})</th>
          <tr>
            <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
            <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
            <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
            <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
            <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
          </tr>
        </tr>
      </tr>
    </thead>
    <tbody> 
      @if(isset($jumlah))
      @foreach($jumlah as $key1 => $jumlah1)
      @foreach($jumlah1 as $key2 => $jumlah2)
      <tr>
        @if($key2 == 0)
        <td rowspan="{{count($jumlah1)}}" style="border:1px solid #000; border-width: thin; text-align: center;">
        {{$sumber[$key1]}}</td>
        @endif
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$jns[$key1][$key2]}}</td>
        @foreach($jumlah2 as $key3 => $jumlah3)
          <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($jumlah3,2)}}</td>
        @endforeach
      </tr>
      @endforeach
      @endforeach
      @endif
    </tbody>
    <tfoot>
      <tr>
        <th colspan="2" style="border:1px solid #000; border-width: thin; text-align: center;">Total</th>
        <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total[0],2)}}</th>
        <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total[1],2)}}</th>
        <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total[2],2)}}</th>
      </tr>
    </tfoot>
  </table>
  <!-- penggunaan dana -->
  <p>5.2.1b. Penggunaan dana:</p>
  <table cellpadding="5", cellspacing="0">
    <thead>
      <tr>
        <th width="20px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="100px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Penggunaan</th>
        <th width="390px" colspan="6" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana dalam Juta Rupiah dan Persentase</th>
        <!-- <th width="80px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rata-rata per tahun</th> -->
      </tr>
      <tr>
        <th width="100px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-2 ({{$tahun_dua_lalu}})</th>
        <th width="100px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-1 ({{$tahun_satu_lalu}})</th>
        <th width="100px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS ({{$tahun_sekarang}})</th>
      </tr>
      <tr>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rp</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">%</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rp</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">%</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rp</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">%</th>
      </tr>
      <tr>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(6)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(7)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(8)</th>
        <!-- <th style="border:1px solid #000; border-width: thin; text-align: center;">(9)</th> -->
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">1</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Pendidikan</td>
          @foreach($total_ts2 as $total) 
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_pend3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_pend,2) }}</td>
          @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">2</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Penelitian</td>
          @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_pen3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_pen,2) }}</td>
          @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">3</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Pengabdian Kepada Masyarakat</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_peng3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_peng,2) }}</td>
        @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">4</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi Prasarana</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_pras3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_pras,2) }}</td>
        @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">5</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi Sarana</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_sar3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_sar,2) }}</td>
        @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">6</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi SDM</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_sdm3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_sdm,2) }}</td>
        @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">7</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Lain-lain</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_lain3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_lain,2) }}</td>
        @endforeach
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="2" style="border:1px solid #000; border-width: thin; text-align: center;">Total</th>
        @foreach($total_ts2 as $total)
        <th style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->total,2); ?></th>
        <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total->persen_pend + $total->persen_pen + $total->persen_peng + $total->persen_pras + $total->persen_sar + $total->persen_sdm + $total->persen_lain,2)}}</th>
        @endforeach
        @foreach($rata_semua as $rata)
        @endforeach
      </tr>
    </tfoot>
  </table>
  <p style="text-align: justify;">5.2.2. Tuliskan dana untuk kegiatan penelitian pada tiga tahun terakhir yang melibatkan dosen yang bidang keahliannya sesuai dengan departemen:</p>
  <table cellpadding="5", cellspacing="0">
    <thead>
      <tr>
        <th width="20px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="25px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tahun</th>
        <th width="130px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Judul Penelitian</th>
        <th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Dosen yang Terlibat</th>
        <th width="70px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber dan Jenis Dana</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana (Juta Rupiah)</th>
      </tr>
    </thead>
    <tbody>
      <?php $nom=0; ?>
      @foreach($penelitians as $dana_teliti)
      <?php $nom++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$nom}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{Carbon\Carbon::parse($dana_teliti->tahun_penelitian)->format('Y')}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$dana_teliti->judul_penelitian}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$dana_teliti->nama_peneliti}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$dana_teliti->sumber_danaa}} dan {{$dana_teliti->jenis_dana}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($dana_teliti->jumlah_dana,2)}}</td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th colspan="5" style="border:1px solid #000; border-width: thin; text-align: center;">Jumlah</th>
        <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($totaldana,2)}}</th>
      </tr>
    </tfoot>
  </table>
  <p style="text-align: justify;">Catatan: (*) Di luar dana penelitian/penulisan skripsi, tesis, dan disertasi sebagai bagian dari studi lanjut. </p>
  <p style="text-align: justify;">5.2.3. Tuliskan dana yang diperoleh dari/untuk kegiatan pelayanan/pengabdian kepada masyarakat pada tiga tahun terakhir:</p>
  <table cellpadding="5", cellspacing="0">
    <thead>
      <tr>
        <th width="20px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tahun</th>
        <th width="130px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Judul Kegiatan Pelayanan/Pengabdian<br>kepada Masyarakat</th>
        <th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber dan Jenis Dana</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana (Juta Rupiah)</th>
      </tr>
      <tr>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
      </tr>
    </thead>
    <tbody>
    <?php $nomr=0; ?>
    @foreach($pengabdians as $dana_kegiatan)
    <?php $nomr++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$nomr}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{Carbon\Carbon::parse($dana_kegiatan->tahun_pengabdian)->format('Y')}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$dana_kegiatan->judul_pengabdian}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$dana_kegiatan->sumber_danaa}} dan {{$dana_kegiatan->jenis_dana_peng}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($dana_kegiatan->jumlah_dana_peng,2)}}</td>
      </tr>
    @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th colspan="4" style="border:1px solid #000; border-width: thin; text-align: center;">Jumlah</th>
        <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($totaldana2,2)}}</th>
      </tr>
    </tfoot>
  </table>
<!-- prasarana -->
<h4>5.3 Prasarana</h4>
<p>6.3.1. Tuliskan data ruang kerja dosen tetap yang bidang keahliannya sesuai dengan departemen:</p>
<table cellpadding="5", cellspacing="0">
  <thead>
    <tr>
      <th width="320px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font size="2">Ruang Kerja Dosen</th>
      <th width="110px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font size="2">Jumlah Ruang</th>
      <th width="125px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font size="2">Jumlah Luas (m<sup>2</sup>)</th>
      <tr>
        <th style="border:1px solid #000; border-width: thin; text-align: center;"><font size="2">(1)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;"><font size="2">(2)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;"><font size="2">(3)</th>
      </tr>
    </tr>
  </thead>
  <tbody>
    @foreach($rk_dosen_tetap as $rk_dosen)
    <tr>
      <td style="border:1px solid #000; border-width: thin; text-align: left;"><font size="2">{{$rk_dosen->ruang_kerja_dosen}}</td>
      <td style="border:1px solid #000; border-width: thin; text-align: right;"><font size="2">{{$rk_dosen->jumlah_ruang}}</td>
      <td style="border:1px solid #000; border-width: thin; text-align: right;"><font size="2">{{$rk_dosen->jumlah_luas}}</td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th style="border:1px solid #000; border-width: thin; text-align: center;"><font size="2">Total</th>
      <th style="border:1px solid #000; border-width: thin; text-align: right;"><font size="2">{{$jmlh_ruang}}</th>
      <th style="border:1px solid #000; border-width: thin; text-align: right;"><font size="2">{{$jmlh_luas}}</th>
    </tr>
  </tfoot>
</table>
  <p style="text-align: justify;">5.3.2. Tuliskan data prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. kecuali ruang dosen) yang dipergunakan PS dalam proses belajar mengajar:</p>
  <table cellpadding="5" cellspacing="0">
    <thead>
      <tr>
        <th width="15px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="100px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Prasarana</th>
        <th width="45px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Unit</th>
        <th width="45px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Total Luas (m<sup>2</sup>)</th>
        <th width="80px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Kepemilikan</th>
        <th width="90px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Kondisi</th>
        <th width="30px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Utilisasi (Jam/<br>Minggu)</th>
        <tr>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">SD</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">SW</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Terawat</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tidak Terawat</th>
        </tr>
        <tr>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(6)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(7)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(8)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(9)</th>
      </tr>
      </tr>
    </thead>
    <tbody>
    <?php $no=0; ?>
    @foreach($prasarana_ps as $prasarana_ps_)
    <?php $no++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$no}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$prasarana_ps_->jenis_prasarana_ps}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$prasarana_ps_->jumlah_unit_prasarana}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$prasarana_ps_->total_luas}}</td>
        @foreach($milik as $miliki)
        @if($prasarana_ps_->id_kepemilikan_pras == $miliki->id_kepemilikan)
        <td style="border:1px solid #000; border-width: thin; text-align: center;">v</td>
        @else
        <td style="border:1px solid #000; border-width: thin; text-align: center;"></td>
        @endif
        @endforeach
        @foreach($kondisi as $konds)
        @if($prasarana_ps_->id_kondisi_pras == $konds->id_kondisi)
        <td style="border:1px solid #000; border-width: thin; text-align: center;">v</td>
        @else
        <td style="border:1px solid #000; border-width: thin; text-align: center;"></td>
        @endif
        @endforeach
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$prasarana_ps_->utilisasi}}</td>
     </tr>
     @endforeach
   </tbody>
 </table>
 <p style="text-align: justify;">Keterangan: SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama</p>
 <p style="text-align: justify;">5.3.3. Tuliskan data prasarana lain yang menunjang (misalnya toilet, kantin, tempat olah raga, ruang bersama, ruang mahasiswa, ruang himpunan mahasiswa/student center, poliklinik):</p>
 <p style="text-align: justify;">Data prasarana penunjang lainnya dapat dilihat pada tabel berikut dengan gambar dapat dilihat pada Gambar 5.2.</p>
  <table cellspacing="0" cellpadding="5">
    <thead>
      <tr>
        <th width="20px" rowspan="2"  style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="100px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Prasarana Penunjang</th>
        <th width="45px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Unit</th>
        <th width="50px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Total Luas (m<sup>2</sup>)</th>
        <th width="90px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Kepemilikan</th>
        <th width="90px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Kondisi</th>
        <th width="70px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Unit Pengelola</th>
        <tr>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">SD</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">SW</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Terawat</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tidak Terawat</th>
        </tr>
        <tr>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(6)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(7)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(8)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(9)</th>
      </tr>
      </tr>
    </thead>
    <tbody>
      <?php $nomor=0; ?>
      @foreach($penunjang_ps as $pras_penunjang)
      <?php $nomor++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$nomor}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$pras_penunjang->jenis_penunjang_ps}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$pras_penunjang->jumlah_unit}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$pras_penunjang->total_luas}}</td>
        @foreach($milik as $miliki)
        @if($pras_penunjang->id_kepemilikan_penunjang == $miliki->id_kepemilikan)
        <td style="border:1px solid #000; border-width: thin; text-align: center;">v</td>
        @else
        <td style="border:1px solid #000; border-width: thin; text-align: center;"></td>
        @endif
        @endforeach
        @foreach($kondisi as $konds)
        @if($pras_penunjang->id_kondisi_penunjang == $konds->id_kondisi)
        <td style="border:1px solid #000; border-width: thin; text-align: center;">v</td>
        @else
        <td style="border:1px solid #000; border-width: thin; text-align: center;"></td>
        @endif
        @endforeach
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$pras_penunjang->unit_pengelola}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <p style="text-align: justify;">Keterangan: SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama</p>
  <h4 style="text-align: justify;">5.4. Sarana Pelaksanaan Kegiatan Akademik</h4> 
  <p style="text-align: justify;">5.4.1. Pustaka (buku teks, karya ilmiah, dan jurnal; termasuk juga dalam bentuk CD-ROM dan media lainnya). Tuliskan rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang departemen</p>
  <p style="text-align: justify;">Berikut adalah pustaka yang terdapat di ruang baca departemen.</p> 
  <table cellspacing="0" cellpadding="5">
    <thead>
      <tr>
        <th width="300px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Pustaka</th>
        <th width="130px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Judul</th>
        <th width="130px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah <i>Copy</i></th>
        <!-- <tr>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
          <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
        </tr> -->
      </tr>
    </thead>
    <tbody>
      @foreach($pustaka as $pustaka_baca)
      <tr>
        <td style="border:1px solid #000; border-width: thin;text-align: left;">{{$pustaka_baca->jenis_pustaka}}</td>
        <td style="border:1px solid #000; border-width: thin;text-align: right;">{{$pustaka_baca->jumlah_judul}}</td>
        <td style="border:1px solid #000; border-width: thin;text-align: right;">{{$pustaka_baca->jumlah_copy}}</td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">Total</th>
        <th style="border:1px solid #000; border-width: thin; text-align: right;">{{$jum1}}</th>
        <th style="border:1px solid #000; border-width: thin; text-align: right;">{{$jum2}}</th>
      </tr>
    </tfoot>
  </table>
  <p style="text-align: justify;">Selain sumber pustaka tersebut mahasiswa juga memilik akses ke pustaka yang terdapat di perpustakaan Fakultas dan perpustakaan pusat IPB (http://perpustakaan.ipb.ac.id ).<br>
  Daftar jurnal/prosiding seminar yang tersedia/yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir.
  </p>
  <table cellpadding="5", cellspacing="0">
    <thead>
      <tr>
        <th width="140px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis</th>
        <th width="210px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nama Jurnal</th>
        <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rincian Nomor & Tahun</th>
        <th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah</th>
      </tr>
      <tr>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
      </tr>         
    </thead>
      <tbody>
        @foreach($jp_seminar as $jp_seminar_)
        <tr>
          <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$jp_seminar_->jenis_jp_seminar}}</td>
          <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$jp_seminar_->nama_jurnal}}</td>
          <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$jp_seminar_->rinci_no}} ({{$jp_seminar_->rinci_tahun}})</td>
          <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$jp_seminar_->jumlah}}</td>
        </tr>
        @endforeach
      </tbody>
  </table>

<!-- Standar 6 -->
    <h3 style="text-align: justify; font-family: arial, helvetica, sans-serif; ">STANDAR 6. PENDIDIKAN</h3>

     <!-- Kurikulum1 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.1 Kurikulum</strong></p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >Kurikulum pendidikan tinggi adalah seperangkat rencana dan pengaturan mengenai isi, bahan kajian, maupun bahan pelajaran serta cara penyampaiannya, dan penilaian yang digunakan sebagai pedoman penyelenggaraan kegiatan pembelajaran di perguruan tinggi.</p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >Kurikulum seharusnya memuat standar kompetensi lulusan yang terstruktur dalam kompetensi utama, pendukung dan lainnya yang mendukung  tercapainya tujuan, terlaksananya misi, dan terwujudnya visi program studi. Kurikulum memuat mata kuliah/modul/blok yang mendukung pencapaian kompetensi lulusan dan memberikan keleluasaan pada mahasiswa untuk memperluas wawasan dan memperdalam keahlian sesuai dengan minatnya, serta dilengkapi dengan deskripsi mata kuliah/modul/blok, silabus, rencana pembelajaran dan evaluasi. </p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" >Kurikulum harus dirancang berdasarkan relevansinya dengan tujuan, cakupan dan kedalaman materi, pengorganisasian yang mendorong terbentuknya hard skills dan keterampilan kepribadian dan perilaku (soft skills) yang dapat diterapkan dalam berbagai situasi dan kondisi.</p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.1.1 Kompetensi</strong></p>
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.1.1.1 Uraikan secara ringkas kompetensi utama lulusan</strong></p>

     @foreach ($kompetensi_utama_lulusan as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_kompetensi_utama_lulusan !!}</p>
    @endforeach

    <!-- Kurikulum2 -->
    <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.1.1.2 Uraikan secara ringkas kompetensi pendukung lulusan</strong></p>

     @foreach ($kompetensi_pendukung_lulusan as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_kompetensi_pendukung_lulusan !!}</p>
    @endforeach

    <!-- Kurikulum3 -->
    <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.1.1.3 Uraikan secara ringkas kompetensi lainnya/pilihan lulusan </strong></p>

     @foreach ($kompetensi_lainnya as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_kompetensi_lainnya !!}</p>
    @endforeach

    <!-- Kurikulum4 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.1.2 Struktur Kurikulum</strong></p>

     @foreach ($jumlah_sks_pss as $jumlah_sks_ps)
<p style=" text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10"> 6.1.2.1 Jumlah SKS PS (minimum untuk kelulusan) :  {{ $jumlah_sks_ps->sks_wajib_universitas+$jumlah_sks_ps->sks_wajib_fakultas+$jumlah_sks_ps->sks_wajib_mayor+$jumlah_sks_ps->sks_minor }} SKS yang tersusun sebagai berikut:</p>

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
  <!-- <br><br><br><br><br><br> -->
   <!-- Kurikulum5 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.1.2.2 Tuliskan struktur kurikulum berdasarkan urutan mata kuliah (MK) semester demi semester, dengan mengikuti format tabel berikut:</strong></p>
<table cellspacing="0">
                    <tr>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;">Smt</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;">Kode MK</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Nama Mata Kuliah</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Bobot sks</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >sks MK dalam Kurikulum</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Bobot Tugas</th>
                     <th colspan="6" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Kelengkapan</th>
                     <th style="border: 1px solid #000; border-bottom: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Unit/ Jur/</th>
                     <tr>
                       <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Inti</th>
                       <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Insti-<br>tusional</th>
                       <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Ya</th>
                       <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Tidak</th>
                       <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Deskripsi</th>
                       <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Silabus</th>
                       <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >SAP</th>
                     <th style="border: 1px solid #000; border-top: 0px;border-bottom: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Fak</th>
                       <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Ya</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Tidak</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Ya</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Tidak</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Ya</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Tidak</th>
                     <th style="border: 1px solid #000;border-top: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Penyelenggara</th>
                       </tr>
                     </tr>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(8)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(9)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(10)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(11)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(12)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(13)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(14)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">(15)</th>
                   </tr>
                   @foreach ($kurikulum5s as $kurikulum5)
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">{{ $kurikulum5->semesterr }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">{{ $kurikulum5->kode_mk_kurikulum5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 8;">{{ $kurikulum5->nama_mk_kurikulum5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">{{ $kurikulum5->jumlah_sks }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">{{ $kurikulum5->sks_inti }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">{{ $kurikulum5->sks_institusional }}</td>
                     @foreach($bobot_tugas as $bobot_tugasi)
                    @if($kurikulum5->id_bobottugas == $bobot_tugasi->id_bobot_tugas)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">V</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;"></td>
                    @endif
                  @endforeach
                     @foreach($kelengkapan_deskripsi as $kelengkapan_deskripsii)
                    @if($kurikulum5->id_kelengkapandeskripsi == $kelengkapan_deskripsii->id_kelengkapan_deskripsi)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">V</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;"></td>
                    @endif
                  @endforeach
                     @foreach($kelengkapan_silabus as $kelengkapan_silabusi)
                    @if($kurikulum5->id_kelengkapansilabus == $kelengkapan_silabusi->id_kelengkapan_silabus)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">V</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;"></td>
                    @endif
                  @endforeach
                     @foreach($kelengkapan_sap as $kelengkapan_sapi)
                    @if($kurikulum5->id_kelengkapansap == $kelengkapan_sapi->id_kelengkapan_sap)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">V</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;"></td>
                    @endif
                  @endforeach
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 8;">{{ $kurikulum5->penyelenggara }}</td>
                   </tr>
                      
                  @endforeach
                  <tr>
                    
                      <td colspan="4" style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;">Jumlah</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;"><?php echo $totalinti ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;"><?php echo $totalinstitusional ?></td>
                      <td colspan="9" style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 8;"></td>
                  </tr>
                     
                   </table>


   <!-- Kurikulum6 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.1.3 Tuliskan mata kuliah pilihan yang dilaksanakan dalam tiga tahun terakhir, pada tabel berikut:</strong></p>

     <table cellspacing="0"">
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;">Semester</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;">Kode MK</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Nama MK (Pilihan)</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Bobot sks</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Bobot Tugas*</th>
                     <th style="border: 1px solid #000; border-bottom: 0px; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Unit/ Jur/ Fak</th>
                     <tr>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Ya</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Tidak</th>
                     <th style="border: 1px solid #000;border-top: 0px; padding: 5px; text-align: center; background-color:#daeef3;font-family : arial, helvetica, sans-serif; font-size: 10;" >Pengelola</th>
                     </tr>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(7)</th>
                   </tr>

                  @foreach ($kurikulum6s as $kurikulum6)
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum6->semesterr }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum6->kode_mk_kurikulum6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum6->nama_mk_kurikulum6 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum6->jumlah_sks }}</td>
                     @foreach($bobot_tugas as $bobot_tugasi)
                        @if($kurikulum6->id_bobottugas == $bobot_tugasi->id_bobot_tugas)
                            <td style="border:1px solid #000; border-width: thin; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">V</td>
                        @else
                            <td style="border:1px solid #000; border-width: thin;text-align: center;"></td>
                        @endif
                    @endforeach  
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum6->pengelola }}</td>
                   </tr>
                    @endforeach
                    
                   </table>

                    <p style="text-align: justify;font-family : arial, helvetica, sans-serif; font-size: 10;">* beri tanda V pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) > 20%.</p>

  <!-- <br><br><br><br><br><br> -->
        <!-- Kurikulum7 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.1.4 Tuliskan substansi praktikum/praktek yang mandiri ataupun yang merupakan bagian dari mata kuliah tertentu, dengan mengikuti format di bawah ini:</strong></p> 

     <table cellspacing="0">
                    
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">No</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">Kode MK</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">Nama Praktikum/<br>Praktek</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">Bobot SKS Praktikum</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;" >Isi Praktikum/Praktek</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;" >Jumlah</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;" >Tempat/Lokasi</th>
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;" >Judul/Modul</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;" >Jam Pelaksanaan</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;border-top: 0px;font-family : arial, helvetica, sans-serif; font-size: 9;" >Pertemuan</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;border-top: 0px;font-family : arial, helvetica, sans-serif; font-size: 9;" >Praktikum/Praktek</th>
                     </tr>
                   </tr>
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">(8)</th>
                   </tr>
                   <?php $no = 0;?>
                  @foreach ($kurikulum7s as $kurikulum7)
                 <?php $no++ ;?>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $no }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->kode_mk }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->nama_praktikum_kurikulum7 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->jumlah_sks }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->judul_praktikum }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->jam_pelaksanaan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->jumlah_pertemuan_praktikum }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 9;">{{ $kurikulum7->tempat_praktikum }}</td>
                   </tr>
                    @endforeach
                   </table>    



        <!-- Kurikulum8 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.2 Peninjauan Kurikulum dalam 5 Tahun Terakhir </strong></p>  

      <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>Jelaskan mekanisme peninjauan kurikulum dan pihak-pihak yang dilibatkan dalam proses peninjauan tersebut.   </strong></p> 

     @foreach ($mekanisme_peninjauan_kurikulum as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_mekanisme_peninjauan_kurikulum !!}</p>
    @endforeach  

    <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>Tuliskan hasil peninjauan tersebut, mengikuti format tabel berikut. </strong></p> 

     <table cellspacing="0">
                    <tr>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">No.</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">No. MK</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Nama MK</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >MK Baru / Lama / Hapus</th>
                     <th colspan="4" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Perubahan pada</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Alasan</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Atas</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Berlaku</th>
                     <tr>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Silabus/SAP</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Buku Ajar</th>
                     <th style="border: 1px solid #000;border-top: 0px;border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Peninjauan</th>
                     <th style="border: 1px solid #000;border-top: 0px;border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Usulan / Masukan</th>
                     <th style="border: 1px solid #000;border-top: 0px;border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >mulai</th>
                     <tr>
                      <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Ya</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Tidak</th>
                      <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Ya</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Tidak</th>
                     <th style="border: 1px solid #000;border-top: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" ></th>
                     <th style="border: 1px solid #000;border-top: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >dari</th>
                     <th style="border: 1px solid #000;border-top: 0px; padding: 5px; background-color:#daeef3; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;" >Sem./Th.</th>
                     </tr>
                     </tr>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(8)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(9)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(10)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">(11)</th>
                   </tr>
                  <?php $no = 0;?>
                  @foreach ($kurikulum9s as $kurikulum9)
                 <?php $no++ ;?>
                  <tr>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $no }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum9->kode_mk_kurikulum9 }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum9->nama_mk_kurikulum9 }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum9->mk_blh_kurikulum9 }}</td>
                     @foreach($perubahan_silabus as $perubahan_silabusi)
                    @if($kurikulum9->id_perubahan_pada_silabus == $perubahan_silabusi->id_perubahan_silabus)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">V</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;"></td>
                    @endif
                  @endforeach
                     @foreach($perubahan_buku_ajar as $perubahan_buku_ajari)
                    @if($kurikulum9->id_perubahan_pada_buku_ajar == $perubahan_buku_ajari->id_perubahan_buku_ajar)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">V</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;"></td>
                    @endif
                  @endforeach
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum9->alasan_peninjauan }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum9->usulan }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;font-family : arial, helvetica, sans-serif; font-size: 10;">{{ $kurikulum9->berlaku }}</td></td>
                   </tr>
                    @endforeach
      </table>    
          
        <h4>5.3 Pelaksanaan Proses Pembelajaran</h4>
        <p style="text-align: justify;">Sistem pembelajaran dibangun berdasarkan perencanaan yang relevan dengan tujuan, ranah belajar dan hierarkinya.</p>
        <p style="text-align: justify;">Pembelajaran dilaksanakan menggunakan berbagai strategi dan teknik yang menantang, mendorong mahasiswa untuk berpikir kritis bereksplorasi, berkreasi dan bereksperimen dengan memanfaatkan aneka sumber.</p>
        <p style="text-align: justify;">Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki secara periodik kegiatan perkuliahan (kehadiran dosen dan mahasiswa), penyusunan materi perkuliahan, serta penilaian hasil belajar.
        </p>
        <h4>5.3.1 Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan</h4>
       <p style="text-align: justify;">Jelaskan mekanisme penyusunan materi kuliah dan monitoring perkuliahan, antara lain kehadiran dosen dan mahasiswa, serta materi kuliah.</p>
          @foreach($mekanisme as $mekanismee)
            <?php echo ($mekanismee->mekanisme); ?>
          @endforeach

<!-- Stanndar 7 -->
        <h3>STANDAR 7. PENELITIAN</h3>
        <h4 style="text-align: justify;">7.1 Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS</h4>
        <p style="text-align: justify;">7.1.1 Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS,yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:</p>
        <p style="text-align: justify;"><strong>Tabel 7.1</strong> Data Penelitian Program Studi {{$pene[0]->nama_departemen}}</p>
        <table cellspacing="0" >
          <tr>  
            <th></th>
            <th rowspan="2" width="200px" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Sumber Pembiayaan</th>
            <th colspan="3" width="180px" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Judul Penelitian</th>
            <th colspan="3" width="180px" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Dana(juta Rp)</th>
            <th></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2</th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1</th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS</th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2</th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1</th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS</th>
            <th rowspan="1"></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
          <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(1)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(2)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(3)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(4)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(5)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(6)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(7)</th>
            <th rowspan="1"></th>
        </tr>
        <tr>
          <th rowspan="1"></th>
          <td rowspan="1" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Pembiayaan sendiri oleh peneliti</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul1}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul6}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul11}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana1}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana6}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana11}}</td>
          <th rowspan="1"></th>
        </tr>
        <tr>
          <th rowspan="1"></th>
          <td rowspan="1" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">PT yang bersangkutan</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul2}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul7}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul12}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana2}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana7}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana12}}</td>
          <th rowspan="1"></th>
        </tr>
        <tr>
          <th rowspan="1"></th>
          <td rowspan="1" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Depdiknas</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul3}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul8}}</td>
          <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul13}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana3}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana8}}</td>
          <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana13}}</td>
          <th rowspan="1"></th>
        </tr>
        <tr>
          <th rowspan="1"></th>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Institusi dalam negeri di luar Depdiknas</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul4}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul9}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul14}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana4}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana9}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana14}}</td>
          <th></th>
        </tr>
        <tr>
          <th rowspan="1"></th>
          <td rowspan="1" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Institusi luar negeri</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul5}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul10}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul15}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana5}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana10}}</td>
          <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana15}}</td>
          <th rowspan="1"></th>
        </tr>
        <tr>
            <th></th>
            <td colspan="20" style="font-size: 10;font-family: arial, helvetica, sans-serif;">&nbsp;&nbsp;Catatan:(*) dokumen pendukung disediakan pada saat asesmen lapangan.</td>
                   </tr>
        </table>    
          <p style="text-align: justify;">7.1.2 Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?<br>
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
            <p style="text-align: justify;">Mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen selama tiga tahun terakhir yang disajikan dalam tabel berikut:</p>
            <table cellspacing="0" >
        <tr>  
            <th></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No</th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Nama Dosen</th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Topik Penelitian</th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Mahasiswa yang Terlibat</th>
            <th></th>
        </tr>
        <tr>
          <th rowspan="1"></th>
          <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(1)</th>
          <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(2)</th>
          <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(3)</th>
          <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(4)</th>
          <th></th>
        </tr>
        <?php $no = 0;?>
         @foreach ($mahasiswa_penelitian as $terlibatpenelitian)
         <?php $no++ ;?>
         @if($terlibatpenelitian->jumlah_mahasiswa!=0)
        <tr>
          <th></th>
          <td style="border:1px solid #000;text-align: center; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $no }}.</td>
          <td style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $terlibatpenelitian->nama_peneliti }}</td>
          <td style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $terlibatpenelitian->judul_penelitian }}</td>
          <td style="border:1px solid #000;text-align: center; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $terlibatpenelitian->jumlah_mahasiswa }}</td>
          <td></td>
          @endif
          @endforeach
        </tr>
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
<!-- Standar 8 -->
  <h3>STANDAR 8. PENGABDIAN KEPADA MASYARAKAT</h3>
  <h4>8.1 Pengabdian Kepada Masyarakat</h4>
    <p style="text-align: justify;">8.1.1 Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS denganmengikuti format tabel berikut:</p>
    <p style="text-align: justify;"><strong>Tabel 8.1</strong> Data Pengabdian Kepada Masyarakat Program Studi {{$peng[0]->nama_departemen}}</p>
    <table cellspacing="0" >
      <tr>  
            <th></th>
            <th rowspan="2" width="200px" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Sumber Pembiayaan</th>
            <th colspan="3" width="180px" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Judul Penelitian</th>
            <th colspan="3" width="180px" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Dana(juta Rp)</th>
            <th></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2</th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1</th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS</th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2</th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1</th>
            <th rowspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS</th>
            <th rowspan="1"></th>
        </tr>
        <tr>
            <th rowspan="1"></th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(1)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(2)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(3)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(4)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(5)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(6)</th>
            <th rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">(7)</th>
            <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Pembiayaan sendiri oleh peneliti</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul1}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul6}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul11}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana1}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana6}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana11}}</td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">PT yang bersangkutan</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul2}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul7}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul12}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana2}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana7}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana12}}</td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Depdiknas</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul3}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul8}}</td>
        <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul13}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana3}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana8}}</td>
        <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana13}}</td>
        <th rowspan="1"></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Institusi dalam negeri di luar Depdiknas</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul4}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul9}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul14}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana4}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana9}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana14}}</td>
        <th></th>
        </tr>
        <tr>
        <th rowspan="1"></th>
        <td rowspan="1" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Institusi luar negeri</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul5}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul10}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaljudul15}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana5}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana10}}</td>
        <td rowspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{$totaldana15}}</td>
        <th rowspan="1"></th>
        </tr>
        </tr>    
</table>
       <p style="text-align: justify;"> 8.1.2 Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?<br>
        @foreach ($redaksipengabdian as $redaksiPeng) 
          @if($redaksiPeng->redaksi_pengabdian == 1)
            V Ya<br>
            Tidak<br>
            Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat.
            <br>
            Berikut adalah contoh keterlibatan mahasiswa dan bagaimana tingkat partisipasi dan manfaatnya pada kegiatan pelayanan/pengabdian kepada masyarakat:<br>
            {!!$redaksiPeng->partisipasi!!}
          @else
            Ya<br>
            V Tidak 
          @endif
          @if($redaksiPeng->redaksi_pengabdian == 1)
          <br>
          Partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat, dilampirkan pada tabel berikut:</p>          
      <table cellspacing="0" >
        <tr>  
            <th></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No</th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Kegiatan</th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Institusi</th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Tahun</th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Mahasiswa yang Terlibat</th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Keterlibatan Mahasiswa</th>
            <th></th>
        </tr>
        <?php $no = 0;?>
         @foreach ($mahasiswa_pengabdian as $terlibatpengabdian)
         @if($terlibatpengabdian->jumlah_mahasiswa_peng!=0)
         <?php $no++ ;?>
         <tr>
              <th></th>
              <td style="border:1px solid #000;padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $no }}.</td>
              <td style="border:1px solid #000;padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $terlibatpengabdian->judul_pengabdian }}</td>
              <td style="border:1px solid #000;padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $terlibatpengabdian->institusi }}</td>
              <td style="border:1px solid #000;padding: 5px;text-align: center; font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $terlibatpengabdian->tahun_pengabdian }}</td>
              <td style="border:1px solid #000;padding: 5px;text-align: center; font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $terlibatpengabdian->jumlah_mahasiswa_peng }}</td>
              <td style="border:1px solid #000;padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $terlibatpengabdian->keterlibatan_mahasiswa }}</td>
              <td></td>
               @endif
               @endforeach
              
            </tr>
            @endif
            @endforeach
        </table>
<!-- Standar 9 -->
      <h3>STANDAR 9. HASIL DAN CAPAIAN</h3>
      <p style="text-align: justify;"><strong>Tabel 9.1</strong> Data Hasil Pendidikan {{$hapen[0]->nama_departemen}}</p>
      <table cellspacing="0" cellpadding="5">
        <thead>
        <tr>  
          <th width="20px" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;">No</th>
          <th width="560px" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;">Karya</th>
        </tr>
        </thead>
        <tbody>
        <?php $no = 0;?>
         @foreach ($hasil_pendidikan as $hasilPendidikan)
        <?php $no++ ;?>
        <tr>
          @if($hasilPendidikan->id_haki==1)
          <td style="border:1px solid #000; padding: 5px;text-align: center;">{{ $no }}.</td>
          <td style="border:1px solid #000; padding: 5px;">{{$hasilPendidikan->judul_hasilPendidikan}}</td>
          @endif
          @endforeach
        </tr>    
        </tbody>
      </table>
        <p style="text-align: justify;">9.2 Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</p>
        <p style="text-align: justify;"><strong>Tabel 9.2</strong> Data Hasil Penelitian {{$hapen[0]->nama_departemen}}</p>
      <table cellspacing="0" cellpadding="5">
        <thead>
        <tr>  
          <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;">No</th>
          <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;">Judul Hasil Penelitian dan Hasil Pengabdian</th>
          <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;">Nama Dosen</th>
          <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;">Dipublikasi pada</th>
          <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;">Tahun Publikasi</th>
          <th colspan="3" style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;">Tingkat</th>
        <!-- </tr> -->
        <tr>
          <th style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial,sans-serif;">Lokal</th>
          <th style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, sans-serif;">Nasional</th>
          <th style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, sans-serif;">Internasional</th>
        <!-- </tr>            -->
        <tr>
          <th style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, sans-serif;">(1)</th>
          <th style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, sans-serif;">(2)</th>
          <th style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, sans-serif;">(3)</th>
          <th style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, sans-serif;">(4)</th>
          <th style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, sans-serif;">(5)</th>
          <th style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, sans-serif;">(6)</th>
          <th style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, sans-serif;">(7)</th>
          <th style="border:1px solid #000; background-color:#daeef3; text-align: center;font-size: 9;font-family: arial, sans-serif;">(8)</th>
        </tr>
      </tr>
    </tr>
      </thead>      
    <tbody>
    <?php $no = 0;?>
     @foreach ($hasil_penelitian as $hasilPenelitian)
     <?php $no++ ;?>
        <tr>
          <td style="border:1px solid #000; text-align: center; font-size: 9;">{{ $no }}.</td>
          <td style="border:1px solid #000;font-size: 9;"> {{$hasilPenelitian->judul_hasilPenelitian}}</td>
          <td style="border:1px solid #000; font-size: 9;"> {{$hasilPenelitian->nama_dosenPenelitian}}</td>
          <td style="border:1px solid #000; font-size: 9;">{{$hasilPenelitian->dipublikasi_pada}}</td>
          <td style="border:1px solid #000;font-size: 9;">{{$hasilPenelitian->tahun_publikasi}}</td>
          @foreach($tingkat as $tingkatt)
          @if($hasilPenelitian->id_tingkat == $tingkatt->id_tingkatt)
          <td style="border:1px solid #000;font-size: 9;">V</td>
          @else
          <td style="border:1px solid #000;font-size: 9;"></td>
          @endif
          @endforeach
          @endforeach
        <tr>
    </tbody>          
    <tfoot>
      <tr>
        <th style="border:1px solid #000; text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;">Total</th>
        <th style="border:1px solid #000; text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;">{{$totaljudul}}</th>
        <th colspan="3" style="border:1px solid #000;text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;"></th>
        <th style="border:1px solid #000; text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;">{{$na}}</th>
        <th style="border:1px solid #000; text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;">{{$nb}}</th>
        <th style="border:1px solid #000; text-align: center;font-size: 9;font-family: arial, helvetica, sans-serif;">{{$nc}}</th>
      </tr>
    </tfoot>        
  </table>

 <footer>
    <h4>Borang 3A Akreditasi Program Studi {{$dept[0]->nama_departemen}}-IPB</h4>
  <script type="text/php">
    if (isset($pdf)) {
        $x = 497;
        $y = 793;
        $text = "{PAGE_NUM} / {PAGE_COUNT}";
        $font = "Arial";
        $size = 11;
        $color = array(0,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }
</script>
</footer>
</body>
</html>