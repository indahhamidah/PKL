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
	<title>Standar 5 Keuangan, Sarana dan Prasarana serta Sistem Informasi</title>
</head>
<body>
	<h3 style="text-align: justify;">STANDAR 5. KEUANGAN, SARANA DAN PRASARANA SERTA SISTEM INFORMASI</h3>
	<h3>5.1 Pembiayaan</h3>
	<h4 style="text-align: justify;">5.1.1 Jumlah dana termasuk gaji dan upah yang diterima FMIPA selama tiga tahun terakhir</h4>
	<!-- Penerimaan dana -->
	<h4>a. Penerimaan Dana</h4>
	<p><strong>Tabel 5.1</strong>Jumlah Dana diterima FMIPA selama tiga tahun terakhir</p>
	<table cellpadding="8", cellspacing="0">
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
					<th style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: center;">(1)</th>
					<th style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: center;">(2)</th>
					<th style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: center;">(3)</th>
					<th style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: center;">(4)</th>
					<th style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: center;">(5)</th>
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
              {{$sumber[$key1]}}
            </td>
          @endif
          <td style="border:1px solid #000; border-width: thin; text-align: left;">
             {{$jns[$key1][$key2]}}
          </td>
          @if($key2 != 0)
            <!-- <td style="border:1px solid #000; border-width: thin; text-align: left;"></td> -->
          @endif
          @foreach($jumlah2 as $key3 => $jumlah3)
            <td style="border:1px solid #000; border-width: thin; text-align: right;">
              {{number_format($jumlah3,2)}}
            </td>
          @endforeach
        </tr>
      @endforeach
    @endforeach
    @endif
    </tbody>
    <tfoot>
    	<tr>
      	<th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: center;">Total</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align:right;">{{number_format($total[0],2)}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: right;">{{number_format($total[1],2)}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: right;">{{number_format($total[2],2)}}</th>
      </tr>
    </tfoot>
	</table>
<!-- Penggunaan dana -->
	<h4>b. Penggunaan Dana</h4>
	<p><strong>Tabel 5.2</strong> Penggunaan Dana FMIPA selama tiga tahun terakhir</p>
	<table cellpadding="8", cellspacing="0">
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
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$total->jum_pend3 }}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_pend,2) }}</td>
        	@endforeach
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center;">2</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Penelitian</td>
        	@foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$total->jum_pen3}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_pen,2) }}</td>
        	@endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">3</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Pengabdian Kepada Masyarakat</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$total->jum_peng3}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_peng,2) }}</td>
        @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">4</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi Prasarana</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$total->jum_pras3}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_pras,2) }}</td>
        @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">5</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi Sarana</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$total->jum_sar3}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_sar,2) }}</td>
        @endforeach
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center;">6</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi SDM</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$total->jum_sdm3}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_sdm,2) }}</td>
        @endforeach
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center;">7</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Lain-lain</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$total->jum_lain3}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($total->persen_lain,2) }}</td>
        @endforeach
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: center;">Total</th>
        @foreach($total_ts2 as $total)
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: right;">{{$total->total}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3; text-align: right;">{{number_format($total->persen_pend + $total->persen_pen + $total->persen_peng + $total->persen_pras + $total->persen_sar + $total->persen_sdm + $total->persen_lain,2)}}</th>
        @endforeach
      </tr>
    </tfoot>
  </table>

<!-- Penggunaan dana tridarma per-ps -->
<h4>c. Penggunaan Dana menurut Program Studi</h4>
<p style="text-align: justify;"><strong>Tabel 5.3</strong> Penggunaan dana untuk penyelenggaraan kegiatan tridarma per program studi</p>
	<table cellpadding="8", cellspacing="0">
		<thead>
	    <tr>
	      <th width="30px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
	      <th width="220px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Program Studi (Departemen)</th>
	      <th width="300px" colspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana dalam Juta Rupiah</th>
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
	          <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$jumlah1[$key2]}}</td>
	          @endforeach
	        </tr>
	        @endforeach
	      </tbody>
	     	<tfoot>
	      	<tr>
	        	<th colspan="2" style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: center;">Total</th>
	          <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{$totaal[0]}}</th>
	          <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{$totaal[1]}}</th>
	          <th style="border:1px solid #000; border-width: thin;background-color:#daeef3; text-align: right;">{{$totaal[2]}}</th>
	        </tr>
	      </tfoot>
	   </table>

	   <!-- pendapat pimpinan fmipa -->
	  <h4 style="text-align: justify;">5.1.2 Pendapat pimpinan FMIPA IPB tentang perolehan dana pada butir 5.1.1 yang mencakup aspek: kecukupan dan upaya pengembangannya serta kendala-kendala yang dihadapi</h4>
      @foreach($pendapat_pimpinan as $pendapat_pimp)
        	<p style="text-align: justify;"><?php echo nl2br ($pendapat_pimp->keterangan); ?></p>
      @endforeach
	   <h3>5.2 Sarana</h3>
    <!-- sarana -->
    <h4 style="text-align: justify;">5.2.1 Penilaian FMIPA IPB tentang sarana untuk menjamin penyelenggaraan program Tridarma PT yang bermutu tinggi. Uraian ini mencakup aspek: kecukupan/ ketersediaan/akses dan kewajaran serta rencana pengembangan dalam lima tahun mendatang, serta kendala yang dihadapi dalam penambahan sarana.</h4>
      @foreach($penilaian_fmipa as $penilaiann)
         <p style="text-align: justify;"><?php echo nl2br ($penilaiann->penilaian); ?></p>
			@endforeach
    <!-- sarana tambahan -->
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
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{$sars->jum_inves}}</td>
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
          <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$nomr}}</td>
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
	   <h3>5.3 Prasarana</h3>
    <!-- prasarana -->
    <h4 style="text-align: justify;">5.3.1 Penilaian FMIPA IPB tentang prasarana yang telah dimiliki, khususnya yang digunakan untuk program-program studi. Uraian ini mencakup aspek: kecukupan dan kewajaran serta rencana pengembangan dalam lima tahun mendatang, serta kendala yang dihadapi dalam penambahan prasarana.</h4>
      @foreach($penilaian_pras_fmipa as $penilaian_pras)
         <p style="text-align: justify;"><?php echo nl2br ($penilaian_pras->penilaian_pras); ?></p>
			@endforeach
    <h4 style="text-align: justify;">5.3.2  Prasarana tambahan untuk semua  program studi yang dikelola dalam tiga tahun terakhir. Rencana investasi untuk prasarana dalam lima tahun mendatang.</h4>
    <p style="text-align: justify;"><strong>Tabel 5.3</strong> Investasi, dan Rencana Investasi Prasarana Tambahan FMIPA IPB</p>
    <table  cellpadding="8", cellspacing="0">
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
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$prass->jum_inves}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{$rencana_inves_terakhir_pras[$key]}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">{{$prass->sumber_dana}}</td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
    	<tr>
      	<th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Total</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">{{$total_inves_pras}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">{{$total_rencana_pras}}</th>
        <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"></th>
      </tr>
		</tfoot>
   </table>
   <h3>5.4 Sistem Informasi</h3>
   <h4 style="text-align: justify;">5.4.1	Sistem informasi manajemen dan fasilitas ICT (Information and Communication Technology) yang digunakan FMIPA IPB untuk proses penyelenggaraan akademik dan administrasi (misalkan SIAKAD, SIMKEU, SIMAWA, SIMFA, SIMPEG dan sejenisnya), termasuk distance-learning, serta pemanfaatannya dalam proses pengambilan keputusan dalam pengembangan institusi.</h4>
      @foreach($penjelasan as $jelas)
        {!! $jelas->penjelasan !!}
      @endforeach
    <!-- <br> -->
    <h4>b. <i>Netware</i> (Infrastruktur Jaringan Komputer)</h4>
    <p style="text-align: justify;">Untuk mengoptimasi pengoperasian sistem informasi yang seluruhnya menggunakan arsitektur client/server, maka di IPB, Fakultas dan departemen telah tersedia infrastruktur jaringan dengan topologi jaringan seperti diperlihatkan pada Gambar 6.10.  Jaringan internal IPB dengan jalur backbone yang menggunakan fiber optic memiliki bandwith sampai dengan 1 Gbps. Untuk jaringan Internet, IPB menyediakan akses dengan bandwith 1 Gbps untuk internasional dan 550 Mbps untuk nasional yang dapat digunakan oleh civitas IPB dalam menunjang kegiatan akademik, penelitian, dan pengabdian kepada masyarakat.</p>
    <p style="text-align: center;"><img src="{{ public_path("images/netware/".$netware->gambar_net) }}" alt="" style="width: 550px; height: 300px;"></p>
    <p style="text-align: center;">{{$netware->gambar_net}}</p>
    <!-- hardware -->
    <h4>c. <i>Hardware</i> (Perangkat Keras)</h4>
    <p style="text-align: justify;">Perangkat Keras komputer tersedia baik di IPB, fakultas, maupun departemen. Di samping itu, tersedia beberapa laboratorium komputer untuk mahasiswa yang dikelola oleh DIDSI IPB yaitu <i>Cyber</i> Singkong di Gedung Perpustakaan Lantai 4 sekitar &plusmn; 120 PC, <i>Cyber</i> Merpati &plusmn; 40 PC, Gedung Pusat Komputer (GPK) 50 PC yang dilengkapi dengan layanan ID-IPB dan I-MOVSES (Microsoft <i>Learning</i>). Di level IPB juga tersedia server yang menangani proses administrasi, akademik, kemahasiswaan, keuangan, properti, alumni, kemahasiswaan, perpustakaan, kepegawaian. Untuk level fakultas, tersedia perangkat keras berupa server dan PC untuk proses-proses di atas dalam lingkup fakultas.  Di samping itu, setiap departemen telah memiliki PC tersendiri baik untuk pembelajaran (termasuk <i>e-learning</i>) maupun server, khususnya untuk mendukung pembelajaran, penelitian, penanganan perpustakaan, administrasi, maupun komunikasi dan pengembangan keilmuan.</p>
    <p style="text-align: justify;">FMIPA memiliki dua server untuk web dan pengolahan data. FMIPA juga memiliki dan mengelola 1 laboratorium komputer yang dinamakan <i>Cyber</i> FMIPA yang dapat digunakan oleh dosen dan mahasiswa dalam menyelenggarakan pelatihan/<i>training</i>.  Di samping itu, selain access point yang disediakan departemen-departemen, FMIPA juga menyediakan 2 <i>Free Hotspot (access point)</i> SSID yang digunakan di ruang Dekanat FMIPA dan Perpustakaan FMIPA. Spesifikasi server dan perangkat keras di FMIPA selengkapnya diberikan dalam <strong>Tabel 5.6</strong>.</p>
  <h4><p><strong>Tabel 5.4</strong> Perangkat Keras di Dekanat FMIPA</p></h4>

	<table cellpadding="8", cellspacing="0" >
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
   <p style="text-align: justify;">Pengembangan IT di FMIPA juga didukung oleh tersedianya perangkat keras di setiap departemen yang digunakan untuk keperluan pendidikan, penelitian, dan administrasi. <strong>Tabel 5.5</strong> menyajikan daftar perangkat keras yang ada di Departemen Ilmu Komputer.</p>
  <p style="text-align: justify;"><strong>Tabel 5.5</strong> Perangkat Keras di Departemen Ilmu Komputer</p>
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
  <h4>d. <i>Software</i> (Perangkat Lunak)</h4>
   <p style="text-align: justify;">Perangkat lunak merupakan salah satu bagian terpenting yang mutlak diperlukan dalam penggunaan fasilitas teknologi informasi baik di tingkat institusi hingga  departemen. Berdasarkan lisensinya, perangkat lunak yang digunakan terdiri atas 3 jenis yaitu perangkat lunak komersial, perangkat lunak tidak berbayar, dan perangkat lunak sistem informasi.</p>
   <h4><i>d.1 Perangkat Lunak Komersial</i></h4>
   <p style="text-align: justify;">Perangkat lunak komersial dapat diperoleh melalui program IMOVSES: IPB Microsoft <i>Open Value Subscription for Education Solution</i>, yang merupakan kerjasama IPB dengan Microsoft untuk penggunaan Windows, MS Office, SQL Server, dan Visual Studio. Untuk memiliki aplikasi tersebut mahasiswa dapat mengganti biaya CD dan mendapatkan <i>Sticker Hologram</i> <strong>Gambar 5.11.</strong> Perangkat lunak Microsoft yang termasuk dalam kerjasama IMOVSES adalah</p>
	<table cellpadding="5", cellspacing="">
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
    <h4><i>d.2 Perangkat Lunak Tak Berbayar</i></h4>
      <p style="text-align: justify;">Untuk perangkat lunak gratis baik yang bersifat <i>open source</i> maupun tidak dapat diunduh dari Internet dengan mengakses secara langsung situs-situs pengembang perangkat lunak tersebut. Jenis perangkat lunak tak berbayar yang digunakan meliputi perangkat lunak sistem operasi, utilitas, aplikasi perkantoran, multimedia, edukasi, dan sebagainya. Beberapa perangkat lunak tak berbayar yang banyak digunakan dalam kegiatan praktikum diantaranya R Project for Statistical Computing (<u>https://www.r-project.org/</u>), bahasa pemrograman Python (<u>https://www.python.org/</u>).
    <h4><i>d.3 Perangkat Lunak Sistem Informasi</i></h4>
    	<p style="text-align: justify;">Informasi yang terkelola dengan baik dalam suatu sistem informasi merupakan kebutuhan mutlak di setiap organisasi berskala menengah dan besar di era teknologi informasi saat ini. Sistem informasi yang digunakan di lingkungan IPB di samping disediakan dan dikembangkan oleh institusi (IPB) juga oleh Departemen yang ada. Sistem informasi digunakan secara intensif oleh IPB, Fakultas maupun Departemen dalam rangka meningkatkan layanan akademik maupun non-akademik kepada seluruh civitas akademika. Hingga saat ini FMIPA menggunakan sejumlah sistem informasi yang dikembangkan dalam bentuk aplikasi berbasis web dan aplikasi berbasis Desktop (<strong>Tabel 5.8</strong>). Untuk menunjang kinerja sistem informasi yang seluruhnya bekerja dalam arsitektur <i>client/server</i>, IPB telah menyediakan jaringan internal dengan jalur <i>backbone</i> yang menggunakan kabel serat optik dengan <i>bandwith</i> 1 Gbps, dan jaringan eksternal yang terhubung ke Internet dengan <i>bandwith</i> 1 Gbps untuk internasional dan 550 Mbps untuk nasional. Berikut adalah daftar sistem informasi yang digunakan di FMIPA.</p>
    
	<p><strong>Tabel 5.6</strong> Daftar Sistem Informasi yang digunakan di FMIPA</p>

  <table cellpadding="5", cellspacing="0" >
    <tr>  
      <th align=left valign=top></th>
        <tr>
          <th width="30px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
          <th width="170px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Nama Sistem</th>
          <th width="140px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Bentuk</th>
          <th width="210px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center">Fitur-fitur Sistem</th>
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
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}}. URL: {{$sistem_informasi->url}}</td>
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
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}}. URL: {{$sistem_informasi->url}}</td>
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
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}}. URL: {{$sistem_informasi->url}}</td>
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
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}}. URL: {{$sistem_informasi->url}}</td>
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
        <td style="border:1px solid #000;text-align: left; vertical-align: top">{{ $sistem_informasi->nama_sistem}}</td>
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}}. URL: {{$sistem_informasi->url}}</td>
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
        <td style="border:1px solid #000; vertical-align: top">{{$sistem_informasi->bentuk_si}}. URL: {{$sistem_informasi->url}}</td>
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
  <h4><i>e. Brainware</i></h4>
   <p style="text-align: justify;">Untuk menangani infrastruktur TI, tersedia SDM baik di level IPB, fakultas maupun departemen. Untuk IPB tersedia 53 SDM (2 orang bergelar S3, 2 orang bergelar S2, sisanya adalah S1, D3 dan SMK), sedangkan di setiap fakultas ada 1 SDM, dan di departemen bervariasi. Sebagai contoh Departemen Ilmu Komputer tersedia 3 SDM (1 S2 yang merangkap dosen sebagai penanggung jawab lab, dan 2 orang SMK).</p>
  <h4><i> f. Dataware</i></h4>
   <p style="text-align: justify;">Kehandalan sistem informasi dalam memberikan informasi yang akurat dan reliabel tidak terlepas dari basis data yang menjadi sumber data bagi sistem informasi. Saat ini sistem informasi yang digunakan di IPB, Fakultas dan Departemen sebagian besar menggunakan sistem manajemen database berbasis <i>client/server</i> seperti Microsoft SQL Server dan MySQL. Hak akses langsung terhadap <i>database</i> dibatasi hanya untuk aplikasi dan administrator. Untuk pengguna umum, akses terhadap database diatur oleh administrator sehingga keamanan data lebih terjamin.</p>
   <p style="text-align: justify;">Ke enam komponen TI tersebut memberikan dukungan terhadap semua proses, baik untuk kemahasiswaan (data maupun rekruitmennya), akademik, administrasi, pembelajaran, penelitian, kepegawaian, properti, perpustakaan, dan sebagainya.</p>
  <h4 style="text-align: justify;">5.4.2 Beri tanda V pada kolom yang sesuai (hanya satu kolom per baris) dengan aksesibilitas tiap jenis data, dengan mengikuti format tabel berikut.</h4>
  <table cellpadding="5", cellspacing="0">
    <thead>
      <tr>
        <th width="30px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="190px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Data</th>
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
  <footer>
    <h4>BORANG FMIPA-IPB {{$tahun_sekarang}}</h4>
    <p></p>
  <script type="text/php">
    if (isset($pdf)) {
        $x = 250;
        $y = 10;
        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
        $font = null;
        $size = 14;
        $color = array(255,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }
</script>
  </footer>
</body>
</html>