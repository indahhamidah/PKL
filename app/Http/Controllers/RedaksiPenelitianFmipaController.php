<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RedaksiPenelitianFmipa;
use App\Penelitian;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class RedaksiPenelitianFmipaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
     public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

           $redaksiPenelitianFmipa = RedaksiPenelitianFmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('redaksi_penelitian_fmipa', 'id_redaksiPen', 'id_departemen')
                        ->get();

            
        
        $listdept=DB::table('departemen')
                    ->get();
            return view('redaksipenelitianfmipa/index',compact('redaksiPenelitianFmipa','dept', 'listdept'));
        }

    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('redakasipenelitian.create', compact('dept'));
}

    public function store(Request $request)
    {
        $redaksiPenelitianFmipa=new RedaksiPenelitianFmipa;
        $redaksiPenelitianFmipa->redaksi_penelitian_fmipa = $request->redaksi_penelitian_fmipa;
        $redaksiPenelitianFmipa->id_departemen= $request->user()->id_departemen;
        $redaksiPenelitianFmipa->save();
        return redirect()->route('redaksipenelitianfmipa.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_vmts)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $redaksiPenelitianFmipa = RedaksiPenelitianFmipa::find($id_vmts);

        return view('redakasipenelitianfmipa.edit',compact('redaksiPenelitianFmipa', 'dept'));

    }

    public function edit(Request $request, $id_redaksiPen)
    {
        //dd($id_vmts);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $redaksiPenelitianFmipa = RedaksiPenelitianFmipa::find($id_redaksiPen)->where('id_departemen', $id_departemen)->first();
        return view('redaksipenelitianfmipa.edit',compact('redaksiPenelitianFmipa', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $redaksiPenelitianFmipa = RedaksiPenelitianFmipa::find($member);
        $redaksiPenelitianFmipa->redaksi_penelitian_fmipa = $request->redaksi_penelitian_fmipa;
        $redaksiPenelitianFmipa->id_departemen= $request->user()->id_departemen;

        $redaksiPenelitianFmipa->save();
        return redirect()->route('redaksipenelitianfmipa.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

}
