<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lessons = [
            (object) [
                'id' => 1,
                'student_id' => (object) [
                    'id' => 1,
                    'name' => 'user_1',
                ],
                'date' => '2022-06-11',
                'start_time' => '10:30',
                'lesson_token_id' => 2,
                'created_at' => now(),
            ],
            (object) [
                'id' => 2,
                'student_id' => (object) [
                    'id' => 3,
                    'name' => 'user_3',
                ],
                'date' => '2022-06-11',
                'start_time' => '12:30',
                'lesson_token_id' => 5,
                'created_at' => now(),
            ],
            (object) [
                'id' => 3,
                'student_id' => (object) [
                    'id' => 1,
                    'name' => 'user_1',
                ],
                'date' => '2022-06-15',
                'start_time' => '10:30',
                'lesson_token_id' => 10,
                'created_at' => now(),
            ],
        ];

        // $lessons = Lesson::all()->sortByAsc('date');
        return view('home', ['lessons' => $lessons]);
    }
}
