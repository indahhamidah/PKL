<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
    @page {
      size: 8.27in 11.69in;
      
      margin-top: 1in;
      margin-left: 1in;
      margin-right: 1in;
      margin-bottom: 1in;
    }
  </style>
	<title>Redaksi Perangkat Keras di FMIPA</title>
</head>
<body>
  <table cellpadding="8", cellspacing="0">
    <tr>
      <th align="left" valign="top">
        <tr>
          <th>c. <i>Hardware</i> (Perangkat Keras)</th>
        </tr>
        <tr>
          <td style="text-align: justify;"><font size="3">Perangkat Keras komputer tersedia baik di IPB, fakultas, maupun departemen. Di samping itu, tersedia beberapa laboratorium komputer untuk mahasiswa yang dikelola oleh DIDSI IPB yaitu <i>Cyber</i> Singkong di Gedung Perpustakaan Lantai 4 sekitar &plusmn; 120 PC, <i>Cyber</i> Merpati &plusmn; 40 PC, Gedung Pusat Komputer (GPK) 50 PC yang dilengkapi dengan layanan ID-IPB dan I-MOVSES (Microsoft <i>Learning</i>). Di level IPB juga tersedia server yang menangani proses administrasi, akademik, kemahasiswaan, keuangan, properti, alumni, kemahasiswaan, perpustakaan, kepegawaian. Untuk level fakultas, tersedia perangkat keras berupa server dan PC untuk proses-proses di atas dalam lingkup fakultas.  Di samping itu, setiap departemen telah memiliki PC tersendiri baik untuk pembelajaran (termasuk <i>e-learning</i>) maupun server, khususnya untuk mendukung pembelajaran, penelitian, penanganan perpustakaan, administrasi, maupun komunikasi dan pengembangan keilmuan.</font></td>
        </tr>
        <tr>
          <td style="text-align: justify;"><font size="3">FMIPA memiliki dua server untuk web dan pengolahan data.  FMIPA juga memiliki dan mengelola 1 laboratorium komputer yang dinamakan <i>Cyber</i> FMIPA yang dapat digunakan oleh dosen dan mahasiswa dalam menyelenggarakan pelatihan/<i>training</i>.  Di samping itu, selain access point yang disediakan departemen-departemen, FMIPA juga menyediakan 2 <i>Free Hotspot (access point)</i> SSID yang digunakan di ruang Dekanat FMIPA dan Perpustakaan FMIPA. Spesifikasi server dan perangkat keras di FMIPA selengkapnya diberikan dalam <strong>Tabel 5.6</strong>.</font>
        </tr>
        
      </th>
    </tr>
  </table>
	
  <h4><p style="font-size:16px"><font face="Times New Rowman" ><strong>Tabel 5.6</strong> Perangkat Keras di Dekanat FMIPA </font></p></h4>

	<table cellpadding="0", cellspacing="0" >

    <tr>  
    	<th align=left valign=top></th>
        <tr>
        	<!-- <th></th> -->
        	<!-- <th></th> -->
          <th width="120px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman" size="2">Nama</font></th>
          <th width="360px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center"><font face="Times New Rowman" size="2">Spesifikasi</font></th>
          <th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center"><font face="Times New Rowman" size="2">Jumlah</font></th>
          
          <th></th>
        <!-- </tr> -->
  <!-- </tr> -->
  <!-- <tr> -->
  	@foreach ($perangkat_keras as $perangkat_kerass)
      <th></th>
      <!-- <th></th> -->
       <tr>
       	<!-- <th></th> -->
        <td style="border:1px solid #000;text-align: center;"><font face="Times New Rowman" size="2">{{ $perangkat_kerass->nama_hardware }}</font></td>
        <td style="border:1px solid #000;"><font face="Times New Rowman" size="2"> {{$perangkat_kerass->spesifikasi}}</font></td>
        <td style="border:1px solid #000;text-align: center;"><font face="Times New Rowman" size="2"> {{$perangkat_kerass->jumlah_item}}</font></td>
        
        <td></td>
        
        @endforeach
      	</tr>
      </tr>
  </tr>
</table>


<table cellpadding="0", cellspacing="0">
    <tr>
      <th align="left" valign="top">
        <th></th>
        <tr>
          <td style="text-align: justify;">Pengembangan IT di FMIPA juga didukung oleh tersedianya perangkat keras di setiap departemen yang digunakan untuk keperluan pendidikan, penelitian, dan administrasi. <strong>Tabel 5.7</strong> menyajikan daftar perangkat keras yang ada di Departemen Ilmu Komputer.</td>
        </tr>
        
      </th>
    </tr>
  </table>


  <h4><p style="font-size:16px"><font face="Times New Rowman" ><strong>Tabel 5.7</strong> Perangkat Keras di Departemen Ilmu Komputer </font></p></h4>

  <table cellpadding="0", cellspacing="0" >

    <tr>  
      <th align=left valign=top></th>
        <tr>
          <!-- <th></th> -->
          <!-- <th></th> -->
          <th width="120px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><font face="Times New Rowman">Nama</font></th>
          <th width="360px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Spesifikasi</font></th>
          <th width="80px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Jumlah</font></th>
          
          <th></th>
        <!-- </tr> -->
  <!-- </tr> -->
  <!-- <tr> -->
    @foreach ($perangkat_keras1 as $perangkat_kerass1)
      <th></th>
      <!-- <th></th> -->
       <tr>
        <!-- <th></th> -->
        <td style="border:1px solid #000;text-align: center;"><font face="Times New Rowman" >{{ $perangkat_kerass1->nama_hardware }}</font></td>
        <td style="border:1px solid #000;"><font face="Times New Rowman" > {{$perangkat_kerass1->spesifikasi}}</font></td>
        <td style="border:1px solid #000;text-align: center;"><font face="Times New Rowman" > {{$perangkat_kerass1->jumlah_item}}</font></td>
        
        <td></td>
        
        @endforeach
        </tr>
      </tr>
  </tr>
</table>
</body>
</html>