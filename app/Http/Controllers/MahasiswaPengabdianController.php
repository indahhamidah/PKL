<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\MahasiswaPengabdian;
use App\Pengabdian;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class MahasiswaPengabdianController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();

        $mahasiswa_pengabdian=Pengabdian::whereBetween('tahun_pengabdian', [$date1, $date2])
        					->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_pengabdian', 'desc')
                            ->get();
        
        $listdept=DB::table('departemen')
                    ->get();
            return view('redaksipengabdian/index',compact('dept', 'listdept', 'mahasiswa_pengabdian'));
    }

    

     public function edit($id_mahasiswaPengabdian)
    {
        // dd($member);
        return view('redaksipengabdian/index',compact('mahasiswa_pengabdian'));
    }

    public function update(Request $request, $member)
    {
    	
    	request()->validate([
            'judul_pengabdian' => 'required',
            'institusi'    => 'required',
            'jumlah_mahasiswa_peng'      => 'required',
            'tahun_pengabdian'       => 'required',
            'keterlibatan_mahasiswa'       => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
        $mahasiswa_pengabdian = DB::table('pengabdians')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('judul_pengabdian', $request->judul_pengabdian)
                        ->where('institusi', $request->institusi)
                        ->where('tahun_pengabdian', $request->tahun_terlibat)
                        ->where('jumlah_mahasiswa_peng', $request->jumlah_mahasiswa_pengabdian)
                        ->where('keterlibatan_mahasiswa', $request->keterlibatan_mahasiswa)
                        ->first();

         if($mahasiswa_pengabdian==null){
        $mahasiswa_pengabdian=Pengabdian::find($member);
        $mahasiswa_pengabdian->judul_pengabdian      = $request->judul_pengabdian;
        $mahasiswa_pengabdian->institusi         = $request->institusi;
        $mahasiswa_pengabdian->jumlah_mahasiswa_peng           = $request->jumlah_mahasiswa_peng;
        $mahasiswa_pengabdian->tahun_pengabdian      = $request->tahun_pengabdian;
        $mahasiswa_pengabdian->keterlibatan_mahasiswa      = $request->keterlibatan_mahasiswa;
        $mahasiswa_pengabdian->id_departemen         = $request->user()->id_departemen;
        
           
        $mahasiswa_pengabdian->save();
        return redirect()->route('redaksipengabdian.index')
                         ->with('message2','Data berhasil diubah');
                     }else{
                    return redirect()->route('redaksipengabdian.index')
                         ->with('message','Data yang diubah sudah ada');  
                     }  
        }
    public function destroy($id_mahasiswaPengabdian)
    {
        MahasiswaPengabdian::destroy($id_mahasiswaPengabdian);

        return redirect()->route('redaksipengabdian.index')
                         ->with('message2','Data berhasil dihapus');
    }  

    public function MahasiswaPengabdianExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $Mahasis = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $mahasiswa_pengabdian = Pengabdian::whereBetween('tahun_pengabdian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_pengabdian', 'desc')
                            ->get();
 
        $MahasisData = "";
        if(count($mahasiswa_pengabdian) >0 ){
            $MahasisData .= '
            <table>
            <tr>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Mahasiswa Tugas Akhir yang Terlibat Penelitian '.$Mahasis[0]->nama_departemen.'</font></td>
           </tr>
            <tr>
            <th></th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Kegiatan</font></th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Instansi</font></th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Tahun</font></th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Jumlah Mahasiswa yang Terlibat</font></th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Keterlibatan Mahasiswa</font></th>
          </tr>';
            foreach ($mahasiswa_pengabdian as $terlibatpengabdian) {
                $MahasisData .= '
                <tr>
              <th></th>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;">'.$terlibatpengabdian->judul_pengabdian.'</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>'. $terlibatpengabdian->institusi.'</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>'. $terlibatpengabdian->tahun_pengabdian.'</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>'. $terlibatpengabdian->jumlah_mahasiswa_peng.'</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;">'. $terlibatpengabdian->keterlibatan_mahasiswa.'</font></p></td>
              <td></td>
              </tr>';
          }
            $MahasisData .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename= Mahasisa yang Terlibat Pengabdian '.$Mahasis[0]->nama_departemen .'.xls');
        echo $MahasisData;
    }
 
}
