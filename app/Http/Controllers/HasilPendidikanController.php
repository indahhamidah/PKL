<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HasilPendidikan;
use App\Haki;
use App\LampiranHasil;
use App\JenisHasil;
use App\User;
use App\HasilPenelitian;
use App\Tingkat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class HasilPendidikanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        if(Auth::User()->id_departemen==10)
        {
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $hasil_pendidikan = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->join('perolehanhaki', 'id_perolehanHaki', '=', 'id_haki')
                              ->join('jenis_hasilPendidikan', 'id_jenisHasil', '=', 'id_jenisHasilPendidikan')
                              ->get();
            $na = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_haki', 1)
                    ->count();
            $nb = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_haki', 2)
                    ->count();
            $totaljudul=DB::table('hasil_pendidikan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->count('judul_hasilpendidikan');
            $totaljenis=DB::table('hasil_pendidikan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jenis_hasilPendidikan', 'id_jenisHasil', '=', 'id_jenisHasilPendidikan')
                        ->count('id_jenisHasilPendidikan');
            $lampiran_hasil = DB::table('lampiran_hasil')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('lampiran_hasil.*', 'departemen.*')
                              ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $hasil_penelitian = HasilPenelitian::whereBetween('tahun_publikasi',[$date1,$date2])
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                              ->orderBy('tahun_publikasi', 'desc')
                              ->get();
            $na1 = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_tingkat', 1)
                    ->count();
            $nb1 = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_tingkat', 2)
                    ->count();
            $nc = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_tingkat', 3)
                    ->count();
            $totaljudul1=DB::table('hasil_penelitian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->count('judul_hasilPenelitian');

            // $penelitians = Penelitian::get();

           
        }
        else
        {
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $hasil_pendidikan = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                                ->join('perolehanhaki', 'id_perolehanHaki', '=', 'id_haki')
                                ->join('jenis_hasilPendidikan', 'id_jenisHasil', '=', 'id_jenisHasilPendidikan')
                                ->where('id_departemen', $id_departemen)
                                ->get();
            $na = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_haki', 1)
                    ->count();
           $nb = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_haki', 2)
                    ->count();
            $totaljudul=DB::table('hasil_pendidikan')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_hasilpendidikan');
            $totaljenis=DB::table('hasil_pendidikan')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jenis_hasilPendidikan', 'id_jenisHasil', '=', 'id_jenisHasilPendidikan')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_jenisHasilPendidikan');
            $lampiran_hasil = DB::table('lampiran_hasil')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('lampiran_hasil.*', 'departemen.*')
                              ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $hasil_penelitian = HasilPenelitian::whereBetween('tahun_publikasi',[$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                            ->where('id_departemen', $id_departemen)
                            ->get();
            $na1 = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 1)
                    ->count();
            $nb1 = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 2)
                    ->count();
            $nc = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 3)
                    ->count();
            $totaljudul1=DB::table('hasil_penelitian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->count('judul_hasilPenelitian');

         
        }
            $ts = date("Y");
            $ts = (int) $ts;
            $ts1 = $ts-1;
            $ts2 = $ts-2;
        $haki = Haki::get();
        $jenisHasil = JenisHasil::get();
        $tingkat = Tingkat::get();

        $listdept=DB::table('departemen')
                    ->get();

            return view('HasilPendidikan/index',compact('hasil_pendidikan','dept', 'listdept', 'totaldana', 'totaljudul', 'lampiran_hasil', 'haki', 'na', 'nb', 'totaljenis', 'ts2', 'ts1', 'ts', 'jenisHasil', 'hasil_penelitian', 'na1', 'nb1', 'nc', 'totaljudul1', 'tingkat'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        request()->validate([
            'id_jenisHasilPendidikan'=> 'required',
            'judul_hasilPendidikan' => 'required',
            'nama_dosen'            => 'required',
            'tahun_hasil'           => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
        $hasil_pendidikan = DB::table('hasil_pendidikan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id_jenisHasilPendidikan', $request->id_jenisHasilPendidikan)
                        ->where('judul_hasilPendidikan', $request->judul_hasilPendidikan)
                        ->where('nama_dosen', $request->nama_dosen)
                        ->first();

        if($hasil_pendidikan==null){
        $hasil_pendidikan=new HasilPendidikan;
        $hasil_pendidikan->id_jenisHasilPendidikan= $request->id_jenisHasilPendidikan;
        $hasil_pendidikan->judul_hasilPendidikan = $request->judul_hasilPendidikan;
        $hasil_pendidikan->nama_dosen            = $request->nama_dosen;
        $hasil_pendidikan->id_haki               = $request->id_haki;
        $hasil_pendidikan->tahun_hasil           = $request->tahun_hasil;
        if(Auth::user()->id_departemen==10){
            $hasil_pendidikan->id_departemen     =$request->id_departemen;
        }
        else{
            $hasil_pendidikan->id_departemen     = $request->user()->id_departemen;
        }

        $hasil_pendidikan->save();
        return redirect()->route('standar9hasilpendidikan.index')
                         ->with('message2','Data berhasil ditambahkan');
                     }else{
                    return redirect()->route('standar9hasilpendidikan.index')
                         ->with('message','Data yang ditambahkan sudah ada'); 
                     }
                            
    }
    public function edit($id_hasilPendidikan)
    {
        // dd($member);
        return view('HasilPendidikan/index',compact('HasilPendidikan'));
    }
    
    public function update(Request $request, $member)
    {

        request()->validate([
        	'id_jenisHasilPendidikan'           => 'required',
            'judul_hasilPendidikan' => 'required',
            'nama_dosen'            => 'required',
            'id_haki'            => 'required',
            'tahun_hasil'           => 'required',
            ]);

        $id_departemen = $request->user()->id_departemen;
        $hasil_pendidikan = DB::table('hasil_pendidikan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id_jenisHasilPendidikan', $request->id_jenisHasilPendidikan)
                        ->where('judul_hasilPendidikan', $request->judul_hasilPendidikan)
                        ->where('nama_dosen', $request->nama_dosen)
                        ->where('id_haki', $request->id_haki)
                        ->where('tahun_hasil', $request->tahun_hasil)
                        ->first();

        if($hasil_pendidikan==null){
        $hasil_pendidikan = HasilPendidikan::find($member);
        $hasil_pendidikan->id_jenisHasilPendidikan= $request->id_jenisHasilPendidikan;
        $hasil_pendidikan->judul_hasilPendidikan = $request->judul_hasilPendidikan;
        $hasil_pendidikan->nama_dosen            = $request->nama_dosen;
        $hasil_pendidikan->id_haki               = $request->id_haki;
        $hasil_pendidikan->tahun_hasil           = $request->tahun_hasil;
        if(Auth::user()->id_departemen==10){
            $hasil_pendidikan->id_departemen     =$request->id_departemen;
        }
        else{
            $hasil_pendidikan->id_departemen     = $request->user()->id_departemen;
        }
       // dd($hasil_pendidikan);
        $hasil_pendidikan->save();
        return redirect()->route('standar9hasilpendidikan.index')
                         ->with('message2','Data berhasil diubah');
                     }else{
                     return redirect()->route('standar9hasilpendidikan.index')
                         ->with('message','Data yang diubah sudah ada. Silakan periksa kembali');   
                     }
                            
    }
    
 public function destroy($id_hasilPendidikan)
    {
        HasilPendidikan::destroy($id_hasilPendidikan);
        return redirect()->route('standar9hasilpendidikan.index')
                         ->with('message2','Data berhasil dihapus');
    }

   public function hasilPendidikanImport(Request $request){
       if($request->hasFile('data')){ 
        $path = $request->file('data')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['id_jenishasilpendidikan'=> $value->id_jenishasilpendidikan,  
                                 'judul_hasilpendidikan' => $value->judul_hasilpendidikan,
                                 'nama_dosen'            => $value->nama_dosen, 
                                 'id_haki'               => $value->id_haki, 
                                 'tahun_hasil'           => $value->tahun_hasil, 
                                 'id_departemen'         => $request->user()->id_departemen];
                                
                }
               if(!empty($insert)){
                    DB::table('hasil_pendidikan')->insert($insert);
                    
                }
            }
        }
        
         return redirect()->back() ->with('message2','Data berhasil diunggah');
    }

    public function hasilPendidikanExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $hapen = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $hasil_pendidikan = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('perolehanhaki', 'id_perolehanHaki', '=', 'id_haki')
                        ->join('jenis_hasilPendidikan', 'id_jenisHasil', '=', 'id_jenisHasilPendidikan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_hasil')
                        ->get();
            $na = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_haki', 1)
                    ->count();
            $nb = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_haki', 2)
                    ->count();
            $totaljudul=DB::table('hasil_pendidikan')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_hasilpendidikan');
            $totaljenis=DB::table('hasil_pendidikan')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_jenisHasilPendidikan');
            $haki=Haki::get();
        Excel::create('Hasil Pendidikan', function($excel) use($id_departemen, $hapen, $date1, $date2, $hasil_pendidikan, $haki, $na, $nb, $totaljenis, $totaljudul){
        $excel->sheet('Hasil Pendidikan', function($sheet) use($id_departemen, $hapen, $date1, $date2, $hasil_pendidikan, $haki, $na, $nb, $totaljenis, $totaljudul){
          $sheet->setSize('A1', 15, 18);
          $sheet->setSize('B1', 40, 18);
          
          $sheet->loadView('HasilPendidikan/excel')->with("hapen", $hapen)->with("date1", $date1)->with("date2", $date2)->with("hasil_pendidikan", $hasil_pendidikan)->with("haki", $haki)->with("na", $na)->with("nb", $nb)->with("totaljudul", $totaljudul)->with("totaljenis", $totaljenis);
        });

     })->export('xlsx');
 
    }

    public function excelhasilpendidikan()
    {
        $hasil_pendidikan = DB::table('hasil_pendidikan')->get();
        $ts = date("Y");
        $ts = (int) $ts;
        $ts1 = $ts-1;
        $ts2 = $ts-2;

        $haspenData = "";

        if(count($hasil_pendidikan) >0 ){
            $haspenData .= '<table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" style="font-size:14px">Tabel 9.1</font></th>
             <td colspan="4" style="text-align: left"><font face="Arial" style="font-size:14px">Jumlah hasil pendidikan FMIPA IPB selama tiga tahun terakhir</font></td>
            <tr>
            <th></th>
            <th rowspan="4" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >No.</font></th>
            <th rowspan="4" colspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Nama Program Studi</font></th>
            <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Jumlah Jenis Hasil Pendidikan</font></th>
            <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Jumlah Judul Hasil Pendidikan</font></th>
          </tr>
          <tr>
              <tr>
            <th></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS-2<br> '.($ts2).' </font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS-1<br> '.($ts1).'</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS<br> '.($ts).'</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS-2<br> '.($ts2).' </font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS-1<br> '.($ts1).'</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS<br> '.($ts).'</font></th>
            </tr></tr>
            <tr>
            <th></th>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">1</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS STK</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPendidikan')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">2</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS GFM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPendidikan')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">3</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS BIO</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('id_jenisHasilPendidikan')).'</font></p></td>
             <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPendidikan')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">4</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS KIM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('id_jenisHasilPendidikan')).'</font></p></td>
             <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPendidikan')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">5</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS MAT</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('id_jenisHasilPendidikan')).'</font></p></td>
             <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPendidikan')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">6</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS KOM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('id_jenisHasilPendidikan')).'</font></p></td>
             <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPendidikan')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">7</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS FIS</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('id_jenisHasilPendidikan')).'</font></p></td>
             <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPendidikan')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">8</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS BIOKIM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('id_jenisHasilPendidikan')).'</font></p></td>
             <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPendidikan')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">9</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS AUK</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('id_jenisHasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('id_jenisHasilPendidikan')).'</font></p></td>
             <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPendidikan')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPendidikan')).'</font></p></td>
            </tr>
           
            <tr>
            <th></th>
            <td colspan="3" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">Total</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('id_jenisHasilPendidikan')).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('id_jenisHasilPendidikan')).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('id_jenisHasilPendidikan')).'</font></p></td>

            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_hasilPendidikan')).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_hasilPendidikan')).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_pendidikan')->whereBetween('tahun_hasil', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_hasilPendidikan')).'</font></p></td>
            </tr></tr>


            ';

            $haspenData .='</table>';
        }

        header('Content-Type: application/vnd.vnd.ms-excel');
        header('Content-Disposition: attachment; filename=Jumlah Hasil Pendidikan FMIPA IPB selama tiga tahun terakhir FMIPA.xls');
        echo $haspenData;
    }

    public function hasilPendidikanDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $hapen = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
         $date1 = Carbon::now()->startOfYear()->subYear(2);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
         $hasil_pendidikan = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('perolehanhaki', 'id_perolehanHaki', '=', 'id_haki')
                        ->join('jenis_hasilPendidikan', 'id_jenisHasil', '=', 'id_jenisHasilPendidikan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_hasil')
                        ->get();
        $haki=Haki::get();
        $na = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_haki', 1)
                    ->count();
        $nb = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_haki', 2)
                    ->count();
        $totaljudul=DB::table('hasil_pendidikan')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_hasilpendidikan');
        $totaljenis=DB::table('hasil_pendidikan')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_jenisHasilPendidikan');
        $pdf = PDF::loadView('hasilPendidikan.pdf', compact('hasil_pendidikan','hapen', 'haki', 'na', 'nb', 'totaljudul', 'totaljenis'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function downloadhasilpendidikan(Request $request)
    {
       $id_departemen = $request->user()->id_departemen;
       $hasil_pendidikan = DB::table('hasil_pendidikan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        //TS-2
        $date1 = Carbon::now()->startOfYear()->subYear(2);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $tothal=HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_jenisHasilPendidikan');
        
        $ts = date("Y");
        $ts = (int) $ts;
        $ts1 = $ts-1;
        $ts2 = $ts-2;
        $pdf = PDF::loadView('HasilPendidikan.pdfm', compact('hasil_pendidikan', 'tothal', 'ts2', 'ts1', 'ts'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }


    public function lampiranUpload(Request $request){

        $this->validate($request, [

        'lampiran'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


      $lampiran_hasil = new LampiranHasil;
      $lampiran_hasil->lampiran             = $request->lampiran;
      if(Auth::user()->id_departemen==10){
        $lampiran_hasil->id_departemen  = $request->id_departemen;
      }
      else{
        $lampiran_hasil->id_departemen  = $request->user()->id_departemen;
      }
      $lampiran_hasil->id_hasilPendidikan   = $request->id_hasilPendidikan;

   

        if ($request->hasFile('lampiran')){
            $imageTempName   = $request->file('lampiran')->getPathname();
            $imageName       = $request->file('lampiran')->getClientOriginalName();
            $path            = base_path() . '/public/upload/LampiranHasilPend/';
            $request       ->file('lampiran')->move($path, $imageName);
            $lampiran_hasil->lampiran = ''.$imageName;
   
                }
            $lampiran_hasil ->save();
            
            $hasil_pendidikan = HasilPendidikan::where('id_hasilPendidikan', $lampiran_hasil->id_hasilPendidikan)->first();
            $hasil_pendidikan ->id_lampiran = $lampiran_hasil->id_lampiran;
            
            $hasil_pendidikan->save();
             return redirect()->route('standar9hasilpendidikan.index')
                              ->with('message2','Data berhasil diunggah'); 
     }

      public function downloadLampiran($id_lampiran){
        $lampiran_hasil = LampiranHasil::where('id_lampiran', '=', $id_lampiran)->select('lampiran')->get();
        $filePath = public_path().'/upload/LampiranHasilPend/'.$lampiran_hasil[0]['lampiran'];
        return response()->download($filePath);
    }

public function Standar9DepartemenDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $hapen = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
         $date1 = Carbon::now()->startOfYear()->subYear(2);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
         $hasil_pendidikan = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('perolehanhaki', 'id_perolehanHaki', '=', 'id_haki')
                        ->join('jenis_hasilPendidikan', 'id_jenisHasil', '=', 'id_jenisHasilPendidikan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_hasil')
                        ->get();
        $haki=Haki::get();
        $na = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_haki', 1)
                    ->count();
        $nb = HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_haki', 2)
                    ->count();
        $totaljudul=DB::table('hasil_pendidikan')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_hasilpendidikan');
        $totaljenis=DB::table('hasil_pendidikan')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_jenisHasilPendidikan');
         $hasil_penelitian = HasilPenelitian::whereBetween('tahun_publikasi',[$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                            ->where('id_departemen', $id_departemen)
                            ->get();
            $na1 = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 1)
                    ->count();
            $nb1 = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 2)
                    ->count();
            $nc = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_departemen', $id_departemen)
                    ->where('id_tingkat', 3)
                    ->count();
            $totaljudul1=DB::table('hasil_penelitian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->count('judul_hasilPenelitian');
        $tingkat=Tingkat::get();
        $pdf = PDF::loadView('hasilPendidikan.standar9departemen', compact('hasil_pendidikan','hapen', 'haki', 'na', 'nb', 'totaljudul', 'totaljenis', 'hasil_penelitian', 'na1', 'nb1', 'nc', 'totaljudul1', 'tingkat'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function Standar9FakultasDownload(Request $request)
    {
       $id_departemen = $request->user()->id_departemen;
       $hasil_pendidikan = DB::table('hasil_pendidikan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        //TS-2
        $date1 = Carbon::now()->startOfYear()->subYear(2);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $tothal=HasilPendidikan::whereBetween('tahun_hasil', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_jenisHasilPendidikan');
        $hasil_penelitian = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_publikasi')
                        ->get();
        
        $ts = date("Y");
        $ts = (int) $ts;
        $ts1 = $ts-1;
        $ts2 = $ts-2;
        $pdf = PDF::loadView('HasilPendidikan.standar9fakultas', compact('hasil_pendidikan', 'tothal', 'ts2', 'ts1', 'ts', 'hasil_penelitian'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }


}
