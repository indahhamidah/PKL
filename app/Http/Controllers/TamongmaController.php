<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamongma;
use App\KerjasamaDalam;
use App\KerjasamaLuar;
use App\User;
use App\LampiranStandar2;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class TamongmaController extends Controller
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

           $tamongma = Tamongma::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				      //->select('tamongjama','id_tamongjama', 'id_departemen')
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
           $kerjasamaDalam = kerjasamaDalam::whereBetween('tahun_mulai', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
            $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_mulai', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();

        }
        else
        {
 			$tamongma = Tamongma::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        //->select('tamongjama','id_tamongjama', 'id_departemen')
                        ->get(); 
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $kerjasamaDalam = kerjasamaDalam::whereBetween('tahun_mulai', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
            $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_mulai', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
        }

        $lampiranstandar2 = LampiranStandar2::join('departemen', 'id_dept', '=', 'id_departemen')
                                ->where('id_departemen', $id_departemen)
                                ->get();

            $listdept=DB::table('departemen')
                    ->get();

            return view('tamongma/index',compact('tamongma','dept', 'listdept', 'lampiranstandar2', 'kerjasamaDalam', 'kerjasamaLuar'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
        	  $id_departemen = $request->user()->id_departemen;
        	  $dept          =DB::table('departemen')->where('id_dept', $id_departemen)->get();
        	return view('tamongma.create', compact('dept'));
        }

    public function store(Request $request)
    {


        $tamongma = new Tamongma;
        $tamongma ->tamongjama    = $request->tamongjama;
        $tamongma->tahun_awal = $request->tahun_awal;
        $tamongma->tahun_selesai = $request->tahun_selesai;
        $tamongma ->id_departemen = $request->user()->id_departemen;
        $tamongma ->save();
        return redirect()->route('standar2tamongma.index')
                        ->with('message2','Data berhasil ditambahkan');
                            
    }

    public function show(Request $request, $id_tamongjama)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $tamongma = Tamongma::find($id_tamongjama);

        return view('tamongma.show',compact('tamongma', 'dept'));

    }

   public function edit(Request $request, $id_tamongjama)
    {
        //dd($id_vmts);
        
        $id_departemen = $request->user()->id_departemen;
        $dept          =DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $tamongma      = Tamongma::find($id_tamongjama)->where('id_departemen', $id_departemen)->first();

        return view('tamongma.edit',compact('tamongma', 'dept'));
    }

    public function update(Request $request, $member){

        $tamongma = Tamongma::find($member);
        $tamongma ->tamongjama = $request->tamongjama;
        $tamongma ->id_departemen= $request->user()->id_departemen;

        $tamongma->save();
        return redirect()->route('standar2tamongma.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

    
    public function tamongmaDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $tamong        = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        $tamongma = Tamongma::whereBetween('tahun_awal', [$dateX,$dateW])
                ->join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->select('tamongjama')
                ->get(); 
        $pdf = PDF::loadView('tamongma.pdf', compact('tamongma','tamong'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function lampiran2Upload(Request $request){

        $this->validate($request, [
        'nama_lampiran2' => 'required',
        'kode_lampiran' => 'required',
        'lemari_rak'    => 'required',
        'lampiran_standar2'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


              $lampiranstandar2 = new LampiranStandar2;
              $lampiranstandar2->nama_lampiran2 = $request->nama_lampiran2;
              $lampiranstandar2->kode_lampiran = $request->kode_lampiran;
              $lampiranstandar2->lemari_rak    = $request->lemari_rak;
              $lampiranstandar2->lampiran_standar2 = $request->lampiran_standar2;
              if(Auth::user()->id_departemen==10){
                $lampiranstandar2->id_departemen      = $request->id_departemen;
               }
              else{
                $lampiranstandar2->id_departemen      = $request->user()->id_departemen;
                }

        if($request->hasFile('lampiran_standar2')){
            $lampiran_standar2 = $request->file('lampiran_standar2');
            $path= public_path().'/images/lampiranstandar2/';
            $filename=$lampiran_standar2->getClientOriginalName();
            $lampiran_standar2->move($path,$filename);
            $lampiranstandar2->lampiran_standar2=$filename;
         }
            
            $lampiranstandar2 ->save();
             return redirect()->route('standar2tamongma.index')
                              ->with('message2','Data berhasil diunggah'); 
     }

     public function updateLampiran2 (Request $request, $member)
    {
        request()->validate([
            'nama_lampiran2' => 'required',
            'kode_lampiran' => 'required',
            'lemari_rak'    => 'required',
            'lampiran_standar2'   => 'mimes:pdf,docx,doc,png,jpg|max:10000',
            
        ]); 
        
        $lampiranstandar2=LampiranStandar2::find($member);
        $lampiranstandar2->nama_lampiran2=$request->nama_lampiran2;
        $lampiranstandar2->kode_lampiran = $request->kode_lampiran;
        $lampiranstandar2->lemari_rak    = $request->lemari_rak;
        if($request->hasFile('lampiran_standar2')){
            $lampiran_standar2 = $request->file('lampiran_standar2');
            $path= public_path().'/images/lampiran_standar2/';
            $filename=$lampiran_standar2->getClientOriginalName();
            $lampiran_standar2->move($path,$filename);
            $lampiranstandar2->lampiran_standar2=$filename;
         }
        if(Auth::user()->id_departemen==10){
                $lampiranstandar2->id_departemen      = $request->id_departemen;
               }
              else{
                $lampiranstandar2->id_departemen      = $request->user()->id_departemen;
                }
        $lampiranstandar2->save();

        return redirect()->route('standar2tamongma.index')
                        ->with('message2','Data berhasil diubah');
    }
    
     public function destroy($id_lampiranstan2)
    {
        LampiranStandar2::destroy($id_lampiranstan2);

        return redirect()->route('standar2tamongma.index')
                         ->with('message2','Data berhasil dihapus');
    }

    public function Standar2Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
                 $kerdal = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $tamongma = Tamongma::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('tamongjama','id_tamongjama', 'id_departemen')
                        ->get();
        $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kerjasamaDalam = KerjasamaDalam::whereBetween('tahun_mulai', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_mulai', 'asc')
                        ->get();
        $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_mulai', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
        $pdf = PDF::loadView('tamongma.standar2', compact('tamongma', 'kerjasamaDalam','kerdal', 'kerjasamaLuar'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
    }
     public function destroy1($id_tamongjama)
    {
        Tamongma::destroy($id_tamongjama);

        return redirect()->route('standar2tamongma.index')
                         ->with('message2','Data berhasil dihapus');
    }



    }