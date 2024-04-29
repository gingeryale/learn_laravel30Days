<?php


use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

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



Route::get('/', function () {
    return view('home');
    
});

// create
Route::get('jobs/create',[JobController::class, 'create']);

 // index
 Route::get('/jobs',[JobController::class, 'index']);


// show
Route::get('/jobs/{job}',[JobController::class, 'show']);


 // edit
 Route::get('/jobs/{job}/edit',[JobController::class, 'edit']);


 // store 
 Route::post('/jobs',[JobController::class, 'store']);


// update
Route::patch('/jobs/{job}', [JobController::class, 'update']);


// Delete
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);