<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
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
    protected $redirectTo = '/home';


   /* protected function redirectTo( ) {
        if (Auth::check() && Auth::user()->role == 1) {
            return('/business');
        }
        elseif (Auth::check() && Auth::user()->role == 2) {
            return('/admin');
        }
        else {
            return('/home');
        }
    }*/

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
            'surname'=>['required','string','max:255'],
            'gender'=>['','','max:255'],
            'phonenumber'=>['','','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address'=>['','','max:255'],
            'city'=>['','','max:255'],
            'state'=>['','','max:255'],
            'country'=>['','','max:255'],
            'zip'=>['','','max:255'],
            'tax'=>['','','max:255'],
            'company'=>['','','max:255'],
            'role'=>['','','max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'remember_me'=>['required'],
        ], [
            'name.required'=>'The first name field is required.',
            'surname.required'=>'The first lastname field is required.',
            'email.required'=>'The email field is required.',
            'password.required'=>'The email field is required.',
            'remember_me.required'=>'The password field is required.'
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
        return User::create([
            'name' => $data['name'],
            'surname'=>$data['surname'],
            'gender'=>$data['gender'],
            'phonenumber'=>$data['phonenumber'],
            'email' => $data['email'],
            'address'=>$data['address'],
            'city'=>$data['city'],
            'state'=>$data['state'],
            'country'=>$data['country'],
            'zip'=>$data['zip'],
            'company'=>$data['company'] ??  null,
            'tax'=>$data['tax'] ?? null,
            'role'=>$data['role'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
