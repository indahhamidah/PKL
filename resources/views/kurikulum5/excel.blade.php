<!DOCTYPE html>    
<html>
<head>
  <meta charset="utf-8">
  
</head>

<body>
    <p><strong> Tuliskan struktur kurikulum berdasarkan urutan mata kuliah (MK) semester demi semester, dengan mengikuti format tabel berikut:</strong></p>
    <table>
    <thead>
            <tr>  
            <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;">Smt</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;">Kode MK</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Nama Mata Kuliah</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Bobot sks</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >sks MK dalam Kurikulum</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Bobot Tugas</th>
                     <th colspan="6" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Kelengkapan</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;" >Unit/ Jur/ Fak Penyelenggara</th>

            </tr>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Inti</th>
                       <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Insti-<br>tusional</th>
                       <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Ya</th>
                       <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Tidak</th>
                       <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Deskripsi</th>
                       <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Silabus</th>
                       <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >SAP</th>
                
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Ya</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Tidak</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Ya</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Tidak</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Ya</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 8;" >Tidak</th>
            </tr>
            <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(1)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(2)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(3)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(4)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(5)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(6)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(7)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(8)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(9)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(10)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(11)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(12)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(13)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(14)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(15)</th>
                   </tr>

</thead>
            
     <tbody>
        @foreach ($kurikulum5 as $kurikulum5)
         <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum5->semesterr }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum5->kode_mk_kurikulum5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $kurikulum5->nama_mk_kurikulum5 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum5->jumlah_sks }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum5->sks_inti }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum5->sks_institusional }}</td>
                     @foreach($bobot_tugas as $bobot_tugasi)
                    @if($kurikulum5->id_bobottugas == $bobot_tugasi->id_bobot_tugas)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                     @foreach($kelengkapan_deskripsi as $kelengkapan_deskripsii)
                    @if($kurikulum5->id_kelengkapandeskripsi == $kelengkapan_deskripsii->id_kelengkapan_deskripsi)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                     @foreach($kelengkapan_silabus as $kelengkapan_silabusi)
                    @if($kurikulum5->id_kelengkapansilabus == $kelengkapan_silabusi->id_kelengkapan_silabus)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                     @foreach($kelengkapan_sap as $kelengkapan_sapi)
                    @if($kurikulum5->id_kelengkapansap == $kelengkapan_sapi->id_kelengkapan_sap)
                      <td style="border: 1px solid #000; padding: 5px; text-align: center;">&#x2714</td>
                      @else
                        <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    @endif
                  @endforeach
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $kurikulum5->penyelenggara }}</td>
                   </tr>
            @endforeach
            <tr>
                <td colspan="4" style="border: 1px solid #000; padding: 5px; text-align: center;">Jumlah</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"><?php echo $totalinti ?></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"><?php echo $totalinstitusional ?></td>
                      <td colspan="9" style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
            </tr>
           
            </tbody>
</table>

</body>
</html>