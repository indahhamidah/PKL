<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HasilPengabdian;
use App\Bukti;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class HasilPengabdianController extends Controller
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

            
            $hasil_pengabdian = HasilPengabdian::orderBy('tahun_publikasi', 'desc')
                        ->get();
            
            // $pengabdians = pengabdian::get();

           
        }
        else
        {
           
            $hasil_pengabdian = HasilPengabdian::orderBy('tahun_publikasi')
                        ->get();
            
         
        }

           
            


            $listdept=DB::table('departemen')
                    ->get();

            return view('HasilPengabdian/index',compact('hasil_pengabdian','dept', 'listdept'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        request()->validate([
            'judul_hasilPengabdian' => 'required',
            'nama_dosenPengabdian' => 'required',
            'dipublikasi_pada' => 'required',
            'tahun_publikasi' => 'required',
            'tingkat_hasilpengabdian' => 'required',
        ]);

      
        $hasil_pengabdian=new HasilPengabdian;
        $hasil_pengabdian->judul_hasilPengabdian = $request->judul_hasilPengabdian;
        $hasil_pengabdian->nama_dosenPengabdian = $request->nama_dosenPengabdian;
        $hasil_pengabdian->dipublikasi_pada = $request->dipublikasi_pada;
        $hasil_pengabdian->tahun_publikasi = $request->tahun_publikasi;
        $hasil_pengabdian->tingkat_hasilpengabdian = $request->tingkat_hasilpengabdian;
        $hasil_pengabdian->id_departemen= $request->user()->id_departemen;

        $hasil_pengabdian->save();
        return redirect()->route('standar9hasilpengabdian.index')
                        ->with('message2','Data berhasil ditambahkan');
                            
    }
    public function edit($id_pengabdian)
    {
        // dd($member);
        return view('HasilPengabdian/index',compact('HasilPengabdian'));
    }
    public function update(Request $request, $member)
    {
        request()->validate([
        	'judul_hasilPengabdian' => 'required',
            'nama_dosenPengabdian' => 'required',
            'dipublikasi_pada' => 'required',
            'tahun_publikasi' => 'required',
            'tingkat_hasilpengabdian' => 'required',
            ]);
        $hasil_pengabdian = HasilPengabdian::find($member);
        $hasil_pengabdian->judul_hasilPengabdian = $request->judul_hasilPengabdian;
        $hasil_pengabdian->nama_dosenPengabdian = $request->nama_dosenPengabdian;
        $hasil_pengabdian->dipublikasi_pada = $request->dipublikasi_pada;
        $hasil_pengabdian->tahun_publikasi = $request->tahun_publikasi;
        $hasil_pengabdian->tingkat_hasilpengabdian = $request->tingkat_hasilpengabdian;
        $hasil_pengabdian->id_departemen= $request->user()->id_departemen;
        //dd($hasil_pengabdian);
        $hasil_pengabdian->save();
        return redirect()->route('standar9hasilpengabdian.index')
                        ->with('message2','Data berhasil diubah');
                            
    }
 public function destroy($id_hasilPengabdian)
    {
        Hasilpengabdian::destroy($id_hasilPengabdian);
        return redirect()->route('standar9hasilpengabdian.index')
                        ->with('message2','Data berhasil dihapus');
    }

    public function hasilPengabdianImport(Request $request){
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['judul_hasilpengabdian' => $value->judul_hasilpengabdian, 'nama_dosenpengabdian' => $value->nama_dosenpengabdian, 'dipublikasi_pada' => $value->dipublikasi_pada, 'tahun_publikasi' => $value->tahun_publikasi, 'tingkat_hasilpengabdian' => $value->tingkat_hasilpengabdian, 'id_departemen' => $request->user()->id_departemen];
                }
                if(!empty($arr)){
                    \DB::table('hasil_pengabdian')->insert($arr);
                   
                }
            }
        }
         // return redirect()->route('penelitian.index')->with('message2','Data berhasil diunggah');   
         return redirect()->back(); 
    }

    public function hasilPengabdianExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $hapeng = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $hasil_pengabdian = DB::table('hasil_pengabdian')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->orderBy('tahun_publikasi')
                        ->get();
 
        $hapengData = "";
 
        if(count($hasil_pengabdian) >0 ){
            $hapengData .= '
           <table>
            <tr>
            <th colspan="1" align=left valign=top><font face="Arial" size="2.5">Tabel 9.3</font></th>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Data Hasil Pengabdian yang diselenggarakan '.$hapeng[0]->nama_departemen.'</font></td>
           </tr>
            <tr>
            <th></th>
            <th colspan="2" width="180px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Judul Hasil Penelitian></p></th>
            <th colspan="2" width="150px"  style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Nama Dosen</font></p></th>
            <th colspan="2" width="150px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Dipublikasi pada</font></p></th>
            <th colspan="2" width="150px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Tahun Publikasi</font></p></th>
            <th colspan="2" width="150px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;text-align: center;"><p style="font-size:16px"><font face="Times New Rowman" >Tingkat</font></p></th>
            <th style="border:1px;"><p style="font-size:16px"><font face="Times New Rowman" ></font></p></th>
            </tr>';

            foreach ($hasil_pengabdian as $hasilPengabdian) {
                $hapengData .= '
                <tr>
                <th></th>
           <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255"; align=left><font face="Arial" size="2.5">'.$hasilPengabdian->judul_hasilPengabdian.'</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255"; align=left><font face="Arial" size="2.5">'.$hasilPengabdian->nama_dosenPengabdian.'</td>
            <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255"; align=left><font face="Arial" size="2.5">'.$hasilPengabdian->dipublikasi_pada.'</td>
             <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255"; align=left><font face="Arial" size="2.5">'.$hasilPengabdian->tahun_publikasi.'</td>
             <td colspan="2" style="border:1px solid #000; border-width: thin; background-color:#255255255"; align=left><font face="Arial" size="2.5">'.$hasilPengabdian->tingkat_hasilpengabdian.'</td>
            ';

            }
            $hapengData .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Laporan Hasil Pengabdian '.$hapeng[0]->nama_departemen .'.xls');
        echo $hapengData;
    }

    public function hasilPengabdianDownload(Request $request){
        $id_departemen = Auth::user()->id_departemen;
        $hapeng = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

        
         $hasil_pengabdian = HasilPengabdian::orderBy('tahun_publikasi')
                        ->get();
        $pdf = PDF::loadView('hasilPengabdian.pdf', compact('hasil_pengabdian','hapeng'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

}