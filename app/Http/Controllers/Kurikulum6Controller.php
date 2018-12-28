<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulum6;
use App\BobotSks;
use App\Semester;
use App\BobotTugas;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Kurikulum6Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    { 
        // $kurikulum6 = Kurikulum6::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $kurikulum6 = Kurikulum6::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                         ->join('semester', 'id_semester', '=', 'id_semesterr')
                         ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->get();
        }
        else
        {
        $kurikulum6 = Kurikulum6::where('id_departemen', $id_departemen)
                                ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->join('semester', 'id_semester', '=', 'id_semesterr')
                         ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                                ->join('bobot_tugas', 'id_bobot_tugas', '=', 'id_bobottugas')
                                ->where('id_departemen', $id_departemen)
              ->orderBy('semesterr')
              ->get();
        }
        $semester=Semester::get();
        $bobot_sks=BobotSks::get();
        $bobot_tugas = BobotTugas::get(); 
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('kurikulum6/index',compact('kurikulum6','dept', 'bobot_tugas','semester','bobot_sks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_mk_kurikulum6' => 'required',
            'kode_mk_kurikulum6' => 'required',
            'pengelola' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $kurikulum6 = DB::table('mata_kuliah_pilihan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('semester', 'id_semester', '=', 'id_semesterr')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->where('id_departemen', $id_departemen)
                        ->where('kode_mk_kurikulum6', $request->kode_mk_kurikulum6)
                        ->first();

        if($kurikulum6==null){  
        $kurikulum6=new Kurikulum6;
        $kurikulum6->nama_mk_kurikulum6 = $request->nama_mk_kurikulum6;
        $kurikulum6->kode_mk_kurikulum6 = $request->kode_mk_kurikulum6;
        $kurikulum6->id_jumlah_sks            = $request->id_jumlah_sks;
        $kurikulum6->id_semesterr = $request->id_semesterr;
        $kurikulum6->id_bobottugas               = $request->id_bobottugas;
        $kurikulum6->pengelola = $request->pengelola;
        $kurikulum6->id_departemen= $request->user()->id_departemen;

        $kurikulum6->save();
        return redirect()->route('kurikulum6.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('kurikulum6.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_mata_kuliah_pilihan)
    {
        // dd($member);
        return view('kurikulum6/index',compact('kurikulum6'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_mk_kurikulum6' => 'required',
            'kode_mk_kurikulum6' => 'required',
            'pengelola' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $kurikulum6 = DB::table('mata_kuliah_pilihan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->join('semester', 'id_semester', '=', 'id_semesterr')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_mk_kurikulum6', $request->nama_mk_kurikulum6)
                        ->where('kode_mk_kurikulum6', $request->kode_mk_kurikulum6)
                        ->where('id_bobottugas', $request->id_bobottugas)
                        ->where('pengelola', $request->pengelola)
                        ->where('nama_mk_kurikulum6', $request->sem_mk1_kurikulum5)
                        ->first();

        // $kurikulum6->update($request->all()); 
        if($kurikulum6==null){ 
        $kurikulum6 = Kurikulum6::find($member);
        $kurikulum6->id_semesterr = $request->id_semesterr;
        $kurikulum6->nama_mk_kurikulum6 = $request->nama_mk_kurikulum6;
        $kurikulum6->kode_mk_kurikulum6 = $request->kode_mk_kurikulum6;
        $kurikulum6->id_jumlah_sks             = $request->id_jumlah_sks;
        $kurikulum6->id_bobottugas               = $request->id_bobottugas;
        $kurikulum6->pengelola = $request->pengelola;
        $kurikulum6->id_departemen= $request->user()->id_departemen;

        $kurikulum6->save();
        return redirect()->route('kurikulum6.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('kurikulum6.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_mata_kuliah_pilihan)
    {
        Kurikulum6::destroy($id_mata_kuliah_pilihan);
        return redirect()->route('kurikulum6.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function kurikulum6Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_kurikulum6' => $value->tahun_kurikulum6, 'sem_kurikulum6' => $value->sem_kurikulum6, 'kode_mk_kurikulum6' => $value->kode_mk_kurikulum6, 'nama_mk_kurikulum6' => $value->nama_mk_kurikulum6, 'bobot_sks_kurikulum6' => $value->bobot_sks_kurikulum6, 'pengelola' => $value->pengelola, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('kurikulum6')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('kurikulum6.index');
    }

    public function kurikulum6sExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $kur6 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $kurikulum6 = Kurikulum6::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('semester', 'id_semester', '=', 'id_semesterr')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->join('bobot_tugas', 'id_bobot_tugas', '=', 'id_bobottugas')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('semesterr')
                        ->get();
        $semester=Semester::get();
        $bobot_sks=BobotSks::get();
            $bobot_tugas=BobotTugas::get();
        Excel::create('Data Tabel 6.1.3', function($excel) use($id_departemen, $kur6, $date1, $date2, $kurikulum6, $semester, $bobot_sks, $bobot_tugas){
        $excel->sheet('Data Tabel 6.1.3', function($sheet) use($id_departemen, $kur6, $date1, $date2, $kurikulum6, $semester, $bobot_sks, $bobot_tugas){
          $sheet->setSize('A1', 15, 18);
          $sheet->setSize('B1', 40, 18);
          $sheet->setSize('C1', 45, 18);
          $sheet->setSize('D1', 40, 18);
          $sheet->setSize('E1', 20, 18);
          $sheet->setSize('F1', 20, 18);
          $sheet->setSize('G1', 40, 18);
          $sheet->loadView('kurikulum6/excel')->with("kur6", $kur6)->with("date1", $date1)->with("date2", $date2)->with("kurikulum6", $kurikulum6)->with("semester", $semester)->with("bobot_sks", $bobot_sks)->with("bobot_tugas", $bobot_tugas);
        });
     })->export('xlsx');
 
    }

public function kurikulum6Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $kur6 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $kurikulum6 = DB::table('mata_kuliah_pilihan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
 
        $kur6Data = "";
 
        if(count($kurikulum6) >0 ){
            $kur6Data .= '
           <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">6.1.3</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5"><strong>Tuliskan mata kuliah pilihan yang dilaksanakan dalam tiga tahun terakhir, pada tabel berikut:</strong></font></td>
           </tr>
                    <tr>
                    <th></th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;">Semester</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;">Kode MK</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;" >Nama MK (Pilihan)</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;" >Bobot sks</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;" >Bobot Tugas*</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;" >Unit/ Jur/ Fak Pengelola</th>
                     <tr>
                     <th></th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3;" >Ya</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3;" >Tidak</th>
                     </tr>
                   </tr>
                   <tr>
                    <th></th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;1&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;2&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;3&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;4&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;5&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;6&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;7&nbsp;)</th>
                   </tr>';
                   foreach ($kurikulum6 as $kurikulum6) {
                    $kur6Data .= '
                   <tr>
                    <th></th>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">'. $kurikulum6->sem_kurikulum6 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum6->kode_mk_kurikulum6 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum6->nama_mk_kurikulum6 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum6->bobot_sks_kurikulum6 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum6->pengelola . '</td>
                   </tr>
                   ';
            }
             $kur6Data .= '
             <tr>
             <td> </td>
            <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">* beri tanda &radic; pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) &#8805; 20%.</font></td>
            </tr>';
            $kur6Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum 6.1.6.xls');
        echo $kur6Data;
    }
    public function excelKurikulum6()
    {
        $kurikulum6s = DB::table('mata_kuliah_pilihan')->get();

        $kur6Data = "";

        if(count($kurikulum6s) >0 ){
            $kur6Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($kurikulum6s as $kurikulum6) {
                $kur6Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$kurikulum6->sem_kurikulum6.'</td>
                <td style= "border: 1px solid black">'.$kurikulum6->tahun_kurikulum6.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $kur6Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $kur6Data;
    }

    
     public function kurikulum6Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $kur6 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $kurikulum6s = Kurikulum6::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('kurikulum6.pdf', compact('kurikulum6s','kur6'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadkurikulum6(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $kur6 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $kurikulum6s = Kurikulum6::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('semester', 'id_semester', '=', 'id_semesterr')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->join('bobot_tugas', 'id_bobot_tugas', '=', 'id_bobottugas')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('semesterr')
                        ->get();
        $semester = Semester::get();
        $bobot_sks = BobotSks::get();
        $bobot_tugas=BobotTugas::get();
        $pdf = PDF::loadView('kurikulum6.pdfm', compact('kurikulum6s','kur6', 'bobot_tugas','semester','bobot_sks'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
