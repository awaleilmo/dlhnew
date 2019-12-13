<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function welcome(Request $request)
    {
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('welcome');

    }

    public function pojok_pengaduan(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }else if(Auth::check() && Auth::user()->level == 'user'){
            return view('pelaporan.pojok_pengaduan');
        }
        return redirect('/');
    }

    public function sejarah(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('sejarah');
    }

    public function visimisi(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('visimisi');
    }

    public function struktur(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('struktur');
    }

    public function jmlpnsthl(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('jmlpnsthl');
    }

    public function programs(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }else if(Auth::check() && Auth::user()->level == 'user'){
            return view('programs');
        }
        return redirect('/');
    }

    public function dasarhukum(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('dasarhukum');
    }

    public function  kewenangan(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('kewenangan');
    }

    public function cilowong(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('cilowong');
    }

    public function kadis(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('strukturbidang.kadis');
    }

    public function sekdis(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('strukturbidang.sekdis');
    }

    public function unpeg(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('strukturbidang.unpeg');
    }

    public function pep(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('strukturbidang.pep');
    }

    public function pplh(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('strukturbidang.pplh');
    }

    public function pslb(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('strukturbidang.pslb');
    }
    public function ppklh(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('strukturbidang.ppklh');
    }
    public function uptlab(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('strukturbidang.uptlab');
    }
    public function uptperbekalan(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('strukturbidang.uptperbekalan');
    }

    public function artikel(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('berita.artikel');
    }
    public function artikelsub(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }
        return view('berita.artikelsub');

    }
    public function amdal(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }else if(Auth::check() && Auth::user()->level == 'user'){
            return view('pelayanan.amdal');
        }
        return redirect('/');

    }

    public function uklupl(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }else if(Auth::check() && Auth::user()->level == 'user'){
            return view('pelayanan.uklupl');
        }
        return redirect('/');

    }

    public function sppl(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }else if(Auth::check() && Auth::user()->level == 'user'){
            return view('pelayanan.sppl');
        }
        return redirect('/');

    }

    public function perizinanlimbah(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }else if(Auth::check() && Auth::user()->level == 'user'){
            return view('pelayanan.perizinanlimbah');
        }
        return redirect('/');

    }

    public function adwiyata(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }else if(Auth::check() && Auth::user()->level == 'user'){
            return view('program.adwiyata');
        }
        return redirect('/');

    }

    public function pengawasan(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }else if(Auth::check() && Auth::user()->level == 'user'){
            return view('program.pengawasan');
        }
        return redirect('/');

    }

    public function persampahan(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }else if(Auth::check() && Auth::user()->level == 'user'){
            return view('program.persampahan');
        }
        return redirect('/');

    }

    public function banksampah(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }else if(Auth::check() && Auth::user()->level == 'user'){
            return view('program.banksampah');
        }
        return redirect('/');

    }

    public function data(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return redirect('admin');

        }else if(Auth::check() && Auth::user()->level == 'user'){
            return view('data');
        }
        return redirect('/');

    }

}
