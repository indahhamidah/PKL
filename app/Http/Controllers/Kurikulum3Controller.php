<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulum3;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class Kurikulum3Controller extends Controller
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

           $kompetensi_lainnya = Kurikulum3::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('keterangan_kompetensi_lainnya', 'id_kompetensi_lainnya', 'id_departemen')
                        ->get();

        }
        else
        {
 			 $kompetensi_lainnya = Kurikulum3::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_kompetensi_lainnya', 'id_kompetensi_lainnya', 'id_departemen')
                        ->get(); 
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('kurikulum3/index',compact('kompetensi_lainnya','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('kurikulum3.create', compact('dept'));
}

    public function store(Request $request)
    {
        $kompetensi_lainnya=new Kurikulum3;
        $kompetensi_lainnya->keterangan_kompetensi_lainnya = $request->keterangan_kompetensi_lainnya;
        $kompetensi_lainnya->id_departemen= $request->user()->id_departemen;
        $kompetensi_lainnya->save();
        return redirect()->route('standar6kurikulum03.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_kompetensi_lainnya)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $kompetensi_lainnya = Kurikulum3::find($id_kompetensi_lainnya);

        return view('kurikulum3.edit',compact('kompetensi_lainnya', 'dept'));

    }

    public function edit(Request $request, $id_kompetensi_lainnya)
    {
        //dd($id_kompetensi_lainnya);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $kompetensi_lainnya = Kurikulum3::find($id_kompetensi_lainnya)->where('id_departemen', $id_departemen)->first();
        return view('kurikulum3.edit',compact('kompetensi_lainnya', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $kompetensi_lainnya = Kurikulum3::find($member);
        $kompetensi_lainnya->keterangan_kompetensi_lainnya = $request->keterangan_kompetensi_lainnya;
        $kompetensi_lainnya->id_departemen= $request->user()->id_departemen;

        $kompetensi_lainnya->save();
        return redirect()->route('standar6kurikulum03.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    public function kurikulum3Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $kompetensi_lainnya = Kurikulum3::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_kompetensi_lainnya')
                        ->get(); 
        $pdf = PDF::loadView('kurikulum3.pdf', compact('kompetensi_lainnya','visim'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

  
}
