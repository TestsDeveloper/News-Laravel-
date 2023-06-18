<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homePage() {
        return view("user.dashboard");
    }

    public function adminProfile() {
        return view('admin.myprofile.index');
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
