<?php 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdmfmipa1;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class Sdmfmipa1Controller extends Controller
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

           $pandangan_fmipa_tentang_dosen_tetap = Sdmfmipa1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('keterangan_pandangan_fmipa_tentang_dosen_tetap', 'id_pandangan_fmipa_tentang_dosen_tetap', 'id_departemen')
                        ->get();

        }
        else
        {
 			 $pandangan_fmipa_tentang_dosen_tetap = Sdmfmipa1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_pandangan_fmipa_tentang_dosen_tetap', 'id_pandangan_fmipa_tentang_dosen_tetap', 'id_departemen')
                        ->get(); 
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('sdmfmipa1/index',compact('pandangan_fmipa_tentang_dosen_tetap','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('sdmfmipa1.create', compact('dept'));
}

    public function store(Request $request)
    {
        $pandangan_fmipa_tentang_dosen_tetap=new Sdmfmipa1;
        $pandangan_fmipa_tentang_dosen_tetap->keterangan_pandangan_fmipa_tentang_dosen_tetap = $request->keterangan_pandangan_fmipa_tentang_dosen_tetap;
        $pandangan_fmipa_tentang_dosen_tetap->id_departemen= $request->user()->id_departemen;
        $pandangan_fmipa_tentang_dosen_tetap->save();
        return redirect()->route('standar4sdmfmipa01.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_pandangan_fmipa_tentang_dosen_tetap)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $pandangan_fmipa_tentang_dosen_tetap = Sdmfmipa1::find($id_pandangan_fmipa_tentang_dosen_tetap);

        return view('sdmfmipa1.edit',compact('pandangan_fmipa_tentang_dosen_tetap', 'dept'));

    }

    public function edit(Request $request, $id_pandangan_fmipa_tentang_dosen_tetap)
    {
        //dd($id_pandangan_fmipa_tentang_dosen_tetap);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $pandangan_fmipa_tentang_dosen_tetap = Sdmfmipa1::find($id_pandangan_fmipa_tentang_dosen_tetap)->where('id_departemen', $id_departemen)->first();
        return view('sdmfmipa1.edit',compact('pandangan_fmipa_tentang_dosen_tetap', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $pandangan_fmipa_tentang_dosen_tetap = Sdmfmipa1::find($member);
        $pandangan_fmipa_tentang_dosen_tetap->keterangan_pandangan_fmipa_tentang_dosen_tetap = $request->keterangan_pandangan_fmipa_tentang_dosen_tetap;
        $pandangan_fmipa_tentang_dosen_tetap->id_departemen= $request->user()->id_departemen;

        $pandangan_fmipa_tentang_dosen_tetap->save();
        return redirect()->route('standar4sdmfmipa01.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    public function sdmfmipa1Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $pandangan_fmipa_tentang_dosen_tetap = Sdmfmipa1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_pandangan_fmipa_tentang_dosen_tetap')
                        ->get(); 
        $pdf = PDF::loadView('sdmfmipa1.pdf', compact('pandangan_fmipa_tentang_dosen_tetap','visim'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

  
}
