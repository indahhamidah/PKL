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
Route::view('admin/admin', 'admin.admin');



Route::resource('kegiatan','KegiatanController');
Route::resource('jumlah', 'JumlahController');
Route::resource('lulusan', 'LulusanController');

Route::post('import', 'JumlahController@jumlahImport')->name('jumlah.import');
Route::post('import1', 'LulusanController@lulusanImport')->name('lulusan.import');
Route::post('import2', 'KegiatanController@kegiatanImport')->name('kegiatan.import');

Route::get('export', 'JumlahController@jumlahExport')->name('jumlah.export');
Route::get('export1', 'LulusanController@lulusanExport')->name('lulusan.export');
Route::get('export2', 'KegiatanController@kegiatanExport')->name('kegiatan.export');

//user
Route::get("download","JumlahController@jumlahDownload")->name('jumlah.download');
Route::get("download1","LulusanController@lulusanDownload")->name('lulusan.download');
Route::get("download2","KegiatanController@kegiatanDownload")->name('kegiatan.download');

// Route::post('cari_jumlah', 'JumlahController@cari')->name('jumlah.cari');
Route::post('cari_lulusan', 'LulusanController@cari')->name('lulusan.cari');
// Route::post('cari_kegiatan', 'KegiatanController@cari')->name('kegiatan.cari');
// Route::post("cariTahun", "JumlahController@cariTahun");


Route::get('jumlahexcel','JumlahController@exceljumlah')->name('jumlah.jumlahexcel');

Route::post("cariTahun", "JumlahController@cariTahun");
Route::post("cariTahun1", "LulusanController@cariTahun1")->name('lulusan.cariTahun');
Route::post("cariTahun1", "JumlahController@cariTahun2")->name('kegiatan.cariTahun');

Route::post("cari", "JumlahController@cari");

//pdf 
Route::get('downloadm','JumlahController@downloadjumlah')->name('jumlah.downloadm');
Route::get('downloadlulusan','LulusanController@downloadlulusan')->name('lulusan.downloadlulusan');
Route::get('downloadkegiatan','KegiatanController@downloadkegiatan')->name('kegiatan.downloadkegiatan');

//excel
Route::get('jumlahexcel','JumlahController@exceljumlah')->name('jumlah.jumlahexcel');
Route::get('lulusanexcel','LulusanController@excellulusan')->name('lulusan.lulusanexcel');
Route::get('kegiatanexcel','KegiatanController@excelkegiatan')->name('kegiatan.kegiatanexcel');


Route::get('/templete1', 'HomeController@download');
Route::get('/templete2', 'HomeController@temp');
Route::get('/templete3', 'HomeController@temple');
Route::get('/templete4', 'HomeController@csv');
Route::get('/templete5', 'HomeController@csv1');
Route::get('/templete6', 'HomeController@csv2');

Route::get("pengguna", "PenggunaController@create");
Route::post("pengguna", "PenggunaController@store");
Route::get("pengguna", "PenggunaController@update");
Route::post("pengguna", "PenggunaController@update");
Route::resource('pengguna', 'PenggunaController');