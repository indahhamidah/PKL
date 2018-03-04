<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class KegiatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        // $kegiatan = Kegiatan::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        $kegiatan = DB::table('kegiatan')->where('id_departemen', $id_departemen)->get();

        return view('kegiatan.index',compact('kegiatan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_kegiatan' => 'required',
            'tahun_kegiatan' => 'required',
            // 'id_departemen' => 'required',
        ]);
        // Kegiatan::create($request->all());
        $kegiatan=new Kegiatan;
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->tahun_kegiatan = $request->tahun_kegiatan;
        $kegiatan->id_departemen= $request->user()->id_departemen;

        $kegiatan->save();
        return redirect()->route('kegiatan.index')
                        ->with('success','Kegiatan created successfully');
    }
     public function edit(Jumlah $member)
    {
        // dd($member);
        return view('kegiatan.edit',compact('kegiatan'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_kegiatan' => 'required',
            'tahun_kegiatan' => 'required',
            'id_departemen' => 'required',
        ]);
        // $kegiatan->update($request->all());
        $kegiatan=new Kegiatan;
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->tahun_kegiatan = $request->tahun_kegiatan;
        $kegiatan->id_departemen= $request->user()->id_departemen;

        $kegiatan->save();
        return redirect()->route('kegiatan.index')
                        ->with('success','Kegiatan updated successfully');
    }
    public function destroy($id_kegiatan)
    {
        Kegiatan::destroy($id_kegiatan);
        return redirect()->route('kegiatan.index')
                        ->with('success','Kegiatan deleted successfully');
    }


}
