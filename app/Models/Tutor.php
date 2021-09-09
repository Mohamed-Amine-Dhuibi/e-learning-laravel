<?php

namespace App\Models;

use App\Models\Course ;
use App\Models\User ;

class Tutor extends User
{

    public static function booted()
    {
        static::addGlobalScope('tutor', function ($builder) {
            $builder->where('privilege', 'tutor');
        });

        static::creating(function ($tutor) {
            $tutor->privilege = 'tutor' ;
        }); 
    }
    /**
     * Get all of the Courses for the Tutor
     *
     */
    public function Courses()
    {
        return $this->hasMany(Course::class) ;
    }
}
