<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\RedaksiKegiatan;
use App\User;
use App\Kegiatan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class RedaksiKegiatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

           $redaksiKegiatan = RedaksiKegiatan::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksinya', 'id_redaksiKeg', 'id_departemen')
                        ->get();

            
        
        $listdept=DB::table('departemen')
                    ->get();
            return view('redaksikegiatan/index',compact('redaksiKegiatan','dept', 'listdept'));
        }

    public function create(Request $request){
      $id_departemen = $request->user()->id_departemen;
      $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
    return view('redakasikegiatan.create', compact('dept'));
}

    public function store(Request $request)
    {
        $redaksiKegiatan=new RedaksiPenelitianFmipa;
        $redaksiKegiatan->redaksinya = $request->redaksinya;
        $redaksiKegiatan->id_departemen= $request->user()->id_departemen;
        $redaksiKegiatan->save();
        return redirect()->route('redaksikegiatan.index')
                        ->with('message2','Data berhasil ditambahkan');

    }
    public function show(Request $request, $id_redaksiKeg)

    {
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $redaksiKegiatan = RedaksiKegiatan::find($id_redaksiKeg);

        return view('redakasikegiatan.edit',compact('redaksiKegiatan', 'dept'));

    }

    public function edit(Request $request, $id_redaksiKeg)
    {
        //dd($id_vmts);
        
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $redaksiKegiatan = RedaksiKegiatan::find($id_redaksiKeg)->where('id_departemen', $id_departemen)->first();
        return view('redaksikegiatan.edit',compact('redaksiKegiatan', 'dept'));
    }

  
    
   
    public function update(Request $request, $member){

        $redaksiKegiatan = RedaksiKegiatan::find($member);
        $redaksiKegiatan->redaksinya = $request->redaksinya;
        $redaksiKegiatan->id_departemen= $request->user()->id_departemen;

        $redaksiKegiatan->save();
        return redirect()->route('redaksikegiatan.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

}
