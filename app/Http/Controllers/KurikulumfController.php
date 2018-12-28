<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulumf;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class KurikulumfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $kurikulumf = Kurikulumf::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kurikulumf = Kurikulumf::whereBetween('tahun_kurikulumf', [$date1,$date2])
                    ->orderBy('tahun_kurikulumf','desc')
                    ->get();
        }
        else
        {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kurikulumf = Kurikulumf::whereBetween('tahun_kurikulumf', [$date1,$date2])
              ->where('id_departemen', $id_departemen)
              ->orderBy('tahun_kurikulumf','desc')
              ->get();
        }
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('kurikulumf/index',compact('kurikulumf','dept'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'isi_kurikulumf' => 'required',
            'tahun_kurikulumf' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $kurikulumf = DB::table('kurikulumf')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('tahun_kurikulumf', $request->tahun_kurikulumf)
                        ->first();

        if($kurikulumf==null){  
        $kurikulumf=new Kurikulumf;
        $kurikulumf->isi_kurikulumf = $request->isi_kurikulumf;
        $kurikulumf->tahun_kurikulumf = $request->tahun_kurikulumf;
        $kurikulumf->id_departemen= $request->user()->id_departemen;

        $kurikulumf->save();
        return redirect()->route('kurikulumf.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('kurikulumf.index')
                        ->with('message','Tahun ada yang sama'); 
          }                
    }
     public function edit($id_kurikulumf)
    {
        // dd($member);
        return view('kurikulumf/index',compact('kurikulumf'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'isi_kurikulumf' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $kurikulumf = DB::table('kurikulumf')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('isi_kurikulumf', $request->isi_kurikulumf)
                        ->first();

        // $kurikulumf->update($request->all());
        if($kurikulumf==null){ 
        $kurikulumf = Kurikulumf::find($member);
        $kurikulumf->isi_kurikulumf = $request->isi_kurikulumf;
        $kurikulumf->id_departemen= $request->user()->id_departemen;

        $kurikulumf->save();
        return redirect()->route('kurikulumf.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('kurikulumf.index')
                        ->with('message','Tahun ada yang sama'); 
          }       
    }
    public function destroy($id_kurikulumf)
    {
        Kurikulumf::destroy($id_kurikulumf);
        return redirect()->route('kurikulumf.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function kurikulumfImport(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_kurikulumf' => $value->tahun_kurikulumf,'isi_kurikulumf' => $value->isi_kurikulumf, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('kurikulumf')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('kurikulumf.index');
    }

public function kurikulumfExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $kurf = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $kurikulumf = DB::table('kurikulumf')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_kurikulumf', 'desc')
                        ->get();
 
        $kurfData = "";
 
        if(count($kurikulumf) >0 ){
            $kurfData .= '
           <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">6.1</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5"><strong>Kurikulum - Peran FMIPA IPB dalam penyusunan dan pengembangan kurikulum untuk program studi yang dikelola.</strong></font></td>
           </tr>';

            foreach ($kurikulumf as $kurikulumf) {
                $kurfData .= '
                <tr>
                <th></th>
            <td colspan="5" style="border:1px solid #000; border-width: thin; background-color:#255255255; text-align: justify; width :1000";><font face="Arial" size="2.5">'.$kurikulumf->isi_kurikulumf.'</td>
                </tr>';
            }
            $kurfData .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $kurfData;
    }
    public function excelKurikulumf()
    {
        $kurikulumfs = DB::table('kurikulumf')->get();

        $kurfData = "";

        if(count($kurikulumfs) >0 ){
            $kurfData .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($kurikulumfs as $kurikulumf) {
                $kurfData .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$kurikulumf->isi_kurikulumf.'</td>
                <td style= "border: 1px solid black">'.$kurikulumf->tahun_kurikulumf.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $kurfData .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $kurfData;
    }

    
     public function kurikulumfDownload(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $kurf = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $kurikulumfs = Kurikulumf::whereBetween('tahun_kurikulumf', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_kurikulumf', 'desc')
                        ->get();
        $pdf = PDF::loadView('kurikulumf.pdf', compact('kurikulumfs','kurf'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadkurikulumf(Request $request)
    {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kurikulumfs = Kurikulumf::whereBetween('tahun_kurikulumf', [$date1,$date2])
                        ->orderBy('tahun_kurikulumf', 'desc')
                        ->get();
        $pdf = PDF::loadView('kurikulumf.pdfm', compact('kurikulumfs'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
