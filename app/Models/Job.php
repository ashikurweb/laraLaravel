<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

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


    public static function find ( $id ) 
    {
        return Arr::first(Job::all(), fn( $job ) => $job['id'] = $id );
    }
}

