<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm13;
use App\Tingkatan;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdm13Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdm13 = Sdm13::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $sdm13 = Sdm13::join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
              ->where('id_departemen', $id_departemen)
                    ->get();
        }
        else
        {
        $sdm13 = Sdm13::join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
              ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm13')
              ->get();
        }
        $tingkatan=Tingkatan::get();
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdm13/index',compact('sdm13','dept','tingkatan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_sdm13' => 'required',
            'prestasi_yang_dicapai' => 'required',
            'waktu_pencapaian' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdm13 = DB::table('capaian_prestasi')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm13', $request->nama_mk_sdm13)
                        ->first();

        if($sdm13==null){  
        $sdm13=new Sdm13;
        $sdm13->nama_sdm13 = $request->nama_sdm13;
        $sdm13->prestasi_yang_dicapai = $request->prestasi_yang_dicapai;
        $sdm13->waktu_pencapaian = $request->waktu_pencapaian;
        $sdm13->id_tingkat = $request->id_tingkat;
        $sdm13->id_departemen= $request->user()->id_departemen;

        $sdm13->save();
        return redirect()->route('sdm13.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdm13.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_capaian_prestasi)
    {
        // dd($member);
        return view('sdm13/index',compact('sdm13'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_sdm13' => 'required',
            'prestasi_yang_dicapai' => 'required',
            'waktu_pencapaian' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdm13 = DB::table('capaian_prestasi')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm13', $request->nama_sdm13)
                        ->where('prestasi_yang_dicapai', $request->prestasi_yang_dicapai)
                        ->where('waktu_pencapaian', $request->waktu_pencapaian)
                        ->where('nama_sdm13', $request->nama_sdm123)
                        ->first();

        // $sdm13->update($request->all());
        if($sdm13==null){ 
        $sdm13 = Sdm13::find($member);
        $sdm13->nama_sdm13 = $request->nama_sdm13;
        $sdm13->prestasi_yang_dicapai = $request->prestasi_yang_dicapai;
        $sdm13->waktu_pencapaian = $request->waktu_pencapaian;
        $sdm13->id_tingkat = $request->id_tingkat;
        $sdm13->id_departemen= $request->user()->id_departemen;

        $sdm13->save();
        return redirect()->route('sdm13.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdm13.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_capaian_prestasi)
    {
        Sdm13::destroy($id_capaian_prestasi);
        return redirect()->route('sdm13.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdm13Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdm13' => $value->tahun_sdm13, 'nama_sdm13' => $value->nama_sdm13, 'prestasi_yang_dicapai' => $value->prestasi_yang_dicapai, 'waktu_pencapaian' => $value->waktu_pencapaian, 'tingkat_sdm13' => $value->tingkat_sdm13, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('capaian_prestasi')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdm13.index');
    }

public function sdm13Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmk13 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $sdm13 = DB::table('capaian_prestasi')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm13')
                        ->get();
 
        $sdmk13Data = "";
 
        if(count($sdm13) >0 ){
            $sdmk13Data .= '
           <table>
            <tr>
            <td colspan="4" style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong> Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).</strong></td>
           </tr>
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Prestasi yang Dicapai</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Waktu Pencapaian</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Tingkat (Lokal, Nasional, Internasional)</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;1&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;2&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;3&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;4&nbsp;)</th>
                   </tr>';
                   foreach ($sdm13 as $sdm13) {
                    $sdmk13Data .= '
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm13->nama_sdm13 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm13->prestasi_yang_dicapai . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm13->waktu_pencapaian . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm13->tingkat . '</td>
                   </tr>';
            }
            $sdmk13Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Tabel 4.5.4.xls');
        echo $sdmk13Data;
    }
    public function excelSdm13()
    {
        $sdm13s = DB::table('capaian_prestasi')->get();

        $sdmk13Data = "";

        if(count($sdm13s) >0 ){
            $sdmk13Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdm13s as $sdm13) {
                $sdmk13Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdm13->waktu_pencapaian.'</td>
                <td style= "border: 1px solid black">'.$sdm13->tahun_sdm13.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmk13Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmk13Data;
    }

    
     public function sdm13Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk13 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm13s = Sdm13::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $tingkatan=Tingkatan::get();
        $pdf = PDF::loadView('sdm13.pdf', compact('sdm13s','sdmk13','tingkatan'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdm13(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk13 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm13s = Sdm13::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('tingkatan', 'id_tingkatan', '=', 'id_tingkat')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm13')
                        ->get();
        $tingkatan=Tingkatan::get();
        $pdf = PDF::loadView('sdm13.pdfm', compact('sdm13s','sdmk13','tingkatan'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
