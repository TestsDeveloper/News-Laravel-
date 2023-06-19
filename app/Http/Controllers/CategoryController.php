<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList() {
        return view("admin.category.index");
    }

    public function createCategory() {
        return view("admin.category.create");
    }

    public function create(Request $request) {
        $this->categoryValidationCheck($request);
        $data = $this->requestCategoryData($request);
        Category::create($data);
        return redirect()->route('category#list');
    }


    private function categoryValidationCheck($request){
        Validator::make($request->all(), [
            'category_name' => 'required|min:5|unique:categories,name,'. $request->categoryId
        ])->validate();
    }
    private function requestCategoryData($request){
        return [
            'category_name' => $request->category_name,
        ];
    }
}
