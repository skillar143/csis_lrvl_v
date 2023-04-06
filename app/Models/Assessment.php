<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;
protected $fillable =['course_id','student_id','subject_id','academic_year'];


public function student(): HasMany
{
    return $this->hasMany(Student::class);
}

}
