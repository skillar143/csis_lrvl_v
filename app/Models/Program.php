<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Program extends Model
{
    use HasFactory;

    protected $fillable =['description'];

    /**
     * Get the subjects for the program.
     *  public function subjects(): HasMany
     *  {
     *       return $this->hasMany(Subject::class);
     *   }
     */
       

}

 

    
