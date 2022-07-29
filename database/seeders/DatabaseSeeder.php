<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Course;
use \App\Models\Student;
use \App\Models\Payment;
use \App\Models\LessonToken;
use \App\Models\Lesson;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('courses')->truncate();
        DB::table('students')->truncate();
        DB::table('payments')->truncate();
        DB::table('lessons')->truncate();
        DB::table('lesson_tokens')->truncate();

        Student::factory(20)->create()->each(function($student) {
            Payment::factory(2)->create(['student_id' => $student->id])->each(function($payment) {
                LessonToken::factory(4)->create(['payment_id'=>$payment->id]);
            });
        });

        Course::factory(5)->create();
        Lesson::factory(100)->create();
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
