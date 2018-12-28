<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\Sdmf2;
use App\Sdmf3;
use App\Sdmfmipa1;
use App\Sdmf5;
use App\Sdmfmipa2;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;
use Carbon\Carbon;

class RedaksiEmpataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
           	
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
    	//
    }

    public function update (Request $request, $member)
    {
        //
    }

    public function destroy($id_hardware)
    {

    }


    public function download_Redaksi_empata(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmkf2 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $sdmf2s = Sdmf2::whereBetween('tahun_sdmf2', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf2', 'desc')
                        ->get();

        $sdmkf3 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $sdmf3s = Sdmf3::whereBetween('tahun_sdmf3', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf3', 'desc')
                        ->get();


        $pandangan_fmipa_tentang_dosen_tetap = Sdmfmipa1::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_pandangan_fmipa_tentang_dosen_tetap')
                        ->get(); 

        $sdmkf5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        $sdmf5s = Sdmf5::whereBetween('tahun_sdmf5', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf5', 'desc')
                        ->get();

        $pandangan_fmipa_tentang_tendik = Sdmfmipa2::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('keterangan_pandangan_fmipa_tentang_tendik')
                        ->get(); 

        $pdf = PDF::loadView('Redaksi_Empata.Redaksi_Standar_Empata', compact('sdmf2s','sdmkf2','sdmf3s','sdmkf3','pandangan_fmipa_tentang_dosen_tetap','sdmf5s','sdmkf5','pandangan_fmipa_tentang_tendik'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
    }  

   
}
