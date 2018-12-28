<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm10;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdm10Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $kegiatan_tenaga_ahli = Sdm10::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $kegiatan_tenaga_ahli = Sdm10::get();
        }
        else
        {
        $kegiatan_tenaga_ahli = Sdm10::where('id_departemen', $id_departemen)
              ->orderBy('nama_tenaga_ahli')
              ->get();
        }
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $listdept=DB::table('departemen')
                    ->get();
        return view('sdm10/index',compact('kegiatan_tenaga_ahli','dept', 'listdept'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_tenaga_ahli' => 'required',
            'nama_kegiatan' => 'required',
            'waktu_pelaksanaan' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $kegiatan_tenaga_ahli = DB::table('kegiatan_tenaga_ahli')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_tenaga_ahli', $request->nama_mk_sdm10)
                        ->first();

        if($kegiatan_tenaga_ahli==null){  
        $kegiatan_tenaga_ahli=new Sdm10;
        $kegiatan_tenaga_ahli->nama_tenaga_ahli = $request->nama_tenaga_ahli;
        $kegiatan_tenaga_ahli->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan_tenaga_ahli->waktu_pelaksanaan = $request->waktu_pelaksanaan;
        $kegiatan_tenaga_ahli->id_departemen= $request->user()->id_departemen;

        $kegiatan_tenaga_ahli->save();
        return redirect()->route('sdm10.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdm10.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_kegiatan_tenaga_ahli)
    {
        // dd($member);
        return view('sdm10/index',compact('kegiatan_tenaga_ahli'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_tenaga_ahli' => 'required',
            'nama_kegiatan' => 'required',
            'waktu_pelaksanaan' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $kegiatan_tenaga_ahli = DB::table('kegiatan_tenaga_ahli')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_tenaga_ahli', $request->nama_tenaga_ahli)
                        ->where('nama_kegiatan', $request->nama_kegiatan)
                        ->where('waktu_pelaksanaan', $request->waktu_pelaksanaan)
                        ->first();

        // $kegiatan_tenaga_ahli->update($request->all());
        if($kegiatan_tenaga_ahli==null){ 
        $kegiatan_tenaga_ahli = Sdm10::find($member);
        $kegiatan_tenaga_ahli->nama_tenaga_ahli = $request->nama_tenaga_ahli;
        $kegiatan_tenaga_ahli->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan_tenaga_ahli->waktu_pelaksanaan = $request->waktu_pelaksanaan;
        $kegiatan_tenaga_ahli->id_departemen= $request->user()->id_departemen;

        $kegiatan_tenaga_ahli->save();
        return redirect()->route('sdm10.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdm10.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_kegiatan_tenaga_ahli)
    {
        Sdm10::destroy($id_kegiatan_tenaga_ahli);
        return redirect()->route('sdm10.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdm10Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sekarang' => $value->tahun_sekarang, 'nama_tenaga_ahli' => $value->nama_tenaga_ahli, 'nama_kegiatan' => $value->nama_kegiatan, 'waktu_pelaksanaan' => $value->waktu_pelaksanaan, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('kegiatan_tenaga_ahli')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdm10.index');
    }

public function sdm10Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmk10 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $kegiatan_tenaga_ahli = DB::table('kegiatan_tenaga_ahli')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_tenaga_ahli')
                        ->get();
 
        $sdmk10Data = "";
 
        if(count($kegiatan_tenaga_ahli) >0 ){
            $sdmk10Data .= '
           <table>
            <tr>
            <td colspan="3" style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)</strong></td>
           </tr>
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Tenaga Ahli/Pakar</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Nama dan Judul Kegiatan</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;" >Waktu Pelaksanaan</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;1&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;2&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;3&nbsp;)</th></th>
                   </tr>';
                   foreach ($kegiatan_tenaga_ahli as $kegiatan_tenaga_ahli) {
                    $sdmk10Data .= '
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">'. $kegiatan_tenaga_ahli->nama_tenaga_ahli . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $kegiatan_tenaga_ahli->nama_kegiatan . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $kegiatan_tenaga_ahli->waktu_pelaksanaan . '</td>
                   </tr>';
            }
            $sdmk10Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Tabel 4.5.1.xls');
        echo $sdmk10Data;
    }
    public function excelSdm10()
    {
        $kegiatan_tenaga_ahlis = DB::table('kegiatan_tenaga_ahli')->get();

        $sdmk10Data = "";

        if(count($kegiatan_tenaga_ahlis) >0 ){
            $sdmk10Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($kegiatan_tenaga_ahlis as $kegiatan_tenaga_ahli) {
                $sdmk10Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$kegiatan_tenaga_ahli->waktu_sdm10.'</td>
                <td style= "border: 1px solid black">'.$kegiatan_tenaga_ahli->tahun_sekarang.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmk10Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmk10Data;
    }

    
     public function sdm10Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk10 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $kegiatan_tenaga_ahlis = Sdm10::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('sdm10.pdf', compact('kegiatan_tenaga_ahlis','sdmk10'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdm10(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk10 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $kegiatan_tenaga_ahlis = Sdm10::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_tenaga_ahli')
                        ->get();
        $pdf = PDF::loadView('sdm10.pdfm', compact('kegiatan_tenaga_ahlis','sdmk10'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
