<?php

namespace App\Http\Controllers;

use App\Models\Admin\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authCondition(){
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin#profile');
        }else{
            $lastNew = Post::select('posts.*','categories.category_name as category_name')
            ->leftJoin('categories','posts.category_id','categories.id')
            ->get()->last();

            //get latest 7 data of posts
            $latestNews = Post::select('posts.*','categories.category_name as category_name')
            ->leftJoin('categories','posts.category_id','categories.id')
            ->latest()
            ->take(7)
            ->get();

            //last data of latestNews is equal to the lastNew so i should reverse data and cut off last data form latestNews
            $latestNews = collect($latestNews)->reverse();

            //remove last data form latestNews
            $latestNew = $latestNews->pop();

            //after cut off latest data so i need to put original arrangement
            $latestNews = collect($latestNews)->reverse();

            return view('user.dashboard',compact('lastNew','latestNews'));
        }
    }
}
