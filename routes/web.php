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
    return view('welcome');
});
//初期表示
Route::get('/portfolio', function () {
    return view('top');
})->name('top');

//リスト表示
Route::get('/portfolio/list', 'DispController@index')->name('list');

//本文表示
Route::get('/portfolio/list/{id}', 'DispController@read')->name('read');

//入力画面表示
Route::get('/portfolio/input', 'DispController@input')->name('input');

//登録処理
Route::post('/portfolio/insert', 'DispController@insert')->name('insert');

//削除処理
Route::post('/portfolio/delete', 'DispController@delete')->name('delete');

//編集画面表示
// Route::post('/portfolio/edit', 'DispController@edit')->name('edit');
// Route::get('/portfolio/edit', 'DispController@edit')->name('edit');
Route::match(['get', 'post'], '/portfolio/edit/{id}','DispController@edit')->name('edit');

//更新処理
Route::post('/portfolio/update', 'DispController@update')->name('update');