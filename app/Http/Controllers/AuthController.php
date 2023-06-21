<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authCondition(){
        if(auth()->user()->role == 'user'){
            return view('user.dashboard');
            
        }else{
            return view('admin.myprofile.index');
        }
    }
}
