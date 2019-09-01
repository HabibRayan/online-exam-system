<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lesson;
use App\Models\Question;
use App\Models\QuestionDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class QuestionController extends Controller
{
    public function index(){

        $lessons = Lesson::all();
        $questions = Question::all();

        return view('admin.question.index',[
            'lessons'=>$lessons,
            'questions'=>$questions
        ]);
    }

    public function QuestionAdd(){
        $lessons = Lesson::all();
        return view('admin.question.question_add',['lessons'=>$lessons]);
    }

    public function QuestionSave(Request $request){
//          $request = $this->saveFiles($request);

        $this->validate($request ,[
            'question' => 'required',

            'hints' => 'required',
            'explanation' => 'required',
            'score' => 'required'
        ]);

         $question = Question::create($request->all());

         for ($q=1; $q<=4; $q++){
             $value = $request->input('value_'.$q , '');
             if ($value !=''){
                 QuestionDetails::create([
                     'question_id' => $question->id,
                     'value' =>$value,
                     'correct' =>$request->input('correct_'.$q),
                     'hints' =>$request->input('hints'),
                     'explanation' =>$request->input('explanation')
                 ]);
             }
         }
        return redirect()->route('question');
    }

    public function QuestionEdit(){
        $lessons = Lesson::all();
       $questionDetails = DB::table('questions')
           ->join('question_details','question_details.question_id', '=', 'questions.id')
           ->select('questions.*','question_details.*')
           ->get();

        return view('admin.question.question_edit',[
            'lessons'=>$lessons,
            'questionDetails'=>$questionDetails
        ]);
    }

    public function QuestionView(Question $question){
        return view('admin.question.question_view', compact('question'));

    }
}
