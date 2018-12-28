<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\SaranaTambahan;
use App\PenilaianSarana;
use App\RencanaInvesSarana;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;
use Carbon\Carbon;

class SaranaTambahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        
        $thn1 = Carbon::now()->startOfYear()->subYear(2);
        $thn33 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);

        $sarana_tambahan=SaranaTambahan::whereBetween('tanggal_inves', [$thn1, $thn33])
                                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                                        ->where('id_departemen', $id_departemen)
                                        ->orderBy('jenis_sarana_tambahan', 'asc')
                                        ->get();
        
        $tahun_lima = Carbon::now()->format('Y');
        $tahun_kurang = Carbon::now()->startOfYear()->addYear(5)->subDays(1);
// dd($tahun_kurang);
        $rencana_inves=RencanaInvesSarana::join('departemen', 'id_dept', '=', 'id_departemen')
                                        ->where('id_departemen', $id_departemen)
                                        ->orderBy('jenis_sarana_tamb', 'asc')
                                        ->get();
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
        return view('Sarana/Sarana_Tambahan', compact('dept', 'sarana_tambahan', 'tahun2', 'tahun', 'sar_tamb', 'total_rencana', 'rencana_tamb','rencana_inves_akhir', 'total_inves', 'penilaian_fmipa', 'rencana_inves'));    	
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
    	request()->validate([
            'jenis_sarana_tambahan' => 'required', 
            'jumlah' => 'required', 
            'satuan' => 'required',
            'harga_satuan' => 'required',
            'jmlh_harga' => 'required',
            'tahun_beli' => 'required',
            'tanggal_inves' => 'required',
            'investasi' => 'required',  
            'sumber_dana' => 'required',
        ]);

        $sarana_tambahan=new SaranaTambahan;
        $sarana_tambahan ->jenis_sarana_tambahan = $request->jenis_sarana_tambahan;
        $sarana_tambahan ->jumlah = $request->jumlah;
        $sarana_tambahan ->satuan = $request->satuan;
        $sarana_tambahan ->harga_satuan = $request->harga_satuan;
        $sarana_tambahan ->jmlh_harga = $request->jmlh_harga;
        $sarana_tambahan ->tahun_beli = $request->tahun_beli;
        $sarana_tambahan ->tanggal_inves = $request->tanggal_inves;
        $sarana_tambahan ->investasi = $request->investasi;
        $sarana_tambahan ->sumber_dana = $request->sumber_dana;
        $sarana_tambahan ->id_departemen= $request->user()->id_departemen;
         
        $sarana_tambahan->save();
        $notification = array(
                'message' => 'Data Sarana Tambahan Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana_Tambahan.store')
                        ->with($notification);
    	
    }

    public function store_inves (Request $request)
    {
        request()->validate([
            'jenis_sarana_tambahan' => 'required', 
            'jumlah' => 'required', 
            'satuan' => 'required',
            'harga_satuan' => 'required',
            'jmlh_harga' => 'required',
            'tahun_beli' => 'required',
            'tanggal_inves' => 'required',
            'investasi' => 'required',  
            'sumber_dana' => 'required',
        ]);

        $sarana_tambahan=new SaranaTambahan;
        $sarana_tambahan ->jenis_sarana_tambahan = $request->jenis_sarana_tambahan;
        $sarana_tambahan ->jumlah = $request->jumlah;
        $sarana_tambahan ->satuan = $request->satuan;
        $sarana_tambahan ->harga_satuan = $request->harga_satuan;
        $sarana_tambahan ->jmlh_harga = $request->jmlh_harga;
        $sarana_tambahan ->tahun_beli = $request->tahun_beli;
        $sarana_tambahan ->tanggal_inves = $request->tanggal_inves;
        $sarana_tambahan ->investasi = $request->investasi;
        $sarana_tambahan ->sumber_dana = $request->sumber_dana;
        $sarana_tambahan ->id_departemen= $request->user()->id_departemen;
         
        $sarana_tambahan->save();
        $notification = array(
                'message' => 'Data Investasi Sarana Tambahan Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana_Tambahan.index')
                        ->with($notification);
        
    }

    public function store_rencana_inves (Request $request)
    {
        request()->validate([
            'jenis_sarana_tamb' => 'required', 
            'jumlah' => 'required', 
            'satuan' => 'required',
            'harga_sat' => 'required',
            'jumlah_harga' => 'required',
            'tahun_ada' => 'required',
            'rencana_investasi' => 'required', 
            'sumber_dana' => 'required',
            'awal' => 'required',
            'akhir' => 'required',
        ]);

        $sarana_tamb=new RencanaInvesSarana;
        $sarana_tamb ->jenis_sarana_tamb = $request->jenis_sarana_tamb;
        $sarana_tamb ->jumlah = $request->jumlah;
        $sarana_tamb ->satuan = $request->satuan;
        $sarana_tamb ->harga_sat = $request->harga_sat;
        $sarana_tamb ->jumlah_harga = $request->jumlah_harga;
        $sarana_tamb ->tahun_ada = $request->tahun_ada;
        $sarana_tamb ->rencana_investasi = $request->rencana_investasi;
        $sarana_tamb ->sumber_dana = $request->sumber_dana;
        $sarana_tamb ->awal = $request->awal;
        $sarana_tamb ->akhir = $request->akhir;
        $sarana_tamb ->id_departemen= $request->user()->id_departemen;
         
        $sarana_tamb->save();
        $notification = array(
                'message' => 'Data Investasi Sarana Tambahan Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->back()
                        ->with($notification);
        
    }

    public function update_rencana_inves(Request $request, $member)
    {

        $sarana_tamb=RencanaInvesSarana::find($member);
        $sarana_tamb ->jenis_sarana_tamb = $request->jenis_sarana_tamb;
        $sarana_tamb ->jumlah = $request->jumlah;
        $sarana_tamb ->satuan = $request->satuan;
        $sarana_tamb ->harga_sat = $request->harga_sat;
        $sarana_tamb ->jumlah_harga = $request->jumlah_harga;
        $sarana_tamb ->tahun_ada = $request->tahun_ada;
        $sarana_tamb ->rencana_investasi = $request->rencana_investasi;
        $sarana_tamb ->sumber_dana = $request->sumber_dana;
        $sarana_tamb ->awal = $request->awal;
        $sarana_tamb ->akhir = $request->akhir;
        $sarana_tamb ->id_departemen= $request->user()->id_departemen;
         
        $sarana_tamb->save();
        $notification = array(
                'message' => 'Data Investasi Sarana Tambahan Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana_Tambahan.index')
                        ->with($notification);
        
    }

    public function update (Request $request, $member)
    {
        request()->validate([
            'jenis_sarana_tambahan' => 'required', 
            'jumlah' => 'required', 
            'satuan' => 'required',
            'harga_satuan' => 'required',
            'jmlh_harga' => 'required',
            'tahun_beli' => 'required',
            'tanggal_inves' => 'required',
            'investasi' => 'required', 
            'rencana_inves_sarana' => 'required', 
            'sumber_dana' => 'required',
            'awal_rencana' => 'required',
            'akhir_rencana' => 'required',
        ]);

        $sarana_tambahan=SaranaTambahan::find($member);
        $sarana_tambahan ->jenis_sarana_tambahan = $request->jenis_sarana_tambahan;
        $sarana_tambahan ->jumlah = $request->jumlah;
        $sarana_tambahan ->satuan = $request->satuan;
        $sarana_tambahan ->harga_satuan = $request->harga_satuan;
        $sarana_tambahan ->jmlh_harga = $request->jmlh_harga;
        $sarana_tambahan ->tahun_beli = $request->tahun_beli;
        $sarana_tambahan ->tanggal_inves = $request->tanggal_inves;
        $sarana_tambahan ->investasi = $request->investasi;
        $sarana_tambahan ->rencana_inves_sarana = $request->rencana_inves_sarana;
        $sarana_tambahan ->sumber_dana = $request->sumber_dana;
        $sarana_tambahan ->awal_rencana = $request->awal_rencana;
        $sarana_tambahan ->akhir_rencana = $request->akhir_rencana;
        $sarana_tambahan ->id_departemen= $request->user()->id_departemen;
         
        $sarana_tambahan->save();
        $notification = array(
                'message' => 'Data Sarana Tambahan Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana_Tambahan.index')
                        ->with($notification);
    }

    public function penilaian_fmipa(Request $request)
    {
        $user = auth()->user();
        // dd($request);
        // $akses_data= AksesibilitasData::find($member);
        $penilaian_fmipaa= PenilaianSarana::where("id_departemen", $user->id_departemen)->get();
        foreach ($penilaian_fmipaa as $key => $data) {
            $penilaian_fmipa = PenilaianSarana::where("id_penilaian", $data->id_penilaian)->first();
            $penilaian_fmipa ->penilaian = $request->penilaian;
            $penilaian_fmipa ->save();
        }
        $notification = array(
                'message' => 'Penilaian FMIPA Berhasil Diperbarui!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana_Tambahan.index')
                        ->with($notification);
    }

    public function destroy($id_sarana_tambahan)
    { 
        SaranaTambahan::destroy($id_sarana_tambahan);
        $notification = array(
                'message' => 'Data Sarana Tambahan Berhasil Dihapus!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana_Tambahan.index')
                        ->with($notification);
    }

    public function destroy2($id_sarana_rencana)
    { 
        RencanaInvesSarana::destroy($id_sarana_rencana);
        $notification = array(
                'message' => 'Data Rencana Investasi Sarana Tambahan Berhasil Dihapus!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana_Tambahan.index')
                        ->with($notification);
    }

 // download excel 
    public function download_excel_sar_tamb(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        
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
        Excel::create('Sarana Tambahan', function($excel) use($tahun2, $tahun, $sar_tamb, $total_rencana, $rencana_inves_akhir, $total_inves, $rencana_tamb){
        $excel->sheet('Sarana Tambahan', function($sheet) use($tahun2, $tahun, $sar_tamb, $total_rencana, $rencana_inves_akhir, $total_inves, $rencana_tamb){
          $sheet->setSize('A1', 5, 18);
          $sheet->setSize('B1', 35, 18);
          $sheet->setSize('C1', 35, 18);
          $sheet->setSize('D1', 30, 18);
          $sheet->setSize('E1', 30, 18);
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
            $sheet->loadView('Sarana/Excel_Sarana_Tambahan')->with("sar_tamb", $sar_tamb)->with("total_rencana", $total_rencana)->with("total_inves", $total_inves)->with("rencana_inves_akhir", $rencana_inves_akhir)->with("tahun", $tahun)->with("tahun2", $tahun2)->with("rencana_tamb", $rencana_tamb);
        });
     })->export('xlsx');
    }
 
    public function download_pdf_sarana_tambahan(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        
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
        $pdf = PDF::loadView('Sarana/Pdf_Sarana_Tambahan', compact('sar_tamb', 'total_rencana', 'total_inves', 'rencana_inves_akhir', 'rencana_tamb','tahun', 'tahun2'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream('Sarana Tambahan FMIPA IPB.pdf', array('Attachment'=>1));
    }    
}
