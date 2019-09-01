<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionDetails extends Model
{
    protected $fillable =['question_id','value','correct','hints','explanation'];
    protected $primaryKey ='qd_id';
}
