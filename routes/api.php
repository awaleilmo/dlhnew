<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// api auth mobile
Route::post("/app/register", "UserMobileController@register")->name("mobileRegister");
Route::post("/app/login", "UserMobileController@login")->name("mobileLogin");
Route::get("/app/showuser", "UserMobileController@alluser")->name("showuser");
Route::get("/app/finduser", "UserMobileController@alluserfind")->name("finduser");
Route::get("/app/logout", "UserMobileController@logout")->name("logout/user");
Route::get("/app/dokling", "UserMobileController@dokling")->name("dokling/user");
Route::get("/app/cek/dokling",'UserMobileController@cekdokling')->name('cekdokling/user');
Route::get("/app/sipal", "UserMobileController@perizinan")->name("sipal/user");
Route::get("/app/cek/sipal",'UserMobileController@cekperizinan')->name('ceksipal/user');
Route::get('/app/artikel','UserMobileController@pojokwarga')->name('artikel/user');
Route::get('/app/findartikel','UserMobileController@findpojokwarga')->name('findartikel/user');
Route::get('/app/pengumuman','UserMobileController@pengumuman')->name('pengumuman/user');
Route::get('/app/findpengumuman','UserMobileController@findpengumuman')->name('findpengumuman/user');
Route::post('/app/pengaduan','UserMobileController@pengaduan')->name('pengaduan/user');
Route::post('/app/dokupload','UserMobileController@cdokir')->name('dokupload/user');
Route::get('/app/tentang','UserMobileController@tentang')->name('tentang/user');
Route::get('/app/bidang','UserMobileController@bidang')->name('bidang/user');
Route::get('/app/ukl','UserMobileController@ukl')->name('ukl/user');
Route::get('/app/menu/sipal','UserMobileController@sipal')->name('sipal/user');
Route::get('/app/sppl','UserMobileController@sppl')->name('sppl/user');
Route::get('/app/amdal','UserMobileController@amdal')->name('amdal/user');
Route::get('/app/info_data','UserMobileController@info_data')->name('info_data/user');
Route::get('/app/showpengaduan','UserMobileController@showpengaduan')->name('showpengaduan/user');
Route::get('/app/detailpengaduan','UserMobileController@detailpengaduan')->name('detailpengaduan/user');
Route::get('/app/infodok','UserMobileController@info_dok')->name('info_dok/user');
Route::get('/app/notifuser','UserMobileController@notifuser');
Route::get('/app/clearnotif','UserMobileController@notif');
Route::get('/app/foto','UserMobileController@foto');
Route::get('/app/video','UserMobileController@video');
Route::get('/app/video/{id}','AdminController@videom');
