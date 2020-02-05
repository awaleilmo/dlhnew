<?php

namespace App\Http\Controllers;

use App\dokir;
use App\Pengaduan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UserInputWebController extends Controller
{
    public function pengaduan(Request $request){
        if($request->namainstansi2 == null){
            $ins = $request->namainstansi;
            $instgl = $request->tglpengaduan;
        }else if($request->namainstansi3 == null){
            $ins = $request->namainstansi.",".$request->namainstansi2;
            $instgl = $request->tglpengaduan.",".$request->tglpengaduan2;
        }else{
            $ins = $request->namainstansi.",".$request->namainstansi2.",".$request->namainstansi3;
            $instgl = $request->tglpengaduan.",".$request->tglpengaduan2.",".$request->tglpengaduan2;
        }

        $file = $request->file('foto');
        /*
        // nama file
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

        // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

        // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

        // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';

        // tipe mime
        echo 'File Mime Type: '.$file->getMimeType();
        */

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'upload/pengaduan';
        $now = Carbon::now();
        $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
        // upload file
        $file->move($tujuan_upload, $fulname);
        $input['userId']            = $request->userId;
        $input['tempat']            = $request->tempat;
        $input['nama']              = $request->nama;
        $input['alamat']            = $request->alamat;
        $input['notelp']            = $request->nohp;
        $input['alamatkejadian']    = $request->alamatkejadian;
        $input['jeniskegiatan']     = $request->jeniskegiatan;
        $input['namakegiatan']      = $request->namakegiatan;
        $input['waktu']             = $request->uraianwaktu;
        $input['uraiankejadian']    = $request->uraiankejadian;
        $input['dampak']            = $request->uraiandampak;
        $input['penyelesaian']      = $request->penyelesaian;
        $input['namainstansi']      = $ins;
        $input['tgl']               = $instgl;
        $input['foto']              = $fulname;
        $input['lokasi']            = $request->lokasi;
        $input['status']            = 'Pending';
        $validator = Validator::make($request->all(), [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $user = Pengaduan::create($input);
        if($user){
            return redirect("pojok_pengaduan")->with(['alert' => 'Sukses']);
        }
        return redirect("pojok_pengaduan")->with(['gagal' => 'Gagal']);


    }

    public function tpengaduan($id){
        $pengaduan = Pengaduan::where('userId','=',$id)->get();
        return datatables()->of($pengaduan)
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


                $btn = '<a href="pojok_pengaduan/'.$row->id.'" class="tooltip-button  edit-user1"  id="'.$row->id.'" data-toggle="modal" data-target="#myModal'.$row->id.'"><i class="glyph-icon icon-arrow-up"></i> Detail</a>';


                return $btn;

            })
            ->rawColumns(['action','status','penyelesaian'])
            ->make(true);
    }

    public function cdokir(Request $request){
        $file = $request->file('file');
        $tujuan_upload = 'upload/dokir';
        $idnya = $request->userId;
        $now = Carbon::now();
        if($file == ""){
            $fulname = "kosong";
        }else {
            $fulname = $now->year . "-" . $now->month . "-" . $now->day . "_" . $now->hour . "-" . $now->minute . "-" . $now->second . "_" .$idnya."_".$file->getClientOriginalName();
            $file->move($tujuan_upload, $fulname);
        }

        $data['dokling'] = $request->dok;
        $data['userId'] = $idnya;
        $data['file'] = $fulname;
        $data['status'] = 'Pending';
        $check = dokir::create($data);
        $arr = ['msg' => 'Terjadi Kesalahan, Coba Lagi', 'status' => false];
        if($check){
            $arr = ['msg' => 'Berhasil Disimpan', 'status' => true];
        }
        return Response()->json($arr);
    }

    public function tdokiramdal($id){
        $pengaduan = dokir::where('userId','=',$id)->where('dokling','=','AMDAL')->get();
        return datatables()->of($pengaduan)
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
            ->rawColumns(['status','penyelesaian'])
            ->make(true);
    }
    public function tdokirsppl($id){
        $pengaduan = dokir::where('userId','=',$id)->where('dokling','=','SPPL')->get();
        return datatables()->of($pengaduan)
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
            ->rawColumns(['status','penyelesaian'])
            ->make(true);
    }
    public function tdokiruklupl($id){
        $pengaduan = dokir::where('userId','=',$id)->where('dokling','=','UKLUPL')->get();
        return datatables()->of($pengaduan)
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
            ->rawColumns(['status','penyelesaian'])
            ->make(true);
    }
}
