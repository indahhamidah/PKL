<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulumfmipa;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class KurikulumfmipaController extends Controller
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

           $peran_fmipa_tentang_kurikulum = Kurikulumfmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('keterangan_peran_fmipa_tentang_kurikulum', 'id_peran_fmipa_tentang_kurikulum', 'id_departemen')
                        ->get();

        }
        else
        {
 			 $peran_fmipa_tentang_kurikulum = Kurikulumfmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_peran_fmipa_tentang_kurikulum', 'id_peran_fmipa_tentang_kurikulum', 'id_departemen')
                        ->get(); 
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('kurikulumfmipa/index',compact('peran_fmipa_tentang_kurikulum','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('kurikulumfmipa.create', compact('dept'));
}

    public function store(Request $request)
    {
        $peran_fmipa_tentang_kurikulum=new Kurikulumfmipa;
        $peran_fmipa_tentang_kurikulum->keterangan_peran_fmipa_tentang_kurikulum = $request->keterangan_peran_fmipa_tentang_kurikulum;
        $peran_fmipa_tentang_kurikulum->id_departemen= $request->user()->id_departemen;
        $peran_fmipa_tentang_kurikulum->save();
        return redirect()->route('standar6kurikulumf.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_peran_fmipa_tentang_kurikulum)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $peran_fmipa_tentang_kurikulum = Kurikulumfmipa::find($id_peran_fmipa_tentang_kurikulum);

        return view('kurikulumfmipa.edit',compact('peran_fmipa_tentang_kurikulum', 'dept'));

    }

    public function edit(Request $request, $id_peran_fmipa_tentang_kurikulum)
    {
        //dd($id_peran_fmipa_tentang_kurikulum);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $peran_fmipa_tentang_kurikulum = Kurikulumfmipa::find($id_peran_fmipa_tentang_kurikulum)->where('id_departemen', $id_departemen)->first();
        return view('kurikulumfmipa.edit',compact('peran_fmipa_tentang_kurikulum', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $peran_fmipa_tentang_kurikulum = Kurikulumfmipa::find($member);
        $peran_fmipa_tentang_kurikulum->keterangan_peran_fmipa_tentang_kurikulum = $request->keterangan_peran_fmipa_tentang_kurikulum;
        $peran_fmipa_tentang_kurikulum->id_departemen= $request->user()->id_departemen;

        $peran_fmipa_tentang_kurikulum->save();
        return redirect()->route('standar6kurikulumf.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    public function kurikulumfmipaDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $peran_fmipa_tentang_kurikulum = Kurikulumfmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_peran_fmipa_tentang_kurikulum')
                        ->get(); 
        $pdf = PDF::loadView('kurikulumfmipa.pdf', compact('peran_fmipa_tentang_kurikulum','visim'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

  
}
