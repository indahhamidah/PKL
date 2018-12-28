<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PenerimaanDana;
use App\SumberDanaTerima;
use App\JenisDana;
use App\DanaLainLain;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Departemen;
use App\User;
use Carbon\Carbon;
use Excel;
use PDF;

class PenerimaanDanaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
      // $id = $request->user()->id;
      // ts-2
        $thn_2  = Carbon::now()->startOfYear()->subYear(1)->subMonth(4);
        $thn_22  = Carbon::now()->startOfYear()->subMonth(4)->subDays(1);
        // ts-1
        $thn_1   = Carbon::now()->startOfYear()->subMonth(4);
        $thn_11 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4)->subDays(1);
        // ts
        $thn = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $thn_ = Carbon::now()->startOfYear()->addYear(2)->subMonth(4)->subDays(1);
        // dd($thn_ );

        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $penerimaan_dana = PenerimaanDana::join('departemen', 'id_dept', 'id_departemen')
                                        ->join('sumber_terima_dana', 'id_sumber', '=', 'id_sumber_danaa')
                                        ->where('id_departemen', $id_departemen)
                                        ->whereBetween('tahun_terima_dana', [$thn_2, $thn_ ])
                                        // ->join('lain_lain_dana', 'id_terima_danaa', '=', 'id_terima_dana')
                                        ->orderBy('id_sumber_danaa', 'asc')
                                        ->orderBy('jenis_dana', 'asc')
                                        ->orderBy('tahun_terima_dana', 'asc')
                                        ->get();
        
        $baru=PenerimaanDana::whereBetween('tahun_terima_dana', [$thn_2, $thn_ ])
                                          ->where('id_departemen', $id_departemen)
                                          ->select(DB::raw('sum(jumlah_dana_terima) as terima, id_sumber_danaa'))
                                          ->groupBy('id_sumber_danaa')
                                          ->get();
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
            foreach ($jenis as $key2 => $jen) {
              $sumber[$key1] = $bar->sumberDana->sumber_terima_danaa;
              $jns[$key1][$key2]= $jen->jenis_dana;
              $jumlah[$key1][$key2] = array_fill($tahun_dua_lalu,3,0);

              $tahun1=PenerimaanDana::whereBetween('tahun_terima_dana', [$thn_2, $thn_22 ])
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
              
              $tahun2=PenerimaanDana::whereBetween('tahun_terima_dana', [$thn_1  , $thn_11])
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
                   // dd($jenis);
        $jenisdn=JenisDana::get();
        return view('PenerimaanDana/penerimaan_dana_v',compact('dept','penerimaan_dana', 'jumlah', 'jns', 'total', 'sumber', 'tahun_dua_lalu', 'tahun_satu_lalu', 'tahun_sekarang', 'jenisdn'))
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
    	
        //validate
        request()->validate([
            // 'sumber_dana' => 'required|string|max:50',
            'jenis_dana' => 'required',
            'jumlah_dana_terima' => 'required',
            'tahun_terima_dana' => 'required',

        ]);

        //isi  database
        $penerimaan_dana=new PenerimaanDana;
        $penerimaan_dana->id_departemen = $request->user()->id_departemen;
        $penerimaan_dana->id_sumber_danaa = $request->id_sumber_danaa;
        $penerimaan_dana->jenis_dana = $request->jenis_dana;
        $penerimaan_dana->jumlah_dana_terima = $request->jumlah_dana_terima;
        $penerimaan_dana->tahun_terima_dana = date("Y-m-d", strtotime(str_replace('-', '/', $request['tahun_terima_dana'])));
        $penerimaan_dana->save();

        $notification = array(
                'message' => 'Data Penerimaan Dana Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('PenerimaanDana.store')
                          ->with($notification);
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
            'jenis_dana' => 'required',
            'jumlah_dana_terima' => 'required',
            'tahun_terima_dana' => 'required',

        ]);

        $penerimaan_dana=PenerimaanDana::find($member);
        $penerimaan_dana->id_departemen = $request->user()->id_departemen;
        $penerimaan_dana->id_sumber_danaa = $request->id_sumber_danaa;
        $penerimaan_dana->jenis_dana = $request->jenis_dana;
        $penerimaan_dana->jumlah_dana_terima = $request->jumlah_dana_terima;
        $penerimaan_dana->tahun_terima_dana = date("Y-m-d", strtotime(str_replace('-', '/', $request['tahun_terima_dana'])));
        $penerimaan_dana->save();
        $notification = array(
                'message' => 'Data Penerimaan Dana Berhasil Diubah!',
                'alert-type' => 'success'
            );

        return redirect()->route('PenerimaanDana.index')
                         ->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_terima_dana)
    {
        $notification = array(
                'message' => 'Data Berhasil Dihapus!',
                'alert-type' => 'success'
            );
        PenerimaanDana::destroy($id_terima_dana);
        // $penerimaan_dana=PenerimaanDana::findorFail($id_terima_dana);
        // $penerimaan_dana->delete();
        return redirect()->route('PenerimaanDana.index')
                        ->with($notification);
    }

        // excel penerimaan dana
    public function download_excel_terima_dana(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        // ts-2
        $thn_2  = Carbon::now()->startOfYear()->subYear(1)->subMonth(4);
        $thn_22  = Carbon::now()->startOfYear()->subMonth(4)->subDays(1);
        // ts-1
        $thn_1   = Carbon::now()->startOfYear()->subMonth(4);
        $thn_11 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4)->subDays(1);
        // ts
        $thn = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $thn_ = Carbon::now()->startOfYear()->addYear(2)->subMonth(4)->subDays(1);

        $baru=PenerimaanDana::whereBetween('tahun_terima_dana', [$thn_2, $thn_ ])
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

              $tahun1=PenerimaanDana::whereBetween('tahun_terima_dana', [$thn_2, $thn_22 ])
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
              
              $tahun2=PenerimaanDana::whereBetween('tahun_terima_dana', [$thn_1  , $thn_11])
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
            // dd($jenis);
        // dd($jns);
    Excel::create('Penerimaan Dana', function($excel) use($dept, $jumlah, $sumber, $jns, $total, $tahun_dua_lalu, $tahun_satu_lalu, $tahun_sekarang){
        $excel->sheet('Penerimaan Dana', function($sheet) use($dept, $jumlah, $sumber, $jns, $total, $tahun_dua_lalu, $tahun_satu_lalu, $tahun_sekarang){
          $sheet->setSize('A1', 25, 18);
          $sheet->setSize('B1', 36, 18);
          $sheet->setSize('C1', 20, 18);
          $sheet->setSize('D1', 20, 18);
          $sheet->setSize('E1', 20, 18);
          $sheet->cells('A3:E4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:E22', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
            $sheet->loadView('PenerimaanDana/Excel_Penerimaan_Dana')->with("dept", $dept)->with("jumlah", $jumlah)->with("sumber", $sumber)->with("jns", $jns)->with("total", $total)->with("tahun_dua_lalu", $tahun_dua_lalu)->with("tahun_satu_lalu", $tahun_satu_lalu)->with("tahun_sekarang", $tahun_sekarang);
        });
     })->export('xlsx');
   }

    // pdf penerimaan dana
   public function download_pdf_penerimaan_dana(Request $request)
    {
         $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
         // ts-2
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
                    
        $pdf = PDF::loadView('PenerimaanDana/Pdf_Penerimaan_Dana', compact('dept', 'jumlah', 'sumber', 'jns', 'total', 'tahun_dua_lalu', 'tahun_satu_lalu', 'tahun_sekarang'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Penerimaan Dana.pdf');
        // dd($perangkat_keras1);
    } 
}
