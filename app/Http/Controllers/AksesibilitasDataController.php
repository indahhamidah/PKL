<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\JenisDataAkses;
use App\SistemKelolaData;
use App\AksesibilitasData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Excel;
use PDF;

class AksesibilitasDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
        
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $akses_data = DB::table('aksesibilitas_data')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                    ->join('jenis_akses_data', 'id_jenis_akses', '=', 'id_jenis_akses_data')
                                                    ->join('sistem_kelola_data', 'id_sistem_kelola_datax', '=', 'id_sistem_kelola')
                                                    ->where('id_departemen', $id_departemen)
                                                    ->orderBy('id_akses_data', 'asc')
                                                    ->get();
        $jenis_data=JenisDataAkses::get();
        $sistem_data=SistemKelolaData::get();
        $nilai1=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 1)
                                   ->count();
        $nilai2=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 2)
                                   ->count();
        $nilai3=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 3)
                                   ->count();
        $nilai4=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 4)
                                   ->count();

        // echo($id_departemen);
        // dd($akses_data);
        return view('SistemInformasi/aksesibilitas_data', compact('akses_data', 'dept','jenis_data','sistem_data', 'nilai1', 'nilai2', 'nilai3', 'nilai4'));       
    }

    public function create()
    {
        
    }

    public function store (Request $request)
    {
         
         // dd ($sisteminformasii->tampilan_muka);
    }

    public function update (Request $request, $member)
    {
        // $user = auth()->user();
        $id_departemen = $request->user()->id_departemen;
        // dd($request);
        // $akses_data= AksesibilitasData::find($member);
        $akses_datas= AksesibilitasData::where('id_departemen', $id_departemen)->get();
        foreach ($akses_datas as $key => $data) 
        {
            $akses_data = AksesibilitasData::where("id_akses_data", $data->id_akses_data)->first();
            $akses_data->id_jenis_akses_data = $request->{'jenis_akses_'.$data->id_jenis_akses_data};
            $akses_data->id_sistem_kelola = $request->{'jenis_data_'.$data->id_jenis_akses_data};
            $akses_data->save();
        }
        $notification = array(
                'message' => 'Aksesibilitas Data Berhasil Diubah!',
                'alert-type' => 'success'
        );
        return redirect()->route('Aksesibilitas_Data.index')
                        ->with($notification);
    }
    
      // excel praktis
    public function download_excel_akses_data(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $akses_data = DB::table('aksesibilitas_data')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                    ->join('jenis_akses_data', 'id_jenis_akses', '=', 'id_jenis_akses_data')
                                                    ->join('sistem_kelola_data', 'id_sistem_kelola_datax', '=', 'id_sistem_kelola')
                                                    ->where('id_departemen', $id_departemen)
                                                    ->orderBy('id_akses_data', 'asc')
                                                    ->get();
        $jenis_data=JenisDataAkses::get();
        $sistem_data=SistemKelolaData::get();
        $nilai1=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 1)
                                   ->count();
        $nilai2=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 2)
                                   ->count();
        $nilai3=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 3)
                                   ->count();
        $nilai4=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 4)
                                   ->count();

     Excel::create('Aksesibilitas Data', function($excel) use($id_departemen, $dept, $akses_data, $jenis_data, $sistem_data, $nilai1, $nilai2, $nilai3, $nilai4){
        $excel->sheet('Aksesibilitas Data', function($sheet) use($id_departemen, $dept, $akses_data, $jenis_data, $sistem_data, $nilai1, $nilai2, $nilai3, $nilai4){
          $sheet->setSize('A1', 10, 18);
          $sheet->setSize('A2', 10, 18);
          $sheet->setSize('A3', 10, 18);
          $sheet->setSize('B1', 25, 18);
          $sheet->setSize('B2', 25, 18);
          $sheet->setSize('B3', 25, 18);
          $sheet->setSize('C2', 25, 18);
          $sheet->setSize('C3', 25, 18);
          $sheet->setSize('D2', 25, 18);
          $sheet->setSize('D3', 25, 18);
          $sheet->setSize('E2', 25, 18);
          $sheet->setSize('E3', 25, 18);
          $sheet->setSize('F2', 25, 18);
          $sheet->setSize('F3', 25, 18);
          $sheet->cells('A1:F4', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          $sheet->cells('A5:F88', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => false
            ));
          });
          $sheet->cells('A19:F19', function($cells) {
            $cells->setFont(array(
                'family'     => 'Arial',
                'size'       => '10',
                'bold'       => true
            ));
          });
          // $sheet->setSize('B3', 25, 18);
            $sheet->loadView('SistemInformasi/Excel_Aksesibilitas_Data')->with("akses_data", $akses_data)->with("jenis_data", $jenis_data)->with("sistem_data", $sistem_data)->with("nilai1", $nilai1)->with("nilai2", $nilai2)->with("nilai3", $nilai3)->with("nilai4", $nilai4);
        });
     })->export('xlsx');
   }

   //download pdf user
    public function download_pdf_akses_data(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $akses_data = DB::table('aksesibilitas_data')->join('departemen', 'id_dept', '=', 'id_departemen')
                                                    ->join('jenis_akses_data', 'id_jenis_akses', '=', 'id_jenis_akses_data')
                                                    ->join('sistem_kelola_data', 'id_sistem_kelola_datax', '=', 'id_sistem_kelola')
                                                    ->where('id_departemen', $id_departemen)
                                                    ->orderBy('id_akses_data', 'asc')
                                                    ->get();
        $jenis_data=JenisDataAkses::get();
        $sistem_data=SistemKelolaData::get();
        $nilai1=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 1)
                                   ->count();
        $nilai2=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 2)
                                   ->count();
        $nilai3=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 3)
                                   ->count();
        $nilai4=AksesibilitasData::where('id_departemen', $id_departemen)
                                   ->where('id_sistem_kelola', 4)
                                   ->count();

        $pdf = PDF::loadView('SistemInformasi/pdf_aksesibilitas_data', compact('akses_data', 'jenis_data', 'sistem_data', 'nilai1', 'nilai2', 'nilai3', 'nilai4', 'dept'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Aksesibilitas Data '.$dept[0]->nama_departemen.'.pdf', array('Attachment'=>1));
    }
}
