<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Penerimaan;
class PenerimaanController extends Controller
{
    public function index()
    {

        $penerimaans = Penerimaan::latest()->paginate(10);
        // dd($penerimaans);
        return view('penerimaans.index',compact('penerimaans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerimaans.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        request()->validate([
            'tipe' => 'required',
            'jenis_mahasiswa' => 'required',
            'jumlah_mahasiswa' => 'required',
            'tahun' => 'required',
        ]);
        Penerimaan::create($request->all());
        return redirect()->route('penerimaans.index')
                        ->with('success','Penerimaan created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penerimaan $member)
    {
        return view('penerimaans.show',compact('penerimaan'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerimaan $member)
    {
        // dd($member);
        return view('penerimaans.edit',compact('penerimaan'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $member)
    {
        dd($request);
        request()->validate([
            'tipe' => 'required',
            'jenis_mahasiwa' => 'required',
            'jumlah_mahasiwa' => 'required',
            'tahun' => 'required',
        ]);
        $penerimaan->update($request->all());
        return redirect()->route('penerimaans.index')
                        ->with('success','Penerimaan updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penerimaan::destroy($id);
        return redirect()->route('penerimaans.index')
                        ->with('success','Penerimaan deleted successfully');
    }

}