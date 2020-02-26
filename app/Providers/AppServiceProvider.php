<?php

namespace App\Providers;

use App\notif;
use App\notif_admin;
use App\notif_user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\L5Swagger\L5SwaggerServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       view()->composer('*', function($vi){

           $amdalnotif = 0;
           $spplnotif = 0;
           $ukluplnotif = 0;
           $fotonotif = 0;
           $videonotif = 0;
           $pengaduannotif = 0;
           $banksampahnotif = 0;
           $datanotif = 0;
           $wartanotif = 0;
           $pengumumannotif = 0;
           $doklingadminnotif = 0;
           $dataadminnotif = 0;
           $pelaporanadminnotif = 0;
           $banksampahadminnotif = 0;
           if(Auth::check()){
               $a = notif_user::where('user_id','=', Auth::user()->id)->get();
               foreach ($a as $p){
               $amdalnotif = $p->amdal;
               $spplnotif = $p->sppl;
               $ukluplnotif = $p->uklupl;
               $fotonotif = $p->foto;
               $videonotif = $p->video;
               $pengaduannotif = $p->pengaduan;
               $banksampahnotif = $p->banksampah;
               $datanotif = $p->data;
               $wartanotif = $p->warta;
               $pengumumannotif = $p->pengumuman;
               }
                $taaa = 1;
               $z = notif_admin::find($taaa);
               $doklingadminnotif = $z->dokling;
               $dataadminnotif = $z->data;
               $pelaporanadminnotif = $z->pelaporan;
               $banksampahadminnotif = $z->banksampah;
           }

           $vi->with('amdalnotif',$amdalnotif)
               ->with('spplnotif',$spplnotif)
               ->with('ukluplnotif',$ukluplnotif)
               ->with('fotonotif',$fotonotif)
               ->with('videonotif',$videonotif)
               ->with('pengaduannotif',$pengaduannotif)
               ->with('banksampahnotif',$banksampahnotif)
               ->with('datanotif',$datanotif)
               ->with('wartanotif',$wartanotif)
               ->with('pengumumannotif',$pengumumannotif)
               ->with('doklingadminnotif', $doklingadminnotif)
               ->with('dataadminnotif', $dataadminnotif)
               ->with('pelaporanadminnotif', $pelaporanadminnotif)
               ->with('banksampahadminnotif', $banksampahadminnotif);
       });
	//Builder::defaultStringLength(255);
        //config(['app.locale' => 'id']);
        //\Carbon\Carbon::setLocale('id');
    }
}
