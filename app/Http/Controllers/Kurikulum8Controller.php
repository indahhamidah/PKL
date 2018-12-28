<?php 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulum8;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class Kurikulum8Controller extends Controller
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

           $mekanisme_peninjauan_kurikulum = Kurikulum8::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('keterangan_mekanisme_peninjauan_kurikulum', 'id_mekanisme_peninjauan_kurikulum', 'id_departemen')
                        ->get();

        }
        else
        {
 			 $mekanisme_peninjauan_kurikulum = Kurikulum8::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_mekanisme_peninjauan_kurikulum', 'id_mekanisme_peninjauan_kurikulum', 'id_departemen')
                        ->get(); 
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('kurikulum8/index',compact('mekanisme_peninjauan_kurikulum','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('kurikulum8.create', compact('dept'));
}

    public function store(Request $request)
    {
        $mekanisme_peninjauan_kurikulum=new Kurikulum8;
        $mekanisme_peninjauan_kurikulum->keterangan_mekanisme_peninjauan_kurikulum = $request->keterangan_mekanisme_peninjauan_kurikulum;
        $mekanisme_peninjauan_kurikulum->id_departemen= $request->user()->id_departemen;
        $mekanisme_peninjauan_kurikulum->save();
        return redirect()->route('standar6kurikulum08.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_mekanisme_peninjauan_kurikulum)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $mekanisme_peninjauan_kurikulum = Kurikulum8::find($id_mekanisme_peninjauan_kurikulum);

        return view('kurikulum8.edit',compact('mekanisme_peninjauan_kurikulum', 'dept'));

    }

    public function edit(Request $request, $id_mekanisme_peninjauan_kurikulum)
    {
        //dd($id_mekanisme_peninjauan_kurikulum);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $mekanisme_peninjauan_kurikulum = Kurikulum8::find($id_mekanisme_peninjauan_kurikulum)->where('id_departemen', $id_departemen)->first();
        return view('kurikulum8.edit',compact('mekanisme_peninjauan_kurikulum', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $mekanisme_peninjauan_kurikulum = Kurikulum8::find($member);
        $mekanisme_peninjauan_kurikulum->keterangan_mekanisme_peninjauan_kurikulum = $request->keterangan_mekanisme_peninjauan_kurikulum;
        $mekanisme_peninjauan_kurikulum->id_departemen= $request->user()->id_departemen;

        $mekanisme_peninjauan_kurikulum->save();
        return redirect()->route('standar6kurikulum08.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    public function kurikulum8Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $mekanisme_peninjauan_kurikulum = Kurikulum8::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_mekanisme_peninjauan_kurikulum')
                        ->get(); 
        $pdf = PDF::loadView('kurikulum8.pdf', compact('mekanisme_peninjauan_kurikulum','visim'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

  
}
