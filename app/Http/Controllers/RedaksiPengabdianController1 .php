<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RedaksiPengabdian;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class RedaksiPengabdianController extends Controller
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

           $redaksipengabdian = RedaksiPengabdian::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
           				->select('redaksi_pengabdian', 'id_redaksi', 'id_departemen')
                        ->get();

        }
        else
        {
 			$redaksipengabdian = RedaksiPengabdian::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_pengabdian', 'id_redaksi', 'id_departemen')
                        ->get();
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('redaksipengabdian/index',compact('redaksipengabdian','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request){
	  $id_departemen = $request->user()->id_departemen;
	  $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
	return view('redaksipengabdian.create', compact('dept'));
}

    public function store(Request $request){
        $redaksipengabdian=new RedaksiPengabdian;
        $redaksipengabdian->redaksi_pengabdian = $request->redaksi_pengabdian;
        $redaksipengabdian->id_departemen= $request->user()->id_departemen;
        $redaksipengabdian->save();
        return redirect()->route('redaksipengabdian.index')
                        ->with('message2','Data berhasil ditambahkan');

    }

    
    public function edit(Request $request, $id_redaksiPeng)
    {
        //dd($id_vmts);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $redaksipengabdian = RedaksiPengabdian::find($id_redaksiPeng)->where('id_departemen', $id_departemen)->first();
        return view('redaksipengabdian.edit',compact('redaksipengabdian', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $redaksipengabdian = RedaksiPengabdian::find($member);
        $redaksipengabdian->redaksi_pengabdian = $request->redaksi_pengabdian;
        $redaksipengabdian->id_departemen= $request->user()->id_departemen;

        $redaksipengabdian->save();
        return redirect()->route('redaksipengabdian.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

   

  
}
