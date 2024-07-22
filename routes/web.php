<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'view']) ->name('pages.home');

Route::get('/animals', [AnimalController::class, 'index']) ->name('pages.animals.index');

Route::get('/animals/{id}', [AnimalController::class, 'show']) ->name('pages.animals.show');




