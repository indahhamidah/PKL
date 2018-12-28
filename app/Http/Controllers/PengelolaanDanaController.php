<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\PengelolaanDanaPS;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;
use Carbon\Carbon;
use Dompdf\Options;

class PengelolaanDanaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        
        $pengelolaan=PengelolaanDanaPS::where('id_departemen', $id_departemen)
                                      ->get();
        return view('PengelolaanDanaPS/Pengelolaan_Dana_PS', compact('dept', 'pengelolaan'));     
    }

    public function update_kelola(Request $request)
    {
        $user = auth()->user();
        $penjelasan_= PengelolaanDanaPS::where("id_departemen", $user->id_departemen)->get();
        foreach ($penjelasan_ as $key => $data) {
            $pengelolaan = PengelolaanDanaPS::where("id_kelola", $data->id_kelola)->first();
            $pengelolaan ->penjelasan_kelola = $request->penjelasan_kelola;
            $pengelolaan ->save();
        }
        $notification = array(
                'message' => 'Penjelasan Pengelolaan Dana Berhasil Diperbarui!',
                'alert-type' => 'success'
            );
        return redirect()->route('Penjelasan_Pengelolaan_Dana.index')
                        ->with($notification);
    }

    public function create()
    {
      
    }

    public function store (Request $request)
    {
    
      
    }

    public function destroy($id_pembelajaran)
    {
        
    }

    
//download pdf user
    public function download_pdf_pengelolaan_dana(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        
        $pengelolaan=PengelolaanDanaPS::where('id_departemen', $id_departemen)
                                      ->get();
        $pdf = PDF::loadView('PengelolaanDanaPS/Pdf_Pengelolaan_Dana', compact('dept', 'pengelolaan'));
        // $pdf->setBasePath(public_path().'/img/');
        $pdf ->setPaper('a4', 'portrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Pengelolaan Dana.pdf');
    }
     
}
