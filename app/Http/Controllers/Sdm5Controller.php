<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sdm5;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Carbon\Carbon;

class Sdm5Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(Request $request)
    {
        // $sdm5 = Sdm5::latest()->paginate(10);
        $id_departemen = $request->user()->id_departemen;
        if(Auth::User()->id_departemen==10)
            {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdm5 = Sdm5::where('id_departemen', $id_departemen)
                    ->get();
        }
        else
        {
        $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
        $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
        $sdm5 = Sdm5::where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm5')
              ->get();
        $totalsks1=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_ps_sendiri');
        $totalsks2=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_ps_lain_pt_sendiri');
        $totalsks3=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_pt_lain');
        $totalsks4=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_penelitian');
        $totalsks5=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengabdian_kepada_masyarakat');
        $totalsks6=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_manajemen_pt_sendiri');
        $totalsks7=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_manajemen_pt_lain');
        $totaljumlah=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum(DB::raw('sks_pengajaran_pada_ps_sendiri+sks_pengajaran_pada_ps_lain_pt_sendiri+sks_pengajaran_pada_pt_lain+sks_penelitian+sks_pengabdian_kepada_masyarakat+sks_manajemen_pt_sendiri+sks_manajemen_pt_lain'));

        $ratasks1=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_ps_sendiri');
        $ratasks2=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_ps_lain_pt_sendiri');
        $ratasks3=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_pt_lain');
        $ratasks4=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_penelitian');
        $ratasks5=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengabdian_kepada_masyarakat');
        $ratasks6=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_manajemen_pt_sendiri');
        $ratasks7=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_manajemen_pt_lain');
        $ratajumlah=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg(DB::raw('sks_pengajaran_pada_ps_sendiri+sks_pengajaran_pada_ps_lain_pt_sendiri+sks_pengajaran_pada_pt_lain+sks_penelitian+sks_pengabdian_kepada_masyarakat+sks_manajemen_pt_sendiri+sks_manajemen_pt_lain'));

        }
        $dept=DB::table('departemen')->where('id_dept', $id_departemen)->get();
        return view('sdm5/index',compact('sdm5','dept','totalsks1','totalsks2','totalsks3','totalsks4','totalsks5','totalsks6','totalsks7','totaljumlah','ratasks1','ratasks2','ratasks3','ratasks4','ratasks5','ratasks6','ratasks7','ratajumlah'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nama_sdm5' => 'required',
            'sks_pengajaran_pada_ps_sendiri' => 'required',
            'sks_pengajaran_pada_ps_lain_pt_sendiri' => 'required',
            'sks_pengajaran_pada_pt_lain' => 'required',
            'sks_penelitian' => 'required',
            'sks_pengabdian_kepada_masyarakat' => 'required',
            'sks_manajemen_pt_sendiri' => 'required',
            'sks_manajemen_pt_lain' => 'required',
            'keterangan' => 'required',
            // 'id_departemen' => 'required',
        ]);

        $id_departemen = $request->user()->id_departemen;
                $sdm5 = DB::table('aktivitas_dosen_sesuai_sks')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm5', $request->nama_mk_sdm5)
                        ->first();

        if($sdm5==null){  
        $sdm5=new Sdm5;
        $sdm5->nama_sdm5 = $request->nama_sdm5;
        $sdm5->sks_pengajaran_pada_ps_sendiri = $request->sks_pengajaran_pada_ps_sendiri;
        $sdm5->sks_pengajaran_pada_ps_lain_pt_sendiri = $request->sks_pengajaran_pada_ps_lain_pt_sendiri;
        $sdm5->sks_pengajaran_pada_pt_lain = $request->sks_pengajaran_pada_pt_lain;
        $sdm5->sks_penelitian = $request->sks_penelitian;
        $sdm5->sks_pengabdian_kepada_masyarakat = $request->sks_pengabdian_kepada_masyarakat;
        $sdm5->sks_manajemen_pt_sendiri = $request->sks_manajemen_pt_sendiri;
        $sdm5->sks_manajemen_pt_lain = $request->sks_manajemen_pt_lain;
        $sdm5->keterangan = $request->keterangan;
        $sdm5->id_departemen= $request->user()->id_departemen;

        $sdm5->save();
        return redirect()->route('sdm5.index')
                        ->with('message2','Data berhasil ditambahkan');
                          }else{
           return redirect()->route('sdm5.index')
                        ->with('message','Nama Dosen Tetap ada yang sama'); 
          }                
    }
     public function edit($id_aktivitas_dosen_sesuai_sks)
    {
        // dd($member);
        return view('sdm5/index',compact('sdm5'));
    }
    
    public function update(Request $request, $member)
    {
        request()->validate([
            'nama_sdm5' => 'required',
            'sks_pengajaran_pada_ps_sendiri' => 'required',
            'sks_pengajaran_pada_ps_lain_pt_sendiri' => 'required',
            'sks_pengajaran_pada_pt_lain' => 'required',
            'sks_penelitian' => 'required',
            'sks_pengabdian_kepada_masyarakat' => 'required',
            'sks_manajemen_pt_sendiri' => 'required',
            'sks_manajemen_pt_lain' => 'required',
            'keterangan' => 'required',
        ]);
           $id_departemen = $request->user()->id_departemen;
                $sdm5 = DB::table('aktivitas_dosen_sesuai_sks')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('nama_sdm5', $request->nama_sdm5)
                        ->where('sks_pengajaran_pada_ps_sendiri', $request->sks_pengajaran_pada_ps_sendiri)
                        ->where('sks_pengajaran_pada_ps_lain_pt_sendiri', $request->sks_pengajaran_pada_ps_lain_pt_sendiri)
                        ->where('sks_pengajaran_pada_pt_lain', $request->sks_pengajaran_pada_pt_lain)
                        ->where('sks_penelitian', $request->sks_penelitian)
                        ->where('sks_pengabdian_kepada_masyarakat', $request->sks_pengabdian_kepada_masyarakat)
                        ->where('sks_manajemen_pt_sendiri', $request->sks_manajemen_pt_sendiri)
                        ->where('sks_manajemen_pt_lain', $request->sks_manajemen_pt_lain)
                        ->where('keterangan', $request->keterangan)
                        ->first();

        // $sdm5->update($request->all());
        if($sdm5==null){ 
        $sdm5 = Sdm5::find($member);
        $sdm5->nama_sdm5 = $request->nama_sdm5;
        $sdm5->sks_pengajaran_pada_ps_sendiri = $request->sks_pengajaran_pada_ps_sendiri;
        $sdm5->sks_pengajaran_pada_ps_lain_pt_sendiri = $request->sks_pengajaran_pada_ps_lain_pt_sendiri;
        $sdm5->sks_pengajaran_pada_pt_lain = $request->sks_pengajaran_pada_pt_lain;
        $sdm5->sks_penelitian = $request->sks_penelitian;
        $sdm5->sks_pengabdian_kepada_masyarakat = $request->sks_pengabdian_kepada_masyarakat;
        $sdm5->sks_manajemen_pt_sendiri = $request->sks_manajemen_pt_sendiri;
        $sdm5->sks_manajemen_pt_lain = $request->sks_manajemen_pt_lain;
        $sdm5->keterangan = $request->keterangan;
        $sdm5->id_departemen= $request->user()->id_departemen;

        $sdm5->save();
        return redirect()->route('sdm5.index')
                        ->with('message2','Data berhasil diubah');
                        }else{
           return redirect()->route('sdm5.index')
                        ->with('message','Tahun ada yang sama'); 
          }       
    }
    public function destroy($id_aktivitas_dosen_sesuai_sks)
    {
        Sdm5::destroy($id_aktivitas_dosen_sesuai_sks);
        return redirect()->route('sdm5.index')
                        ->with('message2','Data berhasil dihapus');
    }

 public function sdm5Import(Request $request){
        if($request->hasFile('import_file')){ 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value) {
                     $insert[] = ['nama_sdm5' => $value->nama_sdm5, 'sks_pengajaran_pada_ps_sendiri' => $value->sks_pengajaran_pada_ps_sendiri, 'sks_pengajaran_pada_ps_lain_pt_sendiri' => $value->sks_pengajaran_pada_ps_lain_pt_sendiri, 'sks_pengajaran_pada_pt_lain' => $value->sks_pengajaran_pada_pt_lain, 'sks_penelitian' => $value->sks_penelitian, 'sks_pengabdian_kepada_masyarakat' => $value->sks_pengabdian_kepada_masyarakat, 'sks_manajemen_pt_sendiri' => $value->sks_manajemen_pt_sendiri, 'sks_manajemen_pt_lain' => $value->sks_manajemen_pt_lain, 'keterangan' => $value->keterangan, 'id_departemen' => $request->user()->id_departemen];
                }
               if(!empty($insert)){
                    DB::table('aktivitas_dosen_sesuai_sks')->insert($insert);
                    
                }
            }
        }
        return redirect()->route('sdm5.index');
    }

public function sdm5Export(Request $request)
     {
            $id_departemen = Auth::user()->id_departemen;
            $sdmk5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();
             $sdm5 = Sdm5::where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm5')
              ->get();
         $totalsks1=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_ps_sendiri');
        $totalsks2=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_ps_lain_pt_sendiri');
        $totalsks3=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_pt_lain');
        $totalsks4=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_penelitian');
        $totalsks5=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengabdian_kepada_masyarakat');
        $totalsks6=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_manajemen_pt_sendiri');
        $totalsks7=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_manajemen_pt_lain');
        $totaljumlah=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum(DB::raw('sks_pengajaran_pada_ps_sendiri+sks_pengajaran_pada_ps_lain_pt_sendiri+sks_pengajaran_pada_pt_lain+sks_penelitian+sks_pengabdian_kepada_masyarakat+sks_manajemen_pt_sendiri+sks_manajemen_pt_lain'));

        $ratasks1=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_ps_sendiri');
        $ratasks2=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_ps_lain_pt_sendiri');
        $ratasks3=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_pt_lain');
        $ratasks4=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_penelitian');
        $ratasks5=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengabdian_kepada_masyarakat');
        $ratasks6=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_manajemen_pt_sendiri');
        $ratasks7=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_manajemen_pt_lain');
        $ratajumlah=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg(DB::raw('sks_pengajaran_pada_ps_sendiri+sks_pengajaran_pada_ps_lain_pt_sendiri+sks_pengajaran_pada_pt_lain+sks_penelitian+sks_pengabdian_kepada_masyarakat+sks_manajemen_pt_sendiri+sks_manajemen_pt_lain'));
 
        $sdmk5Data = "";
 
        if(count($sdm5) >0 ){
            $sdmk5Data .= '
           <table>
            <tr>
            <p  style=" font-family : arial, helvetica, sans-serif; text-align: justify; font-size: 10;"> <strong>Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam SKS rata-rata per semester pada satu tahun akademik terakhir</strong></p>
           </tr>
                    <tr>
                     <th rowspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">Nama Dosen Tetap</th>
                     <th colspan="3" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">SKS Pengajaran pada</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">SKS</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">SKS Pengab<br>dian</th>
                     <th colspan="2" style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">SKS Manajemen**</th>
                     <th style="border: 1px solid #000;border-bottom: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">Jlh</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center; background-color:#daeef3;font-size: 10;border-bottom: 0px; font-family : arial, helvetica, sans-serif;">Keterangan</th>
                     <tr> 
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">PS Sendiri</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">PS Lain PT Sendiri</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">PT Lain</th>
                     <th style="border: 1px solid #000;border-top: 0px padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">Penelitian</th>
                     <th style="border: 1px solid #000;border-top: 0px padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">kepada Masya<br>rakat</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">PT Sendiri</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">PT Lain</th>
                     <th style="border: 1px solid #000;border-top: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10; font-family : arial, helvetica, sans-serif;">SKS</th>
                     <th style="border: 1px solid #000;border-top: 0px; padding: 5px; text-align: center;background-color:#daeef3;font-size: 10"></th>
                     </tr>
                   </tr>
                   <tr>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(&nbsp;1&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(&nbsp;2&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(&nbsp;3&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(&nbsp;4&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(&nbsp;5&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(&nbsp;6&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(&nbsp;7&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(&nbsp;8&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(&nbsp;9&nbsp;)</th>
                     <th style="border: 1px solid #000; padding: 5px; text-align: center;font-size: 10; font-family : arial, helvetica, sans-serif;">(&nbsp;10&nbsp;)</th>
                   </tr>';
                   foreach ($sdm5 as $sdm5) {
                    $sdmk5Data .= '
                   <tr>
                    <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10; font-family : arial, helvetica, sans-serif;">' . $sdm5->nama_sdm5 . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10; font-family : arial, helvetica, sans-serif;">' . $sdm5->sks_pengajaran_pada_ps_sendiri . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10; font-family : arial, helvetica, sans-serif;">' . $sdm5->sks_pengajaran_pada_ps_lain_pt_sendiri . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10; font-family : arial, helvetica, sans-serif;">' . $sdm5->sks_pengajaran_pada_pt_lain . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10; font-family : arial, helvetica, sans-serif;">' . $sdm5->sks_penelitian . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10; font-family : arial, helvetica, sans-serif;">' . $sdm5->sks_pengabdian_kepada_masyarakat . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10; font-family : arial, helvetica, sans-serif;">' . $sdm5->sks_manajemen_pt_sendiri . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10; font-family : arial, helvetica, sans-serif;">' . $sdm5->sks_manajemen_pt_lain . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right;font-size: 10; font-family : arial, helvetica, sans-serif;">' . ($sdm5->sks_pengajaran_pada_ps_sendiri+$sdm5->sks_pengajaran_pada_ps_lain_pt_sendiri+$sdm5->sks_pengajaran_pada_pt_lain+$sdm5->sks_penelitian+$sdm5->sks_pengabdian_kepada_masyarakat+$sdm5->sks_manajemen_pt_sendiri+$sdm5->sks_manajemen_pt_lain) . '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: left;font-size: 10; font-family : arial, helvetica, sans-serif;">' . $sdm5->keterangan . '</td>
                   </tr>
                   ';
            }

             $sdmk5Data .= '
                    <tr>
                     <td style="border: 1px solid #000; padding: 5px; text-align:right; font-family : arial, helvetica, sans-serif; font-size: 10;"><strong>Jumlah</strong></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($totalsks1,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($totalsks2,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($totalsks3,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($totalsks4,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($totalsks5,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($totalsks6,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($totalsks7,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($totaljumlah,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;"></td>
                   </tr>
             <tr>
                    <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;"><strong>Rata-rata SKS tridharma dan manajemen dosen yang tidak sedang tugas belajar*</strong></td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($ratasks1,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($ratasks2,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($ratasks3,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($ratasks4,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($ratasks5,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($ratasks6,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($ratasks7,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;">' . number_format ($ratajumlah,2). '</td>
                     <td style="border: 1px solid #000; padding: 5px; text-align: right; font-family : arial, helvetica, sans-serif; font-size: 10;"></td>
                   </tr>
'; 
            $sdmk5Data .='</table>
            <table>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">Catatan:</td>
                      </tr>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">SKS pengajaran sama dengan SKS mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban SKS pengajaran untuk satu tambahan kelas paralel adalah 1/2 kali SKS mata kuliah.</td>
                      </tr>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">* &nbsp;&nbsp;&nbsp;&nbsp;rata-rata adalah jumlah SKS dibagi dengan jumlah dosen tetap.</td>
                      </tr>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">** &nbsp;&nbsp;SKS manajemen dihitung sbb :</td>
                      </tr>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">Beban kerja manajemen untuk jabatan-jabatan ini adalah sbb :</td>
                      </tr>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">- Rektor/Direktur Politeknik 12 SKS adalah sbb :</td>
                      </tr>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">- Pembantu Rektor/Dekan/Ketua Sekolah Tinggi/Direktur Akademi 10 SKS</td>
                      </tr>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">- Ketua Lembaga/Kepala UPT 8 SKS</td>
                      </tr>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">- Pembantu Dekan/Ketua Jurusan/Kepala Pusat/Ketua Senat Akademik/Ketua Senat Fakultas 6 SKS</td>
                      </tr>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">- Sekretaris Jurusan/Sekretaris Pusat/Sekretaris Senat Akademik/Sekretaris Senat Universitas/ Sekretaris Senat Fakultas/ Kepala Lab. atau Studio/Kepala Balai/Ketua PS 4 SKS</td>
                      </tr>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">- Sekretaris PS 3 SKS</td>
                      </tr>
                      <tr>
                          <td colspan="11" style="border:1px solid white;text-align: justify; font-family : arial, helvetica, sans-serif; font-size: 10;">Bagi PT yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara.</td>
                      </tr>
                      </table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Data Tabel 4.3.3.xls');
        echo $sdmk5Data;
    }
    public function excelSdm5()
    {
        $sdm5s = DB::table('aktivitas_dosen_sesuai_sks')->get();

        $sdmk5Data = "";

        if(count($sdm5s) >0 ){
            $sdmk5Data .= '<table>
            <body>
                <h4> Tabel 3.3 Data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat FMIPA</h4>
            <table border="1">
               <tr>
               <th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Kurikulum</font></th>
            <th width="100px" style="border:1px solid #000; border-width: thin; background-color:#daeef3;" style="font-size:12px"><font face="Arial">Tahun</font></th>
            </tr></th>';
 
            foreach ($sdm5s as $sdm5) {
                $sdmk5Data .= '

                <tr>
                <th>
                <td style= "border: 1px solid black">'.$sdm5->sks_pengajaran_pada_ps_lain_pt_sendiri.'</td>
                </tr></th>
                </table>
                </body>';
            }
            $sdmk5Data .='</table>';
        }
 
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=Kurikulum FMIPA IPB.xls');
        echo $sdmk5Data;
    }

    
     public function sdm5Download(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $sdm5s = Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->get();
        $pdf = PDF::loadView('sdm5.pdf', compact('sdm5s','sdmk5'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

public function downloadsdm5(Request $request)
    {
        $id_departemen = Auth::user()->id_departemen;
        $sdmk5 = DB::table('users')
                        ->join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
                        ->where('id','=',Auth::user()->id)
                        ->get();

         $date1 = Carbon::now()->startOfYear()->subYear(4)->subMonth(4);
         $date2 = Carbon::now()->startOfYear()->addYear(1)->subMonth(4);
         $sdm5s = Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                        ->where('id_departemen', $id_departemen)
              ->orderBy('nama_sdm5')
                        ->get();
         $totalsks1=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_ps_sendiri');
        $totalsks2=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_ps_lain_pt_sendiri');
        $totalsks3=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengajaran_pada_pt_lain');
        $totalsks4=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_penelitian');
        $totalsks5=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_pengabdian_kepada_masyarakat');
        $totalsks6=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_manajemen_pt_sendiri');
        $totalsks7=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum('sks_manajemen_pt_lain');
        $totaljumlah=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->sum(DB::raw('sks_pengajaran_pada_ps_sendiri+sks_pengajaran_pada_ps_lain_pt_sendiri+sks_pengajaran_pada_pt_lain+sks_penelitian+sks_pengabdian_kepada_masyarakat+sks_manajemen_pt_sendiri+sks_manajemen_pt_lain'));

        $ratasks1=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_ps_sendiri');
        $ratasks2=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_ps_lain_pt_sendiri');
        $ratasks3=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengajaran_pada_pt_lain');
        $ratasks4=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_penelitian');
        $ratasks5=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_pengabdian_kepada_masyarakat');
        $ratasks6=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_manajemen_pt_sendiri');
        $ratasks7=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg('sks_manajemen_pt_lain');
        $ratajumlah=Sdm5::join('departemen', 'id_dept', '=', 'id_departemen')
                ->where('id_departemen', $id_departemen)
                ->avg(DB::raw('sks_pengajaran_pada_ps_sendiri+sks_pengajaran_pada_ps_lain_pt_sendiri+sks_pengajaran_pada_pt_lain+sks_penelitian+sks_pengabdian_kepada_masyarakat+sks_manajemen_pt_sendiri+sks_manajemen_pt_lain'));
        $pdf = PDF::loadView('sdm5.pdfm', compact('sdm5s','sdmk5','totalsks1','totalsks2','totalsks3','totalsks4','totalsks5','totalsks6','totalsks7','totaljumlah','ratasks1','ratasks2','ratasks3','ratasks4','ratasks5','ratasks6','ratasks7','ratajumlah'));
        $pdf ->setPaper('a4', 'potrait');
        return $pdf->stream();
        // return view('jumlah.pdf', compact('jumlahs'));
    }

    // templete aktivitas_dosen_sesuai_sks
public function sdmk5xlx() {
        
        $pathToFile = public_path("aktivitas_dosen_sesuai_sks.xlsx");

        $name = 'Templete Unggah Data Aktivitas Dosen Sesuai SKS.xlsx';

        $headers = ['Content-Type: application/xlsx'];



        return response()->download($pathToFile, $name, $headers);
}
}
