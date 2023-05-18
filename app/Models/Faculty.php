<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $fillable =['teacher_id', 'name','sex','cellphone','address'];


    public function facultySubjects()
    {
        return $this->hasMany(Faculty_subject::class, 'id', 'id');
    }

}
