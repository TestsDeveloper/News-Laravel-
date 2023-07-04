<?php

namespace App\Http\Controllers;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    //direct post list page
    public function postList() {
        $posts = Post::select('posts.*','categories.category_name as category_name')
        ->when(request('key'), function ($query) {
            $query->where('posts.title', 'like', '%' . request('key') . '%');
        })
        ->leftJoin('categories','posts.category_id','categories.id')
        ->orderBy('id','desc')
        ->paginate(5);
        $posts->appends(request()->all());

        return view("admin.post.index",compact('posts'));
    }

    //create post page
    public function createPostPage(){
        $categories = Category::get();
        return view('admin.post.createPage',compact('categories'));
    }

    //create post
    public function createPost(Request $request){
        $this->validationForPostData($request,'create');
        $post = $this->getPostData($request);

        $fileName = uniqid() . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public', $fileName);
        $post['image'] = $fileName;

        if(!empty(request('popularNew'))){
            $post['popular_new'] = $request->popularNew;
        }

        if(!empty(request('trendNew'))){
            $post['trend_new'] = $request->trendNew;
        }

        if(!empty(request('titleNew'))){
            $post['title_new'] = $request->titleNew;
        }

        Post::create($post);
        return redirect()->route('new#postList');


    }

    //delete post
    public function deletePost($id){
        Post::where('id',$id)->delete();
        return back()->with(['deleteSuccess' => 'Delete Post Successfully!']);
    }

    //detail post page
    public function detailPostPage($id){
        $post = Post::where('id',$id)->first();
        $categories = Category::get();

        return view('admin.post.editPage',compact('post','categories'));
    }

    //edit post
    public function editPost(Request $request,$id){
        $this->validationForPostData($request,'update');
        $post = $this->getPostData($request);

        // For Image
        if($request->hasFile('image')){
            //old image name | delete
            $dbImage = Post::where('id',$id)->first()->image;

            if($dbImage != null){
                Storage::delete('public/'.$dbImage);
            }

            $fileName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public', $fileName);
            $post['image'] = $fileName;


        }

        if(!empty(request('popularNew'))){
            $post['popular_new'] = $request->popularNew;
        }

        if(!empty(request('trendNew'))){
            $post['trend_new'] = $request->trendNew;
        }

        if(!empty(request('titleNew'))){
            $post['title_new'] = $request->titleNew;
        }

        
        Post::where('id',$id)->update($post);
        return redirect()->route('new#postList')->with(['updateSuccess' => 'Update Post Successfully']);
    }
















    //get post data
    private function getPostData($request){
        return [
            'category_id' => $request->categoryId,
            'title'       => $request->title,
            'description' => $request->description,

        ];
    }


    //validation for post data
    private function validationForPostData($request,$action){
        $validationRule = [
            'title'        => 'required|min:3',
            'description'  => 'required|min:10',
            'categoryId'  => 'required',

        ];

        $validationRule['image'] = $action == 'create' ? 'required|mimes:jpg,jpeg,png,webp|file' : 'mimes:jpg,jpeg,png,webp|file';

        Validator::make($request->all(),$validationRule)->validate();
    }
}
