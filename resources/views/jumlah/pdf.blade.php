<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device=width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible", content="ie=edge">
      <title>Tabel 3.1 Jumlah Mahasiswa Departemen {{$jumlh[0]->nama_departemen}} Menurut Tipe Program dan Jenis Mahasiswa </title>
</head>

<body>
            
           <table cellpadding="5", cellspacing="0" >
           <tr>
           <th colspan="1" align=left valign=top><font face="Times New Rowman" >Tabel 3.2</font></th>
           <td colspan="6" style="text-align: left"><font face="Times New Rowman" >Jumlah Mahasiswa Departemen {{$jumlh[0]->nama_departemen}} Menurut Tipe Program dan Jenis Mahasiswa</font></td> 
           </tr> 
            <tr>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman" >Tipe</font></th>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman" >Jenis Mahasiswa</font></th>
            <th colspan="5" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman" >Tahun</font></th>
                   </tr>

            <tr style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman">
                   @foreach ($jumlahs as $jumlah)
                   <td  style="border:1px solid #000; border-width: thin; " style="text-align: center;"><font face="Times New Rowman">{{$jumlah->tahun}}</font></td>

                   @endforeach
                   </tr>

                   <tr>
                  <td rowspan="3" style="border:1px solid #000; border-width: thin;text-align: center;"><font face="Times New Rowman" >Program Reguler</td>
                  <td style="border: 1px solid black">Mahasiswa Baru Bukan Transfer</td>
                   @foreach ($jumlahs as $jumlah)
                   <td  style="border:1px solid #000; border-width: thin;text-align: center;"><font face="Times New Rowman">{{$jumlah->mbt_reguler}}</td>
                   @endforeach
                  </tr>
                  
                  <tr>
                  <td style="border: 1px solid black">Mahasiswa Baru Transfer</td>
                   @foreach ($jumlahs as $jumlah)
                   <td  style="border:1px solid #000; border-width: thin;text-align: center;"><font face="Times New Rowman">{{$jumlah->mt_reguler}}</td>
                   @endforeach
                  </tr>
                  <tr>
                  <td style="border: 1px solid black">Total Mahasiswa Reguler</td>
                   @foreach ($jumlahs as $jumlah)
                   <td  style="border:1px solid #000; border-width: thin;text-align: center;"><font face="Times New Rowman">{{$jumlah->total_reguler}}</td>
                   @endforeach
                  </tr>
                 <tr>
                  <td rowspan="3"  style="border:1px solid #000; border-width: thin;text-align: center;"><font face="Times New Rowman">Program Non-Reguler</td>
                  <td style="border: 1px solid black">Mahasiswa Baru Bukan Transfer</td>
                   @foreach ($jumlahs as $jumlah)
                   <td  style="border:1px solid #000; border-width: thin;text-align: center;"><font face="Times New Rowman">{{$jumlah->mbt_nonreguler}}</td>
                   @endforeach
                  </tr>
                  <tr>
                  <td style="border: 1px solid black">Mahasiswa Baru Transfer</td>
                   @foreach ($jumlahs as $jumlah)
                   <td  style="border:1px solid #000; border-width: thin;text-align: center;"><font face="Times New Rowman">{{$jumlah->mt_nonreguler}}</td>
                   @endforeach
                  </tr>
                  <tr>
                  <td style="border: 1px solid black">Total Mahasiswa Non-Reguler</td>
                   @foreach ($jumlahs as $jumlah)
                   <td  style="border:1px solid #000; border-width: thin;text-align: center;"><font face="Times New Rowman">{{$jumlah->total_nonreguler}}</td>

                   @endforeach
                  </tr>
                  
                  <tr>
                  <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman">Total Mahasiswa</font></th>
                  @foreach ($jumlahs as $jumlah)
                  <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman">{{ $jumlah->mbt_reguler+$jumlah->mt_reguler+$jumlah->total_reguler+$jumlah->mbt_nonreguler+$jumlah->mt_nonreguler+$jumlah->total_nonreguler }}</font></th>
                   @endforeach
                  </tr>
                  </table>
                 
                 <table cellpadding="5", cellspacing="0" >
                 <th style="margin-bottom: 50px"></th>
                 </table>

            <table cellpadding="5", cellspacing="0" >
            <tr>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman" >Tahun</font></th>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman" >Daya Tampung</font></th>
            <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman" >Jumlah Calon Mahasiswa</font></th>
            <tr>
                  <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Ikut Seleksi</th>
                  <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;">Lulus Seleksi</th>
                 </tr>
                   </tr>
           
            @foreach ($jumlahs as $jumlah)
            <tr>
            <td  style="border:1px solid #000; border-width: thin; " style="text-align: center;"><font face="Times New Rowman">{{$jumlah->tahun}}</font></td>
            <td  style="border:1px solid #000; border-width: thin; " style="text-align: center;"><font face="Times New Rowman">{{$jumlah->daya_tampung}}</font></td>
            <td  style="border:1px solid #000; border-width: thin; " style="text-align: center;"><font face="Times New Rowman">{{$jumlah->ikut_seleksi}}</font></td>
            <td  style="border:1px solid #000; border-width: thin; " style="text-align: center;"><font face="Times New Rowman">{{$jumlah->lulus_seleksi}}</font></td>
                   @endforeach
                   </tr>
                   </font>
                   </table>
</body>
</html>