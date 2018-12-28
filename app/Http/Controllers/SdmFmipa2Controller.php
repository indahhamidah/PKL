<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdmfmipa2;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class Sdmfmipa2Controller extends Controller
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

           $pandangan_fmipa_tentang_tendik = Sdmfmipa2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('keterangan_pandangan_fmipa_tentang_tendik', 'id_pandangan_fmipa_tentang_tendik', 'id_departemen')
                        ->get();

        }
        else
        {
 			 $pandangan_fmipa_tentang_tendik = Sdmfmipa2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_pandangan_fmipa_tentang_tendik', 'id_pandangan_fmipa_tentang_tendik', 'id_departemen')
                        ->get(); 
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('sdmfmipa2/index',compact('pandangan_fmipa_tentang_tendik','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('sdmfmipa2.create', compact('dept'));
}

    public function store(Request $request)
    {
        $pandangan_fmipa_tentang_tendik=new Sdmfmipa2;
        $pandangan_fmipa_tentang_tendik->keterangan_pandangan_fmipa_tentang_tendik = $request->keterangan_pandangan_fmipa_tentang_tendik;
        $pandangan_fmipa_tentang_tendik->id_departemen= $request->user()->id_departemen;
        $pandangan_fmipa_tentang_tendik->save();
        return redirect()->route('standar4sdmfmipa02.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_pandangan_fmipa_tentang_tendik)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $pandangan_fmipa_tentang_tendik = Sdmfmipa2::find($id_pandangan_fmipa_tentang_tendik);

        return view('sdmfmipa2.edit',compact('pandangan_fmipa_tentang_tendik', 'dept'));

    }

    public function edit(Request $request, $id_pandangan_fmipa_tentang_tendik)
    {
        //dd($id_pandangan_fmipa_tentang_tendik);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $pandangan_fmipa_tentang_tendik = Sdmfmipa2::find($id_pandangan_fmipa_tentang_tendik)->where('id_departemen', $id_departemen)->first();
        return view('sdmfmipa2.edit',compact('pandangan_fmipa_tentang_tendik', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $pandangan_fmipa_tentang_tendik = Sdmfmipa2::find($member);
        $pandangan_fmipa_tentang_tendik->keterangan_pandangan_fmipa_tentang_tendik = $request->keterangan_pandangan_fmipa_tentang_tendik;
        $pandangan_fmipa_tentang_tendik->id_departemen= $request->user()->id_departemen;

        $pandangan_fmipa_tentang_tendik->save();
        return redirect()->route('standar4sdmfmipa02.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    public function sdmfmipa2Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $pandangan_fmipa_tentang_tendik = Sdmfmipa2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_pandangan_fmipa_tentang_tendik')
                        ->get(); 
        $pdf = PDF::loadView('sdmfmipa2.pdf', compact('pandangan_fmipa_tentang_tendik','visim'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

  
}
