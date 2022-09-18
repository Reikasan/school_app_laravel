<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * Get all of the lessonToken for the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessonTokens(): HasMany
    {
        return $this->hasMany(LessonToken::class, 'lesson_token');
    }
}
