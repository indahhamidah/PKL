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

Route::resource('penerimaans','PenerimaanController');
Auth::routes();
Route::resource('kegiatan','KegiatanController');

Route::resource('jumlah', 'JumlahController');
Route::resource('lulusan', 'LulusanController');

Route::post('import', 'JumlahController@jumlahImport')->name('jumlah.import');
Route::post('import1', 'LulusanController@lulusanImport')->name('lulusan.import');
Route::post('import2', 'KegiatanController@kegiatanImport')->name('kegiatan.import');