<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

    Route::get('/', [TestController::class, 'index'])->name('index');
    Route::get('/courses', [TestController::class, 'courses'])->name('courses');