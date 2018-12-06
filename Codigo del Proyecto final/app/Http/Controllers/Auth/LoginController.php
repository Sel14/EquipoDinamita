<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
<<<<<<< HEAD
=======
use Auth; 
>>>>>>> c4d76ba052da6259a8351785e07523df689c7a4b

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
<<<<<<< HEAD
    protected $redirectTo = '/home';
=======
    protected function redirectTo() { return "/project/".Auth::id(); }
>>>>>>> c4d76ba052da6259a8351785e07523df689c7a4b

    /**
     * Create a new controller instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
=======
    
>>>>>>> c4d76ba052da6259a8351785e07523df689c7a4b
}
