<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grading_status extends Model
{
    use HasFactory;

    protected $fillable =[
        'status', 
        'term'];

        public function getStatus(){  
        
            if( $this->status == 1 ){
             return "Close";  
            }
            return "Open";  
            
         }
        
         public function getTerm(){  
        
            if( $this->term == 0 ){
             return "Prelim";  
            }

            if( $this->term == 1 ){
                return "Midterm";  
               }

            if( $this->term == 2 ){
                return "Finals";  
               } 
         }
}
