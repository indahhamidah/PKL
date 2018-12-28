<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulum4;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Kurikulum4Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        if(Auth::User()->id_departemen==10)
        {

           $jumlah_sks_ps = Kurikulum4::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)->get();

        }
        else
        {
       $jumlah_sks_ps = Kurikulum4::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get(); 
        }


            $listdept=DB::table('departemen')
                    ->get();
            return view('kurikulum4/index',compact('jumlah_sks_ps','dept', 'listdept'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'sks_wajib_universitas' => 'required',
            'sks_wajib_fakultas' => 'required',
            'keterangan_wajib_universitas' => 'required',
            'keterangan_wajib_fakultas' => 'required',
            'sks_wajib_mayor' => 'required',
            'keterangan_wajib_mayor' => 'required',
            'sks_minor' => 'required',
            'keterangan_minor' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $jumlah_sks_ps = DB::table('jumlah_sks_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->first();

        if($jumlah_sks_ps==null){  
        $jumlah_sks_ps=new Kurikulum4;
        $jumlah_sks_ps->sks_wajib_universitas = $request->sks_wajib_universitas;
        $jumlah_sks_ps->sks_wajib_fakultas = $request->sks_wajib_fakultas;
        $jumlah_sks_ps->sks_wajib_mayor = $request->sks_wajib_mayor;
        $jumlah_sks_ps->sks_minor = $request->sks_minor;
        $jumlah_sks_ps->keterangan_wajib_universitas = $request->keterangan_wajib_universitas;
        $jumlah_sks_ps->keterangan_wajib_fakultas = $request->keterangan_wajib_fakultas;
        $jumlah_sks_ps->keterangan_wajib_mayor = $request->keterangan_wajib_mayor;
        $jumlah_sks_ps->keterangan_minor = $request->keterangan_minor;
        $jumlah_sks_ps->id_departemen= $request->user()->id_departemen;

        $jumlah_sks_ps->save();
        return redirect()->route('kurikulum4.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('kurikulum4.index')
                        ->with('message','Tahun ada yang sama'); 
          }                
    }
     public function edit($id_jumlah_sks_ps)
    {
        // dd($member);
        return view('kurikulum4/index',compact('jumlah_sks_ps'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'sks_wajib_universitas' => 'required',
            'sks_wajib_fakultas' => 'required',
            'keterangan_wajib_universitas' => 'required',
            'keterangan_wajib_fakultas' => 'required',
            'sks_wajib_mayor' => 'required',
            'keterangan_wajib_mayor' => 'required',
            'sks_minor' => 'required',
            'keterangan_minor' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $jumlah_sks_ps = DB::table('jumlah_sks_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('sks_wajib_universitas', $request->sks_wajib_universitas)
                        ->where('sks_wajib_fakultas', $request->sks_wajib_fakultas)
                        ->where('sks_wajib_mayor', $request->sks_wajib_mayor)
                        ->where('sks_minor', $request->sks_minor)
                        ->where('keterangan_wajib_universitas', $request->keterangan_wajib_universitas)
                        ->where('keterangan_wajib_fakultas', $request->keterangan_wajib_fakultas)
                        ->where('keterangan_wajib_mayor', $request->keterangan_wajib_mayor)
                        ->where('keterangan_minor', $request->keterangan_minor)
                        ->first();

        // $jumlah_sks_ps->update($request->all());
        if($jumlah_sks_ps==null){ 
        $jumlah_sks_ps = Kurikulum4::find($member);
        $jumlah_sks_ps->sks_wajib_universitas = $request->sks_wajib_universitas;
        $jumlah_sks_ps->sks_wajib_fakultas = $request->sks_wajib_fakultas;
        $jumlah_sks_ps->sks_wajib_mayor = $request->sks_wajib_mayor;
        $jumlah_sks_ps->sks_minor = $request->sks_minor;
        $jumlah_sks_ps->keterangan_wajib_universitas = $request->keterangan_wajib_universitas;
        $jumlah_sks_ps->keterangan_wajib_fakultas = $request->keterangan_wajib_fakultas;
        $jumlah_sks_ps->keterangan_wajib_mayor = $request->keterangan_wajib_mayor;
        $jumlah_sks_ps->keterangan_minor = $request->keterangan_minor;
        $jumlah_sks_ps->id_departemen= $request->user()->id_departemen;

        $jumlah_sks_ps->save();
        return redirect()->route('kurikulum4.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('kurikulum4.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_jumlah_sks_ps)
    {
        Kurikulum4::destroy($id_jumlah_sks_ps);
        return redirect()->route('kurikulum4.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function kurikulum4Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sekarang' => $value->tahun_sekarang,'sks_wajib_universitas' => $value->sks_wajib_universitas,'sks_wajib_fakultas' => $value->sks_wajib_fakultas,'keterangan_wajib_universitas' => $value->keterangan_wajib_universitas,'keterangan_wajib_fakultas' => $value->keterangan_wajib_fakultas, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('jumlah_sks_ps')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('kurikulum4.index');
    }

public function kurikulum4Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $kur4 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $jumlah_sks_ps = DB::table('jumlah_sks_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
 
        $kur4Data = "";
 
        if(count($jumlah_sks_ps) >0 ){
            foreach ($jumlah_sks_ps as $jumlah_sks_ps) {
            $kur4Data .= '
           <table>
            <tr>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Jumlah SKS PS (minimum untuk kelulusan) : '. DB::raw($jumlah_sks_ps->sks_wajib_universitas+$jumlah_sks_ps->sks_wajib_fakultas+$jumlah_sks_ps->sks_wajib_mayor+$jumlah_sks_ps->sks_minor) .' SKS yang tersusun sebagai berikut:  </font></td>
           </tr>';

            
                $kur4Data .= '
                <table cellspacing="0" style="font-size: 16px">
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;">Jenis Mata Kuliah</th>
                     <th style="border: 1px solid #000; padding: 5px;text-align: center; background-color:#daeef3;">SKS</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;" >Keterangan</th>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(1)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(2)&nbsp;</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">&nbsp;(3)&nbsp;</td>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Wajib Universitas</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' .$jumlah_sks_ps->sks_wajib_universitas. '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">' .$jumlah_sks_ps->keterangan_wajib_universitas. '</td>
                   </tr>
                   
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Wajib Fakultas</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' .$jumlah_sks_ps->sks_wajib_fakultas. '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">' .$jumlah_sks_ps->keterangan_wajib_fakultas. '</td>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Wajib Mayor</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' .$jumlah_sks_ps->sks_wajib_mayor. '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">' .$jumlah_sks_ps->keterangan_wajib_mayor. '</td>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Minor dan <i>Supporting Course<i></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' .$jumlah_sks_ps->sks_minor. '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">' .$jumlah_sks_ps->keterangan_minor. '</td>
                   </tr>
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Jumlah total SKS setelah lulus</td>
                     <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: left;">Minimal ' . ($jumlah_sks_ps->sks_wajib_universitas+$jumlah_sks_ps->sks_wajib_fakultas+$jumlah_sks_ps->sks_wajib_mayor+$jumlah_sks_ps->sks_minor) . ' SKS (dimungkinkan bagi mahasiswa untuk menambah beban SKSnya)</td>
                   </tr>
                   </table>';
            }
            $kur4Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Tabel 6.1.2.1.xls');
        echo $kur4Data;
    }
    public function excelKurikulum4()
    {
        $jumlah_sks_pss = DB::table('jumlah_sks_ps')->get();

        $kur4Data = "";

        if(count($jumlah_sks_pss) >0 ){
            $kur4Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($jumlah_sks_pss as $jumlah_sks_ps) {
                $kur4Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$jumlah_sks_ps->keterangan_wajib_universitas.'</td>
                <td style= "border: 1px solid black">'.$jumlah_sks_ps->tahun_sekarang.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $kur4Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $kur4Data;
    }

    
     public function kurikulum4Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $kur4 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $jumlah_sks_pss = Kurikulum4::whereBetween('tahun_sekarang', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sekarang', 'desc')
                        ->get();
        $pdf = PDF::loadView('kurikulum4.pdf', compact('jumlah_sks_pss','kur4'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadkurikulum4(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $kur4 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $jumlah_sks_pss = Kurikulum4::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('kurikulum4.pdfm', compact('jumlah_sks_pss','kur4'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
