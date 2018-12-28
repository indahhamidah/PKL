<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
</head>

<body>
    <p><strong>Tabel 6.1.3</strong> Tuliskan mata kuliah pilihan yang dilaksanakan dalam tiga tahun terakhir, pada tabel berikut:</p>
    <table>
    <thead>
            <tr>  
            <th rowspan="2" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;">Semester</th>
            <th rowspan="2" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;">Kode MK</th>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Nama MK (Pilihan)</th>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Bobot sks</th>
            <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Bobot Tugas*</th>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Unit/ Jur/ Fak Pengelola</th>

            </tr>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Ya</th>
                <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Tidak</th>
                <th></th>
            </tr>

</thead>
            
     <tbody>
     @foreach ($kurikulum6 as $kurikulum6)
                  <tr>
                    <td style="border:1px solid #000;text-align: center;">{{ $kurikulum6->semesterr }}.</td>
                    <td style="border:1px solid #000; text-align: center;">{{ $kurikulum6->kode_mk_kurikulum6 }}</td>
                    <td style="border:1px solid #000; text-align: center;"> {{ $kurikulum6->nama_mk_kurikulum6 }}</td>
                    <td style="border:1px solid #000;text-align: center;">{{ $kurikulum6->jumlah_sks }}</td>
                    @foreach($bobot_tugas as $bobot_tugasi)
                        @if($kurikulum6->id_bobottugas == $bobot_tugasi->id_bobot_tugas)
                            <td style="border:1px solid #000; border-width: thin; text-align: center;">V</td>
                        @else
                            <td style="border:1px solid #000; border-width: thin;text-align: center;"></td>
                        @endif
                    @endforeach
                     <td style="border:1px solid #000;text-align: center;">{{ $kurikulum6->pengelola }}</td>
            @endforeach
           
            </tbody>
</table>

                    <p colspan="7" style="text-align: justify;">* beri tanda V pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) > 20%.</p>
</body>
</html>