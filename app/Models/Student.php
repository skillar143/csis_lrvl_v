<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Student extends Model
{
    use HasFactory;

    protected $fillable =['student_id','name','program_id','cellphone','sex','bday','bplace','address','status','year'];


    /** relationship */
    public function getYear(){

        if( $this->year == 1){
         return "1st";
        }

        if( $this->year == 2){
            return "2nd";
           }
           if( $this->year == 3){
            return "3rd";
           }
           if( $this->year == 4){
            return "4th";
           }

     }

    public function program()
    {
        return $this->belongsTo(Program::class,'program_id' );
    }

}
