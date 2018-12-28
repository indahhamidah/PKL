<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>6.1.3 Uraikan secara ringkas kompetensi lainnya/pilihan lulusan
</title>
</head>

<body>
  <strong>
    6.1.3 Uraikan secara ringkas kompetensi lainnya/pilihan lulusan 
  </strong>
  
  @foreach ($kurikulum3s as $kurikulum3)
  
  <table>
  <td></td>
  <td style="border: 1px solid #000; text-align: justify; padding: 5; width: 500"><font face="Times New Roman">{{$kurikulum3->isi_kurikulum3}}</font></td>
  
  @endforeach
  </table>
  <p>Catatan: Pengertian tentang kompetensi utama, pendukung, dan lainnya dapat dilihat pada Kepmendiknas No. 045/2002.</p>
</body> 
</html>