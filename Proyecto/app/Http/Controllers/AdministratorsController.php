<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdministratorsController extends Controller
{
    //

    use AuthenticatesUsers;

    protected $loginView = 'adminstrators.login';
    protected $guards= 'admins';
    
   public function showLoginForm()
    {
        return view('administrators.Login1');
    }
    public function Login(){
        if (request('email')=='admin@gmail.com'){
            return redirect('/project');
        }
       return view('administrators.Login1');
    }
   
}
