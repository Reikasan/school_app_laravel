<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonToken extends Model
{
    use HasFactory;

    /**
     * Get the lesson associated with the LessonToken
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lesson(): HasOne
    {
        return $this->hasOne(Lesson::class);
    }

    /**
     * Get the payment that owns the LessonToken
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }
}
