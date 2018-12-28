<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RedaksiPengabdianFmipa;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class RedaksiPengabdianFmipaController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
     public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

           $redaksiPengabdianFmipa = RedaksiPengabdianFmipa::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('redaksi_pengabdian_fmipa', 'id_redaksiPeng', 'id_departemen')
                        ->get();

            
        
        $listdept=DB::table('departemen')
                    ->get();
            return view('redaksipengabdianfmipa/index',compact('redaksiPengabdianFmipa','dept', 'listdept'));
        }

    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('redakasipengabdian.create', compact('dept'));
}

    public function store(Request $request)
    {
        $redaksiPengabdianFmipa=new RedaksiPenelitianFmipa;
        $redaksiPengabdianFmipa->redaksi_pengabdian_fmipa = $request->redaksi_pengabdian_fmipa;
        $redaksiPengabdianFmipa->id_departemen= $request->user()->id_departemen;
        $redaksiPengabdianFmipa->save();
        return redirect()->route('redaksipengabdianfmipa.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_redaksiPeng)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $redaksiPengabdianFmipa = RedaksiPengabdianFmipa::find($id_redaksiPeng);

        return view('redakasipengabdianfmipa.edit',compact('redaksiPengabdianFmipa', 'dept'));

    }

    public function edit(Request $request, $id_redaksiPeng)
    {
        //dd($id_vmts);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $redaksiPengabdianFmipa = RedaksiPengabdianFmipa::find($id_redaksiPeng)->where('id_departemen', $id_departemen)->first();
        return view('redaksipengabdianfmipa.edit',compact('redaksiPengabdianFmipa', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $redaksiPengabdianFmipa = RedaksiPengabdianFmipa::find($member);
        $redaksiPengabdianFmipa->redaksi_pengabdian_fmipa = $request->redaksi_pengabdian_fmipa;
        $redaksiPengabdianFmipa->id_departemen= $request->user()->id_departemen;

        $redaksiPengabdianFmipa->save();
        return redirect()->route('redaksipengabdianfmipa.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 
    
}
