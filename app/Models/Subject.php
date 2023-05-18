<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable =[
        'subject_code',
        'subject_description',
        'subject_laboratory_status',
        'subject_type'];

        public function getType(){

            if( $this->subject_type == 1 ){
             return "RLE Subject";
            }
            return "Regular Subject";

         }

         public function getLabStatus(){

            if( $this->subject_laboratory_status == 1 ){
             return "With Laboratory";
            }
            return "No Laboratory";

         }

/** relationship */

    public function curriculum(){
        return $this->belongsTo(Curriculum::class);
    }

    public function student(){
        return $this->hasMany(Student::class);
    }

}
