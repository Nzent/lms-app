<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class user extends Model
{
    protected $fillable = [
        'name',
        'email',
        'registration_number',
        'batch',
        'phone',
        'date_of_birth',
        'address',
    ];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'user_courses');
    }
}
