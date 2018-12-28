<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Penelitian;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Input;
use PDF;
use File;

class MahasiswaPenelitianController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $id_departemen = $request->user()->id_departemen;
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        $mahasiswa_penelitian = Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_penelitian', 'desc')
                            ->get();
                           // dd($mahasiswa_penelitian);
        $listdept=DB::table('departemen')
                    ->get();
            return view('redaksipenelitian/index',compact('dept', 'listdept', 'mahasiswa_penelitian'));
    }


    public function edit($id_penelitian)
    {
        // dd($member);
        return view('redaksipenelitian/index',compact('mahasiswa_penelitian'));
    }
    
    public function update(Request $request, $member)
    {
       
       request()->validate([
            'nama_peneliti' => 'required',
            'judul_penelitian'    => 'required',
            'jumlah_mahasiswa'      => 'required',
            'tahun_penelitian'       => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
        $mahasiswa_penelitian = DB::table('penelitians')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_peneliti', $request->nama_peneliti)
                        ->where('judul_penelitian', $request->judul_penelitian)
                        ->where('jumlah_mahasiswa', $request->jumlah_mahasiswa)
                        ->where('tahun_penelitian', $request->tahun_penelitian)
                        ->first();


        if($mahasiswa_penelitian==null){
        $mahasiswa_penelitian=Penelitian::find($member);
        $mahasiswa_penelitian->nama_peneliti      = $request->nama_peneliti;
        $mahasiswa_penelitian->judul_penelitian         = $request->judul_penelitian;
        $mahasiswa_penelitian->jumlah_mahasiswa           = $request->jumlah_mahasiswa;
        $mahasiswa_penelitian->tahun_penelitian      = $request->tahun_penelitian;
        $mahasiswa_penelitian->id_departemen         = $request->user()->id_departemen;
        $mahasiswa_penelitian->save();
        return redirect()->route('redaksipenelitian.index')
                         ->with('message2','Data berhasil diubah');
                     }else{
                    return redirect()->route('redaksipenelitian.index')
                         ->with('message','Data yang diubah sudah ada. Silakan periksa kembali');  
                     }
                        
          }       
    
    public function destroy($id_penelitian)
    {
       Penelitian::destroy($id_penelitian);

        return redirect()->route('redaksipenelitian.index')
                         ->with('message2','Data berhasil dihapus');
    }

    public function MahasiswaPenelitianExport(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $Mahas = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
            $date1 = Carbon::now()->startOfYear()->subYear(3)->subMonth(4);
            $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
            $mahasiswa_penelitian = Penelitian::whereBetween('tahun_penelitian', [$date1,$date2])
                            ->join('departemen', 'id_dept', '=', 'id_departemen')
                            ->where('id_departemen', $id_departemen)
                            ->orderBy('tahun_penelitian', 'desc')
                            ->get();
 
        $MahasData = "";
        if(count($mahasiswa_penelitian) >0 ){
            $MahasData .= '
            <table>
            <tr>
             <td colspan="13" style="text-align: left"><font face="Arial" size="2.5">Mahasiswa Tugas Akhir yang Terlibat Penelitian '.$Mahas[0]->nama_departemen.'</font></td>
           </tr>
            <tr>
            <th></th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Nama Dosen</font></th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Topik Penelitian</font></th>
            <th style="border:1px solid #000; background-color:#daeef3;text-align: center"><font face="Times New Rowman" >Jumlah Mahasiswa yang Terlibat</font></th>
          </tr>
          
           <tr>
                  <th style="text-align: center"></th>
                  <th style="border:1px solid #000;text-align: center">1</th>
                  <th style="border:1px solid #000;text-align: center">2</th>
                  <th style="border:1px solid #000;text-align: center">3</th>
            </tr>';
            foreach ($mahasiswa_penelitian as $terlibatpenelitian) {
                $MahasData .= '
                <tr>
              <th></th>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;">'.$terlibatpenelitian->nama_peneliti.'</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;">'. $terlibatpenelitian->judul_penelitian.'</font></p></td>
              <td  style="border:1px solid #000; border-width: thin; background-color:#255255255;" align=center>'. $terlibatpenelitian->jumlah_mahasiswa.'</font></p></td>
              <td></td>
              </tr>';
          }
            $MahasData .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename= Mahasisa yang Terlibat Penelitian '.$Mahas[0]->nama_departemen .'.xls');
        echo $MahasData;
    }



}
