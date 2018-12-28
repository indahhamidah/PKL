<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Penggunaan Dana</title>
</head>
<body>
	<h4 style="font-family: Arial">Penggunaan Dana FMIPA selama tiga tahun terakir</h4>
	<table>
    <thead>
      <tr>
        <td rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">No</td>
        <td rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jenis Penggunaan</td>
        <td colspan="6" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jumlah Dana dalam Juta Rupiah dan Persentase</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">TS-2 ({{$dateS}})</td>
        <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">TS-1 ({{$dateS1}})</td>
        <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">TS ({{$dateE}})</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Rp</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">%</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Rp</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">%</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Rp</td>
        <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">%</td>
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(1)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(2)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(3)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(4)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(5)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(6)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(7)</td>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">(8)</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">1</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">Pendidikan</td>
          @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{ number_format($total->jum_pend3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{ number_format($total->persen_pend,2) }}</td>
        	@endforeach
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">2</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">Penelitian</td>
        	@foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($total->jum_pen3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{ number_format($total->persen_pen,2) }}</td>
        	@endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">3</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">Pengabdian Kepada Masyarakat</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($total->jum_peng3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{ number_format($total->persen_peng,2) }}</td>
        @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">4</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">Investasi Prasarana</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($total->jum_pras3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{ number_format($total->persen_pras,2) }}</td>
        @endforeach
      </tr>
      <tr>
        <td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">5</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">Investasi Sarana</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($total->jum_sar3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{ number_format($total->persen_sar,2) }}</td>
        @endforeach
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">6</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">Investasi SDM</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($total->jum_sdm3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{ number_format($total->persen_sdm,2) }}</td>
        @endforeach
      </tr>
      <tr>
      	<td style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">7</td>
        <td style="border:1px solid #000; border-width: thin; text-align: left; font-family: Arial">Lain-lain</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($total->jum_lain3,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{ number_format($total->persen_lain,2) }}</td>
        @endforeach
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="2" style="border:1px solid #000; border-width: thin; text-align: center; font-family: Arial">Total</td>
        @foreach($total_ts2 as $total)
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($total->total,2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right; font-family: Arial">{{number_format($total->persen_pend + $total->persen_pen + $total->persen_peng + $total->persen_pras + $total->persen_sar + $total->persen_sdm + $total->persen_lain,2)}}</td>
        @endforeach
      </tr>
    </tfoot>
  </table>
</body>
</html>