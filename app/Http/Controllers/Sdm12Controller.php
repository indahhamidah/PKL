<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm12;
use App\PeranKegiatan;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdm12Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdm12 = Sdm12::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $sdm12 = Sdm12::where('id_departemen', $id_departemen)
                    ->get();
        }
        else
        {
        $sdm12 = Sdm12::where('id_departemen', $id_departemen)
              ->join('peran_kegiatan', 'id_peran_kegiatan', '=', 'id_status_peran_kegiatan')
              ->orderBy('nama_sdm12')
              ->get();
        }
        $peran_kegiatan = PeranKegiatan::get(); 
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdm12/index',compact('sdm12','dept','peran_kegiatan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_sdm12' => 'required',
            'jenis_kegiatan' => 'required',
            'tempat_kegiatan' => 'required',
            'waktu_kegiatan' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdm12 = DB::table('kegiatan_dosen')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm12', $request->nama_mk_sdm12)
                        ->first();

        if($sdm12==null){  
        $sdm12=new Sdm12;
        $sdm12->nama_sdm12 = $request->nama_sdm12;
        $sdm12->jenis_kegiatan = $request->jenis_kegiatan;
        $sdm12->tempat_kegiatan = $request->tempat_kegiatan;
        $sdm12->waktu_kegiatan = $request->waktu_kegiatan;
        $sdm12->id_status_peran_kegiatan               = $request->id_status_peran_kegiatan;
        $sdm12->id_departemen= $request->user()->id_departemen;

        $sdm12->save();
        return redirect()->route('sdm12.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdm12.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_kegiatan_dosen)
    {
        // dd($member);
        return view('sdm12/index',compact('sdm12'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_sdm12' => 'required',
            'jenis_kegiatan' => 'required',
            'tempat_kegiatan' => 'required',
            'waktu_kegiatan' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdm12 = DB::table('kegiatan_dosen')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm12', $request->nama_sdm12)
                        ->where('jenis_kegiatan', $request->jenis_kegiatan)
                        ->where('tempat_kegiatan', $request->tempat_kegiatan)
                        ->where('waktu_kegiatan', $request->waktu_kegiatan)
                        ->where('id_status_peran_kegiatan', $request->id_status_peran_kegiatan)
                        ->first();

        // $sdm12->update($request->all());
        if($sdm12==null){ 
        $sdm12 = Sdm12::find($member);
        $sdm12->nama_sdm12 = $request->nama_sdm12;
        $sdm12->jenis_kegiatan = $request->jenis_kegiatan;
        $sdm12->tempat_kegiatan = $request->tempat_kegiatan;
        $sdm12->waktu_kegiatan = $request->waktu_kegiatan;
        $sdm12->id_status_peran_kegiatan               = $request->id_status_peran_kegiatan;
        $sdm12->id_departemen= $request->user()->id_departemen;

        $sdm12->save();
        return redirect()->route('sdm12.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdm12.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_kegiatan_dosen)
    {
        Sdm12::destroy($id_kegiatan_dosen);
        return redirect()->route('sdm12.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdm12Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdm12' => $value->tahun_sdm12, 'nama_sdm12' => $value->nama_sdm12, 'jenis_kegiatan' => $value->jenis_kegiatan, 'tempat_kegiatan' => $value->tempat_kegiatan, 'waktu_kegiatan' => $value->waktu_kegiatan, 'penyaji_sdm12' => $value->penyaji_sdm12, 'peserta_sdm12' => $value->peserta_sdm12, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('kegiatan_dosen')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdm12.index');
    }

    public function sdm12sExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmk12 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $sdm12 = sdm12::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('peran_kegiatan', 'id_peran_kegiatan', '=', 'id_status_peran_kegiatan')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm12')
                        ->get();
            $peran_kegiatan=PeranKegiatan::get();
        Excel::create('Data Tabel 4.5.3', function($excel) use($id_departemen, $sdmk12, $date1, $date2, $sdm12, $peran_kegiatan){
        $excel->sheet('Data Tabel 4.5.3', function($sheet) use($id_departemen, $sdmk12, $date1, $date2, $sdm12, $peran_kegiatan){
          $sheet->setSize('A1', 30, 18);
          $sheet->setSize('B1', 200, 18);
          $sheet->setSize('C1', 45, 18);
          $sheet->setSize('D1', 40, 18);
          $sheet->setSize('E1', 20, 18);
          $sheet->setSize('F1', 20, 18);
          $sheet->loadView('sdm12/excel')->with("sdmk12", $sdmk12)->with("date1", $date1)->with("date2", $date2)->with("sdm12", $sdm12)->with("peran_kegiatan", $peran_kegiatan);
        });
     })->export('xlsx');
 
    }

public function sdm12Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmk12 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $sdm12 = DB::table('kegiatan_dosen')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
 
        $sdmk12Data = "";
 
        if(count($sdm12) >0 ){
            $sdmk12Data .= '
           <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">4.5.3</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/<br>pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri</font></td>
           </tr>
                    <tr>
                    <th></th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;">Nama Dosen</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;" >Jenis Kegiatan*</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;" >Tempat</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px;background-color:#daeef3;" >Waktu</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5p;background-color:#daeef3;x" >Sebagai</th>
                     <tr>
                     <th></th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3;" >Penyaji</th>
                     <th style="border: 1px solid #000; padding: 5px;background-color:#daeef3;" >Peserta</th>
                   </tr>
                   </tr>
                   <tr>
                    <th></th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;1&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;2&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;3&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;4&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;5&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;6&nbsp;)</th>
                   </tr>';
                   foreach ($sdm12 as $sdm12) {
                    $sdmk12Data .= '
                   <tr>
                    <th></th>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm12->nama_sdm12 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm12->jenis_kegiatan . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm12->tempat_kegiatan . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm12->waktu_kegiatan . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm12->penyaji_sdm12 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm12->peserta_sdm12 . '</td>
                   </tr>';
                  
            } $sdmk12Data .='</table>
            <td style="text-align: left; font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Jenis kegiatan : Seminar ilmiah, Lokakarya, Penataran/Pelatihan, Workshop, Pagelaran, Pameran, Peragaan dll</td>';
            $sdmk12Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Tabel 4.5.3.xls');
        echo $sdmk12Data;
    }
    public function excelSdm12()
    {
        $sdm12s = DB::table('kegiatan_dosen')->get();

        $sdmk12Data = "";

        if(count($sdm12s) >0 ){
            $sdmk12Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdm12s as $sdm12) {
                $sdmk12Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdm12->tempat_kegiatan.'</td>
                <td style= "border: 1px solid black">'.$sdm12->tahun_sdm12.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmk12Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmk12Data;
    }

    
     public function sdm12Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk12 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm12s = Sdm12::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('sdm12.pdf', compact('sdm12s','sdmk12'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdm12(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk12 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm12s = Sdm12::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('peran_kegiatan', 'id_peran_kegiatan', '=', 'id_status_peran_kegiatan')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm12')
                        ->get();
        $peran_kegiatan=PeranKegiatan::get();
        $pdf = PDF::loadView('sdm12.pdfm', compact('sdm12s','sdmk12','peran_kegiatan'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
