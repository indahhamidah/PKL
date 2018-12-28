<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\Komersial;
use App\Hologram;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class KomersialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $pl_komersiall = Komersial::join('departemen', 'id_dept', '=', 'id_departemen')
                                    ->where('id_departemen', $id_departemen)
                                    ->get();
        $hologramm=Hologram::join('departemen', 'id_dept', '=', 'id_departemen')
                           ->where('id_departemen', $id_departemen)
                           ->orderBy('id_hologram', 'desc')
                           ->first();
        // dd($hologramm);
		return view('SistemInformasi/komersial', compact('pl_komersiall','dept', 'hologramm'));    	
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
        request()->validate([
            'nama_imovses' => 'required',
            
        ]);

        $pl_komersiall =new Komersial;
        $pl_komersiall ->nama_imovses = $request->nama_imovses;
        $pl_komersiall->id_departemen= $request->user()->id_departemen;
         
        $pl_komersiall->save();
        $notification = array(
                'message' => 'Perangkat Lunak IMOVSES Berhasil Ditambahkan!',
                'alert-type' => 'success'
            );
        return redirect()->route('PL_Komersial.store')
                        ->with($notification);    	 
    	 
    }

    public function update (Request $request, $member)
    {
        request()->validate([
            'nama_imovses' => 'required',
            
        ]);

        $pl_komersiall =Komersial::find($member);
        $pl_komersiall ->nama_imovses = $request->nama_imovses;
        $pl_komersiall->id_departemen= $request->user()->id_departemen;
         
        $pl_komersiall->save();
        $notification = array(
                'message' => 'Perangkat Lunak IMOVSES Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('PL_Komersial.index')
                        ->with($notification);
    }

    public function destroy($id_kerjasama_imovses)
    {
        Komersial::destroy($id_kerjasama_imovses);
        $notification = array(
                'message' => 'Perangkat Lunak IMOVSES Berhasil Dihapus!',
                'alert-type' => 'warning'
            );
        return redirect()->route('PL_Komersial.index')
                        ->with($notification);
    }

    public function uploadgbr2 (Request $request)
    {
         request()->validate([
            'gambar_hologram' => 'required|image',
        ]);

        $hologramm=new Hologram;
        $hologramm->id_departemen= $request->user()->id_departemen;
        if($request->hasFile('gambar_hologram')){
            $gambar_hologram = $request->file('gambar_hologram');
            $path= public_path().'/images/imovses/';
            $filename=$gambar_hologram->getClientOriginalName();
            $gambar_hologram->move($path,$filename);
            $hologramm->gambar_hologram=$filename;
         }
         
        $hologramm->save();
        $notification = array(
                'message' => 'Gambar IMOVSES Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('PL_Komersial.index')
                        ->with($notification);
         // dd ($hologramm->gambar_hologram);

    }
}
