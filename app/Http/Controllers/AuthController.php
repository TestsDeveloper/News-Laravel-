<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authCondition(){
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin#profile');
        }else{
            return view('user.dashboard');
        }
    }
}
