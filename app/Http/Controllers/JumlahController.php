<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jumlah;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $jumlahs = DB::table('jumlahs')->where('id_departemen', $id_departemen)->get();
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
     public function edit(Jumlah $member)
    {
        // dd($member);
        return view('jumlah.edit',compact('jumlah'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'tipe' => 'required',
            'jenis_mahasiwa' => 'required',
            'jumlah_mahasiwa' => 'required',
            'tahun' => 'required',
            // 'id_departemen' => 'required',
        ]);
        $jumlah->update($request->all());
        return redirect()->route('jumlah.index')
                        ->with('success','Jumlah updated successfully');
    }
    public function destroy($id)
    {
        Jumlah::destroy($id);
        return redirect()->route('jumlah.index')
                        ->with('success','Jumlah deleted successfully');
    }


}
