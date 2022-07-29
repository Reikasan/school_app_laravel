<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'birthday' => $this->faker->date(),
            'tel' => $this->faker->randomNumber(8, true),
            'email' => $this->faker->email(),
            'course_id' => $this->faker->numberBetween(1,5),
            'start_date' => $this->faker->date(),
        ];
    }
}
