<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\SistemInformasi;
use App\Kategori_SI;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Excel;
use App\Komersial;

class SistemInformasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
        
    	$id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

    	$sisteminformasii = SistemInformasi::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->join('kategori_sistem_informasi', 'id_kategori', '=', 'role_kategori')
                                            ->where('id_departemen', $id_departemen)
                                            ->get();

		return view('Sisteminformasi/sistem_informasi', compact('sisteminformasii', 'dept'));    	
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
    	 request()->validate([
            'nama_sistem' => 'required',
            'bentuk_si' => 'required',
            'pengembang' => 'required',
            'fitur_si' => 'required',
            'tampilan_muka' => 'required|image',
            'url'=> 'required',
        ]);

        $sisteminformasii=new SistemInformasi;
        $sisteminformasii ->nama_sistem = $request->nama_sistem;
        $sisteminformasii ->bentuk_si = $request->bentuk_si;
        $sisteminformasii ->url = $request->url;
        $sisteminformasii ->pengembang = $request->pengembang;
        $sisteminformasii ->fitur_si = $request->fitur_si;
        $sisteminformasii ->role_kategori = $request->role_kategori;
        $sisteminformasii->id_departemen= $request->user()->id_departemen;
        if($request->hasFile('tampilan_muka')){
		    $tampilan_muka = $request->file('tampilan_muka');
            $path= public_path().'/images/Tampilan_Sistem/';
            $filename=$tampilan_muka->getClientOriginalName();
            $tampilan_muka->move($path,$filename);
            $sisteminformasii->tampilan_muka=$filename;
		 }
         
        $sisteminformasii->save();
        $notification = array(
                'message' => 'Data Sistem Informasi Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('SistemInformasi.store')
                        ->with($notification);
    }

    public function update (Request $request, $member)
    {
        request()->validate([
            'nama_sistem' => 'required',
            'bentuk_si' => 'required',
            'pengembang' => 'required',
            'fitur_si' => 'required',
            'tampilan_muka' => 'required|image',
            'url' => 'required',
        ]);

        $sisteminformasii= SistemInformasi::find($member);
        $sisteminformasii ->nama_sistem = $request->nama_sistem;
        $sisteminformasii ->bentuk_si = $request->bentuk_si;
        $sisteminformasii ->url = $request->url;
        $sisteminformasii ->pengembang = $request->pengembang;
        $sisteminformasii ->fitur_si = $request->fitur_si;
        $sisteminformasii ->role_kategori = $request->role_kategori;
        $sisteminformasii->id_departemen= $request->user()->id_departemen;
        if($request->hasFile('tampilan_muka')){
            $tampilan_muka = $request->file('tampilan_muka');
            $path= public_path().'/images/Tampilan_Sistem/';
            $filename=$tampilan_muka->getClientOriginalName();
            $tampilan_muka->move($path,$filename);
            $sisteminformasii->tampilan_muka=$filename;
         }
         
        $sisteminformasii->save();
        $notification = array(
                'message' => 'Data Sistem Informasi Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('SistemInformasi.index')
                        ->with($notification);
    }

    public function destroy($id_si)
    {
        SistemInformasi::destroy($id_si);
        $notification = array(
                'message' => 'Data Sistem Informasi Berhasil Dihapus!',
                'alert-type' => 'success'
        );
        return redirect()->route('SistemInformasi.index')
                        ->with($notification);
    }

    //download pdf user
    public function downloadRedaksiUserSI(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
 
        $sisteminformasii = SistemInformasi::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->where('id_departemen', $id_departemen)
                                            ->get();


        
        $pdf = PDF::loadView('SistemInformasi.redaksi_ps', compact('sisteminformasii', 'dept'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Sistem Informasi '.$dept[0]->nama_departemen.'.pdf', array('Attachment'=>1));
    }
//download pdf fmipa
    public function downloadRedaksiFmipaSI(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $dateS = date("Y");
 
        $sisteminformasii = SistemInformasi::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->where('id_departemen', $id_departemen)
                                            ->get();

        $pl_komersial = Komersial::where('id_departemen', $id_departemen)
                                ->get();
        // $sisteminformasii = SistemInformasi::join('departemen', 'id_dept', '=', 'id_departemen')
        //                                     // ->where('id_departemen', 6)
        //                                     ->OrderBy('nama_hardware','asc')
        //                                     ->get();
        
        $pdf = PDF::loadView('SistemInformasi.redaksi_sa', compact('sisteminformasii', 'dept', 'pl_komersial', 'dateS'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Sistem Informasi FMIPA.pdf');
        // dd($perangkat_keras1);
    }

   public function download_excel_si(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
 
        $sisteminformasii = SistemInformasi::join('departemen', 'id_dept', '=', 'id_departemen')
                                            ->where('id_departemen', $id_departemen)
                                            ->get();

    Excel::create('Data Sistem Informasi', function($excel) use($dept, $sisteminformasii){
        $excel->sheet('Data Sistem Informasi', function($sheet) use($dept, $sisteminformasii){
          $sheet->setSize('A1', 7, 18);
          $sheet->setSize('B1', 40, 18);
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
            $sheet->loadView('SistemInformasi/Excel_Sistem_Informasi')->with("sisteminformasii", $sisteminformasii)->with("dept", $dept);
        });
     })->export('xlsx');
   }
}
