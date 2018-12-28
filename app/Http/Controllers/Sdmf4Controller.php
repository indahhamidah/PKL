<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdmf4;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdmf4Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdmf4 = Sdmf4::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdmf4 = Sdmf4::whereBetween('tahun_sdmf4', [$date1,$date2])
                    ->orderBy('tahun_sdmf4','desc')
                    ->get();
        }
        else
        {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdmf4 = Sdmf4::whereBetween('tahun_sdmf4', [$date1,$date2])
              ->where('id_departemen', $id_departemen)
              ->orderBy('tahun_sdmf4','desc')
              ->get();
        }
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdmf4/index',compact('sdmf4','dept'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'isi_sdmf4' => 'required',
            'tahun_sdmf4' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdmf4 = DB::table('sdmf4')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('tahun_sdmf4', $request->tahun_sdmf4)
                        ->first();

        if($sdmf4==null){  
        $sdmf4=new Sdmf4;
        $sdmf4->isi_sdmf4 = $request->isi_sdmf4;
        $sdmf4->tahun_sdmf4 = $request->tahun_sdmf4;
        $sdmf4->id_departemen= $request->user()->id_departemen;

        $sdmf4->save();
        return redirect()->route('sdmf4.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdmf4.index')
                        ->with('message','Tahun ada yang sama'); 
          }                
    }
     public function edit($id_sdmf4)
    {
        // dd($member);
        return view('sdmf4/index',compact('sdmf4'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'isi_sdmf4' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdmf4 = DB::table('sdmf4')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('isi_sdmf4', $request->isi_sdmf4)
                        ->first();

        // $sdmf4->update($request->all());
        if($sdmf4==null){ 
        $sdmf4 = Sdmf4::find($member);
        $sdmf4->isi_sdmf4 = $request->isi_sdmf4;
        $sdmf4->id_departemen= $request->user()->id_departemen;

        $sdmf4->save();
        return redirect()->route('sdmf4.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdmf4.index')
                        ->with('message','Tahun ada yang sama'); 
          }       
    }
    public function destroy($id_sdmf4)
    {
        Sdmf4::destroy($id_sdmf4);
        return redirect()->route('sdmf4.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdmf4Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdmf4' => $value->tahun_sdmf4,'isi_sdmf4' => $value->isi_sdmf4, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('sdmf4')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdmf4.index');
    }

public function sdmf4Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmkf4 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $sdmf4 = DB::table('sdmf4')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf4', 'desc')
                        ->get();
 
        $sdmkf4Data = "";
 
        if(count($sdmf4) >0 ){
            $sdmkf4Data .= '
           <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">4.2.1</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5"><strong>Jenis Tenaga Kependidikan menurut pendidikan terakhir</strong></font></td>
           </tr>';

            foreach ($sdmf4 as $sdmf4) {
                $sdmkf4Data .= '
                <tr>
                <th></th>
            <td colspan="5" style="border:1px solid #000; border-width: thin; background-color:#255255255; text-align: justify; width :1000";><font face="Arial" size="2.5">'.$sdmf4->isi_sdmf4.'</td>
                </tr>';
            }
            $sdmkf4Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=SDM 4.2.1 FMIPA IPB.xls');
        echo $sdmkf4Data;
    }
    public function excelSdmf4()
    {
        $sdmf4s = DB::table('sdmf4')->get();

        $sdmkf4Data = "";

        if(count($sdmf4s) >0 ){
            $sdmkf4Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdmf4s as $sdmf4) {
                $sdmkf4Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdmf4->isi_sdmf4.'</td>
                <td style= "border: 1px solid black">'.$sdmf4->tahun_sdmf4.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmkf4Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmkf4Data;
    }

    
     public function sdmf4Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmkf4 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $sdmf4s = Sdmf4::whereBetween('tahun_sdmf4', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf4', 'desc')
                        ->get();
        $pdf = PDF::loadView('sdmf4.pdf', compact('sdmf4s','sdmkf4'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdmf4(Request $request)
    {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdmf4s = Sdmf4::whereBetween('tahun_sdmf4', [$date1,$date2])
                        ->orderBy('tahun_sdmf4', 'desc')
                        ->get();
        $pdf = PDF::loadView('sdmf4.pdfm', compact('sdmf4s'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
