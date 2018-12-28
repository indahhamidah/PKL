<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KerjasamaDalam;
use App\DokumenDalam;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class KerjasamaDalamController extends Controller
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

            
            $date1 = Carbon::now()->startOfYear()->subYear(2);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
            $kerjasamaDalam = kerjasamaDalam::whereBetween('tahun_mulai', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
            $kerjasamaDalam = kerjasamaDalam::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
            $dokumen_dalam = DB::table('dokumen_dalam')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->select('dokumen_dalam.*', 'departemen.*')
                              ->get();

       
  
        }
        else
        {
           $date1 = Carbon::now()->startOfYear()->subYear(2);
           $date2 = Carbon::now()->startOfYear()->addYear(1)->subDays(1);
           $kerjasamaDalam = kerjasamaDalam::whereBetween('tahun_mulai', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
            $kerjasamaDalam = kerjasamaDalam::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
          $dokumen_dalam = DB::table('dokumen_dalam')
                              ->join('departemen', 'id_dept', '=', 'id_departemen')
                              ->where('id_departemen', $id_departemen)
                              ->select('dokumen_dalam.*', 'departemen.*')
                              ->get();
        }
            $listdept=DB::table('departemen')
                    ->get();
            return view('kerjasamaDalam/index',compact('kerjasamaDalam','dept', 'listdept', 'dokumen_dalam'));
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
        $kerjasamaDalam = DB::table('kerjasama_dalam')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_instansi', $request->nama_instansi)
                        ->where('jenis_kegiatan', $request->nama_instansi)
                        ->where('tahun_mulai', $request->tahun_mulai)
                        ->where('tahun_akhir', $request->tahun_akhir)
                        ->first();

        if($kerjasamaDalam==null){  
        $kerjasamaDalam=new KerjasamaDalam;
        $kerjasamaDalam->nama_instansi      = $request->nama_instansi;
        $kerjasamaDalam->jenis_kegiatan     = $request->jenis_kegiatan;
        $kerjasamaDalam->tahun_mulai        = $request->tahun_mulai;
        $kerjasamaDalam->tahun_akhir        = $request->tahun_akhir;
        $kerjasamaDalam->jumlah_dana        = $request->jumlah_dana;
        $kerjasamaDalam->manfaat            = $request->manfaat;
        $kerjasamaDalam->id_departemen  = $request->user()->id_departemen;
        
             
        $kerjasamaDalam->save();
        
        return redirect()->route('standar7kerjasamadalamnegeri.index')
                         ->with('message2','Data berhasil ditambahkan');
                          }else{
                          return redirect()->route('standar7kerjasamadalamnegeri.index')
                          ->with('message','Nama Instansi ada yang sama');
                          } 
                            
    }

    public function edit($id_kerjasamaDalam)
    {
        // dd($member);
        return view('kerjasamaDalam/index',compact('kerjasamaDalam'));
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
        $kerjasamaDalam = DB::table('kerjasama_dalam')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_instansi', $request->nama_instansi)
                        ->where('jenis_kegiatan', $request->jenis_kegiatan)
                        ->where('tahun_mulai', $request->tahun_mulai)
                        ->where('tahun_akhir', $request->tahun_akhir)
                        ->where('jumlah_dana', $request->jumlah_dana)
                        ->where('manfaat', $request->manfaat)
                        ->first();

        if($kerjasamaDalam==null){
        $kerjasamaDalam = KerjasamaDalam::find($member);
        $kerjasamaDalam->nama_instansi      = $request->nama_instansi;
        $kerjasamaDalam->jenis_kegiatan     = $request->jenis_kegiatan;
        $kerjasamaDalam->tahun_mulai        = $request->tahun_mulai;
        $kerjasamaDalam->tahun_akhir        = $request->tahun_akhir;
        $kerjasamaDalam->jumlah_dana        = $request->jumlah_dana;
        $kerjasamaDalam->manfaat            = $request->manfaat;
        $kerjasamaDalam->id_departemen      = $request->user()->id_departemen;
        
              
        $kerjasamaDalam->save();
        return redirect()->route('standar7kerjasamadalamnegeri.index')
                         ->with('message2','Data berhasil diubah');
                          }else{
                          return redirect()->route('standar7kerjasamadalamnegeri.index')
                          ->with('message','Nama Instansi ada yang sama');
                          }
                            
    }
    
    public function destroy($id_kerjasamaDalam)
    {
        KerjasamaDalam::destroy($id_kerjasamaDalam);

        return redirect()->route('standar7kerjasamadalamnegeri.index')
                         ->with('message2','Data berhasil dihapus');
    }

         public function kerjasamaDalamImport(Request $request){
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
                    \DB::table('kerjasama_dalam')->insert($arr);
                   
                }
            }
        }
         // return redirect()->route('penelitian.index')->with('message2','Data berhasil diunggah');   
         return redirect()->back()
                          ->with('message2','Data berhasil diunggah'); 
    }

    public function kerjasamaDalamDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
                 $kerdal = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kerjasamaDalam = KerjasamaDalam::whereBetween('tahun_mulai', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_mulai', 'asc')
                        ->get();
        $kerjasamaDalam = kerjasamaDalam::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
        $pdf = PDF::loadView('kerjasamaDalam.pdf', compact('kerjasamaDalam','kerdal'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function downloadkerjasamaDalam(Request $request){
        $id_departemen = Auth::user()->id_departemen;
                 $kerdal = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
        $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $kerjasamaDalam = KerjasamaDalam::whereBetween('tahun_mulai', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_mulai', 'asc')
                        ->get();
        $kerjasamaDalam = kerjasamaDalam::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
        $pdf = PDF::loadView('kerjasamaDalam.pdfm', compact('kerjasamaDalam','kerdal'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    public function kerjasamaDalamExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $kerdal = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $kerjasamaDalam = KerjasamaDalam::whereBetween('tahun_mulai', [$date1,$date2])
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_mulai', 'asc')
                        ->get();
            $kerjasamaDalam = kerjasamaDalam::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
 
        $kerdalData = "";
 
        if(count($kerjasamaDalam) >0 ){
            $kerdalData .= '
            <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">Tabel 2.1</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Kerjasama dengan instansi dalam negeri Program Studi '.$kerdal[0]->nama_departemen.'</font></td>
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
                  <th style="text-align: center"></th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">1</th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">2</th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">3</th>
                  <th style="border:1px solid #000;text-align: center" style="font-size:13px">4</th>
                  <th colspan="4" style="border:1px solid #000;text-align: center" style="font-size:13px">5</th>
                  </tr>
            </tr>';
           foreach ($kerjasamaDalam as $kerjasamadalam) {
                $kerdalData .= '
                <tr>
                  <th></th>
                  <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamadalam->nama_instansi.'</font></p></td>
                  <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamadalam->jenis_kegiatan.'</font></p></td>
                  <td colspan="1" align="center"style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.$kerjasamadalam->tahun_mulai.'</font></p></td>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.$kerjasamadalam->tahun_akhir.'</font></p>
                  <td colspan="4" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamadalam->manfaat.'</font></p>
                </tr>';
      }
             
            $kerdalData .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename= Kegiatan Kerjasama dengan Instansi Dalam Negeri '.$kerdal[0]->nama_departemen .'.xls');
        echo $kerdalData;
    }


    public function excelKerjasamaDalam()
    {
      $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
      $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
      $kerjasamaDalam = KerjasamaDalam::whereBetween('tahun_mulai', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();
      $kerjasamaDalam = kerjasamaDalam::whereBetween('tahun_akhir', [$date1,$date2])
                         ->join('departemen', 'id_dept', '=', 'id_departemen')
                         ->where('id_departemen', $id_departemen)
                         ->orderBy('tahun_mulai', 'asc')
                         ->get();

        $kerdalData = "";

        if(count($kerjasamaDalam) >0 ){
            $kerdalData .= '<table>
             <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">Tabel 7.2</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Kerjasama dengan instansi dalam negeri Tingkat Fakultas</font></td>
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
           foreach ($kerjasamaDalam as $kerjasamadalam) {
                $kerdalData .= '
                <tr>
                  <th></th>
                  <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamadalam->nama_instansi.'</font></p></td>
                  <td style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamadalam->jenis_kegiatan.'</font></p></td>
                  <td colspan="1" align="center"style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.$kerjasamadalam->tahun_mulai.'</font></p></td>
                  <td colspan="1" style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center><p style="font-size:13px"><font face="Arial">'.$kerjasamadalam->tahun_akhir.'</font></p>
                  <td colspan="4" style="border:1px solid #000; border-width: thin; background-color:#255255255;"><p style="font-size:13px"><font face="Arial">'.$kerjasamadalam->manfaat.'</font></p>
                </tr>';
      }
             
            $kerdalData .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename= Kegiatan Kerjasama dengan Instansi Dalam Negeri Tingkat Fakultas.xls');
        echo $kerdalData;
    }

public function dokumenDupload(Request $request){

    
        $this->validate($request, [

        'dokumenD'                => 'mimes:pdf,docx,doc,png,jpg|max:10000',
    ]);


      $dokumen_dalam = new DokumenDalam;
      $dokumen_dalam->dokumenD          = $request->dokumenD;
      if(Auth::user()->id_departemen==10){
        $dokumen_dalam->id_departemen  = $request->id_departemen;
      }
      else{
        $dokumen_dalam->id_departemen  = $request->user()->id_departemen;
      }
      $dokumen_dalam->id_kerjasamaDalam  = $request->id_kerjasamaDalam;



        if ($request->hasFile('dokumenD')){
            $imageTempName   = $request->file('dokumenD')->getPathname();
            $imageName       = $request->file('dokumenD')->getClientOriginalName();
            $path            = base_path() . '/public/upload/dokumenPendukungDalam/';
            $request       ->file('dokumenD')->move($path, $imageName);
            $dokumen_dalam->dokumenD = ''.$imageName;
            }
           
            $dokumen_dalam ->save();
            
            $kerjasamaDalam = KerjasamaDalam::where('id_kerjasamaDalam', $dokumen_dalam->id_kerjasamaDalam)->first();
            $kerjasamaDalam ->id_dokumenD = $dokumen_dalam->id_dokumenD;
               
            $kerjasamaDalam->save();
             return redirect()->route('standar7kerjasamadalamnegeri.index')
                              ->with('message2','Data berhasil diunggah'); 
     }

     public function downloadDokumenD($id_dokumenD){
        $dokumen_dalam = DokumenDalam::where('id_dokumenD', '=', $id_dokumenD)->select('dokumenD')->get();
        $filePath = public_path().'/upload/dokumenPendukungDalam/'.$dokumen_dalam[0]['dokumenD'];
        //dd($filePath);
        return response()->download($filePath);
    }



}