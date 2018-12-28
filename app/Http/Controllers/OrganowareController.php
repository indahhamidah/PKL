<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Departemen;
use App\Organoware;
use App\Netware;
use App\PenjelasanOrganoware;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Carbon\Carbon;

class OrganowareController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        
        $organoware = Organoware::join('departemen', 'id_dept', '=', 'id_departemen')
                                ->where('id_departemen', $id_departemen)
                                ->get();

        $netware=DB::table('netware')->join('departemen', 'id_dept', '=', 'id_departemen')
                                    ->where('id_departemen', $id_departemen)
                                    ->orderBy('id_netware', 'desc')
                                    ->first();
        $penjelasan=PenjelasanOrganoware::join('departemen', 'id_dept', '=', 'id_departemen')
                                        ->where('id_departemen', $id_departemen)
                                        ->get();
                
		
        return view('SistemInformasi/Organoware', compact('organoware', 'dept', 'netware', 'penjelasan'));    	
    }

    public function create()
    {
    	
    }

    public function store (Request $request)
    {
    	request()->validate([
            'nama_organoware' => 'required',
            'dokumen' => 'required|mimes:pdf,docs,doc|max:10000',
            'awal_renstra'=>'required',
            'akhir_renstra'=>'required',
        ]); 
        
        $organoware=new Organoware;
        $organoware->nama_organoware=$request->nama_organoware;
        $organoware->awal_renstra=$request->awal_renstra;
        $organoware->akhir_renstra=$request->akhir_renstra;
        if($request->hasFile('dokumen')){
            $dokumen = $request->file('dokumen');
            $path= public_path().'/images/organoware/';
            $filename=$dokumen->getClientOriginalName();
            $dokumen->move($path,$filename);
            $organoware->dokumen=$filename;
         }
        $organoware->id_departemen= $request->user()->id_departemen;
        $organoware->save();
        $notification = array(
                'message' => 'Data Organoware Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Organoware.store')
                        ->with($notification);
    }

    public function update (Request $request, $member)
    {
        request()->validate([
            'nama_organoware' => 'required',
            'dokumen' => 'required|mimes:pdf,docs,doc|max:10000',
            'awal_renstra'=>'required',
            'akhir_renstra'=>'required',
        ]); 
        
        $organoware=Organoware::find($member);
        $organoware->nama_organoware=$request->nama_organoware;
        $organoware->awal_renstra=$request->awal_renstra;
        $organoware->akhir_renstra=$request->akhir_renstra;
        if($request->hasFile('dokumen')){
            $dokumen = $request->file('dokumen');
            $path= public_path().'/images/organoware/';
            $filename=$dokumen->getClientOriginalName();
            $dokumen->move($path,$filename);
            $organoware->dokumen=$filename;
         }
        $organoware->id_departemen= $request->user()->id_departemen;
        $organoware->save();
        $notification = array(
                'message' => 'Data Organoware Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Organoware.index')
                        ->with($notification);
    } 

    public function update_penjelasan(Request $request)
    {
        $user = auth()->user();
        $penjelasan_= PenjelasanOrganoware::where("id_departemen", $user->id_departemen)->get();
        foreach ($penjelasan_ as $key => $data) {
            $penjelasan = PenjelasanOrganoware::where("id_penjelasan", $data->id_penjelasan)->first();
            $penjelasan ->penjelasan = $request->penjelasan;
            $penjelasan ->save();
        }
        $notification = array(
                'message' => 'Penjelasan Organoware Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Organoware.index')
                        ->with($notification);
    }

    public function destroy($id_organoware)
    {
        Organoware::destroy($id_organoware);
        $notification = array(
                'message' => 'Data Organoware Berhasil dihapus!',
                'alert-type' => 'warning'
            );
        return redirect()->route('Organoware.index')
                        ->with($notification);
    }

    public function uploadgbr (Request $request)
    {
         request()->validate([
            'gambar_net' => 'required|image',
        ]);

        $netware=new Netware;
        $netware->id_departemen= $request->user()->id_departemen;
        if($request->hasFile('gambar_net')){
            $gambar_net = $request->file('gambar_net');
            $path= public_path().'/images/netware/';
            $filename=$gambar_net->getClientOriginalName();
            $gambar_net->move($path,$filename);
            $netware->gambar_net=$filename;
         }
         
        $netware->save();
        $notification = array(
                'message' => 'Gambar Netware Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Organoware.index')
                        ->with($notification);
    }
//download pdf user
     
}
