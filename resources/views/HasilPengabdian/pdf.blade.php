<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Tabel 9.3 Hasil Pengabdian {{$hapeng[0]->nama_departemen}}</title>
</head>

<body>
        <p><strong>Tabel 9.2</strong> Data Hasil Pengabdian {{$hapeng[0]->nama_departemen}}</p>
    <table cellspacing="0" >

            <tr>  
            <th></th>
            <th width="40px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >No</font></p></th>
            <th width="150px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Judul Hasil Penelitian</font></p></th>
            <th width="150px"  style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Nama Dosen</font></p></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Dipublikasi pada</font></p></th>
            <th width="90px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Tahun Publikasi</font></p></th>
            <th width="150px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Tingkat</font></p></th>
            <th style="border:1px;"><p style="font-size:16px"><font face="Times New Rowman" ></font></p></th>
            </tr>

            
    <?php $no = 0;?>
     @foreach ($hasil_pengabdian as $hasilPengabdian)
     <?php $no++ ;?>
                  <tr>
                    <th></th>
                     <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >{{ $no }}.</font></p></td>
                     <td style="border:1px solid #000; text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$hasilPengabdian->judul_hasilPengabdian}}</font></p></td>
                     <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$hasilPengabdian->nama_dosenPengabdian}}</font></p></td>
                    <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$hasilPengabdian->dipublikasi_pada}}</font></p></td>
                    <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$hasilPengabdian->tahun_publikasi}}</font></p></td>
                    <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$hasilPengabdian->tingkat_hasilpengabdian}}</font></p></td>
                     
            <th style="border:1px;"><font face="Times New Rowman" ></font></th>
            @endforeach
            <tr>
            <th></th>
            <td colspan="12"><u>Catatan:</u> pembinaan bidang olahraga dan seni berada di bawah unit kegiatan mahasiswa.</td>
                   </tr>
</table>
</body>