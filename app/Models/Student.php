<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * Get all of the lesson for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lesson(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    /**
     * Get all of the payment for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payment(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * Get the course that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
