<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admincontroller extends Controller
{
     function index(){
      if(Auth::user()->status=='Active'){
         if(Auth::user()->role=='Admin'){
            return view('admin.index');
         }
         else{
            return view('users.index');
         }
      }
      else{
         return redirect()->back();
      }
   }
}
