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

Auth::routes();

// api auth mobile
Route::post("/api/app/register", "UserMobileController@register")->name("mobileRegister");
Route::post("/api/app/login", "UserMobileController@login")->name("mobileLogin");
Route::get("/api/app/showuser", "UserMobileController@alluser")->name("showuser");
Route::get("/api/app/finduser", "UserMobileController@alluserfind")->name("finduser");
Route::get("/api/app/logout", "UserMobileController@logout")->name("logout/user");
Route::get("/api/app/dokling", "UserMobileController@dokling")->name("dokling/user");
Route::get("/api/app/cek/dokling",'UserMobileController@cekdokling')->name('cekdokling/user');
Route::get("/api/app/sipal", "UserMobileController@perizinan")->name("sipal/user");
Route::get("/api/app/cek/sipal",'UserMobileController@cekperizinan')->name('ceksipal/user');
Route::get('/api/app/artikel','UserMobileController@pojokwarga')->name('artikel/user');
Route::get('/api/app/findartikel','UserMobileController@findpojokwarga')->name('findartikel/user');
Route::get('/api/app/pengumuman','UserMobileController@pengumuman')->name('pengumuman/user');
Route::get('/api/app/findpengumuman','UserMobileController@findpengumuman')->name('findpengumuman/user');
Route::post('/api/app/pengaduan','UserMobileController@pengaduan')->name('pengaduan/user');
Route::post('/api/app/dokupload','UserMobileController@dokir')->name('dokupload/user');
Route::get('/api/app/tentang','UserMobileController@tentang')->name('tentang/user');
Route::get('/api/app/bidang','UserMobileController@bidang')->name('bidang/user');
Route::get('/api/app/ukl','UserMobileController@ukl')->name('ukl/user');
Route::get('/api/app/menu/sipal','UserMobileController@sipal')->name('sipal/user');
Route::get('/api/app/sppl','UserMobileController@sppl')->name('sppl/user');
Route::get('/api/app/amdal','UserMobileController@amdal')->name('amdal/user');
Route::get('/api/app/info_data','UserMobileController@info_data')->name('info_data/user');
Route::get('/api/app/showpengaduan','UserMobileController@showpengaduan')->name('showpengaduan/user');
Route::get('/api/app/detailpengaduan','UserMobileController@detailpengaduan')->name('detailpengaduan/user');
Route::get('/api/app/infodok','UserMobileController@info_dok')->name('info_dok/user');

//app mobile web
Route::get('/mobile/cilowong',function (){ return view('mobile.ciliwong'); });
Route::get('/mobile/data',function (){ return view('mobile.datam'); });
Route::get('/mobile/sppl',function (){ return view('mobile.spplm'); });
Route::get('/mobile/amdal',function (){ return view('mobile.amdalm'); });
Route::get('/mobile/uklupl',function (){ return view('mobile.uklm'); });
Route::get('/tdatat','AdminController@tdatat');
Route::get('/mobile/kadis', function (){return view('mobile.kadis');} );
Route::get('/mobile/sekdis', function (){return view('mobile.sekdis');} );
Route::get('/mobile/unpeg', function (){return view('mobile.unpeg');} );
Route::get('/mobile/pep', function (){return view('mobile.pep');} );
Route::get('/mobile/pplh', function (){return view('mobile.pplh');} );
Route::get('/mobile/pslb', function (){return view('mobile.pslb');} );
Route::get('/mobile/ppklh', function (){return view('mobile.ppklh');} );
Route::get('/mobile/uptlab', function (){return view('mobile.uptlab');} );
Route::get('/mobile/uptperbekalan', function (){return view('mobile.uptperbekalan');});
Route::get('/mobile/jabatan', function (){return view('mobile.jabatan');} );
Route::get('/mobile/sipal', function (){return view('mobile.sipal');} );
Route::get('/mobile/adwiyata', 'UserController@mobileadwiyata');
Route::get('/mobile/banksampah','UserController@mobilebanksampah');
Route::get('/mobile/banksampah/{id}','UserController@mobilebankdetail');
Route::get('/mobile/pengawasan','UserController@mobilepengawasan');
Route::get('/mobile/persampahan','UserController@mobilepersampahan');
Route::get('/mobile/tps3r',function (){return view('mobile.tps3r');});
Route::get('/mobile/ttps3r','AdminController@mobilettps3r');



//tampilan admin
Route::get("/admin","AdminController@index")->name("admin");
Route::get("/pengaduan","AdminController@pengaduan")->name("pengaduan");
Route::post("/hitpengaduan","AdminController@hitpengaduan")->name("hitpengaduan");
Route::get("/tpengaduan","AdminController@tpengaduan")->name("tpengaduan");
Route::get("/pengaduan/{id}","AdminController@printpengaduan");
Route::get("/adminpengawasan","AdminController@pengawasan")->name("admin/pengawasan");
Route::get("/admintimbulansampah","AdminController@timbulansampah")->name("admin/timbulansampah");
Route::get("/adminpenanganansampah","AdminController@penanganansampah")->name("admin/penanganansampah");
Route::get("/admindatatps","AdminController@datatps")->name("admin/datatps");
Route::get("/adminjenistps","AdminController@jenistps")->name("admin/jenistps");
Route::get("/adminangkutan","AdminController@angkutan")->name("admin/angkutan");
Route::get("/adminsca","AdminController@sca")->name("admin/sca");
Route::get("/adminscatingkat","AdminController@scatingkat")->name("admin/scatingkat");
Route::get("/adminsna","AdminController@sna")->name("admin/sna");
Route::get("/adminbank","AdminController@bank")->name("admin/banksampah");
Route::get("/admindoklingkungan","AdminController@doklingkungan")->name("admin/doklingkungan");
Route::get("/adminlimbah","AdminController@limbah")->name("admin/limbah");
Route::get("/admindata","AdminController@adata")->name("admin/data");
Route::get("/adminsetting","AdminController@setting")->name("admin/setting");
Route::get("/adminpojok","AdminController@pojok")->name("admin/pojok");
Route::get("/adminartikel","AdminController@artikel")->name("admin/artikel");
Route::get("/adminpengumuman","AdminController@pengumuman")->name("admin/pengumuman");
Route::get('/tps3r','AdminController@tps')->name('admin/tps3r');
Route::get('/adminfoto','AdminController@foto')->name('admin/foto');
Route::get('/adminvideo','AdminController@video')->name('admin/video');

//admin function button
Route::post('/cfoto', 'AdminController@cfoto')->name('cfoto');
Route::get('/sfoto/{id}', 'AdminController@sfoto')->name('sfoto');
Route::post('/efoto', 'AdminController@efoto')->name('efoto');
Route::get('/hfoto/{id}', 'AdminController@hfoto')->name('hfoto');
Route::get('/tvideo', 'AdminController@tvideo')->name('tvideo');
Route::post('/cvideo', 'AdminController@cvideo')->name('cvideo');
Route::get('/svideo/{id}', 'AdminController@svideo')->name('svideo');
Route::post('/evideo', 'AdminController@evideo')->name('evideo');
Route::get('/hvideo', 'AdminController@hvideo')->name('hvideo');
Route::get('/repairnotif', 'AdminController@repairnotif')->name('repairnotif');
Route::get('/tpelaku', 'AdminController@tpelaku')->name('tpelaku');
Route::post('/cpelaku', 'AdminController@cpelaku')->name('cpelaku');
Route::get('/spelaku/{id}', 'AdminController@spelaku')->name('spelaku');
Route::post('/epelaku', 'AdminController@epelaku')->name('epelaku');
Route::get('/hpelaku', 'AdminController@hpelaku')->name('hpelaku');
Route::get('/tdiawasi', 'AdminController@tdiawasi')->name('tdiawasi');
Route::post('/cdiawasi', 'AdminController@cdiawasi')->name('cdiawasi');
Route::get('/sdiawasi/{id}', 'AdminController@sdiawasi')->name('sdiawasi');
Route::post('/ediawasi', 'AdminController@ediawasi')->name('ediawasi');
Route::get('/hdiawasi', 'AdminController@hdiawasi')->name('hdiawasi');
Route::get('/ttimbulan','AdminController@ttimbulan')->name('ttimbulan');
Route::post('/ctimbulan', 'AdminController@ctimbulan')->name('ctimbulan');
Route::get('/stimbulan/{id}', 'AdminController@stimbulan')->name('stimbulan');
Route::post('/etimbulan', 'AdminController@etimbulan')->name('etimbulan');
Route::get('/htimbulan', 'AdminController@htimbulan')->name('htimbulan');
Route::get('/tliar','AdminController@tliar')->name('tliar');
Route::post('/cliar', 'AdminController@cliar')->name('cliar');
Route::get('/sliar/{id}', 'AdminController@sliar')->name('sliar');
Route::post('/eliar', 'AdminController@eliar')->name('eliar');
Route::get('/hliar', 'AdminController@hliar')->name('hliar');
Route::get('/tjtps','AdminController@tjtps')->name('tjtps');
Route::post('/cjtps', 'AdminController@cjtps')->name('cjpts');
Route::get('/sjtps/{id}', 'AdminController@sjtps')->name('sjtps');
Route::post('/ejtps', 'AdminController@ejtps')->name('ejtps');
Route::get('/hjtps', 'AdminController@hjtps')->name('hjtps');
Route::get('/ttps','AdminController@ttps')->name('ttps');
Route::post('/ctps', 'AdminController@ctps')->name('cpts');
Route::get('/stps/{id}', 'AdminController@stps')->name('stps');
Route::post('/etps', 'AdminController@etps')->name('etps');
Route::get('/htps', 'AdminController@htps')->name('htps');
Route::get('/tangkut','AdminController@tangkut')->name('tangkut');
Route::post('/cangkut', 'AdminController@cangkut')->name('cangkut');
Route::get('/sangkut/{id}', 'AdminController@sangkut')->name('sangkut');
Route::post('/eangkut', 'AdminController@eangkut')->name('eangkut');
Route::get('/hangkut', 'AdminController@hangkut')->name('hangkut');
Route::get('/tsca','AdminController@tsca')->name('tsca');
Route::post('/csca', 'AdminController@csca')->name('csca');
Route::get('/ssca/{id}', 'AdminController@ssca')->name('ssca');
Route::post('/esca', 'AdminController@esca')->name('esca');
Route::get('/hsca', 'AdminController@hsca')->name('hsca');
Route::get('/tsna','AdminController@tsna')->name('tsna');
Route::post('/csna', 'AdminController@csna')->name('csna');
Route::get('/ssna/{id}', 'AdminController@ssna')->name('ssna');
Route::post('/esna', 'AdminController@esna')->name('esna');
Route::get('/hsna', 'AdminController@hsna')->name('hsna');
Route::get('/tscatingkat','AdminController@tscatingkat')->name('tscatingkat');
Route::post('/cscatingkat', 'AdminController@cscatingkat')->name('cscatingkat');
Route::get('/sscatingkat/{id}', 'AdminController@sscatingkat')->name('sscatingkat');
Route::post('/escatingkat', 'AdminController@escatingkat')->name('escatingkat');
Route::get('/hscatingkat', 'AdminController@hscatingkat')->name('hscatingkat');
Route::get('/tbank','AdminController@tbank')->name('tbank');
Route::post('/cbank', 'AdminController@cbank')->name('cbank');
Route::get('/sbank/{id}', 'AdminController@sbank')->name('sbank');
Route::post('/ebank', 'AdminController@ebank')->name('ebank');
Route::get('/hbank', 'AdminController@hbank')->name('hbank');
Route::get('/tdokling','AdminController@tdokling')->name('tdokling');
Route::post('/cdokling', 'AdminController@cdokling')->name('cdokling');
Route::get('/sdokling/{id}', 'AdminController@sdokling')->name('sdokling');
Route::post('/edokling', 'AdminController@edokling')->name('edokling');
Route::get('/hdokling', 'AdminController@hdokling')->name('hdokling');
Route::get('/tlimbah','AdminController@tlimbah')->name('tlimbah');
Route::post('/climbah', 'AdminController@climbah')->name('climbah');
Route::get('/slimbah/{id}', 'AdminController@slimbah')->name('slimbah');
Route::post('/elimbah', 'AdminController@elimbah')->name('elimbah');
Route::get('/hlimbah', 'AdminController@hlimbah')->name('hlimbah');
Route::get('/tdata','AdminController@tdata')->name('tdata');
Route::post('/cdata', 'AdminController@cdata')->name('cdata');
Route::get('/sdata/{id}', 'AdminController@sdata')->name('sdata');
Route::post('/edata', 'AdminController@edata')->name('edata');
Route::get('/hdata', 'AdminController@hdata')->name('hdata');
Route::get('/tartikel','AdminController@tartikel')->name('tartikel');
Route::post('/cartikel', 'AdminController@cartikel')->name('cartikel');
Route::get('/sartikel/{id}', 'AdminController@sartikel')->name('sartikel');
Route::post('/eartikel', 'AdminController@eartikel')->name('eartikel');
Route::get('/hartikel', 'AdminController@hartikel')->name('hartikel');
Route::get('/adminartikel/{id}', 'AdminController@vartikel');
Route::get('/tpengumuman','AdminController@tpengumuman')->name('tpengumuman');
Route::post('/cpengumuman', 'AdminController@cpengumuman')->name('cpengumuman');
Route::get('/spengumuman/{id}', 'AdminController@spengumuman')->name('spengumuman');
Route::post('/epengumuman', 'AdminController@epengumuman')->name('epengumuman');
Route::get('/hpengumuman', 'AdminController@hpengumuman')->name('hpengumuman');
Route::get('/adminpengumuman/{id}', 'AdminController@vpengumuman');
Route::get('/ttps3r','AdminController@ttps3r')->name('ttps3r');
Route::post('/ctps3r', 'AdminController@ctps3r')->name('ctps3r');
Route::get('/stps3r/{id}', 'AdminController@stps3r')->name('stps3r');
Route::post('/etps3r', 'AdminController@etps3r')->name('etps3r');
Route::get('/htps3r', 'AdminController@htps3r')->name('htps3r');
Route::get('/tpelap','AdminController@tpelap');
Route::post('/cpelap','AdminController@cpelap');
Route::get('/tmpdf/{id}','AdminController@tmpdf');

//tampilan
//Route::get('/s', 'UserController@')->name('');
//menu tengtang kami
Route::get('/', 'UserController@welcome')->name('welcome');
Route::get('/dasarhukum', 'UserController@dasarhukum')->name('dasarhukum');
Route::get('/kewenangan', 'UserController@kewenangan')->name('kewenangan');
Route::get('/sejarah', 'UserController@sejarah')->name('sejarah');
Route::get('/visimisi', 'UserController@visimisi')->name('visimisi');
Route::get('/struktur', 'UserController@struktur')->name('struktur');
Route::get('/jmlpnsthl', 'UserController@jmlpnsthl')->name('jmlpnsthl');
Route::get('/programs', 'UserController@programs')->name('programs');

//menu tpas cilowong
Route::get('/cilowong','UserController@cilowong')->name('cilowong');

//menu pelayanan
Route::get('/amdal','UserController@amdal')->name('amdal');
Route::get('/uklupl','UserController@uklupl')->name('uklupl');
Route::get('/sppl','UserController@sppl')->name('sppl');
Route::post('/cdokir','UserInputWebController@cdokir');
Route::get('/tdokiramdal/{id}','UserInputWebController@tdokiramdal');
Route::get('/tdokirsppl/{id}','UserInputWebController@tdokirsppl');
Route::get('/tdokiruklupl/{id}','UserInputWebController@tdokiruklupl');
Route::get('/perizinanlimbah', 'UserController@perizinanlimbah')->name('perizinanlimbah');

//menu program
Route::get('/adwiyata','UserController@adwiyata')->name('adwiyata');
Route::get('/persampahan','UserController@persampahan')->name('persampahan');
Route::get('/pengawasan','UserController@pengawasan')->name('pengawasan');
Route::get('/banksampah','UserController@banksampah')->name('banksampah');
Route::get('/banksampah/{id}','UserController@bankdetail')->name('bankdetail');
Route::get('/usertps3r',function (){return view('program.tps3r');})->name('tps3r');
//menu data
Route::get('/data','UserController@data')->name('data');

//menu pelaporan
Route::get('/pojok_pengaduan', 'UserController@pojok_pengaduan')->name('pojok_pengaduan');
Route::get('/pojok_pengaduan/{id}', 'UserController@detailpojok_pengaduan');
Route::post('/pojok_pengaduan','UserInputWebController@pengaduan');
Route::get('/tpojok_pengaduan/{id}','UserInputWebController@tpengaduan');

//menu struktur bidang
Route::get('/kadis', 'UserController@kadis')->name('kadis');
Route::get('/sekdis', 'UserController@sekdis')->name('sekdis');
Route::get('/unpeg', 'UserController@unpeg')->name('unpeg');
Route::get('/pep', 'UserController@pep')->name('pep');
Route::get('/pplh', 'UserController@pplh')->name('pplh');
Route::get('/pslb', 'UserController@pslb')->name('pslb');
Route::get('/ppklh', 'UserController@ppklh')->name('ppklh');
Route::get('/uptlab', 'UserController@uptlab')->name('uptlab');
Route::get('/uptperbekalan', 'UserController@uptperbekalan')->name('uptperbekalan');
Route::get('/jabatan',function (){
    return view('strukturbidang.jabatan');
} )->name('jabatan');

//Aplikasi
Route::get('/aplikasi',function (){
    return view('aplikasi');
} )->name('aplikasi');

//menu berita
Route::get('/artikel','UserController@artikel')->name('artikel');
Route::get('/artikel/{id}','UserController@artikelsub');
Route::get('/pengumuman','UserController@pengumuman')->name('pengumuman');
Route::get('/pengumuman/{id}','UserController@pengumumansub');

//galeri
Route::get('/foto','UserController@foto');
Route::get('/video','UserController@video');
Route::get('/video/{id}','UserController@videosub');

//system action
Route::get('/adminnotif/{id}','AdminController@notif');
Route::get('/notif/{id}','UserController@notif');

