<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penelitian;
use App\SumberDana;
use App\Bukti;
use App\Proposal;
use App\User;
use App\RedaksiPenelitian;
use App\MahasiswaTerlibat;
use App\TerlibatPenelitian;
use App\RedaksiPenelitianFmipa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class PenelitianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $id_departemen = $request->user()->id_departemen;
        $id_bukti = $request->id_bukti;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        if(Auth::User()->id_departemen==10)
        {

            
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $penelitians = Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                         ->orderBy('tahun_penelitian', 'desc')
                         ->get();

            
            $ts = date("Y");
            $ts = (int) $ts;
            $ts1 = $ts-1;
            $ts2 = $ts-2;

            $totaldana=Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->sum('jumlah_dana');
            $totaljudul=Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->count('judul_penelitian');
            $bukti_penelitian = DB::table('bukti_penelitian')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->select('bukti_penelitian.*', 'departemen.*')
                              ->get();
            $proposal = DB::table('proposal')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->select('proposal.*', 'departemen.*')
                              ->get();
            $redaksipenelitian = RedaksiPenelitianFmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                                ->where('id_departemen', $id_departemen)
                                ->get();

                        
        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        
        // TS-2
        $totjudul1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('judul_penelitian');
        // TS-1
        $totjudul2=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('judul_penelitian');
        // TS
        $totjudul3=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('judul_penelitian');
        // TS-2
        $totbukti1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_bukti');
        // TS-1
        $totbukti2=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_bukti');
        // TS
        $totbukti3=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_bukti');
        // TS-2
        $totproposal1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_proposal');
        // TS-1
        $totproposal2=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_proposal');
        // TS
        $totproposal3=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_proposal');
        $redaksiPenelitianFmipa = RedaksiPenelitianFmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_penelitian_fmipa', 'id_redaksiPen', 'id_departemen')
                        ->get();
  
        }
        else
        {
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $penelitians = Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_penelitian', 'desc')
                            ->get(); 

                $totaldana=Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_dana');
                $totaljudul=Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_penelitian');
            $bukti_penelitian = DB::table('bukti_penelitian')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('bukti_penelitian.*', 'departemen.*')
                              ->get();
            $proposal = DB::table('proposal')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('proposal.*', 'departemen.*')
                              ->get();

        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        
        // TS-2
        $totjudul1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_penelitian');
        // TS-1
        $totjudul2=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_penelitian');
        // TS
        $totjudul3=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_penelitian');
        // TS-2
        $totbukti1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_bukti');
        // TS-1
        $totbukti2=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_bukti');
        // TS
        $totbukti3=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_bukti');
        // TS-2
        $totproposal1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_proposal');
        // TS-1
        $totproposal2=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_proposal');
        // TS
        $totproposal3=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_proposal');

            $ts = date("Y");
            $ts = (int) $ts;
            $ts1 = $ts-1;
            $ts2 = $ts-2;
        $terlibat_penelitian = TerlibatPenelitian::get();
            $redaksipenelitian = RedaksiPenelitian::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('mahasiswa_terlibat', 'id_terlibatpenelitian', '=', 'redaksi_penelitian')
                        ->where('id_departemen', $id_departemen)
                        ->get();
             $mahasiswa_penelitian = Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_penelitian', 'desc')
                            ->get();
            $totalM=Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_mahasiswa');
            
        }
            $SumberDana=SumberDana::get();
            
           
            $listdept=DB::table('departemen')
                    ->get();
// dd($penelitians);
            return view('penelitian/index',compact('penelitians','dept', 'listdept', 'totaldana', 'totaljudul', 'bukti_penelitian', 'ts2', 'ts1', 'ts', 'SumberDana', 'proposal', 'totjudul1', 'totjudul2', 'totjudul3', 'totbukti1', 'totbukti2', 'totbukti3', 'totproposal1', 'totproposal2', 'totproposal3', 'redaksipenelitian', 'terlibat_penelitian', 'redaksipenelitian', 'mahasiswa_penelitian', 'redaksiPenelitianFmipa', 'totalM'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        request()->validate([
            'judul_penelitian' => 'required',
            'nama_peneliti'    => 'required',
            'tahun_penelitian' => 'required',
            'jumlah_dana'      => 'required',
            'jenis_dana'       => 'required',
            'jumlah_mahasiswa' => 'required',
        ]);
        $id_departemen = $request->user()->id_departemen;
        $penelitians = DB::table('penelitians')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->where('id_departemen', $id_departemen)
                        ->where('judul_penelitian', $request->judul_penelitian)
                        ->where('nama_peneliti', $request->nama_peneliti)
                        ->first();

        if($penelitians==null){
        $penelitians=new Penelitian;
        $penelitians->judul_penelitian      = $request->judul_penelitian;
        $penelitians->nama_peneliti         = $request->nama_peneliti;
        $penelitians->tahun_penelitian      = $request->tahun_penelitian;
        $penelitians->jumlah_dana           = $request->jumlah_dana;
        $penelitians->id_sumberr            = $request->id_sumberr;
        $penelitians->jenis_dana            = $request->jenis_dana;
        $penelitians->jumlah_mahasiswa      = $request->jumlah_mahasiswa;
        if(Auth::user()->id_departemen==10){
            $penelitians->id_departemen         =$request->id_departemen;
        }
        else{
            $penelitians->id_departemen         = $request->user()->id_departemen;
        }
              
        $penelitians->save();
        return redirect()->route('standar7penelitian.index')
                         ->with('message2','Data berhasil ditambahkan');
                     }else{
                    return redirect()->route('standar7penelitian.index')
                         ->with('message','Data yang ditambahkan sudah ada');  
                     }
                            
    }

    public function edit($id_penelitian)
    {
        // dd($member);
        return view('penelitian/index',compact('penelitian'));
    }
    
    public function update(Request $request, $member)
    {
        
        request()->validate([
           'judul_penelitian'  => 'required',
            'nama_peneliti'    => 'required',
            'tahun_penelitian' => 'required',
            'jumlah_dana'      => 'required',
            'jenis_dana'       => 'required',
            'jumlah_mahasiswa' => 'required',
            
        ]);
        $id_departemen = $request->user()->id_departemen;
            $penelitians = DB::table('penelitians')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->where('id_departemen', $id_departemen)
                        ->where('judul_penelitian', $request->judul_penelitian)
                        ->where('nama_peneliti', $request->nama_peneliti)
                        ->where('tahun_penelitian', $request->tahun_penelitian)
                        ->where('jumlah_dana', $request->jumlah_dana)
                        ->where('id_sumberr', $request->id_sumberr)
                        ->where('jenis_dana', $request->jenis_dana)
                        ->where('jumlah_mahasiswa', $request->jumlah_mahasiswa)
                        ->first();

        if($penelitians==null){
        $penelitians = Penelitian::find($member);
        $penelitians->judul_penelitian       = $request->judul_penelitian;
        $penelitians->nama_peneliti          = $request->nama_peneliti;
        $penelitians->tahun_penelitian       = $request->tahun_penelitian;
        $penelitians->jumlah_dana            = $request->jumlah_dana;
        $penelitians->id_sumberr             = $request->id_sumberr;
        $penelitians->jenis_dana             = $request->jenis_dana;
        $penelitians->jumlah_mahasiswa      = $request->jumlah_mahasiswa;
        if(Auth::user()->id_departemen==10){
            $penelitians->id_departemen         =$request->id_departemen;
        }
        else{
            $penelitians->id_departemen         = $request->user()->id_departemen;
        }

        $penelitians->save();
        return redirect()->route('standar7penelitian.index')
                         ->with('message2','Data berhasil diubah');
                     }else{
                    return redirect()->route('standar7penelitian.index')
                         ->with('message','Data yang diubah sudah ada. Silakan periksa kembali');  
                     }
                        
          }       
    
    public function destroy($id_penelitian)
    {
        Penelitian::destroy($id_penelitian);

        return redirect()->route('standar7penelitian.index')
                         ->with('message2','Data berhasil dihapus');
    }

    public function penelitianImport(Request $request){
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = [ 'tahun_penelitian' => $value->tahun_penelitian, 
                               'judul_penelitian' => $value->judul_penelitian, 
                               'nama_peneliti' => $value->nama_peneliti, 
                               'id_sumberr' => $value->id_sumberr,
                               'jenis_dana' => $value->jenis_dana, 
                               'jumlah_dana' => $value->jumlah_dana,
                               'jumlah_mahasiswa'=>$value->jumlah_mahasiswa, 
                               'id_departemen' => $request->user()->id_departemen];
                }
                if(!empty($arr)){
                    \DB::table('penelitians')->insert($arr);
                   
                }
            }
        }
         // return redirect()->route('penelitian.index')->with('message2','Data berhasil diunggah');   
         return redirect()->back()
                          ->with('message2','Data berhasil diunggah'); 
    } 


    public function penelitianExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $pen = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $penelitians = Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_penelitian', 'decs')
                        ->get();
        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        $SumberDana=SumberDana::get();
        // TS-2
        $totaljudul1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
                        
        $totaljudul2=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul3=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul4=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul5=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        //TS-1
        $totaljudul6=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
                        
        $totaljudul7=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul8=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul9=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul10=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        // TS
        $totaljudul11=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
        $totaljudul12=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul13=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul14=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul15=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        //TS-2
        $totaldana1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana2=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana3=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana4=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana5=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana');
        //TS-1
        $totaldana6=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana7=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana8=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana9=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana10=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana');
        // TS
        $totaldana11=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana12=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana13=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana14=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana15=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana'); 

 
        $penData = "";
 
        if(count($penelitians) >0 ){
            $penData .= '
           <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">Tabel 7.1</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Data Penelitian Program Studi '.$pen[0]->nama_departemen.'</font></td>
           </tr>
           <tr>  
            <th></th>
            <th rowspan="2" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:13px"><font face="Arial" >Sumber Pembiayaan</font></p></th>
            <th colspan="3" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:13px"><font face="Arial" >Jumlah Judul Penelitian</font></p></th>
            <th colspan="3" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:13px"><font face="Arial" >Jumlah Dana Penelitian</font></p></th>
            <tr>
            <th></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:13px"><font face="Arial" >TS-2</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:13px"><font face="Arial" >TS-1</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:13px"><font face="Arial" >TS</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:13px"><font face="Arial" >TS-2</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:13px"><font face="Arial" >TS-1</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:13px"><font face="Arial" >TS</font></p></th>
            </tr>
        </tr>
        <tr>
        <th></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:13px"><font face="Arial" >1</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; "><p style="font-size:13px"><font face="Arial" >2</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; "><p style="font-size:13px"><font face="Arial" >3</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:13px"><font face="Arial" >4</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:13px"><font face="Arial" >5</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; "><p style="font-size:13px"><font face="Arial" >6</font></p></th>
            <th style="border:1px solid #000;text-align: center; border-width: thin; "><p style="font-size:13px"><font face="Arial" >7</font></p></th>
        </tr>
        <tr>
        <th></th>
        <td style="border:1px solid #000;border-width: thin;"><p style="font-size:13px"><font face="Arial">Pembiayaan sendiri oleh peneliti</font></p></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul1.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul6.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul11.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana1.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana6.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana11.'</font></td>
        </tr>
        <tr>
        <th></th>
        <td style="border:1px solid #000;border-width: thin;"><p style="font-size:13px"><font face="Arial">PT yang bersangkutan</font></p></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul2.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul7.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul12.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana2.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana7.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana12.'</font></td>
        </tr>
        <tr>
        <th></th>
        <td style="border:1px solid #000;border-width: thin;"><p style="font-size:13px"><font face="Arial">Depdiknas</font></p></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul3.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul8.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul13.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana3.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana8.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana13.'</font></td>
        </tr>
        <tr>
        <th></th>
        <td style="border:1px solid #000;border-width: thin;"><p style="font-size:13px"><font face="Arial">Institusi dalam negeri di luar Depdiknas</font></p></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul4.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul9.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul15.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana4.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana9.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana15.'</font></td>
        </tr>
        <tr>
        <th></th>
        <td style="border:1px solid #000;border-width: thin;"><p style="font-size:13px"><font face="Arial">Institusi luar negeri</font></p></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul5.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul10.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaljudul15.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana5.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana10.'</font></td>
        <td style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:13px"><font face="Arial">'.$totaldana15.'</font></td>
        </tr>
        
                ';
            }
            $penData .='</table>';
        
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename= Data Penelitian '.$pen[0]->nama_departemen .'.xls');
        echo $penData;
    }
    public function excelpenelitian()
    {
        $penelitians = DB::table('penelitians')->get();
        $ts = date("Y");
        $ts = (int) $ts;
        $ts1 = $ts-1;
        $ts2 = $ts-2;

        $penData = "";
        if(count($penelitians) >0 ){
            $penData .= '<table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" style="font-size:14px">Tabel 7.1</font></th>
             <td colspan="4" style="text-align: left"><font face="Arial" style="font-size:14px">Jumlah penelitian dan total dana penelitian  FMIPA IPB selama tiga tahun terakhir</font></td>

           <tr>
            <th></th>
            <th rowspan="5" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >No.</font></th>
            <th rowspan="5" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Nama Program Studi</font></th>
            <th rowspan="3" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Jumlah Judul Penelitian</font></th>
            <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Total Dana Penelitian</font></th>
          </tr>
          <tr>
              <tr>
            <th></th>
            <th rowspan="1" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">(juta Rp)</font></th>
            </tr></tr>

            <tr>
              
            <th rowspan="1" colspan="6"></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS-2<br>'.($ts2).'</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS-1<br>'.($ts1).'</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS<br>'.($ts).'</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS-2<br>'.($ts2).'</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS-1<br>'.($ts1).'</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">TS<br>'.($ts).'</font></th>
            </tr>
            <tr>
            <th></th>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">1</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS STK</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_penelitian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana')).'</font></p></td>
            </tr>
             <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">2</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS GFM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_penelitian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana')).'</font></p></td>
            </tr>
             <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">3</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS BIO</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_penelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_penelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_penelitian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana')).'</font></p></td>
            </tr>
             <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">4</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS KIM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_penelitian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana')).'</font></p></td>
            </tr>
             <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">5</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS MAT</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_penelitian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana')).'</font></p></td>
            </tr>
             <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">6</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS KOM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_penelitian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana')).'</font></p></td>
            </tr>
             <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">7</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS FIS</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_penelitian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana')).'</font></p></td>
            </tr>
             <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">8</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS BIOKIM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_penelitian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana')).'</font></p></td>
            </tr>
             <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">9</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS AUK</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_penelitian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">Total</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_penelitian')).'</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_penelitian')).'</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_penelitian')).'</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->sum('jumlah_dana')).'</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->sum('jumlah_dana')).'</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('penelitians')->whereBetween('tahun_penelitian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->sum('jumlah_dana')).'</font></p></th>
            </tr>
            ';
        
            $penData .='</table>';
        }
        header('Content-Type: application/vnd.vnd.ms-excel');
        header('Content-Disposition: attachment; filename=Jumlah penelitian dan total dana penelitian FMIPA IPB selama tiga tahun terakhir FMIPA.xls');
        echo $penData;
    }

            


    public function penelitianDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
                 $pene = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $date1 = Carbon::now()->startOfYear()->subYear(2);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $penelitians = Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_penelitian', 'desc')
                        ->get();

        $terlibat_penelitian = TerlibatPenelitian::get();
        $redaksipenelitian = RedaksiPenelitian::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('mahasiswa_terlibat', 'id_terlibatpenelitian', '=', 'redaksi_penelitian')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $mahasiswa_penelitian = Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_penelitian', 'desc')
                            ->get();
                        
        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        $SumberDana=SumberDana::get();
        //TS-2
        $totaljudul1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
                        
        $totaljudul2=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul3=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul4=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul5=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        //TS-1
        $totaljudul6=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
                        
        $totaljudul7=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul8=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul9=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul10=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        // TS
        $totaljudul11=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_penelitian');
        $totaljudul12=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_penelitian');
        $totaljudul13=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_penelitian');
        $totaljudul14=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_penelitian');
        $totaljudul15=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_penelitian');
        //TS-2
        $totaldana1=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana2=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana3=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana4=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana5=Penelitian::whereBetween('tahun_penelitian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana');
        //TS-1
        $totaldana6=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana7=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana8=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana9=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana10=Penelitian::whereBetween('tahun_penelitian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana');
        // TS
        $totaldana11=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana');
        $totaldana12=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana');
        $totaldana13=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana');
        $totaldana14=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana');
        $totaldana15=Penelitian::whereBetween('tahun_penelitian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana'); 
         $totalM=Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_mahasiswa');                                                           
        
        $pdf = PDF::loadView('penelitian.pdfs', compact('penelitians','pene', 'totaldana', 'SumberDana', 'ts', 'ts1', 'ts2', 'totaljudul1', 'totaljudul2', 'totaljudul3', 'totaljudul4', 'totaljudul5', 'dateZ', 'dateY', 'dateX', 'totaljudul6', 'totaljudul7', 'totaljudul8', 'totaljudul9', 'totaljudul10', 'totaljudul11', 'totaljudul12', 'totaljudul13', 'totaljudul14', 'totaljudul15', 'totaldana1', 'totaldana2', 'totaldana3', 'totaldana4', 'totaldana5', 'totaldana6', 'totaldana7', 'totaldana8', 'totaldana9', 'totaldana10', 'totaldana11', 'totaldana12', 'totaldana13', 'totaldana14', 'totaldana15', 'redaksipenelitian', 'terlibat_penelitian', 'mahasiswa_penelitian', 'totalM'));

        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function downloadpenelitian(Request $request)
    {
       $id_departemen = $request->user()->id_departemen;
       $penelitians   = DB::table('penelitians')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        
        $date1 = Carbon::now()->startOfYear()->subYear(2);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $totjul=Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
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
        $pdf = PDF::loadView('penelitian.pdfm', compact('penelitians', 'totjul', 'ts2', 'ts1', 'ts', 'redaksiPenelitianFmipa'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function buktiUpload(Request $request){

    
        $this->validate($request, [

        'bukti'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


      $bukti_penelitian = new Bukti;
      $bukti_penelitian->bukti          = $request->bukti;
      if(Auth::user()->id_departemen==10){
        $bukti_penelitian->id_departemen  = $request->id_departemen;
      }
      else{
        $bukti_penelitian->id_departemen  = $request->user()->id_departemen;
      }
      $bukti_penelitian->id_penelitian  = $request->id_penelitian;



        if ($request->hasFile('bukti')){
            $imageTempName   = $request->file('bukti')->getPathname();
            $imageName       = $request->file('bukti')->getClientOriginalName();
            $path            = base_path() . '/public/upload/buktiPenelitian/';
            $request       ->file('bukti')->move($path, $imageName);
            $bukti_penelitian->bukti = ''.$imageName;
            }
           
            $bukti_penelitian ->save();
            
            $penelitians = Penelitian::where('id_penelitian', $bukti_penelitian->id_penelitian)->first();
            $penelitians ->id_bukti = $bukti_penelitian->id_bukti;
               
            $penelitians->save();
             return redirect()->route('standar7penelitian.index')
                              ->with('message2','Data berhasil diunggah'); 
     }



    public function proposalUpload(Request $request){

        $this->validate($request, [

        'proposal_penelitian'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


              $proposal = new Proposal;
              $proposal->proposal_penelitian          = $request->proposal_penelitian;
              if(Auth::user()->id_departemen==10){
                $proposal->id_departemen      = $request->id_departemen;
               }
              else{
                $proposal->id_departemen      = $request->user()->id_departemen;
                }
              $proposal->id_penelitian        = $request->id_penelitian;

        if ($request->hasFile('proposal_penelitian')){
            $imageTempName   = $request->file('proposal_penelitian')->getPathname();
            $imageName       = $request->file('proposal_penelitian')->getClientOriginalName();
            $path            = base_path() . '/public/upload/proposalPengabdian/';
            $request         ->file('proposal_penelitian')->move($path, $imageName);
            $proposal->proposal_penelitian = ''.$imageName;
        }
            
            $proposal ->save();
            $penelitians = Penelitian::where('id_penelitian', $proposal->id_penelitian)->first();
            $penelitians ->id_proposal = $proposal->id_proposal;
               
            $penelitians->save();
             return redirect()->route('standar7penelitian.index')
                              ->with('message2','Data berhasil diunggah'); 
     }

    public function downloadBukti($id_bukti){
        $bukti_penelitian = Bukti::where('id_bukti', '=', $id_bukti)->select('bukti')->get();
        $filePath = public_path().'/upload/buktiPenelitian/'.$bukti_penelitian[0]['bukti'];
        //dd($filePath);
        return response()->download($filePath);
    }

     public function downloadProposal($id_proposal){
        $proposal = Proposal::where('id_proposal', '=', $id_proposal)
                    ->select('proposal_penelitian')
                    ->get();
        $filePath= public_path().'/upload/proposalPengabdian/'.$proposal[0]['proposal_penelitian'];

        return response()->download($filePath);
     }

}


