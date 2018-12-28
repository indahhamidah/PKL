<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm15;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdm15Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdm15 = Sdm15::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdm15 = Sdm15::whereBetween('tahun_sdm15', [$date1,$date2])
                    ->orderBy('tahun_sdm15','desc')
                    ->get();
        }
        else
        {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdm15 = Sdm15::whereBetween('tahun_sdm15', [$date1,$date2])
              ->where('id_departemen', $id_departemen)
              ->orderBy('tahun_sdm15','desc')
              ->get();
        }
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdm15/index',compact('sdm15','dept'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'pustakawan_s3_sdm15' => 'required',
            'pustakawan_s2_sdm15' => 'required',
            'pustakawan_s1_sdm15' => 'required',
            'pustakawan_d4_sdm15' => 'required',
            'pustakawan_d3_sdm15' => 'required',
            'tahun_sdm15' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdm15 = DB::table('sdm15')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('pustakawan_s2_sdm15', $request->pustakawan_s2_sdm15)
                        ->where('tahun_sdm15', $request->tahun_sdm15)
                        ->first();

        if($sdm15==null){  
        $sdm15=new Sdm15;
        $sdm15->pustakawan_s3_sdm15 = $request->pustakawan_s3_sdm15;
        $sdm15->pustakawan_s2_sdm15 = $request->pustakawan_s2_sdm15;
        $sdm15->pustakawan_s1_sdm15 = $request->pustakawan_s1_sdm15;
        $sdm15->pustakawan_d4_sdm15 = $request->pustakawan_d4_sdm15;
        $sdm15->pustakawan_d3_sdm15 = $request->pustakawan_d3_sdm15;
        $sdm15->tahun_sdm15 = $request->tahun_sdm15;
        $sdm15->id_departemen= $request->user()->id_departemen;

        $sdm15->save();
        return redirect()->route('sdm15.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdm15.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_sdm15)
    {
        // dd($member);
        return view('sdm15/index',compact('sdm15'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'pustakawan_s3_sdm15' => 'required',
            'pustakawan_s2_sdm15' => 'required',
            'pustakawan_s1_sdm15' => 'required',
            'pustakawan_d4_sdm15' => 'required',
            'pustakawan_d3_sdm15' => 'required',
            'pustakawan_d2_sdm15' => 'required',
            'pustakawan_d1_sdm15' => 'required',
            'pustakawan_sma_sdm15' => 'required',
            'pustakawan_unit_sdm15' => 'required',
            'lab_s3_sdm15' => 'required',
            'lab_s2_sdm15' => 'required',
            'lab_s1_sdm15' => 'required',
            'lab_d4_sdm15' => 'required',
            'lab_d3_sdm15' => 'required',
            'lab_d2_sdm15' => 'required',
            'lab_d1_sdm15' => 'required',
            'lab_sma_sdm15' => 'required',
            'lab_unit_sdm15' => 'required',
            'lab1_s3_sdm15' => 'required',
            'lab1_s2_sdm15' => 'required',
            'lab1_s1_sdm15' => 'required',
            'lab1_d4_sdm15' => 'required',
            'lab1_d3_sdm15' => 'required',
            'lab1_d2_sdm15' => 'required',
            'lab1_d1_sdm15' => 'required',
            'lab1_sma_sdm15' => 'required',
            'lab1_unit_sdm15' => 'required',
            'admin_s3_sdm15' => 'required',
            'admin_s2_sdm15' => 'required',
            'admin_s1_sdm15' => 'required',
            'admin_d4_sdm15' => 'required',
            'admin_d3_sdm15' => 'required',
            'admin_d2_sdm15' => 'required',
            'admin_d1_sdm15' => 'required',
            'admin_sma_sdm15' => 'required',
            'admin_unit_sdm15' => 'required',
            'admin1_s3_sdm15' => 'required',
            'admin1_s2_sdm15' => 'required',
            'admin1_s1_sdm15' => 'required',
            'admin1_d4_sdm15' => 'required',
            'admin1_d3_sdm15' => 'required',
            'admin1_d2_sdm15' => 'required',
            'admin1_d1_sdm15' => 'required',
            'admin1_sma_sdm15' => 'required',
            'admin1_unit_sdm15' => 'required',
            'admin2_s3_sdm15' => 'required',
            'admin2_s2_sdm15' => 'required',
            'admin2_s1_sdm15' => 'required',
            'admin2_d4_sdm15' => 'required',
            'admin2_d3_sdm15' => 'required',
            'admin2_d2_sdm15' => 'required',
            'admin2_d1_sdm15' => 'required',
            'admin2_sma_sdm15' => 'required',
            'admin2_unit_sdm15' => 'required',
            'ktu_s3_sdm15' => 'required',
            'ktu_s2_sdm15' => 'required',
            'ktu_s1_sdm15' => 'required',
            'ktu_d4_sdm15' => 'required',
            'ktu_d3_sdm15' => 'required',
            'ktu_d2_sdm15' => 'required',
            'ktu_d1_sdm15' => 'required',
            'ktu_sma_sdm15' => 'required',
            'ktu_unit_sdm15' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdm15 = DB::table('sdm15')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('pustakawan_s3_sdm15', $request->pustakawan_s3_sdm15)
                        ->where('pustakawan_s2_sdm15', $request->pustakawan_s2_sdm15)
                        ->where('pustakawan_s1_sdm15', $request->pustakawan_s1_sdm15)
                        ->where('pustakawan_d4_sdm15', $request->pustakawan_d4_sdm15)
                        ->where('pustakawan_d3_sdm15', $request->pustakawan_d3_sdm15)
                        ->where('pustakawan_d2_sdm15', $request->pustakawan_d2_sdm15)
                        ->where('pustakawan_d1_sdm15', $request->pustakawan_d1_sdm15)
                        ->where('pustakawan_sma_sdm15', $request->pustakawan_sma_sdm15)
                        ->where('pustakawan_unit_sdm15', $request->pustakawan_unit_sdm15)
                        ->where('lab_s3_sdm15', $request->lab_s3_sdm15)
                        ->where('lab_s2_sdm15', $request->lab_s2_sdm15)
                        ->where('lab_s1_sdm15', $request->lab_s1_sdm15)
                        ->where('lab_d4_sdm15', $request->lab_d4_sdm15)
                        ->where('lab_d3_sdm15', $request->lab_d3_sdm15)
                        ->where('lab_d2_sdm15', $request->lab_d2_sdm15)
                        ->where('lab_d1_sdm15', $request->lab_d1_sdm15)
                        ->where('lab_sma_sdm15', $request->lab_sma_sdm15)
                        ->where('lab_unit_sdm15', $request->lab_unit_sdm15)
                        ->where('lab1_s3_sdm15', $request->lab1_s3_sdm15)
                        ->where('lab1_s2_sdm15', $request->lab1_s2_sdm15)
                        ->where('lab1_s1_sdm15', $request->lab1_s1_sdm15)
                        ->where('lab1_d4_sdm15', $request->lab1_d4_sdm15)
                        ->where('lab1_d3_sdm15', $request->lab1_d3_sdm15)
                        ->where('lab1_d2_sdm15', $request->lab1_d2_sdm15)
                        ->where('lab1_d1_sdm15', $request->lab1_d1_sdm15)
                        ->where('lab1_sma_sdm15', $request->lab1_sma_sdm15)
                        ->where('lab1_unit_sdm15', $request->lab1_unit_sdm15)
                        ->where('admin_s3_sdm15', $request->admin_s3_sdm15)
                        ->where('admin_s2_sdm15', $request->admin_s2_sdm15)
                        ->where('admin_s1_sdm15', $request->admin_s1_sdm15)
                        ->where('admin_d4_sdm15', $request->admin_d4_sdm15)
                        ->where('admin_d3_sdm15', $request->admin_d3_sdm15)
                        ->where('admin_d2_sdm15', $request->admin_d2_sdm15)
                        ->where('admin_d1_sdm15', $request->admin_d1_sdm15)
                        ->where('admin_sma_sdm15', $request->admin_sma_sdm15)
                        ->where('admin_unit_sdm15', $request->admin_unit_sdm15)
                        ->where('admin1_s3_sdm15', $request->admin1_s3_sdm15)
                        ->where('admin1_s2_sdm15', $request->admin1_s2_sdm15)
                        ->where('admin1_s1_sdm15', $request->admin1_s1_sdm15)
                        ->where('admin1_d4_sdm15', $request->admin1_d4_sdm15)
                        ->where('admin1_d3_sdm15', $request->admin1_d3_sdm15)
                        ->where('admin1_d2_sdm15', $request->admin1_d2_sdm15)
                        ->where('admin1_d1_sdm15', $request->admin1_d1_sdm15)
                        ->where('admin1_sma_sdm15', $request->admin1_sma_sdm15)
                        ->where('admin1_unit_sdm15', $request->admin1_unit_sdm15)
                        ->where('admin2_s3_sdm15', $request->admin2_s3_sdm15)
                        ->where('admin2_s2_sdm15', $request->admin2_s2_sdm15)
                        ->where('admin2_s1_sdm15', $request->admin2_s1_sdm15)
                        ->where('admin2_d4_sdm15', $request->admin2_d4_sdm15)
                        ->where('admin2_d3_sdm15', $request->admin2_d3_sdm15)
                        ->where('admin2_d2_sdm15', $request->admin2_d2_sdm15)
                        ->where('admin2_d1_sdm15', $request->admin2_d1_sdm15)
                        ->where('admin2_sma_sdm15', $request->admin2_sma_sdm15)
                        ->where('admin2_unit_sdm15', $request->admin2_unit_sdm15)
                        ->where('ktu_s3_sdm15', $request->ktu_s3_sdm15)
                        ->where('ktu_s2_sdm15', $request->ktu_s2_sdm15)
                        ->where('ktu_s1_sdm15', $request->ktu_s1_sdm15)
                        ->where('ktu_d4_sdm15', $request->ktu_d4_sdm15)
                        ->where('ktu_d3_sdm15', $request->ktu_d3_sdm15)
                        ->where('ktu_d2_sdm15', $request->ktu_d2_sdm15)
                        ->where('ktu_d1_sdm15', $request->ktu_d1_sdm15)
                        ->where('ktu_sma_sdm15', $request->ktu_sma_sdm15)
                        ->where('ktu_unit_sdm15', $request->ktu_unit_sdm15)
                        ->first();

        // $sdm15->update($request->all());
        if($sdm15==null){ 
        $sdm15 = Sdm15::find($member);
        $sdm15->pustakawan_s3_sdm15 = $request->pustakawan_s3_sdm15;
        $sdm15->pustakawan_s2_sdm15 = $request->pustakawan_s2_sdm15;
        $sdm15->pustakawan_s1_sdm15 = $request->pustakawan_s1_sdm15;
        $sdm15->pustakawan_d4_sdm15 = $request->pustakawan_d4_sdm15;
        $sdm15->pustakawan_d3_sdm15 = $request->pustakawan_d3_sdm15;
        $sdm15->pustakawan_d2_sdm15 = $request->pustakawan_d2_sdm15;
        $sdm15->pustakawan_d1_sdm15 = $request->pustakawan_d1_sdm15;
        $sdm15->pustakawan_sma_sdm15 = $request->pustakawan_sma_sdm15;
        $sdm15->pustakawan_unit_sdm15 = $request->pustakawan_unit_sdm15;
        $sdm15->lab_s3_sdm15 = $request->lab_s3_sdm15;
        $sdm15->lab_s2_sdm15 = $request->lab_s2_sdm15;
        $sdm15->lab_s1_sdm15 = $request->lab_s1_sdm15;
        $sdm15->lab_d4_sdm15 = $request->lab_d4_sdm15;
        $sdm15->lab_d3_sdm15 = $request->lab_d3_sdm15;
        $sdm15->lab_d2_sdm15 = $request->lab_d2_sdm15;
        $sdm15->lab_d1_sdm15 = $request->lab_d1_sdm15;
        $sdm15->lab_sma_sdm15 = $request->lab_sma_sdm15;
        $sdm15->lab_unit_sdm15 = $request->lab_unit_sdm15;
        $sdm15->lab1_s3_sdm15 = $request->lab1_s3_sdm15;
        $sdm15->lab1_s2_sdm15 = $request->lab1_s2_sdm15;
        $sdm15->lab1_s1_sdm15 = $request->lab1_s1_sdm15;
        $sdm15->lab1_d4_sdm15 = $request->lab1_d4_sdm15;
        $sdm15->lab1_d3_sdm15 = $request->lab1_d3_sdm15;
        $sdm15->lab1_d2_sdm15 = $request->lab1_d2_sdm15;
        $sdm15->lab1_d1_sdm15 = $request->lab1_d1_sdm15;
        $sdm15->lab1_sma_sdm15 = $request->lab1_sma_sdm15;
        $sdm15->lab1_unit_sdm15 = $request->lab1_unit_sdm15;
        $sdm15->admin_s3_sdm15 = $request->admin_s3_sdm15;
        $sdm15->admin_s2_sdm15 = $request->admin_s2_sdm15;
        $sdm15->admin_s1_sdm15 = $request->admin_s1_sdm15;
        $sdm15->admin_d4_sdm15 = $request->admin_d4_sdm15;
        $sdm15->admin_d3_sdm15 = $request->admin_d3_sdm15;
        $sdm15->admin_d2_sdm15 = $request->admin_d2_sdm15;
        $sdm15->admin_d1_sdm15 = $request->admin_d1_sdm15;
        $sdm15->admin_sma_sdm15 = $request->admin_sma_sdm15;
        $sdm15->admin_unit_sdm15 = $request->admin_unit_sdm15;
        $sdm15->admin1_s3_sdm15 = $request->admin1_s3_sdm15;
        $sdm15->admin1_s2_sdm15 = $request->admin1_s2_sdm15;
        $sdm15->admin1_s1_sdm15 = $request->admin1_s1_sdm15;
        $sdm15->admin1_d4_sdm15 = $request->admin1_d4_sdm15;
        $sdm15->admin1_d3_sdm15 = $request->admin1_d3_sdm15;
        $sdm15->admin1_d2_sdm15 = $request->admin1_d2_sdm15;
        $sdm15->admin1_d1_sdm15 = $request->admin1_d1_sdm15;
        $sdm15->admin1_sma_sdm15 = $request->admin1_sma_sdm15;
        $sdm15->admin1_unit_sdm15 = $request->admin1_unit_sdm15;
        $sdm15->admin2_s3_sdm15 = $request->admin2_s3_sdm15;
        $sdm15->admin2_s2_sdm15 = $request->admin2_s2_sdm15;
        $sdm15->admin2_s1_sdm15 = $request->admin2_s1_sdm15;
        $sdm15->admin2_d4_sdm15 = $request->admin2_d4_sdm15;
        $sdm15->admin2_d3_sdm15 = $request->admin2_d3_sdm15;
        $sdm15->admin2_d2_sdm15 = $request->admin2_d2_sdm15;
        $sdm15->admin2_d1_sdm15 = $request->admin2_d1_sdm15;
        $sdm15->admin2_sma_sdm15 = $request->admin2_sma_sdm15;
        $sdm15->admin2_unit_sdm15 = $request->admin2_unit_sdm15;
        $sdm15->ktu_s3_sdm15 = $request->ktu_s3_sdm15;
        $sdm15->ktu_s2_sdm15 = $request->ktu_s2_sdm15;
        $sdm15->ktu_s1_sdm15 = $request->ktu_s1_sdm15;
        $sdm15->ktu_d4_sdm15 = $request->ktu_d4_sdm15;
        $sdm15->ktu_d3_sdm15 = $request->ktu_d3_sdm15;
        $sdm15->ktu_d2_sdm15 = $request->ktu_d2_sdm15;
        $sdm15->ktu_d1_sdm15 = $request->ktu_d1_sdm15;
        $sdm15->ktu_sma_sdm15 = $request->ktu_sma_sdm15;
        $sdm15->ktu_unit_sdm15 = $request->ktu_unit_sdm15;
        $sdm15->id_departemen= $request->user()->id_departemen;

        $sdm15->save();
        return redirect()->route('sdm15.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdm15.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    
    public function destroy($id_sdm15)
    {
        Sdm15::destroy($id_sdm15);
        return redirect()->route('sdm15.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdm15Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdm15' => $value->tahun_sdm15, 'pustakawan_s3_sdm15' => $value->pustakawan_s3_sdm15, 'pustakawan_s2_sdm15' => $value->pustakawan_s2_sdm15, 'pustakawan_s1_sdm15' => $value->pustakawan_s1_sdm15, 'pustakawan_d4_sdm15' => $value->pustakawan_d4_sdm15, 'pustakawan_d3_sdm15' => $value->pustakawan_d3_sdm15, 'pustakawan_d2_sdm15' => $value->pustakawan_d2_sdm15, 'pustakawan_d1_sdm15' => $value->pustakawan_d1_sdm15, 'pustakawan_unit_sdm15' => $value->pustakawan_unit_sdm15, 'lab_s3_sdm15' => $value->lab_s3_sdm15, 'lab_s2_sdm15' => $value->lab_s2_sdm15, 'lab_s1_sdm15' => $value->lab_s1_sdm15, 'lab_d4_sdm15' => $value->lab_d4_sdm15, 'lab_d3_sdm15' => $value->lab_d3_sdm15, 'lab_d2_sdm15' => $value->lab_d2_sdm15, 'lab_d1_sdm15' => $value->lab_d1_sdm15, 'lab_sma_sdm15' => $value->lab_sma_sdm15, 'lab_unit_sdm15' => $value->lab_unit_sdm15, 'admin_s3_sdm15' => $value->admin_s3_sdm15, 'admin_s2_sdm15' => $value->admin_s2_sdm15, 'admin_s1_sdm15' => $value->admin_s1_sdm15, 'admin_d4_sdm15' => $value->admin_d4_sdm15, 'admin_d3_sdm15' => $value->admin_d3_sdm15, 'admin_d2_sdm15' => $value->admin_d2_sdm15, 'admin_d1_sdm15' => $value->admin_d1_sdm15, 'admin_sma_sdm15' => $value->admin_sma_sdm15, 'admin_unit_sdm15' => $value->admin_unit_sdm15, 'ktu_s3_sdm15' => $value->ktu_s3_sdm15, 'ktu_s2_sdm15' => $value->ktu_s2_sdm15, 'ktu_s1_sdm15' => $value->ktu_s1_sdm15, 'ktu_d4_sdm15' => $value->ktu_d4_sdm15, 'ktu_d3_sdm15' => $value->ktu_d3_sdm15, 'ktu_d2_sdm15' => $value->ktu_d2_sdm15, 'ktu_d1_sdm15' => $value->ktu_d1_sdm15, 'ktu_sma_sdm15' => $value->ktu_sma_sdm15, 'ktu_unit_sdm15' => $value->ktu_unit_sdm15, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('sdm15')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdm15.index');
    }

public function sdm15Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmk15 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $sdm15 = DB::table('sdm15')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdm15', 'desc')
                        ->get();
 
        $sdmk15Data = "";
 
        if(count($sdm15) >0 ){
            $sdmk15Data .= '
           <table>
            <tr>
            
<td colspan="12" style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:</strong></td>
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
                   foreach ($sdm15 as $sdm15) {
                    $sdmk15Data .= '
                   <tr>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: left;">4.4.2. Pustakawan*</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->pustakawan_s3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->pustakawan_s2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->pustakawan_s1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->pustakawan_d4_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->pustakawan_d3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->pustakawan_d2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->pustakawan_d1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->pustakawan_sma_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->pustakawan_unit_sdm15 . '</td>
                     <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->ktu_s3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->ktu_s2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->ktu_s1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->ktu_d4_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->ktu_d3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->ktu_d2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->ktu_d1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->ktu_sma_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->ktu_unit_sdm15 . '</td>
                     </tr>
                   </tr>

                   <tr>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: left;">4.4.3. Laboran</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab_s3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab_s2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab_s1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab_d4_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab_d3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab_d2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab_d1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab_sma_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab_unit_sdm15 . '</td>
                     <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab1_s3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab1_s2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab1_s1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab1_d4_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab1_d3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab1_d2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab1_d1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab1_sma_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->lab1_unit_sdm15 . '</td>
                     </tr>
                   </tr>

                   <tr>
                   <td rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td rowspan="3" style="border: 1px solid #000; padding: 5px; text-align: left;">4.4.4. Administrasi</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin_s3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin_s2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin_s1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin_d4_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin_d3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin_d2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin_d1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin_sma_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin_unit_sdm15 . '</td>
                     <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin1_s3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin1_s2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin1_s1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin1_d4_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin1_d3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin1_d2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin1_d1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin1_sma_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin1_unit_sdm15 . '</td>
                     </tr>
                     <tr> 
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin2_s3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin2_s2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin2_s1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin2_d4_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin2_d3_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin2_d2_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin2_d1_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin2_sma_sdm15 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdm15->admin2_unit_sdm15 . '</td>
                     </tr>
                   </tr>

                   <tr>
                     <td colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;"><strong>Total</strong></td>
              
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ( $sdm15->pustakawan_s3_sdm15+$sdm15->lab_s3_sdm15+$sdm15->lab1_s3_sdm15+$sdm15->admin_s3_sdm15+$sdm15->ktu_s3_sdm15+$sdm15->admin1_s3_sdm15+$sdm15->admin2_s3_sdm15 ). '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ( $sdm15->pustakawan_s2_sdm15+$sdm15->lab_s2_sdm15+$sdm15->lab1_s2_sdm15+$sdm15->admin_s2_sdm15+$sdm15->ktu_s2_sdm15+$sdm15->admin1_s2_sdm15+$sdm15->admin2_s2_sdm15 ). '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ( $sdm15->pustakawan_s1_sdm15+$sdm15->lab_s1_sdm15+$sdm15->lab1_s1_sdm15+$sdm15->admin_s1_sdm15+$sdm15->ktu_s1_sdm15+$sdm15->admin1_s1_sdm15+$sdm15->admin2_s1_sdm15 ). '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ( $sdm15->pustakawan_d4_sdm15+$sdm15->lab_d4_sdm15+$sdm15->lab1_d4_sdm15+$sdm15->admin_d4_sdm15+$sdm15->ktu_d4_sdm15+$sdm15->admin1_d4_sdm15+$sdm15->admin2_d4_sdm15 ). '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ( $sdm15->pustakawan_d3_sdm15+$sdm15->lab_d3_sdm15+$sdm15->lab1_d3_sdm15+$sdm15->admin_d3_sdm15+$sdm15->ktu_d3_sdm15+$sdm15->admin1_d3_sdm15+$sdm15->admin2_d3_sdm15 ). '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ( $sdm15->pustakawan_d2_sdm15+$sdm15->lab_d2_sdm15+$sdm15->lab1_d2_sdm15+$sdm15->admin_d2_sdm15+$sdm15->ktu_d2_sdm15+$sdm15->admin1_d2_sdm15+$sdm15->admin2_d2_sdm15 ). '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ( $sdm15->pustakawan_d1_sdm15+$sdm15->lab_d1_sdm15+$sdm15->lab1_d1_sdm15+$sdm15->admin_d1_sdm15+$sdm15->ktu_d1_sdm15+$sdm15->admin1_d1_sdm15+$sdm15->admin2_d1_sdm15 ). '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ( $sdm15->pustakawan_sma_sdm15+$sdm15->lab_sma_sdm15+$sdm15->lab1_sma_sdm15+$sdm15->admin_sma_sdm15+$sdm15->ktu_sma_sdm15+$sdm15->admin1_sma_sdm15+$sdm15->admin2_sma_sdm15 ). '</td>
              <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tr> 

                   ';
            }
            $sdmk15Data .='</table>
             <td style="text-align: justify; font-size: 10;font-family : arial, helvetica, sans-serif;">* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan</td> <br>
             <td style="text-align: justify;font-size: 10;font-family : arial, helvetica, sans-serif;">** Administrasi juga meliputi KTU, Keuangan, dan Kepegawaian</td>';

        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=SDM 4.6.1.xls');
        echo $sdmk15Data;
    }
    public function excelSdm15()
    {
        $sdm15s = DB::table('sdm15')->get();

        $sdmk15Data = "";

        if(count($sdm15s) >0 ){
            $sdmk15Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdm15s as $sdm15) {
                $sdmk15Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdm15->pustakawan_s1_sdm15.'</td>
                <td style= "border: 1px solid black">'.$sdm15->tahun_sdm15.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmk15Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmk15Data;
    }

    
     public function sdm15Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk15 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $sdm15s = Sdm15::whereBetween('tahun_sdm15', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdm15', 'desc')
                        ->get();
        $pdf = PDF::loadView('sdm15.pdf', compact('sdm15s','sdmk15'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdm15(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk15 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $sdm15s = Sdm15::whereBetween('tahun_sdm15', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdm15', 'desc')
                        ->get();
        $pdf = PDF::loadView('sdm15.pdfm', compact('sdm15s','sdmk15'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
