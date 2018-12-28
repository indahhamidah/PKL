<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vmts;
use App\User;
use App\LampiranStandar1;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class VmtsController extends Controller
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
       

           $vmts = Vmts::join('departemen', 'id_dept', '=', 'id_departemen')
                   ->where('id_departemen', $id_departemen)
                   ->get();

        }
        else
        {
 		

           $vmts = Vmts::join('departemen', 'id_dept', '=', 'id_departemen')
                   ->where('id_departemen', $id_departemen)
                   ->get(); 
        }
        $lampiranstandar1 = LampiranStandar1::join('departemen', 'id_dept', '=', 'id_departemen')
                                ->where('id_departemen', $id_departemen)
                                ->get();


            $listdept=DB::table('departemen')
                    ->get();
            return view('vmts/index',compact('vmts','dept', 'listdept', 'lampiranstandar1'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('vmts.create', compact('dept'));
}

    public function store(Request $request)
    {
        $vmts=new Vmts;
        $vmts->visimisi = $request->visimisi;
        $vmts->tahun_awal = $request->tahun_awal;
        $vmts->tahun_selesai = $request->tahun_selesai;
        $vmts->id_departemen= $request->user()->id_departemen;
        $vmts->save();
        return redirect()->route('standar1visimisi.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_vmts)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        
        $vmts = Vmts::find($id_vmts); 

        return view('vmts.show',compact('vmts', 'dept'));

    }

    public function edit(Request $request, $id_vmts)
    {
        //dd($id_vmts);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $vmts = Vmts::find($id_vmts)->where('id_departemen', $id_departemen)->first();
        return view('vmts.edit',compact('vmts', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $vmts = Vmts::find($member);
        $vmts->visimisi = $request->visimisi;
        // $vmts->tahun_awal = $request->tahun_awal;
        // $vmts->tahun_selesai = $request->tahun_selesai;
        $vmts->id_departemen= $request->user()->id_departemen;

        $vmts->save();
        return redirect()->route('standar1visimisi.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    public function vmtsDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $visim = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);

          
        $vmts = Vmts::whereBetween('tahun_awal', [$dateX,$dateW])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('visimisi')
                        ->get(); 
        $pdf = PDF::loadView('vmts.pdf', compact('vmts','visim'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function lampiranUpload(Request $request){

        $this->validate($request, [
        'nama_lampiran' => 'required',
        'kode_lampiran' => 'required',
        'lemari_rak'    => 'required',
        'lampiran_standar1'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


              $lampiranstandar1 = new LampiranStandar1;
              $lampiranstandar1->nama_lampiran = $request->nama_lampiran;
              $lampiranstandar1->kode_lampiran = $request->kode_lampiran;
              $lampiranstandar1->lemari_rak    = $request->lemari_rak;
              $lampiranstandar1->lampiran_standar1 = $request->lampiran_standar1;
              if(Auth::user()->id_departemen==10){
                $lampiranstandar1->id_departemen      = $request->id_departemen;
               }
              else{
                $lampiranstandar1->id_departemen      = $request->user()->id_departemen;
                }

        if($request->hasFile('lampiran_standar1')){
            $lampiran_standar1 = $request->file('lampiran_standar1');
            $path= public_path().'/images/lampiranstandar1/';
            $filename=$lampiran_standar1->getClientOriginalName();
            $lampiran_standar1->move($path,$filename);
            $lampiranstandar1->lampiran_standar1=$filename;
         }
            
            $lampiranstandar1 ->save();
             return redirect()->route('standar1visimisi.index')
                              ->with('message2','Data berhasil diunggah'); 
     }

     public function updateLampiran1 (Request $request, $member)
    {
        request()->validate([
            'nama_lampiran' => 'required',
            'kode_lampiran' => 'required',
            'lemari_rak'    => 'required',
            'lampiran_standar1'   => 'mimes:pdf,docx,doc,png,jpg|max:10000',
            
        ]); 
        
        $lampiranstandar1=LampiranStandar1::find($member);
        $lampiranstandar1->nama_lampiran=$request->nama_lampiran;
        $lampiranstandar1->kode_lampiran = $request->kode_lampiran;
        $lampiranstandar1->lemari_rak    = $request->lemari_rak;
        if($request->hasFile('lampiran_standar1')){
            $lampiran_standar1 = $request->file('lampiran_standar1');
            $path= public_path().'/images/lampiran_standar1/';
            $filename=$lampiran_standar1->getClientOriginalName();
            $lampiran_standar1->move($path,$filename);
            $lampiranstandar1->lampiran_standar1=$filename;
         }
        $lampiranstandar1->id_departemen= $request->user()->id_departemen;
        $lampiranstandar1->save();

        return redirect()->route('standar1visimisi.index')
                        ->with('message2','Data berhasil diubah');
    }

     public function destroy($id_lampiranstan1)
    {
        LampiranStandar1::destroy($id_lampiranstan1);

        return redirect()->route('standar1visimisi.index')
                         ->with('message2','Data berhasil dihapus');
    }
    
     public function destroy1($id_vmts)
    {
        Vmts::destroy($id_vmts);

        return redirect()->route('standar1visimisi.index')
                         ->with('message2','Data berhasil dihapus');
    }

  
}
