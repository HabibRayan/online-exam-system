<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;
    protected $primaryKey = 'category_id';

    public function sluggable()
    {
        return [
            'category_slug' => [
                'source' => 'category_name'
            ]
        ];
    }

    public function lessons(){
        return $this->hasMany(Lesson::class, 'lesson_category_id', 'category_id'); // 'App\Models\Question'
    }
}
