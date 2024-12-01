<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$jobs = [

    [
        'id'    => 1,
        'title' => 'Software Engineer',
        'salary'=> '$30, 000'
    ],

    [
        'id'    => 2,
        'title' => 'Web Developer',
        'salary'=> '$20, 000'
    ], 

    [
        'id'    => 3,
        'title' => 'Web Designer',
        'salary'=> '$10, 000'
    ]
];


Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () use ( $jobs ) {
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ( $id ) use ( $jobs ) {
     
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id );

    return view('job', ['job' => $job ]);
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});

