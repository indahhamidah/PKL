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
  <br><br><br><br><br><br>
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

  <br><br><br><br><br><br>
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
<br><br><br><br><br><br><br><br><br><br>
    <h4>5.3 Pelaksanaan Proses Pembelajaran</h4>
    <p style="text-align: justify;">Sistem pembelajaran dibangun berdasarkan perencanaan yang relevan dengan tujuan, ranah belajar dan hierarkinya.<br>
    Pembelajaran dilaksanakan menggunakan berbagai strategi dan teknik yang menantang, mendorong mahasiswa untuk berpikir kritis bereksplorasi, berkreasi dan bereksperimen dengan memanfaatkan aneka sumber.<br>
    Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki secara periodik kegiatan perkuliahan (kehadiran dosen dan mahasiswa), penyusunan materi perkuliahan, serta penilaian hasil belajar.
    </p>
    <h4>5.3.1 Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan</h4>
    <p style="text-align: justify;">
    Jelaskan mekanisme penyusunan materi kuliah dan monitoring perkuliahan, antara lain kehadiran dosen dan mahasiswa, serta materi kuliah.
    </p>
    @foreach($mekanisme as $mekanismee)
      <?php echo ($mekanismee->mekanisme); ?>
    @endforeach

  <footer>
    <p>Standar 6 – Pendidikan
    </p>
  </footer>
</body>
</html>