<?php

namespace App\Http\Controllers;

use App\artikel;
use App\bank;
use App\dokling;
use App\limbah;
use App\notif_admin;
use App\notif_user;
use App\Pengaduan;
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
           $pengaduan = Pengaduan::all();
            return view('pelaporan.pojok_pengaduan', compact('pengaduan'));
        }
        return redirect('/login');
    }

    public function detailpojok_pengaduan($id){
        if(Auth::check()){
            $pengaduan = Pengaduan::find($id);
            return view('pelaporan.detailpengaduan', compact('pengaduan'));
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

    public function mobileadwiyata(){
            $sca = sca::all();
            $sct = scatingkat::all();
            $sna = sna::all();
            return view('mobile.adwiyata',compact('sna','sct','sca'));
    }

    public function pengawasan(){
        if(Auth::check()){
            return view('program.pengawasan');
        }
        return redirect('/login');

    }

    public function mobilepengawasan(){
            return view('mobile.pengawasan');
    }

    public function persampahan(){
        if(Auth::check()){
            return view('program.persampahan');
        }
        return redirect('/login');
    }

    public function mobilepersampahan(){
            return view('mobile.persampahan');
    }

    public function banksampah(){
        if(Auth::check()){
            $t = bank::all();
            return view('program.banksampah', compact('t'));
        }
        return redirect('/login');

    }

    public function mobilebanksampah(){
            $t = bank::all();
            return view('mobile.banksampah', compact('t'));
    }

    public function bankdetail($id){
        if(Auth::check()){
            $p = bank::find($id);
            if($p != null) {
                return view('program.bankdetail', compact('p'));
            }else{
                return redirect('banksampah')->with('error','Data yang Diminta Tidak Diketemukan');
            }
        }
        return redirect('/');
    }

    public function mobilebankdetail($id){
            $p = bank::find($id);
            if($p != null) {
                return view('mobile.bankdetail', compact('p'));
            }else{
                return redirect('banksampah')->with('error','Data yang Diminta Tidak Diketemukan');
            }
    }

    public function data(){
        if(Auth::check()){
            return view('data');
        }
        return redirect('/login');

    }

    public function notif($id){

        if($id == 1){
            $data['amdal'] = 0;
            $is = Auth::user()->id;
            notif_user::where('user_id','=',$is)->update($data);
            return redirect('amdal');
        }else if($id == 2){
            $data['uklupl'] = 0;
            $is = Auth::user()->id;
            notif_user::where('user_id','=',$is)->update($data);
            return redirect('uklupl');
        }else if($id == 3){
            $data['sppl'] = 0;
            $is = Auth::user()->id;
            notif_user::where('user_id','=',$is)->update($data);
            return redirect('sppl');
        }else if($id == 4){
            $data['foto'] = 0;
            $is = Auth::user()->id;
            notif_user::where('user_id','=',$is)->update($data);
            return redirect('foto');
        }else if($id == 5){
            $data['video'] = 0;
            $is = Auth::user()->id;
            notif_user::where('user_id','=',$is)->update($data);
            return redirect('video');
        }else if($id == 6){
            $data['pengaduan'] = 0;
            $is = Auth::user()->id;
            notif_user::where('user_id','=',$is)->update($data);
            return redirect('pojok_pengaduan');
        }else if($id == 7){
            $data['banksampah'] = 0;
            $is = Auth::user()->id;
            notif_user::where('user_id','=',$is)->update($data);
            return redirect('banksampah');
        }else if($id == 8){
            $data['data'] = 0;
            $is = Auth::user()->id;
            notif_user::where('user_id','=',$is)->update($data);
            return redirect('data');
        }else if($id == 9){
            $data['warta'] = 0;
            $is = Auth::user()->id;
            notif_user::where('user_id','=',$is)->update($data);
            return redirect('artikel');
        }else if($id == 10){
            $data['pengumuman'] = 0;
            $is = Auth::user()->id;
            notif_user::where('user_id','=',$is)->update($data);
            return redirect('pengumuman');
        }
    }

}
