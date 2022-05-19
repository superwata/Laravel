<?php
 
use Illuminate\Support\Facades\Auth;
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
 
Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');
Route::post('/task', [App\Http\Controllers\TaskController::class, 'store'])->name('task');
Route::delete('/task/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('/task/{task}');