<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm9;
use App\JumlahKelas;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdm9Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdm9 = Sdm9::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $sdm9 = Sdm9::join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
              ->where('id_departemen', $id_departemen)
                    ->get();
        }
        else
        {
        $sdm9 = Sdm9::join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
              ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm9')
              ->get();
        $totalrencana2=Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm9');
        $totallaksana2=Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm9');
        }
        $jumlah_kelas=JumlahKelas::get();
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdm9/index',compact('sdm9','dept','totalrencana2','totallaksana2','jumlah_kelas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_sdm9' => 'required',
            'keahlian_sdm9' => 'required',
            'kode_sdm9' => 'required',
            'nama_mk_sdm9' => 'required',
            'jlh_rencana_sdm9' => 'required',
            'jlh_laksana_sdm9' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdm9 = DB::table('aktivitas_mengajar_dosen_tidak_tetap')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm9', $request->nama_mk_sdm9)
                        ->first();

        if($sdm9==null){  
        $sdm9=new Sdm9;
        $sdm9->nama_sdm9 = $request->nama_sdm9;
        $sdm9->keahlian_sdm9 = $request->keahlian_sdm9;
        $sdm9->kode_sdm9 = $request->kode_sdm9;
        $sdm9->nama_mk_sdm9 = $request->nama_mk_sdm9;
        $sdm9->id_jlh_kelas = $request->id_jlh_kelas;
        $sdm9->jlh_rencana_sdm9 = $request->jlh_rencana_sdm9;
        $sdm9->jlh_laksana_sdm9 = $request->jlh_laksana_sdm9;
        $sdm9->id_departemen= $request->user()->id_departemen;

        $sdm9->save();
        return redirect()->route('sdm9.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdm9.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_aktivitas_mengajar_dosen_tidak_tetap)
    {
        // dd($member);
        return view('sdm9/index',compact('sdm9'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_sdm9' => 'required',
            'keahlian_sdm9' => 'required',
            'kode_sdm9' => 'required',
            'nama_mk_sdm9' => 'required',
            'jlh_rencana_sdm9' => 'required',
            'jlh_laksana_sdm9' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdm9 = DB::table('aktivitas_mengajar_dosen_tidak_tetap')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm9', $request->nama_sdm9)
                        ->where('keahlian_sdm9', $request->keahlian_sdm9)
                        ->where('kode_sdm9', $request->kode_sdm9)
                        ->where('nama_mk_sdm9', $request->nama_mk_sdm9)
                        ->where('jlh_rencana_sdm9', $request->jlh_rencana_sdm9)
                        ->where('jlh_laksana_sdm9', $request->jlh_laksana_sdm9)
                        ->where('nama_sdm9', $request->nama_sdsm9)
                        ->first();

        // $sdm9->update($request->all());
        if($sdm9==null){ 
        $sdm9 = Sdm9::find($member);
        $sdm9->nama_sdm9 = $request->nama_sdm9;
        $sdm9->keahlian_sdm9 = $request->keahlian_sdm9;
        $sdm9->kode_sdm9 = $request->kode_sdm9;
        $sdm9->nama_mk_sdm9 = $request->nama_mk_sdm9;
        $sdm9->id_jlh_kelas = $request->id_jlh_kelas;
        $sdm9->jlh_rencana_sdm9 = $request->jlh_rencana_sdm9;
        $sdm9->jlh_laksana_sdm9 = $request->jlh_laksana_sdm9;
        $sdm9->id_departemen= $request->user()->id_departemen;

        $sdm9->save();
        return redirect()->route('sdm9.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdm9.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_aktivitas_mengajar_dosen_tidak_tetap)
    {
        Sdm9::destroy($id_aktivitas_mengajar_dosen_tidak_tetap);
        return redirect()->route('sdm9.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdm9Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdm9' => $value->tahun_sdm9, 'nama_sdm9' => $value->nama_sdm9, 'keahlian_sdm9' => $value->keahlian_sdm9, 'kode_sdm9' => $value->kode_sdm9, 'nama_mk_sdm9' => $value->nama_mk_sdm9, 'jlh_kelas_sdm9' => $value->jlh_kelas_sdm9, 'jlh_rencana_sdm9' => $value->jlh_rencana_sdm9, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('aktivitas_mengajar_dosen_tidak_tetap')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdm9.index');
    }

public function sdm9Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmk9 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
         $sdm9 = Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm9')
                        ->get();
        $totalrencana2=Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm9');
        $totallaksana2=Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm9');
 
        $sdmk9Data = "";
 
        if(count($sdm9) >0 ){
            $sdmk9Data .= '
           <table>
            <tr>
            <p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:</strong></p>
           </tr>
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen Tidak Tetap</th>
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
                   foreach ($sdm9 as $sdm9) {
                    $sdmk9Data .= '
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm9->nama_sdm9 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm9->keahlian_sdm9 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm9->kode_sdm9 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm9->nama_mk_sdm9 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm9->jlh_kelas . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm9->jlh_rencana_sdm9 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm9->jlh_laksana_sdm9 . '</td>
                   </tr>';
            }

             $sdmk9Data .= '
                    <tr>
                      <td colspan="5" style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10;font-family : arial, helvetica, sans-serif;">Total</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $totalrencana2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $totallaksana2 . '</td>
                   </tr>
';
            $sdmk9Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Tabel 4.4.2.xls');
        echo $sdmk9Data;
    }
    public function excelSdm9()
    {
        $sdm9s = DB::table('aktivitas_mengajar_dosen_tidak_tetap')->get();

        $sdmk9Data = "";

        if(count($sdm9s) >0 ){
            $sdmk9Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdm9s as $sdm9) {
                $sdmk9Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdm9->kode_sdm9.'</td>
                <td style= "border: 1px solid black">'.$sdm9->tahun_sdm9.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmk9Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmk9Data;
    }

    
     public function sdm9Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk9 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm9s = Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('sdm9.pdf', compact('sdm9s','sdmk9'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdm9(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk9 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm9s = Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jumlah_kelas', 'id_jumlah_kelas', '=', 'id_jlh_kelas')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm9')
                        ->get();
        $totalrencana2=Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_rencana_sdm9');
        $totallaksana2=Sdm9::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('jlh_laksana_sdm9');
        $jumlah_kelas=JumlahKelas::get();
        $pdf = PDF::loadView('sdm9.pdfm', compact('sdm9s','sdmk9','totallaksana2','totalrencana2','jumlah_kelas'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
