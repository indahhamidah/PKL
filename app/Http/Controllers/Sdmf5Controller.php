<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdmf5;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdmf5Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdmf5 = Sdmf5::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdmf5 = Sdmf5::whereBetween('tahun_sdmf5', [$date1,$date2])
                    ->orderBy('tahun_sdmf5','desc')
                    ->get();
        }
        else
        {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdmf5 = Sdmf5::whereBetween('tahun_sdmf5', [$date1,$date2])
              ->where('id_departemen', $id_departemen)
              ->orderBy('tahun_sdmf5','desc')
              ->get();
        }
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdmf5/index',compact('sdmf5','dept'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'pustakawan_s3_sdmf5' => 'required',
            'pustakawan_s2_sdmf5' => 'required',
            'pustakawan_s1_sdmf5' => 'required',
            'pustakawan_d4_sdmf5' => 'required',
            'pustakawan_d3_sdmf5' => 'required',
            'tahun_sdmf5' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdmf5 = DB::table('sdmf5')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('pustakawan_s2_sdmf5', $request->pustakawan_s2_sdmf5)
                        ->where('tahun_sdmf5', $request->tahun_sdmf5)
                        ->first();

        if($sdmf5==null){  
        $sdmf5=new Sdmf5;
        $sdmf5->pustakawan_s3_sdmf5 = $request->pustakawan_s3_sdmf5;
        $sdmf5->pustakawan_s2_sdmf5 = $request->pustakawan_s2_sdmf5;
        $sdmf5->pustakawan_s1_sdmf5 = $request->pustakawan_s1_sdmf5;
        $sdmf5->pustakawan_d4_sdmf5 = $request->pustakawan_d4_sdmf5;
        $sdmf5->pustakawan_d3_sdmf5 = $request->pustakawan_d3_sdmf5;
        $sdmf5->tahun_sdmf5 = $request->tahun_sdmf5;
        $sdmf5->id_departemen= $request->user()->id_departemen;

        $sdmf5->save();
        return redirect()->route('sdmf5.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdmf5.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_sdmf5)
    {
        // dd($member);
        return view('sdmf5/index',compact('sdmf5'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'pustakawan_s3_sdmf5' => 'required',
            'pustakawan_s2_sdmf5' => 'required',
            'pustakawan_s1_sdmf5' => 'required',
            'pustakawan_d4_sdmf5' => 'required',
            'pustakawan_d3_sdmf5' => 'required',
            'pustakawan_d2_sdmf5' => 'required',
            'pustakawan_d1_sdmf5' => 'required',
            'pustakawan_sma_sdmf5' => 'required',
            'pustakawan_unit_sdmf5' => 'required',
            'lab_s3_sdmf5' => 'required',
            'lab_s2_sdmf5' => 'required',
            'lab_s1_sdmf5' => 'required',
            'lab_d4_sdmf5' => 'required',
            'lab_d3_sdmf5' => 'required',
            'lab_d2_sdmf5' => 'required',
            'lab_d1_sdmf5' => 'required',
            'lab_sma_sdmf5' => 'required',
            'lab_unit_sdmf5' => 'required',
            'admin_s3_sdmf5' => 'required',
            'admin_s2_sdmf5' => 'required',
            'admin_s1_sdmf5' => 'required',
            'admin_d4_sdmf5' => 'required',
            'admin_d3_sdmf5' => 'required',
            'admin_d2_sdmf5' => 'required',
            'admin_d1_sdmf5' => 'required',
            'admin_sma_sdmf5' => 'required',
            'admin_unit_sdmf5' => 'required',
            'ktu_s3_sdmf5' => 'required',
            'ktu_s2_sdmf5' => 'required',
            'ktu_s1_sdmf5' => 'required',
            'ktu_d4_sdmf5' => 'required',
            'ktu_d3_sdmf5' => 'required',
            'ktu_d2_sdmf5' => 'required',
            'ktu_d1_sdmf5' => 'required',
            'ktu_sma_sdmf5' => 'required',
            'ktu_unit_sdmf5' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdmf5 = DB::table('sdmf5')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('pustakawan_s3_sdmf5', $request->pustakawan_s3_sdmf5)
                        ->where('pustakawan_s2_sdmf5', $request->pustakawan_s2_sdmf5)
                        ->where('pustakawan_s1_sdmf5', $request->pustakawan_s1_sdmf5)
                        ->where('pustakawan_d4_sdmf5', $request->pustakawan_d4_sdmf5)
                        ->where('pustakawan_d3_sdmf5', $request->pustakawan_d3_sdmf5)
                        ->where('pustakawan_d2_sdmf5', $request->pustakawan_d2_sdmf5)
                        ->where('pustakawan_d1_sdmf5', $request->pustakawan_d1_sdmf5)
                        ->where('pustakawan_sma_sdmf5', $request->pustakawan_sma_sdmf5)
                        ->where('pustakawan_unit_sdmf5', $request->pustakawan_unit_sdmf5)
                        ->where('lab_s3_sdmf5', $request->lab_s3_sdmf5)
                        ->where('lab_s2_sdmf5', $request->lab_s2_sdmf5)
                        ->where('lab_s1_sdmf5', $request->lab_s1_sdmf5)
                        ->where('lab_d4_sdmf5', $request->lab_d4_sdmf5)
                        ->where('lab_d3_sdmf5', $request->lab_d3_sdmf5)
                        ->where('lab_d2_sdmf5', $request->lab_d2_sdmf5)
                        ->where('lab_d1_sdmf5', $request->lab_d1_sdmf5)
                        ->where('lab_sma_sdmf5', $request->lab_sma_sdmf5)
                        ->where('lab_unit_sdmf5', $request->lab_unit_sdmf5)
                        ->where('admin_s3_sdmf5', $request->admin_s3_sdmf5)
                        ->where('admin_s2_sdmf5', $request->admin_s2_sdmf5)
                        ->where('admin_s1_sdmf5', $request->admin_s1_sdmf5)
                        ->where('admin_d4_sdmf5', $request->admin_d4_sdmf5)
                        ->where('admin_d3_sdmf5', $request->admin_d3_sdmf5)
                        ->where('admin_d2_sdmf5', $request->admin_d2_sdmf5)
                        ->where('admin_d1_sdmf5', $request->admin_d1_sdmf5)
                        ->where('admin_sma_sdmf5', $request->admin_sma_sdmf5)
                        ->where('admin_unit_sdmf5', $request->admin_unit_sdmf5)
                        ->where('ktu_s3_sdmf5', $request->ktu_s3_sdmf5)
                        ->where('ktu_s2_sdmf5', $request->ktu_s2_sdmf5)
                        ->where('ktu_s1_sdmf5', $request->ktu_s1_sdmf5)
                        ->where('ktu_d4_sdmf5', $request->ktu_d4_sdmf5)
                        ->where('ktu_d3_sdmf5', $request->ktu_d3_sdmf5)
                        ->where('ktu_d2_sdmf5', $request->ktu_d2_sdmf5)
                        ->where('ktu_d1_sdmf5', $request->ktu_d1_sdmf5)
                        ->where('ktu_sma_sdmf5', $request->ktu_sma_sdmf5)
                        ->where('ktu_unit_sdmf5', $request->ktu_unit_sdmf5)
                        ->first();

        // $sdmf5->update($request->all());
        if($sdmf5==null){ 
        $sdmf5 = Sdmf5::find($member);
        $sdmf5->pustakawan_s3_sdmf5 = $request->pustakawan_s3_sdmf5;
        $sdmf5->pustakawan_s2_sdmf5 = $request->pustakawan_s2_sdmf5;
        $sdmf5->pustakawan_s1_sdmf5 = $request->pustakawan_s1_sdmf5;
        $sdmf5->pustakawan_d4_sdmf5 = $request->pustakawan_d4_sdmf5;
        $sdmf5->pustakawan_d3_sdmf5 = $request->pustakawan_d3_sdmf5;
        $sdmf5->pustakawan_d2_sdmf5 = $request->pustakawan_d2_sdmf5;
        $sdmf5->pustakawan_d1_sdmf5 = $request->pustakawan_d1_sdmf5;
        $sdmf5->pustakawan_sma_sdmf5 = $request->pustakawan_sma_sdmf5;
        $sdmf5->pustakawan_unit_sdmf5 = $request->pustakawan_unit_sdmf5;
        $sdmf5->lab_s3_sdmf5 = $request->lab_s3_sdmf5;
        $sdmf5->lab_s2_sdmf5 = $request->lab_s2_sdmf5;
        $sdmf5->lab_s1_sdmf5 = $request->lab_s1_sdmf5;
        $sdmf5->lab_d4_sdmf5 = $request->lab_d4_sdmf5;
        $sdmf5->lab_d3_sdmf5 = $request->lab_d3_sdmf5;
        $sdmf5->lab_d2_sdmf5 = $request->lab_d2_sdmf5;
        $sdmf5->lab_d1_sdmf5 = $request->lab_d1_sdmf5;
        $sdmf5->lab_sma_sdmf5 = $request->lab_sma_sdmf5;
        $sdmf5->lab_unit_sdmf5 = $request->lab_unit_sdmf5;
        $sdmf5->admin_s3_sdmf5 = $request->admin_s3_sdmf5;
        $sdmf5->admin_s2_sdmf5 = $request->admin_s2_sdmf5;
        $sdmf5->admin_s1_sdmf5 = $request->admin_s1_sdmf5;
        $sdmf5->admin_d4_sdmf5 = $request->admin_d4_sdmf5;
        $sdmf5->admin_d3_sdmf5 = $request->admin_d3_sdmf5;
        $sdmf5->admin_d2_sdmf5 = $request->admin_d2_sdmf5;
        $sdmf5->admin_d1_sdmf5 = $request->admin_d1_sdmf5;
        $sdmf5->admin_sma_sdmf5 = $request->admin_sma_sdmf5;
        $sdmf5->admin_unit_sdmf5 = $request->admin_unit_sdmf5;
        $sdmf5->ktu_s3_sdmf5 = $request->ktu_s3_sdmf5;
        $sdmf5->ktu_s2_sdmf5 = $request->ktu_s2_sdmf5;
        $sdmf5->ktu_s1_sdmf5 = $request->ktu_s1_sdmf5;
        $sdmf5->ktu_d4_sdmf5 = $request->ktu_d4_sdmf5;
        $sdmf5->ktu_d3_sdmf5 = $request->ktu_d3_sdmf5;
        $sdmf5->ktu_d2_sdmf5 = $request->ktu_d2_sdmf5;
        $sdmf5->ktu_d1_sdmf5 = $request->ktu_d1_sdmf5;
        $sdmf5->ktu_sma_sdmf5 = $request->ktu_sma_sdmf5;
        $sdmf5->ktu_unit_sdmf5 = $request->ktu_unit_sdmf5;
        $sdmf5->id_departemen= $request->user()->id_departemen;

        $sdmf5->save();
        return redirect()->route('sdmf5.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdmf5.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    
    public function destroy($id_sdmf5)
    {
        Sdmf5::destroy($id_sdmf5);
        return redirect()->route('sdmf5.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdmf5Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdmf5' => $value->tahun_sdmf5, 'pustakawan_s3_sdmf5' => $value->pustakawan_s3_sdmf5, 'pustakawan_s2_sdmf5' => $value->pustakawan_s2_sdmf5, 'pustakawan_s1_sdmf5' => $value->pustakawan_s1_sdmf5, 'pustakawan_d4_sdmf5' => $value->pustakawan_d4_sdmf5, 'pustakawan_d3_sdmf5' => $value->pustakawan_d3_sdmf5, 'pustakawan_d2_sdmf5' => $value->pustakawan_d2_sdmf5, 'pustakawan_d1_sdmf5' => $value->pustakawan_d1_sdmf5, 'pustakawan_unit_sdmf5' => $value->pustakawan_unit_sdmf5, 'lab_s3_sdmf5' => $value->lab_s3_sdmf5, 'lab_s2_sdmf5' => $value->lab_s2_sdmf5, 'lab_s1_sdmf5' => $value->lab_s1_sdmf5, 'lab_d4_sdmf5' => $value->lab_d4_sdmf5, 'lab_d3_sdmf5' => $value->lab_d3_sdmf5, 'lab_d2_sdmf5' => $value->lab_d2_sdmf5, 'lab_d1_sdmf5' => $value->lab_d1_sdmf5, 'lab_sma_sdmf5' => $value->lab_sma_sdmf5, 'lab_unit_sdmf5' => $value->lab_unit_sdmf5, 'admin_s3_sdmf5' => $value->admin_s3_sdmf5, 'admin_s2_sdmf5' => $value->admin_s2_sdmf5, 'admin_s1_sdmf5' => $value->admin_s1_sdmf5, 'admin_d4_sdmf5' => $value->admin_d4_sdmf5, 'admin_d3_sdmf5' => $value->admin_d3_sdmf5, 'admin_d2_sdmf5' => $value->admin_d2_sdmf5, 'admin_d1_sdmf5' => $value->admin_d1_sdmf5, 'admin_sma_sdmf5' => $value->admin_sma_sdmf5, 'admin_unit_sdmf5' => $value->admin_unit_sdmf5, 'ktu_s3_sdmf5' => $value->ktu_s3_sdmf5, 'ktu_s2_sdmf5' => $value->ktu_s2_sdmf5, 'ktu_s1_sdmf5' => $value->ktu_s1_sdmf5, 'ktu_d4_sdmf5' => $value->ktu_d4_sdmf5, 'ktu_d3_sdmf5' => $value->ktu_d3_sdmf5, 'ktu_d2_sdmf5' => $value->ktu_d2_sdmf5, 'ktu_d1_sdmf5' => $value->ktu_d1_sdmf5, 'ktu_sma_sdmf5' => $value->ktu_sma_sdmf5, 'ktu_unit_sdmf5' => $value->ktu_unit_sdmf5, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('sdmf5')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdmf5.index');
    }

public function sdmf5Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmkf5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $sdmf5 = DB::table('sdmf5')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf5', 'desc')
                        ->get();
 
        $sdmkf5Data = "";
 
        if(count($sdmf5) >0 ){
            $sdmkf5Data .= '
           <table>
            <tr>
             <th colspan="13" style="text-align: left"><font face="Arial" size="2.5">
                Jenis Tenaga Kependidikan menurut pendidikan terakhir </th>
           </tr>
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;">No.</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;">Jenis Tenaga Kependidikan</th>
                     <th colspan="8" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;" >Jumlah Tendik dengan Pendidikan Terakhir</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3;" >Unit Kerja</th>
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;" >S3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;" >S2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;" >S1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;" >D4</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;" >D3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;" >D2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;" >D1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3;" >SMA/SMK</th>
                     </tr>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;1&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;2&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;3&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;4&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;5&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;6&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;7&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;8&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;9&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;10&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;11&nbsp;)</th>
                   </tr>';
                   foreach ($sdmf5 as $sdmf5) {
                    $sdmkf5Data .= '
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Pustakawan*</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->pustakawan_s3_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->pustakawan_s2_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->pustakawan_s1_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->pustakawan_d4_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->pustakawan_d3_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->pustakawan_d2_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->pustakawan_d1_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->pustakawan_sma_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->pustakawan_unit_sdmf5 . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Laboran/ Teknisi/ Analis/ Operator/ Programer</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->lab_s3_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->lab_s2_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->lab_s1_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->lab_d4_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->lab_d3_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->lab_d2_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->lab_d1_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->lab_sma_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->lab_unit_sdmf5 . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Administrasi</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->admin_s3_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->admin_s2_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->admin_s1_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->admin_d4_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->admin_d3_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->admin_d2_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->admin_d1_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->admin_sma_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->admin_unit_sdmf5 . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">4</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">KTU</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->ktu_s3_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->ktu_s2_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->ktu_s1_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->ktu_d4_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->ktu_d3_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->ktu_d2_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->ktu_d1_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->ktu_sma_sdmf5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf5->ktu_unit_sdmf5 . '</td>
                   </tr>
                   <tr>
                     <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;"><strong>Total</strong></td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf5->pustakawan_s3_sdmf5+$sdmf5->lab_s3_sdmf5+$sdmf5->admin_s3_sdmf5+$sdmf5->ktu_s3_sdmf5) . '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf5->pustakawan_s2_sdmf5+$sdmf5->lab_s2_sdmf5+$sdmf5->admin_s2_sdmf5+$sdmf5->ktu_s2_sdmf5) . '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf5->pustakawan_s1_sdmf5+$sdmf5->lab_s1_sdmf5+$sdmf5->admin_s1_sdmf5+$sdmf5->ktu_s1_sdmf5) . '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf5->pustakawan_d4_sdmf5+$sdmf5->lab_d4_sdmf5+$sdmf5->admin_d4_sdmf5+$sdmf5->ktu_d4_sdmf5) . '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf5->pustakawan_d3_sdmf5+$sdmf5->lab_d3_sdmf5+$sdmf5->admin_d3_sdmf5+$sdmf5->ktu_d3_sdmf5) . '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf5->pustakawan_d2_sdmf5+$sdmf5->lab_d2_sdmf5+$sdmf5->admin_d2_sdmf5+$sdmf5->ktu_d2_sdmf5) . '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf5->pustakawan_d1_sdmf5+$sdmf5->lab_d1_sdmf5+$sdmf5->admin_d1_sdmf5+$sdmf5->ktu_d1_sdmf5) . '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf5->pustakawan_sma_sdmf5+$sdmf5->lab_sma_sdmf5+$sdmf5->admin_sma_sdmf5+$sdmf5->ktu_sma_sdmf5) . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tr>';
            }
            $sdmkf5Data .='</table>
             <td style="text-align: left; font-size: 16px">* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan</td>';

        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=SDM 4.2.1.xls');
        echo $sdmkf5Data;
    }
    public function excelSdmf5()
    {
        $sdmf5s = DB::table('sdmf5')->get();

        $sdmkf5Data = "";

        if(count($sdmf5s) >0 ){
            $sdmkf5Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdmf5s as $sdmf5) {
                $sdmkf5Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdmf5->pustakawan_s1_sdmf5.'</td>
                <td style= "border: 1px solid black">'.$sdmf5->tahun_sdmf5.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmkf5Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmkf5Data;
    }

    
     public function sdmf5Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmkf5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $sdmf5s = Sdmf5::whereBetween('tahun_sdmf5', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf5', 'desc')
                        ->get();
        $pdf = PDF::loadView('sdmf5.pdf', compact('sdmf5s','sdmkf5'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdmf5(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmkf5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $sdmf5s = Sdmf5::whereBetween('tahun_sdmf5', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf5', 'desc')
                        ->get();
        $pdf = PDF::loadView('sdmf5.pdfm', compact('sdmf5s','sdmkf5'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
