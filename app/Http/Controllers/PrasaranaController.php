<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\RuangDosenTetap;
use App\JenisRuangDosenTetap;
use App\PrasaranaPS;
use App\KepemilikanPras;
use App\KondisiPras;
use App\PrasPenunjang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Excel;
use PDF;

class PrasaranaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {   
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $rk_dosen_tetap=RuangDosenTetap::join('departemen', 'id_dept', '=', 'id_departemen')
                                       ->join('daftar_ruang_kerja', 'id_ruang_kerja_dosen', '=', 'id_ruang_kerja')
                                       ->where('id_departemen', $id_departemen)
                                       ->OrderBy('id_ruang_kerja', 'asc')
                                       ->get();
        // $rk_dosen_=DB::table('daftar_ruang_kerja')->get();
        // dd($rk_dosen_tetap);
        $jmlh_ruang=DB::table('ruang_kerja_dosen_tetap')->where('id_departemen', $id_departemen)
                                                        ->sum('jumlah_ruang');
		$jmlh_luas=DB::table('ruang_kerja_dosen_tetap')->where('id_departemen', $id_departemen)
                                                        ->sum('jumlah_luas');

        $prasarana_ps=DB::table('prasarana_ps')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->join('kepemilikan_prasarana_ps', 'id_kepemilikan', '=', 'id_kepemilikan_pras')
                                                ->join('kondisi_prasarana_ps', 'id_kondisi', '=', 'id_kondisi_pras')
                                                ->where('id_departemen', $id_departemen)
                                                ->OrderBy('jenis_prasarana_ps', 'asc')
                                                ->get();
        $penunjang_ps=DB::table('prasarana_penunjang_ps')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->join('kepemilikan_prasarana_ps', 'id_kepemilikan', '=', 'id_kepemilikan_penunjang')
                                                ->join('kondisi_prasarana_ps', 'id_kondisi', '=', 'id_kondisi_penunjang')
                                                ->where('id_departemen', $id_departemen)
                                                ->OrderBy('jenis_penunjang_ps', 'asc')
                                                ->get();
        $milik=KepemilikanPras::get();
        $kondisi=KondisiPras::get();
        return view('Prasarana/prasarana', compact('id_departemen', 'dept', 'rk_dosen_tetap', 'jmlh_ruang', 'jmlh_luas', 'prasarana_ps', 'milik', 'kondisi', 'penunjang_ps'));    	
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
        request()->validate([
            'jenis_prasarana_ps' => 'required',
            'jumlah_unit_prasarana' => 'required',
            'total_luas' => 'required',
            // 'id_kepemilikan_pras' => 'required',
            // 'id_kondisi_pras' => 'required',
            'utilisasi' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
        ]);

        $prasarana_ps=new PrasaranaPS;
        $prasarana_ps ->jenis_prasarana_ps = $request->jenis_prasarana_ps;
        $prasarana_ps ->jumlah_unit_prasarana = $request->jumlah_unit_prasarana;
        $prasarana_ps ->total_luas = $request->total_luas;
        $prasarana_ps ->id_kepemilikan_pras = $request->id_kepemilikan_pras;
        $prasarana_ps ->id_kondisi_pras = $request->id_kondisi_pras;
        $prasarana_ps ->utilisasi = $request->utilisasi;
        $prasarana_ps ->panjang = $request->panjang;
        $prasarana_ps ->lebar = $request->lebar;
        $prasarana_ps ->id_departemen= $request->user()->id_departemen;
         
        $prasarana_ps->save();
        $notification = array(
                'message' => 'Data Prasarana Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );

        return redirect()->route('Prasarana.store')
                        ->with($notification);
    	 
    }

    public function store_2 (Request $request)
    {
        request()->validate([
            'jenis_penunjang_ps' => 'required',
            'jumlah_unit' => 'required',
            'total_luas' => 'required',
            // 'id_kepemilikan_pras' => 'required',
            // 'id_kondisi_pras' => 'required',
            'unit_pengelola' => 'required',
        ]);

        $pras_penunjang=new PrasPenunjang;
        $pras_penunjang ->jenis_penunjang_ps = $request->jenis_penunjang_ps;
        $pras_penunjang ->jumlah_unit = $request->jumlah_unit;
        $pras_penunjang ->total_luas = $request->total_luas;
        $pras_penunjang ->id_kepemilikan_penunjang = $request->id_kepemilikan_penunjang;
        $pras_penunjang ->id_kondisi_penunjang = $request->id_kondisi_penunjang;
        $pras_penunjang ->unit_pengelola = $request->unit_pengelola;
        $pras_penunjang ->id_departemen= $request->user()->id_departemen;
         
        $pras_penunjang->save();
        $notification = array(
                'message' => 'Data Prasarana Penunjang Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('Prasarana.index')
                        ->with($notification);
         
    }

    public function update (Request $request, $member)
    {
        request()->validate([
            'jenis_prasarana_ps' => 'required',
            'jumlah_unit_prasarana' => 'required',
            'total_luas' => 'required',
            'utilisasi' => 'required',
            'panjang' =>'required',
            'lebar' => 'required',
        ]);

        $prasarana_ps=PrasaranaPS::find($member);
        $prasarana_ps ->jenis_prasarana_ps = $request->jenis_prasarana_ps;
        $prasarana_ps ->jumlah_unit_prasarana = $request->jumlah_unit_prasarana;
        $prasarana_ps ->total_luas = $request->total_luas;
        $prasarana_ps ->id_kepemilikan_pras = $request->id_kepemilikan_pras;
        $prasarana_ps ->id_kondisi_pras = $request->id_kondisi_pras;
        $prasarana_ps ->utilisasi = $request->utilisasi;
        $prasarana_ps ->panjang = $request->panjang;
        $prasarana_ps ->lebar = $request->lebar;
        $prasarana_ps ->id_departemen= $request->user()->id_departemen;
         
        $prasarana_ps->save();
        $notification = array(
                'message' => 'Data Prasarana Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Prasarana.index')
                        ->with($notification);
    }

    public function update_2(Request $request, $member)
    {
        
        $rk_dosen_tetap=RuangDosenTetap::find($member);
        $rk_dosen_tetap->id_ruang_kerja=$request->id_ruang_kerja;
        $rk_dosen_tetap->jumlah_ruang=$request->jumlah_ruang;
        $rk_dosen_tetap->jumlah_luas=$request->jumlah_luas;
        $rk_dosen_tetap->id_departemen= $request->user()->id_departemen;
        $rk_dosen_tetap->save();

        $notification = array(
                'message' => 'Data Ruang Kerja Dosen Tetap Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Prasarana.index')
                        ->with($notification); 
         
    }

    public function updatee_3 (Request $request, $member)
    {
        $pras_penunjang=PrasPenunjang::find($member);
        $pras_penunjang ->jenis_penunjang_ps = $request->jenis_penunjang_ps;
        $pras_penunjang ->jumlah_unit = $request->jumlah_unit;
        $pras_penunjang ->total_luas = $request->total_luas;
        $pras_penunjang ->id_kepemilikan_penunjang = $request->id_kepemilikan_penunjang;
        $pras_penunjang ->id_kondisi_penunjang = $request->id_kondisi_penunjang;
        $pras_penunjang ->unit_pengelola = $request->unit_pengelola;
        $pras_penunjang ->id_departemen= $request->user()->id_departemen;
         
        $pras_penunjang->save();
        $notification = array(
                'message' => 'Data Prasarana Penunjang Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Prasarana.index')
                        ->with($notification);
    }

    public function destroy(Request $request, $id_prasarana_ps)
    {
        // PrasaranaPS::destroy($id_prasarana_ps);
        $pras_ps=PrasaranaPS::findorFail($id_prasarana_ps);
        $pras_ps->delete();
        $notification = array(
                'message' => 'Data Prasarana Berhasil Dihapus!',
                'alert-type' => 'success'
            );
        return back()->with($notification);
    }

    public function destroy2($id_pras_penunjang)
    {
        PrasPenunjang::destroy($id_pras_penunjang);
        $notification = array(
                'message' => 'Data Prasarana Penunjang Berhasil Dihapus!',
                'alert-type' => 'success'
            );
        return redirect()->route('Prasarana.index')
                        ->with($notification);
    }

       // excel rk dosen tetap
    public function download_excel_rk_dosen(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $rk_dosen_tetap=DB::table('ruang_kerja_dosen_tetap')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                            ->join('daftar_ruang_kerja', 'id_ruang_kerja_dosen', '=', 'id_ruang_kerja')
                                                            ->where('id_departemen', $id_departemen)
                                                            ->OrderBy('ruang_kerja_dosen', 'desc')
                                                            ->get();
        $jmlh_ruang=DB::table('ruang_kerja_dosen_tetap')->where('id_departemen', $id_departemen)
                                                        ->sum('jumlah_ruang');
        $jmlh_luas=DB::table('ruang_kerja_dosen_tetap')->where('id_departemen', $id_departemen)
                                                        ->sum('jumlah_luas');

    Excel::create('RK Dosen Tetap', function($excel) use($rk_dosen_tetap, $jmlh_luas, $jmlh_ruang){
        $excel->sheet('RK Dosen Tetap', function($sheet) use($rk_dosen_tetap, $jmlh_luas, $jmlh_ruang){
          $sheet->setSize('A1', 48, 18);
          $sheet->setSize('B1', 25, 18);
          $sheet->setSize('C1', 25, 18);
          $sheet->cells('A3:E4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:E8', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
          $sheet->cells('A9:E9', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
            $sheet->loadView('Prasarana/Excel_RK_Dosen_Tetap')->with("rk_dosen_tetap", $rk_dosen_tetap)->with("jmlh_ruang", $jmlh_ruang)->with("jmlh_luas", $jmlh_luas);
        });
     })->export('xlsx');
   }

      // excel excel prasarana
    public function download_excel_prasarana_ps(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $prasarana_ps=PrasaranaPS::join('departemen', 'id_dept', '=', 'id_departemen')
                                   ->join('kepemilikan_prasarana_ps', 'id_kepemilikan', '=', 'id_kepemilikan_pras')
                                   ->join('kondisi_prasarana_ps', 'id_kondisi', '=', 'id_kondisi_pras')
                                   ->where('id_departemen', $id_departemen)
                                   ->OrderBy('jenis_prasarana_ps', 'asc')
                                   ->get();
        $milik=KepemilikanPras::get();
        $kondisi=KondisiPras::get();
        // dd($prasarana_ps);
    Excel::create('Data Prasarana', function($excel) use($prasarana_ps, $milik, $kondisi){
        $excel->sheet('Data Prasarana', function($sheet) use($prasarana_ps, $milik, $kondisi){
          $sheet->setSize('A1', 10, 18);
          $sheet->setSize('B1', 35, 18);
          $sheet->setSize('C1', 20, 18);
          $sheet->setSize('D1', 25, 18);
          $sheet->setSize('E1', 10, 18);
          $sheet->setSize('F1', 10, 18);
          $sheet->setSize('G1', 15, 18);
          $sheet->setSize('H1', 15, 18);
          $sheet->setSize('I1', 28, 18);
          $sheet->cells('A3:I4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:I22', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
            $sheet->loadView('Prasarana/Excel_Prasarana')->with("prasarana_ps", $prasarana_ps)->with("milik", $milik)->with("kondisi", $kondisi);
        });
     })->export('xlsx');
   }

   // excel excel prasarana penunjang
    public function download_excel_prasarana_penunjang(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $penunjang_ps=PrasPenunjang::join('departemen', 'id_dept', '=', 'id_departemen')
                                   ->join('kepemilikan_prasarana_ps', 'id_kepemilikan', '=', 'id_kepemilikan_penunjang')
                                   ->join('kondisi_prasarana_ps', 'id_kondisi', '=', 'id_kondisi_penunjang')
                                   ->where('id_departemen', $id_departemen)
                                   ->OrderBy('jenis_penunjang_ps', 'asc')
                                   ->get();
        $milik=KepemilikanPras::get();
        $kondisi=KondisiPras::get();
        // dd($prasarana_ps);
    Excel::create('Data Prasarana Penunjang', function($excel) use($penunjang_ps, $milik, $kondisi){
        $excel->sheet('Data Prasarana Penunjang', function($sheet) use($penunjang_ps, $milik, $kondisi){
          $sheet->setSize('A1', 10, 18);
          $sheet->setSize('B1', 35, 18);
          $sheet->setSize('C1', 15, 18);
          $sheet->setSize('D1', 20, 18);
          $sheet->setSize('E1', 10, 18);
          $sheet->setSize('F1', 10, 18);
          $sheet->setSize('G1', 15, 18);
          $sheet->setSize('H1', 15, 18);
          $sheet->setSize('I1', 28, 18);
          $sheet->cells('A3:I4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:I22', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
            $sheet->loadView('Prasarana/Excel_Prasarana_Penunjang')->with("penunjang_ps", $penunjang_ps)->with("milik", $milik)->with("kondisi", $kondisi);
        });
     })->export('xlsx');
   }

   //download pdf user
    public function download_pdf_rk_dosen_tetap(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $rk_dosen_tetap=DB::table('ruang_kerja_dosen_tetap')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                            ->join('daftar_ruang_kerja', 'id_ruang_kerja_dosen', '=', 'id_ruang_kerja')
                                                            ->where('id_departemen', $id_departemen)
                                                            ->OrderBy('ruang_kerja_dosen', 'desc')
                                                            ->get();
        $jmlh_ruang=DB::table('ruang_kerja_dosen_tetap')->where('id_departemen', $id_departemen)
                                                        ->sum('jumlah_ruang');
        $jmlh_luas=DB::table('ruang_kerja_dosen_tetap')->where('id_departemen', $id_departemen)
                                                        ->sum('jumlah_luas');

        $pdf = PDF::loadView('Prasarana/Pdf_RK_Dosen_Tetap', compact('rk_dosen_tetap', 'jmlh_luas', 'jmlh_ruang', 'dept'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('RK Dosen Tetap '.$dept[0]->nama_departemen.'.pdf', array('Attachment'=>1));
    }

    //download pdf prasarana
    public function download_pdf_prasarana_ps(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $prasarana_ps=PrasaranaPS::join('departemen', 'id_dept', '=', 'id_departemen')
                                   ->join('kepemilikan_prasarana_ps', 'id_kepemilikan', '=', 'id_kepemilikan_pras')
                                   ->join('kondisi_prasarana_ps', 'id_kondisi', '=', 'id_kondisi_pras')
                                   ->where('id_departemen', $id_departemen)
                                   ->OrderBy('jenis_prasarana_ps', 'asc')
                                   ->get();
        $milik=KepemilikanPras::get();
        $kondisi=KondisiPras::get();

        $pdf = PDF::loadView('Prasarana/Pdf_Prasarana_Ps', compact('prasarana_ps', 'milik', 'kondisi', 'dept'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Data Prasarana '.$dept[0]->nama_departemen.'.pdf', array('Attachment'=>1));
    }

     //download pdf prasarana
    public function download_pdf_prasarana_penunjang(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $penunjang_ps=DB::table('prasarana_penunjang_ps')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->join('kepemilikan_prasarana_ps', 'id_kepemilikan', '=', 'id_kepemilikan_penunjang')
                                                ->join('kondisi_prasarana_ps', 'id_kondisi', '=', 'id_kondisi_penunjang')
                                                ->where('id_departemen', $id_departemen)
                                                ->OrderBy('jenis_penunjang_ps', 'asc')
                                                ->get();
        $milik=KepemilikanPras::get();
        $kondisi=KondisiPras::get();

        $pdf = PDF::loadView('Prasarana/Pdf_Prasarana_Penunjang', compact('penunjang_ps', 'milik', 'kondisi', 'dept'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Data Prasarana '.$dept[0]->nama_departemen.'.pdf', array('Attachment'=>1));
    }
}
