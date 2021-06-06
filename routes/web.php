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

// WELCOMEPAGE ROUTES
// Route::get('/', function () {
//     return view('dashboard.seeker');
// });

// EXAMPLES DELETED SOON
// Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');
// Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
// Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');
// Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
// Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

// HOME ROUTES
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index'); // GET HOMEPAGE
Route::get('/home-seeker', [App\Http\Controllers\HomeController::class, 'seeker'])->name('seeker')->middleware('seeker'); // GET HOMEPAGE SEEKER
Route::get('/home-company', [App\Http\Controllers\HomeController::class, 'company'])->name('company')->middleware('company'); // GET HOMEPAGE COMPANY (AUTH AS COMPANY)
Route::get('/home-admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('admin'); // GET HOMEPAGE ADMIN (AUTH AS ADMIN)

// REGISTER ROUTES
Route::get('/register-seeker', [App\Http\Controllers\Auth\RegisterController::class, 'seeker'])->name('auth.register.seeker'); // GET HOMEPAGE
Route::get('/register-company', [App\Http\Controllers\Auth\RegisterController::class, 'company'])->name('auth.register.company'); // GET HOMEPAGE
Route::post('/register-seeker', [App\Http\Controllers\Auth\RegisterController::class, 'createSeeker'])->name('auth.register.createSeeker'); // GET HOMEPAGE
Route::post('/register-company', [App\Http\Controllers\Auth\RegisterController::class, 'createCompany'])->name('auth.register.createSeeker'); // GET HOMEPAGE

// LOGIN-LOGOUT ROUTES
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('auth.login.index'); // GET LOGIN PAGE
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.login.logout'); // LOGOUT
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('auth.login.login'); // LOGIN

// Route::group(['middleware' => 'auth'], function () {
 
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
//     Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
 
// });

// JOB ROUTES
Route::get('/jobs', [App\Http\Controllers\JobController::class, 'index'])->name('jobs.index'); // GET ALL JOB RECORD
Route::get('/jobs/create', [App\Http\Controllers\JobController::class, 'create'])->name('jobs.create')->middleware('company'); // GET FORM CREATE JOB (AUTH AS COMPANY)
Route::get('/jobs/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('jobs.show')->middleware('auth'); // GET JOB BASED ON ID (AUTH)
Route::post('/jobs', [App\Http\Controllers\JobController::class, 'store'])->name('jobs.store')->middleware('company'); // POST JOB FORM (AUTH AS COMPANY)
Route::delete('/jobs/{id}', [App\Http\Controllers\JobController::class, 'destroy'])->name('jobs.destroy')->middleware('company'); // DELETE JOB RECORD BASED ON ID (AUTH AS COMPANY)

// REQUEST ROUTES
Route::get('/requests', [App\Http\Controllers\RequestController::class, 'index'])->name('requests.index'); // GET ALL REQUEST RECORD
Route::get('/requests/create', [App\Http\Controllers\RequestController::class, 'create'])->name('requests.create')->middleware('seeker'); // GET FORM CREATE REQUEST (AUTH AS SEEKER)
Route::get('/requests/{id}', [App\Http\Controllers\RequestController::class, 'show'])->name('requests.show')->middleware('auth'); // GET REQUEST BASED ON ID (AUTH)
Route::post('/requests', [App\Http\Controllers\RequestController::class, 'store'])->name('requests.store')->middleware('seeker'); // POST REQUEST FORM (AUTH AS SEEKER)
Route::delete('/requests/{id}', [App\Http\Controllers\RequestController::class, 'destroy'])->name('requests.destroy')->middleware('admin'); // DELETE REQUEST BASED ON ID (AUTH AS ADMIN)

// USER ROUTES
Route::get('/users', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('users.index')->middleware('admin'); // GET ALL USER RECORD (AUTH AS ADMIN)
Route::get('/users/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'show'])->name('users.show')->middleware('auth'); // GET USER BASED ON ID (AUTH)
Route::delete('/users/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'destroy'])->name('users.destroy')->middleware('admin'); // DELETE USER BASED ON ID (AUTH AS ADMIN)
