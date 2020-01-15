<?php

namespace App\Http\Controllers;

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
            ->rawColumns(['action','status'])
            ->make(true);
    }
}
