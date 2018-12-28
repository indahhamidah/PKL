<?php 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm14;
use App\Tingkatan;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdm14Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdm14 = Sdm14::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $sdm14 = Sdm14::join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                    ->where('id_departemen', $id_departemen)
                    ->get();
        }
        else
        {
        $sdm14 = Sdm14::join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
            ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm14')
              ->get();
        }
        $tingkatan=Tingkatan::get();
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdm14/index',compact('sdm14','dept','tingkatan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_sdm14' => 'required',
            'nama_organisasi' => 'required',
            'kurun_waktu' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdm14 = DB::table('keikutsertaan_organisasi')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm14', $request->nama_mk_sdm14)
                        ->first();

        if($sdm14==null){  
        $sdm14=new Sdm14;
        $sdm14->nama_sdm14 = $request->nama_sdm14;
        $sdm14->nama_organisasi = $request->nama_organisasi;
        $sdm14->kurun_waktu = $request->kurun_waktu;
        $sdm14->id_tingkat = $request->id_tingkat;
        $sdm14->id_departemen= $request->user()->id_departemen;

        $sdm14->save();
        return redirect()->route('sdm14.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdm14.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_keikutsertaan_organisasi)
    {
        // dd($member);
        return view('sdm14/index',compact('sdm14'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_sdm14' => 'required',
            'nama_organisasi' => 'required',
            'kurun_waktu' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdm14 = DB::table('keikutsertaan_organisasi')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm14', $request->nama_sdm14)
                        ->where('nama_organisasi', $request->nama_organisasi)
                        ->where('kurun_waktu', $request->kurun_waktu)
                        ->where('nama_sdm14', $request->nama_sdm14a)
                        ->first();

        // $sdm14->update($request->all());
        if($sdm14==null){ 
        $sdm14 = Sdm14::find($member);
        $sdm14->nama_sdm14 = $request->nama_sdm14;
        $sdm14->nama_organisasi = $request->nama_organisasi;
        $sdm14->kurun_waktu = $request->kurun_waktu;
        $sdm14->id_tingkat = $request->id_tingkat;
        $sdm14->id_departemen= $request->user()->id_departemen;

        $sdm14->save();
        return redirect()->route('sdm14.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdm14.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_keikutsertaan_organisasi)
    {
        Sdm14::destroy($id_keikutsertaan_organisasi);
        return redirect()->route('sdm14.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdm14Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdm14' => $value->tahun_sdm14, 'nama_sdm14' => $value->nama_sdm14, 'nama_organisasi' => $value->nama_organisasi, 'kurun_waktu' => $value->kurun_waktu, 'tingkat_sdm14' => $value->tingkat_sdm14, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('keikutsertaan_organisasi')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdm14.index');
    }

public function sdm14Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmk14 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $sdm14 = DB::table('keikutsertaan_organisasi')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm14')
                        ->get();
 
        $sdmk14Data = "";
 
        if(count($sdm14) >0 ){
            $sdmk14Data .= '
           <table>
            <tr>
            <td colspan="4" style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.</strong></td>
           </tr>
                    <tr>
                      <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;text-align:center;">Nama Dosen</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;text-align:center;" >Nama Organisasi Keilmuan atau Organisasi Profesi</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;text-align:center;" >Kurun Waktu</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;text-align:center;" >Tingkat (Lokal, Nasional, Internasional)</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;1&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;2&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;3&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;4&nbsp;)</th>
                   </tr>';
                   foreach ($sdm14 as $sdm14) {
                    $sdmk14Data .= '
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm14->nama_sdm14 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm14->nama_organisasi . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm14->kurun_waktu . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm14->tingkat . '</td>
                   </tr>';
            }
            $sdmk14Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Tabel 4.5.5.xls');
        echo $sdmk14Data;
    }
    public function excelSdm14()
    {
        $sdm14s = DB::table('keikutsertaan_organisasi')->get();

        $sdmk14Data = "";

        if(count($sdm14s) >0 ){
            $sdmk14Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdm14s as $sdm14) {
                $sdmk14Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdm14->kurun_waktu.'</td>
                <td style= "border: 1px solid black">'.$sdm14->tahun_sdm14.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmk14Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmk14Data;
    }

    
     public function sdm14Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk14 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm14s = Sdm14::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->get();

        $tingkatan=Tingkatan::get();                
        $pdf = PDF::loadView('sdm14.pdf', compact('sdm14s','sdmk14','tingkatan'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdm14(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk14 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm14s = Sdm14::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm14')
                        ->get();

        $tingkatan=Tingkatan::get();
        $pdf = PDF::loadView('sdm14.pdfm', compact('sdm14s','sdmk14','tingkatan'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
