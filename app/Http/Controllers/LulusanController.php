<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lulusan;

class LulusanController extends Controller
{
    public function index()
    {

        $lulusans = Lulusan::latest()->paginate(10);
        // dd($penerimaans);
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
        ]);
        Lulusan::create($request->all());
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

