<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User ;
use App\Models\Chapter ;

class Course extends Model
{
    use HasFactory;


    public function Category(){

        return $this->belongsTo(Category::class);
    
     }
     
     public function Tutor(){

        return $this->belongsTo(Tutor::class);
    
     }
     /**
      * Get all of the enrolements for the Course
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasMany
      */
     public function Enrolments()
     {
         return $this->hasMany(Enrolement::class) ; 
     }

     public function Chapters()
     {
         return $this->hasMany(Chapter::class) ; 
     }

}