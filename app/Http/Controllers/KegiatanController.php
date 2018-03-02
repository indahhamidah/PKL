<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;

class KegiatanController extends Controller
{
    public function index()
    {

        $kegiatan = Kegiatan::latest()->paginate(10);
        return view('kegiatan.index',compact('kegiatan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_kegiatan' => 'required',
            'tahun_kegiatan' => 'required',
        ]);
        Kegiatan::create($request->all());
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
        ]);
        $kegiatan->update($request->all());
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
