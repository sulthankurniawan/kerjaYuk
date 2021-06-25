<?php

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

// TESTING ROUTES
// Route::get('/', function () {
//     return view('users.profile.seeker-v2.index');
// });

// EXAMPLES DELETED SOON
// Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');
// Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
// Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');
// Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
// Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

// WELCOMEPAGE ROUTES
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index'); // GET WELCOMEPAGE *DONE
Route::get('/cari', [App\Http\Controllers\HomeController::class, 'welcomeCompany'])->name('cari'); // GET WELCOMEPAGE *DONE

// HOME ROUTES
Route::get('/home-seeker', [App\Http\Controllers\HomeController::class, 'seeker'])->name('home.seeker')->middleware('seeker'); // GET HOMEPAGE SEEKER (AUTH AS SEEKER) *DONE
Route::get('/home-company', [App\Http\Controllers\HomeController::class, 'company'])->name('home.company')->middleware('company'); // GET HOMEPAGE COMPANY (AUTH AS COMPANY)
Route::get('/home-admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('home.admin')->middleware('admin'); // GET HOMEPAGE ADMIN (AUTH AS ADMIN)

// LOGIN-LOGOUT ROUTES
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login'); // GET LOGIN PAGE *DONE
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']); // LOGOUT *DONE
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']); // LOGIN *DONE

// REGISTER ROUTES
Route::get('/register-seeker', [App\Http\Controllers\Auth\RegisterController::class, 'seeker'])->name('register.seeker'); // GET REGISTER PAGE FOR SEEKER *DONE
Route::get('/register-company', [App\Http\Controllers\Auth\RegisterController::class, 'company'])->name('register.company'); // GET REGISTER PAGE FOR COMPANY *DONE
Route::post('/register-seeker', [App\Http\Controllers\Auth\RegisterController::class, 'createSeeker'])->name('register.createSeeker'); // POST REGISTER FORM FOR SEEKER *DONE
Route::post('/register-company', [App\Http\Controllers\Auth\RegisterController::class, 'createCompany'])->name('register.createSeeker'); // POST REGISTER FORM FOR COMPANY *DONE

// USER ROUTES
Route::get('/users/seeker', [App\Http\Controllers\UserController::class, 'seeker'])->name('users.seeker')->middleware('admin'); // GET SEEKER USER RECORD (AUTH AS ADMIN)
Route::get('/users/company', [App\Http\Controllers\UserController::class, 'company'])->name('users.company')->middleware('admin'); // GET COMPANY USER RECORD (AUTH AS ADMIN)
Route::get('/users/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('users.profile')->middleware('auth'); // GET PROFILE PAGE (AUTH) FOR SEEKER AND COMPANY
Route::get('/users/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit')->middleware('auth'); // GET EDIT BIOGRAPHY FORM (AUTH) FOR SEEKER AND COMPANY
Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show')->middleware('auth'); // GET USER BASED ON ID (AUTH) FOR ADMIN AND COMPANY
Route::post('/users', [App\Http\Controllers\UserController::class, 'update'])->name('users.update')->middleware('auth'); // POST EDIT BIOGRAPHY (AUTH) FOR SEEKER AND COMPANY
Route::post('/users/suspend/{id}', [App\Http\Controllers\UserController::class, 'suspend'])->name('users.suspend')->middleware('admin'); // POST SUSPEND USER (AUTH AS ADMIN)
Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy')->middleware('admin'); // DELETE USER BASED ON ID (AUTH AS ADMIN)

// EXPERIENCE ROUTES
Route::get('/experiences', [App\Http\Controllers\ExperienceController::class, 'create'])->name('experience.create')->middleware('seeker'); // GET EDIT EXPERIENCE FORM (AUTH) FOR SEEKER AND COMPANY
Route::post('/experiences', [App\Http\Controllers\ExperienceController::class, 'store'])->name('experience.store')->middleware('seeker'); // POST EDIT EXPERIENCE (AUTH) FOR SEEKER AND COMPANY
Route::delete('/experiences/{id}', [App\Http\Controllers\ExperienceController::class, 'destroy'])->name('experience.destroy')->middleware('seeker'); // DELETE EXPERIENCE (AUTH) FOR SEEKER AND COMPANY

// EXPERTICE ROUTES
Route::get('/expertices', [App\Http\Controllers\ExperticeController::class, 'create'])->name('expertise.create')->middleware('seeker'); // GET EDIT EXPERTISE FORM (AUTH) FOR SEEKER AND COMPANY
Route::post('/expertices', [App\Http\Controllers\ExperticeController::class, 'store'])->name('expertise.store')->middleware('seeker'); // POST EDIT EXPERTISE (AUTH) FOR SEEKER AND COMPANY
Route::delete('/expertices/{id}', [App\Http\Controllers\ExperticeController::class, 'destroy'])->name('expertise.destroy')->middleware('seeker'); // DELETE EXPERTISE (AUTH) FOR SEEKER AND COMPANY

// JOB ROUTES
Route::get('/jobs', [App\Http\Controllers\JobController::class, 'index'])->name('jobs.index'); // GET ALL JOB RECORD *DONE
Route::get('/jobs/create', [App\Http\Controllers\JobController::class, 'create'])->name('jobs.create')->middleware('company'); // GET FORM CREATE JOB (AUTH AS COMPANY) *DONE
Route::get('/jobs/career/{number}', [App\Http\Controllers\JobController::class, 'showByCareer'])->name('jobs.career'); // GET ALL JOB RECORD BY CAREER *DONE
Route::get('/jobs/show/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('jobs.show')->middleware('auth'); // GET JOB BASED ON ID (AUTH) FOR ADMIN AND SEEKER *DONE
Route::get('/jobs/detail/{id}', [App\Http\Controllers\JobController::class, 'detail'])->name('jobs.detail')->middleware('company'); // GET JOB BASED ON ID (AUTH AS COMPANY) *DONE
Route::get('/jobs/edit/{id}', [App\Http\Controllers\JobController::class, 'edit'])->name('jobs.edit')->middleware('auth'); // GET JOB BASED ON ID (AUTH) *DONE
Route::post('/jobs', [App\Http\Controllers\JobController::class, 'store'])->name('jobs.store')->middleware('company'); // POST JOB FORM (AUTH AS COMPANY) *DONE
Route::post('/jobs/{id}', [App\Http\Controllers\JobController::class, 'update'])->name('jobs.update')->middleware('company'); // POST JOB FORM (AUTH AS COMPANY) *DONE
Route::post('/jobs/display/{id}', [App\Http\Controllers\JobController::class, 'display'])->name('jobs.display')->middleware('company'); // POST CHANGE JOB DISPLAY STATUS (AUTH AS COMPANY) *DONE
Route::post('/jobs/suspend/{id}', [App\Http\Controllers\JobController::class, 'suspend'])->name('jobs.suspend')->middleware('admin'); // POST SUSPEND JOB (AUTH AS ADMIN)
Route::delete('/jobs/destroy/{id}', [App\Http\Controllers\JobController::class, 'destroy'])->name('jobs.destroy')->middleware('company'); // DELETE JOB RECORD BASED ON ID (AUTH AS COMPANY) *DONE

// REQUEST ROUTES
Route::get('/requests', [App\Http\Controllers\RequestController::class, 'index'])->name('requests.index')->middleware('seeker'); // GET ALL REQUEST RECORD BY USER ID (AUTH AS SEEKER) *DONE
Route::get('/requests/create/{job_id}', [App\Http\Controllers\RequestController::class, 'create'])->name('requests.create')->middleware('seeker'); // GET FORM CREATE REQUEST (AUTH AS SEEKER) *DONE
Route::get('/requests/{id}', [App\Http\Controllers\RequestController::class, 'show'])->name('requests.show')->middleware('company'); // GET REQUEST BASED ON ID (AUTH AS COMPANY) *DONE
Route::get('/requests/detail/{id}', [App\Http\Controllers\RequestController::class, 'detail'])->name('requests.detail')->middleware('seeker'); // GET REQUEST BASED ON ID (AUTH AS SEEKER) *DONE
Route::post('/requests', [App\Http\Controllers\RequestController::class, 'store'])->name('requests.store')->middleware('seeker'); // POST REQUEST FORM (AUTH AS SEEKER) *DONE
Route::post('/requests/wishlist/{id}', [App\Http\Controllers\RequestController::class, 'wishlist'])->name('requests.wishlist')->middleware('company'); // POST REQUEST FORM (AUTH AS SEEKER) *DONE
Route::post('/requests/respond/{id}', [App\Http\Controllers\RequestController::class, 'respond'])->name('requests.respond')->middleware('company'); // POST REQUEST FORM (AUTH AS COMPANY) *DONE
Route::delete('/requests/{id}', [App\Http\Controllers\RequestController::class, 'destroy'])->name('requests.destroy')->middleware('admin'); // DELETE REQUEST BASED ON ID (AUTH AS ADMIN)

// REPORT ROUTES
Route::get('/reports/{object}/{id}', [App\Http\Controllers\ReportController::class, 'index'])->name('reports.index')->middleware('auth'); // GET ALL REPORT RECORD (AUTH) FOR SEEKER AND COMPANY *DONE
Route::get('/reports/jobs/{report_id}/{whistleblower_id}/{reported_job_id}', [App\Http\Controllers\ReportController::class, 'showJob'])->name('reports.show.jobs')->middleware('admin'); // GET JOBS REPORT BASED ON ID (AUTH AS ADMIN)
Route::get('/reports/users/{report_id}/{whistleblower_id}/{reported_user_id}', [App\Http\Controllers\ReportController::class, 'showUser'])->name('reports.show.users')->middleware('admin'); // GET USERS REPORT BASED ON ID (AUTH AS ADMIN)
Route::post('/reports/{object}', [App\Http\Controllers\ReportController::class, 'store'])->name('reports.store')->middleware('auth'); // POST REPORT FORM (AUTH) FOR SEEKER AND COMPANY *DONE
Route::post('/reports/read/{id}', [App\Http\Controllers\ReportController::class, 'read'])->name('reports.read')->middleware('admin'); // POST REPORT READ STATUS FORM (AUTH AS ADMIN) 
Route::delete('/reports/destroy/{id}', [App\Http\Controllers\ReportController::class, 'destroy'])->name('reports.destroy')->middleware('admin'); // DELETE REPORT BASED ON ID (AUTH AS ADMIN)