<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\RedaksiKegiatan;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class KegiatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $kegiatan = Kegiatan::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kegiatan = Kegiatan::whereBetween('tahun_kegiatan', [$date1,$date2])
                    ->orderBy('tahun_kegiatan','desc')
                    ->get();
        }
        else
        {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kegiatan = Kegiatan::whereBetween('tahun_kegiatan', [$date1,$date2])
              ->where('id_departemen', $id_departemen)
              ->orderBy('tahun_kegiatan','desc')
              ->get();
        }
         $redaksiKegiatan = RedaksiKegiatan::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksinya', 'id_redaksiKeg', 'id_departemen')
                        ->get();
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('kegiatan/index',compact('kegiatan','dept', 'redaksiKegiatan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_kegiatan' => 'required',
            'penyelenggara' => 'required',
            'tahun_kegiatan' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $kegiatan = DB::table('kegiatan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_kegiatan', $request->nama_kegiatan)
                        ->where('tahun_kegiatan', $request->tahun_kegiatan)
                        ->first();

        if($kegiatan==null){  
        $kegiatan=new Kegiatan;
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->penyelenggara = $request->penyelenggara;
        $kegiatan->tahun_kegiatan = $request->tahun_kegiatan;
        $kegiatan->id_departemen= $request->user()->id_departemen;

        $kegiatan->save();
        return redirect()->route('kegiatan.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('kegiatan.index')
                        ->with('message','Tahun ada yang sama'); 
          }                
    }
     public function edit($id_kegiatan)
    {
        // dd($member);
        return view('kegiatan/index',compact('kegiatan'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_kegiatan' => 'required',
            'tahun_kegiatan' => 'required',
            'penyelenggara' => 'required',
            
        ]);
           $id_departemen = $request->user()->id_departemen;
                $kegiatan = DB::table('kegiatan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_kegiatan', $request->nama_kegiatan)
                        ->where('penyelenggara', $request->penyelenggara)
                        ->where('tahun_kegiatan', $request->tahun_kegiatan)
                        ->first();

        // $kegiatan->update($request->all());
        if($kegiatan==null){ 
        $kegiatan = Kegiatan::find($member);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->penyelenggara = $request->penyelenggara;
        $kegiatan->tahun_kegiatan = $request->tahun_kegiatan;
        $kegiatan->id_departemen= $request->user()->id_departemen;

        $kegiatan->save();
        return redirect()->route('kegiatan.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('kegiatan.index')
                        ->with('message','Tahun ada yang sama'); 
          }       
    }
    public function destroy($id_kegiatan)
    {
        Kegiatan::destroy($id_kegiatan);
        return redirect()->route('kegiatan.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function kegiatanImport(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['nama_kegiatan' => $value->nama_kegiatan, 'penyelenggara' => $value->penyelenggara,'tahun_kegiatan' => $value->tahun_kegiatan, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('kegiatan')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('kegiatan.index');
    }

public function kegiatanExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $keg = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $kegiatan = DB::table('kegiatan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_kegiatan', 'desc')
                        ->get();
 
        $kegData = "";
 
        if(count($kegiatan) >0 ){
            $kegData .= '
           <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">Tabel 3.3</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Data pembinaan non-akademik yang diselenggarakan '.$keg[0]->nama_departemen.'</font></td>
           </tr>
            <tr>
            <th></th>
            <th colspan="8" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" align=left><font face="Arial" size="2.5">Kegiatan</th>
            <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Arial" size="2.5">Penyelenggara</th>
            <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Arial" size="2.5">Tahun</th>
            </tr>';

            foreach ($kegiatan as $kegiatan) {
                $kegData .= '
                <tr>
                <th></th>
            <td colspan="8" style="border:1px solid #000; border-width: thin; background-color:#255255255"; align=left><font face="Arial" size="2.5">'.$kegiatan->nama_kegiatan.'</td>
            <td style="border:1px solid #000; border-width: thin; background-color:#255255255"; align=left><font face="Arial" size="2.5">'.$kegiatan->penyelenggara.'</td>
            <td style="border:1px solid #000; border-width: thin; background-color:#255255255"; align=center><font face="Arial" size="2.5">'.$kegiatan->tahun_kegiatan.'</td>
                </tr>';
            }
            $kegData .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Laporan_Pembinaan_Non-Akademik '.$keg[0]->nama_departemen .'.xls');
        echo $kegData;
    }
    public function excelKegiatan()
    {
        $kegiatans = DB::table('kegiatan')->get();

        $kegData = "";

        if(count($kegiatans) >0 ){
            $kegData .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kegiatan</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($kegiatans as $kegiatan) {
                $kegData .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$kegiatan->nama_kegiatan.'</td>
                <td style= "border: 1px solid black">'.$kegiatan->tahun_kegiatan.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $kegData .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Pembinaan Non-Akademik.xls');
        echo $kegData;
    }

    
     public function kegiatanDownload(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $keg = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $kegiatans = Kegiatan::whereBetween('tahun_kegiatan', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_kegiatan', 'desc')
                        ->get();
          $redaksiKegiatan = RedaksiKegiatan::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksinya', 'id_redaksiKeg', 'id_departemen')
                        ->get();
        $pdf = PDF::loadView('kegiatan.pdf', compact('kegiatans','keg', 'redaksiKegiatan'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadkegiatan(Request $request)
    {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kegiatans = Kegiatan::whereBetween('tahun_kegiatan', [$date1,$date2])
                        ->orderBy('tahun_kegiatan', 'desc')
                        ->get();
         $redaksiKegiatan = RedaksiKegiatan::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->select('redaksinya', 'id_redaksiKeg', 'id_departemen')
                        ->get();
        $pdf = PDF::loadView('kegiatan.pdfm', compact('kegiatans', 'redaksiKegiatan'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
