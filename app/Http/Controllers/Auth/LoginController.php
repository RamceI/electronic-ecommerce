<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Socialite;
use Auth;
use Exception;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    protected function redirectTo( ) {
        if (Auth::check() && Auth::user()->role == 1) {
            return('/business');
        }
        elseif (Auth::check() && Auth::user()->role == 2) {
            return('/admin');
        }
        else {
            return('/home');
        }
    }


/*    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 2:
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;
            case 1:
                $this->redirectTo = '/business';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/home';
                return $this->redirectTo;
        }

        // return $next($request);
    }*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){

        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials = $this->credentials($request);
        $remember = $request->input('remember_me');

        if (Auth::attempt($credentials,$remember)) {

            return redirect()->intended($this->redirectPath());
        }

        return back()->withInput()->with('message', 'Login Failed');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/login');
    }
}
