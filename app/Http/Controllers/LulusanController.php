<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lulusan;
use App\User;
use App\Departemen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class LulusanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        if(Auth::user()->id_departemen==10){
            $lulusans = DB::table('lulusans')
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->get();  
            // $selangtahun=DB::table('lulusans')
            //                 ->wherebetween(whereYear('tahun_lulus', Lulusan::today()),whereYear('tahun_lulus',))
                            
            $ratabulan=DB::table('lulusans')->avg('total_bulan');
            $ratatahun=DB::table('lulusans')->avg('total_tahun');
            $rataipk=DB::table('lulusans')->avg('ipk');
        }
        else{
        $lulusans = DB::table('lulusans')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)->get();
        $ratabulan=DB::table('lulusans')->join('departemen', 'id_dept', '=', 'id_departemen')
                                    ->where('id_departemen', $id_departemen)->avg('total_bulan');
        $ratatahun=DB::table('lulusans')->join('departemen', 'id_dept', '=', 'id_departemen')
                                    ->where('id_departemen', $id_departemen)->avg('total_tahun');
        $rataipk=DB::table('lulusans')->join('departemen', 'id_dept', '=', 'id_departemen')
                                    ->where('id_departemen', $id_departemen)->avg('ipk');
        }
        return view('lulusan.index',compact('lulusans','ratabulan','ratatahun','rataipk'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'nim' => 'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'total_bulan' => 'required',
            'total_tahun' => 'required',
            'ipk' => 'required',
        ]);
        
        $lulusans=new Lulusan;
        $lulusans->nama = $request->nama;
        $lulusans->nim = $request->nim;
        $lulusans->tahun_masuk = $request->tahun_masuk;
        $lulusans->tahun_lulus = $request->tahun_lulus;
        $lulusans->total_bulan = $request->total_bulan;
        $lulusans->total_tahun = $request->total_tahun;
        $lulusans->ipk = $request->ipk;
        $lulusans->id_departemen= $request->user()->id_departemen;

        $lulusans->save();
        return redirect()->route('lulusan.index')
                        ->with('success','Lulusan created successfully');
    }
     public function edit($id_lulusan)
    {
        // dd($member);
        return view('lulusan.index',compact('lulusan'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama' => 'required',
            'nim' => 'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'total_bulan' => 'required',
            'total_tahun' => 'required',
            'ipk' => 'required',
            // 'id_departemen' => 'required',
        ]);
        $lulusan = Lulusan::find($member);
        $lulusan->update($request->all());
        return redirect()->route('lulusan.index')
                        ->with('success','Lulusan updated successfully');
    }
    public function destroy($id_lulusan)
    {
        Lulusan::destroy($id_lulusan);
        return redirect()->route('lulusan.index')
                        ->with('success','Lulusan deleted successfully');
    }

    public function LulusanImport(Request $request){
    if($request->hasFile('import_file')){ 
    $path = $request->file('import_file')->getRealPath();
    $data = Excel::load($path, function($reader) {})->get();
    if(!empty($data) && $data->count()){
        foreach ($data as $key => $value) {
            $insert[] = ['nama' => $value->nama, 'nim' => $value->nim, 'tahun_masuk' => $value->tahun_masuk, 'tahun_lulus' => $value->tahun_lulus, 'total_bulan' =>$value->total_bulan, 'total_tahun' =>$value->total_tahun, 'ipk' =>$value->ipk, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('lulusans')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('lulusan.index');
    }

// nyoba
    
}

