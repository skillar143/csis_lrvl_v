<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty_subject extends Model
{
    use HasFactory;

    protected $fillable =[
        'subject_id', 
        'course_id', 
        'teacher_id'];

        /** relationship */
        public function subjects(){
            return $this->hasOne(Subject::class,'id' ,'subject_id');
        }

        public function programs(){
            return $this->hasOne(Program::class,'id' ,'course_id');
        }

        public function faculty()
        {
            return $this->belongsTo(Faculty::class, 'teacher_id', 'id');
        }
        
}
