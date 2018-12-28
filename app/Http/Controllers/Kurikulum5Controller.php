<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulum5;
use App\BobotSks;
use App\Semester;
use App\BobotTugas;
use App\KelengkapanDeskripsi;
use App\KelengkapanSilabus;
use App\KelengkapanSap;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Kurikulum5Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $kurikulum5 = Kurikulum5::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $kurikulum5 = Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                         ->join('semester', 'id_semester', '=', 'id_semesterr')
                         ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->get();
        }
        else
        { 
        $kurikulum5 = Kurikulum5::where('id_departemen', $id_departemen)
              ->join('departemen', 'id_dept', '=', 'id_departemen')
              ->join('semester', 'id_semester', '=', 'id_semesterr')
              ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
              ->join('bobot_tugas', 'id_bobot_tugas', '=', 'id_bobottugas')
              ->join('kelengkapan_deskripsi', 'id_kelengkapan_deskripsi', '=', 'id_kelengkapandeskripsi')
              ->join('kelengkapan_silabus', 'id_kelengkapan_silabus', '=', 'id_kelengkapansilabus')
              ->join('kelengkapan_sap', 'id_kelengkapan_sap', '=', 'id_kelengkapansap')
              ->orderBy('semesterr')
              ->get();
        $totalinti=Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_inti');
        $totalinstitusional=Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_institusional');
        }
        $semester=Semester::get();
        $bobot_sks=BobotSks::get();
        $bobot_tugas = BobotTugas::get();
        $kelengkapan_deskripsi = KelengkapanDeskripsi::get();
        $kelengkapan_silabus = KelengkapanSilabus::get();
        $kelengkapan_sap = KelengkapanSap::get();
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('kurikulum5/index',compact('kurikulum5','dept','semester','bobot_sks','totalinstitusional','totalinti','bobot_tugas','kelengkapan_deskripsi','kelengkapan_silabus','kelengkapan_sap'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_mk_kurikulum5' => 'required',
            'kode_mk_kurikulum5' => 'required',
            'sks_inti' => 'required',
            'sks_institusional' => 'required',
            'penyelenggara' => 'required',
            // 'id_departemen' => 'required', 
        ]);

        $id_departemen = $request->user()->id_departemen;
                $kurikulum5 = DB::table('struktur_kurikulum')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('semester', 'id_semester', '=', 'id_semesterr')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_mk_kurikulum5', $request->sem_mk1_kurikulum5)
                        ->first();

        if($kurikulum5==null){  
        $kurikulum5=new Kurikulum5;
        $kurikulum5->id_semesterr = $request->id_semesterr;
        $kurikulum5->nama_mk_kurikulum5 = $request->nama_mk_kurikulum5;
        $kurikulum5->sks_inti = $request->sks_inti;
        $kurikulum5->sks_institusional = $request->sks_institusional;
        $kurikulum5->kode_mk_kurikulum5 = $request->kode_mk_kurikulum5;
        $kurikulum5->id_jumlah_sks            = $request->id_jumlah_sks;
        $kurikulum5->id_bobottugas               = $request->id_bobottugas;
        $kurikulum5->id_kelengkapandeskripsi               = $request->id_kelengkapandeskripsi;
        $kurikulum5->id_kelengkapansilabus               = $request->id_kelengkapansilabus;
        $kurikulum5->id_kelengkapansap               = $request->id_kelengkapansap;
        $kurikulum5->penyelenggara = $request->penyelenggara;
        $kurikulum5->id_departemen= $request->user()->id_departemen;

        $kurikulum5->save();
        return redirect()->route('kurikulum5.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('kurikulum5.index')
                        ->with('message','Tahun ada yang sama'); 
          }                
    }
     public function edit($id_struktur_kurikulum)
    {
        // dd($member);
        return view('kurikulum5/index',compact('kurikulum5'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_mk_kurikulum5' => 'required',
            'kode_mk_kurikulum5' => 'required',
            'sks_institusional' => 'required',
            'sks_inti' => 'required',
            'penyelenggara' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $kurikulum5 = DB::table('struktur_kurikulum')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->join('semester', 'id_semester', '=', 'id_semesterr')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_mk_kurikulum5', $request->nama_mk_kurikulum5)
                        ->where('id_jumlah_sks', $request->id_jumlah_sks)
                        ->where('sks_inti', $request->sks_inti)
                        ->where('sks_institusional', $request->sks_institusional)
                        ->where('id_bobottugas', $request->id_bobottugas)
                        ->where('id_kelengkapandeskripsi', $request->id_kelengkapandeskripsi)
                        ->where('id_kelengkapansilabus', $request->id_kelengkapansilabus)
                        ->where('id_kelengkapansap', $request->id_kelengkapansap)
                        ->where('kode_mk_kurikulum5', $request->kode_mk_kurikulum5)
                        ->where('penyelenggara', $request->penyelenggara)
                        ->where('nama_mk_kurikulum5', $request->sem_mk1_kurikulum5)
                        ->first();

        // $kurikulum5->update($request->all());
        if($kurikulum5==null){ 
        $kurikulum5 = Kurikulum5::find($member);
        $kurikulum5->id_semesterr = $request->id_semesterr;
        $kurikulum5->nama_mk_kurikulum5 = $request->nama_mk_kurikulum5;
        $kurikulum5->id_jumlah_sks             = $request->id_jumlah_sks;
        $kurikulum5->sks_inti = $request->sks_inti;
        $kurikulum5->sks_institusional = $request->sks_institusional;
        $kurikulum5->id_bobottugas               = $request->id_bobottugas;
        $kurikulum5->id_kelengkapandeskripsi               = $request->id_kelengkapandeskripsi;
        $kurikulum5->id_kelengkapansilabus               = $request->id_kelengkapansilabus;
        $kurikulum5->id_kelengkapansap               = $request->id_kelengkapansap;
        $kurikulum5->kode_mk_kurikulum5 = $request->kode_mk_kurikulum5;
        $kurikulum5->penyelenggara = $request->penyelenggara;
        $kurikulum5->id_departemen= $request->user()->id_departemen;

        $kurikulum5->save();
        return redirect()->route('kurikulum5.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('kurikulum5.index')
                        ->with('message','Tahun ada yang sama'); 
          }       
    }
    public function destroy($id_struktur_kurikulum)
    {
        Kurikulum5::destroy($id_struktur_kurikulum);
        return redirect()->route('kurikulum5.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function kurikulum5Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_kurikulum5' => $value->tahun_kurikulum5,'sem_kurikulum5' => $value->sem_kurikulum5,'kode_mk_kurikulum5' => $value->kode_mk_kurikulum5,'nama_mk_kurikulum5' => $value->nama_mk_kurikulum5,'bobot_sks_kurikulum5' => $value->bobot_sks_kurikulum5,'penyelenggara' => $value->penyelenggara, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('struktur_kurikulum')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('kurikulum5.index');
    }

    public function kurikulum5sExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $kur5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
           
            $kurikulum5 = Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('semester', 'id_semester', '=', 'id_semesterr')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->join('bobot_tugas', 'id_bobot_tugas', '=', 'id_bobottugas')
                        ->join('kelengkapan_deskripsi', 'id_kelengkapan_deskripsi', '=', 'id_kelengkapandeskripsi')
                        ->join('kelengkapan_silabus', 'id_kelengkapan_silabus', '=', 'id_kelengkapansilabus')
                        ->join('kelengkapan_sap', 'id_kelengkapan_sap', '=', 'id_kelengkapansap')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('semesterr')
                        ->get();

        $totalinti=Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_inti');
        $totalinstitusional=Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_institusional');

        $semester=Semester::get();
        $bobot_sks=BobotSks::get();
        $bobot_tugas=BobotTugas::get();
        $kelengkapan_deskripsi = KelengkapanDeskripsi::get();
        $kelengkapan_silabus = KelengkapanSilabus::get();
        $kelengkapan_sap = KelengkapanSap::get();
        Excel::create('Data Tabel 6.1.2.2', function($excel) use($id_departemen, $kur5, $kurikulum5, $semester, $bobot_sks, $bobot_tugas, $kelengkapan_deskripsi, $kelengkapan_silabus, $kelengkapan_sap, $totalinti, $totalinstitusional){
        $excel->sheet('Data Tabel 6.1.2.2', function($sheet) use($id_departemen, $kur5, $kurikulum5, $semester, $bobot_sks, $bobot_tugas, $kelengkapan_deskripsi, $kelengkapan_silabus, $kelengkapan_sap, $totalinti, $totalinstitusional){
          $sheet->setSize('A1', 15, 18);
          $sheet->setSize('B1', 40, 18);
          $sheet->setSize('C1', 45, 18);
          $sheet->setSize('D1', 40, 18);
          $sheet->setSize('E1', 20, 18);
          $sheet->setSize('F1', 20, 18);
          $sheet->setSize('G1', 40, 18);
          $sheet->setSize('H1', 40, 18);
          $sheet->setSize('I1', 40, 18);
          $sheet->setSize('J1', 40, 18);
          $sheet->setSize('K1', 40, 18);
          $sheet->setSize('L1', 40, 18);
          $sheet->setSize('M1', 40, 18);
          $sheet->setSize('N1', 40, 18);
          $sheet->setSize('O1', 40, 18);
          $sheet->loadView('kurikulum5/excel')->with("kur5", $kur5)->with("kurikulum5", $kurikulum5)->with("semester", $semester)->with("bobot_sks", $bobot_sks)->with("bobot_tugas", $bobot_tugas)->with("kelengkapan_deskripsi", $kelengkapan_deskripsi)->with("kelengkapan_silabus", $kelengkapan_silabus)->with("kelengkapan_sap", $kelengkapan_sap)->with("totalinti", $totalinti)->with("totalinstitusional", $totalinstitusional);
        });
     })->export('xlsx');
 
    }

public function kurikulum5Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $kur5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $kurikulum5 = DB::table('struktur_kurikulum')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
 
        $kur5Data = "";
 
        if(count($kurikulum5) >0 ){
            $kur5Data .= '
           <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">6.1.5</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5"><strong>Tuliskan struktur kurikulum berdasarkan urutan mata kuliah (MK) semester demi semester, dengan mengikuti format tabel berikut:</strong></font></td>
           </tr>';

            
                $kur5Data .= '
                <table cellspacing="0" style="font-size: 16px">
                    <tr>
                    <td></td>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">Smt</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">Kode MK</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;" >Nama Mata Kuliah</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;" >Bobot sks</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;" >sks MK dalam Kurikulum</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;" >Bobot Tugas</th>
                     <th colspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;" >Kelengkapan</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;" >Unit/ Jur/ Fak Penyelenggara</th>
                     <tr>
                     <th></th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;" >Inti</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;" >Insti-<br>tusional</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;" >Deskripsi</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;" >Silabus</th>
                       <th style="border: 1px solid #000; padding: 5px; text-align: center;" >SAP</th>
                   </tr>
                   <tr>
                   <td></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(1)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(2)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(3)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(4)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(5)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(6)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(7)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(8)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(9)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(10)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(11)&nbsp;</td>
                   </tr>';
                   foreach ($kurikulum5 as $kurikulum5) {
                    $kur5Data .= '
                   <tr>
                   <td></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum5->sem_kurikulum5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum5->kode_mk_kurikulum5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum5->nama_mk_kurikulum5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum5->bobot_sks_kurikulum5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum5->penyelenggara . '</td>
                   </tr>';
            }
            $kur5Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum 6.1.5.xls');
        echo $kur5Data;
    }
    public function excelKurikulum5()
    {
        $kurikulum5s = DB::table('struktur_kurikulum')->get();

        $kur5Data = "";

        if(count($kurikulum5s) >0 ){
            $kur5Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($kurikulum5s as $kurikulum5) {
                $kur5Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$kurikulum5->sem_kurikulum5.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $kur5Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $kur5Data;
    }

    
     public function kurikulum5Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $kur5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $kurikulum5s = Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('kurikulum5.pdf', compact('kurikulum5s','kur5'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadkurikulum5(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $kur5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $kurikulum5s = Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                         ->join('semester', 'id_semester', '=', 'id_semesterr')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                          ->join('bobot_tugas', 'id_bobot_tugas', '=', 'id_bobottugas')
                          ->join('kelengkapan_deskripsi', 'id_kelengkapan_deskripsi', '=', 'id_kelengkapandeskripsi')
                          ->join('kelengkapan_silabus', 'id_kelengkapan_silabus', '=', 'id_kelengkapansilabus')
                          ->join('kelengkapan_sap', 'id_kelengkapan_sap', '=', 'id_kelengkapansap')
              ->orderBy('semesterr')
                        ->get();
        $totalinti=Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_inti');
        $totalinstitusional=Kurikulum5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_institusional');
        $semester = Semester::get();
        $bobot_sks = BobotSks::get();
        $bobot_tugas = BobotTugas::get();
        $kelengkapan_deskripsi = KelengkapanDeskripsi::get();
        $kelengkapan_silabus = KelengkapanSilabus::get();
        $kelengkapan_sap = KelengkapanSap::get();
        $pdf = PDF::loadView('kurikulum5.pdfm', compact('kurikulum5s','kur5','totalinstitusional','totalinti','semester','bobot_sks','bobot_tugas','kelengkapan_deskripsi','kelengkapan_silabus','kelengkapan_sap'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
