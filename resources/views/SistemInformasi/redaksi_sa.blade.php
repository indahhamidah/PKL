<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <style type="text/css">
  @page {
      size: 8.27in 11.69in;
      
      margin-top: 1in;
      margin-left: 1in;
      margin-right: 1in;
      margin-bottom: 1in;
    }
  h4{
      font-family: helvetica;
      font-size: 11pt; 
    }
  th{
      font-family: helvetica;
      font-size: 10pt; 
  }
  td{
      font-family: helvetica;
      font-size: 10pt; 
  }
  p{
     font-family: helvetica;
      font-size: 10pt;
  }
    footer {
      position: fixed; 
      bottom: -0.29in; 
      left: 0in; 
      right: 0in;
      height: 0.02in; 

                /** Extra personal styles **/
      background-color: #778899;
      color: grey;
      text-align: left;
      line-height: 0.03in;
    }
  </style>
	<title>Redaksi Sistem Informasi yang digunakan di FMIPA</title>
</head>
<body>
  <table cellpadding="5", cellspacing="0">
    <tr>
      <th align="left" valign="top">
        <tr>
          <th>d. <i>Software</i> (Perangkat Lunak)</th>
        </tr>
        <tr>
          <td style="text-align: justify;">Perangkat lunak merupakan salah satu bagian terpenting yang mutlak diperlukan dalam penggunaan fasilitas teknologi informasi baik di tingkat institusi hingga  departemen. Berdasarkan lisensinya, perangkat lunak yang digunakan terdiri atas 3 jenis yaitu perangkat lunak komersial, perangkat lunak tidak berbayar, dan perangkat lunak sistem informasi.</td>
        </tr>
        <tr>
          <th><i>d.1 Perangkat Lunak Komersial</i></th>
        </tr>
        <tr>
          <td style="text-align: justify;">Perangkat lunak komersial dapat diperoleh melalui program IMOVSES: IPB Microsoft <i>Open Value Subscription for Education Solution</i>, yang merupakan kerjasama IPB dengan Microsoft untuk penggunaan Windows, MS Office, SQL Server, dan Visual Studio. Untuk memiliki aplikasi tersebut mahasiswa dapat mengganti biaya CD dan mendapatkan <i>Sticker Hologram</i> <strong>Gambar 5.11.</strong> Perangkat lunak Microsoft yang termasuk dalam kerjasama IMOVSES adalah</td>
      </th>
    </tr>
  </table>

<table cellpadding="8", cellspacing="">
    <tr>
      <th align="left" valign="top">
          <tr>
          <td></td>          
            <?php $no =0;?>
            @foreach ($pl_komersial as $pl_komersiall)
            <?php $no++ ;?> 
          <tr>
            <td style="vertical-align: top">{{$no}}.</td>
            <td style="text-align: justify; vertical-align: top">{{ $pl_komersiall->nama_imovses }}</td>
            @endforeach
        </tr>
        </tr>
      </th>
    </tr>
  </table>
        <!--  -->
<table cellpadding="8", cellspacing="0">
    <tr>
      <th align="left" valign="top">
        <tr>
          <th><i>d.2 Perangkat Lunak Tak Berbayar</i></th>
        </tr>
        <tr>
          <td style="text-align: justify;">Untuk perangkat lunak gratis baik yang bersifat <i>open source</i> maupun tidak dapat diunduh dari Internet dengan mengakses secara langsung situs-situs pengembang perangkat lunak tersebut. Jenis perangkat lunak tak berbayar yang digunakan meliputi perangkat lunak sistem operasi, utilitas, aplikasi perkantoran, multimedia, edukasi, dan sebagainya. Beberapa perangkat lunak tak berbayar yang banyak digunakan dalam kegiatan praktikum diantaranya R Project for Statistical Computing (<u>https://www.r-project.org/</u>), bahasa pemrograman Python (<u>https://www.python.org/</u>).
          </td>
        </tr>
        <tr>
          <th><i>d.3 Perangkat Lunak Sistem Informasi</i></th>
        </tr>
        <tr>
          <td style="text-align: justify;">Informasi yang terkelola dengan baik dalam suatu sistem informasi merupakan kebutuhan mutlak di setiap organisasi berskala menengah dan besar di era teknologi informasi saat ini. Sistem informasi yang digunakan di lingkungan IPB di samping disediakan dan dikembangkan oleh institusi (IPB) juga oleh Departemen yang ada. Sistem informasi digunakan secara intensif oleh IPB, Fakultas maupun Departemen dalam rangka meningkatkan layanan akademik maupun non-akademik kepada seluruh civitas akademika. Hingga saat ini FMIPA menggunakan sejumlah sistem informasi yang dikembangkan dalam bentuk aplikasi berbasis web dan aplikasi berbasis Desktop (<strong>Tabel 5.8</strong>). Untuk menunjang kinerja sistem informasi yang seluruhnya bekerja dalam arsitektur <i>client/server</i>, IPB telah menyediakan jaringan internal dengan jalur <i>backbone</i> yang menggunakan kabel serat optik dengan <i>bandwith</i> 1 Gbps, dan jaringan eksternal yang terhubung ke Internet dengan <i>bandwith</i> 1 Gbps untuk internasional dan 550 Mbps untuk nasional. Berikut adalah daftar sistem informasi yang digunakan di FMIPA.</td>
        </tr>
      </th>
    </tr>
  </table>
          

	<h4><p style="font-size:16px"><font face="Times New Rowman" ><strong>Tabel 5.8</strong> Daftar Sistem Informasi yang digunakan di FMIPA </font></p></h4>

  <table cellpadding="8", cellspacing="0" >
    <tr>  
      <th align=left valign=top></th>
        <tr>
          <th width="30px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman">No</font></th>
          <th width="150px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Nama Sistem</font></th>
          <th width="120px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Bentuk</font></th>
          <th width="200px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Fitur-fitur Sistem</font></th>
          <th></th>
    <tr>
      <th colspan="4" style="border:1px solid #000;">a. Informasi Umum</th>
    <!-- <th></th> -->
    <?php $nomor =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==1)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top"><font face="Times New Rowman" >{{ $nomor }}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" >{{ $sistem_informasi->nama_sistem }}</font></td>
        <td style="border:1px solid #000; vertical-align: top"><font face="Times New Rowman" > {{$sistem_informasi->bentuk_si}}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" > <?php echo nl2br ($sistem_informasi['fitur_si']); ?></font></td>
        <td></td>
        @endif
        @endforeach

    <tr>
      <th colspan="4" style="border:1px solid #000;">b. Kemahasiswaan</th>
    <?php $nomor =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==2)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top"><font face="Times New Rowman" >{{ $nomor }}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" >{{ $sistem_informasi->nama_sistem }}</font></td>
        <td style="border:1px solid #000; vertical-align: top"><font face="Times New Rowman" > {{$sistem_informasi->bentuk_si}}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" > <?php echo nl2br ($sistem_informasi['fitur_si']); ?></font></td>
        <td></td>
        @endif
        @endforeach

    <tr>
      <th colspan="4" style="border:1px solid #000;">c. Akademik</th>
    <?php $nomor3 =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor3++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==3)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top"><font face="Times New Rowman" >{{ $nomor3 }}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" >{{ $sistem_informasi->nama_sistem }}</font></td>
        <td style="border:1px solid #000; vertical-align: top"><font face="Times New Rowman" > {{$sistem_informasi->bentuk_si}}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" > <?php echo nl2br ($sistem_informasi['fitur_si']); ?></font></td>
        <td></td>
        @endif
        @endforeach

    <tr>
      <th colspan="4" style="border:1px solid #000;">d. Administrasi</th>
    <?php $nomor3 =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor3++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==4)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top"><font face="Times New Rowman" >{{ $nomor3 }}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" >{{ $sistem_informasi->nama_sistem }}</font></td>
        <td style="border:1px solid #000; vertical-align: top"><font face="Times New Rowman" > {{$sistem_informasi->bentuk_si}}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" > <?php echo nl2br ($sistem_informasi['fitur_si']); ?></font></td>
        <td></td>
        @endif
        @endforeach

    <tr>
      <th colspan="4" style="border:1px solid #000;">e. Perpustakaan</th>
    <?php $nomor3 =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor3++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==5)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top"><font face="Times New Rowman" >{{ $nomor3 }}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" >{{ $sistem_informasi->nama_sistem }}</font></td>
        <td style="border:1px solid #000; vertical-align: top"><font face="Times New Rowman" > {{$sistem_informasi->bentuk_si}}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" > <?php echo nl2br ($sistem_informasi['fitur_si']); ?></font></td>
        <td></td>
        @endif
        @endforeach


    <tr>
      <th colspan="4" style="border:1px solid #000;">f. Penelitian dan pengabdian pada masyarakat</th>
    <?php $nomor3 =0;?>
    @foreach ($sisteminformasii as $sistem_informasi)
    <?php $nomor3++ ;?>
      <td></td>
       @if($sistem_informasi->role_kategori==6)
       <tr>
        <td style="border:1px solid #000;text-align: center; vertical-align: top"><font face="Times New Rowman" >{{ $nomor3 }}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" >{{ $sistem_informasi->nama_sistem }}</font></td>
        <td style="border:1px solid #000; vertical-align: top"><font face="Times New Rowman" > {{$sistem_informasi->bentuk_si}}</font></td>
        <td style="border:1px solid #000;text-align: left; vertical-align: top"><font face="Times New Rowman" > <?php echo nl2br ($sistem_informasi['fitur_si']); ?></font></td>
        <td></td>
        @endif
        @endforeach
        </tr>
      </tr>

  </tr>
</table>
<!-- taro gambar2 disini -->
<br><br><br>

@foreach($sisteminformasii as $info)
<img src="{{ public_path("images/".$info->tampilan_muka) }}" alt="" style="width: 150px; height: 150px;">{{$info->tampilan_muka}}
@endforeach
  <p style="align-content: center;">Ada gambar disini</p>

<table cellpadding="8", cellspacing="0">
    <tr>
      <th align="left" valign="top">
        <tr>
          <th><i>e. Brainware</i></th>
        </tr>
        <tr>
          <td style="text-align: justify;">Untuk menangani infrastruktur TI, tersedia SDM baik di level IPB, fakultas maupun departemen. Untuk IPB tersedia 53 SDM (2 orang bergelar S3, 2 orang bergelar S2, sisanya adalah S1, D3 dan SMK), sedangkan di setiap fakultas ada 1 SDM, dan di departemen bervariasi. Sebagai contoh Departemen Ilmu Komputer tersedia 3 SDM (1 S2 yang merangkap dosen sebagai penanggung jawab lab, dan 2 orang SMK).</td>
        </tr>
        <tr>
          <th><i> f. Dataware</i></th>
        </tr>
        <tr>
          <td style="text-align: justify;">Kehandalan sistem informasi dalam memberikan informasi yang akurat dan reliabel tidak terlepas dari basis data yang menjadi sumber data bagi sistem informasi. Saat ini sistem informasi yang digunakan di IPB, Fakultas dan Departemen sebagian besar menggunakan sistem manajemen database berbasis <i>client/server</i> seperti Microsoft SQL Server dan MySQL. Hak akses langsung terhadap <i>database</i> dibatasi hanya untuk aplikasi dan administrator. Untuk pengguna umum, akses terhadap database diatur oleh administrator sehingga keamanan data lebih terjamin.</td>
        </tr>
        <tr>
          <td style="text-align: justify;">Ke enam komponen TI tersebut memberikan dukungan terhadap semua proses, baik untuk kemahasiswaan (data maupun rekruitmennya), akademik, administrasi, pembelajaran, penelitian, kepegawaian, properti, perpustakaan, dan sebagainya.</td>
        </tr>
      </th>
    </tr>
  </table>
  <footer>
    <h4>BORANG FMIPA-IPB {{$dateS}}</h4>
  </footer>
</body>

</html>