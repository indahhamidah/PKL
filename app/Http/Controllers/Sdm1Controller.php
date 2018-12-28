<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm1;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class Sdm1Controller extends Controller
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

           $sistem_seleksi_dan_pengembangan = Sdm1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('keterangan_seleksi_dan_pengembangan', 'id_sistem_seleksi_dan_pengembangan', 'id_departemen')
                        ->get();

        }
        else
        {
 			 $sistem_seleksi_dan_pengembangan = Sdm1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_seleksi_dan_pengembangan', 'id_sistem_seleksi_dan_pengembangan', 'id_departemen')
                        ->get(); 
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('sdm1/index',compact('sistem_seleksi_dan_pengembangan','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('sdm1.create', compact('dept'));
}

    public function store(Request $request)
    {
        $sistem_seleksi_dan_pengembangan=new Sdm1;
        $sistem_seleksi_dan_pengembangan->keterangan_seleksi_dan_pengembangan = $request->keterangan_seleksi_dan_pengembangan;
        $sistem_seleksi_dan_pengembangan->id_departemen= $request->user()->id_departemen;
        $sistem_seleksi_dan_pengembangan->save();
        return redirect()->route('standar4sdm01.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_sistem_seleksi_dan_pengembangan)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $sistem_seleksi_dan_pengembangan = Sdm1::find($id_sistem_seleksi_dan_pengembangan);

        return view('sdm1.edit',compact('sistem_seleksi_dan_pengembangan', 'dept'));

    }

    public function edit(Request $request, $id_sistem_seleksi_dan_pengembangan)
    {
        //dd($id_sistem_seleksi_dan_pengembangan);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $sistem_seleksi_dan_pengembangan = Sdm1::find($id_sistem_seleksi_dan_pengembangan)->where('id_departemen', $id_departemen)->first();
        return view('sdm1.edit',compact('sistem_seleksi_dan_pengembangan', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $sistem_seleksi_dan_pengembangan = Sdm1::find($member);
        $sistem_seleksi_dan_pengembangan->keterangan_seleksi_dan_pengembangan = $request->keterangan_seleksi_dan_pengembangan;
        $sistem_seleksi_dan_pengembangan->id_departemen= $request->user()->id_departemen;

        $sistem_seleksi_dan_pengembangan->save();
        return redirect()->route('standar4sdm01.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    public function sdm1Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $sistem_seleksi_dan_pengembangan = Sdm1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_seleksi_dan_pengembangan')
                        ->get(); 
        $pdf = PDF::loadView('sdm1.pdf', compact('sistem_seleksi_dan_pengembangan','visim'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

  
}
