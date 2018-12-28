<?php 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm16;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class Sdm16Controller extends Controller
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

           $upaya_meningkatkan_kompetensi_tendik = Sdm16::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('keterangan_upaya_meningkatkan_kompetensi_tendik', 'id_upaya_meningkatkan_kompetensi_tendik', 'id_departemen')
                        ->get();

        }
        else
        {
 			 $upaya_meningkatkan_kompetensi_tendik = Sdm16::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_upaya_meningkatkan_kompetensi_tendik', 'id_upaya_meningkatkan_kompetensi_tendik', 'id_departemen')
                        ->get(); 
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('sdm16/index',compact('upaya_meningkatkan_kompetensi_tendik','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('sdm16.create', compact('dept'));
}

    public function store(Request $request)
    {
        $upaya_meningkatkan_kompetensi_tendik=new Sdm16;
        $upaya_meningkatkan_kompetensi_tendik->keterangan_upaya_meningkatkan_kompetensi_tendik = $request->keterangan_upaya_meningkatkan_kompetensi_tendik;
        $upaya_meningkatkan_kompetensi_tendik->id_departemen= $request->user()->id_departemen;
        $upaya_meningkatkan_kompetensi_tendik->save();
        return redirect()->route('standar4sdm016.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_upaya_meningkatkan_kompetensi_tendik)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $upaya_meningkatkan_kompetensi_tendik = Sdm16::find($id_upaya_meningkatkan_kompetensi_tendik);

        return view('sdm16.edit',compact('upaya_meningkatkan_kompetensi_tendik', 'dept'));

    }

    public function edit(Request $request, $id_upaya_meningkatkan_kompetensi_tendik)
    {
        //dd($id_upaya_meningkatkan_kompetensi_tendik);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $upaya_meningkatkan_kompetensi_tendik = Sdm16::find($id_upaya_meningkatkan_kompetensi_tendik)->where('id_departemen', $id_departemen)->first();
        return view('sdm16.edit',compact('upaya_meningkatkan_kompetensi_tendik', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $upaya_meningkatkan_kompetensi_tendik = Sdm16::find($member);
        $upaya_meningkatkan_kompetensi_tendik->keterangan_upaya_meningkatkan_kompetensi_tendik = $request->keterangan_upaya_meningkatkan_kompetensi_tendik;
        $upaya_meningkatkan_kompetensi_tendik->id_departemen= $request->user()->id_departemen;

        $upaya_meningkatkan_kompetensi_tendik->save();
        return redirect()->route('standar4sdm016.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    public function sdm16Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $upaya_meningkatkan_kompetensi_tendik = Sdm16::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_upaya_meningkatkan_kompetensi_tendik')
                        ->get(); 
        $pdf = PDF::loadView('sdm16.pdf', compact('upaya_meningkatkan_kompetensi_tendik','visim'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

  
}
