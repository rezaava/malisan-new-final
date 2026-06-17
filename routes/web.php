<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeacherSiteController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/loginPost', [AuthController::class, 'loginPost'])->name('loginPost');
Route::post('/registerPost', [AuthController::class, 'registerPost'])->name('registerPost');


Route::get('/', [TestController::class, 'index'])->name('index');
Route::get('/courses', [TestController::class, 'courses'])->name('courses');
Route::get('/publics', [TestController::class, 'publics'])->name('publics');
Route::get('/exams', [TestController::class, 'exams'])->name('exams');
Route::get('/surveys', [TestController::class, 'surveys'])->name('surveys');
Route::get('/content', [TestController::class, 'content'])->name('content');
Route::get('/create-quiz', [TestController::class, 'createQuiz'])->name('createQuiz');
Route::get('/quizzes', [TestController::class, 'quizzes'])->name('quizzes');



Route::prefix('/teacher')->group(function () {
    Route::get('/', [TeacherSiteController::class, 'index'])->name('index_teacher');
});