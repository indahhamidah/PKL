<!DOCTYPE html>
<head>
  <meta charset="utf-8">

</head>

<body>
        <p><strong>Tabel 7.1</strong> Jumlah penelitian dan total dana penelitian FMIPA IPB selama tiga tahun terakhir </p>
    <table>
    	<thead>

           <tr>
            <th></th>
            <th rowspan="3" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">No</th>
            <th rowspan="3" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;">Nama Program Studi</th>
            <th colspan="3" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Judul Penelitian</th>
            <th colspan="3" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Jumlah Dana Penelitian</th>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th rowspan="2" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-2 <br><?php echo ($ts2) ?></th>
            <th rowspan="2" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-1<br> <?php echo ($ts1) ?></th>
            <th rowspan="2" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS<br> <?php echo ($ts) ?></th>
            <th rowspan="2" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-2<br> <?php echo ($ts2) ?></th>
            <th rowspan="2" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS-1<br> <?php echo ($ts1) ?></th>
            <th rowspan="2" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">TS<br> <?php echo ($ts) ?></th>
            </tr>
            </thead>
            <tr>
            <th></th>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">1.</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin;">Dep/PS STK</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin;text-align: center;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;border-width: thin;text-align: center;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin;text-align: center;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;border-width: thin;text-align: center;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')) ?></font>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin;text-align: center;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;border-width: thin;text-align: center;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')) ?></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000;text-align: center">2.</td>
            <td colspan="1" style="border:1px solid #000;">Dep/PS GFM</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')) ?></td>

            </tr>
            <tr>
            <th></th>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ">3.</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; ">Dep/PS BIO</td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')) ?></td>
             <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')) ?></td>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: ">4.</td>
            <td colspan="1" style="border:1px solid #000;border-width: thin;">Dep/PS KIM</td>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')) ?></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ">5.</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; ">Dep/PS MAT</td>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')) ?></td>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ">6.</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; ">Dep/PS KOM</td>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')) ?></td>
             <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')) ?></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ">7.</td>
            <td colspan="1" style="border:1px solid #000;border-width: thin; ">Dep/PS FIS</font></p></td>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')) ?></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;">8.</td>
            <td colspan="1" style="border:1px solid #000;border-width: thin; ">Dep/PS BIOKIM</td>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')) ?></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; ">9.</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; ">Dep/PS AUK</td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')) ?></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')) ?></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')) ?></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')) ?></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')) ?></td>
            </tr>
            </tr></tr>
            
    
             <tr>
            
            <th></th>
            <td colspan="2" style="border:1px solid #000;text-align: center; border-width: thin; ">Total</font></p></td>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_penelitian')) ?></td>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_penelitian')) ?></td>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->where('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(0)->subMonth(4)])->count('judul_penelitian')) ?></td>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->sum('jumlah_dana')) ?></td>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->sum('jumlah_dana')) ?></td>
            <td colspan="1" style="border:1px solid #000;text-align: center; border-width: thin; "><?php echo number_format(DB::table('penelitians')->where('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(0)->subMonth(4)])->sum('jumlah_dana')) ?></td>
            </tr>



           


</table>
</body>