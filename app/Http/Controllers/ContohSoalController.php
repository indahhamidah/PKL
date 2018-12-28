<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\ContohSoal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;
use Carbon\Carbon;

class ContohSoalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        
        $date1 = Carbon::now()->startOfYear()->subYear(1);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $contoh=ContohSoal::whereBetween('tahun', [$date1, $date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun', 'desc')
                            ->get();
		
        return view('Pembelajaran/Contoh_Soal', compact('dept', 'contoh'));    	
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
    	request()->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'conso' => 'required|mimes:pdf,docs,doc|max:10000',
            'silabus' => 'required|mimes:pdf,docs,doc|max:10000',
            'tahun'=>'required',
        ]); 
    	
        $contoh= new ContohSoal;
        $contoh->kode_mk=$request->kode_mk;
        $contoh->nama_mk=$request->nama_mk;
        if($request->hasFile('conso')){
            $conso = $request->file('conso');
            $path= public_path().'/images/Contoh_Soal/';
            $filename=$conso->getClientOriginalName();
            $conso->move($path,$filename);
            $contoh->conso=$filename;
         }
        if($request->hasFile('silabus')){
            $silabus = $request->file('silabus');
            $path= public_path().'/images/Silabus/';
            $filename=$silabus->getClientOriginalName();
            $silabus->move($path,$filename);
            $contoh->silabus=$filename;
         }
        $contoh->tahun=$request->tahun;
        $contoh->id_departemen= $request->user()->id_departemen;
        $contoh->save();

        return redirect()->route('Contoh_Soal.store');
    }

    public function update (Request $request, $member)
    {
        request()->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'conso' => 'required|mimes:pdf,docs,doc|max:10000',
            'silabus' => 'required|mimes:pdf,docs,doc|max:10000',
            'tahun'=>'required',
        ]); 
        
        $contoh=ContohSoal::find($member);
        $contoh->kode_mk=$request->kode_mk;
        $contoh->nama_mk=$request->nama_mk;
        if($request->hasFile('conso')){
            $conso = $request->file('conso');
            $path= public_path().'/images/Contoh_Soal/';
            $filename=$conso->getClientOriginalName();
            $conso->move($path,$filename);
            $contoh->conso=$filename;
         }
        if($request->hasFile('silabus')){
            $silabus = $request->file('silabus');
            $path= public_path().'/images/Silabus/';
            $filename=$silabus->getClientOriginalName();
            $silabus->move($path,$filename);
            $contoh->silabus=$filename;
         }
        $contoh->tahun=$request->tahun;
        $contoh->id_departemen= $request->user()->id_departemen;
        $contoh->save();
        return redirect()->route('Contoh_Soal.index');
    }


    public function destroy($id_conso)
    {
        ContohSoal::destroy($id_conso);
        return redirect()->route('Contoh_Soal.index')
                        ->with('message2','Data berhasil dihapus');
    }

    
//download pdf user
     
}
