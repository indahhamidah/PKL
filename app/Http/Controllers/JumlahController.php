<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jumlah;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Input;

class JumlahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        // $lulusans = Lulusan::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10){
         $jumlahs = DB::table('jumlahs')->get();
     }
         else{
             $jumlahs = DB::table('jumlahs')->where('id_departemen', $id_departemen)->get();
         }
        return view('jumlah.index',compact('jumlahs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'tipe' => 'required',
            'jenis_mahasiswa' => 'required',
            'jumlah_mahasiswa' => 'required',
            'tahun' => 'required',
            // 'id_departemen' => 'required',
        ]);
        // Jumlah::create($request->all());
        $jumlahs=new Jumlah;
        $jumlahs->tipe = $request->tipe;
        $jumlahs->jenis_mahasiswa = $request->jenis_mahasiswa;
        $jumlahs->jumlah_mahasiswa = $request->jumlah_mahasiswa;
        $jumlahs->tahun = $request->tahun;
        $jumlahs->id_departemen= $request->user()->id_departemen;

        $jumlahs->save();
        return redirect()->route('jumlah.index')
                        ->with('success','Penerimaan created successfully');
    }
     public function edit($id_jumlah)
    {
        // dd($id_jumlah);
        return view('jumlah.index',compact('jumlah', 'page'));

    }
    
    public function update(Request $request, $member)
    {
        // dd($request->tipe, $request->jenis_mahasiswa, $request->jumlah_mahasiswa, $request->tahun);
        request()->validate([
            'tipe' => 'required',
            'jenis_mahasiswa' => 'required',
            'jumlah_mahasiswa' => 'required',
            'tahun' => 'required',
            // 'id_departemen' => 'required',
        ]);
        $jumlah = Jumlah::find($member);
        $jumlah->tipe = $request->tipe;
        $jumlah->jenis_mahasiswa = $request->jenis_mahasiswa;
        $jumlah->jumlah_mahasiswa = $request->jumlah_mahasiswa;
        $jumlah->tahun = $request->tahun;
        $jumlah->save();
        return redirect()->route('jumlah.index')
                        ->with('success','Jumlah updated successfully');
    }
    public function destroy($id_jumlah)
    {
        // dd($id_jumlah);
        Jumlah::destroy($id_jumlah);
        return redirect()->route('jumlah.index')
                        ->with('success','Jumlah deleted successfully');
    }

    public function jumlahImport(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tipe' => $value->tipe, 'jenis_mahasiswa' => $value->jenis_mahasiswa, 'jumlah_mahasiswa' => $value->jumlah_mahasiswa, 'tahun' => $value->tahun, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('jumlahs')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('jumlah.index');
    }
}