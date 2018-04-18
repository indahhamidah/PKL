<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Tabel 3.3 Pembinaan Non-akademik {{$keg[0]->nama_departemen}}</title>
</head>

<body>
        <p><strong>Tabel 3.3</strong> Data pembinaan non-akademik yang diselenggarakan Program Studi {{$keg[0]->nama_departemen}}</p>
    <table cellspacing="0" >

            <tr>  
            <th></th>
            <th width="40px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >No</font></p></th>
            <th align="center" width="380px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >Kegiatan</font></p></th>
            <th width="200px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Penyelenggara</font></p></th>
            <th width="80px"  style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Tahun</font></p></th>
            <th style="border:1px;"><p style="font-size:16px"><font face="Times New Rowman" ></font></p></th>
            </tr>

            
    <?php $no = 0;?>
     @foreach ($kegiatans as $kegiatan)
     <?php $no++ ;?>
                  <tr>
                    <th></th>
                     <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >{{ $no }}.</font></p></td>
                     <td style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman" > {{$kegiatan->nama_kegiatan}}</font></p></td>
                     <td style="border:1px solid #000;"><p style="font-size:16px"><font face="Times New Rowman" > {{$kegiatan->penyelenggara}}</font></p></td>
                     <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$kegiatan->tahun_kegiatan}}</font></p></td>
            <th style="border:1px;"><font face="Times New Rowman" ></font></th>
            @endforeach
            <tr>
            <th></th>
            <td colspan="12"><u>Catatan:</u> pembinaan bidang olahraga dan seni berada di bawah unit kegiatan mahasiswa.</td>
                   </tr>
                   



  


        

</table>
</body>