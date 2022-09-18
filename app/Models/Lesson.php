<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['start_time'];

    /**
     * Get the student that owns the Lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Get the lessonToken that owns the Lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lesson_tokens(): BelongsTo
    {
        return $this->belongsTo(LessonToken::class, 'lesson_token', 'other_key');
    }

    public function getLessonDate(int $addDate)
    {
        if($addDate == 0) {
            return Carbon::now()->format('Y-m-d');
        } elseif($addDate == 1) {
            return Carbon::tomorrow()->format('Y-m-d');
        } else {
            return Carbon::now()->addDays($addDate)->format('Y-m-d');
        }
    }

    public function getStartTimeAttribute($value) 
    {
       return Carbon::parse($value)->format('H:i');        
    }


    public function getLessons($date)
    {
        return $this->where('date', $date)->orderBy('start_time')->limit(3)->get();
    }
}
