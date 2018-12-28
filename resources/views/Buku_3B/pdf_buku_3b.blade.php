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
	<title>Buku 3B Borang Akreditasi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
	<!-- STANDAR 1 -->
	<h3>STANDAR 1. VISI, MISI, TUJUAN, DAN STRATEGI</h3>
	@foreach ($vmts as $visi)
    <p style="text-align: justify;">{!! $visi->visimisi !!}</p>
  @endforeach
  <!-- STANDAR 2 -->
  <h3 style="text-align: justify;">STANDAR 2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN DAN PENJAMINAN MUTU</h3>
  	@foreach ($tamongma as $tamong)
     	{!! $tamong->tamongjama !!}
    @endforeach
	  <p>2.1.1 Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir</p>
    <p><strong>Tabel 2.1</strong> Kerjasama dengan Instansi Dalam Negeri Program Studi {{$kerdal[0]->nama_departemen}}</p>
    <table cellspacing="0" >
      <tr>
        <th></th>
        <th rowspan="4" colspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No.</th>
        <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Nama Instansi</th>
        <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jenis Kegiatan</th>
        <th rowspan="2" colspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Kurun Waktu Kerja Sama</th>
        <th rowspan="4" colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Manfaat yang Telah Diperoleh</th>
      </tr>
      <tr>
	      <tr>
	        <th></th>
	        <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"> Tahun Mulai</th>
	        <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Tahun Akhir</th>
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
          <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">{{ $no }}.</td>
          <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{$kerjasamadalam->nama_instansi}}</td>
          <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{$kerjasamadalam->jenis_kegiatan}}</td>
          <td colspan="1" style="border:1px solid #000;text-align: center; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{$kerjasamadalam->tahun_mulai}}</td>
          <td colspan="1" style="border:1px solid #000;text-align: center; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{$kerjasamadalam->tahun_akhir}}</p>
          <td colspan="3" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">{{$kerjasamadalam->manfaat}}</p><
        @endforeach
        </tr>   
      </tr>
		</table>
<!-- STANDAR 3 -->
		<h3>STANDAR 3. MAHASISWA</h3> 
		<h4>3.1 Mahasiswa</h4>
		<table cellspacing="0" cellpadding="5">
      <tr>
        <th colspan="1" align=left valign=top></th>
        <th colspan="12" style="text-align: justify;"><strong>Tabel 3.1</strong> Jumlah Mahasiswa FMIPA tahun akademik <?php echo Carbon::now()->startOfYear()->subYear(1)->format('Y') ?>/<?php echo Carbon::now()->startOfYear()->format('Y') ?> menurut Tipe Program dan Jenis Mahasiswa per Program Studi</th>
      </tr>
      <tr>
      	<th></th>
        <th colspan="12" align=left valign=top><u>Catatan:</u></th>
      </tr>
      <tr>
      	<th></th>
        <td colspan="12" align=justify valign=top>(1)  Mahasiswa program reguler adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</td>
      </tr>
      <tr>
        <th></th>
        <td colspan="12" align=justify valign=top>(2)  Mahasiswa program non-reguler adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</td>
      </tr>
    </tr>
    <tr>
    	<th></th>
      <td colspan="12" align=justify valign=top>(3)  Mahasiswa transfer adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</td>
    </tr>
    <tr>
      <th></th>
      <th colspan="12" align=left valign=top><u>Keterangan:</u></th>
    </tr>
    <tr>
    	<th></th>
      <td colspan="12" align=justify valign=top><b>G1 PS1</b>-Statistika, <b>G2 PS2</b>-Meteorologi Terapan, <b>G3 PS3</b>-Biologi, <b>G4 PS4</b>-Kimia, <b>G5 PS5</b>-Matematika, <b>G6 PS6</b>-Ilmu Komputer, <b>G7 PS7</b>-Fisika, <b>G8 PS8</b>-Biokimia, <b>G9 PS9</b>-Aktuaria</td>
    </tr>
    <tr>
    	<th></th>
      <th rowspan="4"  style="border:1px solid #000; background-color:#daeef3;text-align: center">Tipe</th>
      <th rowspan="4" style="border:1px solid #000; background-color:#daeef3;text-align: center">Jenis Mahasiswa</th>
      <th rowspan="2" colspan="9" style="border:1px solid #000; background-color:#daeef3;text-align: center">Jumlah Mahasiswa pada PS:</th>
      <th rowspan="2" style="border:1px solid #000; border-bottom:0px; background-color:#daeef3;text-align: center">Total<br>Mahasiswa</th>
    </tr>
            <tr>
              <tr>
            <th></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">PS1<br> G1</th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">PS2<br> G2</th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">PS3<br> G3</th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">PS4<br> G4</th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">PS5<br> G5</th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">PS6<br> G6</th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">PS7<br> G7</th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">PS8<br> G8</th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center">PS9<br> G9</th>
            <th rowspan="2" style="border:1px solid #000; border-top:0px; background-color:#daeef3;text-align: center">pada<br>Fakultas</th>
            </tr></tr>
            <tr>
            <tr>
             <th></th>
             <td rowspan="3" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;">Program reguler</td>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;">1. Mahasiswa baru bukan transfer</td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('mbt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('mbt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('mbt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('mbt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('mbt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('mbt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('mbt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('mbt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('mbt_reguler') ?></td>
             <th rowspan="1"  align=right style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->sum('mbt_reguler') ?></th>
            </tr>
            <tr>
             <th></th>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;">2. Mahasiswa baru transfer</td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('mt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('mt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('mt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('mt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('mt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('mt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('mt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('mt_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('mt_reguler') ?></td>
             <th rowspan="1" align=right style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->sum('mt_reguler') ?></th>
            </tr>
            <tr>
             <th></th>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;">3. Total Mahasiswa reguler (Student Body)</td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('total_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('total_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('total_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('total_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('total_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('total_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('total_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('total_reguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('total_reguler') ?></td>
             <th rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->sum('total_reguler') ?></th>
            </tr>
            <tr>
             <th></th>
             <td rowspan="3" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;">Program non-reguler</td>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;">1. Mahasiswa baru bukan transfer</td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('mbt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('mbt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('mbt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align="right"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('mbt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('mbt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('mbt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('mbt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('mbt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('mbt_nonreguler') ?></td>
             <th rowspan="1" align=right style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->sum('mbt_nonreguler') ?></th>
            </tr>
            <tr>
             <th></th>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;">2. Mahasiswa baru transfer</td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('mt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('mt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('mt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('mt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('mt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('mt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('mt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('mt_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('mt_nonreguler') ?></td>
             <th rowspan="1" align=right style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->sum('mt_nonreguler') ?></th>
            </tr>
            <tr>
             <th></th>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;">3. Total Mahasiswa non-reguler (Student Body)</td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('total_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('total_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('total_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('total_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('total_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('total_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('total_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('total_nonreguler') ?></td>
             <td rowspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('total_nonreguler') ?></td>
             <th rowspan="1" align=right style="border:1px solid #000; border-width: thin; background-color:#255255255;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->sum('total_nonreguler') ?></th>
            </tr>
            <tr>
            <th></th>
            <th colspan="2" align="right" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="text-align: center;">Total</th>
            <th colspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum(DB::raw('mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler')) ?></th>
            <th colspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum(DB::raw('mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler')) ?></th>
            <th colspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum(DB::raw('mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler')) ?></th>
            <th colspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum(DB::raw('mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler')) ?></th>
            <th colspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum(DB::raw('mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler')) ?></th>
            <th colspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum(DB::raw('mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler')) ?></th>
            <th colspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum(DB::raw('mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler')) ?></th>
            <th colspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum(DB::raw('mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler')) ?></th>
            <th colspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum(DB::raw('mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler')) ?></th>
            <th colspan="1" align="right" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><?php echo DB::table('jumlahs')->whereYear( 'tahun',date('Y'))->sum(DB::raw('mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler')) ?></th>
            </tr>
    </table>

    	@foreach ($redaksiJumlah as $redaksijum)
        {!! $redaksijum->redaksi_jumlah!!}
      @endforeach
      <h4>3.2 Lulusan</h4>
				<table cellpadding="5" cellspacing="0">
					<tr>
            <th colspan="1" align=left valign=top></th>
             <td colspan="4" style="text-align: left" style="font-size:16px"><strong>Tabel 3.2 </strong>Rata-rata Masa Studi dan IPK Lulusan FMIPA menurut Program Studi periode TA <?php echo Carbon::now()->startOfYear()->subYear(3)->format('Y') ?>/<?php echo Carbon::now()->startOfYear()->subYear(2)->format('Y') ?>, <?php echo Carbon::now()->startOfYear()->subYear(2)->format('Y') ?>/<?php echo Carbon::now()->startOfYear()->subYear(1)->format('Y') ?>, dan <?php echo Carbon::now()->startOfYear()->subYear(1)->format('Y') ?>/<?php echo Carbon::now()->startOfYear()->format('Y') ?></td>
           </tr>
            <tr>
            <th></th>
            <th rowspan="2" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="text-align: center;">Program Studi</th>
            <th colspan="2" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;">MASA STUDI</th>
            <th rowspan="1" style="border:1px solid #000; border-bottom:0px; border-bottom:0px; border-width: thin; background-color:#daeef3;text-align: center">Rata-rata</th>
            </tr>
            <tr>
            <th></th>
            <th colspan="1" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;">(Bulan)</th>
            <th colspan="1" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;">(Tahun)</th>
            <th rowspan="1" style="border:1px solid #000; border-top:0px; border-bottom:0px; border-width: thin; background-color:#daeef3;text-align: center"> IPK Lulusan</th>
            <!-- <th></th> -->
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">G1 PS1-STATISTIKA</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->avg('total_bulan'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->avg('total_tahun'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->avg('ipk'),2) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">G2 PS2-METEOROLOGI TERAPAN</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->avg('total_bulan'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->avg('total_tahun'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->avg('ipk'),2) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">G3 PS3-BIOLOGI</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->avg('total_bulan'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->avg('total_tahun'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->avg('ipk'),2) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">G4 PS4-KIMIA</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->avg('total_bulan'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->avg('total_tahun'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->avg('ipk'),2) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">G5 PS5-MATEMATIKA</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->avg('total_bulan'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->avg('total_tahun'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->avg('ipk'),2) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">G6 PS6-ILMU KOMPUTER</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->avg('total_bulan'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->avg('total_tahun'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->avg('ipk'),2) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">G7 PS7-FISIKA</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->avg('total_bulan'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->avg('total_tahun'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->avg('ipk'),2) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">G8 PS8-BIOKIMIA</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->avg('total_bulan'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->avg('total_tahun'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->avg('ipk'),2) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;">G9 PS9-AKTUARIA</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->avg('total_bulan'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->avg('total_tahun'),2) ?></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=right><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->avg('ipk'),2) ?></td>
            </tr>
            <tr>
            <th></th>
            <th colspan="1" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=right>RATA-RATA FMIPA</th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=right><?php echo number_format($rata_bln,2) ?></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=right><?php echo number_format($rata_thn,2) ?></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=right;><?php echo number_format($rata_ipk,2) ?></th>
            </tr>
            <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            </tr>
            <tr>
            <td></td>
            <td colspan="2"><u>Catatan:</u> * Belum ada lulusan</td>
            </tr>;
				</table>
        @foreach ($redaksiLulusan as $redaksilus)
           {!! $redaksilus->redaksi_lulusan!!}
         @endforeach  
         <p style="text-align: justify;"><stong>Tabel 3.3</stong> Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</p>  
         <table cellspacing="0" cellpadding="5">
      <tr>  
          <th width="50px" colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;" style="text-align: center;">No</th>
          <th width="300px" colspan="1" style="border:1px solid #000; border-width: thin; background-color:#daeef3;">Kegiatan</th>
          <th width="100px" colspan="1" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Tahun</th>
          <th style="border:1px;"></th>
        </tr>
    <?php $no = 0;?>
     @foreach ($kegiatans as $kegiatan)
     <?php $no++ ;?>
        <tr>
          <td colspan="1" style="border:1px solid #000;text-align: center;">{{ $no }}.</td>
          <td colspan="1" style="border:1px solid #000;">{{$kegiatan->nama_kegiatan}}</td>
          <td colspan="1" style="border:1px solid #000;text-align: center">{{$kegiatan->tahun_kegiatan}}</td>
          <th style="border:1px;"></th>
          @endforeach
          <tr>
            <td colspan="12"><u>Catatan:</u> pembinaan bidang olahraga dan seni berada di bawah unit kegiatan mahasiswa.</td>
          </tr>
      </table>
<!-- STANDAR 4 -->
		<h3 style="text-align: justify;">STANDAR 4. SUMBER DAYA MANUSIA</h3>
     <!-- SDM1 -->
     <h3>4.1 Dosen Tetap</h3>

     <p style="text-align: justify;">4.1.1 Jumlah dosen tetap yang bidang keahliannya sesuai dengan masing-masing PS di lingkungan FMIPA IPB, berdasarkan jabatan fungsional dan pendidikan tertinggi.</p>
     <p style="text-align: justify;" >Tabel 4.1 Statistik Dosen Tetap menurut Jabatan Fungsional dan Program Studi</p>
      <table cellspacing="0" cellpadding="5">
        <tr>
          <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">No.</th>
          <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Hal</th>
          <th colspan="9" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Jumlah Dosen Tetap yang Bertugas pada Program Studi:</th>
          <th style="border: 1px solid #000; border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;" >Total di</th>
        	<tr>
        		<th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-1<br>G1</th>
            <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-2<br>G2</th>
            <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-3<br>G3</th>
            <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-4<br>G4</th>
            <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-5<br>G5</th>
            <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-6<br>G6</th>
            <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-7<br>G7</th>
            <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-<br>8<br>G8</th>
            <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-<br>9<br>G9</th>
            <th style="border: 1px solid #000; border-top: 0px; padding: 5px; background-color:#daeef3; text-align: center;" >Fakultas</th>
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
          <th style="border: 1px solid #000; padding: 5px; text-align: center;">(12)</th>
        </tr>
          @foreach ($sdmf2s as $sdmf2)
        <tr>
        	<th style="border: 1px solid #000; padding: 5px; text-align: center;">A</th>
          <th style="border: 1px solid #000; padding: 5px; text-align: left;">Jabatan Fungsional :</th>
          <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
          <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
          <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
          <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
          <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
          <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
          <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
          <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
          <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
          <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
        </tr>
        <tr>
        	<td style="border: 1px solid #000; padding: 5px; text-align: center;">0</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: left;">Dosen PNS/CPNS*</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_s3_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_s2_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_s1_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_d4_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_d3_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_d2_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_d1_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_sma_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_unit_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_s3_sdmf2+$sdmf2->pustakawan_s2_sdmf2+$sdmf2->pustakawan_s1_sdmf2+$sdmf2->pustakawan_d4_sdmf2+$sdmf2->pustakawan_d3_sdmf2+$sdmf2->pustakawan_d2_sdmf2+$sdmf2->pustakawan_d1_sdmf2+$sdmf2->pustakawan_sma_sdmf2+$sdmf2->pustakawan_unit_sdmf2 }}</td>
        </tr>
        <tr>
        	<td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: left;">Asisten Ahli</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->lab_s3_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->lab_s2_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->lab_s1_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->lab_d4_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->lab_d3_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->lab_d2_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->lab_d1_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->lab_sma_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->lab_unit_sdmf2 }}</td>
          <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->lab_s3_sdmf2+$sdmf2->lab_s2_sdmf2+$sdmf2->lab_s1_sdmf2+$sdmf2->lab_d4_sdmf2+$sdmf2->lab_d3_sdmf2+$sdmf2->lab_d2_sdmf2+$sdmf2->lab_d1_sdmf2+$sdmf2->lab_sma_sdmf2+$sdmf2->lab_unit_sdmf2 }}</td>
         </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Lektor</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->admin_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->admin_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->admin_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->admin_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->admin_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->admin_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->admin_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->admin_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->admin_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->admin_s3_sdmf2+$sdmf2->admin_s2_sdmf2+$sdmf2->admin_s1_sdmf2+$sdmf2->admin_d4_sdmf2+$sdmf2->admin_d3_sdmf2+$sdmf2->admin_d2_sdmf2+$sdmf2->admin_d1_sdmf2+$sdmf2->admin_sma_sdmf2+$sdmf2->admin_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Lektor Kepala</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->ktu_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->ktu_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->ktu_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->ktu_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->ktu_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->ktu_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->ktu_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->ktu_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->ktu_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->ktu_s3_sdmf2+$sdmf2->ktu_s2_sdmf2+$sdmf2->ktu_s1_sdmf2+$sdmf2->ktu_d4_sdmf2+$sdmf2->ktu_d3_sdmf2+$sdmf2->ktu_d2_sdmf2+$sdmf2->ktu_d1_sdmf2+$sdmf2->ktu_sma_sdmf2+$sdmf2->ktu_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">4</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Guru Besar/Profesor</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->profesor_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->profesor_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->profesor_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->profesor_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->profesor_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->profesor_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->profesor_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->profesor_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->profesor_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->profesor_s3_sdmf2+$sdmf2->profesor_s2_sdmf2+$sdmf2->profesor_s1_sdmf2+$sdmf2->profesor_d4_sdmf2+$sdmf2->profesor_d3_sdmf2+$sdmf2->profesor_d2_sdmf2+$sdmf2->profesor_d1_sdmf2+$sdmf2->profesor_sma_sdmf2+$sdmf2->profesor_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">Total</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_s3_sdmf2+$sdmf2->lab_s3_sdmf2+$sdmf2->admin_s3_sdmf2+$sdmf2->ktu_s3_sdmf2+$sdmf2->profesor_s3_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_s2_sdmf2+$sdmf2->lab_s2_sdmf2+$sdmf2->admin_s2_sdmf2+$sdmf2->ktu_s2_sdmf2+$sdmf2->profesor_s2_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_s1_sdmf2+$sdmf2->lab_s1_sdmf2+$sdmf2->admin_s1_sdmf2+$sdmf2->ktu_s1_sdmf2+$sdmf2->profesor_s1_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_d4_sdmf2+$sdmf2->lab_d4_sdmf2+$sdmf2->admin_d4_sdmf2+$sdmf2->ktu_d4_sdmf2+$sdmf2->profesor_d4_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_d3_sdmf2+$sdmf2->lab_d3_sdmf2+$sdmf2->admin_d3_sdmf2+$sdmf2->ktu_d3_sdmf2+$sdmf2->profesor_d3_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_d2_sdmf2+$sdmf2->lab_d2_sdmf2+$sdmf2->admin_d2_sdmf2+$sdmf2->ktu_d2_sdmf2+$sdmf2->profesor_d2_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_d1_sdmf2+$sdmf2->lab_d1_sdmf2+$sdmf2->admin_d1_sdmf2+$sdmf2->ktu_d1_sdmf2+$sdmf2->profesor_d1_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_sma_sdmf2+$sdmf2->lab_sma_sdmf2+$sdmf2->admin_sma_sdmf2+$sdmf2->ktu_sma_sdmf2+$sdmf2->profesor_sma_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_unit_sdmf2+$sdmf2->lab_unit_sdmf2+$sdmf2->admin_unit_sdmf2+$sdmf2->ktu_unit_sdmf2+$sdmf2->profesor_unit_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pustakawan_s3_sdmf2+$sdmf2->lab_s3_sdmf2+$sdmf2->admin_s3_sdmf2+$sdmf2->ktu_s3_sdmf2+$sdmf2->profesor_s3_sdmf2+$sdmf2->pustakawan_s2_sdmf2+$sdmf2->lab_s2_sdmf2+$sdmf2->admin_s2_sdmf2+$sdmf2->ktu_s2_sdmf2+$sdmf2->profesor_s2_sdmf2+$sdmf2->pustakawan_s1_sdmf2+$sdmf2->lab_s1_sdmf2+$sdmf2->admin_s1_sdmf2+$sdmf2->ktu_s1_sdmf2+$sdmf2->profesor_s1_sdmf2+$sdmf2->pustakawan_d4_sdmf2+$sdmf2->lab_d4_sdmf2+$sdmf2->admin_d4_sdmf2+$sdmf2->ktu_d4_sdmf2+$sdmf2->profesor_d4_sdmf2+$sdmf2->pustakawan_d3_sdmf2+$sdmf2->lab_d3_sdmf2+$sdmf2->admin_d3_sdmf2+$sdmf2->ktu_d3_sdmf2+$sdmf2->profesor_d3_sdmf2+$sdmf2->pustakawan_d2_sdmf2+$sdmf2->lab_d2_sdmf2+$sdmf2->admin_d2_sdmf2+$sdmf2->ktu_d2_sdmf2+$sdmf2->profesor_d2_sdmf2+$sdmf2->pustakawan_d1_sdmf2+$sdmf2->lab_d1_sdmf2+$sdmf2->admin_d1_sdmf2+$sdmf2->ktu_d1_sdmf2+$sdmf2->profesor_d1_sdmf2+$sdmf2->pustakawan_sma_sdmf2+$sdmf2->lab_sma_sdmf2+$sdmf2->admin_sma_sdmf2+$sdmf2->ktu_sma_sdmf2+$sdmf2->profesor_sma_sdmf2+$sdmf2->pustakawan_unit_sdmf2+$sdmf2->lab_unit_sdmf2+$sdmf2->admin_unit_sdmf2+$sdmf2->ktu_unit_sdmf2+$sdmf2->profesor_unit_sdmf2 }}</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">B</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: left;">Pendidikan Tertinggi :</th>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"></td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">S1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts1_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts1_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts1_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts1_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts1_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts1_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts1_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts1_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts1_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts1_s3_sdmf2+$sdmf2->pts1_s2_sdmf2+$sdmf2->pts1_s1_sdmf2+$sdmf2->pts1_d4_sdmf2+$sdmf2->pts1_d3_sdmf2+$sdmf2->pts1_d2_sdmf2+$sdmf2->pts1_d1_sdmf2+$sdmf2->pts1_sma_sdmf2+$sdmf2->pts1_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">S2/Profesi/Sp-1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts2_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts2_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts2_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts2_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts2_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts2_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts2_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts2_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts2_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts2_s3_sdmf2+$sdmf2->pts2_s2_sdmf2+$sdmf2->pts2_s1_sdmf2+$sdmf2->pts2_d4_sdmf2+$sdmf2->pts2_d3_sdmf2+$sdmf2->pts2_d2_sdmf2+$sdmf2->pts2_d1_sdmf2+$sdmf2->pts2_sma_sdmf2+$sdmf2->pts2_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">S3/Sp-2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_s3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_s2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_s1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_d4_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_d3_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_d2_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_d1_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_sma_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_unit_sdmf2 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_s3_sdmf2+$sdmf2->pts3_s2_sdmf2+$sdmf2->pts3_s1_sdmf2+$sdmf2->pts3_d4_sdmf2+$sdmf2->pts3_d3_sdmf2+$sdmf2->pts3_d2_sdmf2+$sdmf2->pts3_d1_sdmf2+$sdmf2->pts3_sma_sdmf2+$sdmf2->pts3_unit_sdmf2 }}</td>
                   </tr>

                   <tr>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">Total</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_s3_sdmf2+$sdmf2->pts2_s3_sdmf2+$sdmf2->pts1_s3_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_s2_sdmf2+$sdmf2->pts2_s2_sdmf2+$sdmf2->pts1_s2_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_s1_sdmf2+$sdmf2->pts2_s1_sdmf2+$sdmf2->pts1_s1_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_d4_sdmf2+$sdmf2->pts2_d4_sdmf2+$sdmf2->pts1_d4_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_d3_sdmf2+$sdmf2->pts2_d3_sdmf2+$sdmf2->pts1_d3_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_d2_sdmf2+$sdmf2->pts2_d2_sdmf2+$sdmf2->pts1_d2_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_d1_sdmf2+$sdmf2->pts2_d1_sdmf2+$sdmf2->pts1_d1_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_sma_sdmf2+$sdmf2->pts2_sma_sdmf2+$sdmf2->pts1_sma_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_unit_sdmf2+$sdmf2->pts2_unit_sdmf2+$sdmf2->pts1_unit_sdmf2 }}</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf2->pts3_s3_sdmf2+$sdmf2->pts2_s3_sdmf2+$sdmf2->pts1_s3_sdmf2+$sdmf2->pts3_s2_sdmf2+$sdmf2->pts2_s2_sdmf2+$sdmf2->pts1_s2_sdmf2+$sdmf2->pts3_s1_sdmf2+$sdmf2->pts2_s1_sdmf2+$sdmf2->pts1_s1_sdmf2+$sdmf2->pts3_d4_sdmf2+$sdmf2->pts2_d4_sdmf2+$sdmf2->pts1_d4_sdmf2+$sdmf2->pts3_d3_sdmf2+$sdmf2->pts2_d3_sdmf2+$sdmf2->pts1_d3_sdmf2+$sdmf2->pts3_d2_sdmf2+$sdmf2->pts2_d2_sdmf2+$sdmf2->pts1_d2_sdmf2+$sdmf2->pts3_d1_sdmf2+$sdmf2->pts2_d1_sdmf2+$sdmf2->pts1_d1_sdmf2+$sdmf2->pts3_sma_sdmf2+$sdmf2->pts2_sma_sdmf2+$sdmf2->pts1_sma_sdmf2+$sdmf2->pts3_unit_sdmf2+$sdmf2->pts2_unit_sdmf2+$sdmf2->pts1_unit_sdmf2 }}</th>
                   </tr>
                   
                    @endforeach
                     <tfoot>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left"><strong>Keterangan :</strong></td>
                    </tr>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left">PS1 G1 – Statistika, PS2 G2 – Meteorologi Terapan, PS3 G3 – Biologi, PS4 G4 – Kimia,</td>
                    </tr>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left">PS5 G5 – Matematika, PS6 G6 - Ilmu Komputer, PS7 G7 – Fisika, PS8 G8 – Biokimia,</td>
                    </tr>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left">PS9 G9 – Aktuaria, *dosen PNS/CPNS yang belum punya jabatan fungsional,</td>
                    </tr>
                    </tfoot>
                   </table>

<!-- SDM2 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>4.1.2 Banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada FMIPA IPB dalam tiga tahun terakhir.</strong></p>

     <table cellspacing="0" style="border: 1px solid #000; font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Hal</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-1<br>G1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-2<br>G2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-3<br>G3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-4<br>G4</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-5<br>G5</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-6<br>G6</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-7<br>G7</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-<br>8<br>G8</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-<br>9<br>G9</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Total di<br>Fakultas</th>
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
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(12)</th>
                   </tr>

                  @foreach ($sdmf3s as $sdmf3)
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen pensiun/berhenti</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->pustakawan_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->pustakawan_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->pustakawan_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->pustakawan_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->pustakawan_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->pustakawan_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->pustakawan_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->pustakawan_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->pustakawan_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->pustakawan_s3_sdmf3+$sdmf3->pustakawan_s2_sdmf3+$sdmf3->pustakawan_s1_sdmf3+$sdmf3->pustakawan_d4_sdmf3+$sdmf3->pustakawan_d3_sdmf3+$sdmf3->pustakawan_d2_sdmf3+$sdmf3->pustakawan_d1_sdmf3+$sdmf3->pustakawan_sma_sdmf3+$sdmf3->pustakawan_unit_sdmf3 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya perekrutan dosen baru</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->lab_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->lab_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->lab_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->lab_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->lab_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->lab_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->lab_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->lab_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->lab_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->lab_s3_sdmf3+$sdmf3->lab_s2_sdmf3+$sdmf3->lab_s1_sdmf3+$sdmf3->lab_d4_sdmf3+$sdmf3->lab_d3_sdmf3+$sdmf3->lab_d2_sdmf3+$sdmf3->lab_d1_sdmf3+$sdmf3->lab_sma_sdmf3+$sdmf3->lab_unit_sdmf3 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen tugas belajar S2/Sp-1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->admin_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->admin_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->admin_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->admin_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->admin_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->admin_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->admin_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->admin_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->admin_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->admin_s3_sdmf3+$sdmf3->admin_s2_sdmf3+$sdmf3->admin_s1_sdmf3+$sdmf3->admin_d4_sdmf3+$sdmf3->admin_d3_sdmf3+$sdmf3->admin_d2_sdmf3+$sdmf3->admin_d1_sdmf3+$sdmf3->admin_sma_sdmf3+$sdmf3->admin_unit_sdmf3 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">4</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen tugas belajar S3/Sp-2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->ktu_s3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->ktu_s2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->ktu_s1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->ktu_d4_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->ktu_d3_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->ktu_d2_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->ktu_d1_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->ktu_sma_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->ktu_unit_sdmf3 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf3->ktu_s3_sdmf3+$sdmf3->ktu_s2_sdmf3+$sdmf3->ktu_s1_sdmf3+$sdmf3->ktu_d4_sdmf3+$sdmf3->ktu_d3_sdmf3+$sdmf3->ktu_d2_sdmf3+$sdmf3->ktu_d1_sdmf3+$sdmf3->ktu_sma_sdmf3+$sdmf3->ktu_unit_sdmf3 }}</td>
                   </tr>
                   
                    @endforeach
                     <tfoot>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left"><strong>Keterangan :</strong></td>
                    </tr>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left">PS1 G1 – Statistika, PS2 G2 – Meteorologi Terapan, PS3 G3 – Biologi, PS4 G4 – Kimia,</td>
                    </tr>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left">PS5 G5 – Matematika, PS6 G6 - Ilmu Komputer, PS7 G7 – Fisika, PS8 G8 – Biokimia,</td>
                    </tr>
                    <tr>
                        <td colspan="12" style="border:1px solid white;text-align: left">PS9 G9 – Aktuaria</td>
                    </tr>
                    </tfoot>
                   </table>
     

<!-- SDM3 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>4.1.3 Pandangan FMIPA IPB tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir, serta kendala yang ada dalam pengembangan tenaga dosen tetap.</strong></p>

     @foreach ($pandangan_fmipa_tentang_dosen_tetap as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_pandangan_fmipa_tentang_dosen_tetap !!}</p>
    @endforeach

<!-- SDM4 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>4.2 Tenaga Kependidikan</strong></p>

     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>Data tenaga kependidikan yang ada di Fakultas atau IPB yang melayani mahasiswa Program Studi.</strong></p>

     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>Tabel 4.2 Jenis Tenaga Kependidikan menurut pendidikan terakhir</strong></p>

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
                     <th style="border: 1px solid #000; border-top: 0px; padding: 5px; background-color:#daeef3;" >Kerja</th>
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

                  @foreach ($sdmf5s as $sdmf5)
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Pustakawan*</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_s3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_s2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_s1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_d4_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_d3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_d2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_d1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_sma_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdmf5->pustakawan_unit_sdmf5 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Laboran/ Teknisi/ Analis/ Operator/ Programer</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->lab_s3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->lab_s2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->lab_s1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->lab_d4_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->lab_d3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->lab_d2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->lab_d1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->lab_sma_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdmf5->lab_unit_sdmf5 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Administrasi</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->admin_s3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->admin_s2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->admin_s1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->admin_d4_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->admin_d3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->admin_d2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->admin_d1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->admin_sma_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdmf5->admin_unit_sdmf5 }}</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">4</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">KTU</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->ktu_s3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->ktu_s2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->ktu_s1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->ktu_d4_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->ktu_d3_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->ktu_d2_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->ktu_d1_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->ktu_sma_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdmf5->ktu_unit_sdmf5 }}</td>
                   </tr>

                   <tr>
                     <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;"><strong>Total</strong></td>
              <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_s3_sdmf5+$sdmf5->lab_s3_sdmf5+$sdmf5->admin_s3_sdmf5+$sdmf5->ktu_s3_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_s2_sdmf5+$sdmf5->lab_s2_sdmf5+$sdmf5->admin_s2_sdmf5+$sdmf5->ktu_s2_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_s1_sdmf5+$sdmf5->lab_s1_sdmf5+$sdmf5->admin_s1_sdmf5+$sdmf5->ktu_s1_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_d4_sdmf5+$sdmf5->lab_d4_sdmf5+$sdmf5->admin_d4_sdmf5+$sdmf5->ktu_d4_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_d3_sdmf5+$sdmf5->lab_d3_sdmf5+$sdmf5->admin_d3_sdmf5+$sdmf5->ktu_d3_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_d2_sdmf5+$sdmf5->lab_d2_sdmf5+$sdmf5->admin_d2_sdmf5+$sdmf5->ktu_d2_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_d1_sdmf5+$sdmf5->lab_d1_sdmf5+$sdmf5->admin_d1_sdmf5+$sdmf5->ktu_d1_sdmf5 }}</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: right;">{{ $sdmf5->pustakawan_sma_sdmf5+$sdmf5->lab_sma_sdmf5+$sdmf5->admin_sma_sdmf5+$sdmf5->ktu_sma_sdmf5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;"></td>
                   </tr>
                   
                    @endforeach
                     <tfoot>
                    <tr>
                        <td colspan="11" style="border:1px solid white;text-align: left">* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan</td>
                    </tr>
                    </tfoot>
                   </table>

    <!-- SDM5 -->
     <p style="text-align: justify;">4.2.1 Pandangan FMIPA IPB tentang data di atas yang mencakup aspek: kecukupan, dan kualifikasi, serta kendala yang ada dalam pengembangan tenaga kependidikan.</p>

      @foreach ($pandangan_fmipa_tentang_tendik as $visi)
  <p style="text-align: justify; padding: 5; width: 100;">{!! $visi->keterangan_pandangan_fmipa_tentang_tendik !!}</p>
    @endforeach

<!-- STANDAR 5 -->
		<h3 style="text-align: justify;">STANDAR 5. KEUANGAN, SARANA DAN PRASARANA SERTA SISTEM INFORMASI</h3>
			<h4>5.1 Keuangan</h4>
			<p style="text-align: justify;">5.1.1 Jumlah dana termasuk gaji dan upah yang diterima FMIPA selama tiga tahun terakhir<br>
	<!-- Penerimaan dana -->
			a. Penerimaan Dana<br>
			<strong>Tabel 5.1</strong>Jumlah Dana diterima FMIPA selama tiga tahun terakhir</p>
	<table cellspacing="0" cellpadding="5">
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
	<!-- Penggunaan dana -->
	<h4>b. Penggunaan Dana</h4>
	<p><strong>Tabel 5.2</strong> Penggunaan Dana FMIPA selama tiga tahun terakhir</p>
	<table cellpadding="5", cellspacing="0">
    <thead>
      <tr>
        <th width="20px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="130px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Penggunaan</th>
        <th width="400px" colspan="6" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana dalam Juta Rupiah dan Persentase</th>
      </tr>
      <tr>
        <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-2 ({{$tahun_dua_lalu}})</th>
        <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-1 ({{$tahun_satu_lalu}})</th>
        <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS ({{$tahun_sekarang}})</th>
      </tr>
      <tr>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rp</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">%</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rp</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">%</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rp</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">%</th>
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
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">1</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Pendidikan</td>
          @foreach($total_ts2 as $total) 
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total->jum_pend3,2) }}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_pend,2) }}</td>
        	@endforeach
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center;">2</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Penelitian</td>
        	@foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total->jum_pen3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_pen,2) }}</td>
        	@endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">3</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Pengabdian Kepada Masyarakat</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total->jum_peng3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_peng,2) }}</td>
        @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">4</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi Prasarana</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total->jum_pras3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_pras,2) }}</td>
        @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">5</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi Sarana</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total->jum_sar3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_sar,2) }}</td>
        @endforeach
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center;">6</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi SDM</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total->jum_sdm3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_sdm,2) }}</td>
        @endforeach
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center;">7</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Lain-lain</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total->jum_lain3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_lain,2) }}</td>
        @endforeach
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="2" style="border:1px solid #000; border-width: thin; text-align: center;">Total</th>
        @foreach($total_ts2 as $total)
        <th style="border:1px solid #000; border-width: thin; text-align: right;">{{$total->total}}</th>
        <th style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($total->persen_pend + $total->persen_pen + $total->persen_peng + $total->persen_pras + $total->persen_sar + $total->persen_sdm + $total->persen_lain,2)}}</th>
        @endforeach
      </tr>
    </tfoot>
  </table>

<!-- Penggunaan dana tridarma per-ps -->
<h4>c. Penggunaan Dana menurut Program Studi</h4>
<p style="text-align: justify;"><strong>Tabel 5.3</strong> Penggunaan dana untuk penyelenggaraan kegiatan tridarma per program studi</p>
	<table cellpadding="5", cellspacing="0">
		<thead>
	    <tr>
	      <th width="30px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
	      <th width="220px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Program Studi (Departemen)</th>
	      <th width="320px" colspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana dalam Juta Rupiah</th>
		    <tr>	
		      <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-2 ({{$tahun_dua_lalu}})</th>
		      <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-1 ({{$tahun_satu_lalu}})</th>
		      <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS ({{$tahun_sekarang}})</th>
		    </tr>
		    <tr>
		      <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rp</th>
		      <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rp</th>
		      <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rp</th>
		    </tr>
		    <tr>
		    	<th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
		    	<th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>
		    	<th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
		    	<th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
		    	<th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
		    </tr>
			</tr>
	    </thead>
	      <tbody>
	        <?php $nmr=0; ?>
	        @foreach($jumlahh as $key1 => $jumlah1)
	        <?php $nmr++; ?>
	        <tr>
	          <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$nmr}}</td>
	          <td style="border:1px solid #000; border-width: thin; text-align: left;">PS/Dep {{$pakai[$key1]}}</td>
	          @foreach($jumlah1 as $key2 => $jumlah2)
	          <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($jumlah1[$key2],2)}}</td>
	          @endforeach
	        </tr>
	        @endforeach
	      </tbody>
	     	<tfoot>
	      	<tr>
	        	<th colspan="2" style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: center;">Total</th>
	          <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{number_format($totaal[0],2)}}</th>
	          <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{number_format($totaal[1],2)}}</th>
	          <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{number_format($totaal[2],2)}}</th>
	        </tr>
	      </tfoot>
	   </table>

	   <!-- pendapat pimpinan fmipa -->
	  <p style="text-align: justify;">5.1.2 Pendapat pimpinan FMIPA IPB tentang perolehan dana pada butir 5.1.1 yang mencakup aspek: kecukupan dan upaya pengembangannya serta kendala-kendala yang dihadapi</p>
      @foreach($pendapat_pimpinan as $pendapat_pimp)
        	<p style="text-align: justify;"><?php echo nl2br ($pendapat_pimp->keterangan); ?></p>
      @endforeach
	   <h4>5.2 Sarana</h4>
    <!-- sarana -->
    <p style="text-align: justify;">5.2.1 Penilaian FMIPA IPB tentang sarana untuk menjamin penyelenggaraan program Tridarma PT yang bermutu tinggi. Uraian ini mencakup aspek: kecukupan/ ketersediaan/akses dan kewajaran serta rencana pengembangan dalam lima tahun mendatang, serta kendala yang dihadapi dalam penambahan sarana.<br>
      @foreach($penilaian_fmipa as $penilaiann)
         <?php echo nl2br ($penilaiann->penilaian); ?></p>
			@endforeach
    <!-- sarana tambahan -->
    <p style="text-align: justify;">5.2.2	Sarana tambahan untuk meningkatkan mutu penyelenggarakan program Tridarma PT pada semua  program studi yang dikelola dalam tiga tahun terakhir, dan rencana investasi untuk sarana dalam lima tahun mendatang</p>
    <p><strong>Tabel 5.2</strong> Investasi, dan Rencana Investasi Sarana Tambahan FMIPA IPB</p>
	<table cellpadding="5", cellspacing="0">
    <thead>
      <tr>
        <th width="15px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="150px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Sarana Tambahan</th>
        <th width="80px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Investasi Sarana Selama 3 Tahun Terakhir (Juta Rp) <br>({{$tahun2}}-{{$tahun}})</th>
        <th width="150px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rencana Investasi Sarana dalam 5 Tahun Mendatang</th>
	      <tr>
	        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nilai Investasi (Juta Rp)</th>
	        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber Dana</th>
	      </tr>
	      <tr>
		      <th style="border:1px solid #000; border-width: thin; text-align: center;">(1)</th>
		      <th style="border:1px solid #000; border-width: thin; text-align: center;">(2)</th>	     
		      <th style="border:1px solid #000; border-width: thin; text-align: center;">(3)</th>
		      <th style="border:1px solid #000; border-width: thin; text-align: center;">(4)</th>
		      <th style="border:1px solid #000; border-width: thin; text-align: center;">(5)</th>
	      </tr>
      </tr>
    </thead>
    <tbody>
    	<?php $no=0; ?>
      @foreach($sar_tamb as $key => $sars)
      <?php $no++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$no}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$sars->jenis_sarana_tambahan}} ({{$sars->jumlah}} {{$sars->satuan}})</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($sars->jum_inves,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;"></td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$sars->sumber_dana}}</td>
      </tr>
      @endforeach
      <thead>
        <tr>
          <th style="border:1px solid #000; border-width: thin; text-align: left;" colspan="2">INVESTASI</th>
          <th style="border:1px solid #000; border-width: thin; text-align: left;"></th>
          <th style="border:1px solid #000; border-width: thin; text-align: left;"></th>
          <th style="border:1px solid #000; border-width: thin; text-align: left;"></th>
        </tr>
      </thead>
        <?php $nomr=0; ?>
          @foreach($rencana_tamb as $key1 => $sar_rencana)
        <?php $nomr++; ?>
        <tr>
          <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$nomr}}</td>
          <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$sar_rencana->jenis_sarana_tamb}} ({{$sar_rencana->jumlah}} {{$sar_rencana->satuan}}) </td>
          <td style="border:1px solid #000; border-width: thin; text-align: left;"></td>
          <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($rencana_inves_akhir[$key1],2)}}</td>
          <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$sar_rencana->sumber_dana}}</td>
        </tr>
          @endforeach
    </tbody>
    <tfoot>
    	<tr>
      	<th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Total</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;">{{number_format($total_inves,2)}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;">{{number_format($total_rencana,2)}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;"></th>
      </tr>
    </tfoot>
  </table>
	   <h4>5.3 Prasarana</h4>
    <!-- prasarana -->
    <p style="text-align: justify;">5.3.1 Penilaian FMIPA IPB tentang prasarana yang telah dimiliki, khususnya yang digunakan untuk program-program studi. Uraian ini mencakup aspek: kecukupan dan kewajaran serta rencana pengembangan dalam lima tahun mendatang, serta kendala yang dihadapi dalam penambahan prasarana.</p>
      @foreach($penilaian_pras_fmipa as $penilaian_pras)
         <p style="text-align: justify;"><?php echo nl2br ($penilaian_pras->penilaian_pras); ?></p>
			@endforeach
    <p style="text-align: justify;">5.3.2  Prasarana tambahan untuk semua  program studi yang dikelola dalam tiga tahun terakhir. Rencana investasi untuk prasarana dalam lima tahun mendatang.</p>
    <p style="text-align: justify;"><strong>Tabel 6.5</strong> Investasi, dan Rencana Investasi Prasarana Tambahan FMIPA IPB</p>
    <table  cellpadding="5", cellspacing="0">
    <thead>
      <tr>
        <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Prasarana Tambahan</th>
        <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Investasi Prasarana Tambahan<br>Selama 3 Tahun Terakhir (Rp Juta)</th>
        <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rencana Investasi Prasarana dalam 5 Tahun Mendatang</th>
        <tr>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nilai Investasi (Rp Juta)</th>
          <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sumber Dana</th>
        </tr>
      </tr>
    </thead>
    <tbody>
      <?php $no=0; ?>
      @foreach($pras_tambh as $key => $prass)
      <?php $no++; ?>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$no}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$prass->jenis_prasarana_tambahan}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($prass->jum_inves,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{number_format($rencana_inves_terakhir_pras[$key],2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$prass->sumber_dana}}</td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
    	<tr>
      	<th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Total</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;">{{number_format($total_inves_pras,2)}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: right;">{{number_format($total_rencana_pras,2)}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"></th>
      </tr>
		</tfoot>
   </table>
   <h4>5.4 Sistem Informasi</h4>
   <p style="text-align: justify;">5.4.1	Sistem informasi manajemen dan fasilitas ICT (Information and Communication Technology) yang digunakan FMIPA IPB untuk proses penyelenggaraan akademik dan administrasi (misalkan SIAKAD, SIMKEU, SIMAWA, SIMFA, SIMPEG dan sejenisnya), termasuk distance-learning, serta pemanfaatannya dalam proses pengambilan keputusan dalam pengembangan institusi.</p>
      @foreach($penjelasan as $jelas)
        {!! $jelas->penjelasan !!}
      @endforeach
    <!-- <br> -->
    <p><strong>b. <i>Netware</i> (Infrastruktur Jaringan Komputer)</strong></p>
    <p style="text-align: justify;">Untuk mengoptimasi pengoperasian sistem informasi yang seluruhnya menggunakan arsitektur client/server, maka di IPB, Fakultas dan departemen telah tersedia infrastruktur jaringan dengan topologi jaringan seperti diperlihatkan pada Gambar 6.10.  Jaringan internal IPB dengan jalur backbone yang menggunakan fiber optic memiliki bandwith sampai dengan 1 Gbps. Untuk jaringan Internet, IPB menyediakan akses dengan bandwith 1 Gbps untuk internasional dan 550 Mbps untuk nasional yang dapat digunakan oleh civitas IPB dalam menunjang kegiatan akademik, penelitian, dan pengabdian kepada masyarakat.</p>
    <p style="text-align: center;"><img src="{{ public_path("images/netware/".$netware->gambar_net) }}" alt="" style="width: 500px; height: 300px;"></p>
    <p style="text-align: center;">{{$netware->gambar_net}}</p>
    <!-- hardware -->
    <p><strong>c. <i>Hardware</i> (Perangkat Keras)</strong></p>
    <p style="text-align: justify;">Perangkat Keras komputer tersedia baik di IPB, fakultas, maupun departemen. Di samping itu, tersedia beberapa laboratorium komputer untuk mahasiswa yang dikelola oleh DIDSI IPB yaitu <i>Cyber</i> Singkong di Gedung Perpustakaan Lantai 4 sekitar &plusmn; 120 PC, <i>Cyber</i> Merpati &plusmn; 40 PC, Gedung Pusat Komputer (GPK) 50 PC yang dilengkapi dengan layanan ID-IPB dan I-MOVSES (Microsoft <i>Learning</i>). Di level IPB juga tersedia server yang menangani proses administrasi, akademik, kemahasiswaan, keuangan, properti, alumni, kemahasiswaan, perpustakaan, kepegawaian. Untuk level fakultas, tersedia perangkat keras berupa server dan PC untuk proses-proses di atas dalam lingkup fakultas.  Di samping itu, setiap departemen telah memiliki PC tersendiri baik untuk pembelajaran (termasuk <i>e-learning</i>) maupun server, khususnya untuk mendukung pembelajaran, penelitian, penanganan perpustakaan, administrasi, maupun komunikasi dan pengembangan keilmuan.</p>
    <p style="text-align: justify;">FMIPA memiliki dua server untuk web dan pengolahan data. FMIPA juga memiliki dan mengelola 1 laboratorium komputer yang dinamakan <i>Cyber</i> FMIPA yang dapat digunakan oleh dosen dan mahasiswa dalam menyelenggarakan pelatihan/<i>training</i>.  Di samping itu, selain access point yang disediakan departemen-departemen, FMIPA juga menyediakan 2 <i>Free Hotspot (access point)</i> SSID yang digunakan di ruang Dekanat FMIPA dan Perpustakaan FMIPA. Spesifikasi server dan perangkat keras di FMIPA selengkapnya diberikan dalam <strong>Tabel 5.6</strong>.</p>
  <p><strong>Tabel 5.6</strong> Perangkat Keras di Dekanat FMIPA</p>
	<table cellpadding="5", cellspacing="0" >
		<thead>
      <tr>
   	    <th width="120px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nama</th>
        <th width="360px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Spesifikasi</th>
        <th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Jumlah</th>
	    </tr>
    </thead>
  	<tbody>
  	@foreach ($perangkat_keras as $perangkat_kerass)
      <tr>
        <td style="border:1px solid #000;text-align: center;">{{ $perangkat_kerass->nama_hardware }}</td>
        <td style="border:1px solid #000;">{{$perangkat_kerass->spesifikasi}}</td>
        <td style="border:1px solid #000;text-align: center;">{{$perangkat_kerass->jumlah_item}}</td>
      </tr>
     @endforeach
    </tbody>
</table>
   <p style="text-align: justify;">Pengembangan IT di FMIPA juga didukung oleh tersedianya perangkat keras di setiap departemen yang digunakan untuk keperluan pendidikan, penelitian, dan administrasi. <strong>Tabel 5.7</strong> menyajikan daftar perangkat keras yang ada di Departemen Ilmu Komputer.</p>
  <p style="text-align: justify;"><strong>Tabel 5.7</strong> Perangkat Keras di Departemen Ilmu Komputer</p>
  <table cellpadding="5", cellspacing="0" >
  	<thead>
		<tr>
      <th width="120px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nama</th>
      <th width="360px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Spesifikasi</th>
      <th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Jumlah</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($perangkat_keras1 as $perangkat_kerass1)
      <tr>
    	  <td style="border:1px solid #000;text-align: center;">{{ $perangkat_kerass1->nama_hardware }}</td>
        <td style="border:1px solid #000;">{{$perangkat_kerass1->spesifikasi}}</td>
        <td style="border:1px solid #000;text-align: center;">{{$perangkat_kerass1->jumlah_item}}</td>
      </tr>
    @endforeach
    </tbody>
	</table>
<!-- sistem informasi -->
  <p><strong>d. <i>Software</i> (Perangkat Lunak)</strong></p>
   <p style="text-align: justify;">Perangkat lunak merupakan salah satu bagian terpenting yang mutlak diperlukan dalam penggunaan fasilitas teknologi informasi baik di tingkat institusi hingga  departemen. Berdasarkan lisensinya, perangkat lunak yang digunakan terdiri atas 3 jenis yaitu perangkat lunak komersial, perangkat lunak tidak berbayar, dan perangkat lunak sistem informasi.</p>
   <p><strong><i>d.1 Perangkat Lunak Komersial</i></strong></p>
   <p style="text-align: justify;">Perangkat lunak komersial dapat diperoleh melalui program IMOVSES: IPB Microsoft <i>Open Value Subscription for Education Solution</i>, yang merupakan kerjasama IPB dengan Microsoft untuk penggunaan Windows, MS Office, SQL Server, dan Visual Studio. Untuk memiliki aplikasi tersebut mahasiswa dapat mengganti biaya CD dan mendapatkan <i>Sticker Hologram</i> <strong>Gambar 5.11.</strong> Perangkat lunak Microsoft yang termasuk dalam kerjasama IMOVSES adalah</p>
	<table cellpadding="2", cellspacing="">
    <?php $no =0;?>
     @foreach ($pl_komersial as $pl_komersiall)
    <?php $no++ ;?> 
    <tr>
      <td style="vertical-align: top">{{$no}}.</td>
  	    <td style="text-align: justify; vertical-align: top">{{ $pl_komersiall->nama_imovses }}</td>
    </tr>
     @endforeach
  </table>
  <p style="text-align: center;"><img src="{{ public_path("images/imovses/".$hologramm->gambar_hologram) }}" alt="" style="width: 450px; height: 300px;"></p>
    <p style="text-align: center;">{{$hologramm->gambar_hologram}}</p>
        <!--  -->
    <p><strong><i>d.2 Perangkat Lunak Tak Berbayar</i></strong></p>
      <p style="text-align: justify;">Untuk perangkat lunak gratis baik yang bersifat <i>open source</i> maupun tidak dapat diunduh dari Internet dengan mengakses secara langsung situs-situs pengembang perangkat lunak tersebut. Jenis perangkat lunak tak berbayar yang digunakan meliputi perangkat lunak sistem operasi, utilitas, aplikasi perkantoran, multimedia, edukasi, dan sebagainya. Beberapa perangkat lunak tak berbayar yang banyak digunakan dalam kegiatan praktikum diantaranya R Project for Statistical Computing (<u>https://www.r-project.org/</u>), bahasa pemrograman Python (<u>https://www.python.org/</u>).
    <p><strong><i>d.3 Perangkat Lunak Sistem Informasi</i></strong></p>
    	<p style="text-align: justify;">Informasi yang terkelola dengan baik dalam suatu sistem informasi merupakan kebutuhan mutlak di setiap organisasi berskala menengah dan besar di era teknologi informasi saat ini. Sistem informasi yang digunakan di lingkungan IPB di samping disediakan dan dikembangkan oleh institusi (IPB) juga oleh Departemen yang ada. Sistem informasi digunakan secara intensif oleh IPB, Fakultas maupun Departemen dalam rangka meningkatkan layanan akademik maupun non-akademik kepada seluruh civitas akademika. Hingga saat ini FMIPA menggunakan sejumlah sistem informasi yang dikembangkan dalam bentuk aplikasi berbasis web dan aplikasi berbasis Desktop (<strong>Tabel 5.8</strong>). Untuk menunjang kinerja sistem informasi yang seluruhnya bekerja dalam arsitektur <i>client/server</i>, IPB telah menyediakan jaringan internal dengan jalur <i>backbone</i> yang menggunakan kabel serat optik dengan <i>bandwith</i> 1 Gbps, dan jaringan eksternal yang terhubung ke Internet dengan <i>bandwith</i> 1 Gbps untuk internasional dan 550 Mbps untuk nasional. Berikut adalah daftar sistem informasi yang digunakan di FMIPA.</p>
    
	<p><strong>Tabel 5.8</strong> Daftar Sistem Informasi yang digunakan di FMIPA</p>
  <table cellpadding="5", cellspacing="0" >
    <tr>  
      <th align=left valign=top></th>
        <tr>
          <th width="20px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
          <th width="180px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Nama Sistem</th>
          <th width="120px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Bentuk</th>
          <th width="235px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Fitur-fitur Sistem</th>
          <th></th>
    <tr>
      <th colspan="4" style="border:1px solid #000;">a. Informasi Umum</th>
    <?php $nomor =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==1)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top">{{ $nomor }}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top">{{ $sistem_informasi->nama_sistem }}</td>
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}} URL: {{$sistem_informasi->url}}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><?php echo nl2br ($sistem_informasi['fitur_si']); ?></td>
        <td></td>
        @endif
        @endforeach
    <tr>
      <th colspan="4" style="border:1px solid #000;">b. Kemahasiswaan</th>
    <?php $nomor =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==2)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top">{{ $nomor }}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top">{{ $sistem_informasi->nama_sistem }}</td>
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}} URL: {{$sistem_informasi->url}}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><?php echo nl2br ($sistem_informasi['fitur_si']); ?></td>
        <td></td>
        @endif
        @endforeach

    <tr>
      <th colspan="4" style="border:1px solid #000;">c. Akademik</th>
    <?php $nomor3 =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor3++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==3)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top">{{ $nomor3 }}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top">{{ $sistem_informasi->nama_sistem }}</td>
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}} URL: {{$sistem_informasi->url}}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><?php echo nl2br ($sistem_informasi['fitur_si']); ?></td>
        <td></td>
        @endif
        @endforeach

    <tr>
      <th colspan="4" style="border:1px solid #000;">d. Administrasi</th>
    <?php $nomor3 =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor3++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==4)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top">{{ $nomor3 }}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top">{{ $sistem_informasi->nama_sistem }}</td>
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}} URL: {{$sistem_informasi->url}}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><?php echo nl2br ($sistem_informasi['fitur_si']); ?></td>
        <td></td>
        @endif
        @endforeach

    <tr>
      <th colspan="4" style="border:1px solid #000;">e. Perpustakaan</th>
    <?php $nomor3 =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor3++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==5)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top">{{ $nomor3 }}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top">{{ $sistem_informasi->nama_sistem }}</td>
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}} URL: {{$sistem_informasi->url}}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><?php echo nl2br ($sistem_informasi['fitur_si']); ?></td>
        <td></td>
        @endif
        @endforeach
    <tr>
      <th colspan="4" style="border:1px solid #000;">f. Penelitian dan pengabdian pada masyarakat</th>
    <?php $nomor3 =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor3++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==6)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top">{{ $nomor3 }}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top">{{ $sistem_informasi->nama_sistem }}</td>
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}} URL: {{$sistem_informasi->url}}</td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><?php echo nl2br ($sistem_informasi['fitur_si']); ?></td>
        <td></td>
        @endif
        @endforeach
        </tr>
      </tr>
  </tr>
</table>
<!-- <table> -->
<!-- taro gambar2 disini -->
  <!-- <p style="align-content: center;">Ada gambar disini</p> -->
  @foreach($tampilan as $sistem)
  <p style="text-align: center;"><img src="{{ public_path("images/Tampilan_Sistem/".$sistem->tampilan_muka) }}" alt="" style="width: 250px; height: 250px;"></p>
  <p style="text-align: center;">{{$sistem->tampilan_muka}} ({{$sistem->url}})</p>
@endforeach
<!-- </table> -->
  <p><strong><i>e. Brainware</i></strong></p>
   <p style="text-align: justify;">Untuk menangani infrastruktur TI, tersedia SDM baik di level IPB, fakultas maupun departemen. Untuk IPB tersedia 53 SDM (2 orang bergelar S3, 2 orang bergelar S2, sisanya adalah S1, D3 dan SMK), sedangkan di setiap fakultas ada 1 SDM, dan di departemen bervariasi. Sebagai contoh Departemen Ilmu Komputer tersedia 3 SDM (1 S2 yang merangkap dosen sebagai penanggung jawab lab, dan 2 orang SMK).</p>
  <p><strong><i> f. Dataware</i></strong></p>
   <p style="text-align: justify;">Kehandalan sistem informasi dalam memberikan informasi yang akurat dan reliabel tidak terlepas dari basis data yang menjadi sumber data bagi sistem informasi. Saat ini sistem informasi yang digunakan di IPB, Fakultas dan Departemen sebagian besar menggunakan sistem manajemen database berbasis <i>client/server</i> seperti Microsoft SQL Server dan MySQL. Hak akses langsung terhadap <i>database</i> dibatasi hanya untuk aplikasi dan administrator. Untuk pengguna umum, akses terhadap database diatur oleh administrator sehingga keamanan data lebih terjamin.</p>
   <p style="text-align: justify;">Ke enam komponen TI tersebut memberikan dukungan terhadap semua proses, baik untuk kemahasiswaan (data maupun rekruitmennya), akademik, administrasi, pembelajaran, penelitian, kepegawaian, properti, perpustakaan, dan sebagainya.</p>
  <p style="text-align: justify;">5.4.2 Beri tanda V pada kolom yang sesuai (hanya satu kolom per baris) dengan aksesibilitas tiap jenis data, dengan mengikuti format tabel berikut.</p>
  <table cellpadding="5", cellspacing="0">
    <thead>
      <tr>
        <th width="30px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="180px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Data</th>
        <th width="320px" colspan="4" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Sistem Pengelolaan Data</th>
      <!-- </tr> -->
      <tr>
        <th width="80px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Secara Manual</th>
        <th width="80px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Dengan Komputer<br>Tanpa Jaringan</th>
        <th width="80px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Dengan Komputer<br>Jaringan Local (LAN)</th>
        <th width="80px" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Dengan Komputer<br>Jaringan Luas (WAN)</th>
      <!-- </tr> -->
      <!-- <tr></tr> -->
      <!-- <tr>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(1)</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(2)</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(3)</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(4)</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(5)</th>
        <th style="border:1px solid #000; border-width: thin;text-align: center;">(6)</th>
      </tr> -->
    </tr>

  </tr>
  <tr></tr>
    </thead>
    <tbody>
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
  <p style="text-align: justify;"><strong>5.4.3 Upaya penyebaran informasi/kebijakan untuk sivitas akademika di FMIPA IPB (misalnya melalui surat, faksimili, mailing list, e-mail,sms, buletin).</strong></p>
  	@foreach($upaya_sebar as $upaya)
      <p style="text-align: justify;"><?php echo ($upaya->upaya_sebar); ?></p>
    @endforeach
    <p style="text-align: justify;"><strong>5.4.4 Rencana pengembangan sistem informasi jangka panjang dan upaya pencapaiannya. Uraikan pula kendala-kendala yang dihadapi</strong></p>
    @foreach($rencana_pengembangan as $ren_kembang)
      <p style="text-align: justify;"><?php echo ($ren_kembang->rencana); ?></p>
    @endforeach
<!-- STANDAR 6 -->
		<h3 style="text-align: justify;">STANDAR 6. PENDIDIKAN</h3>
    <!-- Kurikulum1 -->
     <p style="text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 10" ><strong>6.1 Kurikulum - Peran FMIPA IPB dalam penyusunan dan pengembangan kurikulum untuk program studi yang dikelola.</strong></p>

      @foreach ($peran_fmipa_tentang_kurikulum as $visi)
          {!! $visi->keterangan_peran_fmipa_tentang_kurikulum !!}
    @endforeach
		<h4>6.2 Pembelajaran</h4>
		<p style="text-align: justify;">Jelaskan peran Fakultas/Sekolah Tinggi dalam memonitor dan mengevaluasi pembelajaran</p>
    @foreach($peran as $penjelasan)
      <p><?php echo ($penjelasan->keterangan); ?></p>
     @endforeach
<!-- STANDAR 7 -->
		<h3>STANDAR 7. PENELITIAN</h3>
		<h4>Penelitian</h4>
		<p style="text-align: justify;">7.1.1 Jumlah dan dana penelitian yang dilakukan oleh masing-masing PS di lingkungan FMIPA IPB dalam tiga tahun terakhir.</p>
    <p style="text-align: justify;"><strong>Tabel 7.1</strong> Jumlah penelitian dan total dana penelitian FMIPA IPB selama tiga tahun terakhir </p>
    <table cellspacing="0">
           <tr>
            <th></th>
            <th width="20px" rowspan="2" colspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No.</th>
            <th width="160px" rowspan="2" colspan="6" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Nama Program Studi</th>
            <th width="180px" colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Judul Penelitian</th>
            <th width="180px" colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Dana Penelitian</th>
          </tr>
          <tr>
            <th colspan="8"></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2<br> <?php echo ($ts2) ?></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1<br> <?php echo ($ts1) ?></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS<br> <?php echo ($ts) ?></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2<br> <?php echo ($ts2) ?></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1<br> <?php echo ($ts1) ?></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS<br> <?php echo ($ts) ?></th>
            </tr>
            <tr>
            <th></th>
            <tr>
            <th></th>
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">1.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS STK</td>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')) ?></td>
            </tr>
            <tr>
            <th></th>
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">2.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS GFM</td>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')) ?></td>

            </tr>
            <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">3.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS BIO</td>
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')) ?></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')) ?></td>
             <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')) ?></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">4.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS KIM</td>
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')) ?></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">5.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS MAT</td>
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')) ?></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">6.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS KOM</td>
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')) ?></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')) ?></td>
             <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')) ?></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">7.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS FIS</td>
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')) ?></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">8.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS BIOKIM</td>
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')) ?></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">9.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS AUK</td>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')) ?></td>
            </tr>
            </tr></tr>
            
    
             <tr>
            <th></th>
            <tr>
            <th></th>
            <th colspan="7" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Total</th>
            <th colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_penelitian')) ?></th>
            <th style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_penelitian')) ?></th>
            <th style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_penelitian')) ?></th>
            <th style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->sum('jumlah_dana')) ?></th>
            <th style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->sum('jumlah_dana')) ?></th>
            <th style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->sum('jumlah_dana')) ?></th>
            </tr></tr>
            <div>
            <p style="text-align: justify;">Catatan: Kegiatan yang dilakukan bersama oleh dua PS atau lebih sebaiknya dicatat sebagai</span> <span style="padding-left:3.5em"> kegiatan PS yang relevansinya paling dekat</p>
            <p style="text-align: justify;">Keterangan:<span style="padding-left:0.5em">STK – Statistika, GFM - Geofisika & Meteorologi, BIO – Biologi, KIM – Kimia,</span> <span style="padding-left:5.5em"> MAT – Matematika,KOM - Ilmu Komputer, FIS – Fisika, BIK – Biokimia</span>
            <br><i>Data pada TS (2017) sampai bulan Desember 2017</i></span>
            </p></span></p>
            </div>
            </table>
            <p style="text-align: justify;">7.1.2 Pandangan pimpinan FMIPA IPB tentang data pada butir 7.1.1, dalam perspektif: kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu, serta kendala-kendala yang dihadapi.</p>
            @foreach ($redaksiPenelitianFmipa as $redaksi1fmipa)
            	{!! $redaksi1fmipa->redaksi_penelitian_fmipa !!}
            @endforeach
<!-- STANDAR 8 -->
				<h3>STANDAR 8 PELAYANAN/PENGABDIAN KEPADA MASYARAKAT</h3>
				<h4>8.1 Pengabdian Kepada Masyarakat</h4>
				<p style="text-align: justify;">8.1.1 Jumlah dan dana pengabdian yang dilakukan oleh masing-masing PS di lingkungan FMIPA IPB dalam tiga tahun terakhir.</p>
        <p style="text-align: justify;"><strong>Tabel 8.1</strong> Jumlah pengabdian pada masyarakat dan total dana pengabdian pada masyarakat  FMIPA IPB selama tiga tahun terakhir </p>
    		<table cellspacing="0" >
           <tr>
            <th></th>
            <th rowspan="6" colspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No.</th>
            <th rowspan="6" colspan="6" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Nama Program Studi</th>
            <th rowspan="4" colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</th>
            <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Total Dana </th>
          </tr>
          <tr>
              <tr>
            <th></th>
            <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Kegiatan Pelayanan/ Pengabdian kepada Masyarakat (juta Rp)</th>
            </tr></tr>

            <tr>
              <tr>
            <th colspan="8"></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2<br> <?php echo ($ts2) ?></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1<br> <?php echo ($ts1) ?></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS<br> <?php echo ($ts) ?></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2<br> <?php echo ($ts2) ?></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1<br> <?php echo ($ts1) ?></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS<br> <?php echo ($ts) ?></th>
            </tr></tr>

             <tr>
            <th></th>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">1.</td></td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS<br> STK</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_pengabdian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_pengabdian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_pengabdian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana_peng')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana_peng')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana_peng')) ?></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">2.</td></td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS GFM</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_pengabdian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_pengabdian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_pengabdian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana_peng')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana_peng')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana_peng')) ?></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">3.</td></td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS<br> BIO</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_pengabdian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_pengabdian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_pengabdian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana_peng')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana_peng')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana_peng')) ?></td>
            </tr>
            
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">4.</td></td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS KIM</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_pengabdian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_pengabdian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_pengabdian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana_peng')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana_peng')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana_peng')) ?></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">5.</td></td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS MAT</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_pengabdian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_pengabdian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_pengabdian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana_peng')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana_peng')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana_peng')) ?></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">6.</td></td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS KOM</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_pengabdian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_pengabdian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_pengabdian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana_peng')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana_peng')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana_peng')) ?></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">7.</td></td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS<br> FIS</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_pengabdian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_pengabdian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_pengabdian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana_peng')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana_peng')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana_peng')) ?></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">8.</td></td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS BIOKIM</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_pengabdian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_pengabdian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_pengabdian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana_peng')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana_peng')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana_peng')) ?></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">9.</td></td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS AUK</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_pengabdian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_pengabdian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_pengabdian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana_peng')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana_peng')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana_peng')) ?></td>
            </tr>
            </tr></tr>

             <tr>
            <th></th>
            <tr>
            <th></th>
            <td colspan="7" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Total</td>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_pengabdian')) ?></td>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_pengabdian')) ?></td>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_pengabdian')) ?></td>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->sum('jumlah_dana_peng')) ?></td>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->sum('jumlah_dana_peng')) ?></td>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->sum('jumlah_dana_peng')) ?></td>
            </tr></tr>
			</table>          
       @foreach ($redaksiPengabdianFmipa as $redaksi2fmipa)
          {!! $redaksi2fmipa->redaksi_pengabdian_fmipa !!}
        @endforeach
<!-- STANDAR 9 -->
			<h3>STANDAR 9. LUARAN DAN CAPAIAN</h3>
			<h4>Hasil Pendidikan</h4>
			<p style="text-align: justify;">9.1.1 Jumlah hasil pendidikan masing-masing PS di FMIPA IPB dalam tiga tahun terakhir.</p>
      <p style="text-align: justify;"><strong>Tabel 9.1</strong> Jumlah hasil pendidikan FMIPA IPB selama tiga tahun terakhir </p>
    <table cellspacing="0" >
           <tr>
            <th></th>
            <th rowspan="4" colspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No.</th>
            <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Nama Program Studi</th>
            <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Judul Hasil Pendidikan</th>
          </tr>
          <tr>
              <tr>
            <th></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2<br> <?php echo ($ts2) ?></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1<br> <?php echo ($ts1) ?></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS<br> <?php echo ($ts) ?></th>
            </tr></tr>
            <tr>
            <th></th>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;">1.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; ">Dep/PS STK</td>
            <!-- TS-2 -->
           
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPendidikan')) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;">2.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; ">Dep/PS GFM</td>
            <!-- TS-2 -->
            
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPendidikan')) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;">3.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px;">Dep/PS BIO</td>
            
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPendidikan')) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;">4.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; ">Dep/PS KIM</td>
            <!-- TS-2 -->
            
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPendidikan')) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;">5.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; ">Dep/PS MAT</td>
            <!-- TS-2 -->
            
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPendidikan')) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;">6.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; ">Dep/PS KOM</td>
            <!-- TS-2 -->
            
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPendidikan')) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;">7.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; ">Dep/PS FIS</td>
            <!-- TS-2 -->
            
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPendidikan')) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;">8.</td>
            <td colspan="6" style="border:1px solid #000;padding: 5px; ">Dep/PS BIOKIM</td>
            <!-- TS-2 -->
            
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPendidikan')) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;">9.</td>
            <td colspan="6" style="border:1px solid #000;padding: 5px; ">Dep/PS AUK</td>
            <!-- TS-2 -->
            
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;  padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPendidikan')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;  padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPendidikan')) ?></td>
            </tr>
            <tr>
            <th></th>
            <tr>
            <th></th>
            <th colspan="7" style="border:1px solid #000;  padding: 5px; text-align: center;">Total</th>
            
            <th colspan="1" style="border:1px solid #000;  padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_hasilPendidikan')) ?></th>

            <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_hasilPendidikan')) ?></td>

            <th colspan="1" style="border:1px solid #000;  padding: 5px; text-align: center;"><?php echo number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_hasilPendidikan')) ?></th>
            </tr></tr>
</table>
<p style="font-size: 11;font-family: arial, helvetica, sans-serif;"><b> 9. 2 <span style="padding-left:1em">Hasil Penelitian dan Hasil Pengabdian</b></p></span>

<h4 style="font-size: 11;font-family: arial, helvetica, sans-serif;">9.2.1 <span style="padding-left:0.5em">Jumlah hasil penelitian dan hasil pengabdian masing-masing PS di<span style="padding-left:3em"> FMIPA IPB dalam tiga tahun terakhir.</h4></span>

</head>

<body>
        <p style="font-size: 11;font-family: arial, helvetica, sans-serif;"><strong>Tabel 9.2</strong> Jumlah hasil penelitian dan hasil pengabdian FMIPA IPB selama tiga tahun terakhir </p>
    <table cellspacing="0" >

            <tr>
                <th></th>
                <th rowspan="4" colspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No.</th>
                <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Nama Program Studi</th>
                <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Hasil penelitian dan Hasil Pengabdian</th>
              </tr>
              <tr>
                  <tr>
                <th></th>
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2<br> <?php echo ($ts2) ?></th>
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1<br> <?php echo ($ts1) ?></th>
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS<br> <?php echo ($ts) ?></th>
                </tr></tr>
                <tr>
                <th></th>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">1.</td>
                <td colspan="6" style="border:1px solid #000;  padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS STK</td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000;  padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')) ?></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">2.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS GFM</td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')) ?></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">3.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS BIO</td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')) ?></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">4.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS KIM</td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')) ?></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">5.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS MAT</td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')) ?></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">6.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS KOM</td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')) ?></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">7.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS FIS</td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')) ?></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">8.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS BIOKIM</td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')) ?></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">9.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS AUK</td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')) ?></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')) ?></td>
                </tr>
                <tr>
                <th></th>
                <tr>
                <th></th>
                <th colspan="7" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Total</th>
                <th colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_hasilPenelitian')) ?></th>
                <th colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_hasilPenelitian')) ?></th>
                <th colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_hasilPenelitian')) ?></th>
                </tr></tr>
</table>
 <footer>
    <h4>Borang 3B Program Studi {{$dept[0]->nama_departemen}}-IPB</h4>
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