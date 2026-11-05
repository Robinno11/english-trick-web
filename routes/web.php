<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/program/{slug}', [HomeController::class, 'program'])->name('program.detail');

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::get('/quiz/api/questions', [QuizController::class, 'getQuestions'])->name('quiz.questions');
Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');

Route::post('/daftar', [RegistrationController::class, 'store'])->name('register.store');
