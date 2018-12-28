<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RedaksiPenelitian;
use App\TerlibatPenelitian;
use App\Penelitian;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class RedaksiPenelitianController extends Controller
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
           $date1 = Carbon::now()->startOfYear()->subYear(2);
           $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1); 
           $redaksipenelitian = RedaksiPenelitian::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('mahasiswa_terlibat', 'id_terlibatpenelitian', '=', 'redaksi_penelitian')
                        ->where('id_departemen', $id_departemen)
                        ->get();
            $totalM=Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_mahasiswa');

        }
        else
        {
 		   $date1 = Carbon::now()->startOfYear()->subYear(2);
       $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1); 
       $redaksipenelitian = RedaksiPenelitian::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('mahasiswa_terlibat', 'id_terlibatpenelitian', '=', 'redaksi_penelitian')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $totalM=Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->sum('jumlah_mahasiswa');
        }

        $terlibat_penelitian = TerlibatPenelitian::get();
        $mahasiswa_penelitian = Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_penelitian', 'desc')
                            ->get();
        $AB=RedaksiPenelitian::whereBetween('tahun', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->select(DB::raw('(jumlah_mahasiswa + total_mahasiswa) as AB'))
                            ->first();

            $listdept=DB::table('departemen')
                    ->get();
            return view('redaksipenelitian/index',compact('redaksipenelitian','dept', 'listdept', 'terlibat_penelitian', 'mahasiswa_penelitian', 'totalM', 'AB'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $member){

        $redaksipenelitian = RedaksiPenelitian::find($member);
        $redaksipenelitian->redaksi_penelitian = $request->redaksi_penelitian;
        $redaksipenelitian->jumlah_mahasiswa=$request->jumlah_mahasiswa;
        $redaksipenelitian->total_mahasiswa=$request->total_mahasiswa;
        $redaksipenelitian->id_departemen= $request->user()->id_departemen;
        $redaksipenelitian->save();
        return redirect()->route('redaksipenelitian.index')
                        ->with('message2','Data berhasil diubah');
                        
          } 

   

  
}
