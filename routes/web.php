<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', function () { 
    //here used get for get some data from anywahe
    return view('task');
});

Route::post('/saveTask', [TaskController::class, 'store']); 
// here stor is method 
//saveTask is route
