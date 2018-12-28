<!DOCTYPE html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device=width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible", content="ie=edge">
  <title>Tabel 7.1 Penelitian {{$pene[0]->nama_departemen}}</title>
</head>

<body>

       

        <p><strong>Tabel 7.1</strong> Data Penelitian Program Studi {{$pene[0]->nama_departemen}}</p>
    <table cellspacing="0" >

            <tr>  
            <th></th>
            <th width="40px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >No</font></p></th>
            <th align="center" width="70px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >Tahun</font></p></th>
            <th width="180px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Judul Penelitian</font></p></th>
            <th width="150px"  style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Dosen Peneliti</font></p></th>
            <th width="150px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Sumber Dana dan Jenis dana</font></p></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Jumlah Dana</font></p></th>
            <th style="border:1px;"><p style="font-size:16px"><font face="Times New Rowman" ></font></p></th>
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
     @foreach ($penelitians as $penelitian)
     <?php $no++ ;?>


                  <tr>
                    <th></th>
                     <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >{{ $no }}.</font></p></td>
                     <td style="border:1px solid #000; text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$penelitian->tahun_penelitian}}</font></p></td>
                     <td style="border:1px solid #000; text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$penelitian->judul_penelitian}}</font></p></td>
                     <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$penelitian->nama_peneliti}}</font></p></td>
                    <td style="border:1px solid #000;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" > {{$penelitian->sumber_dana}}</font>{{$penelitian->jenis_dana}}</p></td>
                    <td style="border:1px solid #000;text-align: right"><p style="font-size:16px"><font face="Times New Rowman" > {{$penelitian->jumlah_dana}}</font></p></td>
                    <th style="border:1px;"><font face="Times New Rowman" ></font></th>
            @endforeach
            <tr>
            <th></th>
            <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">Total</font></p></th>
            <th style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaljudul}}</font></th>
            <th style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"></th>
            <th style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"></th>
            <th style="border:1px solid #000;text-align: center" style="font-size:16px"><font face="Times New Rowman">{{$totaldana}}</font></th>
            <th></th>
            </tr>
            <tr>
                <th></th>
               
            </tr>

         7.1.2 Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga
                      tahun terakhir?<br>
                    @foreach ($redaksipenelitian as $redaksi) 
                    @if($redaksi->redaksi_penelitian == 1)
                      V Ya<br>
                      Tidak<br>
                      Ada {{$redaksi->jumlah_terlibat}} dari {{$redaksi->total_mahasiswa}} mahasiswa yang melakukan tugas akhir.
                      @else
                      Ya<br>
                        V Tidak 
                    @endif
                    @endforeach
         
</table>
</body>