<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\LessonController::class, 'index'])->name('index');
// Route::get('/#today', [App\Http\Controllers\LessonController::class, 'showTodaysLessons'])->name('todaysLesson');
// Route::get('/#tomorrow', [App\Http\Controllers\LessonController::class, 'showTomorrowsLessons'])->name('tomorrowsLesson');
// Route::get('/#twoMoreDay', [App\Http\Controllers\LessonController::class, 'show+2daysLessons'])->name('plus2daysLesson');
Route::get('/menu/', [App\Http\Controllers\HomeController::class, 'index'])->name('menu');
