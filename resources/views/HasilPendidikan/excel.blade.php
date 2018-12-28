<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
</head>

<body>
    <p style="font-size: 11;font-family: arial;"><strong>Tabel 9.1</strong> Data Hasil Pendidikan {{$hapen[0]->nama_departemen}}</p>
    <table>
            <tr>  
            <th></th>
            <th colspan="1" style="border:1px solid #000; background-color:#daeef3; padding: 5px;text-align: center;font-size: 10;font-family: arial;">No</font></p></th>
            <th colspan="6" style="border:1px solid #000; background-color:#daeef3; padding: 5px; text-align: center;font-size: 10;font-family: arial;">Karya</font></p></th>
            <th></th>
            </tr>

    <?php $no = 0;?>
     @foreach ($hasil_pendidikan as $hasilPendidikan)
     <?php $no++ ;?>
                <tr>
                  <th></th>
                    @if($hasilPendidikan->id_haki==1)
                    <td colspan="1" style="border:1px solid #000; padding: 5px;text-align: center;font-size: 10;font-family: arial;">{{ $no }}.</font></p></td>
                    <td colspan="6" style="border:1px solid #000; padding: 5px;font-size: 10;font-family: arial;">{{$hasilPendidikan->judul_hasilPendidikan}}</font></p></td>
                    <td></td>
                    @endif
                    @endforeach
                    <th></th>
                    <th></th>
            </tr>
         
</table>
</body>
</html>