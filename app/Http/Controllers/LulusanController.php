<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lulusan;
use App\RedaksiLulusan;
use App\User;
use App\Departemen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use Illuminate\Validation\Rule;

class LulusanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        if(Auth::user()->id_departemen==10)
        {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $lulusans = Lulusan::whereBetween('tahun_lulus', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->orderBy('nim','asc')
                        ->get();  
            $ratabulan=DB::table('lulusans')->avg('total_bulan');
            $ratatahun=DB::table('lulusans')->avg('total_tahun');
            $rataipk=DB::table('lulusans')->avg('ipk');        
        }
        else
        {
            // $tgl=Carbon::now()->format('d F Y');
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $lulusans = Lulusan::whereBetween('tahun_lulus', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('nim','asc')
                        ->get();
        $ratabulan=DB::table('lulusans')->join('departemen', 'id_dept', '=', 'id_departemen')
                                    ->where('id_departemen', $id_departemen)->avg('total_bulan');
        $ratatahun=DB::table('lulusans')->join('departemen', 'id_dept', '=', 'id_departemen')
                                    ->where('id_departemen', $id_departemen)->avg('total_tahun');
        $rataipk=DB::table('lulusans')->join('departemen', 'id_dept', '=', 'id_departemen')
                                    ->where('id_departemen', $id_departemen)->avg('ipk');
        }

        // nampilin data 3 TA terakhir
        $dateS = Carbon::now()->startOfYear()->subYear(2)->subMonth(4);
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $lastdate=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                             ->join('departemen', 'id_dept', '=', 'id_departemen')
                             ->select(DB::raw('avg(total_bulan) as total, avg(total_tahun) as totalthn, avg(ipk) as rataipk2, id_departemen, nama_departemen'))
                             ->groupBy('id_departemen')
                             ->groupBy('nama_departemen')
                             ->get();

        $rata_bln=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('total_bulan');

        $rata_thn=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('total_tahun');
        
        $rata_ipk=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('ipk');

         $thn1 = Carbon::now()->startOfYear()->subYear(2)->format('Y');
         $thn4 = Carbon::now()->startOfYear()->subYear(3)->format('Y');
         $thn2 = Carbon::now()->startOfYear()->subYear(1)->format('Y');
         $thn3 = Carbon::now()->startOfYear()->format('Y');
        
        $listdept=DB::table('departemen')
                    ->get();
         $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
         $redaksiLulusan = RedaksiLulusan::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_lulusan', 'id_redaksiLus', 'id_departemen')
                        ->get();
        //dd($idDept);
     // dd($lastdate);
                    // dd($tgl);
        return view('lulusan/index',compact('lulusans','ratabulan','ratatahun','rataipk', 'listdept', 'beda','ratabulan2', 'lastdate','thn1','thn2','thn3','rata_bln','rata_thn','rata_ipk','thn4','dept', 'redaksiLulusan'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
            request()->validate([
            'nama' => 'required',
            'nim' => 'required|unique:lulusans',
            'judul_skripsi' => 'required|unique:lulusans',
            'no_ijazah' => 'required|unique:lulusans',
            // 'pembimbing1' =>'required',
            // 'pembimbing2' =>'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'total_bulan' => 'required',
            'total_tahun' => 'required',
            'ipk' => 'required|numeric|between:0.00,4.00',
        ]);

        $lulusans=new Lulusan;
        $lulusans->nama = $request->nama;
        $lulusans->nim = $request->nim;
        $lulusans->judul_skripsi = $request->judul_skripsi;
        $lulusans->pembimbing1 = $request->pembimbing1;
        $lulusans->pembimbing2 = $request->pembimbing2;
        $lulusans->no_ijazah = $request->no_ijazah;
        $lulusans->tahun_masuk = date("Y-m-d", strtotime(str_replace('-', '/', $request['tahun_masuk'])));
        $lulusans->tahun_lulus = date("Y-m-d", strtotime(str_replace('-', '/', $request['tahun_lulus'])));
        $lulusans->total_bulan = $request->total_bulan;
        $lulusans->total_tahun = $request->total_tahun;
        $lulusans->ipk = $request->ipk;
        $lulusans->id_departemen= $request->user()->id_departemen;

        $lulusans->save();
        // dd($lulusans->tahun_lulus);
        // return var_dump($lulusans);
        return redirect()->route('lulusan.index')
                        ->with('success','Lulusan created successfully');
    
    }

    public function edit($id_lulusan)
    {
        return view('lulusan/index',compact('lulusan'));
    }
    
    public function update(Request $request, $member)
    {
        $lulusan = Lulusan::find($member);
        request()->validate([
            'nama' => 'required',
            'nim' => 'required', 
            'judul_skripsi' => 'required', 
            'no_ijazah' => 'required',
            // 'pembimbing1' =>'required',
            // 'pembimbing2' =>'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'total_bulan' => 'required',
            'total_tahun' => 'required',
            'ipk' => 'required',
        ]);

        
        $lulusan->update($request->all());
        return redirect()->route('lulusan.index')
                        ->with('success','Kelulusan updated successfully');
    }

    public function destroy($id_lulusan)
    {
        Lulusan::destroy($id_lulusan);
        return redirect()->route('lulusan.index')
                        ->with('success','Kelulusan deleted successfully');
    }

    public function LulusanImport(Request $request){
    if($request->hasFile('import_file')){ 
    $path = $request->file('import_file')->getRealPath();
    $data = Excel::load($path, function($reader) {})->get();
    if(!empty($data) && $data->count()){
        foreach ($data as $key => $value) {
            $insert[] = ['nama' => $value->nama, 'nim' => $value->nim, 'judul_skripsi'=>$value->judul_skripsi, 'pembimbing1'=>$value->pembimbing1, 'pembimbing2'=>$value->pembimbing2, 'no_ijazah'=>$value->no_ijazah, 'tahun_masuk' => $value->tahun_masuk, 'tahun_lulus' => $value->tahun_lulus, 'total_bulan' =>$value->total_bulan, 'total_tahun' =>$value->total_tahun, 'ipk' =>$value->ipk, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('lulusans')->insert($insert);       
                }
            }
        }
        return redirect()->route('lulusan.index')
                        ->with('success','Import Kelulusan successfully');
    }

    public function cari(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
         $cariLulusan = $request->idDept;
        if($cariLulusan==10)
        {
            $lulusans = DB::table('lulusans')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->get();

            $ratabulan=DB::table('lulusans')->avg('total_bulan');
            $ratatahun=DB::table('lulusans')->avg('total_tahun');
            $rataipk=DB::table('lulusans')->avg('ipk');

        }
        else
        {
            $lulusans = DB::table('lulusans')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $cariLulusan)
                            ->get();

            $ratabulan=DB::table('lulusans')
                        ->where('id_departemen', $cariLulusan)
                        ->avg('total_bulan');
            $ratatahun=DB::table('lulusans')
                            ->where('id_departemen', $cariLulusan)
                            ->avg('total_tahun');
            $rataipk=DB::table('lulusans')
                        ->where('id_departemen', $cariLulusan)
                        ->avg('ipk');
        }
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $listdept=DB::table('departemen')
                    ->get();
        // nampilin data 3 tahun terakhir
        $dateS = Carbon::now()->startOfYear()->subYear(2)->subMonth(4);
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $lastdate=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                             ->select(DB::raw('avg(total_bulan) as total, avg(total_tahun) as totalthn, avg(ipk) as rataipk2, id_departemen, nama_departemen'))
                             ->groupBy('id_departemen')
                             ->groupBy('nama_departemen')
                             ->get();

        $rata_bln=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('total_bulan');

        $rata_thn=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('total_tahun');
        
        $rata_ipk=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('ipk');

         $thn1 = Carbon::now()->startOfYear()->subYear(2)->format('Y');
         $thn2 = Carbon::now()->startOfYear()->subYear(1)->format('Y');
         $thn3 = Carbon::now()->startOfYear()->format('Y');
         $thn4 = Carbon::now()->startOfYear()->subYear(3)->format('Y');

        return view('lulusan/index',compact('lulusans','ratabulan','ratatahun','rataipk', 'listdept', 'ratabulan2','lastdate','thn1','thn2','thn3', 'thn4','rata_bln', 'rata_thn','rata_ipk','dept'));

    }

    // pdf admin
    public function downloadlulusan(Request $request)
    {
        $dateS = Carbon::now()->startOfYear()->subYear(2)->subMonth(4);
        $dateE = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $lulusans=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                             ->select(DB::raw('avg(total_bulan) as total, avg(total_tahun) as totalthn, avg(ipk) as rataipk2, id_departemen, nama_departemen'))
                             ->groupBy('id_departemen')
                             ->groupBy('nama_departemen')
                             ->get();

        $rata_bln=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('total_bulan');

        $rata_thn=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('total_tahun');
        
        $rata_ipk=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->avg('ipk');
        $pdf = PDF::loadView('lulusan.pdfm', compact('lulusans','rata_bln','rata_thn','rata_ipk'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
    }  

    public function excellulusan()
    {
        $lulusans = DB::table('lulusans')->get();

        $lulData = "";

        if(count($lulusans) >0 ){
            $lulData .= '<table>
           <tr>
            <th colspan="1" align=left valign=top><font face="Times New Rowman" style="font-size:16px">Tabel 3.2</font></th>
             <td colspan="4" style="text-align: left"><font face="Times New Rowman" style="font-size:16px">Rata-rata Masa Studi dan IPK lulusan menurut Program Studi periode TA '.Carbon::now()->startOfYear()->subYear(3)->format('Y').'/'.Carbon::now()->startOfYear()->subYear(2)->format('Y').', '.Carbon::now()->startOfYear()->subYear(2)->format('Y').'/'.Carbon::now()->startOfYear()->subYear(1)->format('Y').' dan '.Carbon::now()->startOfYear()->subYear(1)->format('Y').'/'.Carbon::now()->startOfYear()->subYear(0)->format('Y').'</font></td>
           </tr>
            <tr>
            <th></th>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Times New Rowman" style="font-size:16px">Program Studi</font></th>
            <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Times New Rowman" style="font-size:16px">MASA STUDI</font></th>
            <th rowspan="2" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Times New Rowman" style="font-size:16px">Rata-rata IPK <br> Lulusan</font></th>
            </tr>
            <tr>
            <th></th>
            <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Times New Rowman" style="font-size:16px">(Bulan)</font></th>
            <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Times New Rowman" style="font-size:16px">(Tahun)</font></th>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G1 PS1-STATISTIKA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->avg('total_bulan'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->avg('total_tahun'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->avg('ipk'),2).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G2 PS2-METEOROLOGI TERAPAN</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->avg('total_bulan'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->avg('total_tahun'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->avg('ipk'),2).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G3 PS3-BIOLOGI</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->avg('total_bulan'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->avg('total_tahun'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->avg('ipk'),2).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G4 PS4-KIMIA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->avg('total_bulan'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->avg('total_tahun'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->avg('ipk'),2).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G5 PS5-MATEMATIKA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->avg('total_bulan'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->avg('total_tahun'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->avg('ipk'),2).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G6 PS6-ILMU KOMPUTER</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->avg('total_bulan'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->avg('total_tahun'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->avg('ipk'),2).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G7 PS7-FISIKA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->avg('total_bulan'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->avg('total_tahun'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->avg('ipk'),2).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G8 PS8-BIOKIMIA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->avg('total_bulan'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->avg('total_tahun'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->avg('ipk'),2).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:16px"><font face="Times New Rowman">G9 PS9-AKTUARIA</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->avg('total_bulan'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->avg('total_tahun'),2).'</font></p></td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:16px"><font face="Times New Rowman">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->avg('ipk'),2).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=right><font face="Times New Rowman" style="font-size:16px">RATA-RATA FMIPA</font></th>
            <th colspan="1" align="center" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=center><font face="Times New Rowman" style="font-size:16px">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->avg('total_bulan'),2).'</font></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=center><font face="Times New Rowman" style="font-size:16px">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->avg('total_tahun'),2).'</font></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Times New Rowman" style="font-size:16px">'.number_format(DB::table('lulusans')->whereBetween('tahun_lulus', [Carbon::now()->startOfYear()->subYear(2)->subMonth(4),Carbon::now()->startOfYear()->addYear(1)->subMonth(4)])->join('departemen', 'id_dept', '=', 'id_departemen')->avg('ipk'),2).'</font></th>
            </tr>
            <tr>
            <th></th>
            <td><p style="font-size:12px"><font face="Times New Rowman"><u>Catatan:</u> * Belum ada lulusan</font></p></td>
            </tr>';
        

            $lulData .='</table>';
        }

        header('Content-Type: application/vnd.vnd.ms-excel');
        header('Content-Disposition: attachment; filename=Rata-rata Masa Studi dan IPK Lulusan FMIPA.xls');
        echo $lulData;
    }


    // excel user
       public function lulusanExport(Request $request)
       {
        $id_departemen = Auth::user()->id_departemen;
        $lulusans = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
        $dateS = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $dateE = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $min4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $jum_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();
        $min_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();

        //TS-3
        $dateS1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $dateE1 = Carbon::now()->startOfYear()->subYear(2)->subMonth(4);
        $min3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $jum_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();
        $min_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();

        //TS-2
        $dateS12 = Carbon::now()->startOfYear()->subYear(2)->subMonth(4);
        $dateE12 = Carbon::now()->startOfYear()->subYear(1)->subMonth(4);
        $min2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $jum_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();
        $min_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();

        //TS-1
        $dateS13 = Carbon::now()->startOfYear()->subYear(1)->subMonth(4);
        $dateE13 = Carbon::now()->startOfYear()->subYear(0)->subMonth(4);
        $min1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $min11=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();
        $total_jml_ts1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();

        //TS
        $dateS14 = Carbon::now()->startOfYear()->subYear(0)->subMonth(4);
        $dateE14 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $min0=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg0=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max0=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $mints=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengahts=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $maxts=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>', '3.50')
                            ->count();
        $total_jml=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();

        $ts = Carbon::now()->startOfYear()->subYear(4)->subMonth(4)->format('Y');
        $ts1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4)->format('Y');
        $ts2 = Carbon::now()->startOfYear()->subYear(2)->subMonth(4)->format('Y');
        $ts3 = Carbon::now()->startOfYear()->subYear(1)->subMonth(4)->format('Y');
        $ts4 = Carbon::now()->startOfYear()->subYear(0)->subMonth(4)->format('Y');
        $ts5 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4)->format('Y');

        $lusData = "";
 

       if(count($lulusans) >0 ){
            $lusData .= '<table>
            
            <h4> Tabel 3.2 Rata-rata IPK Lulusan Program Studi '.$lulusans[0]->nama_departemen.' Tahun Ajaran '.$ts.'/'.$ts1.' hingga '.$ts4.'/'.$ts5.'</h4>
            <tr>             
            <th width="80px" rowspan="3" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >Tahun Akademik</font></th>
            <th width="150px" colspan="3" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >IPK Lulusan Reguler</font></th>
           <th width="150px" colspan="3" rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >Persentase Lulusan Reguler dengan IPK:</font></th>
            <th></th>
                </tr>
                <tr><th></th></tr>
                <tr>
                  <th width="50px" style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >Min</th>
                  <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >Rat</th>
                  <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >Max</th>
                  <th width="50px" style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman"> &lt; 2,57 </th>
                  <th width="50px" style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" > 2,75 - 3,50 </th>
                  <th width="50px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" > > 3,50 </th>
                  <th></th>
                </tr>
                <tr>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">TS -4</font></td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($min4,2).'</font></td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($avg4,2).'</font></td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($max4,2).'</font></td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($min_ts4/$jum_ts4)*100,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($tengah_ts4/$jum_ts4)*100,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($max_ts4/$jum_ts4)*100,2).'</td>
                    <td></td>
                   </tr>
                   <tr>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">TS -3</font></td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($min3,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($avg3,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($max3,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($min_ts3/$jum_ts3)*100,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($tengah_ts3/$jum_ts3)*100,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($max_ts3/$jum_ts3)*100,2).'</td>
                    <td></td>
                   </tr>
                   <tr>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">TS -2</font></td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($min2,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($avg2,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($max2,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($min_ts2/$jum_ts2)*100,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($tengah_ts2/$jum_ts2)*100,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($max_ts2/$jum_ts2)*100,2).'</td>
                    <td></td>
                   </tr>
                   <tr>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">TS -1</font></td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($min1,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'. number_format($avg1,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($max1,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($min11/$total_jml_ts1)*100,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($tengah_ts1/$total_jml_ts1)*100,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($max_ts1/$total_jml_ts1)*100,2).'</td>
                    <td></td>
                   </tr>
                   <tr>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">TS</font></td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($min0,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($avg0,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format($max0,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($mints/$total_jml)*100,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($tengahts/$total_jml)*100,2).'</td>
                   <td align="center" style="border:1px solid #000; border-width: thin;><font face="Times New Rowman">'.number_format(($maxts/$total_jml)*100,2).'</td>
                    <td></td>                    
                  </tr>
                  <tr>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >Rata-rata</th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >'.number_format(($min4+$min3+$min2+$min1+$min0)/5,2).'</th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >'.number_format(($avg4+$avg3+$avg2+$avg1+$avg0)/5,2).'</th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >'.number_format(($max4+$max3+$max2+$max1+$max0)/5,2).'</th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >'.number_format(((($mints/$total_jml)*100)+(($min11/$total_jml_ts1)*100)+(($min_ts2/$jum_ts2)*100)+(($min_ts3/$jum_ts3)*100)+(($min_ts4/$jum_ts4)*100))/5,2).'</th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >'.number_format((((($tengahts/$total_jml)*100)+($tengah_ts1/$total_jml_ts1)*100)+(($tengah_ts2/$jum_ts2)*100)+(($tengah_ts3/$jum_ts3)*100)+(($tengah_ts4/$jum_ts4)*100))/5,2).'</th>
                  <th style="border:1px solid #000; border-top:0px; border-width: thin; background-color:#daeef3;text-align: center;" style="text-align: center;"><font face="Times New Rowman" >'.number_format(((($maxts/$total_jml)*100)+(($max_ts1/$total_jml_ts1)*100)+(($max_ts2/$jum_ts2)*100)+(($max_ts3/$jum_ts3)*100)+(($max_ts4/$jum_ts4)*100))/5,2).'</th>
                  <th></th>
                  </tr>';
        }
        header('Content-Type: application/vnd.vnd.ms-excel');
        header('Content-Disposition: attachment; filename=Data Kelulusan Mahasiswa '.$lulusans[0]->nama_departemen.'.xls');
        echo $lusData;
}

// pdf user
public function lulusanDownload(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $lulusan = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
        $redaksiLulusan = RedaksiLulusan::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_lulusan', 'id_redaksiLus', 'id_departemen')
                        ->get();
        //TS-4
        $dateS = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $dateE = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $min4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $jum_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();
        $min_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts4=Lulusan::whereBetween('tahun_lulus', [$dateS,$dateE])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();

        //TS-3
        $dateS1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $dateE1 = Carbon::now()->startOfYear()->subYear(2)->subMonth(4);
        $min3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $jum_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();
        $min_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts3=Lulusan::whereBetween('tahun_lulus', [$dateS1,$dateE1])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();

        //TS-2
        $dateS12 = Carbon::now()->startOfYear()->subYear(2)->subMonth(4);
        $dateE12 = Carbon::now()->startOfYear()->subYear(1)->subMonth(4);
        $min2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $jum_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();
        $min_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts2=Lulusan::whereBetween('tahun_lulus', [$dateS12,$dateE12])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();
        //TS-1
        $dateS13 = Carbon::now()->startOfYear()->subYear(1)->subMonth(4);
        $dateE13 = Carbon::now()->startOfYear()->subYear(0)->subMonth(4);
        $min1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $min11=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengah_ts1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $max_ts1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>','3.50')
                            ->count();
        $total_jml_ts1=Lulusan::whereBetween('tahun_lulus', [$dateS13,$dateE13])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();

        //TS
        $dateS14 = Carbon::now()->startOfYear()->subYear(0)->subMonth(4);
        $dateE14 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $min0=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->min('ipk');
        $avg0=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->avg('ipk');
        $max0=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->max('ipk');
        $mints=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk', '<', '2.75')
                            ->count();
        $tengahts=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->whereBetween('ipk', [2.75, 3.50])
                            ->count();
        $maxts=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('ipk','>', '3.50')
                            ->count();
        $total_jml=Lulusan::whereBetween('tahun_lulus', [$dateS14,$dateE14])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count();

        $ts = Carbon::now()->startOfYear()->subYear(4)->subMonth(4)->format('Y');
        $ts1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4)->format('Y');
        $ts2 = Carbon::now()->startOfYear()->subYear(2)->subMonth(4)->format('Y');
        $ts3 = Carbon::now()->startOfYear()->subYear(1)->subMonth(4)->format('Y');
        $ts4 = Carbon::now()->startOfYear()->subYear(0)->subMonth(4)->format('Y');
        $ts5 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4)->format('Y');
        // dd($min11);
       // dd($ts1);
       //  dd($persenmaxts);
        // dd($rata_min_ts);
        // dd($lulusan);
        // var_dump($rata_min);
        $pdf = PDF::loadView('lulusan/pdf', compact('lulusan', 'min0', 'min1','min2','min3','min4','avg0', 'avg1','avg2','avg3','avg4','max0', 'max1','max2','max3','max4','rata_min','rata_avg','rata_max','ts','ts1','ts2','ts3','ts4','ts5','rata_min_ts','mints','min11','min_ts2','min_ts3','min_ts4','tengahts','tengah_ts1','tengah_ts2','tengah_ts3','tengah_ts4','maxts','max_ts1','max_ts2','max_ts3','max_ts4','total_jml','total_jml_ts1','jum_ts2','jum_ts3','jum_ts4', 'redaksiLulusan'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
    }
}

