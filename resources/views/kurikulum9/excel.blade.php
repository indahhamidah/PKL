<!DOCTYPE html> 
<html>
<head>
  <meta charset="utf-8">
  
</head>

<body>
    <p><strong>Tabel 6.1.5.2</strong> Tuliskan hasil peninjauan tersebut, mengikuti format tabel berikut.:</p>
    <table>
    <thead>
            <tr> 
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;">No.</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;">No. MK</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Nama MK</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >MK Baru / Lama / Hapus</th>
                     <th colspan="4" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Perubahan pada</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Alasan Peninjauan</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Atas Usulan/Masukan dari</th>
                     <th rowspan="3" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Berlaku mulai Sem./Th.</th>
            </tr>
                     <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Silabus/SAP</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Buku Ajar</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                     <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Ya</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Tidak</th>
                      <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Ya</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;; text-align: center;" >Tidak</th>
                        <th></th>
                        <th></th>
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
                   </tr>

</thead>
            
     <tbody>
                  <?php $no = 0;?>
                  @foreach ($kurikulum9 as $kurikulum9)
                 <?php $no++ ;?>
                  <tr>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $no }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->kode_mk_kurikulum9 }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->nama_mk_kurikulum9 }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->status_mk }}</td>
                    @foreach($perubahan_silabus as $perubahan_silabusi)
                        @if($kurikulum9->id_perubahan_pada_silabus == $perubahan_silabusi->id_perubahan_silabus)
                            <td style="border:1px solid #000; border-width: thin; text-align: center;">V</td>
                        @else
                            <td style="border:1px solid #000; border-width: thin;text-align: center;"></td>
                        @endif
                    @endforeach
                    @foreach($perubahan_buku_ajar as $perubahan_buku_ajari)
                        @if($kurikulum9->id_perubahan_pada_buku_ajar == $perubahan_buku_ajari->id_perubahan_buku_ajar)
                            <td style="border:1px solid #000; border-width: thin; text-align: center;">V</td>
                        @else
                            <td style="border:1px solid #000; border-width: thin;text-align: center;"></td>
                        @endif
                    @endforeach
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->alasan_peninjauan }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->usulan }}</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">{{ $kurikulum9->berlaku }}</td>
            @endforeach
           </tr>
            </tbody>
</table>

                    
</body>
</html>