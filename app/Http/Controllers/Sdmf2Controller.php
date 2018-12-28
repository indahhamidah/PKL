<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdmf2;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdmf2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $sdmf2 = Sdmf2::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdmf2 = Sdmf2::whereBetween('tahun_sdmf2', [$date1,$date2])
                    ->orderBy('tahun_sdmf2','desc')
                    ->get();
        }
        else
        {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdmf2 = Sdmf2::whereBetween('tahun_sdmf2', [$date1,$date2])
              ->where('id_departemen', $id_departemen)
              ->orderBy('tahun_sdmf2','desc')
              ->get();
        }
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdmf2/index',compact('sdmf2','dept'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'pustakawan_s3_sdmf2' => 'required',
            'pustakawan_s2_sdmf2' => 'required',
            'pustakawan_s1_sdmf2' => 'required',
            'pustakawan_d4_sdmf2' => 'required',
            'pustakawan_d3_sdmf2' => 'required',
            'tahun_sdmf2' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdmf2 = DB::table('sdmf2')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('pustakawan_s2_sdmf2', $request->pustakawan_s2_sdmf2)
                        ->where('tahun_sdmf2', $request->tahun_sdmf2)
                        ->first();

        if($sdmf2==null){  
        $sdmf2=new Sdmf2;
        $sdmf2->pustakawan_s3_sdmf2 = $request->pustakawan_s3_sdmf2;
        $sdmf2->pustakawan_s2_sdmf2 = $request->pustakawan_s2_sdmf2;
        $sdmf2->pustakawan_s1_sdmf2 = $request->pustakawan_s1_sdmf2;
        $sdmf2->pustakawan_d4_sdmf2 = $request->pustakawan_d4_sdmf2;
        $sdmf2->pustakawan_d3_sdmf2 = $request->pustakawan_d3_sdmf2;
        $sdmf2->tahun_sdmf2 = $request->tahun_sdmf2;
        $sdmf2->id_departemen= $request->user()->id_departemen;

        $sdmf2->save();
        return redirect()->route('sdmf2.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdmf2.index')
                        ->with('message','Kode MK ada yang sama'); 
          }                
    }
     public function edit($id_sdmf2)
    {
        // dd($member);
        return view('sdmf2/index',compact('sdmf2'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'pustakawan_s3_sdmf2' => 'required',
            'pustakawan_s2_sdmf2' => 'required',
            'pustakawan_s1_sdmf2' => 'required',
            'pustakawan_d4_sdmf2' => 'required',
            'pustakawan_d3_sdmf2' => 'required',
            'pustakawan_d2_sdmf2' => 'required',
            'pustakawan_d1_sdmf2' => 'required',
            'pustakawan_sma_sdmf2' => 'required',
            'pustakawan_unit_sdmf2' => 'required',
            'lab_s3_sdmf2' => 'required',
            'lab_s2_sdmf2' => 'required',
            'lab_s1_sdmf2' => 'required',
            'lab_d4_sdmf2' => 'required',
            'lab_d3_sdmf2' => 'required',
            'lab_d2_sdmf2' => 'required',
            'lab_d1_sdmf2' => 'required',
            'lab_sma_sdmf2' => 'required',
            'lab_unit_sdmf2' => 'required',
            'admin_s3_sdmf2' => 'required',
            'admin_s2_sdmf2' => 'required',
            'admin_s1_sdmf2' => 'required',
            'admin_d4_sdmf2' => 'required',
            'admin_d3_sdmf2' => 'required',
            'admin_d2_sdmf2' => 'required',
            'admin_d1_sdmf2' => 'required',
            'admin_sma_sdmf2' => 'required',
            'admin_unit_sdmf2' => 'required',
            'ktu_s3_sdmf2' => 'required',
            'ktu_s2_sdmf2' => 'required',
            'ktu_s1_sdmf2' => 'required',
            'ktu_d4_sdmf2' => 'required',
            'ktu_d3_sdmf2' => 'required',
            'ktu_d2_sdmf2' => 'required',
            'ktu_d1_sdmf2' => 'required',
            'ktu_sma_sdmf2' => 'required',
            'ktu_unit_sdmf2' => 'required',
            'profesor_s3_sdmf2' => 'required',
            'profesor_s2_sdmf2' => 'required',
            'profesor_s1_sdmf2' => 'required',
            'profesor_d4_sdmf2' => 'required',
            'profesor_d3_sdmf2' => 'required',
            'profesor_d2_sdmf2' => 'required',
            'profesor_d1_sdmf2' => 'required',
            'profesor_sma_sdmf2' => 'required',
            'profesor_unit_sdmf2' => 'required',
            'pts1_s3_sdmf2' => 'required',
            'pts1_s2_sdmf2' => 'required',
            'pts1_s1_sdmf2' => 'required',
            'pts1_d4_sdmf2' => 'required',
            'pts1_d3_sdmf2' => 'required',
            'pts1_d2_sdmf2' => 'required',
            'pts1_d1_sdmf2' => 'required',
            'pts1_sma_sdmf2' => 'required',
            'pts1_unit_sdmf2' => 'required',
            'pts2_s3_sdmf2' => 'required',
            'pts2_s2_sdmf2' => 'required',
            'pts2_s1_sdmf2' => 'required',
            'pts2_d4_sdmf2' => 'required',
            'pts2_d3_sdmf2' => 'required',
            'pts2_d2_sdmf2' => 'required',
            'pts2_d1_sdmf2' => 'required',
            'pts2_sma_sdmf2' => 'required',
            'pts2_unit_sdmf2' => 'required',
            'pts3_s3_sdmf2' => 'required',
            'pts3_s2_sdmf2' => 'required',
            'pts3_s1_sdmf2' => 'required',
            'pts3_d4_sdmf2' => 'required',
            'pts3_d3_sdmf2' => 'required',
            'pts3_d2_sdmf2' => 'required',
            'pts3_d1_sdmf2' => 'required',
            'pts3_sma_sdmf2' => 'required',
            'pts3_unit_sdmf2' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdmf2 = DB::table('sdmf2')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('pustakawan_s3_sdmf2', $request->pustakawan_s3_sdmf2)
                        ->where('pustakawan_s2_sdmf2', $request->pustakawan_s2_sdmf2)
                        ->where('pustakawan_s1_sdmf2', $request->pustakawan_s1_sdmf2)
                        ->where('pustakawan_d4_sdmf2', $request->pustakawan_d4_sdmf2)
                        ->where('pustakawan_d3_sdmf2', $request->pustakawan_d3_sdmf2)
                        ->where('pustakawan_d2_sdmf2', $request->pustakawan_d2_sdmf2)
                        ->where('pustakawan_d1_sdmf2', $request->pustakawan_d1_sdmf2)
                        ->where('pustakawan_sma_sdmf2', $request->pustakawan_sma_sdmf2)
                        ->where('pustakawan_unit_sdmf2', $request->pustakawan_unit_sdmf2)
                        ->where('lab_s3_sdmf2', $request->lab_s3_sdmf2)
                        ->where('lab_s2_sdmf2', $request->lab_s2_sdmf2)
                        ->where('lab_s1_sdmf2', $request->lab_s1_sdmf2)
                        ->where('lab_d4_sdmf2', $request->lab_d4_sdmf2)
                        ->where('lab_d3_sdmf2', $request->lab_d3_sdmf2)
                        ->where('lab_d2_sdmf2', $request->lab_d2_sdmf2)
                        ->where('lab_d1_sdmf2', $request->lab_d1_sdmf2)
                        ->where('lab_sma_sdmf2', $request->lab_sma_sdmf2)
                        ->where('lab_unit_sdmf2', $request->lab_unit_sdmf2)
                        ->where('admin_s3_sdmf2', $request->admin_s3_sdmf2)
                        ->where('admin_s2_sdmf2', $request->admin_s2_sdmf2)
                        ->where('admin_s1_sdmf2', $request->admin_s1_sdmf2)
                        ->where('admin_d4_sdmf2', $request->admin_d4_sdmf2)
                        ->where('admin_d3_sdmf2', $request->admin_d3_sdmf2)
                        ->where('admin_d2_sdmf2', $request->admin_d2_sdmf2)
                        ->where('admin_d1_sdmf2', $request->admin_d1_sdmf2)
                        ->where('admin_sma_sdmf2', $request->admin_sma_sdmf2)
                        ->where('admin_unit_sdmf2', $request->admin_unit_sdmf2)
                        ->where('ktu_s3_sdmf2', $request->ktu_s3_sdmf2)
                        ->where('ktu_s2_sdmf2', $request->ktu_s2_sdmf2)
                        ->where('ktu_s1_sdmf2', $request->ktu_s1_sdmf2)
                        ->where('ktu_d4_sdmf2', $request->ktu_d4_sdmf2)
                        ->where('ktu_d3_sdmf2', $request->ktu_d3_sdmf2)
                        ->where('ktu_d2_sdmf2', $request->ktu_d2_sdmf2)
                        ->where('ktu_d1_sdmf2', $request->ktu_d1_sdmf2)
                        ->where('ktu_sma_sdmf2', $request->ktu_sma_sdmf2)
                        ->where('ktu_unit_sdmf2', $request->ktu_unit_sdmf2)
                        ->where('profesor_s3_sdmf2', $request->profesor_s3_sdmf2)
                        ->where('profesor_s2_sdmf2', $request->profesor_s2_sdmf2)
                        ->where('profesor_s1_sdmf2', $request->profesor_s1_sdmf2)
                        ->where('profesor_d4_sdmf2', $request->profesor_d4_sdmf2)
                        ->where('profesor_d3_sdmf2', $request->profesor_d3_sdmf2)
                        ->where('profesor_d2_sdmf2', $request->profesor_d2_sdmf2)
                        ->where('profesor_d1_sdmf2', $request->profesor_d1_sdmf2)
                        ->where('profesor_sma_sdmf2', $request->profesor_sma_sdmf2)
                        ->where('profesor_unit_sdmf2', $request->profesor_unit_sdmf2)
                        ->where('pts1_s3_sdmf2', $request->pts1_s3_sdmf2)
                        ->where('pts1_s2_sdmf2', $request->pts1_s2_sdmf2)
                        ->where('pts1_s1_sdmf2', $request->pts1_s1_sdmf2)
                        ->where('pts1_d4_sdmf2', $request->pts1_d4_sdmf2)
                        ->where('pts1_d3_sdmf2', $request->pts1_d3_sdmf2)
                        ->where('pts1_d2_sdmf2', $request->pts1_d2_sdmf2)
                        ->where('pts1_d1_sdmf2', $request->pts1_d1_sdmf2)
                        ->where('pts1_sma_sdmf2', $request->pts1_sma_sdmf2)
                        ->where('pts1_unit_sdmf2', $request->pts1_unit_sdmf2)
                        ->where('pts2_s3_sdmf2', $request->pts2_s3_sdmf2)
                        ->where('pts2_s2_sdmf2', $request->pts2_s2_sdmf2)
                        ->where('pts2_s1_sdmf2', $request->pts2_s1_sdmf2)
                        ->where('pts2_d4_sdmf2', $request->pts2_d4_sdmf2)
                        ->where('pts2_d3_sdmf2', $request->pts2_d3_sdmf2)
                        ->where('pts2_d2_sdmf2', $request->pts2_d2_sdmf2)
                        ->where('pts2_d1_sdmf2', $request->pts2_d1_sdmf2)
                        ->where('pts2_sma_sdmf2', $request->pts2_sma_sdmf2)
                        ->where('pts2_unit_sdmf2', $request->pts2_unit_sdmf2)
                        ->where('pts3_s3_sdmf2', $request->pts3_s3_sdmf2)
                        ->where('pts3_s2_sdmf2', $request->pts3_s2_sdmf2)
                        ->where('pts3_s1_sdmf2', $request->pts3_s1_sdmf2)
                        ->where('pts3_d4_sdmf2', $request->pts3_d4_sdmf2)
                        ->where('pts3_d3_sdmf2', $request->pts3_d3_sdmf2)
                        ->where('pts3_d2_sdmf2', $request->pts3_d2_sdmf2)
                        ->where('pts3_d1_sdmf2', $request->pts3_d1_sdmf2)
                        ->where('pts3_sma_sdmf2', $request->pts3_sma_sdmf2)
                        ->where('pts3_unit_sdmf2', $request->pts3_unit_sdmf2)
                        ->first();

        // $sdmf2->update($request->all());
        if($sdmf2==null){ 
        $sdmf2 = Sdmf2::find($member);
        $sdmf2->pustakawan_s3_sdmf2 = $request->pustakawan_s3_sdmf2;
        $sdmf2->pustakawan_s2_sdmf2 = $request->pustakawan_s2_sdmf2;
        $sdmf2->pustakawan_s1_sdmf2 = $request->pustakawan_s1_sdmf2;
        $sdmf2->pustakawan_d4_sdmf2 = $request->pustakawan_d4_sdmf2;
        $sdmf2->pustakawan_d3_sdmf2 = $request->pustakawan_d3_sdmf2;
        $sdmf2->pustakawan_d2_sdmf2 = $request->pustakawan_d2_sdmf2;
        $sdmf2->pustakawan_d1_sdmf2 = $request->pustakawan_d1_sdmf2;
        $sdmf2->pustakawan_sma_sdmf2 = $request->pustakawan_sma_sdmf2;
        $sdmf2->pustakawan_unit_sdmf2 = $request->pustakawan_unit_sdmf2;
        $sdmf2->lab_s3_sdmf2 = $request->lab_s3_sdmf2;
        $sdmf2->lab_s2_sdmf2 = $request->lab_s2_sdmf2;
        $sdmf2->lab_s1_sdmf2 = $request->lab_s1_sdmf2;
        $sdmf2->lab_d4_sdmf2 = $request->lab_d4_sdmf2;
        $sdmf2->lab_d3_sdmf2 = $request->lab_d3_sdmf2;
        $sdmf2->lab_d2_sdmf2 = $request->lab_d2_sdmf2;
        $sdmf2->lab_d1_sdmf2 = $request->lab_d1_sdmf2;
        $sdmf2->lab_sma_sdmf2 = $request->lab_sma_sdmf2;
        $sdmf2->lab_unit_sdmf2 = $request->lab_unit_sdmf2;
        $sdmf2->admin_s3_sdmf2 = $request->admin_s3_sdmf2;
        $sdmf2->admin_s2_sdmf2 = $request->admin_s2_sdmf2;
        $sdmf2->admin_s1_sdmf2 = $request->admin_s1_sdmf2;
        $sdmf2->admin_d4_sdmf2 = $request->admin_d4_sdmf2;
        $sdmf2->admin_d3_sdmf2 = $request->admin_d3_sdmf2;
        $sdmf2->admin_d2_sdmf2 = $request->admin_d2_sdmf2;
        $sdmf2->admin_d1_sdmf2 = $request->admin_d1_sdmf2;
        $sdmf2->admin_sma_sdmf2 = $request->admin_sma_sdmf2;
        $sdmf2->admin_unit_sdmf2 = $request->admin_unit_sdmf2;
        $sdmf2->ktu_s3_sdmf2 = $request->ktu_s3_sdmf2;
        $sdmf2->ktu_s2_sdmf2 = $request->ktu_s2_sdmf2;
        $sdmf2->ktu_s1_sdmf2 = $request->ktu_s1_sdmf2;
        $sdmf2->ktu_d4_sdmf2 = $request->ktu_d4_sdmf2;
        $sdmf2->ktu_d3_sdmf2 = $request->ktu_d3_sdmf2;
        $sdmf2->ktu_d2_sdmf2 = $request->ktu_d2_sdmf2;
        $sdmf2->ktu_d1_sdmf2 = $request->ktu_d1_sdmf2;
        $sdmf2->ktu_sma_sdmf2 = $request->ktu_sma_sdmf2;
        $sdmf2->ktu_unit_sdmf2 = $request->ktu_unit_sdmf2;
        $sdmf2->profesor_s3_sdmf2 = $request->profesor_s3_sdmf2;
        $sdmf2->profesor_s2_sdmf2 = $request->profesor_s2_sdmf2;
        $sdmf2->profesor_s1_sdmf2 = $request->profesor_s1_sdmf2;
        $sdmf2->profesor_d4_sdmf2 = $request->profesor_d4_sdmf2;
        $sdmf2->profesor_d3_sdmf2 = $request->profesor_d3_sdmf2;
        $sdmf2->profesor_d2_sdmf2 = $request->profesor_d2_sdmf2;
        $sdmf2->profesor_d1_sdmf2 = $request->profesor_d1_sdmf2;
        $sdmf2->profesor_sma_sdmf2 = $request->profesor_sma_sdmf2;
        $sdmf2->profesor_unit_sdmf2 = $request->profesor_unit_sdmf2;
        $sdmf2->pts1_s3_sdmf2 = $request->pts1_s3_sdmf2;
        $sdmf2->pts1_s2_sdmf2 = $request->pts1_s2_sdmf2;
        $sdmf2->pts1_s1_sdmf2 = $request->pts1_s1_sdmf2;
        $sdmf2->pts1_d4_sdmf2 = $request->pts1_d4_sdmf2;
        $sdmf2->pts1_d3_sdmf2 = $request->pts1_d3_sdmf2;
        $sdmf2->pts1_d2_sdmf2 = $request->pts1_d2_sdmf2;
        $sdmf2->pts1_d1_sdmf2 = $request->pts1_d1_sdmf2;
        $sdmf2->pts1_sma_sdmf2 = $request->pts1_sma_sdmf2;
        $sdmf2->pts1_unit_sdmf2 = $request->pts1_unit_sdmf2;
        $sdmf2->pts2_s3_sdmf2 = $request->pts2_s3_sdmf2;
        $sdmf2->pts2_s2_sdmf2 = $request->pts2_s2_sdmf2;
        $sdmf2->pts2_s1_sdmf2 = $request->pts2_s1_sdmf2;
        $sdmf2->pts2_d4_sdmf2 = $request->pts2_d4_sdmf2;
        $sdmf2->pts2_d3_sdmf2 = $request->pts2_d3_sdmf2;
        $sdmf2->pts2_d2_sdmf2 = $request->pts2_d2_sdmf2;
        $sdmf2->pts2_d1_sdmf2 = $request->pts2_d1_sdmf2;
        $sdmf2->pts2_sma_sdmf2 = $request->pts2_sma_sdmf2;
        $sdmf2->pts2_unit_sdmf2 = $request->pts2_unit_sdmf2;
        $sdmf2->pts3_s3_sdmf2 = $request->pts3_s3_sdmf2;
        $sdmf2->pts3_s2_sdmf2 = $request->pts3_s2_sdmf2;
        $sdmf2->pts3_s1_sdmf2 = $request->pts3_s1_sdmf2;
        $sdmf2->pts3_d4_sdmf2 = $request->pts3_d4_sdmf2;
        $sdmf2->pts3_d3_sdmf2 = $request->pts3_d3_sdmf2;
        $sdmf2->pts3_d2_sdmf2 = $request->pts3_d2_sdmf2;
        $sdmf2->pts3_d1_sdmf2 = $request->pts3_d1_sdmf2;
        $sdmf2->pts3_sma_sdmf2 = $request->pts3_sma_sdmf2;
        $sdmf2->pts3_unit_sdmf2 = $request->pts3_unit_sdmf2;
        $sdmf2->id_departemen= $request->user()->id_departemen;

        $sdmf2->save();
        return redirect()->route('sdmf2.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdmf2.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    
    public function destroy($id_sdmf2)
    {
        Sdmf2::destroy($id_sdmf2);
        return redirect()->route('sdmf2.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdmf2Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_sdmf2' => $value->tahun_sdmf2, 'pustakawan_s3_sdmf2' => $value->pustakawan_s3_sdmf2, 'pustakawan_s2_sdmf2' => $value->pustakawan_s2_sdmf2, 'pustakawan_s1_sdmf2' => $value->pustakawan_s1_sdmf2, 'pustakawan_d4_sdmf2' => $value->pustakawan_d4_sdmf2, 'pustakawan_d3_sdmf2' => $value->pustakawan_d3_sdmf2, 'pustakawan_d2_sdmf2' => $value->pustakawan_d2_sdmf2, 'pustakawan_d1_sdmf2' => $value->pustakawan_d1_sdmf2, 'pustakawan_unit_sdmf2' => $value->pustakawan_unit_sdmf2, 'lab_s3_sdmf2' => $value->lab_s3_sdmf2, 'lab_s2_sdmf2' => $value->lab_s2_sdmf2, 'lab_s1_sdmf2' => $value->lab_s1_sdmf2, 'lab_d4_sdmf2' => $value->lab_d4_sdmf2, 'lab_d3_sdmf2' => $value->lab_d3_sdmf2, 'lab_d2_sdmf2' => $value->lab_d2_sdmf2, 'lab_d1_sdmf2' => $value->lab_d1_sdmf2, 'lab_sma_sdmf2' => $value->lab_sma_sdmf2, 'lab_unit_sdmf2' => $value->lab_unit_sdmf2, 'admin_s3_sdmf2' => $value->admin_s3_sdmf2, 'admin_s2_sdmf2' => $value->admin_s2_sdmf2, 'admin_s1_sdmf2' => $value->admin_s1_sdmf2, 'admin_d4_sdmf2' => $value->admin_d4_sdmf2, 'admin_d3_sdmf2' => $value->admin_d3_sdmf2, 'admin_d2_sdmf2' => $value->admin_d2_sdmf2, 'admin_d1_sdmf2' => $value->admin_d1_sdmf2, 'admin_sma_sdmf2' => $value->admin_sma_sdmf2, 'admin_unit_sdmf2' => $value->admin_unit_sdmf2, 'ktu_s3_sdmf2' => $value->ktu_s3_sdmf2, 'ktu_s2_sdmf2' => $value->ktu_s2_sdmf2, 'ktu_s1_sdmf2' => $value->ktu_s1_sdmf2, 'ktu_d4_sdmf2' => $value->ktu_d4_sdmf2, 'ktu_d3_sdmf2' => $value->ktu_d3_sdmf2, 'ktu_d2_sdmf2' => $value->ktu_d2_sdmf2, 'ktu_d1_sdmf2' => $value->ktu_d1_sdmf2, 'ktu_sma_sdmf2' => $value->ktu_sma_sdmf2, 'ktu_unit_sdmf2' => $value->ktu_unit_sdmf2, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('sdmf2')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdmf2.index');
    }

public function sdmf2Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmkf2 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $sdmf2 = DB::table('sdmf2')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf2', 'desc')
                        ->get();
 
        $sdmkf2Data = "";
 
        if(count($sdmf2) >0 ){
            $sdmkf2Data .= '
           <table>
            <tr>
             <th colspan="13" style="text-align: left"><font face="Arial" size="2.5">
                Statistik Dosen Tetap menurut Jabatan Fungsional dan Program Studi </th>
           </tr>
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">No.</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Hal</th>
                     <th colspan="9" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Jumlah Dosen Tetap yang Bertugas pada Program Studi:</th>
                     <th style="border: 1px solid #000; border-bottom: 0px; padding: 5px; background-color:#daeef3; text-align: center;" >Total di</th>
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-1<br>G1</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-2<br>G2</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-3<br>G3</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-4<br>G4</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-5<br>G5</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-6<br>G6</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-7<br>G7</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-8<br>G8</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >PS-9<br>G9</th>
                     <th style="border: 1px solid #000; border-top: 0px; padding: 5px; background-color:#daeef3; text-align: center;" >Fakultas</th>
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
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;12&nbsp;)</th>
                   </tr>';
                   foreach ($sdmf2 as $sdmf2) {
                    $sdmkf2Data .= '
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">A</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: left;">Jabatan Fungsional :</th>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">0</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Dosen PNS/CPNS*</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pustakawan_s3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pustakawan_s2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pustakawan_s1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pustakawan_d4_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pustakawan_d3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pustakawan_d2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pustakawan_d1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pustakawan_sma_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pustakawan_unit_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pustakawan_s3_sdmf2+$sdmf2->pustakawan_s2_sdmf2+$sdmf2->pustakawan_s1_sdmf2+$sdmf2->pustakawan_d4_sdmf2+$sdmf2->pustakawan_d3_sdmf2+$sdmf2->pustakawan_d2_sdmf2+$sdmf2->pustakawan_d1_sdmf2+$sdmf2->pustakawan_sma_sdmf2+$sdmf2->pustakawan_unit_sdmf2) . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Asisten Ahli</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->lab_s3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->lab_s2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->lab_s1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->lab_d4_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->lab_d3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->lab_d2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->lab_d1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->lab_sma_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->lab_unit_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->lab_s3_sdmf2+$sdmf2->lab_s2_sdmf2+$sdmf2->lab_s1_sdmf2+$sdmf2->lab_d4_sdmf2+$sdmf2->lab_d3_sdmf2+$sdmf2->lab_d2_sdmf2+$sdmf2->lab_d1_sdmf2+$sdmf2->lab_sma_sdmf2+$sdmf2->lab_unit_sdmf2) . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Lektor</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->admin_s3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->admin_s2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->admin_s1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->admin_d4_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->admin_d3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->admin_d2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->admin_d1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->admin_sma_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->admin_unit_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->admin_s3_sdmf2+$sdmf2->admin_s2_sdmf2+$sdmf2->admin_s1_sdmf2+$sdmf2->admin_d4_sdmf2+$sdmf2->admin_d3_sdmf2+$sdmf2->admin_d2_sdmf2+$sdmf2->admin_d1_sdmf2+$sdmf2->admin_sma_sdmf2+$sdmf2->admin_unit_sdmf2) . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Lektor Kepala</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->ktu_s3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->ktu_s2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->ktu_s1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->ktu_d4_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->ktu_d3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->ktu_d2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->ktu_d1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->ktu_sma_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->ktu_unit_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->ktu_s3_sdmf2+$sdmf2->ktu_s2_sdmf2+$sdmf2->ktu_s1_sdmf2+$sdmf2->ktu_d4_sdmf2+$sdmf2->ktu_d3_sdmf2+$sdmf2->ktu_d2_sdmf2+$sdmf2->ktu_d1_sdmf2+$sdmf2->ktu_sma_sdmf2+$sdmf2->ktu_unit_sdmf2) . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">4</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">Guru Besar/Profesor</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->profesor_s3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->profesor_s2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->profesor_s1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->profesor_d4_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->profesor_d3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->profesor_d2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->profesor_d1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->profesor_sma_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->profesor_unit_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->profesor_s3_sdmf2+$sdmf2->profesor_s2_sdmf2+$sdmf2->profesor_s1_sdmf2+$sdmf2->profesor_d4_sdmf2+$sdmf2->profesor_d3_sdmf2+$sdmf2->profesor_d2_sdmf2+$sdmf2->profesor_d1_sdmf2+$sdmf2->profesor_sma_sdmf2+$sdmf2->profesor_unit_sdmf2) . '</td>
                   </tr>

                   <tr>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">Total</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pustakawan_s3_sdmf2+$sdmf2->lab_s3_sdmf2+$sdmf2->admin_s3_sdmf2+$sdmf2->ktu_s3_sdmf2+$sdmf2->profesor_s3_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pustakawan_s2_sdmf2+$sdmf2->lab_s2_sdmf2+$sdmf2->admin_s2_sdmf2+$sdmf2->ktu_s2_sdmf2+$sdmf2->profesor_s2_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pustakawan_s1_sdmf2+$sdmf2->lab_s1_sdmf2+$sdmf2->admin_s1_sdmf2+$sdmf2->ktu_s1_sdmf2+$sdmf2->profesor_s1_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pustakawan_d4_sdmf2+$sdmf2->lab_d4_sdmf2+$sdmf2->admin_d4_sdmf2+$sdmf2->ktu_d4_sdmf2+$sdmf2->profesor_d4_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pustakawan_d3_sdmf2+$sdmf2->lab_d3_sdmf2+$sdmf2->admin_d3_sdmf2+$sdmf2->ktu_d3_sdmf2+$sdmf2->profesor_d3_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pustakawan_d2_sdmf2+$sdmf2->lab_d2_sdmf2+$sdmf2->admin_d2_sdmf2+$sdmf2->ktu_d2_sdmf2+$sdmf2->profesor_d2_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pustakawan_d1_sdmf2+$sdmf2->lab_d1_sdmf2+$sdmf2->admin_d1_sdmf2+$sdmf2->ktu_d1_sdmf2+$sdmf2->profesor_d1_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pustakawan_sma_sdmf2+$sdmf2->lab_sma_sdmf2+$sdmf2->admin_sma_sdmf2+$sdmf2->ktu_sma_sdmf2+$sdmf2->profesor_sma_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pustakawan_unit_sdmf2+$sdmf2->lab_unit_sdmf2+$sdmf2->admin_unit_sdmf2+$sdmf2->ktu_unit_sdmf2+$sdmf2->profesor_unit_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pustakawan_s3_sdmf2+$sdmf2->lab_s3_sdmf2+$sdmf2->admin_s3_sdmf2+$sdmf2->ktu_s3_sdmf2+$sdmf2->profesor_s3_sdmf2+$sdmf2->pustakawan_s2_sdmf2+$sdmf2->lab_s2_sdmf2+$sdmf2->admin_s2_sdmf2+$sdmf2->ktu_s2_sdmf2+$sdmf2->profesor_s2_sdmf2+$sdmf2->pustakawan_s1_sdmf2+$sdmf2->lab_s1_sdmf2+$sdmf2->admin_s1_sdmf2+$sdmf2->ktu_s1_sdmf2+$sdmf2->profesor_s1_sdmf2+$sdmf2->pustakawan_d4_sdmf2+$sdmf2->lab_d4_sdmf2+$sdmf2->admin_d4_sdmf2+$sdmf2->ktu_d4_sdmf2+$sdmf2->profesor_d4_sdmf2+$sdmf2->pustakawan_d3_sdmf2+$sdmf2->lab_d3_sdmf2+$sdmf2->admin_d3_sdmf2+$sdmf2->ktu_d3_sdmf2+$sdmf2->profesor_d3_sdmf2+$sdmf2->pustakawan_d2_sdmf2+$sdmf2->lab_d2_sdmf2+$sdmf2->admin_d2_sdmf2+$sdmf2->ktu_d2_sdmf2+$sdmf2->profesor_d2_sdmf2+$sdmf2->pustakawan_d1_sdmf2+$sdmf2->lab_d1_sdmf2+$sdmf2->admin_d1_sdmf2+$sdmf2->ktu_d1_sdmf2+$sdmf2->profesor_d1_sdmf2+$sdmf2->pustakawan_sma_sdmf2+$sdmf2->lab_sma_sdmf2+$sdmf2->admin_sma_sdmf2+$sdmf2->ktu_sma_sdmf2+$sdmf2->profesor_sma_sdmf2+$sdmf2->pustakawan_unit_sdmf2+$sdmf2->lab_unit_sdmf2+$sdmf2->admin_unit_sdmf2+$sdmf2->ktu_unit_sdmf2+$sdmf2->profesor_unit_sdmf2) . '</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">B</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: left;">Pendidikan Tertinggi :</th>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;"></td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">S1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts1_s3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts1_s2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts1_s1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts1_d4_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts1_d3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts1_d2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts1_d1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts1_sma_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts1_unit_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts1_s3_sdmf2+$sdmf2->pts1_s2_sdmf2+$sdmf2->pts1_s1_sdmf2+$sdmf2->pts1_d4_sdmf2+$sdmf2->pts1_d3_sdmf2+$sdmf2->pts1_d2_sdmf2+$sdmf2->pts1_d1_sdmf2+$sdmf2->pts1_sma_sdmf2+$sdmf2->pts1_unit_sdmf2) . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">S2/Profesi/Sp-1</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts2_s3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts2_s2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts2_s1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts2_d4_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts2_d3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts2_d2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts2_d1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts2_sma_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts2_unit_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts2_s3_sdmf2+$sdmf2->pts2_s2_sdmf2+$sdmf2->pts2_s1_sdmf2+$sdmf2->pts2_d4_sdmf2+$sdmf2->pts2_d3_sdmf2+$sdmf2->pts2_d2_sdmf2+$sdmf2->pts2_d1_sdmf2+$sdmf2->pts2_sma_sdmf2+$sdmf2->pts2_unit_sdmf2) . '</td>
                   </tr>

                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">3</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">S3/Sp-2</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts3_s3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts3_s2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts3_s1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts3_d4_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts3_d3_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts3_d2_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts3_d1_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts3_sma_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $sdmf2->pts3_unit_sdmf2 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts3_s3_sdmf2+$sdmf2->pts3_s2_sdmf2+$sdmf2->pts3_s1_sdmf2+$sdmf2->pts3_d4_sdmf2+$sdmf2->pts3_d3_sdmf2+$sdmf2->pts3_d2_sdmf2+$sdmf2->pts3_d1_sdmf2+$sdmf2->pts3_sma_sdmf2+$sdmf2->pts3_unit_sdmf2) . '</td>
                   </tr>

                   <tr>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;">Total</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts3_s3_sdmf2+$sdmf2->pts2_s3_sdmf2+$sdmf2->pts1_s3_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts3_s2_sdmf2+$sdmf2->pts2_s2_sdmf2+$sdmf2->pts1_s2_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts3_s1_sdmf2+$sdmf2->pts2_s1_sdmf2+$sdmf2->pts1_s1_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts3_d4_sdmf2+$sdmf2->pts2_d4_sdmf2+$sdmf2->pts1_d4_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts3_d3_sdmf2+$sdmf2->pts2_d3_sdmf2+$sdmf2->pts1_d3_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts3_d2_sdmf2+$sdmf2->pts2_d2_sdmf2+$sdmf2->pts1_d2_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts3_d1_sdmf2+$sdmf2->pts2_d1_sdmf2+$sdmf2->pts1_d1_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts3_sma_sdmf2+$sdmf2->pts2_sma_sdmf2+$sdmf2->pts1_sma_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts3_unit_sdmf2+$sdmf2->pts2_unit_sdmf2+$sdmf2->pts1_unit_sdmf2) . '</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">' . ($sdmf2->pts3_s3_sdmf2+$sdmf2->pts2_s3_sdmf2+$sdmf2->pts1_s3_sdmf2+$sdmf2->pts3_s2_sdmf2+$sdmf2->pts2_s2_sdmf2+$sdmf2->pts1_s2_sdmf2+$sdmf2->pts3_s1_sdmf2+$sdmf2->pts2_s1_sdmf2+$sdmf2->pts1_s1_sdmf2+$sdmf2->pts3_d4_sdmf2+$sdmf2->pts2_d4_sdmf2+$sdmf2->pts1_d4_sdmf2+$sdmf2->pts3_d3_sdmf2+$sdmf2->pts2_d3_sdmf2+$sdmf2->pts1_d3_sdmf2+$sdmf2->pts3_d2_sdmf2+$sdmf2->pts2_d2_sdmf2+$sdmf2->pts1_d2_sdmf2+$sdmf2->pts3_d1_sdmf2+$sdmf2->pts2_d1_sdmf2+$sdmf2->pts1_d1_sdmf2+$sdmf2->pts3_sma_sdmf2+$sdmf2->pts2_sma_sdmf2+$sdmf2->pts1_sma_sdmf2+$sdmf2->pts3_unit_sdmf2+$sdmf2->pts2_unit_sdmf2+$sdmf2->pts1_unit_sdmf2) . '</th>
                   </tr>';
            }
            $sdmkf2Data .='</table>
             <td style="text-align: left; font-size: 16px"><strong>Keterangan :</strong></td>
             <br>
             <td style="text-align: left; font-size: 16px">PS1 G1 &minus; Statistika, PS2 G2 &minus; Meteorologi Terapan, PS3 G3 &minus; Biologi, PS4 G4 &minus; Kimia, </td>
             <br>
             <td style="text-align: left; font-size: 16px">PS5 G5 &minus; Matematika, PS6 G6 &minus; Ilmu Komputer, PS7 G7 &minus; Fisika, PS8 G8 &minus; Biokimia, </td>
             <br>
             <td style="text-align: left; font-size: 16px">PS9 G9 &minus; Aktuaria, *dosen PNS/CPNS yang belum punya jabatan fungsional, </td>';

        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=SDM 4.1.1.xls');
        echo $sdmkf2Data;
    }
    public function excelSdmf2()
    {
        $sdmf2s = DB::table('sdmf2')->get();

        $sdmkf2Data = "";

        if(count($sdmf2s) >0 ){
            $sdmkf2Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdmf2s as $sdmf2) {
                $sdmkf2Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdmf2->pustakawan_s1_sdmf2.'</td>
                <td style= "border: 1px solid black">'.$sdmf2->tahun_sdmf2.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmkf2Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmkf2Data;
    }

    
     public function sdmf2Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmkf2 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $sdmf2s = Sdmf2::whereBetween('tahun_sdmf2', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf2', 'desc')
                        ->get();
        $pdf = PDF::loadView('sdmf2.pdf', compact('sdmf2s','sdmkf2'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdmf2(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmkf2 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $sdmf2s = Sdmf2::whereBetween('tahun_sdmf2', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_sdmf2', 'desc')
                        ->get();
        $pdf = PDF::loadView('sdmf2.pdfm', compact('sdmf2s','sdmkf2'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
