<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Tabel 3.2 Rata-rata Masa Studi dan IPK</title>
</head>
<table cellspacing="0">
           <tr>
            <th colspan="1" align=left valign=top style="font-size:16px"><font face="Times New Rowman" ></font></th>
             <td colspan="4" style="text-align: left" style="font-size:16px"><font face="Times New Rowman" ><strong>Tabel 3.2 </strong>Rata-rata Masa Studi dan IPK Lulusan FMIPA menurut Program Studi periode TA <?php echo Carbon::now()->startOfYear()->subYear(3)->format('Y') ?>/<?php echo Carbon::now()->startOfYear()->subYear(2)->format('Y') ?>, <?php echo Carbon::now()->startOfYear()->subYear(2)->format('Y') ?>/<?php echo Carbon::now()->startOfYear()->subYear(1)->format('Y') ?>, dan <?php echo Carbon::now()->startOfYear()->subYear(1)->format('Y') ?>/<?php echo Carbon::now()->startOfYear()->format('Y') ?></font></td>
           </tr>
            <tr>
            <th></th>
            <th rowspan="2" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Program Studi</font></p></th>
            <th colspan="2" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >MASA STUDI</font></p></th>
            <th rowspan="1" style="border:1px solid #000; border-bottom:0px; border-bottom:0px; border-width: thin; background-color:#daeef3;text-align: center"><p style="font-size:16px"><font face="Times New Rowman" >Rata-rata</font></p></th>
            </tr>
            <tr>
            <th></th>
            <th colspan="1" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >(Bulan)</font></p></th>
            <th colspan="1" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >(Tahun)</font></p></th>
            <th rowspan="1" style="border:1px solid #000; border-top:0px; border-bottom:0px; border-width: thin; background-color:#daeef3;text-align: center"><p style="font-size:16px"><font face="Times New Rowman" > IPK Lulusan</font></p></th>
            <!-- <th></th> -->
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G1 PS1-STATISTIKA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->avg('total_bulan'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->avg('total_tahun'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->avg('ipk'),2) ?></font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G2 PS2-METEOROLOGI TERAPAN</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->avg('total_bulan'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->avg('total_tahun'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->avg('ipk'),2) ?></font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G3 PS3-BIOLOGI</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->avg('total_bulan'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->avg('total_tahun'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->avg('ipk'),2) ?></font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G4 PS4-KIMIA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->avg('total_bulan'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->avg('total_tahun'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->avg('ipk'),2) ?></font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G5 PS5-MATEMATIKA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->avg('total_bulan'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->avg('total_tahun'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->avg('ipk'),2) ?></font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G6 PS6-ILMU KOMPUTER</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->avg('total_bulan'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->avg('total_tahun'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->avg('ipk'),2) ?></font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G7 PS7-FISIKA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->avg('total_bulan'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->avg('total_tahun'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->avg('ipk'),2) ?></font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G8 PS8-BIOKIMIA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->avg('total_bulan'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->avg('total_tahun'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->avg('ipk'),2) ?></font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G9 PS9-AKTUARIA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->avg('total_bulan'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->avg('total_tahun'),2) ?></font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman"><?php echo number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->avg('ipk'),2) ?></font></p></td>
            </tr>
            <tr>
            <th></th>
            <th colspan="1" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=right><p style="font-size:16px"><font face="Times New Rowman" >RATA-RATA FMIPA</font></p></th>
            <th colspan="1" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=right><p style="font-size:16px"><font face="Times New Rowman" ><?php echo number_format($rata_bln,2) ?></font></p></th>
            <th colspan="1" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=right><p style="font-size:16px"><font face="Times New Rowman" ><?php echo number_format($rata_thn,2) ?></font></p></th>
            <th colspan="1" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=right;><p style="font-size:16px"><font face="Times New Rowman" ><?php echo number_format($rata_ipk,2) ?></font></p></th>
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
            <td colspan="2"><p style="font-size:16px"><font face="Times New Rowman"><u>Catatan:</u> * Belum ada lulusan</font></p></td>
            </tr>;

</table>
</body>
</html>