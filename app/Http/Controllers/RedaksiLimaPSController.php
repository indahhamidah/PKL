<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;
use Carbon\Carbon;

class RedaksiLimaPSController extends Controller
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


    public function download_Redaksi_lima_PS(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

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
        $pdf = PDF::loadView('Redaksi_Lima/Redaksi_Standar_Lima_PS', compact('dept', 'pengelolaan','jumlah', 'sumber', 'jns', 'total', 'tahun_dua_lalu', 'tahun_satu_lalu', 'tahun_sekarang', 'total_ts2', 'rata_pend', 'rata_pen', 'rata_peng', 'rata_pras', 'rata_sar', 'rata_sdm', 'rata_lain','rata_semua', 'penelitians', 'totaldana', 'pengabdians', 'totaldana2', 'rk_dosen_tetap', 'jmlh_luas', 'jmlh_ruang', 'prasarana_ps', 'kondisi', 'milik', 'penunjang_ps', 'pustaka', 'jum1', 'jum2', 'jp_seminar'));
        $pdf ->setPaper('a4', 'potrait');
        
        return $pdf->stream('Redaksi Standar 5 '.$dept[0]->nama_departemen.'.pdf');
        
    }  
   
}
