<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentResultController;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [StudentResultController::class, 'create'])->name('create');

Route::post('/store', [StudentResultController::class, 'store'])->name('store');

Route::get('/student-result/{id}', [StudentResultController::class, 'show'])->name('show');