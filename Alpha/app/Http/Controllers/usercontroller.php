<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    function index(){
        return view('users.index');
    }
}
