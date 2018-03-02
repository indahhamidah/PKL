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

Route::get('/formPenerimaan', function () {
    return view('formPenerimaan');
});
Route::resource('penerimaans','PenerimaanController');
Auth::routes();
Route::resource('kegiatan','KegiatanController');

Route::resource('jumlah', 'JumlahController');
Route::resource('lulusan', 'LulusanController');
