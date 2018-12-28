<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Tabel 8.1 Pengabdian Kepada Masyarakat {{$peng[0]->nama_departemen}}</title>
</head>

<body>
        <p><strong>Tabel 8.1</strong> Data Pengabdian Kepada Masyarakat Program Studi {{$peng[0]->nama_departemen}}</p>
    <table cellspacing="0" >

            <tr>  
            <th></th>
            <th width="40px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >No</font></p></th>
            <th align="center" width="70px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >Tahun</font></p></th>
            <th width="180px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Judul Pengabdian kepada Masyarakat</font></p></th>
            <th width="150px"  style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Dosen Pelaksana</font></p></th>
            <th width="150px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Sumber Dana</font></p></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Jumlah Dana</font></p></th>
            <th style="border:1px;"><p style="font-size:16px"><font face="Times New Rowman" ></font></p></th>
            </tr>
            <tr>
                  <th style="text-align: center"></th>
                  <th style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:16px"><font face="Times New Rowman">(1)</font></p></th>
                  <th style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:16px"><font face="Times New Rowman">(2)</font></p></th>
                  <th style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:16px"><font face="Times New Rowman">(3)</font></p></th>
                  <th style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:16px"><font face="Times New Rowman">(4)</font></p></th>
                  <th style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:16px"><font face="Times New Rowman">(5)</font></p></th>
                  <th style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:16px"><font face="Times New Rowman">(6)</font></p></th>
                  <td></td>
                </tr>

            
    <?php $no = 0;?>
     @foreach ($pengabdians as $pengabdian)
     <?php $no++ ;?>
                  <tr>
                    <th></th>
                    <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >{{ $no }}.</font></p></td>
                    <td style="border:1px solid #000; text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$pengabdian->tahun_pengabdian}}</font></p></td>
                    <td style="border:1px solid #000; text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$pengabdian->judul_pengabdian}}</font></p></td>
                    <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$pengabdian->dosen_pelaksana}}</font></p></td>
                    <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$pengabdian->sumber_dana_peng}}</font></p></td>
                    <td style="border:1px solid #000;text-align: right"><p style="font-size:16px"><font face="Times New Rowman" > {{$pengabdian->jumlah_dana_peng}}</font></p></td>
                    <th style="border:1px;"><font face="Times New Rowman" ></font></th>
            @endforeach
            <tr>
            <th></th>
            <td colspan="12"><u>Catatan:</u> pembinaan bidang olahraga dan seni berada di bawah unit kegiatan mahasiswa.</td>
                   </tr>
</table>
</body>