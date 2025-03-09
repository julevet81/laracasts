<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\job;



Route::get('/', function () {
    return view('welcome');

});

Route::get('/jobs', function ()  {
    return view('jobs', [
        'jobs'=> job::all()
    ]);

});

Route::get('/jobs/{id}', function ($id)  {
    $jobs = job::all();
    $job = Arr::first($jobs,fn( $job) => $job['id'] == $id);
    return view('job', ['job' => $job]); 

});

Route::get('/contact', function () {
    return view('contact');

});

Route::get('/about', function () {
    return view('about');

});