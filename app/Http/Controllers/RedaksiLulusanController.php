<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\RedaksiLulusan;
use App\User;
use App\Lulusan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class RedaksiLulusanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

           $redaksiLulusan = RedaksiLulusan::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_lulusan', 'id_redaksiLus', 'id_departemen')
                        ->get();

            
        
        $listdept=DB::table('departemen')
                    ->get();
            return view('redaksilulusan/index',compact('redaksiLulusan','dept', 'listdept'));
        }

    public function create(Request $request){
      $id_departemen = $request->user()->id_departemen;
      $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
    return view('redakasilulusan.create', compact('dept'));
}

    public function store(Request $request)
    {
        $redaksiLulusan=new RedaksiLulusan;
        $redaksiLulusan->redaksi_lulusan = $request->redaksi_lulusan;
        $redaksiLulusan->id_departemen= $request->user()->id_departemen;
        $redaksiLulusan->save();
        return redirect()->route('redaksilulusan.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_redaksiLus)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $redaksiLulusan = RedaksiLulusan::find($id_redaksiLus);

        return view('redakasilulusan.edit',compact('redaksiLulusan', 'dept'));

    }

    public function edit(Request $request, $id_redaksiLus)
    {
        //dd($id_vmts);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $redaksiLulusan = RedaksiLulusan::find($id_redaksiLus)->where('id_departemen', $id_departemen)->first();
        return view('redaksilulusan.edit',compact('redaksiLulusan', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $redaksiLulusan = RedaksiLulusan::find($member);
        $redaksiLulusan->redaksi_lulusan = $request->redaksi_lulusan;
        $redaksiLulusan->id_departemen= $request->user()->id_departemen;

        $redaksiLulusan->save();
        return redirect()->route('redaksilulusan.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

}
