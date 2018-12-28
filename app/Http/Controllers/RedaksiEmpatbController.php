<?php  
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\Sdm1;
use App\Sdm2; 
use App\Sdm3;
use App\JabatanAkademik;
use App\Lampiransdm3;
use App\Sdm4;
use App\Lampiransdm4;
use App\Sdm5;
use App\Sdm6;
use App\JumlahKelas;
use App\Sdm7;
use App\Sdm8;
use App\Lampiransdm8;
use App\Sdm9;
use App\Sdm10;
use App\Sdm11;
use App\Sdm12;
use App\PeranKegiatan;
use App\Sdm13;
use App\Tingkatan;
use App\Sdm14;
use App\Sdm15;
use App\Sdm16;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;
use Carbon\Carbon;

class RedaksiEmpatbController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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


    public function download_Redaksi_empatb(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
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

        $pdf = PDF::loadView('Redaksi_Empatb.Redaksi_standar_Empatb', compact('sistem_seleksi_dan_pengembangan', 'monitoring_dan_evaluasi','sdm3s', 'sdm4s','visim', 'jabatanakademik','jabatansdm4','sdm5s','sdmk5','totalsks1','totalsks2','totalsks3','totalsks4','totalsks5','totalsks6','totalsks7','totaljumlah','ratasks1','ratasks2','ratasks3','ratasks4','ratasks5','ratasks6','ratasks7','ratajumlah','sdmk6','sdm6s','totalrencana','totallaksana','sdmk7','sdm7s','totalrencana1','totallaksana1','sdm8s','jabatansdm8','sdmk9','sdm9s','totalrencana2','totallaksana2','kegiatan_tenaga_ahlis','sdmk10','sdm11s','sdmk11','sdm12s','sdmk12','peran_kegiatan','sdm13s','sdmk13', 'tingkatan','sdm14s','sdmk14','sdm15s','sdmk15','upaya_meningkatkan_kompetensi_tendik'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
    }  

   
}
