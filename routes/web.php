<?php

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

Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');
Route::resource('profiles', 'ProfilController');
// Route::resource('bpbd', 'BpbdController');
// Route::resource('dinas', 'DinasController');

Auth::routes();

Route::get('/profile/{id}', 'ProfilController@show')->name('profile')->middleware('auth:masyarakat');
Route::get('/profile/{id}/edit', 'ProfilController@edit')->name('edit-profile')->middleware('auth:masyarakat');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth:masyarakat');
Route::get('/bpbd', 'BpbdController@index')->name('dashboard-bpbd')->middleware('auth:bpbd');
Route::get('/dinas', 'DinasController@index')->name('dashboard-dinas')->middleware('auth:dinas');

Route::get('/laporan', function () {
	return view('posts.create');
})->name('laporan');

Route::get('/cek-laporan', 'PostsController@index')->name('cek-laporan');
Route::get('charts', 'ChartsController@index')->name('wilayah-chart');
Route::get('chartInfra', 'ChartsController@index')->name('infra-chart');

Route::prefix('akun')->group(function () {
	Route::get('/login', 'Auth\LoginController@showLogin')->name('akun.login')->middleware('guest');
	Route::post('/login', 'Auth\LoginController@login')->name('akun.login.submit');
	Route::get('/logout', 'Auth\LoginController@logout')->name('akun.logout');
});

// Route::get('/out', 'Auth\LoginController@logout')->name('out');
