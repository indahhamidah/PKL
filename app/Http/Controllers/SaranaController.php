<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\Sarana;
use App\SumberPustakaLain;
use App\PustakaRuangBaca;
use App\JenisPustaka;
use App\JurnalProsidingSeminar;
use App\JenisJPSeminar;
use App\PeralatanUtamaLab;
use App\KepemilikanPras;
use App\KondisiPras;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Excel;
use PDF;
use Carbon\Carbon;

class SaranaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $sumber_pustaka_lain = SumberPustakaLain::join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->where('id_departemen', $id_departemen)
                                                ->get();

        $pustaka =DB::table('pustaka_di_ruang_baca_dept')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->join('jenis_pustaka_ruang_baca_dept', 'id_jenis_pustaka_', '=', 'id_jenis_pustaka')
                                                ->where('id_departemen', $id_departemen)
                                                ->get();
        $jenis_pustaka= JenisPustaka::get();
        $jum1= PustakaRuangBaca::where('id_departemen', $id_departemen)
                                ->sum('jumlah_judul');
        $jum2= PustakaRuangBaca::where('id_departemen', $id_departemen)
                                ->sum('jumlah_copy');

        $dateS = Carbon::now()->startOfYear()->subYear(2);
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $jp_seminar=DB::table('jurnal_prosiding_seminar')->whereBetween('rinci_tahun', [$dateS,$dateE])
                                                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                                                        ->join('jenis_jurnal_prosiding_seminar', 'id_j_p_seminar', '=', 'id_jenis_jp')
                                                        ->where('id_departemen', $id_departemen)
                                                        ->orderBy('jenis_jp_seminar', 'asc')
                                                        ->orderBy('rinci_tahun', 'asc')
                                                        ->get();
        // dd($jenis_pustaka);
        $alat_lab=PeralatanUtamaLab::join('departemen', 'id_dept', '=', 'id_departemen')
                                  ->join('kepemilikan_prasarana_ps', 'id_kepemilikan', '=', 'id_kepemilikan_alat')
                                  ->join('kondisi_prasarana_ps', 'id_kondisi', '=', 'id_kondisi_alat')
                                  ->where('id_departemen', $id_departemen)
                                  ->get();

        $milik=KepemilikanPras::get();
        $kondisi=KondisiPras::get();
        // dd($dateE);
		return view('Sarana/sarana', compact('dept', 'sumber_pustaka_lain', 'pustaka', 'jenis_pustaka', 'jp_seminar', 'alat_lab', 'milik', 'kondisi', 'jum1', 'jum2'));    	
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
        request()->validate([
            'nama_sumber_pustaka_lain' => 'required',
        ]);

        $sumber_pustaka_lain=new SumberPustakaLain;
        $sumber_pustaka_lain ->nama_sumber_pustaka_lain = $request->nama_sumber_pustaka_lain;
        $sumber_pustaka_lain->id_departemen= $request->user()->id_departemen;
         
        $sumber_pustaka_lain->save();
        $notification = array(
                'message' => 'Data Sumber Pustaka Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana.store')
                        ->with($notification);
    	 
    }

    public function storee_2 (Request $request)
    {
        request()->validate([
            'nama_jurnal' => 'required',
            'rinci_no' => 'required',
            'rinci_tahun' => 'required',
            'jumlah' => 'required',
            'penerbit'=>'required',
        ]);

        $jp_seminar = new JurnalProsidingSeminar;
        $jp_seminar ->id_jenis_jp=$request->id_jenis_jp;
        $jp_seminar ->nama_jurnal = $request->nama_jurnal;
        $jp_seminar ->rinci_no = $request->rinci_no;
        $jp_seminar ->rinci_tahun = $request->rinci_tahun;
        $jp_seminar ->jumlah=$request->jumlah;
        $jp_seminar ->penerbit=$request->penerbit;
        $jp_seminar->id_departemen= $request->user()->id_departemen;
         
        $jp_seminar->save();
        // dd($jp_seminar);
        $notification = array(
                'message' => 'Data Jurnal/Prosiding Seminar Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana.index')
                        ->with($notification);
         
    }

    public function store_3 (Request $request)
    {
        request()->validate([
            'nama_lab' => 'required',
            'jenis_alat_utama' => 'required',
            'jumlah_unit_alat' => 'required',
            'rata_waktu' => 'required',
            'harga_satuan'=> 'required',
            'jumlah_harga'=> 'required',
            'tanggal_beli'=> 'required',
        ]);

        $alat_lab=new PeralatanUtamaLab;
        $alat_lab ->nama_lab = $request->nama_lab;
        $alat_lab ->jenis_alat_utama = $request->jenis_alat_utama;
        $alat_lab ->jumlah_unit_alat = $request->jumlah_unit_alat;
        $alat_lab ->id_kepemilikan_alat = $request->id_kepemilikan_alat;
        $alat_lab ->id_kondisi_alat = $request->id_kondisi_alat;
        $alat_lab ->rata_waktu = $request->rata_waktu;
        $alat_lab ->harga_satuan = $request->harga_satuan;
        $alat_lab ->jumlah_harga = $request->jumlah_harga;
        $alat_lab ->tanggal_beli = $request->tanggal_beli;
        $alat_lab ->id_departemen= $request->user()->id_departemen;
         
        $alat_lab->save();
        $notification = array(
                'message' => 'Peralatan Utama Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana.index')
                        ->with($notification);
         
    }

    public function update (Request $request, $member)
    {
        request()->validate([
            'nama_sumber_pustaka_lain' => 'required',
        ]);

        $sumber_pustaka_lain=SumberPustakaLain::find($member);
        $sumber_pustaka_lain ->nama_sumber_pustaka_lain = $request->nama_sumber_pustaka_lain;
        $sumber_pustaka_lain->id_departemen= $request->user()->id_departemen;
         
        $sumber_pustaka_lain->save();
        $notification = array(
                'message' => 'Data Sumber Pustaka Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana.index')
                        ->with($notification);
         
    }

    public function update_2 (Request $request)
    {
        $user = auth()->user();
        // dd($request);
        // $akses_data= AksesibilitasData::find($member);
        $pustaka_ruang_baca= PustakaRuangBaca::where("id_departemen", $user->id_departemen)->get();
        foreach ($pustaka_ruang_baca as $key => $data) {
            $pustaka = PustakaRuangBaca::where("id_pustaka_ruang_baca", $data->id_pustaka_ruang_baca)->first();
            $pustaka->id_jenis_pustaka=$request->{'jenis_pustaka_'.$data->id_jenis_pustaka};
            $pustaka ->jumlah_judul = $request->{'jumlah_judul_'.$data->id_jenis_pustaka};
            $pustaka ->jumlah_copy = $request->{'jumlah_copy_'.$data->id_jenis_pustaka};
            $pustaka->save();
        }
        $notification = array(
                'message' => 'Data Pustaka di Ruang Baca Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana.index')
                        ->with($notification);
         
    }

    public function updatee_3 (Request $request, $member)
    {
            $jp_seminar=JurnalProsidingSeminar::find($member);
            $jp_seminar->id_jenis_jp=$request->id_jenis_jp;
            $jp_seminar ->nama_jurnal = $request->nama_jurnal;
            $jp_seminar ->rinci_no = $request->rinci_no;
            $jp_seminar ->rinci_tahun = $request->rinci_tahun;
            $jp_seminar ->jumlah=$request->jumlah;
            $jp_seminar ->penerbit=$request->penerbit;
            $jp_seminar ->id_departemen= $request->user()->id_departemen;
            $jp_seminar ->save();
            $notification = array(
                'message' => 'Data Jurnal/Prosiding Seminar Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana.index')
                        ->with($notification);
         
    }

    public function update_4 (Request $request, $member)
    {
        $alat_lab=PeralatanUtamaLab::find($member);
        $alat_lab ->nama_lab = $request->nama_lab;
        $alat_lab ->jenis_alat_utama = $request->jenis_alat_utama;
        $alat_lab ->jumlah_unit_alat = $request->jumlah_unit_alat;
        $alat_lab ->id_kepemilikan_alat = $request->id_kepemilikan_alat;
        $alat_lab ->id_kondisi_alat = $request->id_kondisi_alat;
        $alat_lab ->rata_waktu = $request->rata_waktu;
        $alat_lab ->harga_satuan = $request->harga_satuan;
        $alat_lab ->jumlah_harga = $request->jumlah_harga;
        $alat_lab ->tanggal_beli = $request->tanggal_beli;
        $alat_lab ->id_departemen= $request->user()->id_departemen;
         
        $alat_lab->save();
        $notification = array(
                'message' => 'Data Peralatan Utama di Lab Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana.index')
                        ->with($notification);
         
    }

    public function destroy($id_sumber_pustaka_lain)
    {
        SumberPustakaLain::destroy($id_sumber_pustaka_lain);
        $notification = array(
                'message' => 'Data Sumber Pustaka Berhasil Dihapus!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana.index')
                        ->with($notification);
    }

    public function destroy2($id_jp_seminar)
    {
        JurnalProsidingSeminar::destroy($id_jp_seminar);
        $notification = array(
                'message' => 'Data Jurnal/Prosiding Seminar Berhasil Dihapus!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana.index')
                        ->with($notification);
    }

    public function destroy3($id_alat_utama_lab)
    {
        PeralatanUtamaLab::destroy($id_alat_utama_lab);
        $notification = array(
                'message' => 'Data Peralatan Utama di Lab Berhasil Dihapus!',
                'alert-type' => 'success'
            );
        return redirect()->route('Sarana.index')
                        ->with($notification);
    }

      // excel pustaka
    public function download_excel_pustaka(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $pustaka =DB::table('pustaka_di_ruang_baca_dept')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->join('jenis_pustaka_ruang_baca_dept', 'id_jenis_pustaka_', '=', 'id_jenis_pustaka')
                                                ->where('id_departemen', $id_departemen)
                                                ->get();
        $jum1= PustakaRuangBaca::where('id_departemen', $id_departemen)
                                ->sum('jumlah_judul');
        $jum2= PustakaRuangBaca::where('id_departemen', $id_departemen)
                                ->sum('jumlah_copy');

     Excel::create('Pustaka Ruang Baca', function($excel) use($id_departemen, $dept, $pustaka, $jum1, $jum2){
        $excel->sheet('Pustaka Ruang Baca', function($sheet) use($id_departemen, $dept, $pustaka, $jum1, $jum2){
          $sheet->setSize('A1', 40, 18);
          $sheet->setSize('B1', 25, 18);
          $sheet->setSize('C2', 25, 18);
           $sheet->cells('A1:C4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:C8', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
           $sheet->cells('A13:C13', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
            $sheet->loadView('Sarana/Excel_Pustaka')->with("pustaka", $pustaka)->with("jum1", $jum1)->with("jum2", $jum2)->with("dept", $dept);
        });
     })->export('xlsx');
   }

    public function download_excel_sumber_pustaka(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $sumber_pustaka_lain = SumberPustakaLain::join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->where('id_departemen', $id_departemen)
                                                ->get();

     Excel::create('Sumber Pustaka Lain', function($excel) use($sumber_pustaka_lain){
        $excel->sheet('Sumber Pustaka Lain', function($sheet) use($sumber_pustaka_lain){
          $sheet->setSize('A1', 10, 18);
          $sheet->setSize('B1', 40, 18);
           $sheet->cells('A3:B4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:B50', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
            $sheet->loadView('Sarana/Excel_Sumber_Pustaka_Lain')->with("sumber_pustaka_lain", $sumber_pustaka_lain);
        });
     })->export('xlsx');
   }

       // excel jurnal pustaka
    public function download_excel_jp(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $dateS = Carbon::now()->startOfYear()->subYear(2);
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $dateS1 = Carbon::now()->startOfYear()->subYear(2)->format('Y');
        $dateE1 = Carbon::now()->startOfYear()->addYear(1)->subDays(1)->format('Y');
        $jp_seminar=DB::table('jurnal_prosiding_seminar')->whereBetween('rinci_tahun', [$dateS,$dateE])                                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                                                         ->join('jenis_jurnal_prosiding_seminar', 'id_j_p_seminar', '=', 'id_jenis_jp')
                                                         ->where('id_departemen', $id_departemen)
                                                         ->orderBy('jenis_jp_seminar', 'asc')
                                                         ->orderBy('rinci_tahun', 'asc')
                                                         ->get();

    Excel::create('Jurnal Prosiding Seminar', function($excel) use($id_departemen, $dept, $jp_seminar, $dateS1, $dateE1){
        $excel->sheet('Jurnal Prosiding Seminar', function($sheet) use($id_departemen, $dept, $jp_seminar, $dateS1, $dateE1){
          $sheet->setSize('A1', 30, 18);
          $sheet->setSize('B1', 40, 18);
          $sheet->setSize('C1', 35, 18);
          $sheet->setSize('D1', 18, 18);
           $sheet->cells('A3:D4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:D88', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
            $sheet->loadView('Sarana/Excel_Jurnal_Prosiding_Seminar')->with("jp_seminar", $jp_seminar)->with("dept", $dept)->with("dateS1", $dateS1)->with("dateE1", $dateE1);
        });
     })->export('xlsx');
   }

      // excel alat utama lab
    public function download_excel_alat_lab(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $alat_lab=PeralatanUtamaLab::join('departemen', 'id_dept', '=', 'id_departemen')
                                ->join('kepemilikan_prasarana_ps', 'id_kepemilikan', '=', 'id_kepemilikan_alat')
                                ->join('kondisi_prasarana_ps', 'id_kondisi', '=', 'id_kondisi_alat')
                                ->where('id_departemen', $id_departemen)
                                ->get();
        $milik=KepemilikanPras::get();
        $kondisi=KondisiPras::get();

    Excel::create('Peralatan Utama Lab', function($excel) use($alat_lab, $milik, $kondisi){
        $excel->sheet('Peralatan Utama Lab', function($sheet) use($alat_lab, $milik, $kondisi){
          $sheet->setSize('A1', 10, 18);
          $sheet->setSize('B1', 35, 18);
          $sheet->setSize('C1', 35, 18);
          $sheet->setSize('D1', 25, 18);
          $sheet->setSize('E1', 20, 18);
          $sheet->setSize('F1', 20, 18);
          $sheet->setSize('G1', 20, 18);
          $sheet->setSize('H1', 20, 18);
          $sheet->setSize('I1', 30, 18);
           $sheet->cells('A3:I4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:I88', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
            $sheet->loadView('Sarana/Excel_Alat_Lab')->with("alat_lab", $alat_lab)->with("milik", $milik)->with("kondisi", $kondisi);
        });
     })->export('xlsx');
   }

   // pdf jurnal pustaka
    public function download_pdf_jp(Request $request)
    {
         $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $dateS = Carbon::now()->startOfYear()->subYear(2);
        // dd($dateS);
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $dateS1 = Carbon::now()->startOfYear()->subYear(2)->format('Y');
        $dateE1 = Carbon::now()->startOfYear()->addYear(1)->subDays(1)->format('Y');
        $jp_seminar=JurnalProsidingSeminar::whereBetween('rinci_tahun', [$dateS,$dateE])
                                          ->join('departemen', 'id_dept', '=', 'id_departemen')
                                          ->join('jenis_jurnal_prosiding_seminar', 'id_j_p_seminar', '=', 'id_jenis_jp')
                                          ->where('id_departemen', $id_departemen)
                                          ->orderBy('jenis_jp_seminar', 'asc')
                                          ->orderBy('rinci_tahun', 'asc')
                                          ->get();
        // $jp_seminar=JurnalProsidingSeminar::whereBetween('rinci_tahun', [$dateS,$dateE])    
        //                                   ->where('id_departemen', $id_departemen)
        //                                   ->select('id_jenis_jp')
        //                                   ->orderBy('id_jenis_jp', 'asc')
        //                                   ->get();
        // foreach ($jp_seminar as $key1 => $jps) {
        //     $jpss=JurnalProsidingSeminar::where('id_jenis_jp', $jps->id_jenis_jp)
        //                                     ->select('nama_jurnal')
        //                                     ->groupBy('nama_jurnal')
        //                                     ->get();
        //     foreach ($jpss as $key2 => $jp) {
        //         $jen[$key1]=$jps->jenisJP->jenis_jp_seminar;
        //         $namajr[$key1][$key2]=$jp->nama_jurnal;
        //         // $rinci=JurnalProsidingSeminar::where('id_jenis_jp', $jps->id_jenis_jp)
        //         //                             ->where('nama_jurnal',$jp->nama_jurnal)
        //         //                             ->select('rinci_no')
        //         //                             ->groupBy('rinci_no')
        //         //                             ->get();
        //         $thn=JurnalProsidingSeminar::where('id_jenis_jp', $jps->id_jenis_jp)
        //                                     ->where('nama_jurnal',$jp->nama_jurnal)
        //                                     // ->where('rinci_no', $rinci)
        //                                     ->select('rinci_no','rinci_tahun', 'penerbit', 'jumlah')
        //                                     ->orderBy('rinci_no')
        //                                     ->orderBy('rinci_tahun')
        //                                     ->orderBy('penerbit')
        //                                     ->orderBy('jumlah')
        //                                     ->get();
        //     }
        // // dd($jen,$namajr,$thn,$jp_seminar,$jpss);
        // }
        // dd($jp_seminar);
    $pdf = PDF::loadView('Sarana/Pdf_Jurnal_Prosiding_Seminar', compact('dateE1', 'dateS1', 'jp_seminar',  'dept', 'jpss', 'jen', 'namajr', 'thn'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Jurnal Prosiding Seminar '.$dept[0]->nama_departemen.'.pdf', array('Attachment'=>1));
   }

   // pdf sumber pustaka lain
    public function download_pdf_sumber_pustaka(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $sumber_pustaka_lain = SumberPustakaLain::join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->where('id_departemen', $id_departemen)
                                                ->get();
    $pdf = PDF::loadView('Sarana/Pdf_Sumber_Pustaka_Lain', compact('sumber_pustaka_lain', 'dept'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Sumber Pustaka di Lembaga lain pada '.$dept[0]->nama_departemen.'.pdf', array('Attachment'=>1));
   }

   // pdf alat lab
    public function download_pdf_alat_lab(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $alat_lab=DB::table('alat_utama_lab_ps')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->join('kepemilikan_prasarana_ps', 'id_kepemilikan', '=', 'id_kepemilikan_alat')
                                                ->join('kondisi_prasarana_ps', 'id_kondisi', '=', 'id_kondisi_alat')
                                                ->where('id_departemen', $id_departemen)
                                                ->get();
        $milik=KepemilikanPras::get();
        $kondisi=KondisiPras::get();
        
        $pdf = PDF::loadView('Sarana/Pdf_Alat_Lab', compact('alat_lab', 'milik', 'kondisi', 'dept'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Alat Utama di Lab '.$dept[0]->nama_departemen.'.pdf', array('Attachment'=>1));
   }

   // pdf pustaka di ruang baca
    public function download_pdf_pustaka_baca(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $pustaka =DB::table('pustaka_di_ruang_baca_dept')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                ->join('jenis_pustaka_ruang_baca_dept', 'id_jenis_pustaka_', '=', 'id_jenis_pustaka')
                                                ->where('id_departemen', $id_departemen)
                                                ->get();
        $jenis_pustaka= JenisPustaka::get();
        $jum1= PustakaRuangBaca::where('id_departemen', $id_departemen)
                                ->sum('jumlah_judul');
        $jum2= PustakaRuangBaca::where('id_departemen', $id_departemen)
                                ->sum('jumlah_copy');
        
        $pdf = PDF::loadView('Sarana/Pdf_Pustaka', compact('dept','pustaka', 'jenis_pustaka', 'jum2', 'jum1'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Pustaka di Ruang Baca '.$dept[0]->nama_departemen.'.pdf', array('Attachment'=>1));
   }
}
