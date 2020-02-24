<?php

namespace App\Providers;

use App\notif;
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
           $a = notif::where('menu','=','dokling')->orWhere('menu','=','limbah')->orWhere('menu','=','upkl')
               ->orWhere('menu','=','ipal')
               ->where('on','=','0')
               ->get();
           $amdal = notif::where('menu','=','dokling')->where('sub_menu','=','AMDAL')->where('on','=','0');
           $sppl = notif::where('menu','=','dokling')->where('sub_menu','=','SPPL')->where('on','=','0');
           $uklupl = notif::where('menu','=','dokling')->where('sub_menu','=','UKLUPL')->where('on','=','0');

           $amdalnotif = $amdal->count();
           $spplnotif = $sppl->count();
           $ukluplnotif = $uklupl->count();
           $pelaynotif = $a->count();
           $vi->with('pelaynotif',$pelaynotif)
               ->with('amdalnotif',$amdalnotif)
               ->with('spplnotif',$spplnotif)
               ->with('ukluplnotif',$ukluplnotif);
       });
	//Builder::defaultStringLength(255);
        //config(['app.locale' => 'id']);
        //\Carbon\Carbon::setLocale('id');
    }
}
