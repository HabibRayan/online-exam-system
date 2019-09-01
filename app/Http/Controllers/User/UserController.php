<?php

namespace App\Http\Controllers\User;

use App\Models\QuestionDetails;
use App\Models\Lesson;
use App\Models\Question;
use App\Register;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use Illuminate\Support\Facades\Session;

//use App\Http\Requests\OuestionRequest;

class UserController extends Controller
{
    public function index()

    {
        $register = Register::all();
        $lesson = Lesson::all();
        return view('user.home.index', compact('register', 'lesson'));
    }

    public function seeMore($id)
    {
        $lessons = Lesson::find($id);

        return view('user.home.see_more', compact('lessons'));
    }

    public function test(Lesson $lesson)
    {
        return view('user.home.test', compact('lesson'));

    }

    public function lessonTest(Request $request)
    {
        $score =0;
        $answers = \DB::table('question_details')
            ->whereIn('qd_id',$request->answer)
            ->get();
        $groupByAnswer = $answers->groupBy('question_id');

        foreach ($groupByAnswer as $answer){
            $right = collect($answer)->every(function ($value, $key) {
                return $value->correct > 0;
            });
           if($right){
               $score ++;
           }
        }



        $scoreResult =$score;
        $lessonid = $request->input('lesson_id');

        return redirect('/user/score')->with(['lessonid' => $lessonid, 'scoreResult'=>$scoreResult]);
    }
    public function lessonTestScore(){

    $scores = Session::all();
//    dd($scores['scoreResult'],$scores['lessonid']);


        return view('user.home.score',compact('scores'));
    }

    public function questionAdd($id){
        $lessons = Lesson::find($id);


        return view('user.home.question_add',['lessons' =>$lessons]);
    }

    public function questionStore(Request $request){
        $this->validate($request,[
            'question' =>'required',
            'hints' =>'required',
            'explanation' =>'required',
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
        return view('user.home.success_message');
    }

    public function questionStoreSuccesMessage(){
        return view('user.home.success_message');
    }


}
