<?php


use App\Models\Job;
use Illuminate\Support\Facades\Mail;
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

Route::get('testmail', function(){
    // return new \App\Mail\JobPosted();
    Mail::to('user@example.com')->send(
        new \App\Mail\JobPosted()
    );
    return 'Complete';
});

// create
Route::get('jobs/create',[JobController::class, 'create']);

 // index
 Route::get('/jobs',[JobController::class, 'index']);


// show
Route::get('/jobs/{job}',[JobController::class, 'show']);


 // edit
 Route::get('/jobs/{job}/edit',[JobController::class, 'edit'])->middleware('auth')->can('edit,job');


 // store 
 Route::post('/jobs',[JobController::class, 'store'])->middleware('auth');


// update
Route::patch('/jobs/{job}', [JobController::class, 'update'])->middleware('auth');


// Delete
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth');


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);