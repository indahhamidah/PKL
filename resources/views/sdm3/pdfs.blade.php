<!DOCTYPE html>
<head>
      <meta charset="utf-8">
      <style type="text/css">
  @page {
      size: 8.27in 11.69in;
     
      margin-top: 1.10in;
      margin-left: 1.18in;
      margin-right: 1.18in;
      margin-bottom: 1.18in;
    }
  </style>
  <title>Tabel 7.1 Penelitian {{$pene[0]->nama_departemen}}</title>
</head>

<body>
<p>7.1   Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS</p>
<p>7.1.1   Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;selama tiga tahun terakhir dengan mengikuti format tabel berikut:</p>
        <p><strong>Tabel 7.1</strong> Data Penelitian Program Studi {{$pene[0]->nama_departemen}}</p>
    <table cellspacing="0" >
    	<tr>  
            <th></th>
            <th width="40px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >Sumber Pembiayaan</font></p></th>
            <th width="40px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >TS-2</font></p></th>
            <th width="40px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >TS-1</font></p></th>
            <th width="40px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >TS</font></p></th>
            <th></th>
        </tr>
        <tr>
        <th></th>
        	<th width="40px" style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:16px"><font face="Times New Rowman" >(1)</font></p></th>
            <th width="40px" style="border:1px solid #000;text-align: center; border-width: thin; "><p style="font-size:16px"><font face="Times New Rowman" >(2)</font></p></th>
            <th width="40px" style="border:1px solid #000;text-align: center; border-width: thin; "><p style="font-size:16px"><font face="Times New Rowman" >(3)</font></p></th>
            <th width="40px" style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:16px"><font face="Times New Rowman" >(4)</font></p></th>
            <th></th>
        </tr>
        <tr>
        <th></th>
        <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">Pembiayaan sendiri oleh peneliti</font></p></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul1}}</font></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul6}}</font></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul11}}</font></td>
        <th></th>
        </tr>
        <tr>
        <th></th>
        <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">PT yang bersangkutan</font></p></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul2}}</font></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul7}}</font></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul12}}</font></td>
        <th></th>
        </tr>
        <tr>
        <th></th>
        <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">Depdiknas</font></p></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul3}}</font></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul8}}</font></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul13}}</font></td>
        <th></th>
        </tr>
        <tr>
        <th></th>
        <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">Institusi dalam negeri di luar Depdiknas</font></p></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul4}}</font></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul9}}</font></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul14}}</font></td>
        <th></th>
        </tr>
        <tr>
        <th></th>
        <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">Institusi luar negeri</font></p></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul5}}</font></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul10}}</font></td>
        <td style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul15}}</font></td>
        <th></th>
        </tr>

        <tr>
            <th></th>
            <td colspan="20">&nbsp;&nbsp;Catatan:(*) dokumen pendukung disediakan pada saat asesmen lapangan.</td>
                   </tr>

</table>
</body>