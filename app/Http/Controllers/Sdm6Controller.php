<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm6;
use App\JumlahKelas;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdm6Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdm6 = Sdm6::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $sdm6 = Sdm6::join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
              ->where('id_departemen', $id_departemen)
                    ->get();
        }
        else
        {
         $sdm6 = Sdm6::join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
              ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm6')
              ->get();
        $totalrencana=Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm6');
        $totallaksana=Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm6');
        }
        $jumlah_kelas=JumlahKelas::get();
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdm6/index',compact('sdm6','dept','totalrencana','totallaksana','jumlah_kelas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_sdm6' => 'required',
            'keahlian_sdm6' => 'required',
            'kode_sdm6' => 'required',
            'nama_mk_sdm6' => 'required',
            'jlh_rencana_sdm6' => 'required',
            'jlh_laksana_sdm6' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdm6 = DB::table('aktivitas_mengajar_dosen_sesuai_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm6', $request->nama_mk_sdm6)
                        ->first();

        if($sdm6==null){  
        $sdm6=new Sdm6;
        $sdm6->nama_sdm6 = $request->nama_sdm6;
        $sdm6->keahlian_sdm6 = $request->keahlian_sdm6;
        $sdm6->kode_sdm6 = $request->kode_sdm6;
        $sdm6->nama_mk_sdm6 = $request->nama_mk_sdm6;
        $sdm6->id_jlh_kelas = $request->id_jlh_kelas;
        $sdm6->jlh_rencana_sdm6 = $request->jlh_rencana_sdm6;
        $sdm6->jlh_laksana_sdm6 = $request->jlh_laksana_sdm6;
        $sdm6->id_departemen= $request->user()->id_departemen;

        $sdm6->save();
        return redirect()->route('sdm6.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdm6.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_aktivitas_mengajar_dosen_sesuai_ps)
    {
        // dd($member);
        return view('sdm6/index',compact('sdm6'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_sdm6' => 'required',
            'keahlian_sdm6' => 'required',
            'kode_sdm6' => 'required',
            'nama_mk_sdm6' => 'required',
            'jlh_rencana_sdm6' => 'required',
            'jlh_laksana_sdm6' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdm6 = DB::table('aktivitas_mengajar_dosen_sesuai_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm6', $request->nama_sdm6)
                        ->where('keahlian_sdm6', $request->keahlian_sdm6)
                        ->where('kode_sdm6', $request->kode_sdm6)
                        ->where('nama_mk_sdm6', $request->nama_mk_sdm6)
                        ->where('jlh_rencana_sdm6', $request->jlh_rencana_sdm6)
                        ->where('jlh_laksana_sdm6', $request->jlh_laksana_sdm6)
                        ->where('nama_sdm6', $request->nama_sdma6)
                        ->first();

        // $sdm6->update($request->all());
        if($sdm6==null){ 
        $sdm6 = Sdm6::find($member);
        $sdm6->nama_sdm6 = $request->nama_sdm6;
        $sdm6->keahlian_sdm6 = $request->keahlian_sdm6;
        $sdm6->kode_sdm6 = $request->kode_sdm6;
        $sdm6->nama_mk_sdm6 = $request->nama_mk_sdm6;
        $sdm6->id_jlh_kelas = $request->id_jlh_kelas;
        $sdm6->jlh_rencana_sdm6 = $request->jlh_rencana_sdm6;
        $sdm6->jlh_laksana_sdm6 = $request->jlh_laksana_sdm6;
        $sdm6->id_departemen= $request->user()->id_departemen;

        $sdm6->save();
        return redirect()->route('sdm6.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdm6.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_aktivitas_mengajar_dosen_sesuai_ps)
    {
        Sdm6::destroy($id_aktivitas_mengajar_dosen_sesuai_ps);
        return redirect()->route('sdm6.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdm6Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdm6' => $value->tahun_sdm6, 'nama_sdm6' => $value->nama_sdm6, 'keahlian_sdm6' => $value->keahlian_sdm6, 'kode_sdm6' => $value->kode_sdm6, 'nama_mk_sdm6' => $value->nama_mk_sdm6, 'jlh_kelas_sdm6' => $value->jlh_kelas_sdm6, 'jlh_rencana_sdm6' => $value->jlh_rencana_sdm6, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('aktivitas_mengajar_dosen_sesuai_ps')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdm6.index');
    }

public function sdm6Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmk6 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
         $sdm6 = Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm6')
                        ->get();
        $totalrencana=Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm6');
        $totallaksana=Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm6');
 
        $sdmk6Data = "";
 
        if(count($sdm6) >0 ){
            $sdmk6Data .= '
           <table>
            <tr>
            <p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:</strong></p>
           </tr>
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen Tetap</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Bidang Keahlian</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Kode Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Nama Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Kelas</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Pertemuan Yang Direncanakan</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jumlah Pertemuan Yang Dilaksanakan</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;1&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;2&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;3&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;4&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;5&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;6&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;7&nbsp;)</th>
                   </tr>';
                   foreach ($sdm6 as $sdm6) {
                    $sdmk6Data .= '
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm6->nama_sdm6 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm6->keahlian_sdm6 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm6->kode_sdm6 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm6->nama_mk_sdm6 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm6->jlh_kelas_sdm6 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm6->jlh_rencana_sdm6 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm6->jlh_laksana_sdm6 . '</td>
                   </tr>';
            }

             $sdmk6Data .= '
                    <tr>
                      <td colspan="5" style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family : arial, helvetica, sans-serif;">Total</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $totalrencana . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $totallaksana . '</td>
                   </tr>
';
            $sdmk6Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Tabel 4.3.4.xls');
        echo $sdmk6Data;
    }
    public function excelSdm6()
    {
        $sdm6s = DB::table('aktivitas_mengajar_dosen_sesuai_ps')->get();

        $sdmk6Data = "";

        if(count($sdm6s) >0 ){
            $sdmk6Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdm6s as $sdm6) {
                $sdmk6Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdm6->kode_sdm6.'</td>
                <td style= "border: 1px solid black">'.$sdm6->tahun_sdm6.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmk6Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmk6Data;
    }

    
     public function sdm6Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk6 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm6s = Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('sdm6.pdf', compact('sdm6s','sdmk6'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdm6(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk6 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm6s = Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm6')
                        ->get();
        $totalrencana=Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm6');
        $totallaksana=Sdm6::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm6');

        $jumlah_kelas=JumlahKelas::get();
        $pdf = PDF::loadView('sdm6.pdfm', compact('sdm6s','sdmk6','totallaksana','totalrencana','jumlah_kelas'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
