<?php

namespace App\Http\Controllers;

use App\User;
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

}
