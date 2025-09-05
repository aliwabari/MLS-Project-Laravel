<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_answer extends Model
{
    use HasFactory;


    protected $table ='student_answers'; 

    protected $fillable =['exam_id' , 'question_id','user_id','option_id' , 'answer'];

    protected $timestamps =false; 
}
