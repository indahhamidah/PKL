<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::view('admin/admin', 'admin.admin');

Route::resource('kegiatan','KegiatanController');
Route::resource('jumlah', 'JumlahController');
Route::resource('lulusan', 'LulusanController');

Route::resource('redaksikegiatan','RedaksiKegiatanController');
Route::resource('redaksilulusan','RedaksiLulusanController');
Route::resource('redaksijumlah','RedaksiJumlahController');
// iskandar
Route::resource('kurikulumf','KurikulumfController');
Route::resource('kurikulum1','Kurikulum1Controller');
Route::resource('kurikulum2','Kurikulum2Controller');
Route::resource('kurikulum3','Kurikulum3Controller');
Route::resource('kurikulum4','Kurikulum4Controller');
Route::resource('kurikulum5','Kurikulum5Controller');
Route::resource('kurikulum6','Kurikulum6Controller');
Route::resource('kurikulum7','Kurikulum7Controller');
Route::resource('kurikulum8','Kurikulum8Controller');
Route::resource('kurikulum9','Kurikulum9Controller');
Route::resource('sdm1','Sdm1Controller');
Route::resource('sdm2','Sdm2Controller');
Route::resource('sdm3','sdm3Controller');
Route::resource('sdm4','sdm4Controller');
Route::resource('sdm5','sdm5Controller');
Route::resource('sdm6','sdm6Controller');
Route::resource('sdm7','sdm7Controller');
Route::resource('sdm8','sdm8Controller');
Route::resource('sdm9','sdm9Controller');
Route::resource('sdm10','sdm10Controller');
Route::resource('sdm11','sdm11Controller');
Route::resource('sdm12','sdm12Controller');
Route::resource('sdm13','sdm13Controller');
Route::resource('sdm14','sdm14Controller');
Route::resource('sdm15','sdm15Controller');
Route::resource('sdm16','Sdm16Controller');
Route::resource('sdmf2','sdmf2Controller');
Route::resource('sdmf3','sdmf3Controller');
Route::resource('sdmf4','sdmf4Controller');
Route::resource('sdmf5','sdmf5Controller');
//Kurikulum Fmipa
Route::resource('Kurikulum_Fmipa', 'KurikulumFmipaController');
Route::put('Kurikulum_Fmipa', 'KurikulumFmipaController@update_peran')->name('Kurikulum_Fmipa');
//Kurikulum Departemen 1
Route::resource('Kurikulum_Departemen_1', 'KurikulumDepartemen1Controller');
Route::put('Kurikulum_Departemen_1', 'KurikulumDepartemen1Controller@update_peran')->name('Kurikulum_Departemen_1');
//Kurikulum Departemen 2
Route::resource('Kurikulum_Departemen_2', 'KurikulumDepartemen2Controller');
Route::put('Kurikulum_Departemen_2', 'KurikulumDepartemen2Controller@update_peran')->name('Kurikulum_Departemen_2');
//Kurikulum Departemen 3
Route::resource('Kurikulum_Departemen_3', 'KurikulumDepartemen3Controller');
Route::put('Kurikulum_Departemen_3', 'KurikulumDepartemen3Controller@update_peran')->name('Kurikulum_Departemen_3');
//Kurikulum Departemen 8
Route::resource('Kurikulum_Departemen_8', 'KurikulumDepartemen8Controller');
Route::put('Kurikulum_Departemen_8', 'KurikulumDepartemen8Controller@update_peran')->name('Kurikulum_Departemen_8');
//Sdm Fmipa 1
Route::resource('Sdm_Fmipa_1', 'SdmFmipa1Controller');
Route::put('Sdm_Fmipa_1', 'SdmFmipa1Controller@update_peran')->name('Sdm_Fmipa_1');
//Sdm Fmipa 2
Route::resource('Sdm_Fmipa_2', 'SdmFmipa2Controller');
Route::put('Sdm_Fmipa_2', 'SdmFmipa2Controller@update_peran')->name('Sdm_Fmipa_2');
//Sdm Departemen 1
Route::resource('Sdm_Departemen_1', 'SdmDepartemen1Controller');
Route::put('Sdm_Departemen_1', 'SdmDepartemen1Controller@update_peran')->name('Sdm_Departemen_1');

Route::post('import', 'JumlahController@jumlahImport')->name('jumlah.import');
Route::post('import1', 'LulusanController@lulusanImport')->name('lulusan.import');
Route::post('import2', 'KegiatanController@kegiatanImport')->name('kegiatan.import');
Route::post('import3', 'KurikulumfController@kurikulumfImport')->name('kurikulumf.import');
Route::post('import4', 'Kurikulum1Controller@kurikulum1Import')->name('kurikulum1.import');
Route::post('import5', 'Kurikulum2Controller@kurikulum2Import')->name('kurikulum2.import');
Route::post('import6', 'Kurikulum3Controller@kurikulum3Import')->name('kurikulum3.import');
Route::post('import7', 'Kurikulum4Controller@kurikulum4Import')->name('kurikulum4.import');
Route::post('import8', 'Kurikulum5Controller@kurikulum5Import')->name('kurikulum5.import');
Route::post('import9', 'Kurikulum6Controller@kurikulum6Import')->name('kurikulum6.import');
Route::post('import10', 'Kurikulum7Controller@kurikulum7Import')->name('kurikulum7.import');
Route::post('import11', 'Kurikulum8Controller@kurikulum8Import')->name('kurikulum8.import');
Route::post('import12', 'Kurikulum9Controller@kurikulum9Import')->name('kurikulum9.import');
Route::post('import13', 'Sdm1Controller@sdm1Import')->name('sdm1.import');
Route::post('import14', 'Sdm2Controller@sdm2Import')->name('sdm2.import');
Route::post('import15', 'sdm3Controller@sdm3Import')->name('sdm3.import');
Route::post('import16', 'sdm4Controller@sdm4Import')->name('sdm4.import');
Route::post('import17', 'sdm5Controller@sdm5Import')->name('sdm5.import');
Route::post('import18', 'sdm6Controller@sdm6Import')->name('sdm6.import');
Route::post('import19', 'sdm7Controller@sdm7Import')->name('sdm7.import');
Route::post('import20', 'sdm8Controller@sdm8Import')->name('sdm8.import');
Route::post('import21', 'sdm9Controller@sdm9Import')->name('sdm9.import');
Route::post('import22', 'sdm10Controller@sdm10Import')->name('sdm10.import');
Route::post('import23', 'sdm11Controller@sdm11Import')->name('sdm11.import');
Route::post('import24', 'sdm12Controller@sdm12Import')->name('sdm12.import');
Route::post('import25', 'sdm13Controller@sdm13Import')->name('sdm13.import');
Route::post('import26', 'sdm14Controller@sdm14Import')->name('sdm14.import');
Route::post('import27', 'sdm15Controller@sdm15Import')->name('sdm15.import');
Route::post('import28', 'Sdm16Controller@sdm16Import')->name('sdm16.import');
Route::post('import29', 'sdmf2Controller@sdmf2Import')->name('sdmf2.import');
Route::post('import30', 'sdmf3Controller@sdmf3Import')->name('sdmf3.import');
Route::post('import31', 'sdmf4Controller@sdmf4Import')->name('sdmf4.import');
Route::post('import32', 'sdmf5Controller@sdmf5Import')->name('sdmf5.import');

Route::get('export', 'JumlahController@jumlahExport')->name('jumlah.export');
Route::get('export1', 'LulusanController@lulusanExport')->name('lulusan.export');
Route::get('export2', 'KegiatanController@kegiatanExport')->name('kegiatan.export');
Route::get('export3', 'KurikulumfController@kurikulumfExport')->name('kurikulumf.export');
Route::get('export4', 'Kurikulum1Controller@kurikulum1Export')->name('kurikulum1.export');
Route::get('export5', 'Kurikulum2Controller@kurikulum2Export')->name('kurikulum2.export');
Route::get('export6', 'Kurikulum3Controller@kurikulum3Export')->name('kurikulum3.export');
Route::get('export7', 'Kurikulum4Controller@kurikulum4Export')->name('kurikulum4.export');
Route::get('export8', 'Kurikulum5Controller@kurikulum5Export')->name('kurikulum5.export');
Route::get('export9', 'Kurikulum6Controller@kurikulum6Export')->name('kurikulum6.export');
Route::get('export10', 'Kurikulum7Controller@kurikulum7Export')->name('kurikulum7.export');
Route::get('export11', 'Kurikulum8Controller@kurikulum8Export')->name('kurikulum8.export');
Route::get('export12', 'Kurikulum9Controller@kurikulum9Export')->name('kurikulum9.export');
Route::get('export13', 'Sdm1Controller@sdm1Export')->name('sdm1.export');
Route::get('export14', 'Sdm2Controller@sdm2Export')->name('sdm2.export');
Route::get('export15', 'sdm3Controller@sdm3Export')->name('sdm3.export');
Route::get('export16', 'sdm4Controller@sdm4Export')->name('sdm4.export');
Route::get('export17', 'sdm5Controller@sdm5Export')->name('sdm5.export');
Route::get('export18', 'sdm6Controller@sdm6Export')->name('sdm6.export');
Route::get('export19', 'sdm7Controller@sdm7Export')->name('sdm7.export');
Route::get('export20', 'sdm8Controller@sdm8Export')->name('sdm8.export');
Route::get('export21', 'sdm9Controller@sdm9Export')->name('sdm9.export');
Route::get('export22', 'sdm10Controller@sdm10Export')->name('sdm10.export');
Route::get('export23', 'sdm11Controller@sdm11Export')->name('sdm11.export');
Route::get('export24', 'sdm12Controller@sdm12Export')->name('sdm12.export');
Route::get('export25', 'sdm13Controller@sdm13Export')->name('sdm13.export');
Route::get('export26', 'sdm14Controller@sdm14Export')->name('sdm14.export');
Route::get('export27', 'sdm15Controller@sdm15Export')->name('sdm15.export');
Route::get('export28', 'Sdm16Controller@sdm16Export')->name('sdm16.export');
Route::get('export29', 'sdmf2Controller@sdmf2Export')->name('sdmf2.export');
Route::get('export30', 'sdmf3Controller@sdmf3Export')->name('sdmf3.export');
Route::get('export31', 'sdmf4Controller@sdmf4Export')->name('sdmf4.export');
Route::get('export32', 'sdmf5Controller@sdmf5Export')->name('sdmf5.export');

//user
Route::get("download","JumlahController@jumlahDownload")->name('jumlah.download');
Route::get("download1","LulusanController@lulusanDownload")->name('lulusan.download');
Route::get("download2","KegiatanController@kegiatanDownload")->name('kegiatan.download');
Route::get("download3","KurikulumfController@kurikulumfDownload")->name('kurikulumf.download');
Route::get("download4","Kurikulum1Controller@kurikulum1Download")->name('kurikulum1.download');
Route::get("download5","Kurikulum2Controller@kurikulum2Download")->name('kurikulum2.download');
Route::get("download6","Kurikulum3Controller@kurikulum3Download")->name('kurikulum3.download');
Route::get("download7","Kurikulum4Controller@kurikulum4Download")->name('kurikulum4.download');
Route::get("download8","Kurikulum5Controller@kurikulum5Download")->name('kurikulum5.download');
Route::get("download9","Kurikulum6Controller@kurikulum6Download")->name('kurikulum6.download');
Route::get("download10","Kurikulum7Controller@kurikulum7Download")->name('kurikulum7.download');
Route::get("download11","Kurikulum8Controller@kurikulum8Download")->name('kurikulum8.download');
Route::get("download12","Kurikulum9Controller@kurikulum9Download")->name('kurikulum9.download');
Route::get("download13","Sdm1Controller@sdm1Download")->name('sdm1.download');
Route::get("download14","Sdm2Controller@sdm2Download")->name('sdm2.download');
Route::get("download15","sdm3Controller@sdm3Download")->name('sdm3.download');
Route::get("download16","sdm4Controller@sdm4Download")->name('sdm4.download');
Route::get("download17","sdm5Controller@sdm5Download")->name('sdm5.download');
Route::get("download18","sdm6Controller@sdm6Download")->name('sdm6.download');
Route::get("download19","sdm7Controller@sdm7Download")->name('sdm7.download');
Route::get("download20","sdm8Controller@sdm8Download")->name('sdm8.download');
Route::get("download21","sdm9Controller@sdm9Download")->name('sdm9.download');
Route::get("download22","sdm10Controller@sdm10Download")->name('sdm10.download');
Route::get("download23","sdm11Controller@sdm11Download")->name('sdm11.download');
Route::get("download24","sdm12Controller@sdm12Download")->name('sdm12.download');
Route::get("download25","sdm13Controller@sdm13Download")->name('sdm13.download');
Route::get("download26","sdm14Controller@sdm14Download")->name('sdm14.download');
Route::get("download27","sdm15Controller@sdm15Download")->name('sdm15.download');
Route::get("download28","Sdm16Controller@sdm16Download")->name('sdm16.download');
Route::get("download29","sdmf2Controller@sdmf2Download")->name('sdmf2.download');
Route::get("download30","sdmf3Controller@sdmf3Download")->name('sdmf3.download');
Route::get("download31","sdmf4Controller@sdmf4Download")->name('sdmf4.download');
Route::get("download32","sdmf5Controller@sdmf5Download")->name('sdmf5.download');

Route::get('jumlahexcel','JumlahController@exceljumlah')->name('jumlah.jumlahexcel');

Route::post("cariTahun", "JumlahController@cariTahun");
Route::post("cariTahun1", "LulusanController@cariTahun1")->name('lulusan.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kegiatan.cariTahun');
Route::post('cari_lulusan', 'LulusanController@cari')->name('lulusan.cari');
Route::post("cari", "JumlahController@cari");
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kurikulumf.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kurikulum1.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kurikulum2.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kurikulum3.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kurikulum4.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kurikulum5.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kurikulum6.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kurikulum7.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kurikulum8.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kurikulum9.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm1.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm2.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm3.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm4.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm5.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm6.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm7.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm8.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm9.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm10.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm11.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm12.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm13.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm14.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm15.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdm16.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdmf2.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdmf3.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdmf4.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('sdmf5.cariTahun');

//pdf 
Route::get('downloadm','JumlahController@downloadjumlah')->name('jumlah.downloadm');
Route::get('downloadlulusan','LulusanController@downloadlulusan')->name('lulusan.downloadlulusan');
Route::get('downloadkegiatan','KegiatanController@downloadkegiatan')->name('kegiatan.downloadkegiatan');
Route::get('downloadkurikulumf','KurikulumfController@downloadkurikulumf')->name('kurikulumf.downloadkurikulumf');
Route::get('downloadkurikulum1','Kurikulum1Controller@downloadkurikulum1')->name('kurikulum1.downloadkurikulum1');
Route::get('downloadkurikulum2','Kurikulum2Controller@downloadkurikulum2')->name('kurikulum2.downloadkurikulum2');
Route::get('downloadkurikulum3','Kurikulum3Controller@downloadkurikulum3')->name('kurikulum3.downloadkurikulum3');
Route::get('downloadkurikulum4','Kurikulum4Controller@downloadkurikulum4')->name('kurikulum4.downloadkurikulum4');
Route::get('downloadkurikulum5','Kurikulum5Controller@downloadkurikulum5')->name('kurikulum5.downloadkurikulum5');
Route::get('downloadkurikulum6','Kurikulum6Controller@downloadkurikulum6')->name('kurikulum6.downloadkurikulum6');
Route::get('downloadkurikulum7','Kurikulum7Controller@downloadkurikulum7')->name('kurikulum7.downloadkurikulum7');
Route::get('downloadkurikulum8','Kurikulum8Controller@downloadkurikulum8')->name('kurikulum8.downloadkurikulum8');
Route::get('downloadkurikulum9','Kurikulum9Controller@downloadkurikulum9')->name('kurikulum9.downloadkurikulum9');
Route::get('downloadsdm1','Sdm1Controller@downloadsdm1')->name('sdm1.downloadsdm1');
Route::get('downloadsdm2','Sdm2Controller@downloadsdm2')->name('sdm2.downloadsdm2');
Route::get('downloadsdm3','sdm3Controller@downloadsdm3')->name('sdm3.downloadsdm3');
Route::get('downloadsdm4','sdm4Controller@downloadsdm4')->name('sdm4.downloadsdm4');
Route::get('downloadsdm5','sdm5Controller@downloadsdm5')->name('sdm5.downloadsdm5');
Route::get('downloadsdm6','sdm6Controller@downloadsdm6')->name('sdm6.downloadsdm6');
Route::get('downloadsdm7','sdm7Controller@downloadsdm7')->name('sdm7.downloadsdm7');
Route::get('downloadsdm8','sdm8Controller@downloadsdm8')->name('sdm8.downloadsdm8');
Route::get('downloadsdm9','sdm9Controller@downloadsdm9')->name('sdm9.downloadsdm9');
Route::get('downloadsdm10','sdm10Controller@downloadsdm10')->name('sdm10.downloadsdm10');
Route::get('downloadsdm11','sdm11Controller@downloadsdm11')->name('sdm11.downloadsdm11');
Route::get('downloadsdm12','sdm12Controller@downloadsdm12')->name('sdm12.downloadsdm12');
Route::get('downloadsdm13','sdm13Controller@downloadsdm13')->name('sdm13.downloadsdm13');
Route::get('downloadsdm14','sdm14Controller@downloadsdm14')->name('sdm14.downloadsdm14');
Route::get('downloadsdm15','sdm15Controller@downloadsdm15')->name('sdm15.downloadsdm15');
Route::get('downloadsdm16','Sdm16Controller@downloadsdm16')->name('sdm16.downloadsdm16');
Route::get('downloadsdmf2','sdmf2Controller@downloadsdmf2')->name('sdmf2.downloadsdmf2');
Route::get('downloadsdmf3','sdmf3Controller@downloadsdmf3')->name('sdmf3.downloadsdmf3');
Route::get('downloadsdmf4','sdmf4Controller@downloadsdmf4')->name('sdmf4.downloadsdmf4');
Route::get('downloadsdmf5','sdmf5Controller@downloadsdmf5')->name('sdmf5.downloadsdmf5');

//excel
Route::get('jumlahexcel','JumlahController@exceljumlah')->name('jumlah.jumlahexcel');
Route::get('lulusanexcel','LulusanController@excellulusan')->name('lulusan.lulusanexcel');
Route::get('kegiatanexcel','KegiatanController@excelkegiatan')->name('kegiatan.kegiatanexcel');
Route::get('kurikulumfexcel','KurikulumfController@excelkurikulumf')->name('kurikulumf.kurikulumfexcel');
Route::get('kurikulum1excel','Kurikulum1Controller@excelkurikulum1')->name('kurikulum1.kurikulum1excel');
Route::get('kurikulum2excel','Kurikulum2Controller@excelkurikulum2')->name('kurikulum2.kurikulum2excel');
Route::get('kurikulum3excel','Kurikulum3Controller@excelkurikulum3')->name('kurikulum3.kurikulum3excel');
Route::get('kurikulum4excel','Kurikulum4Controller@excelkurikulum4')->name('kurikulum4.kurikulum4excel');
Route::get('kurikulum5excel','Kurikulum5Controller@excelkurikulum5')->name('kurikulum5.kurikulum5excel');
Route::get('kurikulum6excel','Kurikulum6Controller@excelkurikulum6')->name('kurikulum6.kurikulum6excel');
Route::get('kurikulum7excel','Kurikulum7Controller@excelkurikulum7')->name('kurikulum7.kurikulum7excel');
Route::get('kurikulum8excel','Kurikulum8Controller@excelkurikulum8')->name('kurikulum8.kurikulum8excel');
Route::get('kurikulum9excel','Kurikulum9Controller@excelkurikulum9')->name('kurikulum9.kurikulum9excel');
Route::get('sdm1excel','Sdm1Controller@excelsdm1')->name('sdm1.sdm1excel');
Route::get('sdm2excel','Sdm2Controller@excelsdm2')->name('sdm2.sdm2excel');
Route::get('sdm3excel','sdm3Controller@excelsdm3')->name('sdm3.sdm3excel');
Route::get('sdm4excel','sdm4Controller@excelsdm4')->name('sdm4.sdm4excel');
Route::get('sdm5excel','sdm5Controller@excelsdm5')->name('sdm5.sdm5excel');
Route::get('sdm6excel','sdm6Controller@excelsdm6')->name('sdm6.sdm6excel');
Route::get('sdm7excel','sdm7Controller@excelsdm7')->name('sdm7.sdm7excel');
Route::get('sdm8excel','sdm8Controller@excelsdm8')->name('sdm8.sdm8excel');
Route::get('sdm9excel','sdm9Controller@excelsdm9')->name('sdm9.sdm9excel');
Route::get('sdm10excel','sdm10Controller@excelsdm10')->name('sdm10.sdm10excel');
Route::get('sdm11excel','sdm11Controller@excelsdm11')->name('sdm11.sdm11excel');
Route::get('sdm12excel','sdm12Controller@excelsdm12')->name('sdm12.sdm12excel');
Route::get('sdm13excel','sdm13Controller@excelsdm13')->name('sdm13.sdm13excel');
Route::get('sdm14excel','sdm14Controller@excelsdm14')->name('sdm14.sdm14excel');
Route::get('sdm15excel','sdm15Controller@excelsdm15')->name('sdm15.sdm15excel');
Route::get('sdm16excel','Sdm16Controller@excelsdm16')->name('sdm16.sdm16excel');
Route::get('sdmf2excel','sdmf2Controller@excelsdmf2')->name('sdmf2.sdmf2excel');
Route::get('sdmf3excel','sdmf3Controller@excelsdmf3')->name('sdmf3.sdmf3excel');
Route::get('sdmf4excel','sdmf4Controller@excelsdmf4')->name('sdmf4.sdmf4excel');
Route::get('sdmf5excel','sdmf5Controller@excelsdmf5')->name('sdmf5.sdmf5excel');

//Revisi
//Kurikulum Fmipa
Route::resource('standar6kurikulumf','KurikulumfmipaController');
Route::get('tambahkurikulumf', 'KurikulumfmipaController@create')->name('create.kurikulumf');
Route::post('simpankurikulumf', 'KurikulumfmipaController@store')->name("simpan.kurikulumf");
Route::post('ubahkurikulumf', 'KurikulumfmipaController@update')->name('ubah.kurikulumf');
Route::get("pdfuserkurikulumfmipa","KurikulumfmipaController@kurikulumfmipaDownload")->name('kurikulumfmipa.download');
//Kurikulum Departemen 1
Route::resource('standar6kurikulum01','Kurikulum1Controller');
Route::get('tambahkurikulum01', 'Kurikulum1Controller@create')->name('create.kurikulum01');
Route::post('simpankurikulum01', 'Kurikulum1Controller@store')->name("simpan.kurikulum01");
Route::post('ubahkurikulum01', 'Kurikulum1Controller@update')->name('ubah.kurikulum01');
Route::get("pdfuserkurikulum1","Kurikulum1Controller@kurikulum1Download")->name('kurikulum1.download');
//Kurikulum Departemen 2
Route::resource('standar6kurikulum02','Kurikulum2Controller');
Route::get('tambahkurikulum02', 'Kurikulum2Controller@create')->name('create.kurikulum02');
Route::post('simpankurikulum02', 'Kurikulum2Controller@store')->name("simpan.kurikulum02");
Route::post('ubahkurikulum02', 'Kurikulum2Controller@update')->name('ubah.kurikulum02');
Route::get("pdfuserkurikulum2","Kurikulum2Controller@kurikulum2Download")->name('kurikulum2.download');
//Kurikulum Departemen 3
Route::resource('standar6kurikulum03','Kurikulum3Controller');
Route::get('tambahkurikulum03', 'Kurikulum3Controller@create')->name('create.kurikulum03');
Route::post('simpankurikulum03', 'Kurikulum3Controller@store')->name("simpan.kurikulum03");
Route::post('ubahkurikulum03', 'Kurikulum3Controller@update')->name('ubah.kurikulum03');
Route::get("pdfuserkurikulum3","Kurikulum3Controller@kurikulum3Download")->name('kurikulum3.download');
//Kurikulum Departemen 5
Route::get('exportkurikulum5s', 'Kurikulum5Controller@kurikulum5sExport')->name('kurikulum5s.export');
//Kurikulum Departemen 6
Route::get('exportkurikulum6s', 'Kurikulum6Controller@kurikulum6sExport')->name('kurikulum6s.export');
//Kurikulum Departemen 8
Route::resource('standar6kurikulum08','Kurikulum8Controller');
Route::get('tambahkurikulum08', 'Kurikulum8Controller@create')->name('create.kurikulum08');
Route::post('simpankurikulum08', 'Kurikulum8Controller@store')->name("simpan.kurikulum08");
Route::post('ubahkurikulum08', 'Kurikulum8Controller@update')->name('ubah.kurikulum08');
Route::get("pdfuserkurikulum8","Kurikulum8Controller@kurikulum8Download")->name('kurikulum8.download');
//Kurikulum Departemen 9
Route::get('exportkurikulum9s', 'Kurikulum9Controller@kurikulum9sExport')->name('kurikulum9s.export');
//Sdm Fmipa 1
Route::resource('standar4sdmfmipa01','Sdmfmipa1Controller');
Route::get('tambahsdmfmipa01', 'Sdmfmipa1Controller@create')->name('create.sdmfmipa01');
Route::post('simpansdmfmipa01', 'Sdmfmipa1Controller@store')->name("simpan.sdmfmipa01");
Route::post('ubahsdmfmipa01', 'Sdmfmipa1Controller@update')->name('ubah.sdmfmipa01');
Route::get("pdfusersdmfmipa1","Sdmfmipa1Controller@sdmfmipa1Download")->name('sdmfmipa1.download');
//Sdm Fmipa 2
Route::resource('standar4sdmfmipa02','Sdmfmipa2Controller');
Route::get('tambahsdmfmipa02', 'Sdmfmipa2Controller@create')->name('create.sdmfmipa02');
Route::post('simpansdmfmipa02', 'Sdmfmipa2Controller@store')->name("simpan.sdmfmipa02");
Route::post('ubahsdmfmipa02', 'Sdmfmipa2Controller@update')->name('ubah.sdmfmipa02');
Route::get("pdfusersdmfmipa2","Sdmfmipa2Controller@sdmfmipa2Download")->name('sdmfmipa2.download');
//Sdm Departemen 1
Route::resource('standar4sdm01','Sdm1Controller');
Route::get('tambahsdm01', 'Sdm1Controller@create')->name('create.sdm01');
Route::post('simpansdm01', 'Sdm1Controller@store')->name("simpan.sdm01");
Route::post('ubahsdm01', 'Sdm1Controller@update')->name('ubah.sdm01');
Route::get("pdfusersdm1","Sdm1Controller@sdm1Download")->name('sdm1.download');
//Sdm Departemen 2
Route::resource('standar4sdm02','Sdm2Controller');
Route::get('tambahsdm02', 'Sdm2Controller@create')->name('create.sdm02');
Route::post('simpansdm02', 'Sdm2Controller@store')->name("simpan.sdm02");
Route::post('ubahsdm02', 'Sdm2Controller@update')->name('ubah.sdm02');
Route::get("pdfusersdm2","Sdm2Controller@sdm2Download")->name('sdm2.download');
//Sdm Departemen 3
Route::resource('Sdm_Departemen_3','Sdm3Controller');
Route::post('tambahsdm3', 'Sdm3Controller@store')->name("tambah.sdm3");
Route::post('uploadsdm3', 'Sdm3Controller@sdm3Import')->name('sdm3.import');
Route::post('uploadlampiransdm3', 'Sdm3Controller@lampiransdm3Upload')->name('lampiransdm3.upload');
Route::get("pdfuser","Sdm3Controller@sdm3Download")->name('sdm3.download');
Route::get('exportsdm3', 'Sdm3Controller@sdm3Export')->name('sdm3.export');
Route::get('/sdm3/download/{id_lampiran_sdm3}','Sdm3Controller@downloadLampiransdm3')->name('downloadlampiransdm3');
Route::get('downloadsdm3','Sdm3Controller@downloadsdm3')->name('sdm3.download');
Route::get('sdm3excel','Sdm3Controller@excelsdm3')->name('sdm3.sdm3excel');
//Sdm Departemen 4
Route::resource('Sdm_Departemen_4','Sdm4Controller');
Route::post('tambahsdm4', 'Sdm4Controller@store')->name("tambah.sdm4");
Route::post('uploadsdm4', 'Sdm4Controller@sdm4Import')->name('sdm4.import');
Route::post('uploadlampiransdm4', 'Sdm4Controller@lampiransdm4Upload')->name('lampiransdm4.upload');
Route::get("pdfuser","Sdm4Controller@sdm4Download")->name('sdm4.download');
Route::get('exportsdm4', 'Sdm4Controller@sdm4Export')->name('sdm4.export');
Route::get('/sdm4/download/{id_lampiran_sdm4}','Sdm4Controller@downloadLampiransdm4')->name('downloadlampiransdm4');
Route::get('downloadsdm4','Sdm4Controller@downloadsdm4')->name('sdm4.download');
Route::get('sdm4excel','Sdm4Controller@excelsdm4')->name('sdm4.sdm4excel');
//Sdm Departemen 8
Route::resource('Sdm_Departemen_8','Sdm8Controller');
Route::post('tambahsdm8', 'Sdm8Controller@store')->name("tambah.sdm8");
Route::post('uploadsdm8', 'Sdm8Controller@sdm8Import')->name('sdm8.import');
Route::post('uploadlampiransdm8', 'Sdm8Controller@lampiransdm8Upload')->name('lampiransdm8.upload');
Route::get("pdfuser","Sdm8Controller@sdm8Download")->name('sdm8.download');
Route::get('exportsdm8', 'Sdm8Controller@sdm8Export')->name('sdm8.export');
Route::get('/sdm8/download/{id_lampiran_sdm8}','Sdm8Controller@downloadLampiransdm8')->name('downloadlampiransdm8');
Route::get('downloadsdm8','Sdm8Controller@downloadsdm8')->name('sdm8.download');
Route::get('sdm8excel','Sdm8Controller@excelsdm8')->name('sdm8.sdm8excel');
//Sdm Departemen 12
Route::get('exportsdm12s', 'Sdm12Controller@sdm12sExport')->name('sdm12s.export');
//Sdm Departemen 16
Route::resource('standar4sdm016','Sdm16Controller');
Route::get('tambahsdm016', 'Sdm16Controller@create')->name('create.sdm016');
Route::post('simpansdm016', 'Sdm16Controller@store')->name("simpan.sdm016");
Route::post('ubahsdm016', 'Sdm16Controller@update')->name('ubah.sdm016');
Route::get("pdfusersdm16","Sdm16Controller@sdm16Download")->name('sdm16.download');

// Redaksi Standar 4b
Route::get('download_redaksi_standar4b', 'RedaksiEmpatbController@download_Redaksi_empatb');
// Redaksi Standar 6b
Route::get('download_redaksi_standar6b', 'RedaksiEnambController@download_Redaksi_enamb');
// Redaksi Standar 4a
Route::get('download_redaksi_standar4a', 'RedaksiEmpataController@download_Redaksi_empata');
// Redaksi Standar 6a
Route::get('download_redaksi_standar6a', 'RedaksiEnamaController@download_Redaksi_enama');
//Akhir Revisi


Route::get('/templete1', 'HomeController@download');
Route::get('/templete2', 'HomeController@temp');
Route::get('/templete3', 'HomeController@temple');
Route::get('/templete4', 'HomeController@csv');
Route::get('/templete5', 'HomeController@csv1');
Route::get('/templete6', 'HomeController@csv2');
Route::get('/templete35', 'Sdm5Controller@sdmk5xlx');
// Templete Meri->Dosen
Route::get('/templete_kerjasama_dalam', 'HomeController@templeteKerjasamaDalam');
Route::get('/templete_kerjasama_luar', 'HomeController@templeteKerjasamaLuar');
Route::get('/templete_penelitian', 'HomeController@templetePenelitian');
Route::get('/templete_pengabdian', 'HomeController@templetePengabdian');
Route::get('/templete_hasil_pendidikan', 'HomeController@templeteHasilPendidikan');
Route::get('/templete_hasil_penelitian_dan_hasil_pengabdian', 'HomeController@templeteHasilPenelitianPengabdian');

// user
Route::get("pengguna", "PenggunaController@create");
Route::post("pengguna", "PenggunaController@store");
Route::post("pengguna/{id}", "PenggunaController@update");
Route::resource('pengguna', 'PenggunaController');

// INDAH
// Standar 5
Route::resource('PenerimaanDana', 'PenerimaanDanaController');
Route::resource('PenggunaanDana', 'PenggunaanDanaController');
Route::resource('Sarana_Tambahan', 'SaranaTambahanController');

Route::resource('Peran_Fakultas', 'PeranFakultasController');
Route::resource('Penjelasan_Pengelolaan_Dana', 'PengelolaanDanaController');
Route::put('Penjelasan_Pengelolaan_Dana', 'PengelolaanDanaController@update_kelola')->name('Penjelasan_Pengelolaan_Dana');
Route::put('Peran_Fakultas', 'PeranFakultasController@update_peran')->name('Peran_Fakultas');
Route::put('Penilaian_Fmipa', 'SaranaTambahanController@penilaian_fmipa')->name('Penilaian_Fmipa');
Route::put('Penilaian_Pras_Fmipa', 'PrasaranaTambahanController@penilaian_pras_fmipa')->name('Penilaian_Pras_Fmipa');
Route::post("store_dana_penelitian", "PenggunaanDanaController@store_dana_penelitian")->name('store_dana_penelitian');
Route::post("store_dana_pengabdian", "PenggunaanDanaController@store_dana_pengabdian")->name('store_dana_pengabdian');
Route::put("dana_penelitian/{id_dana_penelitian}", "PenggunaanDanaController@update_dana_penelitian")->name('dana_penelitian');
Route::put("dana_pengabdian/{id_dana_pgbdn}", "PenggunaanDanaController@update_dana_pengabdian")->name('dana_pengabdian');
Route::delete("PenggunaanDana/{id_dana_penelitian}", "PenggunaanDanaController@destroy2")->name('PenggunaanDana.destroy2');
Route::delete("PenggunaanDanaa/{id_dana_pgbdn}", "PenggunaanDanaController@destroy3")->name('PenggunaanDanaa.destroy3');
Route::resource('SistemInformasi', 'SistemInformasiController');
Route::resource('Perangkat_Keras', 'PerangkatKerasController');
Route::delete("Sarana/{id_jp_seminar}", "SaranaController@destroy2")->name('Sarana.destroy2');
Route::delete("Saranaa/{id_alat_utama_lab}", "SaranaController@destroy3")->name('Saranaa.destroy3');
Route::post("storee_2", "SaranaController@storee_2")->name('storee_2');
Route::post("store_3", "SaranaController@store_3")->name('store_3');
Route::put("Saranaa_/{id_alat_utama_lab}", "SaranaController@update_4")->name('Saranaa_');
Route::put("Saranaa/{id_jp_seminar}", "SaranaController@updatee_3")->name('Saranaa');
Route::put("Sarana", "SaranaController@update_2")->name('Saranaupdate_2');
Route::resource('Sarana', 'SaranaController');
Route::delete("Prasaranaaa/{id_pras_penunjang}", "PrasaranaController@destroy2")->name('Prasaranaaa.destroy2');
Route::put("Prasaranaa/{id_pras_penunjang}", "PrasaranaController@updatee_3")->name('Prasaranaa3');
Route::post("store_2", "PrasaranaController@store_2")->name('store_2');
Route::put("Prasarana2/{id_rk_dosen_tetap}", "PrasaranaController@update_2")->name('Prasaranaupdate2');
Route::resource('Prasarana', 'PrasaranaController');
Route::resource('PL_Komersial', 'KomersialController');
Route::resource('Aksesibilitas_Data', 'AksesibilitasDataController');
Route::resource('Organoware', 'OrganowareController');
Route::put('Penjelasan_Organoware', 'OrganowareController@update_penjelasan')->name('Penjelasan_Organoware');
Route::put('Pendapat_Pimpinan_Fakultas', 'PendapatPimpinanFakultasController@update2')->name('Pendapat_Pimpinan_Fakultas');
Route::resource('Pendapat_Pimpinan_Fakultas', 'PendapatPimpinanFakultasController');

Route::post('upload_gbr2', 'KomersialController@uploadgbr2')->name('PL_Komersial.uploadgbr2');
Route::post('upload_gbr', 'OrganowareController@uploadgbr')->name('Organoware.uploadgbr');
Route::resource('Prasarana_Tambahan', 'PrasaranaTambahanController');

Route::post("store_inves", "SaranaTambahanController@store_inves")->name('store_inves');
Route::post("pras_store_inves", "PrasaranaTambahanController@store_inves")->name('pras_store_inves');
Route::post("store_rencana_inves", "SaranaTambahanController@store_rencana_inves")->name('store_rencana_inves');
Route::put('edit_rencana/{id_sarana_rencana}', 'SaranaTambahanController@update_rencana_inves')->name('edit_rencana');
Route::delete("rencana_sarana_rencana/{id_sarana_rencana}", "SaranaTambahanController@destroy2")->name('rencana_sarana_rencana.destroy2');

Route::put('Upaya_Sebar_Info', 'UpayaSebarInfoController@update2')->name('Upaya_Sebar_Info');
Route::resource('Upaya_Sebar_Info', 'UpayaSebarInfoController');
Route::put('Rencana_Pengembangan_S_I', 'RencanaPengembanganSIController@update2')->name('Rencana_Pengembangan_SI');
Route::resource('Rencana_Pengembangan_S_I', 'RencanaPengembanganSIController');

Route::resource('Contoh_Soal', 'ContohSoalController');
Route::resource('Mekanisme_Susun_MK', 'MekanismeMKController');
Route::put('Mekanisme_Susun_MK', 'MekanismeMKController@update_mekanisme')->name('Mekanisme_Susun_MK');
//download pdf perangkat keras
Route::get('download_pdf_hw','PerangkatKerasController@downloadRedaksiUser')->name('Perangkat_Keras.downloadRedaksiUser');
Route::get('download_pdf_hw_fmipa','PerangkatKerasController@downloadRedaksiFmipa')->name('Perangkat_Keras.downloadRedaksiFmipa');

//download pdf
Route::get('download_pdf_si','SistemInformasiController@downloadRedaksiUserSI')->name('SistemInformasi.downloadRedaksiUserSI');
Route::get('download_pdf_si_fmipa','SistemInformasiController@downloadRedaksiFmipaSI')->name('SistemInformasi.downloadRedaksiFmipaSI');
Route::get('download_pdf_akses_data','AksesibilitasDataController@download_pdf_akses_data');
Route::get('download_pdf_rk_dosen_tetap','PrasaranaController@download_pdf_rk_dosen_tetap');
Route::get('download_pdf_dana_penelitian','PenggunaanDanaController@download_pdf_dana_penelitian');
Route::get('download_pdf_dana_pengabdian','PenggunaanDanaController@download_pdf_dana_pengabdian');
Route::get('download_pdf_pengelolaan_dana','PengelolaanDanaController@download_pdf_pengelolaan_dana');
Route::get('download_pdf_penggunaan_dana_ps','PenggunaanDanaController@download_pdf_penggunaan_dana');
Route::get('download_pdf_prasarana_tambahan', 'PrasaranaTambahanController@download_pdf_pras_tamb');
Route::get('download_pdf_sarana_tambahan', 'SaranaTambahanController@download_pdf_sarana_tambahan');
Route::get('download_pdf_jurnal_prosiding', 'SaranaController@download_pdf_jp');
Route::get('download_pdf_sumber_pustaka_lain', 'SaranaController@download_pdf_sumber_pustaka');
Route::get('download_pdf_alat_lab', 'SaranaController@download_pdf_alat_lab');
Route::get('download_pdf_prasarana_ps', 'PrasaranaController@download_pdf_prasarana_ps');
Route::get('download_pdf_prasarana_penunjang', 'PrasaranaController@download_pdf_prasarana_penunjang');
Route::get('download_pdf_penerimaan_dana', 'PenerimaanDanaController@download_pdf_penerimaan_dana');
Route::get('download_pdf_pustaka_baca', 'SaranaController@download_pdf_pustaka_baca');
Route::get('download_pdf_mekanisme', 'MekanismeMKController@download_pdf_mekanisme');

// Redaksi Standar 5
Route::get('download_redaksi_standar5', 'RedaksiLimaController@download_Redaksi_lima_Fmipa');
Route::get('download_redaksi_standar5_PS', 'RedaksiLimaPSController@download_Redaksi_lima_PS');

// download Excel
Route::get('perangkat_keras_','PerangkatKerasController@download_excel_hw')->name('PerangkatKeras.download_excel_hw');
Route::get('aksesibilitas_data_','AksesibilitasDataController@download_excel_akses_data');
Route::get('Excel_Pustaka','SaranaController@download_excel_pustaka');
Route::get('Excel_Jurnal_Prosiding_Seminar','SaranaController@download_excel_jp');
Route::get('Excel_RK_Dosen_Tetap','PrasaranaController@download_excel_rk_dosen');
Route::get('Excel_Penerimaan_Dana','PenerimaanDanaController@download_excel_terima_dana');
Route::get('Excel_Dana_Penelitian','PenggunaanDanaController@download_excel_dana_penelitian');
Route::get('Excel_Dana_Pengabdian','PenggunaanDanaController@download_excel_dana_pengabdian');
Route::get('Excel_Penggunaan_Dana_PS','PenggunaanDanaController@download_excel_penggunaan_dana');
Route::get('Excel_Dana_Kegiatan_Tridarma','PenggunaanDanaController@download_excel_kegiatan_tridarma');
Route::get('Excel_Prasarana_Tambahan', 'PrasaranaTambahanController@download_excel_pras_tamb');
Route::get('Excel_Sarana_Tambahan', 'SaranaTambahanController@download_excel_sar_tamb');
Route::get('Excel_Sumber_Pustaka_Lain', 'SaranaController@download_excel_sumber_pustaka');
Route::get('Excel_Alat_Utama_Lab', 'SaranaController@download_excel_alat_lab');
Route::get('Excel_Prasarana_PS', 'PrasaranaController@download_excel_prasarana_ps');
Route::get('Excel_Prasarana_Penunjang', 'PrasaranaController@download_excel_prasarana_penunjang');
Route::get('Excel_Sistem_Informasi', 'SistemInformasiController@download_excel_si');

// MERI
// PENELITIAN
Route::resource('standar7penelitian','PenelitianController');
Route::post('tambahpenelitian', 'PenelitianController@store')->name("tambah.penelitian");
Route::post('uploadpenelitian', 'PenelitianController@penelitianImport')->name('penelitian.import');
Route::post('uploadbuktipenelitian', 'PenelitianController@buktiUpload')->name('bukti.upload');
Route::post('uploadproposalpenelitian', 'PenelitianController@proposalUpload')->name('proposal.upload');
// User
Route::get("pdfuser","PenelitianController@penelitianDownload")->name('penelitian.download');
Route::get('exportpenelitian', 'PenelitianController@penelitianExport')->name('penelitian.export');
Route::get('/penelitian/download/{id_bukti}','PenelitianController@downloadBukti')->name('downloadbukti');
Route::get('/penelitian/downloadProposal/{id_proposal}','PenelitianController@downloadProposal')->name('downloadproposal');

//Superadmin
Route::get('downloadpenelitian','PenelitianController@downloadpenelitian')->name('penelitian.download');
Route::get('penelitianexcel','PenelitianController@excelpenelitian')->name('penelitian.penelitianexcel');

// Redaksi Penelitian
Route::resource('redaksipenelitian','RedaksiPenelitianController');
Route::get('tambahredaksi', 'RedaksiPenelitianController@create')->name('create.redaksi');
Route::post('simpanredaksi', 'RedaksiPenelitianController@store')->name("simpan.redaksi");
Route::post('ubahredaksi', 'RedaksiPenelitianController@update')->name('ubah.redaksi');
Route::resource('mahasiswa_terlibat_penelitian','MahasiswaPenelitianController');
Route::get('export_mahasiswa_penelitian', 'MahasiswaPenelitianController@MahasiswaPenelitianExport')->name('mahasiswapenelitian.export');
Route::resource('redaksipenelitianfmipa','RedaksiPenelitianFmipaController');

// Kerjasama Dalam
Route::resource('standar7kerjasamadalamnegeri','KerjasamaDalamController');
Route::post('tambahkerjasamadalam', 'KerjasamaDalamController@store')->name("tambah.kerjasamadalam");
Route::post('uploadkerjasamadalamnegeri', 'KerjasamaDalamController@kerjasamaDalamImport')->name('kerjasamadalam.import');
Route::post('upload_dokumen_pendukung', 'KerjasamaDalamController@dokumenDupload')->name('dokumen.pendukungD');
// User
Route::get("pdfuser_kerjasamadalam","KerjasamaDalamController@kerjasamaDalamDownload")->name('kerjasamadalam.download');
Route::get('export_kerjasama_dalam', 'KerjasamaDalamController@kerjasamaDalamExport')->name('kerjasamadalam.export');
Route::get('/kerjasamadalam/downloaddokumen/{id_dokumenD}','KerjasamaDalamController@downloadDokumenD')->name('downloadDokumenD');

//Superadmin
Route::get('downloadkerjasamaDalam','KerjasamaDalamController@downloadkerjasamaDalam')->name('kerjasamadalam.download');
Route::get('kerjasama_dalam_excel','KerjasamaDalamController@excelkerjasamaDalam')->name('kerjasama.dalamexcel');

// Kerjasama Luar
Route::resource('standar7kerjasamaluarnegeri','KerjasamaLuarController');
Route::post('tambahkerjasamaluar', 'KerjasamaLuarController@store')->name("tambah.kerjasamaluar");
Route::post('uploadkerjasamaluarnegeri', 'KerjasamaLuarController@kerjasamaLuarImport')->name('kerjasamaluar.import');
Route::post('upload_dokumen_pendukung_luar', 'KerjasamaLuarController@dokumenLupload')->name('dokumen.pendukungL');
// User
Route::get("pdfuser_kerjasamaluar","KerjasamaLuarController@kerjasamaLuarDownload")->name('kerjasamaluar.download');
Route::get('export_kerjasama_luar', 'KerjasamaLuarController@kerjasamaLuarExport')->name('kerjasamaluar.export');
Route::get('/kerjasamaluar/downloaddokumen/{id_dokumenL}','KerjasamaLuarController@downloadDokumenL')->name('downloadDokumenL');

//Superadmin
Route::get('downloadkerjasamaLuar','KerjasamaLuarController@downloadkerjasamaLuar')->name('kerjasamaluar.download');
Route::get('kerjasama_luar_excel','KerjasamaLuarController@excelkerjasamaLuar')->name('kerjasama.luarexcel');

// PENGABDIAN
Route::resource('standar8pengabdian','PengabdianController');
Route::post('tambahpengabdian', 'PenelitianController@store')->name("tambah.pengabdian");
Route::post('uploadpengabdian', 'PengabdianController@pengabdianImport')->name('pengabdian.import');
Route::post('uploadbuktipengabdian', 'PengabdianController@buktiPengabdianUpload')->name('buktiPengabdian.upload');
Route::get('/pengabdian/download/{id_buktiPeng}','PengabdianController@downloadBuktiP')->name('downloadbuktiPeng');
Route::post('uploadproposalpengabdian', 'PengabdianController@proposalPengabdianUpload')->name('proposalPengabdian.upload');
Route::get('/pengabdian/downloadProposalPengabdian/{id_proposalPeng}','PengabdianController@downloadproposalP')->name('downloadproposalPeng');

// User
Route::get('exportpengabdian', 'PengabdianController@pengabdianExport')->name('pengabdian.export');
Route::get("pdfuserpengabdian","PengabdianController@pengabdianDownload")->name('pengabdian.download');

//Superadmin
Route::get('downloadpengabdian','PengabdianController@downloadpengabdian')->name('pengabdian.download');
Route::get('pengabdianexcel','PengabdianController@excelpengabdian')->name('pengabdian.pengabdianexcel');

// Redaksi Pengabdian
Route::resource('redaksipengabdian','RedaksiPengabdianController');
Route::get('tambahredaksipengabdian', 'RedaksiPengabdianController@create')->name('create.redaksipengabdian');
Route::post('simpanredaksipengabdian', 'RedaksiPengabdianController@store')->name("simpan.redaksipengabdian");
Route::post('ubahredaksipengebdian', 'RedaksiPengabdianController@update')->name('ubah.redaksipengabdian');
Route::resource('mahasiswa_terlibat_pengabdian','MahasiswaPengabdianController');
Route::get('export_mahasiswa_pengabdian', 'MahasiswaPengabdianController@MahasiswaPengabdianExport')->name('mahasiswapengabdian.export');
Route::resource('redaksipengabdianfmipa','RedaksiPengabdianFmipaController');

// LUARAN DAN CAPAIAN
// Hasil Pendidikan
Route::resource('standar9hasilpendidikan','HasilPendidikanController');
Route::post('uploadhasilpendidikan', 'HasilPendidikanController@hasilPendidikanImport')->name('hasilPendidikan.import');
Route::post('uploadbuktihasilpendidikan', 'HasilPendidikanController@lampiranUpload')->name('lampiran.upload');

// User
Route::get('exporthasilpendidikan', 'HasilPendidikanController@hasilPendidikanExport')->name('hasilPendidikan.export');
Route::get("pdfuserhasilpendidikan","HasilPendidikanController@hasilPendidikanDownload")->name('hasilPendidikan.download');
Route::get('/hasilPendidikan/download/{id_lampiran}','HasilPendidikanController@downloadLampiran')->name('downloadlampiran');

// Superadmin
Route::get('download_hasil_pendidikan','HasilPendidikanController@downloadhasilpendidikan')->name('hasil.pendidikandownload');
Route::get('hasil_pendidikan_excel','HasilPendidikanController@excelhasilpendidikan')->name('hasil.pendidikanexcel');

// Hasil Penelitian dan pengabdian
Route::resource('standar9hasilpenelitian','HasilPenelitianController');
Route::post('uploadhasilpenelitian', 'HasilPenelitianController@hasilPenelitianImport')->name('hasilPenelitian.import');
Route::post('uploadbuktihasilpenelitiandanpengabdian', 'HasilPenelitianController@hasilPenUpload')->name('lampiranPen.upload');
// User
Route::get('exporthasilpenelitian', 'HasilPenelitianController@hasilPenelitianExport')->name('hasilPenelitian.export');
Route::get("pdfuserhasilpenelitian","HasilPenelitianController@hasilPenelitianDownload")->name('hasilPenelitian.download');
Route::get('/hasilPenelitiandanPengabdian/download/{id_lampiranPen}','HasilPenelitianController@downloadLampiranPen')->name('downloadlampiranPen');

// Superadmin
Route::get('download_hasil_penelitian_dan_hasil_pengabdian','HasilPenelitianController@downloadhasilpenelitian')->name('hasil.penelitiandownload');
Route::get('hasil_penelitian_dan_hasil_pengabdian_excel','HasilPenelitianController@excelhasilpenelitian')->name('hasil.penelitianexcel');

Route::resource('standar9hasilpengabdian','HasilPengabdianController');
Route::post('uploadhasilpengabdian', 'HasilPengabdianController@hasilPengabdianImport')->name('hasilPengabdian.import');
// User
Route::get('exporthasilpengabdian', 'HasilPengabdianController@hasilPengabdianExport')->name('hasilPengabdian.export');
Route::get("pdfuserhasilpengabdian","HasilPengabdianController@hasilPengabdianDownload")->name('hasilPengabdian.download');




// VMTS
Route::resource('standar1visimisi','VmtsController');
Route::get('tambahvisimisi', 'VmtsController@create')->name('create.visimisi');
Route::post('simpanvisimisi', 'VmtsController@store')->name("simpan.visimisi");
Route::post('ubahvisimisi', 'VmtsController@update')->name('ubah.visimisi');
Route::delete('hapusstandar1/{id_vmts}', 'VmtsController@destroy1')->name('hapus.vmts');

Route::post('uploadlampiranstandar1', 'VmtsController@lampiranUpload')->name('lampiran.standar1');
Route::put('ubahlampiranstandar1/{id_lampiranstan1}', 'VmtsController@updateLampiran1')->name('ubah.lampiran1');

// User
Route::get("pdfuservmts","VmtsController@vmtsDownload")->name('vmts.download');


// TAMONGMA
Route::resource('standar2tamongma','TamongmaController');
Route::get('tambahtamongma', 'TamongmaController@create')->name('create.tamongma');
Route::post('simpantamongma', 'TamongmaController@store')->name("simpan.tamongma");
Route::get('ubahtamongma', 'TamongmaController@update')->name('ubah.tamongma');
Route::get("caritamongma","TamongmaController@tamongmaCari")->name('cari');
Route::post('uploadlampiranstandar2', 'TamongmaController@lampiran2Upload')->name('lampiran.standar2');
Route::put('ubahlampiranstandar2/{id_lampiranstan2}', 'TamongmaController@updateLampiran2')->name('ubah.lampiran2');
Route::delete('hapusstandar2/{id_tamongjama}', 'TamongmaController@destroy1')->name('hapus.tamongma');

// User
Route::get("pdfusertamongma","TamongmaController@tamongmaDownload")->name('tamongma.download');


Route::get("laporanakreditasi","LaporanAkreditasiController@laporanDownload")->name('laporan.download');

Route::get("standar2_tata_pamong_dan_kerjasama","TamongmaController@Standar2Download")->name('standar2.download');
Route::get("standar9_hasil_dan_capaian_program_studi","HasilPendidikanController@Standar9DepartemenDownload")->name('standar9departemen.download');
Route::get("standar9_hasil_dan_capaian_fakultas","HasilPendidikanController@Standar9FakultasDownload")->name('standar9fakultas.download');

Route::resource('redaksikegiatan','RedaksiKegiatanController');
Route::resource('redaksilulusan','RedaksiLulusanController');
Route::resource('redaksijumlah','RedaksiJumlahController');

// BUKU 3A AKREDITASI
Route::get('download_pdf_buku_3a', 'BukuTigaAController@download_pdf_3a');
Route::get('download_pdf_buku_3b', 'BukuTigaBController@download_pdf_3b');