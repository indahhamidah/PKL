<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\Vmts;
use App\Tamongma;
use App\KerjasamaDalam;
use App\KerjasamaLuar;
use App\RedaksiJumlah;
use App\Lulusan;
use App\RedaksiLulusan;
use App\Kegiatan;
use App\Sdmf2;
use App\Sdmf3;
use App\Sdmfmipa1;
use App\Sdmf5;
use App\Sdmfmipa2;
use App\Kurikulumfmipa;
use App\PeranFakultas; 
use App\Penelitian;
use App\SumberDana;
use App\Bukti;
use App\Proposal;
use App\RedaksiPenelitian;
use App\MahasiswaTerlibat;
use App\RedaksiPenelitianFmipa;
use App\Pengabdian;
use App\BuktiPengabdian;
use App\ProposalPengabdian;
use App\RedaksiPengabdian;
use App\MahasiswaPengabdian;
use App\TerlibatPenelitian;
use App\RedaksiPengabdianFmipa;
use App\HasilPendidikan;
use App\Haki;
use App\LampiranHasil;
use App\JenisHasil;
use App\HasilPenelitian;
use App\Tingkat;
use App\RencanaInvesSarana;
use App\PerangkatKeras;
use App\PenerimaanDana;
use App\SumberDanaTerima;
use App\JenisDana;
use App\DanaLainLain;
use App\PenggunaanDana;
use App\PendapatPimpinan;
use App\PenilaianSarana;
use App\SaranaTambahan;
use App\PenilaianPrasarana;
use App\PrasaranaTambahan;
use App\PenjelasanOrganoware;
use App\SistemInformasi;
use App\Komersial;
use App\AksesibilitasData;
use App\UpayaSebarInfo;
use App\Rencana_Pengembangan_SI;
use App\JenisDataAkses;
use App\SistemKelolaData;
use App\Netware;
use App\Hologram;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;
use Carbon\Carbon;

class BukuTigaBController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function download_pdf_3b (Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        // Standar 1
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
        $vmts = Vmts::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('visimisi')
                        ->get();
        // Standar 2
       $kerdal = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $tamongma = Tamongma::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('tamongjama','id_tamongjama', 'id_departemen')
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
        $jumlahs = DB::table('jumlahs')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $redaksiJumlah = RedaksiJumlah::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_jumlah', 'id_redaksiJum', 'id_departemen')
                        ->get();
        $tgl = Carbon::now()->startOfYear()->subYear(2)->subMonth(4);
        $tgl1 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $lulusans=Lulusan::whereBetween('tahun_lulus', [$tgl,$tgl1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                             ->select(DB::raw('avg(total_bulan) as total, avg(total_tahun) as totalthn, avg(ipk) as rataipk2, id_departemen, nama_departemen'))
                             ->groupBy('id_departemen')
                             ->groupBy('nama_departemen')
                             ->get();

        $rata_bln=Lulusan::whereBetween('tahun_lulus', [$tgl,$tgl1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('total_bulan');

        $rata_thn=Lulusan::whereBetween('tahun_lulus', [$tgl,$tgl1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('total_tahun');
        
        $rata_ipk=Lulusan::whereBetween('tahun_lulus', [$tgl,$tgl1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('ipk');

        $redaksiLulusan = RedaksiLulusan::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_lulusan', 'id_redaksiLus', 'id_departemen')
                        ->get();
        $tahun_ke1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $tahun_ke2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kegiatans = Kegiatan::whereBetween('tahun_kegiatan', [$tahun_ke1,$tahun_ke2])
                        ->orderBy('tahun_kegiatan', 'desc')
                        ->get();
        // Standar 4
        $sdmkf2 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdmf2s = Sdmf2::whereBetween('tahun_sdmf2', [$tahun_ke1,$tahun_ke2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf2', 'desc')
                        ->get();
        $sdmkf3 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
        $sdmf3s = Sdmf3::whereBetween('tahun_sdmf3', [$tahun_ke1,$tahun_ke2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf3', 'desc')
                        ->get();
       $pandangan_fmipa_tentang_dosen_tetap = Sdmfmipa1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_pandangan_fmipa_tentang_dosen_tetap')
                        ->get(); 
        $sdmkf5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
        $sdmf5s = Sdmf5::whereBetween('tahun_sdmf5', [$tahun_ke1,$tahun_ke2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf5', 'desc')
                        ->get();
          $pandangan_fmipa_tentang_tendik = Sdmfmipa2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_pandangan_fmipa_tentang_tendik')
                        ->get(); 
        // Standar 5
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

              $tahun3=PenerimaanDana::whereBetween('tahun_terima_dana', [$thn, $thn_ ])
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
        $total_ts2=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE1])
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                ->select(DB::raw('sum(pendidikan) as jum_pend3, sum(penelitian) as jum_pen3, sum(pengabdian) as jum_peng3, sum(inves_pras) as jum_pras3, sum(inves_sar) as jum_sar3, sum(inves_sdm) as jum_sdm3, sum(lain_lain) as jum_lain3, sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total,sum(pendidikan)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pend, sum(penelitian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pen, sum(pengabdian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_peng,sum(inves_pras)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pras,sum(inves_sar)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sar,sum(inves_sdm)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sdm, sum(lain_lain)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_lain,tahun_penggunaan'))
                                ->groupBy('tahun_penggunaan')
                                ->get();
        // dd($total_ts2);
// penggunaan dana per ps
        $bulan=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE1])
                              ->select(DB::raw('MONTH(created_at) month'))
                              ->orderBy('month', 'desc')
                              ->first();
                              // dd($bulan);
        $totaal = array_fill(0,3,0);
        $pakai_ps=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE1])
                                ->select(DB::raw('sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total, id_departemen'))
                                ->groupBy('id_departemen')
                                ->get();
        foreach ($pakai_ps as $key1 => $pake) {
            $pakai[$key1]=$pake->departemen->nama_departemen;
            $jumlahh[$key1]=array_fill($tahun_dua_lalu, 3, 0);
            $tahun1=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateS1])
                                ->where('id_departemen', $pake->id_departemen)
                                ->select(DB::raw('sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total_semua'))
                                ->get();
                                // dd($pakai[$key1]);
            if(isset($tahun1)){
                foreach ($tahun1 as $key2 => $thn1) {
                  if ($key2 == 0) {
                    $jumlahh[$key1][$tahun_dua_lalu] = $thn1->total_semua;
                  }else{
                    $jumlahh[$key1][$tahun_dua_lalu] += $thn1->total_semua;
                  }
                  $totaal[0] += $thn1->total_semua;
                }
              }
// dd($tahun1);
            $tahun2=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS11, $dateS2])
                                ->where('id_departemen', $pake->id_departemen)
                                ->select(DB::raw('sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total_semua'))
                                ->get();
            if(isset($tahun2)){
                foreach ($tahun2 as $key3 => $thn2) {
                  if ($key3 == 0) {
                    $jumlahh[$key1][$tahun_satu_lalu] = $thn2->total_semua;
                  }else{
                    $jumlahh[$key1][$tahun_satu_lalu] += $thn2->total_semua;
                  }
                  $totaal[1] += $thn2->total_semua;
                }
              }
// dd($totaal[0]);
            $tahun3=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateE, $dateE1])
                                ->where('id_departemen', $pake->id_departemen)
                                ->select(DB::raw('sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total_semua'))
                                ->get();
            if(isset($tahun3)){
                foreach ($tahun3 as $key4 => $thn3) {
                  if ($key4 == 0) {
                    $jumlahh[$key1][$tahun_sekarang] = $thn3->total_semua;
                  }else{
                    $jumlahh[$key1][$tahun_sekarang] += $thn3->total_semua;
                  }
                  $totaal[2] += $thn3->total_semua;
                }
              }
        }

// pendapat pimpinan fmipa
        $pendapat_pimpinan=PendapatPimpinan::join('departemen', 'id_dept', '=', 'id_departemen')
                                                    ->where('id_departemen', $id_departemen)
                                                    ->get();
// penilaian sarana fmipa
        $penilaian_fmipa=PenilaianSarana::where('id_departemen', $id_departemen)->get();

// sarana tambahan
        $thn1 = Carbon::now()->startOfYear()->subYear(2);
        $thn33 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);

        $tahun_lima = Carbon::now()->format('Y');
        $tahun_kurang = Carbon::now()->startOfYear()->addYear(5)->subDays(1);
// dd($tahun_kurang);
        $rencana_tamb=RencanaInvesSarana::whereBetween('akhir', [$tahun_lima, $tahun_kurang])
                                          ->where('id_departemen', $id_departemen)
                                          ->select(DB::raw('sum(rencana_investasi) as jum_inves_rencana, jenis_sarana_tamb, sumber_dana, jumlah, satuan'))
                                          ->groupBy('jenis_sarana_tamb')
                                          ->groupBy('sumber_dana')
                                          ->groupBy('jumlah')
                                          ->groupBy('satuan')
                                          ->orderBy('created_at', 'asc')
                                          ->get();
        $total_rencana=0;
        foreach ($rencana_tamb as $key1 => $sar_rencana) {
            $sarana_tamb_ren=RencanaInvesSarana::where('jenis_sarana_tamb', $sar_rencana->jenis_sarana_tamb)
                                            ->where('sumber_dana', $sar_rencana->sumber_dana)
                                            ->where('jumlah', $sar_rencana->jumlah)
                                            ->where('satuan', $sar_rencana->satuan)
                                            ->orderBy('created_at', 'desc')
                                            ->first();
            $rencana_inves_akhir[$key1]=$sarana_tamb_ren->rencana_investasi; 
            $total_rencana+=$sarana_tamb_ren->rencana_investasi;
        }


        $tahun=date("Y");
        $tahun2=$tahun-2;      
        
        $sar_tamb=SaranaTambahan::whereBetween('tanggal_inves', [$thn1, $thn33])
                                ->where('id_departemen', $id_departemen)
                                ->select(DB::raw('sum(investasi) as jum_inves, jenis_sarana_tambahan, sumber_dana, jumlah, satuan'))
                                ->groupBy('jenis_sarana_tambahan')
                                ->groupBy('sumber_dana')
                                ->groupBy('jumlah')
                                ->groupBy('satuan')
                                ->orderBy('created_at', 'asc')
                                ->get();
        $total_inves=0;
        foreach ($sar_tamb as $key => $sar) {
            $sarana_tamb=SaranaTambahan::where('jenis_sarana_tambahan', $sar->jenis_sarana_tambahan)
                                       ->where('sumber_dana', $sar->sumber_dana)
                                       ->where('jumlah', $sar->jumlah)
                                       ->where('satuan', $sar->satuan)
                                       ->orderBy('created_at', 'desc')
                                       ->first();
            $total_inves+=$sarana_tamb->investasi;
        }
        $penilaian_fmipa=PenilaianSarana::where('id_departemen', $id_departemen)->get();
        // penilaian prasarana
        $penilaian_pras_fmipa=PenilaianPrasarana::get();
        // prasarana
        $pras_tambh=PrasaranaTambahan::whereBetween('tanggal_inves', [$dateS, $dateE1])
                                          ->where('id_departemen', $id_departemen)
                                          ->select(DB::raw('sum(investasi_prasarana) as jum_inves, jenis_prasarana_tambahan, sumber_dana'))
                                          ->groupBy('jenis_prasarana_tambahan')
                                          ->groupBy('sumber_dana')
                                          ->orderBy('created_at', 'asc')
                                          ->get();
        $total_rencana_pras=0;
        foreach ($pras_tambh as $key => $pras) {
            $prasarana_tambh=PrasaranaTambahan::where('jenis_prasarana_tambahan', $pras->jenis_prasarana_tambahan)
                                            ->where('sumber_dana', $pras->sumber_dana)
                                            ->orderBy('created_at', 'desc')
                                            ->first();
            $rencana_inves_terakhir_pras[$key]=$prasarana_tambh->rencana_investasi; 
            $total_rencana_pras+=$prasarana_tambh->rencana_investasi;
        }
        $total_inves_pras=PrasaranaTambahan::whereBetween('tanggal_inves', [$dateS, $dateE1])
                                          ->where('id_departemen', $id_departemen)
                                          ->sum('investasi_prasarana');
        // organoware
        $penjelasan=PenjelasanOrganoware::join('departemen', 'id_dept', '=', 'id_departemen')
                                        ->where('id_departemen', $id_departemen)
                                        ->get();
        $netware=Netware::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('id_netware', 'desc')
                        ->first();
        $hologramm=Hologram::join('departemen', 'id_dept', '=', 'id_departemen')
                           ->where('id_departemen', $id_departemen)
                           ->orderBy('id_hologram', 'desc')
                           ->first();
        // hardware
        $perangkat_keras = PerangkatKeras::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->where('id_departemen', $id_departemen)
                                            ->get();

        $perangkat_keras1 = PerangkatKeras::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->where('id_departemen', 6)
                                            ->OrderBy('nama_hardware','asc')
                                            ->get();
        // sistem informasi
        $sisteminformasii = SistemInformasi::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->join('kategori_sistem_informasi', 'id_kategori', '=', 'role_kategori')
                                            ->where('id_departemen', $id_departemen)
                                            ->get();
        $tampilan = SistemInformasi::join('departemen', 'id_dept', '=', 'id_departemen')
                                   ->where('id_departemen', $id_departemen)
                                   ->take(10)->get();

        $pl_komersial = Komersial::where('id_departemen', $id_departemen)
                                ->get();
        // akses data
        $akses_data = AksesibilitasData::join('departemen', 'id_dept', '=', 'id_departemen')
                                       ->join('jenis_akses_data', 'id_jenis_akses', '=', 'id_jenis_akses_data')
                                       ->join('sistem_kelola_data', 'id_sistem_kelola_datax', '=', 'id_sistem_kelola')
                                       ->where('id_departemen', $id_departemen)
                                       ->orderBy('id_akses_data', 'asc')
                                       ->get();
        $jenis_data=JenisDataAkses::get();
        $sistem_data=SistemKelolaData::get();
        $nilai1=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 1)
                                   ->count();
        $nilai2=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 2)
                                   ->count();
        $nilai3=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 3)
                                   ->count();
        $nilai4=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 4)
                                   ->count();
        $upaya_sebar=UpayaSebarInfo::join('departemen', 'id_dept', '=', 'id_departemen')
                                   ->where('id_departemen', $id_departemen)
                                   ->get();
        $rencana_pengembangan=Rencana_Pengembangan_SI::join('departemen', 'id_dept', '=', 'id_departemen')
                                   ->where('id_departemen', $id_departemen)
                                   ->get();
        // Standar 6
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
       $peran_fmipa_tentang_kurikulum = Kurikulumfmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_peran_fmipa_tentang_kurikulum')
                        ->get(); 
        $peran=PeranFakultas::join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->get();
        // Standar 7
        $penelitians   = DB::table('penelitians')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $totjul=Penelitian::whereBetween('tahun_penelitian', [$tahun_ke1,$tahun_ke2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_penelitian');
        $redaksiPenelitianFmipa = RedaksiPenelitianFmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_penelitian_fmipa', 'id_redaksiPen', 'id_departemen')
                        ->get();
        $ts = date("Y");
        $ts = (int) $ts;
        $ts1 = $ts-1;
        $ts2 = $ts-2;
        // Standar 8
        $pengabdians   = DB::table('pengabdians')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        //TS-2
        $totjul=Pengabdian::whereBetween('tahun_pengabdian', [$tahun_ke1,$tahun_ke2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_pengabdian');
        $redaksiPengabdianFmipa = RedaksiPengabdianFmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_pengabdian_fmipa', 'id_redaksiPeng', 'id_departemen')
                        ->get();
        // Standar 9
        $hasil_pendidikan = DB::table('hasil_pendidikan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        //TS-2
        $tothal=HasilPendidikan::whereBetween('tahun_hasil', [$tahun_ke1,$tahun_ke2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_jenisHasilPendidikan');
        $hasil_penelitian = HasilPenelitian::whereBetween('tahun_publikasi', [$tahun_ke1,$tahun_ke2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_publikasi')
                        ->get();

        $pdf = PDF::loadView('Buku_3B/pdf_buku_3b', compact('dept', 'vmts', 'visim','tamongma', 'kerjasamaDalam','kerdal', 'kerjasamaLuar','sdmf2s','sdmkf2','sdmf3s','sdmkf3','pandangan_fmipa_tentang_dosen_tetap','sdmf5s','sdmkf5','pandangan_fmipa_tentang_tendik','jumlah', 'sumber', 'jns', 'total', 'tahun_dua_lalu', 'tahun_satu_lalu', 'tahun_sekarang', 'total_ts2', 'jumlahh','pakai', 'totaal', 'pendapat_pimpinan', 'penilaian_fmipa', 'sar_tamb', 'total_rencana', 'total_inves', 'rencana_inves_akhir', 'rencana_tamb','tahun', 'tahun2', 'rencana_inves_terakhir', 'penilaian_pras_fmipa', 'pras_tambh', 'total_rencana_pras', 'total_inves_pras', 'rencana_inves_terakhir_pras', 'penjelasan', 'perangkat_keras1', 'perangkat_keras', 'sisteminformasii', 'pl_komersial', 'akses_data', 'jenis_data', 'sistem_data', 'nilai1', 'nilai2', 'nilai3', 'nilai4', 'netware', 'hologramm','peran_fmipa_tentang_kurikulum','visim', 'peran','penelitians', 'totjul', 'ts2', 'ts1', 'ts', 'redaksiPenelitianFmipa','pengabdians', 'totjul', 'ts2', 'ts1', 'ts', 'redaksipengabdian', 'redaksiPengabdianFmipa','hasil_pendidikan', 'tothal', 'ts2', 'ts1', 'ts', 'hasil_penelitian','redaksiJumlah','lulusans','rata_bln','rata_thn','rata_ipk', 'redaksiLulusan','kegiatans', 'tampilan', 'upaya_sebar', 'rencana_pengembangan'));
        $pdf ->setPaper('A4', 'potrait');
        $pdf->getDomPDF()->set_option("enable_php", true);
        
        return $pdf->stream('Buku 3B Borang Akreditasi.pdf');
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
