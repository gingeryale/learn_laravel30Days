<?php


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

// add a job - Create
Route::get('jobs/create', function () {
    return view('jobs.create');
 });

 // show all jobs -Index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(5);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// view specific job - Show
Route::get('/jobs/{job}', function (Job $job) {
    // wildcard + paramter and class TYPE// default wildcard is id
    // $job = Job::find($id);
    return view('jobs.show',['job'=>$job]);
 });

 // edit a job
 Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
 
     return view('jobs.edit',['job'=>$job]);
  });

 // store a new job
Route::post('/jobs', function(){
    // dd(request()->all());
    // VALIDATION
    request()->validate([
        'title'=>['required','min:3'],
        'salary'=>['required', 'min:3']
    ]);
    Job::create([
        'title'=>request('title'),
        'salary'=>request('salary'),
        'employer_id'=>1
    ]);
    return redirect('/jobs');
});


// Update
Route::patch('/jobs/{id}', function ($id) {
   // validate
   request()->validate([
    'title'=>['required','min:3'],
    'salary'=>['required', 'min:3']
]);
// authorize

// update
$job = Job::findOrFail($id); // couod be null
// persist
$job->update([
    'title'=>request('title'),
    'salary'=>request('salary')
]);
// redirect
     return redirect('/jobs/'.$job->id);
  });

// Delete
Route::delete('/jobs/{job}', function (Job $job) {
   // auth
   // delete job
   // Job::findOrFail($id)->delete();
    $job->delete();//$job = Job::findOrFail($id);
   // $job->delete();   
   // redirect
   return redirect('/jobs');
  });

Route::get('/contact', function () {
    return view('contact');
});