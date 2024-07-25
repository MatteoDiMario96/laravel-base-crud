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
Route::post('/animals', [AnimalController::class, 'store']) ->name('animals.store');
Route::get('/animals/create', [AnimalController::class, 'create']) ->name('pages.animals.create');
Route::get('/animals/trash', [AnimalController::class, 'deletedIndex']) ->name('pages.animals.trash-index');
Route::get('/animals/{animal}', [AnimalController::class, 'show']) ->name('pages.animals.show');
Route::put('/animals/{animal}', [AnimalController::class, 'update']) ->name('animals.update');
Route::delete('/animals/{animal}', [AnimalController::class, 'destroy']) ->name('animals.destroy');
Route::patch('/animals/{animal}/restore', [AnimalController::class, 'restore']) ->name('animals.restore');
Route::get('/animals/{animal}/edit', [AnimalController::class, 'edit']) ->name('pages.animals.edit');
Route::delete('/animals/{animal}/permanent-delete', [AnimalController::class, 'permanentDelete']) ->name('animals.permanent-delete');








