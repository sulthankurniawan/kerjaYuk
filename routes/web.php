<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PizzaController;

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

// WELCOMEPAGE ROUTES DELETED WHEN NOT NEEDED
Route::get('/', function () {
    return view('welcome');
});

// EXAMPLES DELETED SOON
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

// Auth::routes([
//     'register' => false
// ]);

// HOME ROUTES
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// JOB ROUTES
Route::get('/job', [App\Http\Controllers\JobController::class, 'index'])->name('job.index');
Route::get('/job/create', [App\Http\Controllers\JobController::class, 'create'])->name('job.create')->middleware('company');
Route::get('/job/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('job.show')->middleware('company');
Route::post('/job', [App\Http\Controllers\JobController::class, 'store'])->name('job.store')->middleware('company');
Route::delete('/job/{id}', [App\Http\Controllers\JobController::class, 'destroy'])->name('job.destroy')->middleware('company');

// REQUEST ROUTES
Route::get('/request', [App\Http\Controllers\RegisterController::class, 'index'])->name('register.index');
Route::get('/request/create', [App\Http\Controllers\RegisterController::class, 'create'])->name('register.create');
Route::get('/request/{id}', [App\Http\Controllers\RegisterController::class, 'show'])->name('register.show');
Route::post('/request', [App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');
Route::delete('/request/{id}', [App\Http\Controllers\RegisterController::class, 'destroy'])->name('register.destroy');

// USER ROUTES
Route::get('/user', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('job.index');
Route::get('/user/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'show'])->name('job.show');
Route::delete('/user/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'destroy'])->name('job.destroy');