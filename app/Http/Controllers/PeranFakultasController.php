<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\PeranFakultas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;
use Carbon\Carbon;

class PeranFakultasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        
        $peran=PeranFakultas::join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->get();
		
        return view('Pembelajaran/Peran_Fakultas', compact('dept', 'peran'));    	
    }

    public function update_peran(Request $request)
    {
        $user = auth()->user();
        $peran_= PeranFakultas::where("id_departemen", $user->id_departemen)->get();
        foreach ($peran_ as $key => $data) {
            $peran = PeranFakultas::where("id_pembelajaran", $data->id_pembelajaran)->first();
            $peran ->keterangan = $request->keterangan;
            $peran ->save();
        }
        $notification = array(
                'message' => 'Peran Fakultas Berhasil Diperbarui!',
                'alert-type' => 'success'
            );
        return redirect()->route('Peran_Fakultas.index')
                        ->with($notification);
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
    
        return redirect()->route('Peran_Fakultas.store');
    }

    public function update (Request $request, $member)
    {
     
        return redirect()->route('Peran_Fakultas.index');
    }

    public function destroy($id_pembelajaran)
    {
        // ContohSoal::destroy($id_conso);
        // return redirect()->route('Contoh_Soal.index')
        //                 ->with('message2','Data berhasil dihapus');
    }

    
//download pdf user
     
}
