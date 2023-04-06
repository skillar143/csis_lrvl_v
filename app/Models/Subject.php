<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable =['subject_code', 'subject_description'];


/** relationship */

    public function curriculum(){
        return $this->belongsTo(Curriculum::class);
    }

    public function student(){
        return $this->hasMany(Student::class);
    }

}
