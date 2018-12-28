<!DOCTYPE html>
<head>
  <meta charset="utf-8">
 <style type="text/css">
  @page {
      size: 8.27in 11.69in;
      
      margin-top: 1in;
      margin-left: 1in;
      margin-right: 1in;
      margin-bottom: 1in;
    }
  </style>


<p style="font-size: 12;font-family: arial, helvetica, sans-serif;"><b>STANDAR 7 PENELITIAN</p></b>
<p style="font-size: 11;font-family: arial, helvetica, sans-serif;"><b> 7. 1 <span style="padding-left:1em">Penelitian</span></b></p>

<h4>7.1.1 <span style="padding-left:0.5em; font-size: 11;font-family: arial, helvetica, sans-serif;">Jumlah dan dana penelitian yang dilakukan oleh masing-masing PS</span> <span style="padding-left:3em;font-family: arial, helvetica, sans-serif;">di lingkungan FMIPA IPB dalam tiga tahun terakhir.</h4></span>

</head>

<body>
        <p style="font-size: 11;font-family: arial, helvetica, sans-serif;"><strong>Tabel 7.1</strong> Jumlah penelitian dan total dana penelitian FMIPA IPB selama tiga tahun terakhir </p>
    <table cellspacing="0">

           <tr>
            <th></th>
            <th rowspan="2" colspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No.</font></th>
            <th rowspan="2" colspan="6" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Nama Program Studi</font></th>
            <th colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Judul Penelitian</font></th>
            <th colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Dana Penelitian</font></th>
          </tr>

           

          <tr>
            <th colspan="8"></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2<br> <?php echo ($ts2) ?></font></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1<br> <?php echo ($ts1) ?></font></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS<br> <?php echo ($ts) ?></font></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2<br> <?php echo ($ts2) ?></font></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1<br> <?php echo ($ts1) ?></font></th>
            <th style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS<br> <?php echo ($ts) ?></font></th>
            </tr>
            <tr>
            <th></th>
            <tr>
            <th></th>
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">1.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS STK</font></p></td>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')) ?></font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')) ?></font></p></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')) ?></font></p></td>
            </tr>
            <tr>
            <th></th>
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">2.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS GFM</font></p></td>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')) ?></font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')) ?></font></p></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')) ?></font></p></td>

            </tr>
            <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">3.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS BIO</font></p></td>
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_penelitian')) ?></font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')) ?></font></p></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')) ?></font></p></td>
             <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')) ?></font></p></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">4.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS KIM</font></p></td>
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')) ?></font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')) ?></font></p></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')) ?></font></p></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">5.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS MAT</font></p></td>
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')) ?></font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')) ?></font></p></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')) ?></font></p></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">6.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS KOM</font></p></td>
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')) ?></font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')) ?></font></p></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')) ?></font></p></td>
             <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')) ?></font></p></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">7.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS FIS</font></p></td>
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')) ?></font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')) ?></font></p></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')) ?></font></p></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">8.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS BIOKIM</font></p></td>
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')) ?></font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')) ?></font></p></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')) ?></font></p></td>
            </tr>
             <tr>
            <th></th>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">9.</td>
            <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS AUK</font></p></td>
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')) ?></font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')) ?></font></p></td>
             <!-- TS-1 -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')) ?></font></p></td>
            <!-- TS -->
            <td style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')) ?></font></p></td>
            </tr>
            </tr></tr>
            
    
             <tr>
            <th></th>
            <tr>
            <th></th>
            <th colspan="7" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Total</font></p></th>
            <th colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_penelitian')) ?></font></p></th>
            <th style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_penelitian')) ?></font></p></th>
            <th style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_penelitian')) ?></font></p></th>
            <th style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->sum('jumlah_dana')) ?></font></p></th>
            <th style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->sum('jumlah_dana')) ?></font></p></th>
            <th style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->sum('jumlah_dana')) ?></font></p></th>
            </tr></tr>

            <div>
            <p style="font-size: 10;font-family: arial, helvetica, sans-serif;">Catatan: Kegiatan yang dilakukan bersama oleh dua PS atau lebih sebaiknya dicatat sebagai</span> <span style="padding-left:3.5em"> kegiatan PS yang relevansinya paling dekat</font></p>
            <p style="font-size: 10;font-family: arial, helvetica, sans-serif;">Keterangan: <span style="padding-left:0.5em">STK – Statistika, GFM - Geofisika & Meteorologi, BIO – Biologi, KIM – Kimia,</span> <span style="padding-left:5.5em"> MAT – Matematika,KOM - Ilmu Komputer, FIS – Fisika, BIK – Biokimia</span>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Data pada TS (2017) sampai bulan Desember 2017</i></span>
            </font></p></span></font></p>
            </div>
            </table>
            @foreach ($redaksiPenelitianFmipa as $redaksi1fmipa)
            {!! $redaksi1fmipa->redaksi_penelitian_fmipa !!}
            @endforeach

            
   
</body>