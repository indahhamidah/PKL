<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rencana_Pengembangan_SI;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Departemen;
use App\User;

class RencanaPengembanganSIController extends Controller
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

        $rencana_pengembangan=Rencana_Pengembangan_SI::join('departemen', 'id_dept', '=', 'id_departemen')
                                   ->where('id_departemen', $id_departemen)
                                   ->get();
        // dd($kelola_dana);
        return view('SistemInformasi/Rencana_Pengembangan_SI',compact('dept', 'rencana_pengembangan'))
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
        $rencana_pengembangan_= Rencana_Pengembangan_SI::where("id_departemen", $user->id_departemen)->get();
        foreach ($rencana_pengembangan_ as $key => $data) {
            $rencana_pengembangan = Rencana_Pengembangan_SI::where("id_rencana", $data->id_rencana)->first();
            $rencana_pengembangan ->rencana = $request->rencana;
            $rencana_pengembangan ->save();
        }
        $notification = array(
                'message' => 'Data Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Rencana_Pengembangan_S_I.index')
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
