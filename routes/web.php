<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Маршрут для главной страницы
Route::get('/', [HomeController::class, 'index'])->name('home');

// Маршрут для страницы "О нас"
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Ресурсные маршруты для TaskController
Route::resource('tasks', TaskController::class)->where(['task' => '[0-9]+']);

// Или правильная версия для ограничения id:
Route::resource('tasks', TaskController::class)->where(['id' => '[0-9]+']);
