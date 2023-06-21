<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //client home
    public function homePage() {
        return view("user.dashboard");
    }

    //admin profile page
    public function adminProfile($id ,User $user) {
        $userData = $user->where('id',$id)
                        ->orWhere('role','admin')
                        ->first();

        return view('admin.myprofile.index',compact('userData'));
    }

    // admin profile update
    public function profileUpdate(Request $request){
        dd($request->all());
    }

    public function adminList() {
        return view("admin.adminList.index");
    }

    public function userList() {
        return view("admin.user.index");
    }

    public function contactList() {
        return view("admin.content.index");
    }
}
