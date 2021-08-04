<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User ;

class Course extends Model
{
    use HasFactory;


    public function Category(){

        return $this->belongsTo(Category::class);
    
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
}