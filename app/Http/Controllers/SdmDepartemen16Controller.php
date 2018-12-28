<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\SdmDepartemen16; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;
use Carbon\Carbon;
 
class SdmDepartemen16Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        
        $peran=SdmDepartemen16::join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->get();
		
        return view('Sdm016/Sdm_Departemen_16', compact('dept', 'peran'));    	
    }

    public function update_peran(Request $request)
    {
        $user = auth()->user();
        $peran_= SdmDepartemen16::where("id_departemen", $user->id_departemen)->get();
        foreach ($peran_ as $key => $data) {
            $peran = SdmDepartemen16::where("id_sdm_16", $data->id_sdm_16)->first();
            $peran ->keterangan = $request->keterangan;
            $peran ->save();
        }

        return redirect()->route('Sdm_Departemen_16.index');
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
    
        return redirect()->route('Sdm_Departemen_16.store');
    }

    public function update (Request $request, $member)
    {
     
        return redirect()->route('Kurikulum_Departemen_8.index');
    }

    public function destroy($id_sdm_16)
    {
        // ContohSoal::destroy($id_conso);
        // return redirect()->route('Contoh_Soal.index')
        //                 ->with('message2','Data berhasil dihapus');
    }

    
//download pdf user
     
}
