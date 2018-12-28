<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\RedaksiJumlah;
use App\User;
use App\Jumlah;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class RedaksiJumlahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

           $redaksiJumlah = RedaksiJumlah::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksi_jumlah', 'id_redaksiJum', 'id_departemen')
                        ->get();

            
        
        $listdept=DB::table('departemen')
                    ->get();
            return view('redaksijumlah/index',compact('redaksiJumlah','dept', 'listdept'));
        }

    public function create(Request $request){
      $id_departemen = $request->user()->id_departemen;
      $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
    return view('redakasijumlah.create', compact('dept'));
}

    public function store(Request $request)
    {
        $redaksiJumlah=new RedaksiJumlah;
        $redaksiJumlah->redaksi_jumlah = $request->redaksi_jumlah;
        $redaksiJumlah->id_departemen= $request->user()->id_departemen;
        $redaksiJumlah->save();
        return redirect()->route('redaksijumlah.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_redaksiJum)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $redaksiJumlah = RedaksiJumlah::find($id_redaksiJum);

        return view('redakasijumlah.edit',compact('redaksiJumlah', 'dept'));

    }

    public function edit(Request $request, $id_redaksiJum)
    {
        //dd($id_vmts);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $redaksiJumlah = RedaksiJumlah::find($id_redaksiJum)->where('id_departemen', $id_departemen)->first();
        return view('redaksijumlah.edit',compact('redaksiJumlah', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $redaksiJumlah = RedaksiJumlah::find($member);
        $redaksiJumlah->redaksi_jumlah = $request->redaksi_jumlah;
        $redaksiJumlah->id_departemen= $request->user()->id_departemen;

        $redaksiJumlah->save();
        return redirect()->route('redaksijumlah.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

}
