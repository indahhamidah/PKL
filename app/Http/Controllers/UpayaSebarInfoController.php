<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpayaSebarInfo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Departemen;
use App\User;

class UpayaSebarInfoController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
      // $id = $request->user()->id;
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $upaya_sebar=UpayaSebarInfo::join('departemen', 'id_dept', '=', 'id_departemen')
                                   ->where('id_departemen', $id_departemen)
                                   ->get();
        // dd($kelola_dana);
        return view('SistemInformasi/Upaya_Penyebaran_Info',compact('dept', 'upaya_sebar'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
    //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	// dd($request);
     //    //validate
     //    request()->validate([
     //        'id_jenis_penggunaan'=>'required',
     //        'tahun_penggunaan' => 'required',
     //        'jumlah_penggunaan_dana' => 'required',

     //    ]);
      
     //    $penggunaan_dana=new PenggunaanDana;
     //    $id_jenis_penggunaan_->id_jenis_penggunaan=$request->id_jenis_penggunaan;
     //    $penggunaan_dana ->jumlah_penggunaan_dana = $request->jumlah_penggunaan_dana;
     //    $penggunaan_dana->tahun_penggunaan = date("Y-m-d", strtotime(str_replace('-', '/', $request['tahun_penggunaan'])));
     //    $penggunaan_dana->id_departemen= $request->user()->id_departemen;
         
     //    $penggunaan_dana->save();
     //    return redirect()->route('PenggunaanDana.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request)
    {
        $user = auth()->user();
        // dd($request);
        // $akses_data= AksesibilitasData::find($member);
        $upaya_sebar_= UpayaSebarInfo::where("id_departemen", $user->id_departemen)->get();
        foreach ($upaya_sebar_ as $key => $data) {
            $upaya_sebar = UpayaSebarInfo::where("id_upaya", $data->id_upaya)->first();
            $upaya_sebar ->upaya_sebar = $request->upaya_sebar;
            $upaya_sebar ->save();
        }
        $notification = array(
                'message' => 'Data Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Upaya_Sebar_Info.index')
                        ->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
