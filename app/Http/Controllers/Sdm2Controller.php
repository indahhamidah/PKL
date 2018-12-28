<?php 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm2;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class Sdm2Controller extends Controller
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

           $monitoring_dan_evaluasi = Sdm2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('keterangan_monitoring_dan_evaluasi', 'id_monitoring_dan_evaluasi', 'id_departemen')
                        ->get();

        }
        else
        {
 			 $monitoring_dan_evaluasi = Sdm2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_monitoring_dan_evaluasi', 'id_monitoring_dan_evaluasi', 'id_departemen')
                        ->get(); 
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('sdm2/index',compact('monitoring_dan_evaluasi','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('sdm2.create', compact('dept'));
}

    public function store(Request $request)
    {
        $monitoring_dan_evaluasi=new Sdm2;
        $monitoring_dan_evaluasi->keterangan_monitoring_dan_evaluasi = $request->keterangan_monitoring_dan_evaluasi;
        $monitoring_dan_evaluasi->id_departemen= $request->user()->id_departemen;
        $monitoring_dan_evaluasi->save();
        return redirect()->route('standar4sdm02.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_monitoring_dan_evaluasi)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $monitoring_dan_evaluasi = Sdm2::find($id_monitoring_dan_evaluasi);

        return view('sdm2.edit',compact('monitoring_dan_evaluasi', 'dept'));

    }

    public function edit(Request $request, $id_monitoring_dan_evaluasi)
    {
        //dd($id_monitoring_dan_evaluasi);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $monitoring_dan_evaluasi = Sdm2::find($id_monitoring_dan_evaluasi)->where('id_departemen', $id_departemen)->first();
        return view('sdm2.edit',compact('monitoring_dan_evaluasi', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $monitoring_dan_evaluasi = Sdm2::find($member);
        $monitoring_dan_evaluasi->keterangan_monitoring_dan_evaluasi = $request->keterangan_monitoring_dan_evaluasi;
        $monitoring_dan_evaluasi->id_departemen= $request->user()->id_departemen;

        $monitoring_dan_evaluasi->save();
        return redirect()->route('standar4sdm02.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    public function sdm2Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $monitoring_dan_evaluasi = Sdm2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_monitoring_dan_evaluasi')
                        ->get(); 
        $pdf = PDF::loadView('sdm2.pdf', compact('monitoring_dan_evaluasi','visim'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

  
}
