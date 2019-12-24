<?php

namespace App\Http\Controllers;

use App\artikel;
use App\dokling;
use App\limbah;
use App\Pengaduan;
use App\pengumuman;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserMobileController extends Controller
{

    /**
     * @OA\Post(
     *     path="/api/app/register",
     *     tags={"Auth"},
     *     operationId="register",
     *     @OA\Parameter(
     *          name="name",
     *          description="name",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Parameter(
     *          name="email",
     *          description="email",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Parameter(
     *          name="nohp",
     *          description="nohp",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Parameter(
     *          name="password",
     *          description="password",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Parameter(
     *          name="c_password",
     *          description="Confirm Password",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'nohp' =>  'required|numeric|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['level'] = 'user';
        $input['remember_token'] = csrf_token();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  csrf_token();
        $success['name'] =  $user->name;
        return response()->json(['status'=>'sukses','data'=>$user]);

        //return "success";
    }

    /**
     * @OA\Post(
     *     path="/api/app/login",
     *     tags={"Auth"},
     *     description="A sample greeting to test out the API",
     *     operationId="login",
     *     @OA\Parameter(
     *          name="email",
     *          description="Email",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Parameter(
     *          name="password",
     *          description="Password",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            User::where("email", $request->email)->
            update([
                'remember_token' => csrf_token(),
            ]);
            $user = User::select("name","email","remember_token","nohp")->where("email",$request->email)->get();
            return  response()->json(['status'=>'sukses','data'=>$user]);
        }
        return  response()->json(['status'=>"gagal"]);
    }

    /**
     * @OA\Get(
     *     path="/api/app/showuser",
     *     tags={"Auth"},
     *     summary="Returns a Sample API response",
     *     description="A sample greeting to test out the API",
     *     operationId="greet",
     *
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function alluser(Request $request){


            $user = User::all();
            return response()->json(['status' => 'sukses', 'data' => $user]);


    }

    /**
     * @OA\Get(
     *     path="/api/app/finduser",
     *     tags={"Auth"},
     *     operationId="finduser",
     *
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function alluserfind(Request $request){
        $user = User::find($request->id);
        return response()->json(['status'=>'sukses','data' => $user]);
    }

    /**
     * @OA\Get(
     *     path="/api/app/logout",
     *     tags={"Auth"},
     *     operationId="logout",
     *
     *
     *
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function logout (Request $request){
        $user = Auth::logout();
        return response()->json(['status'=>'sukses']);
    }
    /**
     * @OA\Get(
     *     path="/api/app/cek/dokling",
     *     tags={"Dokumen Lingkungan ( SPPL, AMDAL, UKL UPL )"},
     *     operationId="showall",
     *
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function cekdokling (){
        $user = dokling::all();
        return response()->json(['status'=>'sukses','data' =>$user]);
    }
    /**
     * @OA\Get(
     *     path="/api/app/dokling",
     *     tags={"Dokumen Lingkungan ( SPPL, AMDAL, UKL UPL )"},
     *     operationId="downloaddok",
     *
     *      @OA\Parameter(
     *          name="nama",
     *          description="nama dokumen",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */

    public function dokling(Request $request){
        $nama = $request->nama;
        $doc = dokling::where('nama','like','%'.$nama.'%')->get();
        foreach ($doc as $p){ $no = $p->forms; }
        $loc = public_path('upload/dokumenlingkungan/'.$no);
        return response()->download($loc);
    }

    /**
     * @OA\Get(
     *     path="/api/app/cek/sipal",
     *     tags={"Perizinan Limbah B3 ( SIPAL )"},
     *     operationId="showall",
     *
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function cekperizinan (){
        $user = limbah::all();
        return response()->json(['status'=>'sukses','data' =>$user]);
    }
    /**
     * @OA\Get(
     *     path="/api/app/sipal",
     *     tags={"Perizinan Limbah B3 ( SIPAL )"},
     *     operationId="downloaddok",
     *
     *      @OA\Parameter(
     *          name="nama",
     *          description="nama dokumen",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */

    public function perizinan(Request $request){
        $nama = $request->nama;
        $doc = limbah::where('nama','like','%'.$nama.'%')->get();
        foreach ($doc as $p){ $no = $p->forms; }
        $loc = public_path('upload/limbah/'.$no);
        return response()->download($loc);
    }

    /**
     * @OA\Get(
     *     path="/api/app/artikel",
     *     tags={"Berita"},
     *     operationId="showall",
     *
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function pojokwarga (){
        $user = artikel::select('judul','foto','created_at as tanggal')->where('tipe','=','1')->get();
        $user['foto'] = 'http://dlh-serangkota.com/upload/artikel/'.$user->foto;
        return response()->json(['status'=>'sukses','data' =>$user]);
    }
    /**
     * @OA\Get(
     *     path="/api/app/pengumuman",
     *     tags={"Berita"},
     *     operationId="downloaddok",
     *
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */

    public function pengumuman(Request $request){
        $user = pengumuman::select('judul','foto','created_at as tanggal')->where('tipe','=','1')->get();
        $user['foto'] = 'http://dlh-serangkota.com/pengumuman/artikel/'.$user->foto;
        return response()->json(['status'=>'sukses','data' =>$user]);
    }

    /**
     * @OA\Post(
     *     path="/api/app/pengaduan",
     *     tags={"Pengaduan"},
     *     operationId="downloaddok",
     *
     *      @OA\Parameter(
     *          name="tempat",
     *          description="",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Parameter(
     *          name="nama",
     *          description="",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Parameter(
     *          name="alamat",
     *          description="",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Parameter(
     *          name="nohp",
     *          description="",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Parameter(
     *          name="alamatkejadian",
     *          description="",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Parameter(
     *          name="jeniskegiatan",
     *          description="",
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Parameter(
     *          name="namakegiatan",
     *          description="",
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Parameter(
     *          name="waktu",
     *          description="00:00 AM/PM",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Parameter(
     *          name="uraiankejadian",
     *          description="",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Parameter(
     *          name="dampak",
     *          description="",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Parameter(
     *          name="penyelesaian",
     *          description="",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Parameter(
     *          name="namainstansi",
     *          description="",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *      @OA\Parameter(
     *          name="namainstansi2",
     *          description="",
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *      @OA\Parameter(
     *          name="namainstansi3",
     *          description="",
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *      @OA\Parameter(
     *          name="tglpengaduan",
     *          description="dd-mm-yyyy",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *       @OA\Parameter(
     *          name="tglpengaduan2",
     *          description="dd-mm-yyyy",
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *      @OA\Parameter(
     *          name="tglpengaduan3",
     *          description="dd-mm-yyyy",
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *
     *
     *      @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="foto",
     *                     type="file",
     *                     format="file",
     *                 ),
     *                 required={"file"}
     *             )
     *         )
     *     ),
     *
     *      @OA\Parameter(
     *          name="lokasi",
     *          description="latlng example: -6.234234,106.69934",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */

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
        $tujuan_upload = 'upload/pengaduan';
        $now = Carbon::now();
        $fulname = $now->year."-".$now->month."-".$now->day."_".$now->hour."-".$now->minute."-".$now->second."_".$file->getClientOriginalName();
        // upload file
        $file->move($tujuan_upload, $fulname);
        $input['tempat'] = $request->tempat;
        $input['nama'] = $request->nama;
        $input['alamat'] = $request->alamat;
        $input['notelp'] = $request->nohp;
        $input['alamatkejadian'] = $request->alamatkejadian;
        $input['jeniskegiatan'] = $request->jeniskegiatan;
        $input['namakegiatan'] = $request->namakegiatan;
        $input['waktu'] = $request->waktu;
        $input['uraiankejadian'] = $request->uraiankejadian;
        $input['dampak'] = $request->dampak;
        $input['penyelesaian'] = $request->penyelesaian;
        $input['namainstansi'] = $ins;
        $input['tgl'] = $instgl;
        $input['foto'] = $fulname;
        $input['lokasi'] = $request->lokasi;
        $validator = Validator::make($request->all(), [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $user = Pengaduan::create($input);
        if($user){
            return response()->json(['status'=>'sukses']);
        }
        return response()->json(['status'=>'gagal']);


    }
}
