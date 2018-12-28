<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\Kurikulum1;
use App\Kurikulum2;
use App\Kurikulum3;
use App\Kurikulum4;
use App\Semester;
use App\BobotSks;
use App\Kurikulum5;
use App\BobotTugas;
use App\kelengkapanDeskripsi;
use App\PerubahanSilabus;
use App\PerubahanBukuAjar;
use App\KelengkapanSilabus;
use App\KelengkapanSap;
use App\Kurikulum6;
use App\Kurikulum7;
use App\Kurikulum8;
use App\Kurikulum9;
use App\MekanismeMK;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;
use Carbon\Carbon;

class RedaksiEnambController extends Controller
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


    public function download_Redaksi_enamb(Request $request)
    {
       $id_departemen = Auth::user()->id_departemen;
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

        $pdf = PDF::loadView('Redaksi_Enamb.Redaksi_Standar_Enamb', compact('kompetensi_utama_lulusan','visim','kompetensi_pendukung_lulusan','kompetensi_lainnya','jumlah_sks_pss','kur4','kurikulum5s','kur5','totalinstitusional','totalinti','bobot_tugas','kelengkapan_deskripsi','perubahan_silabus','perubahan_buku_ajar','kelengkapan_silabus','kelengkapan_sap','kurikulum6s','kur6','kurikulum7s','kur7','mekanisme_peninjauan_kurikulum','kur9','kurikulum9s', 'mekanisme'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream(); 
    }  

   
}
