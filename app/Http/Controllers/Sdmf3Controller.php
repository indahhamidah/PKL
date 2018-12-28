<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdmf3;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdmf3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdmf3 = Sdmf3::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdmf3 = Sdmf3::whereBetween('tahun_sdmf3', [$date1,$date2])
                    ->orderBy('tahun_sdmf3','desc')
                    ->get();
        }
        else
        {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdmf3 = Sdmf3::whereBetween('tahun_sdmf3', [$date1,$date2])
              ->where('id_departemen', $id_departemen)
              ->orderBy('tahun_sdmf3','desc')
              ->get();
        }
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdmf3/index',compact('sdmf3','dept'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'pustakawan_s3_sdmf3' => 'required',
            'pustakawan_s2_sdmf3' => 'required',
            'pustakawan_s1_sdmf3' => 'required',
            'pustakawan_d4_sdmf3' => 'required',
            'pustakawan_d3_sdmf3' => 'required',
            'tahun_sdmf3' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdmf3 = DB::table('sdmf3')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('pustakawan_s2_sdmf3', $request->pustakawan_s2_sdmf3)
                        ->where('tahun_sdmf3', $request->tahun_sdmf3)
                        ->first();

        if($sdmf3==null){  
        $sdmf3=new Sdmf3;
        $sdmf3->pustakawan_s3_sdmf3 = $request->pustakawan_s3_sdmf3;
        $sdmf3->pustakawan_s2_sdmf3 = $request->pustakawan_s2_sdmf3;
        $sdmf3->pustakawan_s1_sdmf3 = $request->pustakawan_s1_sdmf3;
        $sdmf3->pustakawan_d4_sdmf3 = $request->pustakawan_d4_sdmf3;
        $sdmf3->pustakawan_d3_sdmf3 = $request->pustakawan_d3_sdmf3;
        $sdmf3->tahun_sdmf3 = $request->tahun_sdmf3;
        $sdmf3->id_departemen= $request->user()->id_departemen;

        $sdmf3->save();
        return redirect()->route('sdmf3.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdmf3.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_sdmf3)
    {
        // dd($member);
        return view('sdmf3/index',compact('sdmf3'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'pustakawan_s3_sdmf3' => 'required',
            'pustakawan_s2_sdmf3' => 'required',
            'pustakawan_s1_sdmf3' => 'required',
            'pustakawan_d4_sdmf3' => 'required',
            'pustakawan_d3_sdmf3' => 'required',
            'pustakawan_d2_sdmf3' => 'required',
            'pustakawan_d1_sdmf3' => 'required',
            'pustakawan_sma_sdmf3' => 'required',
            'pustakawan_unit_sdmf3' => 'required',
            'lab_s3_sdmf3' => 'required',
            'lab_s2_sdmf3' => 'required',
            'lab_s1_sdmf3' => 'required',
            'lab_d4_sdmf3' => 'required',
            'lab_d3_sdmf3' => 'required',
            'lab_d2_sdmf3' => 'required',
            'lab_d1_sdmf3' => 'required',
            'lab_sma_sdmf3' => 'required',
            'lab_unit_sdmf3' => 'required',
            'admin_s3_sdmf3' => 'required',
            'admin_s2_sdmf3' => 'required',
            'admin_s1_sdmf3' => 'required',
            'admin_d4_sdmf3' => 'required',
            'admin_d3_sdmf3' => 'required',
            'admin_d2_sdmf3' => 'required',
            'admin_d1_sdmf3' => 'required',
            'admin_sma_sdmf3' => 'required',
            'admin_unit_sdmf3' => 'required',
            'ktu_s3_sdmf3' => 'required',
            'ktu_s2_sdmf3' => 'required',
            'ktu_s1_sdmf3' => 'required',
            'ktu_d4_sdmf3' => 'required',
            'ktu_d3_sdmf3' => 'required',
            'ktu_d2_sdmf3' => 'required',
            'ktu_d1_sdmf3' => 'required',
            'ktu_sma_sdmf3' => 'required',
            'ktu_unit_sdmf3' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdmf3 = DB::table('sdmf3')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('pustakawan_s3_sdmf3', $request->pustakawan_s3_sdmf3)
                        ->where('pustakawan_s2_sdmf3', $request->pustakawan_s2_sdmf3)
                        ->where('pustakawan_s1_sdmf3', $request->pustakawan_s1_sdmf3)
                        ->where('pustakawan_d4_sdmf3', $request->pustakawan_d4_sdmf3)
                        ->where('pustakawan_d3_sdmf3', $request->pustakawan_d3_sdmf3)
                        ->where('pustakawan_d2_sdmf3', $request->pustakawan_d2_sdmf3)
                        ->where('pustakawan_d1_sdmf3', $request->pustakawan_d1_sdmf3)
                        ->where('pustakawan_sma_sdmf3', $request->pustakawan_sma_sdmf3)
                        ->where('pustakawan_unit_sdmf3', $request->pustakawan_unit_sdmf3)
                        ->where('lab_s3_sdmf3', $request->lab_s3_sdmf3)
                        ->where('lab_s2_sdmf3', $request->lab_s2_sdmf3)
                        ->where('lab_s1_sdmf3', $request->lab_s1_sdmf3)
                        ->where('lab_d4_sdmf3', $request->lab_d4_sdmf3)
                        ->where('lab_d3_sdmf3', $request->lab_d3_sdmf3)
                        ->where('lab_d2_sdmf3', $request->lab_d2_sdmf3)
                        ->where('lab_d1_sdmf3', $request->lab_d1_sdmf3)
                        ->where('lab_sma_sdmf3', $request->lab_sma_sdmf3)
                        ->where('lab_unit_sdmf3', $request->lab_unit_sdmf3)
                        ->where('admin_s3_sdmf3', $request->admin_s3_sdmf3)
                        ->where('admin_s2_sdmf3', $request->admin_s2_sdmf3)
                        ->where('admin_s1_sdmf3', $request->admin_s1_sdmf3)
                        ->where('admin_d4_sdmf3', $request->admin_d4_sdmf3)
                        ->where('admin_d3_sdmf3', $request->admin_d3_sdmf3)
                        ->where('admin_d2_sdmf3', $request->admin_d2_sdmf3)
                        ->where('admin_d1_sdmf3', $request->admin_d1_sdmf3)
                        ->where('admin_sma_sdmf3', $request->admin_sma_sdmf3)
                        ->where('admin_unit_sdmf3', $request->admin_unit_sdmf3)
                        ->where('ktu_s3_sdmf3', $request->ktu_s3_sdmf3)
                        ->where('ktu_s2_sdmf3', $request->ktu_s2_sdmf3)
                        ->where('ktu_s1_sdmf3', $request->ktu_s1_sdmf3)
                        ->where('ktu_d4_sdmf3', $request->ktu_d4_sdmf3)
                        ->where('ktu_d3_sdmf3', $request->ktu_d3_sdmf3)
                        ->where('ktu_d2_sdmf3', $request->ktu_d2_sdmf3)
                        ->where('ktu_d1_sdmf3', $request->ktu_d1_sdmf3)
                        ->where('ktu_sma_sdmf3', $request->ktu_sma_sdmf3)
                        ->where('ktu_unit_sdmf3', $request->ktu_unit_sdmf3)
                        ->first();

        // $sdmf3->update($request->all());
        if($sdmf3==null){ 
        $sdmf3 = Sdmf3::find($member);
        $sdmf3->pustakawan_s3_sdmf3 = $request->pustakawan_s3_sdmf3;
        $sdmf3->pustakawan_s2_sdmf3 = $request->pustakawan_s2_sdmf3;
        $sdmf3->pustakawan_s1_sdmf3 = $request->pustakawan_s1_sdmf3;
        $sdmf3->pustakawan_d4_sdmf3 = $request->pustakawan_d4_sdmf3;
        $sdmf3->pustakawan_d3_sdmf3 = $request->pustakawan_d3_sdmf3;
        $sdmf3->pustakawan_d2_sdmf3 = $request->pustakawan_d2_sdmf3;
        $sdmf3->pustakawan_d1_sdmf3 = $request->pustakawan_d1_sdmf3;
        $sdmf3->pustakawan_sma_sdmf3 = $request->pustakawan_sma_sdmf3;
        $sdmf3->pustakawan_unit_sdmf3 = $request->pustakawan_unit_sdmf3;
        $sdmf3->lab_s3_sdmf3 = $request->lab_s3_sdmf3;
        $sdmf3->lab_s2_sdmf3 = $request->lab_s2_sdmf3;
        $sdmf3->lab_s1_sdmf3 = $request->lab_s1_sdmf3;
        $sdmf3->lab_d4_sdmf3 = $request->lab_d4_sdmf3;
        $sdmf3->lab_d3_sdmf3 = $request->lab_d3_sdmf3;
        $sdmf3->lab_d2_sdmf3 = $request->lab_d2_sdmf3;
        $sdmf3->lab_d1_sdmf3 = $request->lab_d1_sdmf3;
        $sdmf3->lab_sma_sdmf3 = $request->lab_sma_sdmf3;
        $sdmf3->lab_unit_sdmf3 = $request->lab_unit_sdmf3;
        $sdmf3->admin_s3_sdmf3 = $request->admin_s3_sdmf3;
        $sdmf3->admin_s2_sdmf3 = $request->admin_s2_sdmf3;
        $sdmf3->admin_s1_sdmf3 = $request->admin_s1_sdmf3;
        $sdmf3->admin_d4_sdmf3 = $request->admin_d4_sdmf3;
        $sdmf3->admin_d3_sdmf3 = $request->admin_d3_sdmf3;
        $sdmf3->admin_d2_sdmf3 = $request->admin_d2_sdmf3;
        $sdmf3->admin_d1_sdmf3 = $request->admin_d1_sdmf3;
        $sdmf3->admin_sma_sdmf3 = $request->admin_sma_sdmf3;
        $sdmf3->admin_unit_sdmf3 = $request->admin_unit_sdmf3;
        $sdmf3->ktu_s3_sdmf3 = $request->ktu_s3_sdmf3;
        $sdmf3->ktu_s2_sdmf3 = $request->ktu_s2_sdmf3;
        $sdmf3->ktu_s1_sdmf3 = $request->ktu_s1_sdmf3;
        $sdmf3->ktu_d4_sdmf3 = $request->ktu_d4_sdmf3;
        $sdmf3->ktu_d3_sdmf3 = $request->ktu_d3_sdmf3;
        $sdmf3->ktu_d2_sdmf3 = $request->ktu_d2_sdmf3;
        $sdmf3->ktu_d1_sdmf3 = $request->ktu_d1_sdmf3;
        $sdmf3->ktu_sma_sdmf3 = $request->ktu_sma_sdmf3;
        $sdmf3->ktu_unit_sdmf3 = $request->ktu_unit_sdmf3;
        $sdmf3->id_departemen= $request->user()->id_departemen;

        $sdmf3->save();
        return redirect()->route('sdmf3.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdmf3.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    
    public function destroy($id_sdmf3)
    {
        Sdmf3::destroy($id_sdmf3);
        return redirect()->route('sdmf3.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdmf3Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdmf3' => $value->tahun_sdmf3, 'pustakawan_s3_sdmf3' => $value->pustakawan_s3_sdmf3, 'pustakawan_s2_sdmf3' => $value->pustakawan_s2_sdmf3, 'pustakawan_s1_sdmf3' => $value->pustakawan_s1_sdmf3, 'pustakawan_d4_sdmf3' => $value->pustakawan_d4_sdmf3, 'pustakawan_d3_sdmf3' => $value->pustakawan_d3_sdmf3, 'pustakawan_d2_sdmf3' => $value->pustakawan_d2_sdmf3, 'pustakawan_d1_sdmf3' => $value->pustakawan_d1_sdmf3, 'pustakawan_unit_sdmf3' => $value->pustakawan_unit_sdmf3, 'lab_s3_sdmf3' => $value->lab_s3_sdmf3, 'lab_s2_sdmf3' => $value->lab_s2_sdmf3, 'lab_s1_sdmf3' => $value->lab_s1_sdmf3, 'lab_d4_sdmf3' => $value->lab_d4_sdmf3, 'lab_d3_sdmf3' => $value->lab_d3_sdmf3, 'lab_d2_sdmf3' => $value->lab_d2_sdmf3, 'lab_d1_sdmf3' => $value->lab_d1_sdmf3, 'lab_sma_sdmf3' => $value->lab_sma_sdmf3, 'lab_unit_sdmf3' => $value->lab_unit_sdmf3, 'admin_s3_sdmf3' => $value->admin_s3_sdmf3, 'admin_s2_sdmf3' => $value->admin_s2_sdmf3, 'admin_s1_sdmf3' => $value->admin_s1_sdmf3, 'admin_d4_sdmf3' => $value->admin_d4_sdmf3, 'admin_d3_sdmf3' => $value->admin_d3_sdmf3, 'admin_d2_sdmf3' => $value->admin_d2_sdmf3, 'admin_d1_sdmf3' => $value->admin_d1_sdmf3, 'admin_sma_sdmf3' => $value->admin_sma_sdmf3, 'admin_unit_sdmf3' => $value->admin_unit_sdmf3, 'ktu_s3_sdmf3' => $value->ktu_s3_sdmf3, 'ktu_s2_sdmf3' => $value->ktu_s2_sdmf3, 'ktu_s1_sdmf3' => $value->ktu_s1_sdmf3, 'ktu_d4_sdmf3' => $value->ktu_d4_sdmf3, 'ktu_d3_sdmf3' => $value->ktu_d3_sdmf3, 'ktu_d2_sdmf3' => $value->ktu_d2_sdmf3, 'ktu_d1_sdmf3' => $value->ktu_d1_sdmf3, 'ktu_sma_sdmf3' => $value->ktu_sma_sdmf3, 'ktu_unit_sdmf3' => $value->ktu_unit_sdmf3, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('sdmf3')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdmf3.index');
    }

public function sdmf3Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmkf3 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $sdmf3 = DB::table('sdmf3')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf3', 'desc')
                        ->get();
 
        $sdmkf3Data = "";
 
        if(count($sdmf3) >0 ){
            $sdmkf3Data .= '
           <table>
            <tr>
             <th colspan="13" style="text-align: left"><font face="Arial" size="2.5">
                Banyaknya penggantian dan perekrutan serta pengembangan dosen tetap yang bidang keahliannya sesuai dengan program studi pada FMIPA IPB dalam tiga tahun terakhir. </th>
           </tr>
                    <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">No.</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Hal</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-1<br>G1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-2<br>G2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-3<br>G3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-4<br>G4</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-5<br>G5</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-6<br>G6</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-7<br>G7</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-8<br>G8</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-9<br>G9</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Total di<br>Fakultas</th>
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
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;12&nbsp;)</th>
                   </tr>';
                   foreach ($sdmf3 as $sdmf3) {
                    $sdmkf3Data .= '
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen pensiun/berhenti</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->pustakawan_s3_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->pustakawan_s2_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->pustakawan_s1_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->pustakawan_d4_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->pustakawan_d3_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->pustakawan_d2_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->pustakawan_d1_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->pustakawan_sma_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->pustakawan_unit_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">'. ($sdmf3->pustakawan_s3_sdmf3+$sdmf3->pustakawan_s2_sdmf3+$sdmf3->pustakawan_s1_sdmf3+$sdmf3->pustakawan_d4_sdmf3+$sdmf3->pustakawan_d3_sdmf3+$sdmf3->pustakawan_d2_sdmf3+$sdmf3->pustakawan_d1_sdmf3+$sdmf3->pustakawan_sma_sdmf3+$sdmf3->pustakawan_unit_sdmf3) . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya perekrutan dosen baru</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->lab_s3_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->lab_s2_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->lab_s1_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->lab_d4_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->lab_d3_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->lab_d2_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->lab_d1_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->lab_sma_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->lab_unit_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf3->lab_s3_sdmf3+$sdmf3->lab_s2_sdmf3+$sdmf3->lab_s1_sdmf3+$sdmf3->lab_d4_sdmf3+$sdmf3->lab_d3_sdmf3+$sdmf3->lab_d2_sdmf3+$sdmf3->lab_d1_sdmf3+$sdmf3->lab_sma_sdmf3+$sdmf3->lab_unit_sdmf3) . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen tugas belajar S2/Sp-1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->admin_s3_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->admin_s2_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->admin_s1_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->admin_d4_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->admin_d3_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->admin_d2_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->admin_d1_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->admin_sma_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->admin_unit_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf3->admin_s3_sdmf3+$sdmf3->admin_s2_sdmf3+$sdmf3->admin_s1_sdmf3+$sdmf3->admin_d4_sdmf3+$sdmf3->admin_d3_sdmf3+$sdmf3->admin_d2_sdmf3+$sdmf3->admin_d1_sdmf3+$sdmf3->admin_sma_sdmf3+$sdmf3->admin_unit_sdmf3) . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">4</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Banyaknya dosen tugas belajar S3/Sp-2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->ktu_s3_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->ktu_s2_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->ktu_s1_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->ktu_d4_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->ktu_d3_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->ktu_d2_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->ktu_d1_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->ktu_sma_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf3->ktu_unit_sdmf3 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf3->ktu_s3_sdmf3+$sdmf3->ktu_s2_sdmf3+$sdmf3->ktu_s1_sdmf3+$sdmf3->ktu_d4_sdmf3+$sdmf3->ktu_d3_sdmf3+$sdmf3->ktu_d2_sdmf3+$sdmf3->ktu_d1_sdmf3+$sdmf3->ktu_sma_sdmf3+$sdmf3->ktu_unit_sdmf3) . '</td>
                   </tr>';
            }
            $sdmkf3Data .='</table>
             <td style="text-align: left; font-size: 16px"><strong>Keterangan :</strong></td>
             <br>
             <td style="text-align: left; font-size: 16px">PS1 G1 &minus; Statistika, PS2 G2 &minus; Meteorologi Terapan, PS3 G3 &minus; Biologi, PS4 G4 &minus; Kimia, </td>
             <br>
             <td style="text-align: left; font-size: 16px">PS5 G5 &minus; Matematika, PS6 G6 &minus; Ilmu Komputer, PS7 G7 &minus; Fisika, PS8 G8 &minus; Biokimia, </td>
             <br>
             <td style="text-align: left; font-size: 16px">PS9 G9 &minus; Aktuaria </td>';

        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=SDM 4.1.2.xls');
        echo $sdmkf3Data;
    }
    public function excelSdmf3()
    {
        $sdmf3s = DB::table('sdmf3')->get();

        $sdmkf3Data = "";

        if(count($sdmf3s) >0 ){
            $sdmkf3Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdmf3s as $sdmf3) {
                $sdmkf3Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdmf3->pustakawan_s1_sdmf3.'</td>
                <td style= "border: 1px solid black">'.$sdmf3->tahun_sdmf3.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmkf3Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmkf3Data;
    }

    
     public function sdmf3Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmkf3 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $sdmf3s = Sdmf3::whereBetween('tahun_sdmf3', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf3', 'desc')
                        ->get();
        $pdf = PDF::loadView('sdmf3.pdf', compact('sdmf3s','sdmkf3'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdmf3(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmkf3 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $sdmf3s = Sdmf3::whereBetween('tahun_sdmf3', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf3', 'desc')
                        ->get();
        $pdf = PDF::loadView('sdmf3.pdfm', compact('sdmf3s','sdmkf3'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
