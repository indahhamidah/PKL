<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\PrasaranaTambahan;
use App\PenilaianPrasarana;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use PDF;
use Excel;

class PrasaranaTambahanController extends Controller
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
        $thn11 = Carbon::now()->startOfYear()->subYear(1)->subDays(1);
        $thn2 = Carbon::now()->startOfYear()->subYear(1);
        $thn22 = Carbon::now()->startOfYear()->subDays(1);
        $thn3 = Carbon::now()->startOfYear();
        $thn33 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        
        $prasarana_tambahan=PrasaranaTambahan::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->where('id_departemen', $id_departemen)
                                            ->orderBy('jenis_prasarana_tambahan', 'asc')
                                            ->get();
		
        $pras_tamb=PrasaranaTambahan::where('id_departemen', $id_departemen)
                                          ->select(DB::raw('sum(investasi_prasarana) as jum_inves, jenis_prasarana_tambahan, sumber_dana'))
                                          ->groupBy('jenis_prasarana_tambahan')
                                          ->groupBy('sumber_dana')
                                          ->orderBy('created_at', 'asc')
                                          ->get();
        $total_rencana=0;
        foreach ($pras_tamb as $key => $pras) {
            $prasarana_tamb=PrasaranaTambahan::where('jenis_prasarana_tambahan', $pras->jenis_prasarana_tambahan)
                                            ->where('sumber_dana', $pras->sumber_dana)
                                            ->orderBy('created_at', 'desc')
                                            ->first();
            $rencana_inves_terakhir[$key]=$prasarana_tamb->rencana_investasi; 
            $total_rencana+=$prasarana_tamb->rencana_investasi;
        }
        $total_inves=PrasaranaTambahan::whereBetween('tanggal_inves', [$thn1, $thn33])
                                          ->where('id_departemen', $id_departemen)
                                          ->sum('investasi_prasarana');
                                          
        $tahun=date("Y");
        $tahun1=$tahun-1;
        $tahun2=$tahun-2;
        $penilaian_pras_fmipa=PenilaianPrasarana::get();
        return view('Prasarana/Prasarana_Tambahan', compact('dept', 'prasarana_tambahan', 'thn1', 'thn11', 'thn2', 'thn22', 'thn3', 'thn33', 'pras_tamb', 'rencana_inves_terakhir', 'total_rencana', 'total_inves', 'tahun', 'tahun1', 'tahun2', 'penilaian_pras_fmipa'));    	
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
    	request()->validate([
            'jenis_prasarana_tambahan' => 'required', 
            'tanggal_inves' => 'required', 
            'investasi_prasarana' => 'required', 
            'rencana_investasi' => 'required', 
            'awal_rencana' => 'required', 
            'akhir_rencana' => 'required', 
            'sumber_dana' => 'required',
        ]);

        $prasarana_tambahan=new PrasaranaTambahan;
        $prasarana_tambahan ->jenis_prasarana_tambahan = $request->jenis_prasarana_tambahan;
        $prasarana_tambahan ->tanggal_inves = $request->tanggal_inves;
        $prasarana_tambahan ->investasi_prasarana = $request->investasi_prasarana;
        $prasarana_tambahan ->rencana_investasi = $request->rencana_investasi;
        $prasarana_tambahan ->awal_rencana = $request->awal_rencana;
        $prasarana_tambahan ->akhir_rencana = $request->akhir_rencana;
        $prasarana_tambahan ->sumber_dana = $request->sumber_dana;
        $prasarana_tambahan ->id_departemen= $request->user()->id_departemen;
         
        $prasarana_tambahan->save();
        $notification = array(
                'message' => 'Data Prasarana Tambahan Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('Prasarana_Tambahan.store')
                        ->with($notification);
    	
    }

    public function store_inves (Request $request)
    {
        request()->validate([
            'jenis_prasarana_tambahan' => 'required', 
            'tanggal_inves' => 'required', 
            'investasi_prasarana' => 'required', 
            'rencana_investasi' => 'required', 
            'awal_rencana' => 'required', 
            'akhir_rencana' => 'required', 
            'sumber_dana' => 'required',
        ]);

        $prasarana_tambahan=new PrasaranaTambahan;
        $prasarana_tambahan ->jenis_prasarana_tambahan = $request->jenis_prasarana_tambahan;
        $prasarana_tambahan ->tanggal_inves = $request->tanggal_inves;
        $prasarana_tambahan ->investasi_prasarana = $request->investasi_prasarana;
        $prasarana_tambahan ->rencana_investasi = $request->rencana_investasi;
        $prasarana_tambahan ->awal_rencana = $request->awal_rencana;
        $prasarana_tambahan ->akhir_rencana = $request->akhir_rencana;
        $prasarana_tambahan ->sumber_dana = $request->sumber_dana;
        $prasarana_tambahan ->id_departemen= $request->user()->id_departemen;
         
        $prasarana_tambahan->save();
        $notification = array(
                'message' => 'Data Investasi Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('Prasarana_Tambahan.index')
                        ->with($notification);
        
    }

    public function update (Request $request, $member)
    {
        request()->validate([
            'jenis_prasarana_tambahan' => 'required', 
            'tanggal_inves' => 'required', 
            'investasi_prasarana' => 'required', 
            'rencana_investasi' => 'required', 
            'awal_rencana' => 'required', 
            'akhir_rencana' => 'required', 
            'sumber_dana' => 'required',
        ]);

        $prasarana_tambahan=PrasaranaTambahan::find($member);
        $prasarana_tambahan ->jenis_prasarana_tambahan = $request->jenis_prasarana_tambahan;
        $prasarana_tambahan ->tanggal_inves = $request->tanggal_inves;
        $prasarana_tambahan ->investasi_prasarana = $request->investasi_prasarana;
        $prasarana_tambahan ->rencana_investasi = $request->rencana_investasi;
        $prasarana_tambahan ->awal_rencana = $request->awal_rencana;
        $prasarana_tambahan ->akhir_rencana = $request->akhir_rencana;
        $prasarana_tambahan ->sumber_dana = $request->sumber_dana;
        $prasarana_tambahan ->id_departemen= $request->user()->id_departemen;
         
        $prasarana_tambahan->save();
        $notification = array(
                'message' => 'Data Prasarana Tambahan Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Prasarana_Tambahan.index')
                        ->with($notification);
    }

    public function penilaian_pras_fmipa(Request $request)
    {
        $user = auth()->user();
        // dd($request);
        // $akses_data= AksesibilitasData::find($member);
        $penilaian_fmipaa= PenilaianPrasarana::where("id_departemen", $user->id_departemen)->get();
        foreach ($penilaian_fmipaa as $key => $data) {
            $penilaian_pras_fmipa = PenilaianPrasarana::where("id_nilai_pras", $data->id_nilai_pras)->first();
            $penilaian_pras_fmipa ->penilaian_pras = $request->penilaian_pras;
            $penilaian_pras_fmipa ->save();
        }
        $notification = array(
                'message' => 'Penilaian FMIPA Berhasil Diperbarui!',
                'alert-type' => 'success'
            );
        return redirect()->route('Prasarana_Tambahan.index')
                        ->with($notification);
    }

    public function destroy($id_prasarana_tambahan)
    { 
        PrasaranaTambahan::destroy($id_prasarana_tambahan);
        $notification = array(
                'message' => 'Data Prasarana Tambahan Berhasil Dihapus!',
                'alert-type' => 'warning'
            );
        return redirect()->route('Prasarana_Tambahan.index')
                        ->with($notification);
    }

    
// download excel 
    public function download_excel_pras_tamb(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $thn1 = Carbon::now()->startOfYear()->subYear(2);
        $thn11 = Carbon::now()->startOfYear()->subYear(1)->subDays(1);
        $thn2 = Carbon::now()->startOfYear()->subYear(1);
        $thn22 = Carbon::now()->startOfYear()->subDays(1);
        $thn3 = Carbon::now()->startOfYear();
        $thn33 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        
        $pras_tamb=PrasaranaTambahan::whereBetween('tanggal_inves', [$thn1, $thn33])
                                          ->where('id_departemen', $id_departemen)
                                          ->select(DB::raw('sum(investasi_prasarana) as jum_inves, jenis_prasarana_tambahan, sumber_dana'))
                                          ->groupBy('jenis_prasarana_tambahan')
                                          ->groupBy('sumber_dana')
                                          ->orderBy('created_at', 'asc')
                                          ->get();
        $total_rencana=0;
        foreach ($pras_tamb as $key => $pras) {
            $prasarana_tamb=PrasaranaTambahan::where('jenis_prasarana_tambahan', $pras->jenis_prasarana_tambahan)
                                            ->where('sumber_dana', $pras->sumber_dana)
                                            ->orderBy('created_at', 'desc')
                                            ->first();
            $rencana_inves_terakhir[$key]=$prasarana_tamb->rencana_investasi; 
            $total_rencana+=$prasarana_tamb->rencana_investasi;
        }
        $total_inves=PrasaranaTambahan::whereBetween('tanggal_inves', [$thn1, $thn33])
                                          ->where('id_departemen', $id_departemen)
                                          ->sum('investasi_prasarana');
        $tahun=date("Y");
        $tahun2=$tahun-2;                                
        Excel::create('Prasarana Tambahan', function($excel) use($pras_tamb, $total_inves, $total_rencana, $rencana_inves_terakhir, $tahun2, $tahun){
        $excel->sheet('Prasarana Tambahan', function($sheet) use($pras_tamb, $total_inves, $total_rencana, $rencana_inves_terakhir, $tahun, $tahun2){
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
            $sheet->loadView('Prasarana/Excel_Prasarana_Tambahan')->with("pras_tamb", $pras_tamb)->with("total_rencana", $total_rencana)->with("total_inves", $total_inves)->with("rencana_inves_terakhir", $rencana_inves_terakhir)->with("tahun", $tahun)->with("tahun2", $tahun2);
        });
     })->export('xlsx');
    }

    public function download_pdf_pras_tamb(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $thn1 = Carbon::now()->startOfYear()->subYear(2);
        $thn11 = Carbon::now()->startOfYear()->subYear(1)->subDays(1);
        $thn2 = Carbon::now()->startOfYear()->subYear(1);
        $thn22 = Carbon::now()->startOfYear()->subDays(1);
        $thn3 = Carbon::now()->startOfYear();
        $thn33 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $thn5 = Carbon::now()->startOfYear()->addYear(5)->subDays(1);
        
        $pras_tamb=PrasaranaTambahan::whereBetween('tanggal_inves', [$thn1, $thn33])
                                    ->whereBetween('akhir_rencana', [$thn3, $thn5])
                                          ->where('id_departemen', $id_departemen)
                                          ->select(DB::raw('sum(investasi_prasarana) as jum_inves, jenis_prasarana_tambahan, sumber_dana'))
                                          ->groupBy('jenis_prasarana_tambahan')
                                          ->groupBy('sumber_dana')
                                          ->orderBy('created_at', 'asc')
                                          ->get();
        $total_rencana=0;
        foreach ($pras_tamb as $key => $pras) {
            $prasarana_tamb=PrasaranaTambahan::where('jenis_prasarana_tambahan', $pras->jenis_prasarana_tambahan)
                                            ->where('sumber_dana', $pras->sumber_dana)
                                            ->orderBy('created_at', 'desc')
                                            ->first();
            $rencana_inves_terakhir[$key]=$prasarana_tamb->rencana_investasi; 
            $total_rencana+=$prasarana_tamb->rencana_investasi;
        }
        $total_inves=PrasaranaTambahan::whereBetween('tanggal_inves', [$thn1, $thn33])
                                          ->where('id_departemen', $id_departemen)
                                          ->sum('investasi_prasarana');
    
        $pdf = PDF::loadView('Prasarana/Pdf_Prasarana_Tambahan', compact('pras_tamb', 'total_rencana', 'total_inves', 'rencana_inves_terakhir'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Prasarana Tambahan FMIPA IPB.pdf', array('Attachment'=>1));                                    
        
    }    
     
}
