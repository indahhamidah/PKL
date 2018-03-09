<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Jumlah;

class ExcelJumController extends Controller

{

	public function importExport()
    {
        return view('importExport');
    }


    /**
     * File Export Code
     *
     * @var array
     */
    public function downloadExcel(Request $request, $type)
    {
        $data = Jumlah::get()->toArray();
        return Jumlah::create('itsolutionstuff_example', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }


    /**
     * Import file into database Code
     *
     * @var array
     */
    public function importExcel(Request $request)
    {
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            $data = Jumlah::load($path, function($reader) {})->get();
            if(!empty($data) && $data->count()){
                foreach ($data->toArray() as $key => $value) {
                    if(!empty($value)){
                        foreach ($value as $v) {        
                            $insert[] = ['tipe' => $v['tipe'], 'jenis_mahasiswa' => $v['jenis_mahasiswa'], 'jumlah_mahasiswa' => $v['jumlah_mahasiswa'], 'tahun'=>['tahun']];
                        }
                    }
                }

                
                if(!empty($insert)){
                    Jumlah::insert($insert);
                    return back()->with('success','Insert Record successfully.');
                }
            }
        }
        return back()->with('error','Please Check your file, Something is wrong there.');
    }

}
