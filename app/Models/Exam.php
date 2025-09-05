<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $table = 'exams'; 

    protected $fillable =['title', 'descrption' , 'course_id' , 'section_id' , 'start_at' , 'end_at'];
    
}
