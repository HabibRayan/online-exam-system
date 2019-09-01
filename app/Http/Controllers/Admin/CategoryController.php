<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.index',['categories'=>$categories]);
    }

    public function categoryAdd(){
        return view('admin.category.category_add');
    }

    public function categorySave(Request $request){

        $this->validate($request,[
            'category_name' =>'required',
            'category_description' =>'required',

        ]);


            $categoryInfo = new Category();

            $categoryInfo->category_name = $request-> category_name;
            $categoryInfo->category_slug = $request-> category_slug;
            $categoryInfo->category_description = $request-> category_description;
            $categoryInfo->save();
            return redirect()->route('category');



    }

    public function categoryEdit($id){
       $category = Category::find($id);
        return view('admin.category.edit',['category'=>$category]);
    }

    public function categoryUpdate(Request $request,$id){

        $validation = Validator::make(Input::all(),
            array(
                'category_name' => 'required',
                'category_description' => 'required'
            )

        );
        if ($validation -> fails()){
            return Redirect::back()->withErrors('Please Input All Field');
        } else {
            $categoryInfo = Category::find($id);

            $categoryInfo->category_name = $request-> category_name;
            $categoryInfo->category_slug = $request-> category_slug;
            $categoryInfo->category_description = $request-> category_description;
            $categoryInfo->update();

            return redirect()->route('category');
        }

    }

    public function categoryDelete($id){
//        $del = Category::destroy($id);
        $del=Category::find($id);

        $del->delete();
        return redirect()->route('category');
    }

}
