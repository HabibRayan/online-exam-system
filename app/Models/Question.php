<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
//    protected $primaryKey = 'question_id';
    protected $fillable =['lesson_id','question','score'];
    /*public function lesson(){
        return $this->belongsTo(Lesson::class, 'question_lesson_id', 'lesson_id'); // 'App\Models\Question'
    }*/

    public function lesson(){
        return $this->hasOne(Lesson::class, 'lesson_id', 'lesson_id');
    }

    public  function questions(){
        return $this->hasMany(QuestionDetails::class, 'question_id', 'id');
    }

}
