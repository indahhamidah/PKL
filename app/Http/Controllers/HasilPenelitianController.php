<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HasilPenelitian;
use App\Tingkat;
use App\LampiranHasilPen;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class HasilPenelitianController extends Controller
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
            $hasil_penelitian = HasilPenelitian::whereBetween('tahun_publikasi',[$date1,$date2])
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                              ->orderBy('tahun_publikasi', 'desc')
                              ->get();
            $na = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_tingkat', 1)
                    ->count();
            $nb = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_tingkat', 2)
                    ->count();
            $nc = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                    ->where('id_tingkat', 3)
                    ->count();
            $totaljudul=DB::table('hasil_penelitian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->count('judul_hasilPenelitian');
            $lampiran_hasilPen = DB::table('lampiran_hasilPen')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->select('lampiran_hasilPen.*', 'departemen.*')
                              ->get();
            
            // $penelitians = Penelitian::get();

           
        }
        else
        {
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
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
            $lampiran_hasilPen = DB::table('lampiran_hasilPen')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('lampiran_hasilPen.*', 'departemen.*')
                              ->get();
  
        }
            $ts = date("Y");
            $ts = (int) $ts;
            $ts1 = $ts-1;
            $ts2 = $ts-2;
            $tingkat = Tingkat::get();
            $listdept=DB::table('departemen')
                    ->get();

            return view('HasilPenelitian/index',compact('hasil_penelitian','dept', 'listdept', 'na', 'nb', 'nc', 'totaljudul', 'tingkat', 'ts1', 'ts2', 'ts', 'lampiran_hasilPen'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        request()->validate([
            'judul_hasilPenelitian' => 'required',
            'nama_dosenPenelitian'  => 'required',
            'dipublikasi_pada'      => 'required',
            'tahun_publikasi'       => 'required',
        ]);


        $id_departemen = $request->user()->id_departemen;
        $hasil_penelitian = DB::table('hasil_penelitian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->where('judul_hasilPenelitian', $request->judul_hasilPenelitian)
                        ->where('nama_dosenPenelitian', $request->nama_dosenPenelitian)
                        ->first();

        if($hasil_penelitian==null){
        $hasil_penelitian=new HasilPenelitian;
        $hasil_penelitian->judul_hasilPenelitian = $request->judul_hasilPenelitian;
        $hasil_penelitian->nama_dosenPenelitian  = $request->nama_dosenPenelitian;
        $hasil_penelitian->dipublikasi_pada      = $request->dipublikasi_pada;
        $hasil_penelitian->tahun_publikasi       = $request->tahun_publikasi;
        $hasil_penelitian->id_tingkat            = $request->id_tingkat;
        if(Auth::user()->id_departemen==10){
            $hasil_penelitian->id_departemen     =$request->id_departemen;
        }
        else{
            $hasil_penelitian->id_departemen     = $request->user()->id_departemen;
        }

        $hasil_penelitian->save();
        return redirect()->route('standar9hasilpenelitian.index')
                        ->with('message2','Data berhasil ditambahkan');
                    }else{
                     return redirect()->route('standar9hasilpenelitian.index')
                        ->with('message','Data yang ditambahkan sudah ada');  
                    }
                            
    }
    public function edit($id_pengabdian)
    {
        // dd($member);
        return view('HasilPenelitian/index',compact('HasilPenelitian'));
    }
    public function update(Request $request, $member)
    {
        request()->validate([
        	'judul_hasilPenelitian' => 'required',
            'nama_dosenPenelitian'  => 'required',
            'dipublikasi_pada'      => 'required',
            'tahun_publikasi'       => 'required',
            ]);

        $id_departemen = $request->user()->id_departemen;
        $hasil_penelitian = DB::table('hasil_penelitian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->where('judul_hasilPenelitian', $request->judul_hasilPenelitian)
                        ->where('nama_dosenPenelitian', $request->nama_dosenPenelitian)
                        ->where('dipublikasi_pada', $request->dipublikasi_pada)
                        ->where('tahun_publikasi', $request->tahun_publikasi)
                        ->where('id_tingkat', $request->id_tingkat)
                        ->first();

        if($hasil_penelitian==null){
        $hasil_penelitian = HasilPenelitian::find($member);
        $hasil_penelitian->judul_hasilPenelitian = $request->judul_hasilPenelitian;
        $hasil_penelitian->nama_dosenPenelitian  = $request->nama_dosenPenelitian;
        $hasil_penelitian->dipublikasi_pada      = $request->dipublikasi_pada;
        $hasil_penelitian->tahun_publikasi       = $request->tahun_publikasi;
        $hasil_penelitian->id_tingkat            = $request->id_tingkat;
        if(Auth::user()->id_departemen==10){
            $hasil_penelitian->id_departemen     =$request->id_departemen;
        }
        else{
            $hasil_penelitian->id_departemen     = $request->user()->id_departemen;
        }

        $hasil_penelitian->save();
        return redirect()->route('standar9hasilpenelitian.index')
                        ->with('message2','Data berhasil diubah');
                    }else{
                    return redirect()->route('standar9hasilpenelitian.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali');    
                    }
                            
    }
 public function destroy($id_hasilPenelitian)
    {
        HasilPenelitian::destroy($id_hasilPenelitian);
        return redirect()->route('standar9hasilpenelitian.index')
                        ->with('message2','Data berhasil dihapus');
    }

    public function hasilPenelitianImport(Request $request){
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['judul_hasilpenelitian' => $value->judul_hasilpenelitian, 
                              'nama_dosenpenelitian'  => $value->nama_dosenpenelitian, 
                              'dipublikasi_pada'      => $value->dipublikasi_pada, 
                              'tahun_publikasi'       => $value->tahun_publikasi, 
                              'id_tingkat'            => $value->id_tingkat, 
                              'id_departemen'         => $request->user()->id_departemen];
                              
                }
                if(!empty($arr)){
                    \DB::table('hasil_penelitian')->insert($arr);
                   
                }
            }
        }
          return redirect()->back() ->with('message2','Data berhasil diunggah');
    }

    public function hasilPenelitianExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $hapeni = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $hasil_penelitian = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_publikasi')
                        ->get();
            $tingkat=Tingkat::get();
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
        Excel::create('Hasil Penelitian dan Pengabdian', function($excel) use($id_departemen, $hapeni, $date1, $date2, $hasil_penelitian, $tingkat, $na, $nb, $nc, $totaljudul){
        $excel->sheet('Hasil Penelitian dan Pengabdian', function($sheet) use($id_departemen, $hapeni, $date1, $date2, $hasil_penelitian, $tingkat, $na, $nb, $nc, $totaljudul){
          $sheet->setSize('A1', 10, 30);
          $sheet->setSize('B1', 80, 30);
          $sheet->setSize('C1', 45, 30);
          $sheet->setSize('D1', 80, 30);
          $sheet->setSize('E1', 20, 30);
          $sheet->setSize('F1', 20, 30);
          $sheet->setSize('G1', 20, 30);
          $sheet->setSize('H1', 20, 30);
          $sheet->loadView('HasilPenelitian/excel')->with("hapeni", $hapeni)->with("date1", $date1)->with("date2", $date2)->with("hasil_penelitian", $hasil_penelitian)->with("tingkat", $tingkat)->with("na", $na)->with("nb", $nb)->with("nc", $nc)->with("totaljudul", $totaljudul);
        });
     })->export('xlsx');

    }

    public function excelhasilpenelitian()
    {
        $hasil_penelitian = DB::table('hasil_penelitian')->get();
        $ts = date("Y");
        $ts = (int) $ts;
        $ts1 = $ts-1;
        $ts2 = $ts-2;

        $haspeneData = "";

        if(count($hasil_penelitian) >0 ){
            $haspeneData .= '<table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" style="font-size:14px">Tabel 9.1</font></th>
             <td colspan="4" style="text-align: left"><font face="Arial" style="font-size:14px">Jumlah hasil pendidikan FMIPA IPB selama tiga tahun terakhir</font></td>
            <tr>
            <th></th>
            <th rowspan="4" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >No.</font></th>
            <th rowspan="4" colspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Nama Program Studi</font></th>
            <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Jumlah Hasil Penelitian dan Hasil Pengabdian</font></th>
          </tr>
          <tr>
              <tr>
            <th></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS-2<br> '.($ts2).' </font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS-1<br> '.($ts1).'</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS<br> '.($ts).'</font></th>
            </tr></tr>
            tr>
            <th></th>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">1</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS STK</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_hasilPenelitian')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">2</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS GFM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_hasilPenelitian')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">3</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS BIO</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_hasilPenelitian')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">4</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS KIM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_hasilPenelitian')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">5</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS MAT</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_hasilPenelitian')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">6</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS KOM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_hasilPenelitian')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">7</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS FIS</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_hasilPenelitian')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">8</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS BIOKIM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_hasilPenelitian')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">9</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS AUK</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_hasilPenelitian')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="3" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">Total</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_hasilPenelitian')).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_hasilPenelitian')).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('hasil_penelitian')->whereBetween('tahun_publikasi', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_hasilPenelitian')).'</font></p></td>
            </tr>
             ';

            $haspeneData .='</table>';
        }

        header('Content-Type: application/vnd.vnd.ms-excel');
        header('Content-Disposition: attachment; filename=Jumlah Hasil Penelitian dan Hasil Pengabdian FMIPA IPB selama tiga tahun terakhir FMIPA.xls');
        echo $haspeneData;
    }

     public function hasilPenelitianDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $hapene = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
         $date1 = Carbon::now()->startOfYear()->subYear(2);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
         $hasil_penelitian = HasilPenelitian::whereBetween('tahun_publikasi', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkat_hasil', 'id_tingkatt', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_publikasi')
                        ->get();
        $totaljudul=DB::table('hasil_penelitian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->count('judul_hasilPenelitian');
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
        $tingkat=Tingkat::get();
        $pdf = PDF::loadView('hasilPenelitian.pdf', compact('hasil_penelitian','hapene', 'tingkat', 'totaljudul', 'na', 'nb', 'nc'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function downloadhasilpenelitian(Request $request)
    {
       $id_departemen = Auth::user()->id_departemen;
        $hapeni = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
         $date1 = Carbon::now()->startOfYear()->subYear(2);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
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
        $pdf = PDF::loadView('HasilPenelitian.pdfm', compact('hasil_penelitian', 'ts2', 'ts1', 'ts', 'hepeni'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function hasilPenUpload(Request $request){

    
        $this->validate($request, [

        'lampiranPen'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


      $lampiran_hasilPen = new LampiranHasilPen;
      $lampiran_hasilPen->lampiranPen          = $request->lampiranPen;
      if(Auth::user()->id_departemen==10){
        $lampiran_hasilPen->id_departemen  = $request->id_departemen;
      }
      else{
        $lampiran_hasilPen->id_departemen  = $request->user()->id_departemen;
      }
        $lampiran_hasilPen->id_hasilPenelitian = $request->id_hasilPenelitian;



        if ($request->hasFile('lampiranPen')){
            $imageTempName   = $request->file('lampiranPen')->getPathname();
            $imageName       = $request->file('lampiranPen')->getClientOriginalName();
            $path            = base_path() . '/public/upload/lampiranPen/';
            $request       ->file('lampiranPen')->move($path, $imageName);
            $lampiran_hasilPen->lampiranPen = ''.$imageName;
            }
           
            $lampiran_hasilPen ->save();
            
            $hasil_penelitian = HasilPenelitian::where('id_hasilPenelitian', $lampiran_hasilPen->id_hasilPenelitian)->first();
            $hasil_penelitian ->id_lampiranPen1 = $lampiran_hasilPen->id_lampiranPen;
               
            $hasil_penelitian->save();
             return redirect()->route('standar9hasilpenelitian.index')
                              ->with('message2','Data berhasil diunggah'); 
     }

      public function downloadLampiranPen($id_lampiranPen){
        $lampiran_hasilPen = LampiranHasilPen::where('id_lampiranPen', '=', $id_lampiranPen)->select('lampiranPen')->get();
        $filePath = public_path().'/upload/lampiranPen/'.$lampiran_hasilPen[0]['lampiranPen'];
        return response()->download($filePath);
    }
   
}