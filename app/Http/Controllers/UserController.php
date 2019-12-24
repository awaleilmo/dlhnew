<?php

namespace App\Http\Controllers;

use App\artikel;
use App\bank;
use App\dokling;
use App\limbah;
use App\pengumuman;
use App\sca;
use App\scatingkat;
use App\sna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function welcome(Request $request)
    {
        $z = artikel::where('tipe','=','1')->orderBy('created_at','desc')->limit(4)->get();
        $x = pengumuman::where('tipe','=','1')->orderBy('created_at','desc')->limit(4)->get();
        return view('welcome',compact('z','x'));

    }

    public function pojok_pengaduan(){
       if(Auth::check()){
            return view('pelaporan.pojok_pengaduan');
        }
        return redirect('/login');
    }

    public function sejarah(){

        return view('sejarah');
    }

    public function visimisi(){

        return view('visimisi');
    }

    public function struktur(){

        return view('struktur');
    }

    public function jmlpnsthl(){
      return view('jmlpnsthl');
    }

    public function programs(){
        if(Auth::check()){
            return view('programs');
        }
        return redirect('/login');
    }

    public function dasarhukum(){

        return view('dasarhukum');
    }

    public function  kewenangan(){

        return view('kewenangan');
    }

    public function cilowong(){

        return view('cilowong');
    }

    public function kadis(){

        return view('strukturbidang.kadis');
    }

    public function sekdis(){

        return view('strukturbidang.sekdis');
    }

    public function unpeg(){

        return view('strukturbidang.unpeg');
    }

    public function pep(){

        return view('strukturbidang.pep');
    }

    public function pplh(){

        return view('strukturbidang.pplh');
    }

    public function pslb(){

        return view('strukturbidang.pslb');
    }
    public function ppklh(){

        return view('strukturbidang.ppklh');
    }
    public function uptlab(){

        return view('strukturbidang.uptlab');
    }
    public function uptperbekalan(){

        return view('strukturbidang.uptperbekalan');
    }

    public function artikel(){

        $p = artikel::where('tipe','=','1')->orderBy('created_at','desc')->paginate(10);
        $z = artikel::where('tipe','=','1')->orderBy('created_at','desc')->limit(4)->get();
        $x = pengumuman::where('tipe','=','1')->orderBy('created_at','desc')->limit(4)->get();
        return view('berita.artikel', compact('p','z','x'));
    }
    public function artikelsub($id){

        $p = artikel::find($id);
        if($p->tipe == 1) {
            $z = artikel::where('tipe','=','1')->orderBy('created_at','desc')->limit(4)->get();
            $x = pengumuman::where('tipe','=','1')->orderBy('created_at','desc')->limit(4)->get();
            return view('berita.artikelsub', compact('p','z','x'));
        }else{
            return redirect('artikel');
        }

    }
    public function pengumuman(){

        $p = pengumuman::where('tipe','=','1')->orderBy('created_at','desc')->paginate(10);
        $z = artikel::where('tipe','=','1')->orderBy('created_at','desc')->limit(4)->get();
        $x = pengumuman::where('tipe','=','1')->orderBy('created_at','desc')->limit(4)->get();
        return view('berita.pengumuman', compact('p','z','x'));
    }
    public function pengumumansub($id){

        $p = pengumuman::find($id);
        if($p->tipe == 1) {
            $z = artikel::where('tipe','=','1')->orderBy('created_at','desc')->limit(4)->get();
            $x = pengumuman::where('tipe','=','1')->orderBy('created_at','desc')->limit(4)->get();
            return view('berita.pengumumansub', compact('p','z','x'));
        }else{
            return redirect('artikel');
        }

    }
    public function amdal(){
        if(Auth::check()){
            $p = dokling::where('nama','like','AM%')->get();
            return view('pelayanan.amdal',compact('p'));
        }
        return redirect('/login');

    }

    public function uklupl(){
        if(Auth::check()){
            $p = dokling::where('nama','like','UK%')->get();
            return view('pelayanan.uklupl',compact('p'));
        }
        return redirect('/login');

    }

    public function sppl(){
        if(Auth::check()){
            $p = dokling::where('nama','like','SP%')->get();
            return view('pelayanan.sppl',compact('p'));
        }
        return redirect('/login');

    }

    public function perizinanlimbah(){
        if(Auth::check()){
            $p = limbah::all();
            return view('pelayanan.perizinanlimbah', compact('p'));
        }
        return redirect('/login');

    }

    public function adwiyata(){
        if(Auth::check()){
            $sca = sca::all();
            $sct = scatingkat::all();
            $sna = sna::all();
            return view('program.adwiyata',compact('sna','sct','sca'));
        }
        return redirect('/login');

    }

    public function pengawasan(){
        if(Auth::check()){
            return view('program.pengawasan');
        }
        return redirect('/login');

    }

    public function persampahan(){
        if(Auth::check()){
            return view('program.persampahan');
        }
        return redirect('/login');

    }

    public function banksampah(){
        if(Auth::check()){
            $t = bank::all();
            return view('program.banksampah', compact('t'));
        }
        return redirect('/login');

    }

    public function data(){
        if(Auth::check()){
            return view('data');
        }
        return redirect('/login');

    }

}
