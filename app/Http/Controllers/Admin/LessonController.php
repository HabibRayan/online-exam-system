<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Lesson;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class LessonController extends Controller
{
    public function index(){

        $lessons = DB::table('lessons')
            ->join('categories', 'categories.category_id', '=', 'lessons.lesson_category_id')
            ->select('categories.category_name','lessons.*')
            ->get();

        return view('admin.lesson.index',['lessons'=>$lessons]);
    }

    public function lessonAdd(){
        $categories = Category::all();
        return view('admin.lesson.lesson_add',['categories'=>$categories]);
    }

    public function lessonSave(Request $request){

        $this->validate($request, [
            'lesson_title' =>'required',
            'lesson_category_id' =>'required',
            'lesson_minute' =>'required',
            'lesson_description' =>'required',
            'lesson_text' =>'required',
        ]);

                $lesson = new Lesson();
                $lesson->lesson_title = $request->lesson_title;
                $lesson->lesson_category_id = $request->lesson_category_id;
                $lesson->lesson_minute = $request->lesson_minute;
                $lesson->lesson_description = $request->lesson_description;
                $lesson->lesson_text = $request->lesson_text;
                $lesson->save();

            return redirect()->route('question.add');


    }

    public function lessonEdit($id){
      $lessonsId = Lesson::find($id);
      $categories = Category::all();
        return view('admin.lesson.lesson_edit',[
            'lessonsId'=>$lessonsId,
            'categories'=>$categories
        ]);
    }

    public function lessonUpdate(Request $request,$id){
        $validation = Validator::make(Input::all(),
            array(
                'lesson_title' =>'required',
                'lesson_category_id' =>'required',
                'lesson_minute' =>'required',
                'lesson_description' =>'required',
                'lesson_text' =>'required'

            ));
//        return $id;
//        return  $request;
        if ($validation->fails()){
            return Redirect::back()->withErrors('Please Fill All Input Field');
        }else {

            $lesson = Lesson::find($id);
//            $lesson = new Lesson();
            $lesson->lesson_title = $request->lesson_title;
            $lesson->lesson_category_id = $request->lesson_category_id;
            $lesson->lesson_minute = $request->lesson_minute;
            $lesson->lesson_description = $request->lesson_description;
            $lesson->lesson_text = $request->lesson_text;
            $lesson->update();
            return redirect()->route('lesson');

        }
    }

    public function lessonDelete($id){
       $lessons = Lesson::find($id);
       $lessons->delete();

       return redirect()->route('lesson');
    }

    public function lessonView(Lesson $lesson){

        return view('admin.lesson.lesson_view', compact('lesson'));

    }



}
