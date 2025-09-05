<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons'; 
    protected $fillable = ['section_id' , 'title' , 'description' , 'article' ,'video_url' ];
}
