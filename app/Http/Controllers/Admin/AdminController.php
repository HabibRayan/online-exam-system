<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class
AdminController extends Controller
{
       public function index(){
           $lesson = Lesson::all();

           return view('admin.home.index',compact('lesson'));
       }

       public function seeMore($id){
            $lessons = Lesson::find($id);

           return view('admin.home.see_more',compact('lessons'));
       }
}
