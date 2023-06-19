<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    // list of category
    public function categoryList() {
        $categories = Category::when(request('key'), function($query){
            $query->where('category_name', 'like', '%'. request('key').'%');
        })
        ->orderBy('id', 'desc')->paginate(5);
        $categories->appends(request()->all());
        return view("admin.category.index", compact('categories'));
    }

    //create page
    public function createCategory() {
        return view("admin.category.create");
    }

    // create data
    public function create(Request $request){
        $this->categoryValidationCheck($request);
        $data = $this->requestCategoryData($request);
        Category::create($data);
        return redirect()->route('category#list')->with(['insertSuccess'=>'Create Category successfully!']);;
    }

    // update page
    public function updatePage($id) {
        $category = Category::where('id',$id)->first()->toArray();
        return view("admin.category.update", compact('category'));
    }

    //update data
    public function update(Request $request, $id) {
        $this -> categoryValidationCheck($request);
        $updateData = $this -> requestCategoryData($request);
        Category::where("id", $id)->update($updateData);
        return redirect()->route('category#list')->with(['insertSuccess'=>'Update Category successfully!']);
    }

    //delete category
    public function delete($id) {
        Category::where("id", $id)->delete();
        return back()->with(['deleteSuccess'=>'Delete Category successfully!']);
    }

    // validateion of category
    private function categoryValidationCheck($request){
        Validator::make($request->all(), [
            'category_name' => 'required|unique:categories,category_name',
        ])->validate();
    }

    //request data
    private function requestCategoryData($request){
        return [
            'category_name' => $request->category_name,
        ];
    }
}
