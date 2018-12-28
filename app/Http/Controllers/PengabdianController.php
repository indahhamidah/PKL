<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengabdian;
use App\SumberDana;
use App\BuktiPengabdian;
use App\ProposalPengabdian;
use App\RedaksiPengabdian;
use App\MahasiswaPengabdian;
use App\TerlibatPenelitian;
use App\RedaksiPengabdianFmipa;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class PengabdianController extends Controller
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
            $pengabdians = Pengabdian::whereBetween('tahun_pengabdian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->orderBy('tahun_pengabdian', 'desc')
                            ->get();
            $ts = date("Y");
            $ts = (int) $ts;
            $ts1 = $ts-1;
            $ts2 = $ts-2;
            $totaldana=Pengabdian::whereBetween('tahun_pengabdian', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->sum('jumlah_dana_peng');
            $totaljudul=Pengabdian::whereBetween('tahun_pengabdian', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->count('judul_pengabdian');
            $bukti_pengabdian = DB::table('bukti_pengabdian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->select('bukti_pengabdian.*', 'departemen.*')
                        ->get();
            $proposal_pengabdian = DB::table('proposal_pengabdian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->select('proposal_pengabdian.*', 'departemen.*')
                        ->get();
            $redaksipengabdian = RedaksiPengabdianFmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                                ->where('id_departemen', $id_departemen)
                                ->get();
            $redaksiPengabdianFmipa = RedaksiPengabdianFmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_pengabdian_fmipa', 'id_redaksiPeng', 'id_departemen')
                        ->get();
            // $penelitians = Penelitian::get();
        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        
        // TS-2
        $totjudul1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('judul_pengabdian');
        // TS-1
        $totjudul2=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('judul_pengabdian');
        // TS
        $totjudul3=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('judul_pengabdian');
        // TS-2
        $totbukti1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_buktiPeng');
        // TS-1
        $totbukti2=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_buktiPeng');
        // TS
        $totbukti3=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_buktiPeng');
        // TS-2
        $totproposal1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_proposalPeng');
        // TS-1
        $totproposal2=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_proposalPeng');
        // TS
        $totproposal3=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->count('id_proposalPeng');

           
        }
        else
        {
           
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $pengabdians = Pengabdian::whereBetween('tahun_pengabdian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_pengabdian', 'desc')
                            ->get();
            $ts = date("Y");
            $ts = (int) $ts;
            $ts1 = $ts-1;
            $ts2 = $ts-2;
            $totaldana=Pengabdian::whereBetween('tahun_pengabdian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_dana_peng');
            $totaljudul=Pengabdian::whereBetween('tahun_pengabdian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_pengabdian');
            $bukti_pengabdian = DB::table('bukti_pengabdian')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('bukti_pengabdian.*', 'departemen.*')
                              ->get();
            $proposal_pengabdian = DB::table('proposal_pengabdian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('proposal_pengabdian.*', 'departemen.*')
                        ->get();
        


        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        
        // TS-2
        $totjudul1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_pengabdian');
        // TS-1
        $totjudul2=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_pengabdian');
        // TS
        $totjudul3=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_pengabdian');
        // TS-2
        $totbukti1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_buktiPeng');
        // TS-1
        $totbukti2=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_buktiPeng');
        // TS
        $totbukti3=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_buktiPeng');
        // TS-2
        $totproposal1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_proposalPeng');
        // TS-1
        $totproposal2=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_proposalPeng');
        // TS
        $totproposal3=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->count('id_proposalPeng');
        
        }
            $SumberDana=SumberDana::get();
            $terlibat_penelitian = TerlibatPenelitian::get();
            $redaksipengabdian = RedaksiPengabdian::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('mahasiswa_terlibat', 'id_terlibatpenelitian', '=', 'redaksi_pengabdian')
                        ->where('id_departemen', $id_departemen)
                        ->get();
            $mahasiswa_pengabdian = Pengabdian::join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->get();

            $listdept=DB::table('departemen')
                    ->get();

            return view('Pengabdian/index',compact('pengabdians','dept', 'listdept', 'totaldana', 'totaljudul', 'bukti_pengabdian', 'ts', 'ts1', 'ts2', 'proposal_pengabdian', 'totjudul1', 'totjudul2', 'totjudul3', 'totbukti1', 'totbukti2', 'totbukti3', 'totproposal1', 'totproposal2', 'totproposal3','redaksipengabdian', 'mahasiswa_pengabdian', 'terlibat_penelitian', 'redaksiPengabdianFmipa'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
       
        $id_departemen = $request->user()->id_departemen;
        $pengabdians = DB::table('pengabdians')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->where('id_departemen', $id_departemen)
                        ->where('judul_pengabdian', $request->judul_pengabdian)
                        ->where('institusi', $request->institusi)
                        ->first();

        if($pengabdians==null){
        $pengabdians=new Pengabdian;
        $pengabdians->judul_pengabdian      = $request->judul_pengabdian;
        $pengabdians->institusi             = $request->institusi;
        $pengabdians->tahun_pengabdian      = $request->tahun_pengabdian;
        $pengabdians->jumlah_dana_peng      = $request->jumlah_dana_peng;
        $pengabdians->jumlah_mahasiswa_peng = $request->jumlah_mahasiswa_peng;
        $pengabdians->keterlibatan_mahasiswa = $request->keterlibatan_mahasiswa;
        $pengabdians->id_sumberr            = $request->id_sumberr;
        $pengabdians->jenis_dana_peng       = $request->jenis_dana_peng;
        if(Auth::user()->id_departemen==10){
            $pengabdians->id_departemen=$request->id_departemen;
        }
        else{
            $pengabdians->id_departemen= $request->user()->id_departemen;
        }
       
        $pengabdians     ->save();
        return redirect()->route('standar8pengabdian.index')
                         ->with('message2','Data berhasil ditambahkan');
                     }else{
                      return redirect()->route('standar8pengabdian.index')
                         ->with('message','Data yang ditambahkan sudah ada');  
                     }
                            
    }
    public function edit($id_pengabdian)
    {
        // dd($member);
        return view('Pengabdian/index',compact('pengabdian'));
    }
    
    public function update(Request $request, $member)
    {
        
        $id_departemen = $request->user()->id_departemen;
            $pengabdians = DB::table('pengabdians')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->where('id_departemen', $id_departemen)
                        ->where('judul_pengabdian', $request->judul_pengabdian)
                        ->where('institusi', $request->institusi)
                        ->where('tahun_pengabdian', $request->tahun_pengabdian)
                        ->where('jumlah_dana_peng', $request->jumlah_dana_peng)
                        ->where('jumlah_mahasiswa_peng', $request->jumlah_mahasiswa_peng)
                        ->where('keterlibatan_mahasiswa', $request->keterlibatan_mahasiswa)
                        ->where('id_sumberr', $request->id_sumberr)
                        ->where('jenis_dana_peng', $request->jenis_dana_peng)
                        ->first();

        if($pengabdians==null){
        $pengabdians = Pengabdian::find($member);
        $pengabdians->judul_pengabdian      = $request->judul_pengabdian;
        $pengabdians->institusi             = $request->institusi;
        $pengabdians->tahun_pengabdian      = $request->tahun_pengabdian;
        $pengabdians->jumlah_dana_peng      = $request->jumlah_dana_peng;
        $pengabdians->jumlah_mahasiswa_peng = $request->jumlah_mahasiswa_peng;
        $pengabdians->keterlibatan_mahasiswa = $request->keterlibatan_mahasiswa;
        $pengabdians->id_sumberr            = $request->id_sumberr;
        $pengabdians->jenis_dana_peng       = $request->jenis_dana_peng;
        if(Auth::user()->id_departemen==10){
            $pengabdians->id_departemen=$request->id_departemen;
        }
        else{
            $pengabdians->id_departemen= $request->user()->id_departemen;
        }

        $pengabdians     ->save();
        return redirect()->route('standar8pengabdian.index')
                         ->with('message2','Data berhasil diubah');
                     }else{
                      return redirect()->route('standar8pengabdian.index')
                         ->with('message','Data yang diubah sudah ada. Silakan periksa kembali');  
                     }
                        
          }       
    
    public function destroy($id_pengabdian)
    {
        Pengabdian::destroy($id_pengabdian);
        return redirect()->route('standar8pengabdian.index')
                         ->with('message2','Data berhasil dihapus');
    }

    public function pengabdianImport(Request $request){
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['tahun_pengabdian'      => $value->tahun_pengabdian, 
                              'judul_pengabdian'      => $value->judul_pengabdian, 
                              'institusi'             => $value->institusi, 
                              'id_sumberr'            => $value->id_sumberr,
                              'jenis_dana_peng'       => $value->jenis_dana_peng,
                              'jumlah_dana_peng'      => $value->jumlah_dana_peng, 
                              'jumlah_mahasiswa_peng'  => $value->jumlah_mahasiswa_peng,
                              'keterlibatan_mahasiswa'  => $value->keterlibatan_mahasiswa, 
                              'id_departemen'         => $request->user()->id_departemen];
                }
                if(!empty($arr)){
                    \DB::table('pengabdians')->insert($arr);
                   
                }
            }
        }
         // return redirect()->route('penelitian.index')->with('message2','Data berhasil diunggah');   
         return redirect()->back()
                          ->with('message2','Data berhasil diunggah'); 
    }

    public function pengabdianExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $peng = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $pengabdians = Pengabdian::whereBetween('tahun_pengabdian', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_pengabdian', 'decs')
                        ->get();
        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        $SumberDana=SumberDana::get();
        //TS-2
        $totaljudul1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_pengabdian');
                        
        $totaljudul2=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_pengabdian');
        $totaljudul3=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_pengabdian');
        $totaljudul4=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_pengabdian');
        $totaljudul5=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_pengabdian');
        //TS-1
        $totaljudul6=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_pengabdian');
                        
        $totaljudul7=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_pengabdian');
        $totaljudul8=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_pengabdian');
        $totaljudul9=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_pengabdian');
        $totaljudul10=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_pengabdian');
        // TS
        $totaljudul11=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_pengabdian');
        $totaljudul12=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_pengabdian');
        $totaljudul13=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_pengabdian');
        $totaljudul14=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_pengabdian');
        $totaljudul15=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_pengabdian');
        //TS-2
        $totaldana1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana_peng');
        $totaldana2=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana_peng');
        $totaldana3=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana_peng');
        $totaldana4=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana_peng');
        $totaldana5=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana_peng');
        // TS-1
        $totaldana6=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana_peng');
        $totaldana7=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana_peng');
        $totaldana8=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana_peng');
        $totaldana9=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana_peng');
        $totaldana10=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana_peng'); 
         //TS
        $totaldana11=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana_peng');
        $totaldana12=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana_peng');
        $totaldana13=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana_peng');
        $totaldana14=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana_peng');
        $totaldana15=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana_peng');

 
        $pengData = "";
 
        if(count($pengabdians) >0 ){
            $pengData .= '
            <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">Tabel 8.1</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Data Pengabdian Kepada Masyarakat Program Studi '.$peng[0]->nama_departemen.'</font></td>
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
            $pengData .='</table>';
        
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Laporan Pengabdian kepada Masyarakat '.$peng[0]->nama_departemen .'.xls');
        echo $pengData;
    }
    public function excelpengabdian()
    {
        $pengabdians = DB::table('pengabdians')->get();
        $ts = date("Y");
        $ts = (int) $ts;
        $ts1 = $ts-1;
        $ts2 = $ts-2;

        $pengabData = "";

        if(count($pengabdians) >0 ){
            $pengabData .= '<table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" style="font-size:14px">Tabel 8.1</font></th>
             <td colspan="4" style="text-align: left"><font face="Arial" style="font-size:14px">Jumlah pengabdian pada masyarakat dan total dana pengabdian pada masyarakat  FMIPA IPB selama tiga tahun terakhir</font></td>

           <tr>
            <th></th>
            <th rowspan="5" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >No.</font></th>
            <th rowspan="5" colspan="1" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Nama Program Studi</font></th>
            <th rowspan="3" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Jumlah Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</font></th>
            <th rowspan="2" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Total Dana </font></th>
          </tr>
          <tr>
              <tr>
            <th></th>
            <th rowspan="1" colspan="3" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">Kegiatan Pelayanan/ Pengabdian kepada Masyarakat (juta Rp)</font></th>
            </tr></tr>
            <tr>
            <th colspan="6"></th>
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
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->count('judul_pengabdian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana_peng')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana_peng')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('jumlah_dana_peng')).'</font></p></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">2</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS GFM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->count('judul_pengabdian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana_peng')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana_peng')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('jumlah_dana_peng')).'</font></p></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">3</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS BIO</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->count('judul_pengabdian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana_peng')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana_peng')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('jumlah_dana_peng')).'</font></p></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">4</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS KIM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->count('judul_pengabdian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana_peng')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana_peng')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('jumlah_dana_peng')).'</font></p></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">5</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS MAT</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->count('judul_pengabdian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana_peng')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana_peng')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('jumlah_dana_peng')).'</font></p></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">6</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS KOM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->count('judul_pengabdian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana_peng')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana_peng')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('jumlah_dana_peng')).'</font></p></td>
            </tr>
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">7</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS FIS</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->count('judul_pengabdian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana_peng')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana_peng')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('jumlah_dana_peng')).'</font></p></td>
            </tr>

            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">8</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS BIOKIM</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->count('judul_pengabdian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana_peng')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana_peng')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('jumlah_dana_peng')).'</font></p></td>
            </tr>
            
            <tr>
            <th></th>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">9</td>
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">Dep/PS AUK</font></p></td>
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_pengabdian')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->count('judul_pengabdian')).'</font></p></td>
            <!-- Total Dana -->
            <!-- TS-2 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana_peng')).'</font></p></td>
             <!-- TS-1 -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana_peng')).'</font></p></td>
            <!-- TS -->
            <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('jumlah_dana_peng')).'</font></p></td>
            </tr></tr>
            <tr>
            <th></th>
            <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">Total</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->count('judul_pengabdian')).'</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->count('judul_pengabdian')).'</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->count('judul_pengabdian')).'</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(2), Carbon::now()->startOfYear()->subYear(1)->subDays(1)])->sum('jumlah_dana_peng')).'</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear()->subYear(1), Carbon::now()->startOfYear()->subDays(1)])->sum('jumlah_dana_peng')).'</font></p></th>
            <th colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.number_format(DB::table('pengabdians')->whereBetween('tahun_pengabdian', [Carbon::now()->startOfYear(), Carbon::now()->startOfYear()->addYear(1)->subDays(1)])->sum('jumlah_dana_peng')).'</font></p></th>
            </tr>
            ';
            $pengabData .='</table>';
        }

        header('Content-Type: application/vnd.vnd.ms-excel');
        header('Content-Disposition: attachment; filename=Jumlah pengabdian dan total dana pengabdian FMIPA IPB selama tiga tahun terakhir FMIPA.xls');
        echo $pengabData;
    }


    public function pengabdianDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $peng = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $date1 = Carbon::now()->startOfYear()->subYear(2);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $pengabdians = Pengabdian::whereBetween('tahun_pengabdian', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_pengabdian', 'desc')
                        ->get();
        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        $SumberDana=SumberDana::get();
        //TS-2
        $totaljudul1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_pengabdian');
                      
        $totaljudul2=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_pengabdian');
                            
        $totaljudul3=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_pengabdian');
        $totaljudul4=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_pengabdian');
        $totaljudul5=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_pengabdian');
        //TS-1
        $totaljudul6=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_pengabdian');
                        
        $totaljudul7=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_pengabdian');
        $totaljudul8=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_pengabdian');
        $totaljudul9=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_pengabdian');
        $totaljudul10=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_pengabdian');
        // TS
        $totaljudul11=Pengabdian::whereBetween('tahun_pengabdian', [$dateX,$dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->count('judul_pengabdian');

        $totaljudul12=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->count('judul_pengabdian');
        $totaljudul13=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->count('judul_pengabdian');
        $totaljudul14=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->count('judul_pengabdian');
        $totaljudul15=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->count('judul_pengabdian');
         //TS-2
        $totaldana1=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana_peng');
        $totaldana2=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana_peng');
        $totaldana3=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana_peng');
        $totaldana4=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana_peng');
        $totaldana5=Pengabdian::whereBetween('tahun_pengabdian', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana_peng');
        // TS-1
        $totaldana6=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana_peng');
        $totaldana7=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana_peng');
        $totaldana8=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana_peng');
        $totaldana9=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana_peng');
        $totaldana10=Pengabdian::whereBetween('tahun_pengabdian', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana_peng'); 
         //TS
        $totaldana11=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 1)
                            ->sum('jumlah_dana_peng');
        $totaldana12=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 2)
                            ->sum('jumlah_dana_peng');
        $totaldana13=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 3)
                            ->sum('jumlah_dana_peng');
        $totaldana14=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 4)
                            ->sum('jumlah_dana_peng');
        $totaldana15=Pengabdian::whereBetween('tahun_pengabdian', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('sumber_dana', 'id_sumber', '=', 'id_sumberr')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_sumberr', 5)
                            ->sum('jumlah_dana_peng');
        $terlibat_penelitian = TerlibatPenelitian::get();
        $redaksipengabdian = RedaksiPengabdian::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('mahasiswa_terlibat', 'id_terlibatpenelitian', '=', 'redaksi_pengabdian')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $mahasiswa_pengabdian = Pengabdian::join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->get();
        $pdf = PDF::loadView('pengabdian.pdfs', compact('pengabdians','peng', 'SumberDana', 'totaljudul1', 'totaljudul2', 'totaljudul3', 'totaljudul4', 'totaljudul5', 'dateZ', 'dateY', 'dateX', 'totaljudul6', 'totaljudul7', 'totaljudul8', 'totaljudul9', 'totaljudul10', 'totaljudul11', 'totaljudul12', 'totaljudul13', 'totaljudul14', 'totaljudul15', 'totaldana1', 'totaldana2', 'totaldana3', 'totaldana4', 'totaldana5', 'totaldana6', 'totaldana7', 'totaldana8', 'totaldana9', 'totaldana10', 'totaldana11', 'totaldana12', 'totaldana13', 'totaldana14', 'totaldana15','redaksipengabdian', 'terlibat_penelitian', 'mahasiswa_pengabdian'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function downloadpengabdian(Request $request)
    {
       $id_departemen = $request->user()->id_departemen;
       $pengabdians   = DB::table('pengabdians')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        //TS-2
        $date1 = Carbon::now()->startOfYear()->subYear(2);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $totjul=Pengabdian::whereBetween('tahun_pengabdian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('judul_pengabdian');
        $redaksiPengabdianFmipa = RedaksiPengabdianFmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_pengabdian_fmipa', 'id_redaksiPeng', 'id_departemen')
                        ->get();
            $ts = date("Y");
            $ts = (int) $ts;
            $ts1 = $ts-1;
            $ts2 = $ts-2;
        $pdf = PDF::loadView('pengabdian.pdfm', compact('pengabdians', 'totjul', 'ts2', 'ts1', 'ts', 'redaksipengabdian', 'redaksiPengabdianFmipa'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function buktiPengabdianUpload(Request $request){

        $this->validate($request, [

        'bukti_file'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


              $bukti_pengabdian = new BuktiPengabdian;
              $bukti_pengabdian->bukti_file           = $request->bukti_file;
              if(Auth::user()->id_departemen==10){
                $bukti_pengabdian->id_departemen      = $request->id_departemen;
               }
              else{
                $bukti_pengabdian->id_departemen      = $request->user()->id_departemen;
                }
                $bukti_pengabdian->id_pengabdian        = $request->id_pengabdian;

        if ($request->hasFile('bukti_file')){
            $imageTempName   = $request->file('bukti_file')->getPathname();
            $imageName       = $request->file('bukti_file')->getClientOriginalName();
            $path            = base_path() . '/public/upload/buktiPengabdian/';
            $request         ->file('bukti_file')->move($path, $imageName);
            $bukti_pengabdian->bukti_file = ''.$imageName;
   
                 }
            $bukti_pengabdian ->save();
            $pengabdians = Pengabdian::where('id_pengabdian', $bukti_pengabdian->id_pengabdian)->first();
            $pengabdians ->id_buktiPeng = $bukti_pengabdian->id_buktiPeng;
               
            $pengabdians->save();
             return redirect()->route('standar8pengabdian.index')
                              ->with('message2','Data berhasil diunggah'); 
     }
    public function proposalPengabdianUpload(Request $request){

        $this->validate($request, [

        'proposal_pengabdian'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


              $proposal_pengabdian = new ProposalPengabdian;
              $proposal_pengabdian->proposal_pengabdian          = $request->proposal_pengabdian;
              if(Auth::user()->id_departemen==10){
                $proposal_pengabdian->id_departemen      = $request->id_departemen;
               }
              else{
                $proposal_pengabdian->id_departemen      = $request->user()->id_departemen;
                }
              $proposal_pengabdian->id_pengabdian        = $request->id_pengabdian;

        if ($request->hasFile('proposal_pengabdian')){
            $imageTempName   = $request->file('proposal_pengabdian')->getPathname();
            $imageName       = $request->file('proposal_pengabdian')->getClientOriginalName();
            $path            = base_path() . '/public/upload/proposalP/';
            $request         ->file('proposal_pengabdian')->move($path, $imageName);
            $proposal_pengabdian->proposal_pengabdian = ''.$imageName;
   
                 }
                 
            $proposal_pengabdian ->save();
            $pengabdians = Pengabdian::where('id_pengabdian', $proposal_pengabdian->id_pengabdian)->first();
            $pengabdians ->id_proposalPeng = $proposal_pengabdian->id_proposalPeng;
               
            $pengabdians->save();
             return redirect()->route('standar8pengabdian.index')
                              ->with('message2','Data berhasil diunggah'); 
     }

  

    public function downloadBuktiP($id_buktiPeng){
        $bukti_pengabdian = BuktiPengabdian::where('id_buktiPeng', '=', $id_buktiPeng)->select('bukti_file')->get();
        $filePath = public_path().'/upload/buktiPengabdian/'.$bukti_pengabdian[0]['bukti_file'];
        return response()->download($filePath);
    }

    public function downloadproposalP($id_proposalPeng){
        $proposal_pengabdian = ProposalPengabdian::where('id_proposalPeng', '=', $id_proposalPeng)->select('proposal_pengabdian')->get();
        $filePath = public_path().'/upload/proposalP/'.$proposal_pengabdian[0]['proposal_pengabdian'];
        //dd($filePath);
        return response()->download($filePath);
    }
}
