<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulum7;
use App\BobotSks;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Kurikulum7Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // $kurikulum7 = Kurikulum7::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $kurikulum7 = Kurikulum7::where('id_departemen', $id_departemen)
                         ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                    ->get();
        }
        else
        {
        $kurikulum7 = Kurikulum7::where('id_departemen', $id_departemen)
                         ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
              ->orderBy('nama_praktikum_kurikulum7')
              ->get();
        }
        $bobot_sks=BobotSks::get();
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('kurikulum7/index',compact('kurikulum7','dept','bobot_sks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'kode_mk' => 'required',
            'nama_praktikum_kurikulum7' => 'required',
            'judul_praktikum' => 'required',
            'jam_pelaksanaan' => 'required',
            'jumlah_pertemuan_praktikum' => 'required',
            'tempat_praktikum' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $kurikulum7 = DB::table('substansi_praktikum')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_praktikum_kurikulum7', $request->nama_praktikum_kurikulum7)
                        ->first();

        if($kurikulum7==null){  
        $kurikulum7=new Kurikulum7;
        $kurikulum7->kode_mk = $request->kode_mk;
        $kurikulum7->nama_praktikum_kurikulum7 = $request->nama_praktikum_kurikulum7;
        $kurikulum7->id_jumlah_sks            = $request->id_jumlah_sks;
        $kurikulum7->judul_praktikum = $request->judul_praktikum;
        $kurikulum7->jam_pelaksanaan = $request->jam_pelaksanaan;
        $kurikulum7->tempat_praktikum = $request->tempat_praktikum;
        $kurikulum7->jumlah_pertemuan_praktikum = $request->jumlah_pertemuan_praktikum;
        $kurikulum7->id_departemen= $request->user()->id_departemen;

        $kurikulum7->save();
        return redirect()->route('kurikulum7.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('kurikulum7.index')
                        ->with('message','Nama Praktikum ada yang sama'); 
          }                
    }
     public function edit($id_substansi_praktikum)
    {
        // dd($member);
        return view('kurikulum7/index',compact('kurikulum7'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'kode_mk' => 'required',
            'nama_praktikum_kurikulum7' => 'required',
            'judul_praktikum' => 'required',
            'jam_pelaksanaan' => 'required',
            'jumlah_pertemuan_praktikum' => 'required',
            'tempat_praktikum' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $kurikulum7 = DB::table('substansi_praktikum')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->where('id_departemen', $id_departemen)
                        ->where('kode_mk', $request->kode_mk)
                        ->where('nama_praktikum_kurikulum7', $request->nama_praktikum_kurikulum7)
                        ->where('judul_praktikum', $request->judul_praktikum)
                        ->where('jam_pelaksanaan', $request->jam_pelaksanaan)
                        ->where('tempat_praktikum', $request->tempat_praktikum)
                        ->where('jumlah_pertemuan_praktikum', $request->jumlah_pertemuan_praktikum)
                        ->where('nama_praktikum_kurikulum7', $request->sem_mk1_kurikulum5)
                        ->first();

        // $kurikulum7->update($request->all());
        if($kurikulum7==null){ 
        $kurikulum7 = Kurikulum7::find($member);
        $kurikulum7->kode_mk = $request->kode_mk;
        $kurikulum7->nama_praktikum_kurikulum7 = $request->nama_praktikum_kurikulum7;
        $kurikulum7->id_jumlah_sks             = $request->id_jumlah_sks;
        $kurikulum7->judul_praktikum = $request->judul_praktikum;
        $kurikulum7->jam_pelaksanaan = $request->jam_pelaksanaan;
        $kurikulum7->tempat_praktikum = $request->tempat_praktikum;
        $kurikulum7->jumlah_pertemuan_praktikum = $request->jumlah_pertemuan_praktikum;
        $kurikulum7->id_departemen= $request->user()->id_departemen;

        $kurikulum7->save();
        return redirect()->route('kurikulum7.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('kurikulum7.index')
                        ->with('message','Data yang diubah sudah ada. Silakan periksa kembali'); 
          }       
    }
    public function destroy($id_substansi_praktikum)
    {
        Kurikulum7::destroy($id_substansi_praktikum);
        return redirect()->route('kurikulum7.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function kurikulum7Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                    $insert[] = ['tahun_kurikulum7' => $value->tahun_kurikulum7, 'nama_praktikum_kurikulum7' => $value->nama_praktikum_kurikulum7, 'judul_praktikum' => $value->judul_praktikum, 'jam_pelaksanaan' => $value->jam_pelaksanaan,  'tempat_praktikum' => $value->tempat_praktikum, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('substansi_praktikum')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('kurikulum7.index');
    }

public function kurikulum7Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $kur7 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $kurikulum7 = DB::table('substansi_praktikum')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_praktikum_kurikulum7')
                        ->get();
 
        $kur7Data = "";
 
        if(count($kurikulum7) >0 ){
            $kur7Data .= '
           <table>
            <tr>
            
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Tuliskan substansi praktikum/praktek yang mandiri ataupun yang merupakan bagian dari mata kuliah tertentu, dengan mengikuti format di bawah ini:</font></td>
           </tr>
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Kode MK</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Nama Praktikum/Praktek</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;">Bobot SKS Praktikum</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Isi Praktikum/Praktek</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Jumlah Pertemuan</th>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Tempat/Lokasi Praktikum/Praktek</th>
                     <tr>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Judul/Modul</th>
                     <th style="border: 1px solid #000; padding: 5px; background-color:#daeef3; text-align: center;" >Jam Pelaksanaan</th>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;1&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;2&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;3&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;4&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;5&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;6&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;">(&nbsp;7&nbsp;)</th>
                   </tr>';

                   foreach ($kurikulum7 as $kurikulum7) {
                    $kur7Data .= '
                   <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">' . $kurikulum7->kode_mk . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">' . $kurikulum7->nama_praktikum_kurikulum7 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum7->jumlah_sks . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;">' . $kurikulum7->judul_praktikum . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum7->jam_pelaksanaan . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum7->jumlah_pertemuan_praktikum . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: center;">' . $kurikulum7->tempat_praktikum . '</td>
                   </tr>';
            }
            $kur7Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Tabel 6.1.4.xls');
        echo $kur7Data;
    }
    public function excelKurikulum7()
    {
        $kurikulum7s = DB::table('substansi_praktikum')->get();

        $kur7Data = "";

        if(count($kurikulum7s) >0 ){
            $kur7Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($kurikulum7s as $kurikulum7) {
                $kur7Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$kurikulum7->sem_kurikulum7.'</td>
                <td style= "border: 1px solid black">'.$kurikulum7->tahun_kurikulum7.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $kur7Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $kur7Data;
    }

    
     public function kurikulum7Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $kur7 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $kurikulum7s = Kurikulum7::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $bobot_sks=BobotSks::get();
        $pdf = PDF::loadView('kurikulum7.pdf', compact('kurikulum7s','kur7', 'bobot_sks'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadkurikulum7(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $kur7 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $kurikulum7s = Kurikulum7::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->join('bobot_sks', 'id_bobot_sks', '=', 'id_jumlah_sks')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_praktikum_kurikulum7')
                        ->get();
        $bobot_sks=BobotSks::get();
        $pdf = PDF::loadView('kurikulum7.pdfm', compact('kurikulum7s','kur7','bobot_sks'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }
}
