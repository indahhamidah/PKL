<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DATA AKREDITASI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/Ionicons/css/ionicons.min.css')}}">

  <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap-timepicker/css/bootstrap-datetimepicker.css')}}">
  <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap-timepicker/css/bootstrap-datetimepicker.min.css')}}">
<!-- notif toastr -->
  <!-- <link rel="stylesheet" href="{{asset('Admin/toastr/toastr.css')}}"> -->
  <!-- <link rel="stylesheet" href="{{asset('Admin/toastr/toastr.min.css')}}"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>SI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Data</b>AKREDITASI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
 <!-- top navigation -->

        @if (Route::has('login'))
                @if (Auth::check())
                <!-- <div class="navbar-custom-menu"> -->
                  <!-- <div class="nav navbar-nav"> -->
                    <!-- <nav> -->
                     
                      <ul class="nav navbar-nav">
                        <li class="dropdown">
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                         @else
                        <li class="dropdown user user-menu">
                            <a href="#" class="user-profile dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="Admin/dist/img/logo-ipb.jpg" class="user-image" alt="User Image">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-usermenu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-left"></i> Keluar
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                         @endif
                        </li>
                      </ul>
                    <!-- </nav> -->
                  <!-- </div> -->
                <!-- </div> -->
                @else
                <div class="top_nav">
                    <!-- <nav> -->
                      <ul class="nav navbar-nav">
                        <li>
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-usermenu pull-right" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i> Log Out
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                  </li>
                      </ul>
                    <!-- </nav> -->
                </div>
                @endif
        @endif
        <!-- /top navigation -->
              <!-- Menu Body -->
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="Admin/dist/img/logo-ipb.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
           <p>{{ Auth::user()->name }}</p>
           <!-- Manual dulu aja -->
          @if (Auth::user()->id_departemen==1) 
          <p> STATISTIKA </p>
          @elseif (Auth::user()->id_departemen==2)
          <p>Geofisika dan Meteorologi</p>
          @elseif (Auth::user()->id_departemen==3)
          <p> Biologi</p>
          @elseif (Auth::user()->id_departemen==4)
          <p> Kimia</p>
          @elseif(Auth::user()->id_departemen==5)
          <p> Matematika</p>
          @elseif(Auth::user()->id_departemen==6)
          <p> Ilmu Komputer</p>
          @elseif(Auth::user()->id_departemen==7)
          <p> Fisika</p>
          @elseif(Auth::user()->id_departemen==8)
          <p> Biokimia</p>
          @elseif(Auth::user()->id_departemen==9)
          <p> Aktuaria</p>
          @elseif(Auth::user()->id_departemen==10)
          <p> FMIPA</p>
          @endif
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- SUPER ADMIN -->
        @if(Auth::User()->role==1)
        <li>
          <a href="pengguna">
            <i class="fa fa-users"></i> <span> Pengguna</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span> Standar 1</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar1visimisi"><i class="fa fa-circle-o"></i> Visi, Misi, Tujuan, dan Strategi</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span> Standar 2</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar2tamongma"><i class="fa fa-circle-o"></i> Tata Pamong</a></li>
            <li><a href="standar7kerjasamadalamnegeri"><i class="fa fa-circle-o"></i> Kerjasama instansi dalam negeri</a></li>
            <li><a href="standar7kerjasamaluarnegeri"><i class="fa fa-circle-o"></i> Kerjasama instansi luar negeri</a></li>
            <li><a href="standar2_tata_pamong_dan_kerjasama"><i class="fa fa-circle-o"></i> Standar 2 Tata Pamong dan Kerjasama</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-mortar-board"></i> <span> Standar 3</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="jumlah"><i class="fa fa-circle-o"></i> Akademik</a></li>
            <li><a href="lulusan"><i class="fa fa-circle-o"></i> Kelulusan Mahasiswa</a></li>
            <li><a href="kegiatan"><i class="fa fa-circle-o"></i> Pembinaan Non-akademik</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-id-card-o"></i> <span> Standar 4</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i> <span> Dosen tetap</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sdmf2"><i class="fa fa-circle-o"></i> Jumlah Dosen Tetap</a></li>
            <li><a href="sdmf3"><i class="fa fa-circle-o"></i> Penggantian, Perekrutan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dan Pengembangan</a></li>
            <li><a href="standar4sdmfmipa01"><i class="fa fa-circle-o"></i> Pandangan FMIPA</a></li>
          </ul>
        </li>
            </li>
            <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i> <span> Tenaga Kependidikan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sdmf5"><i class="fa fa-circle-o"></i> Jenis Tenaga Kependidikan</a></li>
            <li><a href="standar4sdmfmipa02"><i class="fa fa-circle-o"></i> Pandangan FMIPA</a></li>
          </ul>
        </li>
            </li>
            <li><a href="download_redaksi_standar4a"><i class="fa fa-circle-o"></i> Redaksi Standar 4</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span> Standar 5</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Keuangan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                @if((Auth::User()->id_departemen!=10) && (Auth::User()->role==9))
                <li><a href="Penjelasan_Pengelolaan_Dana"><i class="fa fa-circle-o"></i> Pengelolaan Dana</a></li>
                @endif
                <li><a href="PenerimaanDana"><i class="fa fa-circle-o"></i> Penerimaan Dana</a></li>
                <li><a href="PenggunaanDana"><i class="fa fa-circle-o"></i> Penggunaan Dana</a></li>
              </ul>
            </li>
            <li><a href="Pendapat_Pimpinan_Fakultas"><i class="fa fa-circle-o"></i> Pendapat Pimpinan</a></li>
            <li><a href="Prasarana_Tambahan"><i class="fa fa-circle-o"></i> Prasarana</a></li>
            <li><a href="Sarana_Tambahan"><i class="fa fa-circle-o"></i> Sarana</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Sistem Informasi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="Organoware"><i class="fa fa-circle-o"></i> Organoware</a></li>
                <li><a href="Perangkat_Keras"><i class="fa fa-circle-o"></i> Hardware</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Software
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                <ul class="treeview-menu">
                  <li><a href="PL_Komersial"><i class="fa fa-circle-o"></i> Software Komersial</a></li>
                  <li><a href="SistemInformasi"><i class="fa fa-circle-o"></i> Sistem Informasi</a></li>
                </ul>
                  <li><a href="Aksesibilitas_Data"><i class="fa fa-circle-o"></i> Aksesibilitas Data</a></li>
                  <li><a href="Upaya_Sebar_Info"><i class="fa fa-circle-o"></i> Upaya Penyebaran<br>Informasi</a></li></li>
                  <li><a href="Rencana_Pengembangan_S_I"><i class="fa fa-circle-o"></i> Rencana Pengembangan<br>Sistem Informasi </a></li>
              </ul>
            </li>
            <li><a href="download_redaksi_standar5"><i class="fa fa-files-o"></i> Redaksi Standar 5</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-trophy"></i> <span> Standar 6</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar6kurikulumf"><i class="fa fa-circle-o"></i> Kurikulum</a></li>
            <li><a href="Peran_Fakultas"><i class="fa fa-circle-o"></i> Sistem Pembelajaran</a></li>

            <li><a href="download_redaksi_standar6a"><i class="fa fa-circle-o"></i> Redaksi Standar 6</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span> Standar 7</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar7penelitian"><i class="fa fa-circle-o"></i> Penelitian</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-handshake-o"></i>
            <span> Standar 8</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar8pengabdian"><i class="fa fa-circle-o"></i> Pengabdian Kepada Masyarakat</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open"></i>
            <span> Standar 9</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar9hasilpendidikan"><i class="fa fa-circle-o"></i> Hasil Pendidikan</a></li>
            <li><a href="standar9hasilpenelitian"><i class="fa fa-circle-o"></i> Hasil Penelitian dan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengabdian Kepada Masyarakat</a></li>
           <li><a href="standar9_hasil_dan_capaian_fakultas"><i class="fa fa-circle-o"></i> Standar 9 Hasil dan Capaian</a></li>
          </ul>
        </li>
        <li>
          <a href="download_pdf_buku_3b"><i class="fa fa-book"></i><span>Buku 3B</span></a>
        </li>
        @endif
<!-- buat admin -->
        <!-- KTU Departemen -->
        @if(Auth::User()->role==2)
        <li>
          <a href="pengguna">
            <i class="fa fa-users"></i> <span> Pengguna</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span> Standar 1</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar1visimisi"><i class="fa fa-circle-o"></i> Visi, Misi, Tujuan, dan Strategi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span> Standar 2</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar2tamongma"><i class="fa fa-circle-o"></i> Tata Pamong</a></li>
            <li><a href="standar7kerjasamadalamnegeri"><i class="fa fa-circle-o"></i> Kerjasama instansi dalam negeri</a></li>
            <li><a href="standar7kerjasamaluarnegeri"><i class="fa fa-circle-o"></i> Kerjasama instansi luar negeri</a></li>
            <li><a href="standar2_tata_pamong_dan_kerjasama"><i class="fa fa-circle-o"></i> Standar 2 Tata Pamong dan Kerjasama</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-mortar-board"></i> <span> Standar 3</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="jumlah"><i class="fa fa-circle-o"></i> Akademik</a></li>
            <li><a href="lulusan"><i class="fa fa-circle-o"></i> Kelulusan Mahasiswa</a></li>
            <li><a href="kegiatan"><i class="fa fa-circle-o"></i> Pembinaan Non-akademik</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-id-card-o"></i>
           <span> Standar 4</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar4sdm01"><i class="fa fa-circle-o"></i> Sistem Seleksi dan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengembangan</a></li>
            <li><a href="standar4sdm02"><i class="fa fa-circle-o"></i> Monitoring dan Evaluasi</a></li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Dosen Tetap</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Sdm_Departemen_3"><i class="fa fa-circle-o"></i> Data Dosen Yang Bidangnya<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sesuai PS</a></li>
            <li><a href="Sdm_Departemen_4"><i class="fa fa-circle-o"></i> Data Dosen Yang Bidangnya<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Di Luar PS</a></li>
            <li><a href="sdm5"><i class="fa fa-circle-o"></i> Aktivitas Dosen Sesuai SKS</a></li>
            <li><a href="sdm6"><i class="fa fa-circle-o"></i> Aktivitas Mengajar Dosen<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang Bidangnya Sesuai PS</a></li>
            <li><a href="sdm7"><i class="fa fa-circle-o"></i> Aktivitas Mengajar Dosen<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang Bidangnya Di Luar PS</a></li>
          </ul>
        </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Dosen Tidak Tetap</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Sdm_Departemen_8"><i class="fa fa-circle-o"></i> Data Dosen</a></li>
            <li><a href="sdm9"><i class="fa fa-circle-o"></i> Aktivitas Mengajar Dosen</a></li>
          </ul>
        </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Upaya Peningkatan SDM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sdm10"><i class="fa fa-circle-o"></i> Kegiatan Tenaga Ahli/Pakar</a></li>
            <li><a href="sdm11"><i class="fa fa-circle-o"></i> Peningkatan Kemampuan</a></li>
            <li><a href="sdm12"><i class="fa fa-circle-o"></i> Kegiatan Dosen</a></li>
            <li><a href="sdm13"><i class="fa fa-circle-o"></i> Capaian Prestasi/Reputasi</a></li>
            <li><a href="sdm14"><i class="fa fa-circle-o"></i> Keikutsertaan Organisasi</a></li>
          </ul>
        </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Tenaga Kependidikan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sdm15"><i class="fa fa-circle-o"></i> Data Tenaga Kependidikan</a></li>
            <li><a href="standar4sdm016"><i class="fa fa-circle-o"></i> Upaya Meningkatkan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kompetensi Tendik</a></li>
          </ul>
        </li>
            @if((Auth::User()->id_departemen==10) && (Auth::User()->role==7))
            <li><a href="download_redaksi_standar4a"><i class="fa fa-circle-o"></i> Redaksi Standar 4</a></li>
            @elseif((Auth::User()->id_departemen!=10) && (Auth::User()->role==7))
            <li><a href="download_redaksi_standar4b"><i class="fa fa-circle-o"></i> Redaksi Standar 4</a></li>
            @endif
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span> Standar 5</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Keuangan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                @if(Auth::User()->id_departemen!=10)
                <li><a href="Penjelasan_Pengelolaan_Dana"><i class="fa fa-circle-o"></i> Pengelolaan Dana</a></li>
                @endif
                <li><a href="PenerimaanDana"><i class="fa fa-circle-o"></i> Penerimaan Dana</a></li>
                <li><a href="PenggunaanDana"><i class="fa fa-circle-o"></i> Penggunaan Dana</a></li>
              </ul>
            </li>
            <li><a href="Prasarana"><i class="fa fa-circle-o"></i> Prasarana</a></li>
            <li><a href="Sarana"><i class="fa fa-circle-o"></i> Sarana</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Sistem Informasi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="Perangkat_Keras"><i class="fa fa-circle-o"></i> Hardware</a></li>
                <li><a href="SistemInformasi"><i class="fa fa-circle-o"></i> Sistem Informasi</a></li>
                <li><a href="Aksesibilitas_Data"><i class="fa fa-circle-o"></i> Aksesibilitas Data</a></li>
              </ul>
            </li>
            <li><a href="download_redaksi_standar5_PS"><i class="fa fa-files-o"></i> Redaksi Standar 5</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-institution"></i>
            <span> Standar 6</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> 6.1 Kurikulum</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Kurikulum_Departemen_1"><i class="fa fa-circle-o"></i> 6.1.1 Kompetensi Utama<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lulusan</a></li>
            <li><a href="Kurikulum_Departemen_2"><i class="fa fa-circle-o"></i> 6.1.2 Kompetensi<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pendukung Lulusan</a></li>
            <li><a href="Kurikulum_Departemen_3"><i class="fa fa-circle-o"></i> 6.1.3 Kompetensi Lainnya</a></li>
            <li><a href="kurikulum4"><i class="fa fa-circle-o"></i> 6.1.4 Jumlah sks PS</a></li>
            <li><a href="kurikulum5"><i class="fa fa-circle-o"></i> 6.1.5 Struktur Kurikulum</a></li>
            <li><a href="kurikulum6"><i class="fa fa-circle-o"></i> 6.1.6 Mata Kuliah Pilihan</a></li>
            <li><a href="kurikulum7"><i class="fa fa-circle-o"></i> 6.1.7 Substansi Praktikum /<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Praktek</a></li>
            <li><a href="Kurikulum_Departemen_8"><i class="fa fa-circle-o"></i> 6.1.8 Mekanisme Peninjauan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kurikulum</a></li>
            <li><a href="kurikulum9"><i class="fa fa-circle-o"></i> 6.1.9 Hasil Peninjauan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kurikulum</a></li>
          </ul>
        </li></li>
            <li><a href="Mekanisme_Susun_MK"><i class="fa fa-circle-o"></i>Mekanisme</a></li>
            <li><a href="Contoh_Soal"><i class="fa fa-circle-o"></i> Lampiran Contoh<br> Soal & Silabus</a></li>
            <li><a href="download_redaksi_standar6b"><i class="fa fa-circle-o"></i> Redaksi Standar 6</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span> Standar 7</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar7penelitian"><i class="fa fa-circle-o"></i> Penelitian</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-handshake-o"></i>
            <span> Standar 8</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar8pengabdian"><i class="fa fa-circle-o"></i> Pengabdian Kepada Masyarakat</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open"></i>
            <span> Standar 9</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar9hasilpendidikan"><i class="fa fa-circle-o"></i> Hasil Pendidikan</a></li>
            <li><a href="standar9hasilpenelitian"><i class="fa fa-circle-o"></i> Hasil Penelitian dan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengabdian Kepada Masyarakat</a></li>
            <li><a href="standar9_hasil_dan_capaian_program_studi"><i class="fa fa-circle-o"></i> Standar 9 Hasil dan Capaian</a></li>
          </ul>
        </li>
        <li>
          <a href="download_pdf_buku_3a"><i class="fa fa-book"></i><span>Buku 3A</span></a>
        </li>
        <!-- buat Super User -->
        <!-- KAdep sekdep -->
        @elseif(Auth::User()->role==14)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span> Standar 1</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar1visimisi"><i class="fa fa-circle-o"></i> Visi, Misi, Tujuan, dan Strategi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span> Standar 2</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar2tamongma"><i class="fa fa-circle-o"></i> Tata Pamong</a></li>
            <li><a href="standar7kerjasamadalamnegeri"><i class="fa fa-circle-o"></i> Kerjasama instansi dalam negeri</a></li>
            <li><a href="standar7kerjasamaluarnegeri"><i class="fa fa-circle-o"></i> Kerjasama instansi luar negeri</a></li>
            <li><a href="standar2_tata_pamong_dan_kerjasama"><i class="fa fa-circle-o"></i> Standar 2 Tata Pamong dan Kerjasama</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-mortar-board"></i> <span> Standar 3</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="jumlah"><i class="fa fa-circle-o"></i> Akademik</a></li>
            <li><a href="lulusan"><i class="fa fa-circle-o"></i> Kelulusan Mahasiswa</a></li>
            <li><a href="kegiatan"><i class="fa fa-circle-o"></i> Pembinaan Non-akademik</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-id-card-o"></i>
            <span> Standar 4</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar4sdm01"><i class="fa fa-circle-o"></i> Sistem Seleksi dan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengembangan</a></li>
            <li><a href="standar4sdm02"><i class="fa fa-circle-o"></i> Monitoring dan Evaluasi</a></li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Dosen Tetap</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Sdm_Departemen_3"><i class="fa fa-circle-o"></i> Data Dosen Yang Bidangnya<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sesuai PS</a></li>
            <li><a href="Sdm_Departemen_4"><i class="fa fa-circle-o"></i> Data Dosen Yang Bidangnya<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Di Luar PS</a></li>
            <li><a href="sdm5"><i class="fa fa-circle-o"></i> Aktivitas Dosen Sesuai SKS</a></li>
            <li><a href="sdm6"><i class="fa fa-circle-o"></i> Aktivitas Mengajar Dosen<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang Bidangnya Sesuai PS</a></li>
            <li><a href="sdm7"><i class="fa fa-circle-o"></i> Aktivitas Mengajar Dosen<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang Bidangnya Di Luar PS</a></li>
          </ul>
        </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Dosen Tidak Tetap</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Sdm_Departemen_8"><i class="fa fa-circle-o"></i> Data Dosen</a></li>
            <li><a href="sdm9"><i class="fa fa-circle-o"></i> Aktivitas Mengajar Dosen</a></li>
          </ul>
        </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Upaya Peningkatan SDM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sdm10"><i class="fa fa-circle-o"></i> Kegiatan Tenaga Ahli/Pakar</a></li>
            <li><a href="sdm11"><i class="fa fa-circle-o"></i> Peningkatan Kemampuan</a></li>
            <li><a href="sdm12"><i class="fa fa-circle-o"></i> Kegiatan Dosen</a></li>
            <li><a href="sdm13"><i class="fa fa-circle-o"></i> Capaian Prestasi/Reputasi</a></li>
            <li><a href="sdm14"><i class="fa fa-circle-o"></i> Keikutsertaan Organisasi</a></li>
          </ul>
        </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Tenaga Kependidikan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sdm15"><i class="fa fa-circle-o"></i> Data Tenaga Kependidikan</a></li>
            <li><a href="standar4sdm016"><i class="fa fa-circle-o"></i> Upaya Meningkatkan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kompetensi Tendik</a></li>
          </ul>
        </li>
            @if((Auth::User()->id_departemen==10) && (Auth::User()->role==7))
            <li><a href="download_redaksi_standar4a"><i class="fa fa-circle-o"></i> Redaksi Standar 4</a></li>
            @elseif((Auth::User()->id_departemen!=10) && (Auth::User()->role==7))
            <li><a href="download_redaksi_standar4b"><i class="fa fa-circle-o"></i> Redaksi Standar 4</a></li>
            @endif
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span> Standar 5</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Keuangan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                @if(Auth::User()->id_departemen!=10)
                <li><a href="Penjelasan_Pengelolaan_Dana"><i class="fa fa-circle-o"></i> Pengelolaan Dana</a></li>
                @endif
                <li><a href="PenerimaanDana"><i class="fa fa-circle-o"></i> Penerimaan Dana</a></li>
                <li><a href="PenggunaanDana"><i class="fa fa-circle-o"></i> Penggunaan Dana</a></li>
              </ul>
            </li>
            @if(Auth::User()->id_departemen==10)
            <li><a href="Pendapat_Pimpinan_Fakultas"><i class="fa fa-circle-o"></i> Pendapat Pimpinan</a></li>
            <li><a href="Prasarana_Tambahan"><i class="fa fa-circle-o"></i> Prasarana</a></li>
            <li><a href="Sarana_Tambahan"><i class="fa fa-circle-o"></i> Sarana</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Sistem Informasi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="Organoware"><i class="fa fa-circle-o"></i> Organoware</a></li>
                <li><a href="Perangkat_Keras"><i class="fa fa-circle-o"></i> Hardware</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Software
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                <ul class="treeview-menu">
                  <li><a href="PL_Komersial"><i class="fa fa-circle-o"></i> Software Komersial</a></li>
                  <li><a href="SistemInformasi"><i class="fa fa-circle-o"></i> Sistem Informasi</a></li>
                </ul>
                  <li><a href="Aksesibilitas_Data"><i class="fa fa-circle-o"></i> Aksesibilitas Data</a></li>
                  <li><a href="Upaya_Sebar_Info"><i class="fa fa-circle-o"></i> Upaya Penyebaran<br>Informasi</a></li></li>
                  <li><a href="Rencana_Pengembangan_S_I"><i class="fa fa-circle-o"></i> Rencana Pengembangan<br>Sistem Informasi </a></li>
              </ul>
            </li>
            <li><a href="download_redaksi_standar5"><i class="fa fa-files-o"></i> Redaksi Standar 5</a></li>
            @elseif(Auth::User()->id_departemen!=10)
            <li><a href="Prasarana"><i class="fa fa-circle-o"></i> Prasarana</a></li>
            <li><a href="Sarana"><i class="fa fa-circle-o"></i> Sarana</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Sistem Informasi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="Perangkat_Keras"><i class="fa fa-circle-o"></i> Hardware</a></li>
                <li><a href="SistemInformasi"><i class="fa fa-circle-o"></i> Sistem Informasi</a></li>
                <li><a href="Aksesibilitas_Data"><i class="fa fa-circle-o"></i> Aksesibilitas Data</a></li>
              </ul>
            </li>
            <li><a href="download_redaksi_standar5_PS"><i class="fa fa-files-o"></i> Redaksi Standar 5</a></li>
            @endif
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-institution"></i>
            <span> Standar 6</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> 6.1 Kurikulum</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Kurikulum_Departemen_1"><i class="fa fa-circle-o"></i> 6.1.1 Kompetensi Utama<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lulusan</a></li>
            <li><a href="Kurikulum_Departemen_2"><i class="fa fa-circle-o"></i> 6.1.2 Kompetensi<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pendukung Lulusan</a></li>
            <li><a href="Kurikulum_Departemen_3"><i class="fa fa-circle-o"></i> 6.1.3 Kompetensi Lainnya</a></li>
            <li><a href="kurikulum4"><i class="fa fa-circle-o"></i> 6.1.4 Jumlah sks PS</a></li>
            <li><a href="kurikulum5"><i class="fa fa-circle-o"></i> 6.1.5 Struktur Kurikulum</a></li>
            <li><a href="kurikulum6"><i class="fa fa-circle-o"></i> 6.1.6 Mata Kuliah Pilihan</a></li>
            <li><a href="kurikulum7"><i class="fa fa-circle-o"></i> 6.1.7 Substansi Praktikum /<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Praktek</a></li>
            <li><a href="Kurikulum_Departemen_8"><i class="fa fa-circle-o"></i> 6.1.8 Mekanisme Peninjauan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kurikulum</a></li>
            <li><a href="kurikulum9"><i class="fa fa-circle-o"></i> 6.1.9 Hasil Peninjauan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kurikulum</a></li>
          </ul>
        </li></li>
            <li><a href="Mekanisme_Susun_MK"><i class="fa fa-circle-o"></i>Mekanisme</a></li>
            <li><a href="Contoh_Soal"><i class="fa fa-circle-o"></i> Lampiran Contoh<br> Soal & Silabus</a></li>
            <li><a href="download_redaksi_standar6b"><i class="fa fa-circle-o"></i> Redaksi Standar 6</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span> Standar 7</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar7penelitian"><i class="fa fa-circle-o"></i> Penelitian</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-handshake-o"></i>
            <span> Standar 8</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar8pengabdian"><i class="fa fa-circle-o"></i> Pengabdian Kepada Masyarakat</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open"></i>
            <span> Standar 9</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar9hasilpendidikan"><i class="fa fa-circle-o"></i> Hasil Pendidikan</a></li>
            <li><a href="standar9hasilpenelitian"><i class="fa fa-circle-o"></i> Hasil Penelitian dan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengabdian Kepada Masyarakat</a></li>
            <li><a href="standar9_hasil_dan_capaian_program_studi"><i class="fa fa-circle-o"></i> Standar 9 Hasil dan Capaian</a></li>
          </ul>
        </li>
        @if((Auth::User()->id_departemen!=10) && (Auth::User()->role==14))
        <li>
          <a href="download_pdf_buku_3a"><i class="fa fa-book"></i><span>Buku 3A</span></a>
        </li>
        @endif
        @if((Auth::User()->id_departemen==10) && (Auth::User()->role==14))
        <li>
          <a href="download_pdf_buku_3b"><i class="fa fa-book"></i><span>Buku 3B</span></a>
        </li>
        @endif
        <!-- Kaprodi -->
        @elseif(Auth::user()->role==6)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-mortar-board"></i> <span> Standar 3</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="jumlah"><i class="fa fa-circle-o"></i> Akademik</a></li>
            <li><a href="lulusan"><i class="fa fa-circle-o"></i> Kelulusan Mahasiswa</a></li>
            <li><a href="kegiatan"><i class="fa fa-circle-o"></i> Pembinaan Non-akademik</a></li>
          </ul>
        </li>
        @elseif(Auth::user()->role==3)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span> Standar 1</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar1visimisi"><i class="fa fa-circle-o"></i> Visi, Misi, Tujuan, dan Strategi</a></li>
          </ul>
        </li>
        @elseif(Auth::User()->role==4)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span> Standar 2</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar2tamongma"><i class="fa fa-circle-o"></i> Tata Pamong</a></li>
          </ul>
        </li>
        @elseif(Auth::User()->role==5)
         <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span> Standar 2</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar7kerjasamadalamnegeri"><i class="fa fa-circle-o"></i> Kerjasama instansi dalam negeri</a></li>
            <li><a href="standar7kerjasamaluarnegeri"><i class="fa fa-circle-o"></i> Kerjasama instansi luar negeri</a></li>
          </ul>
        </li>
        @elseif(Auth::user()->role==7)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-id-card-o"></i>
            <span> Standar 4</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar4sdm01"><i class="fa fa-circle-o"></i> Sistem Seleksi dan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengembangan</a></li>
            <li><a href="standar4sdm02"><i class="fa fa-circle-o"></i> Monitoring dan Evaluasi</a></li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Dosen Tetap</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Sdm_Departemen_3"><i class="fa fa-circle-o"></i> Data Dosen Yang Bidangnya<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sesuai PS</a></li>
            <li><a href="Sdm_Departemen_4"><i class="fa fa-circle-o"></i> Data Dosen Yang Bidangnya<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Di Luar PS</a></li>
            <li><a href="sdm5"><i class="fa fa-circle-o"></i> Aktivitas Dosen Sesuai SKS</a></li>
            <li><a href="sdm6"><i class="fa fa-circle-o"></i> Aktivitas Mengajar Dosen<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang Bidangnya Sesuai PS</a></li>
            <li><a href="sdm7"><i class="fa fa-circle-o"></i> Aktivitas Mengajar Dosen<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang Bidangnya Di Luar PS</a></li>
          </ul>
        </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Dosen Tidak Tetap</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Sdm_Departemen_8"><i class="fa fa-circle-o"></i> Data Dosen</a></li>
            <li><a href="sdm9"><i class="fa fa-circle-o"></i> Aktivitas Mengajar Dosen</a></li>
          </ul>
        </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Upaya Peningkatan SDM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sdm10"><i class="fa fa-circle-o"></i> Kegiatan Tenaga Ahli/Pakar</a></li>
            <li><a href="sdm11"><i class="fa fa-circle-o"></i> Peningkatan Kemampuan</a></li>
            <li><a href="sdm12"><i class="fa fa-circle-o"></i> Kegiatan Dosen</a></li>
            <li><a href="sdm13"><i class="fa fa-circle-o"></i> Capaian Prestasi/Reputasi</a></li>
            <li><a href="sdm14"><i class="fa fa-circle-o"></i> Keikutsertaan Organisasi</a></li>
          </ul>
        </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Tenaga Kependidikan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="sdm15"><i class="fa fa-circle-o"></i> Data Tenaga Kependidikan</a></li>
            <li><a href="standar4sdm016"><i class="fa fa-circle-o"></i> Upaya Meningkatkan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kompetensi Tendik</a></li>
          </ul>
        </li>
            @if((Auth::User()->id_departemen==10) && (Auth::User()->role==7))
            <li><a href="download_redaksi_standar4a"><i class="fa fa-circle-o"></i> Redaksi Standar 4</a></li>
            @elseif((Auth::User()->id_departemen!=10) && (Auth::User()->role==7))
            <li><a href="download_redaksi_standar4b"><i class="fa fa-circle-o"></i> Redaksi Standar 4</a></li>
            @endif
          </ul>
        </li>
        @elseif(Auth::user()->role==8)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span> Standar 5</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Keuangan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                @if(Auth::User()->id_departemen!=10)
                <li><a href="Penjelasan_Pengelolaan_Dana"><i class="fa fa-circle-o"></i> Pengelolaan Dana</a></li>
                @endif
                <li><a href="PenerimaanDana"><i class="fa fa-circle-o"></i> Penerimaan Dana</a></li>
                <li><a href="PenggunaanDana"><i class="fa fa-circle-o"></i> Penggunaan Dana</a></li>
              </ul>
            </li>
            @if((Auth::User()->id_departemen==10) && (Auth::User()->role==8))
            <li><a href="Pendapat_Pimpinan_Fakultas"><i class="fa fa-circle-o"></i> Pendapat Pimpinan</a></li>
            @endif
          </ul>
        </li>
        @elseif(Auth::user()->role==9)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span> Standar 5</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @if((Auth::User()->id_departemen!=10) && (Auth::User()->role==9))
            <li><a href="Prasarana"><i class="fa fa-circle-o"></i> Prasarana</a></li>
            <li><a href="Sarana"><i class="fa fa-circle-o"></i> Sarana</a></li>
            @elseif((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
            <li><a href="Prasarana_Tambahan"><i class="fa fa-circle-o"></i> Prasarana</a></li>
            <li><a href="Sarana_Tambahan"><i class="fa fa-circle-o"></i> Sarana</a></li>
            @endif
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Sistem Informasi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                <li><a href="Organoware"><i class="fa fa-circle-o"></i> Organoware</a></li>
                @endif
                <li><a href="Perangkat_Keras"><i class="fa fa-circle-o"></i> Hardware</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Software
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                <ul class="treeview-menu">
                  @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                  <li><a href="PL_Komersial"><i class="fa fa-circle-o"></i>Software Komersial</a></li>
                  @endif
                  <li><a href="SistemInformasi"><i class="fa fa-circle-o"></i>Sistem Informasi</a></li>
                </ul>
                  <li><a href="Aksesibilitas_Data"><i class="fa fa-circle-o"></i> Aksesibilitas Data</a></li>
                  @if((Auth::User()->id_departemen==10) && (Auth::User()->role==9))
                  <li><a href="Upaya_Sebar_Info"><i class="fa fa-circle-o"></i> Upaya Penyebaran<br>Informasi</a></li></li>
                  <li><a href="Rencana_Pengembangan_S_I"><i class="fa fa-circle-o"></i> Rencana Pengembangan<br>Sistem Informasi </a></li>
                  @endif
              </ul>
            </li>
            <!-- <li><a href="download_redaksi_standar5_PS"><i class="fa fa-files-o"></i> Redaksi Standar 5</a></li> -->
          </ul>
        </li>
        @elseif(Auth::user()->role==10)
         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span> Standar 6</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i>
            <span> Kurikulum</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar6kurikulum01"><i class="fa fa-circle-o"></i> Kompetensi Utama Lulusan</a></li>
            <li><a href="standar6kurikulum02"><i class="fa fa-circle-o"></i> Kompetensi Pendukung<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lulusan</a></li>
            <li><a href="standar6kurikulum03"><i class="fa fa-circle-o"></i> Kompetensi Lainnya</a></li>
            <li><a href="kurikulum4"><i class="fa fa-circle-o"></i> Jumlah SKS PS</a></li>
            <li><a href="kurikulum5"><i class="fa fa-circle-o"></i> Struktur Kurikulum</a></li>
            <li><a href="kurikulum6"><i class="fa fa-circle-o"></i> Mata Kuliah Pilihan</a></li>
            <li><a href="kurikulum7"><i class="fa fa-circle-o"></i> Substansi Praktikum<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Praktek</a></li>
            <li><a href="standar6kurikulum08"><i class="fa fa-circle-o"></i> Mekanisme Peninjauan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kurikulum</a></li>
            <li><a href="kurikulum9"><i class="fa fa-circle-o"></i> Hasil Peninjauan Kurikulum</a></li>
          </ul>
        </li></li>
            @if((Auth::User()->id_departemen!=10) && (Auth::User()->role==10))
            <li><a href="Mekanisme_Susun_MK"><i class="fa fa-circle-o"></i> Mekanisme</a></li>
            <li><a href="Contoh_Soal"><i class="fa fa-circle-o"></i> Lampiran Contoh<br> Soal & Silabus</a></li>
            <li><a href="download_redaksi_standar6b"><i class="fa fa-circle-o"></i> Redaksi Standar 6</a></li>
            @elseif((Auth::User()->id_departemen==10) && (Auth::User()->role==10))
            <li><a href="Kurikulum_Fmipa"><i class="fa fa-circle-o"></i> Kurikulum</a></li>
            <li><a href="Peran_Fakultas"><i class="fa fa-circle-o"></i> Sistem Pembelajaran</a></li>
            <li><a href="download_redaksi_standar6a"><i class="fa fa-circle-o"></i> Redaksi Standar 6</a></li>
            @endif
          </ul>
        </li>
        @elseif(Auth::user()->role==11)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span> Standar 7</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar7penelitian"><i class="fa fa-circle-o"></i> Penelitian</a></li>
          </ul>
        </li>
        @elseif(Auth::user()->role==12)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-handshake-o"></i>
            <span> Standar 8</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar8pengabdian"><i class="fa fa-circle-o"></i> Pengabdian Kepada Masyarakat</a></li>
          </ul>
        </li>
        @elseif(Auth::user()->role==13)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open"></i>
            <span> Standar 9</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="standar9hasilpendidikan"><i class="fa fa-circle-o"></i> Hasil Pendidikan</a></li>
            <li><a href="standar9hasilpenelitian"><i class="fa fa-circle-o"></i> Hasil Penelitian dan<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengabdian Kepada Masyarakat</a></li>
            <li><a href="standar9_hasil_dan_capaian_program_studi"><i class="fa fa-circle-o"></i> Standar 9 Hasil dan Capaian</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">PKL FMIPA</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="{{asset('Admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('Admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<!-- <script src="{{asset('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script> -->
<script src="{{asset('Admin/bower_components/bootstrap-timepicker/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('Admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('Admin/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('Admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('Admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('Admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('Admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('Admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('Admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('Admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('Admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('Admin/dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('Admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('Admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


<script src="{{asset('Admin/bower_components/moment/min/moment-with-locales.js')}}"></script>
<script src="{{asset('Admin/bower_components/bootstrap-timepicker/js/bootstrap-datetimepicker.js')}}"></script>


<!-- hitung rata2 bulan dan tahun di tambah-->
<script>
$(function() { 
  $('#tgl1').datetimepicker({
   locale:'id',
   format:'YYYY-MM-DD'
   });
   
  $('#tgl2').datetimepicker({
   useCurrent: false,
   locale:'id',
   format:'YYYY-MM-DD'
   });
   
   $('#tgl1').on("dp.change", function(e) {
    $('#tgl2').data("DateTimePicker").minDate(e.date);
    CalcDiff()
  });
  
   $('#tgl2').on("dp.change", function(e) {
    $('#tgl1').data("DateTimePicker").maxDate(e.date);
      CalcDiff()
   });
  
});

function CalcDiff()
{
    var a=$('#tgl1').data("DateTimePicker").date();
    var b=$('#tgl2').data("DateTimePicker").date();
        var timeDiff=0
         if (b) {
                timeDiff = (b - a) / 1000;
            }
     
     $('#selisih').val((timeDiff/(86400)/30).toFixed(2))
     $('#selisihthn').val((timeDiff/(86400)/30/12).toFixed(2))   
}
</script>

<!-- hitung rata2 bulan dan tahun di fungsi edit -->
<script>
$(function() { 
  $('#tgl3').datetimepicker({
   locale:'id',
   format:'YYYY-MM-DD'
   });
   
  $('#tgl4').datetimepicker({
   useCurrent: false,
   locale:'id',
   format:'YYYY-MM-DD'
   });
   
   $('#tgl3').on("dp.change", function(e) {
    $('#tgl4').data("DateTimePicker").minDate(e.date);
    CalcDiff2()
  });
  
   $('#tgl4').on("dp.change", function(e) {
    $('#tgl3').data("DateTimePicker").maxDate(e.date);
      CalcDiff2()
   });
  
});

function CalcDiff2()
{
    var a2=$('#tgl3').data("DateTimePicker").date();
    var b2=$('#tgl4').data("DateTimePicker").date();
        var timeDiff2=0
         if (b2) {
                timeDiff2 = (b2 - a2) / 1000;
            }
     
     $('#ratabln').val((timeDiff2/(86400)/30).toFixed(2))
     $('#ratathn').val((timeDiff2/(86400)/30/12).toFixed(2))   
}
</script>

<script type="text/javascript">
$(function() { 
  $('#tgl_dana_keluar').datetimepicker({
   locale:'id',
   format:'YYYY-MM-DD'
   });
}  
</script>
<script>
  $('#jumlah, #harga_satuan').keyup(function(){
    var jumlah = parseFloat($('#jumlah').val()) || 0;
    var harga_satuan = parseFloat($('#harga_satuan').val()) || 0;

    $('#jmlh_harga').val(jumlah * harga_satuan);    
});
</script>
<!-- sarana ps -->
<script>
  $(document).ready(function(){
    $('#jumlah2, #harga_satuan2').keyup(function(){
      var jumlah2 = parseFloat($('#jumlah2').val()) || 0;
      var harga_satuan2 = parseFloat($('#harga_satuan2').val()) || 0;

      $('#jmlh_harga2').val(jumlah2 * harga_satuan2);    
    })
  });
  $(document).ready(function(){
    $('#jumlah3, #harga_satuan3').keyup(function(){
      var jumlah3 = parseFloat($('#jumlah3').val()) || 0;
      var harga_satuan3 = parseFloat($('#harga_satuan3').val()) || 0;

      $('#jmlh3').val(jumlah3 * harga_satuan3);    
    })
  });
</script>
<!-- prasarana ps -->
<script>
  $(document).ready(function(){
    $('#panjang1, #lebar1').keyup(function(){
      var panjang1 = parseFloat($('#panjang1').val()) || 0;
      var lebar1 = parseFloat($('#lebar1').val()) || 0;

      $('#luas1').val(panjang1 * lebar1); 
    })   
  });
  $(document).ready(function(){
    $('#panjang2, #lebar2').keyup(function(){
      var panjang2 = parseFloat($('#panjang2').val()) || 0;
      var lebar2 = parseFloat($('#lebar2').val()) || 0;

      $('#luas2').val(panjang2 * lebar2); 
    })   
  });
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'scrollX'     : true,
      'iDisplayLength':20

    })
    $('#example3').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'scrollX'     : true,
      'iDisplayLength':20

    })
    $('#example4').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'scrollX'     : true,
      'iDisplayLength':20

    })
    $('#example5').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'scrollX'     : true,
      'iDisplayLength':20

    })
  })

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

//Date picker
    $('#datepicker2').datepicker({
      autoclose: true
    })
    //Date range picker
    $('#reservation').daterangepicker()

 $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#jumlahs-list tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

 $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#lulusans-list tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#kegiatan-list tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#pengguna-list tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#Input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#penelitians tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#Input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#pengabdians tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#Input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#hasil_pendidikan tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#Input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#hasil_pendidikan tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#Input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#hasil_penelitian tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#Input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#kerjasamaDalam tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#Input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#kerjasamaLuar tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#perangkatkeras tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#pl_komersial tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#penggunaan_dana_list tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#myInput1").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tridarma_list tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#penerimaan_dana tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#pras_tambahan tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#lap_sar_tamb tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#myInput2").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#list_dana_teliti tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
$(document).ready(function(){
      $("#myInput3").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#list_dana_kegiatan tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>
<script>
var url = window.location;
// for sidebar menu but not for treeview submenu
$('ul.sidebar-menu a').filter(function() {
    return this.href == url;
}).parent().siblings().removeClass('active').end().addClass('active');
// for treeview which is like a submenu
$('ul.treeview-menu a').filter(function() {
    return this.href == url;
}).parentsUntil(".sidebar-menu > .treeview-menu").siblings().removeClass('active').end().addClass('active');
</script>
</body>
</html>