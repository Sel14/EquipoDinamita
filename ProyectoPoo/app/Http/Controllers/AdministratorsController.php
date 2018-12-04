<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdministratorsController extends Controller
{
    //

    use AuthenticatesUsers;

     protected $loginView = 'adminstrators.login';
    protected $guard= 'admins';
   public function showLoginForm()
    {
        return view('administrators.login');
    }
    public function Login(){
       return redirect('/project');
    }
   
}
