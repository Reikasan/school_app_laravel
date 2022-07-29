<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Payment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\lessonToken>
 */
class LessonTokenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'payment_id' => $this->faker->randomElement(Payment::pluck('id')),
            'is_used' => $this->faker->boolean(),
        ];
    }
}
