<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\notif_user;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $al =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
	    'level' => $data['level'],
            'nohp' => $data['nohp'],
            'remember_token' => csrf_token(),
            'password' => Hash::make($data['password']),
        ]);
        $sel = User::where('email','=',$data['email'])->get();
        foreach ($sel as $p){
            $dataa['user_id'] = $p->id;
            $dataa['amdal'] = 0;
            $dataa['sppl'] = 0;
            $dataa['uklupl'] = 0;
            $dataa['foto'] = 0;
            $dataa['video'] = 0;
            $dataa['pengaduan'] = 0;
            $dataa['banksampah'] = 0;
            $dataa['data'] = 0;
            $dataa['warta'] = 0;
            $dataa['pengumuman'] = 0;

            notif_user::create($dataa);
        }

        return $al;
    }
}
