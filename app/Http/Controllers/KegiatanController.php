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
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function create()
    {
        return view('kegiatan.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        request()->validate([
            'kegiatan' => 'required',
            'kegiatan' => 'required',
        ]);
        Kegiatan::create($request->all());
        return redirect()->route('kegiatan.index')
                        ->with('success','Kegiatan created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $member)
    {
        return view('kegiatan.show',compact('kegiatan'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $member)
    {
        return view('kegiatan.edit',compact('kegiatan'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Kegiatan $member)
    {
        request()->validate([
            'kegiatan' => 'required',
            'tahun' => 'required',
        ]);
        $kegiatan->update($request->all());
        return redirect()->route('kegiatan.index')
                        ->with('success','Kegiatan updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kegiatan::destroy($id);
        return redirect()->route('kegiatan.index')
                        ->with('success','Kegiatan deleted successfully');
    }
}

