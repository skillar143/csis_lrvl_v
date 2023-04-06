<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Program extends Model
{
    use HasFactory;

    protected $fillable =['description'];


     /** relationship */
       public function subjects()
       {
            return $this->hasMany(Subject::class);
    }


       public function students(){
        return $this->hasMany(Student::class);
       }

}




