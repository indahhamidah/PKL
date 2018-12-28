<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\PerangkatKeras;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;

class PerangkatKerasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        // if(Auth::User()->id_departemen==10)
        // {
        //     $perangkat_keras = PerangkatKeras::join('departemen', 'id_dept', '=', 'id_departemen')
        //                                     ->get();
        // }
        // else
        // {
            $perangkat_keras = PerangkatKeras::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->where('id_departemen', $id_departemen)
                                            ->OrderBy('nama_hardware', 'asc')
                                            ->get();
        // }
        
		
        return view('PerangkatKeras/Perangkat_Keras', compact('perangkat_keras', 'dept'));    	
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
    	 
    	 request()->validate([
            'nama_hardware' => 'required',
            'spesifikasi' => 'required',
            'jumlah_item' => 'required',
            'keterangan_hw' => 'required',
        ]);

        $perangkat_keras=new PerangkatKeras;
        $perangkat_keras ->nama_hardware = $request->nama_hardware;
        $perangkat_keras ->spesifikasi = $request->spesifikasi;
        $perangkat_keras ->jumlah_item = $request->jumlah_item;
        $perangkat_keras ->keterangan_hw = $request->keterangan_hw;
        $perangkat_keras->id_departemen= $request->user()->id_departemen;
         
        $perangkat_keras->save();
        $notification = array(
                'message' => 'Data Perangkat Keras Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('Perangkat_Keras.store')
                        ->with($notification);
    }

    public function update (Request $request, $member)
    {
        request()->validate([
            'nama_hardware' => 'required',
            'spesifikasi' => 'required',
            'jumlah_item' => 'required',
            'keterangan_hw' => 'required',
        ]);

        $perangkat_keras= PerangkatKeras::find($member);
        $perangkat_keras ->nama_hardware = $request->nama_hardware;
        $perangkat_keras ->spesifikasi = $request->spesifikasi;
        $perangkat_keras ->jumlah_item = $request->jumlah_item;
        $perangkat_keras ->keterangan_hw = $request->keterangan_hw;
        $perangkat_keras->id_departemen= $request->user()->id_departemen;
         
        $perangkat_keras->save();
        $notification = array(
                'message' => 'Data Perangkat Keras Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Perangkat_Keras.index')
                        ->with($notification);
    }

    public function destroy($id_hardware)
    {
        PerangkatKeras::destroy($id_hardware);
        $notification = array(
                'message' => 'Data Perangkat Keras Berhasil Dihapus!',
                'alert-type' => 'warning'
            );        
        return redirect()->route('Perangkat_Keras.index')
                        ->with($notification);
    }

//download pdf user
     public function downloadRedaksiUser(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
 
        $perangkat_keras = PerangkatKeras::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->where('id_departemen', $id_departemen)
                                            ->OrderBy('nama_hardware', 'asc')
                                            ->get();


        
        $pdf = PDF::loadView('PerangkatKeras/redaksi_ps', compact('perangkat_keras', 'dept'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Perangkat Keras '.$dept[0]->nama_departemen.'.pdf', array('Attachment'=>1));
    }

    public function downloadRedaksiFmipa(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
 
        $perangkat_keras = PerangkatKeras::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->where('id_departemen', $id_departemen)
                                            ->get();

        $perangkat_keras1 = PerangkatKeras::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->where('id_departemen', 6)
                                            ->OrderBy('nama_hardware','asc')
                                            ->get();
        
        $pdf = PDF::loadView('PerangkatKeras/redaksi_sa', compact('perangkat_keras', 'perangkat_keras1', 'dept'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Perangkat Keras FMIPA.pdf');
        // dd($perangkat_keras1);
    }  

       // excel perangkat keras
    public function download_excel_hw(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $perangkat_keras = PerangkatKeras::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->where('id_departemen', $id_departemen)
                                            ->OrderBy('nama_hardware', 'asc')
                                            ->get();
    Excel::create('Data Perangkat Keras', function($excel) use($dept, $perangkat_keras){
        $excel->sheet('Data Perangkat Keras', function($sheet) use($dept, $perangkat_keras){
          $sheet->setSize('A1', 7, 18);
          $sheet->setSize('B1', 20, 18);
          $sheet->setSize('C1', 45, 18);
          $sheet->setSize('D1', 25, 18);
          $sheet->setSize('E1', 40, 18);
          $sheet->cells('A1:E4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:E88', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
            $sheet->loadView('PerangkatKeras/Excel_Perangkat_Keras')->with("perangkat_keras", $perangkat_keras)->with("dept", $dept);
        });
     })->export('xlsx');
   }
}
