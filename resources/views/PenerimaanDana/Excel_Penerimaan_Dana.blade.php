<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Penerimaan Dana</title>
</head>
<body>
	<h4 style="font-family: Arial">5.2.1 Tuliskan realisasi perolehan dan alokasi dana (termasuk hibah) dalam juta rupiah termasuk gaji, selama tiga tahun terakhir, pada tabel berikut:</h4>
	<table>
		<thead>
			<tr>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Sumber Dana</td>
        <td rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jenis Dana</td>
        <td colspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Jumlah Dana (Juta Rupiah)</td>
        <tr>
          <th></td>
          <th></td>
          <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial;">TS-2 ({{$tahun_dua_lalu}})</td>
          <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">TS-1 ({{$tahun_satu_lalu}})</td>
          <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">TS ({{$tahun_sekarang}})</td>
          <tr>
					<td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">(1)</td>
					<td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">(2)</td>
					<td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">(3)</td>
					<td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">(4)</td>
					<td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">(5)</td>
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
            <td rowspan="{{count($jumlah1)}}" style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">
              {{$sumber[$key1]}}
            </td>
          @endif
          <td style="border:1px solid #000; border-width: thin; text-align: left;font-family: Arial">
            {{$jns[$key1][$key2]}}
          </td>
          @if($key2 != 0)
            <td style="border:1px solid #000; border-width: thin; text-align: left;font-family: Arial"></td>
          @endif
          @foreach($jumlah2 as $key3 => $jumlah3)
            <td style="border:1px solid #000; border-width: thin; text-align: right;font-family: Arial">
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
      	<td colspan="2" style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">Total</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;font-family: Arial">{{number_format($total[0],2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;font-family: Arial">{{number_format($total[1],2)}}</td>
        <td style="border:1px solid #000; border-width: thin; text-align: right;font-family: Arial">{{number_format($total[2],2)}}</td>
      </tr>
    </tfoot>
	</table>
</body>
</html>