<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdministratorsController extends Controller
{
    //

    use AuthenticatesUsers;

     protected $redirectTo = '/project';
    protected $guard= 'admins';
}
