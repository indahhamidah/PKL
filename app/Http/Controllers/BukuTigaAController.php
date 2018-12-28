<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\Vmts;
use App\Tamongma;
use App\KerjasamaDalam;
use App\KerjasamaLuar;
use App\Jumlah;
use App\RedaksiJumlah;
use App\Lulusan;
use App\RedaksiLulusan;
use App\Sdm1;
use App\Sdm2; 
use App\Sdm3;
use App\JabatanAkademik;
use App\JumlahKelas;
use App\Lampiransdm3;
use App\Sdm4;
use App\Lampiransdm4;
use App\Sdm5;
use App\Sdm6;
use App\Sdm7;
use App\Sdm8;
use App\Lampiransdm8;
use App\PeranKegiatan;
use App\Tingkatan;
use App\Sdm9;
use App\Sdm10;
use App\Sdm11;
use App\Sdm12;
use App\Sdm13;
use App\Sdm14;
use App\Sdm15;
use App\Sdm16;
use App\PengelolaanDanaPS;
use App\PerangkatKeras;
use App\PenerimaanDana;
use App\SumberDanaTerima;
use App\JenisDana;
use App\DanaLainLain;
use App\PenggunaanDana;
use App\Penelitian;
use App\Pengabdian;
use App\KepemilikanPras;
use App\KondisiPras;
use App\PrasaranaPS;
use App\PrasPenunjang;
use App\PustakaRuangBaca;
use App\Kurikulum1;
use App\Kurikulum2;
use App\Kurikulum3;
use App\Kurikulum4;
use App\Kurikulum5;
use App\Semester;
use App\BobotSks;
use App\BobotTugas;
use App\kelengkapanDeskripsi;
use App\PerubahanSilabus;
use App\PerubahanBukuAjar;
use App\KelengkapanSilabus;;
use App\KelengkapanSap;
use App\Haki;
use App\Hoki;
use App\Hiki;
use App\Huki;
use App\Kurikulum6;
use App\Kurikulum7;
use App\Kurikulum8;
use App\Kurikulum9;
use App\MekanismeMK;
use App\SumberDana;
use App\Bukti;
use App\Proposal;
use App\RedaksiPenelitian;
use App\MahasiswaTerlibat;
use App\TerlibatPenelitian;
use App\RedaksiPenelitianFmipa;
use App\BuktiPengabdian;
use App\ProposalPengabdian;
use App\RedaksiPengabdian;
use App\MahasiswaPengabdian;
use App\RedaksiPengabdianFmipa;
use App\HasilPendidikan;
use App\LampiranHasil;
use App\JenisHasil;
use App\HasilPenelitian;
use App\Tingkat;
use App\PendapatPimpinan;
use App\PenilaianSarana;
use App\SaranaTambahan;
use App\PenilaianPrasarana;
use App\PrasaranaTambahan;
use App\PenjelasanOrganoware;
use App\SistemInformasi;
use App\Komersial;
use App\AksesibilitasData;
use App\JenisDataAkses;
use App\SistemKelolaData;
use App\Netware;
use App\Hologram;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Carbon\Carbon;
use Input;

class BukuTigaAController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function download_pdf_3a (Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        // Standar 1
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
       $vmts = Vmts::whereBetween('tahun_awal', [$dateX,$dateW])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('visimisi')
                        ->get(); 
        // Standar 2
         $kerdal = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $tamongma = Tamongma::whereBetween('tahun_awal', [$dateX,$dateW])
                ->join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->select('tamongjama')
                ->get(); 
        $tahun_ke_1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $tahun_ke_2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kerjasamaDalam = KerjasamaDalam::whereBetween('tahun_mulai', [$tahun_ke_1,$tahun_ke_2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_mulai', 'asc')
                        ->get();
        $tahun_ke_1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $tahun_ke_2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_mulai', [$tahun_ke_1,$tahun_ke_2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();


        // Standar 3
        $jumlahs = Jumlah::whereBetween('tahun', [$tahun_ke_1,$tahun_ke_2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun', 'desc')
                        ->get();
                        // dd($jumlahs);
        $redaksiJumlah = RedaksiJumlah::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_jumlah', 'id_redaksiJum', 'id_departemen')
                        ->get();
        $redaksiLulusan = RedaksiLulusan::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_lulusan', 'id_redaksiLus', 'id_departemen')
                        ->get();
        //TS-4
        $dateS = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $dateE = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $min4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $jum_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();
        $min_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();

        //TS-3
        $dateS1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $dateE1 = Carbon::now()->startOfYear()->subYear(2)->subMonth(4);
        $min3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $jum_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();
        $min_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();

        //TS-2
        $dateS12 = Carbon::now()->startOfYear()->subYear(2)->subMonth(4);
        $dateE12 = Carbon::now()->startOfYear()->subYear(1)->subMonth(4);
        $min2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $jum_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();
        $min_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();
        //TS-1
        $dateS13 = Carbon::now()->startOfYear()->subYear(1)->subMonth(4);
        $dateE13 = Carbon::now()->startOfYear()->subYear(0)->subMonth(4);
        $min1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $min11=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();
        $total_jml_ts1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();

        //TS
        $dateS14 = Carbon::now()->startOfYear()->subYear(0)->subMonth(4);
        $dateE14 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $min0=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg0=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max0=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $mints=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengahts=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $maxts=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>', '3.50')
                            ->count();
        $total_jml=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();

        $ts = Carbon::now()->startOfYear()->subYear(4)->subMonth(4)->format('Y');
        $ts1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4)->format('Y');
        $ts2 = Carbon::now()->startOfYear()->subYear(2)->subMonth(4)->format('Y');
        $ts3 = Carbon::now()->startOfYear()->subYear(1)->subMonth(4)->format('Y');
        $ts4 = Carbon::now()->startOfYear()->subYear(0)->subMonth(4)->format('Y');
        $ts5 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4)->format('Y');
        
        // Standar 4
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $sistem_seleksi_dan_pengembangan = Sdm1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_seleksi_dan_pengembangan')
                        ->get(); 

        $monitoring_dan_evaluasi = Sdm2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_monitoring_dan_evaluasi')
                        ->get(); 

        $sdm3s   = DB::table('data_dosen_yang_bidangnya_sesuai_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('nidn_sdm3')
                        ->get();

        $jabatanakademik=JabatanAkademik::get();

         $sdm4s   = DB::table('data_dosen_yang_bidangnya_diluar_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('nidn_sdm4')
                        ->get();

        $jabatansdm4=JabatanAkademik::get();

        $sdmk5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);

         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);

         $sdm5s = Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm5')
                        ->get();

        $totalsks1=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_ps_sendiri');

        $totalsks2=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_ps_lain_pt_sendiri');

        $totalsks3=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_pt_lain');

        $totalsks4=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_penelitian');

        $totalsks5=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengabdian_kepada_masyarakat');

        $totalsks6=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_manajemen_pt_sendiri');

        $totalsks7=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_manajemen_pt_lain');

        $totaljumlah=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum(DB::raw('sks_pengajaran_pada_ps_sendiri+sks_pengajaran_pada_ps_lain_pt_sendiri+sks_pengajaran_pada_pt_lain+sks_penelitian+sks_pengabdian_kepada_masyarakat+sks_manajemen_pt_sendiri+sks_manajemen_pt_lain'));

        $ratasks1=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_ps_sendiri');

        $ratasks2=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_ps_lain_pt_sendiri');

        $ratasks3=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_pt_lain');

        $ratasks4=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_penelitian');

        $ratasks5=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengabdian_kepada_masyarakat');

        $ratasks6=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_manajemen_pt_sendiri');

        $ratasks7=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_manajemen_pt_lain');

        $ratajumlah=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg(DB::raw('sks_pengajaran_pada_ps_sendiri+sks_pengajaran_pada_ps_lain_pt_sendiri+sks_pengajaran_pada_pt_lain+sks_penelitian+sks_pengabdian_kepada_masyarakat+sks_manajemen_pt_sendiri+sks_manajemen_pt_lain'));

        $sdmk6 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $sdm6s = Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm6')
                        ->get();

        $totalrencana=Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm6');

        $totallaksana=Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm6');

        $sdmk7 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $sdm7s = Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm7')
                        ->get();

        $totalrencana1=Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm7');

        $totallaksana1=Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm7');

        $sdm8s   = DB::table('data_dosen_tidak_tetap')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('nidn_sdm8')
                        ->get();

        $jabatansdm8=JabatanAkademik::get();

        $sdmk9 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $sdm9s = Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm9')
                        ->get();

        $totalrencana2=Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm9');

        $totallaksana2=Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm9');

        $sdmk10 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $kegiatan_tenaga_ahlis = Sdm10::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_tenaga_ahli')
                        ->get();

        $sdmk11 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $sdm11s = Sdm11::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm11')
                        ->get();

        $sdmk12 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $sdm12s = Sdm12::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('peran_kegiatan', 'id_peran_kegiatan', '=', 'id_status_peran_kegiatan')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm12')
                        ->get();

        $peran_kegiatan=PeranKegiatan::get();

        $sdmk13 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $sdm13s = Sdm13::join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm13')
                        ->get();

        $tingkatan=Tingkatan::get();

        $sdmk14 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $sdm14s = Sdm14::join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm14')
                        ->get();

        $sdmk15 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $sdm15s = Sdm15::whereBetween('tahun_sdm15', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdm15', 'desc')
                        ->get();

        $upaya_meningkatkan_kompetensi_tendik = Sdm16::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_upaya_meningkatkan_kompetensi_tendik')
                        ->get(); 

        // Standar 5
        $pengelolaan=PengelolaanDanaPS::where('id_departemen', $id_departemen)
                                      ->get();

        $dateS = Carbon::now()->startOfYear()->subYear(2);
        $dateS1 = Carbon::now()->startOfYear()->subYear(1)->subDays(1);
        $dateS11 = Carbon::now()->startOfYear()->subYear(1);
        $dateS2 = Carbon::now()->startOfYear()->subDays(1);
        $dateE = Carbon::now()->startOfYear();
        $dateE1 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $thn_2  = Carbon::now()->startOfYear()->subYear(1)->subMonth(4);
        $thn_22  = Carbon::now()->startOfYear()->subMonth(4)->subDays(1);
        // ts-1
        $thn_1   = Carbon::now()->startOfYear()->subMonth(4);
        $thn_11 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4)->subDays(1);
        // ts
        $thn = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $thn_ = Carbon::now()->startOfYear()->addYear(2)->subMonth(4)->subDays(1);

        $baru=PenerimaanDana::whereBetween('tahun_terima_dana', [$thn_2, $thn_])
                                          ->where('id_departemen', $id_departemen)
                                          ->select(DB::raw('sum(jumlah_dana_terima) as terima, id_sumber_danaa'))
                                          ->groupBy('id_sumber_danaa')
                                          ->get();
// dd($baru);
        $tahun_sekarang = date("Y");
        $tahun_sekarang = (int)$tahun_sekarang;
        $tahun_dua_lalu = $tahun_sekarang - 2;
        $tahun_satu_lalu = $tahun_sekarang - 1;
        $total = array_fill(0,3,0);
        foreach ($baru as $key1 => $bar) {
          $jenis=PenerimaanDana::where('id_sumber_danaa', $bar->id_sumber_danaa)
                                            ->select(DB::raw('sum(jumlah_dana_terima) as terima, jenis_dana'))
                                            ->where('id_departemen', $id_departemen)
                                            ->groupBy('jenis_dana')
                                            ->get();
                                            // dd($jenis);
            foreach ($jenis as $key2 => $jen) {
              $sumber[$key1] = $bar->sumberDana->sumber_terima_danaa;
              $jns[$key1][$key2]= $jen->jenis_dana;
              $jumlah[$key1][$key2] = array_fill($tahun_dua_lalu,3,0);

              $tahun1=PenerimaanDana::whereBetween('tahun_terima_dana', [$thn_2, $thn_22])
                                                ->where('id_sumber_danaa', $bar->id_sumber_danaa)
                                                ->where('jenis_dana', $jen->jenis_dana)
                                                ->where('id_departemen', $id_departemen)
                                                ->get();
              if(isset($tahun1)){
                foreach ($tahun1 as $key3 => $thn1) {
                  if ($key3 == 0) {
                    $jumlah[$key1][$key2][$tahun_dua_lalu] = $thn1->jumlah_dana_terima;
                  }else{
                    $jumlah[$key1][$key2][$tahun_dua_lalu] += $thn1->jumlah_dana_terima;
                  }
                  $total[0] += $thn1->jumlah_dana_terima;
                }
              }
              
              $tahun2=PenerimaanDana::whereBetween('tahun_terima_dana', [$thn_1, $thn_11])
                                                ->where('id_sumber_danaa', $bar->id_sumber_danaa)
                                                ->where('jenis_dana', $jen->jenis_dana)
                                                ->where('id_departemen', $id_departemen)
                                                ->get();
              if (isset($tahun2)) {
                foreach ($tahun2 as $key4 => $thn2) {
                  if ($key4 == 0) {
                    $jumlah[$key1][$key2][$tahun_satu_lalu] = $thn2->jumlah_dana_terima;
                  }else{
                    $jumlah[$key1][$key2][$tahun_satu_lalu] += $thn2->jumlah_dana_terima;
                  }
                  $total[1] += $thn2->jumlah_dana_terima;
                }
              }

              $tahun3=PenerimaanDana::whereBetween('tahun_terima_dana', [$thn, $thn_])
                                                ->where('id_sumber_danaa', $bar->id_sumber_danaa)
                                                ->where('jenis_dana', $jen->jenis_dana)
                                                ->where('id_departemen', $id_departemen)
                                                ->get();
              if (isset($tahun3)) {
                foreach ($tahun3 as $key5 => $thn3) {
                  if ($key5 == 0) {
                    $jumlah[$key1][$key2][$tahun_sekarang] = $thn3->jumlah_dana_terima;
                  }else{
                    $jumlah[$key1][$key2][$tahun_sekarang] += $thn3->jumlah_dana_terima;
                  }
                  $total[2] += $thn3->jumlah_dana_terima;
                }
              }
            }
        }
// penggunaan dana
        $total_ts2=DB::table('penggunaan_dana')->whereBetween('tahun_penggunaan', [$dateS, $dateE])
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                ->select(DB::raw('sum(pendidikan) as jum_pend3, sum(penelitian) as jum_pen3, sum(pengabdian) as jum_peng3, sum(inves_pras) as jum_pras3, sum(inves_sar) as jum_sar3, sum(inves_sdm) as jum_sdm3, sum(lain_lain) as jum_lain3, sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total,sum(pendidikan)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pend, sum(penelitian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pen, sum(pengabdian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_peng,sum(inves_pras)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pras,sum(inves_sar)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sar,sum(inves_sdm)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sdm, sum(lain_lain)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_lain,tahun_penggunaan'))
                                ->groupBy('tahun_penggunaan')
                                ->where('id_departemen', $id_departemen)
                                ->get();
        
        $rata_pend=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('pendidikan');
        $rata_pen=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('penelitian');
        $rata_peng=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('pengabdian');         
        $rata_pras=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('inves_pras');          
        $rata_sar=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('inves_sar');
        $rata_sdm=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('inves_sdm');
        $rata_lain=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('lain_lain');         
        $rata_semua=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->select(DB::raw('avg(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total_rata'))->get('total_rata');
        // dana penelitian standar 7
        $penelitians = Penelitian::whereBetween('tahun_penelitian', [$dateS,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_penelitian', 'desc')
                            ->get();
         $totaldana=Penelitian::whereBetween('tahun_penelitian', [$dateS,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_dana');
         // pengabdian standar 8
       $pengabdians = Pengabdian::whereBetween('tahun_pengabdian', [$dateS,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_pengabdian', 'desc')
                            ->get();
                            // dd($pengabdians);
        $totaldana2=Pengabdian::whereBetween('tahun_pengabdian', [$dateS,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_dana_peng');
        // dd($total_ts2);
        $rk_dosen_tetap=DB::table('ruang_kerja_dosen_tetap')->join('departemen', 'id_dept', '=', 'id_departemen')
                          ->join('daftar_ruang_kerja', 'id_ruang_kerja_dosen', '=', 'id_ruang_kerja')
                          ->where('id_departemen', $id_departemen)
                          ->OrderBy('ruang_kerja_dosen', 'desc')
                          ->get();
        $jmlh_ruang=DB::table('ruang_kerja_dosen_tetap')->where('id_departemen', $id_departemen)
                                                        ->sum('jumlah_ruang');
        $jmlh_luas=DB::table('ruang_kerja_dosen_tetap')->where('id_departemen', $id_departemen)
                                                        ->sum('jumlah_luas');                    
        $prasarana_ps=PrasaranaPS::join('departemen', 'id_dept', '=', 'id_departemen')
                                   ->join('kepemilikan_prasarana_ps', 'id_kepemilikan', '=', 'id_kepemilikan_pras')
                                   ->join('kondisi_prasarana_ps', 'id_kondisi', '=', 'id_kondisi_pras')
                                   ->where('id_departemen', $id_departemen)
                                   ->OrderBy('jenis_prasarana_ps', 'asc')
                                   ->get();
        $penunjang_ps=PrasPenunjang::join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->join('kepemilikan_prasarana_ps', 'id_kepemilikan', '=', 'id_kepemilikan_penunjang')
                                                ->join('kondisi_prasarana_ps', 'id_kondisi', '=', 'id_kondisi_penunjang')
                                                ->where('id_departemen', $id_departemen)
                                                ->OrderBy('jenis_penunjang_ps', 'asc')
                                                ->get();
        $milik=KepemilikanPras::get();
        $kondisi=KondisiPras::get();
        $pustaka =PustakaRuangBaca::join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->join('jenis_pustaka_ruang_baca_dept', 'id_jenis_pustaka_', '=', 'id_jenis_pustaka')
                                                ->where('id_departemen', $id_departemen)
                                                ->get();
        $jum1= PustakaRuangBaca::where('id_departemen', $id_departemen)
                                ->sum('jumlah_judul');
        $jum2= PustakaRuangBaca::where('id_departemen', $id_departemen)
                                ->sum('jumlah_copy');
        $jp_seminar=DB::table('jurnal_prosiding_seminar')->whereBetween('rinci_tahun', [$dateS,$dateE])                                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                                                         ->join('jenis_jurnal_prosiding_seminar', 'id_j_p_seminar', '=', 'id_jenis_jp')
                                                         ->where('id_departemen', $id_departemen)
                                                         ->orderBy('jenis_jp_seminar', 'asc')
                                                         ->orderBy('rinci_tahun', 'asc')
                                                         ->get();
          // Standar 6
          $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $kompetensi_utama_lulusan = Kurikulum1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_kompetensi_utama_lulusan')
                        ->get(); 

        $kompetensi_pendukung_lulusan = Kurikulum2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_kompetensi_pendukung_lulusan')
                        ->get(); 

        $kompetensi_lainnya = Kurikulum3::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_kompetensi_lainnya')
                        ->get(); 

        $kur4 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);

         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);

         $jumlah_sks_pss = Kurikulum4::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();

        $kur5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $kurikulum5s = Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->join('semester', 'id_semester', '=', 'id_semesterr')
                         ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                          ->join('bobot_tugas', 'id_bobot_tugas', '=', 'id_bobottugas')
                          ->join('kelengkapan_deskripsi', 'id_kelengkapan_deskripsi', '=', 'id_kelengkapandeskripsi')
                          ->join('kelengkapan_silabus', 'id_kelengkapan_silabus', '=', 'id_kelengkapansilabus')
                          ->join('kelengkapan_sap', 'id_kelengkapan_sap', '=', 'id_kelengkapansap')
                        ->orderBy('semesterr')
                        ->get();

        $totalinti=Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_inti');

        $totalinstitusional=Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_institusional');

        $bobot_tugas = BobotTugas::get();

        $kelengkapan_deskripsi = kelengkapanDeskripsi::get();

        $perubahan_silabus = PerubahanSilabus::get();

        $perubahan_buku_ajar = PerubahanBukuAjar::get();

        $kelengkapan_silabus = KelengkapanSilabus::get();

        $kelengkapan_sap = KelengkapanSap::get();

        $kur6 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $kurikulum6s = Kurikulum6::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('semester', 'id_semester', '=', 'id_semesterr')
                         ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->join('bobot_tugas', 'id_bobot_tugas', '=', 'id_bobottugas')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('semesterr')
                        ->get();

        $kur7 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $kurikulum7s = Kurikulum7::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_praktikum_kurikulum7')
                        ->get();

        $mekanisme_peninjauan_kurikulum = Kurikulum8::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_mekanisme_peninjauan_kurikulum')
                        ->get(); 

        $kur9 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $kurikulum9s = Kurikulum9::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('perubahan_pada_silabus', 'id_perubahan_silabus', '=', 'id_perubahan_pada_silabus')
                        ->join('perubahan_pada_buku_ajar', 'id_perubahan_buku_ajar', '=', 'id_perubahan_pada_buku_ajar')
                        ->where('id_departemen', $id_departemen)
                    ->orderBy('nama_mk_kurikulum9')
                        ->get();

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
 
        $mekanisme=MekanismeMK::where('id_departemen', $id_departemen)->get();

        // Standar 7
        $pene = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $tgl_1 = Carbon::now()->startOfYear()->subYear(2);
        $tgl_2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $penelitians = Penelitian::whereBetween('tahun_penelitian', [$tgl_1,$tgl_2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_penelitian', 'desc')
                        ->get();

        $terlibat_penelitian = TerlibatPenelitian::get();
        $redaksipenelitian = RedaksiPenelitian::whereBetween('tahun', [$tgl_1,$tgl_2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('mahasiswa_terlibat', 'id_terlibatpenelitian', '=', 'redaksi_penelitian')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $mahasiswa_penelitian = Penelitian::whereBetween('tahun_penelitian', [$tgl_1,$tgl_2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_penelitian', 'desc')
                            ->get();
                        
        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        $SumberDana=SumberDana::get();
        //TS-2
        $totaljudul1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
                        
        $totaljudul2=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul3=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul4=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul5=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        //TS-1
        $totaljudul6=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
                        
        $totaljudul7=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul8=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul9=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul10=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        // TS
        $totaljudul11=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
        $totaljudul12=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul13=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul14=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul15=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        //TS-2
        $totaldana1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana2=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana3=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana4=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana5=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana');
        //TS-1
        $totaldana6=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana7=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana8=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana9=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana10=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana');
        // TS
        $totaldana11=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana12=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana13=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana14=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana15=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana'); 
         $totalM=Penelitian::whereBetween('tahun_penelitian', [$tgl_1,$tgl_2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_mahasiswa');

        // Standar 8
        $peng = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $pengabdians = Pengabdian::whereBetween('tahun_pengabdian', [$tgl_1,$tgl_2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_pengabdian', 'desc')
                        ->get();

        $SumberDana=SumberDana::get();
        //TS-2
        $totaljudul1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_pengabdian');
                      
        $totaljudul2=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_pengabdian');
                            
        $totaljudul3=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_pengabdian');
        $totaljudul4=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_pengabdian');
        $totaljudul5=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_pengabdian');
        //TS-1
        $totaljudul6=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_pengabdian');
                        
        $totaljudul7=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_pengabdian');
        $totaljudul8=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_pengabdian');
        $totaljudul9=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_pengabdian');
        $totaljudul10=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_pengabdian');
        // TS
        $totaljudul11=Pengabdian::whereBetween('tahun_pengabdian', [$dateX,$dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_pengabdian');

        $totaljudul12=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_pengabdian');
        $totaljudul13=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_pengabdian');
        $totaljudul14=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_pengabdian');
        $totaljudul15=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_pengabdian');
         //TS-2
        $totaldana1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana_peng');
        $totaldana2=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana_peng');
        $totaldana3=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana_peng');
        $totaldana4=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana_peng');
        $totaldana5=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana_peng');
        // TS-1
        $totaldana6=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana_peng');
        $totaldana7=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana_peng');
        $totaldana8=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana_peng');
        $totaldana9=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana_peng');
        $totaldana10=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana_peng'); 
         //TS
        $totaldana11=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana_peng');
        $totaldana12=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana_peng');
        $totaldana13=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana_peng');
        $totaldana14=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana_peng');
        $totaldana15=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana_peng');
        $terlibat_penelitian = TerlibatPenelitian::get();
        $redaksipengabdian = RedaksiPengabdian::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('mahasiswa_terlibat', 'id_terlibatpenelitian', '=', 'redaksi_pengabdian')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $mahasiswa_pengabdian = Pengabdian::join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->get();
        // Standar 9
        $hapen = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
         $hasil_pendidikan = HasilPendidikan::whereBetween('tahun_hasil', [$tgl_1,$tgl_2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('perolehanhaki', 'id_perolehanHaki', '=', 'id_haki')
                        ->join('jenis_hasilPendidikan', 'id_jenisHasil', '=', 'id_jenisHasilPendidikan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_hasil')
                        ->get();
        $haki=Haki::get();
        $na = HasilPendidikan::whereBetween('tahun_hasil', [$tgl_1,$tgl_2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_haki', 1)
                    ->count();
        $nb = HasilPendidikan::whereBetween('tahun_hasil', [$tgl_1,$tgl_2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_haki', 2)
                    ->count();
        $totaljudul=DB::table('hasil_pendidikan')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_hasilpendidikan');
        $totaljenis=DB::table('hasil_pendidikan')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_jenisHasilPendidikan');
         $hasil_penelitian = HasilPenelitian::whereBetween('tahun_publikasi',[$tgl_1,$tgl_2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                            ->where('id_departemen', $id_departemen)
                            ->get();
         $na1 = HasilPenelitian::whereBetween('tahun_publikasi', [$tgl_1,$tgl_2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 1)
                    ->count();
         $nb1 = HasilPenelitian::whereBetween('tahun_publikasi', [$tgl_1,$tgl_2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 2)
                    ->count();
         $nc = HasilPenelitian::whereBetween('tahun_publikasi', [$tgl_1,$tgl_2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 3)
                    ->count();
         $totaljudul1=DB::table('hasil_penelitian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->count('judul_hasilPenelitian');
         $tingkat=Tingkat::get();
        
        $pdf = PDF::loadView('Buku_3A/pdf_buku_3a', compact('dept', 'visim', 'vmts','tamongma', 'kerjasamaDalam','kerdal', 'kerjasamaLuar','jumlahs', 'redaksiJumlah','sistem_seleksi_dan_pengembangan', 'monitoring_dan_evaluasi','sdm3s', 'sdm4s','jabatansdm4','visim', 'jabatanakademik','sdm5s','sdmk5','totalsks1','totalsks2','totalsks3','totalsks4','totalsks5','totalsks6','totalsks7','totaljumlah','ratasks1','ratasks2','ratasks3','ratasks4','ratasks5','ratasks6','ratasks7','ratajumlah','sdmk6','sdm6s','totalrencana','totallaksana','sdmk7','sdm7s','totalrencana1','totallaksana1','sdm8s','sdmk9','sdm9s','totalrencana2','totallaksana2','sdm10s','sdmk10','sdm11s','sdmk11','sdm12s','sdmk12','haki','sdm13s','sdmk13','sdm14s','sdmk14','sdm15s','sdmk15','sdm16','pengelolaan','jumlah', 'sumber', 'jns', 'total', 'tahun_dua_lalu', 'tahun_satu_lalu', 'tahun_sekarang', 'total_ts2', 'rata_pend', 'rata_pen', 'rata_peng', 'rata_pras', 'rata_sar', 'rata_sdm', 'rata_lain','rata_semua', 'penelitians', 'totaldana', 'pengabdians', 'totaldana2', 'rk_dosen_tetap', 'jmlh_luas', 'jmlh_ruang', 'prasarana_ps', 'kondisi', 'milik', 'penunjang_ps', 'pustaka', 'jum1', 'jum2', 'jp_seminar', 'kompetensi_utama_lulusan','visim','kompetensi_pendukung_lulusan','kompetensi_lainnya','jumlah_sks_pss','kur4','kurikulum5s','kur5','totalinstitusional','totalinti','haki','hoki','hiki','huki','kurikulum6s','kur6','kurikulum7s','kur7','mekanisme_peninjauan_kurikulum','kur9','kurikulum9s', 'mekanisme','penelitians','pene', 'totaldana', 'SumberDana', 'ts', 'ts1', 'ts2', 'totaljudul1', 'totaljudul2', 'totaljudul3', 'totaljudul4', 'totaljudul5', 'dateZ', 'dateY', 'dateX', 'totaljudul6', 'totaljudul7', 'totaljudul8', 'totaljudul9', 'totaljudul10', 'totaljudul11', 'totaljudul12', 'totaljudul13', 'totaljudul14', 'totaljudul15', 'totaldana1', 'totaldana2', 'totaldana3', 'totaldana4', 'totaldana5', 'totaldana6', 'totaldana7', 'totaldana8', 'totaldana9', 'totaldana10', 'totaldana11', 'totaldana12', 'totaldana13', 'totaldana14', 'totaldana15', 'redaksipenelitian', 'terlibat_penelitian', 'mahasiswa_penelitian', 'totalM', 'pengabdians','peng', 'SumberDana', 'totaljudul1', 'totaljudul2', 'totaljudul3', 'totaljudul4', 'totaljudul5', 'dateZ', 'dateY', 'dateX', 'totaljudul6', 'totaljudul7', 'totaljudul8', 'totaljudul9', 'totaljudul10', 'totaljudul11', 'totaljudul12', 'totaljudul13', 'totaljudul14', 'totaljudul15', 'totaldana1', 'totaldana2', 'totaldana3', 'totaldana4', 'totaldana5', 'totaldana6', 'totaldana7', 'totaldana8', 'totaldana9', 'totaldana10', 'totaldana11', 'totaldana12', 'totaldana13', 'totaldana14', 'totaldana15','redaksipengabdian', 'terlibat_penelitian', 'mahasiswa_pengabdian', 'hasil_pendidikan','hapen', 'haki', 'na', 'nb', 'totaljudul', 'totaljenis', 'hasil_penelitian', 'na1', 'nb1', 'nc', 'totaljudul1', 'tingkat','lulusan', 'min0', 'min1','min2','min3','min4','avg0', 'avg1','avg2','avg3','avg4','max0', 'max1','max2','max3','max4','rata_min','rata_avg','rata_max','ts','ts1','ts2','ts3','ts4','ts5','rata_min_ts','mints','min11','min_ts2','min_ts3','min_ts4','tengahts','tengah_ts1','tengah_ts2','tengah_ts3','tengah_ts4','maxts','max_ts1','max_ts2','max_ts3','max_ts4','total_jml','total_jml_ts1','jum_ts2','jum_ts3','jum_ts4', 'redaksiLulusan', 'bobot_tugas', 'kelengkapan_deskripsi', 'perubahan_silabus', 'perubahan_buku_ajar','kelengkapan_silabus', 'kelengkapan_sap','sistem_seleksi_dan_pengembangan', 'monitoring_dan_evaluasi','sdm3s', 'sdm4s','visim', 'jabatanakademik','jabatansdm4','sdm5s','sdmk5','totalsks1','totalsks2','totalsks3','totalsks4','totalsks5','totalsks6','totalsks7','totaljumlah','ratasks1','ratasks2','ratasks3','ratasks4','ratasks5','ratasks6','ratasks7','ratajumlah','sdmk6','sdm6s','totalrencana','totallaksana','sdmk7','sdm7s','totalrencana1','totallaksana1','sdm8s','jabatansdm8','sdmk9','sdm9s','totalrencana2','totallaksana2','kegiatan_tenaga_ahlis','sdmk10','sdm11s','sdmk11','sdm12s','sdmk12','peran_kegiatan','sdm13s','sdmk13', 'tingkatan','sdm14s','sdmk14','sdm15s','sdmk15','upaya_meningkatkan_kompetensi_tendik'));
        $pdf ->setPaper('A4', 'potrait');
        $pdf->getDomPDF()->set_option("enable_php", true);
        
        return $pdf->stream('Buku 3A Borang Akreditasi.pdf');
    }

    public function index (Request $request)
    {
     
    }

    public function create()
    {
      
    }

    public function store (Request $request)
    {
      //
    }

    public function update (Request $request, $member)
    {
        //
    }

    public function destroy($id_hardware)
    {

    }

}
