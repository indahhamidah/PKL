<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>4.2.1 Jenis Tenaga Kependidikan menurut pendidikan terakhir</title>
</head>

<body>
  <strong>
    4.2.1 Jenis Tenaga Kependidikan menurut pendidikan terakhir 
  </strong>
  
  @foreach ($sdmf4s as $sdmf4)
  
  <table>
  <td></td>
  <td style="border: 1px solid #000; text-align: justify; padding: 5; width: 500"><font face="Times New Roman">{{$sdmf4->isi_sdmf4}}</font></td>
  
  @endforeach
  </table>
</body>
</html>