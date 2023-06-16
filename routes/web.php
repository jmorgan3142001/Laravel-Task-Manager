<?php

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

// Route::get('/', function () {
//     return view('index');
// });

use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::delete('/task/{id}/delete', [TaskController::class, 'delete'])->name('tasks.delete');
Route::post('/task', [TaskController::class, 'store'])->name('tasks.store');
Route::put('/task/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/task/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::patch('/tasks/reorder', [TaskController::class, 'reorder']);
