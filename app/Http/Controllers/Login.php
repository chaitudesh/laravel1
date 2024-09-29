<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
    //
    function loadView($name)
    {
        return view('users', ["name" => json_decode($name, true)]);
    }
}
