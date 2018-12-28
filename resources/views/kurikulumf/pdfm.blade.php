<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>6.1 Kurikulum - Peran FMIPA IPB dalam penyusunan dan pengembangan kurikulum untuk program studi yang dikelola.</title>
</head>

<body>
  <strong>
    6.1 Kurikulum - Peran FMIPA IPB dalam penyusunan dan pengembangan kurikulum untuk program studi yang dikelola. 
  </strong>
  
  @foreach ($kurikulumfs as $kurikulumf)
  
  <table>
  <td></td>
  <td style="border: 1px solid #000; text-align: justify; padding: 5; width: 500"><font face="Times New Roman">{{$kurikulumf->isi_kurikulumf}}</font></td>
  
  @endforeach
  </table>
</body>
</html>