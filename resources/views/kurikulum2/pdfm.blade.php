<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>6.2 Uraikan secara ringkas kompetensi pendukung lulusan
</title>
</head>

<body>
  <strong>
    6.1.2 Uraikan secara ringkas kompetensi pendukung lulusan 
  </strong>
  
  @foreach ($kurikulum2s as $kurikulum2)
  
  <table>
  <td></td>
  <td style="border: 1px solid #000; text-align: justify; padding: 5; width: 500"><font face="Times New Roman">{{$kurikulum2->isi_kurikulum2}}</font></td>
  
  @endforeach
  </table>
</body>
</html>