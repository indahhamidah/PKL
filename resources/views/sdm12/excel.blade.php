<!DOCTYPE html> 
<html>
<head>
  <meta charset="utf-8">
  
</head>

<body>
    <table>
    <td colspan="7" style=" text-align: justify; font-size: 10;"><strong> Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri</strong></td>
    </table>
    <table>
    <thead>
            <tr>  
                 <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;">Nama Dosen</th>
                 <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;" >Jenis Kegiatan*</th>
                 <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;" >Tempat</th>
                 <th rowspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;" >Waktu</th>
                 <th colspan="2" style="border: 1px solid #000;background-color:#daeef3; padding: 5px;" >Sebagai</th>
            </tr>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Penyaji</th>
                <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Peserta</th>
            </tr>

</thead>
            
     <tbody>
     @foreach ($sdm12 as $sdm12)
                  <tr>
                    <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm12->nama_sdm12 }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm12->jenis_kegiatan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm12->tempat_kegiatan }}</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">{{ $sdm12->waktu_kegiatan }}</td>
                    @foreach($peran_kegiatan as $hakii)
                        @if($sdm12->id_status_peran_kegiatan == $hakii->id_peran_kegiatan)
                            <td style="border:1px solid #000; border-width: thin; text-align: center;">&#x2714</td>
                        @else
                            <td style="border:1px solid #000; border-width: thin;text-align: center;"></td>
                        @endif
                    @endforeach
                    
            @endforeach
           
            </tbody>
</table>

                    <p colspan="6" style="text-align: justify;">* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll</p>
</body>
</html>