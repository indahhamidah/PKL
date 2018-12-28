<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
</head>

<body>
    <p><strong>Tabel 9.2</strong> Data Hasil Penelitian dan Hasil Pengabdian {{$hapeni[0]->nama_departemen}}</p>
    <table>
    <thead>
            <tr>  
            <th rowspan="2" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3; font-size: 10;font-family: arial;">No</th>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-size: 10;font-family: arial;">Judul Hasil Penelitian dan Hasil Pengabdian</th>
            <th rowspan="2"  style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center; font-size: 10;font-family: arial;">Nama Dosen</th>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-size: 10;font-family: arial;">Dipublikasi pada</th>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-size: 10;font-family: arial;">Tahun Publikasi</th>
            <th colspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-size: 10;font-family: arial;">Tingkat</th>
            </tr>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-size: 10;font-family: arial;">Lokal</th>
                <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-size: 10;font-family: arial;">Nasional</th>
                <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;font-size: 10;font-family: arial;">Internasional</th>
            </tr>

</thead>
            
     <tbody>
    <?php $no = 0;?>
     @foreach ($hasil_penelitian as $hasilPenelitian)
     <?php $no++ ;?>
                  <tr>
                    <td style="border:1px solid #000;text-align: center;font-size: 10;font-family: arial;">{{ $no }}.</td>
                    <td style="border:1px solid #000; text-align: left;font-size: 10;font-family: arial;">{{$hasilPenelitian->judul_hasilPenelitian}}</td>
                    <td style="border:1px solid #000; text-align: left;font-size: 10;font-family: arial;"> {{$hasilPenelitian->nama_dosenPenelitian}}</td>
                    <td style="border:1px solid #000;text-align: left;font-size: 10;font-family: arial;">{{$hasilPenelitian->dipublikasi_pada}}</td>
                    <td style="border:1px solid #000;text-align: center;font-size: 10;font-family: arial;">{{$hasilPenelitian->tahun_publikasi}}</td>
                    @foreach($tingkat as $tingkatt)
                        @if($hasilPenelitian->id_tingkat == $tingkatt->id_tingkatt)
                            <td style="border:1px solid #000; border-width: thin; text-align: center;font-size: 10;font-family: arial;">V</td>
                        @else
                            <td style="border:1px solid #000; border-width: thin;text-align: center;font-size: 10;font-family: arial;"></td>
                        @endif
                    @endforeach
            @endforeach
            <tr>
            <th style="border:1px solid #000; border-width: thin;text-align: center;font-size: 10;font-family: arial;">Total</th>
            <th style="border:1px solid #000;text-align: center;font-size: 10;font-family: arial;">{{$totaljudul}}</th>
            <td style="border:1px solid #000;text-align: center;font-size: 10;font-family: arial;"></td>
            <td style="border:1px solid #000;text-align: center;font-size: 10;font-family: arial;"></td>
            <td style="border:1px solid #000;text-align: center;font-size: 10;font-family: arial;"></td>
            <th style="border:1px solid #000;text-align: center;font-size: 10;font-family: arial;">{{$na}}</th>
            <th style="border:1px solid #000;text-align: center;font-size: 10;font-family: arial;">{{$nb}}</th>
            <th style="border:1px solid #000;text-align: center;font-size: 10;font-family: arial;">{{$nc}}</th>
            </tr>
            </tbody>
</table>
</body>
</html>