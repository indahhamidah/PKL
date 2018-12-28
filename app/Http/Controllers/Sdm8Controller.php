<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm8;
use App\JabatanAkademik;
use App\Lampiransdm8;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class Sdm8Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $id_lampiran_sdm8 = $request->id_lampiran_sdm8;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        if(Auth::User()->id_departemen==10)
        {

            
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $sdm8s = Sdm8::whereBetween('tanggal_lahir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                         ->orderBy('tanggal_lahir', 'desc')
                         ->get();

            
            $ts = date("Y");
            $ts = (int) $ts;
            $ts1 = $ts-1;
            $ts2 = $ts-2;

            $totaldana=Sdm8::whereBetween('tanggal_lahir', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->sum('nidn_sdm8');
            $totaljudul=Sdm8::whereBetween('tanggal_lahir', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->count('gelar_sdm8');
            $lampiran_sdm8 = DB::table('lampiran_sdm8')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('lampiran_sdm8.*', 'departemen.*')
                              ->get();
  
        }
        else
        {
            $date1 = Carbon::now()->startOfYear()->subYear(100);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $sdm8s = Sdm8::whereBetween('tanggal_lahir', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('nidn_sdm8')
                            ->get(); 

                $totaldana=Sdm8::whereBetween('tanggal_lahir', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->sum('nidn_sdm8');
                $totaljudul=Sdm8::whereBetween('tanggal_lahir', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->count('gelar_sdm8');
            $lampiran_sdm8 = DB::table('lampiran_sdm8')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('lampiran_sdm8.*', 'departemen.*')
                              ->get();

            $ts = date("Y");
            $ts = (int) $ts;
            $ts1 = $ts-1;
            $ts2 = $ts-2;
            
        }
            $JabatanSdm8=JabatanAkademik::get();
            $listdept=DB::table('departemen')
                    ->get();
// dd($penelitians);
            return view('sdm8/index',compact('sdm8s','dept', 'listdept', 'totaldana', 'totaljudul', 'lampiran_sdm8', 'ts2', 'ts1', 'ts', 'JabatanSdm8'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        request()->validate([
            'gelar_sdm8' => 'required',
            'nama_dosen_sdm8'    => 'required',
            'tanggal_lahir' => 'required',
            'nidn_sdm8'      => 'required',
            'pendidikan_sdm8'       => 'required',
            'bidang_keahlian'       => 'required',
        ]);
        $id_departemen = $request->user()->id_departemen;
        $sdm8s = DB::table('data_dosen_tidak_tetap')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->where('gelar_sdm8', $request->gelar_sdm8)
                        ->where('nama_dosen_sdm8', $request->nama_dosen_sdm8)
                        ->where('bidang_keahlian', $request->bidang_keahlian)
                        ->first();

        if($sdm8s==null){
        $sdm8s=new Sdm8;
        $sdm8s->gelar_sdm8      = $request->gelar_sdm8;
        $sdm8s->nama_dosen_sdm8         = $request->nama_dosen_sdm8;
        $sdm8s->tanggal_lahir      = $request->tanggal_lahir;
        $sdm8s->nidn_sdm8           = $request->nidn_sdm8;
        $sdm8s->id_jabatan            = $request->id_jabatan;
        $sdm8s->pendidikan_sdm8            = $request->pendidikan_sdm8;
        $sdm8s->bidang_keahlian       = $request->bidang_keahlian;
        if(Auth::user()->id_departemen==10){
            $sdm8s->id_departemen         =$request->id_departemen;
        }
        else{
            $sdm8s->id_departemen         = $request->user()->id_departemen;
        }
              
        $sdm8s->save();
        return redirect()->route('Sdm_Departemen_8.index')
                         ->with('message2','Data berhasil ditambahkan');
                     }else{
                    return redirect()->route('Sdm_Departemen_8.index')
                         ->with('message','Data yang ditambahkan sudah ada');  
                     }
                            
    }

    public function edit($id_data_dosen_tidak_tetap)
    {
        // dd($member);
        return view('sdm8/index',compact('sdm8'));
    }
    
    public function update(Request $request, $member)
    {
        
        request()->validate([
           'gelar_sdm8'  => 'required',
            'nama_dosen_sdm8'    => 'required',
            'tanggal_lahir' => 'required',
            'nidn_sdm8'      => 'required',
            'pendidikan_sdm8'       => 'required',
            'bidang_keahlian'  => 'required',

            
        ]);
        $id_departemen = $request->user()->id_departemen;
            $sdm8s = DB::table('data_dosen_tidak_tetap')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->where('gelar_sdm8', $request->gelar_sdm8)
                        ->where('nama_dosen_sdm8', $request->nama_dosen_sdm8)
                        ->where('tanggal_lahir', $request->tanggal_lahir)
                        ->where('nidn_sdm8', $request->nidn_sdm8)
                        ->where('id_jabatan', $request->id_jabatan)
                        ->where('pendidikan_sdm8', $request->pendidikan_sdm8)
                        ->where('bidang_keahlian', $request->bidang_keahlian)
                        ->first();

        if($sdm8s==null){
        $sdm8s = Sdm8::find($member);
        $sdm8s->gelar_sdm8       = $request->gelar_sdm8;
        $sdm8s->nama_dosen_sdm8          = $request->nama_dosen_sdm8;
        $sdm8s->tanggal_lahir       = $request->tanggal_lahir;
        $sdm8s->nidn_sdm8            = $request->nidn_sdm8;
        $sdm8s->id_jabatan             = $request->id_jabatan;
        $sdm8s->pendidikan_sdm8             = $request->pendidikan_sdm8;
        $sdm8s->bidang_keahlian        = $request->bidang_keahlian;
        if(Auth::user()->id_departemen==10){
            $sdm8s->id_departemen         =$request->id_departemen;
        }
        else{
            $sdm8s->id_departemen         = $request->user()->id_departemen;
        }

        $sdm8s->save();
        return redirect()->route('Sdm_Departemen_8.index')
                         ->with('message2','Data berhasil diubah');
                     }else{
                    return redirect()->route('Sdm_Departemen_8.index')
                         ->with('message','Data yang diubah sudah ada. Silakan periksa kembali');  
                     }
                        
          }       
    
    public function destroy($id_data_dosen_tidak_tetap)
    {
        Sdm8::destroy($id_data_dosen_tidak_tetap);

        return redirect()->route('Sdm_Departemen_8.index')
                         ->with('message2','Data berhasil dihapus');
    }

    public function sdm8Import(Request $request){
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = [ 'tanggal_lahir' => $value->tanggal_lahir, 
                               'gelar_sdm8' => $value->gelar_sdm8, 
                               'nama_dosen_sdm8' => $value->nama_dosen_sdm8, 
                               'id_jabatan' => $value->id_jabatan,
                               'pendidikan_sdm8' => $value->pendidikan_sdm8, 
                               'bidang_keahlian' => $value->bidang_keahlian, 
                               'nidn_sdm8' => $value->nidn_sdm8, 
                               'id_departemen' => $request->user()->id_departemen];
                }
                if(!empty($arr)){
                    \DB::table('data_dosen_tidak_tetap')->insert($arr);
                   
                }
            }
        }
         // return redirect()->route('penelitian.index')->with('message2','Data berhasil diunggah');   
         return redirect()->back()
                          ->with('message2','Data berhasil diunggah'); 
    } 


    public function sdm8Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $pen = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $sdm8s = Sdm8::whereBetween('tanggal_lahir', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tanggal_lahir', 'decs')
                        ->get();
        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        $JabatanSdm8=JabatanAkademik::get();
        //TS-2
        $totaljudul1=Sdm8::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm8');
                        
        $totaljudul2=Sdm8::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm8');
        $totaljudul3=Sdm8::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm8');
        $totaljudul4=Sdm8::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm8');
        $totaljudul5=Sdm8::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm8');
        //TS-1
        $totaljudul6=Sdm8::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm8');
                        
        $totaljudul7=Sdm8::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm8');
        $totaljudul8=Sdm8::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm8');
        $totaljudul9=Sdm8::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm8');
        $totaljudul10=Sdm8::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm8');
        // TS
        $totaljudul11=Sdm8::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm8');
        $totaljudul12=Sdm8::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm8');
        $totaljudul13=Sdm8::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm8');
        $totaljudul14=Sdm8::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm8');
        $totaljudul15=Sdm8::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm8');

 
        $penData = "";
 
        if(count($sdm8s) >0 ){
            $penData .= '
           <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">Tabel 7.1</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">aData Penelitian Program Studi '.$pen[0]->nama_departemen.'</font></td>
           </tr>
           <tr>  
            <th></th>
            <th width="70px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >Sumber Pembiayaan</font></p></th>
            <th width="70px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >TS-2</font></p></th>
            <th width="70px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >TS-1</font></p></th>
            <th width="70px" style="border:1px solid #000;text-align: center; border-width: thin; background-color:#daeef3;"><p style="font-size:16px"><font face="Times New Rowman" >TS</font></p></th>
        </tr>
        <tr>
        <th></th>
            <th width="70px" style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:16px"><font face="Times New Rowman" >1</font></p></th>
            <th width="70px" style="border:1px solid #000;text-align: center; border-width: thin; "><p style="font-size:16px"><font face="Times New Rowman" >2</font></p></th>
            <th width="70px" style="border:1px solid #000;text-align: center; border-width: thin; "><p style="font-size:16px"><font face="Times New Rowman" >3</font></p></th>
            <th width="70px" style="border:1px solid #000;text-align: center; border-width: thin;"><p style="font-size:16px"><font face="Times New Rowman" >4</font></p></th>
        </tr>
        <tr>
        <th></th>
        <td width="70px" style="border:1px solid #000; border-width: thin;<p style="font-size:16px"><font face="Times New Rowman">Pembiayaan sendiri oleh peneliti</font></p></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul1.'</font></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul6.'</font></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul11.'</font></td>
        </tr>
        <tr>
        <th></th>
        <td width="70px" style="border:1px solid #000; border-width: thin;<p style="font-size:16px"><font face="Times New Rowman">PT yang bersangkutan</font></p></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul2.'</font></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul7.'</font></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul12.'</font></td>
        </tr>
        <tr>
        <th></th>
        <td width="70px" style="border:1px solid #000; border-width: thin;<p style="font-size:16px"><font face="Times New Rowman">Depdiknas</font></p></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul3.'</font></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul8.'</font></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul13.'</font></td>
        </tr>
        <tr>
        <th></th>
        <td width="70px" style="border:1px solid #000; border-width: thin;<p style="font-size:16px"><font face="Times New Rowman">Institusi dalam negeri di luar Depdiknas</font></p></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul4.'</font></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul9.'</font></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul15.'</font></td>
        </tr>
        <tr>
        <th></th>
        <td width="70px" style="border:1px solid #000; border-width: thin;<p style="font-size:16px"><font face="Times New Rowman">Institusi luar negeri</font></p></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul5.'</font></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul10.'</font></td>
        <td width="70px" style="border:1px solid #000;text-align: center; border-width: thin; style="font-size:16px"><font face="Times New Rowman">'.$totaljudul15.'</font></td>
        </tr>
        
                ';
            }
            $penData .='</table>';
        
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename= Data Penelitian '.$pen[0]->nama_departemen .'.xls');
        echo $penData;
    }
    public function excelsdm8(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen; 
        $penData = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
        $sdm8s = DB::table('data_dosen_tidak_tetap')
                ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('nidn_sdm8')
                ->get();
        $jabatansdm8=JabatanAkademik::get();
        $ts = date("Y");
        $ts = (int) $ts;
        $ts1 = $ts-1;
        $ts2 = $ts-2;

        $penData = "";
        if(count($sdm8s) >0 ){
            $penData .= '<table>
            <tr>
            <p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"><strong>Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:</strong></p>
           <tr>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Nama Dosen Tidak Tetap</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">NIDN**</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Tgl. Lahir</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Jabatan Akademik***</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Gelar Akademik</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Pendidikan S1, S2, S3, dan Asal PT*</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
            </tr>
            <tr>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(1)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(2)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(3)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(4)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(5)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(6)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(7)</th>
                </tr>';
                foreach ($sdm8s as $sdm8) {
                    $penData .= '
                    <tr>
            <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm8->nama_dosen_sdm8. '</td>
            <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm8->nidn_sdm8. '</td>
            <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm8->tanggal_lahir. '</td>
            <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm8->jabatan. '</td>
            <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm8->gelar_sdm8. '</td>
            <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm8->pendidikan_sdm8. '</td>
            <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm8->bidang_keahlian. '</td>
                    </tr>';
                }
        
            $penData .='</table>
            <table>
            <tr>
             <td colspan="7" style="border:1px solid white;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">* &nbsp;&nbsp;&nbsp;&nbsp;Lampirkan fotokopi ijazah.</td>
             </tr>
             <tr>
             <td colspan="7" style="border:1px solid white;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">** &nbsp;&nbsp;NIDN : Nomor Induk Dosen Nasional</td>
             </tr>
             <tr>
              <td colspan="7" style="border:1px solid white;text-align: left; text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.</td>
             </tr>
            </table>';
        }
        header('Content-Type: application/vnd.vnd.ms-excel');
        header('Content-Disposition: attachment; filename=Data Tabel 4.4.1.xls');
        echo $penData;
    }

            


    public function sdm8Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
                 $pene = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $date1 = Carbon::now()->startOfYear()->subYear(2);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $sdm8s = Sdm8::whereBetween('tanggal_lahir', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tanggal_lahir', 'desc')
                        ->get();

        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        $JabatanSdm8=JabatanAkademik::get();
        //TS-2
        $totaljudul1=Sdm8::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm8');
                        
        $totaljudul2=Sdm8::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm8');
        $totaljudul3=Sdm8::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm8');
        $totaljudul4=Sdm8::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm8');
        $totaljudul5=Sdm8::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm8');
        //TS-1
        $totaljudul6=Sdm8::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm8');
                        
        $totaljudul7=Sdm8::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm8');
        $totaljudul8=Sdm8::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm8');
        $totaljudul9=Sdm8::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm8');
        $totaljudul10=Sdm8::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm8');
        // TS
        $totaljudul11=Sdm8::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm8');
        $totaljudul12=Sdm8::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm8');
        $totaljudul13=Sdm8::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm8');
        $totaljudul14=Sdm8::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm8');
        $totaljudul15=Sdm8::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm8');
        
        $pdf = PDF::loadView('sdm8.pdfs', compact('sdm8s','pene', 'totaldana', 'JabatanSdm8', 'ts', 'ts1', 'ts2', 'totaljudul1', 'totaljudul2', 'totaljudul3', 'totaljudul4', 'totaljudul5', 'dateZ', 'dateY', 'dateX', 'totaljudul6', 'totaljudul7', 'totaljudul8', 'totaljudul9', 'totaljudul10', 'totaljudul11', 'totaljudul12', 'totaljudul13', 'totaljudul14', 'totaljudul15'));

        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function downloadsdm8(Request $request)
    {
       $id_departemen = $request->user()->id_departemen;
       $sdm8s   = DB::table('data_dosen_tidak_tetap')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('nidn_sdm8')
                        ->get();
        
        $date1 = Carbon::now()->startOfYear()->subYear(2);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $totjul=Sdm8::whereBetween('tanggal_lahir', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('gelar_sdm8');
        $ts = date("Y");
        $ts = (int) $ts;
        $ts1 = $ts-1;
        $ts2 = $ts-2;
        $jabatansdm8=JabatanAkademik::get();
        $pdf = PDF::loadView('sdm8.pdfm', compact('sdm8s', 'totjul', 'ts2', 'ts1', 'ts','jabatansdm8'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function lampiransdm8Upload(Request $request){

    
        $this->validate($request, [

        'lampiransdm8'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


      $lampiran_sdm8 = new Lampiransdm8;
      $lampiran_sdm8->lampiransdm8          = $request->lampiransdm8;
      if(Auth::user()->id_departemen==10){
        $lampiran_sdm8->id_departemen  = $request->id_departemen;
      }
      else{
        $lampiran_sdm8->id_departemen  = $request->user()->id_departemen;
      }
      $lampiran_sdm8->id_data_dosen_tidak_tetap  = $request->id_data_dosen_tidak_tetap;



        if ($request->hasFile('lampiransdm8')){
            $imageTempName   = $request->file('lampiransdm8')->getPathname();
            $imageName       = $request->file('lampiransdm8')->getClientOriginalName();
            $path            = base_path() . '/public/upload/lampiranSdm8/';
            $request       ->file('lampiransdm8')->move($path, $imageName);
            $lampiran_sdm8->lampiransdm8 = ''.$imageName;
            }
           
            $lampiran_sdm8 ->save();
            
            $sdm8s = Sdm8::where('id_data_dosen_tidak_tetap', $lampiran_sdm8->id_data_dosen_tidak_tetap)->first();
            $sdm8s ->id_lampiran_sdm8 = $lampiran_sdm8->id_lampiran_sdm8;
               
            $sdm8s->save();
             return redirect()->route('Sdm_Departemen_8.index')
                              ->with('message2','Data berhasil diunggah'); 
     }


    public function downloadLampiransdm8($id_lampiran_sdm8){
        $lampiran_sdm8 = Lampiransdm8::where('id_lampiran_sdm8', '=', $id_lampiran_sdm8)->select('lampiransdm8')->get();
        $filePath = public_path().'/upload/lampiranSdm8/'.$lampiran_sdm8[0]['lampiransdm8'];
        return response()->download($filePath);
    }
    
}


