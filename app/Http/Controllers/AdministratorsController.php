<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/**
*This class controls all the credentials for the administrator.
*
*/

class AdministratorsController extends Controller
{
    //

    use AuthenticatesUsers;

    protected $loginView = 'adminstrators.login';
    protected $guards= 'admins';
     //
    /**
    *This function shows the view for the administrator.
    *@return the administrator's login view.
    */
   public function showLoginForm()
    {
        return view('administrators.Login1');
    }

     //
    /**
    *This function validates the default administrator credentials.
    *@return either the admin main menu or the same view, depending on the credentials.
    */
    public function Login(){
        if (request('email')=='admin@gmail.com'){
            return redirect('/project');
        }
       return view('administrators.Login1');
    }
   
}
