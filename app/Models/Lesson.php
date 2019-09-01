<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $primaryKey = 'lesson_id';

    public function questionInfo(){
        return $this->hasMany(Question::class, 'lesson_id', 'lesson_id'); // 'App\Models\Question'
    }



    public function category(){
        return $this->belongsTo(Category::class, 'lesson_category_id', 'category_id'); // 'App\Models\Question'
    }

}
