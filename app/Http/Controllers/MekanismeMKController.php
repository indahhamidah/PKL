<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MekanismeMK;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Departemen;
use App\User;
use PDF;

class MekanismeMKController extends Controller
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

        $mekanisme=MekanismeMK::where('id_departemen', $id_departemen)->get();
        
        // dd($kelola_dana);
        return view('Pembelajaran/Mekanisme_Susun_MK',compact('dept', 'mekanisme'))
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
    public function update_mekanisme(Request $request)
    {
        $user = auth()->user();
        $mekanisme_= MekanismeMK::where("id_departemen", $user->id_departemen)->get();
        foreach ($mekanisme_ as $key => $data) {
            $mekanisme = MekanismeMK::where("id_mekanisme", $data->id_mekanisme)->first();
            $mekanisme ->mekanisme = $request->mekanisme;
            $mekanisme ->save();
        }
        $notification = array(
                'message' => 'Data Berhasil Diubah!',
                'alert-type' => 'success'
            );
        return redirect()->route('Mekanisme_Susun_MK.index')
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

    public function download_pdf_mekanisme(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;

        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
 
        $mekanisme=MekanismeMK::where('id_departemen', $id_departemen)->get();
        
        $pdf = PDF::loadView('Pembelajaran/Pdf_Mekanisme', compact('mekanisme', 'dept'));
        $pdf ->setPaper('a4', 'potrait');
        // $pdf ->setMargins(3, 4, 3);
        return $pdf->stream('Mekanisme Perkuliahan '.$dept[0]->nama_departemen.'.pdf', array('Attachment'=>1));
    }
}
