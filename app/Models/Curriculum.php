<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $fillable =['course_id','subject_id','year','semester','units'];



    public function subjects(){
        return $this->hasOne(Subject::class,'id' ,'subject_id');
    }
}
