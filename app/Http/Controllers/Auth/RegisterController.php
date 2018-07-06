<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Hemocentro;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/hemocentro/dashboard';

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
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'name_hemocentro' => 'required|string',
            'email_hemocentro' => 'required|string|email|max:191',
            'state' => 'required|string',
            'password_hemocentro' => 'required|string|min:6|confirmed',
            'address' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required'
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password_hemocentro']),
        ]);

        if ($user == null)
        {
            return null;
        }

       $hemocentro =  Hemocentro::create([
            'name' => $data['name_hemocentro'],
            'user' => $user->id,
            'phone' => $data['phone'],
            'email' => $data['email_hemocentro'],
            'address' => $data['address'],
            'state' => $data['state'],
            'city' => $data['city'],
        ]);

        if($hemocentro  == null){

            return null;
        }
        
        return $user;
    }
   

}
