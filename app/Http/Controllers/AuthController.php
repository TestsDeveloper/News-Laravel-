<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authCondition(){
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin#profile')->with('adminLogin','Welcome back my admin!');
        }else{
            return redirect()->route('home#page')->with('userLogin','Welcome back my user!');
        }
    }
}
