<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submition extends Model
{
    use HasFactory;

    protected $table ='submitions'; 

    protected $fillable = ['user_id', 'exam_id','status','score','submitted_at','started_at'];

    protected $timestamps =false; 
     
}
