<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Job 
{
    public static function all () : array
    {
        return [

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
    }
}


Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ( $id ) {
     
    $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id );

    return view('job', ['job' => $job ]);
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});

