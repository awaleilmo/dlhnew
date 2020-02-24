<?php

namespace App\Http\Controllers;

use App\artikel;
use App\bank;
use App\data;
use App\diawasi;
use App\dokir;
use App\dokling;
use App\jenisangkut;
use App\jenistps;
use App\limbah;
use App\lokasitps;
use App\notif;
use App\pelaku;
use App\Pengaduan;
use App\pengumuman;
use App\sca;
use App\sna;
use App\scatingkat;
use App\smphliar;
use App\timbulan;
use App\tps;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index(){
        if(Auth::check() && Auth::user()->level == 'admin'){

            return view('admin.admin');

        }
        return redirect('/');
    }
    public function tps(){
        if (Auth::check()&& Auth::user()->level=='admin'){
            return view('admin.tps3r');
        }
        return redirect('/');
    }
    public function pengaduan(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            $pengaduan = Pengaduan::all();
            return view('admin.pengaduan', compact('pengaduan'));

        }
        return redirect('/');
    }
    public function hitpengaduan(request $request){
        if(auth::check() && auth::user()->level == 'admin'){
            $s['menu'] = 'pelaporan';
            $s['sub_menu'] = 'pengaduan';
            $s['on'] = 0;
            $s['db'] = $request->id;
            notif::create($s);
            $p = $request->cek;
            foreach($p as $es){
                $id = $request->cek[$es];
                $data['status'] = 'selesai';
                $pengaduan = pengaduan::where('id','=',$id)->update($data);
            }
            return redirect('/pengaduan');

        }
        return redirect('/');
    }
    public function tpengaduan(){
        $pengaduan = Pengaduan::all();
        return datatables()->of($pengaduan)
            ->addColumn('ceked', function ($row){
                if($row->status == 'Selesai'){
                $btn = '';
                }else{
                $btn = '<input type="checkbox" class="checkbox" name="cek['.$row->id.']" value="'.$row->id.'">';
                }
                 return $btn;
            })
            ->addColumn('penyelesaian', function($row){
                if($row->status == 'Selesai'){
                    $ttb = $row->updated_at;
                }else{
                    $ttb = '-';
                }
                return $ttb;
            })
            ->addColumn('status', function($row){

                if($row->status == 'Selesai'){
                    $btn = '<label class="btn btn-success" style="font-size: large ">Selesai</label>';
                }else{
                    $btn = '<label class="btn btn-warning" style="font-size: large ">Pending</label>';
                }
                return $btn;

            })
            ->addColumn('action', function($row){


                $btn = '<a href="javascript:void(0)" class="tooltip-button  edit-user1"  id="'.$row->id.'" data-toggle="modal" data-target="#myModal'.$row->id.'"><i class="glyph-icon icon-arrow-up"></i> Detail</a>';


                return $btn;

            })
            ->rawColumns(['action','status','ceked','penyelesaian'])
            ->make(true);
    }
    public function printpengaduan($id){
        if(Auth::check()){
            $pengaduan = Pengaduan::find($id);
            if($pengaduan != null) {
                return view('admin.printpengaduan', compact('pengaduan'));
            }else{
                return redirect('pengaduan')->with('error','Data yang Diminta Tidak Diketemukan');
            }
        }
        return redirect('/');
    }
    public function pengawasan(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.pengawasan');
        }
        return redirect('/');
    }
    public function timbulansampah(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.timbulansampah');
        }
        return redirect('/');
    }
    public function penanganansampah(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.penanganansampah');
        }
        return redirect('/');
    }
    public function datatps(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            $jenis = jenistps::all();
            return view('admin.datatps',compact('jenis'));
        }
        return redirect('/');
    }
    public function jenistps(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.jenistps');
        }
        return redirect('/');
    }
    public function angkutan(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.jenisangkutan');
        }
        return redirect('/');
    }
    public function sca(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.sca');
        }
        return redirect('/');
    }
    public function scatingkat(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.scatingkat');
        }
        return redirect('/');
    }
    public function sna(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.sna');
        }
        return redirect('/');
    }
    public function bank(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.bank');
        }
        return redirect('/');
    }
    public function doklingkungan(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.doklingkungan');
        }
        return redirect('/');
    }
    public function limbah(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.limbah');
        }
        return redirect('/');
    }
    public function adata(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.adata');
        }
        return redirect('/');
    }
    public function pojok(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.pojok');
        }
        return redirect('/');
    }
    public function artikel(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.artikel');
        }
        return redirect('/');
    }
    public function pengumuman(){
        if(Auth::check() && Auth::user()->level == 'admin'){
            return view('admin.pengumuman');
        }
        return redirect('/');
    }
    public function tpelaku(){
        $pelaku = pelaku::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function cpelaku(Request $request){
        $data = $request->all();
        $check = pelaku::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function spelaku($id){
        $pelaku = pelaku::find($id);
        return response()->json($pelaku);
    }
    public function epelaku(Request $request){
        $id = $request->id;
        $data['jeniskegiatan'] = $request->jeniskegiatan;
        $data['jumlahperusahaan'] = $request->jumlahperusahaan;
        $data['tahun'] = $request->tahun;
        $check = pelaku::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function hpelaku(Request $request){
        $id = $request->id;
        $check = pelaku::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tdiawasi(){
        $pelaku = diawasi::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('kategori', function($row){
                $dt = explode(',',$row->kategori);
                $sas = $dt[0];
                $sas = $sas.'<br><hr style="border-top: 2px solid #8da0aa;">'.$dt[1];
                return $sas;
            })
            ->addColumn('jumlah', function($row){
                $dt = explode(',',$row->jumlahperusahaan);
                $sas = $dt[0];
                $sas = $sas.'<br><hr style="border-top: 2px solid #8da0aa;">'.$dt[1];
                return $sas;
            })
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user1"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user1" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->rawColumns(['action','kategori','jumlah'])
            ->make(true);
    }
    public function cdiawasi(Request $request){
        if($request->selek == 'memiliki'){
            $jml = $request->jumlah1.','.$request->jumlah2;
            $kategori = $request->kategori1.','.$request->kategori2;
        }else if($request->selek == 'taat'){
            $jml = $request->jumlah3.','.$request->jumlah4;
            $kategori = $request->kategori3.','.$request->kategori4;
        }
        $data['tahun'] = $request->tahun;
        $data['temuan'] = $request->temuan;
        $data['kategori'] = $kategori;
        $data['jumlahperusahaan'] = $jml;
        $check = diawasi::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function sdiawasi($id){
        $pelaku = diawasi::find($id);
        $pelaku['jumlah'] = explode(',', $pelaku->jumlahperusahaan);
        return response()->json($pelaku);
    }
    public function ediawasi(Request $request){
        if($request->selek == 'memiliki'){
            $jml = $request->jumlah1.','.$request->jumlah2;
            $kategori = $request->kategori1.','.$request->kategori2;
        }else if($request->selek == 'taat'){
            $jml = $request->jumlah3.','.$request->jumlah4;
            $kategori = $request->kategori3.','.$request->kategori4;
        }
        $id = $request->id;
        $data['tahun'] = $request->tahun;
        $data['temuan'] = $request->temuan;
        $data['kategori'] = $kategori;
        $data['jumlahperusahaan'] = $jml;
        $check = diawasi::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function hdiawasi(Request $request){
        $id = $request->id;
        $check = diawasi::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function ttimbulan(){
        $pelaku = timbulan::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('kubikasi', function($row){
                return "M3/Hari";
            })
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->rawColumns(['action','kubikasi'])
            ->make(true);
    }
    public function ctimbulan(Request $request){
        $data['namajalur'] = $request->namajalur;
        $data['jumlahtitik'] = $request->titik;
        $data['ratavolume'] = $request->rata;
        $data['jumlah'] = $request->jumlah;
        $check = timbulan::create($data);
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function stimbulan($id){
        $pelaku = timbulan::find($id);
        return response()->json($pelaku);
    }
    public function etimbulan(Request $request){
        $id = $request->id;
        $data['namajalur'] = $request->namajalur;
        $data['jumlahtitik'] = $request->titik;
        $data['ratavolume'] = $request->rata;
        $data['jumlah'] = $request->jumlah;
        $check = timbulan::whereId($id)->update($data);
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);
    }
    public function htimbulan(Request $request){
        $id = $request->id;
        $check = timbulan::whereId($id)->delete();
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tliar(){
        $pelaku = smphliar::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('ritasi', function($row){
                $bt = $row->ritasi." Rit";
                return $bt;
            })
            ->addColumn('kapasitas', function($row){
                $bt = $row->kapasitas." M3";
                return $bt;
            })
            ->addColumn('m3', function($row){
                $bt =" M3";
                return $bt;
            })
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->rawColumns(['action','ritasi','kapasitas','m3'])
            ->make(true);
    }
    public function cliar(Request $request){
        $data['lokasi'] = $request->lokasi;
        $data['ritasi'] = $request->ritasi;
        $data['kapasitas'] = $request->kapasitas;
        $data['jumlahrit'] = $request->jumlah;
        $check = smphliar::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function sliar($id){
        $pelaku = smphliar::find($id);
        return response()->json($pelaku);
    }
    public function eliar(Request $request){
        $id = $request->id;
        $data['lokasi'] = $request->lokasi;
        $data['ritasi'] = $request->ritasi;
        $data['kapasitas'] = $request->kapasitas;
        $data['jumlahrit'] = $request->jumlah;
        $check = smphliar::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);
    }
    public function hliar(Request $request){
        $id = $request->id;
        $check = smphliar::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tjtps(){
    $pelaku = jenistps::all();
    return datatables()->of($pelaku)
        ->addIndexColumn()
        ->addColumn('action', function($row){

            $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
            $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


            return $btn;

        })
        ->rawColumns(['action'])
        ->make(true);
}
    public function cjtps(Request $request){
        $data['jenistps'] = $request->jenis;
        $data['unit'] = $request->unit;
        $check = jenistps::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function sjtps($id){
        $pelaku = jenistps::find($id);
        return response()->json($pelaku);
    }
    public function ejtps(Request $request){
        $id = $request->id;
        $data['jenistps'] = $request->jenis;
        $data['unit'] = $request->unit;
        $check = jenistps::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);
    }
    public function hjtps(Request $request){
        $id = $request->id;
        $check = jenistps::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function ttps(){
        $pelaku = lokasitps::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function ctps(Request $request){
        $data['lks'] = $request->lks;
        $data['keldesa'] = $request->keldes;
        $data['kecamatan'] = $request->kecamatan;
        $data['jenistps'] = $request->jenistps;
        $data['unit'] = $request->unit;
        $check = lokasitps::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
        //return $data;
    }
    public function stps($id){
        $pelaku = lokasitps::find($id);
        return response()->json($pelaku);
    }
    public function etps(Request $request){
        $id = $request->id;
        $data['lks'] = $request->lks;
        $data['keldesa'] = $request->keldes;
        $data['kecamatan'] = $request->kecamatan;
        $data['jenistps'] = $request->jenistps;
        $check = lokasitps::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);
    }
    public function htps(Request $request){
        $id = $request->id;
        $check = lokasitps::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tangkut(){
        $pelaku = jenisangkut::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function cangkut(Request $request){
        $data['jenis'] = $request->jenis;
        $data['unit'] = $request->unit;
        $data['keterangan'] = $request->keterangan;
        $check = jenisangkut::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
        //return $data;
    }
    public function sangkut($id){
        $pelaku = jenisangkut::find($id);
        return response()->json($pelaku);
    }
    public function eangkut(Request $request){
        $id = $request->id;
        $data['jenis'] = $request->jenis;
        $data['unit'] = $request->unit;
        $data['keterangan'] = $request->keterangan;
        $check = jenisangkut::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);
    }
    public function hangkut(Request $request){
        $id = $request->id;
        $check = jenisangkut::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tsca(){
        $pelaku = sca::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function csca(Request $request){
        $data['namasekolah'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['sk'] = $request->sk;
        $data['kepalasekolah'] = $request->kepala;
        $data['tahun'] = $request->tahun;
        $check = sca::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
        //return $data;
    }
    public function ssca($id){
        $pelaku = sca::find($id);
        return response()->json($pelaku);
    }
    public function esca(Request $request){
        $id = $request->id;
        $data['namasekolah'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['sk'] = $request->sk;
        $data['kepalasekolah'] = $request->kepala;
        $data['tahun'] = $request->tahun;
        $check = sca::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);
    }
    public function hsca(Request $request){
        $id = $request->id;
        $check = sca::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tsna(){
        $pelaku = sna::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function csna(Request $request){
        $data['namasekolah'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['sk'] = $request->sk;
        $data['kepalasekolah'] = $request->kepala;
        $data['tahun'] = $request->tahun;
        $check = sna::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
        //return $data;
    }
    public function ssna($id){
        $pelaku = sna::find($id);
        return response()->json($pelaku);
    }
    public function esna(Request $request){
        $id = $request->id;
        $data['namasekolah'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['sk'] = $request->sk;
        $data['kepalasekolah'] = $request->kepala;
        $data['tahun'] = $request->tahun;
        $check = sna::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);
    }
    public function hsna(Request $request){
        $id = $request->id;
        $check = sna::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tscatingkat(){
        $pelaku = scatingkat::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function cscatingkat(Request $request){
        $data['namasekolah'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['sk'] = $request->sk;
        $data['kepalasekolah'] = $request->kepala;
        $data['penghargaan'] = $request->penghargaan;
        $data['tahun'] = $request->tahun;
        $check = scatingkat::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
        //return $data;
    }
    public function sscatingkat($id){
        $pelaku = scatingkat::find($id);
        return response()->json($pelaku);
    }
    public function escatingkat(Request $request){
        $id = $request->id;
        $data['namasekolah'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['sk'] = $request->sk;
        $data['kepalasekolah'] = $request->kepala;
        $data['penghargaan'] = $request->penghargaan;
        $data['tahun'] = $request->tahun;
        $check = scatingkat::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);
    }
    public function hscatingkat(Request $request){
        $id = $request->id;
        $check = scatingkat::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tbank(){
        $pelaku = bank::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('jeniskegiatan', function ($row){
                $t = '<p style="margin: 0px;
    height: auto;
    width: auto;
    overflow: hidden;
    resize: none;
    text-rendering: auto;
    letter-spacing: normal;
    word-spacing: normal;
    flex-direction: column;
    white-space: pre-wrap;
    overflow-wrap: break-word;"> '.$row->jeniskegiatan.' </p>';
                return $t;
            })
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->addColumn('foto',function ($row){
                if($row->foto == "kosong"){
                    $t = '';
                }else {
                    $t = '<div id="fotol' . $row->id . '" style="transition: 1s"><img id="' . $row->id . '" class="fotol" src="upload/banksampah/' . $row->foto . '" style="width:150px; height:100px"></div>';
                }
                return $t;
            })
            ->rawColumns(['action','foto','jeniskegiatan'])
            ->make(true);
    }
    public function cbank(Request $request){
        $file = $request->file('foto');
        $tujuan_upload = 'upload/banksampah';
        $now = Carbon::now();
        if($file == ""){
            $fulname = "kosong";
        }else {
            $fulname = $now->year . "-" . $now->month . "-" . $now->day . "_" . $now->hour . "-" . $now->minute . "-" . $now->second . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $fulname);
        }

        $data['nama'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['jeniskegiatan'] = $request->jenis;
        $data['jumlahnasabah'] = $request->jumlah;
        $data['tahun'] = $request->tahun;
        $data['foto'] = $fulname;
        $check = bank::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
        //return $data;
    }
    public function sbank($id){
        $pelaku = bank::find($id);
        return response()->json($pelaku);
    }
    public function ebank(Request $request){
        $id = $request->id;
        $ids = $request->desk;
        $file = $request->file('foto');
        $cek = bank::find($id);
        if($cek->foto == $ids){
            $fulname = $cek->foto;
        } else {
            $tujuan_upload = 'upload/banksampah';
            $hps = 'upload/banksampah/'.$cek->foto;
            File::delete($hps);
            $now = Carbon::now();
            $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
            $file->move($tujuan_upload, $fulname);
        }
        $data['nama'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['jeniskegiatan'] = $request->jenis;
        $data['jumlahnasabah'] = $request->jumlah;
        $data['tahun'] = $request->tahun;
        $data['foto'] = $fulname;
        $check = bank::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);
    }
    public function hbank(Request $request){
        $id = $request->id;
        $cek = bank::find($id);
        $hps = 'upload/banksampah/'.$cek->foto;
        File::delete($hps);
        $check = bank::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tdokling(){
        $pelaku = dokling::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->addColumn('forms',function ($row){
                $t = '<a href="upload/dokumenlingkungan/'.$row->forms.'" class="btn btn-default" download="'.$row->forms.'">'.$row->forms.'</a>';
                return $t;
            })
            ->rawColumns(['action','forms'])
            ->make(true);
    }
    public function cdokling(Request $request){
        $file = $request->file('file');
        $tujuan_upload = 'upload/dokumenlingkungan/';
        $now = Carbon::now();
        $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
        $file->move($tujuan_upload, $fulname);
        $data['nama'] = $request->nama;
        $data['forms'] = $fulname;
        $check = dokling::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
        //return $data;
    }
    public function sdokling($id){
        $pelaku = dokling::find($id);
        return response()->json($pelaku);
    }
    public function edokling(Request $request){
        $id = $request->id;
        $ids = $request->desk;
        $file = $request->file('file');
        $cek = dokling::find($id);
        if($cek->forms == $ids){
            $fulname = $cek->forms;
        } else {
            $tujuan_upload = 'upload/dokumenlingkungan';
            $hps = 'upload/dokumenlingkungan/'.$cek->forms;
            File::delete($hps);
            $now = Carbon::now();
            $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
            $file->move($tujuan_upload, $fulname);
        }
        $data['nama'] = $request->nama;
        $data['forms'] = $fulname;
        $check = dokling::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);
    }
    public function hdokling(Request $request){
        $id = $request->id;
        $cek = dokling::find($id);
        $hps = 'upload/dokumenlingkungan/'.$cek->forms;
        File::delete($hps);
        $check = dokling::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tlimbah(){
        $pelaku = limbah::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->addColumn('forms',function ($row){
                $t = '<a href="upload/limbah/'.$row->forms.'" class="btn btn-default" download="'.$row->forms.'">'.$row->forms.'</a>';
                return $t;
            })
            ->rawColumns(['action','forms'])
            ->make(true);
    }
    public function climbah(Request $request){
        $file = $request->file('file');
        $tujuan_upload = 'upload/limbah/';
        $now = Carbon::now();
        $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
        $file->move($tujuan_upload, $fulname);
        $data['nama'] = $request->nama;
        $data['forms'] = $fulname;
        $check = limbah::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
        //return $data;
    }
    public function slimbah($id){
        $pelaku = limbah::find($id);
        return response()->json($pelaku);
    }
    public function elimbah(Request $request){
        $id = $request->id;
         $ls = $request->desk;
        $file = $request->file('file');
        $cek = limbah::find($id);
        if ($cek['forms'] == $ls){
            $fulname = $cek->forms;
        }else{
            $tujuan_upload = 'upload/limbah/';
            $hps = 'upload/limbah/'.$cek['forms'];
            File::delete($hps);
            $now = Carbon::now();
            $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
            $file->move($tujuan_upload, $fulname);
        }
            $data['nama'] = $request->nama;
            $data['forms'] = $fulname;
            $check = limbah::whereId($id)->update($data);
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
            if($check){
                $arr = ['msg' => 'Berhasil Diubah'];
            }
            return Response()->json($arr);


    }
    public function hlimbah(Request $request){
        $id = $request->id;
        $cek = limbah::find($id);
        $hps = 'upload/limbah/'.$cek->forms;
        File::delete($hps);
        $check = limbah::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tdata(){
        $pelaku = data::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->addColumn('files',function ($row){
                $t = '<a href="upload/data/'.$row->files.'" class="btn btn-default" download="'.$row->files.'">Download</a>';
                return $t;
            })
            ->rawColumns(['action','files'])
            ->make(true);
    }
    public function tdatat(){
        $pelaku = data::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->addColumn('files',function ($row){
                $t = '<a href="../upload/data/'.$row->files.'" class="btn btn-default" download="'.$row->files.'">Download</a>';
                return $t;
            })
            ->rawColumns(['action','files'])
            ->make(true);
    }
    public function cdata(Request $request){
        $file = $request->file('file');
        $tujuan_upload = 'upload/data/';
        $now = Carbon::now();
        $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
        $file->move($tujuan_upload, $fulname);
        $data['nama'] = $request->nama;
        $data['files'] = $fulname;
        $check = data::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
        //return $data;
    }
    public function sdata($id){
        $pelaku = data::find($id);
        return response()->json($pelaku);
    }
    public function edata(Request $request){
        $id = $request->id;
        $ls = $request->desk;
        $file = $request->file('file');
        $cek = data::find($id);
        if ($cek['files'] == $ls){
            $fulname = $cek->files;
        }else{
            $tujuan_upload = 'upload/data/';
            $hps = 'upload/data/'.$cek['files'];
            File::delete($hps);
            $now = Carbon::now();
            $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
            $file->move($tujuan_upload, $fulname);
        }
        $data['nama'] = $request->nama;
        $data['files'] = $fulname;
        $check = data::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);


    }
    public function hdata(Request $request){
        $id = $request->id;
        $cek = data::find($id);
        $hps = 'upload/data/'.$cek->files;
        File::delete($hps);
        $check = data::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tartikel(){
    $pelaku = artikel::all();
    return datatables()->of($pelaku)
        ->addIndexColumn()
        ->addColumn('tipe', function($row){
            if($row->tipe == "1"){
                $t = "<label class='label label-success' style='font-size: large'>Publikasi</label>";
            }else if ($row->tipe == "0"){
                $t = "<label class='label label-warning' style='font-size: large'>Draft</label>";
            }
            return $t;
        })
        ->addColumn('action', function($row){
            $btn = '<a href="adminartikel/'.$row->id.'"  class="tooltip-button demo-icon"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px" title="View"><i class="glyph-icon icon-eye"></i></a>';
            $btn = $btn.'<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px" title="Edit"><i class="glyph-icon icon-pencil"></i></a>';
            $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px" title="Delete"><i class="glyph-icon icon-trash"></i></a>';


            return $btn;

        })
        ->rawColumns(['action','tipe'])
        ->make(true);
}
    public function cartikel(Request $request){
        if(isset($_POST['publish'])){
            $file = $request->file('foto');
            $tujuan_upload = 'upload/artikel/';
            $now = Carbon::now();
            $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
            $file->move($tujuan_upload, $fulname);
            $data['judul'] = $request->judul;
            $data['deskripsi'] = $request->konten;
            $data['tipe'] = '1';
            $data['foto'] = $fulname;
            $check = artikel::create($data);
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
            if($check){
                $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
            }
            return Redirect('/adminartikel')->with($arr);
        }
        else if(isset($_POST['draft'])){
            $file = $request->file('foto');
            $tujuan_upload = 'upload/artikel/';
            $now = Carbon::now();
            $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
            $file->move($tujuan_upload, $fulname);
            $data['judul'] = $request->judul;
            $data['deskripsi'] = $request->konten;
            $data['tipe'] = '0';
            $data['foto'] = $fulname;
            $check = artikel::create($data);
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
            if($check){
                $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
            }
            return Redirect('/adminartikel')->with($arr);
        }
    }
    public function sartikel($id){
        $pelaku = artikel::find($id);
        return response()->json($pelaku);
    }
    public function vartikel($id){
        $p = artikel::find($id);
        return view('admin.viewartikel',compact('p'));
    }
    public function eartikel(Request $request){
        if(isset($_POST['publish'])){
            $id = $request->id;
            $ls = $request->desk;
            $file = $request->file('foto');
            $cek = artikel::find($id);
            if ($cek['foto'] == $ls){
                $fulname = $cek->foto;
            }else{
                $tujuan_upload = 'upload/artikel/';
                $hps = 'upload/artikel/'.$cek['foto'];
                File::delete($hps);
                $now = Carbon::now();
                $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
                $file->move($tujuan_upload, $fulname);
            }
            $data['judul'] = $request->judul;
            $data['deskripsi'] = $request->konten;
            $data['tipe'] = '1';
            $data['foto'] = $fulname;
            $check = artikel::whereId($id)->update($data);
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
            if($check){
                $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
            }
            return Redirect('/adminartikel')->with($arr);
        }
        else if(isset($_POST['draft'])){
            $id = $request->id;
            $ls = $request->desk;
            $file = $request->file('foto');
            $cek = artikel::find($id);
            if ($cek['foto'] == $ls){
                $fulname = $cek->foto;
            }else{
                $tujuan_upload = 'upload/artikel/';
                $hps = 'upload/artikel/'.$cek['foto'];
                File::delete($hps);
                $now = Carbon::now();
                $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
                $file->move($tujuan_upload, $fulname);
            }

            $data['judul'] = $request->judul;
            $data['deskripsi'] = $request->konten;
            $data['tipe'] = '0';
            $data['foto'] = $fulname;
            $check = artikel::whereId($id)->update($data);
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
            if($check){
                $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
            }
            return Redirect('/adminartikel')->with($arr);
        }
    }
    public function hartikel(Request $request){
        $id = $request->id;
        $cek = artikel::find($id);
        $hps = 'upload/artikel/'.$cek->foto;
        File::delete($hps);
        $check = artikel::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tpengumuman(){
        $pelaku = pengumuman::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('tipe', function($row){
                if($row->tipe == "1"){
                    $t = "<label class='label label-success' style='font-size: large'>Publikasi</label>";
                }else if ($row->tipe == "0"){
                    $t = "<label class='label label-warning' style='font-size: large'>Draft</label>";
                }
                return $t;
            })
            ->addColumn('action', function($row){
                $btn = '<a href="adminpengumuman/'.$row->id.'"  class="tooltip-button demo-icon"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px" title="View"><i class="glyph-icon icon-eye"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px" title="Edit"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px" title="Delete"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->rawColumns(['action','tipe'])
            ->make(true);
    }
    public function cpengumuman(Request $request){
        if(isset($_POST['publish'])){
            $file = $request->file('foto');
            $tujuan_upload = 'upload/pengumuman/';
            $now = Carbon::now();
            $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
            $file->move($tujuan_upload, $fulname);
            $data['judul'] = $request->judul;
            $data['deskripsi'] = $request->konten;
            $data['tipe'] = '1';
            $data['foto'] = $fulname;
            $check = pengumuman::create($data);
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
            if($check){
                $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
            }
            return Redirect('/adminpengumuman')->with($arr);
        }
        else if(isset($_POST['draft'])){
            $file = $request->file('foto');
            $tujuan_upload = 'upload/pengumuman/';
            $now = Carbon::now();
            $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
            $file->move($tujuan_upload, $fulname);
            $data['judul'] = $request->judul;
            $data['deskripsi'] = $request->konten;
            $data['tipe'] = '0';
            $data['foto'] = $fulname;
            $check = pengumuman::create($data);
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
            if($check){
                $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
            }
            return Redirect('/adminpengumuman')->with($arr);
        }
    }
    public function spengumuman($id){
        $pelaku = pengumuman::find($id);
        return response()->json($pelaku);
    }
    public function vpengumuman($id){
        $p = pengumuman::find($id);
        return view('admin.viewpengumuman',compact('p'));
    }
    public function epengumuman(Request $request){
        if(isset($_POST['publish'])){
            $id = $request->id;
            $ls = $request->desk;
            $file = $request->file('foto');
            $cek = pengumuman::find($id);
            if ($cek['foto'] == $ls){
                $fulname = $cek->foto;
            }else{
                $tujuan_upload = 'upload/pengumuman/';
                $hps = 'upload/pengumuman/'.$cek['foto'];
                File::delete($hps);
                $now = Carbon::now();
                $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
                $file->move($tujuan_upload, $fulname);
            }
            $data['judul'] = $request->judul;
            $data['deskripsi'] = $request->konten;
            $data['tipe'] = '1';
            $data['foto'] = $fulname;
            $check = pengumuman::whereId($id)->update($data);
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
            if($check){
                $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
            }
            return Redirect('/adminpengumuman')->with($arr);
        }
        else if(isset($_POST['draft'])){
            $id = $request->id;
            $ls = $request->desk;
            $file = $request->file('foto');
            $cek = pengumuman::find($id);
            if ($cek['foto'] == $ls){
                $fulname = $cek->foto;
            }else{
                $tujuan_upload = 'upload/pengumuman/';
                $hps = 'upload/pengumuman/'.$cek['foto'];
                File::delete($hps);
                $now = Carbon::now();
                $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
                $file->move($tujuan_upload, $fulname);
            }

            $data['judul'] = $request->judul;
            $data['deskripsi'] = $request->konten;
            $data['tipe'] = '0';
            $data['foto'] = $fulname;
            $check = pengumuman::whereId($id)->update($data);
            $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
            if($check){
                $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
            }
            return Redirect('/adminpengumuman')->with($arr);
        }
    }
    public function hpengumuman(Request $request){
        $id = $request->id;
        $cek = pengumuman::find($id);
        $hps = 'upload/pengumuman/'.$cek->foto;
        File::delete($hps);
        $check = pengumuman::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function mobilettps3r(){
        $pelaku = tps::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->addColumn('foto',function ($row){
                $t = '<div id="fotol'.$row->id.'" style="transition: 1s"><img id="'.$row->id.'" class="fotol" src="../upload/tps/'.$row->foto.'" style="width:150px; height:100px"></div>';
                return $t;
            })
            ->rawColumns(['action','foto'])
            ->make(true);
    }
    public function ttps3r(){
        $pelaku = tps::all();
        return datatables()->of($pelaku)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<a href="javascript:void(0)"  class="tooltip-button demo-icon edit-user"  id="'.$row->id.'" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>';
                $btn = $btn.'<a href="javascript:void(0)" class="tooltip-button demo-icon hapus-user" id="'.$row->id.'" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a>';


                return $btn;

            })
            ->addColumn('foto',function ($row){
                $t = '<div id="fotol'.$row->id.'" style="transition: 1s"><img id="'.$row->id.'" class="fotol" src="upload/tps/'.$row->foto.'" style="width:150px; height:100px"></div>';
                return $t;
            })
            ->rawColumns(['action','foto'])
            ->make(true);
    }
    public function ctps3r(Request $request){
        $file = $request->file('foto');
        $tujuan_upload = 'upload/tps';
        $now = Carbon::now();
        $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
        $file->move($tujuan_upload, $fulname);
        $data['nama'] = $request->nama;
        $data['namapengurus'] = $request->namapengurus;
        $data['alamat'] = $request->alamat;
        $data['status'] = $request->status;
        $data['alat'] = $request->alat;
        $data['kendala'] = $request->kendala;
        $data['keterangan'] = $request->keterangan;
        $data['foto'] = $fulname;
        $check = tps::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
        //return $data;
    }
    public function stps3r($id){
        $pelaku = tps::find($id);
        return response()->json($pelaku);
    }
    public function etps3r(Request $request){
        $id = $request->id;
        $ids = $request->desk;
        $file = $request->file('foto');
        $cek = tps::find($id);
        if($cek->foto == $ids){
            $fulname = $cek->foto;
        } else {
            $tujuan_upload = 'upload/tpssampah';
            $hps = 'upload/tps/'.$cek->foto;
            File::delete($hps);
            $now = Carbon::now();
            $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
            $file->move($tujuan_upload, $fulname);
        }
        $data['nama'] = $request->nama;
        $data['namapengurus'] = $request->namapengurus;
        $data['alamat'] = $request->alamat;
        $data['status'] = $request->status;
        $data['alat'] = $request->alat;
        $data['kendala'] = $request->kendala;
        $data['keterangan'] = $request->keterangan;
        $data['foto'] = $fulname;
        $check = tps::whereId($id)->update($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi'];
        if($check){
            $arr = ['msg' => 'Berhasil Diubah'];
        }
        return Response()->json($arr);
    }
    public function htps3r(Request $request){
        $id = $request->id;
        $cek = tps::find($id);
        $hps = 'upload/tps/'.$cek->foto;
        File::delete($hps);
        $check = tps::whereId($id)->delete();
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Dihapus', 'status' => true];
        }
        return Response()->json($arr);
    }
    public function tpelap(){
        $pengaduan = dokir::all();
        return datatables()->of($pengaduan)
            ->addColumn('file', function ($row){

                if($row->status == 'Selesai') {
                    $btn = '';
                }else if($row->status == 'Ditolak'){
                    $btn = '';
                }else {
                    $btn = '<a class="btn btn-default" href="tmpdf/' . $row->id . '" >Proses File</a>';
                }
                return $btn;
            })
            ->addColumn('nama', function ($row){
                $ps = User::find($row->userId);
                $btn = $ps->name;
                return $btn;
            })
            ->addColumn('penyelesaian', function($row){
                if($row->status == 'Selesai'){
                    $ttb = $row->updated_at;
                }else if($row->status == 'Ditolak'){
                    $ttb = $row->updated_at;
                }else{
                    $ttb = '-';
                }
                return $ttb;
            })
            ->addColumn('status', function($row){

                if($row->status == 'Selesai'){
                    $btn = '<label class="btn btn-success" style="font-size: large ">Selesai</label>';
                }else if($row->status == 'Ditolak'){
                    $btn = '<label class="btn btn-danger" style="font-size: large ">Ditolak</label>';
                }else{
                    $btn = '<label class="btn btn-warning" style="font-size: large ">Pending</label>';
                }
                return $btn;

            })
            ->rawColumns(['file','nama','status','penyelesaian'])
            ->make(true);
    }
    public function cpelap(Request $request){
        if(isset($_POST['sub'])){
            $s['menu'] = 'dokling';
            $s['sub_menu'] = $request->dok;
            $s['on'] = 0;
            $s['db'] = $request->id;
            notif::create($s);
            $p['status'] = 'Selesai';
            $p['keterangan'] = $request->ket;
            dokir::whereId($request->id)->update($p);
            return redirect('admindoklingkungan');
        }elseif (isset($_POST['tol'])){
            $s['menu'] = 'dokling';
            $s['sub_menu'] = $request->dok;
            $s['on'] = 0;
            $s['db'] = $request->id;
            notif::create($s);
            $p['status'] = 'Ditolak';
            $p['keterangan'] = $request->ket;
            dokir::whereId($request->id)->update($p);
            return redirect('admindoklingkungan');
        }
    }
    public function tmpdf($id){
        $s = dokir::find($id);
        return view('admin.tmpdf',compact('s'));
    }
}
