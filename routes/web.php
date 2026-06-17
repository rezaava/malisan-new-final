<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

    Route::get('/', [TestController::class, 'index'])->name('index');
<<<<<<< HEAD
    Route::get('/courses', [TestController::class, 'courses'])->name('courses');
=======
    Route::get('/courses', [TestController::class, 'courses'])->name('courses');
    Route::get('/publics', [TestController::class, 'publics'])->name('publics');
    Route::get('/exams', [TestController::class, 'exams'])->name('exams');
    Route::get('/surveys', [TestController::class, 'surveys'])->name('surveys');
    Route::get('/content', [TestController::class, 'content'])->name('content');
    Route::get('/create-quiz', [TestController::class, 'createQuiz'])->name('createQuiz');
    Route::get('/quizzes', [TestController::class, 'quizzes'])->name('quizzes');



    



>>>>>>> dbfb08111916876ac86d05ba89c8dd583a86cabc
