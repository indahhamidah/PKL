<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penelitian;
use App\SumberDana;
use App\Bukti;
use App\Proposal;
use App\User;
use App\RedaksiPenelitian;
use App\MahasiswaTerlibat;
use App\TerlibatPenelitian;
use App\RedaksiPenelitianFmipa;
use App\KerjasamaDalam;
use App\KerjasamaLuar;
use App\Pengabdian;
use App\BuktiPengabdian;
use App\ProposalPengabdian;
use App\RedaksiPengabdian;
use App\MahasiswaPengabdian;
use App\RedaksiPengabdianFmipa;
use App\HasilPendidikan;
use App\Haki;
use App\LampiranHasil;
use App\JenisHasil;
use App\HasilPenelitian;
use App\Tingkat;
use App\LampiranHasilPen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;
class LaporanAkreditasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function laporanDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $peng = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $date1 = Carbon::now()->startOfYear()->subYear(2);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $pengabdians = Pengabdian::whereBetween('tahun_pengabdian', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_pengabdian', 'desc')
                        ->get();
        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
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
        $mahasiswa_pengabdian = MahasiswaPengabdian::join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->get();
        $kerjasamaDalam = KerjasamaDalam::whereBetween('tahun_mulai', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_mulai', 'asc')
                        ->get();
        $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_mulai', [$date1,$date2])
                        ->orWhereBetween('tahun_akhir', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_mulai', 'asc')
                        ->get();
        $penelitians = Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_penelitian', 'desc')
                        ->get();

        $terlibat_penelitian = TerlibatPenelitian::get();
        $redaksipenelitian = RedaksiPenelitian::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('mahasiswa_terlibat', 'id_terlibatpenelitian', '=', 'redaksi_penelitian')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $mahasiswa_penelitian = Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
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
        $totaljudul1Pene=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
                        
        $totaljudul2Pene=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul3Pene=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul4Pene=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul5Pene=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        //TS-1
        $totaljudul6Pene=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
                        
        $totaljudul7Pene=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul8Pene=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul9Pene=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul10Pene=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        // TS
        $totaljudul11Pene=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
        $totaljudul12Pene=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul13Pene=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul14Pene=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul15Pene=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        //TS-2
        $totaldana1Pene=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana2Pene=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana3Pene=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana4Pene=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana5Pene=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana');
        //TS-1
        $totaldana6Pene=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana7Pene=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana8Pene=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana9Pene=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana10Pene=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana');
        // TS
        $totaldana11Pene=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana12Pene=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana13Pene=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana14Pene=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana15Pene=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana'); 
        $hasil_pendidikan = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->join('perolehanhaki', 'id_perolehanHaki', '=', 'id_haki')
                              ->join('jenis_hasilPendidikan', 'id_jenisHasil', '=', 'id_jenisHasilPendidikan')
                              ->get();
            $naHa = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_haki', 1)
                    ->count();
            $nbHa = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_haki', 2)
                    ->count();
            $totaljudulHa=DB::table('hasil_pendidikan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->count('judul_hasilpendidikan');
            $totaljenisHa=DB::table('hasil_pendidikan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jenis_hasilPendidikan', 'id_jenisHasil', '=', 'id_jenisHasilPendidikan')
                        ->count('id_jenisHasilPendidikan'); 
            $hasil_penelitian = HasilPenelitian::whereBetween('tahun_publikasi',[$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                            ->where('id_departemen', $id_departemen)
                            ->get();
            $na = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 1)
                    ->count();
            $nb = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 2)
                    ->count();
            $nc = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 3)
                    ->count();
            $totaljudul=DB::table('hasil_penelitian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->count('judul_hasilPenelitian');
            $tingkat = Tingkat::get();
        $pdf = PDF::loadView('laporanakreditasi.pdf', compact('pengabdians','peng', 'SumberDana', 'totaljudul1', 'totaljudul2', 'totaljudul3', 'totaljudul4', 'totaljudul5', 'dateZ', 'dateY', 'dateX', 'totaljudul6', 'totaljudul7', 'totaljudul8', 'totaljudul9', 'totaljudul10', 'totaljudul11', 'totaljudul12', 'totaljudul13', 'totaljudul14', 'totaljudul15', 'totaldana1', 'totaldana2', 'totaldana3', 'totaldana4', 'totaldana5', 'totaldana6', 'totaldana7', 'totaldana8', 'totaldana9', 'totaldana10', 'totaldana11', 'totaldana12', 'totaldana13', 'totaldana14', 'totaldana15','redaksipengabdian', 'terlibat_penelitian', 'mahasiswa_pengabdian', 'kerjasamaDalam', 'kerjasamaLuar', 'penelitians','pene', 'totaldana', 'SumberDana', 'ts', 'ts1', 'ts2', 'totaljudul1Pene', 'totaljudul2Pene', 'totaljudul3Pene', 'totaljudul4Pene', 'totaljudul5Pene', 'dateZ', 'dateY', 'dateX', 'totaljudul6Pene', 'totaljudul7Pene', 'totaljudul8Pene', 'totaljudul9Pene', 'totaljudul10Pene', 'totaljudul11Pene', 'totaljudul12Pene', 'totaljudul13Pene', 'totaljudul14Pene', 'totaljudul15Pene', 'totaldana1Pene', 'totaldana2Pene', 'totaldana3Pene', 'totaldana4Pene', 'totaldana5Pene', 'totaldana6Pene', 'totaldana7Pene', 'totaldana8Pene', 'totaldana9Pene', 'totaldana10Pene', 'totaldana11Pene', 'totaldana12Pene', 'totaldana13Pene', 'totaldana14Pene', 'totaldana15Pene', 'redaksipenelitian', 'terlibat_penelitian', 'mahasiswa_penelitian', 'hasil_pendidikan', 'naHa', 'nbHa', 'totaljudulHa', 'totaljenisHa', 'hasil_penelitian', 'na', 'nb', 'nc', 'totaljudul', 'totaljenis', 'tingkat'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
