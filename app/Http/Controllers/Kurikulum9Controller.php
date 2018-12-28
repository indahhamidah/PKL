<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Kurikulum9;
use App\PerubahanSilabus;
use App\PerubahanBukuAjar;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Kurikulum9Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $kurikulum9 = Kurikulum9::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $kurikulum9 = Kurikulum9::join('departemen', 'id_dept', '=', 'id_departemen')
                    ->get();
        }
        else
        {
        $kurikulum9 = Kurikulum9::join('departemen', 'id_dept', '=', 'id_departemen')
              ->join('perubahan_pada_silabus', 'id_perubahan_silabus', '=', 'id_perubahan_pada_silabus')
              ->join('perubahan_pada_buku_ajar', 'id_perubahan_buku_ajar', '=', 'id_perubahan_pada_buku_ajar')
              ->where('id_departemen', $id_departemen)
                    ->orderBy('nama_mk_kurikulum9')
              ->get();
        }
        $perubahan_silabus = PerubahanSilabus::get(); 
        $perubahan_buku_ajar = PerubahanBukuAjar::get(); 
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('kurikulum9/index',compact('kurikulum9','dept','perubahan_silabus','perubahan_buku_ajar'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_mk_kurikulum9' => 'required',
            'kode_mk_kurikulum9' => 'required',
            'status_mk' => 'required',
            'alasan_peninjauan' => 'required',
            'usulan' => 'required',
            'berlaku' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $kurikulum9 = DB::table('hasil_peninjauan_kurikulum')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('kode_mk_kurikulum9', $request->kode_mk_kurikulum9)
                        ->first();

        if($kurikulum9==null){  
        $kurikulum9=new Kurikulum9;
        $kurikulum9->nama_mk_kurikulum9 = $request->nama_mk_kurikulum9;
        $kurikulum9->kode_mk_kurikulum9 = $request->kode_mk_kurikulum9;
        $kurikulum9->status_mk = $request->status_mk;
        $kurikulum9->id_perubahan_pada_silabus               = $request->id_perubahan_pada_silabus;
        $kurikulum9->id_perubahan_pada_buku_ajar               = $request->id_perubahan_pada_buku_ajar;
        $kurikulum9->alasan_peninjauan = $request->alasan_peninjauan;
        $kurikulum9->usulan = $request->usulan;
        $kurikulum9->berlaku = $request->berlaku;
        $kurikulum9->id_departemen= $request->user()->id_departemen;

        $kurikulum9->save();
        return redirect()->route('kurikulum9.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('kurikulum9.index')
                        ->with('message','No. MK ada yang sama'); 
          }                
    }
     public function edit($id_hasil_peninjauan_kurikulum)
    {
        // dd($member);
        return view('kurikulum9/index',compact('kurikulum9'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_mk_kurikulum9' => 'required',
            'kode_mk_kurikulum9' => 'required',
            'status_mk' => 'required',
            'alasan_peninjauan' => 'required',
            'usulan' => 'required',
            'berlaku' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $kurikulum9 = DB::table('hasil_peninjauan_kurikulum')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_mk_kurikulum9', $request->nama_mk_kurikulum9)
                        ->where('kode_mk_kurikulum9', $request->kode_mk_kurikulum9)
                        ->where('status_mk', $request->status_mk)
                        ->where('id_perubahan_pada_silabus', $request->id_perubahan_pada_silabus)
                        ->where('id_perubahan_pada_buku_ajar', $request->id_perubahan_pada_buku_ajar)
                        ->where('alasan_peninjauan', $request->alasan_peninjauan)
                        ->where('usulan', $request->usulan)
                        ->where('berlaku', $request->berlaku)
                        ->first();

        // $kurikulum9->update($request->all());
        if($kurikulum9==null){ 
        $kurikulum9 = Kurikulum9::find($member);
        $kurikulum9->nama_mk_kurikulum9 = $request->nama_mk_kurikulum9;
        $kurikulum9->kode_mk_kurikulum9 = $request->kode_mk_kurikulum9;
        $kurikulum9->status_mk = $request->status_mk;
        $kurikulum9->id_perubahan_pada_silabus               = $request->id_perubahan_pada_silabus;
        $kurikulum9->id_perubahan_pada_buku_ajar               = $request->id_perubahan_pada_buku_ajar;
        $kurikulum9->alasan_peninjauan = $request->alasan_peninjauan;
        $kurikulum9->usulan = $request->usulan;
        $kurikulum9->berlaku = $request->berlaku;
        $kurikulum9->id_departemen= $request->user()->id_departemen;

        $kurikulum9->save();
        return redirect()->route('kurikulum9.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('kurikulum9.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_hasil_peninjauan_kurikulum)
    {
        Kurikulum9::destroy($id_hasil_peninjauan_kurikulum);
        return redirect()->route('kurikulum9.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function kurikulum9Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_kurikulum9' => $value->tahun_kurikulum9, 'kode_mk_kurikulum9' => $value->kode_mk_kurikulum9, 'nama_mk_kurikulum9' => $value->nama_mk_kurikulum9, 'status_mk' => $value->status_mk, 'alasan_peninjauan' => $value->alasan_peninjauan, 'usulan' => $value->usulan, 'berlaku' => $value->berlaku, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('hasil_peninjauan_kurikulum')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('kurikulum9.index');
    }

    public function kurikulum9sExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $kur9 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $kurikulum9 = Kurikulum9::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('perubahan_pada_silabus', 'id_perubahan_silabus', '=', 'id_perubahan_pada_silabus')
                        ->join('perubahan_pada_buku_ajar', 'id_perubahan_buku_ajar', '=', 'id_perubahan_pada_buku_ajar')
                        ->where('id_departemen', $id_departemen)
                    ->orderBy('nama_mk_kurikulum9')
                        ->get();
            $perubahan_silabus=PerubahanSilabus::get();
            $perubahan_buku_ajar=PerubahanBukuAjar::get();
        Excel::create('Data Tabel 6.1.5', function($excel) use($id_departemen, $kur9, $kurikulum9, $perubahan_silabus, $perubahan_buku_ajar){
        $excel->sheet('Data Tabel 6.1.5', function($sheet) use($id_departemen, $kur9, $kurikulum9, $perubahan_silabus, $perubahan_buku_ajar){
          $sheet->setSize('A1', 15, 18);
          $sheet->setSize('B1', 40, 18);
          $sheet->setSize('C1', 45, 18);
          $sheet->setSize('D1', 40, 18);
          $sheet->setSize('E1', 20, 18);
          $sheet->setSize('E2', 20, 18);
          $sheet->setSize('E3', 20, 18);
          $sheet->setSize('F1', 20, 18);
          $sheet->setSize('F2', 20, 18);
          $sheet->setSize('F3', 20, 18);
          $sheet->setSize('G1', 20, 18);
          $sheet->setSize('G2', 20, 18);
          $sheet->setSize('G3', 20, 18);
          $sheet->setSize('H1', 20, 18);
          $sheet->setSize('H2', 20, 18);
          $sheet->setSize('H3', 20, 18);
          $sheet->setSize('I1', 40, 18);
          $sheet->setSize('I2', 200, 18);
          $sheet->setSize('J1', 40, 18);
          $sheet->setSize('K1', 40, 18);
          $sheet->loadView('kurikulum9/excel')->with("kur9", $kur9)->with("kurikulum9", $kurikulum9)->with("perubahan_silabus", $perubahan_silabus)->with("perubahan_buku_ajar", $perubahan_buku_ajar);
        });
     })->export('xlsx');
 
    }

public function kurikulum9Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $kur9 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $kurikulum9 = DB::table('hasil_peninjauan_kurikulum')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
 
        $kur9Data = "";
 
        if(count($kurikulum9) >0 ){
            $kur9Data .= '
           <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">6.1.9</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5"><strong>Tuliskan hasil peninjauan tersebut, mengikuti format tabel berikut.</strong></font></td>
           </tr>
                    <tr>
                    <th></th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px">No. MK</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px" >Nama MK</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px" >MK Baru / Lama / Hapus</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px" >Perubahan pada</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px" >Alasan Peninjauan</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px" >Atas Usulan/Masukan dari</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px" >Berlaku mulai Sem./Th.</th>
                     <tr>
                     <th></th>
                     <th style="border: 1px solid #000; padding: 5px" >Silabus/SAP</th>
                     <th style="border: 1px solid #000; padding: 5px" >Buku Ajar</th>
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
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;7&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;8&nbsp;)</th>
                   </tr>';
                   foreach ($kurikulum9 as $kurikulum9) {
                    $kur9Data .= '
                   <tr>
                    <th></th>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' .$kurikulum9->kode_mk_kurikulum9 . '</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">' .$kurikulum9->nama_mk_kurikulum9 . '</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">' .$kurikulum9->status_mk . '</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">' .$kurikulum9->alasan_peninjauan . '</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">' .$kurikulum9->usulan . '</td>
                    <td style="border: 1px solid #000; padding: 5px; text-align: center;">' .$kurikulum9->berlaku . '</td>
                   </tr>';
            }
            $kur9Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum 6.1.9.xls');
        echo $kur9Data;
    }
    public function excelKurikulum9()
    {
        $kurikulum9s = DB::table('hasil_peninjauan_kurikulum')->get();

        $kur9Data = "";

        if(count($kurikulum9s) >0 ){
            $kur9Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($kurikulum9s as $kurikulum9) {
                $kur9Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$kurikulum9->sem_kurikulum9.'</td>
                <td style= "border: 1px solid black">'.$kurikulum9->tahun_kurikulum9.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $kur9Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $kur9Data;
    }

    
     public function kurikulum9Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $kur9 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $kurikulum9s = Kurikulum9::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('kurikulum9.pdf', compact('kurikulum9s','kur9'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadkurikulum9(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $kur9 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $kurikulum9s = Kurikulum9::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('perubahan_pada_silabus', 'id_perubahan_silabus', '=', 'id_perubahan_pada_silabus')
                        ->join('perubahan_pada_buku_ajar', 'id_perubahan_buku_ajar', '=', 'id_perubahan_pada_buku_ajar')
                        ->where('id_departemen', $id_departemen)
                    ->orderBy('nama_mk_kurikulum9')
                        ->get();
        $perubahan_silabus=PerubahanSilabus::get();
        $perubahan_buku_ajar=PerubahanBukuAjar::get();
        $pdf = PDF::loadView('kurikulum9.pdfm', compact('kurikulum9s','kur9','perubahan_silabus','perubahan_buku_ajar'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
