<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PenggunaanDana;
use App\JenisPenggunaanDana;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Departemen;
use App\User;
use App\PenggunaanDanaPenelitian;
use App\PenggunaanDanaPengabdian;
use App\Penelitian;
use App\SumberDana;
use App\Pengabdian;
use Excel;
use PDF;
use Carbon\Carbon;

class PenggunaanDanaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $dateS = Carbon::now()->startOfYear()->subYear(2);
        $dateS1 = Carbon::now()->startOfYear()->subYear(1)->subDays(1);
        $dateS11 = Carbon::now()->startOfYear()->subYear(1);
        $dateS2 = Carbon::now()->startOfYear()->subDays(1);
        $dateE = Carbon::now()->startOfYear();
        $dateE1 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $date5=Carbon::now()->startOfYear()->addYear(3)->subDays(1);
        // dd($date5);
        // dd($dateE1);
        $tahun=date("Y");
        $tahun=(int)$tahun;
        $tahun2=$tahun-2;
        if(Auth::user()->id_departemen==10)
        {
            $penggunaan_dana=PenggunaanDana::join('departemen', 'id_dept', '=', 'id_departemen')
                                        ->whereBetween('tahun_penggunaan', [$dateS, $date5])
                                        ->orderBy('tahun_penggunaan', 'desc')
                                        ->get();
        // tampil report
        $total_ts2=DB::table('penggunaan_dana')->whereBetween('tahun_penggunaan', [$dateS, $dateE1])
                                ->select(DB::raw('sum(pendidikan) as jum_pend3, sum(penelitian) as jum_pen3, sum(pengabdian) as jum_peng3, sum(inves_pras) as jum_pras3, sum(inves_sar) as jum_sar3, sum(inves_sdm) as jum_sdm3, sum(lain_lain) as jum_lain3, sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total,sum(pendidikan)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pend, sum(penelitian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pen, sum(pengabdian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_peng,sum(inves_pras)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pras,sum(inves_sar)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sar,sum(inves_sdm)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sdm, sum(lain_lain)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_lain,tahun_penggunaan'))
                                ->groupBy('tahun_penggunaan')
                                ->get();
        $total_ps=DB::table('penggunaan_dana')->whereBetween('tahun_penggunaan', [$dateS, $dateE1])
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                ->select(DB::raw('sum(pendidikan) as jum_pend3, sum(penelitian) as jum_pen3, sum(pengabdian) as jum_peng3, sum(inves_pras) as jum_pras3, sum(inves_sar) as jum_sar3, sum(inves_sdm) as jum_sdm3, sum(lain_lain) as jum_lain3, sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total, tahun_penggunaan, id_departemen, nama_departemen'))
                                ->groupBy('tahun_penggunaan')
                                ->groupBy('id_departemen')
                                ->groupBy('nama_departemen')
                                ->orderBy('id_departemen')
                                ->get();
                                // dd($total_ps);
        }else{
            $penggunaan_dana=PenggunaanDana::join('departemen', 'id_dept', '=', 'id_departemen')
                                        ->whereBetween('tahun_penggunaan', [$dateS, $date5])
                                        ->where('id_departemen', $id_departemen)
                                        ->orderBy('tahun_penggunaan', 'desc')
                                        ->get();
        $total_ts2=DB::table('penggunaan_dana')->whereBetween('tahun_penggunaan', [$dateS, $dateE1])
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                ->select(DB::raw('sum(pendidikan) as jum_pend3, sum(penelitian) as jum_pen3, sum(pengabdian) as jum_peng3, sum(inves_pras) as jum_pras3, sum(inves_sar) as jum_sar3, sum(inves_sdm) as jum_sdm3, sum(lain_lain) as jum_lain3, sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total,sum(pendidikan)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pend, sum(penelitian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pen, sum(pengabdian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_peng,sum(inves_pras)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pras,sum(inves_sar)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sar,sum(inves_sdm)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sdm, sum(lain_lain)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_lain,tahun_penggunaan'))
                                ->groupBy('tahun_penggunaan')
                                ->where('id_departemen', $id_departemen)
                                ->get();


                                // dd($total_ts2);
        $total_ps=DB::table('penggunaan_dana')->whereBetween('tahun_penggunaan', [$dateS, $dateE1])
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                ->select(DB::raw('sum(pendidikan) as jum_pend3, sum(penelitian) as jum_pen3, sum(pengabdian) as jum_peng3, sum(inves_pras) as jum_pras3, sum(inves_sar) as jum_sar3, sum(inves_sdm) as jum_sdm3, sum(lain_lain) as jum_lain3, sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total, tahun_penggunaan, id_departemen, nama_departemen'))
                                ->groupBy('tahun_penggunaan')
                                ->groupBy('id_departemen')
                                ->groupBy('nama_departemen')
                                ->orderBy('id_departemen')
                                ->get();
        }
                                // dd($total_ps);
        $tahun_sekarang = date("Y");
        $tahun_sekarang = (int)$tahun_sekarang;
        $tahun_dua_lalu = $tahun_sekarang - 2;
        $tahun_satu_lalu = $tahun_sekarang - 1;
        $totaal = array_fill(0,3,0);
        $pakai_ps=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE1])
                                ->select(DB::raw('sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total, id_departemen'))
                                ->groupBy('id_departemen')
                                ->get();
        foreach ($pakai_ps as $key1 => $pake) {
            $pakai[$key1]=$pake->departemen->nama_departemen;
            $jumlah[$key1]=array_fill($tahun_dua_lalu, 3, 0);
            $tahun1=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateS1])
                                ->where('id_departemen', $pake->id_departemen)
                                ->select(DB::raw('sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total_semua'))
                                ->get();
                                // dd($pakai[$key1]);
            if(isset($tahun1)){
                foreach ($tahun1 as $key2 => $thn1) {
                  if ($key2 == 0) {
                    $jumlah[$key1][$tahun_dua_lalu] = $thn1->total_semua;
                  }else{
                    $jumlah[$key1][$tahun_dua_lalu] += $thn1->total_semua;
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
                    $jumlah[$key1][$tahun_satu_lalu] = $thn2->total_semua;
                  }else{
                    $jumlah[$key1][$tahun_satu_lalu] += $thn2->total_semua;
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
                    $jumlah[$key1][$tahun_sekarang] = $thn3->total_semua;
                  }else{
                    $jumlah[$key1][$tahun_sekarang] += $thn3->total_semua;
                  }
                  $totaal[2] += $thn3->total_semua;
                }
              }
        }
        $jenis_penggunaan=JenisPenggunaanDana::get();
        $dana_penelitian=PenggunaanDanaPenelitian::whereBetween('tahun_dana_penelitian', [$dateS, $dateE1])
                                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                                        ->where('id_departemen', $id_departemen)
                                        ->get();
        $dana_pengabdian=PenggunaanDanaPengabdian::whereBetween('tahun_pgb_dana', [$dateS, $dateE1])
                                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->where('id_departemen', $id_departemen)
                                                ->get();

        // dana penelitian standar 7
        $tahun_akhir=Penelitian::where('id_departemen', $id_departemen)
                                 ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->select('tahun_penelitian')
                            ->groupBy('tahun_penelitian')
                            ->orderBy('tahun_penelitian', 'desc')
                            ->first();
                            // dd($tahun_akhir);
        // $tiga_akhir= 
        $penelitians = Penelitian::whereBetween('tahun_penelitian', [$dateS,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_penelitian', 'desc')
                            ->get(); 
        // dd($penelitians);
        $jumlah_uang_penelitian=Penelitian::whereBetween('tahun_penelitian', [$dateS, $dateE1])
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                ->select(DB::raw('sum(jumlah_dana) as uang_penelitian'), DB::raw('YEAR(tahun_penelitian) year'))
                                ->where('id_departemen', $id_departemen)
                                ->groupBy('year')
                                ->orderBy('year', 'desc')
                                ->get();
        $total_uang_penelitian=Penelitian::whereBetween('tahun_penelitian', [$dateS, $dateE1])
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                ->where('id_departemen', $id_departemen)
                                ->sum('jumlah_dana');
                                // dd($total_uang_penelitian);
        $totaldana=Penelitian::whereBetween('tahun_penelitian', [$dateS,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_dana');
        $totaljudul=Penelitian::whereBetween('tahun_penelitian', [$dateS,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_penelitian');
        // pengabdian standar 8
        $pengabdians = Pengabdian::whereBetween('tahun_pengabdian', [$dateS,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_pengabdian', 'desc')
                            ->get();
        $jumlah_uang_pengabdian= Pengabdian::whereBetween('tahun_pengabdian', [$dateS,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->select(DB::raw('sum(jumlah_dana_peng) as dana_peng'), DB::raw('YEAR(tahun_pengabdian) tahun'))
                            ->groupBy('tahun')
                            ->orderBy('tahun', 'desc')
                            ->get();
        $total_uang_pengabdian= Pengabdian::whereBetween('tahun_pengabdian', [$dateS,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_dana_peng');
        return view('PenggunaanDana/penggunaan_dana_v',compact('penggunaan_dana', 'dept', 'dana_penelitian', 'total_ps', 'dana_pengabdian', 'jenis_penggunaan','total_ts2', 'tahun_sekarang', 'tahun_dua_lalu', 'tahun_satu_lalu', 'jumlah', 'pakai_ps', 'totaal', 'pakai', 'dateS2', 'penelitians', 'totaldana', 'totaljudul', 'pengabdians', 'jumlah_uang_penelitian', 'total_uang_penelitian', 'jumlah_uang_pengabdian', 'total_uang_pengabdian'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
    //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'tahun_penggunaan' => 'required',
            'pendidikan' => 'required',
            'penelitian' => 'required',
            'pengabdian' => 'required',
            'inves_pras' => 'required',
            'inves_sar' => 'required',
            'inves_sdm' => 'required',
            'lain_lain' => 'required',

        ]);
      	$id_departemen = $request->user()->id_departemen;
                $penggunaan_dana = PenggunaanDana::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('tahun_penggunaan', $request->tahun_penggunaan)
                        ->first();

        if($penggunaan_dana==null){       
        $penggunaan_dana=new PenggunaanDana;
        $penggunaan_dana->pendidikan = $request->pendidikan;
        $penggunaan_dana->penelitian = $request->penelitian;
        $penggunaan_dana->pengabdian = $request->pengabdian;
        $penggunaan_dana->inves_pras = $request->inves_pras;
        $penggunaan_dana->inves_sar = $request->inves_sar;
        $penggunaan_dana->inves_sdm = $request->inves_sdm;
        $penggunaan_dana->lain_lain = $request->lain_lain;
        $penggunaan_dana->tahun_penggunaan = $request->tahun_penggunaan;
        $penggunaan_dana->id_departemen= $request->user()->id_departemen;
         
        $penggunaan_dana->save();
        $notification = array(
                'message' => 'Data Penggunaan Dana Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('PenggunaanDana.store')
                        ->with($notification);
        }else{
         $notification = array(
                'message' => 'Tahun tidak boleh ada yang sama!',
                'alert-type' => 'warning'
            );
          return redirect()->route('PenggunaanDana.index')
                        ->with($notification); 
        } 
    }

    public function store_dana_penelitian(Request $request)
    {
        // dd($request);
        //validate
        request()->validate([
            'tahun_dana_penelitian'=>'required',
            'judul_penelitian' => 'required',
            'nama_dosen_terlibat_' => 'required',
            'sumber_dana_'=>'required',
            'jenis_dana' => 'required',
            'jumlah_dana' => 'required',

        ]);
      
        $dana_penelitian=new PenggunaanDanaPenelitian;
        $dana_penelitian ->nama_dosen_terlibat_ = $request->nama_dosen_terlibat_;
        $dana_penelitian ->judul_penelitian = $request->judul_penelitian;
        $dana_penelitian ->sumber_dana_ = $request->sumber_dana_;
        $dana_penelitian ->jenis_dana = $request->jenis_dana;
        $dana_penelitian ->jumlah_dana = $request->jumlah_dana;
        $dana_penelitian->tahun_dana_penelitian = date("Y-m-d", strtotime(str_replace('-', '/', $request['tahun_dana_penelitian'])));
        $dana_penelitian->id_departemen= $request->user()->id_departemen;
         
        $dana_penelitian->save();
        
        return redirect()->route('PenggunaanDana.index');
    }

    public function update_dana_penelitian(Request $request, $member)
    { 
        $dana_penelitian=PenggunaanDanaPenelitian::find($member);
        $dana_penelitian ->nama_dosen_terlibat_ = $request->nama_dosen_terlibat_;
        $dana_penelitian ->judul_penelitian = $request->judul_penelitian;
        $dana_penelitian ->sumber_dana_ = $request->sumber_dana_;
        $dana_penelitian ->jenis_dana = $request->jenis_dana;
        $dana_penelitian ->jumlah_dana = $request->jumlah_dana;
        $dana_penelitian->tahun_dana_penelitian = date("Y-m-d", strtotime(str_replace('-', '/', $request['tahun_dana_penelitian'])));
        $dana_penelitian->id_departemen= $request->user()->id_departemen;
         
        $dana_penelitian->save();
        return redirect()->route('PenggunaanDana.index');
    }

    public function store_dana_pengabdian(Request $request)
    {
        request()->validate([
            'tahun_pgb_dana'=>'required',
            'judul_kegiatan' => 'required',
            'dosen_terlibat' => 'required',
            'sumber_dana'=>'required',
            'jenis_danaa' => 'required',
            'jumlah_dana' => 'required',

        ]);
      
        $dana_pengabdian=new PenggunaanDanaPengabdian;
        $dana_pengabdian ->dosen_terlibat = $request->dosen_terlibat;
        $dana_pengabdian ->judul_kegiatan = $request->judul_kegiatan;
        $dana_pengabdian ->sumber_dana = $request->sumber_dana;
        $dana_pengabdian ->jenis_danaa = $request->jenis_danaa;
        $dana_pengabdian ->jumlah_dana = $request->jumlah_dana;
        $dana_pengabdian ->tahun_pgb_dana = date("Y-m-d", strtotime(str_replace('-', '/', $request['tahun_pgb_dana'])));
        $dana_pengabdian->id_departemen= $request->user()->id_departemen;
         
        $dana_pengabdian->save();
        return redirect()->route('PenggunaanDana.index');
    }

    public function update_dana_pengabdian(Request $request, $member)
    {
        $dana_pengabdian=PenggunaanDanaPengabdian::find($member);
        $dana_pengabdian ->dosen_terlibat = $request->dosen_terlibat;
        $dana_pengabdian ->judul_kegiatan = $request->judul_kegiatan;
        $dana_pengabdian ->sumber_dana = $request->sumber_dana;
        $dana_pengabdian ->jenis_danaa = $request->jenis_danaa;
        $dana_pengabdian ->jumlah_dana = $request->jumlah_dana;
        $dana_pengabdian ->tahun_pgb_dana = date("Y-m-d", strtotime(str_replace('-', '/', $request['tahun_pgb_dana'])));
        $dana_pengabdian->id_departemen= $request->user()->id_departemen;
         
        $dana_pengabdian->save();
        return redirect()->route('PenggunaanDana.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $member)
    {
        request()->validate([
            'tahun_penggunaan' => 'required',
            'pendidikan' => 'required',
            'penelitian' => 'required',
            'pengabdian' => 'required',
            'inves_pras' => 'required',
            'inves_sar' => 'required',
            'inves_sdm' => 'required',
            'lain_lain' => 'required',

        ]);
      
        $penggunaan_dana=PenggunaanDana::find($member);
        $penggunaan_dana->pendidikan = $request->pendidikan;
        $penggunaan_dana->penelitian = $request->penelitian;
        $penggunaan_dana->pengabdian = $request->pengabdian;
        $penggunaan_dana->inves_pras = $request->inves_pras;
        $penggunaan_dana->inves_sar = $request->inves_sar;
        $penggunaan_dana->inves_sdm = $request->inves_sdm;
        $penggunaan_dana->lain_lain = $request->lain_lain;
        $penggunaan_dana->tahun_penggunaan = $request->tahun_penggunaan;
        $penggunaan_dana->id_departemen= $request->user()->id_departemen;
         
        $penggunaan_dana->save();
        $notification = array(
                'message' => 'Data Penggunaan Dana Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('PenggunaanDana.index')
                        ->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_penggunaan_dana)
    {
        PenggunaanDana::destroy($id_penggunaan_dana);
        $notification = array(
                'message' => 'Data Penggunaan Dana Berhasil Dihapus!',
                'alert-type' => 'warning'
            );
        return redirect()->route('PenggunaanDana.index')
                        ->with($notification);
    }
    public function destroy2($id_dana_penelitian)
    {
        PenggunaanDanaPenelitian::destroy($id_dana_penelitian);
        return redirect()->route('PenggunaanDana.index')
                        ->with('message2','Data berhasil dihapus');
    }
    public function destroy3($id_dana_pgbdn)
    {
        PenggunaanDanaPengabdian::destroy($id_dana_pgbdn);
        return redirect()->route('PenggunaanDana.index')
                        ->with('message2','Data berhasil dihapus');
    }
        // excel dana penelitian
    public function download_excel_dana_penelitian(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $dateS = Carbon::now()->startOfYear()->subYear(2);
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $dana_penelitian=PenggunaanDanaPenelitian::whereBetween('tahun_dana_penelitian', [$dateS,$dateE])                                      ->join('departemen', 'id_dept', '=', 'id_departemen')
                                                  ->where('id_departemen', $id_departemen)
                                                  ->get();
        $jumlh=PenggunaanDanaPenelitian::whereBetween('tahun_dana_penelitian', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->sum('jumlah_dana');

        // dana penelitian standar 7
        $penelitians = Penelitian::whereBetween('tahun_penelitian', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_penelitian', 'desc')
                            ->get(); 

        $totaldana=Penelitian::whereBetween('tahun_penelitian', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_dana');

    Excel::create('Penggunaan Dana Penelitian', function($excel) use($dept, $dana_penelitian ,$jumlh, $penelitians, $totaldana){
        $excel->sheet('Penggunaan Dana Penelitian', function($sheet) use($dept, $dana_penelitian, $jumlh, $penelitians, $totaldana){
          $sheet->setSize('A1', 5, 18);
          $sheet->setSize('B1', 15, 18);
          $sheet->setSize('C1', 50, 18);
          $sheet->setSize('D1', 40, 18);
          $sheet->setSize('E1', 35, 18);
          $sheet->cells('A1:F4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:F100', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
            $sheet->loadView('PenggunaanDana/Excel_Dana_Penelitian')->with("dana_penelitian", $dana_penelitian)->with("dept", $dept)->with("jumlh", $jumlh)->with("penelitians", $penelitians)->with("totaldana", $totaldana);
        });
     })->export('xlsx');
   }
       // excel dana pengabdian
    public function download_excel_dana_pengabdian(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $dateS = Carbon::now()->startOfYear()->subYear(2);
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $dana_pengabdian=PenggunaanDanaPengabdian::whereBetween('tahun_pgb_dana', [$dateS,$dateE])
                                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->where('id_departemen', $id_departemen)
                                                ->get();
        // pengabdian standar 8
        $pengabdians = Pengabdian::whereBetween('tahun_pengabdian', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_pengabdian', 'desc')
                            ->get();
        $totaldana=Pengabdian::whereBetween('tahun_pengabdian', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_dana_peng');
    Excel::create('Dana Pelayanan Pengabdian', function($excel) use($dept, $dana_pengabdian, $pengabdians, $totaldana){
        $excel->sheet('Dana Pelayanan Pengabdian', function($sheet) use($dept, $dana_pengabdian, $pengabdians, $totaldana){
          $sheet->setSize('A1', 5, 25);
          $sheet->setSize('B1', 15, 25);
          $sheet->setSize('C1', 50, 25);
          $sheet->setSize('D1', 45, 25);
          $sheet->setSize('E1', 35, 25);
          $sheet->setSize('F1', 30, 25);
          $sheet->cells('A1:F4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:F100', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
            $sheet->loadView('PenggunaanDana/Excel_Dana_Pengabdian')->with("dana_pengabdian", $dana_pengabdian)->with("dept", $dept)->with("pengabdians", $pengabdians)->with("totaldana", $totaldana);
        });
     })->export('xlsx');
   }

      // excel Penggunaan Dana ps
    public function download_excel_penggunaan_dana(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dateS = Carbon::now()->startOfYear()->subYear(2)->format('Y');
        $dateS1 = Carbon::now()->startOfYear()->subYear(1)->format('Y');
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subDays(1)->format('Y');
        if(Auth::user()->id_departemen==10)
        {
        $total_ts2=DB::table('penggunaan_dana')->whereBetween('tahun_penggunaan', [$dateS, $dateE])
                                ->select(DB::raw('sum(pendidikan) as jum_pend3, sum(penelitian) as jum_pen3, sum(pengabdian) as jum_peng3, sum(inves_pras) as jum_pras3, sum(inves_sar) as jum_sar3, sum(inves_sdm) as jum_sdm3, sum(lain_lain) as jum_lain3, sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total,sum(pendidikan)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pend, sum(penelitian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pen, sum(pengabdian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_peng,sum(inves_pras)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pras,sum(inves_sar)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sar,sum(inves_sdm)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sdm, sum(lain_lain)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_lain,tahun_penggunaan'))
                                ->groupBy('tahun_penggunaan')
                                ->get();
    }else{
        $total_ts2=DB::table('penggunaan_dana')->whereBetween('tahun_penggunaan', [$dateS, $dateE])
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                ->select(DB::raw('sum(pendidikan) as jum_pend3, sum(penelitian) as jum_pen3, sum(pengabdian) as jum_peng3, sum(inves_pras) as jum_pras3, sum(inves_sar) as jum_sar3, sum(inves_sdm) as jum_sdm3, sum(lain_lain) as jum_lain3, sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total,sum(pendidikan)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pend, sum(penelitian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pen, sum(pengabdian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_peng,sum(inves_pras)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pras,sum(inves_sar)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sar,sum(inves_sdm)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sdm, sum(lain_lain)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_lain,tahun_penggunaan'))
                                ->groupBy('tahun_penggunaan')
                                ->where('id_departemen', $id_departemen)
                                ->get();
    }
    Excel::create('Penggunaan Dana', function($excel) use($total_ts2, $dateE, $dateS, $dateS1){
        $excel->sheet('Penggunaan Dana', function($sheet) use($total_ts2, $dateE, $dateS, $dateS1){
          $sheet->setSize('A1', 5, 18);
          $sheet->setSize('B1', 40, 18);
          $sheet->setSize('C1', 20, 18);
          $sheet->setSize('D1', 20, 18);
          $sheet->setSize('E1', 20, 18);
          $sheet->setSize('F1', 20, 18);
          $sheet->setSize('G1', 20, 18);
          $sheet->setSize('H1', 20, 18);
          $sheet->cells('A6:H13', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
          $sheet->cells('A1:H5', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A14:H14', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
            $sheet->loadView('PenggunaanDana/Excel_Penggunaan_Dana_ps')->with("total_ts2", $total_ts2)->with('dateS1', $dateS1)->with('dateS', $dateS)->with('dateE', $dateE);
        });
     })->export('xlsx');
   }

   // pdf dana penelitian
   public function download_pdf_dana_penelitian(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $dateS = Carbon::now()->startOfYear()->subYear(2);
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $dana_penelitian=PenggunaanDanaPenelitian::whereBetween('tahun_dana_penelitian', [$dateS,$dateE])                               ->join('departemen', 'id_dept', '=', 'id_departemen')
                                                  ->where('id_departemen', $id_departemen)
                                                  ->get();
        $jumlh=PenggunaanDanaPenelitian::whereBetween('tahun_dana_penelitian', [$dateS,$dateE])
                                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                                        ->sum('jumlah_dana');
        // dana penelitian standar 7
        $penelitians = Penelitian::whereBetween('tahun_penelitian', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_penelitian', 'desc')
                            ->get(); 

        $totaldana=Penelitian::whereBetween('tahun_penelitian', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_dana');
        $tanggal= date("d-m-Y");
        $pdf = PDF::loadView('PenggunaanDana/Pdf_Dana_Penelitian', compact('dana_penelitian', 'jumlh', 'dept', 'penelitians', 'totaldana'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Dana untuk Penelitian '.$dept[0]->nama_departemen.' '.$tanggal.'.pdf');
        // dd($perangkat_keras1);
    } 
    // pdf dana pengabdian
   public function download_pdf_dana_pengabdian(Request $request)
    {
         $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $dateS = Carbon::now()->startOfYear()->subYear(2);
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $dana_pengabdian=PenggunaanDanaPengabdian::whereBetween('tahun_pgb_dana', [$dateS,$dateE])
                                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->where('id_departemen', $id_departemen)
                                                ->get();
        // pengabdian standar 8
        $pengabdians = Pengabdian::whereBetween('tahun_pengabdian', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_pengabdian', 'desc')
                            ->get();
        $totaldana=Pengabdian::whereBetween('tahun_pengabdian', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_dana_peng');
        $pdf = PDF::loadView('PenggunaanDana/Pdf_Dana_Pengabdian', compact('dana_pengabdian', 'dept', 'pengabdians','totaldana'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Dana dari untuk Pengabdian '.$dept[0]->nama_departemen.'.pdf');
        // dd($perangkat_keras1);
    } 

     // pdf penggunaan dana ps
    public function download_pdf_penggunaan_dana(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $dateS = Carbon::now()->startOfYear()->subYear(2)->format('Y');
        $dateS1 = Carbon::now()->startOfYear()->subYear(1)->format('Y');
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subDays(1)->format('Y');
        if(Auth::user()->id_departemen==10)
        {
        $total_ts2=DB::table('penggunaan_dana')->whereBetween('tahun_penggunaan', [$dateS, $dateE])
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                ->select(DB::raw('sum(pendidikan) as jum_pend3, sum(penelitian) as jum_pen3, sum(pengabdian) as jum_peng3, sum(inves_pras) as jum_pras3, sum(inves_sar) as jum_sar3, sum(inves_sdm) as jum_sdm3, sum(lain_lain) as jum_lain3, sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total,sum(pendidikan)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pend, sum(penelitian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pen, sum(pengabdian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_peng,sum(inves_pras)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pras,sum(inves_sar)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sar,sum(inves_sdm)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sdm, sum(lain_lain)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_lain,tahun_penggunaan'))
                                ->groupBy('tahun_penggunaan')
                                ->get();
        }else{
            $total_ts2=DB::table('penggunaan_dana')->whereBetween('tahun_penggunaan', [$dateS, $dateE])
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                ->select(DB::raw('sum(pendidikan) as jum_pend3, sum(penelitian) as jum_pen3, sum(pengabdian) as jum_peng3, sum(inves_pras) as jum_pras3, sum(inves_sar) as jum_sar3, sum(inves_sdm) as jum_sdm3, sum(lain_lain) as jum_lain3, sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total,sum(pendidikan)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pend, sum(penelitian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pen, sum(pengabdian)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_peng,sum(inves_pras)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_pras,sum(inves_sar)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sar,sum(inves_sdm)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_sdm, sum(lain_lain)/sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain)*100 as persen_lain,tahun_penggunaan'))
                                ->groupBy('tahun_penggunaan')
                                ->where('id_departemen', $id_departemen)
                                ->get();
        }
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
                            // dd($rata_semua);          
                                // dd($total_ts2);
    $pdf = PDF::loadView('PenggunaanDana/Pdf_Penggunaan_Dana_ps', compact('total_ts2', 'dateE', 'dateS', 'dateS1', 'rata_pend', 'rata_pen', 'rata_peng', 'rata_pras', 'rata_sar', 'rata_sdm', 'rata_lain','rata_semua'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Penggunaan Dana '.$dept[0]->nama_departemen.'.pdf');
   }

   public function download_excel_kegiatan_tridarma(Request $request)
   {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $dateS = Carbon::now()->startOfYear()->subYear(2)->format('Y');
        $dateS1 = Carbon::now()->startOfYear()->subYear(1)->subDays(1)->format('Y');
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subDays(1)->format('Y');

        $dateS11 = Carbon::now()->startOfYear()->subYear(1)->format('Y');
        $dateS2 = Carbon::now()->startOfYear()->subDays(1)->format('Y');

        $tahun_sekarang = date("Y");
        $tahun_sekarang = (int)$tahun_sekarang;
        $tahun_dua_lalu = $tahun_sekarang - 2;
        $tahun_satu_lalu = $tahun_sekarang - 1;
        $totaal = array_fill(0,3,0);
        $pakai_ps=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateE])
                                ->select(DB::raw('sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total, id_departemen'))
                                ->groupBy('id_departemen')
                                ->get();
        foreach ($pakai_ps as $key1 => $pake) {
            $pakai[$key1]=$pake->departemen->nama_departemen;
            $jumlah[$key1]=array_fill($tahun_dua_lalu, 3, 0);
            $tahun1=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS, $dateS1])
                                ->where('id_departemen', $pake->id_departemen)
                                ->select(DB::raw('sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total_semua'))
                                ->get();
                                // dd($pakai[$key1]);
            if(isset($tahun1)){
                foreach ($tahun1 as $key2 => $thn1) {
                  if ($key2 == 0) {
                    $jumlah[$key1][$tahun_dua_lalu] = $thn1->total_semua;
                  }else{
                    $jumlah[$key1][$tahun_dua_lalu] += $thn1->total_semua;
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
                    $jumlah[$key1][$tahun_satu_lalu] = $thn2->total_semua;
                  }else{
                    $jumlah[$key1][$tahun_satu_lalu] += $thn2->total_semua;
                  }
                  $totaal[1] += $thn2->total_semua;
                }
              }
// dd($totaal[0]);
            $tahun3=PenggunaanDana::whereBetween('tahun_penggunaan', [$dateS2, $dateE])
                                ->where('id_departemen', $pake->id_departemen)
                                ->select(DB::raw('sum(pendidikan+penelitian+pengabdian+inves_pras+inves_sar+inves_sdm+lain_lain) as total_semua'))
                                ->get();
            if(isset($tahun3)){
                foreach ($tahun3 as $key4 => $thn3) {
                  if ($key4 == 0) {
                    $jumlah[$key1][$tahun_sekarang] = $thn3->total_semua;
                  }else{
                    $jumlah[$key1][$tahun_sekarang] += $thn3->total_semua;
                  }
                  $totaal[2] += $thn3->total_semua;
                }
              }
        }
        Excel::create('Dana Kegiatan Tridarma', function($excel) use($totaal, $dateE, $dateS, $dateS1, $jumlah, $pakai, $dateS2){
        $excel->sheet('Dana Kegiatan Tridarma', function($sheet) use($totaal, $dateE, $dateS, $dateS1, $jumlah, $pakai, $dateS2){
          $sheet->setSize('A1', 5, 18);
          $sheet->setSize('B1', 40, 18);
          $sheet->setSize('C1', 20, 18);
          $sheet->setSize('D1', 20, 18);
          $sheet->setSize('E1', 20, 18);
          $sheet->setSize('F1', 20, 18);
          $sheet->setSize('G1', 20, 18);
          $sheet->setSize('H1', 20, 18);
          $sheet->cells('A1:H6', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A7:H88', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
            $sheet->loadView('PenggunaanDana/Excel_Dana_Kegiatan_Tridarma')->with("totaal", $totaal)->with('dateS1', $dateS1)->with('dateS', $dateS)->with('dateE', $dateE)->with("jumlah", $jumlah)->with("pakai", $pakai)->with('dateS2', $dateS2);
        });
     })->export('xlsx');
   }
}
