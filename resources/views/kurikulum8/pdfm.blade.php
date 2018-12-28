<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>6.1.8 Jelaskan mekanisme peninjauan kurikulum dan pihak-pihak yang dilibatkan dalam proses peninjauan tersebut.
</title>
</head>

<body>
  <strong>
    6.1.8 Jelaskan mekanisme peninjauan kurikulum dan pihak-pihak yang dilibatkan dalam proses peninjauan tersebut.
  </strong>
  
  @foreach ($kurikulum8s as $kurikulum8)
  
  <table>
  <td></td>
  <td style="border: 1px solid #000; text-align: justify; padding: 5; width: 500"><font face="Times New Roman">{{$kurikulum8->isi_kurikulum8}}</font></td>
   
  @endforeach
  </table>
</body>
</html>