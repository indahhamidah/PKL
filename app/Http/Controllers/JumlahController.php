<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jumlah;

class JumlahController extends Controller
{
 // public function index()
 //    {
	// $jumlahs = Jumlah::all();
 //    return view('jumlah.index')->with('jumlahs',$jumlahs);
 //    }
    
    public function index()
    {

        $jumlahs = Jumlah::latest()->paginate(10);
        // dd($penerimaans);
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
        ]);
        Jumlah::create($request->all());
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
