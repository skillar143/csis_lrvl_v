<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Student extends Model
{
    use HasFactory;

    protected $fillable =['student_id','name','cellphone','sex','bday','bplace','address','status'];


    /** relationship */
    public function program(){
        return $this->belongsTo(Program::class);
    }

}
