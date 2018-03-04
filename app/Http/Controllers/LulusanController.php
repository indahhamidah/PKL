<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lulusan;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LulusanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        // $lulusans = Lulusan::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        $lulusans = DB::table('lulusans')->where('id_departemen', $id_departemen)->get();
        return view('lulusan.index',compact('lulusans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
            // 'id_departemen' => 'required',
        ]);
        // Lulusan::create($request->all());
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
     public function edit(Lulusan $member)
    {
        // dd($member);
        return view('lulusan.edit',compact('lulusan'));
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
}

