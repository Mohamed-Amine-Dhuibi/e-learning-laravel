<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course ;
use App\Models\User ;


class Enrolement extends Model
{
    use HasFactory;



    /**
     * Get the user that owns the Enrolement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the Course that owns the Enrolement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Course()
    {
        return $this->belongsTo(Course::class);
    }
}
