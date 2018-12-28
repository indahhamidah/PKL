<?php 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulum2;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class Kurikulum2Controller extends Controller
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

           $kompetensi_pendukung_lulusan = Kurikulum2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('keterangan_kompetensi_pendukung_lulusan', 'id_kompetensi_pendukung_lulusan', 'id_departemen')
                        ->get();

        }
        else
        {
 			 $kompetensi_pendukung_lulusan = Kurikulum2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_kompetensi_pendukung_lulusan', 'id_kompetensi_pendukung_lulusan', 'id_departemen')
                        ->get(); 
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('kurikulum2/index',compact('kompetensi_pendukung_lulusan','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('kurikulum2.create', compact('dept'));
}

    public function store(Request $request)
    {
        $kompetensi_pendukung_lulusan=new Kurikulum2;
        $kompetensi_pendukung_lulusan->keterangan_kompetensi_pendukung_lulusan = $request->keterangan_kompetensi_pendukung_lulusan;
        $kompetensi_pendukung_lulusan->id_departemen= $request->user()->id_departemen;
        $kompetensi_pendukung_lulusan->save();
        return redirect()->route('standar6kurikulum02.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_kompetensi_pendukung_lulusan)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $kompetensi_pendukung_lulusan = Kurikulum2::find($id_kompetensi_pendukung_lulusan);

        return view('kurikulum2.edit',compact('kompetensi_pendukung_lulusan', 'dept'));

    }

    public function edit(Request $request, $id_kompetensi_pendukung_lulusan)
    {
        //dd($id_kompetensi_pendukung_lulusan);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $kompetensi_pendukung_lulusan = Kurikulum2::find($id_kompetensi_pendukung_lulusan)->where('id_departemen', $id_departemen)->first();
        return view('kurikulum2.edit',compact('kompetensi_pendukung_lulusan', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $kompetensi_pendukung_lulusan = Kurikulum2::find($member);
        $kompetensi_pendukung_lulusan->keterangan_kompetensi_pendukung_lulusan = $request->keterangan_kompetensi_pendukung_lulusan;
        $kompetensi_pendukung_lulusan->id_departemen= $request->user()->id_departemen;

        $kompetensi_pendukung_lulusan->save();
        return redirect()->route('standar6kurikulum02.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    public function kurikulum2Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $kompetensi_pendukung_lulusan = Kurikulum2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_kompetensi_pendukung_lulusan')
                        ->get(); 
        $pdf = PDF::loadView('kurikulum2.pdf', compact('kompetensi_pendukung_lulusan','visim'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

  
}
