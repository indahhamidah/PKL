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
  </style>
	<title>Penggunaan Dana Program Studi {{$dept[0]->nama_departemen}}</title>
</head>
<body>
	<h4>Penggunaan Dana FMIPA selama tiga tahun terakhir</h4>
	<table cellpadding="8", cellspacing="0">
    <thead>
      <tr>
        <th width="30px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">No</th>
        <th width="100px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jenis Penggunaan</th>
        <th width="390px" colspan="6" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana dalam Juta Rupiah dan Persentase</th>
        @if(Auth::User()->id_departemen!=10)
        <th width="80px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Rata-rata per tahun</th>
        @endif
      </tr>
      <tr>
        <th width="100px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-2 ({{$dateS}})</th>
        <th width="100px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS-1 ({{$dateS1}})</th>
        <th width="100px" colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">TS ({{$dateE}})</th>
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
        @if(Auth::User()->id_departemen!=10)
        <th style="border:1px solid #000; border-width: thin; text-align: center;">(9)</th>
        @endif
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">1</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Pendidikan</td>
          @foreach($total_ts2 as $total) 
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_pend3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{ number_format($total->persen_pend,2) }}</td>
        	@endforeach
        @if(Auth::User()->id_departemen!=10)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($rata_pend,2) }}</td>
        @endif
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center;">2</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Penelitian</td>
        	@foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_pen3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{ number_format($total->persen_pen,2) }}</td>
        	@endforeach
        @if(Auth::User()->id_departemen!=10)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($rata_pen,2) }}</td>
        @endif
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">3</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Pengabdian Kepada Masyarakat</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_peng3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{ number_format($total->persen_peng,2) }}</td>
        @endforeach
        @if(Auth::User()->id_departemen!=10)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($rata_peng,2) }}</td>
        @endif
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">4</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi Prasarana</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_pras3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{ number_format($total->persen_pras,2) }}</td>
        @endforeach
        @if(Auth::User()->id_departemen!=10)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($rata_pras,2) }}</td>
        @endif
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">5</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi Sarana</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_sar3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{ number_format($total->persen_sar,2) }}</td>
        @endforeach
        @if(Auth::User()->id_departemen!=10)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($rata_sar,2) }}</td>
        @endif
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center;">6</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Investasi SDM</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_sdm3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{ number_format($total->persen_sdm,2) }}</td>
        @endforeach
        @if(Auth::User()->id_departemen!=10)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($rata_sdm,2) }}</td>
        @endif
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center;">7</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left;">Lain-lain</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->jum_lain3,2); ?></td>
        <td style="border:1px solid #000; border-width: thin; text-align: center;">{{ number_format($total->persen_lain,2) }}</td>
        @endforeach
        @if(Auth::User()->id_departemen!=10)
        <td style="border:1px solid #000; border-width: thin; text-align: right;">{{ number_format($rata_lain,2) }}</td>
        @endif
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="2" style="border:1px solid #000; border-width: thin; text-align: center;">Total</th>
        @foreach($total_ts2 as $total)
        <th style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($total->total,2); ?></th>
        <th style="border:1px solid #000; border-width: thin; text-align: center;">{{number_format($total->persen_pend + $total->persen_pen + $total->persen_peng + $total->persen_pras + $total->persen_sar + $total->persen_sdm + $total->persen_lain,2)}}</th>
        @endforeach
        @if(Auth::User()->id_departemen!=10)
        @foreach($rata_semua as $rata)
        <th style="border:1px solid #000; border-width: thin; text-align: right;"><?php echo number_format($rata->total_rata,2); ?></th>
        @endforeach
        @endif
      </tr>
    </tfoot>
  </table>
</body>
</html>