<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm11;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdm11Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdm11 = Sdm11::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $sdm11 = Sdm11::where('id_departemen', $id_departemen)
                    ->get();
        }
        else
        {
        $sdm11 = Sdm11::where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm11')
              ->get();
        }
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdm11/index',compact('sdm11','dept'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_sdm11' => 'required',
            'jenjang_pendidikan_lanjut' => 'required',
            'bidang_studi' => 'required',
            'perguruan_tinggi' => 'required',
            'negara' => 'required',
            'tahun_mulai_studi' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdm11 = DB::table('peningkatan_kemampuan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm11', $request->nama_mk_sdm11)
                        ->first();

        if($sdm11==null){  
        $sdm11=new Sdm11;
        $sdm11->nama_sdm11 = $request->nama_sdm11;
        $sdm11->jenjang_pendidikan_lanjut = $request->jenjang_pendidikan_lanjut;
        $sdm11->bidang_studi = $request->bidang_studi;
        $sdm11->perguruan_tinggi = $request->perguruan_tinggi;
        $sdm11->negara = $request->negara;
        $sdm11->tahun_mulai_studi = $request->tahun_mulai_studi;
        $sdm11->id_departemen= $request->user()->id_departemen;

        $sdm11->save();
        return redirect()->route('sdm11.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdm11.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_peningkatan_kemampuan)
    {
        // dd($member);
        return view('sdm11/index',compact('sdm11'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_sdm11' => 'required',
            'jenjang_pendidikan_lanjut' => 'required',
            'bidang_studi' => 'required',
            'perguruan_tinggi' => 'required',
            'negara' => 'required',
            'tahun_mulai_studi' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdm11 = DB::table('peningkatan_kemampuan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm11', $request->nama_sdm11)
                        ->where('jenjang_pendidikan_lanjut', $request->jenjang_pendidikan_lanjut)
                        ->where('bidang_studi', $request->bidang_studi)
                        ->where('perguruan_tinggi', $request->perguruan_tinggi)
                        ->where('negara', $request->negara)
                        ->where('tahun_mulai_studi', $request->tahun_mulai_studi)
                        ->first();

        // $sdm11->update($request->all());
        if($sdm11==null){ 
        $sdm11 = Sdm11::find($member);
        $sdm11->nama_sdm11 = $request->nama_sdm11;
        $sdm11->jenjang_pendidikan_lanjut = $request->jenjang_pendidikan_lanjut;
        $sdm11->bidang_studi = $request->bidang_studi;
        $sdm11->perguruan_tinggi = $request->perguruan_tinggi;
        $sdm11->negara = $request->negara;
        $sdm11->tahun_mulai_studi = $request->tahun_mulai_studi;
        $sdm11->id_departemen= $request->user()->id_departemen;

        $sdm11->save();
        return redirect()->route('sdm11.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdm11.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_peningkatan_kemampuan)
    {
        Sdm11::destroy($id_peningkatan_kemampuan);
        return redirect()->route('sdm11.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdm11Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdm11' => $value->tahun_sdm11, 'nama_sdm11' => $value->nama_sdm11, 'jenjang_pendidikan_lanjut' => $value->jenjang_pendidikan_lanjut, 'bidang_studi' => $value->bidang_studi, 'perguruan_tinggi' => $value->perguruan_tinggi, 'negara' => $value->negara, 'tahun_mulai_studi' => $value->tahun_mulai_studi, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('peningkatan_kemampuan')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdm11.index');
    }

public function sdm11Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmk11 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $sdm11 = DB::table('peningkatan_kemampuan')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm11')
                        ->get();
 
        $sdmk11Data = "";
 
        if(count($sdm11) >0 ){
            $sdmk11Data .= '
           <table>
            <tr>
            <p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS</strong></p>
           </tr>
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;">Nama Dosen</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Jenjang Pendidikan Lanjut</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Bidang Studi</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Perguruan Tinggi</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Negara</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10;font-family : arial, helvetica, sans-serif;" >Tahun Mulai Studi</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;1&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;2&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;3&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;4&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;5&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">(&nbsp;6&nbsp;)</th>
                   </tr>';
                   foreach ($sdm11 as $sdm11) {
                    $sdmk11Data .= '
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm11->nama_sdm11 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm11->jenjang_pendidikan_lanjut . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm11->bidang_studi . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm11->perguruan_tinggi . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm11->negara . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10;font-family : arial, helvetica, sans-serif;">' . $sdm11->tahun_mulai_studi . '</td>
                   </tr>';
            }
            $sdmk11Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Tabel 4.5.2.xls');
        echo $sdmk11Data;
    }
    public function excelSdm11()
    {
        $sdm11s = DB::table('peningkatan_kemampuan')->get();

        $sdmk11Data = "";

        if(count($sdm11s) >0 ){
            $sdmk11Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdm11s as $sdm11) {
                $sdmk11Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdm11->bidang_studi.'</td>
                <td style= "border: 1px solid black">'.$sdm11->tahun_sdm11.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmk11Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmk11Data;
    }

    
     public function sdm11Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk11 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm11s = Sdm11::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('sdm11.pdf', compact('sdm11s','sdmk11'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdm11(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk11 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm11s = Sdm11::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm11')
                        ->get();
        $pdf = PDF::loadView('sdm11.pdfm', compact('sdm11s','sdmk11'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
