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

<p style="font-size: 12;font-family: arial, helvetica, sans-serif;"><b>STANDAR 9.  LUARAN DAN CAPAIAN</b></p>
<p style="font-size: 11;font-family: arial, helvetica, sans-serif;"><b> 9. 2 <span style="padding-left:1em">Hasil Penelitian dan Hasil Pengabdian</b></p></span>

<h4 style="font-family: arial, helvetica, sans-serif;">9.2.1 <span style="padding-left:0.5em">Jumlah hasil penelitian dan hasil pengabdian masing-masing PS di<span style="padding-left:3em"> FMIPA IPB dalam tiga tahun terakhir.</h4></span>

</head>

<body>
        <p style="font-size: 11;font-family: arial, helvetica, sans-serif;"><strong>Tabel 9.2</strong> Jumlah hasil penelitian dan hasil pengabdian FMIPA IPB selama tiga tahun terakhir </p>
    <table cellspacing="0" >

            <tr>
                <th></th>
                <th rowspan="4" colspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">No.</font></th>
                <th rowspan="4" colspan="6" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Nama Program Studi</font></th>
                <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Jumlah Hasil penelitian dan Hasil Pengabdian</font></th>
              </tr>
              <tr>
                  <tr>
                <th></th>
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-2<br> <?php echo ($ts2) ?></font></th>
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS-1<br> <?php echo ($ts1) ?></font></th>
                <th rowspan="2" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">TS<br> <?php echo ($ts) ?></font></th>
                </tr></tr>
                <tr>
                <th></th>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">1.</td>
                <td colspan="6" style="border:1px solid #000;  padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS STK</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000;  padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">2.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS GFM</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">3.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS BIO</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">4.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS KIM</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">5.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS MAT</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">6.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS KOM</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">7.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS FIS</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">8.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS BIOKIM</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">9.</td>
                <td colspan="6" style="border:1px solid #000; padding: 5px; font-size: 10;font-family: arial, helvetica, sans-serif;">Dep/PS AUK</font></p></td>
                <!-- TS-2 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS-1 -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')) ?></font></p></td>
                <!-- TS -->
                <td colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')) ?></font></p></td>
                </tr>
                <tr>
                <th></th>
                <tr>
                <th></th>
                <th colspan="7" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;">Total</font></p></th>
                <th colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_hasilPenelitian')) ?></font></p></th>
                <th colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_hasilPenelitian')) ?></font></p></th>
                <th colspan="1" style="border:1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family: arial, helvetica, sans-serif;"><?php echo number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_hasilPenelitian')) ?></font></p></th>
                </tr></tr>
</table>
</body>