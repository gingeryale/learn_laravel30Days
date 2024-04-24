<?php

use Illuminate\Support\Arr;
use App\Models\Job;
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



Route::get('/', function () {
    return view('home');
    
});

Route::get('jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('jobs/{id}', function ($id) {
       
    // \Illuminate\Support\Arr::first($jobs, function($job) use ($id){
    //     return $job['id'] = $id;
    // })
    // return view('jobs/$id');
    // });

    // $job = \Illuminate\Support\Arr::first($jobs, fn($job)=> $job['id'] == $id);
    $job = Arr::first(Job::all(), fn($job)=> $job['id'] == $id);
   // dd($job);

    return view('job',['job'=>$job]);
 });
Route::get('contact', function () {
    return view('contact');
});