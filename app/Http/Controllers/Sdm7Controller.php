<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm7;
use App\JumlahKelas;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdm7Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdm7 = Sdm7::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $sdm7 = Sdm7::join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
              ->where('id_departemen', $id_departemen)
                    ->get();
        }
        else
        {
        $sdm7 = Sdm7::join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
              ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm7')
              ->get();
        $totalrencana1=Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm7');
        $totallaksana1=Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm7');
        }
        $jumlah_kelas=JumlahKelas::get();
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdm7/index',compact('sdm7','dept','totalrencana1','totallaksana1','jumlah_kelas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_sdm7' => 'required',
            'keahlian_sdm7' => 'required',
            'kode_sdm7' => 'required',
            'nama_mk_sdm7' => 'required',
            'jlh_rencana_sdm7' => 'required',
            'jlh_laksana_sdm7' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdm7 = DB::table('aktivitas_mengajar_dosen_diluar_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm7', $request->nama_mk_sdm7)
                        ->first();

        if($sdm7==null){  
        $sdm7=new Sdm7;
        $sdm7->nama_sdm7 = $request->nama_sdm7;
        $sdm7->keahlian_sdm7 = $request->keahlian_sdm7;
        $sdm7->kode_sdm7 = $request->kode_sdm7;
        $sdm7->nama_mk_sdm7 = $request->nama_mk_sdm7;
        $sdm7->id_jlh_kelas = $request->id_jlh_kelas;
        $sdm7->jlh_rencana_sdm7 = $request->jlh_rencana_sdm7;
        $sdm7->jlh_laksana_sdm7 = $request->jlh_laksana_sdm7;
        $sdm7->id_departemen= $request->user()->id_departemen;

        $sdm7->save();
        return redirect()->route('sdm7.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdm7.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_aktivitas_mengajar_dosen_diluar_ps)
    {
        // dd($member);
        return view('sdm7/index',compact('sdm7'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_sdm7' => 'required',
            'keahlian_sdm7' => 'required',
            'kode_sdm7' => 'required',
            'nama_mk_sdm7' => 'required',
            'jlh_rencana_sdm7' => 'required',
            'jlh_laksana_sdm7' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdm7 = DB::table('aktivitas_mengajar_dosen_diluar_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm7', $request->nama_sdm7)
                        ->where('keahlian_sdm7', $request->keahlian_sdm7)
                        ->where('kode_sdm7', $request->kode_sdm7)
                        ->where('nama_mk_sdm7', $request->nama_mk_sdm7)
                        ->where('jlh_rencana_sdm7', $request->jlh_rencana_sdm7)
                        ->where('jlh_laksana_sdm7', $request->jlh_laksana_sdm7)
                        ->where('nama_sdm7', $request->nama_sdma7)
                        ->first();

        // $sdm7->update($request->all());
        if($sdm7==null){ 
        $sdm7 = Sdm7::find($member);
        $sdm7->nama_sdm7 = $request->nama_sdm7;
        $sdm7->keahlian_sdm7 = $request->keahlian_sdm7;
        $sdm7->kode_sdm7 = $request->kode_sdm7;
        $sdm7->nama_mk_sdm7 = $request->nama_mk_sdm7;
        $sdm7->id_jlh_kelas = $request->id_jlh_kelas;
        $sdm7->jlh_rencana_sdm7 = $request->jlh_rencana_sdm7;
        $sdm7->jlh_laksana_sdm7 = $request->jlh_laksana_sdm7;
        $sdm7->id_departemen= $request->user()->id_departemen;

        $sdm7->save();
        return redirect()->route('sdm7.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdm7.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_aktivitas_mengajar_dosen_diluar_ps)
    {
        Sdm7::destroy($id_aktivitas_mengajar_dosen_diluar_ps);
        return redirect()->route('sdm7.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdm7Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdm7' => $value->tahun_sdm7, 'nama_sdm7' => $value->nama_sdm7, 'keahlian_sdm7' => $value->keahlian_sdm7, 'kode_sdm7' => $value->kode_sdm7, 'nama_mk_sdm7' => $value->nama_mk_sdm7, 'jlh_kelas_sdm7' => $value->jlh_kelas_sdm7, 'jlh_rencana_sdm7' => $value->jlh_rencana_sdm7, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('aktivitas_mengajar_dosen_diluar_ps')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdm7.index');
    }

public function sdm7Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmk7 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
         $sdm7 = Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm7')
                        ->get();
        $totalrencana1=Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm7');
        $totallaksana1=Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm7');
 
        $sdmk7Data = "";
 
        if(count($sdm7) >0 ){
            $sdmk7Data .= '
           <table>
            <tr>
            <p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:</strong></p>
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
                   foreach ($sdm7 as $sdm7) {
                    $sdmk7Data .= '
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm7->nama_sdm7 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm7->keahlian_sdm7 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm7->kode_sdm7 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm7->nama_mk_sdm7 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm7->jlh_kelas . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm7->jlh_rencana_sdm7 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm7->jlh_laksana_sdm7 . '</td>
                   </tr>';
            }

             $sdmk7Data .= '
                    <tr>
                      <td colspan="5" style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family : arial, helvetica, sans-serif;">Total</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $totalrencana1 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $totallaksana1 . '</td>
                   </tr>
';
            $sdmk7Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Tabel 4.3.5.xls');
        echo $sdmk7Data;
    }
    public function excelSdm7()
    {
        $sdm7s = DB::table('aktivitas_mengajar_dosen_diluar_ps')->get();

        $sdmk7Data = "";

        if(count($sdm7s) >0 ){
            $sdmk7Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdm7s as $sdm7) {
                $sdmk7Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdm7->kode_sdm7.'</td>
                <td style= "border: 1px solid black">'.$sdm7->tahun_sdm7.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmk7Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmk7Data;
    }

    
     public function sdm7Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk7 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm7s = Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('sdm7.pdf', compact('sdm7s','sdmk7'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdm7(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk7 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm7s = Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm7')
                        ->get();
        $totalrencana1=Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm7');
        $totallaksana1=Sdm7::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm7');
        $jumlah_kelas=JumlahKelas::get();
        $pdf = PDF::loadView('sdm7.pdfm', compact('sdm7s','sdmk7','totallaksana1','totalrencana1','jumlah_kelas'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
