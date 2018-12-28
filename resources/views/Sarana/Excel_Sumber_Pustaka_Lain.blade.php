<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Sumber Pustaka di Lembaga Lain</title>
</head>
<body>
	<h4 style="font-family: Arial">Sumber Pustaka di Lembaga Lain</h4>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">No</td>
				<td style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-family: Arial">Sumber Pustaka</td>
			</tr>
		</thead>
		<tbody>
			<?php $no=0; ?>
			@foreach($sumber_pustaka_lain as $sumber_lain)
			<?php $no++; ?>
			<tr>
				<td style="border:1px solid #000; border-width: thin; text-align: center;font-family: Arial">{{$no}}</td>
				<td style="border:1px solid #000; border-width: thin; text-align: left;font-family: Arial">{{$sumber_lain->nama_sumber_pustaka_lain}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>