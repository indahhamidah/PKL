<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm3;
use App\JabatanAkademik;
use App\Lampiransdm3;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input; 
use PDF;
use File; 

class Sdm3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $id_lampiran_sdm3 = $request->id_lampiran_sdm3;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        if(Auth::User()->id_departemen==10)
        {

            
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $sdm3s = Sdm3::whereBetween('tanggal_lahir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                         ->orderBy('tanggal_lahir', 'desc')
                         ->get();

            
            $ts = date("Y");
            $ts = (int) $ts;
            $ts1 = $ts-1;
            $ts2 = $ts-2;

            $totaldana=Sdm3::whereBetween('tanggal_lahir', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->sum('nidn_sdm3');
            $totaljudul=Sdm3::whereBetween('tanggal_lahir', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->count('gelar_sdm3');
            $lampiran_sdm3 = DB::table('lampiran_sdm3')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('lampiran_sdm3.*', 'departemen.*')
                              ->get();
  
        }
        else
        {
            $date1 = Carbon::now()->startOfYear()->subYear(100);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $sdm3s = Sdm3::whereBetween('tanggal_lahir', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('nidn_sdm3')
                            ->get(); 

                $totaldana=Sdm3::whereBetween('tanggal_lahir', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->sum('nidn_sdm3');
                $totaljudul=Sdm3::whereBetween('tanggal_lahir', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->count('gelar_sdm3');
            $lampiran_sdm3 = DB::table('lampiran_sdm3')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('lampiran_sdm3.*', 'departemen.*')
                              ->get();

            $ts = date("Y");
            $ts = (int) $ts;
            $ts1 = $ts-1;
            $ts2 = $ts-2;
            
        }
            $jabatanakademik=JabatanAkademik::get();
            $listdept=DB::table('departemen')
                    ->get();
// dd($penelitians);
            return view('sdm3/index',compact('sdm3s','dept', 'listdept', 'totaldana', 'totaljudul', 'lampiran_sdm3', 'ts2', 'ts1', 'ts', 'jabatanakademik'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        request()->validate([
            'gelar_sdm3' => 'required',
            'nama_dosen_sdm3'    => 'required',
            'tanggal_lahir' => 'required',
            'nidn_sdm3'      => 'required',
            'pendidikan_sdm3'       => 'required',
            'bidang_keahlian'       => 'required',
        ]);
        $id_departemen = $request->user()->id_departemen;
        $sdm3s = DB::table('data_dosen_yang_bidangnya_sesuai_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->where('gelar_sdm3', $request->gelar_sdm3)
                        ->where('nama_dosen_sdm3', $request->nama_dosen_sdm3)
                        ->where('bidang_keahlian', $request->bidang_keahlian)
                        ->first();

        if($sdm3s==null){
        $sdm3s=new Sdm3;
        $sdm3s->gelar_sdm3      = $request->gelar_sdm3;
        $sdm3s->nama_dosen_sdm3         = $request->nama_dosen_sdm3;
        $sdm3s->tanggal_lahir      = $request->tanggal_lahir;
        $sdm3s->nidn_sdm3           = $request->nidn_sdm3;
        $sdm3s->id_jabatan            = $request->id_jabatan;
        $sdm3s->pendidikan_sdm3            = $request->pendidikan_sdm3;
        $sdm3s->bidang_keahlian       = $request->bidang_keahlian;
        if(Auth::user()->id_departemen==10){
            $sdm3s->id_departemen         =$request->id_departemen;
        }
        else{
            $sdm3s->id_departemen         = $request->user()->id_departemen;
        }
              
        $sdm3s->save();
        return redirect()->route('Sdm_Departemen_3.index')
                         ->with('message2','Data berhasil ditambahkan');
                     }else{
                    return redirect()->route('Sdm_Departemen_3.index')
                         ->with('message','Data yang ditambahkan sudah ada');  
                     }
                            
    }

    public function edit($id_data_dosen_yang_bidangnya_sesuai_ps)
    {
        // dd($member);
        return view('sdm3/index',compact('sdm3'));
    }
    
    public function update(Request $request, $member)
    {
        
        request()->validate([
           'gelar_sdm3'  => 'required',
            'nama_dosen_sdm3'    => 'required',
            'tanggal_lahir' => 'required',
            'nidn_sdm3'      => 'required',
            'pendidikan_sdm3'       => 'required',
            'bidang_keahlian'  => 'required',

            
        ]);
        $id_departemen = $request->user()->id_departemen;
            $sdm3s = DB::table('data_dosen_yang_bidangnya_sesuai_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->where('gelar_sdm3', $request->gelar_sdm3)
                        ->where('nama_dosen_sdm3', $request->nama_dosen_sdm3)
                        ->where('tanggal_lahir', $request->tanggal_lahir)
                        ->where('nidn_sdm3', $request->nidn_sdm3)
                        ->where('id_jabatan', $request->id_jabatan)
                        ->where('pendidikan_sdm3', $request->pendidikan_sdm3)
                        ->where('bidang_keahlian', $request->bidang_keahlian)
                        ->first();

        if($sdm3s==null){
        $sdm3s = Sdm3::find($member);
        $sdm3s->gelar_sdm3       = $request->gelar_sdm3;
        $sdm3s->nama_dosen_sdm3          = $request->nama_dosen_sdm3;
        $sdm3s->tanggal_lahir       = $request->tanggal_lahir;
        $sdm3s->nidn_sdm3            = $request->nidn_sdm3;
        $sdm3s->id_jabatan             = $request->id_jabatan;
        $sdm3s->pendidikan_sdm3             = $request->pendidikan_sdm3;
        $sdm3s->bidang_keahlian        = $request->bidang_keahlian;
        if(Auth::user()->id_departemen==10){
            $sdm3s->id_departemen         =$request->id_departemen;
        }
        else{
            $sdm3s->id_departemen         = $request->user()->id_departemen;
        }

        $sdm3s->save();
        return redirect()->route('Sdm_Departemen_3.index')
                         ->with('message2','Data berhasil diubah');
                     }else{
                    return redirect()->route('Sdm_Departemen_3.index')
                         ->with('message','Data yang diubah sudah ada. Silakan periksa kembali');  
                     }
                        
          }       
    
    public function destroy($id_data_dosen_yang_bidangnya_sesuai_ps)
    {
        Sdm3::destroy($id_data_dosen_yang_bidangnya_sesuai_ps);

        return redirect()->route('Sdm_Departemen_3.index')
                         ->with('message2','Data berhasil dihapus');
                         
    }

    public function sdm3Import(Request $request){
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = [ 'tanggal_lahir' => $value->tanggal_lahir, 
                               'gelar_sdm3' => $value->gelar_sdm3, 
                               'nama_dosen_sdm3' => $value->nama_dosen_sdm3, 
                               'id_jabatan' => $value->id_jabatan,
                               'pendidikan_sdm3' => $value->pendidikan_sdm3, 
                               'bidang_keahlian' => $value->bidang_keahlian, 
                               'nidn_sdm3' => $value->nidn_sdm3, 
                               'id_departemen' => $request->user()->id_departemen];
                }
                if(!empty($arr)){
                    \DB::table('data_dosen_yang_bidangnya_sesuai_ps')->insert($arr);
                   
                }
            }
        }
         // return redirect()->route('penelitian.index')->with('message2','Data berhasil diunggah');   
         return redirect()->back()
                          ->with('message2','Data berhasil diunggah'); 
    } 


    public function sdm3Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $pen = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $sdm3s = Sdm3::whereBetween('tanggal_lahir', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('nidn_sdm3')
                        ->get();
        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        $jabatanakademik=JabatanAkademik::get();
        //TS-2
        $totaljudul1=Sdm3::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm3');
                        
        $totaljudul2=Sdm3::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm3');
        $totaljudul3=Sdm3::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm3');
        $totaljudul4=Sdm3::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm3');
        $totaljudul5=Sdm3::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm3');
        //TS-1
        $totaljudul6=Sdm3::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm3');
                        
        $totaljudul7=Sdm3::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm3');
        $totaljudul8=Sdm3::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm3');
        $totaljudul9=Sdm3::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm3');
        $totaljudul10=Sdm3::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm3');
        // TS
        $totaljudul11=Sdm3::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm3');
        $totaljudul12=Sdm3::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm3');
        $totaljudul13=Sdm3::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm3');
        $totaljudul14=Sdm3::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm3');
        $totaljudul15=Sdm3::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm3');

 
        $penData = "";
 
        if(count($sdm3s) >0 ){
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
    public function excelsdm3(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $penData = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
        $sdm3s = DB::table('data_dosen_yang_bidangnya_sesuai_ps')
                ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->orderBy('nidn_sdm3')
                ->get();
        $jabatanakademik=JabatanAkademik::get();
        $ts = date("Y");
        $ts = (int) $ts;
        $ts1 = $ts-1;
        $ts2 = $ts-2;

        $penData = "";
        if(count($sdm3s) >0 ){
            $penData .= '<table>
            <tr>
            <p style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 11 px;"><strong>Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:</strong></p>
           <tr>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Nama Dosen Tetap</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">NIDN**</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Tgl. Lahir</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Jabatan Akademik***</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Gelar Akademik</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Pendidikan S1, S2, S3, dan Asal PT*</th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
            </tr>
            <tr>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(&nbsp;1&nbsp;)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(&nbsp;2&nbsp;)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(&nbsp;3&nbsp;)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(&nbsp;4&nbsp;)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(&nbsp;5&nbsp;)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(&nbsp;6&nbsp;)</th>
            <th style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">(&nbsp;7&nbsp;)</th>
                </tr>';
                foreach ($sdm3s as $sdm3) {
                    $penData .= '
                    <tr>
            <td style="border:1px solid #000;text-align: left; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm3->nama_dosen_sdm3. '</td>
            <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm3->nidn_sdm3. '</td>
            <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm3->tanggal_lahir. '</td>
            <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm3->jabatan. '</td>
            <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm3->gelar_sdm3. '</td>
            <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm3->pendidikan_sdm3. '</td>
            <td style="border:1px solid #000;text-align: center; font-family : arial, helvetica, sans-serif; font-size: 10;">' .$sdm3->bidang_keahlian. '</td>
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
        header('Content-Disposition: attachment; filename=Data Tabel 4.3.1.xls');
        echo $penData;
    }

            


    public function sdm3Download(Request $request){
        $id_departemen = Auth::user()->id_departemen;
                 $pene = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $date1 = Carbon::now()->startOfYear()->subYear(2);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $sdm3s = Sdm3::whereBetween('tanggal_lahir', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tanggal_lahir', 'desc')
                        ->get();

        $dateZ = Carbon::now()->startOfYear()->subYear(2);
        $dateY = Carbon::now()->startOfYear()->subYear(1);
        $dateX = Carbon::now()->startOfYear();
        $dateW = Carbon::now()->startOfYear()->addYear(1);
        
        $jabatanakademik=JabatanAkademik::get();
        //TS-2
        $totaljudul1=Sdm3::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm3');
                        
        $totaljudul2=Sdm3::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm3');
        $totaljudul3=Sdm3::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm3');
        $totaljudul4=Sdm3::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm3');
        $totaljudul5=Sdm3::whereBetween('tanggal_lahir', [$dateZ,$dateY])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm3');
        //TS-1
        $totaljudul6=Sdm3::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm3');
                        
        $totaljudul7=Sdm3::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm3');
        $totaljudul8=Sdm3::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm3');
        $totaljudul9=Sdm3::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm3');
        $totaljudul10=Sdm3::whereBetween('tanggal_lahir', [$dateY,$dateX])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm3');
        // TS
        $totaljudul11=Sdm3::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 1)
                            ->count('gelar_sdm3');
        $totaljudul12=Sdm3::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 2)
                            ->count('gelar_sdm3');
        $totaljudul13=Sdm3::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 3)
                            ->count('gelar_sdm3');
        $totaljudul14=Sdm3::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 4)
                            ->count('gelar_sdm3');
        $totaljudul15=Sdm3::whereBetween('tanggal_lahir', [$dateX, $dateW])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                            ->where('id_departemen', $id_departemen)
                            ->where('id_jabatan', 5)
                            ->count('gelar_sdm3');
        
        $pdf = PDF::loadView('sdm3.pdfs', compact('sdm3s','pene', 'totaldana', 'jabatanakademik', 'ts', 'ts1', 'ts2', 'totaljudul1', 'totaljudul2', 'totaljudul3', 'totaljudul4', 'totaljudul5', 'dateZ', 'dateY', 'dateX', 'totaljudul6', 'totaljudul7', 'totaljudul8', 'totaljudul9', 'totaljudul10', 'totaljudul11', 'totaljudul12', 'totaljudul13', 'totaljudul14', 'totaljudul15'));

        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function downloadsdm3(Request $request)
    {
       $id_departemen = $request->user()->id_departemen;
       $sdm3s   = DB::table('data_dosen_yang_bidangnya_sesuai_ps')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->join('jabatan_akademik', 'id_jabatan_akademik', '=', 'id_jabatan')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('nidn_sdm3')
                        ->get();
        
        $date1 = Carbon::now()->startOfYear()->subYear(2);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
        $totjul=Sdm3::whereBetween('tanggal_lahir', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->count('gelar_sdm3');
        $ts = date("Y");
        $ts = (int) $ts;
        $ts1 = $ts-1;
        $ts2 = $ts-2;
        $jabatanakademik=JabatanAkademik::get();
        $pdf = PDF::loadView('sdm3.pdfm', compact('sdm3s', 'totjul', 'ts2', 'ts1', 'ts', 'jabatanakademik'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function lampiransdm3Upload(Request $request){

    
        $this->validate($request, [

        'lampiransdm3'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


      $lampiran_sdm3 = new Lampiransdm3;
      $lampiran_sdm3->lampiransdm3          = $request->lampiransdm3;
      if(Auth::user()->id_departemen==10){
        $lampiran_sdm3->id_departemen  = $request->id_departemen;
      }
      else{
        $lampiran_sdm3->id_departemen  = $request->user()->id_departemen;
      }
      $lampiran_sdm3->id_data_dosen_yang_bidangnya_sesuai_ps  = $request->id_data_dosen_yang_bidangnya_sesuai_ps;



        if ($request->hasFile('lampiransdm3')){
            $imageTempName   = $request->file('lampiransdm3')->getPathname();
            $imageName       = $request->file('lampiransdm3')->getClientOriginalName();
            $path            = base_path() . '/public/upload/lampiranSdm3/';
            $request       ->file('lampiransdm3')->move($path, $imageName);
            $lampiran_sdm3->lampiransdm3 = ''.$imageName;
            }
           
            $lampiran_sdm3 ->save();
            
            $sdm3s = Sdm3::where('id_data_dosen_yang_bidangnya_sesuai_ps', $lampiran_sdm3->id_data_dosen_yang_bidangnya_sesuai_ps)->first();
            $sdm3s ->id_lampiran_sdm3 = $lampiran_sdm3->id_lampiran_sdm3;
               
            $sdm3s->save();
             return redirect()->route('Sdm_Departemen_3.index')
                              ->with('message2','Data berhasil diunggah'); 
     }


    public function downloadLampiransdm3($id_lampiran_sdm3){
        $lampiran_sdm3 = Lampiransdm3::where('id_lampiran_sdm3', '=', $id_lampiran_sdm3)->select('lampiransdm3')->get();
        $filePath = public_path().'/upload/lampiranSdm3/'.$lampiran_sdm3[0]['lampiransdm3'];
        return response()->download($filePath);
    }
    
}


