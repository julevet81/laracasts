<?php

use App\Models\Employer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\job;



Route::get('/', function () {


    return view('welcome');

});

Route::get('/jobs', function ()  {
    $jobs =job::with('employer')->latest()->simplePaginate(4);
    return view('jobs.index', [
        'jobs'=> $jobs
    ]);

});

Route::get('/jobs/create', function(){
    return view('jobs.craete');
});

Route::get('/jobs/{id}', function ($id)  {
    $jobs = job::all();
    $job = Arr::first($jobs,fn( $job) => $job['id'] == $id);
    return view('jobs.show', ['job' => $job]);

});

Route::post('/jobs', function(){
    job::create([
        'title' => request('title'),
        'sallery' => request('sallery'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');

});

Route::get('/about', function () {
    return view('about');

});
