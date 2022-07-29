<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\LessonToken;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->randomElement(Student::pluck('id')),
            'date' => $this->faker->dateTimeBetween('-1 month', '+2 week'),
            'start_time' => $this->faker->time('H:i'),
            'lesson_token_id' => $this->faker->randomElement(LessonToken::pluck('id')),
        ];
    }
}
