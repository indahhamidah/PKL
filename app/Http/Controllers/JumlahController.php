<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jumlah;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;

class JumlahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        if(Auth::user()->id_departemen==10)
        {
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $jumlahs = Jumlah::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->orderBy('tahun', 'desc')
                        ->get();

            $totaljumlah=DB::table('jumlahs')
                        ->select(DB::raw('(mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler) as totaljumlah'))
                        ->first();
        $totaldayatam=Jumlah::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->sum('daya_tampung');
        $totalikut=Jumlah::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->sum('ikut_seleksi');
        $totallulus=Jumlah::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->sum('lulus_seleksi');
        }
        else
        {
        $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $jumlahs = Jumlah::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun', 'desc')
                        ->get(); 

        $totaljumlah=DB::table('jumlahs')
                        ->select(DB::raw('(mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler) as totaljumlah'))
                        ->first();
        $totaldayatam=Jumlah::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->sum('daya_tampung');
        $totalikut=Jumlah::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->sum('ikut_seleksi');
        $totallulus=Jumlah::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->sum('lulus_seleksi');
        }  
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $listtahun = Jumlah::whereBetween('tahun', [$date1,$date2])
        // $listtahun=DB::table('jumlahs', 'tahun')
                    ->where('id_departemen', $id_departemen)
                    ->orderBy('tahun','asc')
                    ->get();

        $listdept=DB::table('departemen')
                    // ->orderBy('id_dept','desc')
                    ->get();
     // dd($dept[0]->nama_departemen);
// dd($jumlahs[0]->nama_departemen);
        return view('jumlah/index2',compact('jumlahs', 'totaljumlah', 'listtahun', 'listdept', 'totaldayatam', 'totalikut', 'totallulus','dept'));

    }

  
    public function store(Request $request)
    {
        request()->validate([

            'mbt_reguler' => 'required',
            'mt_reguler' => 'required',
            'total_reguler' => 'required',
            'mbt_nonreguler' => 'required',
            'mt_nonreguler' => 'required',
            'total_nonreguler' => 'required',
            'tahun' => 'required',
            'daya_tampung' => 'required',
            'ikut_seleksi' => 'required',
            'lulus_seleksi' => 'required',

            
            // 'id_departemen' => 'required',
        ]);
            $id_departemen = $request->user()->id_departemen;
                $jumlahs = DB::table('jumlahs')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('tahun', $request->tahun)
                        ->first();

        if($jumlahs==null){             
        $jumlahs=new Jumlah;
        $jumlahs->mbt_reguler = $request->mbt_reguler;
        $jumlahs->mt_reguler = $request->mt_reguler;
        $jumlahs->total_reguler = $request->total_reguler;
        $jumlahs->mbt_nonreguler = $request->mbt_nonreguler;
        $jumlahs->mt_nonreguler = $request->mt_nonreguler;
        $jumlahs->total_nonreguler = $request->total_nonreguler;
        $jumlahs->tahun = $request->tahun;
        $jumlahs->daya_tampung = $request->daya_tampung;
        $jumlahs->ikut_seleksi = $request->ikut_seleksi;
        $jumlahs->lulus_seleksi = $request->lulus_seleksi;
        $jumlahs->id_departemen= $request->user()->id_departemen;

        $jumlahs->save();
        return redirect()->route('jumlah.index')
                        ->with('message2','Data berhasil ditambahkan');
          }else{
           return redirect()->route('jumlah.index')
                        ->with('message','Tahun ada yang sama'); 
          }                
    }

     public function edit($id_jumlah)
    {
        // dd($id_jumlah);
        return view('jumlah/index2',compact('jumlah', 'page'));

    }
    
       
    public function update(Request $request, $member)
    {
        // dd($request->tipe, $request->jenis_mahasiswa, $request->jumlah_mahasiswa, $request->tahun);
        request()->validate([
            'mbt_reguler' => 'required',
            'mt_reguler' => 'required',
            'total_reguler' => 'required',
            'mbt_nonreguler' => 'required',
            'mt_nonreguler' => 'required',
            'total_nonreguler' => 'required',
            'tahun' => 'required',
            'daya_tampung' => 'required',
            'ikut_seleksi' => 'required',
            'lulus_seleksi' => 'required',

        ]);

       $id_departemen = $request->user()->id_departemen;
                $jumlahs = DB::table('jumlahs')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('mbt_reguler', $request->mbt_reguler)
                        ->where('mt_reguler', $request->mt_reguler)
                        ->where('total_reguler', $request->total_reguler)
                        ->where('mbt_nonreguler', $request->mbt_nonreguler)
                        ->where('mt_nonreguler', $request->mt_nonreguler)
                        ->where('total_nonreguler', $request->total_nonreguler)
                        ->where('tahun', $request->tahun)
                        ->where('daya_tampung', $request->tahun)
                        ->where('ikut_seleksi', $request->ikut_seleksi)
                        ->where('lulus_seleksi', $request->lulus_seleksi)
                        ->first();

        if($jumlahs==null){    
        $jumlah = Jumlah::find($member);
        $jumlah->mbt_reguler = $request->mbt_reguler;
        $jumlah->mt_reguler = $request->mt_reguler;
        $jumlah->total_reguler = $request->total_reguler;
        $jumlah->mbt_nonreguler = $request->mbt_nonreguler;
        $jumlah->mt_nonreguler = $request->mt_nonreguler;
        $jumlah->total_nonreguler = $request->total_nonreguler;
        $jumlah->tahun = $request->tahun;
        $jumlah->daya_tampung = $request->daya_tampung;
        $jumlah->ikut_seleksi = $request->ikut_seleksi;
        $jumlah->lulus_seleksi = $request->lulus_seleksi;
        $jumlah->id_departemen= $request->user()->id_departemen;
        $jumlah->save();
        return redirect()->route('jumlah.index')
                        ->with('message2','Data berhasil diubah');
                         }else{
           return redirect()->route('jumlah.index')
                        ->with('message','Tahun ada yang sama'); 
          }       
                         
    }

    public function destroy($id_jumlah)
    {
        // dd($id_jumlah);
        Jumlah::destroy($id_jumlah);
        return redirect()->route('jumlah.index')
                        ->with('message2','Data berhasil dihapus');
    }

    public function jumlahImport(Request $request){

        $id_departemen = $request->user()->id_departemen;
                $jumlahs = DB::table('jumlahs')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('tahun', $request->tahun)
                        ->first();

        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    if($jumlahs==null){   
                    $insert[] = ['mbt_reguler' => $value->mbt_reguler, 'mt_reguler' => $value->mt_reguler, 'total_reguler' => $value->total_reguler,'mbt_nonreguler' => $value->mbt_nonreguler, 'mt_nonreguler' => $value->mt_nonreguler, 'total_nonreguler' => $value->total_nonreguler, 'tahun' => $value->tahun, 'daya_tampung' => $value->daya_tampung, 'ikut_seleksi' => $value->ikut_seleksi, 'lulus_seleksi' => $value->lulus_seleksi, 'id_departemen' => $request->user()->id_departemen];
                                        }else{
                      return redirect()->route('jumlah.index')
                        ->with('fail','Tahun ada yang sama'); 
                    }
                }

               if(!empty($insert)){
                    DB::table('jumlahs')->insert($insert);   
                }
            }
        }
        return redirect()->route('jumlah.index')->with('message2', 'Data berhasil diimport');       
    }


 public function jumlahExport(Request $request){

        $id_departemen = Auth::user()->id_departemen;
        $jumlh = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $jumlahs = Jumlah::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun', 'decs')
                        ->get();
        $jumData = "";
 

       if(count($jumlahs) >0 ){
            $jumData .= '<table>
           <tr>
            <th colspan="1" align=left valign=top><font face="Times New Rowman" size="2.5">Tabel 3.1</font></th>
             <th width=200px colspan="12" style="text-align: left"><font face="Times New Rowman" size="2.5">Jumlah Mahasiswa '.$jumlh[0]->nama_departemen.' tahun akademik '.Carbon::now()->startOfYear()->subYear(1)->format('Y').'/'.Carbon::now()->startOfYear()->subYear(0)->format('Y').' menurut Tipe Program dan Jenis Mahasiswa</font></th>

             <tr>
             <th></th>
             <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">Tipe</font></th>
             <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">Jenis Mahasiswa</font></th>
             <th colspan="5" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">Tahun</font></th>
                   </tr>
                        
                   <tr><th>';

                   foreach ($jumlahs as $jumlah) {
                    $jumData .= '
             <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px" align="center"><font face="Times New Rowman">'.$jumlah->tahun.'</font></th>
                  ';
              }                
                  $jumData .= '
                  <tr>
                  <th></th>
            <td rowspan="3" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">Program reguler</font></td>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">1. Mahasiswa baru bukan transfer</font></td>';
            foreach ($jumlahs as $jumlah) {
            $jumData .= '
             <td rowspan="1" align=center valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px">'.$jumlah->mbt_reguler.'<font face="Times New Rowman"></font></td>
         ';
     }
            

             $jumData .= '
             <tr>
             <th></th>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">2. Mahasiswa baru transfer </font></td>';
             foreach ($jumlahs as $jumlah) {
             $jumData .= '
             <td rowspan="1" align=middle valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.$jumlah->mt_reguler.'</font></td>
             ';
         }

             $jumData .= '
             <tr>
             <th></th>
             <td align=left valign=middle style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">3. Total Mahasiswa regular (Student Body)</font></td>';

              foreach ($jumlahs as $jumlah) {
             $jumData .= '
             <td align=center valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.$jumlah->total_reguler.'</font></td>
             ';
         }

                  $jumData .= '
                  <tr>
                  <th></th>
            <td rowspan="3" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">Program non-reguler</font></td>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">1. Mahasiswa baru bukan transfer</font></td>';

             foreach ($jumlahs as $jumlah) {
             $jumData .= '
             <td rowspan="1" align=center valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.$jumlah->mbt_nonreguler.'</font></td>
             ';
         }

             $jumData .= '
             <tr>
             <th></th>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">2. Mahasiswa baru transfer </font></td>';

             foreach ($jumlahs as $jumlah) {
             $jumData .= '
             <td rowspan="1" align=center valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.$jumlah->mt_nonreguler.'</font></td>
             ';
         }

             $jumData .= '
             <tr>
             <th></th>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">3. Total Mahasiswa non-regular (Student Body)</font></td>';

              foreach ($jumlahs as $jumlah) {
             $jumData .= '
             <td rowspan="1" align=center valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.$jumlah->total_nonreguler.'</font></td>
             ';
         }

              $jumData .= '
              <tr>
             <th></th>
             <th colspan="2" align=left style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">Total</font></th>';

              foreach ($jumlahs as $jumlah) {
             $jumData .= '
             <th align=center style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman"></font>'.DB::raw($jumlah->mbt_reguler+$jumlah->mt_reguler+$jumlah->total_reguler+$jumlah->mbt_nonreguler+$jumlah->mt_nonreguler+$jumlah->total_nonreguler).'</th>
             ';
         }

          $jumData .='</table>';    
        }
        
        if(count($jumlahs) >0 ){
            $jumData .= '<table>
           <tr>
           </tr>';
            $jumData .= '<table>';
        }

        if(count($jumlahs) >0 ){
            $jumData .= '<table>
            <tr>
            <th>
            <th rowspan="2" width="150px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Times New Rowman" size="2.5" >Tahun</th>
            <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Times New Rowman" size="2.5" > Daya Tampung</th>
            <th colspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Times New Rowman" size="2.5"> Jumlah Calon Mahasiswa</th>
            <tr>
            <th>
                  <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Times New Rowman" size="2.5">Ikut Seleksi</th>
                  <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;"><font face="Times New Rowman" size="2.5">Lulus Seleksi</th>
                 </tr></th>'; 

                 
                foreach ($jumlahs as $jumlah) {
                $jumData .= '
                <tr>
                <th>
            <td align=center width="150px" style="border:1px solid #000; border-width: thin;"><font face="Times New Rowman" size="2.5" >'.$jumlah->tahun.'</td>
         
            <td align=center style="border:1px solid #000; border-width: thin;"><font face="Times New Rowman" size="2.5" >'.$jumlah->daya_tampung.'</td>
       
            <td align=center style="border:1px solid #000; border-width: thin;"><font face="Times New Rowman" size="2.5" >'.$jumlah->ikut_seleksi.'</td>
     
             <td align=center style="border:1px solid #000; border-width: thin;"><font face="Times New Rowman" size="2.5" >'.$jumlah->lulus_seleksi.'</td>
             </tr></th>';
         }
                $jumData .='</table>';
    }
        header('Content-Type: application/vnd.vnd.ms-excel');
        header('Content-Disposition: attachment; filename= Data Jumlah Mahasiswa '.$jumlahs[0]->nama_departemen.' .xls');
        echo $jumData;
    }

  public function exceljumlah()
    {
        $jumlahs = DB::table('jumlahs')->get();

        $jumData = "";

        if(count($jumlahs) >0 ){
            $jumData .= '<table>
           <tr>
            <th colspan="1" align=left valign=top><font face="Times New Rowman" size="2.5">Tabel 3.1</font></th>
             <th colspan="12" style="text-align: left"><font face="Times New Rowman" size="2.5">Jumlah Mahasiswa FMIPA tahun akademik '.Carbon::now()->startOfYear()->subYear(1)->format('Y').'/'.Carbon::now()->startOfYear()->subYear(0)->format('Y').' menurut Tipe Program dan Jenis Mahasiswa per Program Studi</font></th>

             <tr>
             <th></th>
            <th><p style="font-size:16px" align=left><font face="Times New Rowman"><u>Catatan:</u></font></p></th>

            <tr>
             <th></th>
             <td colspan="12" align=left valign=top style="font-size:10px" ><font face="Times New Rowman">(1)  Mahasiswa program reguler adalah yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</font></td>
            </tr>

            <tr>
             <th></th>
             <td colspan="12" align=left valign=top style="font-size:10px" ><font face="Times New Rowman">(2)  Mahasiswa program non-reguler adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu. </font></td>
            </tr>

            <tr>
             <th></th>
             <td colspan="12" align=left valign=top style="font-size:10px" ><font face="Times New Rowman">(3)  Mahasiswa transfer adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</font></td>
            </tr>

            <tr>
             <th></th>
            <th><p style="font-size:16px" align=left><font face="Times New Rowman"><u>Keterangan:</u></font></p></th>
            </tr>

            <tr>
             <th></th>
             <td colspan="12" align=left valign=top style="font-size:10px" ><font face="Times New Rowman"><b>G1 PS1</b>-Statistika, <b>G2 PS2</b>-Meteorologi Terapan, <b>G3 PS3</b>-Biologi, <b>G4 PS4</b>-Kimia, <b>G5 PS5</b>-Matematika, <b>G6 PS6</b>-Ilmu Komputer, <b>G7 PS7</b>-Fisika, <b>G8 PS8</b>-Biokimia, <b>G9 PS9</b>-Aktuaria</font></td>
            </tr>


             </tr>

           </tr>
            <tr>
             <th></th>
             <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">Tipe</font></th>
             <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">Jenis Mahasiswa</font></th>
             <th colspan="9" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">Jumlah Mahasiswa pada PS:</font></th>
             <th rowspan="2" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">Total <br> Mahasiswa <br> pada Fakultas</font></th>
             </tr>
             <th></th>
            <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">PS1 <br> G1</font></th>
             <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">PS2 <br> G2</font></th>
             <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">PS3 <br> G3</font></th>
             <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">PS4 <br> G4</font></th>
             <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">PS5 <br> G5</font></th>
             <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">PS6 <br> G6</font></th>
             <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">PS7 <br> G7</font></th>
             <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">PS8 <br> G8</font></th>
             <th style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">PS9 <br> G9</font></th>
            <tr>
             <th></th>
             <td rowspan="3" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">Program reguler</font></td>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">1. Mahasiswa baru bukan transfer</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('mbt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('mbt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('mbt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('mbt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('mbt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('mbt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('mbt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('mbt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('mbt_reguler').'</font></td>
             <th rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">=sum(D10:L10)</font></th>
            </tr>
            <tr>
             <th></th>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">2. Mahasiswa baru transfer</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('mt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('mt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('mt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('mt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('mt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('mt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('mt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('mt_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('mt_reguler').'</font></td>
             <th rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">=sum(D11:L11)</font></th>
            </tr>
            <tr>
             <th></th>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">3. Total Mahasiswa reguler (Student Body)</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('total_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('total_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('total_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('total_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('total_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('total_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('total_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('total_reguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('total_reguler').'</font></td>
             <th rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">=sum(D12:L12)</font></th>
            </tr>
            <tr>
             <th></th>
             <td rowspan="3" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">Program non-reguler</font></td>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">1. Mahasiswa baru bukan transfer</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('mbt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('mbt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('mbt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('mbt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('mbt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('mbt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('mbt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('mbt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('mbt_nonreguler').'</font></td>
             <th rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">=sum(D13:L13)</font></th>
            </tr>
            <tr>
             <th></th>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">2. Mahasiswa baru transfer</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('mt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('mt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('mt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('mt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('mt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('mt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('mt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('mt_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('mt_nonreguler').'</font></td>
             <th rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">=sum(D14:L14)</font></th>
            </tr>
            <tr>
             <th></th>
             <td rowspan="1" align=left valign=top style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">3. Total Mahasiswa non-reguler (Student Body)</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=1)->sum('total_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=2)->sum('total_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=3)->sum('total_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=4)->sum('total_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=5)->sum('total_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=6)->sum('total_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=7)->sum('total_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=8)->sum('total_nonreguler').'</font></td>
             <td rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">'.DB::table('jumlahs')->whereYear( 'tahun', date('Y'))->join('departemen', 'id_dept', '=', 'id_departemen')->where('id_departemen', $id_departemen=9)->sum('total_nonreguler').'</font></td>
             <th rowspan="1" align=center style="border:1px solid #000; border-width: thin; background-color:#255255255;" style="font-size:16px"><font face="Times New Rowman">=sum(D15:L15)</font></th>
            </tr>
            <tr>
             <th></th>
             <th colspan="2" align=right style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">Total</font></th>
             <th align=center style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">=SUM(D10:D15)</font></th>
             <th align=center style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">=SUM(E10:E15)</font></th>
             <th align=center style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">=SUM(F10:F15)</font></th>
             <th align=center style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">=SUM(G10:G15)</font></th>
             <th align=center style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">=SUM(H10:H15)</font></th>
             <th align=center style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">=SUM(I10:I15)</font></th>
             <th align=center style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">=SUM(J10:J15)</font></th>
             <th align=center style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">=SUM(K10:K15)</font></th>
             <th align=center style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">=SUM(L10:L15)</font></th>
             <th align=center style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:16px"><font face="Times New Rowman">=SUM(M10:M15)</font></th>
            </tr>
            
            ';

            $jumData .='</table>';
        }

        header('Content-Type: application/vnd.vnd.ms-excel');
        header('Content-Disposition: attachment; filename=Tabel_3.1_Jumlah_Mahasiswa_FMIPA.xls');
        echo $jumData;
    }
    
    public function cariTahun(Request $request)
    {
         $id_departemen = $request->user()->id_departemen;
         $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $cariTahun = $request->idTahun;

         $jumlahs = DB::table('jumlahs')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('tahun', $cariTahun)
                        ->get();

         $totaljumlah=DB::table('jumlahs')
                        ->select(DB::raw('(mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler) as totaljumlah'))
                        ->where('tahun', $cariTahun)
                        ->first();

        $totaldayatam=DB::table('jumlahs')
                        ->sum('daya_tampung');
        $totalikut=DB::table('jumlahs')
                        ->sum('ikut_seleksi');
        $totallulus=DB::table('jumlahs')
                        ->sum('lulus_seleksi');
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $listtahun = Jumlah::whereBetween('tahun', [$date1,$date2])
        // $listtahun=DB::table('jumlahs')
                ->where('id_departemen', $id_departemen)
                    ->get();

         return view('jumlah/index2',compact('jumlahs', 'totaljumlah', 'listtahun', 'totaldayatam', 'totalikut', 'totallulus','dept'));

    }

    public function cari(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        
        $cari = $request->idDept;
             if($cari==10){
            $jumlahs = DB::table('jumlahs')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->get();

             $totaljumlah=DB::table('jumlahs')
                        ->select(DB::raw('(mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler) as totaljumlah'))
                        ->where('tahun', $cari)
                        ->first();

        $totaldayatam=DB::table('jumlahs')
                        ->sum('daya_tampung');
        $totalikut=DB::table('jumlahs')
                        ->sum('ikut_seleksi');
        $totallulus=DB::table('jumlahs')
                        ->sum('lulus_seleksi');

        }
        else{
             $jumlahs = DB::table('jumlahs')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $cari)
                        ->get();

             $totaljumlah=DB::table('jumlahs')
                        ->select(DB::raw('(mbt_reguler + mt_reguler + total_reguler + mbt_nonreguler + mt_nonreguler + total_nonreguler) as totaljumlah'))
                        ->where('tahun', $cari)
                        ->first();
        $totaldayatam=DB::table('jumlahs')
                        ->sum('daya_tampung');
        $totalikut=DB::table('jumlahs')
                        ->sum('ikut_seleksi');
        $totallulus=DB::table('jumlahs')
                        ->sum('lulus_seleksi');
        }
        
        
        $listdept=DB::table('departemen')
                    ->get();
        
        return view('jumlah/index2',compact('jumlahs','totaljumlah', 'listdept', 'totaldayatam', 'totalikut', 'totallulus','dept'));

    }



   public function jumlahDownload(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $jumlh = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $jumlahs = Jumlah::whereBetween('tahun', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun', 'desc')
                        ->get();
        // dd($date1);
        $pdf = PDF::loadView('jumlah.pdf', compact('jumlahs','jumlh'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();

        // return view('jumlah.pdf', compact('jumlahs'));
    }
    
    public function downloadjumlah(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
       $jumlahs = DB::table('jumlahs')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('jumlah.pdfm', compact('jumlahs'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}