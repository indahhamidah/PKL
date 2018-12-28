<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible", content="ie=edge">
	<title>Tabel 3.2 Rata-rata IPK lulusan Program Studi {{$lulusan[0]->nama_departemen}} </title>
</head>
<body>
      <h4> Tabel 3.2 Rata-rata IPK Lulusan Program Studi {{$lulusan[0]->nama_departemen}} Tahun Ajaran <?php echo $ts ?>/<?php echo $ts1 ?> <br> hingga <?php echo $ts4 ?>/<?php echo $ts5 ?> </h4>
      <table cellspacing="0" >

            <tr>  
            <!-- <th></th> -->
            <!-- <th></th> -->
            
            <th width="150px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Tahun Akademik</font></p></th>
            <th width="200px" colspan="3" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >IPK Lulusan Reguler</font></p></th>
           <th width="250px" colspan="3" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Persentase Lulusan Reguler dengan IPK:</font></p></th>
            <th></th>
                </tr>
                <tr><th></th></tr>
                <tr>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Min</font></p></th>
                  <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Rat</font></p></th>
                  <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Max</font></p></th>
                  <th width="80px" style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman"> &lt; 2,75 </font></p></th>
                  <th width="80px" style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > 2,75 - 3,50 </font></p></th>
                  <th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > > 3,50 </font></p></th>
                  <th></th>
                </tr>

                  <tr>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman">TS -4</font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($min4,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($avg4,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($max4,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($min_ts4/$jum_ts4)*100,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($tengah_ts4/$jum_ts4)*100,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;><font face="Times New Rowman"><?php echo number_format(($max_ts4/$jum_ts4)*100,2) ?></td>
                    <td></td>
                   </tr>
                   <tr>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman">TS -3</font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($min3,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($avg3,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($max3,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($min_ts3/$jum_ts3)*100,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($tengah_ts3/$jum_ts3)*100,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($max_ts3/$jum_ts3)*100,2) ?></font></p></td>
                    <td></td>
                   </tr>
                   <tr>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman">TS -2</font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($min2,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($avg2,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($max2,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($min_ts2/$jum_ts2)*100,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($tengah_ts2/$jum_ts2)*100,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($max_ts2/$jum_ts2)*100,2) ?></font></p></td>
                    <td></td>
                   </tr>
                   <tr>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman">TS -1</font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($min1,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($avg1,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($max1,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($min11/$total_jml_ts1)*100,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($tengah_ts1/$total_jml_ts1)*100,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($max_ts1/$total_jml_ts1)*100,2) ?></font></p></td>
                    <td></td>
                   </tr>
                   <tr>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman">TS</font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($min0,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($avg0,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format($max0,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($mints/$total_jml)*100,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($tengahts/$total_jml)*100,2) ?></font></p></td>
                   <td align="center" style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(($maxts/$total_jml)*100,2) ?></font></p></td>
                    <td></td>                    
                  </tr>
                  <tr>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Rata-rata</font></p></th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" ><?php echo number_format(($min4+$min3+$min2+$min1+$min0)/5,2) ?></font></p></th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" ><?php echo number_format(($avg4+$avg3+$avg2+$avg1+$avg0)/5,2) ?></font></p></th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" ><?php echo number_format(($max4+$max3+$max2+$max1+$max0)/5,2) ?></font></p></th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" ><?php echo number_format(((($mints/$total_jml)*100)+(($min11/$total_jml_ts1)*100)+(($min_ts2/$jum_ts2)*100)+(($min_ts3/$jum_ts3)*100)+(($min_ts4/$jum_ts4)*100))/5,2) ?> </font></p></th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" ><?php echo number_format((((($tengahts/$total_jml)*100)+($tengah_ts1/$total_jml_ts1)*100)+(($tengah_ts2/$jum_ts2)*100)+(($tengah_ts3/$jum_ts3)*100)+(($tengah_ts4/$jum_ts4)*100))/5,2) ?></font></p></th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" ><?php echo number_format(((($maxts/$total_jml)*100)+(($max_ts1/$total_jml_ts1)*100)+(($max_ts2/$jum_ts2)*100)+(($max_ts3/$jum_ts3)*100)+(($max_ts4/$jum_ts4)*100))/5,2) ?></font></p></th>
                  <th></th>
                  </tr> 
</table>
          @foreach ($redaksiLulusan as $redaksilus)
            {!! $redaksilus->redaksi_lulusan!!}
            @endforeach
 
</body>
</html>