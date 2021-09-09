<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course ;

class Chapter extends Model
{
    use HasFactory;

    public function Course(){

        return $this->belongsTo(Course::class);
    
     }
}
