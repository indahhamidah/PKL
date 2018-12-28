<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KerjasamaLuar;
use App\User;
use App\DokumenLuar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class KerjasamaLuarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        if(Auth::User()->id_departemen==10)
        {

            
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_mulai', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
            $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
            $dokumen_luar = DB::table('dokumen_luar')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->select('dokumen_luar.*', 'departemen.*')
                              ->get();
  
        }
        else
        {
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_mulai', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
            $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
            $dokumen_luar = DB::table('dokumen_luar')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('dokumen_luar.*', 'departemen.*')
                              ->get();
        }
            $listdept=DB::table('departemen')
                    ->get();
            return view('kerjasamaLuar/index',compact('kerjasamaLuar','dept', 'listdept', 'dokumen_luar'));
    }


    public function store(Request $request){
        request()->validate([
            'nama_instansi'     => 'required',
            'jenis_kegiatan'    => 'required',
            'tahun_mulai'       => 'required',
            'tahun_akhir'       => 'required',
            'jumlah_dana'       => 'required',
            'manfaat'           => 'required',
        ]);
        $id_departemen = $request->user()->id_departemen;
        $kerjasamaLuar = DB::table('kerjasama_luar')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_instansi', $request->nama_instansi)
                        ->where('jenis_kegiatan', $request->jenis_kegiatan)
                        ->where('tahun_mulai', $request->tahun_mulai)
                        ->where('tahun_akhir', $request->tahun_akhir)
                        ->first();

        if($kerjasamaLuar==null){
        $kerjasamaLuar=new KerjasamaLuar;
        $kerjasamaLuar->nama_instansi      = $request->nama_instansi;
        $kerjasamaLuar->jenis_kegiatan     = $request->jenis_kegiatan;
        $kerjasamaLuar->tahun_mulai        = $request->tahun_mulai;
        $kerjasamaLuar->tahun_akhir        = $request->tahun_akhir;
        $kerjasamaLuar->jumlah_dana       = $request->jumlah_dana;
        $kerjasamaLuar->manfaat            = $request->manfaat;
        $kerjasamaLuar->id_departemen  = $request->user()->id_departemen;
        
              
        $kerjasamaLuar->save();
        return redirect()->route('standar7kerjasamaluarnegeri.index')
                         ->with('message2','Data berhasil ditambahkan');
                       }else{
                      return redirect()->route('standar7kerjasamaluarnegeri.index')
                         ->with('message','Nama Instansi ada yang sama');
                       }
                            
    }

    public function edit($id_kerjasamaLuar)
    {
        // dd($member);
        return view('kerjasamaLuar/index',compact('kerjasamaLuar'));
    }
    
    public function update(Request $request, $member)
    {
        
        request()->validate([
           'nama_instansi'     => 'required',
            'jenis_kegiatan'    => 'required',
            'tahun_mulai'       => 'required',
            'tahun_akhir'       => 'required',
            'jumlah_dana'       => 'required',
            'manfaat'           => 'required',

            
        ]);
        $id_departemen = $request->user()->id_departemen;
         $kerjasamaLuar = DB::table('kerjasama_luar')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_instansi', $request->nama_instansi)
                        ->where('jenis_kegiatan', $request->jenis_kegiatan)
                        ->where('tahun_mulai', $request->tahun_mulai)
                        ->where('tahun_akhir', $request->tahun_akhir)
                        ->where('jumlah_dana', $request->jumlah_dana)
                        ->where('manfaat', $request->manfaat)
                        ->first();

        if($kerjasamaLuar==null){  
        $kerjasamaLuar = KerjasamaLuar::find($member);
        $kerjasamaLuar->nama_instansi      = $request->nama_instansi;
        $kerjasamaLuar->jenis_kegiatan     = $request->jenis_kegiatan;
        $kerjasamaLuar->tahun_mulai        = $request->tahun_mulai;
        $kerjasamaLuar->tahun_akhir        = $request->tahun_akhir;
        $kerjasamaLuar->jumlah_dana        = $request->jumlah_dana;
        $kerjasamaLuar->manfaat            = $request->manfaat;
        $kerjasamaLuar->id_departemen  = $request->user()->id_departemen;
        
              
        $kerjasamaLuar->save();
        return redirect()->route('standar7kerjasamaluarnegeri.index')
                         ->with('message2','Data berhasil diubah');
                       }else{
                       return redirect()->route('standar7kerjasamaluarnegeri.index')
                         ->with('message','Nama Instansi ada yang sama'); 
                       }
                            
    }
    
    public function destroy($id_kerjasamaLuar)
    {
        KerjasamaLuar::destroy($id_kerjasamaLuar);

        return redirect()->route('standar7kerjasamaluarnegeri.index')
                         ->with('message2','Data berhasil dihapus');
    }

        public function kerjasamaLuarImport(Request $request){
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = [ 'nama_instansi' => $value->nama_instansi, 
                               'jenis_kegiatan' => $value->jenis_kegiatan, 
                               'tahun_mulai' => $value->tahun_mulai, 
                               'tahun_akhir' => $value->tahun_akhir,
                               'jumlah_dana'=>$value->jumlah_dana, 
                               'manfaat' => $value->manfaat, 
                               'id_departemen' => $request->user()->id_departemen];
                }
                if(!empty($arr)){
                    \DB::table('kerjasama_luar')->insert($arr);
                   
                }
            }
        }
         // return redirect()->route('penelitian.index')->with('message2','Data berhasil diunggah');   
         return redirect()->back()
                          ->with('message2','Data berhasil diunggah'); 
    }

     public function kerjasamaLuarDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
                 $kerlu = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_mulai', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_mulai', 'asc')
                        ->get();
        $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
        $pdf = PDF::loadView('kerjasamaLuar.pdf', compact('kerjasamaLuar','kerlu'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function downloadkerjasamaLuar(Request $request){
        $id_departemen = Auth::user()->id_departemen;
                 $kerlu = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_mulai', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->orderBy('tahun_mulai', 'asc')
                        ->get();
        $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
        $pdf = PDF::loadView('kerjasamaLuar.pdfm', compact('kerjasamaLuar','kerlu'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function kerjasamaLuarExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $kerlu = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_mulai', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_mulai', 'asc')
                        ->get();
            $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
 
        $kerluData = "";
 
        if(count($kerjasamaLuar) >0 ){
            $kerluData .= '
            <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">Tabel 2.2</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Kerjasama dengan instansi luar negeri Program Studi '.$kerlu[0]->nama_departemen.'</font></td>
           </tr>
            <tr>
            <th></th>
            
            <th rowspan="4" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Nama Instansi</font></th>
            <th rowspan="4"  style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Jenis Kegiatan</font></th>
            <th rowspan="2" colspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Kurun Waktu Kerja Sama</font></th>
            <th rowspan="4" colspan="4" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Manfaat yang Telah Diperoleh</font></th>
          </tr>
          <tr>
            <tr>
            <th></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">Mulai</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">Akhir</font></th>
            </tr>
           </tr>
           <tr>
                <tr>
                  <th style="text-align: center" style="font-size:13px"></th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">1</th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">2</th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">3</th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">4</th>
                  <th colspan="4" style="border:1px solid #000;text-align: center" style="font-size:13px">(5)</th>
                  </tr>
            </tr>';
           foreach ($kerjasamaLuar as $kerjasamaluar) {
                $kerluData .= '
            <tr>
              <th></th>
              <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamaluar->nama_instansi.'</font></p></td>
              <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamaluar->jenis_kegiatan.'</font></p></td>
              <td colspan="1" align="center"style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.$kerjasamaluar->tahun_mulai.'</font></p></td>
              <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.$kerjasamaluar->tahun_akhir.'</font></p></td>
              <td colspan="4" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamaluar->manfaat.'</font></p></td>
            </tr>';
      }
             
            $kerluData .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename= Kegiatan Kerjasama dengan Instansi Luar Negeri '.$kerlu[0]->nama_departemen .'.xls');
        echo $kerluData;
    }

    public function excelKerjasamaLuar()
    {
      $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
      $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
      $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_mulai', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
      $kerjasamaLuar = KerjasamaLuar::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();

        $kerluData = "";

        if(count($kerjasamaLuar) >0 ){
            $kerluData .= '<table>
             <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">Tabel 7.2</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Kerjasama dengan instansi luar negeri Tingkat Fakultas</font></td>
           </tr>
            <tr>
            <th></th>
            
            <th rowspan="4" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Nama Instansi</font></th>
            <th rowspan="4"  style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Jenis Kegiatan</font></th>
            <th rowspan="2" colspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Kurun Waktu Kerja Sama</font></th>
            <th rowspan="4" colspan="4" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial" >Manfaat yang Telah Diperoleh</font></th>
          </tr>
          <tr>
            <tr>
            <th></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">Tahun Mulai</font></th>
            <th rowspan="2" style="border:1px solid #000; background-color:#daeef3;text-align: center" style="font-size:13px"><font face="Arial">Tahun Akhir</font></th>
            </tr>
           </tr>
           <tr>
                <tr>
                  <th style="text-align: center" style="font-size:13px"></th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">(1.)</th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">(2.)</th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">(3.)</th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">(4.)</th>
                  <th colspan="4" style="border:1px solid #000;text-align: center" style="font-size:13px">(5)</th>
                  </tr>
            </tr>';
           foreach ($kerjasamaLuar as $kerjasamaluar) {
                $kerluData .= '
                <tr>
                  <th></th>
                  <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamaluar->nama_instansi.'</font></p></td>
                  <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamaluar->jenis_kegiatan.'</font></p></td>
                  <td colspan="1" align="center"style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.$kerjasamaluar->tahun_mulai.'</font></p></td>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.$kerjasamaluar->tahun_akhir.'</font></p>
                  <td colspan="4" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamaluar->manfaat.'</font></p>
                </tr>';
      }
             
            $kerluData .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename= Kegiatan Kerjasama dengan Instansi Luar Negeri Tingkat Fakultas.xls');
        echo $kerluData;
    }

    public function dokumenLupload(Request $request){

    
        $this->validate($request, [

        'dokumenL'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


      $dokumen_luar = new DokumenLuar;
      $dokumen_luar->dokumenL          = $request->dokumenL;
      if(Auth::user()->id_departemen==10){
        $dokumen_luar->id_departemen  = $request->id_departemen;
      }
      else{
        $dokumen_luar->id_departemen  = $request->user()->id_departemen;
      }
      $dokumen_luar->id_kerjasamaLuar  = $request->id_kerjasamaLuar;



        if ($request->hasFile('dokumenL')){
            $imageTempName   = $request->file('dokumenL')->getPathname();
            $imageName       = $request->file('dokumenL')->getClientOriginalName();
            $path            = base_path() . '/public/upload/dokumenPendukungLuar/';
            $request       ->file('dokumenL')->move($path, $imageName);
            $dokumen_luar->dokumenL = ''.$imageName;
            }
           
            $dokumen_luar ->save();
            
            $kerjasamaLuar = KerjasamaLuar::where('id_kerjasamaLuar', $dokumen_luar->id_kerjasamaLuar)->first();
            $kerjasamaLuar ->id_dokumenL = $dokumen_luar->id_dokumenL;
               
            $kerjasamaLuar->save();
             return redirect()->route('standar7kerjasamaluarnegeri.index')
                              ->with('message2','Data berhasil diunggah'); 
     }

     public function downloadDokumenL($id_dokumenL){
        $dokumen_luar = DokumenLuar::where('id_dokumenL', '=', $id_dokumenL)->select('dokumenL')->get();
        $filePath = public_path().'/upload/dokumenPendukungLuar/'.$dokumen_luar[0]['dokumenL'];
        //dd($filePath);
        return response()->download($filePath);
    }

}