<!DOCTYPE html>
<html>
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
	<title>Standar 5 Keuangan, Sarana dan Prasarana serta Sistem Informasi Program Studi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
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
        <th width="90px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber Dana</th>
        <th width="160px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Dana</th>
        <th width="300px" colspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana (Juta Rupiah)</th>
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
        <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: center;">Total</th>
        <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{number_format($total[0],2)}}</th>
        <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{number_format($total[1],2)}}</th>
        <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{number_format($total[2],2)}}</th>
      </tr>
    </tfoot>
	</table>
	<!-- penggunaan dana -->
	<p>5.2.1b. Penggunaan dana:</p>
	<table cellpadding="8", cellspacing="0">
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
  <table cellpadding="8", cellspacing="0">
		<thead>
			<tr>
        <th width="20px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="25px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tahun</th>
        <th width="130px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Judul Penelitian</th>
        <th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Dosen yang Terlibat</th>
        <th width="70px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber dan Jenis Dana</th>
        <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana (Juta Rupiah)</th>
      </tr>
      <tr>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(6)</th>
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
	<table cellpadding="8", cellspacing="0">
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
<h3>5.3 Prasarana</h3>
<p>6.3.1. Tuliskan data ruang kerja dosen tetap yang bidang keahliannya sesuai dengan departemen:</p>
<table cellpadding="8", cellspacing="0">
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
	<table cellpadding="8" cellspacing="0">
		<thead>
		  <tr>
		    <th width="20px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
		    <th width="120px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Prasarana</th>
		    <th width="45px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Unit</th>
		    <th width="50px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Total Luas (m<sup>2</sup>)</th>
		    <th width="90px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Kepemilikan</th>
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
 <p style="text-align: justify;">5.3.3.	Tuliskan data prasarana lain yang menunjang (misalnya toilet, kantin, tempat olah raga, ruang bersama, ruang mahasiswa, ruang himpunan mahasiswa/student center, poliklinik):</p>
 <p style="text-align: justify;">Data prasarana penunjang lainnya dapat dilihat pada tabel berikut dengan gambar dapat dilihat pada Gambar 5.2.</p>
 	<table cellspacing="0" cellpadding="8">
    <thead>
      <tr>
        <th width="20px" rowspan="2"	style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
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
  <h3 style="text-align: justify; font-size: 15px">5.4. Sarana Pelaksanaan Kegiatan Akademik</h3> 
	<p style="text-align: justify;">6.4.1.   Pustaka (buku teks, karya ilmiah, dan jurnal; termasuk juga dalam bentuk CD-ROM dan media lainnya). Tuliskan rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang departemen</p>
	<p style="text-align: justify;">Berikut adalah pustaka yang terdapat di ruang baca departemen.</p> 
	<table cellspacing="0" cellpadding="8">
		<thead>
			<tr>
				<th width="300px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Pustaka</th>
				<th width="130px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Judul</th>
				<th width="130px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah <i>Copy</i></th>
				<tr>
					<th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
					<th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
					<th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
				</tr>
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
  <table cellpadding="8", cellspacing="0">
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
	<footer>
    <p>Standar 5 – Keuangan, Prasarana, Sarana dan Sistem Informasi
    </p>
	</footer>
</body>
</html>