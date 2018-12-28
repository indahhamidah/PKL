<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>6.1 Uraikan secara ringkas kompetensi utama lulusan
</title>
</head>

<body>
  <strong>
    6.1.1 Uraikan secara ringkas kompetensi utama lulusan
  </strong>
  
  @foreach ($kurikulum1s as $kurikulum1)
  
  <table>
  <td></td>
  <td style="border: 1px solid #000; text-align: justify; padding: 5; width: 500"><font face="Times New Roman">{{$kurikulum1->isi_kurikulum1}}</font></td>
  
  @endforeach
  </table>
</body>
</html>