<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Dana Kegiatan Tridarma</title>
</head>
<body>
	<p style="font-family: Arial">Penggunaan dana untuk penyelenggaraan kegiatan tridarma per program studi</p>
	<table>
		<thead>
	    <tr>
	      <td rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">No</td>
	      <td rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">Program Studi (Departemen)</td>
	      <td colspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">Jumlah Dana dalam Juta Rupiah</td>
		    <tr>
		    	<th></th>
		    	<th></th>
		      <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">TS-2 ({{$dateS}})</td>
		      <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">TS-1 ({{$dateS2}})</td>
		      <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">TS ({{$dateE}})</td>
		    </tr>
		    <tr>
		    	<th></th>
		    	<th></th>
		      <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">Rp</td>
		      <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">Rp</td>
		      <td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-family: Arial">Rp</td>
		    </tr>
		    <tr>
		    	<td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">(1)</td>
		    	<td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">(2)</td>
		    	<td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">(3)</td>
		    	<td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">(4)</td>
		    	<td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">(5)</td>
		    </tr>
			</tr>
	    </thead>
	      <tbody id="tridarma_list" name="tridarma_list">
	        <?php $nmr=0; ?>
	        @foreach($jumlah as $key1 => $jumlah1)
	        <?php $nmr++; ?>
	        <tr>
	          <td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">{{$nmr}}</td>
	          <td style="border:1px solid #000; border-width: thin; text-align: left;font-family: Arial">PS/Dep {{$pakai[$key1]}}</td>
	          @foreach($jumlah1 as $key2 => $jumlah2)
	          <td style="border:1px solid #000; border-width: thin; text-align: right;font-family: Arial">{{$jumlah1[$key2]}}</td>
	          @endforeach
	        </tr>
	        @endforeach
	      </tbody>
	     	<tfoot>
	      	<tr>
	        	<td colspan="2" style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">Total</td>
	          <td style="border:1px solid #000; border-width: thin; text-align: right;font-family: Arial">{{$totaal[0]}}</td>
	          <td style="border:1px solid #000; border-width: thin; text-align: right;font-family: Arial">{{$totaal[1]}}</td>
	          <td style="border:1px solid #000; border-width: thin; text-align: right;font-family: Arial">{{$totaal[2]}}</td>
	        </tr>
	      </tfoot>
	   </table>
</body>
</html>