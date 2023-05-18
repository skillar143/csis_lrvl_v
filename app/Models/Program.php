<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Program extends Model
{
    use HasFactory;

    protected $fillable =[
        'description',
        'rle_status'
    ];

    public function getStatus(){

        if( $this->rle_status == 0){
         return "No RLE";
        }
        return "With RLE";

     }

     /** relationship */
       public function subjects()
       {
            return $this->hasMany(Subject::class);
    }


       public function students(){
        return $this->belongsTo(Student::class);
       }


}




