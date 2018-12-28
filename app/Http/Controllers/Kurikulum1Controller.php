<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulum1;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class Kurikulum1Controller extends Controller
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

           $kompetensi_utama_lulusan = Kurikulum1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('keterangan_kompetensi_utama_lulusan', 'id_kompetensi_utama_lulusan', 'id_departemen')
                        ->get();

        }
        else
        {
 			 $kompetensi_utama_lulusan = Kurikulum1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_kompetensi_utama_lulusan', 'id_kompetensi_utama_lulusan', 'id_departemen')
                        ->get(); 
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('kurikulum1/index',compact('kompetensi_utama_lulusan','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('kurikulum1.create', compact('dept'));
}

    public function store(Request $request)
    {
        $kompetensi_utama_lulusan=new Kurikulum1;
        $kompetensi_utama_lulusan->keterangan_kompetensi_utama_lulusan = $request->keterangan_kompetensi_utama_lulusan;
        $kompetensi_utama_lulusan->id_departemen= $request->user()->id_departemen;
        $kompetensi_utama_lulusan->save();
        return redirect()->route('standar6kurikulum01.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_kompetensi_utama_lulusan)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $kompetensi_utama_lulusan = Kurikulum1::find($id_kompetensi_utama_lulusan);

        return view('kurikulum1.edit',compact('kompetensi_utama_lulusan', 'dept'));

    }

    public function edit(Request $request, $id_kompetensi_utama_lulusan)
    {
        //dd($id_kompetensi_utama_lulusan);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $kompetensi_utama_lulusan = Kurikulum1::find($id_kompetensi_utama_lulusan)->where('id_departemen', $id_departemen)->first();
        return view('kurikulum1.edit',compact('kompetensi_utama_lulusan', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $kompetensi_utama_lulusan = Kurikulum1::find($member);
        $kompetensi_utama_lulusan->keterangan_kompetensi_utama_lulusan = $request->keterangan_kompetensi_utama_lulusan;
        $kompetensi_utama_lulusan->id_departemen= $request->user()->id_departemen;

        $kompetensi_utama_lulusan->save();
        return redirect()->route('standar6kurikulum01.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    public function kurikulum1Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $kompetensi_utama_lulusan = Kurikulum1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_kompetensi_utama_lulusan')
                        ->get(); 
        $pdf = PDF::loadView('kurikulum1.pdf', compact('kompetensi_utama_lulusan','visim'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

  
}
